# Indication 10084619 - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Indication 10084619**

## Example ClinicalUseDefinition: Indication 10084619

Profile: [ClinicalUseDefinition Indication](StructureDefinition-ch-idmp-clinicalusedefinition-indication.md)

**type**: Indication

**subject**: [MedicinalProductDefinition: extension = Film-coated tablet; identifier = http://fhir.ch/ig/ch-idmp/sid/mpid#Medical Product Identifier#CH-01100869-0672110010000; indication = Xospata wird angewendet für die Behandlung von erwachsenen Patienten, die an rezidivierter oder refraktärer akuter myeloider Leukämie (AML) mit FMS-ähnlichen Tyrosinkinase 3 (FLT3)-Mutationen leiden.; legalStatusOfSupply = A: Single dispensing requiring a medical or veterinary prescription; additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Not authorised for the treatment in children; classification = gilteritinib,Synthetic](MedicinalProductDefinition-Xospata-Filmcoatedtablet.md)

> **indication**

### DiseaseSymptomProcedures

| | |
| :--- | :--- |
| - | **Concept** |
| * | FLT3-Gen-Mutation |

### IntendedEffects

| | |
| :--- | :--- |
| - | **Concept** |
| * | therapeutic |




## Resource Content

```json
{
  "resourceType" : "ClinicalUseDefinition",
  "id" : "IND-10084619",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-clinicalusedefinition-indication"]
  },
  "type" : "indication",
  "subject" : [{
    "reference" : "MedicinalProductDefinition/Xospata-Filmcoatedtablet"
  }],
  "indication" : {
    "diseaseSymptomProcedure" : {
      "concept" : {
        "coding" : [{
          "system" : "https://www.meddra.org",
          "code" : "10084619",
          "display" : "FLT3-Gen-Mutation"
        }]
      }
    },
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
