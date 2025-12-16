# CH EMED Extension Dispense - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED Extension Dispense**

## Extension: CH EMED Extension Dispense 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-dispense | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDExtDispense |
| **Copyright/Legal**: CC0-1.0 | |

Extension to reference an external MedicationDispense/MedicationAdministration and the Medication Dispense document that contains it

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH EMED MedicationAdministration (LIST)](StructureDefinition-ch-emed-medicationadministration-list.md), [CH EMED MedicationDispense (LIST)](StructureDefinition-ch-emed-medicationdispense-list.md) and [CH EMED Observation (PADV)](StructureDefinition-ch-emed-observation.md)
* Examples for this Extension: [Bundle/2-1-MedicationList](Bundle-2-1-MedicationList.md) and [MedicationDispense/2-1-MedDispTriatec](MedicationDispense-2-1-MedDispTriatec.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-ext-dispense)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-ext-dispense.csv), [Excel](StructureDefinition-ch-emed-ext-dispense.xlsx), [Schematron](StructureDefinition-ch-emed-ext-dispense.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-ext-dispense",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-dispense",
  "version" : "6.0.0",
  "name" : "CHEMEDExtDispense",
  "title" : "CH EMED Extension Dispense",
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
  "description" : "Extension to reference an external MedicationDispense/MedicationAdministration and the Medication Dispense document that contains it",
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
      "expression" : "MedicationRequest"
    },
    {
      "type" : "element",
      "expression" : "MedicationDispense"
    },
    {
      "type" : "element",
      "expression" : "MedicationAdministration"
    },
    {
      "type" : "element",
      "expression" : "MedicationStatement"
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
        "short" : "CH EMED Extension"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 2
      },
      {
        "id" : "Extension.extension:id",
        "path" : "Extension.extension",
        "sliceName" : "id",
        "short" : "Identifier of the referenced external MedicationDispense/MedicationAdministration",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:id.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:id.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "id"
      },
      {
        "id" : "Extension.extension:id.value[x]",
        "path" : "Extension.extension.value[x]",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-uuid-identifier"
            ]
          }
        ]
      },
      {
        "id" : "Extension.extension:externalDocumentId",
        "path" : "Extension.extension",
        "sliceName" : "externalDocumentId",
        "short" : "Identifier of the referenced external Medication Dispense document",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:externalDocumentId.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:externalDocumentId.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "externalDocumentId"
      },
      {
        "id" : "Extension.extension:externalDocumentId.value[x]",
        "path" : "Extension.extension.value[x]",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-uuid-identifier"
            ]
          }
        ]
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-dispense"
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
