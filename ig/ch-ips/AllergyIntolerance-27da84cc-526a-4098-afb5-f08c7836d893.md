# UC 1.2: No Known Allergy - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1.2: No Known Allergy**

## Example AllergyIntolerance: UC 1.2: No Known Allergy

Profile: [CH IPS AllergyIntolerance](StructureDefinition-ch-ips-allergyintolerance.md)

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**code**: No known allergy (situation)

**patient**: [Monika Wegmüller](Bundle-UC1-SwissIpsDocument2.md#urn-uuid-8383926c-ece1-4384-94bc-b4250b4cb71b)

**recordedDate**: 2024-04-26

**recorder**: [Martina Meier @ Spital](Bundle-UC1-SwissIpsDocument2.md#urn-uuid-869a4dd9-3a4a-4838-ad1e-42453d341147)



## Resource Content

```json
{
  "resourceType" : "AllergyIntolerance",
  "id" : "27da84cc-526a-4098-afb5-f08c7836d893",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-allergyintolerance"
    ]
  },
  "clinicalStatus" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/allergyintolerance-clinical",
        "code" : "active",
        "display" : "Active"
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
        "code" : "716186003",
        "display" : "No known allergy (situation)"
      }
    ]
  },
  "patient" : {
    "reference" : "urn:uuid:8383926c-ece1-4384-94bc-b4250b4cb71b",
    "type" : "Patient",
    "display" : "Monika Wegmüller"
  },
  "recordedDate" : "2024-04-26",
  "recorder" : {
    "reference" : "urn:uuid:869a4dd9-3a4a-4838-ad1e-42453d341147",
    "type" : "PractitionerRole",
    "display" : "Martina Meier @ Spital"
  }
}

```
