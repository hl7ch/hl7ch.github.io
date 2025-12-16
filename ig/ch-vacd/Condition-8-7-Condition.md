# 8.7 Condition (Medical Problems for Recommendation Request/Response) - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **8.7 Condition (Medical Problems for Recommendation Request/Response)**

## Example Condition: 8.7 Condition (Medical Problems for Recommendation Request/Response)

Profile: [CH VACD Medical Problems](StructureDefinition-ch-vacd-medical-problems.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:36d1ebae-564e-4c2a-8af6-c1224c3d9e77

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**category**: Problem List Item

**code**: Animal health occupation (occupation)

**subject**: [Monika Wegmueller Female, DoB: 1967-03-10 ( Medical record number)](Patient-3-2-Patient.md)

**recordedDate**: 2009-04-01 00:00:00+0200

**recorder**: [PractitionerRole](PractitionerRole-6-4-PractitionerRole.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "8-7-Condition",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:36d1ebae-564e-4c2a-8af6-c1224c3d9e77"
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
    "reference" : "Patient/3-2-Patient"
  },
  "recordedDate" : "2009-04-01T00:00:00+02:00",
  "recorder" : {
    "reference" : "PractitionerRole/6-4-PractitionerRole"
  }
}

```
