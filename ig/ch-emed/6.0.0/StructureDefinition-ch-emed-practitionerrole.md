# CH EMED PractitionerRole - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED PractitionerRole**

## Resource Profile: CH EMED PractitionerRole 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-practitionerrole | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDPractitionerRole |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the practitioner role for the eMedication context 

**Usages:**

* Refer to this Profile: [CH EMED Medication Card Composition](StructureDefinition-ch-emed-composition-medicationcard.md), [CH EMED Medication Dispense Composition](StructureDefinition-ch-emed-composition-medicationdispense.md), [CH EMED Medication Prescription Composition](StructureDefinition-ch-emed-composition-medicationprescription.md), [CH EMED Medication Treatment Plan Composition](StructureDefinition-ch-emed-composition-medicationtreatmentplan.md)...Show 6 more,[CH EMED Pharmaceutical Advice Composition](StructureDefinition-ch-emed-composition-pharmaceuticaladvice.md),[CH EMED MedicationAdministration (DIS)](StructureDefinition-ch-emed-medicationadministration.md),[CH EMED MedicationDispense (DIS)](StructureDefinition-ch-emed-medicationdispense.md),[CH EMED MedicationRequest (PRE)](StructureDefinition-ch-emed-medicationrequest.md),[CH EMED MedicationStatement](StructureDefinition-ch-emed-medicationstatement.md)and[CH EMED Observation (PADV)](StructureDefinition-ch-emed-observation.md)
* Examples for this Profile: [PractitionerRole/FamilienHausarztAtHausarzt](PractitionerRole-FamilienHausarztAtHausarzt.md) and [PractitionerRole/PriskaHuberAtRettungsdienst](PractitionerRole-PriskaHuberAtRettungsdienst.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-practitionerrole)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-practitionerrole.csv), [Excel](StructureDefinition-ch-emed-practitionerrole.xlsx), [Schematron](StructureDefinition-ch-emed-practitionerrole.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-practitionerrole",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-practitionerrole",
  "version" : "6.0.0",
  "name" : "CHEMEDPractitionerRole",
  "title" : "CH EMED PractitionerRole",
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
  "description" : "Definition of the practitioner role for the eMedication context",
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
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "PractitionerRole",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole-epr",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "PractitionerRole",
        "path" : "PractitionerRole",
        "short" : "CH EMED PractitionerRole"
      },
      {
        "id" : "PractitionerRole.practitioner",
        "path" : "PractitionerRole.practitioner",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-practitioner"
            ]
          }
        ]
      },
      {
        "id" : "PractitionerRole.practitioner.reference",
        "path" : "PractitionerRole.practitioner.reference",
        "min" : 1
      },
      {
        "id" : "PractitionerRole.organization",
        "path" : "PractitionerRole.organization",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-organization"
            ]
          }
        ]
      },
      {
        "id" : "PractitionerRole.organization.reference",
        "path" : "PractitionerRole.organization.reference",
        "min" : 1
      }
    ]
  }
}

```
