# Limitation 90560007 - CH EPL (R5) v1.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Limitation 90560007**

## Example ClinicalUseDefinition: Limitation 90560007

**type**: Indication

> **indication**

### DiseaseSymptomProcedures

| | |
| :--- | :--- |
| - | **Concept** |
| * | Distale Form der Colitis ulcerosa bei ungenügendem Ansprechen auf oder Kontraindikation für Mesalazin. |

### IntendedEffects

| | |
| :--- | :--- |
| - | **Concept** |
| * | therapeutic |




## Resource Content

```json
{
  "resourceType" : "ClinicalUseDefinition",
  "id" : "LIM-64766004-ENTOCORT",
  "type" : "indication",
  "indication" : {
    "diseaseSymptomProcedure" : {
      "concept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "64766004",
          "display" : "Ulcerative colitis (disorder)"
        }],
        "text" : "Distale Form der Colitis ulcerosa bei ungenügendem Ansprechen auf oder Kontraindikation für Mesalazin."
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
