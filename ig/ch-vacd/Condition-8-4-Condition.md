# 8.4 Condition (Past Illnesses) - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **8.4 Condition (Past Illnesses)**

## Example Condition: 8.4 Condition (Past Illnesses)

Profile: [CH VACD Past Illness](StructureDefinition-ch-vacd-pastillnesses.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:86c0e015-c13a-43d6-9dc0-a23ca957aa41

**clinicalStatus**: Resolved

**verificationStatus**: Confirmed

**code**: Measles (disorder)

**subject**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-3-1-Patient.md)

**onset**: 1966-11-30 00:00:00+0100

**recordedDate**: 1999-04-01 00:00:00+0200

**recorder**: [PractitionerRole](PractitionerRole-6-1-PractitionerRole.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "8-4-Condition",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:86c0e015-c13a-43d6-9dc0-a23ca957aa41"
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
        "code" : "14189004",
        "display" : "Measles (disorder)"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/3-1-Patient"
  },
  "onsetDateTime" : "1966-11-30T00:00:00+01:00",
  "recordedDate" : "1999-04-01T00:00:00+02:00",
  "recorder" : {
    "reference" : "PractitionerRole/6-1-PractitionerRole"
  }
}

```
