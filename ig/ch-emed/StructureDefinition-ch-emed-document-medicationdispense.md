# CH EMED Medication Dispense Document - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED Medication Dispense Document**

## Resource Profile: CH EMED Medication Dispense Document 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-document-medicationdispense | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDDocumentMedicationDispense |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the bundle for the medication dispense document 

**Usages:**

* Examples for this Profile: [Bundle/1-2-MedicationDispense](Bundle-1-2-MedicationDispense.md), [Bundle/2-4-MedicationDispense](Bundle-2-4-MedicationDispense.md), [Bundle/3-1-MedicationDispense](Bundle-3-1-MedicationDispense.md) and [Bundle/3-2-MedicationDispense](Bundle-3-2-MedicationDispense.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-document-medicationdispense)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-document-medicationdispense.csv), [Excel](StructureDefinition-ch-emed-document-medicationdispense.xlsx), [Schematron](StructureDefinition-ch-emed-document-medicationdispense.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-document-medicationdispense",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-document-medicationdispense",
  "version" : "6.0.0",
  "name" : "CHEMEDDocumentMedicationDispense",
  "title" : "CH EMED Medication Dispense Document",
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
  "description" : "Definition of the bundle for the medication dispense document",
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
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Bundle",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-document-epr",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Bundle",
        "path" : "Bundle",
        "short" : "CH EMED Medication Dispense Document"
      },
      {
        "id" : "Bundle.identifier",
        "path" : "Bundle.identifier",
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
        "id" : "Bundle.timestamp",
        "path" : "Bundle.timestamp",
        "short" : "The document's creation date and time"
      },
      {
        "id" : "Bundle.entry:Composition",
        "path" : "Bundle.entry",
        "sliceName" : "Composition",
        "short" : "Medication dispense composition"
      },
      {
        "id" : "Bundle.entry:Composition.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Composition",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationdispense"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:MedicationDispense",
        "path" : "Bundle.entry",
        "sliceName" : "MedicationDispense",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:MedicationDispense.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "MedicationDispense",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationdispense"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:MedicationAdministration",
        "path" : "Bundle.entry",
        "sliceName" : "MedicationAdministration",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:MedicationAdministration.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "MedicationAdministration",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationadministration"
            ]
          }
        ]
      }
    ]
  }
}

```
