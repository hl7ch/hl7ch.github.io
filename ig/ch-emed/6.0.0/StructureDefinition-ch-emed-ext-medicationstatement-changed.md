# CH EMED Extension MedicationStatement Changed - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED Extension MedicationStatement Changed**

## Extension: CH EMED Extension MedicationStatement Changed 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-medicationstatement-changed | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDExtMedicationStatementChanged |
| **Copyright/Legal**: CC0-1.0 | |

Extension to represent the changed MedicationStatement

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH EMED Observation (PADV)](StructureDefinition-ch-emed-observation.md)
* Examples for this Extension: [Bundle/PharmaceuticalAdvice-ChangeDosage](Bundle-PharmaceuticalAdvice-ChangeDosage.md) and [Observation/Obs-ChangeDosage](Observation-Obs-ChangeDosage.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-ext-medicationstatement-changed)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-ext-medicationstatement-changed.csv), [Excel](StructureDefinition-ch-emed-ext-medicationstatement-changed.xlsx), [Schematron](StructureDefinition-ch-emed-ext-medicationstatement-changed.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-ext-medicationstatement-changed",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-medicationstatement-changed",
  "version" : "6.0.0",
  "name" : "CHEMEDExtMedicationStatementChanged",
  "title" : "CH EMED Extension MedicationStatement Changed",
  "status" : "active",
  "date" : "2025-12-16T11:07:13+00:00",
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
  "description" : "Extension to represent the changed MedicationStatement",
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
        "short" : "CH EMED Extension"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-medicationstatement-changed"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "short" : "The changed MedicationStatement",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement-changed"
            ],
            "aggregation" : ["referenced", "bundled"]
          }
        ]
      }
    ]
  }
}

```
