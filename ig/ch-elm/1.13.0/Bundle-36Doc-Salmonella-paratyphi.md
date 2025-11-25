# 36Doc - Salmonella paratyphi - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **36Doc - Salmonella paratyphi**

## Example Bundle: 36Doc - Salmonella paratyphi

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

Entry 2 - fullUrl = urn:uuid:55643720-334e-4aac-a8dc-d0fc279055e0

Resource Patient:

> Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 3 - fullUrl = urn:uuid:052aeb79-3648-44b2-8868-c2317759d49e

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:e097cea4-b970-498d-bd87-b0ee3f5c2bb3

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Salmonella sp [Presence] in Stool by Culture**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-36Doc-Salmonella-paratyphi.md#urn-uuid-55643720-334e-4aac-a8dc-d0fc279055e0)**effective**: 2024-08-28 14:20:00+0200**performer**:[Organization SanLab](Bundle-36Doc-Salmonella-paratyphi.md#urn-uuid-052aeb79-3648-44b2-8868-c2317759d49e)**value**:Salmonella Paratyphi A (organism)**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-36Doc-Salmonella-paratyphi.md#urn-uuid-e0fba1ec-be0b-4b24-b9a2-c8f094cb30c6)

-------

Entry 5 - fullUrl = urn:uuid:4859fb3a-1879-401b-9096-e0c2d7e92b45

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514**name**: Peter Hauser**telecom**:[+41 79 222 33 44](tel:+41792223344),[peter.hauser@hauserpraxis.ch](mailto:peter.hauser@hauserpraxis.ch)

-------

Entry 6 - fullUrl = urn:uuid:86a1a34a-e430-452b-9805-c51369575a2c

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A74966168**name**: Praxis Dr. Hauser

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Hauptstrasse 10 Solothurn 4500 |


-------

Entry 7 - fullUrl = urn:uuid:899fb529-21ff-48c6-8dfc-30a01ddc8c4d

Resource PractitionerRole:

> **practitioner**:[Practitioner Peter Hauser](Bundle-36Doc-Salmonella-paratyphi.md#urn-uuid-4859fb3a-1879-401b-9096-e0c2d7e92b45)**organization**:[Organization Praxis Dr. Hauser](Bundle-36Doc-Salmonella-paratyphi.md#urn-uuid-86a1a34a-e430-452b-9805-c51369575a2c)

-------

Entry 8 - fullUrl = urn:uuid:e0fba1ec-be0b-4b24-b9a2-c8f094cb30c6

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-36Doc-Salmonella-paratyphi.md#urn-uuid-55643720-334e-4aac-a8dc-d0fc279055e0)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-08-26 14:20:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:1a0fb673-15e6-4357-84a3-7ee775674e7b

Resource ServiceRequest:

> **identifier**: 26500923622**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Salmonella sp [Presence] in Stool by Culture)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-36Doc-Salmonella-paratyphi.md#urn-uuid-55643720-334e-4aac-a8dc-d0fc279055e0)**requester**:[PractitionerRole](Bundle-36Doc-Salmonella-paratyphi.md#urn-uuid-899fb529-21ff-48c6-8dfc-30a01ddc8c4d)**specimen**:[Specimen: type =](Bundle-36Doc-Salmonella-paratyphi.md#urn-uuid-e0fba1ec-be0b-4b24-b9a2-c8f094cb30c6)

-------

Entry 10 - fullUrl = urn:uuid:3e71aeec-d07e-4ad2-a67c-26a02d41b9a5

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-36Doc-Salmonella-paratyphi.md#urn-uuid-052aeb79-3648-44b2-8868-c2317759d49e) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:6401332d-6012-443f-9690-9331adb23aab |

**Report Details**

