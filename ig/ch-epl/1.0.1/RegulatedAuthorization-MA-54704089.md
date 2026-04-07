# 54704089 - CH EPL (R5) v1.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **54704089**

## Example RegulatedAuthorization: 54704089



## Resource Content

```json
{
  "resourceType" : "RegulatedAuthorization",
  "id" : "MA-54704089",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-regulatedauthorization"]
  },
  "contained" : [{
    "resourceType" : "Organization",
    "id" : "holder-Sandoz-Pharmaceuticals-AG",
    "meta" : {
      "profile" : ["http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-organization"]
    },
    "identifier" : [{
      "system" : "https://www.swissmedic.ch/fhir/identifier/locations",
      "value" : "01006431"
    },
    {
      "system" : "https://spor.ema.europa.eu/v1/locations",
      "value" : "100054743"
    },
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601001029439"
    }],
    "name" : "Sandoz Pharmaceuticals AG"
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
    "value" : "54704089"
  }],
  "subject" : [{
    "reference" : "MedicinalProductDefinition/Estalis-Transdermalpatch"
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
  "statusDate" : "1999-08-17",
  "holder" : {
    "reference" : "#holder-Sandoz-Pharmaceuticals-AG"
  },
  "regulator" : {
    "reference" : "#regulator-SMC"
  }
}

```
