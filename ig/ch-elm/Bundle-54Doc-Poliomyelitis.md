# 54Doc - Poliomyelitis - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **54Doc - Poliomyelitis**

## Example Bundle: 54Doc - Poliomyelitis

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

Entry 2 - fullUrl = urn:uuid:9c12790d-ba5d-4725-8b8a-33d7daafae11

Resource Patient:

> Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 3 - fullUrl = urn:uuid:12ffc4b9-e534-4880-b7d0-22a536c484a7

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:e4d73b2a-21bc-4263-b8dd-a539ed2fd7dc

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Polio virus identified in Specimen by Organism specific culture**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-54Doc-Poliomyelitis.md#urn-uuid-9c12790d-ba5d-4725-8b8a-33d7daafae11)**effective**: 2024-10-19 14:20:00+0200**performer**:[Organization SanLab](Bundle-54Doc-Poliomyelitis.md#urn-uuid-12ffc4b9-e534-4880-b7d0-22a536c484a7)**dataAbsentReason**:Not Applicable**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-54Doc-Poliomyelitis.md#urn-uuid-1689ec5c-6fbe-4bea-bd70-7769e9c92cc1)

-------

Entry 5 - fullUrl = urn:uuid:c36b0bdc-1aaf-4d83-8da9-0e4311e67d21

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514**name**: Peter Hauser**telecom**:[+41 79 222 33 44](tel:+41792223344),[peter.hauser@hauserpraxis.ch](mailto:peter.hauser@hauserpraxis.ch)

-------

Entry 6 - fullUrl = urn:uuid:fc61fc22-b2fe-4c4a-8da2-6da73e9a10b1

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A74966168**name**: Praxis Dr. Hauser

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Hauptstrasse 10 Solothurn 4500 |


-------

Entry 7 - fullUrl = urn:uuid:2aa9a2f4-d205-4b7f-8928-bcb8a1bf6d2d

Resource PractitionerRole:

> **practitioner**:[Practitioner Peter Hauser](Bundle-54Doc-Poliomyelitis.md#urn-uuid-c36b0bdc-1aaf-4d83-8da9-0e4311e67d21)**organization**:[Organization Praxis Dr. Hauser](Bundle-54Doc-Poliomyelitis.md#urn-uuid-fc61fc22-b2fe-4c4a-8da2-6da73e9a10b1)

-------

Entry 8 - fullUrl = urn:uuid:1689ec5c-6fbe-4bea-bd70-7769e9c92cc1

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-54Doc-Poliomyelitis.md#urn-uuid-9c12790d-ba5d-4725-8b8a-33d7daafae11)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-10-15 14:20:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:4975cd03-4c1e-4547-a549-5653394353fd

Resource ServiceRequest:

> **identifier**: 26500923675**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Polio virus identified in Specimen by Organism specific culture)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-54Doc-Poliomyelitis.md#urn-uuid-9c12790d-ba5d-4725-8b8a-33d7daafae11)**requester**:[PractitionerRole](Bundle-54Doc-Poliomyelitis.md#urn-uuid-2aa9a2f4-d205-4b7f-8928-bcb8a1bf6d2d)**specimen**:[Specimen: type =](Bundle-54Doc-Poliomyelitis.md#urn-uuid-1689ec5c-6fbe-4bea-bd70-7769e9c92cc1)

-------

Entry 10 - fullUrl = urn:uuid:51d0f5e0-63da-4b6c-825c-806810829871

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-54Doc-Poliomyelitis.md#urn-uuid-12ffc4b9-e534-4880-b7d0-22a536c484a7) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.5.0/NamingSystem-uri.html)/urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab |

**Report Details**

