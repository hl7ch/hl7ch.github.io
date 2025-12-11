# CH EPL - Limitation Status - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPL - Limitation Status**

## CodeSystem: CH EPL - Limitation Status 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-limitationstatus | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:ChEplLimitationStatusCS |
| **Copyright/Legal**: CC0-1.0 | |

 
CH EPL - Standard Terms used in Switzerland (aggregations of codes of ValueSets Limitierungsstatus 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChEplLimitationStatusVS](ValueSet-ch-epl-foph-limitationstatus.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-epl-foph-limitationstatus",
  "url" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-limitationstatus",
  "version" : "1.0.0",
  "name" : "ChEplLimitationStatusCS",
  "title" : "CH EPL - Limitation Status",
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
  "description" : "CH EPL - Standard Terms used in Switzerland (aggregations of codes of ValueSets Limitierungsstatus",
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
  "count" : 2,
  "concept" : [
    {
      "code" : "756002071001",
      "display" : "Limitation Reimbursed",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Limitierung Vergütet"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym (core metadata concept)"
          },
          "value" : "LV"
        }
      ]
    },
    {
      "code" : "756002071002",
      "display" : "Limitation not Reimbursed",
      "designation" : [
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000003001",
            "display" : "Fully specified name"
          },
          "value" : "Limitierung nicht Vergütet"
        },
        {
          "language" : "de",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009",
            "display" : "Synonym (core metadata concept)"
          },
          "value" : "LnV"
        }
      ]
    }
  ]
}

```
