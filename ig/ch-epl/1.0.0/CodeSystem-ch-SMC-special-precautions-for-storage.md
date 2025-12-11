# CH SMC - Special Precautions for Storage - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH SMC - Special Precautions for Storage**

## CodeSystem: CH SMC - Special Precautions for Storage 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-special-precautions-for-storage | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:ChSMCSpecialPrecautionsForStorageCS |
| **Copyright/Legal**: CC0-1.0 | |

 
CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Besondere Vorsichtsmassnahmen für die Aufbewahrung) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChSMCSpecialPrecautionsForStorageVS](ValueSet-ch-SMC-special-precautions-for-storage.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-SMC-special-precautions-for-storage",
  "url" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-special-precautions-for-storage",
  "version" : "1.0.0",
  "name" : "ChSMCSpecialPrecautionsForStorageCS",
  "title" : "CH SMC - Special Precautions for Storage",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-11T12:29:57+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Besondere Vorsichtsmassnahmen für die Aufbewahrung)",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 12,
  "concept" : [
    {
      "code" : "756005042001",
      "display" : "Do not freeze",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Nicht einfrieren"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym"
          },
          "value" : "NF"
        }
      ]
    },
    {
      "code" : "756005042002",
      "display" : "Do not refrigerate",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "nicht im Kühlschrank"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym"
          },
          "value" : "NK"
        }
      ]
    },
    {
      "code" : "756005042003",
      "display" : "protect from moisture",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "vor Feuchtigkeit schützen"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym"
          },
          "value" : "F"
        }
      ]
    },
    {
      "code" : "756005042004",
      "display" : "protect from light",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "vor Licht Schützen"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym"
          },
          "value" : "L"
        }
      ]
    },
    {
      "code" : "756005042005",
      "display" : "at 15 - 30°C",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "bei 15 - 30°C"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym"
          },
          "value" : "30"
        }
      ]
    },
    {
      "code" : "756005042006",
      "display" : "at room temperature (15 - 25°C)",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "bei Raumtemperatur (15 - 25°C)"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym"
          },
          "value" : "25"
        }
      ]
    },
    {
      "code" : "756005042007",
      "display" : "in the refrigerator (2°C - 8°C)",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Im Kühlschrank (2°C - 8°C)"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym"
          },
          "value" : "2"
        }
      ]
    },
    {
      "code" : "756005042008",
      "display" : "Do not store above 25°C",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Nicht über 25°C"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym"
          },
          "value" : "NO25"
        }
      ]
    },
    {
      "code" : "756005042009",
      "display" : "Do not store above 30°C",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Nicht über 30°C"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym"
          },
          "value" : "NO30"
        }
      ]
    },
    {
      "code" : "756005042010",
      "display" : "Store below - 20°C",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "unterhalb - 20°C"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym"
          },
          "value" : "-20"
        }
      ]
    },
    {
      "code" : "756005042011",
      "display" : "Store in the original container",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "In der Originalverpackung aufbewahren."
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym"
          },
          "value" : "OVP"
        }
      ]
    },
    {
      "code" : "756005042012",
      "display" : "Keep the container tightly closed",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Den Behälter fest verschlossen halten."
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym"
          },
          "value" : "CLOS"
        }
      ]
    }
  ]
}

```
