# 8.2 Condition (Medical Problems) - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **8.2 Condition (Medical Problems)**

## Example Condition: 8.2 Condition (Medical Problems)

Profile: [CH VACD Medical Problems](StructureDefinition-ch-vacd-medical-problems.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:6a756da6-f849-4e73-a30a-bcaa8dc13ebd

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**category**: Problem List Item

**code**: Disorder of liver (disorder)

**subject**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-3-1-Patient.md)

**recordedDate**: 2019-04-01 00:00:00+0200

**recorder**: [PractitionerRole](PractitionerRole-6-1-PractitionerRole.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "8-2-Condition",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:6a756da6-f849-4e73-a30a-bcaa8dc13ebd"
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
        "code" : "235856003",
        "display" : "Disorder of liver (disorder)"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/3-1-Patient"
  },
  "recordedDate" : "2019-04-01T00:00:00+02:00",
  "recorder" : {
    "reference" : "PractitionerRole/6-1-PractitionerRole"
  }
}

```
