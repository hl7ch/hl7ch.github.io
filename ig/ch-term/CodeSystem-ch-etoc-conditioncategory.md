# Condition Category - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Condition Category**

## CodeSystem: Condition Category 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-etoc/CodeSystem/ch-etoc-conditioncategory | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:ChEtocConditionCategory |
| **Copyright/Legal**: CC0-1.0 | |

 
Additional codes for condition category. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ConditionCategoryCodes](ValueSet-condition-category.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-etoc-conditioncategory",
  "url" : "http://fhir.ch/ig/ch-etoc/CodeSystem/ch-etoc-conditioncategory",
  "version" : "3.3.0",
  "name" : "ChEtocConditionCategory",
  "title" : "Condition Category",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-15T10:47:47+00:00",
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
  "description" : "Additional codes for condition category.",
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
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 6,
  "concept" : [
    {
      "code" : "illness",
      "display" : "Illness"
    },
    {
      "code" : "procedure",
      "display" : "Procedure"
    },
    {
      "code" : "primary-diagnosis",
      "display" : "Primary Diagnosis"
    },
    {
      "code" : "secondary-diagnosis",
      "display" : "Secondary Diagnosis"
    },
    {
      "code" : "social-history-condition",
      "display" : "Social History"
    },
    {
      "code" : "functional-status-condition",
      "display" : "Functional Status"
    }
  ]
}

```
