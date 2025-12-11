# CH IDMP AdministrableProductDefinition - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH IDMP AdministrableProductDefinition**

## Resource Profile: CH IDMP AdministrableProductDefinition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-administrableproductdefinition | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:CHIDMPAdministrableProductDefinition |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile of the AdministrableProductDefinition resource for representing a medicinal product in the final form which is suitable for administering to a patient. 

**Usages:**

* Use this Profile: [IDMP Bundle](StructureDefinition-ch-idmp-bundle.md)
* Refer to this Profile: [IDMP Ingredient](StructureDefinition-ch-idmp-ingredient.md)
* Examples for this Profile: [AdministrableProductDefinition/PhP-Abrilada-40mg-Pre-Filled-Pen](AdministrableProductDefinition-PhP-Abrilada-40mg-Pre-Filled-Pen.md), [AdministrableProductDefinition/PhP-Budesonidum-Suspension](AdministrableProductDefinition-PhP-Budesonidum-Suspension.md), [AdministrableProductDefinition/PhP-Estradiolum-Norethisteroni-Transdermalpatch](AdministrableProductDefinition-PhP-Estradiolum-Norethisteroni-Transdermalpatch.md), [AdministrableProductDefinition/PhP-Nirmatrelvir-150mg-Filmcoatedtablet](AdministrableProductDefinition-PhP-Nirmatrelvir-150mg-Filmcoatedtablet.md)...Show 4 more,[AdministrableProductDefinition/PhP-Pembrolizumab-100mg-Vial](AdministrableProductDefinition-PhP-Pembrolizumab-100mg-Vial.md),[AdministrableProductDefinition/PhP-Ritonavirum-100mg-Filmcoatedtablet](AdministrableProductDefinition-PhP-Ritonavirum-100mg-Filmcoatedtablet.md),[AdministrableProductDefinition/PhP-Trientinum-150mg-Filmcoatedtablet](AdministrableProductDefinition-PhP-Trientinum-150mg-Filmcoatedtablet.md)and[AdministrableProductDefinition/PhP-Trientinum-250mg-Capsule](AdministrableProductDefinition-PhP-Trientinum-250mg-Capsule.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epl|current/StructureDefinition/ch-idmp-administrableproductdefinition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-idmp-administrableproductdefinition.csv), [Excel](StructureDefinition-ch-idmp-administrableproductdefinition.xlsx), [Schematron](StructureDefinition-ch-idmp-administrableproductdefinition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-idmp-administrableproductdefinition",
  "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-administrableproductdefinition",
  "version" : "1.0.0",
  "name" : "CHIDMPAdministrableProductDefinition",
  "title" : "CH IDMP AdministrableProductDefinition",
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
  "description" : "Profile of the AdministrableProductDefinition resource for representing a medicinal product in the final form which is suitable for administering to a patient.",
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
  "type" : "AdministrableProductDefinition",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/AdministrableProductDefinition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "AdministrableProductDefinition",
        "path" : "AdministrableProductDefinition",
        "short" : "CH IDMP AdministrableProductDefinition"
      },
      {
        "id" : "AdministrableProductDefinition.contained",
        "path" : "AdministrableProductDefinition.contained",
        "short" : "The ingredients of this administrable medicinal product as inline resources."
      },
      {
        "id" : "AdministrableProductDefinition.identifier.system",
        "path" : "AdministrableProductDefinition.identifier.system",
        "min" : 1,
        "patternUri" : "http://fhir.ch/ig/ch-epl/sid/phpid"
      },
      {
        "id" : "AdministrableProductDefinition.identifier.value",
        "path" : "AdministrableProductDefinition.identifier.value",
        "min" : 1
      },
      {
        "id" : "AdministrableProductDefinition.formOf",
        "path" : "AdministrableProductDefinition.formOf",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-medicinalproductdefinition"
            ]
          }
        ]
      },
      {
        "id" : "AdministrableProductDefinition.producedFrom",
        "path" : "AdministrableProductDefinition.producedFrom",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-manufactureditemdefinition"
            ]
          }
        ]
      }
    ]
  }
}

```
