# 47Doc - Variola - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **47Doc - Variola**

## Example Bundle: 47Doc - Variola

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

Entry 2 - fullUrl = urn:uuid:4a1e9d45-de6f-455f-bc96-9beab22da01b

Resource Patient:

> Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 3 - fullUrl = urn:uuid:477e542c-4711-438d-b7c9-59f7e537014e

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:bc3f7bbe-85a7-445d-8910-8ff60de0fa1b

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Variola virus DNA [Presence] in Specimen by NAA with probe detection**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-47Doc-Variola.md#urn-uuid-4a1e9d45-de6f-455f-bc96-9beab22da01b)**effective**: 2024-10-19 14:20:00+0200**performer**:[Organization SanLab](Bundle-47Doc-Variola.md#urn-uuid-477e542c-4711-438d-b7c9-59f7e537014e)**dataAbsentReason**:Not Applicable**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-47Doc-Variola.md#urn-uuid-e5c7834d-4122-4116-a3c7-f733850c2f02)

-------

Entry 5 - fullUrl = urn:uuid:672b3778-70ac-4281-8525-28b616815da8

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514**name**: Peter Hauser**telecom**:[+41 79 222 33 44](tel:+41792223344),[peter.hauser@hauserpraxis.ch](mailto:peter.hauser@hauserpraxis.ch)

-------

Entry 6 - fullUrl = urn:uuid:c5d7cb3a-9529-462d-8473-8ea7519c1a5c

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A74966168**name**: Praxis Dr. Hauser

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Hauptstrasse 10 Solothurn 4500 |


-------

Entry 7 - fullUrl = urn:uuid:a24800e1-9554-4855-96bd-690640b61635

Resource PractitionerRole:

> **practitioner**:[Practitioner Peter Hauser](Bundle-47Doc-Variola.md#urn-uuid-672b3778-70ac-4281-8525-28b616815da8)**organization**:[Organization Praxis Dr. Hauser](Bundle-47Doc-Variola.md#urn-uuid-c5d7cb3a-9529-462d-8473-8ea7519c1a5c)

-------

Entry 8 - fullUrl = urn:uuid:e5c7834d-4122-4116-a3c7-f733850c2f02

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-47Doc-Variola.md#urn-uuid-4a1e9d45-de6f-455f-bc96-9beab22da01b)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-10-15 14:20:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:691b3891-0bb4-4707-8e95-d52293bef193

Resource ServiceRequest:

> **identifier**: 26500923675**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Variola virus DNA [Presence] in Specimen by NAA with probe detection)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-47Doc-Variola.md#urn-uuid-4a1e9d45-de6f-455f-bc96-9beab22da01b)**requester**:[PractitionerRole](Bundle-47Doc-Variola.md#urn-uuid-a24800e1-9554-4855-96bd-690640b61635)**specimen**:[Specimen: type =](Bundle-47Doc-Variola.md#urn-uuid-e5c7834d-4122-4116-a3c7-f733850c2f02)

-------

Entry 10 - fullUrl = urn:uuid:6ecb284b-26a8-49e5-9033-a1876cbcff51

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-47Doc-Variola.md#urn-uuid-477e542c-4711-438d-b7c9-59f7e537014e) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.5.0/NamingSystem-uri.html)/urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab |

**Report Details**

* **Code**: [Variola virus DNA [Presence] in Specimen by NAA with probe detection](Bundle-47Doc-Variola.md#urn-uuid-bc3f7bbe-85a7-445d-8910-8ff60de0fa1b)
  * **Value**: Error:**Not Applicable**
  * **Flags**: Final,Positive
  * **When For**: 2024-10-19 14:20:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "47Doc-Variola",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-10-20T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:a7dc60e2-e98e-48eb-b401-8c9420e634fc",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "a7dc60e2-e98e-48eb-b401-8c9420e634fc",
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
          "reference" : "urn:uuid:4a1e9d45-de6f-455f-bc96-9beab22da01b"
        },
        "date" : "2024-10-20T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:477e542c-4711-438d-b7c9-59f7e537014e"
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
                "reference" : "urn:uuid:bc3f7bbe-85a7-445d-8910-8ff60de0fa1b"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:4a1e9d45-de6f-455f-bc96-9beab22da01b",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "4a1e9d45-de6f-455f-bc96-9beab22da01b",
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
      "fullUrl" : "urn:uuid:477e542c-4711-438d-b7c9-59f7e537014e",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "477e542c-4711-438d-b7c9-59f7e537014e",
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
      "fullUrl" : "urn:uuid:bc3f7bbe-85a7-445d-8910-8ff60de0fa1b",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "bc3f7bbe-85a7-445d-8910-8ff60de0fa1b",
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
              "code" : "41856-6"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:4a1e9d45-de6f-455f-bc96-9beab22da01b"
        },
        "effectiveDateTime" : "2024-10-19T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:477e542c-4711-438d-b7c9-59f7e537014e"
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
          "reference" : "urn:uuid:e5c7834d-4122-4116-a3c7-f733850c2f02"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:672b3778-70ac-4281-8525-28b616815da8",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "672b3778-70ac-4281-8525-28b616815da8",
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
      "fullUrl" : "urn:uuid:c5d7cb3a-9529-462d-8473-8ea7519c1a5c",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "c5d7cb3a-9529-462d-8473-8ea7519c1a5c",
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
      "fullUrl" : "urn:uuid:a24800e1-9554-4855-96bd-690640b61635",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "a24800e1-9554-4855-96bd-690640b61635",
        "practitioner" : {
          "reference" : "urn:uuid:672b3778-70ac-4281-8525-28b616815da8"
        },
        "organization" : {
          "reference" : "urn:uuid:c5d7cb3a-9529-462d-8473-8ea7519c1a5c"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:e5c7834d-4122-4116-a3c7-f733850c2f02",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "e5c7834d-4122-4116-a3c7-f733850c2f02",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:4a1e9d45-de6f-455f-bc96-9beab22da01b"
        },
        "collection" : {
          "collectedDateTime" : "2024-10-15T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:691b3891-0bb4-4707-8e95-d52293bef193",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "691b3891-0bb4-4707-8e95-d52293bef193",
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
              "code" : "41856-6"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:4a1e9d45-de6f-455f-bc96-9beab22da01b"
        },
        "requester" : {
          "reference" : "urn:uuid:a24800e1-9554-4855-96bd-690640b61635"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:e5c7834d-4122-4116-a3c7-f733850c2f02"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:6ecb284b-26a8-49e5-9033-a1876cbcff51",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "6ecb284b-26a8-49e5-9033-a1876cbcff51",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:a7dc60e2-e98e-48eb-b401-8c9420e634fc"
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
            "reference" : "urn:uuid:691b3891-0bb4-4707-8e95-d52293bef193"
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
          "reference" : "urn:uuid:4a1e9d45-de6f-455f-bc96-9beab22da01b"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:477e542c-4711-438d-b7c9-59f7e537014e"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:e5c7834d-4122-4116-a3c7-f733850c2f02"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:bc3f7bbe-85a7-445d-8910-8ff60de0fa1b"
          }
        ]
      }
    }
  ]
}

```
