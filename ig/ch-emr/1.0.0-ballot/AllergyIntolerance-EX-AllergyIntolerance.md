# EX-AllergyIntolerance (Allergy to contrast media) - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EX-AllergyIntolerance (Allergy to contrast media)**

## Example AllergyIntolerance: EX-AllergyIntolerance (Allergy to contrast media)

Profile: [CH IPS AllergyIntolerance](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-allergyintolerance.html)

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**type**: Allergy

**category**: Medication

**criticality**: High Risk

**code**: Contrast media allergy

**patient**: [Anna Schmidt Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)](Patient-EX-Patient.md)

**onset**: 2018-05-20

**recordedDate**: 2025-01-15

**recorder**: [Practitioner Sarah Huber (official)](Practitioner-EX-Practitioner.md)

**asserter**: [Anna Schmidt Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)](Patient-EX-Patient.md)

> **reaction****substance**: Contrast media allergy**manifestation**: Eruption, Itching of skin (finding), Pressure in chest**severity**: Moderate**note**: 
> 

Hautausschlag mit Juckreiz und leichte Atembeschwerden. Behandlung mit Antihistaminika und Kortison erfolgreich.





## Resource Content

```json
{
  "resourceType" : "AllergyIntolerance",
  "id" : "EX-AllergyIntolerance",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-allergyintolerance"]
  },
  "clinicalStatus" : {
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/allergyintolerance-clinical",
      "code" : "active"
    }]
  },
  "verificationStatus" : {
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/allergyintolerance-verification",
      "code" : "confirmed"
    }]
  },
  "type" : "allergy",
  "category" : ["medication"],
  "criticality" : "high",
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "293637006"
    }]
  },
  "patient" : {
    "reference" : "Patient/EX-Patient"
  },
  "onsetDateTime" : "2018-05-20",
  "recordedDate" : "2025-01-15",
  "recorder" : {
    "reference" : "Practitioner/EX-Practitioner"
  },
  "asserter" : {
    "reference" : "Patient/EX-Patient"
  },
  "reaction" : [{
    "substance" : {
      "coding" : [{
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/2011000195101",
        "code" : "293637006"
      }]
    },
    "manifestation" : [{
      "coding" : [{
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/2011000195101",
        "code" : "271807003"
      }]
    },
    {
      "coding" : [{
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/2011000195101",
        "code" : "418363000"
      }]
    },
    {
      "coding" : [{
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/2011000195101",
        "code" : "23924001"
      }]
    }],
    "severity" : "moderate",
    "note" : [{
      "text" : "Hautausschlag mit Juckreiz und leichte Atembeschwerden. Behandlung mit Antihistaminika und Kortison erfolgreich."
    }]
  }]
}

```
