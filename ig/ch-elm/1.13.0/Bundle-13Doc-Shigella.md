# 13Doc - Shigella - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **13Doc - Shigella**

## Example Bundle: 13Doc - Shigella

**Document Details**

**Document Subject**

Meier Donna Female, DoB: 1985-10-17 ( urn:oid:2.16.756.5.32#7561733446723)

-------

-------

**Document Content**

## Analyseergebnisse der mikrobiologischen Untersuchung

-------

## Additional Resources Included in Document

-------

Entry 2 - fullUrl = urn:uuid:aa64ef9d-122e-4b00-9d92-4770de2ed74a

Resource Patient:

> Meier Donna Female, DoB: 1985-10-17 ( urn:oid:2.16.756.5.32#7561733446723)
-------

-------

Entry 3 - fullUrl = urn:uuid:86359785-8fb7-423b-957a-d8d4cb7ccda8

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:f230b941-c008-4001-be8a-5abb53fcb342

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Shigella sp [Presence] in Specimen by Organism specific culture**subject**:[Meier Donna Female, DoB: 1985-10-17 ( urn:oid:2.16.756.5.32#7561733446723)](Bundle-13Doc-Shigella.md#urn-uuid-aa64ef9d-122e-4b00-9d92-4770de2ed74a)**effective**: 2024-04-20 07:35:00+0200**performer**:[Organization SanLab](Bundle-13Doc-Shigella.md#urn-uuid-86359785-8fb7-423b-957a-d8d4cb7ccda8)**value**:Shigella flexneri, serovar X**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-13Doc-Shigella.md#urn-uuid-7da0799d-e4f9-4ab5-a915-ddc66609b749)

-------

Entry 5 - fullUrl = urn:uuid:211537c8-1a69-4b4c-834c-2afb2b2633d5

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000234438**name**: Monika Giacometti**telecom**:[+41 79 111 44 55](tel:+41791114455),[m.giacometti@ks-abc.ch](mailto:m.giacometti@ks-abc.ch)

-------

Entry 6 - fullUrl = urn:uuid:0d6568a3-a28d-46b0-9db0-c46155191dfd

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A99684215**name**: Kantonsspital ABC

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Aortastrasse 22 Bern 3000 |


-------

Entry 7 - fullUrl = urn:uuid:176ed780-0669-4343-8173-553b18189039

Resource PractitionerRole:

> **practitioner**:[Practitioner Monika Giacometti](Bundle-13Doc-Shigella.md#urn-uuid-211537c8-1a69-4b4c-834c-2afb2b2633d5)**organization**:[Organization Kantonsspital ABC](Bundle-13Doc-Shigella.md#urn-uuid-0d6568a3-a28d-46b0-9db0-c46155191dfd)

-------

Entry 8 - fullUrl = urn:uuid:7da0799d-e4f9-4ab5-a915-ddc66609b749

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[Meier Donna Female, DoB: 1985-10-17 ( urn:oid:2.16.756.5.32#7561733446723)](Bundle-13Doc-Shigella.md#urn-uuid-aa64ef9d-122e-4b00-9d92-4770de2ed74a)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-04-18 |


-------

Entry 9 - fullUrl = urn:uuid:67d2d2fb-15c2-4b37-b7be-9f9efdbf4094

Resource ServiceRequest:

> **identifier**: 26955847714**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Shigella sp [Presence] in Specimen by Organism specific culture)**subject**:[Meier Donna Female, DoB: 1985-10-17 ( urn:oid:2.16.756.5.32#7561733446723)](Bundle-13Doc-Shigella.md#urn-uuid-aa64ef9d-122e-4b00-9d92-4770de2ed74a)**requester**:[PractitionerRole](Bundle-13Doc-Shigella.md#urn-uuid-176ed780-0669-4343-8173-553b18189039)**specimen**:[Specimen: type =](Bundle-13Doc-Shigella.md#urn-uuid-7da0799d-e4f9-4ab5-a915-ddc66609b749)

-------

Entry 10 - fullUrl = urn:uuid:30718319-2c52-4f5a-b0ee-b3322093157f

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Meier Donna Female, DoB: 1985-10-17 ( urn:oid:2.16.756.5.32#7561733446723) |
| Performer | [Organization SanLab](Bundle-13Doc-Shigella.md#urn-uuid-86359785-8fb7-423b-957a-d8d4cb7ccda8) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:1901332d-6012-413f-9690-9291adb2cb3b |

**Report Details**

* **Code**: [Shigella sp [Presence] in Specimen by Organism specific culture](Bundle-13Doc-Shigella.md#urn-uuid-f230b941-c008-4001-be8a-5abb53fcb342)
  * **Value**: Shigella flexneri, serovar X
  * **Flags**: Final,Positive
  * **When For**: 2024-04-20 07:35:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "13Doc-Shigella",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:1901332d-6012-413f-9690-9291adb2cb3b"
  },
  "type" : "document",
  "timestamp" : "2024-04-20T07:35:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:f15650f4-e9c3-422a-8577-502de23e0945",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "f15650f4-e9c3-422a-8577-502de23e0945",
        "language" : "de-CH",
        "identifier" : {
          "system" : "urn:ietf:rfc:3986",
          "value" : "urn:uuid:1901332d-6012-413f-9690-9291adb2cb3b"
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
          "reference" : "urn:uuid:aa64ef9d-122e-4b00-9d92-4770de2ed74a"
        },
        "date" : "2024-04-20T07:35:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:86359785-8fb7-423b-957a-d8d4cb7ccda8"
          }
        ],
        "title" : "Laborbericht vom 20.04.2024",
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
                "reference" : "urn:uuid:f230b941-c008-4001-be8a-5abb53fcb342"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:aa64ef9d-122e-4b00-9d92-4770de2ed74a",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "aa64ef9d-122e-4b00-9d92-4770de2ed74a",
        "identifier" : [
          {
            "system" : "urn:oid:2.16.756.5.32",
            "value" : "7561733446723"
          }
        ],
        "name" : [
          {
            "family" : "Donna",
            "given" : ["Meier"]
          }
        ],
        "gender" : "female",
        "birthDate" : "1985-10-17",
        "address" : [
          {
            "use" : "home",
            "line" : ["Bahnhofstrasse 27"],
            "city" : "Derendingen",
            "state" : "SO",
            "postalCode" : "4552",
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
      "fullUrl" : "urn:uuid:86359785-8fb7-423b-957a-d8d4cb7ccda8",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "86359785-8fb7-423b-957a-d8d4cb7ccda8",
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
      "fullUrl" : "urn:uuid:f230b941-c008-4001-be8a-5abb53fcb342",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "f230b941-c008-4001-be8a-5abb53fcb342",
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
              "code" : "46454-5"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:aa64ef9d-122e-4b00-9d92-4770de2ed74a"
        },
        "effectiveDateTime" : "2024-04-20T07:35:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:86359785-8fb7-423b-957a-d8d4cb7ccda8"
          }
        ],
        "valueCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "125020009"
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
          "reference" : "urn:uuid:7da0799d-e4f9-4ab5-a915-ddc66609b749"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:211537c8-1a69-4b4c-834c-2afb2b2633d5",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "211537c8-1a69-4b4c-834c-2afb2b2633d5",
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
      "fullUrl" : "urn:uuid:0d6568a3-a28d-46b0-9db0-c46155191dfd",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "0d6568a3-a28d-46b0-9db0-c46155191dfd",
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
      "fullUrl" : "urn:uuid:176ed780-0669-4343-8173-553b18189039",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "176ed780-0669-4343-8173-553b18189039",
        "practitioner" : {
          "reference" : "urn:uuid:211537c8-1a69-4b4c-834c-2afb2b2633d5"
        },
        "organization" : {
          "reference" : "urn:uuid:0d6568a3-a28d-46b0-9db0-c46155191dfd"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:7da0799d-e4f9-4ab5-a915-ddc66609b749",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "7da0799d-e4f9-4ab5-a915-ddc66609b749",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:aa64ef9d-122e-4b00-9d92-4770de2ed74a"
        },
        "collection" : {
          "collectedDateTime" : "2024-04-18"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:67d2d2fb-15c2-4b37-b7be-9f9efdbf4094",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "67d2d2fb-15c2-4b37-b7be-9f9efdbf4094",
        "identifier" : [
          {
            "value" : "26955847714"
          }
        ],
        "status" : "completed",
        "intent" : "order",
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "46454-5"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:aa64ef9d-122e-4b00-9d92-4770de2ed74a"
        },
        "requester" : {
          "reference" : "urn:uuid:176ed780-0669-4343-8173-553b18189039"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:7da0799d-e4f9-4ab5-a915-ddc66609b749"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:30718319-2c52-4f5a-b0ee-b3322093157f",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "30718319-2c52-4f5a-b0ee-b3322093157f",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:f15650f4-e9c3-422a-8577-502de23e0945"
            }
          }
        ],
        "identifier" : [
          {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:1901332d-6012-413f-9690-9291adb2cb3b"
          }
        ],
        "basedOn" : [
          {
            "reference" : "urn:uuid:67d2d2fb-15c2-4b37-b7be-9f9efdbf4094"
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
          "reference" : "urn:uuid:aa64ef9d-122e-4b00-9d92-4770de2ed74a"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:86359785-8fb7-423b-957a-d8d4cb7ccda8"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:7da0799d-e4f9-4ab5-a915-ddc66609b749"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:f230b941-c008-4001-be8a-5abb53fcb342"
          }
        ]
      }
    }
  ]
}

```
