# 68793001 - CH EPL (R5) v1.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **68793001**

## Example RegulatedAuthorization: 68793001



## Resource Content

```json
{
  "resourceType" : "RegulatedAuthorization",
  "id" : "MA-68793001",
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
    "value" : "68793001"
  }],
  "subject" : [{
    "reference" : "MedicinalProductDefinition/Paxlovid-Filmcoatedtablet"
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
      "code" : "756005023002",
      "display" : "limited authorisation"
    }]
  },
  "statusDate" : "2022-06-15",
  "holder" : {
    "reference" : "#holder-Pfizer-AG"
  },
  "regulator" : {
    "reference" : "#regulator-SMC"
  }
}

```
