# CH EPREG RelatedPerson: Parent - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPREG RelatedPerson: Parent**

## Resource Profile: CH EPREG RelatedPerson: Parent 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-relatedperson-parent | *Version*:1.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChEpregRelatedPersonParent |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the RelatedPerson resource to represent the relationship between the parent (besides the biological mother) and the child. 

**Usages:**

* Refer to this Profile: [CH EPREG Composition](StructureDefinition-ch-epreg-composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epreg|current/StructureDefinition/ch-epreg-relatedperson-parent)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-epreg-relatedperson-parent.csv), [Excel](StructureDefinition-ch-epreg-relatedperson-parent.xlsx), [Schematron](StructureDefinition-ch-epreg-relatedperson-parent.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-epreg-relatedperson-parent",
  "url" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-relatedperson-parent",
  "version" : "1.0.0",
  "name" : "ChEpregRelatedPersonParent",
  "title" : "CH EPREG RelatedPerson: Parent",
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
  "description" : "This profile constrains the RelatedPerson resource to represent the relationship between the parent (besides the biological mother) and the child.",
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
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "RelatedPerson",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "RelatedPerson",
        "path" : "RelatedPerson",
        "short" : "CH EPREG RelatedPerson: Parent",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Elternteil | Parent"
          }
        ]
      },
      {
        "id" : "RelatedPerson.extension:citizenship",
        "path" : "RelatedPerson.extension",
        "sliceName" : "citizenship",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Nationalität | Nationalité"
          }
        ]
      },
      {
        "id" : "RelatedPerson.patient",
        "path" : "RelatedPerson.patient",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-patient-child"
            ]
          }
        ]
      },
      {
        "id" : "RelatedPerson.relationship",
        "path" : "RelatedPerson.relationship",
        "min" : 1,
        "binding" : {
          "strength" : "extensible",
          "description" : "See also [Mapping Parent](mapping-concept-valuesets.html#parent).",
          "valueSet" : "http://fhir.ch/ig/ch-epreg/ValueSet/parent"
        },
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Art des Elternteils | Type de parent"
          }
        ]
      },
      {
        "id" : "RelatedPerson.name",
        "path" : "RelatedPerson.name",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Name | Nom"
          }
        ]
      },
      {
        "id" : "RelatedPerson.name.family",
        "path" : "RelatedPerson.name.family",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Nachname | Nom"
          }
        ]
      },
      {
        "id" : "RelatedPerson.name.given",
        "path" : "RelatedPerson.name.given",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Vorname | Prénom"
          }
        ]
      },
      {
        "id" : "RelatedPerson.birthDate",
        "path" : "RelatedPerson.birthDate",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Geburtsdatum | Date de naissance"
          }
        ]
      },
      {
        "id" : "RelatedPerson.communication",
        "path" : "RelatedPerson.communication",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Kommunikationssprache | Langue de communication"
          }
        ]
      }
    ]
  }
}

```
