# CH EMED Dosage Split - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED Dosage Split**

## Data Type Profile: CH EMED Dosage Split 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-dosage-split | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDDosageSplit |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the split dosage (used in MedicationStatement / MedicationDispense / MedicationRequest) 

**Usages:**

* Use this DataType Profile: [CH EMED MedicationDispense (DIS)](StructureDefinition-ch-emed-medicationdispense.md), [CH EMED MedicationRequest (PRE)](StructureDefinition-ch-emed-medicationrequest.md) and [CH EMED MedicationStatement](StructureDefinition-ch-emed-medicationstatement.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-dosage-split)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-dosage-split.csv), [Excel](StructureDefinition-ch-emed-dosage-split.xlsx), [Schematron](StructureDefinition-ch-emed-dosage-split.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-dosage-split",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-dosage-split",
  "version" : "6.0.0",
  "name" : "CHEMEDDosageSplit",
  "title" : "CH EMED Dosage Split",
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
  "description" : "Definition of the split dosage (used in MedicationStatement / MedicationDispense / MedicationRequest)",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-dosage",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Dosage",
        "path" : "Dosage",
        "short" : "CH EMED Dosage Split (MedicationStatement / MedicationDispense / MedicationRequest)"
      },
      {
        "id" : "Dosage.sequence",
        "path" : "Dosage.sequence",
        "min" : 1,
        "constraint" : [
          {
            "key" : "ch-dosage-2",
            "severity" : "error",
            "human" : "The sequence number MUST be greater than 1",
            "expression" : "$this > 1",
            "source" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-dosage-split"
          }
        ]
      },
      {
        "id" : "Dosage.text",
        "path" : "Dosage.text",
        "max" : "0"
      },
      {
        "id" : "Dosage.additionalInstruction",
        "path" : "Dosage.additionalInstruction",
        "max" : "0"
      },
      {
        "id" : "Dosage.patientInstruction",
        "path" : "Dosage.patientInstruction",
        "max" : "0"
      },
      {
        "id" : "Dosage.timing",
        "path" : "Dosage.timing",
        "min" : 1
      },
      {
        "id" : "Dosage.timing.repeat",
        "path" : "Dosage.timing.repeat",
        "min" : 1
      },
      {
        "id" : "Dosage.timing.repeat.bounds[x]",
        "path" : "Dosage.timing.repeat.bounds[x]",
        "max" : "0"
      },
      {
        "id" : "Dosage.timing.repeat.when",
        "path" : "Dosage.timing.repeat.when",
        "min" : 1,
        "constraint" : [
          {
            "key" : "ch-emed-event-timing",
            "severity" : "warning",
            "human" : "For the representation of the time of administration according to the 1-1-1-1 scheme, the values MORN-NOON-EVE-NIGHT SHOULD be used.",
            "expression" : "$this='MORN' or $this='NOON' or $this='EVE' or $this='NIGHT'",
            "source" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-dosage-split"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Dosage.asNeeded[x]",
        "path" : "Dosage.asNeeded[x]",
        "max" : "0"
      },
      {
        "id" : "Dosage.site",
        "path" : "Dosage.site",
        "max" : "0"
      },
      {
        "id" : "Dosage.route",
        "path" : "Dosage.route",
        "max" : "0"
      },
      {
        "id" : "Dosage.method",
        "path" : "Dosage.method",
        "max" : "0"
      },
      {
        "id" : "Dosage.doseAndRate",
        "path" : "Dosage.doseAndRate",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Dosage.doseAndRate.dose[x]",
        "path" : "Dosage.doseAndRate.dose[x]",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Dosage.maxDosePerPeriod",
        "path" : "Dosage.maxDosePerPeriod",
        "max" : "0"
      },
      {
        "id" : "Dosage.maxDosePerAdministration",
        "path" : "Dosage.maxDosePerAdministration",
        "max" : "0"
      },
      {
        "id" : "Dosage.maxDosePerLifetime",
        "path" : "Dosage.maxDosePerLifetime",
        "max" : "0"
      }
    ]
  }
}

```
