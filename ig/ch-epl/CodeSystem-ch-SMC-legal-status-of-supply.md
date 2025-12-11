# CH SMC - Legal Status of Supply - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH SMC - Legal Status of Supply**

## CodeSystem: CH SMC - Legal Status of Supply 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-legal-status-of-supply | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:ChSMCLegalStatusOfSupplyCS |
| **Copyright/Legal**: CC0-1.0 | |

 
CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Abgabekategorie) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChSMCLegalStatusOfSupplyVS](ValueSet-ch-SMC-legal-status-of-supply.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-SMC-legal-status-of-supply",
  "url" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-legal-status-of-supply",
  "version" : "1.0.0",
  "name" : "ChSMCLegalStatusOfSupplyCS",
  "title" : "CH SMC - Legal Status of Supply",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-11T12:35:50+00:00",
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
  "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Abgabekategorie)",
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
  "count" : 10,
  "concept" : [
    {
      "code" : "756005022001",
      "display" : "Medicinal product subject to medical or veterinary prescription single dispensation (A)",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Einmalige Abgabe auf ärztliche oder tierärztliche Verschreibung (A)"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym"
          },
          "value" : "A"
        }
      ]
    },
    {
      "code" : "756005022002",
      "display" : "Medicinal product subject to medical or veterinary prescription single dispensation (A+)",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Einmalige Abgabe auf ärztliche oder tierärztliche Verschreibung (A)"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym"
          },
          "value" : "A+"
        }
      ]
    },
    {
      "code" : "756005022003",
      "display" : "Medicinal product subject to medical or veterinary prescription (B)",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Abgabe auf ärztliche oder tierärztliche Verschreibung (B)"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym"
          },
          "value" : "B"
        }
      ]
    },
    {
      "code" : "756005022004",
      "display" : "Medicinal product subject to medical or veterinary prescription (B)/Dispensation after healthcare professional consultation (C)",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Abgabe auf ärztliche oder tierärztliche Verschreibung (B)/Abgabe nach Fachberatung durch Medizinalpersonen"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym"
          },
          "value" : "B/C"
        }
      ]
    },
    {
      "code" : "756005022005",
      "display" : "Medicinal product subject to medical or veterinary prescription (B)/Dispensation after consultation (D)",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Abgabe auf ärztliche oder tierärztliche Verschreibung (B)/Abgabe nach Fachberatung (D)"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym"
          },
          "value" : "B/D"
        }
      ]
    },
    {
      "code" : "756005022006",
      "display" : "Dispensation after healthcare professional consultation (C)",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Abgabe nach Fachberatung durch Medizinalpersonen (C)"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym"
          },
          "value" : "C"
        }
      ]
    },
    {
      "code" : "756005022007",
      "display" : "Dispensation after healthcare professional consultation (C)/Dispension after consultation (D)",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Abgabe nach Fachberatung durch Medizinalpersonen (C)/Abgabe nach Fachberatung (D)"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym"
          },
          "value" : "C/D"
        }
      ]
    },
    {
      "code" : "756005022008",
      "display" : "Dispensation after consultation (D)",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Abgabe nach Fachberatung (D)"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym"
          },
          "value" : "D"
        }
      ]
    },
    {
      "code" : "756005022009",
      "display" : "Dispensation after consultation (D)/Dispension without consultation (E)",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Abgabe nach Fachberatung (D) / Abgabe ohne Fachberatung (E)"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym"
          },
          "value" : "D/E"
        }
      ]
    },
    {
      "code" : "756005022010",
      "display" : "Dispensation without consultation (E)",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Abgabe ohne Fachberatung (E)"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym"
          },
          "value" : "E"
        }
      ]
    }
  ]
}

```
