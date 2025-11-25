# 2Doc - Chlamydia Trachomatis - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **2Doc - Chlamydia Trachomatis**

## Example Bundle: 2Doc - Chlamydia Trachomatis

**Document Details**

**Document Subject**

H F Female, DoB: 1985-10-17 ( urn:oid:2.16.756.5.32#7561234567897)

-------

-------

**Document Content**

## Analyseergebnisse der mikrobiologischen Untersuchung

-------

## Additional Resources Included in Document

-------

Entry 2 - fullUrl = urn:uuid:2f69f609-e3bf-4863-bc42-3cbf0568cab1

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | H F Female, DoB: 1985-10-17 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Bundle-2Doc-ChlamydiaTrachomatis-Vct.md#urn-uuid-8b9163cc-4894-462c-8060-b9b01f705a8b) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:1301332d-6012-443f-9690-929132b2e155 |

**Report Details**

* **Code**: [Chlamydia trachomatis [Presence] in Specimen by Organism specific culture](Bundle-2Doc-ChlamydiaTrachomatis.md#urn-uuid-632a79ff-42d7-49e0-97ca-69a3a2015760)
  * **Value**: Positive
  * **Flags**: Final,Positive
  * **When For**: 2023-08-04 08:25:00+0200


-------

Entry 3 - fullUrl = urn:uuid:50d5deca-64e9-4a30-8cec-40ac1f015655

Resource Patient:

> H F Female, DoB: 1985-10-17 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 4 - fullUrl = urn:uuid:632a79ff-42d7-49e0-97ca-69a3a2015760

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Chlamydia trachomatis [Presence] in Specimen by Organism specific culture**subject**:[H F Female, DoB: 1985-10-17 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-2Doc-ChlamydiaTrachomatis.md#urn-uuid-50d5deca-64e9-4a30-8cec-40ac1f015655)**effective**: 2023-08-04 08:25:00+0200**performer**:[Organization SanLab](Bundle-2Doc-ChlamydiaTrachomatis-Vct.md#urn-uuid-8b9163cc-4894-462c-8060-b9b01f705a8b)**value**:Positive**interpretation**:Positive**specimen**:[Specimen: type = Specimen from urethra (specimen)](Bundle-2Doc-ChlamydiaTrachomatis.md#urn-uuid-b2b24ded-fd9f-40bc-a822-1fb07e14c2ef)

-------

Entry 5 - fullUrl = urn:uuid:b2b24ded-fd9f-40bc-a822-1fb07e14c2ef

Resource Specimen:

> **type**:Specimen from urethra (specimen)**subject**:[H F Female, DoB: 1985-10-17 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-2Doc-ChlamydiaTrachomatis.md#urn-uuid-50d5deca-64e9-4a30-8cec-40ac1f015655)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2023-07-29 |


-------

Entry 6 - fullUrl = urn:uuid:9d409938-5af8-4fae-88d1-541f35111c1f

Resource ServiceRequest:

> **identifier**: 7601002331521**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Chlamydia trachomatis [Presence] in Specimen by Organism specific culture)**subject**:[H F Female, DoB: 1985-10-17 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-2Doc-ChlamydiaTrachomatis.md#urn-uuid-50d5deca-64e9-4a30-8cec-40ac1f015655)**requester**:[PractitionerRole](Bundle-2Doc-ChlamydiaTrachomatis-Vct.md#urn-uuid-c2be8e31-506b-42b2-adfc-7e47dd23cdb4)**specimen**:[Specimen: type = Specimen from urethra (specimen)](Bundle-2Doc-ChlamydiaTrachomatis.md#urn-uuid-b2b24ded-fd9f-40bc-a822-1fb07e14c2ef)

-------

Entry 7 - fullUrl = urn:uuid:8b9163cc-4894-462c-8060-b9b01f705a8b

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 8 - fullUrl = urn:uuid:c2be8e31-506b-42b2-adfc-7e47dd23cdb4

Resource PractitionerRole:

> **practitioner**:[Practitioner Peter Hauser](Bundle-2Doc-ChlamydiaTrachomatis-Vct.md#urn-uuid-c3384814-b10a-4aea-b84c-a92e9a9f41e3)**organization**:[Organization Praxis Dr. Hauser](Bundle-2Doc-ChlamydiaTrachomatis-Vct.md#urn-uuid-f18f5763-d9a4-4bb7-999e-959beaaba714)

-------

Entry 9 - fullUrl = urn:uuid:c3384814-b10a-4aea-b84c-a92e9a9f41e3

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514**name**: Peter Hauser**telecom**:[peter.hauser@hauserpraxis.ch](mailto:peter.hauser@hauserpraxis.ch),[+41 79 222 33 44](tel:+41792223344)

-------

Entry 10 - fullUrl = urn:uuid:f18f5763-d9a4-4bb7-999e-959beaaba714

Resource Organization:

> **identifier**:`urn:oid:2.16.756.5.45`/A74966168**name**: Praxis Dr. Hauser

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Hauptstrasse 10 Solothurn 4500 |




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "2Doc-ChlamydiaTrachomatis",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:1301332d-6012-443f-9690-929132b2e155"
  },
  "type" : "document",
  "timestamp" : "2023-08-05T11:30:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:da065461-34df-4e2e-b69f-4181908575d0",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "da065461-34df-4e2e-b69f-4181908575d0",
        "language" : "de-CH",
        "identifier" : {
          "system" : "urn:ietf:rfc:3986",
          "value" : "urn:uuid:1301332d-6012-443f-9690-929132b2e155"
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
          "reference" : "urn:uuid:50d5deca-64e9-4a30-8cec-40ac1f015655",
          "type" : "Patient"
        },
        "date" : "2023-08-05T11:30:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:8b9163cc-4894-462c-8060-b9b01f705a8b",
            "type" : "Organization"
          }
        ],
        "title" : "Laborbericht vom 05.08.2023",
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
                "reference" : "urn:uuid:632a79ff-42d7-49e0-97ca-69a3a2015760",
                "type" : "Observation"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:2f69f609-e3bf-4863-bc42-3cbf0568cab1",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "2f69f609-e3bf-4863-bc42-3cbf0568cab1",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:da065461-34df-4e2e-b69f-4181908575d0",
              "type" : "Composition"
            }
          }
        ],
        "identifier" : [
          {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:1301332d-6012-443f-9690-929132b2e155"
          }
        ],
        "basedOn" : [
          {
            "reference" : "urn:uuid:9d409938-5af8-4fae-88d1-541f35111c1f",
            "type" : "ServiceRequest"
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
          "reference" : "urn:uuid:50d5deca-64e9-4a30-8cec-40ac1f015655",
          "type" : "Patient"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:8b9163cc-4894-462c-8060-b9b01f705a8b",
            "type" : "Organization"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:b2b24ded-fd9f-40bc-a822-1fb07e14c2ef",
            "type" : "Specimen"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:632a79ff-42d7-49e0-97ca-69a3a2015760",
            "type" : "Observation"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:50d5deca-64e9-4a30-8cec-40ac1f015655",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "50d5deca-64e9-4a30-8cec-40ac1f015655",
        "identifier" : [
          {
            "system" : "urn:oid:2.16.756.5.32",
            "value" : "7561234567897"
          }
        ],
        "name" : [
          {
            "family" : "F",
            "given" : ["H"]
          }
        ],
        "gender" : "female",
        "birthDate" : "1985-10-17",
        "address" : [
          {
            "use" : "home",
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
      "fullUrl" : "urn:uuid:632a79ff-42d7-49e0-97ca-69a3a2015760",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "632a79ff-42d7-49e0-97ca-69a3a2015760",
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
              "code" : "6349-5",
              "display" : "Chlamydia trachomatis [Presence] in Specimen by Organism specific culture"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:50d5deca-64e9-4a30-8cec-40ac1f015655",
          "type" : "Patient"
        },
        "effectiveDateTime" : "2023-08-04T08:25:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:8b9163cc-4894-462c-8060-b9b01f705a8b",
            "type" : "Organization"
          }
        ],
        "valueCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "10828004",
              "display" : "Positive"
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
          "reference" : "urn:uuid:b2b24ded-fd9f-40bc-a822-1fb07e14c2ef",
          "type" : "Specimen"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:b2b24ded-fd9f-40bc-a822-1fb07e14c2ef",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "b2b24ded-fd9f-40bc-a822-1fb07e14c2ef",
        "type" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "119393003",
              "display" : "Specimen from urethra (specimen)"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:50d5deca-64e9-4a30-8cec-40ac1f015655",
          "type" : "Patient"
        },
        "collection" : {
          "collectedDateTime" : "2023-07-29"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:9d409938-5af8-4fae-88d1-541f35111c1f",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "9d409938-5af8-4fae-88d1-541f35111c1f",
        "identifier" : [
          {
            "value" : "7601002331521"
          }
        ],
        "status" : "completed",
        "intent" : "order",
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "6349-5",
              "display" : "Chlamydia trachomatis [Presence] in Specimen by Organism specific culture"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:50d5deca-64e9-4a30-8cec-40ac1f015655",
          "type" : "Patient"
        },
        "requester" : {
          "reference" : "urn:uuid:c2be8e31-506b-42b2-adfc-7e47dd23cdb4",
          "type" : "PractitionerRole"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:b2b24ded-fd9f-40bc-a822-1fb07e14c2ef",
            "type" : "Specimen"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:8b9163cc-4894-462c-8060-b9b01f705a8b",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "8b9163cc-4894-462c-8060-b9b01f705a8b",
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
      "fullUrl" : "urn:uuid:c2be8e31-506b-42b2-adfc-7e47dd23cdb4",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "c2be8e31-506b-42b2-adfc-7e47dd23cdb4",
        "practitioner" : {
          "reference" : "urn:uuid:c3384814-b10a-4aea-b84c-a92e9a9f41e3",
          "type" : "Practitioner"
        },
        "organization" : {
          "reference" : "urn:uuid:f18f5763-d9a4-4bb7-999e-959beaaba714",
          "type" : "Organization"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:c3384814-b10a-4aea-b84c-a92e9a9f41e3",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "c3384814-b10a-4aea-b84c-a92e9a9f41e3",
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
            "system" : "email",
            "value" : "peter.hauser@hauserpraxis.ch"
          },
          {
            "system" : "phone",
            "value" : "+41 79 222 33 44"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:f18f5763-d9a4-4bb7-999e-959beaaba714",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "f18f5763-d9a4-4bb7-999e-959beaaba714",
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
    }
  ]
}

```
