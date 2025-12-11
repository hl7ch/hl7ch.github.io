# CH - Authorisation Type - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH - Authorisation Type**

## CodeSystem: CH - Authorisation Type 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/CodeSystem/ch-authorisation-type | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:ChAuthorisationTypeCS |
| **Copyright/Legal**: CC0-1.0 | |

 
CH EPL - Standard Terms used in Switzerland (aggregations of codes of ValueSets Authorisation Type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChAuthorisationTypeVS](ValueSet-ch-authorisation-type.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-authorisation-type",
  "url" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-authorisation-type",
  "version" : "1.0.0",
  "name" : "ChAuthorisationTypeCS",
  "title" : "CH - Authorisation Type",
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
  "description" : "CH EPL - Standard Terms used in Switzerland (aggregations of codes of ValueSets Authorisation Type",
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
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 3,
  "concept" : [
    {
      "code" : "756000002001",
      "display" : "Marketing Authorisation",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Marktzulassung"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "MA"
        }
      ]
    },
    {
      "code" : "756000002002",
      "display" : "Orphan Designation",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Orphan Zulassung"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "OR"
        }
      ]
    },
    {
      "code" : "756000002003",
      "display" : "Reimbursement SL",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Vergütung SL"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "SL"
        }
      ]
    }
  ]
}

```
