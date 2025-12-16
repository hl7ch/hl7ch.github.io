# Medical Risk Pregnancy (Condition) - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medical Risk Pregnancy (Condition)**

## Example Condition: Medical Risk Pregnancy (Condition)

Language: en-US

Profile: [CH VACD Medical Problems](StructureDefinition-ch-vacd-medical-problems.md)

**identifier**: `urn:oid:2.999.1.2.3.4`/b086cf43-f863-4530-853c-f6a721175931

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**category**: Problem List Item

**code**: Pregnancy (finding)

**subject**: [Lea Knecht Female, DoB: 1992-05-14 ( Medical record number)](Patient-TC-patient2.md)

**onset**: 2021-11-30

**recordedDate**: 2021-03-10

**recorder**: [PractitionerRole](PractitionerRole-TC-HCP1-ORG1-ROLE-author.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "TCB05-EXPRISK2",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
    ]
  },
  "language" : "en-US",
  "identifier" : [
    {
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "b086cf43-f863-4530-853c-f6a721175931"
    }
  ],
  "clinicalStatus" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/condition-clinical",
        "code" : "active",
        "display" : "Active"
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
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/condition-category",
          "code" : "problem-list-item",
          "display" : "Problem List Item"
        }
      ]
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "77386006",
        "display" : "Pregnancy (finding)"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/TC-patient2"
  },
  "onsetDateTime" : "2021-11-30",
  "recordedDate" : "2021-03-10",
  "recorder" : {
    "reference" : "PractitionerRole/TC-HCP1-ORG1-ROLE-author"
  }
}

```
