# Publish 4Doc-Campylobacter - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Publish 4Doc-Campylobacter**

## Example DocumentReference: Publish 4Doc-Campylobacter

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:1901332d-6012-443f-9690-9291adb2cb3

**status**: Current

> **content**

### Attachments

| | | |
| :--- | :--- | :--- |
| - | **Language** | **Url** |
| * | German (Region=Switzerland) | [Bundle: identifier = UUID:1901332d-6012-443f-9690-9291adb2cb3b; type = document; timestamp = 2023-09-20 07:35:00+0200](#hcPublish-4Doc-Campylobacter/4Doc-Campylobacter) |


-------

> 

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
Entry 2 - fullUrl = http://test.fhir.ch/r4/DiagnosticReport/4DR-CampylobacterResource DiagnosticReport:
> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | H F Female, DoB: 1985-10-17 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Organization-1Org-Labor.md) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:1901332d-6012-443f-9690-9291adb2cb3b |

**Report Details**

* **Code**: [Campylobacter coli+jejuni DNA [Presence] in Wound by NAA with probe detection](Bundle-4Doc-Campylobacter.md#Observation_4Obs-Campylobacter)
  * **Value**: Positive
  * **Flags**: Final,Positive
  * **When For**: 2023-09-19 17:50:00+0200


-------
Entry 3 - fullUrl = http://test.fhir.ch/r4/Patient/Pat-002Resource Patient:
> H F Female, DoB: 1985-10-17 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------
Entry 4 - fullUrl = http://test.fhir.ch/r4/Observation/4Obs-CampylobacterResource Observation:
> **status**: Final**category**:Laboratory**code**:Campylobacter coli+jejuni DNA [Presence] in Wound by NAA with probe detection**subject**:[H F Female, DoB: 1985-10-17 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-4Doc-Campylobacter.md#Patient_Pat-002)**effective**: 2023-09-19 17:50:00+0200**performer**:[Organization SanLab](Organization-1Org-Labor.md)**value**:Positive**interpretation**:Positive**specimen**:[Specimen](Bundle-4Doc-Campylobacter.md#Specimen_4Spec-Specimen)

-------
Entry 5 - fullUrl = http://test.fhir.ch/r4/Specimen/4Spec-SpecimenResource Specimen:
> **subject**:[H F Female, DoB: 1985-10-17 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-4Doc-Campylobacter.md#Patient_Pat-002)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2023-09-18 |


-------
Entry 6 - fullUrl = http://test.fhir.ch/r4/ServiceRequest/4SR-OrderResource ServiceRequest:
> **identifier**: 26955847714**status**: Completed**intent**: Order**code**:Campylobacter coli+jejuni DNA [Presence] in Wound by NAA with probe detection**subject**:[H F Female, DoB: 1985-10-17 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-4Doc-Campylobacter.md#Patient_Pat-002)**requester**:[PractitionerRole](PractitionerRole-1PR-KsAbc.md)**specimen**:[Specimen](Bundle-4Doc-Campylobacter.md#Specimen_4Spec-Specimen)

-------
Entry 7 - fullUrl = http://test.fhir.ch/r4/Organization/1Org-LaborResource Organization:
> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------
Entry 8 - fullUrl = http://test.fhir.ch/r4/PractitionerRole/1PR-KsAbcResource PractitionerRole:
> **practitioner**:[Practitioner Monika Giacometti](Practitioner-1Pract-KsAbc.md)**organization**:[Organization Kantonsspital ABC](Organization-1Org-KsAbc.md)

-------
Entry 9 - fullUrl = http://test.fhir.ch/r4/Practitioner/1Pract-KsAbcResource Practitioner:
> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000234438,`urn:oid:2.16.756.5.30.1.123.100.2.1.1`/Y604801**name**: Monika Giacometti**telecom**:[m.giacometti@ks-abc.ch](mailto:m.giacometti@ks-abc.ch),[+41 79 111 44 55](tel:+41791114455)

-------
Entry 10 - fullUrl = http://test.fhir.ch/r4/Organization/1Org-KsAbcResource Organization:
> **CH ELM Extension: Department**: Abteilung 2**identifier**:`urn:oid:2.16.756.5.45`/A99684215**name**: Kantonsspital ABC**address**: Aortastrasse 22 Bern 3000



## Resource Content

```json
{
  "resourceType" : "DocumentReference",
  "id" : "Publish-4Doc-Campylobacter",
  "contained" : [
    {
      "resourceType" : "Bundle",
      "id" : "4Doc-Campylobacter",
      "identifier" : {
        "system" : "urn:ietf:rfc:3986",
        "value" : "urn:uuid:1901332d-6012-443f-9690-9291adb2cb3b"
      },
      "type" : "document",
      "timestamp" : "2023-09-20T07:35:00+02:00",
      "entry" : [
        {
          "fullUrl" : "http://test.fhir.ch/r4/Composition/4Comp-Campylobacter",
          "resource" : {
            "resourceType" : "Composition",
            "id" : "4Comp-Campylobacter",
            "language" : "de-CH",
            "identifier" : {
              "system" : "urn:ietf:rfc:3986",
              "value" : "urn:uuid:1901332d-6012-443f-9690-9291adb2cb3b"
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
              "reference" : "Patient/Pat-002"
            },
            "date" : "2023-09-20T07:35:00+02:00",
            "author" : [
              {
                "reference" : "Organization/1Org-Labor"
              }
            ],
            "title" : "Laborbericht vom 20.09.2023",
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
                    "reference" : "Observation/4Obs-Campylobacter"
                  }
                ]
              }
            ]
          }
        },
        {
          "fullUrl" : "http://test.fhir.ch/r4/DiagnosticReport/4DR-Campylobacter",
          "resource" : {
            "resourceType" : "DiagnosticReport",
            "id" : "4DR-Campylobacter",
            "extension" : [
              {
                "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
                "valueReference" : {
                  "reference" : "Composition/4Comp-Campylobacter"
                }
              }
            ],
            "identifier" : [
              {
                "system" : "urn:ietf:rfc:3986",
                "value" : "urn:uuid:1901332d-6012-443f-9690-9291adb2cb3b"
              }
            ],
            "basedOn" : [
              {
                "reference" : "ServiceRequest/4SR-Order"
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
              "reference" : "Patient/Pat-002"
            },
            "performer" : [
              {
                "reference" : "Organization/1Org-Labor"
              }
            ],
            "specimen" : [
              {
                "reference" : "Specimen/4Spec-Specimen"
              }
            ],
            "result" : [
              {
                "reference" : "Observation/4Obs-Campylobacter"
              }
            ]
          }
        },
        {
          "fullUrl" : "http://test.fhir.ch/r4/Patient/Pat-002",
          "resource" : {
            "resourceType" : "Patient",
            "id" : "Pat-002",
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
          "fullUrl" : "http://test.fhir.ch/r4/Observation/4Obs-Campylobacter",
          "resource" : {
            "resourceType" : "Observation",
            "id" : "4Obs-Campylobacter",
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
                  "code" : "103168-1",
                  "display" : "Campylobacter coli+jejuni DNA [Presence] in Wound by NAA with probe detection"
                }
              ]
            },
            "subject" : {
              "reference" : "Patient/Pat-002"
            },
            "effectiveDateTime" : "2023-09-19T17:50:00+02:00",
            "performer" : [
              {
                "reference" : "Organization/1Org-Labor"
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
              "reference" : "Specimen/4Spec-Specimen"
            }
          }
        },
        {
          "fullUrl" : "http://test.fhir.ch/r4/Specimen/4Spec-Specimen",
          "resource" : {
            "resourceType" : "Specimen",
            "id" : "4Spec-Specimen",
            "subject" : {
              "reference" : "Patient/Pat-002"
            },
            "collection" : {
              "collectedDateTime" : "2023-09-18"
            }
          }
        },
        {
          "fullUrl" : "http://test.fhir.ch/r4/ServiceRequest/4SR-Order",
          "resource" : {
            "resourceType" : "ServiceRequest",
            "id" : "4SR-Order",
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
                  "code" : "103168-1",
                  "display" : "Campylobacter coli+jejuni DNA [Presence] in Wound by NAA with probe detection"
                }
              ]
            },
            "subject" : {
              "reference" : "Patient/Pat-002"
            },
            "requester" : {
              "reference" : "PractitionerRole/1PR-KsAbc"
            },
            "specimen" : [
              {
                "reference" : "Specimen/4Spec-Specimen"
              }
            ]
          }
        },
        {
          "fullUrl" : "http://test.fhir.ch/r4/Organization/1Org-Labor",
          "resource" : {
            "resourceType" : "Organization",
            "id" : "1Org-Labor",
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
          "fullUrl" : "http://test.fhir.ch/r4/PractitionerRole/1PR-KsAbc",
          "resource" : {
            "resourceType" : "PractitionerRole",
            "id" : "1PR-KsAbc",
            "practitioner" : {
              "reference" : "Practitioner/1Pract-KsAbc"
            },
            "organization" : {
              "reference" : "Organization/1Org-KsAbc"
            }
          }
        },
        {
          "fullUrl" : "http://test.fhir.ch/r4/Practitioner/1Pract-KsAbc",
          "resource" : {
            "resourceType" : "Practitioner",
            "id" : "1Pract-KsAbc",
            "identifier" : [
              {
                "system" : "urn:oid:2.51.1.3",
                "value" : "7601000234438"
              },
              {
                "system" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1",
                "value" : "Y604801"
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
                "system" : "email",
                "value" : "m.giacometti@ks-abc.ch"
              },
              {
                "system" : "phone",
                "value" : "+41 79 111 44 55"
              }
            ]
          }
        },
        {
          "fullUrl" : "http://test.fhir.ch/r4/Organization/1Org-KsAbc",
          "resource" : {
            "resourceType" : "Organization",
            "id" : "1Org-KsAbc",
            "extension" : [
              {
                "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-department",
                "valueString" : "Abteilung 2"
              }
            ],
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
                        "valueString" : "18"
                      }
                    ]
                  }
                ],
                "city" : "Bern",
                "postalCode" : "3000"
              }
            ]
          }
        }
      ]
    }
  ],
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:1901332d-6012-443f-9690-9291adb2cb3"
    }
  ],
  "status" : "current",
  "content" : [
    {
      "attachment" : {
        "language" : "de-CH",
        "url" : "#4Doc-Campylobacter"
      }
    }
  ]
}

```
