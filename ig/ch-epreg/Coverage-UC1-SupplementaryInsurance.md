# UC 1: Supplementary Insurance - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1: Supplementary Insurance**

## Example Coverage: UC 1: Supplementary Insurance



## Resource Content

```json
{
  "resourceType" : "Coverage",
  "id" : "UC1-SupplementaryInsurance",
  "language" : "de-CH",
  "contained" : [
    {
      "resourceType" : "Organization",
      "id" : "Helsana",
      "name" : "Helsana"
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
      "value" : "555555555"
    }
  ],
  "status" : "active",
  "type" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-core/CodeSystem/mainguarantor",
        "code" : "ZV",
        "display" : "Zusatzversicherung"
      }
    ]
  },
  "beneficiary" : {
    "reference" : "Patient/UC1-KatrinKinderlieb"
  },
  "payor" : [
    {
      "reference" : "#Helsana"
    }
  ]
}

```
