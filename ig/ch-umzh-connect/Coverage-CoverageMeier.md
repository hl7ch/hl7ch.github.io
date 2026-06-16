# Coverage P. Meier - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Coverage P. Meier**

## Example Coverage: Coverage P. Meier



## Resource Content

```json
{
  "resourceType" : "Coverage",
  "id" : "CoverageMeier",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage"]
  },
  "contained" : [{
    "resourceType" : "Organization",
    "id" : "OrganizationKrankenkasse",
    "meta" : {
      "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"]
    },
    "identifier" : [{
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601002331470"
    }],
    "name" : "Krankenkasse AG",
    "address" : [{
      "line" : ["Kassengraben 222"],
      "city" : "Basel"
    }]
  }],
  "identifier" : [{
    "type" : {
      "coding" : [{
        "system" : "http://fhir.ch/ig/ch-orf/CodeSystem/ch-orf-cs-coverageidentifiertype",
        "code" : "VeKa"
      }]
    },
    "system" : "urn:oid:2.16.756.5.30.1.123.100.1.1.1",
    "value" : "80756015090002647590"
  }],
  "status" : "active",
  "beneficiary" : {
    "reference" : "Patient/PetraMeier"
  },
  "payor" : [{
    "reference" : "#OrganizationKrankenkasse"
  }]
}

```
