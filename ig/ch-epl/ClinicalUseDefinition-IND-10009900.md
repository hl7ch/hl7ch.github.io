# Indication 10009900 - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Indication 10009900**

## Example ClinicalUseDefinition: Indication 10009900

Profile: [CH IDMP ClinicalUseDefinition Indication](StructureDefinition-ch-idmp-clinicalusedefinition-indication.md)

**type**: Indication

**subject**: [MedicinalProductDefinition: extension = Tablet and solvent for rectal suspension,Distale Form der Colitis ulcerosa bei ungenügendem Ansprechen auf oder Kontraindikation für Mesalazin.; identifier = http://fhir.ch/ig/ch-epl/sid/mpid#Medical Product Identifier#CH-7601001346451-5204201; combinedPharmaceuticalDoseForm = Tablet and solvent for rectal suspension; indication = Leichte bis mittelschwere Colitis ulcerosa des Rectums sowie des Colon sigmoideum.; legalStatusOfSupply = Medicinal product subject to medical or veterinary prescription (B); additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Authorised for the treatment in children; classification = budesonide,NA KAS art. 12 para. 5 TPLO,Synthetic,Originator product,04. GASTROENTEROLOGICA](MedicinalProductDefinition-Entocort-Solvent-and-Tablet.md)

> **indication**

### DiseaseSymptomProcedures

| | |
| :--- | :--- |
| - | **Concept** |
| * | Colitis ulcerative |

### IntendedEffects

| | |
| :--- | :--- |
| - | **Concept** |
| * | therapeutic |




## Resource Content

```json
{
  "resourceType" : "ClinicalUseDefinition",
  "id" : "IND-10009900",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-clinicalusedefinition-indication"
    ]
  },
  "type" : "indication",
  "subject" : [
    {
      "reference" : "MedicinalProductDefinition/Entocort-Solvent-and-Tablet"
    }
  ],
  "indication" : {
    "diseaseSymptomProcedure" : {
      "concept" : {
        "coding" : [
          {
            "system" : "https://www.meddra.org",
            "code" : "10009900",
            "display" : "Colitis ulcerative"
          }
        ]
      }
    },
    "intendedEffect" : {
      "concept" : {
        "coding" : [
          {
            "system" : "http://spor.ema.europa.eu/v1/lists/200000003186",
            "code" : "200000003194",
            "display" : "therapeutic"
          }
        ]
      }
    }
  }
}

```
