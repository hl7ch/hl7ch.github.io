# 42Doc - Lassa - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **42Doc - Lassa**

## Example Bundle: 42Doc - Lassa

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

Entry 2 - fullUrl = urn:uuid:f5e65e8b-576e-4e1c-a30e-df4bcdde435b

Resource Patient:

> Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 3 - fullUrl = urn:uuid:5e451102-45ab-4caf-8648-d299dc3170f8

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:fc9d790e-92cf-4b15-9310-91eab232b01f

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Lassa virus RNA [Presence] in Specimen by NAA with probe detection**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-42Doc-Lassa.md#urn-uuid-f5e65e8b-576e-4e1c-a30e-df4bcdde435b)**effective**: 2024-10-19 14:20:00+0200**performer**:[Organization SanLab](Bundle-42Doc-Lassa.md#urn-uuid-5e451102-45ab-4caf-8648-d299dc3170f8)**dataAbsentReason**:Not Applicable**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-42Doc-Lassa.md#urn-uuid-b45ea866-50a8-4c51-8d89-7f3af0182bbe)

-------

Entry 5 - fullUrl = urn:uuid:5788f7f0-dd62-420c-819a-88ec4676dcf0

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514**name**: Peter Hauser**telecom**:[+41 79 222 33 44](tel:+41792223344),[peter.hauser@hauserpraxis.ch](mailto:peter.hauser@hauserpraxis.ch)

-------

Entry 6 - fullUrl = urn:uuid:1666691a-58b2-423b-bb0e-b522b429627d

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A74966168**name**: Praxis Dr. Hauser

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Hauptstrasse 10 Solothurn 4500 |


-------

Entry 7 - fullUrl = urn:uuid:42207668-4ecb-40e4-9079-0fec46e3f460

Resource PractitionerRole:

> **practitioner**:[Practitioner Peter Hauser](Bundle-42Doc-Lassa.md#urn-uuid-5788f7f0-dd62-420c-819a-88ec4676dcf0)**organization**:[Organization Praxis Dr. Hauser](Bundle-42Doc-Lassa.md#urn-uuid-1666691a-58b2-423b-bb0e-b522b429627d)

-------

Entry 8 - fullUrl = urn:uuid:b45ea866-50a8-4c51-8d89-7f3af0182bbe

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-42Doc-Lassa.md#urn-uuid-f5e65e8b-576e-4e1c-a30e-df4bcdde435b)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-10-15 14:20:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:dd1c6c90-f456-43cc-af13-18eefad33b84

Resource ServiceRequest:

> **identifier**: 26500923675**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Lassa virus RNA [Presence] in Specimen by NAA with probe detection)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-42Doc-Lassa.md#urn-uuid-f5e65e8b-576e-4e1c-a30e-df4bcdde435b)**requester**:[PractitionerRole](Bundle-42Doc-Lassa.md#urn-uuid-42207668-4ecb-40e4-9079-0fec46e3f460)**specimen**:[Specimen: type =](Bundle-42Doc-Lassa.md#urn-uuid-b45ea866-50a8-4c51-8d89-7f3af0182bbe)

-------

Entry 10 - fullUrl = urn:uuid:3aeef378-587e-4f95-adfb-16436d5526cd

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-42Doc-Lassa.md#urn-uuid-5e451102-45ab-4caf-8648-d299dc3170f8) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab |

**Report Details**

* **Code**: [Lassa virus RNA [Presence] in Specimen by NAA with probe detection](Bundle-42Doc-Lassa.md#urn-uuid-fc9d790e-92cf-4b15-9310-91eab232b01f)
  * **Value**: Error:**Not Applicable**
  * **Flags**: Final,Positive
  * **When For**: 2024-10-19 14:20:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "42Doc-Lassa",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-10-20T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:b8be4c42-9c26-4586-8dc2-53e6a9d2734a",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "b8be4c42-9c26-4586-8dc2-53e6a9d2734a",
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
          "reference" : "urn:uuid:f5e65e8b-576e-4e1c-a30e-df4bcdde435b"
        },
        "date" : "2024-10-20T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:5e451102-45ab-4caf-8648-d299dc3170f8"
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
                "reference" : "urn:uuid:fc9d790e-92cf-4b15-9310-91eab232b01f"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:f5e65e8b-576e-4e1c-a30e-df4bcdde435b",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "f5e65e8b-576e-4e1c-a30e-df4bcdde435b",
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
      "fullUrl" : "urn:uuid:5e451102-45ab-4caf-8648-d299dc3170f8",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "5e451102-45ab-4caf-8648-d299dc3170f8",
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
      "fullUrl" : "urn:uuid:fc9d790e-92cf-4b15-9310-91eab232b01f",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "fc9d790e-92cf-4b15-9310-91eab232b01f",
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
              "code" : "97646-4"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:f5e65e8b-576e-4e1c-a30e-df4bcdde435b"
        },
        "effectiveDateTime" : "2024-10-19T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:5e451102-45ab-4caf-8648-d299dc3170f8"
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
          "reference" : "urn:uuid:b45ea866-50a8-4c51-8d89-7f3af0182bbe"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:5788f7f0-dd62-420c-819a-88ec4676dcf0",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "5788f7f0-dd62-420c-819a-88ec4676dcf0",
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
      "fullUrl" : "urn:uuid:1666691a-58b2-423b-bb0e-b522b429627d",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "1666691a-58b2-423b-bb0e-b522b429627d",
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
      "fullUrl" : "urn:uuid:42207668-4ecb-40e4-9079-0fec46e3f460",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "42207668-4ecb-40e4-9079-0fec46e3f460",
        "practitioner" : {
          "reference" : "urn:uuid:5788f7f0-dd62-420c-819a-88ec4676dcf0"
        },
        "organization" : {
          "reference" : "urn:uuid:1666691a-58b2-423b-bb0e-b522b429627d"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:b45ea866-50a8-4c51-8d89-7f3af0182bbe",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "b45ea866-50a8-4c51-8d89-7f3af0182bbe",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:f5e65e8b-576e-4e1c-a30e-df4bcdde435b"
        },
        "collection" : {
          "collectedDateTime" : "2024-10-15T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:dd1c6c90-f456-43cc-af13-18eefad33b84",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "dd1c6c90-f456-43cc-af13-18eefad33b84",
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
              "code" : "97646-4"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:f5e65e8b-576e-4e1c-a30e-df4bcdde435b"
        },
        "requester" : {
          "reference" : "urn:uuid:42207668-4ecb-40e4-9079-0fec46e3f460"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:b45ea866-50a8-4c51-8d89-7f3af0182bbe"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:3aeef378-587e-4f95-adfb-16436d5526cd",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "3aeef378-587e-4f95-adfb-16436d5526cd",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:b8be4c42-9c26-4586-8dc2-53e6a9d2734a"
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
            "reference" : "urn:uuid:dd1c6c90-f456-43cc-af13-18eefad33b84"
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
          "reference" : "urn:uuid:f5e65e8b-576e-4e1c-a30e-df4bcdde435b"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:5e451102-45ab-4caf-8648-d299dc3170f8"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:b45ea866-50a8-4c51-8d89-7f3af0182bbe"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:fc9d790e-92cf-4b15-9310-91eab232b01f"
          }
        ]
      }
    }
  ]
}

```
