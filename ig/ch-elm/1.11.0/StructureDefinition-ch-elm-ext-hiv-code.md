# CH ELM Extension: HIV code - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Extension: HIV code**

## Extension: CH ELM Extension: HIV code 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-hiv-code | *Version*:1.12.0 |
| Active as of 2025-10-21 | *Computable Name*:ChElmExtHivCode |
| **Copyright/Legal**: CC0-1.0 | |

This CH ELM extension enables to proivde the HIV Code.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [Human Name](StructureDefinition-ch-elm-humanname.md)
* Examples for this Extension: [Bundle/49Doc-HIV](Bundle-49Doc-HIV.md), [Bundle/50Doc-HIV-viremia](Bundle-50Doc-HIV-viremia.md), [Bundle/66Doc-HivRecency](Bundle-66Doc-HivRecency.md) and [Patient/Pat-004](Patient-Pat-004.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-ext-hiv-code)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-ext-hiv-code.csv), [Excel](StructureDefinition-ch-elm-ext-hiv-code.xlsx), [Schematron](StructureDefinition-ch-elm-ext-hiv-code.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-ext-hiv-code",
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-hiv-code",
  "version" : "1.12.0",
  "name" : "ChElmExtHivCode",
  "title" : "CH ELM Extension: HIV code",
  "status" : "active",
  "date" : "2025-10-21T11:37:53+00:00",
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
  "description" : "This CH ELM extension enables to proivde the HIV Code.",
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
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [
    {
      "type" : "element",
      "expression" : "HumanName"
    }
  ],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension",
        "path" : "Extension",
        "short" : "CH ELM Extension: HIV Code",
        "definition" : "This CH ELM extension enables to proivde the HIV Code.",
        "constraint" : [
          {
            "key" : "ch-elm-hiv-check",
            "severity" : "error",
            "human" : "invalid hiv code: 1) either start with a letter or the number 0, 2) be a maximum of 2 characters long, 3) have a number in the last place 4) if it starts with 0, it must either consist only of 0 or be followed by a 1.",
            "expression" : "value.matches('^[A-Za-z][0-9]$|^0$|^01$')",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-hiv-code"
          }
        ]
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-hiv-code"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "short" : "Name of the HIV code",
        "min" : 1,
        "type" : [
          {
            "code" : "string"
          }
        ],
        "maxLength" : 2
      }
    ]
  }
}

```
