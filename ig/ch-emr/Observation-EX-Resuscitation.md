# EX-Resuscitation - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EX-Resuscitation**

## Example Observation: EX-Resuscitation

Profile: [CH Emergency Record Observation Resuscitation Status](StructureDefinition-ch-emr-observation-resuscitation-status.md)

**status**: Final

**code**: Resuscitation status

**subject**: [Anna Schmidt Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)](Patient-EX-Patient.md)

**effective**: 2025-10-08

**performer**: [Practitioner Sarah Huber (official)](Practitioner-EX-Practitioner.md)

**value**: For cardiopulmonary resuscitation

**derivedFrom**: [DocumentReference: status = current; type = Advance directive; category = Advance directive report; date = 2024-01-15 14:30:00+0100; description = Patientenverfügung im Schlafzimmer](DocumentReference-EX-AdvanceDirective.md)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "EX-Resuscitation",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-observation-resuscitation-status"]
  },
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "304251008"
    }]
  },
  "subject" : {
    "reference" : "Patient/EX-Patient"
  },
  "effectiveDateTime" : "2025-10-08",
  "performer" : [{
    "reference" : "Practitioner/EX-Practitioner"
  }],
  "valueCodeableConcept" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "450475007"
    }]
  },
  "derivedFrom" : [{
    "reference" : "DocumentReference/EX-AdvanceDirective"
  }]
}

```
