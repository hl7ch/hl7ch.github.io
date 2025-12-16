# Undergone Illness Chickenpox (Past Illnesses) - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Undergone Illness Chickenpox (Past Illnesses)**

## Example Condition: Undergone Illness Chickenpox (Past Illnesses)

Profile: [CH VACD Past Illness](StructureDefinition-ch-vacd-pastillnesses.md)

**identifier**: `urn:oid:2.999.1.2.3.4`/19ba4bcf-71cb-4777-99d9-300cbe9bb771

**clinicalStatus**: Resolved

**verificationStatus**: Refuted

**code**: Measles (disorder)

**subject**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-TC-patient.md)

**onset**: 2015-07-30

**abatement**: 2021-09-10

**recordedDate**: 2021-09-10

**recorder**: [PractitionerRole](PractitionerRole-TC-HCP1-ORG1-ROLE-author.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "TCC05-UNDILL3",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "19ba4bcf-71cb-4777-99d9-300cbe9bb771"
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
        "code" : "refuted",
        "display" : "Refuted"
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
  "abatementDateTime" : "2021-09-10",
  "recordedDate" : "2021-09-10",
  "recorder" : {
    "reference" : "PractitionerRole/TC-HCP1-ORG1-ROLE-author"
  }
}

```
