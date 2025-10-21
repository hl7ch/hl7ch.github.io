# 17Doc - Neisseria meningitidis – microscopic finding - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **17Doc - Neisseria meningitidis – microscopic finding**

## Example Bundle: 17Doc - Neisseria meningitidis – microscopic finding

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

Entry 2 - fullUrl = urn:uuid:44766b55-52ee-422e-b170-cdb6864a291d

Resource Patient:

> Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 3 - fullUrl = urn:uuid:5c550ab5-579a-4dab-992c-d5c7adc6166e

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:ecf5046c-bcc8-4a29-9b4f-5c6f771185d8

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Microscopic observation [Identifier] in Cerebral spinal fluid by Gram stain**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-17Doc-Neisseria.md#urn-uuid-44766b55-52ee-422e-b170-cdb6864a291d)**effective**: 2024-07-07 09:15:00+0200**performer**:[Organization SanLab](Bundle-17Doc-Neisseria.md#urn-uuid-5c550ab5-579a-4dab-992c-d5c7adc6166e)**value**:Neisseria meningitidis**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-17Doc-Neisseria.md#urn-uuid-cb86dbdb-44bb-4eeb-be71-9acd059512ea)

-------

Entry 5 - fullUrl = urn:uuid:163f8ba2-9480-4206-8fba-0503825dff4c

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000234438**name**: Monika Giacometti**telecom**:[+41 79 111 44 55](tel:+41791114455),[m.giacometti@ks-abc.ch](mailto:m.giacometti@ks-abc.ch)

-------

Entry 6 - fullUrl = urn:uuid:efc89964-d13b-4f29-8a4d-4d8956a25cf6

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A99684215**name**: Kantonsspital ABC

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Aortastrasse 22 Bern 3000 |


-------

Entry 7 - fullUrl = urn:uuid:0d7b9484-0756-4114-a4e4-9506a05b66f5

Resource PractitionerRole:

> **practitioner**:[Practitioner Monika Giacometti](Bundle-14Doc-Neisseriameningitidis-confirmationtest-originalorder.md#urn-uuid-163f8ba2-9480-4206-8fba-0503825dff4c)**organization**:[Organization Kantonsspital ABC](Bundle-14Doc-Neisseriameningitidis-confirmationtest-originalorder.md#urn-uuid-efc89964-d13b-4f29-8a4d-4d8956a25cf6)

-------

Entry 8 - fullUrl = urn:uuid:cb86dbdb-44bb-4eeb-be71-9acd059512ea

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-17Doc-Neisseria.md#urn-uuid-44766b55-52ee-422e-b170-cdb6864a291d)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-07-05 09:15:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:fb4cda61-696a-48ea-bb53-2c939d2afa78

Resource ServiceRequest:

> **identifier**: 50002610**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Microscopic observation [Identifier] in Cerebral spinal fluid by Gram stain)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-17Doc-Neisseria.md#urn-uuid-44766b55-52ee-422e-b170-cdb6864a291d)**requester**:[PractitionerRole](Bundle-14Doc-Neisseriameningitidis-confirmationtest-originalorder.md#urn-uuid-0d7b9484-0756-4114-a4e4-9506a05b66f5)**specimen**:[Specimen: type =](Bundle-17Doc-Neisseria.md#urn-uuid-cb86dbdb-44bb-4eeb-be71-9acd059512ea)

-------

Entry 10 - fullUrl = urn:uuid:0dedadd9-4e61-40a3-97ce-8f46b05cc1f9

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-17Doc-Neisseria.md#urn-uuid-5c550ab5-579a-4dab-992c-d5c7adc6166e) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.5.0/NamingSystem-uri.html)/urn:uuid:ac01252d-6012-443f-9690-9291adb23433 |

**Report Details**

