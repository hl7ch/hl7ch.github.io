# Coverage Self (Patient) - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Coverage Self (Patient)**

## Example Coverage: Coverage Self (Patient)



## Resource Content

```json
{
  "resourceType" : "Coverage",
  "id" : "CoverageSelfPatient",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage"
    ]
  },
  "contained" : [
    {
      "resourceType" : "Patient",
      "id" : "patient",
      "name" : [
        {
          "family" : "Musterfrau",
          "given" : ["Erika"]
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
      "reference" : "#patient"
    }
  ]
}

```
