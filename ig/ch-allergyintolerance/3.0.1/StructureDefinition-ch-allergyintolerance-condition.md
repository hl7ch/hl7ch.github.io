# CH AllergyIntolerance Condition - CH AllergyIntolerance (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH AllergyIntolerance Condition**

## Resource Profile: CH AllergyIntolerance Condition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-allergyintolerance/StructureDefinition/ch-allergyintolerance-condition | *Version*:3.0.1 |
| Active as of 2025-12-16 | *Computable Name*:CHAllergyIntoleranceCondition |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile represents the constraints applied to the Condition resource in the context of AllergyIntolerance as a problem-list item or a encounter-diagnosis entry in the Swiss realm - in adaption of the respective usecases provided in the Implementation Guide for Use of SNOMED CT in Documentation of Allergy, Non-allergic Hypersensitivity and Intolerance. 

 
This profile constrains the representation of a record of an allergy or intolerance of the patient, in the context of a Swiss patient in adaption of the one specified in the CH IPS IG. 

**Usages:**

* Examples for this Profile: [Condition/CH-AllergyIntolerance-Condition-Usecase-3](Condition-CH-AllergyIntolerance-Condition-Usecase-3.md), [Condition/CH-AllergyIntolerance-Condition-Usecase-7](Condition-CH-AllergyIntolerance-Condition-Usecase-7.md), [Condition/CH-AllergyIntolerance-Condition-Visit1-Usecase-1](Condition-CH-AllergyIntolerance-Condition-Visit1-Usecase-1.md) and [Condition/CH-AllergyIntolerance-Condition-Visit2-Usecase-1](Condition-CH-AllergyIntolerance-Condition-Visit2-Usecase-1.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-allergyintolerance|current/StructureDefinition/ch-allergyintolerance-condition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-allergyintolerance-condition.csv), [Excel](StructureDefinition-ch-allergyintolerance-condition.xlsx), [Schematron](StructureDefinition-ch-allergyintolerance-condition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-allergyintolerance-condition",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.org/fhir/uv/ips/StructureDefinition/Condition-uv-ips"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-allergyintolerance/StructureDefinition/ch-allergyintolerance-condition",
  "version" : "3.0.1",
  "name" : "CHAllergyIntoleranceCondition",
  "title" : "CH AllergyIntolerance Condition",
  "status" : "active",
  "date" : "2025-12-16T16:28:51+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "This profile represents the constraints applied to the Condition resource in the context of AllergyIntolerance as a problem-list item or a encounter-diagnosis entry in the Swiss realm - in adaption of the respective usecases provided in the Implementation Guide for Use of SNOMED CT in Documentation of Allergy, Non-allergic Hypersensitivity and Intolerance.",
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
  "purpose" : "This profile constrains the representation of a record of an allergy or intolerance of the patient, in the context of a Swiss patient in adaption of the one specified in the CH IPS IG.",
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "sct-concept",
      "uri" : "http://snomed.info/conceptdomain",
      "name" : "SNOMED CT Concept Domain Binding"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "sct-attr",
      "uri" : "http://snomed.org/attributebinding",
      "name" : "SNOMED CT Attribute Binding"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Condition",
  "baseDefinition" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-condition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Condition",
        "path" : "Condition"
      },
      {
        "id" : "Condition.code",
        "path" : "Condition.code",
        "min" : 1,
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://fhir.ch/ig/ch-allergyintolerance/ValueSet/CHAllergyIntoleranceConditionValueSet"
        }
      },
      {
        "id" : "Condition.onset[x]",
        "path" : "Condition.onset[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "rules" : "closed"
        }
      },
      {
        "id" : "Condition.onset[x]:onsetDateTime",
        "path" : "Condition.onset[x]",
        "sliceName" : "onsetDateTime",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "dateTime"
          }
        ]
      },
      {
        "id" : "Condition.onset[x]:onsetPeriod",
        "path" : "Condition.onset[x]",
        "sliceName" : "onsetPeriod",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Period"
          }
        ]
      },
      {
        "id" : "Condition.abatement[x]",
        "path" : "Condition.abatement[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "rules" : "closed"
        }
      },
      {
        "id" : "Condition.abatement[x]:abatementDateTime",
        "path" : "Condition.abatement[x]",
        "sliceName" : "abatementDateTime",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "dateTime"
          }
        ]
      },
      {
        "id" : "Condition.abatement[x]:abatementPeriod",
        "path" : "Condition.abatement[x]",
        "sliceName" : "abatementPeriod",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Period"
          }
        ]
      },
      {
        "id" : "Condition.asserter",
        "path" : "Condition.asserter",
        "definition" : "Individual who is making the condition statement.\r\nInformation source."
      }
    ]
  }
}

```
