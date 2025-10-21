# Carbapenemase-producing Enterobacteriaceae - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Carbapenemase-producing Enterobacteriaceae**

## Example Bundle: Carbapenemase-producing Enterobacteriaceae

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

Entry 2 - fullUrl = urn:uuid:29b85736-5d40-4e00-ad73-af65dc9b9e14

Resource Patient:

> Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 3 - fullUrl = urn:uuid:773e24c7-e09b-4f40-b514-4c55241c58d9

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:f592a404-0eea-40da-a828-5b2d2bf17e56

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Carbapenemase-producing Enterobacteriaceae (organism)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-3Doc-CPE.md#urn-uuid-29b85736-5d40-4e00-ad73-af65dc9b9e14)**effective**: 2025-01-19 14:20:00+0200**performer**:[Organization SanLab](Bundle-3Doc-CPE.md#urn-uuid-773e24c7-e09b-4f40-b514-4c55241c58d9)**dataAbsentReason**:Not Applicable**interpretation**:Positive**specimen**:[Specimen](Bundle-3Doc-CPE.md#urn-uuid-c0dc0c4b-2b98-4b18-b4eb-e957ad44fcc7)

-------

Entry 5 - fullUrl = urn:uuid:28ab23bc-3c08-4cca-821e-e77d95b336bc

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514**name**: Peter Hauser**telecom**:[+41 79 222 33 44](tel:+41792223344),[peter.hauser@hauserpraxis.ch](mailto:peter.hauser@hauserpraxis.ch)

-------

Entry 6 - fullUrl = urn:uuid:d4f5059d-7b95-4f7e-8dd7-6193eff6f42b

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A74966168**name**: Praxis Dr. Hauser

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Hauptstrasse 10 Solothurn 4500 |


-------

Entry 7 - fullUrl = urn:uuid:af32d56a-15f7-4d0b-bee8-bca91d54d266

Resource PractitionerRole:

> **practitioner**:[Practitioner Peter Hauser](Bundle-3Doc-CPE.md#urn-uuid-28ab23bc-3c08-4cca-821e-e77d95b336bc)**organization**:[Organization Praxis Dr. Hauser](Bundle-3Doc-CPE.md#urn-uuid-d4f5059d-7b95-4f7e-8dd7-6193eff6f42b)

-------

Entry 8 - fullUrl = urn:uuid:c0dc0c4b-2b98-4b18-b4eb-e957ad44fcc7

Resource Specimen:

> **subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-3Doc-CPE.md#urn-uuid-29b85736-5d40-4e00-ad73-af65dc9b9e14)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2025-01-15 14:20:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:6655a27e-7a73-4563-966b-f946dc3d563f

Resource ServiceRequest:

> **identifier**: 26500923675**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Carbapenemase-producing Enterobacteriaceae (organism))**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-3Doc-CPE.md#urn-uuid-29b85736-5d40-4e00-ad73-af65dc9b9e14)**requester**:[PractitionerRole](Bundle-3Doc-CPE.md#urn-uuid-af32d56a-15f7-4d0b-bee8-bca91d54d266)**specimen**:[Specimen](Bundle-3Doc-CPE.md#urn-uuid-c0dc0c4b-2b98-4b18-b4eb-e957ad44fcc7)

-------

Entry 10 - fullUrl = urn:uuid:c5d41d78-7bcf-4b0d-ad33-cb88996ad323

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-3Doc-CPE.md#urn-uuid-773e24c7-e09b-4f40-b514-4c55241c58d9) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.5.0/NamingSystem-uri.html)/urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab |

**Report Details**