* **Code**: [Microscopic observation [Identifier] in Cerebral spinal fluid by Gram stain](Bundle-17Doc-Neisseria.md#urn-uuid-ecf5046c-bcc8-4a29-9b4f-5c6f771185d8)
  * **Value**: Neisseria meningitidis
  * **Flags**: Final,Positive
  * **When For**: 2024-07-07 09:15:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "17Doc-Neisseria",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:ac01252d-6012-443f-9690-9291adb23433"
  },
  "type" : "document",
  "timestamp" : "2024-07-14T11:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:02129440-a760-4b1e-8dd8-d3d1ae93e624",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "02129440-a760-4b1e-8dd8-d3d1ae93e624",
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
          "reference" : "urn:uuid:44766b55-52ee-422e-b170-cdb6864a291d"
        },
        "date" : "2024-07-14T11:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:5c550ab5-579a-4dab-992c-d5c7adc6166e"
          }
        ],
        "title" : "Laborbericht vom 14.7.2024",
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
                "reference" : "urn:uuid:ecf5046c-bcc8-4a29-9b4f-5c6f771185d8"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:44766b55-52ee-422e-b170-cdb6864a291d",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "44766b55-52ee-422e-b170-cdb6864a291d",
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
      "fullUrl" : "urn:uuid:5c550ab5-579a-4dab-992c-d5c7adc6166e",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "5c550ab5-579a-4dab-992c-d5c7adc6166e",
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
      "fullUrl" : "urn:uuid:ecf5046c-bcc8-4a29-9b4f-5c6f771185d8",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "ecf5046c-bcc8-4a29-9b4f-5c6f771185d8",
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
              "code" : "14357-8"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:44766b55-52ee-422e-b170-cdb6864a291d"
        },
        "effectiveDateTime" : "2024-07-07T09:15:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:5c550ab5-579a-4dab-992c-d5c7adc6166e"
          }
        ],
        "valueCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "17872004"
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
          "reference" : "urn:uuid:cb86dbdb-44bb-4eeb-be71-9acd059512ea"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:163f8ba2-9480-4206-8fba-0503825dff4c",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "163f8ba2-9480-4206-8fba-0503825dff4c",
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
      "fullUrl" : "urn:uuid:efc89964-d13b-4f29-8a4d-4d8956a25cf6",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "efc89964-d13b-4f29-8a4d-4d8956a25cf6",
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
      "fullUrl" : "urn:uuid:0d7b9484-0756-4114-a4e4-9506a05b66f5",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "0d7b9484-0756-4114-a4e4-9506a05b66f5",
        "practitioner" : {
          "reference" : "urn:uuid:163f8ba2-9480-4206-8fba-0503825dff4c"
        },
        "organization" : {
          "reference" : "urn:uuid:efc89964-d13b-4f29-8a4d-4d8956a25cf6"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:cb86dbdb-44bb-4eeb-be71-9acd059512ea",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "cb86dbdb-44bb-4eeb-be71-9acd059512ea",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:44766b55-52ee-422e-b170-cdb6864a291d"
        },
        "collection" : {
          "collectedDateTime" : "2024-07-05T09:15:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:fb4cda61-696a-48ea-bb53-2c939d2afa78",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "fb4cda61-696a-48ea-bb53-2c939d2afa78",
        "identifier" : [
          {
            "value" : "50002610"
          }
        ],
        "status" : "completed",
        "intent" : "order",
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "14357-8"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:44766b55-52ee-422e-b170-cdb6864a291d"
        },
        "requester" : {
          "reference" : "urn:uuid:0d7b9484-0756-4114-a4e4-9506a05b66f5"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:cb86dbdb-44bb-4eeb-be71-9acd059512ea"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:0dedadd9-4e61-40a3-97ce-8f46b05cc1f9",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "0dedadd9-4e61-40a3-97ce-8f46b05cc1f9",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:02129440-a760-4b1e-8dd8-d3d1ae93e624"
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
            "reference" : "urn:uuid:fb4cda61-696a-48ea-bb53-2c939d2afa78"
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
          "reference" : "urn:uuid:44766b55-52ee-422e-b170-cdb6864a291d"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:5c550ab5-579a-4dab-992c-d5c7adc6166e"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:cb86dbdb-44bb-4eeb-be71-9acd059512ea"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:ecf5046c-bcc8-4a29-9b4f-5c6f771185d8"
          }
        ]
      }
    }
  ]
}

```
