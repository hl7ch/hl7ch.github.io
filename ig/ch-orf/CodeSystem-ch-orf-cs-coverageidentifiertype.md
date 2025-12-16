# Coverage Identifier Type - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Coverage Identifier Type**

## CodeSystem: Coverage Identifier Type 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/CodeSystem/ch-orf-cs-coverageidentifiertype | *Version*:3.0.2 |
| Active as of 2025-12-16 | *Computable Name*:ChOrfCoverageIdentifierType |
| **Copyright/Legal**: CC0-1.0 | |

 
Code System for CH ORF Coverage Identifier Type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChOrfCoverageIdentifierType](ValueSet-ch-orf-vs-coverageidentifiertype.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-orf-cs-coverageidentifiertype",
  "url" : "http://fhir.ch/ig/ch-orf/CodeSystem/ch-orf-cs-coverageidentifiertype",
  "version" : "3.0.2",
  "name" : "ChOrfCoverageIdentifierType",
  "title" : "Coverage Identifier Type",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-16T09:36:47+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    }
  ],
  "description" : "Code System for CH ORF Coverage Identifier Type",
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
  "count" : 5,
  "concept" : [
    {
      "code" : "VeKa",
      "display" : "Insurance Card Number"
    },
    {
      "code" : "Claim",
      "display" : "Claim Number"
    },
    {
      "code" : "Other",
      "display" : "Other Identifier"
    },
    {
      "code" : "IV",
      "display" : "IV-Verfügungsnummer"
    },
    {
      "code" : "MV",
      "display" : "MV-Versichertennummer"
    }
  ]
}

```
