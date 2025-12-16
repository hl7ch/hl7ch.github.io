# UC 3: Next Examination 10.03.2025 - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 3: Next Examination 10.03.2025**

## Example Appointment: UC 3: Next Examination 10.03.2025

Language: de-CH

**status**: Booked

**start**: 2025-03-10 14:30:00+0100

**end**: 2025-03-10 15:00:00+0100

> **participant****actor**:[Sophie Doppelherz Female, DoB: 1992-07-22 ( Medical record number)](Patient-UC3-SophieDoppelherz.md)**required**: Required**status**: Accepted

> **participant****actor**:[PractitionerRole Arzt/Ärztin](PractitionerRole-UC3-ClaudiaFruehblickAtFrauenzimmer.md)**required**: Required**status**: Accepted



## Resource Content

```json
{
  "resourceType" : "Appointment",
  "id" : "UC3-Appointment20250310",
  "language" : "de-CH",
  "status" : "booked",
  "start" : "2025-03-10T14:30:00+01:00",
  "end" : "2025-03-10T15:00:00+01:00",
  "participant" : [
    {
      "actor" : {
        "reference" : "Patient/UC3-SophieDoppelherz"
      },
      "required" : "required",
      "status" : "accepted"
    },
    {
      "actor" : {
        "reference" : "PractitionerRole/UC3-ClaudiaFruehblickAtFrauenzimmer"
      },
      "required" : "required",
      "status" : "accepted"
    }
  ]
}

```
