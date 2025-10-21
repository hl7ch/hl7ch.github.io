# 21Doc - Hepatite E - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **21Doc - Hepatite E**

## Example Bundle: 21Doc - Hepatite E

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

Entry 2 - fullUrl = urn:uuid:2ee761c6-1a3a-4497-acae-05f46d3a3a7f

Resource Patient:

> Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 3 - fullUrl = urn:uuid:e72ba11c-8ced-42de-a202-1c26ca80ad68

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:68550822-dcde-413d-815a-df11a30ccb12

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Hepatitis E virus RNA [Presence] in Stool by NAA with probe detection**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-21Doc-HepatiteE.md#urn-uuid-2ee761c6-1a3a-4497-acae-05f46d3a3a7f)**effective**: 2024-08-12 09:15:00+0200**performer**:[Organization SanLab](Bundle-21Doc-HepatiteE.md#urn-uuid-e72ba11c-8ced-42de-a202-1c26ca80ad68)**dataAbsentReason**:Not Applicable**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-21Doc-HepatiteE.md#urn-uuid-44f2bef4-c26a-454d-82de-e1e074bc1798)

-------

Entry 5 - fullUrl = urn:uuid:c464da41-22bc-4c56-ac1c-7a1221694152

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000234438**name**: Monika Giacometti**telecom**:[+41 79 111 44 55](tel:+41791114455),[m.giacometti@ks-abc.ch](mailto:m.giacometti@ks-abc.ch)

-------

Entry 6 - fullUrl = urn:uuid:e66b4d9e-03b5-45d1-9b97-bcdf3461c869

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A99684215**name**: Kantonsspital ABC

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Aortastrasse 22 Bern 3000 |


-------

Entry 7 - fullUrl = urn:uuid:14d66110-a89d-44ed-b3b0-4596ba289003

Resource PractitionerRole:

> **practitioner**:[Practitioner Monika Giacometti](Bundle-21Doc-HepatiteE.md#urn-uuid-c464da41-22bc-4c56-ac1c-7a1221694152)**organization**:[Organization Kantonsspital ABC](Bundle-21Doc-HepatiteE.md#urn-uuid-e66b4d9e-03b5-45d1-9b97-bcdf3461c869)

-------

Entry 8 - fullUrl = urn:uuid:44f2bef4-c26a-454d-82de-e1e074bc1798

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-21Doc-HepatiteE.md#urn-uuid-2ee761c6-1a3a-4497-acae-05f46d3a3a7f)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-08-10 09:15:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:9e07bb0f-f119-4c17-b897-d1a2d8a37363

Resource ServiceRequest:

> **identifier**: 50002755**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Hepatitis E virus RNA [Presence] in Stool by NAA with probe detection)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-21Doc-HepatiteE.md#urn-uuid-2ee761c6-1a3a-4497-acae-05f46d3a3a7f)**requester**:[PractitionerRole](Bundle-21Doc-HepatiteE.md#urn-uuid-14d66110-a89d-44ed-b3b0-4596ba289003)**specimen**:[Specimen: type =](Bundle-21Doc-HepatiteE.md#urn-uuid-44f2bef4-c26a-454d-82de-e1e074bc1798)

-------

Entry 10 - fullUrl = urn:uuid:85a06323-44f3-4f99-9a14-ebf46f695c89

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-21Doc-HepatiteE.md#urn-uuid-e72ba11c-8ced-42de-a202-1c26ca80ad68) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.5.0/NamingSystem-uri.html)/urn:uuid:ac01252d-6012-443f-9690-9291adb23433 |

**Report Details**

* **Code**: [Hepatitis E virus RNA [Presence] in Stool by NAA with probe detection](Bundle-21Doc-HepatiteE.md#urn-uuid-68550822-dcde-413d-815a-df11a30ccb12)
  * **Value**: Error:**Not Applicable**
  * **Flags**: Final,Positive
  * **When For**: 2024-08-12 09:15:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "21Doc-HepatiteE",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:ac01252d-6012-443f-9690-9291adb23433"
  },
  "type" : "document",
  "timestamp" : "2024-08-14T11:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:24cd1551-55c1-45ab-844c-bd531ca452c0",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "24cd1551-55c1-45ab-844c-bd531ca452c0",
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
          "reference" : "urn:uuid:2ee761c6-1a3a-4497-acae-05f46d3a3a7f"
        },
        "date" : "2024-08-14T11:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:e72ba11c-8ced-42de-a202-1c26ca80ad68"
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
                "reference" : "urn:uuid:68550822-dcde-413d-815a-df11a30ccb12"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:2ee761c6-1a3a-4497-acae-05f46d3a3a7f",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "2ee761c6-1a3a-4497-acae-05f46d3a3a7f",
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
      "fullUrl" : "urn:uuid:e72ba11c-8ced-42de-a202-1c26ca80ad68",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "e72ba11c-8ced-42de-a202-1c26ca80ad68",
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
      "fullUrl" : "urn:uuid:68550822-dcde-413d-815a-df11a30ccb12",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "68550822-dcde-413d-815a-df11a30ccb12",
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
              "code" : "91071-1"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:2ee761c6-1a3a-4497-acae-05f46d3a3a7f"
        },
        "effectiveDateTime" : "2024-08-12T09:15:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:e72ba11c-8ced-42de-a202-1c26ca80ad68"
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
          "reference" : "urn:uuid:44f2bef4-c26a-454d-82de-e1e074bc1798"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:c464da41-22bc-4c56-ac1c-7a1221694152",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "c464da41-22bc-4c56-ac1c-7a1221694152",
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
      "fullUrl" : "urn:uuid:e66b4d9e-03b5-45d1-9b97-bcdf3461c869",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "e66b4d9e-03b5-45d1-9b97-bcdf3461c869",
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
      "fullUrl" : "urn:uuid:14d66110-a89d-44ed-b3b0-4596ba289003",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "14d66110-a89d-44ed-b3b0-4596ba289003",
        "practitioner" : {
          "reference" : "urn:uuid:c464da41-22bc-4c56-ac1c-7a1221694152"
        },
        "organization" : {
          "reference" : "urn:uuid:e66b4d9e-03b5-45d1-9b97-bcdf3461c869"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:44f2bef4-c26a-454d-82de-e1e074bc1798",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "44f2bef4-c26a-454d-82de-e1e074bc1798",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:2ee761c6-1a3a-4497-acae-05f46d3a3a7f"
        },
        "collection" : {
          "collectedDateTime" : "2024-08-10T09:15:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:9e07bb0f-f119-4c17-b897-d1a2d8a37363",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "9e07bb0f-f119-4c17-b897-d1a2d8a37363",
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
              "code" : "91071-1"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:2ee761c6-1a3a-4497-acae-05f46d3a3a7f"
        },
        "requester" : {
          "reference" : "urn:uuid:14d66110-a89d-44ed-b3b0-4596ba289003"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:44f2bef4-c26a-454d-82de-e1e074bc1798"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:85a06323-44f3-4f99-9a14-ebf46f695c89",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "85a06323-44f3-4f99-9a14-ebf46f695c89",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:24cd1551-55c1-45ab-844c-bd531ca452c0"
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
            "reference" : "urn:uuid:9e07bb0f-f119-4c17-b897-d1a2d8a37363"
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
          "reference" : "urn:uuid:2ee761c6-1a3a-4497-acae-05f46d3a3a7f"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:e72ba11c-8ced-42de-a202-1c26ca80ad68"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:44f2bef4-c26a-454d-82de-e1e074bc1798"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:68550822-dcde-413d-815a-df11a30ccb12"
          }
        ]
      }
    }
  ]
}

```
