# Undergone Illness Chickenpox (Past Illnesses) - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Undergone Illness Chickenpox (Past Illnesses)**

## Example Condition: Undergone Illness Chickenpox (Past Illnesses)

Profile: [CH VACD Past Illness](StructureDefinition-ch-vacd-pastillnesses.md)

**identifier**: `urn:oid:2.999.1.2.3.4`/5f727b7b-87ae-464f-85ac-1a45d23f0897

**clinicalStatus**: Resolved

**verificationStatus**: Confirmed

**code**: Varicella

**subject**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-TC-patient.md)

**onset**: 2015-05-30

**recordedDate**: 2015-05-30

**recorder**: [PractitionerRole](PractitionerRole-TC-HCP1-ORG1-ROLE-author.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "TCE01-UNDILL1-de",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "5f727b7b-87ae-464f-85ac-1a45d23f0897"
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
        "code" : "confirmed",
        "display" : "Confirmed"
      }
    ]
  },
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "38907003",
        "display" : "Varicella"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/TC-patient"
  },
  "onsetDateTime" : "2015-05-30",
  "recordedDate" : "2015-05-30",
  "recorder" : {
    "reference" : "PractitionerRole/TC-HCP1-ORG1-ROLE-author"
  }
}

```
