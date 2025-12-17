# CH RAD-Order Body Weight Observation - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH RAD-Order Body Weight Observation**

## Resource Profile: CH RAD-Order Body Weight Observation 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-bodyweight-observation | *Version*:2.0.1 |
| Active as of 2025-12-17 | *Computable Name*:ChRadOrderBodyWeightObservation |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition for the Body Weight Observation resource in the context of CH RAD-Order. 

**Usages:**

* Refer to this Profile: [CH RAD-Order ServiceRequest](StructureDefinition-ch-rad-order-servicerequest.md)
* Examples for this Profile: [Observation/BodyWeight](Observation-BodyWeight.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-rad-order|current/StructureDefinition/ch-rad-order-bodyweight-observation)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-rad-order-bodyweight-observation.csv), [Excel](StructureDefinition-ch-rad-order-bodyweight-observation.xlsx), [Schematron](StructureDefinition-ch-rad-order-bodyweight-observation.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-rad-order-bodyweight-observation",
  "url" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-bodyweight-observation",
  "version" : "2.0.1",
  "name" : "ChRadOrderBodyWeightObservation",
  "title" : "CH RAD-Order Body Weight Observation",
  "status" : "active",
  "date" : "2025-12-17T07:17:47+00:00",
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
  "description" : "Definition for the Body Weight Observation resource in the context of CH RAD-Order.",
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
  "type" : "Observation",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/bodyweight",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Observation",
        "path" : "Observation",
        "short" : "CH RAD-Order Body Weight Observation"
      },
      {
        "id" : "Observation.code.coding:BodyWeightCode",
        "path" : "Observation.code.coding",
        "sliceName" : "BodyWeightCode",
        "mustSupport" : true
      },
      {
        "id" : "Observation.code.coding:BodyWeightCode.system",
        "path" : "Observation.code.coding.system",
        "mustSupport" : true
      },
      {
        "id" : "Observation.code.coding:BodyWeightCode.code",
        "path" : "Observation.code.coding.code",
        "mustSupport" : true
      },
      {
        "id" : "Observation.subject",
        "path" : "Observation.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
            ]
          }
        ]
      },
      {
        "id" : "Observation.effective[x]",
        "path" : "Observation.effective[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Observation.effective[x]:effectiveDateTime",
        "path" : "Observation.effective[x]",
        "sliceName" : "effectiveDateTime",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "dateTime"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.value[x]:valueQuantity",
        "path" : "Observation.value[x]",
        "sliceName" : "valueQuantity",
        "type" : [
          {
            "code" : "Quantity"
          }
        ]
      },
      {
        "id" : "Observation.value[x]:valueQuantity.unit",
        "path" : "Observation.value[x].unit",
        "fixedString" : "kg"
      },
      {
        "id" : "Observation.value[x]:valueQuantity.code",
        "path" : "Observation.value[x].code",
        "fixedCode" : "kg"
      }
    ]
  }
}

```
