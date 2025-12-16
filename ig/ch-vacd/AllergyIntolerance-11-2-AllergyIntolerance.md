# 11.2 AllergyIntolerance - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **11.2 AllergyIntolerance**

## Example AllergyIntolerance: 11.2 AllergyIntolerance

Profile: [CH VACD AllergyIntolerance](StructureDefinition-ch-vacd-allergyintolerances.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:0000b855-e2fa-4c0e-a3f4-53c1f6747328

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**code**: Atopic dermatitis (disorder)

**patient**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-3-1-Patient.md)

**recordedDate**: 1996-07-11 00:00:00+0200

**recorder**: [PractitionerRole](PractitionerRole-6-1-PractitionerRole.md)



## Resource Content

```json
{
  "resourceType" : "AllergyIntolerance",
  "id" : "11-2-AllergyIntolerance",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-allergyintolerances"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:0000b855-e2fa-4c0e-a3f4-53c1f6747328"
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
        "code" : "confirmed",
        "display" : "Confirmed"
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
    "reference" : "Patient/3-1-Patient"
  },
  "recordedDate" : "1996-07-11T00:00:00+02:00",
  "recorder" : {
    "reference" : "PractitionerRole/6-1-PractitionerRole"
  }
}

```
