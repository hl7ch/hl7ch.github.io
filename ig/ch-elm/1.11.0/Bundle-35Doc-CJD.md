# 35Doc CJD - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **35Doc CJD**

## Example Bundle: 35Doc CJD

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

Entry 2 - fullUrl = urn:uuid:6f250b07-03d1-4330-9fb4-cfc89a048e7e

Resource Patient:

> Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 3 - fullUrl = urn:uuid:cfd592ee-0a10-4972-ba0c-e33baec61a34

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:f04cdabf-5038-4293-a620-f939d4193d88

Resource Observation:

> **status**: Final**category**:Laboratory**code**:14-3-3 Ag [Presence] in Cerebral spinal fluid**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-35Doc-CJD.md#urn-uuid-6f250b07-03d1-4330-9fb4-cfc89a048e7e)**effective**: 2024-10-19 14:20:00+0200**performer**:[Organization SanLab](Bundle-35Doc-CJD.md#urn-uuid-cfd592ee-0a10-4972-ba0c-e33baec61a34)**dataAbsentReason**:Not Applicable**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-35Doc-CJD.md#urn-uuid-c2070509-6485-43cd-ab8f-133497b6eacb)

-------

Entry 5 - fullUrl = urn:uuid:bfc8d53e-3b74-4046-ac17-28cfbd5c9d9d

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514**name**: Peter Hauser**telecom**:[+41 79 222 33 44](tel:+41792223344),[peter.hauser@hauserpraxis.ch](mailto:peter.hauser@hauserpraxis.ch)

-------

Entry 6 - fullUrl = urn:uuid:20e26fb8-1a9e-4dd1-9516-6fcffa65e9ea

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A74966168**name**: Praxis Dr. Hauser

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Hauptstrasse 10 Solothurn 4500 |


-------

Entry 7 - fullUrl = urn:uuid:3d5fa9bc-584f-4093-b2bc-53bf6d09f456

Resource PractitionerRole:

> **practitioner**:[Practitioner Peter Hauser](Bundle-35Doc-CJD.md#urn-uuid-bfc8d53e-3b74-4046-ac17-28cfbd5c9d9d)**organization**:[Organization Praxis Dr. Hauser](Bundle-35Doc-CJD.md#urn-uuid-20e26fb8-1a9e-4dd1-9516-6fcffa65e9ea)

-------

Entry 8 - fullUrl = urn:uuid:c2070509-6485-43cd-ab8f-133497b6eacb

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-35Doc-CJD.md#urn-uuid-6f250b07-03d1-4330-9fb4-cfc89a048e7e)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-10-15 14:20:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:c86a1bb1-8b08-422d-8cdb-e8fa8169f74c

Resource ServiceRequest:

> **identifier**: 26500923675**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: 14-3-3 Ag [Presence] in Cerebral spinal fluid)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-35Doc-CJD.md#urn-uuid-6f250b07-03d1-4330-9fb4-cfc89a048e7e)**requester**:[PractitionerRole](Bundle-35Doc-CJD.md#urn-uuid-3d5fa9bc-584f-4093-b2bc-53bf6d09f456)**specimen**:[Specimen: type =](Bundle-35Doc-CJD.md#urn-uuid-c2070509-6485-43cd-ab8f-133497b6eacb)

-------

Entry 10 - fullUrl = urn:uuid:9d2b7ebb-dea3-4c32-81ab-2688ce8f83ad

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-35Doc-CJD.md#urn-uuid-cfd592ee-0a10-4972-ba0c-e33baec61a34) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.5.0/NamingSystem-uri.html)/urn:uuid:34013a2d-6012-443f-9a90-6331adb23aab |

**Report Details**

