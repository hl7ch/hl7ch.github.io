# TCB01 AllergyIntolerance - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TCB01 AllergyIntolerance**

## Example AllergyIntolerance: TCB01 AllergyIntolerance

Profile: [CH VACD AllergyIntolerance](StructureDefinition-ch-vacd-allergyintolerances.md)

**identifier**: `urn:oid:2.999.1.2.3.4`/00476f5f-f3b7-4e49-9b52-5ec88d65c18e

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**code**: Adverse reaction to component of vaccine product containing Salmonella enterica subspecies enterica serovar Typhi antigen (disorder)

**patient**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-TC-patient.md)

**onset**: 2021-10-06

**recordedDate**: 2021-10-06

**recorder**: [PractitionerRole](PractitionerRole-TC-HCP1-ORG1-ROLE-author.md)

**lastOccurrence**: 2021-10-06



## Resource Content

```json
{
  "resourceType" : "AllergyIntolerance",
  "id" : "TCB01-ALLINTO1",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-allergyintolerances"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "00476f5f-f3b7-4e49-9b52-5ec88d65c18e"
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
        "code" : "293122006",
        "display" : "Adverse reaction to component of vaccine product containing Salmonella enterica subspecies enterica serovar Typhi antigen (disorder)"
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
  "lastOccurrence" : "2021-10-06"
}

```
