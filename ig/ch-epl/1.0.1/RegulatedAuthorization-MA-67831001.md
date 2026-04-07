# 67831001 - CH EPL (R5) v1.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **67831001**

## Example RegulatedAuthorization: 67831001



## Resource Content

```json
{
  "resourceType" : "RegulatedAuthorization",
  "id" : "MA-67831001",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-regulatedauthorization"]
  },
  "contained" : [{
    "resourceType" : "Organization",
    "id" : "holder-Pfizer-AG",
    "meta" : {
      "profile" : ["http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-organization"]
    },
    "identifier" : [{
      "system" : "https://www.swissmedic.ch/fhir/identifier/locations",
      "value" : "01001107"
    },
    {
      "system" : "https://spor.ema.europa.eu/v1/locations",
      "value" : "100015286"
    },
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601001010604"
    }],
    "name" : "Pfizer AG"
  },
  {
    "resourceType" : "Organization",
    "id" : "regulator-SMC",
    "meta" : {
      "profile" : ["http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-organization"]
    },
    "identifier" : [{
      "system" : "https://spor.ema.europa.eu/v1/locations",
      "value" : "100010911"
    },
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601001398511"
    }],
    "name" : "Swissmedic Swiss Agency for Therapeutic Products"
  }],
  "identifier" : [{
    "system" : "http://fhir.ch/ig/ch-epl/sid/authno",
    "value" : "66231001"
  }],
  "subject" : [{
    "reference" : "PackagedProductDefinition/PMP-Abrilada-40mg-0.8ml-1-Pre-Filled-Pen"
  }],
  "type" : {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-authorisation-type",
      "code" : "756000002001",
      "display" : "Marketing Authorisation"
    }]
  },
  "region" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH",
      "display" : "Switzerland"
    }]
  }],
  "status" : {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-authorisation-status",
      "code" : "756005023007",
      "display" : "valid"
    }]
  },
  "statusDate" : "2020-02-12",
  "holder" : {
    "reference" : "#holder-Pfizer-AG"
  },
  "regulator" : {
    "reference" : "#regulator-SMC"
  }
}

```
