# MedicinalProductDefinition - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedicinalProductDefinition**

## Resource Profile: MedicinalProductDefinition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-medicinalproductdefinition | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:CHIDMPMedicinalProductDefinition |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile of the MedicinalProductDefinition resource for representing the detailed data of medicinal products. 

**Usages:**

* Use this Profile: [Bundle](StructureDefinition-ch-idmp-bundle.md)
* Refer to this Profile: [AdministrableProductDefinition](StructureDefinition-ch-idmp-administrableproductdefinition.md), [ClinicalUseDefinition Indication](StructureDefinition-ch-idmp-clinicalusedefinition-indication.md), [Ingredient](StructureDefinition-ch-idmp-ingredient.md), [PackagedProductDefinition](StructureDefinition-ch-idmp-packagedproductdefinition.md) and [RegulatedAuthorization](StructureDefinition-ch-idmp-regulatedauthorization.md)
* Examples for this Profile: [MedicinalProductDefinition/Comprehensive-Sample-Combipack](MedicinalProductDefinition-Comprehensive-Sample-Combipack.md), [MedicinalProductDefinition/Padcev-20mg-Powder](MedicinalProductDefinition-Padcev-20mg-Powder.md), [MedicinalProductDefinition/Padcev-30mg-Powder](MedicinalProductDefinition-Padcev-30mg-Powder.md) and [MedicinalProductDefinition/Xospata-Filmcoatedtablet](MedicinalProductDefinition-Xospata-Filmcoatedtablet.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-idmp|current/StructureDefinition/StructureDefinition-ch-idmp-medicinalproductdefinition.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-idmp-medicinalproductdefinition.csv), [Excel](StructureDefinition-ch-idmp-medicinalproductdefinition.xlsx), [Schematron](StructureDefinition-ch-idmp-medicinalproductdefinition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-idmp-medicinalproductdefinition",
  "url" : "http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-medicinalproductdefinition",
  "version" : "1.0.0-ballot",
  "name" : "CHIDMPMedicinalProductDefinition",
  "title" : "MedicinalProductDefinition",
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
  "description" : "Profile of the MedicinalProductDefinition resource for representing the detailed data of medicinal products.",
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
  "type" : "MedicinalProductDefinition",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/MedicinalProductDefinition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "MedicinalProductDefinition",
      "path" : "MedicinalProductDefinition",
      "short" : "MedicinalProductDefinition"
    },
    {
      "id" : "MedicinalProductDefinition.extension",
      "path" : "MedicinalProductDefinition.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "MedicinalProductDefinition.extension:authorizedDoseForm",
      "path" : "MedicinalProductDefinition.extension",
      "sliceName" : "authorizedDoseForm",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/authorizedDoseForm"]
      }]
    },
    {
      "id" : "MedicinalProductDefinition.identifier.system",
      "path" : "MedicinalProductDefinition.identifier.system",
      "min" : 1,
      "patternUri" : "http://fhir.ch/ig/ch-idmp/sid/mpid"
    },
    {
      "id" : "MedicinalProductDefinition.identifier.value",
      "path" : "MedicinalProductDefinition.identifier.value",
      "min" : 1
    },
    {
      "id" : "MedicinalProductDefinition.domain",
      "path" : "MedicinalProductDefinition.domain",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-idmp/ValueSet/ema-domain"
      }
    },
    {
      "id" : "MedicinalProductDefinition.status",
      "path" : "MedicinalProductDefinition.status",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-idmp/ValueSet/ch-SMC-marketing-status"
      }
    },
    {
      "id" : "MedicinalProductDefinition.combinedPharmaceuticalDoseForm",
      "path" : "MedicinalProductDefinition.combinedPharmaceuticalDoseForm",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-idmp/ValueSet/edqm-combined-pharmaceutical-dose-form"
      }
    },
    {
      "id" : "MedicinalProductDefinition.indication",
      "path" : "MedicinalProductDefinition.indication",
      "short" : "Description of indication(s) for this product"
    },
    {
      "id" : "MedicinalProductDefinition.additionalMonitoringIndicator",
      "path" : "MedicinalProductDefinition.additionalMonitoringIndicator",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-idmp/ValueSet/ch-SMC-additional-monitoring-indicator"
      }
    },
    {
      "id" : "MedicinalProductDefinition.pediatricUseIndicator",
      "path" : "MedicinalProductDefinition.pediatricUseIndicator",
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://fhir.ch/ig/ch-idmp/ValueSet/ch-SMC-pediatric-use-indicator"
      }
    },
    {
      "id" : "MedicinalProductDefinition.classification",
      "path" : "MedicinalProductDefinition.classification",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "coding.system"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "MedicinalProductDefinition.classification:MedicinalProductCategory",
      "path" : "MedicinalProductDefinition.classification",
      "sliceName" : "MedicinalProductCategory",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "MedicinalProductDefinition.classification:MedicinalProductCategory.coding",
      "path" : "MedicinalProductDefinition.classification.coding",
      "min" : 1
    },
    {
      "id" : "MedicinalProductDefinition.classification:MedicinalProductCategory.coding.system",
      "path" : "MedicinalProductDefinition.classification.coding.system",
      "min" : 1,
      "fixedUri" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-MedicinalProductCategory"
    },
    {
      "id" : "MedicinalProductDefinition.classification:MedicinalProductCategory.coding.code",
      "path" : "MedicinalProductDefinition.classification.coding.code",
      "min" : 1
    },
    {
      "id" : "MedicinalProductDefinition.classification:ATC",
      "path" : "MedicinalProductDefinition.classification",
      "sliceName" : "ATC",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "MedicinalProductDefinition.classification:ATC.coding",
      "path" : "MedicinalProductDefinition.classification.coding",
      "min" : 1
    },
    {
      "id" : "MedicinalProductDefinition.classification:ATC.coding.system",
      "path" : "MedicinalProductDefinition.classification.coding.system",
      "min" : 1,
      "fixedUri" : "http://www.whocc.no/atc"
    },
    {
      "id" : "MedicinalProductDefinition.classification:ATC.coding.code",
      "path" : "MedicinalProductDefinition.classification.coding.code",
      "min" : 1
    },
    {
      "id" : "MedicinalProductDefinition.classification:AuthorisationCategory",
      "path" : "MedicinalProductDefinition.classification",
      "sliceName" : "AuthorisationCategory",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "MedicinalProductDefinition.classification:AuthorisationCategory.coding",
      "path" : "MedicinalProductDefinition.classification.coding",
      "min" : 1
    },
    {
      "id" : "MedicinalProductDefinition.classification:AuthorisationCategory.coding.system",
      "path" : "MedicinalProductDefinition.classification.coding.system",
      "min" : 1,
      "fixedUri" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-authorisation-category"
    },
    {
      "id" : "MedicinalProductDefinition.classification:AuthorisationCategory.coding.code",
      "path" : "MedicinalProductDefinition.classification.coding.code",
      "min" : 1
    },
    {
      "id" : "MedicinalProductDefinition.marketingStatus.country",
      "path" : "MedicinalProductDefinition.marketingStatus.country",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }]
      }
    },
    {
      "id" : "MedicinalProductDefinition.marketingStatus.status.coding",
      "path" : "MedicinalProductDefinition.marketingStatus.status.coding",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "system"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "MedicinalProductDefinition.marketingStatus.status.coding:SMC",
      "path" : "MedicinalProductDefinition.marketingStatus.status.coding",
      "sliceName" : "SMC",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "MedicinalProductDefinition.marketingStatus.status.coding:SMC.system",
      "path" : "MedicinalProductDefinition.marketingStatus.status.coding.system",
      "min" : 1,
      "patternUri" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-marketing-status"
    },
    {
      "id" : "MedicinalProductDefinition.marketingStatus.status.coding:Refdata",
      "path" : "MedicinalProductDefinition.marketingStatus.status.coding",
      "sliceName" : "Refdata",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "MedicinalProductDefinition.marketingStatus.status.coding:Refdata.system",
      "path" : "MedicinalProductDefinition.marketingStatus.status.coding.system",
      "min" : 1,
      "patternUri" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-Refdata-marketing-status"
    },
    {
      "id" : "MedicinalProductDefinition.attachedDocument",
      "path" : "MedicinalProductDefinition.attachedDocument",
      "short" : "Professional information and/or patient information",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-documentreference"]
      }]
    },
    {
      "id" : "MedicinalProductDefinition.name",
      "path" : "MedicinalProductDefinition.name",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "usage.language"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "MedicinalProductDefinition.name:en",
      "path" : "MedicinalProductDefinition.name",
      "sliceName" : "en",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "MedicinalProductDefinition.name:en.productName",
      "path" : "MedicinalProductDefinition.name.productName",
      "short" : "The full product name in English"
    },
    {
      "id" : "MedicinalProductDefinition.name:en.usage.country",
      "path" : "MedicinalProductDefinition.name.usage.country",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }]
      }
    },
    {
      "id" : "MedicinalProductDefinition.name:en.usage.language",
      "path" : "MedicinalProductDefinition.name.usage.language",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "urn:ietf:bcp:47",
          "code" : "en"
        }]
      }
    },
    {
      "id" : "MedicinalProductDefinition.name:de-CH",
      "path" : "MedicinalProductDefinition.name",
      "sliceName" : "de-CH",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "MedicinalProductDefinition.name:de-CH.productName",
      "path" : "MedicinalProductDefinition.name.productName",
      "short" : "The full product name in German (Switzerland)"
    },
    {
      "id" : "MedicinalProductDefinition.name:de-CH.usage.country",
      "path" : "MedicinalProductDefinition.name.usage.country",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }]
      }
    },
    {
      "id" : "MedicinalProductDefinition.name:de-CH.usage.language",
      "path" : "MedicinalProductDefinition.name.usage.language",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "urn:ietf:bcp:47",
          "code" : "de-CH"
        }]
      }
    },
    {
      "id" : "MedicinalProductDefinition.name:fr-CH",
      "path" : "MedicinalProductDefinition.name",
      "sliceName" : "fr-CH",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "MedicinalProductDefinition.name:fr-CH.productName",
      "path" : "MedicinalProductDefinition.name.productName",
      "short" : "The full product name in French (Switzerland)"
    },
    {
      "id" : "MedicinalProductDefinition.name:fr-CH.usage.country",
      "path" : "MedicinalProductDefinition.name.usage.country",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }]
      }
    },
    {
      "id" : "MedicinalProductDefinition.name:fr-CH.usage.language",
      "path" : "MedicinalProductDefinition.name.usage.language",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "urn:ietf:bcp:47",
          "code" : "fr-CH"
        }]
      }
    },
    {
      "id" : "MedicinalProductDefinition.name:it-CH",
      "path" : "MedicinalProductDefinition.name",
      "sliceName" : "it-CH",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "MedicinalProductDefinition.name:it-CH.productName",
      "path" : "MedicinalProductDefinition.name.productName",
      "short" : "The full product name in Italian (Switzerland)"
    },
    {
      "id" : "MedicinalProductDefinition.name:it-CH.usage.country",
      "path" : "MedicinalProductDefinition.name.usage.country",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }]
      }
    },
    {
      "id" : "MedicinalProductDefinition.name:it-CH.usage.language",
      "path" : "MedicinalProductDefinition.name.usage.language",
      "patternCodeableConcept" : {
        "coding" : [{
          "system" : "urn:ietf:bcp:47",
          "code" : "it-CH"
        }]
      }
    }]
  }
}

```
