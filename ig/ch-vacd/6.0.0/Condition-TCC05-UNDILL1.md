# Undergone Illness Chickenpox (Past Illnesses) - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Undergone Illness Chickenpox (Past Illnesses)**

## Example Condition: Undergone Illness Chickenpox (Past Illnesses)

Profile: [CH VACD Past Illness](StructureDefinition-ch-vacd-pastillnesses.md)

**identifier**: `urn:oid:2.999.1.2.3.4`/b594b7fb-4fb1-466d-b7bc-66216338a727

**clinicalStatus**: Resolved

**verificationStatus**: Unconfirmed

**code**: Measles (disorder)

**subject**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-TC-patient.md)

**onset**: 2015-07-30

**recordedDate**: 2015-07-30

**recorder**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-TC-patient.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "TCC05-UNDILL1",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "b594b7fb-4fb1-466d-b7bc-66216338a727"
    }
  ],
  "clinicalStatus" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/condition-clinical",
        "code" : "resolved",
        "display" : "Resolved"
      }
    ]
  },
  "verificationStatus" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/condition-ver-status",
        "code" : "unconfirmed",
        "display" : "Unconfirmed"
      }
    ]
  },
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "14189004",
        "display" : "Measles (disorder)"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/TC-patient"
  },
  "onsetDateTime" : "2015-07-30",
  "recordedDate" : "2015-07-30",
  "recorder" : {
    "reference" : "Patient/TC-patient"
  }
}

```
