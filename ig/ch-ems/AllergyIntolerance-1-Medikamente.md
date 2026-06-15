# 1 Medikamente - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1 Medikamente**

## Example AllergyIntolerance: 1 Medikamente

**clinicalStatus**: Active

**type**: Intolerance

**code**: Arzneimittel oder Medikament

**patient**: [Thomas Müller (official) Male, DoB: 1961-10-01 ( urn:oid:2.16.756.5.32#AHVN13#7562295883070)](Patient-1-ThomasMueller.md)

**encounter**: [Encounter: extension = wallet,Other,wrist watch,Other,Other; identifier = Einsatznummer: S12345678; status = finished; class = emergency (ActCode#EMER); period = 2016-12-10 --> (ongoing)](Encounter-1-Einsatz.md)



## Resource Content

```json
{
  "resourceType" : "AllergyIntolerance",
  "id" : "1-Medikamente",
  "clinicalStatus" : {
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/allergyintolerance-clinical",
      "code" : "active",
      "display" : "Active"
    }]
  },
  "type" : "intolerance",
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "410942007",
      "display" : "Drug or medicament (substance)"
    }],
    "text" : "Arzneimittel oder Medikament"
  },
  "patient" : {
    "reference" : "Patient/1-ThomasMueller"
  },
  "encounter" : {
    "reference" : "Encounter/1-Einsatz"
  }
}

```
