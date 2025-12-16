# ExAllergyIntolerance - CH AllergyIntolerance (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ExAllergyIntolerance**

## Example AllergyIntolerance: ExAllergyIntolerance

Profile: [CH AllergyIntolerance](StructureDefinition-ch-allergyintolerance.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.2.0/NamingSystem-uri.html)/urn:uuid:0028b459-11f0-4d8a-8d37-5276f88ddb06

**clinicalStatus**: Active

**code**: Allergy to egg protein (finding)

**patient**: [Elisabeth Brönnimann-Bertholet Female, DoB: 1937-05-03](Patient-ElisabethBroennimannByBFH.md)

**recordedDate**: 2004-07-11 00:00:00+0200

**recorder**: [PractitionerRole](PractitionerRole-FamilienHausarztAtHausarzt.md)



## Resource Content

```json
{
  "resourceType" : "AllergyIntolerance",
  "id" : "ExAllergy",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-allergyintolerance/StructureDefinition/ch-allergyintolerance"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:0028b459-11f0-4d8a-8d37-5276f88ddb06"
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
    "reference" : "Patient/ElisabethBroennimannByBFH"
  },
  "recordedDate" : "2004-07-11T00:00:00+02:00",
  "recorder" : {
    "reference" : "PractitionerRole/FamilienHausarztAtHausarzt"
  }
}

```
