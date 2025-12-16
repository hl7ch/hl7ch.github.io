# Undergone Illness Chickenpox (Past Illnesses) - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Undergone Illness Chickenpox (Past Illnesses)**

## Example Condition: Undergone Illness Chickenpox (Past Illnesses)

Profile: [CH VACD Past Illness](StructureDefinition-ch-vacd-pastillnesses.md)

> **CH VACD Extension Merging Conflict Entry Reference**
* entry: [Condition Varicella (disorder)](Condition-TCB02-UNDILL1-2.md)
* conflict: duplicate

**identifier**: `urn:oid:2.999.1.2.3.4`/e82fe9ba-40f5-4d3d-beb4-51853b90e980

**clinicalStatus**: Resolved

**verificationStatus**: Confirmed

**code**: Varicella (disorder)

**subject**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-TC-patient.md)

**onset**: 2015-05-30

**recordedDate**: 2015-05-30

**recorder**: [PractitionerRole](PractitionerRole-TC-HCP2-ORG2-ROLE-author.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "TCD02-UNDILL1-2",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses"
    ]
  },
  "extension" : [
    {
      "extension" : [
        {
          "url" : "entry",
          "valueReference" : {
            "reference" : "Condition/TCB02-UNDILL1-2"
          }
        },
        {
          "url" : "conflict",
          "valueCode" : "duplicate"
        }
      ],
      "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-ext-merging-conflict-entry-reference"
    }
  ],
  "identifier" : [
    {
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "e82fe9ba-40f5-4d3d-beb4-51853b90e980"
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
        "display" : "Varicella (disorder)"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/TC-patient"
  },
  "onsetDateTime" : "2015-05-30",
  "recordedDate" : "2015-05-30",
  "recorder" : {
    "reference" : "PractitionerRole/TC-HCP2-ORG2-ROLE-author"
  }
}

```
