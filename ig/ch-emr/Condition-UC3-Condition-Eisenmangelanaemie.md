# UC3-Condition-Eisenmangelanaemie - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC3-Condition-Eisenmangelanaemie**

## Example Condition: UC3-Condition-Eisenmangelanaemie

Profile: [CH IPS Condition](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-condition.html)

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**category**: Problem List Item

**code**: Iron deficiency anemia

**subject**: [Lara Keller (official) Female, DoB: 1992-09-30 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756013333333333333)](Patient-UC3-Patient-LaraKeller.md)

**onset**: 2024

**recordedDate**: 2024-01-01

**recorder**: [Practitioner UC3 Hausarzt (official)](Practitioner-UC3-Practitioner-Hausarzt.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "UC3-Condition-Eisenmangelanaemie",
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
      "code" : "87522002"
    }]
  },
  "subject" : {
    "reference" : "Patient/UC3-Patient-LaraKeller"
  },
  "onsetDateTime" : "2024",
  "recordedDate" : "2024-01-01",
  "recorder" : {
    "reference" : "Practitioner/UC3-Practitioner-Hausarzt"
  }
}

```
