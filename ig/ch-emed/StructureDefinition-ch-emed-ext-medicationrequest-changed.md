# CH EMED Extension MedicationRequest Changed - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED Extension MedicationRequest Changed**

## Extension: CH EMED Extension MedicationRequest Changed 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-medicationrequest-changed | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDExtMedicationRequestChanged |
| **Copyright/Legal**: CC0-1.0 | |

Extension to represent the changed MedicationRequest

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH EMED Observation (PADV)](StructureDefinition-ch-emed-observation.md)
* Examples for this Extension: [Observation/PharmaceuticalAdvice-ChangeMedicament](Observation-PharmaceuticalAdvice-ChangeMedicament.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-ext-medicationrequest-changed)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-ext-medicationrequest-changed.csv), [Excel](StructureDefinition-ch-emed-ext-medicationrequest-changed.xlsx), [Schematron](StructureDefinition-ch-emed-ext-medicationrequest-changed.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-ext-medicationrequest-changed",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-medicationrequest-changed",
  "version" : "6.0.0",
  "name" : "CHEMEDExtMedicationRequestChanged",
  "title" : "CH EMED Extension MedicationRequest Changed",
  "status" : "active",
  "date" : "2025-12-16T11:14:15+00:00",
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
  "description" : "Extension to represent the changed MedicationRequest",
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
        "fixedUri" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-medicationrequest-changed"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "short" : "The changed MedicationRequest",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationrequest-changed"
            ],
            "aggregation" : ["referenced", "bundled"]
          }
        ]
      }
    ]
  }
}

```
