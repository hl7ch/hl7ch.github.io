# Limitation 254837009 - CH EPL (R5) v1.0.1

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
| * | Lokal rezidiverendes, nicht resezierbares oder metastasiertes triple-negatives Mammakarzinom (in Kombination mit Chemotherapie) KN 355(mit Preismodell). KEYTRUDA in Kombination mit Chemotherapie zur Behandlung des lokal rezidivierenden, nicht resezierbaren oder metastasierten triple-negativen Mammakarzinoms bei Erwachsenen, deren Tumore PD-L1 mit einem CPS ≥10 exprimieren und die keine vorherige Chemotherapie bei metastasierter Erkrankung erhalten haben.- Falls Patienten vorhergehend systemisch im (neo)adjuvanten Setting behandelt wurden: Mit Vortherapie auf Antrazyklin-Basis, ausser diese war kontraindiziert.- Ohne Therapie mit Checkpoint-Inhibitoren innerhalb der letzten 12 Monate.Folgender Code ist an den Krankenversicherer zu übermitteln: 20416.17 |

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
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "254837009",
          "display" : "Malignant tumor of breast"
        }],
        "text" : "Lokal rezidiverendes, nicht resezierbares oder metastasiertes triple-negatives Mammakarzinom (in Kombination mit Chemotherapie) KN 355\n(mit Preismodell). KEYTRUDA in Kombination mit Chemotherapie zur Behandlung des lokal rezidivierenden, nicht resezierbaren oder metastasierten triple-negativen Mammakarzinoms bei Erwachsenen, deren Tumore PD-L1 mit einem CPS ≥10 exprimieren und die keine vorherige Chemotherapie bei metastasierter Erkrankung erhalten haben.\n- Falls Patienten vorhergehend systemisch im (neo)adjuvanten Setting behandelt wurden: Mit Vortherapie auf Antrazyklin-Basis, ausser diese war kontraindiziert.\n- Ohne Therapie mit Checkpoint-Inhibitoren innerhalb der letzten 12 Monate.\nFolgender Code ist an den Krankenversicherer zu übermitteln: 20416.17"
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
