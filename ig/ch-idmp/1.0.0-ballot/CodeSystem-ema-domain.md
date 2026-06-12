# EMA - Domain - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EMA - Domain**

## CodeSystem: EMA - Domain 

| | |
| :--- | :--- |
| *Official URL*:http://spor.ema.europa.eu/v1/lists/100000000004 | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:EMADomainCS |
| **Copyright/Legal**: CC0-1.0 | |

 
CH - Standard Terms used in Switzerland (aggregations of codes of Value Set for the Domain from EMA used by SMC) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [EMADomainVS](ValueSet-ema-domain.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ema-domain",
  "url" : "http://spor.ema.europa.eu/v1/lists/100000000004",
  "version" : "1.0.0-ballot",
  "name" : "EMADomainCS",
  "title" : "EMA - Domain",
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
  "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of Value Set for the Domain from EMA used by SMC)",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 3,
  "concept" : [{
    "code" : "100000000012",
    "display" : "Human use",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Anwendung am Menschen"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "H"
    }]
  },
  {
    "code" : "100000000013",
    "display" : "Veterinary use",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Anwendung am Tier"
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
    "code" : "100000000014",
    "display" : "Human and Veterinary use",
    "designation" : [{
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000003001",
        "display" : "Fully specified name"
      },
      "value" : "Anwendung an Mensch und Tier"
    },
    {
      "language" : "de",
      "use" : {
        "system" : "http://snomed.info/sct",
        "code" : "900000000000013009",
        "display" : "Synonym (core metadata concept)"
      },
      "value" : "H&V"
    }]
  }]
}

```
