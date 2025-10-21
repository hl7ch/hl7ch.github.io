# 20Doc - Vibrio cholerae - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **20Doc - Vibrio cholerae**

## Example Bundle: 20Doc - Vibrio cholerae

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

Entry 2 - fullUrl = urn:uuid:90f9c93c-4bea-46cb-bdbe-0bc08101fbac

Resource Patient:

> Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 3 - fullUrl = urn:uuid:0d4e1427-e05f-4db2-afda-c55eabaf6909

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:7d7bcbb5-1e55-44ad-a9e5-c9bf33d6bd30

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Vibrio cholerae toxin ctx gene [Presence] in Specimen by NAA with probe detection**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-20Doc-Vibrio-cholerae.md#urn-uuid-90f9c93c-4bea-46cb-bdbe-0bc08101fbac)**effective**: 2024-08-12 09:15:00+0200**performer**:[Organization SanLab](Bundle-20Doc-Vibrio-cholerae.md#urn-uuid-0d4e1427-e05f-4db2-afda-c55eabaf6909)**dataAbsentReason**:Not Applicable**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-20Doc-Vibrio-cholerae.md#urn-uuid-b28199d0-7d4c-4af0-afc6-a4842e665d2c)

-------

Entry 5 - fullUrl = urn:uuid:1503c5eb-e2b7-4751-81ac-89b20a904884

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000234438**name**: Monika Giacometti**telecom**:[+41 79 111 44 55](tel:+41791114455),[m.giacometti@ks-abc.ch](mailto:m.giacometti@ks-abc.ch)

-------

Entry 6 - fullUrl = urn:uuid:409e7c49-ae05-44b7-a36b-aa2b7e9f5f7d

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A99684215**name**: Kantonsspital ABC

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Aortastrasse 22 Bern 3000 |


-------

Entry 7 - fullUrl = urn:uuid:e8f6adae-30ed-4f55-973a-3ed4f139645b

Resource PractitionerRole:

> **practitioner**:[Practitioner Monika Giacometti](Bundle-20Doc-Vibrio-cholerae.md#urn-uuid-1503c5eb-e2b7-4751-81ac-89b20a904884)**organization**:[Organization Kantonsspital ABC](Bundle-20Doc-Vibrio-cholerae.md#urn-uuid-409e7c49-ae05-44b7-a36b-aa2b7e9f5f7d)

-------

Entry 8 - fullUrl = urn:uuid:b28199d0-7d4c-4af0-afc6-a4842e665d2c

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-20Doc-Vibrio-cholerae.md#urn-uuid-90f9c93c-4bea-46cb-bdbe-0bc08101fbac)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-08-10 09:15:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:e91c013b-d627-4345-b19b-4927bd927c3f

Resource ServiceRequest:

> **identifier**: 50002755**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Vibrio cholerae toxin ctx gene [Presence] in Specimen by NAA with probe detection)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-20Doc-Vibrio-cholerae.md#urn-uuid-90f9c93c-4bea-46cb-bdbe-0bc08101fbac)**requester**:[PractitionerRole](Bundle-20Doc-Vibrio-cholerae.md#urn-uuid-e8f6adae-30ed-4f55-973a-3ed4f139645b)**specimen**:[Specimen: type =](Bundle-20Doc-Vibrio-cholerae.md#urn-uuid-b28199d0-7d4c-4af0-afc6-a4842e665d2c)

-------

Entry 10 - fullUrl = urn:uuid:2f3dff1e-eb3c-4af5-8478-7a73251ebdbc

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-20Doc-Vibrio-cholerae.md#urn-uuid-0d4e1427-e05f-4db2-afda-c55eabaf6909) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.5.0/NamingSystem-uri.html)/urn:uuid:ac01252d-6012-443f-9690-9291adb23433 |

**Report Details**

