# 55Doc - Tollwut - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **55Doc - Tollwut**

## Example Bundle: 55Doc - Tollwut

**Document Details**

**Document Subject**

Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)

-------

-------

**Document Content**

## Analyseergebnisse der mikrobiologischen Untersuchung

-------

## Additional Resources Included in Document

-------

Entry 2 - fullUrl = urn:uuid:0360d9a5-93ab-44e0-9daf-a09e56de106b

Resource Patient:

> Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 3 - fullUrl = urn:uuid:72474f52-7c66-46da-a738-623a01d8fdfb

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:bd1b7cde-fe97-4140-96f1-d3f9fcd13ff7

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Rabies virus neutralizing antibody [Presence] in Serum by Neutralization test**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-55Doc-Tollwut.md#urn-uuid-0360d9a5-93ab-44e0-9daf-a09e56de106b)**effective**: 2024-10-19 14:20:00+0200**performer**:[Organization SanLab](Bundle-55Doc-Tollwut.md#urn-uuid-72474f52-7c66-46da-a738-623a01d8fdfb)**dataAbsentReason**:Not Applicable**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-55Doc-Tollwut.md#urn-uuid-871984fb-318e-4f5f-8183-b7964c38d701)

-------

Entry 5 - fullUrl = urn:uuid:e755ff4f-055c-4885-8b77-1bca5404a28d

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514**name**: Peter Hauser**telecom**:[+41 79 222 33 44](tel:+41792223344),[peter.hauser@hauserpraxis.ch](mailto:peter.hauser@hauserpraxis.ch)

-------

Entry 6 - fullUrl = urn:uuid:8ca69f6c-9827-44ff-9113-9cbb27c599c1

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A74966168**name**: Praxis Dr. Hauser

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Hauptstrasse 10 Solothurn 4500 |


-------

Entry 7 - fullUrl = urn:uuid:4fe51039-7268-4cf6-a42d-74a40dd3df14

Resource PractitionerRole:

> **practitioner**:[Practitioner Peter Hauser](Bundle-55Doc-Tollwut.md#urn-uuid-e755ff4f-055c-4885-8b77-1bca5404a28d)**organization**:[Organization Praxis Dr. Hauser](Bundle-55Doc-Tollwut.md#urn-uuid-8ca69f6c-9827-44ff-9113-9cbb27c599c1)

-------

Entry 8 - fullUrl = urn:uuid:871984fb-318e-4f5f-8183-b7964c38d701

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-55Doc-Tollwut.md#urn-uuid-0360d9a5-93ab-44e0-9daf-a09e56de106b)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-10-15 14:20:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:63ffdc07-ede4-477f-989b-9f0ef45b69f4

Resource ServiceRequest:

> **identifier**: 26500923675**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Rabies virus neutralizing antibody [Presence] in Serum by Neutralization test)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-55Doc-Tollwut.md#urn-uuid-0360d9a5-93ab-44e0-9daf-a09e56de106b)**requester**:[PractitionerRole](Bundle-55Doc-Tollwut.md#urn-uuid-4fe51039-7268-4cf6-a42d-74a40dd3df14)**specimen**:[Specimen: type =](Bundle-55Doc-Tollwut.md#urn-uuid-871984fb-318e-4f5f-8183-b7964c38d701)

-------

Entry 10 - fullUrl = urn:uuid:bd97db6c-d1ea-478a-9dfd-28fcffb973b8

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-55Doc-Tollwut.md#urn-uuid-72474f52-7c66-46da-a738-623a01d8fdfb) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.5.0/NamingSystem-uri.html)/urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab |

**Report Details**

