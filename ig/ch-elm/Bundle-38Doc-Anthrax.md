# 38Doc - Anthrax - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **38Doc - Anthrax**

## Example Bundle: 38Doc - Anthrax

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

Entry 2 - fullUrl = urn:uuid:e85cb81e-cfca-4c8b-94a4-53b29eb95f47

Resource Patient:

> Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 3 - fullUrl = urn:uuid:b3517139-6035-4c97-b5ae-fcf8f413dfbf

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:2e24c697-de13-4985-90b3-87da6676e793

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Bacillus anthracis Ag [Presence] in Specimen**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-38Doc-Anthrax.md#urn-uuid-e85cb81e-cfca-4c8b-94a4-53b29eb95f47)**effective**: 2024-10-19 14:20:00+0200**performer**:[Organization SanLab](Bundle-38Doc-Anthrax.md#urn-uuid-b3517139-6035-4c97-b5ae-fcf8f413dfbf)**dataAbsentReason**:Not Applicable**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-38Doc-Anthrax.md#urn-uuid-d58f010e-c88a-4e8e-bf9e-a7203969c05c)

-------

Entry 5 - fullUrl = urn:uuid:886657bc-5bb4-487a-8173-8bd3d413d27d

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514**name**: Peter Hauser**telecom**:[+41 79 222 33 44](tel:+41792223344),[peter.hauser@hauserpraxis.ch](mailto:peter.hauser@hauserpraxis.ch)

-------

Entry 6 - fullUrl = urn:uuid:d10e0052-3ce2-48dc-b52a-cbf2ce204bf3

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A74966168**name**: Praxis Dr. Hauser

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Hauptstrasse 10 Solothurn 4500 |


-------

Entry 7 - fullUrl = urn:uuid:4db2dec2-b004-47d7-9fbd-1eea5e6302e0

Resource PractitionerRole:

> **practitioner**:[Practitioner Peter Hauser](Bundle-38Doc-Anthrax.md#urn-uuid-886657bc-5bb4-487a-8173-8bd3d413d27d)**organization**:[Organization Praxis Dr. Hauser](Bundle-38Doc-Anthrax.md#urn-uuid-d10e0052-3ce2-48dc-b52a-cbf2ce204bf3)

-------

Entry 8 - fullUrl = urn:uuid:d58f010e-c88a-4e8e-bf9e-a7203969c05c

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-38Doc-Anthrax.md#urn-uuid-e85cb81e-cfca-4c8b-94a4-53b29eb95f47)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-10-15 14:20:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:fbd5d22e-fbbd-4a1a-aff0-1ed37e33d1e6

Resource ServiceRequest:

> **identifier**: 26500923675**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Bacillus anthracis Ag [Presence] in Specimen)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-38Doc-Anthrax.md#urn-uuid-e85cb81e-cfca-4c8b-94a4-53b29eb95f47)**requester**:[PractitionerRole](Bundle-38Doc-Anthrax.md#urn-uuid-4db2dec2-b004-47d7-9fbd-1eea5e6302e0)**specimen**:[Specimen: type =](Bundle-38Doc-Anthrax.md#urn-uuid-d58f010e-c88a-4e8e-bf9e-a7203969c05c)

-------

Entry 10 - fullUrl = urn:uuid:ef34ca57-e591-414d-81c5-a0313fc390a4

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-38Doc-Anthrax.md#urn-uuid-b3517139-6035-4c97-b5ae-fcf8f413dfbf) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.5.0/NamingSystem-uri.html)/urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab |

**Report Details**

* **Code**: [Bacillus anthracis Ag [Presence] in Specimen](Bundle-38Doc-Anthrax.md#urn-uuid-2e24c697-de13-4985-90b3-87da6676e793)
  * **Value**: Error:**Not Applicable**
  * **Flags**: Final,Positive
  * **When For**: 2024-10-19 14:20:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "38Doc-Anthrax",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-10-20T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:7aa42324-d8f3-4d07-86c3-409d3a92998d",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "7aa42324-d8f3-4d07-86c3-409d3a92998d",
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
          "reference" : "urn:uuid:e85cb81e-cfca-4c8b-94a4-53b29eb95f47"
        },
        "date" : "2024-10-20T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:b3517139-6035-4c97-b5ae-fcf8f413dfbf"
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
                "reference" : "urn:uuid:2e24c697-de13-4985-90b3-87da6676e793"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:e85cb81e-cfca-4c8b-94a4-53b29eb95f47",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "e85cb81e-cfca-4c8b-94a4-53b29eb95f47",
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
      "fullUrl" : "urn:uuid:b3517139-6035-4c97-b5ae-fcf8f413dfbf",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "b3517139-6035-4c97-b5ae-fcf8f413dfbf",
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
      "fullUrl" : "urn:uuid:2e24c697-de13-4985-90b3-87da6676e793",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "2e24c697-de13-4985-90b3-87da6676e793",
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
              "code" : "31726-3"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:e85cb81e-cfca-4c8b-94a4-53b29eb95f47"
        },
        "effectiveDateTime" : "2024-10-19T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:b3517139-6035-4c97-b5ae-fcf8f413dfbf"
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
          "reference" : "urn:uuid:d58f010e-c88a-4e8e-bf9e-a7203969c05c"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:886657bc-5bb4-487a-8173-8bd3d413d27d",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "886657bc-5bb4-487a-8173-8bd3d413d27d",
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
      "fullUrl" : "urn:uuid:d10e0052-3ce2-48dc-b52a-cbf2ce204bf3",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "d10e0052-3ce2-48dc-b52a-cbf2ce204bf3",
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
      "fullUrl" : "urn:uuid:4db2dec2-b004-47d7-9fbd-1eea5e6302e0",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "4db2dec2-b004-47d7-9fbd-1eea5e6302e0",
        "practitioner" : {
          "reference" : "urn:uuid:886657bc-5bb4-487a-8173-8bd3d413d27d"
        },
        "organization" : {
          "reference" : "urn:uuid:d10e0052-3ce2-48dc-b52a-cbf2ce204bf3"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:d58f010e-c88a-4e8e-bf9e-a7203969c05c",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "d58f010e-c88a-4e8e-bf9e-a7203969c05c",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:e85cb81e-cfca-4c8b-94a4-53b29eb95f47"
        },
        "collection" : {
          "collectedDateTime" : "2024-10-15T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:fbd5d22e-fbbd-4a1a-aff0-1ed37e33d1e6",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "fbd5d22e-fbbd-4a1a-aff0-1ed37e33d1e6",
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
              "code" : "31726-3"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:e85cb81e-cfca-4c8b-94a4-53b29eb95f47"
        },
        "requester" : {
          "reference" : "urn:uuid:4db2dec2-b004-47d7-9fbd-1eea5e6302e0"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:d58f010e-c88a-4e8e-bf9e-a7203969c05c"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:ef34ca57-e591-414d-81c5-a0313fc390a4",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "ef34ca57-e591-414d-81c5-a0313fc390a4",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:7aa42324-d8f3-4d07-86c3-409d3a92998d"
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
            "reference" : "urn:uuid:fbd5d22e-fbbd-4a1a-aff0-1ed37e33d1e6"
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
          "reference" : "urn:uuid:e85cb81e-cfca-4c8b-94a4-53b29eb95f47"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:b3517139-6035-4c97-b5ae-fcf8f413dfbf"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:d58f010e-c88a-4e8e-bf9e-a7203969c05c"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:2e24c697-de13-4985-90b3-87da6676e793"
          }
        ]
      }
    }
  ]
}

```
