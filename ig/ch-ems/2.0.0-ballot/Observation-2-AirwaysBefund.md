# 2 Airways Befund - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **2 Airways Befund**

## Example Observation: 2 Airways Befund



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "2-AirwaysBefund",
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "301252002",
      "display" : "Finding of respiratory obstruction (finding)"
    }]
  },
  "subject" : {
    "reference" : "Patient/2-PatientUnbekannt"
  },
  "encounter" : {
    "reference" : "Encounter/2-Einsatz"
  },
  "effectiveDateTime" : "2016-12-10T12:25:00.000+01:00",
  "valueCodeableConcept" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "23875004",
      "display" : "No pathologic diagnosis (finding)"
    }],
    "text" : "Atemwege frei"
  }
}

```
