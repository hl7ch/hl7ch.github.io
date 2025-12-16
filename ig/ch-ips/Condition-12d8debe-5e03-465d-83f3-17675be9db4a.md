# UC 1.2: Heart Attack - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1.2: Heart Attack**

## Example Condition: UC 1.2: Heart Attack

Profile: [CH IPS Condition](StructureDefinition-ch-ips-condition.md)

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**category**: Problem List Item

**severity**: Severe (severity modifier) (qualifier value)

**code**: Myocardial infarction (disorder)

**subject**: [Monika Wegmüller](Bundle-UC1-SwissIpsDocument2.md#urn-uuid-8383926c-ece1-4384-94bc-b4250b4cb71b)

**onset**: 2024-04-26

**recordedDate**: 2024-04-26

**recorder**: [Martina Meier @ Spital](Bundle-UC1-SwissIpsDocument2.md#urn-uuid-869a4dd9-3a4a-4838-ad1e-42453d341147)

**asserter**: [Martina Meier @ Spital](Bundle-UC1-SwissIpsDocument2.md#urn-uuid-869a4dd9-3a4a-4838-ad1e-42453d341147)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "12d8debe-5e03-465d-83f3-17675be9db4a",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-condition"
    ]
  },
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
  "severity" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "24484000",
        "display" : "Severe (severity modifier) (qualifier value)"
      }
    ]
  },
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "22298006",
        "display" : "Myocardial infarction (disorder)"
      }
    ]
  },
  "subject" : {
    "reference" : "urn:uuid:8383926c-ece1-4384-94bc-b4250b4cb71b",
    "type" : "Patient",
    "display" : "Monika Wegmüller"
  },
  "onsetDateTime" : "2024-04-26",
  "recordedDate" : "2024-04-26",
  "recorder" : {
    "reference" : "urn:uuid:869a4dd9-3a4a-4838-ad1e-42453d341147",
    "type" : "PractitionerRole",
    "display" : "Martina Meier @ Spital"
  },
  "asserter" : {
    "reference" : "urn:uuid:869a4dd9-3a4a-4838-ad1e-42453d341147",
    "type" : "PractitionerRole",
    "display" : "Martina Meier @ Spital"
  }
}

```
