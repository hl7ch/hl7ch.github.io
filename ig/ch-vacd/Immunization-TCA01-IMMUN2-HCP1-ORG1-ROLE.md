# TC1 Immunization by HCP1 - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TC1 Immunization by HCP1**

## Example Immunization: TC1 Immunization by HCP1

Profile: [CH VACD Immunization](StructureDefinition-ch-vacd-immunization.md)

**Author of the content**: [PractitionerRole](PractitionerRole-TC-HCP1-ORG1-ROLE-author.md)

**CH VACD Extension verificationStatus**: [SNOMED CT: 59156000](http://snomed.info/id/59156000) (Confirmed)

**identifier**: `urn:oid:2.999.1.2.3.4`/11853642-8ff4-45ae-af98-44c58b3bf0b7

**status**: Completed

**vaccineCode**: Boostrix

**patient**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-TC-patient.md)

**occurrence**: 2021-06-15

**recorded**: 2021-06-20 00:00:00+0200

**lotNumber**: 14-34218

**route**: Intramuscular use

### Performers

| | |
| :--- | :--- |
| - | **Actor** |
| * | [PractitionerRole](PractitionerRole-TC-HCP1-ORG1-ROLE-performer.md) |

**note**: By Practitioner/TC-HCP1-C1 @2021-06-20

> 

Der Patient hatte an mehreren nachfolgenden Tagen eine sehr empfindliche und leicht gerötete Haut rund um die Einstichstelle.


> **protocolApplied****targetDisease**:Diphtheria caused by Corynebacterium diphtheriae (disorder),Tetanus (disorder),Pertussis (disorder)**doseNumber**: 1



## Resource Content

```json
{
  "resourceType" : "Immunization",
  "id" : "TCA01-IMMUN2-HCP1-ORG1-ROLE",
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
      "value" : "11853642-8ff4-45ae-af98-44c58b3bf0b7"
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
    "reference" : "Patient/TC-patient"
  },
  "occurrenceDateTime" : "2021-06-15",
  "recorded" : "2021-06-20T00:00:00.390+02:00",
  "lotNumber" : "14-34218",
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
  "note" : [
    {
      "authorReference" : {
        "reference" : "Practitioner/TC-HCP1-C1"
      },
      "time" : "2021-06-20",
      "text" : "Der Patient hatte an mehreren nachfolgenden Tagen eine sehr empfindliche und leicht gerötete Haut rund um die Einstichstelle."
    }
  ],
  "protocolApplied" : [
    {
      "targetDisease" : [
        {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "397430003",
              "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)"
            }
          ]
        },
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
        }
      ],
      "doseNumberPositiveInt" : 1
    }
  ]
}

```
