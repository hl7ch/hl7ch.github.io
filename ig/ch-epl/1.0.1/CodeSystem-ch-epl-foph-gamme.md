# CH EPL - Gamme - CH EPL (R5) v1.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPL - Gamme**

## CodeSystem: CH EPL - Gamme 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-gamme | *Version*:1.0.1 |
| Active as of 2026-04-07 | *Computable Name*:ChEplGammeCS |
| **Copyright/Legal**: CC0-1.0 | |

 
CH ePL - Code System for the Gamme from ePL used by FOPH 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChEplGammeVS](ValueSet-ch-epl-foph-gamme.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-epl-foph-gamme",
  "url" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-gamme",
  "version" : "1.0.1",
  "name" : "ChEplGammeCS",
  "title" : "CH EPL - Gamme",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-04-07T14:04:04+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [{
    "name" : "Federal Office of Public Health FOPH",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
    }]
  }],
  "description" : "CH ePL - Code System for the Gamme from ePL used by FOPH",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 16,
  "concept" : [{
    "code" : "756002004001",
    "display" : "Oral",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Oral"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "Oral"
    }]
  },
  {
    "code" : "756002004002",
    "display" : "Oral prolonged-release",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Oral Retard"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "OralRetard"
    }]
  },
  {
    "code" : "756002004003",
    "display" : "Oral liquid",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Oral Flüssig"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "OralFlüssig"
    }]
  },
  {
    "code" : "756002004004",
    "display" : "Parenteral",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Parenteral"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "Parenteral"
    }]
  },
  {
    "code" : "756002004005",
    "display" : "Parenteral depot",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Parenteralia Depotzubereitungen"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "ParenteralDepot"
    }]
  },
  {
    "code" : "756002004006",
    "display" : "Inhalation",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Inhalationen"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "Inhalation"
    }]
  },
  {
    "code" : "756002004007",
    "display" : "Topical",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Topisch"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "Topisch"
    }]
  },
  {
    "code" : "756002004008",
    "display" : "Topical wash",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Topisch Wasch"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "TopischWasch"
    }]
  },
  {
    "code" : "756002004009",
    "display" : "Ophthalmic",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Auge"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "Auge"
    }]
  },
  {
    "code" : "756002004010",
    "display" : "Auricular",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Zubereitungen zur Anwendung am Ohr"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "Ohr"
    }]
  },
  {
    "code" : "756002004011",
    "display" : "Nasal",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Nasal"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "Nasal"
    }]
  },
  {
    "code" : "756002004012",
    "display" : "Transdermal",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Transdermal"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "Transdermal"
    }]
  },
  {
    "code" : "756002004013",
    "display" : "Rectal Vaginal",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Rektal Vaginal"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "RektalVaginal"
    }]
  },
  {
    "code" : "756002004014",
    "display" : "Topical oral",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Oral Topisch"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "TopischOral"
    }]
  },
  {
    "code" : "756002004015",
    "display" : "Therapy devices for administering medicinal products",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Therapie-Geräte zur Anwendung von Arzneimitteln"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "Geräte"
    }]
  },
  {
    "code" : "756002004016",
    "display" : "Special nutrition",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Spezialnahrung"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "Spezialnahrung"
    }]
  }]
}

```
