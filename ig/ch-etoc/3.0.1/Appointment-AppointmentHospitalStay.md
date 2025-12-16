# Appointment Hospital Stay - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Appointment Hospital Stay**

## Example Appointment: Appointment Hospital Stay

Profile: [CH ORF Appointment](http://fhir.ch/ig/ch-orf/3.0.2/StructureDefinition-ch-orf-appointment.html)

**status**: Proposed

**patientInstruction**: Wunschtermin der Patientin

### Participants

| | | |
| :--- | :--- | :--- |
| - | **Actor** | **Status** |
| * | [Location Innere Medizin Happy Hospital](Location-LocationHospitalStay.md) | Tentative |

**requestedPeriod**: 2019-04-01 15:00:00+0000 --> 2019-04-01 15:30:00+0000



## Resource Content

```json
{
  "resourceType" : "Appointment",
  "id" : "AppointmentHospitalStay",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-appointment"
    ]
  },
  "status" : "proposed",
  "patientInstruction" : "Wunschtermin der Patientin",
  "participant" : [
    {
      "actor" : {
        "reference" : "Location/LocationHospitalStay"
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
