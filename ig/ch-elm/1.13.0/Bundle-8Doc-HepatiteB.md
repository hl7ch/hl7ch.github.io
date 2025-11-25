# 8Doc - HepatiteB - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **8Doc - HepatiteB**

## Example Bundle: 8Doc - HepatiteB

**Document Details**

**Document Subject**

Delemat Monika Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)

-------

-------

**Document Content**

## Analyseergebnisse der mikrobiologischen Untersuchung

-------

## Additional Resources Included in Document

-------

Entry 2 - fullUrl = urn:uuid:2c3e0c85-3374-4569-9d6b-6e389049e486

Resource Patient:

> Delemat Monika Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)
-------

-------

Entry 3 - fullUrl = urn:uuid:e0faca55-c450-4575-83a1-446be9bef17d

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:741430d1-e83a-4439-97fc-ef8b6694b228

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Hepatitis B virus core IgM Ab [Presence] in Serum**subject**:[Delemat Monika Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Bundle-8Doc-HepatiteB.md#urn-uuid-2c3e0c85-3374-4569-9d6b-6e389049e486)**effective**: 2024-04-10 12:00:00+0200**performer**:[Organization SanLab](Bundle-8Doc-HepatiteB.md#urn-uuid-e0faca55-c450-4575-83a1-446be9bef17d)**value**:Positive (qualifier value)**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-8Doc-HepatiteB.md#urn-uuid-b094867b-300c-4317-b909-1e77b4a2017c)

-------

Entry 5 - fullUrl = urn:uuid:4f84eb40-a17e-435f-b0c4-bfc735c465a6

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514**name**: Peter Hauser**telecom**:[+41 79 222 33 44](tel:+41792223344),[peter.hauser@hauserpraxis.ch](mailto:peter.hauser@hauserpraxis.ch)

-------

Entry 6 - fullUrl = urn:uuid:78060f37-44c5-4274-a8ad-de4b3e588d3f

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A74966168**name**: Praxis Dr. Hauser

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Hauptstrasse 10 Solothurn 4500 |


-------

Entry 7 - fullUrl = urn:uuid:c15fda64-0d0a-44de-b343-bef7f02d94a0

Resource PractitionerRole:

> **practitioner**:[Practitioner Peter Hauser](Bundle-8Doc-HepatiteB.md#urn-uuid-4f84eb40-a17e-435f-b0c4-bfc735c465a6)**organization**:[Organization Praxis Dr. Hauser](Bundle-8Doc-HepatiteB.md#urn-uuid-78060f37-44c5-4274-a8ad-de4b3e588d3f)

-------

Entry 8 - fullUrl = urn:uuid:b094867b-300c-4317-b909-1e77b4a2017c

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[Delemat Monika Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Bundle-8Doc-HepatiteB.md#urn-uuid-2c3e0c85-3374-4569-9d6b-6e389049e486)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-04-09 |


-------

Entry 9 - fullUrl = urn:uuid:ef543f73-c886-4a7f-81ce-12e2978b11c5

Resource ServiceRequest:

> **identifier**: 26500923622**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Hepatitis B virus core IgM Ab [Presence] in Serum)**subject**:[Delemat Monika Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Bundle-8Doc-HepatiteB.md#urn-uuid-2c3e0c85-3374-4569-9d6b-6e389049e486)**requester**:[PractitionerRole](Bundle-8Doc-HepatiteB.md#urn-uuid-c15fda64-0d0a-44de-b343-bef7f02d94a0)**specimen**:[Specimen: type =](Bundle-8Doc-HepatiteB.md#urn-uuid-b094867b-300c-4317-b909-1e77b4a2017c)

-------

Entry 10 - fullUrl = urn:uuid:ae99fade-feb6-451b-a20b-bd8a04be8531

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Delemat Monika Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070) |
| Performer | [Organization SanLab](Bundle-8Doc-HepatiteB.md#urn-uuid-e0faca55-c450-4575-83a1-446be9bef17d) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:2101332d-6012-443f-9690-9291adb23a5c |

**Report Details**

* **Code**: [Hepatitis B virus core IgM Ab [Presence] in Serum](Bundle-8Doc-HepatiteB.md#urn-uuid-741430d1-e83a-4439-97fc-ef8b6694b228)
  * **Value**: Positive (qualifier value)
  * **Flags**: Final,Positive
  * **When For**: 2024-04-10 12:00:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "8Doc-HepatiteB",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:2101332d-6012-443f-9690-9291adb23a5c"
  },
  "type" : "document",
  "timestamp" : "2024-04-10T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:91415845-943e-46b6-97f1-760fc6d65c77",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "91415845-943e-46b6-97f1-760fc6d65c77",
        "language" : "de-CH",
        "identifier" : {
          "system" : "urn:ietf:rfc:3986",
          "value" : "urn:uuid:2101332d-6012-443f-9690-9291adb23a5c"
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
          "reference" : "urn:uuid:2c3e0c85-3374-4569-9d6b-6e389049e486"
        },
        "date" : "2024-04-10T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:e0faca55-c450-4575-83a1-446be9bef17d"
          }
        ],
        "title" : "Laborbericht vom 10.04.2024",
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
                "reference" : "urn:uuid:741430d1-e83a-4439-97fc-ef8b6694b228"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:2c3e0c85-3374-4569-9d6b-6e389049e486",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "2c3e0c85-3374-4569-9d6b-6e389049e486",
        "identifier" : [
          {
            "system" : "urn:oid:2.16.756.5.32",
            "value" : "7562295883070"
          }
        ],
        "name" : [
          {
            "family" : "Monika",
            "given" : ["Delemat"]
          }
        ],
        "gender" : "male",
        "birthDate" : "1960-08-22",
        "address" : [
          {
            "use" : "home",
            "line" : ["Bahnhofstrasse 27"],
            "city" : "Bern",
            "state" : "BE",
            "postalCode" : "3000",
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
      "fullUrl" : "urn:uuid:e0faca55-c450-4575-83a1-446be9bef17d",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "e0faca55-c450-4575-83a1-446be9bef17d",
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
      "fullUrl" : "urn:uuid:741430d1-e83a-4439-97fc-ef8b6694b228",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "741430d1-e83a-4439-97fc-ef8b6694b228",
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
              "code" : "31204-1"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:2c3e0c85-3374-4569-9d6b-6e389049e486"
        },
        "effectiveDateTime" : "2024-04-10T12:00:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:e0faca55-c450-4575-83a1-446be9bef17d"
          }
        ],
        "valueCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "10828004",
              "display" : "Positive (qualifier value)"
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
          "reference" : "urn:uuid:b094867b-300c-4317-b909-1e77b4a2017c"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:4f84eb40-a17e-435f-b0c4-bfc735c465a6",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "4f84eb40-a17e-435f-b0c4-bfc735c465a6",
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
      "fullUrl" : "urn:uuid:78060f37-44c5-4274-a8ad-de4b3e588d3f",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "78060f37-44c5-4274-a8ad-de4b3e588d3f",
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
      "fullUrl" : "urn:uuid:c15fda64-0d0a-44de-b343-bef7f02d94a0",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "c15fda64-0d0a-44de-b343-bef7f02d94a0",
        "practitioner" : {
          "reference" : "urn:uuid:4f84eb40-a17e-435f-b0c4-bfc735c465a6"
        },
        "organization" : {
          "reference" : "urn:uuid:78060f37-44c5-4274-a8ad-de4b3e588d3f"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:b094867b-300c-4317-b909-1e77b4a2017c",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "b094867b-300c-4317-b909-1e77b4a2017c",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:2c3e0c85-3374-4569-9d6b-6e389049e486"
        },
        "collection" : {
          "collectedDateTime" : "2024-04-09"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:ef543f73-c886-4a7f-81ce-12e2978b11c5",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "ef543f73-c886-4a7f-81ce-12e2978b11c5",
        "identifier" : [
          {
            "value" : "26500923622"
          }
        ],
        "status" : "completed",
        "intent" : "order",
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "31204-1"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:2c3e0c85-3374-4569-9d6b-6e389049e486"
        },
        "requester" : {
          "reference" : "urn:uuid:c15fda64-0d0a-44de-b343-bef7f02d94a0"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:b094867b-300c-4317-b909-1e77b4a2017c"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:ae99fade-feb6-451b-a20b-bd8a04be8531",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "ae99fade-feb6-451b-a20b-bd8a04be8531",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:91415845-943e-46b6-97f1-760fc6d65c77"
            }
          }
        ],
        "identifier" : [
          {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:2101332d-6012-443f-9690-9291adb23a5c"
          }
        ],
        "basedOn" : [
          {
            "reference" : "urn:uuid:ef543f73-c886-4a7f-81ce-12e2978b11c5"
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
          "reference" : "urn:uuid:2c3e0c85-3374-4569-9d6b-6e389049e486"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:e0faca55-c450-4575-83a1-446be9bef17d"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:b094867b-300c-4317-b909-1e77b4a2017c"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:741430d1-e83a-4439-97fc-ef8b6694b228"
          }
        ]
      }
    }
  ]
}

```
