# CH eTOC Social History Condition - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH eTOC Social History Condition**

## Resource Profile: CH eTOC Social History Condition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-socialhistory | *Version*:3.0.1 |
| Active as of 2025-12-16 | *Computable Name*:ChEtocSocialHistoryCondition |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition for the Social History Condition resource in the context of electronic transition of care. 

**Usages:**

* Refer to this Profile: [CH eTOC Composition](StructureDefinition-ch-etoc-composition.md) and [CH eTOC Service Request](StructureDefinition-ch-etoc-servicerequest.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-etoc|current/StructureDefinition/ch-etoc-socialhistory)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-etoc-socialhistory.csv), [Excel](StructureDefinition-ch-etoc-socialhistory.xlsx), [Schematron](StructureDefinition-ch-etoc-socialhistory.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-etoc-socialhistory",
  "url" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-socialhistory",
  "version" : "3.0.1",
  "name" : "ChEtocSocialHistoryCondition",
  "title" : "CH eTOC Social History Condition",
  "status" : "active",
  "date" : "2025-12-16T15:53:41+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "Juerg P. Bleuer",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    }
  ],
  "description" : "Definition for the Social History Condition resource in the context of electronic transition of care.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-condition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Condition",
        "path" : "Condition",
        "short" : "CH eTOC Social History Condition"
      },
      {
        "id" : "Condition.category",
        "path" : "Condition.category",
        "short" : "Social History Condition",
        "min" : 1,
        "max" : "1",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://fhir.ch/ig/ch-etoc/CodeSystem/ch-etoc-conditioncategory",
              "code" : "social-history-condition"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Condition.code",
        "path" : "Condition.code",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Condition.code.text",
        "path" : "Condition.code.text",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Condition.subject",
        "path" : "Condition.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
            ]
          }
        ]
      }
    ]
  }
}

```
