# Exposition Risk Worker in Healthcare (Condition) - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Exposition Risk Worker in Healthcare (Condition)**

## Example Condition: Exposition Risk Worker in Healthcare (Condition)

Language: de-CH

Profile: [CH VACD Medical Problems](StructureDefinition-ch-vacd-medical-problems.md)

**identifier**: `urn:oid:2.999.1.2.3.4`/85b0d0dc-200b-4f8c-9583-900802e88783

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**category**: Problem List Item

**code**: Beschäftigt im Veterinärwesen

**subject**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-TC-patient.md)

**onset**: 2021-10-01

**recordedDate**: 2021-10-20

**recorder**: [PractitionerRole](PractitionerRole-TC-HCP1-ORG1-ROLE-author.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "TCD03-EXPRISK1",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
    ]
  },
  "language" : "de-CH",
  "identifier" : [
    {
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "85b0d0dc-200b-4f8c-9583-900802e88783"
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
        "display" : "Beschäftigt im Veterinärwesen"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/TC-patient"
  },
  "onsetDateTime" : "2021-10-01",
  "recordedDate" : "2021-10-20",
  "recorder" : {
    "reference" : "PractitionerRole/TC-HCP1-ORG1-ROLE-author"
  }
}

```
