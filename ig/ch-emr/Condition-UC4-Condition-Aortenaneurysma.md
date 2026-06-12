# UC4-Condition-Aortenaneurysma - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC4-Condition-Aortenaneurysma**

## Example Condition: UC4-Condition-Aortenaneurysma

Profile: [CH IPS Condition](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-condition.html)

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**category**: Problem List Item

**code**: Aortic aneurysm

**subject**: [Beat Frei (official) Male, DoB: 1968-07-22 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756014444444444444)](Patient-UC4-Patient-BeatFrei.md)

**onset**: 2024

**recordedDate**: 2024-01-01

**recorder**: [Practitioner UC4 Hausarzt (official)](Practitioner-UC4-Practitioner-Hausarzt.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "UC4-Condition-Aortenaneurysma",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-condition"]
  },
  "clinicalStatus" : {
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/condition-clinical",
      "code" : "active"
    }]
  },
  "verificationStatus" : {
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/condition-ver-status",
      "code" : "confirmed"
    }]
  },
  "category" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/condition-category",
      "code" : "problem-list-item"
    }]
  }],
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "67362008"
    }]
  },
  "subject" : {
    "reference" : "Patient/UC4-Patient-BeatFrei"
  },
  "onsetDateTime" : "2024",
  "recordedDate" : "2024-01-01",
  "recorder" : {
    "reference" : "Practitioner/UC4-Practitioner-Hausarzt"
  }
}

```
