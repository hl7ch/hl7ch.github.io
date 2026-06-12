# 67211001 - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **67211001**

## Example RegulatedAuthorization: 67211001



## Resource Content

```json
{
  "resourceType" : "RegulatedAuthorization",
  "id" : "MA-67211001",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-regulatedauthorization"]
  },
  "contained" : [{
    "resourceType" : "Organization",
    "id" : "holder-Astellas-Pharma-AG",
    "meta" : {
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-organization"]
    },
    "identifier" : [{
      "system" : "https://www.swissmedic.ch/fhir/identifier/locations",
      "value" : "01100869"
    },
    {
      "system" : "https://spor.ema.europa.eu/v1/locations",
      "value" : "100010745"
    },
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601001000964"
    }],
    "name" : "Astellas Pharma AG"
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
    "value" : "67211001"
  }],
  "subject" : [{
    "reference" : "PackagedProductDefinition/PMP-Gilteritinibi-hemifumaras-40-Filmcoatedtablet"
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
  "statusDate" : "2021-11-09",
  "validityPeriod" : {
    "start" : "2021-11-09"
  },
  "holder" : {
    "reference" : "#holder-Astellas-Pharma-AG"
  },
  "regulator" : {
    "reference" : "#regulator-SMC"
  }
}

```
