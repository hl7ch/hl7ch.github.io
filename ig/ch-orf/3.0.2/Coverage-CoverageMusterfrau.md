# Coverage KVG - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Coverage KVG**

## Example Coverage: Coverage KVG



## Resource Content

```json
{
  "resourceType" : "Coverage",
  "id" : "CoverageMusterfrau",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage"
    ]
  },
  "contained" : [
    {
      "resourceType" : "Organization",
      "id" : "sanitas",
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
    "reference" : "Patient/ErikaMusterfrau"
  },
  "payor" : [
    {
      "reference" : "#sanitas"
    }
  ]
}

```
