# Limitation 9014002 - CH EPL (R5) v1.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Limitation 9014002**

## Example ClinicalUseDefinition: Limitation 9014002

**type**: Indication

> **indication**

### DiseaseSymptomProcedures

| | |
| :--- | :--- |
| - | **Concept** |
| * | Schwere Plaque-PsoriasisBehandlung erwachsener Patienten mit schwerer Plaque-Psoriasis, bei denen eine Phototherapie oder eine der folgenden konventionellen systemischen Therapien (Ciclosporin, Methotrexat, Acitretin) keinen therapeutischen Erfolg gezeigt haben. Falls nach 16 Wochen kein therapeutischer Erfolg eingetreten ist, ist die Behandlung abzubrechen. |

### IntendedEffects

| | |
| :--- | :--- |
| - | **Concept** |
| * | therapeutic |




## Resource Content

```json
{
  "resourceType" : "ClinicalUseDefinition",
  "id" : "LIM-9014002",
  "type" : "indication",
  "indication" : {
    "diseaseSymptomProcedure" : {
      "concept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "9014002",
          "display" : "Psoriasis (disorder)"
        }],
        "text" : "Schwere Plaque-Psoriasis\nBehandlung erwachsener Patienten mit schwerer Plaque-Psoriasis, bei denen eine Phototherapie oder eine der folgenden konventionellen systemischen Therapien (Ciclosporin, Methotrexat, Acitretin) keinen therapeutischen Erfolg gezeigt haben. Falls nach 16 Wochen kein therapeutischer Erfolg eingetreten ist, ist die Behandlung abzubrechen."
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