* **Code**: [Salmonella sp [Presence] in Stool by Culture](Bundle-36Doc-Salmonella-paratyphi.md#urn-uuid-e097cea4-b970-498d-bd87-b0ee3f5c2bb3)
  * **Value**: Salmonella Paratyphi A (organism)
  * **Flags**: Final,Positive
  * **When For**: 2024-08-28 14:20:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "36Doc-Salmonella-paratyphi",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:6401332d-6012-443f-9690-9331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-09-05T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:aaf88229-e545-43e1-8251-e6bedfe91f69",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "aaf88229-e545-43e1-8251-e6bedfe91f69",
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
          "reference" : "urn:uuid:55643720-334e-4aac-a8dc-d0fc279055e0"
        },
        "date" : "2024-09-05T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:052aeb79-3648-44b2-8868-c2317759d49e"
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
                "reference" : "urn:uuid:e097cea4-b970-498d-bd87-b0ee3f5c2bb3"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:55643720-334e-4aac-a8dc-d0fc279055e0",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "55643720-334e-4aac-a8dc-d0fc279055e0",
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
      "fullUrl" : "urn:uuid:052aeb79-3648-44b2-8868-c2317759d49e",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "052aeb79-3648-44b2-8868-c2317759d49e",
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
      "fullUrl" : "urn:uuid:e097cea4-b970-498d-bd87-b0ee3f5c2bb3",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "e097cea4-b970-498d-bd87-b0ee3f5c2bb3",
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
              "code" : "82301-3"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:55643720-334e-4aac-a8dc-d0fc279055e0"
        },
        "effectiveDateTime" : "2024-08-28T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:052aeb79-3648-44b2-8868-c2317759d49e"
          }
        ],
        "valueCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "79128009"
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
          "reference" : "urn:uuid:e0fba1ec-be0b-4b24-b9a2-c8f094cb30c6"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:4859fb3a-1879-401b-9096-e0c2d7e92b45",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "4859fb3a-1879-401b-9096-e0c2d7e92b45",
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
      "fullUrl" : "urn:uuid:86a1a34a-e430-452b-9805-c51369575a2c",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "86a1a34a-e430-452b-9805-c51369575a2c",
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
      "fullUrl" : "urn:uuid:899fb529-21ff-48c6-8dfc-30a01ddc8c4d",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "899fb529-21ff-48c6-8dfc-30a01ddc8c4d",
        "practitioner" : {
          "reference" : "urn:uuid:4859fb3a-1879-401b-9096-e0c2d7e92b45"
        },
        "organization" : {
          "reference" : "urn:uuid:86a1a34a-e430-452b-9805-c51369575a2c"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:e0fba1ec-be0b-4b24-b9a2-c8f094cb30c6",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "e0fba1ec-be0b-4b24-b9a2-c8f094cb30c6",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:55643720-334e-4aac-a8dc-d0fc279055e0"
        },
        "collection" : {
          "collectedDateTime" : "2024-08-26T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:1a0fb673-15e6-4357-84a3-7ee775674e7b",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "1a0fb673-15e6-4357-84a3-7ee775674e7b",
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
              "code" : "82301-3"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:55643720-334e-4aac-a8dc-d0fc279055e0"
        },
        "requester" : {
          "reference" : "urn:uuid:899fb529-21ff-48c6-8dfc-30a01ddc8c4d"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:e0fba1ec-be0b-4b24-b9a2-c8f094cb30c6"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:3e71aeec-d07e-4ad2-a67c-26a02d41b9a5",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "3e71aeec-d07e-4ad2-a67c-26a02d41b9a5",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:aaf88229-e545-43e1-8251-e6bedfe91f69"
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
            "reference" : "urn:uuid:1a0fb673-15e6-4357-84a3-7ee775674e7b"
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
          "reference" : "urn:uuid:55643720-334e-4aac-a8dc-d0fc279055e0"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:052aeb79-3648-44b2-8868-c2317759d49e"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:e0fba1ec-be0b-4b24-b9a2-c8f094cb30c6"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:e097cea4-b970-498d-bd87-b0ee3f5c2bb3"
          }
        ]
      }
    }
  ]
}

```
