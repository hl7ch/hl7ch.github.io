# IDMP Bundle - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IDMP Bundle**

## Resource Profile: IDMP Bundle 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-bundle | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:CHIDMPBundle |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile of the Bundle resource for representing the set of resources collected into a single package. 

**Usages:**

* Examples for this Profile: [Bundle/08f553cb-1404-4972-bf14-2023a5f59955](Bundle-08f553cb-1404-4972-bf14-2023a5f59955.md), [Bundle/3e18bbe5-4cc2-4eaa-8d27-815c0e885025](Bundle-3e18bbe5-4cc2-4eaa-8d27-815c0e885025.md), [Bundle/5bb930aa-f30d-4f10-aeef-e85f6b5f8d59](Bundle-5bb930aa-f30d-4f10-aeef-e85f6b5f8d59.md), [Bundle/6722a9ee-ae3b-4c20-bcf0-9b7cb6f062db](Bundle-6722a9ee-ae3b-4c20-bcf0-9b7cb6f062db.md)...Show 3 more,[Bundle/a69ea53d-79d4-46f4-bd2e-7a71439f148f](Bundle-a69ea53d-79d4-46f4-bd2e-7a71439f148f.md),[Bundle/b2eb19be-cca4-4fd8-a2a3-84d05631e6c0](Bundle-b2eb19be-cca4-4fd8-a2a3-84d05631e6c0.md)and[Bundle/c97d5d89-4467-4c1e-9954-9d1e1d1d46e2](Bundle-c97d5d89-4467-4c1e-9954-9d1e1d1d46e2.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epl|current/StructureDefinition/ch-idmp-bundle)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-idmp-bundle.csv), [Excel](StructureDefinition-ch-idmp-bundle.xlsx), [Schematron](StructureDefinition-ch-idmp-bundle.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-idmp-bundle",
  "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-bundle",
  "version" : "1.0.0",
  "name" : "CHIDMPBundle",
  "title" : "IDMP Bundle",
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
  "description" : "Profile of the Bundle resource for representing the set of resources collected into a single package.",
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
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 V2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Bundle",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Bundle",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Bundle",
        "path" : "Bundle",
        "short" : "IDMP Bundle"
      },
      {
        "id" : "Bundle.type",
        "path" : "Bundle.type",
        "fixedCode" : "collection"
      },
      {
        "id" : "Bundle.entry",
        "path" : "Bundle.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "resource"
            }
          ],
          "description" : "Slicing by resource type",
          "rules" : "open"
        },
        "min" : 5,
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:MedicinalProductDefinitionEntry",
        "path" : "Bundle.entry",
        "sliceName" : "MedicinalProductDefinitionEntry",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Bundle.entry:MedicinalProductDefinitionEntry.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "MedicinalProductDefinition",
            "profile" : [
              "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-medicinalproductdefinition"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:PackagedProductDefinitionEntry",
        "path" : "Bundle.entry",
        "sliceName" : "PackagedProductDefinitionEntry",
        "min" : 1,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:PackagedProductDefinitionEntry.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "PackagedProductDefinition",
            "profile" : [
              "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-packagedproductdefinition"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:ManufacturedItemDefinitionEntry",
        "path" : "Bundle.entry",
        "sliceName" : "ManufacturedItemDefinitionEntry",
        "min" : 1,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:ManufacturedItemDefinitionEntry.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "ManufacturedItemDefinition",
            "profile" : [
              "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-manufactureditemdefinition"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:AdministrableProductDefinition",
        "path" : "Bundle.entry",
        "sliceName" : "AdministrableProductDefinition",
        "min" : 1,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:AdministrableProductDefinition.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "AdministrableProductDefinition",
            "profile" : [
              "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-administrableproductdefinition"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Ingredient",
        "path" : "Bundle.entry",
        "sliceName" : "Ingredient",
        "min" : 1,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Ingredient.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Ingredient",
            "profile" : [
              "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-ingredient"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:OtherCHResourcesEntry",
        "path" : "Bundle.entry",
        "sliceName" : "OtherCHResourcesEntry",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:OtherCHResourcesEntry.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "RegulatedAuthorization",
            "profile" : [
              "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-regulatedauthorization"
            ]
          },
          {
            "code" : "ClinicalUseDefinition",
            "profile" : [
              "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-clinicalusedefinition-indication"
            ]
          },
          {
            "code" : "DocumentReference",
            "profile" : [
              "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-documentreference"
            ]
          }
        ]
      }
    ]
  }
}

```
