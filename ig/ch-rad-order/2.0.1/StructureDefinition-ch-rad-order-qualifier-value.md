# CH RAD-Order Qualifier Value - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH RAD-Order Qualifier Value**

## Extension: CH RAD-Order Qualifier Value 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-qualifier-value | *Version*:2.0.1 |
| Active as of 2025-12-17 | *Computable Name*:ChRadOrderQualifierValue |
| **Copyright/Legal**: CC0-1.0 | |

Extension to define the value of the qualifier in the context of CH RAD-Order.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH RAD-Order Caveat Condition](StructureDefinition-ch-rad-order-caveat-condition.md)
* Examples for this Extension: [Bundle/DocumentRadiologyOrder](Bundle-DocumentRadiologyOrder.md), [Condition/CaveatBloodCoagulation](Condition-CaveatBloodCoagulation.md), [Condition/CaveatBodyPiercing](Condition-CaveatBodyPiercing.md), [Condition/CaveatDeviceCardiacPacemaker](Condition-CaveatDeviceCardiacPacemaker.md)...Show 2 more,[Condition/CaveatDrugPrescriptionMetformin](Condition-CaveatDrugPrescriptionMetformin.md)and[Condition/CaveatRenalInsufficiency](Condition-CaveatRenalInsufficiency.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-rad-order|current/StructureDefinition/ch-rad-order-qualifier-value)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-rad-order-qualifier-value.csv), [Excel](StructureDefinition-ch-rad-order-qualifier-value.xlsx), [Schematron](StructureDefinition-ch-rad-order-qualifier-value.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-rad-order-qualifier-value",
  "url" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-qualifier-value",
  "version" : "2.0.1",
  "name" : "ChRadOrderQualifierValue",
  "title" : "CH RAD-Order Qualifier Value",
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
  "description" : "Extension to define the value of the qualifier in the context of CH RAD-Order.",
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
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [
    {
      "type" : "element",
      "expression" : "Condition"
    }
  ],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension",
        "path" : "Extension",
        "short" : "CH RAD-Order Qualifier Value",
        "definition" : "Extension to define the value of the qualifier in the context of CH RAD-Order."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-qualifier-value"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "short" : "Value of Qualifier",
        "min" : 1,
        "type" : [
          {
            "code" : "Coding"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-caveat-qualifier-value"
        }
      }
    ]
  }
}

```
