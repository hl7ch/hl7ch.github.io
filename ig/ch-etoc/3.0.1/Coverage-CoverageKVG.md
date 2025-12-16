# Coverage KVG - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Coverage KVG**

## Example Coverage: Coverage KVG



## Resource Content

```json
{
  "resourceType" : "Coverage",
  "id" : "CoverageKVG",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage"
    ]
  },
  "contained" : [
    {
      "resourceType" : "Organization",
      "id" : "Sanitas",
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
      "type" : {
        "coding" : [
          {
            "system" : "http://fhir.ch/ig/ch-orf/CodeSystem/ch-orf-cs-coverageidentifiertype",
            "code" : "VeKa"
          }
        ]
      },
      "system" : "urn:oid:2.16.756.5.30.1.123.100.1.1.1",
      "value" : "80756015090002647590"
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
    "reference" : "Patient/SUfferer"
  },
  "payor" : [
    {
      "reference" : "#Sanitas"
    }
  ]
}

```
