# CH IG Encounter - CH IG (R4) v1.2.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH IG Encounter**

## Resource Profile: CH IG Encounter 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ig/StructureDefinition/ch-ig-encounter | *Version*:1.2.3 |
| Draft as of 2025-12-11 | *Computable Name*:ChIgEncounter |
| **Copyright/Legal**: CC0-1.0 | |

 
CH IG Encounter profile is just an example! 

**Usages:**

* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-ig|current/StructureDefinition/ch-ig-encounter)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ig-encounter.csv), [Excel](StructureDefinition-ch-ig-encounter.xlsx), [Schematron](StructureDefinition-ch-ig-encounter.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ig-encounter",
  "url" : "http://fhir.ch/ig/ch-ig/StructureDefinition/ch-ig-encounter",
  "version" : "1.2.3",
  "name" : "ChIgEncounter",
  "title" : "CH IG Encounter",
  "status" : "draft",
  "date" : "2025-12-11T10:31:14+00:00",
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
  "description" : "CH IG Encounter profile is just an example!",
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
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Encounter",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-encounter",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Encounter",
        "path" : "Encounter",
        "short" : "CH IG Practitioner"
      },
      {
        "id" : "Encounter.extension",
        "path" : "Encounter.extension",
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
        "id" : "Encounter.extension:subjectStatus",
        "path" : "Encounter.extension",
        "sliceName" : "subjectStatus",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/5.0/StructureDefinition/extension-Encounter.subjectStatus"
            ]
          }
        ]
      }
    ]
  }
}

```
