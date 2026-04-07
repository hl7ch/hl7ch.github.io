# Limitation 64766004 - CH EPL (R5) v1.0.1

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
| * | Moderate bis schwere Colitis ulcerosaBehandlung erwachsener Patienten mit ABRILADA, wenn die vorausgegangene konventionelle Therapie (z.B. mit Azathioprin, 6-Mercaptopurin oder Glukokortikoiden) unzulänglich war oder nicht vertragen wurde. |

### IntendedEffects

| | |
| :--- | :--- |
| - | **Concept** |
| * | therapeutic |




## Resource Content

```json
{
  "resourceType" : "ClinicalUseDefinition",
  "id" : "LIM-64766004-ABRILADA",
  "type" : "indication",
  "indication" : {
    "diseaseSymptomProcedure" : {
      "concept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "64766004",
          "display" : "Ulcerative colitis"
        }],
        "text" : "Moderate bis schwere Colitis ulcerosa\nBehandlung erwachsener Patienten mit ABRILADA, wenn die vorausgegangene konventionelle Therapie (z.B. mit Azathioprin, 6-Mercaptopurin oder Glukokortikoiden) unzulänglich war oder nicht vertragen wurde."
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
