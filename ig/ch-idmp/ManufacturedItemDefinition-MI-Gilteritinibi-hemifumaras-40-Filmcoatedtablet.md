# MI Gilteritinibi-hemifumaras-40-Tablet - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MI Gilteritinibi-hemifumaras-40-Tablet**

## Example ManufacturedItemDefinition: MI Gilteritinibi-hemifumaras-40-Tablet

Profile: [ManufacturedItemDefinition](StructureDefinition-ch-idmp-manufactureditemdefinition.md)

**status**: Active

**manufacturedDoseForm**: Film-coated tablet

**unitOfPresentation**: Tablet



## Resource Content

```json
{
  "resourceType" : "ManufacturedItemDefinition",
  "id" : "MI-Gilteritinibi-hemifumaras-40-Filmcoatedtablet",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-manufactureditemdefinition"]
  },
  "status" : "active",
  "manufacturedDoseForm" : {
    "coding" : [{
      "system" : "http://standardterms.edqm.eu",
      "code" : "10221000",
      "display" : "Film-coated tablet"
    }]
  },
  "unitOfPresentation" : {
    "coding" : [{
      "system" : "http://standardterms.edqm.eu",
      "code" : "15054000",
      "display" : "Tablet"
    }]
  }
}

```
