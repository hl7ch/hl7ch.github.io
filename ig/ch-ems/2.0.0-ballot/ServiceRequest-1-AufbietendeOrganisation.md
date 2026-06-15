# 1 Aufbietende Organisation - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1 Aufbietende Organisation**

## Example ServiceRequest: 1 Aufbietende Organisation



## Resource Content

```json
{
  "resourceType" : "ServiceRequest",
  "id" : "1-AufbietendeOrganisation",
  "contained" : [{
    "resourceType" : "Organization",
    "id" : "1-requesting",
    "identifier" : [{
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601002156370"
    }],
    "name" : "SNZ"
  }],
  "status" : "completed",
  "intent" : "order",
  "subject" : {
    "reference" : "Patient/1-ThomasMueller"
  },
  "encounter" : {
    "reference" : "Encounter/1-Einsatz"
  },
  "requester" : {
    "reference" : "#1-requesting"
  },
  "insurance" : [{
    "reference" : "Coverage/1-CoverageThomasMueller"
  }]
}

```
