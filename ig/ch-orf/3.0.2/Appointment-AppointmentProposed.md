# Appointment Proposed - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Appointment Proposed**

## Example Appointment: Appointment Proposed

Profile: [CH ORF Appointment](StructureDefinition-ch-orf-appointment.md)

**status**: Proposed

**patientInstruction**: Patient-oriented instructions

### Participants

| | | |
| :--- | :--- | :--- |
| - | **Actor** | **Status** |
| * | [Location Appointment-Location](Location-LocationOfAppointment.md) | Tentative |

**requestedPeriod**: 2019-04-01 15:00:00+0000 --> 2019-04-01 15:30:00+0000



## Resource Content

```json
{
  "resourceType" : "Appointment",
  "id" : "AppointmentProposed",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-appointment"
    ]
  },
  "status" : "proposed",
  "patientInstruction" : "Patient-oriented instructions",
  "participant" : [
    {
      "actor" : {
        "reference" : "Location/LocationOfAppointment"
      },
      "status" : "tentative"
    }
  ],
  "requestedPeriod" : [
    {
      "start" : "2019-04-01T15:00:00.000+00:00",
      "end" : "2019-04-01T15:30:00.000+00:00"
    }
  ]
}

```
