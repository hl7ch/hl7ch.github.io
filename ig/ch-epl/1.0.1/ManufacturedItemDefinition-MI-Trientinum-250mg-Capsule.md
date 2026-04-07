# MI Trientinum-250mg-Capsule - CH EPL (R5) v1.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MI Trientinum-250mg-Capsule**

## Example ManufacturedItemDefinition: MI Trientinum-250mg-Capsule

Profile: [ManufacturedItemDefinition](StructureDefinition-ch-idmp-manufactureditemdefinition.md)

**status**: Active

**manufacturedDoseForm**: Capsule, hard

**unitOfPresentation**: Capsule



## Resource Content

```json
{
  "resourceType" : "ManufacturedItemDefinition",
  "id" : "MI-Trientinum-250mg-Capsule",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-manufactureditemdefinition"]
  },
  "status" : "active",
  "manufacturedDoseForm" : {
    "coding" : [{
      "system" : "http://standardterms.edqm.eu",
      "code" : "10210000",
      "display" : "Capsule, hard"
    }]
  },
  "unitOfPresentation" : {
    "coding" : [{
      "system" : "http://standardterms.edqm.eu",
      "code" : "15012000",
      "display" : "Capsule"
    }]
  }
}

```
