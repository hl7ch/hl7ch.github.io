# CH EPREG Practitioner: Treating Healthcare Provider - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPREG Practitioner: Treating Healthcare Provider**

## Resource Profile: CH EPREG Practitioner: Treating Healthcare Provider 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-practitioner-thcp | *Version*:1.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChEpregPractitionerTHCP |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the PractitionerRole resource to represent the treating healthcare provider. 

**Usages:**

* Refer to this Profile: [CH EPREG PractitionerRole: Treating Healthcare Provider](StructureDefinition-ch-epreg-practitionerrole-thcp.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epreg|current/StructureDefinition/ch-epreg-practitioner-thcp)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-epreg-practitioner-thcp.csv), [Excel](StructureDefinition-ch-epreg-practitioner-thcp.xlsx), [Schematron](StructureDefinition-ch-epreg-practitioner-thcp.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-epreg-practitioner-thcp",
  "url" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-practitioner-thcp",
  "version" : "1.0.0",
  "name" : "ChEpregPractitionerTHCP",
  "title" : "CH EPREG Practitioner: Treating Healthcare Provider",
  "status" : "active",
  "date" : "2025-12-16T12:16:11+00:00",
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
      "identity" : "eCH",
      "uri" : "http://www.ech.ch/",
      "name" : "eCH-Standards"
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
  "type" : "Practitioner",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Practitioner",
        "path" : "Practitioner",
        "short" : "CH EPREG Practitioner: Treating Healthcare Provider",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Behandelnder Leistungserbringender | Fournisseur de prestations"
          }
        ]
      },
      {
        "id" : "Practitioner.identifier:GLN",
        "path" : "Practitioner.identifier",
        "sliceName" : "GLN",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "GLN Nummer | Numéro GLN"
          }
        ]
      },
      {
        "id" : "Practitioner.name",
        "path" : "Practitioner.name",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Name | Nom"
          }
        ]
      },
      {
        "id" : "Practitioner.name.family",
        "path" : "Practitioner.name.family",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Nachname | Nom de famille"
          }
        ]
      },
      {
        "id" : "Practitioner.name.given",
        "path" : "Practitioner.name.given",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Vorname | Prénoms"
          }
        ]
      },
      {
        "id" : "Practitioner.name.prefix",
        "path" : "Practitioner.name.prefix",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Titel | Titre"
          }
        ]
      }
    ]
  }
}

```
