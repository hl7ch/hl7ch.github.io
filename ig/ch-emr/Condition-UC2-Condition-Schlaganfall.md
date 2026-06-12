# UC2-Condition-Schlaganfall - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC2-Condition-Schlaganfall**

## Example Condition: UC2-Condition-Schlaganfall

Profile: [CH IPS Condition](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-condition.html)

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**category**: Problem List Item

**code**: CVA - Cerebrovascular accident

**subject**: [Walter Schmid (official) Male, DoB: 1947-04-12 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756012222222222222)](Patient-UC2-Patient-WalterSchmid.md)

**onset**: 2023

**recordedDate**: 2023-01-01

**recorder**: [Practitioner UC2 Hausarzt (official)](Practitioner-UC2-Practitioner-Hausarzt.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "UC2-Condition-Schlaganfall",
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
      "code" : "230690007"
    }]
  },
  "subject" : {
    "reference" : "Patient/UC2-Patient-WalterSchmid"
  },
  "onsetDateTime" : "2023",
  "recordedDate" : "2023-01-01",
  "recorder" : {
    "reference" : "Practitioner/UC2-Practitioner-Hausarzt"
  }
}

```
