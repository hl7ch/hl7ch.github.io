# 32Doc - Rubella avidity - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **32Doc - Rubella avidity**

## Example Bundle: 32Doc - Rubella avidity

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

Entry 2 - fullUrl = urn:uuid:242eba82-b047-4c72-af4e-5c382855499b

Resource Patient:

> Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 3 - fullUrl = urn:uuid:1128c9d7-cda1-4ca2-9f0f-bda593d79a0d

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:8b081254-eccb-4686-b2a4-2664ac87c9ea

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Rubella virus IgG Ab avidity [Ratio] in Serum by Immunoassay**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-32Doc-Rubella-avidity.md#urn-uuid-242eba82-b047-4c72-af4e-5c382855499b)**effective**: 2024-10-04 14:20:00+0200**performer**:[Organization SanLab](Bundle-32Doc-Rubella-avidity.md#urn-uuid-1128c9d7-cda1-4ca2-9f0f-bda593d79a0d)**dataAbsentReason**:Not Applicable**interpretation**:Low**specimen**:[Specimen: type =](Bundle-32Doc-Rubella-avidity.md#urn-uuid-8a77b4c8-7157-4a9f-a735-d6d15a34690d)

-------

Entry 5 - fullUrl = urn:uuid:1b73c30c-7045-4fc5-885f-11e2c3228a34

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514**name**: Peter Hauser**telecom**:[+41 79 222 33 44](tel:+41792223344),[peter.hauser@hauserpraxis.ch](mailto:peter.hauser@hauserpraxis.ch)

-------

Entry 6 - fullUrl = urn:uuid:4f36e9ac-d2f7-4b7a-bd92-64b2d2f636c5

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A74966168**name**: Praxis Dr. Hauser

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Hauptstrasse 10 Solothurn 4500 |


-------

Entry 7 - fullUrl = urn:uuid:c6635e48-1b7f-4562-9e06-7478ce39a2ad

Resource PractitionerRole:

> **practitioner**:[Practitioner Peter Hauser](Bundle-32Doc-Rubella-avidity.md#urn-uuid-1b73c30c-7045-4fc5-885f-11e2c3228a34)**organization**:[Organization Praxis Dr. Hauser](Bundle-32Doc-Rubella-avidity.md#urn-uuid-4f36e9ac-d2f7-4b7a-bd92-64b2d2f636c5)

-------

Entry 8 - fullUrl = urn:uuid:8a77b4c8-7157-4a9f-a735-d6d15a34690d

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-32Doc-Rubella-avidity.md#urn-uuid-242eba82-b047-4c72-af4e-5c382855499b)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-10-01 14:20:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:0fdc0897-6abf-4b54-b3f0-96087f6e8153

Resource ServiceRequest:

> **identifier**: 26500923622**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Rubella virus IgG Ab avidity [Ratio] in Serum by Immunoassay)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-32Doc-Rubella-avidity.md#urn-uuid-242eba82-b047-4c72-af4e-5c382855499b)**requester**:[PractitionerRole](Bundle-32Doc-Rubella-avidity.md#urn-uuid-c6635e48-1b7f-4562-9e06-7478ce39a2ad)**specimen**:[Specimen: type =](Bundle-32Doc-Rubella-avidity.md#urn-uuid-8a77b4c8-7157-4a9f-a735-d6d15a34690d)

-------

Entry 10 - fullUrl = urn:uuid:b0564da1-cc00-4022-86b3-4d35efaeb414

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-32Doc-Rubella-avidity.md#urn-uuid-1128c9d7-cda1-4ca2-9f0f-bda593d79a0d) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:3401332d-6012-443f-9690-6331adb23aab |

**Report Details**

