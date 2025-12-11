# CH IDMP ClinicalUseDefinition Indication - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH IDMP ClinicalUseDefinition Indication**

## Resource Profile: CH IDMP ClinicalUseDefinition Indication 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-clinicalusedefinition-indication | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:CHIDMPClinicalUseDefinitionIndication |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile of the ClinicalUseDefinition resource for representing an indication. 

**Usages:**

* Use this Profile: [IDMP Bundle](StructureDefinition-ch-idmp-bundle.md)
* Examples for this Profile: [ClinicalUseDefinition/IND-10002556](ClinicalUseDefinition-IND-10002556.md), [ClinicalUseDefinition/IND-10003268](ClinicalUseDefinition-IND-10003268.md), [ClinicalUseDefinition/IND-10009900](ClinicalUseDefinition-IND-10009900.md), [ClinicalUseDefinition/IND-10019927](ClinicalUseDefinition-IND-10019927.md)...Show 15 more,[ClinicalUseDefinition/IND-10020041](ClinicalUseDefinition-IND-10020041.md),[ClinicalUseDefinition/IND-10021782](ClinicalUseDefinition-IND-10021782.md),[ClinicalUseDefinition/IND-10027400](ClinicalUseDefinition-IND-10027400.md),[ClinicalUseDefinition/IND-10028881](ClinicalUseDefinition-IND-10028881.md),[ClinicalUseDefinition/IND-10030247](ClinicalUseDefinition-IND-10030247.md),[ClinicalUseDefinition/IND-10031285](ClinicalUseDefinition-IND-10031285.md),[ClinicalUseDefinition/IND-10037153](ClinicalUseDefinition-IND-10037153.md),[ClinicalUseDefinition/IND-10037160](ClinicalUseDefinition-IND-10037160.md),[ClinicalUseDefinition/IND-10043971](ClinicalUseDefinition-IND-10043971.md),[ClinicalUseDefinition/IND-10045365](ClinicalUseDefinition-IND-10045365.md),[ClinicalUseDefinition/IND-10046851](ClinicalUseDefinition-IND-10046851.md),[ClinicalUseDefinition/IND-10061091](ClinicalUseDefinition-IND-10061091.md),[ClinicalUseDefinition/IND-10075566](ClinicalUseDefinition-IND-10075566.md),[ClinicalUseDefinition/IND-10084529](ClinicalUseDefinition-IND-10084529.md)and[ClinicalUseDefinition/IND-10089182](ClinicalUseDefinition-IND-10089182.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epl|current/StructureDefinition/ch-idmp-clinicalusedefinition-indication)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-idmp-clinicalusedefinition-indication.csv), [Excel](StructureDefinition-ch-idmp-clinicalusedefinition-indication.xlsx), [Schematron](StructureDefinition-ch-idmp-clinicalusedefinition-indication.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-idmp-clinicalusedefinition-indication",
  "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-clinicalusedefinition-indication",
  "version" : "1.0.0",
  "name" : "CHIDMPClinicalUseDefinitionIndication",
  "title" : "CH IDMP ClinicalUseDefinition Indication",
  "status" : "active",
  "date" : "2025-12-11T12:35:50+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "Profile of the ClinicalUseDefinition resource for representing an indication.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "5.0.0",
  "mapping" : [
    {
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "idmp",
      "uri" : "https://www.iso.org/obp/ui/#iso:std:iso:11615",
      "name" : "IDMP Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "ClinicalUseDefinition",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/ClinicalUseDefinition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "ClinicalUseDefinition",
        "path" : "ClinicalUseDefinition",
        "short" : "CH IDMP ClincalUseDefinition Indication"
      },
      {
        "id" : "ClinicalUseDefinition.type",
        "path" : "ClinicalUseDefinition.type",
        "patternCode" : "indication"
      },
      {
        "id" : "ClinicalUseDefinition.subject",
        "path" : "ClinicalUseDefinition.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-medicinalproductdefinition"
            ]
          }
        ]
      },
      {
        "id" : "ClinicalUseDefinition.indication",
        "path" : "ClinicalUseDefinition.indication",
        "min" : 1
      },
      {
        "id" : "ClinicalUseDefinition.indication.diseaseSymptomProcedure.concept",
        "path" : "ClinicalUseDefinition.indication.diseaseSymptomProcedure.concept",
        "min" : 1
      },
      {
        "id" : "ClinicalUseDefinition.indication.diseaseSymptomProcedure.concept.coding",
        "path" : "ClinicalUseDefinition.indication.diseaseSymptomProcedure.concept.coding",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "ClinicalUseDefinition.indication.diseaseSymptomProcedure.concept.coding:SMC",
        "path" : "ClinicalUseDefinition.indication.diseaseSymptomProcedure.concept.coding",
        "sliceName" : "SMC",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "ClinicalUseDefinition.indication.diseaseSymptomProcedure.concept.coding:SMC.system",
        "path" : "ClinicalUseDefinition.indication.diseaseSymptomProcedure.concept.coding.system",
        "min" : 1,
        "patternUri" : "https://www.meddra.org"
      },
      {
        "id" : "ClinicalUseDefinition.indication.diseaseSymptomProcedure.concept.coding:SMC.code",
        "path" : "ClinicalUseDefinition.indication.diseaseSymptomProcedure.concept.coding.code",
        "min" : 1
      },
      {
        "id" : "ClinicalUseDefinition.indication.diseaseSymptomProcedure.concept.coding:FOPH",
        "path" : "ClinicalUseDefinition.indication.diseaseSymptomProcedure.concept.coding",
        "sliceName" : "FOPH",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "ClinicalUseDefinition.indication.diseaseSymptomProcedure.concept.coding:FOPH.system",
        "path" : "ClinicalUseDefinition.indication.diseaseSymptomProcedure.concept.coding.system",
        "min" : 1,
        "patternUri" : "http://snomed.info/sct"
      },
      {
        "id" : "ClinicalUseDefinition.indication.diseaseSymptomProcedure.concept.coding:FOPH.code",
        "path" : "ClinicalUseDefinition.indication.diseaseSymptomProcedure.concept.coding.code",
        "min" : 1
      },
      {
        "id" : "ClinicalUseDefinition.indication.comorbidity.concept",
        "path" : "ClinicalUseDefinition.indication.comorbidity.concept",
        "min" : 1
      },
      {
        "id" : "ClinicalUseDefinition.indication.comorbidity.concept.coding",
        "path" : "ClinicalUseDefinition.indication.comorbidity.concept.coding",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "ClinicalUseDefinition.indication.comorbidity.concept.coding:SMC",
        "path" : "ClinicalUseDefinition.indication.comorbidity.concept.coding",
        "sliceName" : "SMC",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "ClinicalUseDefinition.indication.comorbidity.concept.coding:SMC.system",
        "path" : "ClinicalUseDefinition.indication.comorbidity.concept.coding.system",
        "min" : 1,
        "patternUri" : "https://www.meddra.org"
      },
      {
        "id" : "ClinicalUseDefinition.indication.comorbidity.concept.coding:SMC.code",
        "path" : "ClinicalUseDefinition.indication.comorbidity.concept.coding.code",
        "min" : 1
      },
      {
        "id" : "ClinicalUseDefinition.indication.comorbidity.concept.coding:FOPH",
        "path" : "ClinicalUseDefinition.indication.comorbidity.concept.coding",
        "sliceName" : "FOPH",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "ClinicalUseDefinition.indication.comorbidity.concept.coding:FOPH.system",
        "path" : "ClinicalUseDefinition.indication.comorbidity.concept.coding.system",
        "min" : 1,
        "patternUri" : "http://snomed.info/sct"
      },
      {
        "id" : "ClinicalUseDefinition.indication.comorbidity.concept.coding:FOPH.code",
        "path" : "ClinicalUseDefinition.indication.comorbidity.concept.coding.code",
        "min" : 1
      },
      {
        "id" : "ClinicalUseDefinition.indication.intendedEffect",
        "path" : "ClinicalUseDefinition.indication.intendedEffect",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-epl/ValueSet/ema-intended-effect"
        }
      },
      {
        "id" : "ClinicalUseDefinition.indication.intendedEffect.concept",
        "path" : "ClinicalUseDefinition.indication.intendedEffect.concept",
        "min" : 1
      },
      {
        "id" : "ClinicalUseDefinition.indication.intendedEffect.concept.coding",
        "path" : "ClinicalUseDefinition.indication.intendedEffect.concept.coding",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "ClinicalUseDefinition.indication.intendedEffect.concept.coding:SMC",
        "path" : "ClinicalUseDefinition.indication.intendedEffect.concept.coding",
        "sliceName" : "SMC",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "ClinicalUseDefinition.indication.intendedEffect.concept.coding:SMC.system",
        "path" : "ClinicalUseDefinition.indication.intendedEffect.concept.coding.system",
        "min" : 1,
        "patternUri" : "http://spor.ema.europa.eu/v1/lists/200000003186"
      },
      {
        "id" : "ClinicalUseDefinition.indication.intendedEffect.concept.coding:SMC.code",
        "path" : "ClinicalUseDefinition.indication.intendedEffect.concept.coding.code",
        "min" : 1
      }
    ]
  }
}

```
