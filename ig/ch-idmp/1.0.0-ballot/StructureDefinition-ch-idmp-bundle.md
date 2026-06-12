# Bundle - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Bundle**

## Resource Profile: Bundle 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-bundle | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:CHIDMPBundle |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile of the Bundle resource for representing the set of resources collected into a single package. 

**Usages:**

* Examples for this Profile: [Bundle/200f39aa-ddd8-48a2-a05e-8e4b4e6ac847](Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.md), [Bundle/52ae1101-1e39-4280-b6dc-b505d7501b2b](Bundle-52ae1101-1e39-4280-b6dc-b505d7501b2b.md), [Bundle/a058182b-13dc-4797-9364-2cdb9a4c2bd4](Bundle-a058182b-13dc-4797-9364-2cdb9a4c2bd4.md) and [Bundle/ab55cf13-a819-4875-adaa-5545e2cbdddf](Bundle-ab55cf13-a819-4875-adaa-5545e2cbdddf.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-idmp|current/StructureDefinition/StructureDefinition-ch-idmp-bundle.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-idmp-bundle.csv), [Excel](StructureDefinition-ch-idmp-bundle.xlsx), [Schematron](StructureDefinition-ch-idmp-bundle.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-idmp-bundle",
  "url" : "http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-bundle",
  "version" : "1.0.0-ballot",
  "name" : "CHIDMPBundle",
  "title" : "Bundle",
  "status" : "active",
  "date" : "2026-06-12T16:14:23+00:00",
  "publisher" : "Refdata Foundation",
  "contact" : [{
    "name" : "Refdata Foundation",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.refdata.ch/de/"
    }]
  }],
  "description" : "Profile of the Bundle resource for representing the set of resources collected into a single package.",
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
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Bundle",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Bundle",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Bundle",
      "path" : "Bundle",
      "short" : "Bundle"
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
        "discriminator" : [{
          "type" : "type",
          "path" : "resource"
        }],
        "description" : "Slicing by resource type",
        "rules" : "open"
      },
      "min" : 3,
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:MedicinalProductDefinitionEntry",
      "path" : "Bundle.entry",
      "sliceName" : "MedicinalProductDefinitionEntry",
      "min" : 1,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:MedicinalProductDefinitionEntry.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "MedicinalProductDefinition",
        "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-medicinalproductdefinition"]
      }]
    },
    {
      "id" : "Bundle.entry:PackagedProductDefinitionEntry",
      "path" : "Bundle.entry",
      "sliceName" : "PackagedProductDefinitionEntry",
      "min" : 1,
      "max" : "*",
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:PackagedProductDefinitionEntry.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "PackagedProductDefinition",
        "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-packagedproductdefinition"]
      }]
    },
    {
      "id" : "Bundle.entry:ManufacturedItemDefinitionEntry",
      "path" : "Bundle.entry",
      "sliceName" : "ManufacturedItemDefinitionEntry",
      "min" : 0,
      "max" : "*",
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:ManufacturedItemDefinitionEntry.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "ManufacturedItemDefinition",
        "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-manufactureditemdefinition"]
      }]
    },
    {
      "id" : "Bundle.entry:AdministrableProductDefinition",
      "path" : "Bundle.entry",
      "sliceName" : "AdministrableProductDefinition",
      "min" : 0,
      "max" : "*",
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:AdministrableProductDefinition.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "AdministrableProductDefinition",
        "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-administrableproductdefinition"]
      }]
    },
    {
      "id" : "Bundle.entry:Ingredient",
      "path" : "Bundle.entry",
      "sliceName" : "Ingredient",
      "min" : 1,
      "max" : "*",
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:Ingredient.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "Ingredient",
        "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-ingredient"]
      }]
    },
    {
      "id" : "Bundle.entry:OtherCHResourcesEntry",
      "path" : "Bundle.entry",
      "sliceName" : "OtherCHResourcesEntry",
      "min" : 0,
      "max" : "*",
      "mustSupport" : true
    },
    {
      "id" : "Bundle.entry:OtherCHResourcesEntry.resource",
      "path" : "Bundle.entry.resource",
      "type" : [{
        "code" : "RegulatedAuthorization",
        "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-regulatedauthorization"]
      },
      {
        "code" : "ClinicalUseDefinition",
        "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-clinicalusedefinition-indication"]
      },
      {
        "code" : "DocumentReference",
        "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-documentreference"]
      }]
    }]
  }
}

```
