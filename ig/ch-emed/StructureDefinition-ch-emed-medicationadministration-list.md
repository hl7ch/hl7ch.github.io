# CH EMED MedicationAdministration (LIST) - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED MedicationAdministration (LIST)**

## Resource Profile: CH EMED MedicationAdministration (LIST) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationadministration-list | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDMedicationAdministrationList |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the medication administration for the medication list document 

**Usages:**

* Refer to this Profile: [CH EMED Medication List Composition](StructureDefinition-ch-emed-composition-medicationlist.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-medicationadministration-list)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-medicationadministration-list.csv), [Excel](StructureDefinition-ch-emed-medicationadministration-list.xlsx), [Schematron](StructureDefinition-ch-emed-medicationadministration-list.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-medicationadministration-list",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationadministration-list",
  "version" : "6.0.0",
  "name" : "CHEMEDMedicationAdministrationList",
  "title" : "CH EMED MedicationAdministration (LIST)",
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
  "description" : "Definition of the medication administration for the medication list document",
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
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "w3c.prov",
      "uri" : "http://www.w3.org/ns/prov",
      "name" : "W3C PROV"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "MedicationAdministration",
  "baseDefinition" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationadministration",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "MedicationAdministration",
        "path" : "MedicationAdministration",
        "short" : "CH EMED MedicationAdministration (LIST)"
      },
      {
        "id" : "MedicationAdministration.extension:parentDocument",
        "path" : "MedicationAdministration.extension",
        "sliceName" : "parentDocument",
        "short" : "Reference to the parent document",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-dispense"
            ]
          }
        ]
      },
      {
        "id" : "MedicationAdministration.extension:authorDocument",
        "path" : "MedicationAdministration.extension",
        "sliceName" : "authorDocument",
        "short" : "Author of the original document if different from the author of the medical decision (MedicationAdministration.performer.actor), see also 'Guidance - Authorship'",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-author"
            ]
          }
        ]
      }
    ]
  }
}

```
