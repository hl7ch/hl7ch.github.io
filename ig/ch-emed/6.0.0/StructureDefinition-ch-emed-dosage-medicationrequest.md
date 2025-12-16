# CH EMED Dosage (MedicationRequest) - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED Dosage (MedicationRequest)**

## Data Type Profile: CH EMED Dosage (MedicationRequest) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-dosage-medicationrequest | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDDosageMedicationRequest |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the dosage (used in MedicationRequest) 

**Usages:**

* Use this DataType Profile: [CH EMED MedicationRequest (PRE)](StructureDefinition-ch-emed-medicationrequest.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-dosage-medicationrequest)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-dosage-medicationrequest.csv), [Excel](StructureDefinition-ch-emed-dosage-medicationrequest.xlsx), [Schematron](StructureDefinition-ch-emed-dosage-medicationrequest.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-dosage-medicationrequest",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-dosage-medicationrequest",
  "version" : "6.0.0",
  "name" : "CHEMEDDosageMedicationRequest",
  "title" : "CH EMED Dosage (MedicationRequest)",
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
  "description" : "Definition of the dosage (used in MedicationRequest)",
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
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "Dosage",
  "baseDefinition" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-dosage",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Dosage",
        "path" : "Dosage",
        "short" : "CH EMED Dosage (MedicationRequest)",
        "constraint" : [
          {
            "key" : "ch-dosage-3",
            "severity" : "error",
            "human" : "Patient instruction/free text dosage instruction, or timing and dose/rate has to be specified",
            "expression" : "patientInstruction.exists() or (timing.exists() and doseAndRate.exists())",
            "source" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-dosage-medicationrequest"
          }
        ]
      }
    ]
  }
}

```
