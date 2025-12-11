# Indication 10061091 - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Indication 10061091**

## Example ClinicalUseDefinition: Indication 10061091

Profile: [CH IDMP ClinicalUseDefinition Indication](StructureDefinition-ch-idmp-clinicalusedefinition-indication.md)

**type**: Indication

**subject**: [MedicinalProductDefinition: extension = Film-coated tablet,CUPRIOR wird vergütet zur Behandlung der Kupferspeicherkrankheit (Morbus Wilson) bei Erwachsenen, Jugendlichen und Kindern im Alter von 5 Jahren oder älter, die eine Behandlung mit D-Penicillamin nicht vertragen. Die Behandlung muss von Gastroenterologen oder Hepatologen mit Erfahrung bei der Behandlung von Patienten mit Morbus Wilson initiiert und überwacht werden.; identifier = http://fhir.ch/ig/ch-epl/sid/mpid#Medical Product Identifier#CH-7640109110007-6771901; indication = Cuprior wird angewendet zur Behandlung von Morbus Wilson bei Erwachsenen, Jugendlichen und Kindern im Alter von 5 Jahren oder älter mit Unverträglichkeit gegenüber einer D-Penicillamin-Therapie.; legalStatusOfSupply = Medicinal product subject to medical or veterinary prescription (B); additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Authorised for the treatment in children; classification = gilteritinib,NA KAS art. 12 para. 5 TPLO,Synthetic,Originator product,07. STOFFWECHSEL](MedicinalProductDefinition-Cuprior-150mg-Filmcoatedtablet.md)

> **indication**

### DiseaseSymptomProcedures

| | |
| :--- | :--- |
| - | **Concept** |
| * | Wilson's disease |

### IntendedEffects

| | |
| :--- | :--- |
| - | **Concept** |
| * | therapeutic |




## Resource Content

```json
{
  "resourceType" : "ClinicalUseDefinition",
  "id" : "IND-10061091",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-clinicalusedefinition-indication"
    ]
  },
  "type" : "indication",
  "subject" : [
    {
      "reference" : "MedicinalProductDefinition/Cuprior-150mg-Filmcoatedtablet"
    }
  ],
  "indication" : {
    "diseaseSymptomProcedure" : {
      "concept" : {
        "coding" : [
          {
            "system" : "https://www.meddra.org",
            "code" : "10061091",
            "display" : "Wilson's disease"
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
