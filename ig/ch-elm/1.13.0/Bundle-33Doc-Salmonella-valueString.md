# 33Doc - Salmonella valueString - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **33Doc - Salmonella valueString**

## Example Bundle: 33Doc - Salmonella valueString

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

Entry 2 - fullUrl = urn:uuid:09e4b73a-84a6-4abf-8d2d-6ca7f2f63242

Resource Patient:

> Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 3 - fullUrl = urn:uuid:5edb631b-ec1f-4844-997b-e79d7a18e2c4

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 4 - fullUrl = urn:uuid:722d4f13-0638-41c8-83cf-6d00d9ed2625

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Salmonella sp antigenic formula [Identifier] in Isolate by Agglutination**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-33Doc-Salmonella-valueString.md#urn-uuid-09e4b73a-84a6-4abf-8d2d-6ca7f2f63242)**effective**: 2024-10-04 14:20:00+0200**performer**:[Organization SanLab](Bundle-33Doc-Salmonella-valueString.md#urn-uuid-5edb631b-ec1f-4844-997b-e79d7a18e2c4)**value**: 9,12:-:1,5**interpretation**:Positive**specimen**:[Specimen: type =](Bundle-33Doc-Salmonella-valueString.md#urn-uuid-06491f43-1d4e-459c-a1eb-afd406fc4343)

-------

Entry 5 - fullUrl = urn:uuid:3bb6a86d-5d99-477d-b75a-2cde130ef697

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514**name**: Peter Hauser**telecom**:[+41 79 222 33 44](tel:+41792223344),[peter.hauser@hauserpraxis.ch](mailto:peter.hauser@hauserpraxis.ch)

-------

Entry 6 - fullUrl = urn:uuid:a5980988-f1e9-4682-8693-89f4be9b4c03

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A74966168**name**: Praxis Dr. Hauser

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Hauptstrasse 10 Solothurn 4500 |


-------

Entry 7 - fullUrl = urn:uuid:39dd3fa7-14e8-4331-be41-2e308d8df461

Resource PractitionerRole:

> **practitioner**:[Practitioner Peter Hauser](Bundle-33Doc-Salmonella-valueString.md#urn-uuid-3bb6a86d-5d99-477d-b75a-2cde130ef697)**organization**:[Organization Praxis Dr. Hauser](Bundle-33Doc-Salmonella-valueString.md#urn-uuid-a5980988-f1e9-4682-8693-89f4be9b4c03)

-------

Entry 8 - fullUrl = urn:uuid:06491f43-1d4e-459c-a1eb-afd406fc4343

Resource Specimen:

> **type**:Material declared by Observation.code or non-mandatory**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-33Doc-Salmonella-valueString.md#urn-uuid-09e4b73a-84a6-4abf-8d2d-6ca7f2f63242)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-10-01 14:20:00+0200 |


-------

Entry 9 - fullUrl = urn:uuid:bee31c1d-1ff8-4b97-ac63-18f050153ccf

Resource ServiceRequest:

> **identifier**: 26500923675**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Salmonella sp antigenic formula [Identifier] in Isolate by Agglutination)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-33Doc-Salmonella-valueString.md#urn-uuid-09e4b73a-84a6-4abf-8d2d-6ca7f2f63242)**requester**:[PractitionerRole](Bundle-33Doc-Salmonella-valueString.md#urn-uuid-39dd3fa7-14e8-4331-be41-2e308d8df461)**specimen**:[Specimen: type =](Bundle-33Doc-Salmonella-valueString.md#urn-uuid-06491f43-1d4e-459c-a1eb-afd406fc4343)

-------

Entry 10 - fullUrl = urn:uuid:4a9b87ba-f4d2-4421-bd6c-c808ade2186c

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-33Doc-Salmonella-valueString.md#urn-uuid-5edb631b-ec1f-4844-997b-e79d7a18e2c4) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:3401332d-6012-443f-9a90-6331adb23aab |

**Report Details**

