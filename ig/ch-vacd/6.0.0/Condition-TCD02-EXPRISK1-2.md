# Exposition Risk Worker in Healthcare (Condition) - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Exposition Risk Worker in Healthcare (Condition)**

## Example Condition: Exposition Risk Worker in Healthcare (Condition)

Profile: [CH VACD Medical Problems](StructureDefinition-ch-vacd-medical-problems.md)

> **CH VACD Extension Merging Conflict Entry Reference**
* entry: [Condition Healthcare professional (occupation)](Condition-TCB03-EXPRISK1-2.md)
* conflict: duplicate

**identifier**: `urn:oid:2.999.1.2.3.4`/08cdc406-9a12-4370-8a2a-811039792b13

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**category**: Problem List Item

**code**: Healthcare professional (occupation)

**subject**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-TC-patient.md)

**onset**: 2021-10-01

**recordedDate**: 2021-10-20

**recorder**: [PractitionerRole](PractitionerRole-TC-HCP2-ORG2-ROLE-author.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "TCD02-EXPRISK1-2",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
    ]
  },
  "extension" : [
    {
      "extension" : [
        {
          "url" : "entry",
          "valueReference" : {
            "reference" : "Condition/TCB03-EXPRISK1-2"
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
      "value" : "08cdc406-9a12-4370-8a2a-811039792b13"
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
        "code" : "223366009",
        "display" : "Healthcare professional (occupation)"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/TC-patient"
  },
  "onsetDateTime" : "2021-10-01",
  "recordedDate" : "2021-10-20",
  "recorder" : {
    "reference" : "PractitionerRole/TC-HCP2-ORG2-ROLE-author"
  }
}

```
