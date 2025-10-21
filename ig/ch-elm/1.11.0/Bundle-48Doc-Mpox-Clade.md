# 48Doc - Mpox Clade - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **48Doc - Mpox Clade**

## Example Bundle: 48Doc - Mpox Clade

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

Entry 2 - fullUrl = urn:uuid:92a1c608-7b87-4e3d-a387-1730f8809317

Resource Patient:

> Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 3 - fullUrl = urn:uuid:38bcf86c-d27b-41e8-a2c2-9abed00c0890

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:be59d166-6536-4a36-95d2-b5ca41a636ef

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Monkeypox virus clade [Type] in Specimen by Sequencing**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-48Doc-Mpox-Clade.md#urn-uuid-92a1c608-7b87-4e3d-a387-1730f8809317)**effective**: 2024-10-19 14:20:00+0200**performer**:[Organization SanLab](Bundle-48Doc-Mpox-Clade.md#urn-uuid-38bcf86c-d27b-41e8-a2c2-9abed00c0890)**value**:Group 1B (qualifier value)**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-48Doc-Mpox-Clade.md#urn-uuid-ed66f160-19cf-459b-96b5-3f96f4fded61)

-------

Entry 5 - fullUrl = urn:uuid:f29fc9f3-d470-4a67-b4c2-b20600402e5d

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514**name**: Peter Hauser**telecom**:[+41 79 222 33 44](tel:+41792223344),[peter.hauser@hauserpraxis.ch](mailto:peter.hauser@hauserpraxis.ch)

-------

Entry 6 - fullUrl = urn:uuid:d7b4c797-4974-463e-bc3a-65cb68cedf3b

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A74966168**name**: Praxis Dr. Hauser

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Hauptstrasse 10 Solothurn 4500 |


-------

Entry 7 - fullUrl = urn:uuid:35e497a6-bd35-4e67-82fa-60a8a235ebec

Resource PractitionerRole:

> **practitioner**:[Practitioner Peter Hauser](Bundle-48Doc-Mpox-Clade.md#urn-uuid-f29fc9f3-d470-4a67-b4c2-b20600402e5d)**organization**:[Organization Praxis Dr. Hauser](Bundle-48Doc-Mpox-Clade.md#urn-uuid-d7b4c797-4974-463e-bc3a-65cb68cedf3b)

-------

Entry 8 - fullUrl = urn:uuid:ed66f160-19cf-459b-96b5-3f96f4fded61

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-48Doc-Mpox-Clade.md#urn-uuid-92a1c608-7b87-4e3d-a387-1730f8809317)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-10-15 14:20:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:3733a80e-2095-4b27-bff9-e03a440d3a7b

Resource ServiceRequest:

> **identifier**: 26500923675**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Monkeypox virus clade [Type] in Specimen by Sequencing)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-48Doc-Mpox-Clade.md#urn-uuid-92a1c608-7b87-4e3d-a387-1730f8809317)**requester**:[PractitionerRole](Bundle-48Doc-Mpox-Clade.md#urn-uuid-35e497a6-bd35-4e67-82fa-60a8a235ebec)**specimen**:[Specimen: type =](Bundle-48Doc-Mpox-Clade.md#urn-uuid-ed66f160-19cf-459b-96b5-3f96f4fded61)

-------

Entry 10 - fullUrl = urn:uuid:50c767a9-31cc-44db-b0ab-eed33b2faf33

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-48Doc-Mpox-Clade.md#urn-uuid-38bcf86c-d27b-41e8-a2c2-9abed00c0890) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.5.0/NamingSystem-uri.html)/urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab |

**Report Details**

* **Code**: [Monkeypox virus clade [Type] in Specimen by Sequencing](Bundle-48Doc-Mpox-Clade.md#urn-uuid-be59d166-6536-4a36-95d2-b5ca41a636ef)
  * **Value**: Group 1B (qualifier value)
  * **Flags**: Final,Positive
  * **When For**: 2024-10-19 14:20:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "48Doc-Mpox-Clade",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-10-20T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:a1532634-c897-4fbc-ada2-f6ee90f07fc4",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "a1532634-c897-4fbc-ada2-f6ee90f07fc4",
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
          "reference" : "urn:uuid:92a1c608-7b87-4e3d-a387-1730f8809317"
        },
        "date" : "2024-10-20T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:38bcf86c-d27b-41e8-a2c2-9abed00c0890"
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
                "reference" : "urn:uuid:be59d166-6536-4a36-95d2-b5ca41a636ef"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:92a1c608-7b87-4e3d-a387-1730f8809317",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "92a1c608-7b87-4e3d-a387-1730f8809317",
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
      "fullUrl" : "urn:uuid:38bcf86c-d27b-41e8-a2c2-9abed00c0890",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "38bcf86c-d27b-41e8-a2c2-9abed00c0890",
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
      "fullUrl" : "urn:uuid:be59d166-6536-4a36-95d2-b5ca41a636ef",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "be59d166-6536-4a36-95d2-b5ca41a636ef",
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
              "code" : "101003-2"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:92a1c608-7b87-4e3d-a387-1730f8809317"
        },
        "effectiveDateTime" : "2024-10-19T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:38bcf86c-d27b-41e8-a2c2-9abed00c0890"
          }
        ],
        "valueCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "258368005",
              "display" : "Group 1B (qualifier value)"
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
          "reference" : "urn:uuid:ed66f160-19cf-459b-96b5-3f96f4fded61"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:f29fc9f3-d470-4a67-b4c2-b20600402e5d",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "f29fc9f3-d470-4a67-b4c2-b20600402e5d",
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
      "fullUrl" : "urn:uuid:d7b4c797-4974-463e-bc3a-65cb68cedf3b",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "d7b4c797-4974-463e-bc3a-65cb68cedf3b",
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
      "fullUrl" : "urn:uuid:35e497a6-bd35-4e67-82fa-60a8a235ebec",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "35e497a6-bd35-4e67-82fa-60a8a235ebec",
        "practitioner" : {
          "reference" : "urn:uuid:f29fc9f3-d470-4a67-b4c2-b20600402e5d"
        },
        "organization" : {
          "reference" : "urn:uuid:d7b4c797-4974-463e-bc3a-65cb68cedf3b"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:ed66f160-19cf-459b-96b5-3f96f4fded61",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "ed66f160-19cf-459b-96b5-3f96f4fded61",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:92a1c608-7b87-4e3d-a387-1730f8809317"
        },
        "collection" : {
          "collectedDateTime" : "2024-10-15T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:3733a80e-2095-4b27-bff9-e03a440d3a7b",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "3733a80e-2095-4b27-bff9-e03a440d3a7b",
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
              "code" : "101003-2"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:92a1c608-7b87-4e3d-a387-1730f8809317"
        },
        "requester" : {
          "reference" : "urn:uuid:35e497a6-bd35-4e67-82fa-60a8a235ebec"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:ed66f160-19cf-459b-96b5-3f96f4fded61"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:50c767a9-31cc-44db-b0ab-eed33b2faf33",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "50c767a9-31cc-44db-b0ab-eed33b2faf33",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:a1532634-c897-4fbc-ada2-f6ee90f07fc4"
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
            "reference" : "urn:uuid:3733a80e-2095-4b27-bff9-e03a440d3a7b"
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
          "reference" : "urn:uuid:92a1c608-7b87-4e3d-a387-1730f8809317"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:38bcf86c-d27b-41e8-a2c2-9abed00c0890"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:ed66f160-19cf-459b-96b5-3f96f4fded61"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:be59d166-6536-4a36-95d2-b5ca41a636ef"
          }
        ]
      }
    }
  ]
}

```
