# CH EPL - Type of Price Change - CH EPL (R5) v1.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPL - Type of Price Change**

## CodeSystem: CH EPL - Type of Price Change 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-type-of-price-change | *Version*:1.0.1 |
| Active as of 2026-04-07 | *Computable Name*:ChEplTypeOfPriceChangeCS |
| **Copyright/Legal**: CC0-1.0 | |

 
CH EPL - Standard Terms used in Switzerland (aggregations of codes of ValueSets TypeofPriceChange 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChEplTypeofPriceChangeVS](ValueSet-ch-epl-foph-type-of-price-change.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-epl-foph-type-of-price-change",
  "url" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-type-of-price-change",
  "version" : "1.0.1",
  "name" : "ChEplTypeOfPriceChangeCS",
  "title" : "CH EPL - Type of Price Change",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-04-07T14:09:25+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [{
    "name" : "Federal Office of Public Health FOPH",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
    }]
  }],
  "description" : "CH EPL - Standard Terms used in Switzerland (aggregations of codes of ValueSets TypeofPriceChange",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 18,
  "concept" : [{
    "code" : "756002006001",
    "display" : "External reference price",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Auslandspreisvergleich"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "APV"
    }]
  },
  {
    "code" : "756002006002",
    "display" : "Extraordinary price mutation",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Ausserordentliche Preismutation"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "aMu"
    }]
  },
  {
    "code" : "756002006003",
    "display" : "Voluntary price reduction",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Freiwillige Preissenkung"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "fPS"
    }]
  },
  {
    "code" : "756002006004",
    "display" : "Voluntary price reduction within 18 months of listing",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Freiwillige Preissenkung innerhalb der ersten 18 Monate nach Aufnahme"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "fPS18"
    }]
  },
  {
    "code" : "756002006005",
    "display" : "Price reduction 18 months after SL listing",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Preissenkung 18 Monate nach SL Aufnahme"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "PSn18"
    }]
  },
  {
    "code" : "756002006006",
    "display" : "Review of economic efficiency 1 year after SL listing",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Wirtschaftlichkeitsprüfung 1 Jahr nach SL Aufnahme"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "WKP1"
    }]
  },
  {
    "code" : "756002006007",
    "display" : "Review of economic efficiency 2 years after SL listing",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Wirtschaftlichkeitsprüfung 2 Jahre nach SL Aufnahme"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "WKP2"
    }]
  },
  {
    "code" : "756002006008",
    "display" : "VAT-change",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "MwSt-Änderung"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "MwSt"
    }]
  },
  {
    "code" : "756002006009",
    "display" : "Normal price mutation",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Normale Preismutation"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "nMu"
    }]
  },
  {
    "code" : "756002006010",
    "display" : "Price mutation after triennal review of pharmaceuticals",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Preisänderung nach 3-jährlicher Überprüfung der Aufnahmebedingungen"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "3JUE"
    }]
  },
  {
    "code" : "756002006011",
    "display" : "Price mutation after patent expiry",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Preisänderung nach Patentablauf"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "PA"
    }]
  },
  {
    "code" : "756002006012",
    "display" : "Price increase",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Preiserhöhungsgesuch"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "PEG"
    }]
  },
  {
    "code" : "756002006013",
    "display" : "Price mutation at first listing",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Preismutation bei Erstaufnahme"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "NA"
    }]
  },
  {
    "code" : "756002006014",
    "display" : "Price mutation introduction of uniform wholesale margin",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Preismutation Einführung einheitlicher VA"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "EeVA"
    }]
  },
  {
    "code" : "756002006015",
    "display" : "Price mutation wholesale margin",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Preismutation VA"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "VA"
    }]
  },
  {
    "code" : "756002006016",
    "display" : "Price mutation uniform wholesale margin",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Preismutation einheitlicher VA"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "eVA"
    }]
  },
  {
    "code" : "756002006017",
    "display" : "Change of dispensing category",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Wechsel Abgabekategorie"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "WAK"
    }]
  },
  {
    "code" : "756002006018",
    "display" : "Health Technology Assessment",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Health Technology Assessment"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "HTA"
    }]
  }]
}

```