* **Code**: [Vibrio cholerae toxin ctx gene [Presence] in Specimen by NAA with probe detection](Bundle-20Doc-Vibrio-cholerae.md#urn-uuid-7d7bcbb5-1e55-44ad-a9e5-c9bf33d6bd30)
  * **Value**: Error:**Not Applicable**
  * **Flags**: Final,Positive
  * **When For**: 2024-08-12 09:15:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "20Doc-Vibrio-cholerae",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:ac01252d-6012-443f-9690-9291adb23433"
  },
  "type" : "document",
  "timestamp" : "2024-08-14T11:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:5ce27e23-a0d6-46a9-a9eb-c40fb9a1818a",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "5ce27e23-a0d6-46a9-a9eb-c40fb9a1818a",
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
          "reference" : "urn:uuid:90f9c93c-4bea-46cb-bdbe-0bc08101fbac"
        },
        "date" : "2024-08-14T11:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:0d4e1427-e05f-4db2-afda-c55eabaf6909"
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
                "reference" : "urn:uuid:7d7bcbb5-1e55-44ad-a9e5-c9bf33d6bd30"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:90f9c93c-4bea-46cb-bdbe-0bc08101fbac",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "90f9c93c-4bea-46cb-bdbe-0bc08101fbac",
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
      "fullUrl" : "urn:uuid:0d4e1427-e05f-4db2-afda-c55eabaf6909",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "0d4e1427-e05f-4db2-afda-c55eabaf6909",
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
      "fullUrl" : "urn:uuid:7d7bcbb5-1e55-44ad-a9e5-c9bf33d6bd30",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "7d7bcbb5-1e55-44ad-a9e5-c9bf33d6bd30",
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
              "code" : "53942-9"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:90f9c93c-4bea-46cb-bdbe-0bc08101fbac"
        },
        "effectiveDateTime" : "2024-08-12T09:15:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:0d4e1427-e05f-4db2-afda-c55eabaf6909"
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
          "reference" : "urn:uuid:b28199d0-7d4c-4af0-afc6-a4842e665d2c"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:1503c5eb-e2b7-4751-81ac-89b20a904884",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "1503c5eb-e2b7-4751-81ac-89b20a904884",
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
      "fullUrl" : "urn:uuid:409e7c49-ae05-44b7-a36b-aa2b7e9f5f7d",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "409e7c49-ae05-44b7-a36b-aa2b7e9f5f7d",
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
      "fullUrl" : "urn:uuid:e8f6adae-30ed-4f55-973a-3ed4f139645b",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "e8f6adae-30ed-4f55-973a-3ed4f139645b",
        "practitioner" : {
          "reference" : "urn:uuid:1503c5eb-e2b7-4751-81ac-89b20a904884"
        },
        "organization" : {
          "reference" : "urn:uuid:409e7c49-ae05-44b7-a36b-aa2b7e9f5f7d"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:b28199d0-7d4c-4af0-afc6-a4842e665d2c",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "b28199d0-7d4c-4af0-afc6-a4842e665d2c",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:90f9c93c-4bea-46cb-bdbe-0bc08101fbac"
        },
        "collection" : {
          "collectedDateTime" : "2024-08-10T09:15:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:e91c013b-d627-4345-b19b-4927bd927c3f",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "e91c013b-d627-4345-b19b-4927bd927c3f",
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
              "code" : "53942-9"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:90f9c93c-4bea-46cb-bdbe-0bc08101fbac"
        },
        "requester" : {
          "reference" : "urn:uuid:e8f6adae-30ed-4f55-973a-3ed4f139645b"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:b28199d0-7d4c-4af0-afc6-a4842e665d2c"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:2f3dff1e-eb3c-4af5-8478-7a73251ebdbc",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "2f3dff1e-eb3c-4af5-8478-7a73251ebdbc",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:5ce27e23-a0d6-46a9-a9eb-c40fb9a1818a"
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
            "reference" : "urn:uuid:e91c013b-d627-4345-b19b-4927bd927c3f"
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
          "reference" : "urn:uuid:90f9c93c-4bea-46cb-bdbe-0bc08101fbac"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:0d4e1427-e05f-4db2-afda-c55eabaf6909"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:b28199d0-7d4c-4af0-afc6-a4842e665d2c"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:7d7bcbb5-1e55-44ad-a9e5-c9bf33d6bd30"
          }
        ]
      }
    }
  ]
}

```
