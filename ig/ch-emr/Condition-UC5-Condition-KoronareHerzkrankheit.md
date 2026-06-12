# UC5-Condition-KoronareHerzkrankheit - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC5-Condition-KoronareHerzkrankheit**

## Example Condition: UC5-Condition-KoronareHerzkrankheit

Profile: [CH IPS Condition](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-condition.html)

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**category**: Problem List Item

**code**: Chronic ischemic heart disease (disorder)

**subject**: [Anna Meier (official) Female, DoB: 1972-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015555555555555)](Patient-UC5-Patient-AnnaMeier.md)

**onset**: 2018

**recordedDate**: 2018-01-01

**recorder**: [Practitioner UC5 Hausarzt (official)](Practitioner-UC5-Practitioner-Hausarzt.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "UC5-Condition-KoronareHerzkrankheit",
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
      "code" : "413838009"
    }]
  },
  "subject" : {
    "reference" : "Patient/UC5-Patient-AnnaMeier"
  },
  "onsetDateTime" : "2018",
  "recordedDate" : "2018-01-01",
  "recorder" : {
    "reference" : "Practitioner/UC5-Practitioner-Hausarzt"
  }
}

```
