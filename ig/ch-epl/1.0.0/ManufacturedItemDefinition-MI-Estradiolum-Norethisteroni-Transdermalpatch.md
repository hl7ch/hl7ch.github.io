# MI Estradiol-hemihydrate-Norethisteroni-acetas-Transdermal-patch - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MI Estradiol-hemihydrate-Norethisteroni-acetas-Transdermal-patch**

## Example ManufacturedItemDefinition: MI Estradiol-hemihydrate-Norethisteroni-acetas-Transdermal-patch

Profile: [CH IDMP ManufacturedItemDefinition](StructureDefinition-ch-idmp-manufactureditemdefinition.md)

**status**: Active

**manufacturedDoseForm**: Transdermal patch

**unitOfPresentation**: Patch



## Resource Content

```json
{
  "resourceType" : "ManufacturedItemDefinition",
  "id" : "MI-Estradiolum-Norethisteroni-Transdermalpatch",
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
        "code" : "10519000",
        "display" : "Transdermal patch"
      }
    ]
  },
  "unitOfPresentation" : {
    "coding" : [
      {
        "system" : "http://standardterms.edqm.eu",
        "code" : "15036000",
        "display" : "Patch"
      }
    ]
  }
}

```
