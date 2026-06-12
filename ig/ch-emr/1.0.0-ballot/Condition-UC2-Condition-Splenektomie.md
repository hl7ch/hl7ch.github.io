# UC2-Condition-Splenektomie - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC2-Condition-Splenektomie**

## Example Condition: UC2-Condition-Splenektomie

Profile: [CH IPS Condition](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-condition.html)

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**category**: Problem List Item

**code**: Status nach Splenektomie (1969)

**subject**: [Walter Schmid (official) Male, DoB: 1947-04-12 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756012222222222222)](Patient-UC2-Patient-WalterSchmid.md)

**onset**: 1969

**recordedDate**: 1969-01-01



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "UC2-Condition-Splenektomie",
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
    "text" : "Status nach Splenektomie (1969)"
  },
  "subject" : {
    "reference" : "Patient/UC2-Patient-WalterSchmid"
  },
  "onsetDateTime" : "1969",
  "recordedDate" : "1969-01-01"
}

```
