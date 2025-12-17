# CH RAD-Order Order Detail Type - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH RAD-Order Order Detail Type**

## Extension: CH RAD-Order Order Detail Type 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-order-detail-type | *Version*:2.0.1 |
| Active as of 2025-12-17 | *Computable Name*:ChRadOrderOrderDetailType |
| **Copyright/Legal**: CC0-1.0 | |

Extension to define the Type of Order Detail in context of CH RAD-Order.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH RAD-Order ServiceRequest](StructureDefinition-ch-rad-order-servicerequest.md)
* Examples for this Extension: [Bundle/DocumentRadiologyOrder](Bundle-DocumentRadiologyOrder.md) and [ServiceRequest/ServiceRequestRadiologyOrder](ServiceRequest-ServiceRequestRadiologyOrder.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-rad-order|current/StructureDefinition/ch-rad-order-order-detail-type)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-rad-order-order-detail-type.csv), [Excel](StructureDefinition-ch-rad-order-order-detail-type.xlsx), [Schematron](StructureDefinition-ch-rad-order-order-detail-type.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-rad-order-order-detail-type",
  "url" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-order-detail-type",
  "version" : "2.0.1",
  "name" : "ChRadOrderOrderDetailType",
  "title" : "CH RAD-Order Order Detail Type",
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
  "description" : "Extension to define the Type of Order Detail in context of CH RAD-Order.",
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
      "expression" : "ServiceRequest.orderDetail"
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
        "short" : "CH RAD-Order Order Detail Type",
        "definition" : "Extension to define the Type of Order Detail in context of CH RAD-Order."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-order-detail-type"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "short" : "Type of Order Detail",
        "min" : 1,
        "type" : [
          {
            "code" : "Coding"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-rad-order/ValueSet/ch-rad-order-order-detail-type"
        }
      }
    ]
  }
}

```
