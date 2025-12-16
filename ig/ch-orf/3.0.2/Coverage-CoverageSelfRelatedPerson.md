# Coverage Self (RelatedPerson) - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Coverage Self (RelatedPerson)**

## Example Coverage: Coverage Self (RelatedPerson)



## Resource Content

```json
{
  "resourceType" : "Coverage",
  "id" : "CoverageSelfRelatedPerson",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage"
    ]
  },
  "contained" : [
    {
      "resourceType" : "RelatedPerson",
      "id" : "relatedperson",
      "patient" : {
        "reference" : "Patient/ErikaMusterfrau"
      },
      "name" : [
        {
          "family" : "Freund",
          "given" : ["Max"]
        }
      ]
    }
  ],
  "status" : "active",
  "type" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-25-mainguarantor",
        "code" : "5",
        "display" : "Selbstzahler (z.B. Ausländer ohne Grundversicherung)"
      }
    ]
  },
  "beneficiary" : {
    "reference" : "Patient/ErikaMusterfrau"
  },
  "payor" : [
    {
      "reference" : "#relatedperson"
    }
  ]
}

```
