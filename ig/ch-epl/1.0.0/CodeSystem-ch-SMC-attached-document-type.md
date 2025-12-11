# CH SMC - Attached Document Type - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH SMC - Attached Document Type**

## CodeSystem: CH SMC - Attached Document Type 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-attached-document-type | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:ChSMCAttachedDocumentTypeCS |
| **Copyright/Legal**: CC0-1.0 | |

 
CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Typ des Anhangs) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChSMCAttachedDocumentTypeVS](ValueSet-ch-SMC-attached-document-type.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-SMC-attached-document-type",
  "url" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-attached-document-type",
  "version" : "1.0.0",
  "name" : "ChSMCAttachedDocumentTypeCS",
  "title" : "CH SMC - Attached Document Type",
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
  "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Typ des Anhangs)",
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
  "count" : 4,
  "concept" : [
    {
      "code" : "756005007001",
      "display" : "Information for healthcare professionals",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Fachinformation"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym"
          },
          "value" : "FI"
        }
      ]
    },
    {
      "code" : "756005007002",
      "display" : "Patient Information",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Patienteninformation"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym"
          },
          "value" : "PI"
        }
      ]
    },
    {
      "code" : "756005007003",
      "display" : "Packaging",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Packmitteltexte"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym"
          },
          "value" : "PE"
        }
      ]
    },
    {
      "code" : "756005007004",
      "display" : "Basic information for export",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Basisinformation für den Export"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym"
          },
          "value" : "EX"
        }
      ]
    }
  ]
}

```
