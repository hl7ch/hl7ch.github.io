# 34Doc - Brucella - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **34Doc - Brucella**

## Example Bundle: 34Doc - Brucella

**Document Details**

**Document Subject**

D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)

-------

-------

**Document Content**

## Analyseergebnisse der mikrobiologischen Untersuchung

-------

## Additional Resources Included in Document

-------

Entry 2 - fullUrl = urn:uuid:05d4086f-5dcc-44de-8fa8-253ff1550c60

Resource Patient:

> D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)
-------

-------

Entry 3 - fullUrl = urn:uuid:41196c21-2d76-4a97-84fb-43d986b41aee

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:0290618b-29e2-40fa-a422-d35595f06112

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Brucella sp IgA Ab [Presence] in Serum**subject**:[D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Bundle-34Doc-Brucella.md#urn-uuid-05d4086f-5dcc-44de-8fa8-253ff1550c60)**effective**: 2024-10-12 09:15:00+0200**performer**:[Organization SanLab](Bundle-34Doc-Brucella.md#urn-uuid-41196c21-2d76-4a97-84fb-43d986b41aee)**dataAbsentReason**:Not Applicable**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-34Doc-Brucella.md#urn-uuid-37c8bc0f-3d85-44a5-a4a3-498fafd2abf7)

-------

Entry 5 - fullUrl = urn:uuid:039c5a56-4aa4-4ea0-8b1c-a7b2872df0c1

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000234438**name**: Monika Giacometti**telecom**:[+41 79 111 44 55](tel:+41791114455),[m.giacometti@ks-abc.ch](mailto:m.giacometti@ks-abc.ch)

-------

Entry 6 - fullUrl = urn:uuid:5fe5b34e-f702-40d8-a05e-f6b7cfd46423

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A99684215**name**: Kantonsspital ABC

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Aortastrasse 22 Bern 3000 |


-------

Entry 7 - fullUrl = urn:uuid:90595985-fa89-4eb9-9c40-14e1b11741e0

Resource PractitionerRole:

> **practitioner**:[Practitioner Monika Giacometti](Bundle-34Doc-Brucella.md#urn-uuid-039c5a56-4aa4-4ea0-8b1c-a7b2872df0c1)**organization**:[Organization Kantonsspital ABC](Bundle-34Doc-Brucella.md#urn-uuid-5fe5b34e-f702-40d8-a05e-f6b7cfd46423)

-------

Entry 8 - fullUrl = urn:uuid:37c8bc0f-3d85-44a5-a4a3-498fafd2abf7

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Bundle-34Doc-Brucella.md#urn-uuid-05d4086f-5dcc-44de-8fa8-253ff1550c60)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-10-10 09:15:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:483a79d7-cc90-40a2-aad9-a418b2ffde16

Resource ServiceRequest:

> **identifier**: 50002755**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Brucella sp IgA Ab [Presence] in Serum)**subject**:[D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Bundle-34Doc-Brucella.md#urn-uuid-05d4086f-5dcc-44de-8fa8-253ff1550c60)**requester**:[PractitionerRole](Bundle-34Doc-Brucella.md#urn-uuid-90595985-fa89-4eb9-9c40-14e1b11741e0)**specimen**:[Specimen: type =](Bundle-34Doc-Brucella.md#urn-uuid-37c8bc0f-3d85-44a5-a4a3-498fafd2abf7)

-------

Entry 10 - fullUrl = urn:uuid:3dc4969f-9932-4b81-bd8a-cc928ced8054

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070) |
| Performer | [Organization SanLab](Bundle-34Doc-Brucella.md#urn-uuid-41196c21-2d76-4a97-84fb-43d986b41aee) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:ac01252d-6012-443f-9690-9291adb23433 |

**Report Details**

* **Code**: [Brucella sp IgA Ab [Presence] in Serum](Bundle-34Doc-Brucella.md#urn-uuid-0290618b-29e2-40fa-a422-d35595f06112)
  * **Value**: Error:**Not Applicable**
  * **Flags**: Final,Positive
  * **When For**: 2024-10-12 09:15:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "34Doc-Brucella",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:ac01252d-6012-443f-9690-9291adb23433"
  },
  "type" : "document",
  "timestamp" : "2024-10-14T11:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:9e7009a4-a28c-423a-98a1-98d70ab0901c",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "9e7009a4-a28c-423a-98a1-98d70ab0901c",
        "language" : "de-CH",
        "identifier" : {
          "system" : "urn:ietf:rfc:3986",
          "value" : "urn:uuid:ac01252d-6012-443f-9690-9291adb23433"
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
          "reference" : "urn:uuid:05d4086f-5dcc-44de-8fa8-253ff1550c60"
        },
        "date" : "2024-10-14T11:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:41196c21-2d76-4a97-84fb-43d986b41aee"
          }
        ],
        "title" : "Laborbericht vom 14.10.92024",
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
                "reference" : "urn:uuid:0290618b-29e2-40fa-a422-d35595f06112"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:05d4086f-5dcc-44de-8fa8-253ff1550c60",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "05d4086f-5dcc-44de-8fa8-253ff1550c60",
        "identifier" : [
          {
            "system" : "urn:oid:2.16.756.5.32",
            "value" : "7562295883070"
          }
        ],
        "name" : [
          {
            "family" : "M",
            "given" : ["D"]
          }
        ],
        "gender" : "male",
        "birthDate" : "1960-08-22",
        "address" : [
          {
            "use" : "home",
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
      "fullUrl" : "urn:uuid:41196c21-2d76-4a97-84fb-43d986b41aee",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "41196c21-2d76-4a97-84fb-43d986b41aee",
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
      "fullUrl" : "urn:uuid:0290618b-29e2-40fa-a422-d35595f06112",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "0290618b-29e2-40fa-a422-d35595f06112",
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
              "code" : "101802-7"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:05d4086f-5dcc-44de-8fa8-253ff1550c60"
        },
        "effectiveDateTime" : "2024-10-12T09:15:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:41196c21-2d76-4a97-84fb-43d986b41aee"
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
          "reference" : "urn:uuid:37c8bc0f-3d85-44a5-a4a3-498fafd2abf7"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:039c5a56-4aa4-4ea0-8b1c-a7b2872df0c1",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "039c5a56-4aa4-4ea0-8b1c-a7b2872df0c1",
        "identifier" : [
          {
            "system" : "urn:oid:2.51.1.3",
            "value" : "7601000234438"
          }
        ],
        "name" : [
          {
            "family" : "Giacometti",
            "given" : ["Monika"]
          }
        ],
        "telecom" : [
          {
            "system" : "phone",
            "value" : "+41 79 111 44 55"
          },
          {
            "system" : "email",
            "value" : "m.giacometti@ks-abc.ch"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:5fe5b34e-f702-40d8-a05e-f6b7cfd46423",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "5fe5b34e-f702-40d8-a05e-f6b7cfd46423",
        "identifier" : [
          {
            "system" : "urn:oid:2.16.756.5.45",
            "value" : "A99684215"
          }
        ],
        "name" : "Kantonsspital ABC",
        "address" : [
          {
            "line" : ["Aortastrasse 22"],
            "_line" : [
              {
                "extension" : [
                  {
                    "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-streetName",
                    "valueString" : "Aortastrasse"
                  },
                  {
                    "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-houseNumber",
                    "valueString" : "22"
                  },
                  {
                    "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-postBox",
                    "valueString" : "Postfach 18"
                  }
                ]
              }
            ],
            "city" : "Bern",
            "postalCode" : "3000"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:90595985-fa89-4eb9-9c40-14e1b11741e0",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "90595985-fa89-4eb9-9c40-14e1b11741e0",
        "practitioner" : {
          "reference" : "urn:uuid:039c5a56-4aa4-4ea0-8b1c-a7b2872df0c1"
        },
        "organization" : {
          "reference" : "urn:uuid:5fe5b34e-f702-40d8-a05e-f6b7cfd46423"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:37c8bc0f-3d85-44a5-a4a3-498fafd2abf7",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "37c8bc0f-3d85-44a5-a4a3-498fafd2abf7",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:05d4086f-5dcc-44de-8fa8-253ff1550c60"
        },
        "collection" : {
          "collectedDateTime" : "2024-10-10T09:15:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:483a79d7-cc90-40a2-aad9-a418b2ffde16",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "483a79d7-cc90-40a2-aad9-a418b2ffde16",
        "identifier" : [
          {
            "value" : "50002755"
          }
        ],
        "status" : "completed",
        "intent" : "order",
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "101802-7"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:05d4086f-5dcc-44de-8fa8-253ff1550c60"
        },
        "requester" : {
          "reference" : "urn:uuid:90595985-fa89-4eb9-9c40-14e1b11741e0"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:37c8bc0f-3d85-44a5-a4a3-498fafd2abf7"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:3dc4969f-9932-4b81-bd8a-cc928ced8054",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "3dc4969f-9932-4b81-bd8a-cc928ced8054",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:9e7009a4-a28c-423a-98a1-98d70ab0901c"
            }
          }
        ],
        "identifier" : [
          {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:ac01252d-6012-443f-9690-9291adb23433"
          }
        ],
        "basedOn" : [
          {
            "reference" : "urn:uuid:483a79d7-cc90-40a2-aad9-a418b2ffde16"
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
          "reference" : "urn:uuid:05d4086f-5dcc-44de-8fa8-253ff1550c60"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:41196c21-2d76-4a97-84fb-43d986b41aee"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:37c8bc0f-3d85-44a5-a4a3-498fafd2abf7"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:0290618b-29e2-40fa-a422-d35595f06112"
          }
        ]
      }
    }
  ]
}

```
