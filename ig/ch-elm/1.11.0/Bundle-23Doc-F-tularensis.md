# 23Doc - Francisella tularensis with organism specification - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **23Doc - Francisella tularensis with organism specification**

## Example Bundle: 23Doc - Francisella tularensis with organism specification

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

Entry 2 - fullUrl = urn:uuid:1c276694-edba-49de-9331-88a2d08ed688

Resource Patient:

> D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)
-------

-------

Entry 3 - fullUrl = urn:uuid:c55df375-6d56-489d-bf18-1acf52a866bb

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:ff5419c9-2bec-48d9-8c41-61f6bd4748df

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Francisella tularensis Ag [Presence] in Serum**subject**:[D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Bundle-23Doc-F-tularensis.md#urn-uuid-1c276694-edba-49de-9331-88a2d08ed688)**effective**: 2024-08-12 09:15:00+0200**performer**:[Organization SanLab](Bundle-23Doc-F-tularensis.md#urn-uuid-c55df375-6d56-489d-bf18-1acf52a866bb)**value**:Francisella tularensis ss. tularensis**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-23Doc-F-tularensis.md#urn-uuid-c5f7a36f-940b-48e1-980c-743bad786773)

-------

Entry 5 - fullUrl = urn:uuid:73245525-155b-4720-896b-fc676d70a61e

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000234438**name**: Monika Giacometti**telecom**:[+41 79 111 44 55](tel:+41791114455),[m.giacometti@ks-abc.ch](mailto:m.giacometti@ks-abc.ch)

-------

Entry 6 - fullUrl = urn:uuid:8d604367-8343-4799-b5b4-177f58ab9db1

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A99684215**name**: Kantonsspital ABC

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Aortastrasse 22 Bern 3000 |


-------

Entry 7 - fullUrl = urn:uuid:70b50306-7c6d-4bd7-a203-d3ec2b1387bb

Resource PractitionerRole:

> **practitioner**:[Practitioner Monika Giacometti](Bundle-23Doc-F-tularensis.md#urn-uuid-73245525-155b-4720-896b-fc676d70a61e)**organization**:[Organization Kantonsspital ABC](Bundle-23Doc-F-tularensis.md#urn-uuid-8d604367-8343-4799-b5b4-177f58ab9db1)

-------

Entry 8 - fullUrl = urn:uuid:c5f7a36f-940b-48e1-980c-743bad786773

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Bundle-23Doc-F-tularensis.md#urn-uuid-1c276694-edba-49de-9331-88a2d08ed688)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-08-10 09:15:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:e9dcd38c-593d-4db5-9181-e439c6fda5dd

Resource ServiceRequest:

> **identifier**: 50002755**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Francisella tularensis Ag [Presence] in Serum)**subject**:[D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Bundle-23Doc-F-tularensis.md#urn-uuid-1c276694-edba-49de-9331-88a2d08ed688)**requester**:[PractitionerRole](Bundle-23Doc-F-tularensis.md#urn-uuid-70b50306-7c6d-4bd7-a203-d3ec2b1387bb)**specimen**:[Specimen: type =](Bundle-23Doc-F-tularensis.md#urn-uuid-c5f7a36f-940b-48e1-980c-743bad786773)

-------

Entry 10 - fullUrl = urn:uuid:265708c7-e532-4855-908b-cfea197761b8

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070) |
| Performer | [Organization SanLab](Bundle-23Doc-F-tularensis.md#urn-uuid-c55df375-6d56-489d-bf18-1acf52a866bb) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.5.0/NamingSystem-uri.html)/urn:uuid:ac01252d-6012-443f-9690-9291adb23433 |

**Report Details**

* **Code**: [Francisella tularensis Ag [Presence] in Serum](Bundle-23Doc-F-tularensis.md#urn-uuid-ff5419c9-2bec-48d9-8c41-61f6bd4748df)
  * **Value**: Francisella tularensis ss. tularensis
  * **Flags**: Final,Positive
  * **When For**: 2024-08-12 09:15:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "23Doc-F-tularensis",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:ac01252d-6012-443f-9690-9291adb23433"
  },
  "type" : "document",
  "timestamp" : "2024-08-14T11:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:e0baaad6-eae9-4bde-a2d0-be5a3f2f2660",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "e0baaad6-eae9-4bde-a2d0-be5a3f2f2660",
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
          "reference" : "urn:uuid:1c276694-edba-49de-9331-88a2d08ed688"
        },
        "date" : "2024-08-14T11:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:c55df375-6d56-489d-bf18-1acf52a866bb"
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
                "reference" : "urn:uuid:ff5419c9-2bec-48d9-8c41-61f6bd4748df"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:1c276694-edba-49de-9331-88a2d08ed688",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "1c276694-edba-49de-9331-88a2d08ed688",
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
      "fullUrl" : "urn:uuid:c55df375-6d56-489d-bf18-1acf52a866bb",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "c55df375-6d56-489d-bf18-1acf52a866bb",
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
      "fullUrl" : "urn:uuid:ff5419c9-2bec-48d9-8c41-61f6bd4748df",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "ff5419c9-2bec-48d9-8c41-61f6bd4748df",
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
              "code" : "31828-7"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:1c276694-edba-49de-9331-88a2d08ed688"
        },
        "effectiveDateTime" : "2024-08-12T09:15:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:c55df375-6d56-489d-bf18-1acf52a866bb"
          }
        ],
        "valueCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "91508008"
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
          "reference" : "urn:uuid:c5f7a36f-940b-48e1-980c-743bad786773"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:73245525-155b-4720-896b-fc676d70a61e",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "73245525-155b-4720-896b-fc676d70a61e",
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
      "fullUrl" : "urn:uuid:8d604367-8343-4799-b5b4-177f58ab9db1",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "8d604367-8343-4799-b5b4-177f58ab9db1",
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
      "fullUrl" : "urn:uuid:70b50306-7c6d-4bd7-a203-d3ec2b1387bb",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "70b50306-7c6d-4bd7-a203-d3ec2b1387bb",
        "practitioner" : {
          "reference" : "urn:uuid:73245525-155b-4720-896b-fc676d70a61e"
        },
        "organization" : {
          "reference" : "urn:uuid:8d604367-8343-4799-b5b4-177f58ab9db1"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:c5f7a36f-940b-48e1-980c-743bad786773",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "c5f7a36f-940b-48e1-980c-743bad786773",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:1c276694-edba-49de-9331-88a2d08ed688"
        },
        "collection" : {
          "collectedDateTime" : "2024-08-10T09:15:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:e9dcd38c-593d-4db5-9181-e439c6fda5dd",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "e9dcd38c-593d-4db5-9181-e439c6fda5dd",
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
              "code" : "31828-7"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:1c276694-edba-49de-9331-88a2d08ed688"
        },
        "requester" : {
          "reference" : "urn:uuid:70b50306-7c6d-4bd7-a203-d3ec2b1387bb"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:c5f7a36f-940b-48e1-980c-743bad786773"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:265708c7-e532-4855-908b-cfea197761b8",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "265708c7-e532-4855-908b-cfea197761b8",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:e0baaad6-eae9-4bde-a2d0-be5a3f2f2660"
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
            "reference" : "urn:uuid:e9dcd38c-593d-4db5-9181-e439c6fda5dd"
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
          "reference" : "urn:uuid:1c276694-edba-49de-9331-88a2d08ed688"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:c55df375-6d56-489d-bf18-1acf52a866bb"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:c5f7a36f-940b-48e1-980c-743bad786773"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:ff5419c9-2bec-48d9-8c41-61f6bd4748df"
          }
        ]
      }
    }
  ]
}

```
