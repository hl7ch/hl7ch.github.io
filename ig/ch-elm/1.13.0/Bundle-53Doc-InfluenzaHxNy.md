# 53Doc - Influenza HxNy - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **53Doc - Influenza HxNy**

## Example Bundle: 53Doc - Influenza HxNy

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

Entry 2 - fullUrl = urn:uuid:3edbb8ab-60da-4474-b836-c32d88aac763

Resource Patient:

> Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 3 - fullUrl = urn:uuid:00dbbd23-a6b0-48ea-a0cf-c052c6550f85

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:658a48a7-b2e3-489b-b1d9-3dc81c65ca05

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Influenza virus A hemagglutinin type RNA [Identifier] in Specimen by NAA with probe detection**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-53Doc-InfluenzaHxNy.md#urn-uuid-3edbb8ab-60da-4474-b836-c32d88aac763)**effective**: 2024-08-28 14:20:00+0200**performer**:[Organization SanLab](Bundle-53Doc-InfluenzaHxNy.md#urn-uuid-00dbbd23-a6b0-48ea-a0cf-c052c6550f85)**value**:Influenza A virus subtype H10 (organism)**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-53Doc-InfluenzaHxNy.md#urn-uuid-32e05a43-37f2-457c-8eab-d7193372ac7b)

-------

Entry 5 - fullUrl = urn:uuid:8cb886ad-dd5d-457d-bd0c-2ef10d215dc4

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514**name**: Peter Hauser**telecom**:[+41 79 222 33 44](tel:+41792223344),[peter.hauser@hauserpraxis.ch](mailto:peter.hauser@hauserpraxis.ch)

-------

Entry 6 - fullUrl = urn:uuid:3a348e7b-879c-4ca7-a12f-adb301501607

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A74966168**name**: Praxis Dr. Hauser

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Hauptstrasse 10 Solothurn 4500 |


-------

Entry 7 - fullUrl = urn:uuid:396b6222-02da-46a7-ae79-a52948d686ef

Resource PractitionerRole:

> **practitioner**:[Practitioner Peter Hauser](Bundle-53Doc-InfluenzaHxNy.md#urn-uuid-8cb886ad-dd5d-457d-bd0c-2ef10d215dc4)**organization**:[Organization Praxis Dr. Hauser](Bundle-53Doc-InfluenzaHxNy.md#urn-uuid-3a348e7b-879c-4ca7-a12f-adb301501607)

-------

Entry 8 - fullUrl = urn:uuid:32e05a43-37f2-457c-8eab-d7193372ac7b

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-53Doc-InfluenzaHxNy.md#urn-uuid-3edbb8ab-60da-4474-b836-c32d88aac763)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-08-26 14:20:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:864cc197-d700-4564-a461-a71309187f86

Resource ServiceRequest:

> **identifier**: 26500923622**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Influenza virus A hemagglutinin type RNA [Identifier] in Specimen by NAA with probe detection)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-53Doc-InfluenzaHxNy.md#urn-uuid-3edbb8ab-60da-4474-b836-c32d88aac763)**requester**:[PractitionerRole](Bundle-53Doc-InfluenzaHxNy.md#urn-uuid-396b6222-02da-46a7-ae79-a52948d686ef)**specimen**:[Specimen: type =](Bundle-53Doc-InfluenzaHxNy.md#urn-uuid-32e05a43-37f2-457c-8eab-d7193372ac7b)

-------

Entry 10 - fullUrl = urn:uuid:1d0b1c13-86e6-423b-a5c2-9e9fb091c575

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-53Doc-InfluenzaHxNy.md#urn-uuid-00dbbd23-a6b0-48ea-a0cf-c052c6550f85) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:6401332d-6012-443f-9690-9331adb23aab |

**Report Details**

