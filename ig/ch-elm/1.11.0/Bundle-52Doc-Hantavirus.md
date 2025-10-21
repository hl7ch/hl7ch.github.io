# 52Doc - Hantavirus - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **52Doc - Hantavirus**

## Example Bundle: 52Doc - Hantavirus

**Document Details**

**Document Subject**

A D Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)

-------

-------

**Document Content**

## Analyseergebnisse der mikrobiologischen Untersuchung

-------

## Additional Resources Included in Document

-------

Entry 2 - fullUrl = urn:uuid:131fd8a7-2378-48fe-ab64-ed0bf34dc8af

Resource Patient:

> A D Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 3 - fullUrl = urn:uuid:672c0dd7-c63b-4e11-a101-a9e10af3d2b6

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:637d1c30-2d27-4365-84dd-47bb55c090c8

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Hantavirus RNA [Presence] in Blood by NAA with probe detection**subject**:[A D Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-52Doc-Hantavirus.md#urn-uuid-131fd8a7-2378-48fe-ab64-ed0bf34dc8af)**effective**: 2024-08-28 14:20:00+0200**performer**:[Organization SanLab](Bundle-52Doc-Hantavirus.md#urn-uuid-672c0dd7-c63b-4e11-a101-a9e10af3d2b6)**value**:Puumala virus**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-52Doc-Hantavirus.md#urn-uuid-6360cda0-1fe4-49b9-bb8c-c83dbac24f93)

-------

Entry 5 - fullUrl = urn:uuid:eb5b4798-4b5c-48d1-84d9-a33c75a143ee

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514**name**: Peter Hauser**telecom**:[+41 79 222 33 44](tel:+41792223344),[peter.hauser@hauserpraxis.ch](mailto:peter.hauser@hauserpraxis.ch)

-------

Entry 6 - fullUrl = urn:uuid:c25ad131-8166-460a-8e1d-fced267d7d06

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A74966168**name**: Praxis Dr. Hauser

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Hauptstrasse 10 Solothurn 4500 |


-------

Entry 7 - fullUrl = urn:uuid:d760955a-90ee-4b47-962e-55c7b52169d3

Resource PractitionerRole:

> **practitioner**:[Practitioner Peter Hauser](Bundle-52Doc-Hantavirus.md#urn-uuid-eb5b4798-4b5c-48d1-84d9-a33c75a143ee)**organization**:[Organization Praxis Dr. Hauser](Bundle-52Doc-Hantavirus.md#urn-uuid-c25ad131-8166-460a-8e1d-fced267d7d06)

-------

Entry 8 - fullUrl = urn:uuid:6360cda0-1fe4-49b9-bb8c-c83dbac24f93

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[A D Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-52Doc-Hantavirus.md#urn-uuid-131fd8a7-2378-48fe-ab64-ed0bf34dc8af)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-08-26 14:20:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:34cc0824-ee5d-44f8-acbe-f21102e18cd1

Resource ServiceRequest:

> **identifier**: 26500923622**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Hantavirus RNA [Presence] in Blood by NAA with probe detection)**subject**:[A D Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-52Doc-Hantavirus.md#urn-uuid-131fd8a7-2378-48fe-ab64-ed0bf34dc8af)**requester**:[PractitionerRole](Bundle-52Doc-Hantavirus.md#urn-uuid-d760955a-90ee-4b47-962e-55c7b52169d3)**specimen**:[Specimen: type =](Bundle-52Doc-Hantavirus.md#urn-uuid-6360cda0-1fe4-49b9-bb8c-c83dbac24f93)

-------

Entry 10 - fullUrl = urn:uuid:8f35d5a6-df90-4a4d-a3a2-22d06c315f22

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | A D Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-52Doc-Hantavirus.md#urn-uuid-672c0dd7-c63b-4e11-a101-a9e10af3d2b6) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.5.0/NamingSystem-uri.html)/urn:uuid:6401332d-6012-443f-9690-9331adb23aab |

**Report Details**

* **Code**: [Hantavirus RNA [Presence] in Blood by NAA with probe detection](Bundle-52Doc-Hantavirus.md#urn-uuid-637d1c30-2d27-4365-84dd-47bb55c090c8)
  * **Value**: Puumala virus
  * **Flags**: Final,Positive
  * **When For**: 2024-08-28 14:20:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "52Doc-Hantavirus",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:6401332d-6012-443f-9690-9331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-09-05T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:80b22fb4-2bd8-462f-b9d5-56530b9eae15",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "80b22fb4-2bd8-462f-b9d5-56530b9eae15",
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
          "reference" : "urn:uuid:131fd8a7-2378-48fe-ab64-ed0bf34dc8af"
        },
        "date" : "2024-09-05T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:672c0dd7-c63b-4e11-a101-a9e10af3d2b6"
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
                "reference" : "urn:uuid:637d1c30-2d27-4365-84dd-47bb55c090c8"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:131fd8a7-2378-48fe-ab64-ed0bf34dc8af",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "131fd8a7-2378-48fe-ab64-ed0bf34dc8af",
        "identifier" : [
          {
            "system" : "urn:oid:2.16.756.5.32",
            "value" : "7561234567897"
          }
        ],
        "name" : [
          {
            "family" : "D",
            "given" : ["A"]
          }
        ],
        "gender" : "female",
        "birthDate" : "1981-02-07",
        "address" : [
          {
            "use" : "home",
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
      "fullUrl" : "urn:uuid:672c0dd7-c63b-4e11-a101-a9e10af3d2b6",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "672c0dd7-c63b-4e11-a101-a9e10af3d2b6",
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
      "fullUrl" : "urn:uuid:637d1c30-2d27-4365-84dd-47bb55c090c8",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "637d1c30-2d27-4365-84dd-47bb55c090c8",
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
              "code" : "86520-4"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:131fd8a7-2378-48fe-ab64-ed0bf34dc8af"
        },
        "effectiveDateTime" : "2024-08-28T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:672c0dd7-c63b-4e11-a101-a9e10af3d2b6"
          }
        ],
        "valueCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "40754006"
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
          "reference" : "urn:uuid:6360cda0-1fe4-49b9-bb8c-c83dbac24f93"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:eb5b4798-4b5c-48d1-84d9-a33c75a143ee",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "eb5b4798-4b5c-48d1-84d9-a33c75a143ee",
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
      "fullUrl" : "urn:uuid:c25ad131-8166-460a-8e1d-fced267d7d06",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "c25ad131-8166-460a-8e1d-fced267d7d06",
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
      "fullUrl" : "urn:uuid:d760955a-90ee-4b47-962e-55c7b52169d3",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "d760955a-90ee-4b47-962e-55c7b52169d3",
        "practitioner" : {
          "reference" : "urn:uuid:eb5b4798-4b5c-48d1-84d9-a33c75a143ee"
        },
        "organization" : {
          "reference" : "urn:uuid:c25ad131-8166-460a-8e1d-fced267d7d06"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:6360cda0-1fe4-49b9-bb8c-c83dbac24f93",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "6360cda0-1fe4-49b9-bb8c-c83dbac24f93",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:131fd8a7-2378-48fe-ab64-ed0bf34dc8af"
        },
        "collection" : {
          "collectedDateTime" : "2024-08-26T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:34cc0824-ee5d-44f8-acbe-f21102e18cd1",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "34cc0824-ee5d-44f8-acbe-f21102e18cd1",
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
              "code" : "86520-4"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:131fd8a7-2378-48fe-ab64-ed0bf34dc8af"
        },
        "requester" : {
          "reference" : "urn:uuid:d760955a-90ee-4b47-962e-55c7b52169d3"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:6360cda0-1fe4-49b9-bb8c-c83dbac24f93"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:8f35d5a6-df90-4a4d-a3a2-22d06c315f22",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "8f35d5a6-df90-4a4d-a3a2-22d06c315f22",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:80b22fb4-2bd8-462f-b9d5-56530b9eae15"
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
            "reference" : "urn:uuid:34cc0824-ee5d-44f8-acbe-f21102e18cd1"
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
          "reference" : "urn:uuid:131fd8a7-2378-48fe-ab64-ed0bf34dc8af"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:672c0dd7-c63b-4e11-a101-a9e10af3d2b6"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:6360cda0-1fe4-49b9-bb8c-c83dbac24f93"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:637d1c30-2d27-4365-84dd-47bb55c090c8"
          }
        ]
      }
    }
  ]
}

```
