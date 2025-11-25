# 45Doc - SARS-CoV - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **45Doc - SARS-CoV**

## Example Bundle: 45Doc - SARS-CoV

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

Entry 2 - fullUrl = urn:uuid:dd913d05-ff0b-4c8a-a7b0-ccc1d61a229f

Resource Patient:

> Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 3 - fullUrl = urn:uuid:1250bb45-ea3c-479f-8a54-b27ea0c60e21

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:f3f30506-d0cd-4216-a6de-aa3fcd223666

Resource Observation:

> **status**: Final**category**:Laboratory**code**:SARS coronavirus RNA [Presence] in Specimen by NAA with probe detection**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-45Doc-Sars-CoV.md#urn-uuid-dd913d05-ff0b-4c8a-a7b0-ccc1d61a229f)**effective**: 2024-10-19 14:20:00+0200**performer**:[Organization SanLab](Bundle-45Doc-Sars-CoV.md#urn-uuid-1250bb45-ea3c-479f-8a54-b27ea0c60e21)**dataAbsentReason**:Not Applicable**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-45Doc-Sars-CoV.md#urn-uuid-dc1c0003-ead5-4f33-ae29-e54011e7ce74)

-------

Entry 5 - fullUrl = urn:uuid:65e82177-cd06-4589-867b-b54134addc8e

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514**name**: Peter Hauser**telecom**:[+41 79 222 33 44](tel:+41792223344),[peter.hauser@hauserpraxis.ch](mailto:peter.hauser@hauserpraxis.ch)

-------

Entry 6 - fullUrl = urn:uuid:ee4a42df-f57b-4abf-88bc-162f57fddd8c

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A74966168**name**: Praxis Dr. Hauser

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Hauptstrasse 10 Solothurn 4500 |


-------

Entry 7 - fullUrl = urn:uuid:cbd0b41c-5934-40ea-9495-3b6502a530c4

Resource PractitionerRole:

> **practitioner**:[Practitioner Peter Hauser](Bundle-45Doc-Sars-CoV.md#urn-uuid-65e82177-cd06-4589-867b-b54134addc8e)**organization**:[Organization Praxis Dr. Hauser](Bundle-45Doc-Sars-CoV.md#urn-uuid-ee4a42df-f57b-4abf-88bc-162f57fddd8c)

-------

Entry 8 - fullUrl = urn:uuid:dc1c0003-ead5-4f33-ae29-e54011e7ce74

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-45Doc-Sars-CoV.md#urn-uuid-dd913d05-ff0b-4c8a-a7b0-ccc1d61a229f)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-10-15 14:20:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:b41f7c58-7e02-464a-8879-925227391c75

Resource ServiceRequest:

> **identifier**: 26500923675**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: SARS coronavirus RNA [Presence] in Specimen by NAA with probe detection)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-45Doc-Sars-CoV.md#urn-uuid-dd913d05-ff0b-4c8a-a7b0-ccc1d61a229f)**requester**:[PractitionerRole](Bundle-45Doc-Sars-CoV.md#urn-uuid-cbd0b41c-5934-40ea-9495-3b6502a530c4)**specimen**:[Specimen: type =](Bundle-45Doc-Sars-CoV.md#urn-uuid-dc1c0003-ead5-4f33-ae29-e54011e7ce74)

-------

Entry 10 - fullUrl = urn:uuid:6e23eea4-e51e-4d24-bcb6-84b13aed6f40

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-45Doc-Sars-CoV.md#urn-uuid-1250bb45-ea3c-479f-8a54-b27ea0c60e21) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab |

**Report Details**

* **Code**: [SARS coronavirus RNA [Presence] in Specimen by NAA with probe detection](Bundle-45Doc-Sars-CoV.md#urn-uuid-f3f30506-d0cd-4216-a6de-aa3fcd223666)
  * **Value**: Error:**Not Applicable**
  * **Flags**: Final,Positive
  * **When For**: 2024-10-19 14:20:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "45Doc-Sars-CoV",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-10-20T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:18b83cf7-0e14-4b44-b39d-7b791a3e7bb6",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "18b83cf7-0e14-4b44-b39d-7b791a3e7bb6",
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
          "reference" : "urn:uuid:dd913d05-ff0b-4c8a-a7b0-ccc1d61a229f"
        },
        "date" : "2024-10-20T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:1250bb45-ea3c-479f-8a54-b27ea0c60e21"
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
                "reference" : "urn:uuid:f3f30506-d0cd-4216-a6de-aa3fcd223666"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:dd913d05-ff0b-4c8a-a7b0-ccc1d61a229f",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "dd913d05-ff0b-4c8a-a7b0-ccc1d61a229f",
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
      "fullUrl" : "urn:uuid:1250bb45-ea3c-479f-8a54-b27ea0c60e21",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "1250bb45-ea3c-479f-8a54-b27ea0c60e21",
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
      "fullUrl" : "urn:uuid:f3f30506-d0cd-4216-a6de-aa3fcd223666",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "f3f30506-d0cd-4216-a6de-aa3fcd223666",
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
              "code" : "41458-1"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:dd913d05-ff0b-4c8a-a7b0-ccc1d61a229f"
        },
        "effectiveDateTime" : "2024-10-19T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:1250bb45-ea3c-479f-8a54-b27ea0c60e21"
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
          "reference" : "urn:uuid:dc1c0003-ead5-4f33-ae29-e54011e7ce74"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:65e82177-cd06-4589-867b-b54134addc8e",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "65e82177-cd06-4589-867b-b54134addc8e",
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
      "fullUrl" : "urn:uuid:ee4a42df-f57b-4abf-88bc-162f57fddd8c",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "ee4a42df-f57b-4abf-88bc-162f57fddd8c",
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
      "fullUrl" : "urn:uuid:cbd0b41c-5934-40ea-9495-3b6502a530c4",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "cbd0b41c-5934-40ea-9495-3b6502a530c4",
        "practitioner" : {
          "reference" : "urn:uuid:65e82177-cd06-4589-867b-b54134addc8e"
        },
        "organization" : {
          "reference" : "urn:uuid:ee4a42df-f57b-4abf-88bc-162f57fddd8c"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:dc1c0003-ead5-4f33-ae29-e54011e7ce74",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "dc1c0003-ead5-4f33-ae29-e54011e7ce74",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:dd913d05-ff0b-4c8a-a7b0-ccc1d61a229f"
        },
        "collection" : {
          "collectedDateTime" : "2024-10-15T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:b41f7c58-7e02-464a-8879-925227391c75",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "b41f7c58-7e02-464a-8879-925227391c75",
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
              "code" : "41458-1"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:dd913d05-ff0b-4c8a-a7b0-ccc1d61a229f"
        },
        "requester" : {
          "reference" : "urn:uuid:cbd0b41c-5934-40ea-9495-3b6502a530c4"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:dc1c0003-ead5-4f33-ae29-e54011e7ce74"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:6e23eea4-e51e-4d24-bcb6-84b13aed6f40",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "6e23eea4-e51e-4d24-bcb6-84b13aed6f40",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:18b83cf7-0e14-4b44-b39d-7b791a3e7bb6"
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
            "reference" : "urn:uuid:b41f7c58-7e02-464a-8879-925227391c75"
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
          "reference" : "urn:uuid:dd913d05-ff0b-4c8a-a7b0-ccc1d61a229f"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:1250bb45-ea3c-479f-8a54-b27ea0c60e21"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:dc1c0003-ead5-4f33-ae29-e54011e7ce74"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:f3f30506-d0cd-4216-a6de-aa3fcd223666"
          }
        ]
      }
    }
  ]
}

```
