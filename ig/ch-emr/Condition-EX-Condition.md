# EX-Condition (Type 2 diabetes mellitus) - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EX-Condition (Type 2 diabetes mellitus)**

## Example Condition: EX-Condition (Type 2 diabetes mellitus)

Profile: [CH IPS Condition](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-condition.html)

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**category**: Problem List Item

**severity**: Severe

**code**: Diabetes mellitus type II

**subject**: [Anna Schmidt Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)](Patient-EX-Patient.md)

**onset**: 2010-04-15

**recordedDate**: 2010-04-15

**recorder**: [Practitioner Sarah Huber (official)](Practitioner-EX-Practitioner.md)

**asserter**: [Practitioner Sarah Huber (official)](Practitioner-EX-Practitioner.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "EX-Condition",
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
      "code" : "problem-list-item",
      "display" : "Problem List Item"
    }]
  }],
  "severity" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "24484000"
    }]
  },
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "44054006"
    }]
  },
  "subject" : {
    "reference" : "Patient/EX-Patient"
  },
  "onsetDateTime" : "2010-04-15",
  "recordedDate" : "2010-04-15",
  "recorder" : {
    "reference" : "Practitioner/EX-Practitioner"
  },
  "asserter" : {
    "reference" : "Practitioner/EX-Practitioner"
  }
}

```
