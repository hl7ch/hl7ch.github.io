# 1 Anamnese - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1 Anamnese**

## Example Observation: 1 Anamnese



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "1-Anamnese",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "272379006",
      "display" : "Event (event)"
    }]
  },
  "subject" : {
    "reference" : "Patient/1-ThomasMueller"
  },
  "encounter" : {
    "reference" : "Encounter/1-Einsatz"
  },
  "valueCodeableConcept" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "261665006",
      "display" : "Unknown"
    }],
    "text" : "Hat sich beim Spazieren im Wald schlecht gefühlt und ist abgesessen."
  }
}

```
