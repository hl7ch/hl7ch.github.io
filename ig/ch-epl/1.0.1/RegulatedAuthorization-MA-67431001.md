# 67431001 - CH EPL (R5) v1.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **67431001**

## Example RegulatedAuthorization: 67431001



## Resource Content

```json
{
  "resourceType" : "RegulatedAuthorization",
  "id" : "MA-67431001",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-regulatedauthorization"]
  },
  "contained" : [{
    "resourceType" : "Organization",
    "id" : "holder-Ideogen-AG",
    "meta" : {
      "profile" : ["http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-organization"]
    },
    "identifier" : [{
      "system" : "https://www.swissmedic.ch/fhir/identifier/locations",
      "value" : "01100828"
    },
    {
      "system" : "https://spor.ema.europa.eu/v1/locations",
      "value" : "100012910"
    },
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601001403062"
    }],
    "name" : "IDEOGEN AG"
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
    "value" : "67431001"
  }],
  "subject" : [{
    "reference" : "MedicinalProductDefinition/Triogen-250mg-Capsule"
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
  "statusDate" : "2020-05-28",
  "holder" : {
    "reference" : "#holder-Ideogen-AG"
  },
  "regulator" : {
    "reference" : "#regulator-SMC"
  }
}

```
