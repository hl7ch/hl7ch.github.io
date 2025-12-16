# Undergone Illness Chickenpox (Past Illnesses) - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Undergone Illness Chickenpox (Past Illnesses)**

## Example Condition: Undergone Illness Chickenpox (Past Illnesses)

Profile: [CH VACD Past Illness](StructureDefinition-ch-vacd-pastillnesses.md)

> **Entry Resource Cross References**
* entry: Identifier: `urn:oid:2.999.1.2.3.4`/b594b7fb-4fb1-466d-b7bc-66216338a727
* container: Identifier: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:73d0abee-843e-437f-9f52-aeeff8ba758d
* relationcode: replaces

**identifier**: `urn:oid:2.999.1.2.3.4`/f9b92bd3-e9d7-4604-9a8a-723b1f7a5292

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
  "id" : "TCC05-UNDILL2",
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
            "type" : "Condition",
            "identifier" : {
              "system" : "urn:oid:2.999.1.2.3.4",
              "value" : "b594b7fb-4fb1-466d-b7bc-66216338a727"
            }
          }
        },
        {
          "url" : "container",
          "valueReference" : {
            "type" : "Composition",
            "identifier" : {
              "system" : "urn:ietf:rfc:3986",
              "value" : "urn:uuid:73d0abee-843e-437f-9f52-aeeff8ba758d"
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
      "value" : "f9b92bd3-e9d7-4604-9a8a-723b1f7a5292"
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
