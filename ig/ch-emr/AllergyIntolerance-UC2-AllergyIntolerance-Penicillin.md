# UC2-AllergyIntolerance-Penicillin - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC2-AllergyIntolerance-Penicillin**

## Example AllergyIntolerance: UC2-AllergyIntolerance-Penicillin

Profile: [CH IPS AllergyIntolerance](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-allergyintolerance.html)

**clinicalStatus**: Active

**verificationStatus**: Confirmed

**type**: Allergy

**category**: Medication

**criticality**: High Risk

**code**: Penicillin

**patient**: [Walter Schmid (official) Male, DoB: 1947-04-12 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756012222222222222)](Patient-UC2-Patient-WalterSchmid.md)

### Reactions

| | | |
| :--- | :--- | :--- |
| - | **Manifestation** | **Severity** |
| * | Atemnot | Severe |



## Resource Content

```json
{
  "resourceType" : "AllergyIntolerance",
  "id" : "UC2-AllergyIntolerance-Penicillin",
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
      "code" : "764146007"
    }]
  },
  "patient" : {
    "reference" : "Patient/UC2-Patient-WalterSchmid"
  },
  "reaction" : [{
    "manifestation" : [{
      "coding" : [{
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/2011000195101",
        "code" : "267036007"
      }],
      "text" : "Atemnot"
    }],
    "severity" : "severe"
  }]
}

```
