# CH EPREG Extension: Examination Sequence - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPREG Extension: Examination Sequence**

## Extension: CH EPREG Extension: Examination Sequence 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-ext-examination-sequence | *Version*:1.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChEpregExtExaminationSequence |
| **Copyright/Legal**: CC0-1.0 | |

This extension represents the sequential number of a pregnancy-related examination (e.g., 1 = first examination, 2 = second examination, or second ultrasound). It indicates the order of occurrence within the pregnancy.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH EPREG Encounter: Mother](StructureDefinition-ch-epreg-encounter-mother.md)
* Examples for this Extension: [Bundle/UC1-Document](Bundle-UC1-Document.md), [Bundle/UC3-Document](Bundle-UC3-Document.md), [Encounter/UC1-EncounterMother20250123](Encounter-UC1-EncounterMother20250123.md) and [Encounter/UC3-EncounterMother20250210](Encounter-UC3-EncounterMother20250210.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epreg|current/StructureDefinition/ch-epreg-ext-examination-sequence)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-epreg-ext-examination-sequence.csv), [Excel](StructureDefinition-ch-epreg-ext-examination-sequence.xlsx), [Schematron](StructureDefinition-ch-epreg-ext-examination-sequence.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-epreg-ext-examination-sequence",
  "url" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-ext-examination-sequence",
  "version" : "1.0.0",
  "name" : "ChEpregExtExaminationSequence",
  "title" : "CH EPREG Extension: Examination Sequence",
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
  "description" : "This extension represents the sequential number of a pregnancy-related examination (e.g., 1 = first examination, 2 = second examination, or second ultrasound). It indicates the order of occurrence within the pregnancy.",
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
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [
    {
      "type" : "element",
      "expression" : "Encounter"
    },
    {
      "type" : "element",
      "expression" : "Observation"
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
        "short" : "CH EPREG Extension: Examination Sequence",
        "definition" : "This extension represents the sequential number of a pregnancy-related examination (e.g., 1 = first examination, 2 = second examination, or second ultrasound). It indicates the order of occurrence within the pregnancy."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-ext-examination-sequence"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "positiveInt"
          }
        ]
      }
    ]
  }
}

```
