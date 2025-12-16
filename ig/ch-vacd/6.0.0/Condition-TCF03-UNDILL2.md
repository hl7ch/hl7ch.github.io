# Undergone Illness Chickenpox (Past Illnesses) - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Undergone Illness Chickenpox (Past Illnesses)**

## Example Condition: Undergone Illness Chickenpox (Past Illnesses)

Profile: [CH VACD Past Illness](StructureDefinition-ch-vacd-pastillnesses.md)

> **Entry Resource Cross References**
* entry: Identifier: `urn:oid:2.999.1.2.3.4`/14802b84-6b1d-4545-930d-17ce5ca7443c
* container: Identifier: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:fb253a1b-7e26-48db-a9c8-d605875bcdc4
* relationcode: replaces

**identifier**: `urn:oid:2.999.1.2.3.4`/70cd36a7-5bd5-41fa-bbb9-5e3d10ca43ef

**clinicalStatus**: Resolved

**verificationStatus**: Confirmed

**code**: Varicella (disorder)

**subject**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-TC-patient.md)

**onset**: 2015-05-30

**recordedDate**: 2015-05-30

**recorder**: [PractitionerRole](PractitionerRole-TC-HCP1-ORG1-ROLE-author.md)

**note**: By Practitioner/TC-HCP1-C1 @2017-01-20

> 

Der Patient hatte einen milden Verlauf der Windpockenerkrankung




## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "TCF03-UNDILL2",
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
              "value" : "14802b84-6b1d-4545-930d-17ce5ca7443c"
            }
          }
        },
        {
          "url" : "container",
          "valueReference" : {
            "type" : "Composition",
            "identifier" : {
              "system" : "urn:ietf:rfc:3986",
              "value" : "urn:uuid:fb253a1b-7e26-48db-a9c8-d605875bcdc4"
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
      "value" : "70cd36a7-5bd5-41fa-bbb9-5e3d10ca43ef"
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
    "reference" : "PractitionerRole/TC-HCP1-ORG1-ROLE-author"
  },
  "note" : [
    {
      "authorReference" : {
        "reference" : "Practitioner/TC-HCP1-C1"
      },
      "time" : "2017-01-20",
      "text" : "Der Patient hatte einen milden Verlauf der Windpockenerkrankung"
    }
  ]
}

```
