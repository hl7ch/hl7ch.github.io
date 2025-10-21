# Publish 1Doc-NeisseriaGonorrhoeae (Strict) - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Publish 1Doc-NeisseriaGonorrhoeae (Strict)**

## Example DocumentReference: Publish 1Doc-NeisseriaGonorrhoeae (Strict)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.5.0/NamingSystem-uri.html)/urn:uuid:1901332d-6012-443f-9690-9291adb2e19d

**status**: Current

> **content**

### Attachments

| | | |
| :--- | :--- | :--- |
| - | **Language** | **Url** |
| * | German (Region=Switzerland) | [Bundle: identifier = UUID:1901332d-6012-443f-9690-9291adb2e19d; type = document; timestamp = 2023-07-14 16:00:00+0200](#hc1-DocumentReferenceStrict/1Doc-NeisseriaGonorrhoeae) |


-------

> 

**Document Details**

**Document Subject**

D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)

-------

-------

**Document Content**

## Analyseergebnisse der mikrobiologischen Untersuchung

-------

## Additional Resources Included in Document

-------
Entry 2 - fullUrl = http://test.fhir.ch/r4/DiagnosticReport/1DR-NeisseriaGonorrhoeaeResource DiagnosticReport:
> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070) |
| Performer | [Organization SanLab](Organization-1Org-Labor.md) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.5.0/NamingSystem-uri.html)/urn:uuid:1901332d-6012-443f-9690-9291adb2e19d |

**Report Details**

* **Code**: [Neisseria gonorrhoeae [Presence] in Urethra by Organism specific culture](Observation-1Obs-NeisseriaGonorrhoeae.md)
  * **Value**: Positive
  * **Flags**: Final,Positive
  * **When For**: 2023-07-14 11:10:00+0200


-------
Entry 3 - fullUrl = http://test.fhir.ch/r4/Patient/Pat-001Resource Patient:
> D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)
-------

-------
Entry 4 - fullUrl = http://test.fhir.ch/r4/Observation/1Obs-NeisseriaGonorrhoeaeResource Observation:
> **status**: Final**category**:Laboratory**code**:Neisseria gonorrhoeae [Presence] in Urethra by Organism specific culture**subject**:[D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Patient-Pat-001.md)**effective**: 2023-07-14 11:10:00+0200**performer**:[Organization SanLab](Organization-1Org-Labor.md)**value**:Positive**interpretation**:Positive**specimen**:[Specimen](Specimen-1Spec-Specimen.md)

-------
Entry 5 - fullUrl = http://test.fhir.ch/r4/Specimen/1Spec-SpecimenResource Specimen:
> **subject**:[D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Patient-Pat-001.md)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2023-07-01 |


-------
Entry 6 - fullUrl = http://test.fhir.ch/r4/ServiceRequest/1SR-OrderResource ServiceRequest:
> **identifier**: 22000938108**status**: Completed**intent**: Order**code**:Neisseria gonorrhoeae [Presence] in Urethra by Organism specific culture**subject**:[D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Patient-Pat-001.md)**requester**:[PractitionerRole](PractitionerRole-1PR-KsAbc.md)**specimen**:[Specimen](Specimen-1Spec-Specimen.md)

-------
Entry 7 - fullUrl = http://test.fhir.ch/r4/PractitionerRole/1PR-KsAbcResource PractitionerRole:
> **practitioner**:[Practitioner Monika Giacometti](Practitioner-1Pract-KsAbc.md)**organization**:[Organization Kantonsspital ABC](Organization-1Org-KsAbc.md)

-------
Entry 8 - fullUrl = http://test.fhir.ch/r4/Practitioner/1Pract-KsAbcResource Practitioner:
> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000234438,`urn:oid:2.16.756.5.30.1.123.100.2.1.1`/Y604801**name**: Monika Giacometti**telecom**:[m.giacometti@ks-abc.ch](mailto:m.giacometti@ks-abc.ch),[+41 79 111 44 55](tel:+41791114455)

-------
Entry 9 - fullUrl = http://test.fhir.ch/r4/Organization/1Org-LaborResource Organization:
> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------
Entry 10 - fullUrl = http://test.fhir.ch/r4/Organization/1Org-KsAbcResource Organization:
> **CH ELM Extension: Department**: Abteilung 2**identifier**:`urn:oid:2.16.756.5.45`/A99684215**name**: Kantonsspital ABC**address**: Aortastrasse 22 Bern 3000



## Resource Content

