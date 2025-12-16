# 11.4 AllergyIntolerance (Recommendation Request/Response) - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **11.4 AllergyIntolerance (Recommendation Request/Response)**

## Example AllergyIntolerance: 11.4 AllergyIntolerance (Recommendation Request/Response)

Profile: [CH VACD AllergyIntolerance](StructureDefinition-ch-vacd-allergyintolerances.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:36b26038-a43e-4319-9c2e-0fdad5b8f06e

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**code**: Atopic dermatitis (disorder)

**patient**: [Monika Wegmueller Female, DoB: 1967-03-10 ( Medical record number)](Patient-3-2-Patient.md)

**recordedDate**: 1996-07-11 00:00:00+0200

**recorder**: [PractitionerRole](PractitionerRole-6-4-PractitionerRole.md)



## Resource Content

```json
{
  "resourceType" : "AllergyIntolerance",
  "id" : "11-4-AllergyIntolerance",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-allergyintolerances"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:36b26038-a43e-4319-9c2e-0fdad5b8f06e"
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
    "reference" : "Patient/3-2-Patient"
  },
  "recordedDate" : "1996-07-11T00:00:00+02:00",
  "recorder" : {
    "reference" : "PractitionerRole/6-4-PractitionerRole"
  }
}

```
