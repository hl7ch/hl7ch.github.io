# CH RAD-Order Caveat Condition - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH RAD-Order Caveat Condition**

## Resource Profile: CH RAD-Order Caveat Condition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition | *Version*:2.0.1 |
| Active as of 2025-12-17 | *Computable Name*:ChRadOrderCaveatCondition |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition for the Caveat Condition resource in the context of CH RAD-Order. 

**Usages:**

* Refer to this Profile: [CH RAD-Order ServiceRequest](StructureDefinition-ch-rad-order-servicerequest.md)
* Examples for this Profile: [Condition/CaveatBloodCoagulation](Condition-CaveatBloodCoagulation.md), [Condition/CaveatBodyPiercing](Condition-CaveatBodyPiercing.md), [Condition/CaveatDeviceCardiacPacemaker](Condition-CaveatDeviceCardiacPacemaker.md), [Condition/CaveatDrugPrescriptionMetformin](Condition-CaveatDrugPrescriptionMetformin.md) and [Condition/CaveatRenalInsufficiency](Condition-CaveatRenalInsufficiency.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-rad-order|current/StructureDefinition/ch-rad-order-caveat-condition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-rad-order-caveat-condition.csv), [Excel](StructureDefinition-ch-rad-order-caveat-condition.xlsx), [Schematron](StructureDefinition-ch-rad-order-caveat-condition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-rad-order-caveat-condition",
  "url" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-condition",
  "version" : "2.0.1",
  "name" : "ChRadOrderCaveatCondition",
  "title" : "CH RAD-Order Caveat Condition",
  "status" : "active",
  "date" : "2025-12-17T07:22:04+00:00",
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
  "description" : "Definition for the Caveat Condition resource in the context of CH RAD-Order.",
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
        "short" : "CH RAD-Order Caveat Condition"
      },
      {
        "id" : "Condition.extension",
        "path" : "Condition.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 2
      },
      {
        "id" : "Condition.extension:caveatType",
        "path" : "Condition.extension",
        "sliceName" : "caveatType",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-caveat-type"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Condition.extension:qualifierValue",
        "path" : "Condition.extension",
        "sliceName" : "qualifierValue",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-qualifier-value"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Condition.category",
        "path" : "Condition.category",
        "short" : "Problem List Item",
        "min" : 1,
        "max" : "1",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/condition-category",
              "code" : "problem-list-item"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Condition.code",
        "path" : "Condition.code",
        "min" : 1,
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-condition"
        }
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
        ],
        "mustSupport" : true
      },
      {
        "id" : "Condition.evidence",
        "path" : "Condition.evidence",
        "mustSupport" : true
      },
      {
        "id" : "Condition.evidence.detail",
        "path" : "Condition.evidence.detail",
        "short" : "Supporting information: for renal insufficiency (creatinine clearance, creatinine) and coagulopathy (INR, platelets)",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-creatinineclearance-observation",
              "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-creatinine-observation",
              "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-INR-observation",
              "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-platelets-observation"
            ]
          }
        ]
      }
    ]
  }
}

```
