# MI Budesonidum-2.3mg-Tablet - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MI Budesonidum-2.3mg-Tablet**

## Example ManufacturedItemDefinition: MI Budesonidum-2.3mg-Tablet

Profile: [CH IDMP ManufacturedItemDefinition](StructureDefinition-ch-idmp-manufactureditemdefinition.md)

**status**: Active

**manufacturedDoseForm**: Tablet for rectal suspension

**unitOfPresentation**: Tablet



## Resource Content

```json
{
  "resourceType" : "ManufacturedItemDefinition",
  "id" : "MI-Budesonidum-2.3mg-Tablet",
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
        "code" : "11012000",
        "display" : "Tablet for rectal suspension"
      }
    ]
  },
  "unitOfPresentation" : {
    "coding" : [
      {
        "system" : "http://standardterms.edqm.eu",
        "code" : "15054000",
        "display" : "Tablet"
      }
    ]
  }
}

```
