# 12Doc - Mpox - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **12Doc - Mpox**

## Example Bundle: 12Doc - Mpox

**Document Details**

**Document Subject**

Hildetter Frida Female, DoB: 1985-10-17 ( urn:oid:2.16.756.5.32#7561733446723)

-------

-------

**Document Content**

## Analyseergebnisse der mikrobiologischen Untersuchung

-------

## Additional Resources Included in Document

-------

Entry 2 - fullUrl = urn:uuid:32b29a6f-ab97-4c45-8723-ba4cb483dc99

Resource Patient:

> Hildetter Frida Female, DoB: 1985-10-17 ( urn:oid:2.16.756.5.32#7561733446723)
-------

-------

Entry 3 - fullUrl = urn:uuid:303b7804-6c75-45d8-a39e-cdf346dcc8f0

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:1cd304d3-0b82-487e-9f6e-a8a0f559cf96

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Monkeypox virus DNA [Presence] in Specimen by NAA with probe detection**subject**:[Hildetter Frida Female, DoB: 1985-10-17 ( urn:oid:2.16.756.5.32#7561733446723)](Bundle-12Doc-Mpox.md#urn-uuid-32b29a6f-ab97-4c45-8723-ba4cb483dc99)**effective**: 2024-04-28 07:35:00+0200**performer**:[Organization SanLab](Bundle-12Doc-Mpox.md#urn-uuid-303b7804-6c75-45d8-a39e-cdf346dcc8f0)**value**:Positive (qualifier value)**interpretation**:Positive**specimen**:[Specimen: type = Specimen from skin (specimen)](Bundle-12Doc-Mpox.md#urn-uuid-d227ca5e-e23c-4050-8665-a2bd6f76800a)

-------

Entry 5 - fullUrl = urn:uuid:2c53a0df-005a-4893-b871-f3ee909dd399

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000234438**name**: Monika Giacometti**telecom**:[+41 79 111 44 55](tel:+41791114455),[m.giacometti@ks-abc.ch](mailto:m.giacometti@ks-abc.ch)

-------

Entry 6 - fullUrl = urn:uuid:4195fa92-9cdf-4e6e-9ba1-34aae1682ffd

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A99684215**name**: Kantonsspital ABC

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Aortastrasse 22 Bern 3000 |


-------

Entry 7 - fullUrl = urn:uuid:d4ea3b36-8343-4899-af79-c5426533d8db

Resource PractitionerRole:

> **practitioner**:[Practitioner Monika Giacometti](Bundle-12Doc-Mpox.md#urn-uuid-2c53a0df-005a-4893-b871-f3ee909dd399)**organization**:[Organization Kantonsspital ABC](Bundle-12Doc-Mpox.md#urn-uuid-4195fa92-9cdf-4e6e-9ba1-34aae1682ffd)

-------

Entry 8 - fullUrl = urn:uuid:d227ca5e-e23c-4050-8665-a2bd6f76800a

Resource Specimen:

> **type**:Specimen from skin (specimen)**subject**:[Hildetter Frida Female, DoB: 1985-10-17 ( urn:oid:2.16.756.5.32#7561733446723)](Bundle-12Doc-Mpox.md#urn-uuid-32b29a6f-ab97-4c45-8723-ba4cb483dc99)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-04-26 |


-------

Entry 9 - fullUrl = urn:uuid:4fbc55a0-588e-4f9f-8170-d5f61160e5aa

Resource ServiceRequest:

> **identifier**: 26955847714**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Monkeypox virus DNA [Presence] in Specimen by NAA with probe detection)**subject**:[Hildetter Frida Female, DoB: 1985-10-17 ( urn:oid:2.16.756.5.32#7561733446723)](Bundle-12Doc-Mpox.md#urn-uuid-32b29a6f-ab97-4c45-8723-ba4cb483dc99)**requester**:[PractitionerRole](Bundle-12Doc-Mpox.md#urn-uuid-d4ea3b36-8343-4899-af79-c5426533d8db)**specimen**:[Specimen: type = Specimen from skin (specimen)](Bundle-12Doc-Mpox.md#urn-uuid-d227ca5e-e23c-4050-8665-a2bd6f76800a)

-------

Entry 10 - fullUrl = urn:uuid:ec48f270-f518-45c3-8e6d-4dde446a8821

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Hildetter Frida Female, DoB: 1985-10-17 ( urn:oid:2.16.756.5.32#7561733446723) |
| Performer | [Organization SanLab](Bundle-12Doc-Mpox.md#urn-uuid-303b7804-6c75-45d8-a39e-cdf346dcc8f0) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.5.0/NamingSystem-uri.html)/urn:uuid:1901332d-6041-443f-9690-9291adb2cb3b |

**Report Details**

* **Code**: [Monkeypox virus DNA [Presence] in Specimen by NAA with probe detection](Bundle-12Doc-Mpox.md#urn-uuid-1cd304d3-0b82-487e-9f6e-a8a0f559cf96)
  * **Value**: Positive (qualifier value)
  * **Flags**: Final,Positive
  * **When For**: 2024-04-28 07:35:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "12Doc-Mpox",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:1901332d-6041-443f-9690-9291adb2cb3b"
  },
  "type" : "document",
  "timestamp" : "2024-04-28T07:35:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:6717fa1a-b956-4bd6-b8c0-e87ef1a2feae",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "6717fa1a-b956-4bd6-b8c0-e87ef1a2feae",
        "language" : "de-CH",
        "identifier" : {
          "system" : "urn:ietf:rfc:3986",
          "value" : "urn:uuid:1901332d-6041-443f-9690-9291adb2cb3b"
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
          "reference" : "urn:uuid:32b29a6f-ab97-4c45-8723-ba4cb483dc99"
        },
        "date" : "2024-04-28T07:35:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:303b7804-6c75-45d8-a39e-cdf346dcc8f0"
          }
        ],
        "title" : "Laborbericht vom 28.04.2024",
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
                "reference" : "urn:uuid:1cd304d3-0b82-487e-9f6e-a8a0f559cf96"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:32b29a6f-ab97-4c45-8723-ba4cb483dc99",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "32b29a6f-ab97-4c45-8723-ba4cb483dc99",
        "identifier" : [
          {
            "system" : "urn:oid:2.16.756.5.32",
            "value" : "7561733446723"
          }
        ],
        "name" : [
          {
            "family" : "Frida",
            "given" : ["Hildetter"]
          }
        ],
        "gender" : "female",
        "birthDate" : "1985-10-17",
        "address" : [
          {
            "use" : "home",
            "line" : ["Bahnhofstrasse 27"],
            "city" : "Derendingen",
            "state" : "SO",
            "postalCode" : "4552",
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
      "fullUrl" : "urn:uuid:303b7804-6c75-45d8-a39e-cdf346dcc8f0",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "303b7804-6c75-45d8-a39e-cdf346dcc8f0",
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
      "fullUrl" : "urn:uuid:1cd304d3-0b82-487e-9f6e-a8a0f559cf96",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "1cd304d3-0b82-487e-9f6e-a8a0f559cf96",
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
              "code" : "100383-9"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:32b29a6f-ab97-4c45-8723-ba4cb483dc99"
        },
        "effectiveDateTime" : "2024-04-28T07:35:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:303b7804-6c75-45d8-a39e-cdf346dcc8f0"
          }
        ],
        "valueCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "10828004",
              "display" : "Positive (qualifier value)"
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
          "reference" : "urn:uuid:d227ca5e-e23c-4050-8665-a2bd6f76800a"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:2c53a0df-005a-4893-b871-f3ee909dd399",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "2c53a0df-005a-4893-b871-f3ee909dd399",
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
      "fullUrl" : "urn:uuid:4195fa92-9cdf-4e6e-9ba1-34aae1682ffd",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "4195fa92-9cdf-4e6e-9ba1-34aae1682ffd",
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
      "fullUrl" : "urn:uuid:d4ea3b36-8343-4899-af79-c5426533d8db",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "d4ea3b36-8343-4899-af79-c5426533d8db",
        "practitioner" : {
          "reference" : "urn:uuid:2c53a0df-005a-4893-b871-f3ee909dd399"
        },
        "organization" : {
          "reference" : "urn:uuid:4195fa92-9cdf-4e6e-9ba1-34aae1682ffd"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:d227ca5e-e23c-4050-8665-a2bd6f76800a",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "d227ca5e-e23c-4050-8665-a2bd6f76800a",
        "type" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "608969007"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:32b29a6f-ab97-4c45-8723-ba4cb483dc99"
        },
        "collection" : {
          "collectedDateTime" : "2024-04-26"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:4fbc55a0-588e-4f9f-8170-d5f61160e5aa",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "4fbc55a0-588e-4f9f-8170-d5f61160e5aa",
        "identifier" : [
          {
            "value" : "26955847714"
          }
        ],
        "status" : "completed",
        "intent" : "order",
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "100383-9"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:32b29a6f-ab97-4c45-8723-ba4cb483dc99"
        },
        "requester" : {
          "reference" : "urn:uuid:d4ea3b36-8343-4899-af79-c5426533d8db"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:d227ca5e-e23c-4050-8665-a2bd6f76800a"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:ec48f270-f518-45c3-8e6d-4dde446a8821",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "ec48f270-f518-45c3-8e6d-4dde446a8821",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:6717fa1a-b956-4bd6-b8c0-e87ef1a2feae"
            }
          }
        ],
        "identifier" : [
          {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:1901332d-6041-443f-9690-9291adb2cb3b"
          }
        ],
        "basedOn" : [
          {
            "reference" : "urn:uuid:4fbc55a0-588e-4f9f-8170-d5f61160e5aa"
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
          "reference" : "urn:uuid:32b29a6f-ab97-4c45-8723-ba4cb483dc99"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:303b7804-6c75-45d8-a39e-cdf346dcc8f0"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:d227ca5e-e23c-4050-8665-a2bd6f76800a"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:1cd304d3-0b82-487e-9f6e-a8a0f559cf96"
          }
        ]
      }
    }
  ]
}

```
