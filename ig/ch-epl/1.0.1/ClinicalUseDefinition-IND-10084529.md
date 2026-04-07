# Indication 10084529 - CH EPL (R5) v1.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Indication 10084529**

## Example ClinicalUseDefinition: Indication 10084529

Profile: [ClinicalUseDefinition Indication](StructureDefinition-ch-idmp-clinicalusedefinition-indication.md)

**type**: Indication

**subject**: [MedicinalProductDefinition: extension = Film-coated tablet; identifier = http://fhir.ch/ig/ch-epl/sid/mpid#Medical Product Identifier#CH-01001107-0687930010000; indication = Paxlovid wird angewendet für die Behandlung der Coronavirus-Krankheit 2019 (COVID-19) bei Erwachsenen, die keine Sauerstofftherapie oder Hospitalisierung aufgrund von COVID-19 benötigen und bei denen ein erhöhtes Risiko für einen schweren Verlauf von COVID-19 besteht (siehe «Klinische Wirksamkeit»). Paxlovid ist nicht als Ersatz für eine Impfung gegen COVID-19 vorgesehen. Paxlovid sollte gemäss den offiziellen Empfehlungen und unter Berücksichtigung der lokalen epidemiologischen Daten zu zirkulierenden SARS-CoV-2-Varianten angewendet werden.; legalStatusOfSupply = Medicinal product subject to medical or veterinary prescription single dispensation (A+); additionalMonitoringIndicator = Black Triangle Warning; pediatricUseIndicator = Not authorised for the treatment in children; classification = Protease inhibitors,NA KAS art. 12 para. 5 TPLO,Synthetic,Originator product,08. INFEKTIONSKRANKHEITEN,08.03. Mittel gegen Viren](MedicinalProductDefinition-Paxlovid-Filmcoatedtablet.md)

> **indication**

### DiseaseSymptomProcedures

| | |
| :--- | :--- |
| - | **Concept** |
| * | Coronavirus-Krankheit 2019 (COVID-19) |

### IntendedEffects

| | |
| :--- | :--- |
| - | **Concept** |
| * | therapeutic |




## Resource Content

```json
{
  "resourceType" : "ClinicalUseDefinition",
  "id" : "IND-10084529",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-clinicalusedefinition-indication"]
  },
  "type" : "indication",
  "subject" : [{
    "reference" : "MedicinalProductDefinition/Paxlovid-Filmcoatedtablet"
  }],
  "indication" : {
    "diseaseSymptomProcedure" : {
      "concept" : {
        "coding" : [{
          "system" : "https://www.meddra.org",
          "code" : "10084529",
          "display" : "Coronavirus-Krankheit 2019 (COVID-19)"
        }]
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