* **Code**: [Influenza virus A hemagglutinin type RNA [Identifier] in Specimen by NAA with probe detection](Bundle-53Doc-InfluenzaHxNy.md#urn-uuid-658a48a7-b2e3-489b-b1d9-3dc81c65ca05)
  * **Value**: Influenza A virus subtype H10 (organism)
  * **Flags**: Final,Positive
  * **When For**: 2024-08-28 14:20:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "53Doc-InfluenzaHxNy",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:6401332d-6012-443f-9690-9331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-09-05T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:2801554a-62f5-4feb-a74c-0b26196f3fee",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "2801554a-62f5-4feb-a74c-0b26196f3fee",
        "language" : "de-CH",
        "identifier" : {
          "system" : "urn:ietf:rfc:3986",
          "value" : "urn:uuid:6401332d-6012-443f-9690-9331adb23aab"
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
          "reference" : "urn:uuid:3edbb8ab-60da-4474-b836-c32d88aac763"
        },
        "date" : "2024-09-05T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:00dbbd23-a6b0-48ea-a0cf-c052c6550f85"
          }
        ],
        "title" : "Laborbericht vom 2.9.2024",
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
                "reference" : "urn:uuid:658a48a7-b2e3-489b-b1d9-3dc81c65ca05"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:3edbb8ab-60da-4474-b836-c32d88aac763",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "3edbb8ab-60da-4474-b836-c32d88aac763",
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
      "fullUrl" : "urn:uuid:00dbbd23-a6b0-48ea-a0cf-c052c6550f85",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "00dbbd23-a6b0-48ea-a0cf-c052c6550f85",
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
      "fullUrl" : "urn:uuid:658a48a7-b2e3-489b-b1d9-3dc81c65ca05",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "658a48a7-b2e3-489b-b1d9-3dc81c65ca05",
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
              "code" : "59423-4"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:3edbb8ab-60da-4474-b836-c32d88aac763"
        },
        "effectiveDateTime" : "2024-08-28T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:00dbbd23-a6b0-48ea-a0cf-c052c6550f85"
          }
        ],
        "valueCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "700349009"
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
          "reference" : "urn:uuid:32e05a43-37f2-457c-8eab-d7193372ac7b"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:8cb886ad-dd5d-457d-bd0c-2ef10d215dc4",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "8cb886ad-dd5d-457d-bd0c-2ef10d215dc4",
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
      "fullUrl" : "urn:uuid:3a348e7b-879c-4ca7-a12f-adb301501607",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "3a348e7b-879c-4ca7-a12f-adb301501607",
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
      "fullUrl" : "urn:uuid:396b6222-02da-46a7-ae79-a52948d686ef",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "396b6222-02da-46a7-ae79-a52948d686ef",
        "practitioner" : {
          "reference" : "urn:uuid:8cb886ad-dd5d-457d-bd0c-2ef10d215dc4"
        },
        "organization" : {
          "reference" : "urn:uuid:3a348e7b-879c-4ca7-a12f-adb301501607"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:32e05a43-37f2-457c-8eab-d7193372ac7b",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "32e05a43-37f2-457c-8eab-d7193372ac7b",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:3edbb8ab-60da-4474-b836-c32d88aac763"
        },
        "collection" : {
          "collectedDateTime" : "2024-08-26T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:864cc197-d700-4564-a461-a71309187f86",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "864cc197-d700-4564-a461-a71309187f86",
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
              "code" : "59423-4"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:3edbb8ab-60da-4474-b836-c32d88aac763"
        },
        "requester" : {
          "reference" : "urn:uuid:396b6222-02da-46a7-ae79-a52948d686ef"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:32e05a43-37f2-457c-8eab-d7193372ac7b"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:1d0b1c13-86e6-423b-a5c2-9e9fb091c575",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "1d0b1c13-86e6-423b-a5c2-9e9fb091c575",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:2801554a-62f5-4feb-a74c-0b26196f3fee"
            }
          }
        ],
        "identifier" : [
          {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:6401332d-6012-443f-9690-9331adb23aab"
          }
        ],
        "basedOn" : [
          {
            "reference" : "urn:uuid:864cc197-d700-4564-a461-a71309187f86"
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
          "reference" : "urn:uuid:3edbb8ab-60da-4474-b836-c32d88aac763"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:00dbbd23-a6b0-48ea-a0cf-c052c6550f85"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:32e05a43-37f2-457c-8eab-d7193372ac7b"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:658a48a7-b2e3-489b-b1d9-3dc81c65ca05"
          }
        ]
      }
    }
  ]
}

```
