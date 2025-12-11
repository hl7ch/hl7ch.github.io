# IDMP PackagedProductDefinition - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IDMP PackagedProductDefinition**

## Resource Profile: IDMP PackagedProductDefinition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-packagedproductdefinition | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:CHIDMPPackagedProductDefinition |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile of the PackagedProductDefinition resource for representing a medically related item or items, in a container or package. 

**Usages:**

* Use this Profile: [IDMP Bundle](StructureDefinition-ch-idmp-bundle.md)
* Refer to this Profile: [IDMP PackagedProductDefinition](StructureDefinition-ch-idmp-packagedproductdefinition.md) and [IDMP RegulatedAuthorization](StructureDefinition-ch-idmp-regulatedauthorization.md)
* Examples for this Profile: [PackagedProductDefinition/PMP-Abrilada-40mg-0.8ml-1-Pre-Filled-Pen](PackagedProductDefinition-PMP-Abrilada-40mg-0.8ml-1-Pre-Filled-Pen.md), [PackagedProductDefinition/PMP-Abrilada-40mg-0.8ml-2-Pre-Filled-Pen](PackagedProductDefinition-PMP-Abrilada-40mg-0.8ml-2-Pre-Filled-Pen.md), [PackagedProductDefinition/PMP-Cuprior-150mg-Filmcoatedtablet](PackagedProductDefinition-PMP-Cuprior-150mg-Filmcoatedtablet.md), [PackagedProductDefinition/PMP-Entocort-Solvent-and-Tablet](PackagedProductDefinition-PMP-Entocort-Solvent-and-Tablet.md)...Show 4 more,[PackagedProductDefinition/PMP-Estalis-Transdermalpatch](PackagedProductDefinition-PMP-Estalis-Transdermalpatch.md),[PackagedProductDefinition/PMP-Keytruda-100mg-4ml-Solution-for-Infusion](PackagedProductDefinition-PMP-Keytruda-100mg-4ml-Solution-for-Infusion.md),[PackagedProductDefinition/PMP-Paxlovid-Filmcoatedtablet](PackagedProductDefinition-PMP-Paxlovid-Filmcoatedtablet.md)and[PackagedProductDefinition/PMP-Triogen-250mg-Capsule](PackagedProductDefinition-PMP-Triogen-250mg-Capsule.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epl|current/StructureDefinition/ch-idmp-packagedproductdefinition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-idmp-packagedproductdefinition.csv), [Excel](StructureDefinition-ch-idmp-packagedproductdefinition.xlsx), [Schematron](StructureDefinition-ch-idmp-packagedproductdefinition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-idmp-packagedproductdefinition",
  "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-packagedproductdefinition",
  "version" : "1.0.0",
  "name" : "CHIDMPPackagedProductDefinition",
  "title" : "IDMP PackagedProductDefinition",
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
  "description" : "Profile of the PackagedProductDefinition resource for representing a medically related item or items, in a container or package.",
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
  "type" : "PackagedProductDefinition",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/PackagedProductDefinition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "PackagedProductDefinition",
        "path" : "PackagedProductDefinition",
        "short" : "CH IDMP PackagedProductDefinition"
      },
      {
        "id" : "PackagedProductDefinition.packageFor",
        "path" : "PackagedProductDefinition.packageFor",
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
        "id" : "PackagedProductDefinition.description",
        "path" : "PackagedProductDefinition.description",
        "short" : "Textual description (this is not the name of the package or product)"
      },
      {
        "id" : "PackagedProductDefinition.marketingStatus.country",
        "path" : "PackagedProductDefinition.marketingStatus.country",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "urn:iso:std:iso:3166",
              "code" : "CH"
            }
          ]
        }
      },
      {
        "id" : "PackagedProductDefinition.marketingStatus.status",
        "path" : "PackagedProductDefinition.marketingStatus.status",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-epl/ValueSet/ch-SMC-marketing-status"
        }
      },
      {
        "id" : "PackagedProductDefinition.marketingStatus.status.coding",
        "path" : "PackagedProductDefinition.marketingStatus.status.coding",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        },
        "max" : "1"
      },
      {
        "id" : "PackagedProductDefinition.marketingStatus.status.coding:SMC",
        "path" : "PackagedProductDefinition.marketingStatus.status.coding",
        "sliceName" : "SMC",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "PackagedProductDefinition.marketingStatus.status.coding:SMC.system",
        "path" : "PackagedProductDefinition.marketingStatus.status.coding.system",
        "min" : 1,
        "patternUri" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-marketing-status"
      },
      {
        "id" : "PackagedProductDefinition.marketingStatus.status.coding:SMC.code",
        "path" : "PackagedProductDefinition.marketingStatus.status.coding.code",
        "min" : 1
      },
      {
        "id" : "PackagedProductDefinition.packaging.type",
        "path" : "PackagedProductDefinition.packaging.type",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-epl/ValueSet/edqm-packaging"
        }
      },
      {
        "id" : "PackagedProductDefinition.packaging.type.coding",
        "path" : "PackagedProductDefinition.packaging.type.coding",
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
        "id" : "PackagedProductDefinition.packaging.type.coding:SMC",
        "path" : "PackagedProductDefinition.packaging.type.coding",
        "sliceName" : "SMC",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "PackagedProductDefinition.packaging.type.coding:SMC.system",
        "path" : "PackagedProductDefinition.packaging.type.coding.system",
        "min" : 1,
        "patternUri" : "http://standardterms.edqm.eu"
      },
      {
        "id" : "PackagedProductDefinition.packaging.type.coding:SMC.code",
        "path" : "PackagedProductDefinition.packaging.type.coding.code",
        "min" : 1
      },
      {
        "id" : "PackagedProductDefinition.packaging.quantity",
        "path" : "PackagedProductDefinition.packaging.quantity",
        "short" : "The quantity of this level of packaging in the package that contains it (with the outermost level being 1)."
      },
      {
        "id" : "PackagedProductDefinition.packaging.property.value[x]",
        "path" : "PackagedProductDefinition.packaging.property.value[x]",
        "min" : 1
      },
      {
        "id" : "PackagedProductDefinition.packaging.containedItem.item",
        "path" : "PackagedProductDefinition.packaging.containedItem.item",
        "type" : [
          {
            "code" : "CodeableReference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-manufactureditemdefinition",
              "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-packagedproductdefinition"
            ]
          }
        ]
      },
      {
        "id" : "PackagedProductDefinition.packaging.containedItem.amount",
        "path" : "PackagedProductDefinition.packaging.containedItem.amount",
        "min" : 1
      },
      {
        "id" : "PackagedProductDefinition.packaging.containedItem.amount.value",
        "path" : "PackagedProductDefinition.packaging.containedItem.amount.value",
        "min" : 1
      },
      {
        "id" : "PackagedProductDefinition.packaging.containedItem.amount.unit",
        "path" : "PackagedProductDefinition.packaging.containedItem.amount.unit",
        "min" : 1
      },
      {
        "id" : "PackagedProductDefinition.packaging.containedItem.amount.system",
        "path" : "PackagedProductDefinition.packaging.containedItem.amount.system",
        "min" : 1
      },
      {
        "id" : "PackagedProductDefinition.packaging.containedItem.amount.code",
        "path" : "PackagedProductDefinition.packaging.containedItem.amount.code",
        "min" : 1
      }
    ]
  }
}

```
