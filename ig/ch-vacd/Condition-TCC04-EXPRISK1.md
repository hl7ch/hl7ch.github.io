# Exposition Risk "Bat researcher or guard" (Condition) - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Exposition Risk "Bat researcher or guard" (Condition)**

## Example Condition: Exposition Risk "Bat researcher or guard" (Condition)

Profile: [CH VACD Medical Problems](StructureDefinition-ch-vacd-medical-problems.md)

**identifier**: `urn:oid:2.999.1.2.3.4`/dc168f1f-967c-4ff2-95ef-f8c468d67b45

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**category**: Problem List Item

**code**: Animal health occupation (occupation)

**subject**: [Lea Knecht Female, DoB: 1992-05-14 ( Medical record number)](Patient-TC-patient2.md)

**onset**: 2021-08-20

**recordedDate**: 2021-08-20

**recorder**: [PractitionerRole](PractitionerRole-TC-HCP1-ORG1-ROLE-author.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "TCC04-EXPRISK1",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "dc168f1f-967c-4ff2-95ef-f8c468d67b45"
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
        "code" : "265940000",
        "display" : "Animal health occupation (occupation)"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/TC-patient2"
  },
  "onsetDateTime" : "2021-08-20",
  "recordedDate" : "2021-08-20",
  "recorder" : {
    "reference" : "PractitionerRole/TC-HCP1-ORG1-ROLE-author"
  }
}

```
