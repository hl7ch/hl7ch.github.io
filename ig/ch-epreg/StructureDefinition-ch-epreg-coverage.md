# CH EPREG Coverage - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPREG Coverage**

## Resource Profile: CH EPREG Coverage 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-coverage | *Version*:1.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChEpregCoverage |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Coverage resource to represent the insurance data. 

**Usages:**

* Refer to this Profile: [CH EPREG Composition](StructureDefinition-ch-epreg-composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epreg|current/StructureDefinition/ch-epreg-coverage)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-epreg-coverage.csv), [Excel](StructureDefinition-ch-epreg-coverage.xlsx), [Schematron](StructureDefinition-ch-epreg-coverage.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-epreg-coverage",
  "url" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-coverage",
  "version" : "1.0.0",
  "name" : "ChEpregCoverage",
  "title" : "CH EPREG Coverage",
  "status" : "active",
  "date" : "2025-12-16T12:22:20+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    }
  ],
  "description" : "This profile constrains the Coverage resource to represent the insurance data.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CHE"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "concept-pregnancy-passport",
      "uri" : "https://www.e-health-suisse.ch/upload/documents/eSchwangerschaftspass_Konzept_de.pdf",
      "name" : "Concept Pregnancy Passport",
      "comment" : "This mapping illustrates the relationship between the CH EPREG profile and the concept of the pregnancy passport."
    },
    {
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "cdanetv4",
      "uri" : "http://www.cda-adc.ca/en/services/cdanet/",
      "name" : "Canadian Dental Association eclaims standard"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "cpha3pharm",
      "uri" : "http://www.pharmacists.ca/",
      "name" : "Canadian Pharmacy Associaiton eclaims standard"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Coverage",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-coverage",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Coverage",
        "path" : "Coverage",
        "short" : "CH EPREG Coverage",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Versicherung | Assurance"
          }
        ]
      },
      {
        "id" : "Coverage.identifier",
        "path" : "Coverage.identifier",
        "min" : 1
      },
      {
        "id" : "Coverage.identifier:insuranceNumber",
        "path" : "Coverage.identifier",
        "sliceName" : "insuranceNumber",
        "short" : "Insurance number (note that this is different from the insurance card number)",
        "min" : 1,
        "max" : "*",
        "patternIdentifier" : {
          "type" : {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
                "code" : "MB"
              }
            ]
          }
        },
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Versichertennummer | Numéro de la personne assurée"
          }
        ]
      },
      {
        "id" : "Coverage.identifier:insuranceNumber.system",
        "path" : "Coverage.identifier.system",
        "min" : 1
      },
      {
        "id" : "Coverage.identifier:insuranceNumber.value",
        "path" : "Coverage.identifier.value",
        "min" : 1
      },
      {
        "id" : "Coverage.type",
        "path" : "Coverage.type",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "1: Grundversicherung | Assurance de base"
          },
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "ZV: Zusatzversicherung | Assurance complémentaire"
          }
        ]
      },
      {
        "id" : "Coverage.beneficiary",
        "path" : "Coverage.beneficiary",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-patient-mother"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Schwangere Person | Personne enceinte"
          }
        ]
      },
      {
        "id" : "Coverage.beneficiary.reference",
        "path" : "Coverage.beneficiary.reference",
        "min" : 1
      },
      {
        "id" : "Coverage.payor",
        "path" : "Coverage.payor",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ],
            "aggregation" : ["contained"]
          }
        ],
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Organization.name -> Name Versicherung | Nom de l’assureur"
          }
        ]
      },
      {
        "id" : "Coverage.payor.reference",
        "path" : "Coverage.payor.reference",
        "min" : 1
      }
    ]
  }
}

```
