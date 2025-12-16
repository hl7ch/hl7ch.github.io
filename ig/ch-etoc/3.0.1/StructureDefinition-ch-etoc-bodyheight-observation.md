# CH eTOC Body Height Observation - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH eTOC Body Height Observation**

## Resource Profile: CH eTOC Body Height Observation 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-bodyheight-observation | *Version*:3.0.1 |
| Active as of 2025-12-16 | *Computable Name*:ChEtocBodyHeightObservation |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition for the Body Height Observation resource in the context of CH eTOC. 

**Usages:**

* Refer to this Profile: [CH eTOC Composition](StructureDefinition-ch-etoc-composition.md) and [CH eTOC Service Request](StructureDefinition-ch-etoc-servicerequest.md)
* Examples for this Profile: [Observation/BodyHeight](Observation-BodyHeight.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-etoc|current/StructureDefinition/ch-etoc-bodyheight-observation)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-etoc-bodyheight-observation.csv), [Excel](StructureDefinition-ch-etoc-bodyheight-observation.xlsx), [Schematron](StructureDefinition-ch-etoc-bodyheight-observation.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-etoc-bodyheight-observation",
  "url" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-bodyheight-observation",
  "version" : "3.0.1",
  "name" : "ChEtocBodyHeightObservation",
  "title" : "CH eTOC Body Height Observation",
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
  "description" : "Definition for the Body Height Observation resource in the context of CH eTOC.",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/bodyheight",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Observation",
        "path" : "Observation",
        "short" : "CH eTOC Body Height Observation"
      },
      {
        "id" : "Observation.code.coding",
        "path" : "Observation.code.coding",
        "min" : 1,
        "max" : "1"
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
        "fixedString" : "cm"
      },
      {
        "id" : "Observation.value[x]:valueQuantity.code",
        "path" : "Observation.value[x].code",
        "fixedCode" : "cm"
      }
    ]
  }
}

```