* **Code**: [Rabies virus neutralizing antibody [Presence] in Serum by Neutralization test](Bundle-55Doc-Tollwut.md#urn-uuid-bd1b7cde-fe97-4140-96f1-d3f9fcd13ff7)
  * **Value**: Error:**Not Applicable**
  * **Flags**: Final,Positive
  * **When For**: 2024-10-19 14:20:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "55Doc-Tollwut",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-10-20T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:731b585f-3ed4-4f46-ae13-c9d2bbc03642",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "731b585f-3ed4-4f46-ae13-c9d2bbc03642",
        "language" : "de-CH",
        "identifier" : {
          "system" : "urn:ietf:rfc:3986",
          "value" : "urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab"
        },
        "status" : "final",
        "type" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "version" : "http://snomed.info/sct/2011000195101",
              "code" : "4241000179101",
              "display" : "Laborbericht"
            },
            {
              "system" : "http://loinc.org",
              "code" : "11502-2",
              "display" : "Laboratory report"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:0360d9a5-93ab-44e0-9daf-a09e56de106b"
        },
        "date" : "2024-10-20T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:72474f52-7c66-46da-a738-623a01d8fdfb"
          }
        ],
        "title" : "Laborbericht vom 20.10.2024",
        "section" : [
          {
            "title" : "Analyseergebnisse der mikrobiologischen Untersuchung",
            "code" : {
              "coding" : [
                {
                  "system" : "http://loinc.org",
                  "code" : "18725-2",
                  "display" : "Microbiology studies (set)"
                }
              ]
            },
            "entry" : [
              {
                "reference" : "urn:uuid:bd1b7cde-fe97-4140-96f1-d3f9fcd13ff7"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:0360d9a5-93ab-44e0-9daf-a09e56de106b",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "0360d9a5-93ab-44e0-9daf-a09e56de106b",
        "identifier" : [
          {
            "system" : "urn:oid:2.16.756.5.32",
            "value" : "7561234567897"
          }
        ],
        "name" : [
          {
            "family" : "Dupont",
            "given" : ["Antoine"]
          }
        ],
        "gender" : "female",
        "birthDate" : "1981-02-07",
        "address" : [
          {
            "use" : "home",
            "line" : ["rue de la république 10"],
            "_line" : [
              {
                "extension" : [
                  {
                    "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-streetName",
                    "valueString" : "rue de la république"
                  },
                  {
                    "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-houseNumber",
                    "valueString" : "10"
                  }
                ]
              }
            ],
            "city" : "Carouge",
            "state" : "GE",
            "postalCode" : "1227",
            "country" : "CH",
            "_country" : {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-SC-coding",
                  "valueCoding" : {
                    "system" : "urn:iso:std:iso:3166",
                    "code" : "CH"
                  }
                }
              ]
            }
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:72474f52-7c66-46da-a738-623a01d8fdfb",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "72474f52-7c66-46da-a738-623a01d8fdfb",
        "identifier" : [
          {
            "system" : "urn:oid:2.51.1.3",
            "value" : "7601002331470"
          }
        ],
        "name" : "SanLab"
      }
    },
    {
      "fullUrl" : "urn:uuid:bd1b7cde-fe97-4140-96f1-d3f9fcd13ff7",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "bd1b7cde-fe97-4140-96f1-d3f9fcd13ff7",
        "status" : "final",
        "category" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
                "code" : "laboratory",
                "display" : "Laboratory"
              }
            ]
          }
        ],
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "70858-6"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:0360d9a5-93ab-44e0-9daf-a09e56de106b"
        },
        "effectiveDateTime" : "2024-10-19T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:72474f52-7c66-46da-a738-623a01d8fdfb"
          }
        ],
        "dataAbsentReason" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/data-absent-reason",
              "code" : "not-applicable"
            }
          ]
        },
        "interpretation" : [
          {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/v3-ObservationInterpretation",
                "code" : "POS",
                "display" : "Positive"
              }
            ]
          }
        ],
        "specimen" : {
          "reference" : "urn:uuid:871984fb-318e-4f5f-8183-b7964c38d701"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:e755ff4f-055c-4885-8b77-1bca5404a28d",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "e755ff4f-055c-4885-8b77-1bca5404a28d",
        "identifier" : [
          {
            "system" : "urn:oid:2.51.1.3",
            "value" : "7601000000514"
          }
        ],
        "name" : [
          {
            "family" : "Hauser",
            "given" : ["Peter"]
          }
        ],
        "telecom" : [
          {
            "system" : "phone",
            "value" : "+41 79 222 33 44"
          },
          {
            "system" : "email",
            "value" : "peter.hauser@hauserpraxis.ch"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:8ca69f6c-9827-44ff-9113-9cbb27c599c1",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "8ca69f6c-9827-44ff-9113-9cbb27c599c1",
        "identifier" : [
          {
            "system" : "urn:oid:2.16.756.5.45",
            "value" : "A74966168"
          }
        ],
        "name" : "Praxis Dr. Hauser",
        "address" : [
          {
            "line" : ["Hauptstrasse 10"],
            "_line" : [
              {
                "extension" : [
                  {
                    "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-streetName",
                    "valueString" : "Hauptstrasse"
                  },
                  {
                    "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-houseNumber",
                    "valueString" : "10"
                  }
                ]
              }
            ],
            "city" : "Solothurn",
            "postalCode" : "4500"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:4fe51039-7268-4cf6-a42d-74a40dd3df14",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "4fe51039-7268-4cf6-a42d-74a40dd3df14",
        "practitioner" : {
          "reference" : "urn:uuid:e755ff4f-055c-4885-8b77-1bca5404a28d"
        },
        "organization" : {
          "reference" : "urn:uuid:8ca69f6c-9827-44ff-9113-9cbb27c599c1"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:871984fb-318e-4f5f-8183-b7964c38d701",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "871984fb-318e-4f5f-8183-b7964c38d701",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:0360d9a5-93ab-44e0-9daf-a09e56de106b"
        },
        "collection" : {
          "collectedDateTime" : "2024-10-15T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:63ffdc07-ede4-477f-989b-9f0ef45b69f4",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "63ffdc07-ede4-477f-989b-9f0ef45b69f4",
        "identifier" : [
          {
            "value" : "26500923675"
          }
        ],
        "status" : "completed",
        "intent" : "order",
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "70858-6"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:0360d9a5-93ab-44e0-9daf-a09e56de106b"
        },
        "requester" : {
          "reference" : "urn:uuid:4fe51039-7268-4cf6-a42d-74a40dd3df14"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:871984fb-318e-4f5f-8183-b7964c38d701"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:bd97db6c-d1ea-478a-9dfd-28fcffb973b8",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "bd97db6c-d1ea-478a-9dfd-28fcffb973b8",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:731b585f-3ed4-4f46-ae13-c9d2bbc03642"
            }
          }
        ],
        "identifier" : [
          {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab"
          }
        ],
        "basedOn" : [
          {
            "reference" : "urn:uuid:63ffdc07-ede4-477f-989b-9f0ef45b69f4"
          }
        ],
        "status" : "final",
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "11502-2",
              "display" : "Laboratory report"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:0360d9a5-93ab-44e0-9daf-a09e56de106b"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:72474f52-7c66-46da-a738-623a01d8fdfb"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:871984fb-318e-4f5f-8183-b7964c38d701"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:bd1b7cde-fe97-4140-96f1-d3f9fcd13ff7"
          }
        ]
      }
    }
  ]
}

```