* **Code**: [14-3-3 Ag [Presence] in Cerebral spinal fluid](Bundle-35Doc-CJD.md#urn-uuid-f04cdabf-5038-4293-a620-f939d4193d88)
  * **Value**: Error:**Not Applicable**
  * **Flags**: Final,Positive
  * **When For**: 2024-10-19 14:20:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "35Doc-CJD",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:34013a2d-6012-443f-9a90-6331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-10-20T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:95661854-e1e4-4ca3-97b7-9e6c116cf014",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "95661854-e1e4-4ca3-97b7-9e6c116cf014",
        "language" : "de-CH",
        "identifier" : {
          "system" : "urn:ietf:rfc:3986",
          "value" : "urn:uuid:34013a2d-6012-443f-9a90-6331adb23aab"
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
          "reference" : "urn:uuid:6f250b07-03d1-4330-9fb4-cfc89a048e7e"
        },
        "date" : "2024-10-20T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:cfd592ee-0a10-4972-ba0c-e33baec61a34"
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
                "reference" : "urn:uuid:f04cdabf-5038-4293-a620-f939d4193d88"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:6f250b07-03d1-4330-9fb4-cfc89a048e7e",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "6f250b07-03d1-4330-9fb4-cfc89a048e7e",
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
      "fullUrl" : "urn:uuid:cfd592ee-0a10-4972-ba0c-e33baec61a34",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "cfd592ee-0a10-4972-ba0c-e33baec61a34",
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
      "fullUrl" : "urn:uuid:f04cdabf-5038-4293-a620-f939d4193d88",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "f04cdabf-5038-4293-a620-f939d4193d88",
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
              "code" : "31989-7"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:6f250b07-03d1-4330-9fb4-cfc89a048e7e"
        },
        "effectiveDateTime" : "2024-10-19T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:cfd592ee-0a10-4972-ba0c-e33baec61a34"
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
          "reference" : "urn:uuid:c2070509-6485-43cd-ab8f-133497b6eacb"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:bfc8d53e-3b74-4046-ac17-28cfbd5c9d9d",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "bfc8d53e-3b74-4046-ac17-28cfbd5c9d9d",
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
      "fullUrl" : "urn:uuid:20e26fb8-1a9e-4dd1-9516-6fcffa65e9ea",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "20e26fb8-1a9e-4dd1-9516-6fcffa65e9ea",
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
      "fullUrl" : "urn:uuid:3d5fa9bc-584f-4093-b2bc-53bf6d09f456",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "3d5fa9bc-584f-4093-b2bc-53bf6d09f456",
        "practitioner" : {
          "reference" : "urn:uuid:bfc8d53e-3b74-4046-ac17-28cfbd5c9d9d"
        },
        "organization" : {
          "reference" : "urn:uuid:20e26fb8-1a9e-4dd1-9516-6fcffa65e9ea"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:c2070509-6485-43cd-ab8f-133497b6eacb",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "c2070509-6485-43cd-ab8f-133497b6eacb",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:6f250b07-03d1-4330-9fb4-cfc89a048e7e"
        },
        "collection" : {
          "collectedDateTime" : "2024-10-15T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:c86a1bb1-8b08-422d-8cdb-e8fa8169f74c",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "c86a1bb1-8b08-422d-8cdb-e8fa8169f74c",
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
              "code" : "31989-7"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:6f250b07-03d1-4330-9fb4-cfc89a048e7e"
        },
        "requester" : {
          "reference" : "urn:uuid:3d5fa9bc-584f-4093-b2bc-53bf6d09f456"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:c2070509-6485-43cd-ab8f-133497b6eacb"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:9d2b7ebb-dea3-4c32-81ab-2688ce8f83ad",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "9d2b7ebb-dea3-4c32-81ab-2688ce8f83ad",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:95661854-e1e4-4ca3-97b7-9e6c116cf014"
            }
          }
        ],
        "identifier" : [
          {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:34013a2d-6012-443f-9a90-6331adb23aab"
          }
        ],
        "basedOn" : [
          {
            "reference" : "urn:uuid:c86a1bb1-8b08-422d-8cdb-e8fa8169f74c"
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
          "reference" : "urn:uuid:6f250b07-03d1-4330-9fb4-cfc89a048e7e"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:cfd592ee-0a10-4972-ba0c-e33baec61a34"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:c2070509-6485-43cd-ab8f-133497b6eacb"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:f04cdabf-5038-4293-a620-f939d4193d88"
          }
        ]
      }
    }
  ]
}

```
