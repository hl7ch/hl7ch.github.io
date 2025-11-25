# 41Doc - Ebola - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **41Doc - Ebola**

## Example Bundle: 41Doc - Ebola

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

Entry 2 - fullUrl = urn:uuid:352e8260-9e48-4253-aa3b-a5e382f9e8c2

Resource Patient:

> Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 3 - fullUrl = urn:uuid:3f86752c-3176-47db-96de-71f6ba212fe4

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:6d6727b3-1e66-441b-88df-18835dee4010

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Ebola virus RNA [Presence] in Blood by NAA with probe detection**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-41Doc-Ebola.md#urn-uuid-352e8260-9e48-4253-aa3b-a5e382f9e8c2)**effective**: 2024-10-19 14:20:00+0200**performer**:[Organization SanLab](Bundle-41Doc-Ebola.md#urn-uuid-3f86752c-3176-47db-96de-71f6ba212fe4)**dataAbsentReason**:Not Applicable**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-41Doc-Ebola.md#urn-uuid-464e68bb-135d-40df-8946-375ab7cdef1c)

-------

Entry 5 - fullUrl = urn:uuid:f009112a-82db-4434-bbf4-dce8daf3a712

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514**name**: Peter Hauser**telecom**:[+41 79 222 33 44](tel:+41792223344),[peter.hauser@hauserpraxis.ch](mailto:peter.hauser@hauserpraxis.ch)

-------

Entry 6 - fullUrl = urn:uuid:4784b8de-3036-4ea1-9006-41c355c51044

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A74966168**name**: Praxis Dr. Hauser

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Hauptstrasse 10 Solothurn 4500 |


-------

Entry 7 - fullUrl = urn:uuid:1bc992d7-94ef-4bc0-b18a-a9d67f5a126b

Resource PractitionerRole:

> **practitioner**:[Practitioner Peter Hauser](Bundle-41Doc-Ebola.md#urn-uuid-f009112a-82db-4434-bbf4-dce8daf3a712)**organization**:[Organization Praxis Dr. Hauser](Bundle-41Doc-Ebola.md#urn-uuid-4784b8de-3036-4ea1-9006-41c355c51044)

-------

Entry 8 - fullUrl = urn:uuid:464e68bb-135d-40df-8946-375ab7cdef1c

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-41Doc-Ebola.md#urn-uuid-352e8260-9e48-4253-aa3b-a5e382f9e8c2)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-10-15 14:20:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:a35e3e04-1a4f-4304-bb51-0e287bd687d3

Resource ServiceRequest:

> **identifier**: 26500923675**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Ebola virus RNA [Presence] in Blood by NAA with probe detection)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-41Doc-Ebola.md#urn-uuid-352e8260-9e48-4253-aa3b-a5e382f9e8c2)**requester**:[PractitionerRole](Bundle-41Doc-Ebola.md#urn-uuid-1bc992d7-94ef-4bc0-b18a-a9d67f5a126b)**specimen**:[Specimen: type =](Bundle-41Doc-Ebola.md#urn-uuid-464e68bb-135d-40df-8946-375ab7cdef1c)

-------

Entry 10 - fullUrl = urn:uuid:55d44810-5a8a-48f7-aad5-ada35829ad2c

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-41Doc-Ebola.md#urn-uuid-3f86752c-3176-47db-96de-71f6ba212fe4) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab |

**Report Details**

* **Code**: [Ebola virus RNA [Presence] in Blood by NAA with probe detection](Bundle-41Doc-Ebola.md#urn-uuid-6d6727b3-1e66-441b-88df-18835dee4010)
  * **Value**: Error:**Not Applicable**
  * **Flags**: Final,Positive
  * **When For**: 2024-10-19 14:20:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "41Doc-Ebola",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-10-20T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:259698d6-ac88-4e4c-a1a2-38c5cf58f5cb",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "259698d6-ac88-4e4c-a1a2-38c5cf58f5cb",
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
          "reference" : "urn:uuid:352e8260-9e48-4253-aa3b-a5e382f9e8c2"
        },
        "date" : "2024-10-20T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:3f86752c-3176-47db-96de-71f6ba212fe4"
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
                "reference" : "urn:uuid:6d6727b3-1e66-441b-88df-18835dee4010"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:352e8260-9e48-4253-aa3b-a5e382f9e8c2",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "352e8260-9e48-4253-aa3b-a5e382f9e8c2",
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
      "fullUrl" : "urn:uuid:3f86752c-3176-47db-96de-71f6ba212fe4",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "3f86752c-3176-47db-96de-71f6ba212fe4",
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
      "fullUrl" : "urn:uuid:6d6727b3-1e66-441b-88df-18835dee4010",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "6d6727b3-1e66-441b-88df-18835dee4010",
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
              "code" : "86518-8"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:352e8260-9e48-4253-aa3b-a5e382f9e8c2"
        },
        "effectiveDateTime" : "2024-10-19T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:3f86752c-3176-47db-96de-71f6ba212fe4"
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
          "reference" : "urn:uuid:464e68bb-135d-40df-8946-375ab7cdef1c"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:f009112a-82db-4434-bbf4-dce8daf3a712",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "f009112a-82db-4434-bbf4-dce8daf3a712",
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
      "fullUrl" : "urn:uuid:4784b8de-3036-4ea1-9006-41c355c51044",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "4784b8de-3036-4ea1-9006-41c355c51044",
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
      "fullUrl" : "urn:uuid:1bc992d7-94ef-4bc0-b18a-a9d67f5a126b",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "1bc992d7-94ef-4bc0-b18a-a9d67f5a126b",
        "practitioner" : {
          "reference" : "urn:uuid:f009112a-82db-4434-bbf4-dce8daf3a712"
        },
        "organization" : {
          "reference" : "urn:uuid:4784b8de-3036-4ea1-9006-41c355c51044"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:464e68bb-135d-40df-8946-375ab7cdef1c",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "464e68bb-135d-40df-8946-375ab7cdef1c",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:352e8260-9e48-4253-aa3b-a5e382f9e8c2"
        },
        "collection" : {
          "collectedDateTime" : "2024-10-15T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:a35e3e04-1a4f-4304-bb51-0e287bd687d3",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "a35e3e04-1a4f-4304-bb51-0e287bd687d3",
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
              "code" : "86518-8"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:352e8260-9e48-4253-aa3b-a5e382f9e8c2"
        },
        "requester" : {
          "reference" : "urn:uuid:1bc992d7-94ef-4bc0-b18a-a9d67f5a126b"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:464e68bb-135d-40df-8946-375ab7cdef1c"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:55d44810-5a8a-48f7-aad5-ada35829ad2c",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "55d44810-5a8a-48f7-aad5-ada35829ad2c",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:259698d6-ac88-4e4c-a1a2-38c5cf58f5cb"
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
            "reference" : "urn:uuid:a35e3e04-1a4f-4304-bb51-0e287bd687d3"
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
          "reference" : "urn:uuid:352e8260-9e48-4253-aa3b-a5e382f9e8c2"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:3f86752c-3176-47db-96de-71f6ba212fe4"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:464e68bb-135d-40df-8946-375ab7cdef1c"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:6d6727b3-1e66-441b-88df-18835dee4010"
          }
        ]
      }
    }
  ]
}

```
