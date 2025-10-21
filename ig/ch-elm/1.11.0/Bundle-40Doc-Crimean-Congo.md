# 40Doc - Crimean-Congo - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **40Doc - Crimean-Congo**

## Example Bundle: 40Doc - Crimean-Congo

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

Entry 2 - fullUrl = urn:uuid:ee999c19-87a9-41c8-ba0c-7eedb4ceb755

Resource Patient:

> Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 3 - fullUrl = urn:uuid:4451b35c-0918-40c4-b4ab-2671e55f8279

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:e5fa7a04-edaf-463d-9209-69cf72f10e09

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Crimean-Congo hemorrhagic fever virus RNA [Presence] in Serum by NAA with probe detection**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-40Doc-Crimean-Congo.md#urn-uuid-ee999c19-87a9-41c8-ba0c-7eedb4ceb755)**effective**: 2024-10-19 14:20:00+0200**performer**:[Organization SanLab](Bundle-40Doc-Crimean-Congo.md#urn-uuid-4451b35c-0918-40c4-b4ab-2671e55f8279)**dataAbsentReason**:Not Applicable**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-40Doc-Crimean-Congo.md#urn-uuid-46bef988-9693-46fc-89c6-0d420131a28f)

-------

Entry 5 - fullUrl = urn:uuid:c1e5fb38-22de-42c3-a5d9-b8b091b0d40a

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514**name**: Peter Hauser**telecom**:[+41 79 222 33 44](tel:+41792223344),[peter.hauser@hauserpraxis.ch](mailto:peter.hauser@hauserpraxis.ch)

-------

Entry 6 - fullUrl = urn:uuid:d9ade87f-aaf9-41aa-8854-72c11ea7c2e3

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A74966168**name**: Praxis Dr. Hauser

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Hauptstrasse 10 Solothurn 4500 |


-------

Entry 7 - fullUrl = urn:uuid:3c97fca9-aedc-494a-8b71-67898c8840b4

Resource PractitionerRole:

> **practitioner**:[Practitioner Peter Hauser](Bundle-40Doc-Crimean-Congo.md#urn-uuid-c1e5fb38-22de-42c3-a5d9-b8b091b0d40a)**organization**:[Organization Praxis Dr. Hauser](Bundle-40Doc-Crimean-Congo.md#urn-uuid-d9ade87f-aaf9-41aa-8854-72c11ea7c2e3)

-------

Entry 8 - fullUrl = urn:uuid:46bef988-9693-46fc-89c6-0d420131a28f

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-40Doc-Crimean-Congo.md#urn-uuid-ee999c19-87a9-41c8-ba0c-7eedb4ceb755)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-10-15 14:20:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:0cc12137-6f72-45eb-b0dd-4d28a0209f56

Resource ServiceRequest:

> **identifier**: 26500923675**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Crimean-Congo hemorrhagic fever virus RNA [Presence] in Serum by NAA with probe detection)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-40Doc-Crimean-Congo.md#urn-uuid-ee999c19-87a9-41c8-ba0c-7eedb4ceb755)**requester**:[PractitionerRole](Bundle-40Doc-Crimean-Congo.md#urn-uuid-3c97fca9-aedc-494a-8b71-67898c8840b4)**specimen**:[Specimen: type =](Bundle-40Doc-Crimean-Congo.md#urn-uuid-46bef988-9693-46fc-89c6-0d420131a28f)

-------

Entry 10 - fullUrl = urn:uuid:7fcea9f2-727b-41f2-8daa-8ebbd2c69cc7

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-40Doc-Crimean-Congo.md#urn-uuid-4451b35c-0918-40c4-b4ab-2671e55f8279) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.5.0/NamingSystem-uri.html)/urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab |

**Report Details**

