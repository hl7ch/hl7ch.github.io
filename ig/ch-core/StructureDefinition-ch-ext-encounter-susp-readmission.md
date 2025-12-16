# Encounter, Suspected Readmission - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Encounter, Suspected Readmission**

## Extension: Encounter, Suspected Readmission 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-encounter-susp-readmission | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:EncounterSupsectedReadmission |
| **Copyright/Legal**: CC0-1.0 | |

Encounter Extension for suspected readmission

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH Core Encounter](StructureDefinition-ch-core-encounter.md)
* Examples for this Extension: [Encounter/EncounterAccidentBroennimann](Encounter-EncounterAccidentBroennimann.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-ext-encounter-susp-readmission)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ext-encounter-susp-readmission.csv), [Excel](StructureDefinition-ch-ext-encounter-susp-readmission.xlsx), [Schematron](StructureDefinition-ch-ext-encounter-susp-readmission.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ext-encounter-susp-readmission",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-encounter-susp-readmission",
  "version" : "6.0.0",
  "name" : "EncounterSupsectedReadmission",
  "title" : "Encounter, Suspected Readmission",
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
  "description" : "Encounter Extension for suspected readmission",
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
        "fixedUri" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-encounter-susp-readmission"
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
        "id" : "Extension.value[x]:valueBoolean",
        "path" : "Extension.value[x]",
        "sliceName" : "valueBoolean",
        "definition" : "True if it is a suspected readmission, false otherwise",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "boolean"
          }
        ]
      }
    ]
  }
}

```
