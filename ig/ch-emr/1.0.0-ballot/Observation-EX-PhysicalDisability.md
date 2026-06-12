# EX-PhysicalDisability - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EX-PhysicalDisability**

## Example Observation: EX-PhysicalDisability

Profile: [CH Emergency Record Physical Disability Observation](StructureDefinition-ch-emr-observation-physical-disability.md)

**status**: Final

**code**: Walking disability

**subject**: [Anna Schmidt Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)](Patient-EX-Patient.md)

**effective**: 2025-10-08

**performer**: [Practitioner Sarah Huber (official)](Practitioner-EX-Practitioner.md)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "EX-PhysicalDisability",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-observation-physical-disability"]
  },
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "228158008"
    }]
  },
  "subject" : {
    "reference" : "Patient/EX-Patient"
  },
  "effectiveDateTime" : "2025-10-08",
  "performer" : [{
    "reference" : "Practitioner/EX-Practitioner"
  }]
}

```
