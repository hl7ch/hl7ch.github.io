# ManufacturedItemDefinition - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ManufacturedItemDefinition**

## Resource Profile: ManufacturedItemDefinition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-manufactureditemdefinition | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:CHIDMPManufacturedItemDefinition |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile of the ManufacturedItemDefinition resource for representing the characteristics of a medicinal manufactured item as contained in a packaged medicinal product. 

**Usages:**

* Use this Profile: [Bundle](StructureDefinition-ch-idmp-bundle.md)
* Refer to this Profile: [AdministrableProductDefinition](StructureDefinition-ch-idmp-administrableproductdefinition.md), [Ingredient](StructureDefinition-ch-idmp-ingredient.md), [PackagedProductDefinition](StructureDefinition-ch-idmp-packagedproductdefinition.md) and [RegulatedAuthorization](StructureDefinition-ch-idmp-regulatedauthorization.md)
* Examples for this Profile: [ManufacturedItemDefinition/MI-Comprehensive-Sample-VaginalCream](ManufacturedItemDefinition-MI-Comprehensive-Sample-VaginalCream.md), [ManufacturedItemDefinition/MI-Comprehensive-Sample-VaginalPessary](ManufacturedItemDefinition-MI-Comprehensive-Sample-VaginalPessary.md), [ManufacturedItemDefinition/MI-Enfortumabum-vedotinum-20-Powder](ManufacturedItemDefinition-MI-Enfortumabum-vedotinum-20-Powder.md), [ManufacturedItemDefinition/MI-Enfortumabum-vedotinum-30-Powder](ManufacturedItemDefinition-MI-Enfortumabum-vedotinum-30-Powder.md) and [ManufacturedItemDefinition/MI-Gilteritinibi-hemifumaras-40-Filmcoatedtablet](ManufacturedItemDefinition-MI-Gilteritinibi-hemifumaras-40-Filmcoatedtablet.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-idmp|current/StructureDefinition/StructureDefinition-ch-idmp-manufactureditemdefinition.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-idmp-manufactureditemdefinition.csv), [Excel](StructureDefinition-ch-idmp-manufactureditemdefinition.xlsx), [Schematron](StructureDefinition-ch-idmp-manufactureditemdefinition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-idmp-manufactureditemdefinition",
  "url" : "http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-manufactureditemdefinition",
  "version" : "1.0.0-ballot",
  "name" : "CHIDMPManufacturedItemDefinition",
  "title" : "ManufacturedItemDefinition",
  "status" : "active",
  "date" : "2026-06-12T16:17:59+00:00",
  "publisher" : "Refdata Foundation",
  "contact" : [{
    "name" : "Refdata Foundation",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.refdata.ch/de/"
    }]
  }],
  "description" : "Profile of the ManufacturedItemDefinition resource for representing the characteristics of a medicinal manufactured item as contained in a packaged medicinal product.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "5.0.0",
  "mapping" : [{
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "idmp",
    "uri" : "https://www.iso.org/obp/ui/#iso:std:iso:11615",
    "name" : "IDMP Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "ManufacturedItemDefinition",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/ManufacturedItemDefinition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "ManufacturedItemDefinition",
      "path" : "ManufacturedItemDefinition",
      "short" : "ManufacturedItemDefinition"
    },
    {
      "id" : "ManufacturedItemDefinition.manufacturedDoseForm",
      "path" : "ManufacturedItemDefinition.manufacturedDoseForm",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-idmp/ValueSet/edqm-pharmaceutical-dose-form"
      }
    },
    {
      "id" : "ManufacturedItemDefinition.unitOfPresentation",
      "path" : "ManufacturedItemDefinition.unitOfPresentation",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-idmp/ValueSet/edqm-unit-of-presentation"
      }
    }]
  }
}

```
