# TC1 Immunization by Patient - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TC1 Immunization by Patient**

## Example Immunization: TC1 Immunization by Patient

Profile: [CH VACD Immunization](StructureDefinition-ch-vacd-immunization.md)

**Author of the content**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-TC-patient.md)

**CH VACD Extension Immunization Medication Reference**: [Medication FSME-IMMUN CC Inj Susp sep Nadel](Medication-TC-IMMUN-MEDIC-FSMEIMMCC.md)

**CH VACD Extension verificationStatus**: [SNOMED CT: 59156000](http://snomed.info/id/59156000) (Confirmed)

> **Entry Resource Cross References**
* entry: Identifier: `urn:oid:2.999.1.2.3.4`/74b1e856-c0fb-47da-aab1-08541eacc21c
* container: Identifier: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:c2e1d265-f3fa-4023-92a3-2e9efe1ca192
* relationcode: replaces

**identifier**: `urn:oid:2.999.1.2.3.4`/a2976ff9-0697-457f-9efc-96156a2b3a94

**status**: Completed

**vaccineCode**: FSME-Immun CC

**patient**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-TC-patient.md)

**occurrence**: 2021-09-01

**recorded**: 2021-10-05 00:00:00+0200

**lotNumber**: 12-34244

**route**: Intramuscular use

### Performers

| | |
| :--- | :--- |
| - | **Actor** |
| * | [PractitionerRole](PractitionerRole-TC-HCP2-ORG2-ROLE-performer.md) |

### ProtocolApplieds

| | | |
| :--- | :--- | :--- |
| - | **TargetDisease** | **DoseNumber[x]** |
| * | Tickborne encephalitis | 1 |



## Resource Content

```json
{
  "resourceType" : "Immunization",
  "id" : "TCA04-IMMUN5-patient-val-gfp",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
    ]
  },
  "extension" : [
    {
      "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-author",
      "valueReference" : {
        "reference" : "Patient/TC-patient"
      }
    },
    {
      "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-ext-immunization-medication-reference",
      "valueReference" : {
        "reference" : "Medication/TC-IMMUN-MEDIC-FSMEIMMCC"
      }
    },
    {
      "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-ext-verification-status",
      "valueCoding" : {
        "system" : "http://snomed.info/sct",
        "code" : "59156000",
        "display" : "Confirmed"
      }
    },
    {
      "extension" : [
        {
          "url" : "entry",
          "valueReference" : {
            "type" : "Immunization",
            "identifier" : {
              "system" : "urn:oid:2.999.1.2.3.4",
              "value" : "74b1e856-c0fb-47da-aab1-08541eacc21c"
            }
          }
        },
        {
          "url" : "container",
          "valueReference" : {
            "type" : "Composition",
            "identifier" : {
              "system" : "urn:ietf:rfc:3986",
              "value" : "urn:uuid:c2e1d265-f3fa-4023-92a3-2e9efe1ca192"
            }
          }
        },
        {
          "url" : "relationcode",
          "valueCode" : "replaces"
        }
      ],
      "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-ext-entry-resource-cross-references"
    }
  ],
  "identifier" : [
    {
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "a2976ff9-0697-457f-9efc-96156a2b3a94"
    }
  ],
  "status" : "completed",
  "vaccineCode" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-cs",
        "code" : "450",
        "display" : "FSME-Immun CC"
      }
    ]
  },
  "patient" : {
    "reference" : "Patient/TC-patient"
  },
  "occurrenceDateTime" : "2021-09-01",
  "recorded" : "2021-10-05T00:00:00.390+02:00",
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
        "reference" : "PractitionerRole/TC-HCP2-ORG2-ROLE-performer"
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
              "code" : "712986001",
              "display" : "Tickborne encephalitis"
            }
          ]
        }
      ],
      "doseNumberPositiveInt" : 1
    }
  ]
}

```
