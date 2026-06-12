# 12345601 - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **12345601**

## Example RegulatedAuthorization: 12345601



## Resource Content

```json
{
  "resourceType" : "RegulatedAuthorization",
  "id" : "MA-12345601",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-regulatedauthorization"]
  },
  "contained" : [{
    "resourceType" : "Organization",
    "id" : "holder-Example-AG",
    "meta" : {
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-organization"]
    },
    "identifier" : [{
      "system" : "https://www.swissmedic.ch/fhir/identifier/locations",
      "value" : "12345678"
    },
    {
      "system" : "https://spor.ema.europa.eu/v1/locations",
      "value" : "0123456789"
    },
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601123456789"
    }],
    "name" : "Example AG"
  },
  {
    "resourceType" : "Organization",
    "id" : "regulator-SMC",
    "meta" : {
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-organization"]
    },
    "identifier" : [{
      "system" : "https://spor.ema.europa.eu/v1/locations",
      "value" : "100010911"
    },
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601001398511"
    }],
    "name" : "SMC"
  }],
  "identifier" : [{
    "system" : "http://fhir.ch/ig/ch-idmp/sid/authno",
    "value" : "12345601"
  }],
  "subject" : [{
    "reference" : "MedicinalProductDefinition/Comprehensive-Sample-Combipack"
  }],
  "type" : {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-authorisation-type-cs",
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
      "system" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-authorisation-status",
      "code" : "756005010000001",
      "display" : "approved"
    }]
  },
  "statusDate" : "2023-11-07",
  "validityPeriod" : {
    "start" : "2023-11-07",
    "end" : "2028-11-06"
  },
  "holder" : {
    "reference" : "#holder-Example-AG"
  },
  "regulator" : {
    "reference" : "#regulator-SMC"
  }
}

```
