# 11.3 AllergyIntolerance (Recommendation Request/Response) - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **11.3 AllergyIntolerance (Recommendation Request/Response)**

## Example AllergyIntolerance: 11.3 AllergyIntolerance (Recommendation Request/Response)

Profile: [CH VACD AllergyIntolerance](StructureDefinition-ch-vacd-allergyintolerances.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:c6ebe781-e4b3-451e-82cf-ee68aa61904d

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**code**: Allergy to egg protein (finding)

**patient**: [Monika Wegmueller Female, DoB: 1967-03-10 ( Medical record number)](Patient-3-2-Patient.md)

**recordedDate**: 2004-07-11 00:00:00+0200

**recorder**: [PractitionerRole](PractitionerRole-6-4-PractitionerRole.md)



## Resource Content

```json
{
  "resourceType" : "AllergyIntolerance",
  "id" : "11-3-AllergyIntolerance",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-allergyintolerances"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:c6ebe781-e4b3-451e-82cf-ee68aa61904d"
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
        "code" : "213020009",
        "display" : "Allergy to egg protein (finding)"
      }
    ]
  },
  "patient" : {
    "reference" : "Patient/3-2-Patient"
  },
  "recordedDate" : "2004-07-11T00:00:00+02:00",
  "recorder" : {
    "reference" : "PractitionerRole/6-4-PractitionerRole"
  }
}

```
