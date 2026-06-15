# 1 Teammitglied Pierre Urgentiste - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1 Teammitglied Pierre Urgentiste**

## Example Practitioner: 1 Teammitglied Pierre Urgentiste



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "1-TeamMemberPierreUrgentiste",
  "identifier" : [{
    "system" : "urn:oid:2.51.1.3",
    "value" : "7601000028105",
    "assigner" : {
      "reference" : "Organization/1-TeamRettungsdienst"
    }
  }],
  "name" : [{
    "family" : "Urgentiste",
    "given" : ["Pierre"]
  }],
  "qualification" : [{
    "code" : {
      "coding" : [{
        "system" : "http://snomed.info/sct",
        "code" : "309294001",
        "display" : "Emergency department physician (occupation)"
      }],
      "text" : "Notarzt/Notärztin SGNOR"
    }
  }]
}

```