* **Code**: [Salmonella sp antigenic formula [Identifier] in Isolate by Agglutination](Bundle-33Doc-Salmonella-valueString.md#urn-uuid-722d4f13-0638-41c8-83cf-6d00d9ed2625)
  * **Value**: 9,12:-:1,5
  * **Flags**: Final,Positive
  * **When For**: 2024-10-04 14:20:00+0200




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "33Doc-Salmonella-valueString",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:3401332d-6012-443f-9a90-6331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-10-06T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:f9549315-d1b2-488b-8553-2a6476ed581c",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "f9549315-d1b2-488b-8553-2a6476ed581c",
        "language" : "de-CH",
        "identifier" : {
          "system" : "urn:ietf:rfc:3986",
          "value" : "urn:uuid:3401332d-6012-443f-9a90-6331adb23aab"
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
          "reference" : "urn:uuid:09e4b73a-84a6-4abf-8d2d-6ca7f2f63242"
        },
        "date" : "2024-10-06T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:5edb631b-ec1f-4844-997b-e79d7a18e2c4"
          }
        ],
        "title" : "Laborbericht vom 6.10.2024",
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
                "reference" : "urn:uuid:722d4f13-0638-41c8-83cf-6d00d9ed2625"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:09e4b73a-84a6-4abf-8d2d-6ca7f2f63242",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "09e4b73a-84a6-4abf-8d2d-6ca7f2f63242",
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
      "fullUrl" : "urn:uuid:5edb631b-ec1f-4844-997b-e79d7a18e2c4",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "5edb631b-ec1f-4844-997b-e79d7a18e2c4",
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
      "fullUrl" : "urn:uuid:722d4f13-0638-41c8-83cf-6d00d9ed2625",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "722d4f13-0638-41c8-83cf-6d00d9ed2625",
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
              "code" : "56475-7"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:09e4b73a-84a6-4abf-8d2d-6ca7f2f63242"
        },
        "effectiveDateTime" : "2024-10-04T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:5edb631b-ec1f-4844-997b-e79d7a18e2c4"
          }
        ],
        "valueString" : "9,12:-:1,5",
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
          "reference" : "urn:uuid:06491f43-1d4e-459c-a1eb-afd406fc4343"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:3bb6a86d-5d99-477d-b75a-2cde130ef697",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "3bb6a86d-5d99-477d-b75a-2cde130ef697",
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
      "fullUrl" : "urn:uuid:a5980988-f1e9-4682-8693-89f4be9b4c03",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "a5980988-f1e9-4682-8693-89f4be9b4c03",
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
      "fullUrl" : "urn:uuid:39dd3fa7-14e8-4331-be41-2e308d8df461",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "39dd3fa7-14e8-4331-be41-2e308d8df461",
        "practitioner" : {
          "reference" : "urn:uuid:3bb6a86d-5d99-477d-b75a-2cde130ef697"
        },
        "organization" : {
          "reference" : "urn:uuid:a5980988-f1e9-4682-8693-89f4be9b4c03"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:06491f43-1d4e-459c-a1eb-afd406fc4343",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "06491f43-1d4e-459c-a1eb-afd406fc4343",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:09e4b73a-84a6-4abf-8d2d-6ca7f2f63242"
        },
        "collection" : {
          "collectedDateTime" : "2024-10-01T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:bee31c1d-1ff8-4b97-ac63-18f050153ccf",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "bee31c1d-1ff8-4b97-ac63-18f050153ccf",
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
              "code" : "56475-7"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:09e4b73a-84a6-4abf-8d2d-6ca7f2f63242"
        },
        "requester" : {
          "reference" : "urn:uuid:39dd3fa7-14e8-4331-be41-2e308d8df461"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:06491f43-1d4e-459c-a1eb-afd406fc4343"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:4a9b87ba-f4d2-4421-bd6c-c808ade2186c",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "4a9b87ba-f4d2-4421-bd6c-c808ade2186c",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:f9549315-d1b2-488b-8553-2a6476ed581c"
            }
          }
        ],
        "identifier" : [
          {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:3401332d-6012-443f-9a90-6331adb23aab"
          }
        ],
        "basedOn" : [
          {
            "reference" : "urn:uuid:bee31c1d-1ff8-4b97-ac63-18f050153ccf"
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
          "reference" : "urn:uuid:09e4b73a-84a6-4abf-8d2d-6ca7f2f63242"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:5edb631b-ec1f-4844-997b-e79d7a18e2c4"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:06491f43-1d4e-459c-a1eb-afd406fc4343"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:722d4f13-0638-41c8-83cf-6d00d9ed2625"
          }
        ]
      }
    }
  ]
}

```
