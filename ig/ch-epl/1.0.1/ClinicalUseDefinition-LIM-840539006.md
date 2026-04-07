# Limitation 840539006 - CH EPL (R5) v1.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Limitation 840539006**

## Example ClinicalUseDefinition: Limitation 840539006

**type**: Indication

> **indication**

### DiseaseSymptomProcedures

| | |
| :--- | :--- |
| - | **Concept** |
| * | Befristete Limitation bis 31.12.2025. PAXLOVID wird als antivirale Monotherapie für die Behandlung einer bestätigten Covid-19 Infektion (Positiver Erregernachweis Antigen/PCR und vorhandener Covid-19-Symptome) in folgenden Fällen vergütet:• in einer Dosierung von 300 mg Nirmatrelvir (zwei Tabletten zu je 150 mg) und 100 mg Ritonavir (eine Tablette zu 100 mg) zur gleichzeitigen Einnahme alle 12 Stunden, über einen Zeitraum von 5 Tagen• zur Frühbehandlung (ausser bei immunsupprimierten Personen vorzugsweise innerhalb von 5 Tagen nach Symptombeginn) bei Erwachsenen, die keine Sauerstofftherapie oder Hospitalisierung aufgrund von COVID-19 benötigen und für welche gemäss der aktuell gültigen Kriterienliste der Schweizerischen Gesellschaft für Infektiologie (SSI) (https://www.bag.admin.ch/bag/de/home/medizin-und-forschung/heilmittel/versorgung-covid-19-arzneimittel.html) ein erhöhtes Risiko für einen schweren COVID-19-Verlauf besteht. |

### IntendedEffects

| | |
| :--- | :--- |
| - | **Concept** |
| * | therapeutic |




## Resource Content

```json
{
  "resourceType" : "ClinicalUseDefinition",
  "id" : "LIM-840539006",
  "type" : "indication",
  "indication" : {
    "diseaseSymptomProcedure" : {
      "concept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "840539006",
          "display" : "Disease caused by severe acute respiratory syndrome coronavirus 2 (disorder)"
        }],
        "text" : "Befristete Limitation bis 31.12.2025. PAXLOVID wird als antivirale Monotherapie für die Behandlung einer bestätigten Covid-19 Infektion (Positiver Erregernachweis Antigen/PCR und vorhandener Covid-19-Symptome) in folgenden Fällen vergütet:\n• in einer Dosierung von 300 mg Nirmatrelvir (zwei Tabletten zu je 150 mg) und 100 mg Ritonavir (eine Tablette zu 100 mg) zur gleichzeitigen Einnahme alle 12 Stunden, über einen Zeitraum von 5 Tagen\n• zur Frühbehandlung (ausser bei immunsupprimierten Personen vorzugsweise innerhalb von 5 Tagen nach Symptombeginn) bei Erwachsenen, die keine Sauerstofftherapie oder Hospitalisierung aufgrund von COVID-19 benötigen und für welche gemäss der aktuell gültigen Kriterienliste der Schweizerischen Gesellschaft für Infektiologie (SSI) (https://www.bag.admin.ch/bag/de/home/medizin-und-forschung/heilmittel/versorgung-covid-19-arzneimittel.html) ein erhöhtes Risiko für einen schweren COVID-19-Verlauf besteht."
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
