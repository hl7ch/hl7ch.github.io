# Limitation 59393003 - CH EPL (R5) v1.0.1

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
| * | Aktive, mittelschwere bis schwere Hidradenitis suppurativa (Acne inversa)Behandlung erwachsener Patienten, wenn die vorausgegangene systemische Therapie mit Antibiotika unzulänglich war. Bei Patienten, die nach 12 Wochen kein Ansprechen nach HiSCR von mindestens 50% zeigen, ist die Behandlung abzubrechen. Nach 52 Wochen ununterbrochener Therapie bedarf die Behandlung einer erneuten Kostengutsprache durch den Krankenversicherer nach vorgängiger Konsultation des Vertrauensarztes. |

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
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "59393003",
          "display" : "Hidradenitis suppurativa"
        }],
        "text" : "Aktive, mittelschwere bis schwere Hidradenitis suppurativa (Acne inversa)\nBehandlung erwachsener Patienten, wenn die vorausgegangene systemische Therapie mit Antibiotika unzulänglich war. Bei Patienten, die nach 12 Wochen kein Ansprechen nach HiSCR von mindestens 50% zeigen, ist die Behandlung abzubrechen. Nach 52 Wochen ununterbrochener Therapie bedarf die Behandlung einer erneuten Kostengutsprache durch den Krankenversicherer nach vorgängiger Konsultation des Vertrauensarztes."
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
