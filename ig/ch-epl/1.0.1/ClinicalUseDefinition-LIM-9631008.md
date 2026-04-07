# Limitation 9631008 - CH EPL (R5) v1.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Limitation 9631008**

## Example ClinicalUseDefinition: Limitation 9631008

**type**: Indication

> **indication**

### DiseaseSymptomProcedures

| | |
| :--- | :--- |
| - | **Concept** |
| * | Ankylosierende Spondylitis (Morbus Bechterew)Behandlung mit ABRILADA, wenn die vorausgegangene konventionelle Therapie unzulänglich war oder nicht vertragen wurde. |

### IntendedEffects

| | |
| :--- | :--- |
| - | **Concept** |
| * | therapeutic |




## Resource Content

```json
{
  "resourceType" : "ClinicalUseDefinition",
  "id" : "LIM-9631008",
  "type" : "indication",
  "indication" : {
    "diseaseSymptomProcedure" : {
      "concept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "9631008",
          "display" : "Ankylosing spondylitis"
        }],
        "text" : "Ankylosierende Spondylitis (Morbus Bechterew)\nBehandlung mit ABRILADA, wenn die vorausgegangene konventionelle Therapie unzulänglich war oder nicht vertragen wurde."
      }
    },
    "intendedEffect" : {
      "concept" : {
        "coding" : [{
          "system" : "http://spor.ema.europa.eu/v1/lists/200000003186",
          "code" : "200000003194",
          "display" : "therapeutic"
        }]
      }
    }
  }
}

```
