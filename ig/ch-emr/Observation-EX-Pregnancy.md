# EX-Pregnancy - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EX-Pregnancy**

## Example Observation: EX-Pregnancy

Profile: [Observation Pregnancy - Status (IPS)](http://hl7.org/fhir/uv/ips/STU2/StructureDefinition-Observation-pregnancy-status-uv-ips.html)

**status**: Final

**category**: Social History

**code**: Pregnancy status

**subject**: [Anna Schmidt Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)](Patient-EX-Patient.md)

**effective**: 2025-09-10 10:00:00+0200

**performer**: [Practitioner Sarah Huber (official)](Practitioner-EX-Practitioner.md)

**value**: true



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "EX-Pregnancy",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/uv/ips/StructureDefinition/Observation-pregnancy-status-uv-ips"]
  },
  "status" : "final",
  "category" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
      "code" : "social-history"
    }]
  }],
  "code" : {
    "coding" : [{
      "system" : "http://loinc.org",
      "code" : "82810-3"
    }]
  },
  "subject" : {
    "reference" : "Patient/EX-Patient"
  },
  "effectiveDateTime" : "2025-09-10T10:00:00+02:00",
  "performer" : [{
    "reference" : "Practitioner/EX-Practitioner"
  }],
  "valueBoolean" : true
}

```
