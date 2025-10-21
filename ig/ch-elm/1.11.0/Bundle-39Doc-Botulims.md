# 39Doc - Botulism - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **39Doc - Botulism**

## Example Bundle: 39Doc - Botulism

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

Entry 2 - fullUrl = urn:uuid:a8215ce6-6fd3-4043-860a-cc97bb81bf5e

Resource Patient:

> Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 3 - fullUrl = urn:uuid:9c1e3890-d6b2-4d32-9def-4d979231365c

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:7c033541-fb30-45f7-a8cd-8e091a33ee9d

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Clostridium botulinum toxin [Presence] in Specimen by Mouse bioassay**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-39Doc-Botulims.md#urn-uuid-a8215ce6-6fd3-4043-860a-cc97bb81bf5e)**effective**: 2024-10-19 14:20:00+0200**performer**:[Organization SanLab](Bundle-39Doc-Botulims.md#urn-uuid-9c1e3890-d6b2-4d32-9def-4d979231365c)**dataAbsentReason**:Not Applicable**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-39Doc-Botulims.md#urn-uuid-21a62515-5b8b-471d-b948-8ca20143d2e3)

-------

Entry 5 - fullUrl = urn:uuid:edd0097b-25d1-4947-a98e-195858b87a1d

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514**name**: Peter Hauser**telecom**:[+41 79 222 33 44](tel:+41792223344),[peter.hauser@hauserpraxis.ch](mailto:peter.hauser@hauserpraxis.ch)

-------

Entry 6 - fullUrl = urn:uuid:4d114ca3-a388-4816-bbe6-4dd996b31f6b

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A74966168**name**: Praxis Dr. Hauser

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Hauptstrasse 10 Solothurn 4500 |


-------

Entry 7 - fullUrl = urn:uuid:c62dab7f-89a0-4334-8d6f-5a15ecb54096

Resource PractitionerRole:

> **practitioner**:[Practitioner Peter Hauser](Bundle-39Doc-Botulims.md#urn-uuid-edd0097b-25d1-4947-a98e-195858b87a1d)**organization**:[Organization Praxis Dr. Hauser](Bundle-39Doc-Botulims.md#urn-uuid-4d114ca3-a388-4816-bbe6-4dd996b31f6b)

-------

Entry 8 - fullUrl = urn:uuid:21a62515-5b8b-471d-b948-8ca20143d2e3

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-39Doc-Botulims.md#urn-uuid-a8215ce6-6fd3-4043-860a-cc97bb81bf5e)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-10-15 14:20:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:71a2ddfc-3644-4205-a140-76f1b878359e

Resource ServiceRequest:

> **identifier**: 26500923675**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Clostridium botulinum toxin [Presence] in Specimen by Mouse bioassay)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-39Doc-Botulims.md#urn-uuid-a8215ce6-6fd3-4043-860a-cc97bb81bf5e)**requester**:[PractitionerRole](Bundle-39Doc-Botulims.md#urn-uuid-c62dab7f-89a0-4334-8d6f-5a15ecb54096)**specimen**:[Specimen: type =](Bundle-39Doc-Botulims.md#urn-uuid-21a62515-5b8b-471d-b948-8ca20143d2e3)

-------

Entry 10 - fullUrl = urn:uuid:b2bc357f-9dc4-475d-80f4-07ba267cebab

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-39Doc-Botulims.md#urn-uuid-9c1e3890-d6b2-4d32-9def-4d979231365c) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.5.0/NamingSystem-uri.html)/urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab |

**Report Details**

* **Code**: [Clostridium botulinum toxin [Presence] in Specimen by Mouse bioassay](Bundle-39Doc-Botulims.md#urn-uuid-7c033541-fb30-45f7-a8cd-8e091a33ee9d)
  * **Value**: Error:**Not Applicable**
  * **Flags**: Final,Positive
  * **When For**: 2024-10-19 14:20:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "39Doc-Botulims",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-10-20T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:0d61e0ae-bef1-4ba5-9a36-ff6720af686b",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "0d61e0ae-bef1-4ba5-9a36-ff6720af686b",
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
          "reference" : "urn:uuid:a8215ce6-6fd3-4043-860a-cc97bb81bf5e"
        },
        "date" : "2024-10-20T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:9c1e3890-d6b2-4d32-9def-4d979231365c"
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
                "reference" : "urn:uuid:7c033541-fb30-45f7-a8cd-8e091a33ee9d"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:a8215ce6-6fd3-4043-860a-cc97bb81bf5e",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "a8215ce6-6fd3-4043-860a-cc97bb81bf5e",
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
      "fullUrl" : "urn:uuid:9c1e3890-d6b2-4d32-9def-4d979231365c",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "9c1e3890-d6b2-4d32-9def-4d979231365c",
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
      "fullUrl" : "urn:uuid:7c033541-fb30-45f7-a8cd-8e091a33ee9d",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "7c033541-fb30-45f7-a8cd-8e091a33ee9d",
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
              "code" : "33696-6"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:a8215ce6-6fd3-4043-860a-cc97bb81bf5e"
        },
        "effectiveDateTime" : "2024-10-19T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:9c1e3890-d6b2-4d32-9def-4d979231365c"
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
          "reference" : "urn:uuid:21a62515-5b8b-471d-b948-8ca20143d2e3"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:edd0097b-25d1-4947-a98e-195858b87a1d",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "edd0097b-25d1-4947-a98e-195858b87a1d",
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
      "fullUrl" : "urn:uuid:4d114ca3-a388-4816-bbe6-4dd996b31f6b",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "4d114ca3-a388-4816-bbe6-4dd996b31f6b",
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
      "fullUrl" : "urn:uuid:c62dab7f-89a0-4334-8d6f-5a15ecb54096",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "c62dab7f-89a0-4334-8d6f-5a15ecb54096",
        "practitioner" : {
          "reference" : "urn:uuid:edd0097b-25d1-4947-a98e-195858b87a1d"
        },
        "organization" : {
          "reference" : "urn:uuid:4d114ca3-a388-4816-bbe6-4dd996b31f6b"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:21a62515-5b8b-471d-b948-8ca20143d2e3",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "21a62515-5b8b-471d-b948-8ca20143d2e3",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:a8215ce6-6fd3-4043-860a-cc97bb81bf5e"
        },
        "collection" : {
          "collectedDateTime" : "2024-10-15T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:71a2ddfc-3644-4205-a140-76f1b878359e",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "71a2ddfc-3644-4205-a140-76f1b878359e",
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
              "code" : "33696-6"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:a8215ce6-6fd3-4043-860a-cc97bb81bf5e"
        },
        "requester" : {
          "reference" : "urn:uuid:c62dab7f-89a0-4334-8d6f-5a15ecb54096"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:21a62515-5b8b-471d-b948-8ca20143d2e3"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:b2bc357f-9dc4-475d-80f4-07ba267cebab",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "b2bc357f-9dc4-475d-80f4-07ba267cebab",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:0d61e0ae-bef1-4ba5-9a36-ff6720af686b"
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
            "reference" : "urn:uuid:71a2ddfc-3644-4205-a140-76f1b878359e"
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
          "reference" : "urn:uuid:a8215ce6-6fd3-4043-860a-cc97bb81bf5e"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:9c1e3890-d6b2-4d32-9def-4d979231365c"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:21a62515-5b8b-471d-b948-8ca20143d2e3"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:7c033541-fb30-45f7-a8cd-8e091a33ee9d"
          }
        ]
      }
    }
  ]
}

```
