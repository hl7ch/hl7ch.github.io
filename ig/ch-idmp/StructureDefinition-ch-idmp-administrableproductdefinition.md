# AdministrableProductDefinition - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **AdministrableProductDefinition**

## Resource Profile: AdministrableProductDefinition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-administrableproductdefinition | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:CHIDMPAdministrableProductDefinition |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile of the AdministrableProductDefinition resource for representing a medicinal product in the final form which is suitable for administering to a patient. 

**Usages:**

* Use this Profile: [Bundle](StructureDefinition-ch-idmp-bundle.md)
* Refer to this Profile: [Ingredient](StructureDefinition-ch-idmp-ingredient.md)
* Examples for this Profile: [AdministrableProductDefinition/PhP-Comprehensive-Sample-VaginalCream](AdministrableProductDefinition-PhP-Comprehensive-Sample-VaginalCream.md), [AdministrableProductDefinition/PhP-Comprehensive-Sample-VaginalPessary](AdministrableProductDefinition-PhP-Comprehensive-Sample-VaginalPessary.md), [AdministrableProductDefinition/PhP-Enfortumabum-vedotinum-20-Solution](AdministrableProductDefinition-PhP-Enfortumabum-vedotinum-20-Solution.md), [AdministrableProductDefinition/PhP-Enfortumabum-vedotinum-30-Solution](AdministrableProductDefinition-PhP-Enfortumabum-vedotinum-30-Solution.md) and [AdministrableProductDefinition/PhP-Gilteritinibi-hemifumaras-40-Filmcoatedtablet](AdministrableProductDefinition-PhP-Gilteritinibi-hemifumaras-40-Filmcoatedtablet.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-idmp|current/StructureDefinition/StructureDefinition-ch-idmp-administrableproductdefinition.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-idmp-administrableproductdefinition.csv), [Excel](StructureDefinition-ch-idmp-administrableproductdefinition.xlsx), [Schematron](StructureDefinition-ch-idmp-administrableproductdefinition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-idmp-administrableproductdefinition",
  "url" : "http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-administrableproductdefinition",
  "version" : "1.0.0-ballot",
  "name" : "CHIDMPAdministrableProductDefinition",
  "title" : "AdministrableProductDefinition",
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
  "description" : "Profile of the AdministrableProductDefinition resource for representing a medicinal product in the final form which is suitable for administering to a patient.",
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
  "type" : "AdministrableProductDefinition",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/AdministrableProductDefinition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "AdministrableProductDefinition",
      "path" : "AdministrableProductDefinition",
      "short" : "AdministrableProductDefinition"
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
      "patternUri" : "http://fhir.ch/ig/ch-idmp/sid/phpid"
    },
    {
      "id" : "AdministrableProductDefinition.identifier.value",
      "path" : "AdministrableProductDefinition.identifier.value",
      "min" : 1
    },
    {
      "id" : "AdministrableProductDefinition.formOf",
      "path" : "AdministrableProductDefinition.formOf",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-medicinalproductdefinition"]
      }]
    },
    {
      "id" : "AdministrableProductDefinition.administrableDoseForm",
      "path" : "AdministrableProductDefinition.administrableDoseForm",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-idmp/ValueSet/edqm-pharmaceutical-dose-form"
      }
    },
    {
      "id" : "AdministrableProductDefinition.unitOfPresentation",
      "path" : "AdministrableProductDefinition.unitOfPresentation",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-idmp/ValueSet/edqm-unit-of-presentation"
      }
    },
    {
      "id" : "AdministrableProductDefinition.producedFrom",
      "path" : "AdministrableProductDefinition.producedFrom",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-manufactureditemdefinition"]
      }]
    },
    {
      "id" : "AdministrableProductDefinition.routeOfAdministration.code",
      "path" : "AdministrableProductDefinition.routeOfAdministration.code",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-idmp/ValueSet/edqm-route-of-administration"
      }
    }]
  }
}

```
