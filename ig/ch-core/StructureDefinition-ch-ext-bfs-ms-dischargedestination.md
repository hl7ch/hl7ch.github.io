# BFS Extension Medical Statistic: Discharge Destination for Encounter - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **BFS Extension Medical Statistic: Discharge Destination for Encounter**

## Extension: BFS Extension Medical Statistic: Discharge Destination for Encounter 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-bfs-ms-dischargedestination | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:BfsDischargeDestination |
| **Copyright/Legal**: CC0-1.0 | |

BFS Extension Discharge Destination for Encounter

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH Core Encounter](StructureDefinition-ch-core-encounter.md)
* Examples for this Extension: [Encounter/EncounterAccidentBroennimann](Encounter-EncounterAccidentBroennimann.md) and [Encounter/EncounterAmbulantBroennimann](Encounter-EncounterAmbulantBroennimann.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-ext-bfs-ms-dischargedestination)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ext-bfs-ms-dischargedestination.csv), [Excel](StructureDefinition-ch-ext-bfs-ms-dischargedestination.xlsx), [Schematron](StructureDefinition-ch-ext-bfs-ms-dischargedestination.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ext-bfs-ms-dischargedestination",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-bfs-ms-dischargedestination",
  "version" : "6.0.0",
  "name" : "BfsDischargeDestination",
  "title" : "BFS Extension Medical Statistic: Discharge Destination for Encounter",
  "status" : "active",
  "date" : "2025-12-16T08:02:49+00:00",
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
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "BFS Extension Discharge Destination for Encounter",
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
      "expression" : "Encounter.hospitalization"
    }
  ],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-bfs-ms-dischargedestination"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Extension.value[x]:valueCoding",
        "path" : "Extension.value[x]",
        "sliceName" : "valueCoding",
        "definition" : "Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list).",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Coding"
          }
        ],
        "binding" : {
          "strength" : "extensible",
          "description" : "A set of codes advising a system or user which name in a set of names to select for a given purpose.",
          "valueSet" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-28-dischargedestination"
        }
      }
    ]
  }
}

```
