# UC 1.2: Stent Placement - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1.2: Stent Placement**

## Example Procedure: UC 1.2: Stent Placement

Profile: [Procedure (IPS)](http://hl7.org/fhir/uv/ips/STU2/StructureDefinition-Procedure-uv-ips.html)

**status**: Completed

**code**: Placement of stent in coronary artery (procedure)

**subject**: [Monika Wegmüller](Bundle-UC1-SwissIpsDocument2.md#urn-uuid-8383926c-ece1-4384-94bc-b4250b4cb71b)

**performed**: 2022-09-27

**reasonCode**: Koronare Herzkrankheit

**reasonReference**: [Koronare Herzkrankheit](Bundle-UC1-SwissIpsDocument2.md#urn-uuid-2c67cf62-d712-44c7-aedb-b5582bc707f1)



## Resource Content

```json
{
  "resourceType" : "Procedure",
  "id" : "ad3ec07d-1814-4faf-86fd-1a8ebeecb5fe",
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
    "reference" : "urn:uuid:8383926c-ece1-4384-94bc-b4250b4cb71b",
    "type" : "Patient",
    "display" : "Monika Wegmüller"
  },
  "performedDateTime" : "2022-09-27",
  "reasonCode" : [
    {
      "text" : "Koronare Herzkrankheit"
    }
  ],
  "reasonReference" : [
    {
      "reference" : "urn:uuid:2c67cf62-d712-44c7-aedb-b5582bc707f1",
      "type" : "Condition",
      "display" : "Koronare Herzkrankheit"
    }
  ]
}

```
