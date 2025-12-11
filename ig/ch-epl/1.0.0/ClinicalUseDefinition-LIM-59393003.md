# Limitation 59393003 - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Limitation 59393003**

## Example ClinicalUseDefinition: Limitation 59393003

**type**: Indication

> **indication**

### DiseaseSymptomProcedures

| | |
| :--- | :--- |
| - | **Concept** |
| * | Hidradenitis suppurativa |

### IntendedEffects

| | |
| :--- | :--- |
| - | **Concept** |
| * | therapeutic |




## Resource Content

```json
{
  "resourceType" : "ClinicalUseDefinition",
  "id" : "LIM-59393003",
  "type" : "indication",
  "indication" : {
    "diseaseSymptomProcedure" : {
      "concept" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "59393003",
            "display" : "Hidradenitis suppurativa"
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
