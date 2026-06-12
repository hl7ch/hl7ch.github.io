# CH - Authorisation Type - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH - Authorisation Type**

## CodeSystem: CH - Authorisation Type 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/CodeSystem/ch-authorisation-type-cs | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAuthorisationTypeCS |
| **Copyright/Legal**: CC0-1.0 | |

 
CH EPL - Standard Terms used in Switzerland (aggregations of codes of ValueSets Authorisation Type 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChAuthorisationTypeVS](ValueSet-ch-authorisation-type-vs.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-authorisation-type-cs",
  "url" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-authorisation-type-cs",
  "version" : "1.0.0-ballot",
  "name" : "ChAuthorisationTypeCS",
  "title" : "CH - Authorisation Type",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-12T16:14:23+00:00",
  "publisher" : "Refdata Foundation",
  "contact" : [{
    "name" : "Refdata Foundation",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.refdata.ch/de/"
    }]
  }],
  "description" : "CH EPL - Standard Terms used in Switzerland (aggregations of codes of ValueSets Authorisation Type",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 4,
  "concept" : [{
    "code" : "756000002001",
    "display" : "Marketing Authorisation",
    "designation" : [{
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
        "code" : "900000000000013009",
        "display" : "Synonym"
      },
      "value" : "MarketingAuth"
    }]
  },
  {
    "code" : "756000002002",
    "display" : "Orphan Drug Authorization",
    "designation" : [{
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
        "code" : "900000000000013009",
        "display" : "Synonym"
      },
      "value" : "Orphan"
    }]
  },
  {
    "code" : "756000002003",
    "display" : "Pediatric Use Drug Authorization",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Pädiatrische Zulassung"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym"
      },
      "value" : "Pediatric"
    }]
  },
  {
    "code" : "756000002004",
    "display" : "Reimbursement SL",
    "designation" : [{
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
        "code" : "900000000000013009",
        "display" : "Synonym"
      },
      "value" : "SL"
    }]
  }]
}

```
