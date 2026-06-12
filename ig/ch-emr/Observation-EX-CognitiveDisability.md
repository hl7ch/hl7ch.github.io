# EX-CognitiveDisability - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EX-CognitiveDisability**

## Example Observation: EX-CognitiveDisability

Profile: [CH Emergency Record Observation Disability](StructureDefinition-ch-emr-observation-cognitive-disability.md)

**status**: Final

**code**: Dementia

**subject**: [Anna Schmidt Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)](Patient-EX-Patient.md)

**effective**: 2025-10-08

**performer**: [Practitioner Sarah Huber (official)](Practitioner-EX-Practitioner.md)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "EX-CognitiveDisability",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-observation-cognitive-disability"]
  },
  "status" : "final",
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "52448006"
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
