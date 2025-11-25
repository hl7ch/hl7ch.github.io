# 18Doc - Corynebacterium diphtheriae - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **18Doc - Corynebacterium diphtheriae**

## Example Bundle: 18Doc - Corynebacterium diphtheriae

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

Entry 2 - fullUrl = urn:uuid:11e6e6e3-db63-4e7f-8591-d2ff663bafda

Resource Patient:

> Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 3 - fullUrl = urn:uuid:59455fa1-a0ea-4b5d-bc9b-f4924b52bb69

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:cb49ec4c-4454-4799-bba3-1724d718a21f

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Corynebacterium diphtheriae DNA [Presence] in Specimen by NAA with probe detection**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-18Doc-C-diphtheriae.md#urn-uuid-11e6e6e3-db63-4e7f-8591-d2ff663bafda)**effective**: 2024-08-12 09:15:00+0200**performer**:[Organization SanLab](Bundle-18Doc-C-diphtheriae.md#urn-uuid-59455fa1-a0ea-4b5d-bc9b-f4924b52bb69)**dataAbsentReason**:Not Applicable**interpretation**:Positive**specimen**:[Specimen: type = Specimen from skin (specimen)](Bundle-18Doc-C-diphtheriae.md#urn-uuid-54d2ee7e-227e-4396-8653-8e82a6d0e3e7)

-------

Entry 5 - fullUrl = urn:uuid:88da073c-c6de-4b56-8b70-5a39709f7e06

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000234438**name**: Monika Giacometti**telecom**:[+41 79 111 44 55](tel:+41791114455),[m.giacometti@ks-abc.ch](mailto:m.giacometti@ks-abc.ch)

-------

Entry 6 - fullUrl = urn:uuid:65d13017-fb61-4306-944d-2a82bb3d71d3

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A99684215**name**: Kantonsspital ABC

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Aortastrasse 22 Bern 3000 |


-------

Entry 7 - fullUrl = urn:uuid:1c75859e-db70-4bc4-a54c-ac3d266fa058

Resource PractitionerRole:

> **practitioner**:[Practitioner Monika Giacometti](Bundle-18Doc-C-diphtheriae.md#urn-uuid-88da073c-c6de-4b56-8b70-5a39709f7e06)**organization**:[Organization Kantonsspital ABC](Bundle-18Doc-C-diphtheriae.md#urn-uuid-65d13017-fb61-4306-944d-2a82bb3d71d3)

-------

Entry 8 - fullUrl = urn:uuid:54d2ee7e-227e-4396-8653-8e82a6d0e3e7

Resource Specimen:

> **type**:Specimen from skin (specimen)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-18Doc-C-diphtheriae.md#urn-uuid-11e6e6e3-db63-4e7f-8591-d2ff663bafda)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-08-10 09:15:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:b94d3c99-71ab-4467-b600-13dcf2c32b5b

Resource ServiceRequest:

> **identifier**: 50002755**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Corynebacterium diphtheriae DNA [Presence] in Specimen by NAA with probe detection)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-18Doc-C-diphtheriae.md#urn-uuid-11e6e6e3-db63-4e7f-8591-d2ff663bafda)**requester**:[PractitionerRole](Bundle-18Doc-C-diphtheriae.md#urn-uuid-1c75859e-db70-4bc4-a54c-ac3d266fa058)**specimen**:[Specimen: type = Specimen from skin (specimen)](Bundle-18Doc-C-diphtheriae.md#urn-uuid-54d2ee7e-227e-4396-8653-8e82a6d0e3e7)

-------

Entry 10 - fullUrl = urn:uuid:a6864010-e40c-49c7-b70b-defe3cdf73dc

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-18Doc-C-diphtheriae.md#urn-uuid-59455fa1-a0ea-4b5d-bc9b-f4924b52bb69) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:ac01252d-6012-443f-9690-9291adb23433 |

**Report Details**

