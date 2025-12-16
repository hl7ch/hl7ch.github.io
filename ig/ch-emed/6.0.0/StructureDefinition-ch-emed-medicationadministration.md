# CH EMED MedicationAdministration (DIS) - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED MedicationAdministration (DIS)**

## Resource Profile: CH EMED MedicationAdministration (DIS) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationadministration | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDMedicationAdministration |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the medication administration for the medication dispense document 

**Usages:**

* Derived from this Profile: [CH EMED MedicationAdministration (LIST)](StructureDefinition-ch-emed-medicationadministration-list.md)
* Use this Profile: [CH EMED Medication Dispense Document](StructureDefinition-ch-emed-document-medicationdispense.md) and [CH EMED Medication List Document](StructureDefinition-ch-emed-document-medicationlist.md)
* Refer to this Profile: [CH EMED Medication Dispense Composition](StructureDefinition-ch-emed-composition-medicationdispense.md)
* Examples for this Profile: [MedicationAdministration/3-1-MedAdminNacl](MedicationAdministration-3-1-MedAdminNacl.md) and [MedicationAdministration/3-2-MedAdminFentanyl](MedicationAdministration-3-2-MedAdminFentanyl.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-medicationadministration)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-medicationadministration.csv), [Excel](StructureDefinition-ch-emed-medicationadministration.xlsx), [Schematron](StructureDefinition-ch-emed-medicationadministration.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-medicationadministration",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationadministration",
  "version" : "6.0.0",
  "name" : "CHEMEDMedicationAdministration",
  "title" : "CH EMED MedicationAdministration (DIS)",
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
  "description" : "Definition of the medication administration for the medication dispense document",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationadministration",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "MedicationAdministration",
        "path" : "MedicationAdministration",
        "short" : "CH EMED MedicationAdministration (DIS)"
      },
      {
        "id" : "MedicationAdministration.contained",
        "path" : "MedicationAdministration.contained",
        "min" : 1
      },
      {
        "id" : "MedicationAdministration.extension",
        "path" : "MedicationAdministration.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "MedicationAdministration.extension:prescription",
        "path" : "MedicationAdministration.extension",
        "sliceName" : "prescription",
        "short" : "Reference to the medication prescription",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-prescription"
            ]
          }
        ]
      },
      {
        "id" : "MedicationAdministration.extension:pharmaceuticalAdvice",
        "path" : "MedicationAdministration.extension",
        "sliceName" : "pharmaceuticalAdvice",
        "short" : "Reference to the pharmaceutical advice",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-pharmaceuticaladvice"
            ]
          }
        ]
      },
      {
        "id" : "MedicationAdministration.extension:treatmentPlan",
        "path" : "MedicationAdministration.extension",
        "sliceName" : "treatmentPlan",
        "short" : "Reference to the medication treatment plan",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-treatmentplan"
            ]
          }
        ]
      },
      {
        "id" : "MedicationAdministration.identifier",
        "path" : "MedicationAdministration.identifier",
        "short" : "MedicationAdministration Identifier",
        "min" : 1,
        "max" : "1",
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
        "id" : "MedicationAdministration.status",
        "path" : "MedicationAdministration.status",
        "fixedCode" : "completed"
      },
      {
        "id" : "MedicationAdministration.medication[x]",
        "path" : "MedicationAdministration.medication[x]",
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
        "id" : "MedicationAdministration.medication[x]:medicationReference",
        "path" : "MedicationAdministration.medication[x]",
        "sliceName" : "medicationReference",
        "short" : "Reference to the contained medication",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medication-medicationdispense"
            ],
            "aggregation" : ["contained"]
          }
        ]
      },
      {
        "id" : "MedicationAdministration.subject",
        "path" : "MedicationAdministration.subject",
        "short" : "Patient",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
            ]
          }
        ]
      },
      {
        "id" : "MedicationAdministration.subject.reference",
        "path" : "MedicationAdministration.subject.reference",
        "min" : 1
      },
      {
        "id" : "MedicationAdministration.performer",
        "path" : "MedicationAdministration.performer",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "MedicationAdministration.performer.actor",
        "path" : "MedicationAdministration.performer.actor",
        "short" : "The author of the medical decision, see also 'Guidance - Authorship'",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-practitionerrole"
            ]
          }
        ]
      },
      {
        "id" : "MedicationAdministration.performer.actor.reference",
        "path" : "MedicationAdministration.performer.actor.reference",
        "min" : 1
      },
      {
        "id" : "MedicationAdministration.reasonCode",
        "path" : "MedicationAdministration.reasonCode",
        "short" : "Treatment reason"
      },
      {
        "id" : "MedicationAdministration.dosage",
        "path" : "MedicationAdministration.dosage",
        "min" : 1
      },
      {
        "id" : "MedicationAdministration.dosage.route",
        "path" : "MedicationAdministration.dosage.route",
        "short" : "Route of administration",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/edqm-routeofadministration"
        }
      },
      {
        "id" : "MedicationAdministration.dosage.route.coding",
        "path" : "MedicationAdministration.dosage.route.coding",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "MedicationAdministration.dosage.route.coding.system",
        "path" : "MedicationAdministration.dosage.route.coding.system",
        "min" : 1
      },
      {
        "id" : "MedicationAdministration.dosage.route.coding.code",
        "path" : "MedicationAdministration.dosage.route.coding.code",
        "min" : 1
      },
      {
        "id" : "MedicationAdministration.dosage.method",
        "path" : "MedicationAdministration.dosage.method",
        "short" : "Administration method",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/edqm-administrationmethod"
        }
      },
      {
        "id" : "MedicationAdministration.dosage.method.coding",
        "path" : "MedicationAdministration.dosage.method.coding",
        "min" : 1
      },
      {
        "id" : "MedicationAdministration.dosage.method.coding.system",
        "path" : "MedicationAdministration.dosage.method.coding.system",
        "min" : 1
      },
      {
        "id" : "MedicationAdministration.dosage.method.coding.code",
        "path" : "MedicationAdministration.dosage.method.coding.code",
        "min" : 1
      },
      {
        "id" : "MedicationAdministration.dosage.dose",
        "path" : "MedicationAdministration.dosage.dose",
        "short" : "Amount of medication administered",
        "mustSupport" : true
      }
    ]
  }
}

```
