# 1 Symptom - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1 Symptom**

## Example Observation: 1 Symptom



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "1-Symptome",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "404684003",
      "display" : "Clinical finding (finding)"
    }]
  },
  "subject" : {
    "reference" : "Patient/1-ThomasMueller"
  },
  "encounter" : {
    "reference" : "Encounter/1-Einsatz"
  },
  "valueCodeableConcept" : {
    "text" : "Starke Schmerzen in der Brust und im linken Oberarm verspürt."
  }
}

```
