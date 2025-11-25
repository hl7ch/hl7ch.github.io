# 51Doc - Gelbfieber - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **51Doc - Gelbfieber**

## Example Bundle: 51Doc - Gelbfieber

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

Entry 2 - fullUrl = urn:uuid:f09c00e3-ae43-4160-8914-c3855216c2e0

Resource Patient:

> Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 3 - fullUrl = urn:uuid:2ae38d39-66ed-407a-a82e-eaf98f5fd90f

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:cf1c1abf-37ff-4653-89ea-6d7ce0225773

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Yellow fever virus IgM Ab [Presence] in Serum**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-51Doc-Gelbfieber.md#urn-uuid-f09c00e3-ae43-4160-8914-c3855216c2e0)**effective**: 2024-10-19 14:20:00+0200**performer**:[Organization SanLab](Bundle-51Doc-Gelbfieber.md#urn-uuid-2ae38d39-66ed-407a-a82e-eaf98f5fd90f)**dataAbsentReason**:Not Applicable**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-51Doc-Gelbfieber.md#urn-uuid-2e90db23-bbd5-4339-88ed-2e11a4975b79)

-------

Entry 5 - fullUrl = urn:uuid:fc25de07-343a-4157-9bdb-67c2c47482a9

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514**name**: Peter Hauser**telecom**:[+41 79 222 33 44](tel:+41792223344),[peter.hauser@hauserpraxis.ch](mailto:peter.hauser@hauserpraxis.ch)

-------

Entry 6 - fullUrl = urn:uuid:0a772a89-c3a1-45ed-8612-eec8eff536df

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A74966168**name**: Praxis Dr. Hauser

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Hauptstrasse 10 Solothurn 4500 |


-------

Entry 7 - fullUrl = urn:uuid:b5e3a6bd-baf6-4d65-9cde-cf4f7639dc56

Resource PractitionerRole:

> **practitioner**:[Practitioner Peter Hauser](Bundle-51Doc-Gelbfieber.md#urn-uuid-fc25de07-343a-4157-9bdb-67c2c47482a9)**organization**:[Organization Praxis Dr. Hauser](Bundle-51Doc-Gelbfieber.md#urn-uuid-0a772a89-c3a1-45ed-8612-eec8eff536df)

-------

Entry 8 - fullUrl = urn:uuid:2e90db23-bbd5-4339-88ed-2e11a4975b79

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-51Doc-Gelbfieber.md#urn-uuid-f09c00e3-ae43-4160-8914-c3855216c2e0)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-10-15 14:20:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:2ef84027-ae9d-4406-b8e1-be895e2a570c

Resource ServiceRequest:

> **identifier**: 26500923675**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Yellow fever virus IgM Ab [Presence] in Serum)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-51Doc-Gelbfieber.md#urn-uuid-f09c00e3-ae43-4160-8914-c3855216c2e0)**requester**:[PractitionerRole](Bundle-51Doc-Gelbfieber.md#urn-uuid-b5e3a6bd-baf6-4d65-9cde-cf4f7639dc56)**specimen**:[Specimen: type =](Bundle-51Doc-Gelbfieber.md#urn-uuid-2e90db23-bbd5-4339-88ed-2e11a4975b79)

-------

Entry 10 - fullUrl = urn:uuid:b401e43b-54ad-42f3-826f-30d333363b59

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-51Doc-Gelbfieber.md#urn-uuid-2ae38d39-66ed-407a-a82e-eaf98f5fd90f) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab |

**Report Details**

* **Code**: [Yellow fever virus IgM Ab [Presence] in Serum](Bundle-51Doc-Gelbfieber.md#urn-uuid-cf1c1abf-37ff-4653-89ea-6d7ce0225773)
  * **Value**: Error:**Not Applicable**
  * **Flags**: Final,Positive
  * **When For**: 2024-10-19 14:20:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "51Doc-Gelbfieber",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-10-20T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:f9abebfc-c50a-4fc4-8bdd-ba88b86b030a",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "f9abebfc-c50a-4fc4-8bdd-ba88b86b030a",
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
          "reference" : "urn:uuid:f09c00e3-ae43-4160-8914-c3855216c2e0"
        },
        "date" : "2024-10-20T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:2ae38d39-66ed-407a-a82e-eaf98f5fd90f"
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
                "reference" : "urn:uuid:cf1c1abf-37ff-4653-89ea-6d7ce0225773"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:f09c00e3-ae43-4160-8914-c3855216c2e0",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "f09c00e3-ae43-4160-8914-c3855216c2e0",
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
      "fullUrl" : "urn:uuid:2ae38d39-66ed-407a-a82e-eaf98f5fd90f",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "2ae38d39-66ed-407a-a82e-eaf98f5fd90f",
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
      "fullUrl" : "urn:uuid:cf1c1abf-37ff-4653-89ea-6d7ce0225773",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "cf1c1abf-37ff-4653-89ea-6d7ce0225773",
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
              "code" : "41216-3"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:f09c00e3-ae43-4160-8914-c3855216c2e0"
        },
        "effectiveDateTime" : "2024-10-19T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:2ae38d39-66ed-407a-a82e-eaf98f5fd90f"
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
          "reference" : "urn:uuid:2e90db23-bbd5-4339-88ed-2e11a4975b79"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:fc25de07-343a-4157-9bdb-67c2c47482a9",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "fc25de07-343a-4157-9bdb-67c2c47482a9",
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
      "fullUrl" : "urn:uuid:0a772a89-c3a1-45ed-8612-eec8eff536df",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "0a772a89-c3a1-45ed-8612-eec8eff536df",
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
      "fullUrl" : "urn:uuid:b5e3a6bd-baf6-4d65-9cde-cf4f7639dc56",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "b5e3a6bd-baf6-4d65-9cde-cf4f7639dc56",
        "practitioner" : {
          "reference" : "urn:uuid:fc25de07-343a-4157-9bdb-67c2c47482a9"
        },
        "organization" : {
          "reference" : "urn:uuid:0a772a89-c3a1-45ed-8612-eec8eff536df"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:2e90db23-bbd5-4339-88ed-2e11a4975b79",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "2e90db23-bbd5-4339-88ed-2e11a4975b79",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:f09c00e3-ae43-4160-8914-c3855216c2e0"
        },
        "collection" : {
          "collectedDateTime" : "2024-10-15T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:2ef84027-ae9d-4406-b8e1-be895e2a570c",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "2ef84027-ae9d-4406-b8e1-be895e2a570c",
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
              "code" : "41216-3"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:f09c00e3-ae43-4160-8914-c3855216c2e0"
        },
        "requester" : {
          "reference" : "urn:uuid:b5e3a6bd-baf6-4d65-9cde-cf4f7639dc56"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:2e90db23-bbd5-4339-88ed-2e11a4975b79"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:b401e43b-54ad-42f3-826f-30d333363b59",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "b401e43b-54ad-42f3-826f-30d333363b59",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:f9abebfc-c50a-4fc4-8bdd-ba88b86b030a"
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
            "reference" : "urn:uuid:2ef84027-ae9d-4406-b8e1-be895e2a570c"
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
          "reference" : "urn:uuid:f09c00e3-ae43-4160-8914-c3855216c2e0"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:2ae38d39-66ed-407a-a82e-eaf98f5fd90f"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:2e90db23-bbd5-4339-88ed-2e11a4975b79"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:cf1c1abf-37ff-4653-89ea-6d7ce0225773"
          }
        ]
      }
    }
  ]
}

```
