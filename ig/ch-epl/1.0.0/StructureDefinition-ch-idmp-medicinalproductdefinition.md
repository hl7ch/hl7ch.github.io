# IDMP MedicinalProductDefinition - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IDMP MedicinalProductDefinition**

## Resource Profile: IDMP MedicinalProductDefinition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-medicinalproductdefinition | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:CHIDMPMedicinalProductDefinition |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile of the MedicinalProductDefinition resource for representing the detailed data of medicinal products. 

**Usages:**

* Use this Profile: [IDMP Bundle](StructureDefinition-ch-idmp-bundle.md)
* Refer to this Profile: [CH IDMP AdministrableProductDefinition](StructureDefinition-ch-idmp-administrableproductdefinition.md), [CH IDMP ClinicalUseDefinition Indication](StructureDefinition-ch-idmp-clinicalusedefinition-indication.md), [IDMP Ingredient](StructureDefinition-ch-idmp-ingredient.md), [IDMP PackagedProductDefinition](StructureDefinition-ch-idmp-packagedproductdefinition.md) and [IDMP RegulatedAuthorization](StructureDefinition-ch-idmp-regulatedauthorization.md)
* Examples for this Profile: [MedicinalProductDefinition/Abrilada-40mg-Pre-Filled-Pen](MedicinalProductDefinition-Abrilada-40mg-Pre-Filled-Pen.md), [MedicinalProductDefinition/Cuprior-150mg-Filmcoatedtablet](MedicinalProductDefinition-Cuprior-150mg-Filmcoatedtablet.md), [MedicinalProductDefinition/Entocort-Solvent-and-Tablet](MedicinalProductDefinition-Entocort-Solvent-and-Tablet.md), [MedicinalProductDefinition/Estalis-Transdermalpatch](MedicinalProductDefinition-Estalis-Transdermalpatch.md)...Show 3 more,[MedicinalProductDefinition/Keytruda-100mg-Vial](MedicinalProductDefinition-Keytruda-100mg-Vial.md),[MedicinalProductDefinition/Paxlovid-Filmcoatedtablet](MedicinalProductDefinition-Paxlovid-Filmcoatedtablet.md)and[MedicinalProductDefinition/Triogen-250mg-Capsule](MedicinalProductDefinition-Triogen-250mg-Capsule.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epl|current/StructureDefinition/ch-idmp-medicinalproductdefinition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-idmp-medicinalproductdefinition.csv), [Excel](StructureDefinition-ch-idmp-medicinalproductdefinition.xlsx), [Schematron](StructureDefinition-ch-idmp-medicinalproductdefinition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-idmp-medicinalproductdefinition",
  "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-medicinalproductdefinition",
  "version" : "1.0.0",
  "name" : "CHIDMPMedicinalProductDefinition",
  "title" : "IDMP MedicinalProductDefinition",
  "status" : "active",
  "date" : "2025-12-11T12:29:57+00:00",
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
  "description" : "Profile of the MedicinalProductDefinition resource for representing the detailed data of medicinal products.",
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
  "type" : "MedicinalProductDefinition",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/MedicinalProductDefinition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "MedicinalProductDefinition",
        "path" : "MedicinalProductDefinition",
        "short" : "CH IDMP MedicinalProductDefinition"
      },
      {
        "id" : "MedicinalProductDefinition.extension",
        "path" : "MedicinalProductDefinition.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
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
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-epl/StructureDefinition/authorizedDoseForm"
            ]
          }
        ]
      },
      {
        "id" : "MedicinalProductDefinition.extension:fullLimitationText",
        "path" : "MedicinalProductDefinition.extension",
        "sliceName" : "fullLimitationText",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-epl/StructureDefinition/fullLimitationText"
            ]
          }
        ]
      },
      {
        "id" : "MedicinalProductDefinition.identifier.system",
        "path" : "MedicinalProductDefinition.identifier.system",
        "min" : 1,
        "patternUri" : "http://fhir.ch/ig/ch-epl/sid/mpid"
      },
      {
        "id" : "MedicinalProductDefinition.identifier.value",
        "path" : "MedicinalProductDefinition.identifier.value",
        "min" : 1
      },
      {
        "id" : "MedicinalProductDefinition.combinedPharmaceuticalDoseForm",
        "path" : "MedicinalProductDefinition.combinedPharmaceuticalDoseForm",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-epl/ValueSet/edqm-combined-pharmaceutical-dose-form"
        }
      },
      {
        "id" : "MedicinalProductDefinition.combinedPharmaceuticalDoseForm.coding",
        "path" : "MedicinalProductDefinition.combinedPharmaceuticalDoseForm.coding",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "MedicinalProductDefinition.combinedPharmaceuticalDoseForm.coding:EDQM",
        "path" : "MedicinalProductDefinition.combinedPharmaceuticalDoseForm.coding",
        "sliceName" : "EDQM",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "MedicinalProductDefinition.combinedPharmaceuticalDoseForm.coding:EDQM.system",
        "path" : "MedicinalProductDefinition.combinedPharmaceuticalDoseForm.coding.system",
        "min" : 1,
        "patternUri" : "http://standardterms.edqm.eu"
      },
      {
        "id" : "MedicinalProductDefinition.combinedPharmaceuticalDoseForm.coding:EDQM.code",
        "path" : "MedicinalProductDefinition.combinedPharmaceuticalDoseForm.coding.code",
        "min" : 1
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
          "valueSet" : "http://fhir.ch/ig/ch-epl/ValueSet/ch-SMC-additional-monitoring-indicator"
        }
      },
      {
        "id" : "MedicinalProductDefinition.additionalMonitoringIndicator.coding",
        "path" : "MedicinalProductDefinition.additionalMonitoringIndicator.coding",
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
        "id" : "MedicinalProductDefinition.additionalMonitoringIndicator.coding:SMC",
        "path" : "MedicinalProductDefinition.additionalMonitoringIndicator.coding",
        "sliceName" : "SMC",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "MedicinalProductDefinition.additionalMonitoringIndicator.coding:SMC.system",
        "path" : "MedicinalProductDefinition.additionalMonitoringIndicator.coding.system",
        "min" : 1,
        "patternUri" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-additional-monitoring-indicator"
      },
      {
        "id" : "MedicinalProductDefinition.additionalMonitoringIndicator.coding:SMC.code",
        "path" : "MedicinalProductDefinition.additionalMonitoringIndicator.coding.code",
        "min" : 1
      },
      {
        "id" : "MedicinalProductDefinition.pediatricUseIndicator",
        "path" : "MedicinalProductDefinition.pediatricUseIndicator",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-epl/ValueSet/ch-SMC-pediatric-use-indicator"
        }
      },
      {
        "id" : "MedicinalProductDefinition.pediatricUseIndicator.coding",
        "path" : "MedicinalProductDefinition.pediatricUseIndicator.coding",
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
        "id" : "MedicinalProductDefinition.pediatricUseIndicator.coding:SMC",
        "path" : "MedicinalProductDefinition.pediatricUseIndicator.coding",
        "sliceName" : "SMC",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "MedicinalProductDefinition.pediatricUseIndicator.coding:SMC.system",
        "path" : "MedicinalProductDefinition.pediatricUseIndicator.coding.system",
        "min" : 1,
        "patternUri" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-pediatric-use-indicator"
      },
      {
        "id" : "MedicinalProductDefinition.pediatricUseIndicator.coding:SMC.code",
        "path" : "MedicinalProductDefinition.pediatricUseIndicator.coding.code",
        "min" : 1
      },
      {
        "id" : "MedicinalProductDefinition.classification",
        "path" : "MedicinalProductDefinition.classification",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "coding.system"
            }
          ],
          "rules" : "open"
        }
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
        "id" : "MedicinalProductDefinition.classification:TherapeuticProductcode",
        "path" : "MedicinalProductDefinition.classification",
        "sliceName" : "TherapeuticProductcode",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "MedicinalProductDefinition.classification:TherapeuticProductcode.coding",
        "path" : "MedicinalProductDefinition.classification.coding",
        "min" : 1
      },
      {
        "id" : "MedicinalProductDefinition.classification:TherapeuticProductcode.coding.system",
        "path" : "MedicinalProductDefinition.classification.coding.system",
        "min" : 1,
        "fixedUri" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-therapeuticproductcode"
      },
      {
        "id" : "MedicinalProductDefinition.classification:TherapeuticProductcode.coding.code",
        "path" : "MedicinalProductDefinition.classification.coding.code",
        "min" : 1
      },
      {
        "id" : "MedicinalProductDefinition.classification:ProductType",
        "path" : "MedicinalProductDefinition.classification",
        "sliceName" : "ProductType",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "MedicinalProductDefinition.classification:ProductType.coding",
        "path" : "MedicinalProductDefinition.classification.coding",
        "min" : 1
      },
      {
        "id" : "MedicinalProductDefinition.classification:ProductType.coding.system",
        "path" : "MedicinalProductDefinition.classification.coding.system",
        "min" : 1,
        "fixedUri" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-product-type"
      },
      {
        "id" : "MedicinalProductDefinition.classification:ProductType.coding.code",
        "path" : "MedicinalProductDefinition.classification.coding.code",
        "min" : 1
      },
      {
        "id" : "MedicinalProductDefinition.classification:ITC",
        "path" : "MedicinalProductDefinition.classification",
        "sliceName" : "ITC",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "MedicinalProductDefinition.classification:ITC.coding",
        "path" : "MedicinalProductDefinition.classification.coding",
        "min" : 1
      },
      {
        "id" : "MedicinalProductDefinition.classification:ITC.coding.system",
        "path" : "MedicinalProductDefinition.classification.coding.system",
        "min" : 1,
        "fixedUri" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-index-therapeuticus"
      },
      {
        "id" : "MedicinalProductDefinition.classification:ITC.coding.code",
        "path" : "MedicinalProductDefinition.classification.coding.code",
        "min" : 1
      },
      {
        "id" : "MedicinalProductDefinition.marketingStatus.country",
        "path" : "MedicinalProductDefinition.marketingStatus.country",
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
        "id" : "MedicinalProductDefinition.marketingStatus.status.coding",
        "path" : "MedicinalProductDefinition.marketingStatus.status.coding",
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
        "patternUri" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-marketing-status"
      },
      {
        "id" : "MedicinalProductDefinition.attachedDocument",
        "path" : "MedicinalProductDefinition.attachedDocument",
        "short" : "Professional information and/or patient information",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-documentreference"
            ]
          }
        ]
      },
      {
        "id" : "MedicinalProductDefinition.name",
        "path" : "MedicinalProductDefinition.name",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "usage.language"
            }
          ],
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
        "id" : "MedicinalProductDefinition.name:en.part.type",
        "path" : "MedicinalProductDefinition.name.part.type",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://hl7.org/fhir/ValueSet/medicinal-product-name-part-type"
        }
      },
      {
        "id" : "MedicinalProductDefinition.name:en.usage.country",
        "path" : "MedicinalProductDefinition.name.usage.country",
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
        "id" : "MedicinalProductDefinition.name:en.usage.language",
        "path" : "MedicinalProductDefinition.name.usage.language",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "urn:ietf:bcp:47",
              "code" : "en"
            }
          ]
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
        "id" : "MedicinalProductDefinition.name:de-CH.part.type",
        "path" : "MedicinalProductDefinition.name.part.type",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://hl7.org/fhir/ValueSet/medicinal-product-name-part-type"
        }
      },
      {
        "id" : "MedicinalProductDefinition.name:de-CH.usage.country",
        "path" : "MedicinalProductDefinition.name.usage.country",
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
        "id" : "MedicinalProductDefinition.name:de-CH.usage.language",
        "path" : "MedicinalProductDefinition.name.usage.language",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "urn:ietf:bcp:47",
              "code" : "de-CH"
            }
          ]
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
        "id" : "MedicinalProductDefinition.name:fr-CH.part.type",
        "path" : "MedicinalProductDefinition.name.part.type",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://hl7.org/fhir/ValueSet/medicinal-product-name-part-type"
        }
      },
      {
        "id" : "MedicinalProductDefinition.name:fr-CH.usage.country",
        "path" : "MedicinalProductDefinition.name.usage.country",
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
        "id" : "MedicinalProductDefinition.name:fr-CH.usage.language",
        "path" : "MedicinalProductDefinition.name.usage.language",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "urn:ietf:bcp:47",
              "code" : "fr-CH"
            }
          ]
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
        "id" : "MedicinalProductDefinition.name:it-CH.part.type",
        "path" : "MedicinalProductDefinition.name.part.type",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://hl7.org/fhir/ValueSet/medicinal-product-name-part-type"
        }
      },
      {
        "id" : "MedicinalProductDefinition.name:it-CH.usage.country",
        "path" : "MedicinalProductDefinition.name.usage.country",
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
        "id" : "MedicinalProductDefinition.name:it-CH.usage.language",
        "path" : "MedicinalProductDefinition.name.usage.language",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "urn:ietf:bcp:47",
              "code" : "it-CH"
            }
          ]
        }
      }
    ]
  }
}

```
