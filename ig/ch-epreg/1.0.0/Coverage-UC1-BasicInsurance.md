# UC 1: Basic Insurance - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1: Basic Insurance**

## Example Coverage: UC 1: Basic Insurance



## Resource Content

```json
{
  "resourceType" : "Coverage",
  "id" : "UC1-BasicInsurance",
  "language" : "de-CH",
  "contained" : [
    {
      "resourceType" : "Organization",
      "id" : "Sanitas",
      "name" : "Sanitas"
    }
  ],
  "identifier" : [
    {
      "type" : {
        "coding" : [
          {
            "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
            "code" : "MB",
            "display" : "Member Number"
          }
        ]
      },
      "system" : "http://example.com/identifiers/insurance-number",
      "value" : "123456789"
    }
  ],
  "status" : "active",
  "type" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-25-mainguarantor",
        "code" : "1",
        "display" : "Krankenversicherung (obligat.)"
      }
    ]
  },
  "beneficiary" : {
    "reference" : "Patient/UC1-KatrinKinderlieb"
  },
  "payor" : [
    {
      "reference" : "#Sanitas"
    }
  ]
}

```
