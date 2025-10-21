# 19Doc - Streptococcus pneumoniae - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **19Doc - Streptococcus pneumoniae**

## Example Bundle: 19Doc - Streptococcus pneumoniae

**Document Details**

**Document Subject**

D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)

-------

-------

**Document Content**

## Analyseergebnisse der mikrobiologischen Untersuchung

-------

## Additional Resources Included in Document

-------

Entry 2 - fullUrl = urn:uuid:1d7f3909-1a3a-4824-ae59-fedcaf934b5b

Resource Patient:

> D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)
-------

-------

Entry 3 - fullUrl = urn:uuid:17dfb519-fade-486d-8776-ce3a2816a123

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:4257b84f-5644-49c2-a602-b76f038bf7ac

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Streptococcus pneumoniae Ag [Presence] in Cerebral spinal fluid**subject**:[D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Bundle-19Doc-S-pneumoniae.md#urn-uuid-1d7f3909-1a3a-4824-ae59-fedcaf934b5b)**effective**: 2024-08-12 09:15:00+0200**performer**:[Organization SanLab](Bundle-19Doc-S-pneumoniae.md#urn-uuid-17dfb519-fade-486d-8776-ce3a2816a123)**dataAbsentReason**:Not Applicable**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-19Doc-S-pneumoniae.md#urn-uuid-65c5280b-bac9-443a-8c10-958c3fa7e034)

-------

Entry 5 - fullUrl = urn:uuid:a5fc960f-258a-40b3-9800-72c486181dc7

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000234438**name**: Monika Giacometti**telecom**:[+41 79 111 44 55](tel:+41791114455),[m.giacometti@ks-abc.ch](mailto:m.giacometti@ks-abc.ch)

-------

Entry 6 - fullUrl = urn:uuid:520a8e6a-80d2-45cc-9b16-a7b80636a535

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A99684215**name**: Kantonsspital ABC

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Aortastrasse 22 Bern 3000 |


-------

Entry 7 - fullUrl = urn:uuid:227959ae-a1a0-47fc-a9c2-15e508528470

Resource PractitionerRole:

> **practitioner**:[Practitioner Monika Giacometti](Bundle-19Doc-S-pneumoniae.md#urn-uuid-a5fc960f-258a-40b3-9800-72c486181dc7)**organization**:[Organization Kantonsspital ABC](Bundle-19Doc-S-pneumoniae.md#urn-uuid-520a8e6a-80d2-45cc-9b16-a7b80636a535)

-------

Entry 8 - fullUrl = urn:uuid:65c5280b-bac9-443a-8c10-958c3fa7e034

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Bundle-19Doc-S-pneumoniae.md#urn-uuid-1d7f3909-1a3a-4824-ae59-fedcaf934b5b)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-08-10 09:15:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:bbae3573-5fe4-40eb-af6e-b2d9bf18741f

Resource ServiceRequest:

> **identifier**: 50002755**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Streptococcus pneumoniae Ag [Presence] in Cerebral spinal fluid)**subject**:[D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Bundle-19Doc-S-pneumoniae.md#urn-uuid-1d7f3909-1a3a-4824-ae59-fedcaf934b5b)**requester**:[PractitionerRole](Bundle-19Doc-S-pneumoniae.md#urn-uuid-227959ae-a1a0-47fc-a9c2-15e508528470)**specimen**:[Specimen: type =](Bundle-19Doc-S-pneumoniae.md#urn-uuid-65c5280b-bac9-443a-8c10-958c3fa7e034)

-------

Entry 10 - fullUrl = urn:uuid:d6058f3d-091a-41f5-93b0-0738bf65a3b5

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070) |
| Performer | [Organization SanLab](Bundle-19Doc-S-pneumoniae.md#urn-uuid-17dfb519-fade-486d-8776-ce3a2816a123) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.5.0/NamingSystem-uri.html)/urn:uuid:ac01252d-6012-443f-9690-9291adb23433 |

**Report Details**

* **Code**: [Streptococcus pneumoniae Ag [Presence] in Cerebral spinal fluid](Bundle-19Doc-S-pneumoniae.md#urn-uuid-4257b84f-5644-49c2-a602-b76f038bf7ac)
  * **Value**: Error:**Not Applicable**
  * **Flags**: Final,Positive
  * **When For**: 2024-08-12 09:15:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "19Doc-S-pneumoniae",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:ac01252d-6012-443f-9690-9291adb23433"
  },
  "type" : "document",
  "timestamp" : "2024-08-14T11:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:8a946b94-12a1-4a79-bf6a-6a36931fb697",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "8a946b94-12a1-4a79-bf6a-6a36931fb697",
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
          "reference" : "urn:uuid:1d7f3909-1a3a-4824-ae59-fedcaf934b5b"
        },
        "date" : "2024-08-14T11:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:17dfb519-fade-486d-8776-ce3a2816a123"
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
                "reference" : "urn:uuid:4257b84f-5644-49c2-a602-b76f038bf7ac"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:1d7f3909-1a3a-4824-ae59-fedcaf934b5b",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "1d7f3909-1a3a-4824-ae59-fedcaf934b5b",
        "identifier" : [
          {
            "system" : "urn:oid:2.16.756.5.32",
            "value" : "7562295883070"
          }
        ],
        "name" : [
          {
            "family" : "M",
            "given" : ["D"]
          }
        ],
        "gender" : "male",
        "birthDate" : "1960-08-22",
        "address" : [
          {
            "use" : "home",
            "city" : "Bern",
            "state" : "BE",
            "postalCode" : "3000",
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
      "fullUrl" : "urn:uuid:17dfb519-fade-486d-8776-ce3a2816a123",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "17dfb519-fade-486d-8776-ce3a2816a123",
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
      "fullUrl" : "urn:uuid:4257b84f-5644-49c2-a602-b76f038bf7ac",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "4257b84f-5644-49c2-a602-b76f038bf7ac",
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
              "code" : "20489-1"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:1d7f3909-1a3a-4824-ae59-fedcaf934b5b"
        },
        "effectiveDateTime" : "2024-08-12T09:15:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:17dfb519-fade-486d-8776-ce3a2816a123"
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
          "reference" : "urn:uuid:65c5280b-bac9-443a-8c10-958c3fa7e034"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:a5fc960f-258a-40b3-9800-72c486181dc7",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "a5fc960f-258a-40b3-9800-72c486181dc7",
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
      "fullUrl" : "urn:uuid:520a8e6a-80d2-45cc-9b16-a7b80636a535",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "520a8e6a-80d2-45cc-9b16-a7b80636a535",
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
      "fullUrl" : "urn:uuid:227959ae-a1a0-47fc-a9c2-15e508528470",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "227959ae-a1a0-47fc-a9c2-15e508528470",
        "practitioner" : {
          "reference" : "urn:uuid:a5fc960f-258a-40b3-9800-72c486181dc7"
        },
        "organization" : {
          "reference" : "urn:uuid:520a8e6a-80d2-45cc-9b16-a7b80636a535"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:65c5280b-bac9-443a-8c10-958c3fa7e034",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "65c5280b-bac9-443a-8c10-958c3fa7e034",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:1d7f3909-1a3a-4824-ae59-fedcaf934b5b"
        },
        "collection" : {
          "collectedDateTime" : "2024-08-10T09:15:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:bbae3573-5fe4-40eb-af6e-b2d9bf18741f",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "bbae3573-5fe4-40eb-af6e-b2d9bf18741f",
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
              "code" : "20489-1"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:1d7f3909-1a3a-4824-ae59-fedcaf934b5b"
        },
        "requester" : {
          "reference" : "urn:uuid:227959ae-a1a0-47fc-a9c2-15e508528470"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:65c5280b-bac9-443a-8c10-958c3fa7e034"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:d6058f3d-091a-41f5-93b0-0738bf65a3b5",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "d6058f3d-091a-41f5-93b0-0738bf65a3b5",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:8a946b94-12a1-4a79-bf6a-6a36931fb697"
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
            "reference" : "urn:uuid:bbae3573-5fe4-40eb-af6e-b2d9bf18741f"
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
          "reference" : "urn:uuid:1d7f3909-1a3a-4824-ae59-fedcaf934b5b"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:17dfb519-fade-486d-8776-ce3a2816a123"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:65c5280b-bac9-443a-8c10-958c3fa7e034"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:4257b84f-5644-49c2-a602-b76f038bf7ac"
          }
        ]
      }
    }
  ]
}

```
