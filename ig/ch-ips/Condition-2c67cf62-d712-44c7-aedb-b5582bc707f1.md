# UC 1.2: Coronary Heart Disease - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1.2: Coronary Heart Disease**

## Example Condition: UC 1.2: Coronary Heart Disease

Profile: [CH IPS Condition](StructureDefinition-ch-ips-condition.md)

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**category**: Problem List Item

**severity**: Moderate (severity modifier) (qualifier value)

**code**: Coronary arteriosclerosis (disorder)

**subject**: [Monika Wegmüller](Bundle-UC1-SwissIpsDocument2.md#urn-uuid-8383926c-ece1-4384-94bc-b4250b4cb71b)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "2c67cf62-d712-44c7-aedb-b5582bc707f1",
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
        "code" : "6736007",
        "display" : "Moderate (severity modifier) (qualifier value)"
      }
    ]
  },
  "code" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "53741008",
        "display" : "Coronary arteriosclerosis (disorder)"
      }
    ]
  },
  "subject" : {
    "reference" : "urn:uuid:8383926c-ece1-4384-94bc-b4250b4cb71b",
    "type" : "Patient",
    "display" : "Monika Wegmüller"
  }
}

```
