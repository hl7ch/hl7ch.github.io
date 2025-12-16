# CH EMED Medication List Document - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED Medication List Document**

## Resource Profile: CH EMED Medication List Document 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-document-medicationlist | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDDocumentMedicationList |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the bundle for the medication list document 

**Usages:**

* Examples for this Profile: [Bundle/2-1-MedicationList](Bundle-2-1-MedicationList.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-document-medicationlist)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-document-medicationlist.csv), [Excel](StructureDefinition-ch-emed-document-medicationlist.xlsx), [Schematron](StructureDefinition-ch-emed-document-medicationlist.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-document-medicationlist",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-document-medicationlist",
  "version" : "6.0.0",
  "name" : "CHEMEDDocumentMedicationList",
  "title" : "CH EMED Medication List Document",
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
  "description" : "Definition of the bundle for the medication list document",
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
        "short" : "CH EMED Medication List Document"
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
        "sliceName" : "Composition"
      },
      {
        "id" : "Bundle.entry:Composition.resource",
        "path" : "Bundle.entry.resource",
        "short" : "CH EMED Medication List Composition",
        "type" : [
          {
            "code" : "Composition",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationlist"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:MedicationStatement",
        "path" : "Bundle.entry",
        "sliceName" : "MedicationStatement",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:MedicationStatement.resource",
        "path" : "Bundle.entry.resource",
        "short" : "CH EMED MedicationStatement (LIST) | CH EMED MedicationStatement Changed (LIST)",
        "min" : 1,
        "type" : [
          {
            "code" : "MedicationStatement",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement"
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
        "short" : "CH EMED MedicationRequest (LIST) | CH EMED MedicationRequest Changed (LIST)",
        "min" : 1,
        "type" : [
          {
            "code" : "MedicationRequest",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationrequest"
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
        "short" : "CH EMED MedicationDispense (LIST)",
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
        "short" : "CH EMED MedicationAdministration (LIST)",
        "min" : 1,
        "type" : [
          {
            "code" : "MedicationAdministration",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationadministration"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:Observation",
        "path" : "Bundle.entry",
        "sliceName" : "Observation",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:Observation.resource",
        "path" : "Bundle.entry.resource",
        "short" : "CH EMED Observation (LIST)",
        "min" : 1,
        "type" : [
          {
            "code" : "Observation",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-observation"
            ]
          }
        ]
      }
    ]
  }
}

```
