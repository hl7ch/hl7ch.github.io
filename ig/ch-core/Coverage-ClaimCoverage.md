# Krankenkasse AG - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Krankenkasse AG**

## Example Coverage: Krankenkasse AG



## Resource Content

```json
{
  "resourceType" : "Coverage",
  "id" : "ClaimCoverage",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-coverage"
    ]
  },
  "contained" : [
    {
      "resourceType" : "Organization",
      "id" : "ClaimInsurance",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
        ]
      },
      "identifier" : [
        {
          "system" : "urn:oid:2.51.1.3",
          "value" : "7601002331470"
        }
      ],
      "name" : "Krankenkasse AG",
      "address" : [
        {
          "line" : ["Kassengraben 222"],
          "city" : "Basel",
          "postalCode" : "4000"
        }
      ]
    }
  ],
  "status" : "active",
  "beneficiary" : {
    "reference" : "Patient/ClaimPatient"
  },
  "payor" : [
    {
      "reference" : "#ClaimInsurance"
    }
  ]
}

```
