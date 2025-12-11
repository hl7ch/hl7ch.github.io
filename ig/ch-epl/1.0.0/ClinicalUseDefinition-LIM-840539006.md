# Limitation 840539006 - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Limitation 840539006**

## Example ClinicalUseDefinition: Limitation 840539006

**type**: Indication

> **indication**

### DiseaseSymptomProcedures

| | |
| :--- | :--- |
| - | **Concept** |
| * | Disease caused by severe acute respiratory syndrome coronavirus 2 (disorder) |

### IntendedEffects

| | |
| :--- | :--- |
| - | **Concept** |
| * | therapeutic |




## Resource Content

```json
{
  "resourceType" : "ClinicalUseDefinition",
  "id" : "LIM-840539006",
  "type" : "indication",
  "indication" : {
    "diseaseSymptomProcedure" : {
      "concept" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "840539006",
            "display" : "Disease caused by severe acute respiratory syndrome coronavirus 2 (disorder)"
          }
        ]
      }
    },
    "intendedEffect" : {
      "concept" : {
        "coding" : [
          {
            "system" : "http://spor.ema.europa.eu/v1/lists/200000003186",
            "code" : "200000003194",
            "display" : "therapeutic"
          }
        ]
      }
    }
  }
}

```
