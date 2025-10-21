# 11Doc - Malaria - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **11Doc - Malaria**

## Example Bundle: 11Doc - Malaria

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

Entry 2 - fullUrl = urn:uuid:53d74b79-32de-4bf2-91a6-8f94d0def5eb

Resource Patient:

> D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)
-------

-------

Entry 3 - fullUrl = urn:uuid:187f9b81-4cbc-4f55-901c-bc7cadaf008f

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:eb5a2099-383b-4802-84a3-c3f21417d4b0

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Plasmodium knowlesi DNA [Presence] in Blood by NAA with probe detection**subject**:[D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Bundle-11Doc-Malaria.md#urn-uuid-53d74b79-32de-4bf2-91a6-8f94d0def5eb)**effective**: 2023-09-15 09:15:00+0200**performer**:[Organization SanLab](Bundle-11Doc-Malaria.md#urn-uuid-187f9b81-4cbc-4f55-901c-bc7cadaf008f)**value**:Positive (qualifier value)**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-11Doc-Malaria.md#urn-uuid-f8ddac96-d84d-4bad-934b-48deff10bbf3)

-------

Entry 5 - fullUrl = urn:uuid:6d81a36f-b838-4c71-b20c-22c8607ec1d2

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000234438**name**: Monika Giacometti**telecom**:[+41 79 111 44 55](tel:+41791114455),[m.giacometti@ks-abc.ch](mailto:m.giacometti@ks-abc.ch)

-------

Entry 6 - fullUrl = urn:uuid:6fcf633f-8c5e-44dd-a8ed-8b1e28e6151c

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A99684215**name**: Kantonsspital ABC

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Aortastrasse 22 Bern 3000 |


-------

Entry 7 - fullUrl = urn:uuid:6f70294f-29c1-47c8-ab44-16469d49e9cf

Resource PractitionerRole:

> **practitioner**:[Practitioner Monika Giacometti](Bundle-11Doc-Malaria.md#urn-uuid-6d81a36f-b838-4c71-b20c-22c8607ec1d2)**organization**:[Organization Kantonsspital ABC](Bundle-11Doc-Malaria.md#urn-uuid-6fcf633f-8c5e-44dd-a8ed-8b1e28e6151c)

-------

Entry 8 - fullUrl = urn:uuid:f8ddac96-d84d-4bad-934b-48deff10bbf3

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Bundle-11Doc-Malaria.md#urn-uuid-53d74b79-32de-4bf2-91a6-8f94d0def5eb)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2023-09-12 |


-------

Entry 9 - fullUrl = urn:uuid:602b8d60-9104-4737-86f6-7770b0eecdcb

Resource ServiceRequest:

> **identifier**: 23846922417**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Plasmodium knowlesi DNA [Presence] in Blood by NAA with probe detection)**subject**:[D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Bundle-11Doc-Malaria.md#urn-uuid-53d74b79-32de-4bf2-91a6-8f94d0def5eb)**requester**:[PractitionerRole](Bundle-11Doc-Malaria.md#urn-uuid-6f70294f-29c1-47c8-ab44-16469d49e9cf)**specimen**:[Specimen: type =](Bundle-11Doc-Malaria.md#urn-uuid-f8ddac96-d84d-4bad-934b-48deff10bbf3)

-------

Entry 10 - fullUrl = urn:uuid:80fa1a58-c692-4a4b-98a3-764f79b8fc93

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070) |
| Performer | [Organization SanLab](Bundle-11Doc-Malaria.md#urn-uuid-187f9b81-4cbc-4f55-901c-bc7cadaf008f) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.5.0/NamingSystem-uri.html)/urn:uuid:1904332d-6012-443f-9690-9291adb234fe |

**Report Details**

* **Code**: [Plasmodium knowlesi DNA [Presence] in Blood by NAA with probe detection](Bundle-11Doc-Malaria.md#urn-uuid-eb5a2099-383b-4802-84a3-c3f21417d4b0)
  * **Value**: Positive (qualifier value)
  * **Flags**: Final,Positive
  * **When For**: 2023-09-15 09:15:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "11Doc-Malaria",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:1904332d-6012-443f-9690-9291adb234fe"
  },
  "type" : "document",
  "timestamp" : "2023-09-15T11:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:c86447fc-1d7d-4365-b2a4-fd50da374dc4",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "c86447fc-1d7d-4365-b2a4-fd50da374dc4",
        "language" : "de-CH",
        "identifier" : {
          "system" : "urn:ietf:rfc:3986",
          "value" : "urn:uuid:1904332d-6012-443f-9690-9291adb234fe"
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
          "reference" : "urn:uuid:53d74b79-32de-4bf2-91a6-8f94d0def5eb"
        },
        "date" : "2023-09-15T11:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:187f9b81-4cbc-4f55-901c-bc7cadaf008f"
          }
        ],
        "title" : "Laborbericht vom 15.09.2023",
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
                "reference" : "urn:uuid:eb5a2099-383b-4802-84a3-c3f21417d4b0"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:53d74b79-32de-4bf2-91a6-8f94d0def5eb",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "53d74b79-32de-4bf2-91a6-8f94d0def5eb",
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
      "fullUrl" : "urn:uuid:187f9b81-4cbc-4f55-901c-bc7cadaf008f",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "187f9b81-4cbc-4f55-901c-bc7cadaf008f",
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
      "fullUrl" : "urn:uuid:eb5a2099-383b-4802-84a3-c3f21417d4b0",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "eb5a2099-383b-4802-84a3-c3f21417d4b0",
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
              "code" : "70568-1"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:53d74b79-32de-4bf2-91a6-8f94d0def5eb"
        },
        "effectiveDateTime" : "2023-09-15T09:15:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:187f9b81-4cbc-4f55-901c-bc7cadaf008f"
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
          "reference" : "urn:uuid:f8ddac96-d84d-4bad-934b-48deff10bbf3"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:6d81a36f-b838-4c71-b20c-22c8607ec1d2",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "6d81a36f-b838-4c71-b20c-22c8607ec1d2",
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
      "fullUrl" : "urn:uuid:6fcf633f-8c5e-44dd-a8ed-8b1e28e6151c",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "6fcf633f-8c5e-44dd-a8ed-8b1e28e6151c",
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
      "fullUrl" : "urn:uuid:6f70294f-29c1-47c8-ab44-16469d49e9cf",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "6f70294f-29c1-47c8-ab44-16469d49e9cf",
        "practitioner" : {
          "reference" : "urn:uuid:6d81a36f-b838-4c71-b20c-22c8607ec1d2"
        },
        "organization" : {
          "reference" : "urn:uuid:6fcf633f-8c5e-44dd-a8ed-8b1e28e6151c"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:f8ddac96-d84d-4bad-934b-48deff10bbf3",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "f8ddac96-d84d-4bad-934b-48deff10bbf3",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:53d74b79-32de-4bf2-91a6-8f94d0def5eb"
        },
        "collection" : {
          "collectedDateTime" : "2023-09-12"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:602b8d60-9104-4737-86f6-7770b0eecdcb",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "602b8d60-9104-4737-86f6-7770b0eecdcb",
        "identifier" : [
          {
            "value" : "23846922417"
          }
        ],
        "status" : "completed",
        "intent" : "order",
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "70568-1"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:53d74b79-32de-4bf2-91a6-8f94d0def5eb"
        },
        "requester" : {
          "reference" : "urn:uuid:6f70294f-29c1-47c8-ab44-16469d49e9cf"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:f8ddac96-d84d-4bad-934b-48deff10bbf3"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:80fa1a58-c692-4a4b-98a3-764f79b8fc93",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "80fa1a58-c692-4a4b-98a3-764f79b8fc93",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:c86447fc-1d7d-4365-b2a4-fd50da374dc4"
            }
          }
        ],
        "identifier" : [
          {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:1904332d-6012-443f-9690-9291adb234fe"
          }
        ],
        "basedOn" : [
          {
            "reference" : "urn:uuid:602b8d60-9104-4737-86f6-7770b0eecdcb"
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
          "reference" : "urn:uuid:53d74b79-32de-4bf2-91a6-8f94d0def5eb"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:187f9b81-4cbc-4f55-901c-bc7cadaf008f"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:f8ddac96-d84d-4bad-934b-48deff10bbf3"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:eb5a2099-383b-4802-84a3-c3f21417d4b0"
          }
        ]
      }
    }
  ]
}

```
