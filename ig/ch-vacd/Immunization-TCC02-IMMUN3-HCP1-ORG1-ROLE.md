# TCC1 Immunization by HCP2 corrected by HCP1 - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TCC1 Immunization by HCP2 corrected by HCP1**

## Example Immunization: TCC1 Immunization by HCP2 corrected by HCP1

Profile: [CH VACD Immunization](StructureDefinition-ch-vacd-immunization.md)

**Author of the content**: [PractitionerRole](PractitionerRole-TC-HCP1-ORG1-ROLE-author.md)

**CH VACD Extension Immunization Medication Reference**: [Medication FSME-IMMUN CC Inj Susp sep Nadel](Medication-TC-IMMUN-MEDIC-FSMEIMMCC.md)

**CH VACD Extension verificationStatus**: [SNOMED CT: 59156000](http://snomed.info/id/59156000) (Confirmed)

> **Entry Resource Cross References**
* entry: Identifier: `urn:oid:2.999.1.2.3.4`/7f7a308a-63f7-4be1-a329-0a33e08b4645
* container: Identifier: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.5.0/NamingSystem-uri.html)/urn:uuid:9686dae0-448c-49f8-9c78-2db1aa95b921
* relationcode: replaces

**identifier**: `urn:oid:2.999.1.2.3.4`/fe53381d-ade3-4a95-8bd1-033b76eadec2

**status**: Completed

**vaccineCode**: FSME-Immun CC

**patient**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-TC-patient.md)

**occurrence**: 2021-07-30

**recorded**: 2021-08-21 00:00:00+0200

**lotNumber**: ABC-7524GHA

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
  "id" : "TCC02-IMMUN3-HCP1-ORG1-ROLE",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
    ]
  },
  "extension" : [
    {
      "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-author",
      "valueReference" : {
        "reference" : "PractitionerRole/TC-HCP1-ORG1-ROLE-author"
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
              "value" : "7f7a308a-63f7-4be1-a329-0a33e08b4645"
            }
          }
        },
        {
          "url" : "container",
          "valueReference" : {
            "type" : "Composition",
            "identifier" : {
              "system" : "urn:ietf:rfc:3986",
              "value" : "urn:uuid:9686dae0-448c-49f8-9c78-2db1aa95b921"
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
      "value" : "fe53381d-ade3-4a95-8bd1-033b76eadec2"
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
  "occurrenceDateTime" : "2021-07-30",
  "recorded" : "2021-08-21T00:00:00.390+02:00",
  "lotNumber" : "ABC-7524GHA",
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
