# MI Enfortumabum-vedotinum-20-Powder - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MI Enfortumabum-vedotinum-20-Powder**

## Example ManufacturedItemDefinition: MI Enfortumabum-vedotinum-20-Powder

Profile: [ManufacturedItemDefinition](StructureDefinition-ch-idmp-manufactureditemdefinition.md)

**status**: Active

**manufacturedDoseForm**: Lyophilisate for solution for infusion

**unitOfPresentation**: Vial



## Resource Content

```json
{
  "resourceType" : "ManufacturedItemDefinition",
  "id" : "MI-Enfortumabum-vedotinum-20-Powder",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-manufactureditemdefinition"]
  },
  "status" : "active",
  "manufacturedDoseForm" : {
    "coding" : [{
      "system" : "http://standardterms.edqm.eu",
      "code" : "11215000",
      "display" : "Lyophilisate for solution for infusion"
    }]
  },
  "unitOfPresentation" : {
    "coding" : [{
      "system" : "http://standardterms.edqm.eu",
      "code" : "15060000",
      "display" : "Vial"
    }]
  }
}

```
