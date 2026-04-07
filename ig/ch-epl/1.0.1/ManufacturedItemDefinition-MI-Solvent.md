# MI Solvent - CH EPL (R5) v1.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MI Solvent**

## Example ManufacturedItemDefinition: MI Solvent

Profile: [ManufacturedItemDefinition](StructureDefinition-ch-idmp-manufactureditemdefinition.md)

**status**: Active

**manufacturedDoseForm**: Solvent for...

**unitOfPresentation**: Bottle



## Resource Content

```json
{
  "resourceType" : "ManufacturedItemDefinition",
  "id" : "MI-Solvent",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-manufactureditemdefinition"]
  },
  "status" : "active",
  "manufacturedDoseForm" : {
    "coding" : [{
      "system" : "http://standardterms.edqm.eu",
      "code" : "13035000",
      "display" : "Solvent for..."
    }]
  },
  "unitOfPresentation" : {
    "coding" : [{
      "system" : "http://standardterms.edqm.eu",
      "code" : "15009000",
      "display" : "Bottle"
    }]
  }
}

```
