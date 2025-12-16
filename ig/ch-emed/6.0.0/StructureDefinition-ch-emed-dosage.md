# CH EMED Dosage (MedicationStatement / MedicationDispense) - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED Dosage (MedicationStatement / MedicationDispense)**

## Data Type Profile: CH EMED Dosage (MedicationStatement / MedicationDispense) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-dosage | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDDosage |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the dosage (used in MedicationStatement / MedicationDispense) 

**Usages:**

* Derived from this DataType Profile: [CH EMED Dosage (MedicationRequest)](StructureDefinition-ch-emed-dosage-medicationrequest.md)
* Use this DataType Profile: [CH EMED MedicationDispense (DIS)](StructureDefinition-ch-emed-medicationdispense.md) and [CH EMED MedicationStatement](StructureDefinition-ch-emed-medicationstatement.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-dosage)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-dosage.csv), [Excel](StructureDefinition-ch-emed-dosage.xlsx), [Schematron](StructureDefinition-ch-emed-dosage.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-dosage",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-dosage",
  "version" : "6.0.0",
  "name" : "CHEMEDDosage",
  "title" : "CH EMED Dosage (MedicationStatement / MedicationDispense)",
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
  "description" : "Definition of the dosage (used in MedicationStatement / MedicationDispense)",
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
        "short" : "CH EMED Dosage (MedicationStatement / MedicationDispense)",
        "constraint" : [
          {
            "key" : "ch-dosage-4",
            "severity" : "error",
            "human" : "For split dosage timing event and dose/rate are REQUIRED",
            "expression" : "sequence.exists() implies (timing.repeat.when.exists() and doseAndRate.dose.exists())",
            "source" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-dosage"
          }
        ]
      },
      {
        "id" : "Dosage.sequence",
        "path" : "Dosage.sequence",
        "constraint" : [
          {
            "key" : "ch-dosage-1",
            "severity" : "error",
            "human" : "No sequence number (for one dosage element) or sequence number = 1 (for more than one dosage element)",
            "expression" : "$this.count() = 0 or $this = 1",
            "source" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-dosage"
          }
        ]
      },
      {
        "id" : "Dosage.patientInstruction",
        "path" : "Dosage.patientInstruction",
        "short" : "Patient instructions (e.g. 'take with food'), incl. free text dosage instructions (e.g. for complex dosage)",
        "mustSupport" : true
      },
      {
        "id" : "Dosage.timing.repeat.bounds[x]",
        "path" : "Dosage.timing.repeat.bounds[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Dosage.timing.repeat.bounds[x]:boundsPeriod",
        "path" : "Dosage.timing.repeat.bounds[x]",
        "sliceName" : "boundsPeriod",
        "short" : "Start and/or end of treatment",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Period"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Dosage.timing.repeat.when",
        "path" : "Dosage.timing.repeat.when",
        "constraint" : [
          {
            "key" : "ch-emed-event-timing",
            "severity" : "warning",
            "human" : "For the representation of the time of administration according to the 1-1-1-1 scheme, the values MORN-NOON-EVE-NIGHT SHOULD be used.",
            "expression" : "$this='MORN' or $this='NOON' or $this='EVE' or $this='NIGHT'",
            "source" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-dosage"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Dosage.asNeeded[x]",
        "path" : "Dosage.asNeeded[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Dosage.asNeeded[x]:asNeededBoolean",
        "path" : "Dosage.asNeeded[x]",
        "sliceName" : "asNeededBoolean",
        "short" : "In reserve (to be taken by the patient only if the need arises - e.g. pains)",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "boolean"
          }
        ]
      },
      {
        "id" : "Dosage.route",
        "path" : "Dosage.route",
        "short" : "Route of administration",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/edqm-routeofadministration"
        }
      },
      {
        "id" : "Dosage.route.coding",
        "path" : "Dosage.route.coding",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Dosage.route.coding.system",
        "path" : "Dosage.route.coding.system",
        "min" : 1
      },
      {
        "id" : "Dosage.route.coding.code",
        "path" : "Dosage.route.coding.code",
        "min" : 1
      },
      {
        "id" : "Dosage.method",
        "path" : "Dosage.method",
        "short" : "Administration method",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/edqm-administrationmethod"
        }
      },
      {
        "id" : "Dosage.method.coding",
        "path" : "Dosage.method.coding",
        "min" : 1
      },
      {
        "id" : "Dosage.method.coding.system",
        "path" : "Dosage.method.coding.system",
        "min" : 1
      },
      {
        "id" : "Dosage.method.coding.code",
        "path" : "Dosage.method.coding.code",
        "min" : 1
      },
      {
        "id" : "Dosage.doseAndRate",
        "path" : "Dosage.doseAndRate",
        "max" : "1"
      },
      {
        "id" : "Dosage.doseAndRate.dose[x]",
        "path" : "Dosage.doseAndRate.dose[x]",
        "mustSupport" : true
      }
    ]
  }
}

```
