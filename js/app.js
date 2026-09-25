// app.js — vanilla-JS renderer for the fhir.ch IG registry.
//
// Replaces the DCLogic framework. Reads window.FHIR_CH_IGS (populated by
// js/load-data.js), holds UI state, renders the registry section into
// the static HTML mount points.

(function () {
  'use strict';

  // ─── State ──────────────────────────────────────────────────────
  const state = {
    view: 'all',           // 'all' | 'published' | 'ballot'
    ballotKind: 'all',     // 'all' | 'stu' | 'dstu'
    search: '',
    fhirFilter: ''         // '' | '4.0.1' | '5.0.0'
  };

  function setState(patch) {
    Object.assign(state, patch);
    render();
  }

  // ─── Helpers ────────────────────────────────────────────────────
  // IGs pinned to the top of their org group (in this order).
  const PINNED_IDS = ['ch.fhir.ig.ch-term', 'ch.fhir.ig.ch-core'];
  function pinIndex(ig) {
    const i = PINNED_IDS.indexOf(ig.identifier);
    return i === -1 ? Infinity : i;
  }
  const MONTHS = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];

  function fmtDate(iso) {
    if (!iso) return '—';
    const d = new Date(iso);
    if (isNaN(d)) return iso;
    return `${String(d.getDate()).padStart(2,'0')} ${MONTHS[d.getMonth()]} ${d.getFullYear()}`;
  }

  // Swiss / German calendar style: 'YYYY-MM-DD' → 'DD.MM.YYYY'. Used for
  // ballot-cycle tooltips so dates match the HL7.ch ballot calendar.
  function fmtDateDe(iso) {
    const m = /^(\d{4})-(\d{2})-(\d{2})$/.exec(iso || '');
    return m ? `${m[3]}.${m[2]}.${m[1]}` : iso;
  }

  function escapeHtml(s) {
    return String(s == null ? '' : s)
      .replace(/&/g, '&amp;')
      .replace(/</g, '&lt;')
      .replace(/>/g, '&gt;')
      .replace(/"/g, '&quot;')
      .replace(/'/g, '&#39;');
  }

  // ─── Search ─────────────────────────────────────────────────────
  // Case- and diacritic-insensitive fold, applied to both the query and the
  // data. NFD splits "ü" into "u" + U+0308, so stripping the combining-mark
  // range makes "Zürich" and "Zurich" the same key. 'ß' has no
  // decomposition, so map it explicitly.
  function fold(s) {
    return String(s == null ? '' : s)
      .normalize('NFD')
      .replace(/[\u0300-\u036f]/g, '')
      .replace(/\u00df/g, 'ss')
      .toLowerCase();
  }

  // So "R4" / "R5" find IGs whose data carries only the numeric version.
  const FHIR_ALIASES = { '4.0.1': 'r4', '4.3.0': 'r4b', '5.0.0': 'r5' };

  // Ballot-type synonyms. The badge says DSTU BALLOT, but upstream's own
  // package-list.json calls the same thing an "Informative Ballot", so both
  // words have to find it.
  const BALLOT_WORDS = { stu: 'stu trial use', dstu: 'dstu informative' };

  // GitHub owner + repo out of a source URL, so "ahdis", "cara-ch",
  // "umzhconnect" or "seicodyne" find the IGs those orgs publish — without
  // dragging "https" / "github" / "com" into every haystack.
  function repoWords(url) {
    const m = /github\.com\/([^/]+)\/([^/#?]+)/i.exec(url || '');
    return m ? `${m[1]} ${m[2]}` : '';
  }

  // Searchable fields, and the prefixes that scope a term to one of them.
  // "wg:epd" only looks at the workgroup; "epd" looks everywhere.
  const SEARCH_FIELDS = ['name', 'id', 'desc', 'org', 'wg', 'version', 'fhir', 'status'];
  // Every spelling anyone might reasonably type, mapped to its canonical
  // field. Hyphenated forms are allowed, so the prefix pattern below accepts
  // '-' as well as letters.
  const FIELD_ALIASES = {
    name: 'name', title: 'name', ig: 'name', igname: 'name', 'ig-name': 'name',
    id: 'id', pkg: 'id', package: 'id', packageid: 'id', 'package-id': 'id', repo: 'id',
    desc: 'desc', description: 'desc', text: 'desc',
    org: 'org', organization: 'org', organisation: 'org', publisher: 'org',
    wg: 'wg', workgroup: 'wg', 'work-group': 'wg', group: 'wg',
    ag: 'wg', arbeitsgruppe: 'wg',
    version: 'version', v: 'version', ver: 'version',
    fhir: 'fhir', fhirversion: 'fhir', 'fhir-version': 'fhir', release: 'fhir',
    status: 'status', state: 'status', ballot: 'status',
    publicationstatus: 'status', 'publication-status': 'status'
  };

  // Canonical field -> the aliases that resolve to it, so typing "workgroup"
  // or "fhir-ver" still finds the field in the picker.
  const FIELD_SPELLINGS = (() => {
    const m = {};
    for (const f of SEARCH_FIELDS) m[f] = [];
    for (const alias of Object.keys(FIELD_ALIASES)) {
      const f = FIELD_ALIASES[alias];
      if (m[f]) m[f].push(alias);
    }
    return m;
  })();

  // One pre-folded string per field per card, covering everything the card
  // actually shows. `all` is the union, used by unprefixed terms. Built once
  // per catalog load, never per keystroke.
  function buildFields(agg) {
    const slug = String(agg.identifier || '').replace(/^ch\.fhir\.ig\./, '');
    const f = {
      name:    [agg.name, slug.replace(/-/g, ' ')],
      id:      [agg.identifier, slug, repoWords(agg.links && agg.links.source)],
      desc:    [agg.description],
      // The id carries the short form ("hl7ch-foph"), so "foph" keeps
      // working even when the heading spells the organization out.
      org:     [agg.organization && agg.organization.name,
                agg.organization && String(agg.organization.id || '').replace(/-/g, ' ')],
      wg:      [agg.workgroup && agg.workgroup.name],
      version: [],
      fhir:    [],
      status:  []
    };
    for (const v of agg.versions) {
      f.version.push(v.version);
      for (const fv of v.fhirVersion || []) f.fhir.push(fv, FHIR_ALIASES[fv] || '');
      f.status.push(v.publicationStatus === 'under-ballot'
        ? `ballot under-ballot ${BALLOT_WORDS[v.ballotType] || v.ballotType || ''}`
        : 'published released');
    }
    const out = {};
    for (const k of SEARCH_FIELDS) out[k] = fold(f[k].filter(Boolean).join(' '));
    out.all = SEARCH_FIELDS.map(k => out[k]).join(' ');
    return out;
  }

  // What each field means, for the suggestion list.
  const FIELD_HELP = {
    name:    'IG title',
    id:      'package id / repository',
    desc:    'description text',
    org:     'organization',
    wg:      'workgroup',
    version: 'version string',
    fhir:    'FHIR release',
    status:  'publication status'
  };

  // The set of values each field can actually take, harvested from the
  // catalog so the picker offers real choices instead of free text — `desc`
  // is prose and has none. Counts drive the ordering.
  let VOCABULARY = {};

  function buildVocabulary(aggs) {
    const bag = {};
    for (const f of SEARCH_FIELDS) bag[f] = new Map();
    const add = (field, value, label) => {
      if (!value) return;
      const key = String(value);
      const m = bag[field];
      if (!m.has(key)) m.set(key, { value: key, label: label || key, count: 0 });
      m.get(key).count++;
    };
    for (const agg of aggs) {
      add('name', agg.name);
      add('id', String(agg.identifier || '').replace(/^ch\.fhir\.ig\./, ''));
      add('org', agg.organization && agg.organization.name);
      add('wg', agg.workgroup && agg.workgroup.name);
      for (const v of agg.versions) {
        add('version', v.version);
        for (const fv of v.fhirVersion || []) {
          const alias = FHIR_ALIASES[fv];
          add('fhir', alias || fv, alias ? `${alias.toUpperCase()} \u2014 ${fv}` : fv);
        }
        if (v.publicationStatus === 'under-ballot') {
          add('status', 'ballot');
          if (v.ballotType) {
            add('status', v.ballotType,
                v.ballotType === 'dstu' ? 'dstu \u2014 also matches \u201cinformative\u201d' : v.ballotType);
          }
        } else {
          add('status', 'published');
        }
      }
    }
    const out = {};
    for (const f of SEARCH_FIELDS) {
      out[f] = [...bag[f].values()]
        .sort((a, b) => b.count - a.count || a.value.localeCompare(b.value));
    }
    return out;
  }

  // Whitespace-separated chunks, except inside double quotes, so
  // wg:"austauschformate epd" survives as one chunk.
  function splitTerms(query) {
    const out = [];
    let cur = '', inQuote = false;
    for (const c of String(query || '')) {
      if (c === '"') { inQuote = !inQuote; cur += c; }
      else if (!inQuote && /\s/.test(c)) { if (cur) out.push(cur); cur = ''; }
      else cur += c;
    }
    if (cur) out.push(cur);
    return out;
  }

  const unquote = (v) => String(v).replace(/^"/, '').replace(/"$/, '');

  // Parse the query into terms. "wg:epd" scopes to a field; a bare "wg:" is a
  // field the visitor has picked but not filled in yet, so it constrains
  // nothing. An unrecognised prefix is not a field — "https://x" stays one
  // literal term.
  function parseQuery(query) {
    const terms = [];
    for (const raw of splitTerms(query)) {
      const m = /^([A-Za-z][A-Za-z-]*):([\s\S]*)$/.exec(raw);
      const field = m && FIELD_ALIASES[m[1].toLowerCase()];
      if (field) {
        const value = fold(unquote(m[2]));
        if (value) terms.push({ field: field, value: value });
        continue;
      }
      const value = fold(unquote(raw));
      if (value) terms.push({ field: null, value: value });
    }
    return terms;
  }

  // Every term must match, in any order: "core ch" and "ch core" both find
  // CH Core; "wg:epd fhir:r4" narrows on two fields at once.
  function matchesQuery(agg, terms) {
    for (const t of terms) {
      const hay = t.field ? agg._fields[t.field] : agg._fields.all;
      if (!hay || hay.indexOf(t.value) === -1) return false;
    }
    return true;
  }

  // ─── Aggregation ────────────────────────────────────────────────
  // Each upstream IG now produces up to two per-version entries
  // (one published, one under-ballot). The renderer groups them back
  // into a single card per identifier with sub-rows per version.
  function aggregate(entries) {
    const byId = new Map();
    for (const ig of entries) {
      let agg = byId.get(ig.identifier);
      if (!agg) {
        agg = {
          identifier:   ig.identifier,
          name:         ig.name,
          description:  ig.description,
          organization: ig.organization,
          workgroup:    ig.workgroup,
          links:        ig.links,     // shared per-repo links
          versions:     []
        };
        byId.set(ig.identifier, agg);
      }
      agg.versions.push({
        publicationStatus: ig.publicationStatus,
        version:           ig.version,
        date:              ig.date,
        fhirVersion:       ig.fhirVersion,
        ballotType:        ig.ballotType,
        ballotCloses:      ig.ballotCloses,
        voteForm:          ig.voteForm,
        igUrl:             (ig.links && ig.links.ig) || ig.url
      });
    }
    // Latest sits on top: ballot row first, then released.
    const subOrder = { 'under-ballot': 0, published: 1 };
    for (const agg of byId.values()) {
      agg.versions.sort((a, b) =>
        (subOrder[a.publicationStatus] ?? 9) - (subOrder[b.publicationStatus] ?? 9));
      agg.maxDate   = agg.versions.reduce((m, v) => (v.date > m ? v.date : m), '');
      agg.hasBallot = agg.versions.some(v => v.publicationStatus === 'under-ballot');
    }
    return [...byId.values()];
  }

  // compute() runs on every render, i.e. on every keystroke. The aggregation
  // and the search haystacks only depend on the loader's output, which is
  // assigned once and never mutated — so cache on the array's identity.
  const NO_IGS = [];
  let aggCache = { src: null, aggs: NO_IGS };

  function aggregates(all) {
    if (aggCache.src === all) return aggCache.aggs;
    const aggs = aggregate(all);
    for (const agg of aggs) agg._fields = buildFields(agg);
    VOCABULARY = buildVocabulary(aggs);
    aggCache = { src: all, aggs };
    return aggs;
  }

  // Which version sub-rows should render under the active tab?
  function visibleVersions(agg, view, ballotKind) {
    if (view === 'all') return agg.versions;
    if (view === 'published') {
      return agg.versions.filter(v => v.publicationStatus !== 'under-ballot');
    }
    if (view === 'ballot') {
      return agg.versions.filter(v =>
        v.publicationStatus === 'under-ballot' &&
        (ballotKind === 'all' || v.ballotType === ballotKind));
    }
    return [];
  }

  // Sort tier inside an org group.
  //   0 = pinned (CH Term, CH Core)
  //   1 = IGs with an active ballot
  //   2 = the rest
  function tier(agg) {
    if (PINNED_IDS.includes(agg.identifier)) return 0;
    if (agg.hasBallot) return 1;
    return 2;
  }

  // ─── Compute pipeline ───────────────────────────────────────────
  function compute() {
    const all = window.FHIR_CH_IGS || NO_IGS;

    // Hero stats are per-entry (per version) and deliberately describe the
    // whole catalog, not the query — see render().
    const published = all.filter(g => g.publicationStatus === 'published');
    const ballot    = all.filter(g => g.publicationStatus === 'under-ballot');
    const stu       = ballot.filter(g => g.ballotType === 'stu');
    const dstu      = ballot.filter(g => g.ballotType === 'dstu');

    const isBallotView = state.view === 'ballot';
    const isAllView    = state.view === 'all';

    const query  = state.search.trim();
    const terms  = parseQuery(query);

    // Aggregate per-identifier on the FULL entry list so each card knows
    // about both versions even when only one will render under the tab.
    const every = aggregates(all);

    // Query-level filters (search + FHIR pill) run BEFORE the tab filter.
    // All three are ANDs, so the visible result is the same either way — but
    // this order also yields "what matches anywhere", which the sub-tab
    // counts and the empty state both need in order to be honest.
    const matched = every.filter(agg =>
      (!terms.length || matchesQuery(agg, terms)) &&
      (!state.fhirFilter ||
        agg.versions.some(v => (v.fhirVersion || []).includes(state.fhirFilter))));

    // Ballot sub-tab counts must equal the rows those sub-tabs render, so
    // they follow the active search + FHIR filter. With nothing filtered
    // they are identical to ballot/stu/dstu above.
    let ballotRows = 0, stuRows = 0, dstuRows = 0;
    for (const agg of matched) {
      for (const v of agg.versions) {
        if (v.publicationStatus !== 'under-ballot') continue;
        ballotRows++;
        if (v.ballotType === 'dstu') dstuRows++; else stuRows++;
      }
    }

    // Finally, drop aggregates with no version visible under the active tab.
    let aggs = matched.filter(agg =>
      visibleVersions(agg, state.view, state.ballotKind).length > 0);

    // Group by organization.
    const byOrg = new Map();
    for (const agg of aggs) {
      const k = agg.organization.id;
      if (!byOrg.has(k)) byOrg.set(k, { name: agg.organization.name, id: k, items: [] });
      byOrg.get(k).items.push(agg);
    }

    const groups = [...byOrg.values()]
      .map(g => {
        // Each org's rank is the date of its newest IG (across all
        // aggregates / all versions). HL7 Switzerland is pinned first;
        // the rest sort by most recent publisher.
        g.maxDate = g.items.reduce(
          (m, agg) => (agg.maxDate > m ? agg.maxDate : m), '');
        return g;
      })
      .sort((a, b) => {
        if (a.id === 'hl7ch') return -1;
        if (b.id === 'hl7ch') return 1;
        return (b.maxDate || '').localeCompare(a.maxDate || '');
      })
      .map(g => {
        g.items.sort((a, b) => {
          const ta = tier(a), tb = tier(b);
          if (ta !== tb) return ta - tb;
          if (ta === 0) return pinIndex(a) - pinIndex(b);
          return (b.maxDate || '').localeCompare(a.maxDate || '');
        });
        return {
          ...g,
          count: g.items.length,
          plural: g.items.length === 1 ? '' : 's'
        };
      });

    return {
      all, published, ballot, stu, dstu,
      counts: { ballot: ballotRows, stu: stuRows, dstu: dstuRows },
      query,
      totalCount:       every.length,
      matchedCount:     matched.length,
      matchedPublished: matched.filter(a => a.versions.some(v => v.publicationStatus !== 'under-ballot')).length,
      matchedBallot:    matched.filter(a => a.hasBallot).length,
      visibleCount:     aggs.length,
      groups,
      isBallotView,
      isAllView,
      isEmpty: groups.length === 0
    };
  }

  // ─── Chip + badge factories ─────────────────────────────────────
  function badgeForVersion(v) {
    if (v.publicationStatus === 'published') return { cls: 'badge published', text: 'PUBLISHED' };
    if (v.ballotType === 'stu')              return { cls: 'badge stu',       text: 'STU BALLOT' };
    return                                          { cls: 'badge dstu',      text: 'DSTU BALLOT' };
  }

  function versionChip(v) {
    const isBallot = v.publicationStatus === 'under-ballot';
    return {
      cls:   isBallot ? 'chip ballot' : 'chip primary',
      icon:  '▤',
      label: isBallot ? 'BALLOT IG' : 'IG',
      url:   v.igUrl
    };
  }

  function sharedChips(links) {
    const chips = [];
    const L = links || {};
    if (L.ciBuild) chips.push({ cls: 'chip secondary', icon: '⟳',  label: 'CI BUILD', url: L.ciBuild });
    if (L.history) chips.push({ cls: 'chip secondary', icon: '↺',  label: 'HISTORY',  url: L.history });
    if (L.source)  chips.push({ cls: 'chip secondary', icon: '◉',  label: 'GITHUB',   url: L.source });
    if (L.wiki)    chips.push({ cls: 'chip ghost',     icon: '📓', label: 'WIKI',     url: L.wiki });
    if (L.jira)    chips.push({ cls: 'chip ghost',     icon: '✎',  label: 'JIRA',     url: L.jira });
    return chips;
  }

  // ─── Template renderers ─────────────────────────────────────────
  function renderChip(chip) {
    return `<a class="${chip.cls}" href="${escapeHtml(chip.url)}" target="_blank" rel="noopener">`
      + `<span class="icon">${chip.icon}</span><span>${escapeHtml(chip.label)}</span></a>`;
  }

  function renderDisabledChip(chip, tooltip) {
    return `<span class="${chip.cls} disabled" title="${escapeHtml(tooltip)}" aria-disabled="true">`
      + `<span class="icon">${chip.icon}</span><span>${escapeHtml(chip.label)}</span></span>`;
  }

  function renderVersionRow(v) {
    const badge = badgeForVersion(v);
    const chips = [renderChip(versionChip(v))];
    if (v.voteForm) {
      const cycle = window.FHIR_CH_BALLOT_CYCLE || {};
      const voteChip = { cls: 'chip primary', icon: '✓', label: 'VOTE', url: v.voteForm };
      let tooltip = null;
      if (cycle.votingDisabledUntil) tooltip = `Voting opens ${fmtDateDe(cycle.votingDisabledUntil)}`;
      else if (cycle.votingDisabledSince) tooltip = `Voting closed ${fmtDateDe(cycle.votingDisabledSince)}`;
      chips.push(tooltip ? renderDisabledChip(voteChip, tooltip) : renderChip(voteChip));
    }
    const fhirStr = (v.fhirVersion || []).join(', ') || '—';
    const cls = v.publicationStatus === 'under-ballot'
      ? 'under-ballot ' + (v.ballotType === 'dstu' ? 'dstu' : 'stu')
      : 'published';
    return `<div class="version-row ${cls}">
      <span class="${badge.cls}">${badge.text}</span>
      <span class="vno">v${escapeHtml(v.version || '—')}</span>
      <span class="fhir">${escapeHtml(fhirStr)}</span>
      <span class="date">${fmtDate(v.date)}</span>
      <span class="version-chip">${chips.join('')}</span>
    </div>`;
  }

  function renderIgCard(agg, view, ballotKind) {
    const versions = visibleVersions(agg, view, ballotKind);
    if (!versions.length) return '';

    const workgroupMeta = agg.workgroup
      ? `<div class="meta">
          <span><span class="key">WORKGROUP</span>
            <span class="val"><a href="${escapeHtml(agg.workgroup.url)}" target="_blank" rel="noopener">${escapeHtml(agg.workgroup.name)}</a></span>
          </span>
        </div>`
      : '';

    const sharedChipsHtml = sharedChips(agg.links).map(renderChip).join('');

    return `<div class="ig-card">
      <div class="ig-shared">
        <div class="title-row">
          <span class="title">${escapeHtml(agg.name)}</span>
          <span class="pkg-id">${escapeHtml(agg.identifier)}</span>
        </div>
        <div class="description">${escapeHtml(agg.description)}</div>
        ${workgroupMeta}
      </div>
      <div class="versions">
        ${versions.map(renderVersionRow).join('')}
      </div>
      ${sharedChipsHtml ? `<div class="shared-chips">${sharedChipsHtml}</div>` : ''}
    </div>`;
  }

  function renderGroup(group, view, ballotKind) {
    const cards = group.items.map(agg => renderIgCard(agg, view, ballotKind)).join('');
    return `<div class="org-group">
      <div class="org-header">
        <div class="left">
          <span class="by">By</span>
          <h2>${escapeHtml(group.name)}</h2>
        </div>
        <div class="count">${group.count} guide${group.plural}</div>
      </div>
      ${cards}
    </div>`;
  }

  function renderGroups(groups, view, ballotKind) {
    return groups.map(g => renderGroup(g, view, ballotKind)).join('');
  }

  // ─── Result summary + empty state ───────────────────────────────
  const TAB_LABEL  = { all: 'All', published: 'Published', ballot: 'Under Ballot' };
  const KIND_LABEL = { all: 'All Ballot', stu: 'STU Ballot', dstu: 'DSTU Ballot' };

  function fhirLabel(v) { return 'FHIR ' + (FHIR_ALIASES[v] || v).toUpperCase(); }

  // What the visitor is filtering by, in words. Empty when nothing is
  // filtered — the hero stats already describe that case.
  function activeFilters(v) {
    const bits = [];
    if (v.query) bits.push('“' + escapeHtml(v.query) + '”');
    if (state.fhirFilter) bits.push(escapeHtml(fhirLabel(state.fhirFilter)));
    return bits;
  }

  // Reconciles the hero stats (whole catalog) with the list below (filtered).
  function renderSummary(v) {
    const bits = activeFilters(v);
    if (!bits.length) return '';
    const head = `${v.matchedCount} of ${v.totalCount} guides match ${bits.join(' + ')}`;
    return v.matchedCount === v.visibleCount
      ? head
      : `${head} · ${v.visibleCount} shown under ${escapeHtml(TAB_LABEL[state.view])}`;
  }

  // The old empty state always read — No guides in this category —,
  // which reads as a broken tab when it is really just a narrow query. Name
  // what was searched, say where the matches are, offer a way to widen.
  function renderEmptyState(v) {
    const bits = activeFilters(v);
    if (!bits.length) {
      return `<div class="empty-state">— No guides in this category —</div>`;
    }
    const what = bits.join(' + ');
    const actions = [];
    let line, hint = '';

    if (!v.matchedCount) {
      line = `No guides match ${what}.`;
      hint = 'Tip: type <code>wg:</code>, <code>org:</code>, <code>status:</code> or '
           + '<code>fhir:</code> in the search box to pick from the values that exist.';
    } else {
      // The query does match — it is the active tab that hides the results.
      const kindBit = (state.view === 'ballot' && state.ballotKind !== 'all')
        ? ` under ${escapeHtml(KIND_LABEL[state.ballotKind])}` : '';
      line = `No ${escapeHtml(TAB_LABEL[state.view])} guides match ${what}${kindBit}.`;
      hint = `Matching guides: ${v.matchedPublished} published · ${v.matchedBallot} under ballot.`;
      if (kindBit && v.counts.ballot) {
        actions.push({ action: 'kind-all',
          label: `Show ${v.counts.ballot} ballot row${v.counts.ballot === 1 ? '' : 's'}` });
      }
      if (state.view !== 'all') {
        actions.push({ action: 'view-all',
          label: `Show all ${v.matchedCount} match${v.matchedCount === 1 ? '' : 'es'}` });
      }
    }
    if (state.fhirFilter) actions.push({ action: 'fhir-all',     label: 'Clear FHIR filter' });
    if (v.query)          actions.push({ action: 'clear-search', label: 'Clear search' });

    const btns = actions.map(a =>
      `<button type="button" class="empty-action" data-action="${a.action}">${escapeHtml(a.label)}</button>`
    ).join('');

    return `<div class="empty-state filtered">
      <p class="empty-line">${line}</p>
      ${hint ? `<p class="empty-hint">${hint}</p>` : ''}
      ${btns ? `<div class="empty-actions">${btns}</div>` : ''}
    </div>`;
  }

  // ─── Search suggestions ─────────────────────────────────────────
  // A field/value picker in the spirit of a JIRA query bar: type nothing and
  // you get the list of fields; type "wg:" and you get the workgroups that
  // actually exist in the catalog. Keyboard: up/down, Enter to take, Esc to
  // dismiss. Purely additive — free text still works exactly as before.
  const MAX_SUGGESTIONS = 10;
  let suggestOpen = false;
  let suggestIndex = -1;
  let suggestState = { kind: 'field', items: [] };

  // The term the caret currently sits in, and where it starts. Quotes count
  // as one unit, so `wg:"austausch` is a single term mid-typing.
  function currentTerm(value, caret) {
    const head = value.slice(0, caret);
    let start = 0, inQuote = false;
    for (let i = 0; i < head.length; i++) {
      const c = head[i];
      if (c === '"') inQuote = !inQuote;
      else if (!inQuote && /\s/.test(c)) start = i + 1;
    }
    return { start: start, text: head.slice(start) };
  }

  function suggestionsFor(term) {
    const m = /^([A-Za-z][A-Za-z-]*):(.*)$/.exec(term);
    const field = m && FIELD_ALIASES[m[1].toLowerCase()];
    if (field) {
      const typed = fold(m[2].replace(/^"/, ''));
      const items = (VOCABULARY[field] || [])
        .filter(o => !typed || fold(o.value).indexOf(typed) !== -1)
        .slice(0, MAX_SUGGESTIONS);
      return { kind: 'value', field: field, prefix: m[1], items: items };
    }
    const typed = fold(term);
    const items = SEARCH_FIELDS
      .filter(f => !typed || FIELD_SPELLINGS[f].some(a => a.indexOf(typed) === 0))
      .map(f => ({
        value: f + ':',
        label: f + ':',
        help: FIELD_HELP[f],
        alt: FIELD_SPELLINGS[f].filter(a => a !== f).slice(0, 2).join(', ')
      }));
    return { kind: 'field', items: items };
  }

  function renderSuggest() {
    const input = el('search-input');
    const box   = el('search-suggest');
    const list  = el('search-suggest-list');
    if (!input || !box || !list) return;

    suggestState = suggestionsFor(currentTerm(input.value, input.selectionStart || 0).text);
    if (suggestIndex >= suggestState.items.length) suggestIndex = -1;

    if (!suggestOpen || !suggestState.items.length) {
      box.hidden = true;
      input.setAttribute('aria-expanded', 'false');
      list.innerHTML = '';
      return;
    }
    const head = suggestState.kind === 'value'
      ? `<li class="suggest-head">${escapeHtml(suggestState.prefix)}: \u2014 ${escapeHtml(FIELD_HELP[suggestState.field] || '')}</li>`
      : `<li class="suggest-head">Fields</li>`;
    const mode = suggestState.kind === 'value' ? 'value' : 'field';
    list.innerHTML = head + suggestState.items.map((o, i) => `
      <li class="suggest-item suggest-item--${mode}${i === suggestIndex ? ' active' : ''}"
          role="option" aria-selected="${i === suggestIndex}" data-suggest="${i}">
        <span class="suggest-value">${escapeHtml(o.label)}</span>
        ${o.help ? `<span class="suggest-help">${escapeHtml(o.help)}${
          o.alt ? ` <span class="suggest-alt">also ${escapeHtml(o.alt)}\u2026</span>` : ''}</span>` : ''}
        ${o.count ? `<span class="suggest-count">${o.count}</span>` : ''}
      </li>`).join('');
    box.hidden = false;
    input.setAttribute('aria-expanded', 'true');
  }

  function quoteValue(v) { return /[\s"]/.test(v) ? '"' + v.replace(/"/g, '') + '"' : v; }

  function applySuggestion(i) {
    const item = suggestState.items[i];
    const input = el('search-input');
    if (!item || !input) return;
    const caret = input.selectionStart || 0;
    const term  = currentTerm(input.value, caret);
    const insert = suggestState.kind === 'field'
      ? item.value                                                // "wg:" \u2014 keep typing
      : suggestState.prefix + ':' + quoteValue(item.value) + ' ';
    input.value = input.value.slice(0, term.start) + insert + input.value.slice(caret);
    const pos = term.start + insert.length;
    input.setSelectionRange(pos, pos);
    input.focus();
    suggestIndex = -1;
    setState({ search: input.value });   // re-renders the list, then:
    renderSuggest();
  }

  // ─── DOM updates ────────────────────────────────────────────────
  function el(id) { return document.getElementById(id); }

  function applyTabClasses(v) {
    // Top tabs (All / Published / Under Ballot)
    el('tab-all').classList.toggle('active', state.view === 'all');
    el('tab-published').classList.toggle('active', state.view === 'published');
    el('tab-ballot').classList.toggle('active', state.view === 'ballot');

    // Ballot sub-tab bar visibility
    el('subtabs').style.display = v.isBallotView ? 'block' : 'none';

    // Sub-tabs (All / STU / DSTU)
    el('subtab-all').classList.toggle('active', state.ballotKind === 'all');
    el('subtab-stu').classList.toggle('active', state.ballotKind === 'stu');
    el('subtab-dstu').classList.toggle('active', state.ballotKind === 'dstu');

    // FHIR pills (ALL / R4 / R5)
    el('fhir-all').classList.toggle('active', state.fhirFilter === '');
    el('fhir-r4').classList.toggle('active', state.fhirFilter === '4.0.1');
    el('fhir-r5').classList.toggle('active', state.fhirFilter === '5.0.0');
  }

  function render() {
    const v = compute();

    // Hero stats
    el('hero-published').textContent = v.published.length;
    el('hero-ballot').textContent    = v.ballot.length;
    el('hero-stu').textContent       = v.stu.length;
    el('hero-dstu').textContent      = v.dstu.length;

    // Sub-tab counts follow the active search + FHIR filter, so each count
    // equals the number of rows its sub-tab renders. (Published/Ballot tab
    // counts are intentionally not shown.)
    el('subtab-all-count').textContent    = `(${v.counts.ballot})`;
    el('subtab-stu-count').textContent    = `(${v.counts.stu})`;
    el('subtab-dstu-count').textContent   = `(${v.counts.dstu})`;

    applyTabClasses(v);

    // Match count — bridges the unfiltered hero stats and the filtered list.
    el('result-summary').innerHTML = renderSummary(v);

    // Registry list
    const root = el('registry-root');
    root.innerHTML = v.isEmpty
      ? renderEmptyState(v)
      : renderGroups(v.groups, state.view, state.ballotKind);
  }

  // ─── Event wiring ───────────────────────────────────────────────
  function wire() {
    // Tab + sub-tab + FHIR pill clicks via data-action.
    document.addEventListener('click', (e) => {
      const btn = e.target.closest('[data-action]');
      if (!btn) return;
      const a = btn.dataset.action;
      switch (a) {
        case 'view-all':       setState({ view: 'all' });       break;
        case 'view-published': setState({ view: 'published' }); break;
        case 'view-ballot':    setState({ view: 'ballot' });    break;
        case 'kind-all':       setState({ ballotKind: 'all' }); break;
        case 'kind-stu':       setState({ ballotKind: 'stu' }); break;
        case 'kind-dstu':      setState({ ballotKind: 'dstu' });break;
        case 'fhir-all':       setState({ fhirFilter: '' });    break;
        case 'fhir-r4':        setState({ fhirFilter: '4.0.1' });break;
        case 'fhir-r5':        setState({ fhirFilter: '5.0.0' });break;
        case 'clear-search': {
          const input = el('search-input');
          if (input) { input.value = ''; input.focus(); }
          setState({ search: '' });
          break;
        }
      }
    });

    // Search input. 'search' and 'change' are backstops: some browsers revert
    // an <input type="search"> on Escape without firing 'input', which would
    // leave state.search stale against the visible box.
    const input = el('search-input');
    if (input) {
      const onInput = (e) => {
        suggestIndex = -1;
        suggestOpen = true;
        setState({ search: e.target.value });
        renderSuggest();
      };
      input.addEventListener('input',  onInput);
      input.addEventListener('search', onInput);
      input.addEventListener('change', onInput);

      input.addEventListener('focus', () => { suggestOpen = true; renderSuggest(); });
      input.addEventListener('blur',  () => { suggestOpen = false; renderSuggest(); });
      input.addEventListener('click', renderSuggest);

      input.addEventListener('keydown', (e) => {
        const n = suggestState.items.length;
        if (e.key === 'Escape') { suggestOpen = false; suggestIndex = -1; renderSuggest(); return; }
        if (!suggestOpen || !n) {
          if (e.key === 'ArrowDown') { suggestOpen = true; renderSuggest(); e.preventDefault(); }
          return;
        }
        if (e.key === 'ArrowDown')      { suggestIndex = (suggestIndex + 1) % n; renderSuggest(); e.preventDefault(); }
        else if (e.key === 'ArrowUp')   { suggestIndex = (suggestIndex - 1 + n) % n; renderSuggest(); e.preventDefault(); }
        else if (e.key === 'Enter' && suggestIndex >= 0) { applySuggestion(suggestIndex); e.preventDefault(); }
        // Tab completes: the highlighted row, or the first one if none is.
        // Only while the list is open — otherwise Tab must move focus.
        else if (e.key === 'Tab' && !e.shiftKey) {
          applySuggestion(suggestIndex >= 0 ? suggestIndex : 0);
          e.preventDefault();
        }
      });
    }

    // mousedown, not click: click fires after blur, which would have closed
    // the list before the selection could be read.
    const box = el('search-suggest');
    if (box) {
      box.addEventListener('mousedown', (e) => {
        const li = e.target.closest('[data-suggest]');
        if (!li) return;
        e.preventDefault();          // keep focus in the input
        applySuggestion(Number(li.dataset.suggest));
      });
    }
  }

  // ─── Dev-only validation ────────────────────────────────────────
  // Runs only on localhost / 127.0.0.1 / file:// — same spirit as
  // load-data.js's "uncurated IGs" console.warn. Surfaces mismatches
  // between the BALLOT_CYCLE switch and the actual catalog data.
  function isDev() {
    const h = location.hostname;
    return !h || h === 'localhost' || h === '127.0.0.1' || h === '[::1]';
  }

  function validateBallotCycle(igs) {
    if (!isDev()) return;
    const cycle = window.FHIR_CH_BALLOT_CYCLE;
    const underBallot = igs.filter(g => g.publicationStatus === 'under-ballot');
    const underBallotIds = new Set(underBallot.map(g => g.identifier));
    const allIds = new Set(igs.map(g => g.identifier));
    const warn = (msg) => console.warn('[ballot-cycle]', msg);

    if (!cycle) {
      if (underBallot.length) {
        warn(`BALLOT_CYCLE is null but ${underBallot.length} IG(s) are under-ballot: ${[...underBallotIds].join(', ')}. Set BALLOT_CYCLE in js/load-data.js to surface the Register button + VOTE chips.`);
      }
      return;
    }

    if (!cycle.registrationFormId) {
      warn('BALLOT_CYCLE.registrationFormId is empty — the hero "Register to vote" button will not appear.');
    }

    const formIds = Object.keys(cycle.forms || {});

    const stale = formIds.filter(id => !underBallotIds.has(id) && allIds.has(id));
    if (stale.length) {
      warn(`Stale entries in BALLOT_CYCLE.forms (these IGs are not under-ballot): ${stale.join(', ')}. Prune them.`);
    }

    const missing = [...underBallotIds].filter(id => !formIds.includes(id));
    if (missing.length) {
      warn(`Under-ballot IGs missing from BALLOT_CYCLE.forms (no VOTE chip will appear): ${missing.join(', ')}.`);
    }

    const typos = formIds.filter(id => !allIds.has(id));
    if (typos.length) {
      warn(`Unknown package-ids in BALLOT_CYCLE.forms (typo or stale): ${typos.join(', ')}.`);
    }

    if (cycle.year && underBallot.length) {
      const yearStr = String(cycle.year);
      const seenYears = [...new Set(
        underBallot
          .map(g => g.ballotCloses && g.ballotCloses.slice(0, 4))
          .filter(Boolean)
      )];
      if (seenYears.length && !seenYears.includes(yearStr)) {
        warn(`BALLOT_CYCLE.year is "${cycle.year}" but under-ballot IGs have ballotCloses year(s): ${seenYears.join(', ')}. Check OVERRIDES.ballotCloses.`);
      }
    }
  }

  // ─── Hero ballot toggle ─────────────────────────────────────────
  // Reads window.FHIR_CH_BALLOT_CYCLE (set synchronously by load-data.js).
  // Cycle present + window open  → Register button active + primary; Join outline.
  // Cycle present + pre-open     → Register button DISABLED, "opens DD.MM.YYYY".
  // Cycle present + post-close   → Register button DISABLED, "closed DD.MM.YYYY".
  // No cycle (BALLOT_CYCLE=null) → Register button hidden; Join restored to primary.
  function applyBallotCycle() {
    const cycle = window.FHIR_CH_BALLOT_CYCLE;
    const vote  = document.getElementById('hero-vote-btn');
    const join  = document.getElementById('hero-join-btn');
    if (!vote || !join) return;
    if (cycle && cycle.registrationFormId) {
      let tooltip = null;
      if (cycle.registrationDisabledUntil) tooltip = `Registration opens ${fmtDateDe(cycle.registrationDisabledUntil)}`;
      else if (cycle.registrationDisabledSince) tooltip = `Registration closed ${fmtDateDe(cycle.registrationDisabledSince)}`;
      vote.textContent = `Register to vote · Ballot ${cycle.year} →`;
      vote.hidden      = false;
      if (tooltip) {
        vote.removeAttribute('href');
        vote.classList.add('disabled');
        vote.setAttribute('aria-disabled', 'true');
        vote.title = tooltip;
      } else {
        vote.href = `https://docs.google.com/forms/d/${cycle.registrationFormId}/viewform`;
        vote.classList.remove('disabled');
        vote.removeAttribute('aria-disabled');
        vote.removeAttribute('title');
      }
      join.classList.remove('primary');
      join.classList.add('outline');
      join.textContent = 'Join FHIR.ch work group calls';
    } else {
      vote.hidden      = true;
      join.classList.remove('outline');
      join.classList.add('primary');
      join.textContent = 'Join FHIR.ch work group calls →';
    }
  }

  // ─── Bootstrap ──────────────────────────────────────────────────
  function start() {
    applyBallotCycle();
    wire();
    // Initial render — shows empty state until data arrives.
    render();
    // Wait for IG data, then re-render with real values.
    (function tick() {
      if (window.FHIR_CH_IGS) {
        validateBallotCycle(window.FHIR_CH_IGS);
        render();
        return;
      }
      setTimeout(tick, 40);
    })();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', start);
  } else {
    start();
  }
})();