* **Code**: [Polio virus identified in Specimen by Organism specific culture](Bundle-54Doc-Poliomyelitis.md#urn-uuid-e4d73b2a-21bc-4263-b8dd-a539ed2fd7dc)
  * **Value**: Error:**Not Applicable**
  * **Flags**: Final,Positive
  * **When For**: 2024-10-19 14:20:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "54Doc-Poliomyelitis",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-10-20T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:1e1bee51-2293-4f86-bd49-003889c71a86",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "1e1bee51-2293-4f86-bd49-003889c71a86",
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
          "reference" : "urn:uuid:9c12790d-ba5d-4725-8b8a-33d7daafae11"
        },
        "date" : "2024-10-20T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:12ffc4b9-e534-4880-b7d0-22a536c484a7"
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
                "reference" : "urn:uuid:e4d73b2a-21bc-4263-b8dd-a539ed2fd7dc"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:9c12790d-ba5d-4725-8b8a-33d7daafae11",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "9c12790d-ba5d-4725-8b8a-33d7daafae11",
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
      "fullUrl" : "urn:uuid:12ffc4b9-e534-4880-b7d0-22a536c484a7",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "12ffc4b9-e534-4880-b7d0-22a536c484a7",
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
      "fullUrl" : "urn:uuid:e4d73b2a-21bc-4263-b8dd-a539ed2fd7dc",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "e4d73b2a-21bc-4263-b8dd-a539ed2fd7dc",
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
              "code" : "73907-8"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:9c12790d-ba5d-4725-8b8a-33d7daafae11"
        },
        "effectiveDateTime" : "2024-10-19T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:12ffc4b9-e534-4880-b7d0-22a536c484a7"
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
          "reference" : "urn:uuid:1689ec5c-6fbe-4bea-bd70-7769e9c92cc1"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:c36b0bdc-1aaf-4d83-8da9-0e4311e67d21",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "c36b0bdc-1aaf-4d83-8da9-0e4311e67d21",
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
      "fullUrl" : "urn:uuid:fc61fc22-b2fe-4c4a-8da2-6da73e9a10b1",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "fc61fc22-b2fe-4c4a-8da2-6da73e9a10b1",
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
      "fullUrl" : "urn:uuid:2aa9a2f4-d205-4b7f-8928-bcb8a1bf6d2d",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "2aa9a2f4-d205-4b7f-8928-bcb8a1bf6d2d",
        "practitioner" : {
          "reference" : "urn:uuid:c36b0bdc-1aaf-4d83-8da9-0e4311e67d21"
        },
        "organization" : {
          "reference" : "urn:uuid:fc61fc22-b2fe-4c4a-8da2-6da73e9a10b1"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:1689ec5c-6fbe-4bea-bd70-7769e9c92cc1",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "1689ec5c-6fbe-4bea-bd70-7769e9c92cc1",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:9c12790d-ba5d-4725-8b8a-33d7daafae11"
        },
        "collection" : {
          "collectedDateTime" : "2024-10-15T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:4975cd03-4c1e-4547-a549-5653394353fd",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "4975cd03-4c1e-4547-a549-5653394353fd",
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
              "code" : "73907-8"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:9c12790d-ba5d-4725-8b8a-33d7daafae11"
        },
        "requester" : {
          "reference" : "urn:uuid:2aa9a2f4-d205-4b7f-8928-bcb8a1bf6d2d"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:1689ec5c-6fbe-4bea-bd70-7769e9c92cc1"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:51d0f5e0-63da-4b6c-825c-806810829871",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "51d0f5e0-63da-4b6c-825c-806810829871",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:1e1bee51-2293-4f86-bd49-003889c71a86"
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
            "reference" : "urn:uuid:4975cd03-4c1e-4547-a549-5653394353fd"
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
          "reference" : "urn:uuid:9c12790d-ba5d-4725-8b8a-33d7daafae11"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:12ffc4b9-e534-4880-b7d0-22a536c484a7"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:1689ec5c-6fbe-4bea-bd70-7769e9c92cc1"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:e4d73b2a-21bc-4263-b8dd-a539ed2fd7dc"
          }
        ]
      }
    }
  ]
}

```
