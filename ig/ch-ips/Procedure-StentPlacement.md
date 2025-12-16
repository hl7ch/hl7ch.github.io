# UC 1.2: Stent Placement - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1.2: Stent Placement**

## Example Procedure: UC 1.2: Stent Placement

Profile: [Procedure (IPS)](http://hl7.org/fhir/uv/ips/STU2/StructureDefinition-Procedure-uv-ips.html)

**status**: Completed

**code**: Placement of stent in coronary artery (procedure)

**subject**: [Monika Wegmüller Female, DoB: 1943-05-15](Patient-MonikaWegmueller.md)

**performed**: 2022-09-27

**reasonCode**: Koronare Herzkrankheit

**reasonReference**: [Condition Coronary arteriosclerosis (disorder)](Condition-CoronaryHeartDisease.md)



## Resource Content

```json
{
  "resourceType" : "Procedure",
  "id" : "StentPlacement",
  "meta" : {
    "profile" : [
      "http://hl7.org/fhir/uv/ips/StructureDefinition/Procedure-uv-ips"
    ]
  },
  "status" : "completed",
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "36969009",
        "display" : "Placement of stent in coronary artery (procedure)"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/MonikaWegmueller"
  },
  "performedDateTime" : "2022-09-27",
  "reasonCode" : [
    {
      "text" : "Koronare Herzkrankheit"
    }
  ],
  "reasonReference" : [
    {
      "reference" : "Condition/CoronaryHeartDisease"
    }
  ]
}

```
