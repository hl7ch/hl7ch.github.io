# Appointment Booked - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Appointment Booked**

## Example Appointment: Appointment Booked

Profile: [CH ORF Appointment](StructureDefinition-ch-orf-appointment.md)

**status**: Booked

**start**: 2019-04-01 12:00:00+0000

**end**: 2019-04-01 12:30:00+0000

**patientInstruction**: Patient-oriented instructions

### Participants

| | | |
| :--- | :--- | :--- |
| - | **Actor** | **Status** |
| * | [Location Appointment-Location](Location-LocationOfAppointment.md) | Tentative |



## Resource Content

```json
{
  "resourceType" : "Appointment",
  "id" : "AppointmentBooked",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-appointment"
    ]
  },
  "status" : "booked",
  "start" : "2019-04-01T12:00:00.000+00:00",
  "end" : "2019-04-01T12:30:00.000+00:00",
  "patientInstruction" : "Patient-oriented instructions",
  "participant" : [
    {
      "actor" : {
        "reference" : "Location/LocationOfAppointment"
      },
      "status" : "tentative"
    }
  ]
}

```
