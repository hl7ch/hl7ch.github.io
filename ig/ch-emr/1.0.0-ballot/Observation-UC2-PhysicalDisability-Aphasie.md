# UC2-PhysicalDisability-Aphasie - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC2-PhysicalDisability-Aphasie**

## Example Observation: UC2-PhysicalDisability-Aphasie

Profile: [CH Emergency Record Physical Disability Observation](StructureDefinition-ch-emr-observation-physical-disability.md)

**status**: Final

**category**: Exam

**code**: Aphasie

**subject**: [Walter Schmid (official) Male, DoB: 1947-04-12 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756012222222222222)](Patient-UC2-Patient-WalterSchmid.md)

**effective**: 2023-03-01



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "UC2-PhysicalDisability-Aphasie",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-observation-physical-disability"]
  },
  "status" : "final",
  "category" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
      "code" : "exam"
    }]
  }],
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "87486003"
    }],
    "text" : "Aphasie"
  },
  "subject" : {
    "reference" : "Patient/UC2-Patient-WalterSchmid"
  },
  "effectiveDateTime" : "2023-03-01"
}

```
