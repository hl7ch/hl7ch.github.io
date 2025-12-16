# CH EPREG RelatedPerson: Mother - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPREG RelatedPerson: Mother**

## Resource Profile: CH EPREG RelatedPerson: Mother 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-relatedperson-mother | *Version*:1.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChEpregRelatedPersonMother |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the RelatedPerson resource to represent the relationship between the mother and the child. 

**Usages:**

* Refer to this Profile: [CH EPREG Patient: Mother](StructureDefinition-ch-epreg-patient-mother.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epreg|current/StructureDefinition/ch-epreg-relatedperson-mother)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-epreg-relatedperson-mother.csv), [Excel](StructureDefinition-ch-epreg-relatedperson-mother.xlsx), [Schematron](StructureDefinition-ch-epreg-relatedperson-mother.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-epreg-relatedperson-mother",
  "url" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-relatedperson-mother",
  "version" : "1.0.0",
  "name" : "ChEpregRelatedPersonMother",
  "title" : "CH EPREG RelatedPerson: Mother",
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
  "description" : "This profile constrains the RelatedPerson resource to represent the relationship between the mother and the child.",
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
        "short" : "CH EPREG RelatedPerson: Mother"
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
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "65656005"
            }
          ]
        }
      }
    ]
  }
}

```
