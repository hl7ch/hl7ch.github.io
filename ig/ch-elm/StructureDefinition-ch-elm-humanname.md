# Human Name - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Human Name**

## Data Type Profile: Human Name 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-humanname | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:CHElmHumanName |
| **Copyright/Legal**: CC0-1.0 | |

 
Name with extensions for data-absent-reason 

**Usages:**

* Use this DataType Profile: [CH ELM Patient](StructureDefinition-ch-elm-patient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-humanname)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-humanname.csv), [Excel](StructureDefinition-ch-elm-humanname.xlsx), [Schematron](StructureDefinition-ch-elm-humanname.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-humanname",
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-humanname",
  "version" : "1.13.0",
  "name" : "CHElmHumanName",
  "title" : "Human Name",
  "status" : "active",
  "date" : "2025-11-25T09:58:53+00:00",
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
  "description" : "Name with extensions for data-absent-reason",
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
  "fhirVersion" : "4.0.1",
  "mapping" : [
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
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "HumanName",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-humanname",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "HumanName.extension:vctcode",
        "path" : "HumanName.extension",
        "sliceName" : "vctcode",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-vct-code"
            ]
          }
        ]
      },
      {
        "id" : "HumanName.extension:hivcode",
        "path" : "HumanName.extension",
        "sliceName" : "hivcode",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-hiv-code"
            ]
          }
        ]
      },
      {
        "id" : "HumanName.family.extension:dataabsentreason",
        "path" : "HumanName.family.extension",
        "sliceName" : "dataabsentreason",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : ["http://hl7.org/fhir/StructureDefinition/data-absent-reason"]
          }
        ]
      },
      {
        "id" : "HumanName.given.extension:dataabsentreason",
        "path" : "HumanName.given.extension",
        "sliceName" : "dataabsentreason",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : ["http://hl7.org/fhir/StructureDefinition/data-absent-reason"]
          }
        ]
      }
    ]
  }
}

```