* **Code**: [Carbapenemase-producing Enterobacteriaceae (organism)](Bundle-3Doc-CPE.md#urn-uuid-f592a404-0eea-40da-a828-5b2d2bf17e56)
  * **Value**: Error:**Not Applicable**
  * **Flags**: Final,Positive
  * **When For**: 2025-01-19 14:20:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "3Doc-CPE",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2025-01-20T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:1ff60afc-a29a-46c8-9c2c-445249b698f0",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "1ff60afc-a29a-46c8-9c2c-445249b698f0",
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
          "reference" : "urn:uuid:29b85736-5d40-4e00-ad73-af65dc9b9e14"
        },
        "date" : "2025-01-20T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:773e24c7-e09b-4f40-b514-4c55241c58d9"
          }
        ],
        "title" : "Laborbericht vom 20.01.2025",
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
                "reference" : "urn:uuid:f592a404-0eea-40da-a828-5b2d2bf17e56"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:29b85736-5d40-4e00-ad73-af65dc9b9e14",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "29b85736-5d40-4e00-ad73-af65dc9b9e14",
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
      "fullUrl" : "urn:uuid:773e24c7-e09b-4f40-b514-4c55241c58d9",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "773e24c7-e09b-4f40-b514-4c55241c58d9",
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
      "fullUrl" : "urn:uuid:f592a404-0eea-40da-a828-5b2d2bf17e56",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "f592a404-0eea-40da-a828-5b2d2bf17e56",
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
              "system" : "http://snomed.info/sct",
              "code" : "734351004"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:29b85736-5d40-4e00-ad73-af65dc9b9e14"
        },
        "effectiveDateTime" : "2025-01-19T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:773e24c7-e09b-4f40-b514-4c55241c58d9"
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
          "reference" : "urn:uuid:c0dc0c4b-2b98-4b18-b4eb-e957ad44fcc7"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:28ab23bc-3c08-4cca-821e-e77d95b336bc",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "28ab23bc-3c08-4cca-821e-e77d95b336bc",
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
      "fullUrl" : "urn:uuid:d4f5059d-7b95-4f7e-8dd7-6193eff6f42b",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "d4f5059d-7b95-4f7e-8dd7-6193eff6f42b",
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
      "fullUrl" : "urn:uuid:af32d56a-15f7-4d0b-bee8-bca91d54d266",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "af32d56a-15f7-4d0b-bee8-bca91d54d266",
        "practitioner" : {
          "reference" : "urn:uuid:28ab23bc-3c08-4cca-821e-e77d95b336bc"
        },
        "organization" : {
          "reference" : "urn:uuid:d4f5059d-7b95-4f7e-8dd7-6193eff6f42b"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:c0dc0c4b-2b98-4b18-b4eb-e957ad44fcc7",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "c0dc0c4b-2b98-4b18-b4eb-e957ad44fcc7",
        "subject" : {
          "reference" : "urn:uuid:29b85736-5d40-4e00-ad73-af65dc9b9e14"
        },
        "collection" : {
          "collectedDateTime" : "2025-01-15T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:6655a27e-7a73-4563-966b-f946dc3d563f",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "6655a27e-7a73-4563-966b-f946dc3d563f",
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
              "system" : "http://snomed.info/sct",
              "code" : "734351004"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:29b85736-5d40-4e00-ad73-af65dc9b9e14"
        },
        "requester" : {
          "reference" : "urn:uuid:af32d56a-15f7-4d0b-bee8-bca91d54d266"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:c0dc0c4b-2b98-4b18-b4eb-e957ad44fcc7"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:c5d41d78-7bcf-4b0d-ad33-cb88996ad323",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "c5d41d78-7bcf-4b0d-ad33-cb88996ad323",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:1ff60afc-a29a-46c8-9c2c-445249b698f0"
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
            "reference" : "urn:uuid:6655a27e-7a73-4563-966b-f946dc3d563f"
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
          "reference" : "urn:uuid:29b85736-5d40-4e00-ad73-af65dc9b9e14"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:773e24c7-e09b-4f40-b514-4c55241c58d9"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:c0dc0c4b-2b98-4b18-b4eb-e957ad44fcc7"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:f592a404-0eea-40da-a828-5b2d2bf17e56"
          }
        ]
      }
    }
  ]
}

```
