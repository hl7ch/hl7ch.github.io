# 63Doc - Tuberculosis Genotyping - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **63Doc - Tuberculosis Genotyping**

## Example Bundle: 63Doc - Tuberculosis Genotyping

**Document Details**

**Document Subject**

Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567866)

-------

-------

**Document Content**

## Genotyping

-------

## Additional Resources Included in Document

-------

Entry 2 - fullUrl = http://test.fhir.ch/r4/DiagnosticReport/63DR-Genotyping

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567866) |
| Performer | [Organization SanLab](Organization-1Org-Labor.md) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:0ed5f82b-06e9-427b-8546-e841a33d49e8 |

**Report Details**

* **Code**: [Mycobacterium tuberculosis complex resistance panel by Molecular genetics method](Bundle-63Doc-Tb-Genotyping.md#Observation_63Obs-Genotyping)
  * **Value**: 
  * **Flags**: Final
  * **When For**: 2024-09-10 14:20:00+0200


-------

Entry 3 - fullUrl = http://test.fhir.ch/r4/Patient/Pat-003

Resource Patient:

> Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567866)
-------

-------

Entry 4 - fullUrl = http://test.fhir.ch/r4/Observation/63Obs-Genotyping

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Mycobacterium tuberculosis complex resistance panel by Molecular genetics method**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567866)](Patient-Pat-003.md)**effective**: 2024-09-10 14:20:00+0200**performer**:[Organization SanLab](Organization-1Org-Labor.md)**specimen**:[Specimen](Bundle-63Doc-Tb-Genotyping.md#Specimen_63Spec-Genotyping)

### Components

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Code** | **DataAbsentReason** | **Interpretation** |
| * | Mycobacterium tuberculosis inhA gene isoniazid low level resistance mutation [Presence] by Molecular method | Not Applicable | Positive |


-------

Entry 5 - fullUrl = http://test.fhir.ch/r4/Specimen/63Spec-Genotyping

Resource Specimen:

> **subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567866)](Patient-Pat-003.md)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2024-09-08 |


-------

Entry 6 - fullUrl = http://test.fhir.ch/r4/ServiceRequest/63SR-Genotyping

Resource ServiceRequest:

