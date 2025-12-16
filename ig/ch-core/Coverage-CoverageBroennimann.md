# Coverage Broennimann - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Coverage Broennimann**

## Example Coverage: Coverage Broennimann



## Resource Content

```json
{
  "resourceType" : "Coverage",
  "id" : "CoverageBroennimann",
  "meta" : {
    "source" : "https://www.bfh.ch/de/studium/bachelor/medizininformatik/",
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-coverage"
    ]
  },
  "contained" : [
    {
      "resourceType" : "Organization",
      "id" : "sanitas",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
        ]
      },
      "name" : "Sanitas"
    }
  ],
  "identifier" : [
    {
      "system" : "urn:oid:2.16.756.5.30.1.123.100.1.1.1",
      "value" : "80756015090002647590"
    }
  ],
  "status" : "active",
  "beneficiary" : {
    "reference" : "Patient/ElisabethBroennimannByBFH"
  },
  "payor" : [
    {
      "reference" : "#sanitas"
    }
  ]
}

```
