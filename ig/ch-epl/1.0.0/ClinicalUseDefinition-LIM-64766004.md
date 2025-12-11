# Limitation 64766004 - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Limitation 64766004**

## Example ClinicalUseDefinition: Limitation 64766004

**type**: Indication

> **indication**

### DiseaseSymptomProcedures

| | |
| :--- | :--- |
| - | **Concept** |
| * | Ulcerative colitis |

### IntendedEffects

| | |
| :--- | :--- |
| - | **Concept** |
| * | therapeutic |




## Resource Content

```json
{
  "resourceType" : "ClinicalUseDefinition",
  "id" : "LIM-64766004",
  "type" : "indication",
  "indication" : {
    "diseaseSymptomProcedure" : {
      "concept" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "64766004",
            "display" : "Ulcerative colitis"
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
