# 1bObs - Neisseria Gonorrhoeae - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1bObs - Neisseria Gonorrhoeae**

## Example Observation: 1bObs - Neisseria Gonorrhoeae



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "1bObs-NeisseriaGonorrhoeae",
  "status" : "final",
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "laboratory",
          "display" : "Laboratory"
        }
      ]
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "697-3",
        "display" : "Neisseria gonorrhoeae [Presence] in Urethra by Organism specific culture"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/Pat-001"
  },
  "effectiveDateTime" : "2023-07-14T11:10:00+02:00",
  "performer" : [
    {
      "reference" : "Organization/1bOrg-Labor"
    }
  ],
  "valueCodeableConcept" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "10828004",
        "display" : "Positive"
      }
    ]
  },
  "interpretation" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/v3-ObservationInterpretation",
          "code" : "POS",
          "display" : "Positive"
        }
      ]
    }
  ],
  "specimen" : {
    "reference" : "Specimen/1bSpec-Specimen"
  }
}

```
