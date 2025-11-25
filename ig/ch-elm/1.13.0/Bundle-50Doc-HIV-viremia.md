# 50Doc - HIV-viremia - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **50Doc - HIV-viremia**

## Example Bundle: 50Doc - HIV-viremia

**Document Details**

**Document Subject**

null null Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)

-------

-------

**Document Content**

## Analyseergebnisse der mikrobiologischen Untersuchung

-------

## Additional Resources Included in Document

-------

Entry 2 - fullUrl = urn:uuid:c843215d-d465-40df-865c-98fe93ff2094

Resource Patient:

> null null Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 3 - fullUrl = urn:uuid:15297076-ccf5-471e-a811-ef3fcf2dcc72

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:70087c84-4dfe-4159-be17-cf388e93656d

Resource Observation:

> **status**: Final**category**:Laboratory**code**:HIV 1 RNA [Units/volume] (viral load) in Serum or Plasma by NAA with probe detection**subject**:[null null Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-50Doc-HIV-viremia.md#urn-uuid-c843215d-d465-40df-865c-98fe93ff2094)**effective**: 2024-11-04 14:20:00+0200**performer**:[Organization SanLab](Bundle-50Doc-HIV-viremia.md#urn-uuid-15297076-ccf5-471e-a811-ef3fcf2dcc72)**value**: 65168 {Copies}/mL(Details: UCUM code1/mL = '1/mL')**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-50Doc-HIV-viremia.md#urn-uuid-5fb0b52d-547e-4be6-9423-5b07e4f1f231)

-------

Entry 5 - fullUrl = urn:uuid:1f69f396-7a49-479b-b152-07ba406bbf81

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514**name**: Peter Hauser**telecom**:[+41 79 222 33 44](tel:+41792223344),[peter.hauser@hauserpraxis.ch](mailto:peter.hauser@hauserpraxis.ch)

-------

Entry 6 - fullUrl = urn:uuid:d210fd6b-9bd8-4e3d-826c-3b69ee936089

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A74966168**name**: Praxis Dr. Hauser

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Hauptstrasse 10 Solothurn 4500 |


-------

Entry 7 - fullUrl = urn:uuid:035eeb60-3ccd-41c3-95c9-e7f0386e52fc

Resource PractitionerRole:

> **practitioner**:[Practitioner Peter Hauser](Bundle-50Doc-HIV-viremia.md#urn-uuid-1f69f396-7a49-479b-b152-07ba406bbf81)**organization**:[Organization Praxis Dr. Hauser](Bundle-50Doc-HIV-viremia.md#urn-uuid-d210fd6b-9bd8-4e3d-826c-3b69ee936089)

-------

Entry 8 - fullUrl = urn:uuid:5fb0b52d-547e-4be6-9423-5b07e4f1f231

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[null null Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-50Doc-HIV-viremia.md#urn-uuid-c843215d-d465-40df-865c-98fe93ff2094)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-11-01 14:20:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:2779825f-c7cc-4916-ac47-fb78ee8d5091

Resource ServiceRequest:

> **identifier**: 26500923675**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: HIV 1 RNA [Units/volume] (viral load) in Serum or Plasma by NAA with probe detection)**subject**:[null null Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-50Doc-HIV-viremia.md#urn-uuid-c843215d-d465-40df-865c-98fe93ff2094)**requester**:[PractitionerRole](Bundle-50Doc-HIV-viremia.md#urn-uuid-035eeb60-3ccd-41c3-95c9-e7f0386e52fc)**specimen**:[Specimen: type =](Bundle-50Doc-HIV-viremia.md#urn-uuid-5fb0b52d-547e-4be6-9423-5b07e4f1f231)

-------

Entry 10 - fullUrl = urn:uuid:99266b5b-8355-4c50-a46d-1dbdbc681c70

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | null null Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-50Doc-HIV-viremia.md#urn-uuid-15297076-ccf5-471e-a811-ef3fcf2dcc72) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:3401332d-6012-4434-9a90-6331adb23aab |

**Report Details**

* **Code**: [HIV 1 RNA [Units/volume] (viral load) in Serum or Plasma by NAA with probe detection](Bundle-50Doc-HIV-viremia.md#urn-uuid-70087c84-4dfe-4159-be17-cf388e93656d)
  * **Value**: 65168 {Copies}/mL(Details: UCUM code1/mL = '1/mL')
  * **Flags**: Final,Positive
  * **When For**: 2024-11-04 14:20:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "50Doc-HIV-viremia",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:3401332d-6012-4434-9a90-6331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-11-06T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:73164039-99ee-4932-8988-b0ea75d6b166",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "73164039-99ee-4932-8988-b0ea75d6b166",
        "language" : "de-CH",
        "identifier" : {
          "system" : "urn:ietf:rfc:3986",
          "value" : "urn:uuid:3401332d-6012-4434-9a90-6331adb23aab"
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
          "reference" : "urn:uuid:c843215d-d465-40df-865c-98fe93ff2094"
        },
        "date" : "2024-11-06T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:15297076-ccf5-471e-a811-ef3fcf2dcc72"
          }
        ],
        "title" : "Laborbericht vom 6.11.2024",
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
                "reference" : "urn:uuid:70087c84-4dfe-4159-be17-cf388e93656d"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:c843215d-d465-40df-865c-98fe93ff2094",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "c843215d-d465-40df-865c-98fe93ff2094",
        "identifier" : [
          {
            "system" : "urn:oid:2.16.756.5.32",
            "value" : "7561234567897"
          }
        ],
        "name" : [
          {
            "extension" : [
              {
                "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-hiv-code",
                "valueString" : "H5"
              }
            ],
            "_family" : {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/StructureDefinition/data-absent-reason",
                  "valueCode" : "masked"
                }
              ]
            },
            "_given" : [
              {
                "extension" : [
                  {
                    "url" : "http://hl7.org/fhir/StructureDefinition/data-absent-reason",
                    "valueCode" : "masked"
                  }
                ]
              }
            ]
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
      "fullUrl" : "urn:uuid:15297076-ccf5-471e-a811-ef3fcf2dcc72",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "15297076-ccf5-471e-a811-ef3fcf2dcc72",
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
      "fullUrl" : "urn:uuid:70087c84-4dfe-4159-be17-cf388e93656d",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "70087c84-4dfe-4159-be17-cf388e93656d",
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
              "code" : "62469-2"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:c843215d-d465-40df-865c-98fe93ff2094"
        },
        "effectiveDateTime" : "2024-11-04T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:15297076-ccf5-471e-a811-ef3fcf2dcc72"
          }
        ],
        "valueQuantity" : {
          "value" : 65168,
          "unit" : "{Copies}/mL",
          "system" : "http://unitsofmeasure.org",
          "code" : "1/mL"
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
          "reference" : "urn:uuid:5fb0b52d-547e-4be6-9423-5b07e4f1f231"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:1f69f396-7a49-479b-b152-07ba406bbf81",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "1f69f396-7a49-479b-b152-07ba406bbf81",
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
      "fullUrl" : "urn:uuid:d210fd6b-9bd8-4e3d-826c-3b69ee936089",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "d210fd6b-9bd8-4e3d-826c-3b69ee936089",
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
      "fullUrl" : "urn:uuid:035eeb60-3ccd-41c3-95c9-e7f0386e52fc",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "035eeb60-3ccd-41c3-95c9-e7f0386e52fc",
        "practitioner" : {
          "reference" : "urn:uuid:1f69f396-7a49-479b-b152-07ba406bbf81"
        },
        "organization" : {
          "reference" : "urn:uuid:d210fd6b-9bd8-4e3d-826c-3b69ee936089"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:5fb0b52d-547e-4be6-9423-5b07e4f1f231",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "5fb0b52d-547e-4be6-9423-5b07e4f1f231",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:c843215d-d465-40df-865c-98fe93ff2094"
        },
        "collection" : {
          "collectedDateTime" : "2024-11-01T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:2779825f-c7cc-4916-ac47-fb78ee8d5091",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "2779825f-c7cc-4916-ac47-fb78ee8d5091",
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
              "code" : "62469-2"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:c843215d-d465-40df-865c-98fe93ff2094"
        },
        "requester" : {
          "reference" : "urn:uuid:035eeb60-3ccd-41c3-95c9-e7f0386e52fc"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:5fb0b52d-547e-4be6-9423-5b07e4f1f231"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:99266b5b-8355-4c50-a46d-1dbdbc681c70",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "99266b5b-8355-4c50-a46d-1dbdbc681c70",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:73164039-99ee-4932-8988-b0ea75d6b166"
            }
          }
        ],
        "identifier" : [
          {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:3401332d-6012-4434-9a90-6331adb23aab"
          }
        ],
        "basedOn" : [
          {
            "reference" : "urn:uuid:2779825f-c7cc-4916-ac47-fb78ee8d5091"
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
          "reference" : "urn:uuid:c843215d-d465-40df-865c-98fe93ff2094"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:15297076-ccf5-471e-a811-ef3fcf2dcc72"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:5fb0b52d-547e-4be6-9423-5b07e4f1f231"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:70087c84-4dfe-4159-be17-cf388e93656d"
          }
        ]
      }
    }
  ]
}

```
