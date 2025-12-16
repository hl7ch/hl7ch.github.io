# TC1 Immunization by HCP1 - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TC1 Immunization by HCP1**

## Example Immunization: TC1 Immunization by HCP1

Profile: [CH VACD Immunization](StructureDefinition-ch-vacd-immunization.md)

**Author of the content**: [PractitionerRole](PractitionerRole-TC-HCP1-ORG1-ROLE-author.md)

**CH VACD Extension Immunization Medication Reference**: [Medication BOOSTRIX Inj Susp](Medication-TC-IMMUN-MEDIC-BOOSTRIX.md)

**CH VACD Extension verificationStatus**: [SNOMED CT: 59156000](http://snomed.info/id/59156000) (Confirmed)

**identifier**: `urn:oid:2.999.1.2.3.4`/urn:uuid:ebcf6de2-ed9c-463c-8b08-cb487af8ce4e

**status**: Completed

**vaccineCode**: Boostrix

**patient**: [Lea Knecht Female, DoB: 1992-05-14 ( Medical record number)](Patient-TC-patient2.md)

**occurrence**: 2020-12-09

**recorded**: 2020-12-09 11:00:00+0200

**lotNumber**: AHAVB946A

**route**: Intramuscular use

### Performers

| | |
| :--- | :--- |
| - | **Actor** |
| * | [PractitionerRole](PractitionerRole-TC-HCP1-ORG1-ROLE-performer.md) |

> **protocolApplied****targetDisease**:Tetanus (disorder),Pertussis (disorder),Diphtheria caused by Corynebacterium diphtheriae (disorder)**doseNumber**: 1



## Resource Content

```json
{
  "resourceType" : "Immunization",
  "id" : "TCB05-IMMUN2",
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
        "reference" : "Medication/TC-IMMUN-MEDIC-BOOSTRIX"
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
      "value" : "urn:uuid:ebcf6de2-ed9c-463c-8b08-cb487af8ce4e"
    }
  ],
  "status" : "completed",
  "vaccineCode" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-cs",
        "code" : "637",
        "display" : "Boostrix"
      }
    ]
  },
  "patient" : {
    "reference" : "Patient/TC-patient2"
  },
  "occurrenceDateTime" : "2020-12-09",
  "recorded" : "2020-12-09T11:00:00.390+02:00",
  "lotNumber" : "AHAVB946A",
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
        "reference" : "PractitionerRole/TC-HCP1-ORG1-ROLE-performer"
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
              "code" : "76902006",
              "display" : "Tetanus (disorder)"
            }
          ]
        },
        {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "27836007",
              "display" : "Pertussis (disorder)"
            }
          ]
        },
        {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)"
            }
          ]
        }
      ],
      "doseNumberPositiveInt" : 1
    }
  ]
}

```
