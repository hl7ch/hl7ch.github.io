# CH SMC - Legal Status of Supply - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH SMC - Legal Status of Supply**

## CodeSystem: CH SMC - Legal Status of Supply 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-legal-status-of-supply | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChSMCLegalStatusOfSupplyCS |
| **Copyright/Legal**: CC0-1.0 | |

 
CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Abgabekategorie) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChSMCLegalStatusOfSupplyVS](ValueSet-ch-SMC-legal-status-of-supply.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-SMC-legal-status-of-supply",
  "url" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-legal-status-of-supply",
  "version" : "1.0.0-ballot",
  "name" : "ChSMCLegalStatusOfSupplyCS",
  "title" : "CH SMC - Legal Status of Supply",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-12T16:17:59+00:00",
  "publisher" : "Refdata Foundation",
  "contact" : [{
    "name" : "Refdata Foundation",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.refdata.ch/de/"
    }]
  }],
  "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Abgabekategorie)",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 7,
  "concept" : [{
    "code" : "756005034000001",
    "display" : "A: Single dispensing requiring a medical or veterinary prescription",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "A: Einmalige Abgabe auf ärztliche oder tierärztliche Verschreibung"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym"
      },
      "value" : "A"
    }]
  },
  {
    "code" : "756005034000002",
    "display" : "B: Dispensed on prescription by a physician or veterinarian",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "B: Abgabe auf ärztliche oder tierärztliche Verschreibung"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym"
      },
      "value" : "B"
    }]
  },
  {
    "code" : "756005034000003",
    "display" : "B/D: Dispensed on prescription by a physician or veterinarian (B)/Dispensed following expert advice (D)",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "B/D: Abgabe auf ärztliche oder tierärztliche Verschreibung (B)/Abgabe nach Fachberatung durch Medizinalpersonen (D)"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym"
      },
      "value" : "B/D"
    }]
  },
  {
    "code" : "756005034000004",
    "display" : "C: Dispensed following expert advice by healthcare professionals",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "C: Abgabe nach Fachberatung durch Medizinalpersonen"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym"
      },
      "value" : "C"
    }]
  },
  {
    "code" : "756005034000005",
    "display" : "D: Dispensed following expert advice",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "D: Abgabe nach Fachberatung"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym"
      },
      "value" : "D"
    }]
  },
  {
    "code" : "756005034000006",
    "display" : "E: Dispensing in the absence of specialist advice",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "E: Abgabe ohne Fachberatung"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym"
      },
      "value" : "E"
    }]
  },
  {
    "code" : "756005034000007",
    "display" : "Medicinal product subject to medical or veterinary prescription single dispensation (A+)",
    "designation" : [{
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
    }]
  }]
}

```