```json
{
  "resourceType" : "DocumentReference",
  "id" : "1-DocumentReferenceStrict",
  "contained" : [
    {
      "resourceType" : "Bundle",
      "id" : "1Doc-NeisseriaGonorrhoeae",
      "identifier" : {
        "system" : "urn:ietf:rfc:3986",
        "value" : "urn:uuid:1901332d-6012-443f-9690-9291adb2e19d"
      },
      "type" : "document",
      "timestamp" : "2023-07-14T16:00:00+02:00",
      "entry" : [
        {
          "fullUrl" : "http://test.fhir.ch/r4/Composition/1Comp-NeisseriaGonorrhoeae",
          "resource" : {
            "resourceType" : "Composition",
            "id" : "1Comp-NeisseriaGonorrhoeae",
            "language" : "de-CH",
            "identifier" : {
              "system" : "urn:ietf:rfc:3986",
              "value" : "urn:uuid:1901332d-6012-443f-9690-9291adb2e19d"
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
              "reference" : "Patient/Pat-001"
            },
            "date" : "2023-07-14T16:00:00+02:00",
            "author" : [
              {
                "reference" : "Organization/1Org-Labor"
              }
            ],
            "title" : "Laborbericht vom 14.07.2023",
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
                    "reference" : "Observation/1Obs-NeisseriaGonorrhoeae"
                  }
                ]
              }
            ]
          }
        },
        {
          "fullUrl" : "http://test.fhir.ch/r4/DiagnosticReport/1DR-NeisseriaGonorrhoeae",
          "resource" : {
            "resourceType" : "DiagnosticReport",
            "id" : "1DR-NeisseriaGonorrhoeae",
            "extension" : [
              {
                "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
                "valueReference" : {
                  "reference" : "Composition/1Comp-NeisseriaGonorrhoeae"
                }
              }
            ],
            "identifier" : [
              {
                "system" : "urn:ietf:rfc:3986",
                "value" : "urn:uuid:1901332d-6012-443f-9690-9291adb2e19d"
              }
            ],
            "basedOn" : [
              {
                "reference" : "ServiceRequest/1SR-Order"
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
              "reference" : "Patient/Pat-001"
            },
            "performer" : [
              {
                "reference" : "Organization/1Org-Labor"
              }
            ],
            "specimen" : [
              {
                "reference" : "Specimen/1Spec-Specimen"
              }
            ],
            "result" : [
              {
                "reference" : "Observation/1Obs-NeisseriaGonorrhoeae"
              }
            ]
          }
        },
        {
          "fullUrl" : "http://test.fhir.ch/r4/Patient/Pat-001",
          "resource" : {
            "resourceType" : "Patient",
            "id" : "Pat-001",
            "identifier" : [
              {
                "system" : "urn:oid:2.16.756.5.32",
                "value" : "7562295883070"
              }
            ],
            "name" : [
              {
                "family" : "M",
                "given" : ["D"]
              }
            ],
            "gender" : "male",
            "birthDate" : "1960-08-22",
            "address" : [
              {
                "use" : "home",
                "city" : "Bern",
                "state" : "BE",
                "postalCode" : "3000",
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
          "fullUrl" : "http://test.fhir.ch/r4/Observation/1Obs-NeisseriaGonorrhoeae",
          "resource" : {
            "resourceType" : "Observation",
            "id" : "1Obs-NeisseriaGonorrhoeae",
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
                  "code" : "697-3",
                  "display" : "Neisseria gonorrhoeae [Presence] in Urethra by Organism specific culture"
                }
              ]
            },
            "subject" : {
              "reference" : "Patient/Pat-001"
            },
            "effectiveDateTime" : "2023-07-14T11:10:00+02:00",
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
              "reference" : "Specimen/1Spec-Specimen"
            }
          }
        },
        {
          "fullUrl" : "http://test.fhir.ch/r4/Specimen/1Spec-Specimen",
          "resource" : {
            "resourceType" : "Specimen",
            "id" : "1Spec-Specimen",
            "subject" : {
              "reference" : "Patient/Pat-001"
            },
            "collection" : {
              "collectedDateTime" : "2023-07-01"
            }
          }
        },
        {
          "fullUrl" : "http://test.fhir.ch/r4/ServiceRequest/1SR-Order",
          "resource" : {
            "resourceType" : "ServiceRequest",
            "id" : "1SR-Order",
            "identifier" : [
              {
                "value" : "22000938108"
              }
            ],
            "status" : "completed",
            "intent" : "order",
            "code" : {
              "coding" : [
                {
                  "system" : "http://loinc.org",
                  "code" : "697-3",
                  "display" : "Neisseria gonorrhoeae [Presence] in Urethra by Organism specific culture"
                }
              ]
            },
            "subject" : {
              "reference" : "Patient/Pat-001"
            },
            "requester" : {
              "reference" : "PractitionerRole/1PR-KsAbc"
            },
            "specimen" : [
              {
                "reference" : "Specimen/1Spec-Specimen"
              }
            ]
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
      "value" : "urn:uuid:1901332d-6012-443f-9690-9291adb2e19d"
    }
  ],
  "status" : "current",
  "content" : [
    {
      "attachment" : {
        "language" : "de-CH",
        "url" : "#1Doc-NeisseriaGonorrhoeae"
      }
    }
  ]
}

```
