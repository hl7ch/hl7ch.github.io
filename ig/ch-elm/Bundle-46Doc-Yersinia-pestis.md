# 46Doc - Yersinia pestis - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **46Doc - Yersinia pestis**

## Example Bundle: 46Doc - Yersinia pestis

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

Entry 2 - fullUrl = urn:uuid:c6d39de9-e02b-4fec-8fdc-3958bb5b7e8e

Resource Patient:

> Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 3 - fullUrl = urn:uuid:314af4aa-5900-4720-b023-3de0c0aa2b47

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:095165e4-418b-4504-a244-e93855f52b94

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Yersinia pestis [Presence] in Specimen by Organism specific culture**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-46Doc-Yersinia-pestis.md#urn-uuid-c6d39de9-e02b-4fec-8fdc-3958bb5b7e8e)**effective**: 2024-10-19 14:20:00+0200**performer**:[Organization SanLab](Bundle-46Doc-Yersinia-pestis.md#urn-uuid-314af4aa-5900-4720-b023-3de0c0aa2b47)**dataAbsentReason**:Not Applicable**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-46Doc-Yersinia-pestis.md#urn-uuid-c968da14-eba0-4f04-a9f3-22036a31e661)

-------

Entry 5 - fullUrl = urn:uuid:f98046af-dd3b-4e1b-a2d0-82bc62ec8185

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514**name**: Peter Hauser**telecom**:[+41 79 222 33 44](tel:+41792223344),[peter.hauser@hauserpraxis.ch](mailto:peter.hauser@hauserpraxis.ch)

-------

Entry 6 - fullUrl = urn:uuid:91692130-4dad-4ade-89e5-16e45f693b27

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A74966168**name**: Praxis Dr. Hauser

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Hauptstrasse 10 Solothurn 4500 |


-------

Entry 7 - fullUrl = urn:uuid:759f669b-a054-485a-ac03-4b7babf7eded

Resource PractitionerRole:

> **practitioner**:[Practitioner Peter Hauser](Bundle-46Doc-Yersinia-pestis.md#urn-uuid-f98046af-dd3b-4e1b-a2d0-82bc62ec8185)**organization**:[Organization Praxis Dr. Hauser](Bundle-46Doc-Yersinia-pestis.md#urn-uuid-91692130-4dad-4ade-89e5-16e45f693b27)

-------

Entry 8 - fullUrl = urn:uuid:c968da14-eba0-4f04-a9f3-22036a31e661

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-46Doc-Yersinia-pestis.md#urn-uuid-c6d39de9-e02b-4fec-8fdc-3958bb5b7e8e)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-10-15 14:20:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:d8033f15-0e30-43ab-8958-d9839d6b3243

Resource ServiceRequest:

> **identifier**: 26500923675**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Yersinia pestis [Presence] in Specimen by Organism specific culture)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-46Doc-Yersinia-pestis.md#urn-uuid-c6d39de9-e02b-4fec-8fdc-3958bb5b7e8e)**requester**:[PractitionerRole](Bundle-46Doc-Yersinia-pestis.md#urn-uuid-759f669b-a054-485a-ac03-4b7babf7eded)**specimen**:[Specimen: type =](Bundle-46Doc-Yersinia-pestis.md#urn-uuid-c968da14-eba0-4f04-a9f3-22036a31e661)

-------

Entry 10 - fullUrl = urn:uuid:a4e7bc84-8f08-496b-9d3e-737e36ccf14f

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-46Doc-Yersinia-pestis.md#urn-uuid-314af4aa-5900-4720-b023-3de0c0aa2b47) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.5.0/NamingSystem-uri.html)/urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab |

**Report Details**

* **Code**: [Yersinia pestis [Presence] in Specimen by Organism specific culture](Bundle-46Doc-Yersinia-pestis.md#urn-uuid-095165e4-418b-4504-a244-e93855f52b94)
  * **Value**: Error:**Not Applicable**
  * **Flags**: Final,Positive
  * **When For**: 2024-10-19 14:20:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "46Doc-Yersinia-pestis",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-10-20T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:1890d192-ac32-4aef-8a29-b9e5b6058373",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "1890d192-ac32-4aef-8a29-b9e5b6058373",
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
          "reference" : "urn:uuid:c6d39de9-e02b-4fec-8fdc-3958bb5b7e8e"
        },
        "date" : "2024-10-20T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:314af4aa-5900-4720-b023-3de0c0aa2b47"
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
                "reference" : "urn:uuid:095165e4-418b-4504-a244-e93855f52b94"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:c6d39de9-e02b-4fec-8fdc-3958bb5b7e8e",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "c6d39de9-e02b-4fec-8fdc-3958bb5b7e8e",
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
      "fullUrl" : "urn:uuid:314af4aa-5900-4720-b023-3de0c0aa2b47",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "314af4aa-5900-4720-b023-3de0c0aa2b47",
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
      "fullUrl" : "urn:uuid:095165e4-418b-4504-a244-e93855f52b94",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "095165e4-418b-4504-a244-e93855f52b94",
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
              "code" : "33685-9"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:c6d39de9-e02b-4fec-8fdc-3958bb5b7e8e"
        },
        "effectiveDateTime" : "2024-10-19T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:314af4aa-5900-4720-b023-3de0c0aa2b47"
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
          "reference" : "urn:uuid:c968da14-eba0-4f04-a9f3-22036a31e661"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:f98046af-dd3b-4e1b-a2d0-82bc62ec8185",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "f98046af-dd3b-4e1b-a2d0-82bc62ec8185",
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
      "fullUrl" : "urn:uuid:91692130-4dad-4ade-89e5-16e45f693b27",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "91692130-4dad-4ade-89e5-16e45f693b27",
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
      "fullUrl" : "urn:uuid:759f669b-a054-485a-ac03-4b7babf7eded",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "759f669b-a054-485a-ac03-4b7babf7eded",
        "practitioner" : {
          "reference" : "urn:uuid:f98046af-dd3b-4e1b-a2d0-82bc62ec8185"
        },
        "organization" : {
          "reference" : "urn:uuid:91692130-4dad-4ade-89e5-16e45f693b27"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:c968da14-eba0-4f04-a9f3-22036a31e661",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "c968da14-eba0-4f04-a9f3-22036a31e661",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:c6d39de9-e02b-4fec-8fdc-3958bb5b7e8e"
        },
        "collection" : {
          "collectedDateTime" : "2024-10-15T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:d8033f15-0e30-43ab-8958-d9839d6b3243",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "d8033f15-0e30-43ab-8958-d9839d6b3243",
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
              "code" : "33685-9"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:c6d39de9-e02b-4fec-8fdc-3958bb5b7e8e"
        },
        "requester" : {
          "reference" : "urn:uuid:759f669b-a054-485a-ac03-4b7babf7eded"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:c968da14-eba0-4f04-a9f3-22036a31e661"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:a4e7bc84-8f08-496b-9d3e-737e36ccf14f",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "a4e7bc84-8f08-496b-9d3e-737e36ccf14f",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:1890d192-ac32-4aef-8a29-b9e5b6058373"
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
            "reference" : "urn:uuid:d8033f15-0e30-43ab-8958-d9839d6b3243"
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
          "reference" : "urn:uuid:c6d39de9-e02b-4fec-8fdc-3958bb5b7e8e"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:314af4aa-5900-4720-b023-3de0c0aa2b47"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:c968da14-eba0-4f04-a9f3-22036a31e661"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:095165e4-418b-4504-a244-e93855f52b94"
          }
        ]
      }
    }
  ]
}

```