* **Code**: [Rubella virus IgG Ab avidity [Ratio] in Serum by Immunoassay](Bundle-32Doc-Rubella-avidity.md#urn-uuid-8b081254-eccb-4686-b2a4-2664ac87c9ea)
  * **Value**: Error:**Not Applicable**
  * **Flags**: Final,Low
  * **When For**: 2024-10-04 14:20:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "32Doc-Rubella-avidity",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:3401332d-6012-443f-9690-6331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-10-06T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:2eceb90d-acf9-4a83-9f41-117880756169",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "2eceb90d-acf9-4a83-9f41-117880756169",
        "language" : "de-CH",
        "identifier" : {
          "system" : "urn:ietf:rfc:3986",
          "value" : "urn:uuid:3401332d-6012-443f-9690-6331adb23aab"
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
          "reference" : "urn:uuid:242eba82-b047-4c72-af4e-5c382855499b"
        },
        "date" : "2024-10-06T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:1128c9d7-cda1-4ca2-9f0f-bda593d79a0d"
          }
        ],
        "title" : "Laborbericht vom 6.10.2024",
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
                "reference" : "urn:uuid:8b081254-eccb-4686-b2a4-2664ac87c9ea"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:242eba82-b047-4c72-af4e-5c382855499b",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "242eba82-b047-4c72-af4e-5c382855499b",
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
      "fullUrl" : "urn:uuid:1128c9d7-cda1-4ca2-9f0f-bda593d79a0d",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "1128c9d7-cda1-4ca2-9f0f-bda593d79a0d",
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
      "fullUrl" : "urn:uuid:8b081254-eccb-4686-b2a4-2664ac87c9ea",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "8b081254-eccb-4686-b2a4-2664ac87c9ea",
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
              "code" : "52986-7"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:242eba82-b047-4c72-af4e-5c382855499b"
        },
        "effectiveDateTime" : "2024-10-04T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:1128c9d7-cda1-4ca2-9f0f-bda593d79a0d"
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
                "system" : "http://snomed.info/sct",
                "code" : "62482003"
              }
            ]
          }
        ],
        "specimen" : {
          "reference" : "urn:uuid:8a77b4c8-7157-4a9f-a735-d6d15a34690d"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:1b73c30c-7045-4fc5-885f-11e2c3228a34",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "1b73c30c-7045-4fc5-885f-11e2c3228a34",
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
      "fullUrl" : "urn:uuid:4f36e9ac-d2f7-4b7a-bd92-64b2d2f636c5",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "4f36e9ac-d2f7-4b7a-bd92-64b2d2f636c5",
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
      "fullUrl" : "urn:uuid:c6635e48-1b7f-4562-9e06-7478ce39a2ad",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "c6635e48-1b7f-4562-9e06-7478ce39a2ad",
        "practitioner" : {
          "reference" : "urn:uuid:1b73c30c-7045-4fc5-885f-11e2c3228a34"
        },
        "organization" : {
          "reference" : "urn:uuid:4f36e9ac-d2f7-4b7a-bd92-64b2d2f636c5"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:8a77b4c8-7157-4a9f-a735-d6d15a34690d",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "8a77b4c8-7157-4a9f-a735-d6d15a34690d",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:242eba82-b047-4c72-af4e-5c382855499b"
        },
        "collection" : {
          "collectedDateTime" : "2024-10-01T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:0fdc0897-6abf-4b54-b3f0-96087f6e8153",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "0fdc0897-6abf-4b54-b3f0-96087f6e8153",
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
              "code" : "52986-7"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:242eba82-b047-4c72-af4e-5c382855499b"
        },
        "requester" : {
          "reference" : "urn:uuid:c6635e48-1b7f-4562-9e06-7478ce39a2ad"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:8a77b4c8-7157-4a9f-a735-d6d15a34690d"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:b0564da1-cc00-4022-86b3-4d35efaeb414",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "b0564da1-cc00-4022-86b3-4d35efaeb414",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:2eceb90d-acf9-4a83-9f41-117880756169"
            }
          }
        ],
        "identifier" : [
          {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:3401332d-6012-443f-9690-6331adb23aab"
          }
        ],
        "basedOn" : [
          {
            "reference" : "urn:uuid:0fdc0897-6abf-4b54-b3f0-96087f6e8153"
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
          "reference" : "urn:uuid:242eba82-b047-4c72-af4e-5c382855499b"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:1128c9d7-cda1-4ca2-9f0f-bda593d79a0d"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:8a77b4c8-7157-4a9f-a735-d6d15a34690d"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:8b081254-eccb-4686-b2a4-2664ac87c9ea"
          }
        ]
      }
    }
  ]
}

```