* **Code**: [Corynebacterium diphtheriae DNA [Presence] in Specimen by NAA with probe detection](Bundle-18Doc-C-diphtheriae.md#urn-uuid-cb49ec4c-4454-4799-bba3-1724d718a21f)
  * **Value**: Error:**Not Applicable**
  * **Flags**: Final,Positive
  * **When For**: 2024-08-12 09:15:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "18Doc-C-diphtheriae",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:ac01252d-6012-443f-9690-9291adb23433"
  },
  "type" : "document",
  "timestamp" : "2024-08-14T11:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:d04dfed5-7d8c-4008-bd64-67ff3dba21a6",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "d04dfed5-7d8c-4008-bd64-67ff3dba21a6",
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
          "reference" : "urn:uuid:11e6e6e3-db63-4e7f-8591-d2ff663bafda"
        },
        "date" : "2024-08-14T11:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:59455fa1-a0ea-4b5d-bc9b-f4924b52bb69"
          }
        ],
        "title" : "Laborbericht vom 14.8.2024",
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
                "reference" : "urn:uuid:cb49ec4c-4454-4799-bba3-1724d718a21f"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:11e6e6e3-db63-4e7f-8591-d2ff663bafda",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "11e6e6e3-db63-4e7f-8591-d2ff663bafda",
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
      "fullUrl" : "urn:uuid:59455fa1-a0ea-4b5d-bc9b-f4924b52bb69",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "59455fa1-a0ea-4b5d-bc9b-f4924b52bb69",
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
      "fullUrl" : "urn:uuid:cb49ec4c-4454-4799-bba3-1724d718a21f",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "cb49ec4c-4454-4799-bba3-1724d718a21f",
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
              "code" : "67561-1"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:11e6e6e3-db63-4e7f-8591-d2ff663bafda"
        },
        "effectiveDateTime" : "2024-08-12T09:15:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:59455fa1-a0ea-4b5d-bc9b-f4924b52bb69"
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
          "reference" : "urn:uuid:54d2ee7e-227e-4396-8653-8e82a6d0e3e7"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:88da073c-c6de-4b56-8b70-5a39709f7e06",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "88da073c-c6de-4b56-8b70-5a39709f7e06",
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
      "fullUrl" : "urn:uuid:65d13017-fb61-4306-944d-2a82bb3d71d3",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "65d13017-fb61-4306-944d-2a82bb3d71d3",
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
      "fullUrl" : "urn:uuid:1c75859e-db70-4bc4-a54c-ac3d266fa058",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "1c75859e-db70-4bc4-a54c-ac3d266fa058",
        "practitioner" : {
          "reference" : "urn:uuid:88da073c-c6de-4b56-8b70-5a39709f7e06"
        },
        "organization" : {
          "reference" : "urn:uuid:65d13017-fb61-4306-944d-2a82bb3d71d3"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:54d2ee7e-227e-4396-8653-8e82a6d0e3e7",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "54d2ee7e-227e-4396-8653-8e82a6d0e3e7",
        "type" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "608969007"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:11e6e6e3-db63-4e7f-8591-d2ff663bafda"
        },
        "collection" : {
          "collectedDateTime" : "2024-08-10T09:15:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:b94d3c99-71ab-4467-b600-13dcf2c32b5b",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "b94d3c99-71ab-4467-b600-13dcf2c32b5b",
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
              "code" : "67561-1"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:11e6e6e3-db63-4e7f-8591-d2ff663bafda"
        },
        "requester" : {
          "reference" : "urn:uuid:1c75859e-db70-4bc4-a54c-ac3d266fa058"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:54d2ee7e-227e-4396-8653-8e82a6d0e3e7"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:a6864010-e40c-49c7-b70b-defe3cdf73dc",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "a6864010-e40c-49c7-b70b-defe3cdf73dc",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:d04dfed5-7d8c-4008-bd64-67ff3dba21a6"
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
            "reference" : "urn:uuid:b94d3c99-71ab-4467-b600-13dcf2c32b5b"
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
          "reference" : "urn:uuid:11e6e6e3-db63-4e7f-8591-d2ff663bafda"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:59455fa1-a0ea-4b5d-bc9b-f4924b52bb69"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:54d2ee7e-227e-4396-8653-8e82a6d0e3e7"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:cb49ec4c-4454-4799-bba3-1724d718a21f"
          }
        ]
      }
    }
  ]
}

```
