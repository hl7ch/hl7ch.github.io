# Indication 10030247 - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Indication 10030247**

## Example ClinicalUseDefinition: Indication 10030247

Profile: [CH IDMP ClinicalUseDefinition Indication](StructureDefinition-ch-idmp-clinicalusedefinition-indication.md)

**type**: Indication

**subject**: [MedicinalProductDefinition: extension = Transdermal patch; identifier = http://fhir.ch/ig/ch-epl/sid/mpid#Medical Product Identifier#CH-7601001029439-5470402; indication = Klimakterische Beschwerden: Behandlung der Symptome des Östrogenmangels infolge der natürlichen oder künstlichen Menopause bei nicht-hysterektomierten Frauen. Osteoporoseprophylaxe: Vorbeugung oder Verzögerung einer durch Östrogenmangel induzierten Osteoporose bei postmenopausalen Frauen mit hohem Frakturrisiko, für die eine Behandlung mit anderen zur Prävention der Osteoporose zugelassenen Arzneimitteln nicht in Frage kommt, oder bei Frauen die gleichzeitig an behandlungsbedürftigen Symptomen des Östrogenmangels leiden.; legalStatusOfSupply = Medicinal product subject to medical or veterinary prescription (B); additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Not authorised for the treatment in children; classification = norethisterone and estrogen,NA KAS art. 12 para. 5 TPLO,Synthetic,Originator product](MedicinalProductDefinition-Estalis-Transdermalpatch.md)

> **indication**

### DiseaseSymptomProcedures

| | |
| :--- | :--- |
| - | **Concept** |
| * | Oestrogenmangel |

### Comorbidities

| | |
| :--- | :--- |
| - | **Concept** |
| * | Menopause |

### IntendedEffects

| | |
| :--- | :--- |
| - | **Concept** |
| * | preventive |




## Resource Content

```json
{
  "resourceType" : "ClinicalUseDefinition",
  "id" : "IND-10030247",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-clinicalusedefinition-indication"
    ]
  },
  "type" : "indication",
  "subject" : [
    {
      "reference" : "MedicinalProductDefinition/Estalis-Transdermalpatch"
    }
  ],
  "indication" : {
    "diseaseSymptomProcedure" : {
      "concept" : {
        "coding" : [
          {
            "system" : "https://www.meddra.org",
            "code" : "10030247",
            "display" : "Oestrogenmangel"
          }
        ]
      }
    },
    "comorbidity" : [
      {
        "concept" : {
          "coding" : [
            {
              "system" : "https://www.meddra.org",
              "code" : "10027308",
              "display" : "Menopause"
            }
          ]
        }
      }
    ],
    "intendedEffect" : {
      "concept" : {
        "coding" : [
          {
            "system" : "http://spor.ema.europa.eu/v1/lists/200000003186",
            "code" : "200000003192",
            "display" : "preventive"
          }
        ]
      }
    }
  }
}

```
