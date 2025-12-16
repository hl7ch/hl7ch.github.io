# CH EPREG PractitionerRole: Treating Healthcare Provider - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPREG PractitionerRole: Treating Healthcare Provider**

## Resource Profile: CH EPREG PractitionerRole: Treating Healthcare Provider 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-practitionerrole-thcp | *Version*:1.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChEpregPractitionerRoleTHCP |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the PractitionerRole resource to represent the treating healthcare provider. 

**Usages:**

* Refer to this Profile: [CH EPREG Appointment: Next Examination](StructureDefinition-ch-epreg-appointment-next-examination.md), [CH EPREG Composition](StructureDefinition-ch-epreg-composition.md), [CH EPREG Encounter: Child](StructureDefinition-ch-epreg-encounter-child.md), [CH EPREG Encounter: Mother](StructureDefinition-ch-epreg-encounter-mother.md) and [CH EPREG Observation (Base): Pregnancy Progress](StructureDefinition-ch-epreg-observation-preg-progress.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epreg|current/StructureDefinition/ch-epreg-practitionerrole-thcp)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-epreg-practitionerrole-thcp.csv), [Excel](StructureDefinition-ch-epreg-practitionerrole-thcp.xlsx), [Schematron](StructureDefinition-ch-epreg-practitionerrole-thcp.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-epreg-practitionerrole-thcp",
  "url" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-practitionerrole-thcp",
  "version" : "1.0.0",
  "name" : "ChEpregPractitionerRoleTHCP",
  "title" : "CH EPREG PractitionerRole: Treating Healthcare Provider",
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
  "description" : "This profile constrains the PractitionerRole resource to represent the treating healthcare provider.",
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
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "PractitionerRole",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "PractitionerRole",
        "path" : "PractitionerRole",
        "short" : "CH EPREG PractitionerRole: Treating Healthcare Provider",
        "constraint" : [
          {
            "key" : "epreg-pract-org",
            "severity" : "error",
            "human" : "At least one of practitioner or organization must be provided.",
            "expression" : "practitioner.exists() or organization.exists()",
            "source" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-practitionerrole-thcp"
          },
          {
            "key" : "epreg-code-specialty",
            "severity" : "error",
            "human" : "At least one of code or specialty must be provided.",
            "expression" : "code.exists() or specialty.exists()",
            "source" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-practitionerrole-thcp"
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Behandelnder Leistungserbringender | Fournisseur de prestations"
          }
        ]
      },
      {
        "id" : "PractitionerRole.practitioner",
        "path" : "PractitionerRole.practitioner",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-practitioner-thcp"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "PractitionerRole.practitioner.reference",
        "path" : "PractitionerRole.practitioner.reference",
        "min" : 1
      },
      {
        "id" : "PractitionerRole.organization",
        "path" : "PractitionerRole.organization",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-organization-thcp"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "PractitionerRole.organization.reference",
        "path" : "PractitionerRole.organization.reference",
        "min" : 1
      },
      {
        "id" : "PractitionerRole.code",
        "path" : "PractitionerRole.code",
        "mustSupport" : true,
        "binding" : {
          "strength" : "preferred",
          "description" : "See also [Mapping Healthcare Provider](mapping-concept-valuesets.html#healthcare-provider).",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/HCProfessional.hcProfession"
        },
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Art des Leistungserbringenden | Type de fournisseur de prestations (see also 'Mapping Healthcare Provider')"
          }
        ]
      },
      {
        "id" : "PractitionerRole.specialty",
        "path" : "PractitionerRole.specialty",
        "mustSupport" : true,
        "binding" : {
          "strength" : "preferred",
          "description" : "See also [Mapping Healthcare Provider](mapping-concept-valuesets.html#healthcare-provider).",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/HCProfessional.hcSpecialisation"
        },
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Art des Leistungserbringenden | Type de fournisseur de prestations (see also 'Mapping Healthcare Provider')"
          }
        ]
      }
    ]
  }
}

```
