# IDMP RegulatedAuthorization - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IDMP RegulatedAuthorization**

## Resource Profile: IDMP RegulatedAuthorization 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-regulatedauthorization | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:CHIDMPRegulatedAuthorization |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile of the RegulatedAuthorization resource for representing the market authorization of a (packaged) medicinal product. 

**Usages:**

* Use this Profile: [IDMP Bundle](StructureDefinition-ch-idmp-bundle.md)
* Examples for this Profile: [RegulatedAuthorization/FOPH-21208](RegulatedAuthorization-FOPH-21208.md), [RegulatedAuthorization/MA-5204201](RegulatedAuthorization-MA-5204201.md), [RegulatedAuthorization/MA-52042011](RegulatedAuthorization-MA-52042011.md), [RegulatedAuthorization/MA-5470402](RegulatedAuthorization-MA-5470402.md)...Show 12 more,[RegulatedAuthorization/MA-54704089](RegulatedAuthorization-MA-54704089.md),[RegulatedAuthorization/MA-66231001](RegulatedAuthorization-MA-66231001.md),[RegulatedAuthorization/MA-6623101](RegulatedAuthorization-MA-6623101.md),[RegulatedAuthorization/MA-67431001](RegulatedAuthorization-MA-67431001.md),[RegulatedAuthorization/MA-6743101](RegulatedAuthorization-MA-6743101.md),[RegulatedAuthorization/MA-67719001](RegulatedAuthorization-MA-67719001.md),[RegulatedAuthorization/MA-6771901](RegulatedAuthorization-MA-6771901.md),[RegulatedAuthorization/MA-67831001](RegulatedAuthorization-MA-67831001.md),[RegulatedAuthorization/MA-67831002](RegulatedAuthorization-MA-67831002.md),[RegulatedAuthorization/MA-6783101](RegulatedAuthorization-MA-6783101.md),[RegulatedAuthorization/MA-68793001](RegulatedAuthorization-MA-68793001.md)and[RegulatedAuthorization/MA-6879301](RegulatedAuthorization-MA-6879301.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epl|current/StructureDefinition/ch-idmp-regulatedauthorization)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-idmp-regulatedauthorization.csv), [Excel](StructureDefinition-ch-idmp-regulatedauthorization.xlsx), [Schematron](StructureDefinition-ch-idmp-regulatedauthorization.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-idmp-regulatedauthorization",
  "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-regulatedauthorization",
  "version" : "1.0.0",
  "name" : "CHIDMPRegulatedAuthorization",
  "title" : "IDMP RegulatedAuthorization",
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
  "description" : "Profile of the RegulatedAuthorization resource for representing the market authorization of a (packaged) medicinal product.",
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
  "type" : "RegulatedAuthorization",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/RegulatedAuthorization",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "RegulatedAuthorization",
        "path" : "RegulatedAuthorization",
        "short" : "IDMP RegulatedAuthorization"
      },
      {
        "id" : "RegulatedAuthorization.subject",
        "path" : "RegulatedAuthorization.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-medicinalproductdefinition",
              "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-packagedproductdefinition",
              "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-manufactureditemdefinition",
              "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-ingredient"
            ]
          }
        ]
      },
      {
        "id" : "RegulatedAuthorization.type",
        "path" : "RegulatedAuthorization.type",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-epl/ValueSet/ch-authorisation-type"
        }
      },
      {
        "id" : "RegulatedAuthorization.type.coding",
        "path" : "RegulatedAuthorization.type.coding",
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
        "id" : "RegulatedAuthorization.type.coding:CH",
        "path" : "RegulatedAuthorization.type.coding",
        "sliceName" : "CH",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "RegulatedAuthorization.type.coding:CH.system",
        "path" : "RegulatedAuthorization.type.coding.system",
        "min" : 1,
        "patternUri" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-authorisation-type"
      },
      {
        "id" : "RegulatedAuthorization.type.coding:CH.code",
        "path" : "RegulatedAuthorization.type.coding.code",
        "min" : 1
      },
      {
        "id" : "RegulatedAuthorization.region",
        "path" : "RegulatedAuthorization.region",
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
        "id" : "RegulatedAuthorization.status",
        "path" : "RegulatedAuthorization.status",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-epl/ValueSet/ch-SMC-authorisation-status"
        }
      },
      {
        "id" : "RegulatedAuthorization.status.coding",
        "path" : "RegulatedAuthorization.status.coding",
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
        "id" : "RegulatedAuthorization.status.coding:SMC",
        "path" : "RegulatedAuthorization.status.coding",
        "sliceName" : "SMC",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "RegulatedAuthorization.status.coding:SMC.system",
        "path" : "RegulatedAuthorization.status.coding.system",
        "min" : 1,
        "patternUri" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-authorisation-status"
      },
      {
        "id" : "RegulatedAuthorization.status.coding:SMC.code",
        "path" : "RegulatedAuthorization.status.coding.code",
        "min" : 1
      },
      {
        "id" : "RegulatedAuthorization.status.coding:FOPH",
        "path" : "RegulatedAuthorization.status.coding",
        "sliceName" : "FOPH",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "RegulatedAuthorization.status.coding:FOPH.system",
        "path" : "RegulatedAuthorization.status.coding.system",
        "min" : 1,
        "patternUri" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-reimbursement-status"
      },
      {
        "id" : "RegulatedAuthorization.status.coding:FOPH.code",
        "path" : "RegulatedAuthorization.status.coding.code",
        "min" : 1
      },
      {
        "id" : "RegulatedAuthorization.holder",
        "path" : "RegulatedAuthorization.holder",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Organization"],
            "aggregation" : ["contained"]
          }
        ]
      },
      {
        "id" : "RegulatedAuthorization.regulator",
        "path" : "RegulatedAuthorization.regulator",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Organization"],
            "aggregation" : ["contained"]
          }
        ]
      }
    ]
  }
}

```
