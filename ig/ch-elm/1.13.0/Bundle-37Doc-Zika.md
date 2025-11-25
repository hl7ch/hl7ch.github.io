# 37Doc - Zika - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **37Doc - Zika**

## Example Bundle: 37Doc - Zika

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

Entry 2 - fullUrl = urn:uuid:576659b7-b798-4317-93b6-9a4d33ad2b4a

Resource Patient:

> Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 3 - fullUrl = urn:uuid:333eb275-c955-47b3-b4bd-27f0f291d34c

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:610a3dc9-e39e-4376-af0a-5603e8fbf6cb

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Zika virus IgM Ab [Presence] in Serum by Immunofluorescence**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-37Doc-Zika.md#urn-uuid-576659b7-b798-4317-93b6-9a4d33ad2b4a)**effective**: 2024-10-19 14:20:00+0200**performer**:[Organization SanLab](Bundle-37Doc-Zika.md#urn-uuid-333eb275-c955-47b3-b4bd-27f0f291d34c)**dataAbsentReason**:Not Applicable**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-37Doc-Zika.md#urn-uuid-861576d4-23ed-41ed-bdaf-fed448f0874a)

-------

Entry 5 - fullUrl = urn:uuid:0930662b-6d8a-4583-94ac-c0f188963625

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514**name**: Peter Hauser**telecom**:[+41 79 222 33 44](tel:+41792223344),[peter.hauser@hauserpraxis.ch](mailto:peter.hauser@hauserpraxis.ch)

-------

Entry 6 - fullUrl = urn:uuid:bcfe8b82-dd7a-4bc4-a37a-f11051e4b424

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A74966168**name**: Praxis Dr. Hauser

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Hauptstrasse 10 Solothurn 4500 |


-------

Entry 7 - fullUrl = urn:uuid:49372d98-0856-434e-941d-c1453a140475

Resource PractitionerRole:

> **practitioner**:[Practitioner Peter Hauser](Bundle-37Doc-Zika.md#urn-uuid-0930662b-6d8a-4583-94ac-c0f188963625)**organization**:[Organization Praxis Dr. Hauser](Bundle-37Doc-Zika.md#urn-uuid-bcfe8b82-dd7a-4bc4-a37a-f11051e4b424)

-------

Entry 8 - fullUrl = urn:uuid:861576d4-23ed-41ed-bdaf-fed448f0874a

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-37Doc-Zika.md#urn-uuid-576659b7-b798-4317-93b6-9a4d33ad2b4a)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-10-15 14:20:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:5d7c806b-33ec-4587-957f-7e37c849d5a6

Resource ServiceRequest:

> **identifier**: 26500923675**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Zika virus IgM Ab [Presence] in Serum by Immunofluorescence)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-37Doc-Zika.md#urn-uuid-576659b7-b798-4317-93b6-9a4d33ad2b4a)**requester**:[PractitionerRole](Bundle-37Doc-Zika.md#urn-uuid-49372d98-0856-434e-941d-c1453a140475)**specimen**:[Specimen: type =](Bundle-37Doc-Zika.md#urn-uuid-861576d4-23ed-41ed-bdaf-fed448f0874a)

-------

Entry 10 - fullUrl = urn:uuid:92705b9b-fae4-4562-aa0c-e69651b143d4

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-37Doc-Zika.md#urn-uuid-333eb275-c955-47b3-b4bd-27f0f291d34c) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab |

**Report Details**

* **Code**: [Zika virus IgM Ab [Presence] in Serum by Immunofluorescence](Bundle-37Doc-Zika.md#urn-uuid-610a3dc9-e39e-4376-af0a-5603e8fbf6cb)
  * **Value**: Error:**Not Applicable**
  * **Flags**: Final,Positive
  * **When For**: 2024-10-19 14:20:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "37Doc-Zika",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-10-20T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:b7e072ff-459e-4179-ab5e-8ae53395719c",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "b7e072ff-459e-4179-ab5e-8ae53395719c",
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
          "reference" : "urn:uuid:576659b7-b798-4317-93b6-9a4d33ad2b4a"
        },
        "date" : "2024-10-20T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:333eb275-c955-47b3-b4bd-27f0f291d34c"
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
                "reference" : "urn:uuid:610a3dc9-e39e-4376-af0a-5603e8fbf6cb"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:576659b7-b798-4317-93b6-9a4d33ad2b4a",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "576659b7-b798-4317-93b6-9a4d33ad2b4a",
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
      "fullUrl" : "urn:uuid:333eb275-c955-47b3-b4bd-27f0f291d34c",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "333eb275-c955-47b3-b4bd-27f0f291d34c",
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
      "fullUrl" : "urn:uuid:610a3dc9-e39e-4376-af0a-5603e8fbf6cb",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "610a3dc9-e39e-4376-af0a-5603e8fbf6cb",
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
              "code" : "82731-1"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:576659b7-b798-4317-93b6-9a4d33ad2b4a"
        },
        "effectiveDateTime" : "2024-10-19T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:333eb275-c955-47b3-b4bd-27f0f291d34c"
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
          "reference" : "urn:uuid:861576d4-23ed-41ed-bdaf-fed448f0874a"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:0930662b-6d8a-4583-94ac-c0f188963625",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "0930662b-6d8a-4583-94ac-c0f188963625",
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
      "fullUrl" : "urn:uuid:bcfe8b82-dd7a-4bc4-a37a-f11051e4b424",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "bcfe8b82-dd7a-4bc4-a37a-f11051e4b424",
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
      "fullUrl" : "urn:uuid:49372d98-0856-434e-941d-c1453a140475",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "49372d98-0856-434e-941d-c1453a140475",
        "practitioner" : {
          "reference" : "urn:uuid:0930662b-6d8a-4583-94ac-c0f188963625"
        },
        "organization" : {
          "reference" : "urn:uuid:bcfe8b82-dd7a-4bc4-a37a-f11051e4b424"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:861576d4-23ed-41ed-bdaf-fed448f0874a",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "861576d4-23ed-41ed-bdaf-fed448f0874a",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:576659b7-b798-4317-93b6-9a4d33ad2b4a"
        },
        "collection" : {
          "collectedDateTime" : "2024-10-15T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:5d7c806b-33ec-4587-957f-7e37c849d5a6",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "5d7c806b-33ec-4587-957f-7e37c849d5a6",
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
              "code" : "82731-1"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:576659b7-b798-4317-93b6-9a4d33ad2b4a"
        },
        "requester" : {
          "reference" : "urn:uuid:49372d98-0856-434e-941d-c1453a140475"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:861576d4-23ed-41ed-bdaf-fed448f0874a"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:92705b9b-fae4-4562-aa0c-e69651b143d4",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "92705b9b-fae4-4562-aa0c-e69651b143d4",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:b7e072ff-459e-4179-ab5e-8ae53395719c"
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
            "reference" : "urn:uuid:5d7c806b-33ec-4587-957f-7e37c849d5a6"
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
          "reference" : "urn:uuid:576659b7-b798-4317-93b6-9a4d33ad2b4a"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:333eb275-c955-47b3-b4bd-27f0f291d34c"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:861576d4-23ed-41ed-bdaf-fed448f0874a"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:610a3dc9-e39e-4376-af0a-5603e8fbf6cb"
          }
        ]
      }
    }
  ]
}

```
