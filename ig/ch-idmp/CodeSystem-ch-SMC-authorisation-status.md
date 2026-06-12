# CH SMC - Authorisation Status - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH SMC - Authorisation Status**

## CodeSystem: CH SMC - Authorisation Status 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-authorisation-status | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChSMCAuthorisationStatusCS |
| **Copyright/Legal**: CC0-1.0 | |

 
CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Zulassungsstatus) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChSMCAuthorisationStatusVS](ValueSet-ch-SMC-authorisation-status.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-SMC-authorisation-status",
  "url" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-authorisation-status",
  "version" : "1.0.0-ballot",
  "name" : "ChSMCAuthorisationStatusCS",
  "title" : "CH SMC - Authorisation Status",
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
  "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Zulassungsstatus)",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 7,
  "concept" : [{
    "code" : "756005010000001",
    "display" : "approved",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "zugelassen"
    }]
  },
  {
    "code" : "756005010000002",
    "display" : "suspended",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "sistiert"
    }]
  },
  {
    "code" : "756005010000003",
    "display" : "temporary",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "befristet"
    }]
  },
  {
    "code" : "756005010000004",
    "display" : "registered",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "angemeldet"
    }]
  },
  {
    "code" : "756005010000005",
    "display" : "temporary approval expired",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "befristete Zulassung abgelaufen"
    }]
  },
  {
    "code" : "756005010000006",
    "display" : "no longer approved",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "nicht mehr zugelassen"
    }]
  },
  {
    "code" : "756005010000007",
    "display" : "never approved",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "nie zugelassen"
    }]
  }]
}

```
