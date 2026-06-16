# Appointment Orthopedic Pre-Surgery Consultation - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Appointment Orthopedic Pre-Surgery Consultation**

## Example Appointment: Appointment Orthopedic Pre-Surgery Consultation

**status**: Fulfilled

**description**: Pre-operative orthopedic consultation prior to ACL reconstruction surgery

**start**: 2026-01-08 09:00:00+0100

**end**: 2026-01-08 09:30:00+0100

> **participant****type**: subject**status**: Accepted

> **participant****actor**: [http://registry.example.org/fhir/HealthcareService/HealthcareServiceOrthopedicsFulfiller](http://registry.example.org/fhir/HealthcareService/HealthcareServiceOrthopedicsFulfiller)**status**: Accepted



## Resource Content

```json
{
  "resourceType" : "Appointment",
  "id" : "AppointmentOrthopedicConsultation",
  "status" : "fulfilled",
  "description" : "Pre-operative orthopedic consultation prior to ACL reconstruction surgery",
  "start" : "2026-01-08T09:00:00+01:00",
  "end" : "2026-01-08T09:30:00+01:00",
  "participant" : [{
    "type" : [{
      "coding" : [{
        "system" : "http://terminology.hl7.org/CodeSystem/v3-ParticipationType",
        "code" : "SBJ",
        "display" : "subject"
      }]
    }],
    "status" : "accepted"
  },
  {
    "actor" : {
      "reference" : "http://registry.example.org/fhir/HealthcareService/HealthcareServiceOrthopedicsFulfiller"
    },
    "status" : "accepted"
  }]
}

```
