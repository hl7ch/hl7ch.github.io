# 8.8 Condition (Past Illnesses for Recommendation Request/Response) - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **8.8 Condition (Past Illnesses for Recommendation Request/Response)**

## Example Condition: 8.8 Condition (Past Illnesses for Recommendation Request/Response)

Profile: [CH VACD Past Illness](StructureDefinition-ch-vacd-pastillnesses.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:a8831ab5-37f5-4273-a127-4c5da6daa5ed

**clinicalStatus**: Resolved

**verificationStatus**: Confirmed

**code**: Measles (disorder)

**subject**: [Monika Wegmueller Female, DoB: 1967-03-10 ( Medical record number)](Patient-3-2-Patient.md)

**onset**: 1966-11-30 00:00:00+0100

**recordedDate**: 1999-04-01 00:00:00+0200

**recorder**: [PractitionerRole](PractitionerRole-6-4-PractitionerRole.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "8-8-Condition",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:a8831ab5-37f5-4273-a127-4c5da6daa5ed"
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
    "reference" : "Patient/3-2-Patient"
  },
  "onsetDateTime" : "1966-11-30T00:00:00+01:00",
  "recordedDate" : "1999-04-01T00:00:00+02:00",
  "recorder" : {
    "reference" : "PractitionerRole/6-4-PractitionerRole"
  }
}

```
