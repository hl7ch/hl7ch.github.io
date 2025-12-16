# Claim Inpatient Treatment Psychiatry - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Claim Inpatient Treatment Psychiatry**

## Example Claim: Claim Inpatient Treatment Psychiatry

Profile: [CH Core Claim](StructureDefinition-ch-core-claim.md)

**Biller**: [Organization Biller AG](Organization-ClaimBiller.md)

**identifier**: `http://example.com/claim-identifier`/1511421400

**status**: Active

**type**: stationär

**use**: Claim

**patient**: [Peter Muster Male, DoB: 1964-05-14 ( urn:oid:2.16.756.5.32#7562295883070)](Patient-ClaimPatient.md)

**created**: 2017-11-24

**provider**: [Organization Klinik für Psychiatrie](Organization-ClaimProvider.md)

**priority**: Normal

> **supportingInfo****sequence**: 1**category**:Patient Reason for Visit**code**:Disease

> **supportingInfo****sequence**: 1**category**:Information**value**: Lorem ipsum per nostra mi fune torectum mikonstra.diloru si limus mer fin per od per nostra mi fune torectum mi konstradiloru si limus mer fin itorectum mi konstradiloruko.

### Diagnoses

| | | |
| :--- | :--- | :--- |
| - | **Sequence** | **Diagnosis[x]** |
| * | 1 | Sonstige Schizophrenie |

### Insurances

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Sequence** | **Focal** | **Coverage** |
| * | 1 | true | [Coverage: status = active](Coverage-ClaimCoverage.md) |

### Items

| | | | | | | |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| - | **Extension** | **Sequence** | **Category** | **ProductOrService** | **Serviced[x]** | **Quantity** |
| * |  | 1 | TARPSY | Schizophrene oder akut psychotische Störungen, Alter > 17 Jahre mit komplizierender somatischer Nebendiagnose | 2017-10-27 --> 2017-11-23 | 1 |



## Resource Content

```json
{
  "resourceType" : "Claim",
  "id" : "ClaimInpatientTreatmentPsychiatry",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-claim"
    ]
  },
  "extension" : [
    {
      "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-biller",
      "valueReference" : {
        "reference" : "Organization/ClaimBiller"
      }
    }
  ],
  "identifier" : [
    {
      "system" : "http://example.com/claim-identifier",
      "value" : "1511421400"
    }
  ],
  "status" : "active",
  "type" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-20-encounterclass",
        "code" : "3",
        "display" : "stationär"
      }
    ]
  },
  "use" : "claim",
  "patient" : {
    "reference" : "Patient/ClaimPatient"
  },
  "created" : "2017-11-24",
  "provider" : {
    "reference" : "Organization/ClaimProvider"
  },
  "priority" : {
    "coding" : [
      {
        "system" : "http://terminology.hl7.org/CodeSystem/processpriority",
        "code" : "normal",
        "display" : "Normal"
      }
    ]
  },
  "supportingInfo" : [
    {
      "sequence" : 1,
      "category" : {
        "coding" : [
          {
            "system" : "http://terminology.hl7.org/CodeSystem/claiminformationcategory",
            "code" : "patientreasonforvisit",
            "display" : "Patient Reason for Visit"
          }
        ]
      },
      "code" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "64572001",
            "display" : "Disease"
          }
        ]
      }
    },
    {
      "sequence" : 1,
      "category" : {
        "coding" : [
          {
            "system" : "http://terminology.hl7.org/CodeSystem/claiminformationcategory",
            "code" : "info",
            "display" : "Information"
          }
        ]
      },
      "valueString" : "Lorem ipsum per nostra mi fune torectum mikonstra.diloru si limus mer fin per od per nostra mi fune torectum mi konstradiloru si limus mer fin itorectum mi konstradiloruko."
    }
  ],
  "diagnosis" : [
    {
      "sequence" : 1,
      "diagnosisCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://fhir.de/CodeSystem/bfarm/icd-10-gm",
            "code" : "J18.9"
          }
        ],
        "text" : "Sonstige Schizophrenie"
      }
    }
  ],
  "insurance" : [
    {
      "sequence" : 1,
      "focal" : true,
      "coverage" : {
        "reference" : "Coverage/ClaimCoverage"
      }
    }
  ],
  "item" : [
    {
      "extension" : [
        {
          "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-responsible",
          "valueReference" : {
            "identifier" : {
              "system" : "urn:oid:2.51.1.3",
              "value" : "7634567890333"
            }
          }
        }
      ],
      "sequence" : 1,
      "category" : {
        "coding" : [
          {
            "system" : "http://forum-datenaustausch.ch/tariff",
            "code" : "030",
            "display" : "TARPSY"
          }
        ]
      },
      "productOrService" : {
        "coding" : [
          {
            "system" : "http://forum-datenaustausch.ch/tariff/030",
            "code" : "TP25B",
            "display" : "Schizophrene oder akut psychotische Störungen, Alter > 17 Jahre mit komplizierender somatischer Nebendiagnose"
          }
        ]
      },
      "servicedPeriod" : {
        "start" : "2017-10-27",
        "end" : "2017-11-23"
      },
      "quantity" : {
        "value" : 1
      }
    }
  ]
}

```
