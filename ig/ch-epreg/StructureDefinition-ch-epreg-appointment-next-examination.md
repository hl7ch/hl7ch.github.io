# CH EPREG Appointment: Next Examination - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPREG Appointment: Next Examination**

## Resource Profile: CH EPREG Appointment: Next Examination 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-appointment-next-examination | *Version*:1.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChEpregAppointmentNextExamination |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Appointment resource to represent the date of the planned next pregnancy examination. 

**Usages:**

* Refer to this Profile: [CH EPREG Composition](StructureDefinition-ch-epreg-composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epreg|current/StructureDefinition/ch-epreg-appointment-next-examination)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-epreg-appointment-next-examination.csv), [Excel](StructureDefinition-ch-epreg-appointment-next-examination.xlsx), [Schematron](StructureDefinition-ch-epreg-appointment-next-examination.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-epreg-appointment-next-examination",
  "url" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-appointment-next-examination",
  "version" : "1.0.0",
  "name" : "ChEpregAppointmentNextExamination",
  "title" : "CH EPREG Appointment: Next Examination",
  "status" : "active",
  "date" : "2025-12-16T12:22:20+00:00",
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
    }
  ],
  "description" : "This profile constrains the Appointment resource to represent the date of the planned next pregnancy examination.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CHE"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "concept-pregnancy-passport",
      "uri" : "https://www.e-health-suisse.ch/upload/documents/eSchwangerschaftspass_Konzept_de.pdf",
      "name" : "Concept Pregnancy Passport",
      "comment" : "This mapping illustrates the relationship between the CH EPREG profile and the concept of the pregnancy passport."
    },
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
      "identity" : "ical",
      "uri" : "http://ietf.org/rfc/2445",
      "name" : "iCalendar"
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
  "type" : "Appointment",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Appointment",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Appointment",
        "path" : "Appointment",
        "short" : "CH EPREG Appointment: Next Examination",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Nächste Kontrolle | Prochain contrôle"
          }
        ]
      },
      {
        "id" : "Appointment.status",
        "path" : "Appointment.status",
        "patternCode" : "booked"
      },
      {
        "id" : "Appointment.start",
        "path" : "Appointment.start",
        "min" : 1
      },
      {
        "id" : "Appointment.end",
        "path" : "Appointment.end",
        "min" : 1
      },
      {
        "id" : "Appointment.participant",
        "path" : "Appointment.participant",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "actor.resolve()"
            }
          ],
          "rules" : "open"
        },
        "min" : 2
      },
      {
        "id" : "Appointment.participant:patient",
        "path" : "Appointment.participant",
        "sliceName" : "patient",
        "min" : 1,
        "max" : "1",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Schwangere Person | Personne enceinte"
          }
        ]
      },
      {
        "id" : "Appointment.participant:patient.actor",
        "path" : "Appointment.participant.actor",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-patient-mother"
            ]
          }
        ]
      },
      {
        "id" : "Appointment.participant:patient.required",
        "path" : "Appointment.participant.required",
        "min" : 1,
        "patternCode" : "required"
      },
      {
        "id" : "Appointment.participant:patient.status",
        "path" : "Appointment.participant.status",
        "patternCode" : "accepted"
      },
      {
        "id" : "Appointment.participant:treatingHealthcareProvider",
        "path" : "Appointment.participant",
        "sliceName" : "treatingHealthcareProvider",
        "min" : 1,
        "max" : "1",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Behandelnder Leistungserbringender | Fournisseur de prestations"
          }
        ]
      },
      {
        "id" : "Appointment.participant:treatingHealthcareProvider.actor",
        "path" : "Appointment.participant.actor",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-practitionerrole-thcp"
            ]
          }
        ]
      },
      {
        "id" : "Appointment.participant:treatingHealthcareProvider.required",
        "path" : "Appointment.participant.required",
        "min" : 1,
        "patternCode" : "required"
      },
      {
        "id" : "Appointment.participant:treatingHealthcareProvider.status",
        "path" : "Appointment.participant.status",
        "patternCode" : "accepted"
      }
    ]
  }
}

```
