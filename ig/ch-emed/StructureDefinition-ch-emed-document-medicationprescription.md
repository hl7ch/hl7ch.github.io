# CH EMED Medication Prescription Document - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED Medication Prescription Document**

## Resource Profile: CH EMED Medication Prescription Document 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-document-medicationprescription | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDDocumentMedicationPrescription |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the bundle for the medication prescription document 

**Usages:**

* Examples for this Profile: [Bundle/2-6-MedicationPrescription](Bundle-2-6-MedicationPrescription.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-document-medicationprescription)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-document-medicationprescription.csv), [Excel](StructureDefinition-ch-emed-document-medicationprescription.xlsx), [Schematron](StructureDefinition-ch-emed-document-medicationprescription.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-document-medicationprescription",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-document-medicationprescription",
  "version" : "6.0.0",
  "name" : "CHEMEDDocumentMedicationPrescription",
  "title" : "CH EMED Medication Prescription Document",
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
  "description" : "Definition of the bundle for the medication prescription document",
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
        "short" : "CH EMED Medication Prescription Document"
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
        "short" : "Medication prescription composition"
      },
      {
        "id" : "Bundle.entry:Composition.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Composition",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationprescription"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:MedicationRequest",
        "path" : "Bundle.entry",
        "sliceName" : "MedicationRequest",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:MedicationRequest.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "MedicationRequest",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationrequest"
            ]
          }
        ]
      }
    ]
  }
}

```
