# CH IDMP ManufacturedItemDefinition - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH IDMP ManufacturedItemDefinition**

## Resource Profile: CH IDMP ManufacturedItemDefinition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-manufactureditemdefinition | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:CHIDMPManufacturedItemDefinition |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile of the ManufacturedItemDefinition resource for representing the characteristics of a medicinal manufactured item as contained in a packaged medicinal product. 

**Usages:**

* Use this Profile: [IDMP Bundle](StructureDefinition-ch-idmp-bundle.md)
* Refer to this Profile: [CH IDMP AdministrableProductDefinition](StructureDefinition-ch-idmp-administrableproductdefinition.md), [IDMP Ingredient](StructureDefinition-ch-idmp-ingredient.md), [IDMP PackagedProductDefinition](StructureDefinition-ch-idmp-packagedproductdefinition.md) and [IDMP RegulatedAuthorization](StructureDefinition-ch-idmp-regulatedauthorization.md)
* Examples for this Profile: [ManufacturedItemDefinition/MI-Abrilada-40mg-Pre-Filled-Pen](ManufacturedItemDefinition-MI-Abrilada-40mg-Pre-Filled-Pen.md), [ManufacturedItemDefinition/MI-Budesonidum-2.3mg-Tablet](ManufacturedItemDefinition-MI-Budesonidum-2.3mg-Tablet.md), [ManufacturedItemDefinition/MI-Estradiolum-Norethisteroni-Transdermalpatch](ManufacturedItemDefinition-MI-Estradiolum-Norethisteroni-Transdermalpatch.md), [ManufacturedItemDefinition/MI-Nirmatrelvir-150mg](ManufacturedItemDefinition-MI-Nirmatrelvir-150mg.md)...Show 5 more,[ManufacturedItemDefinition/MI-Pembrolizumab-100mg-Vial](ManufacturedItemDefinition-MI-Pembrolizumab-100mg-Vial.md),[ManufacturedItemDefinition/MI-Ritonavirum-100mg](ManufacturedItemDefinition-MI-Ritonavirum-100mg.md),[ManufacturedItemDefinition/MI-Solvent](ManufacturedItemDefinition-MI-Solvent.md),[ManufacturedItemDefinition/MI-Trientinum-150mg-Filmcoatedtablet](ManufacturedItemDefinition-MI-Trientinum-150mg-Filmcoatedtablet.md)and[ManufacturedItemDefinition/MI-Trientinum-250mg-Capsule](ManufacturedItemDefinition-MI-Trientinum-250mg-Capsule.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epl|current/StructureDefinition/ch-idmp-manufactureditemdefinition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-idmp-manufactureditemdefinition.csv), [Excel](StructureDefinition-ch-idmp-manufactureditemdefinition.xlsx), [Schematron](StructureDefinition-ch-idmp-manufactureditemdefinition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-idmp-manufactureditemdefinition",
  "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-manufactureditemdefinition",
  "version" : "1.0.0",
  "name" : "CHIDMPManufacturedItemDefinition",
  "title" : "CH IDMP ManufacturedItemDefinition",
  "status" : "active",
  "date" : "2025-12-11T12:35:50+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "Profile of the ManufacturedItemDefinition resource for representing the characteristics of a medicinal manufactured item as contained in a packaged medicinal product.",
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
  "fhirVersion" : "5.0.0",
  "mapping" : [
    {
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
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "ManufacturedItemDefinition",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/ManufacturedItemDefinition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "ManufacturedItemDefinition",
        "path" : "ManufacturedItemDefinition",
        "short" : "CH IDMP ManufacturedItemDefinition"
      },
      {
        "id" : "ManufacturedItemDefinition.manufacturedDoseForm",
        "path" : "ManufacturedItemDefinition.manufacturedDoseForm",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-epl/ValueSet/edqm-pharmaceutical-dose-form"
        }
      },
      {
        "id" : "ManufacturedItemDefinition.manufacturedDoseForm.coding",
        "path" : "ManufacturedItemDefinition.manufacturedDoseForm.coding",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "ManufacturedItemDefinition.manufacturedDoseForm.coding:SMC",
        "path" : "ManufacturedItemDefinition.manufacturedDoseForm.coding",
        "sliceName" : "SMC",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "ManufacturedItemDefinition.manufacturedDoseForm.coding:SMC.system",
        "path" : "ManufacturedItemDefinition.manufacturedDoseForm.coding.system",
        "min" : 1,
        "patternUri" : "http://standardterms.edqm.eu"
      },
      {
        "id" : "ManufacturedItemDefinition.manufacturedDoseForm.coding:SMC.code",
        "path" : "ManufacturedItemDefinition.manufacturedDoseForm.coding.code",
        "min" : 1
      },
      {
        "id" : "ManufacturedItemDefinition.unitOfPresentation",
        "path" : "ManufacturedItemDefinition.unitOfPresentation",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-epl/ValueSet/edqm-unit-of-presentation"
        }
      },
      {
        "id" : "ManufacturedItemDefinition.unitOfPresentation.coding",
        "path" : "ManufacturedItemDefinition.unitOfPresentation.coding",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "ManufacturedItemDefinition.unitOfPresentation.coding:SMC",
        "path" : "ManufacturedItemDefinition.unitOfPresentation.coding",
        "sliceName" : "SMC",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "ManufacturedItemDefinition.unitOfPresentation.coding:SMC.system",
        "path" : "ManufacturedItemDefinition.unitOfPresentation.coding.system",
        "min" : 1,
        "patternUri" : "http://standardterms.edqm.eu"
      },
      {
        "id" : "ManufacturedItemDefinition.unitOfPresentation.coding:SMC.code",
        "path" : "ManufacturedItemDefinition.unitOfPresentation.coding.code",
        "min" : 1
      }
    ]
  }
}

```
