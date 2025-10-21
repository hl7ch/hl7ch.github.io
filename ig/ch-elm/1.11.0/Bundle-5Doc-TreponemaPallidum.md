# 5Doc - Treponema pallidum - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **5Doc - Treponema pallidum**

## Example Bundle: 5Doc - Treponema pallidum

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

Entry 2 - fullUrl = http://test.fhir.ch/r4/DiagnosticReport/5DR-TreponemaPallidum

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070) |
| Performer | [Organization SanLab](Organization-1Org-Labor.md) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.5.0/NamingSystem-uri.html)/urn:uuid:1901332d-6012-443f-9690-9291adb234fe |

**Report Details**

* **Code**: [Treponema pallidum (organism)](Bundle-5Doc-TreponemaPallidum.md#Observation_5Obs-TreponemaPallidum)
  * **Value**: Positive
  * **Flags**: Final,Positive
  * **When For**: 2023-09-15 09:15:00+0200


-------

Entry 3 - fullUrl = http://test.fhir.ch/r4/Patient/Pat-001

Resource Patient:

> D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)
-------

-------

Entry 4 - fullUrl = http://test.fhir.ch/r4/Observation/5Obs-TreponemaPallidum

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Treponema pallidum (organism)**subject**:[D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Patient-Pat-001.md)**effective**: 2023-09-15 09:15:00+0200**performer**:[Organization SanLab](Organization-1Org-Labor.md)**value**:Positive**interpretation**:Positive**specimen**:[Specimen](Bundle-5Doc-TreponemaPallidum.md#Specimen_5Spec-Specimen)

-------

Entry 5 - fullUrl = http://test.fhir.ch/r4/Specimen/5Spec-Specimen

Resource Specimen:

> **subject**:[D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Patient-Pat-001.md)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2023-09-12 |


-------

Entry 6 - fullUrl = http://test.fhir.ch/r4/ServiceRequest/5SR-Order

Resource ServiceRequest:

> **identifier**: 23846922417**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Treponema pallidum (organism))**subject**:[D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Patient-Pat-001.md)**requester**:[PractitionerRole](PractitionerRole-1PR-KsAbc.md)**specimen**:[Specimen](Bundle-5Doc-TreponemaPallidum.md#Specimen_5Spec-Specimen)

-------

Entry 7 - fullUrl = http://test.fhir.ch/r4/Organization/1Org-Labor

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 8 - fullUrl = http://test.fhir.ch/r4/PractitionerRole/1PR-KsAbc

Resource PractitionerRole:

> **practitioner**:[Practitioner Monika Giacometti](Practitioner-1Pract-KsAbc.md)**organization**:[Organization Kantonsspital ABC](Organization-1Org-KsAbc.md)

-------

Entry 9 - fullUrl = http://test.fhir.ch/r4/Practitioner/1Pract-KsAbc

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000234438,`urn:oid:2.16.756.5.30.1.123.100.2.1.1`/Y604801**name**: Monika Giacometti**telecom**:[m.giacometti@ks-abc.ch](mailto:m.giacometti@ks-abc.ch),[+41 79 111 44 55](tel:+41791114455)

-------

Entry 10 - fullUrl = http://test.fhir.ch/r4/Organization/1Org-KsAbc

Resource Organization:

> **CH ELM Extension: Department**: Abteilung 2**identifier**:`urn:oid:2.16.756.5.45`/A99684215**name**: Kantonsspital ABC

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Aortastrasse 22 Bern 3000 |




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "5Doc-TreponemaPallidum",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:1901332d-6012-443f-9690-9291adb234fe"
  },
  "type" : "document",
  "timestamp" : "2023-09-15T11:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "http://test.fhir.ch/r4/Composition/5Comp-TreponemaPallidum",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "5Comp-TreponemaPallidum",
        "language" : "de-CH",
        "identifier" : {
          "system" : "urn:ietf:rfc:3986",
          "value" : "urn:uuid:1901332d-6012-443f-9690-9291adb234fe"
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
        "date" : "2023-09-15T11:00:00+02:00",
        "author" : [
          {
            "reference" : "Organization/1Org-Labor"
          }
        ],
        "title" : "Laborbericht vom 15.09.2023",
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
                "reference" : "Observation/5Obs-TreponemaPallidum"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/DiagnosticReport/5DR-TreponemaPallidum",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "5DR-TreponemaPallidum",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "Composition/5Comp-TreponemaPallidum"
            }
          }
        ],
        "identifier" : [
          {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:1901332d-6012-443f-9690-9291adb234fe"
          }
        ],
        "basedOn" : [
          {
            "reference" : "ServiceRequest/5SR-Order"
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
            "reference" : "Specimen/5Spec-Specimen"
          }
        ],
        "result" : [
          {
            "reference" : "Observation/5Obs-TreponemaPallidum"
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
      "fullUrl" : "http://test.fhir.ch/r4/Observation/5Obs-TreponemaPallidum",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "5Obs-TreponemaPallidum",
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
              "code" : "72904005",
              "display" : "Treponema pallidum (organism)"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/Pat-001"
        },
        "effectiveDateTime" : "2023-09-15T09:15:00+02:00",
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
          "reference" : "Specimen/5Spec-Specimen"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Specimen/5Spec-Specimen",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "5Spec-Specimen",
        "subject" : {
          "reference" : "Patient/Pat-001"
        },
        "collection" : {
          "collectedDateTime" : "2023-09-12"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/ServiceRequest/5SR-Order",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "5SR-Order",
        "identifier" : [
          {
            "value" : "23846922417"
          }
        ],
        "status" : "completed",
        "intent" : "order",
        "code" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "72904005",
              "display" : "Treponema pallidum (organism)"
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
            "reference" : "Specimen/5Spec-Specimen"
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

```
