# TCF02 AllergyIntolerance 3 - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TCF02 AllergyIntolerance 3**

## Example AllergyIntolerance: TCF02 AllergyIntolerance 3

Profile: [CH VACD AllergyIntolerance](StructureDefinition-ch-vacd-allergyintolerances.md)

**identifier**: `urn:oid:2.999.1.2.3.4`/f93c106e-fb6b-4864-8639-81c0b21b6b08

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**code**: Atopic dermatitis (disorder)

**patient**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-TC-patient.md)

**onset**: 2021-10-06

**recordedDate**: 2021-10-06

**recorder**: [PractitionerRole](PractitionerRole-TC-HCP1-ORG1-ROLE-author.md)

**lastOccurrence**: 2021-10-06

**note**: By Practitioner/TC-HCP1-C1 @2022-01-05

> 

This disorder will only occure if the time between the consumation of an apple and an vaccination is less than 10h




## Resource Content

```json
{
  "resourceType" : "AllergyIntolerance",
  "id" : "TCF02-ALLINTO3",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-allergyintolerances"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "f93c106e-fb6b-4864-8639-81c0b21b6b08"
    }
  ],
  "clinicalStatus" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/allergyintolerance-clinical",
        "code" : "active"
      }
    ]
  },
  "verificationStatus" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/allergyintolerance-verification",
        "code" : "confirmed"
      }
    ]
  },
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "24079001",
        "display" : "Atopic dermatitis (disorder)"
      }
    ]
  },
  "patient" : {
    "reference" : "Patient/TC-patient"
  },
  "onsetDateTime" : "2021-10-06",
  "recordedDate" : "2021-10-06",
  "recorder" : {
    "reference" : "PractitionerRole/TC-HCP1-ORG1-ROLE-author"
  },
  "lastOccurrence" : "2021-10-06",
  "note" : [
    {
      "authorReference" : {
        "reference" : "Practitioner/TC-HCP1-C1"
      },
      "time" : "2022-01-05",
      "text" : "This disorder will only occure if the time between the consumation of an apple and an vaccination is less than 10h"
    }
  ]
}

```
