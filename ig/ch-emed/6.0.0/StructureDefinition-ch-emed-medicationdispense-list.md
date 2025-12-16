# CH EMED MedicationDispense (LIST) - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED MedicationDispense (LIST)**

## Resource Profile: CH EMED MedicationDispense (LIST) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationdispense-list | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDMedicationDispenseList |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the medication dispense for the medication list document 

**Usages:**

* Refer to this Profile: [CH EMED Medication List Composition](StructureDefinition-ch-emed-composition-medicationlist.md)
* Examples for this Profile: [MedicationDispense/2-1-MedDispTriatec](MedicationDispense-2-1-MedDispTriatec.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-medicationdispense-list)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-medicationdispense-list.csv), [Excel](StructureDefinition-ch-emed-medicationdispense-list.xlsx), [Schematron](StructureDefinition-ch-emed-medicationdispense-list.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-medicationdispense-list",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationdispense-list",
  "version" : "6.0.0",
  "name" : "CHEMEDMedicationDispenseList",
  "title" : "CH EMED MedicationDispense (LIST)",
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
  "description" : "Definition of the medication dispense for the medication list document",
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
      "identity" : "rx-dispense-rmim",
      "uri" : "http://www.hl7.org/v3/PORX_RM020070UV",
      "name" : "V3 Pharmacy Dispense RMIM"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "MedicationDispense",
  "baseDefinition" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationdispense",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "MedicationDispense",
        "path" : "MedicationDispense",
        "short" : "CH EMED MedicationDispense (LIST)"
      },
      {
        "id" : "MedicationDispense.extension:parentDocument",
        "path" : "MedicationDispense.extension",
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
        "id" : "MedicationDispense.extension:authorDocument",
        "path" : "MedicationDispense.extension",
        "sliceName" : "authorDocument",
        "short" : "Author of the original document if different from the author of the medical decision (MedicationDispense.performer.actor), see also 'Guidance - Authorship'",
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
