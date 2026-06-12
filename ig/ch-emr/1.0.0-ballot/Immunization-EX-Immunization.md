# EX-Immunization - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EX-Immunization**

## Example Immunization: EX-Immunization

Profile: [CH IPS Immunization](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-immunization.html)

**status**: Completed

**vaccineCode**: Spikevax XBB.1.5 0.10 mg/ml

**patient**: [Anna Schmidt Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)](Patient-EX-Patient.md)

**occurrence**: 2024-09-12 14:15:00+0200

**lotNumber**: SPX24XBB002

### Performers

| | |
| :--- | :--- |
| - | **Actor** |
| * | [Practitioner Sarah Huber (official)](Practitioner-EX-Practitioner.md) |

### ProtocolApplieds

| | | |
| :--- | :--- | :--- |
| - | **TargetDisease** | **DoseNumber[x]** |
| * | Disease caused by 2019 novel coronavirus | 6 |



## Resource Content

```json
{
  "resourceType" : "Immunization",
  "id" : "EX-Immunization",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-immunization"]
  },
  "status" : "completed",
  "vaccineCode" : {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-cs",
      "code" : "69465",
      "display" : "Spikevax XBB.1.5 0.10 mg/ml"
    }]
  },
  "patient" : {
    "reference" : "Patient/EX-Patient"
  },
  "occurrenceDateTime" : "2024-09-12T14:15:00+02:00",
  "lotNumber" : "SPX24XBB002",
  "performer" : [{
    "actor" : {
      "reference" : "Practitioner/EX-Practitioner"
    }
  }],
  "protocolApplied" : [{
    "targetDisease" : [{
      "coding" : [{
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/2011000195101",
        "code" : "840539006"
      }]
    }],
    "doseNumberPositiveInt" : 6
  }]
}

```
