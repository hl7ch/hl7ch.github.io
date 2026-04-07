# Limitation 34000006 - CH EPL (R5) v1.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Limitation 34000006**

## Example ClinicalUseDefinition: Limitation 34000006

**type**: Indication

> **indication**

### DiseaseSymptomProcedures

| | |
| :--- | :--- |
| - | **Concept** |
| * | Aktiver Morbus CrohnBehandlung erwachsener Patienten mit ABRILADA, wenn die vorausgegangene konventionelle Therapie (z.B. mit Azathioprin, 6-Mercaptopurin oder Glukokortikoiden) unzulänglich war, sowie bei Patienten, die nicht mehr auf Infliximab ansprechen oder dieses nicht vertragen. Nach zwei Jahren ununterbrochener Therapie bedarf die Behandlung einer erneuten Kostengutsprache durch den Krankenversicherer nach vorgängiger Konsultation des Vertrauensarztes. |

### IntendedEffects

| | |
| :--- | :--- |
| - | **Concept** |
| * | therapeutic |




## Resource Content

```json
{
  "resourceType" : "ClinicalUseDefinition",
  "id" : "LIM-34000006",
  "type" : "indication",
  "indication" : {
    "diseaseSymptomProcedure" : {
      "concept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "34000006",
          "display" : "Crohn's disease"
        }],
        "text" : "Aktiver Morbus Crohn\nBehandlung erwachsener Patienten mit ABRILADA, wenn die vorausgegangene konventionelle Therapie (z.B. mit Azathioprin, 6-Mercaptopurin oder Glukokortikoiden) unzulänglich war, sowie bei Patienten, die nicht mehr auf Infliximab ansprechen oder dieses nicht vertragen. Nach zwei Jahren ununterbrochener Therapie bedarf die Behandlung einer erneuten Kostengutsprache durch den Krankenversicherer nach vorgängiger Konsultation des Vertrauensarztes."
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
