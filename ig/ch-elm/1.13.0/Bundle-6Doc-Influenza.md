# 6Doc - Influenza - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **6Doc - Influenza**

## Example Bundle: 6Doc - Influenza

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

Entry 2 - fullUrl = http://test.fhir.ch/r4/DiagnosticReport/6DR-Influenza

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070) |
| Performer | [Organization SanLab](Organization-1Org-Labor.md) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:1901332d-6012-443f-9690-9291adb23a5c |

**Report Details**

* **Code**: [Influenza virus A RNA [Presence] in Nasopharynx by NAA with probe detection](Bundle-6Doc-Influenza.md#Observation_6Obs-Influenza)
  * **Value**: Positive
  * **Flags**: Final,Positive
  * **When For**: 2023-09-10 14:20:00+0200


-------

Entry 3 - fullUrl = http://test.fhir.ch/r4/Patient/Pat-001

Resource Patient:

> D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)
-------

-------

Entry 4 - fullUrl = http://test.fhir.ch/r4/Observation/6Obs-Influenza

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Influenza virus A RNA [Presence] in Nasopharynx by NAA with probe detection**subject**:[D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Patient-Pat-001.md)**effective**: 2023-09-10 14:20:00+0200**performer**:[Organization SanLab](Organization-1Org-Labor.md)**value**:Positive**interpretation**:Positive**specimen**:[Specimen](Bundle-6Doc-Influenza.md#Specimen_6Spec-Specimen)

-------

Entry 5 - fullUrl = http://test.fhir.ch/r4/Specimen/6Spec-Specimen

Resource Specimen:

> **subject**:[D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Patient-Pat-001.md)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2023-09-08 |


-------

Entry 6 - fullUrl = http://test.fhir.ch/r4/ServiceRequest/6SR-Order

Resource ServiceRequest:

> **identifier**: 26500923622**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Influenza virus A RNA [Presence] in Nasopharynx by NAA with probe detection)**subject**:[D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Patient-Pat-001.md)**requester**:[PractitionerRole](PractitionerRole-PR-PeterHauser.md)**specimen**:[Specimen](Bundle-6Doc-Influenza.md#Specimen_6Spec-Specimen)

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
  "id" : "6Doc-Influenza",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:1901332d-6012-443f-9690-9291adb23a5c"
  },
  "type" : "document",
  "timestamp" : "2023-09-10T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "http://test.fhir.ch/r4/Composition/6Comp-Influenza",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "6Comp-Influenza",
        "language" : "de-CH",
        "identifier" : {
          "system" : "urn:ietf:rfc:3986",
          "value" : "urn:uuid:1901332d-6012-443f-9690-9291adb23a5c"
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
        "date" : "2023-09-10T12:00:00+02:00",
        "author" : [
          {
            "reference" : "Organization/1Org-Labor"
          }
        ],
        "title" : "Laborbericht vom 10.09.2023",
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
                "reference" : "Observation/6Obs-Influenza"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/DiagnosticReport/6DR-Influenza",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "6DR-Influenza",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "Composition/6Comp-Influenza"
            }
          }
        ],
        "identifier" : [
          {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:1901332d-6012-443f-9690-9291adb23a5c"
          }
        ],
        "basedOn" : [
          {
            "reference" : "ServiceRequest/6SR-Order"
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
            "reference" : "Specimen/6Spec-Specimen"
          }
        ],
        "result" : [
          {
            "reference" : "Observation/6Obs-Influenza"
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
      "fullUrl" : "http://test.fhir.ch/r4/Observation/6Obs-Influenza",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "6Obs-Influenza",
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
              "code" : "76078-5",
              "display" : "Influenza virus A RNA [Presence] in Nasopharynx by NAA with probe detection"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/Pat-001"
        },
        "effectiveDateTime" : "2023-09-10T14:20:00+02:00",
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
          "reference" : "Specimen/6Spec-Specimen"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Specimen/6Spec-Specimen",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "6Spec-Specimen",
        "subject" : {
          "reference" : "Patient/Pat-001"
        },
        "collection" : {
          "collectedDateTime" : "2023-09-08"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/ServiceRequest/6SR-Order",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "6SR-Order",
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
              "code" : "76078-5",
              "display" : "Influenza virus A RNA [Presence] in Nasopharynx by NAA with probe detection"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/Pat-001"
        },
        "requester" : {
          "reference" : "PractitionerRole/PR-PeterHauser"
        },
        "specimen" : [
          {
            "reference" : "Specimen/6Spec-Specimen"
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
