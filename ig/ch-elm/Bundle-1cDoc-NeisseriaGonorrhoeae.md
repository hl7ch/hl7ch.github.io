# 1 Doc - Neisseria Gonorrhoeae - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1 Doc - Neisseria Gonorrhoeae**

## Example Bundle: 1 Doc - Neisseria Gonorrhoeae

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

Entry 2 - fullUrl = http://test.fhir.ch/r4/DiagnosticReport/1cDR-NeisseriaGonorrhoeae

Resource DiagnosticReport:

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

Entry 3 - fullUrl = http://test.fhir.ch/r4/Patient/Pat-001

Resource Patient:

> D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)
-------

-------

Entry 4 - fullUrl = http://test.fhir.ch/r4/Observation/1Obs-NeisseriaGonorrhoeae

Resource Observation:

> **status**: Final**category**:Laboratory**code**:Neisseria gonorrhoeae [Presence] in Urethra by Organism specific culture**subject**:[D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Patient-Pat-001.md)**effective**: 2023-07-14 11:10:00+0200**performer**:[Organization SanLab](Organization-1Org-Labor.md)**value**:Positive**interpretation**:Positive**specimen**:[Specimen](Specimen-1Spec-Specimen.md)

-------

Entry 5 - fullUrl = http://test.fhir.ch/r4/Specimen/1Spec-Specimen

Resource Specimen:

> **subject**:[D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Patient-Pat-001.md)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2023-07-01 |


-------

Entry 6 - fullUrl = http://test.fhir.ch/r4/ServiceRequest/1cSR-Order

Resource ServiceRequest:

> **identifier**: 22000938108**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: Neisseria gonorrhoeae [Presence] in Urethra by Organism specific culture)**subject**:[D M Male, DoB: 1960-08-22 ( urn:oid:2.16.756.5.32#7562295883070)](Patient-Pat-001.md)**requester**:[PractitionerRole](PractitionerRole-1cPR-KsAbc.md)**specimen**:[Specimen](Specimen-1Spec-Specimen.md)

-------

Entry 7 - fullUrl = http://test.fhir.ch/r4/PractitionerRole/1cPR-KsAbc

Resource PractitionerRole:

> **practitioner**:[Practitioner null Giacometti](Practitioner-1cPract-KsAbc.md)

-------

Entry 8 - fullUrl = http://test.fhir.ch/r4/Practitioner/1cPract-KsAbc

Resource Practitioner:

> **name**: null Giacometti**address**: Bern 3000

-------

Entry 9 - fullUrl = http://test.fhir.ch/r4/Organization/1Org-Labor

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "1cDoc-NeisseriaGonorrhoeae",
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
      "fullUrl" : "http://test.fhir.ch/r4/DiagnosticReport/1cDR-NeisseriaGonorrhoeae",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "1cDR-NeisseriaGonorrhoeae",
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
            "reference" : "ServiceRequest/1cSR-Order"
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
      "fullUrl" : "http://test.fhir.ch/r4/ServiceRequest/1cSR-Order",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "1cSR-Order",
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
          "reference" : "PractitionerRole/1cPR-KsAbc"
        },
        "specimen" : [
          {
            "reference" : "Specimen/1Spec-Specimen"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/PractitionerRole/1cPR-KsAbc",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "1cPR-KsAbc",
        "practitioner" : {
          "reference" : "Practitioner/1cPract-KsAbc"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Practitioner/1cPract-KsAbc",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "1cPract-KsAbc",
        "name" : [
          {
            "family" : "Giacometti",
            "_given" : [
              {
                "extension" : [
                  {
                    "url" : "http://hl7.org/fhir/StructureDefinition/data-absent-reason",
                    "valueCode" : "unknown"
                  }
                ]
              }
            ]
          }
        ],
        "address" : [
          {
            "city" : "Bern",
            "postalCode" : "3000"
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
    }
  ]
}

```
