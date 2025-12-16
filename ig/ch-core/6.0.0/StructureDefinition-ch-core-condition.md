# CH Core Condition - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core Condition**

## Resource Profile: CH Core Condition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-condition | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreCondition |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition of the Condition resource for use in Swiss specific use cases. 

**Usages:**

* Refer to this Profile: [CH Core ServiceRequest](StructureDefinition-ch-core-servicerequest.md)
* Examples for this Profile: [Condition/Urticaria](Condition-Urticaria.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-condition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-condition.csv), [Excel](StructureDefinition-ch-core-condition.xlsx), [Schematron](StructureDefinition-ch-core-condition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-condition",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-condition",
  "version" : "6.0.0",
  "name" : "CHCoreCondition",
  "title" : "CH Core Condition",
  "status" : "active",
  "date" : "2025-12-16T07:58:48+00:00",
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
  "description" : "Base definition of the Condition resource for use in Swiss specific use cases.",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Condition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Condition",
        "path" : "Condition"
      },
      {
        "id" : "Condition.category",
        "path" : "Condition.category",
        "binding" : {
          "extension" : [
            {
              "extension" : [
                {
                  "url" : "key",
                  "valueId" : "ch-etoc"
                },
                {
                  "url" : "purpose",
                  "valueCode" : "candidate"
                },
                {
                  "url" : "valueSet",
                  "valueCanonical" : "http://fhir.ch/ig/ch-term/ValueSet/condition-category"
                },
                {
                  "url" : "documentation",
                  "valueMarkdown" : "An alternative additional binding to the value set used in CH eTOC."
                }
              ],
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/additional-binding"
            }
          ],
          "strength" : "extensible",
          "valueSet" : "http://hl7.org/fhir/ValueSet/condition-category"
        }
      },
      {
        "id" : "Condition.code",
        "path" : "Condition.code",
        "binding" : {
          "extension" : [
            {
              "extension" : [
                {
                  "url" : "key",
                  "valueId" : "ch-allergyintolerance"
                },
                {
                  "url" : "purpose",
                  "valueCode" : "candidate"
                },
                {
                  "url" : "valueSet",
                  "valueCanonical" : "http://fhir.ch/ig/ch-allergyintolerance/ValueSet/CHAllergyIntoleranceConditionValueSet"
                },
                {
                  "url" : "documentation",
                  "valueMarkdown" : "An alternative additional binding to the value set used in CH AllergyIntolerance."
                }
              ],
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/additional-binding"
            }
          ],
          "strength" : "example",
          "valueSet" : "http://hl7.org/fhir/ValueSet/condition-code"
        }
      },
      {
        "id" : "Condition.subject",
        "path" : "Condition.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://hl7.org/fhir/StructureDefinition/Group"
            ]
          }
        ]
      },
      {
        "id" : "Condition.recorder",
        "path" : "Condition.recorder",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson"
            ]
          }
        ]
      },
      {
        "id" : "Condition.asserter",
        "path" : "Condition.asserter",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson"
            ]
          }
        ]
      }
    ]
  }
}

```
