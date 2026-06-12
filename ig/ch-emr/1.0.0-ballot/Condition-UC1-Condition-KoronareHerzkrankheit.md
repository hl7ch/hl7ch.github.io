# UC1-Condition-KoronareHerzkrankheit - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC1-Condition-KoronareHerzkrankheit**

## Example Condition: UC1-Condition-KoronareHerzkrankheit

Profile: [CH IPS Condition](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-condition.html)

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**category**: Problem List Item

**code**: Coronary arteriosclerosis

**subject**: [Max Muster (official) Male, DoB: 1964-01-01 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756011234567890123)](Patient-UC1-Patient-MusterMax.md)

**onset**: 2015

**recordedDate**: 2015-01-01

**recorder**: [Practitioner UC1 Hausarzt (official)](Practitioner-UC1-Practitioner-Hausarzt.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "UC1-Condition-KoronareHerzkrankheit",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-condition"]
  },
  "clinicalStatus" : {
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/condition-clinical",
      "code" : "active"
    }]
  },
  "verificationStatus" : {
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/condition-ver-status",
      "code" : "confirmed"
    }]
  },
  "category" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/condition-category",
      "code" : "problem-list-item"
    }]
  }],
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "53741008"
    }]
  },
  "subject" : {
    "reference" : "Patient/UC1-Patient-MusterMax"
  },
  "onsetDateTime" : "2015",
  "recordedDate" : "2015-01-01",
  "recorder" : {
    "reference" : "Practitioner/UC1-Practitioner-Hausarzt"
  }
}

```
