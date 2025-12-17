# Type of Order Detail - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Type of Order Detail**

## CodeSystem: Type of Order Detail (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-rad-order/CodeSystem/ch-rad-order-order-detail-type | *Version*:2.0.1 |
| Active as of 2025-12-17 | *Computable Name*:ChRadOrderOrderDetailType |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition for Type of Order Detail Code System in the context of CH RAD-Order. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChRadOrderOrderDetailType](ValueSet-ch-rad-order-order-detail-type.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-rad-order-order-detail-type",
  "url" : "http://fhir.ch/ig/ch-rad-order/CodeSystem/ch-rad-order-order-detail-type",
  "version" : "2.0.1",
  "name" : "ChRadOrderOrderDetailType",
  "title" : "Type of Order Detail",
  "status" : "active",
  "experimental" : true,
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
  "description" : "Definition for Type of Order Detail Code System in the context of CH RAD-Order.",
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
  "count" : 5,
  "concept" : [
    {
      "code" : "imagingRegion",
      "display" : "Imaging Region"
    },
    {
      "code" : "laterality",
      "display" : "Laterality"
    },
    {
      "code" : "viewType",
      "display" : "View Type"
    },
    {
      "code" : "maneuverType",
      "display" : "Maneuver Type"
    },
    {
      "code" : "guidanceForAction",
      "display" : "Guidance for Action"
    }
  ]
}

```
