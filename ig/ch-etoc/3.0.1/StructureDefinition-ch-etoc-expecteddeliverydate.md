# CH eTOC Expected Delivery Date Observation - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH eTOC Expected Delivery Date Observation**

## Resource Profile: CH eTOC Expected Delivery Date Observation 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-expecteddeliverydate | *Version*:3.0.1 |
| Active as of 2025-12-16 | *Computable Name*:ChEtocPregnancyExpectedDeliveryDateObservation |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition for the Expected Delivery Date Observation resource in the context of CH eTOC. 

**Usages:**

* Refer to this Profile: [CH eTOC Composition](StructureDefinition-ch-etoc-composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-etoc|current/StructureDefinition/ch-etoc-expecteddeliverydate)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-etoc-expecteddeliverydate.csv), [Excel](StructureDefinition-ch-etoc-expecteddeliverydate.xlsx), [Schematron](StructureDefinition-ch-etoc-expecteddeliverydate.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-etoc-expecteddeliverydate",
  "url" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-expecteddeliverydate",
  "version" : "3.0.1",
  "name" : "ChEtocPregnancyExpectedDeliveryDateObservation",
  "title" : "CH eTOC Expected Delivery Date Observation",
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
  "description" : "Definition for the Expected Delivery Date Observation resource in the context of CH eTOC.",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Observation",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Observation",
        "path" : "Observation",
        "short" : "CH eTOC Expected Delivery Date Observation"
      },
      {
        "id" : "Observation.status",
        "path" : "Observation.status",
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
      }
    ]
  }
}

```
