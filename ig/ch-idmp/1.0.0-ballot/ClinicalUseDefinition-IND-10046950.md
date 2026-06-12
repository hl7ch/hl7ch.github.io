# Indication 10046950 - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Indication 10046950**

## Example ClinicalUseDefinition: Indication 10046950

Profile: [ClinicalUseDefinition Indication](StructureDefinition-ch-idmp-clinicalusedefinition-indication.md)

**type**: Indication

**subject**: [MedicinalProductDefinition: extension = Cream + Pessary; identifier = http://fhir.ch/ig/ch-idmp/sid/mpid#Medical Product Identifier#CH-11111111-1234560010000; combinedPharmaceuticalDoseForm = Cream + Pessary; indication = Comprehensive Sample Combipack wird angewendet zur Behandlung der bakteriellen Vaginose (früher bezeichnet als Haemophilus-Vaginitis, Gardnerella-Vaginitis, unspezifische Vaginitis, Corynebacterium-Vaginitis oder anaerobe Vaginose); legalStatusOfSupply = D: Dispensed following expert advice; additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Not authorised for the treatment in children; classification = nystatin,NA NAS,Synthetic](MedicinalProductDefinition-Comprehensive-Sample-Combipack.md)

> **indication**

### DiseaseSymptomProcedures

| | |
| :--- | :--- |
| - | **Concept** |
| * | Vaginitis |

### Comorbidities

| | |
| :--- | :--- |
| - | **Concept** |
| * | HIV infection |

### IntendedEffects

| | |
| :--- | :--- |
| - | **Concept** |
| * | therapeutic |




## Resource Content

```json
{
  "resourceType" : "ClinicalUseDefinition",
  "id" : "IND-10046950",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-clinicalusedefinition-indication"]
  },
  "type" : "indication",
  "subject" : [{
    "reference" : "MedicinalProductDefinition/Comprehensive-Sample-Combipack"
  }],
  "indication" : {
    "diseaseSymptomProcedure" : {
      "concept" : {
        "coding" : [{
          "system" : "https://www.meddra.org",
          "code" : "10046950",
          "display" : "Vaginitis"
        }]
      }
    },
    "comorbidity" : [{
      "concept" : {
        "coding" : [{
          "system" : "https://www.meddra.org",
          "code" : "10020161",
          "display" : "HIV infection"
        }]
      }
    }],
    "intendedEffect" : {
      "concept" : {
        "coding" : [{
          "system" : "http://spor.ema.europa.eu/v1/lists/200000003186",
          "code" : "756005042000002",
          "display" : "therapeutic"
        }]
      }
    }
  }
}

```
