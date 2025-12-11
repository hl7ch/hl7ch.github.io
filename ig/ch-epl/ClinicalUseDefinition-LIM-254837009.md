# Limitation 254837009 - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Limitation 254837009**

## Example ClinicalUseDefinition: Limitation 254837009

**type**: Indication

> **indication**

### DiseaseSymptomProcedures

| | |
| :--- | :--- |
| - | **Concept** |
| * | Malignant tumor of breast |

### IntendedEffects

| | |
| :--- | :--- |
| - | **Concept** |
| * | therapeutic |




## Resource Content

```json
{
  "resourceType" : "ClinicalUseDefinition",
  "id" : "LIM-254837009",
  "type" : "indication",
  "indication" : {
    "diseaseSymptomProcedure" : {
      "concept" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "254837009",
            "display" : "Malignant tumor of breast"
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