> **identifier**: 26500923622**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Mycobacterium tuberculosis complex resistance panel by Molecular genetics method)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567866)](Patient-Pat-003.md)**requester**:[PractitionerRole](PractitionerRole-PR-PeterHauser.md)**specimen**:[Specimen](Bundle-63Doc-Tb-Genotyping.md#Specimen_63Spec-Genotyping)

-------

Entry 7 - fullUrl = http://test.fhir.ch/r4/Organization/1Org-Labor

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 8 - fullUrl = http://test.fhir.ch/r4/PractitionerRole/PR-PeterHauser

Resource PractitionerRole:

> **practitioner**:[Practitioner Peter Hauser](Practitioner-Pract-PeterHauser.md)**organization**:[Organization Praxis Dr. Hauser](Organization-Org-PeterHauser.md)

-------

Entry 9 - fullUrl = http://test.fhir.ch/r4/Practitioner/Pract-PeterHauser

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514**name**: Peter Hauser**telecom**:[peter.hauser@hauserpraxis.ch](mailto:peter.hauser@hauserpraxis.ch),[+41 79 222 33 44](tel:+41792223344)

-------

Entry 10 - fullUrl = http://test.fhir.ch/r4/Organization/Org-PeterHauser

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
  "id" : "63Doc-Tb-Genotyping",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:0ed5f82b-06e9-427b-8546-e841a33d49e8"
  },
  "type" : "document",
  "timestamp" : "2024-09-10T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "http://test.fhir.ch/r4/Composition/63Comp-Genotyping",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "63Comp-Genotyping",
        "language" : "de-CH",
        "identifier" : {
          "system" : "urn:ietf:rfc:3986",
          "value" : "urn:uuid:0ed5f82b-06e9-427b-8546-e841a33d49e8"
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
          "reference" : "Patient/Pat-003"
        },
        "date" : "2024-09-10T12:00:00+02:00",
        "author" : [
          {
            "reference" : "Organization/1Org-Labor"
          }
        ],
        "title" : "Laborbericht vom 10.09.2024",
        "section" : [
          {
            "title" : "Genotyping",
            "code" : {
              "coding" : [
                {
                  "system" : "http://snomed.info/sct",
                  "code" : "726528006",
                  "display" : "Genotyping (qualifier value)"
                }
              ]
            },
            "entry" : [
              {
                "reference" : "Observation/63Obs-Genotyping"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/DiagnosticReport/63DR-Genotyping",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "63DR-Genotyping",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "Composition/63Comp-Genotyping"
            }
          }
        ],
        "identifier" : [
          {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:0ed5f82b-06e9-427b-8546-e841a33d49e8"
          }
        ],
        "basedOn" : [
          {
            "reference" : "ServiceRequest/63SR-Genotyping"
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
          "reference" : "Patient/Pat-003"
        },
        "performer" : [
          {
            "reference" : "Organization/1Org-Labor"
          }
        ],
        "specimen" : [
          {
            "reference" : "Specimen/63Spec-Genotyping"
          }
        ],
        "result" : [
          {
            "reference" : "Observation/63Obs-Genotyping"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Patient/Pat-003",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "Pat-003",
        "identifier" : [
          {
            "system" : "urn:oid:2.16.756.5.32",
            "value" : "7561234567866"
          }
        ],
        "name" : [
          {
            "family" : "Dupont",
            "given" : ["Antoine"]
          }
        ],
        "telecom" : [
          {
            "system" : "phone",
            "value" : "+41 76 222 55 22"
          }
        ],
        "gender" : "female",
        "birthDate" : "1981-02-07",
        "address" : [
          {
            "use" : "home",
            "line" : ["Rue de la république 10"],
            "_line" : [
              {
                "extension" : [
                  {
                    "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-streetName",
                    "valueString" : "Rue de la république"
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
      "fullUrl" : "http://test.fhir.ch/r4/Observation/63Obs-Genotyping",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "63Obs-Genotyping",
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
              "code" : "94053-6",
              "display" : "Mycobacterium tuberculosis complex resistance panel by Molecular genetics method"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/Pat-003"
        },
        "effectiveDateTime" : "2024-09-10T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "Organization/1Org-Labor"
          }
        ],
        "specimen" : {
          "reference" : "Specimen/63Spec-Genotyping"
        },
        "component" : [
          {
            "code" : {
              "coding" : [
                {
                  "system" : "http://loinc.org",
                  "code" : "63072-3",
                  "display" : "Mycobacterium tuberculosis inhA gene isoniazid low level resistance mutation [Presence] by Molecular method"
                }
              ]
            },
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
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Specimen/63Spec-Genotyping",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "63Spec-Genotyping",
        "subject" : {
          "reference" : "Patient/Pat-003"
        },
        "collection" : {
          "collectedDateTime" : "2024-09-08"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/ServiceRequest/63SR-Genotyping",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "63SR-Genotyping",
        "identifier" : [
          {
            "value" : "26500923622"
          }
        ],
        "status" : "completed",
        "intent" : "order",
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "94053-6",
              "display" : "Mycobacterium tuberculosis complex resistance panel by Molecular genetics method"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/Pat-003"
        },
        "requester" : {
          "reference" : "PractitionerRole/PR-PeterHauser"
        },
        "specimen" : [
          {
            "reference" : "Specimen/63Spec-Genotyping"
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
      "fullUrl" : "http://test.fhir.ch/r4/PractitionerRole/PR-PeterHauser",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "PR-PeterHauser",
        "practitioner" : {
          "reference" : "Practitioner/Pract-PeterHauser"
        },
        "organization" : {
          "reference" : "Organization/Org-PeterHauser"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Practitioner/Pract-PeterHauser",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "Pract-PeterHauser",
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
      "fullUrl" : "http://test.fhir.ch/r4/Organization/Org-PeterHauser",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "Org-PeterHauser",
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
