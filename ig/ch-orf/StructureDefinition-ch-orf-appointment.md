# CH ORF Appointment - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ORF Appointment**

## Resource Profile: CH ORF Appointment 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-appointment | *Version*:3.0.2 |
| Active as of 2025-12-16 | *Computable Name*:ChOrfAppointment |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile to describe the location and time for the fulfillment of the service request. In this resource, the status of the appointment is defined, patient-oriented instructions are listed here and where and when the service request is to be fulfilled. 

**Usages:**

* Use this Profile: [CH ORF Document](StructureDefinition-ch-orf-document.md)
* Refer to this Profile: [CH ORF Location and Time](StructureDefinition-ch-orf-locationandtime.md)
* Examples for this Profile: [Appointment/AppointmentBooked](Appointment-AppointmentBooked.md), [Appointment/AppointmentPending](Appointment-AppointmentPending.md) and [Appointment/AppointmentProposed](Appointment-AppointmentProposed.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-orf|current/StructureDefinition/ch-orf-appointment)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-orf-appointment.csv), [Excel](StructureDefinition-ch-orf-appointment.xlsx), [Schematron](StructureDefinition-ch-orf-appointment.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-orf-appointment",
  "url" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-appointment",
  "version" : "3.0.2",
  "name" : "ChOrfAppointment",
  "title" : "CH ORF Appointment",
  "status" : "active",
  "date" : "2025-12-16T09:36:47+00:00",
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
  "description" : "Profile to describe the location and time for the fulfillment of the service request.\nIn this resource, the status of the appointment is defined, patient-oriented instructions are listed here \nand where and when the service request is to be fulfilled.",
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
        "short" : "CH ORF Appointment"
      },
      {
        "id" : "Appointment.identifier",
        "path" : "Appointment.identifier",
        "short" : "External identifier for this item: May be used for referencing to a record in a scheduling application. Status in the scheduling application may \n  change in time whereas Appointment.status reflects the status at the time the appointment is initiated.",
        "mustSupport" : true
      },
      {
        "id" : "Appointment.status",
        "path" : "Appointment.status",
        "short" : "Used to express if time and date are the preference of the patient (=\"proposed\"), confirmed by the patient but not yet by the service provider \n  (=\"pending\") or confirmed by the patient and the service provider (=\"booked\")",
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-orf/ValueSet/ch-orf-vs-appointmentstatus"
        }
      },
      {
        "id" : "Appointment.start",
        "path" : "Appointment.start",
        "short" : "When appointment is to take place (required if status=\"pending\" or \"booked\")",
        "mustSupport" : true
      },
      {
        "id" : "Appointment.end",
        "path" : "Appointment.end",
        "short" : "When appointment is to conclude (required if status=\"pending\" or \"booked\")",
        "mustSupport" : true
      },
      {
        "id" : "Appointment.patientInstruction",
        "path" : "Appointment.patientInstruction",
        "short" : "Patient-oriented instructions SHALL be here and NOT in ServiceRequest.patientInstruction",
        "mustSupport" : true
      },
      {
        "id" : "Appointment.participant",
        "path" : "Appointment.participant",
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Appointment.participant.actor",
        "path" : "Appointment.participant.actor",
        "short" : "Name, address and telecom of the appointment location",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-location"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Appointment.participant.status",
        "path" : "Appointment.participant.status",
        "patternCode" : "tentative",
        "mustSupport" : true
      },
      {
        "id" : "Appointment.requestedPeriod",
        "path" : "Appointment.requestedPeriod",
        "short" : "Single Date/time or Date/time-interval indication for the appointment with the status=\"proposed\". A single Date/time indication MUST have \n the same value for start and end.",
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Appointment.requestedPeriod.start",
        "path" : "Appointment.requestedPeriod.start",
        "mustSupport" : true
      },
      {
        "id" : "Appointment.requestedPeriod.end",
        "path" : "Appointment.requestedPeriod.end",
        "mustSupport" : true
      }
    ]
  }
}

```
