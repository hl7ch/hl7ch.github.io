# 7.6 Immunization - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **7.6 Immunization**

## Example Immunization: 7.6 Immunization

Profile: [CH VACD Immunization](StructureDefinition-ch-vacd-immunization.md)

**Author of the content**: [PractitionerRole](PractitionerRole-6-3-PractitionerRole.md)

**CH VACD Extension verificationStatus**: [SNOMED CT: 59156000](http://snomed.info/id/59156000) (Confirmed)

**identifier**: `urn:oid:2.999.1.2.3.4`/12312

**status**: Completed

**statusReason**: Patient objection

**vaccineCode**: HBVAXPRO 40

**patient**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-3-1-Patient.md)

**occurrence**: 2012-02-26 00:00:00+0100

**recorded**: 2012-02-26 00:00:00+0100

**lotNumber**: 12-34244

**route**: Intramuscular use

### Performers

| | |
| :--- | :--- |
| - | **Actor** |
| * | [PractitionerRole](PractitionerRole-6-3-PractitionerRole.md) |

### ProtocolApplieds

| | | |
| :--- | :--- | :--- |
| - | **TargetDisease** | **DoseNumber[x]** |
| * | Viral hepatitis type B (disorder) | 1 |



## Resource Content

```json
{
  "resourceType" : "Immunization",
  "id" : "7-6-Immunization",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
    ]
  },
  "extension" : [
    {
      "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-author",
      "valueReference" : {
        "reference" : "PractitionerRole/6-3-PractitionerRole"
      }
    },
    {
      "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-ext-verification-status",
      "valueCoding" : {
        "system" : "http://snomed.info/sct",
        "code" : "59156000",
        "display" : "Confirmed"
      }
    }
  ],
  "identifier" : [
    {
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "12312"
    }
  ],
  "status" : "completed",
  "statusReason" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/v3-ActReason",
        "code" : "PATOBJ",
        "display" : "Patient objection"
      }
    ]
  },
  "vaccineCode" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-cs",
        "code" : "545",
        "display" : "HBVAXPRO 40"
      }
    ]
  },
  "patient" : {
    "reference" : "Patient/3-1-Patient"
  },
  "occurrenceDateTime" : "2012-02-26T00:00:00+01:00",
  "recorded" : "2012-02-26T00:00:00+01:00",
  "lotNumber" : "12-34244",
  "route" : {
    "coding" : [
      {
        "system" : "http://standardterms.edqm.eu",
        "code" : "20035000",
        "display" : "Intramuscular use"
      }
    ]
  },
  "performer" : [
    {
      "actor" : {
        "reference" : "PractitionerRole/6-3-PractitionerRole"
      }
    }
  ],
  "protocolApplied" : [
    {
      "targetDisease" : [
        {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "66071002",
              "display" : "Viral hepatitis type B (disorder)"
            }
          ]
        }
      ],
      "doseNumberPositiveInt" : 1
    }
  ]
}

```
