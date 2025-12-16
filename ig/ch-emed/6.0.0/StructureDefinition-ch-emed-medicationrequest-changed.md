# CH EMED MedicationRequest Changed - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED MedicationRequest Changed**

## Resource Profile: CH EMED MedicationRequest Changed 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationrequest-changed | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDMedicationRequestChanged |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the changed medication request for the pharmaceutical advice document 

**Usages:**

* Derived from this Profile: [CH EMED MedicationRequest Changed (LIST)](StructureDefinition-ch-emed-medicationrequest-changed-list.md)
* Use this Profile: [CH EMED Pharmaceutical Advice Document](StructureDefinition-ch-emed-document-pharmaceuticaladvice.md)
* Refer to this Profile: [CH EMED Extension MedicationRequest Changed](StructureDefinition-ch-emed-ext-medicationrequest-changed.md)
* Examples for this Profile: [MedicationRequest/MedReq-ChangeMedication](MedicationRequest-MedReq-ChangeMedication.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-medicationrequest-changed)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-medicationrequest-changed.csv), [Excel](StructureDefinition-ch-emed-medicationrequest-changed.xlsx), [Schematron](StructureDefinition-ch-emed-medicationrequest-changed.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-medicationrequest-changed",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationrequest-changed",
  "version" : "6.0.0",
  "name" : "CHEMEDMedicationRequestChanged",
  "title" : "CH EMED MedicationRequest Changed",
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
  "description" : "Definition of the changed medication request for the pharmaceutical advice document",
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
      "identity" : "script10.6",
      "uri" : "http://ncpdp.org/SCRIPT10_6",
      "name" : "Mapping to NCPDP SCRIPT 10.6"
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
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "MedicationRequest",
  "baseDefinition" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationrequest",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "MedicationRequest",
        "path" : "MedicationRequest",
        "short" : "CH EMED MedicationRequest Changed (PADV)"
      },
      {
        "id" : "MedicationRequest.supportingInformation",
        "path" : "MedicationRequest.supportingInformation",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resolve()"
            }
          ],
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "MedicationRequest.supportingInformation:partOf",
        "path" : "MedicationRequest.supportingInformation",
        "sliceName" : "partOf",
        "short" : "Reference to the Observation from type 'CHANGE'",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-observation"
            ],
            "aggregation" : ["referenced", "bundled"]
          }
        ]
      }
    ]
  }
}

```
