# CH Core MedicationAdministration - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core MedicationAdministration**

## Resource Profile: CH Core MedicationAdministration 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationadministration | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreMedicationAdministration |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition of the MedicationAdministration resource for use in Swiss specific use cases. 

**Usages:**

* Examples for this Profile: [MedicationAdministration/3-2-MedAdminFentanyl](MedicationAdministration-3-2-MedAdminFentanyl.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-medicationadministration)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-medicationadministration.csv), [Excel](StructureDefinition-ch-core-medicationadministration.xlsx), [Schematron](StructureDefinition-ch-core-medicationadministration.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-medicationadministration",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationadministration",
  "version" : "6.0.0",
  "name" : "CHCoreMedicationAdministration",
  "title" : "CH Core MedicationAdministration",
  "status" : "active",
  "date" : "2025-12-16T08:02:49+00:00",
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
  "description" : "Base definition of the MedicationAdministration resource for use in Swiss specific use cases.",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/MedicationAdministration",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "MedicationAdministration",
        "path" : "MedicationAdministration",
        "short" : "CH Core MedicationAdministration"
      },
      {
        "id" : "MedicationAdministration.medication[x]",
        "path" : "MedicationAdministration.medication[x]",
        "type" : [
          {
            "code" : "CodeableConcept"
          },
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medication"
            ]
          }
        ]
      },
      {
        "id" : "MedicationAdministration.subject",
        "path" : "MedicationAdministration.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://hl7.org/fhir/StructureDefinition/Group"
            ]
          }
        ]
      },
      {
        "id" : "MedicationAdministration.performer.actor",
        "path" : "MedicationAdministration.performer.actor",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson",
              "http://hl7.org/fhir/StructureDefinition/Device"
            ]
          }
        ]
      },
      {
        "id" : "MedicationAdministration.dosage.route",
        "path" : "MedicationAdministration.dosage.route",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/edqm-routeofadministration"
        }
      },
      {
        "id" : "MedicationAdministration.dosage.method",
        "path" : "MedicationAdministration.dosage.method",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/edqm-administrationmethod"
        }
      },
      {
        "id" : "MedicationAdministration.dosage.dose",
        "path" : "MedicationAdministration.dosage.dose",
        "type" : [
          {
            "code" : "Quantity",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-quantity-with-emed-units"
            ]
          }
        ]
      },
      {
        "id" : "MedicationAdministration.dosage.rate[x]",
        "path" : "MedicationAdministration.dosage.rate[x]",
        "type" : [
          {
            "code" : "Ratio",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-emed-ratio-with-emed-units"
            ]
          },
          {
            "code" : "Quantity",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-quantity-with-emed-units"
            ]
          }
        ]
      }
    ]
  }
}

```
