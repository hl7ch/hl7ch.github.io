# If an encounter is caused by an accident - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **If an encounter is caused by an accident**

## Extension: If an encounter is caused by an accident 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-accident | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:Accident |
| **Copyright/Legal**: CC0-1.0 | |

Extension to define an encounter that is caused by an accident and at which time the accident happened

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH Core Encounter](StructureDefinition-ch-core-encounter.md)
* Examples for this Extension: [Encounter/EncounterAccidentBroennimann](Encounter-EncounterAccidentBroennimann.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-ext-accident)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ext-accident.csv), [Excel](StructureDefinition-ch-ext-accident.xlsx), [Schematron](StructureDefinition-ch-ext-accident.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ext-accident",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-accident",
  "version" : "6.0.0",
  "name" : "Accident",
  "title" : "If an encounter is caused by an accident",
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
  "description" : "Extension to define an encounter that is caused by an accident and at which time the accident happened",
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
        "id" : "Extension",
        "path" : "Extension",
        "definition" : "Extension to define an encounter is caused by an accident and at which time the accident happened"
      },
      {
        "id" : "Extension.extension:tag",
        "path" : "Extension.extension",
        "sliceName" : "tag",
        "short" : "Information if it was an accident",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:tag.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:tag.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "tag"
      },
      {
        "id" : "Extension.extension:tag.value[x]",
        "path" : "Extension.extension.value[x]",
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
        "id" : "Extension.extension:tag.value[x]:valueBoolean",
        "path" : "Extension.extension.value[x]",
        "sliceName" : "valueBoolean",
        "short" : "Flag to indicate that it was an accident",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "boolean"
          }
        ]
      },
      {
        "id" : "Extension.extension:dateTime",
        "path" : "Extension.extension",
        "sliceName" : "dateTime",
        "short" : "Timestamp of the authorship/data input",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:dateTime.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:dateTime.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "dateTime"
      },
      {
        "id" : "Extension.extension:dateTime.value[x]",
        "path" : "Extension.extension.value[x]",
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
        "id" : "Extension.extension:dateTime.value[x]:valueDateTime",
        "path" : "Extension.extension.value[x]",
        "sliceName" : "valueDateTime",
        "short" : "date and time of accident",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "dateTime"
          }
        ]
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-accident"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "max" : "0"
      }
    ]
  }
}

```
