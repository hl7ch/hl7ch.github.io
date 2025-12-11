# MI Abrilada-40mg-Pre-Filled-Pen - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MI Abrilada-40mg-Pre-Filled-Pen**

## Example ManufacturedItemDefinition: MI Abrilada-40mg-Pre-Filled-Pen

Profile: [CH IDMP ManufacturedItemDefinition](StructureDefinition-ch-idmp-manufactureditemdefinition.md)

**status**: Active

**manufacturedDoseForm**: Solution for Injection

**unitOfPresentation**: Pen



## Resource Content

```json
{
  "resourceType" : "ManufacturedItemDefinition",
  "id" : "MI-Abrilada-40mg-Pre-Filled-Pen",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-manufactureditemdefinition"
    ]
  },
  "status" : "active",
  "manufacturedDoseForm" : {
    "coding" : [
      {
        "system" : "http://standardterms.edqm.eu",
        "code" : "11201000",
        "display" : "Solution for Injection"
      }
    ]
  },
  "unitOfPresentation" : {
    "coding" : [
      {
        "system" : "http://standardterms.edqm.eu",
        "code" : "15037000",
        "display" : "Pen"
      }
    ]
  }
}

```
