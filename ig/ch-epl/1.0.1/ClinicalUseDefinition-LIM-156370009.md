# Limitation 156370009 - CH EPL (R5) v1.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Limitation 156370009**

## Example ClinicalUseDefinition: Limitation 156370009

**type**: Indication

> **indication**

### DiseaseSymptomProcedures

| | |
| :--- | :--- |
| - | **Concept** |
| * | Psoriasis-ArthritisBehandlung mit ABRILADA, wenn die vorausgegangene Standardtherapie mit krankheitsmodifizierenden Antirheumatika (DMARDs) unzulänglich war.Aktive polyartikuläre juvenile idiopathische Arthritis bei Kindern und Jugendlichen ab einem Körpergewicht von ≥ 30 kgBehandlung mit ABRILADA, wenn die vorausgegangene Standardtherapie mit krankheitsmodifizierenden Antirheumatika (DMARDs) unzulänglich war. |

### IntendedEffects

| | |
| :--- | :--- |
| - | **Concept** |
| * | therapeutic |




## Resource Content

```json
{
  "resourceType" : "ClinicalUseDefinition",
  "id" : "LIM-156370009",
  "type" : "indication",
  "indication" : {
    "diseaseSymptomProcedure" : {
      "concept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "156370009",
          "display" : "Psoriatic arthritis"
        }],
        "text" : "Psoriasis-Arthritis\nBehandlung mit ABRILADA, wenn die vorausgegangene Standardtherapie mit krankheitsmodifizierenden Antirheumatika (DMARDs) unzulänglich war.\nAktive polyartikuläre juvenile idiopathische Arthritis bei Kindern und Jugendlichen ab einem Körpergewicht von ≥ 30 kg\nBehandlung mit ABRILADA, wenn die vorausgegangene Standardtherapie mit krankheitsmodifizierenden Antirheumatika (DMARDs) unzulänglich war."
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
