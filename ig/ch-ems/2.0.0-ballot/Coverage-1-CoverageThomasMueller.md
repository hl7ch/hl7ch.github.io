# 1 Coverage Thomas Müller - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1 Coverage Thomas Müller**

## Example Coverage: 1 Coverage Thomas Müller



## Resource Content

```json
{
  "resourceType" : "Coverage",
  "id" : "1-CoverageThomasMueller",
  "contained" : [{
    "resourceType" : "Organization",
    "id" : "kpt",
    "name" : "KPT"
  }],
  "identifier" : [{
    "system" : "urn:oid:2.16.756.5.30.1.123.100.1.1.1",
    "value" : "80756003760012390001"
  }],
  "status" : "active",
  "beneficiary" : {
    "reference" : "Patient/1-ThomasMueller"
  },
  "payor" : [{
    "reference" : "#kpt"
  }]
}

```
