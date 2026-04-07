# CH EPL - Reimbursement Status - CH EPL (R5) v1.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPL - Reimbursement Status**

## CodeSystem: CH EPL - Reimbursement Status 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-reimbursement-status | *Version*:1.0.1 |
| Active as of 2026-04-07 | *Computable Name*:ChEplReimbursementStatusCS |
| **Copyright/Legal**: CC0-1.0 | |

 
CH ePL - Standard Terms used in Switzerland (aggregations of codes of ValueSets Vergütungs Status 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChEplReimbursementStatusVS](ValueSet-ch-epl-foph-reimbursement-status.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-epl-foph-reimbursement-status",
  "url" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-reimbursement-status",
  "version" : "1.0.1",
  "name" : "ChEplReimbursementStatusCS",
  "title" : "CH EPL - Reimbursement Status",
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
  "description" : "CH ePL - Standard Terms used in Switzerland (aggregations of codes of ValueSets Vergütungs Status",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 2,
  "concept" : [{
    "code" : "756001021001",
    "display" : "Reimbursed",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Vergütet"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "V"
    }]
  },
  {
    "code" : "756001021002",
    "display" : "not Reimbursed",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "nicht Vergütet"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "nV"
    }]
  }]
}

```
