# 44Doc - MERS-CoV - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **44Doc - MERS-CoV**

## Example Bundle: 44Doc - MERS-CoV

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

Entry 2 - fullUrl = urn:uuid:79b5f96c-c65f-4681-9b0b-c82f843adad6

Resource Patient:

> Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 3 - fullUrl = urn:uuid:987d5c88-5564-42b0-91d4-65c1698b43de

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:2cd47275-15c3-40b1-9412-790c5f17eb0c

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Middle East respiratory syndrome coronavirus (MERS-CoV) RNA [Presence] in Respiratory system specimen by NAA with probe detection**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-44Doc-Mers-CoV.md#urn-uuid-79b5f96c-c65f-4681-9b0b-c82f843adad6)**effective**: 2024-10-19 14:20:00+0200**performer**:[Organization SanLab](Bundle-44Doc-Mers-CoV.md#urn-uuid-987d5c88-5564-42b0-91d4-65c1698b43de)**dataAbsentReason**:Not Applicable**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-44Doc-Mers-CoV.md#urn-uuid-3b1d9655-cedc-49f7-99db-a435a2aaa9e3)

-------

Entry 5 - fullUrl = urn:uuid:bafca305-650d-43a5-a966-9cff9ed34030

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514**name**: Peter Hauser**telecom**:[+41 79 222 33 44](tel:+41792223344),[peter.hauser@hauserpraxis.ch](mailto:peter.hauser@hauserpraxis.ch)

-------

Entry 6 - fullUrl = urn:uuid:0074b732-96d5-4979-8907-2a09253ba015

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A74966168**name**: Praxis Dr. Hauser

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Hauptstrasse 10 Solothurn 4500 |


-------

Entry 7 - fullUrl = urn:uuid:21ff2ac2-b94e-40a8-8c27-51493f5ee9be

Resource PractitionerRole:

> **practitioner**:[Practitioner Peter Hauser](Bundle-44Doc-Mers-CoV.md#urn-uuid-bafca305-650d-43a5-a966-9cff9ed34030)**organization**:[Organization Praxis Dr. Hauser](Bundle-44Doc-Mers-CoV.md#urn-uuid-0074b732-96d5-4979-8907-2a09253ba015)

-------

Entry 8 - fullUrl = urn:uuid:3b1d9655-cedc-49f7-99db-a435a2aaa9e3

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-44Doc-Mers-CoV.md#urn-uuid-79b5f96c-c65f-4681-9b0b-c82f843adad6)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-10-15 14:20:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:abbb5dd8-730a-4efd-9f99-06a813fd84b2

Resource ServiceRequest:

> **identifier**: 26500923675**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Middle East respiratory syndrome coronavirus (MERS-CoV) RNA [Presence] in Respiratory system specimen by NAA with probe detection)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-44Doc-Mers-CoV.md#urn-uuid-79b5f96c-c65f-4681-9b0b-c82f843adad6)**requester**:[PractitionerRole](Bundle-44Doc-Mers-CoV.md#urn-uuid-21ff2ac2-b94e-40a8-8c27-51493f5ee9be)**specimen**:[Specimen: type =](Bundle-44Doc-Mers-CoV.md#urn-uuid-3b1d9655-cedc-49f7-99db-a435a2aaa9e3)

-------

Entry 10 - fullUrl = urn:uuid:ef36469f-2fdb-4eb5-97b8-03a88e005649

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-44Doc-Mers-CoV.md#urn-uuid-987d5c88-5564-42b0-91d4-65c1698b43de) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab |

**Report Details**

* **Code**: [Middle East respiratory syndrome coronavirus (MERS-CoV) RNA [Presence] in Respiratory system specimen by NAA with probe detection](Bundle-44Doc-Mers-CoV.md#urn-uuid-2cd47275-15c3-40b1-9412-790c5f17eb0c)
  * **Value**: Error:**Not Applicable**
  * **Flags**: Final,Positive
  * **When For**: 2024-10-19 14:20:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "44Doc-Mers-CoV",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-10-20T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:9fa594ef-20fe-4117-9682-1aa0aab5033f",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "9fa594ef-20fe-4117-9682-1aa0aab5033f",
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
          "reference" : "urn:uuid:79b5f96c-c65f-4681-9b0b-c82f843adad6"
        },
        "date" : "2024-10-20T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:987d5c88-5564-42b0-91d4-65c1698b43de"
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
                "reference" : "urn:uuid:2cd47275-15c3-40b1-9412-790c5f17eb0c"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:79b5f96c-c65f-4681-9b0b-c82f843adad6",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "79b5f96c-c65f-4681-9b0b-c82f843adad6",
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
      "fullUrl" : "urn:uuid:987d5c88-5564-42b0-91d4-65c1698b43de",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "987d5c88-5564-42b0-91d4-65c1698b43de",
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
      "fullUrl" : "urn:uuid:2cd47275-15c3-40b1-9412-790c5f17eb0c",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "2cd47275-15c3-40b1-9412-790c5f17eb0c",
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
              "code" : "94501-4"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:79b5f96c-c65f-4681-9b0b-c82f843adad6"
        },
        "effectiveDateTime" : "2024-10-19T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:987d5c88-5564-42b0-91d4-65c1698b43de"
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
          "reference" : "urn:uuid:3b1d9655-cedc-49f7-99db-a435a2aaa9e3"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:bafca305-650d-43a5-a966-9cff9ed34030",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "bafca305-650d-43a5-a966-9cff9ed34030",
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
      "fullUrl" : "urn:uuid:0074b732-96d5-4979-8907-2a09253ba015",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "0074b732-96d5-4979-8907-2a09253ba015",
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
      "fullUrl" : "urn:uuid:21ff2ac2-b94e-40a8-8c27-51493f5ee9be",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "21ff2ac2-b94e-40a8-8c27-51493f5ee9be",
        "practitioner" : {
          "reference" : "urn:uuid:bafca305-650d-43a5-a966-9cff9ed34030"
        },
        "organization" : {
          "reference" : "urn:uuid:0074b732-96d5-4979-8907-2a09253ba015"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:3b1d9655-cedc-49f7-99db-a435a2aaa9e3",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "3b1d9655-cedc-49f7-99db-a435a2aaa9e3",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:79b5f96c-c65f-4681-9b0b-c82f843adad6"
        },
        "collection" : {
          "collectedDateTime" : "2024-10-15T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:abbb5dd8-730a-4efd-9f99-06a813fd84b2",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "abbb5dd8-730a-4efd-9f99-06a813fd84b2",
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
              "code" : "94501-4"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:79b5f96c-c65f-4681-9b0b-c82f843adad6"
        },
        "requester" : {
          "reference" : "urn:uuid:21ff2ac2-b94e-40a8-8c27-51493f5ee9be"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:3b1d9655-cedc-49f7-99db-a435a2aaa9e3"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:ef36469f-2fdb-4eb5-97b8-03a88e005649",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "ef36469f-2fdb-4eb5-97b8-03a88e005649",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:9fa594ef-20fe-4117-9682-1aa0aab5033f"
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
            "reference" : "urn:uuid:abbb5dd8-730a-4efd-9f99-06a813fd84b2"
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
          "reference" : "urn:uuid:79b5f96c-c65f-4681-9b0b-c82f843adad6"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:987d5c88-5564-42b0-91d4-65c1698b43de"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:3b1d9655-cedc-49f7-99db-a435a2aaa9e3"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:2cd47275-15c3-40b1-9412-790c5f17eb0c"
          }
        ]
      }
    }
  ]
}

```