* **Code**: [Crimean-Congo hemorrhagic fever virus RNA [Presence] in Serum by NAA with probe detection](Bundle-40Doc-Crimean-Congo.md#urn-uuid-e5fa7a04-edaf-463d-9209-69cf72f10e09)
  * **Value**: Error:**Not Applicable**
  * **Flags**: Final,Positive
  * **When For**: 2024-10-19 14:20:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "40Doc-Crimean-Congo",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-10-20T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:e738d6f7-8287-4ac0-a9a7-3f6ca37118d1",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "e738d6f7-8287-4ac0-a9a7-3f6ca37118d1",
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
          "reference" : "urn:uuid:ee999c19-87a9-41c8-ba0c-7eedb4ceb755"
        },
        "date" : "2024-10-20T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:4451b35c-0918-40c4-b4ab-2671e55f8279"
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
                "reference" : "urn:uuid:e5fa7a04-edaf-463d-9209-69cf72f10e09"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:ee999c19-87a9-41c8-ba0c-7eedb4ceb755",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "ee999c19-87a9-41c8-ba0c-7eedb4ceb755",
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
      "fullUrl" : "urn:uuid:4451b35c-0918-40c4-b4ab-2671e55f8279",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "4451b35c-0918-40c4-b4ab-2671e55f8279",
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
      "fullUrl" : "urn:uuid:e5fa7a04-edaf-463d-9209-69cf72f10e09",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "e5fa7a04-edaf-463d-9209-69cf72f10e09",
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
              "code" : "88192-0"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:ee999c19-87a9-41c8-ba0c-7eedb4ceb755"
        },
        "effectiveDateTime" : "2024-10-19T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:4451b35c-0918-40c4-b4ab-2671e55f8279"
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
          "reference" : "urn:uuid:46bef988-9693-46fc-89c6-0d420131a28f"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:c1e5fb38-22de-42c3-a5d9-b8b091b0d40a",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "c1e5fb38-22de-42c3-a5d9-b8b091b0d40a",
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
      "fullUrl" : "urn:uuid:d9ade87f-aaf9-41aa-8854-72c11ea7c2e3",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "d9ade87f-aaf9-41aa-8854-72c11ea7c2e3",
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
      "fullUrl" : "urn:uuid:3c97fca9-aedc-494a-8b71-67898c8840b4",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "3c97fca9-aedc-494a-8b71-67898c8840b4",
        "practitioner" : {
          "reference" : "urn:uuid:c1e5fb38-22de-42c3-a5d9-b8b091b0d40a"
        },
        "organization" : {
          "reference" : "urn:uuid:d9ade87f-aaf9-41aa-8854-72c11ea7c2e3"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:46bef988-9693-46fc-89c6-0d420131a28f",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "46bef988-9693-46fc-89c6-0d420131a28f",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:ee999c19-87a9-41c8-ba0c-7eedb4ceb755"
        },
        "collection" : {
          "collectedDateTime" : "2024-10-15T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:0cc12137-6f72-45eb-b0dd-4d28a0209f56",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "0cc12137-6f72-45eb-b0dd-4d28a0209f56",
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
              "code" : "88192-0"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:ee999c19-87a9-41c8-ba0c-7eedb4ceb755"
        },
        "requester" : {
          "reference" : "urn:uuid:3c97fca9-aedc-494a-8b71-67898c8840b4"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:46bef988-9693-46fc-89c6-0d420131a28f"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:7fcea9f2-727b-41f2-8daa-8ebbd2c69cc7",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "7fcea9f2-727b-41f2-8daa-8ebbd2c69cc7",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:e738d6f7-8287-4ac0-a9a7-3f6ca37118d1"
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
            "reference" : "urn:uuid:0cc12137-6f72-45eb-b0dd-4d28a0209f56"
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
          "reference" : "urn:uuid:ee999c19-87a9-41c8-ba0c-7eedb4ceb755"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:4451b35c-0918-40c4-b4ab-2671e55f8279"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:46bef988-9693-46fc-89c6-0d420131a28f"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:e5fa7a04-edaf-463d-9209-69cf72f10e09"
          }
        ]
      }
    }
  ]
}

```
