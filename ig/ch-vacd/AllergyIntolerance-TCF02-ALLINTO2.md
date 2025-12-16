# TCF02 AllergyIntolerance 2 - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TCF02 AllergyIntolerance 2**

## Example AllergyIntolerance: TCF02 AllergyIntolerance 2

Profile: [CH VACD AllergyIntolerance](StructureDefinition-ch-vacd-allergyintolerances.md)

> **Entry Resource Cross References**
* entry: Identifier: `urn:oid:2.999.1.2.3.4`/cbc8c8c1-4f47-4ec3-99a7-ae775b75c621
* container: Identifier: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:98dbfa14-1b2e-40f8-8110-932c631db1df
* relationcode: replaces

**identifier**: `urn:oid:2.999.1.2.3.4`/e6e14c17-b468-4ecb-a4d7-8dfd5ddb36d8

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
  "id" : "TCF02-ALLINTO2",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-allergyintolerances"
    ]
  },
  "extension" : [
    {
      "extension" : [
        {
          "url" : "entry",
          "valueReference" : {
            "type" : "AllergyIntolerance",
            "identifier" : {
              "system" : "urn:oid:2.999.1.2.3.4",
              "value" : "cbc8c8c1-4f47-4ec3-99a7-ae775b75c621"
            }
          }
        },
        {
          "url" : "container",
          "valueReference" : {
            "type" : "Composition",
            "identifier" : {
              "system" : "urn:ietf:rfc:3986",
              "value" : "urn:uuid:98dbfa14-1b2e-40f8-8110-932c631db1df"
            }
          }
        },
        {
          "url" : "relationcode",
          "valueCode" : "replaces"
        }
      ],
      "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-ext-entry-resource-cross-references"
    }
  ],
  "identifier" : [
    {
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "e6e14c17-b468-4ecb-a4d7-8dfd5ddb36d8"
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
