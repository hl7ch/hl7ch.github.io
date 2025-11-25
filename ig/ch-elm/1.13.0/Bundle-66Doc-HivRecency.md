# 66Doc - HIV Recency - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **66Doc - HIV Recency**

## Example Bundle: 66Doc - HIV Recency

**Document Details**

**Document Subject**

null null Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)

-------

-------

**Document Content**

## Analyseergebnisse der mikrobiologischen Untersuchung

-------

## Additional Resources Included in Document

-------

Entry 2 - fullUrl = http://test.fhir.ch/r4/DiagnosticReport/66DR-HivRecency

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | null null Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897) |
| Performer | [Organization SanLab](Organization-1Org-Labor.md) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:b9a8b9ee-9157-44af-b46e-8c683c69d6bd |

**Report Details**

* **Code**: [HIV 1 and 2 IgG Ab [Identifier] in Serum or Plasma by Immunoblot](Bundle-66Doc-HivRecency.md#Observation_66Obs-HivRecency)
  * **Value**: 
  * **Flags**: Final
  * **When For**: 2025-03-15 14:20:00+0200


-------

Entry 3 - fullUrl = http://test.fhir.ch/r4/Patient/66Pat

Resource Patient:

> null null Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)
-------

-------

Entry 4 - fullUrl = http://test.fhir.ch/r4/Observation/66Obs-HivRecency

Resource Observation:

> **status**: Final**category**:Laboratory**code**:HIV 1 and 2 IgG Ab [Identifier] in Serum or Plasma by Immunoblot**subject**:[null null Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-66Doc-HivRecency.md#Patient_66Pat)**effective**: 2025-03-15 14:20:00+0200**performer**:[Organization SanLab](Organization-1Org-Labor.md)**specimen**:[Specimen](Bundle-66Doc-HivRecency.md#Specimen_66Spec-HivRecency)
> **component****code**:Measurement of Human immunodeficiency virus 1 glycoprotein 120 antibody (procedure)**value**: 1 [arb'U](Details: UCUM code[arb'U] = '[arb'U]')

> **component****code**:Measurement of Human immunodeficiency virus 1 glycoprotein 41 antibody (procedure)**value**: 0.5 [arb'U](Details: UCUM code[arb'U] = '[arb'U]')

> **component****code**:Measurement of Human immunodeficiency virus 1 protein 31 antibody (procedure)**value**: 0 [arb'U](Details: UCUM code[arb'U] = '[arb'U]')

> **component****code**:Measurement of Human immunodeficiency virus 1 protein 24 antibody (procedure)**value**: 2 [arb'U](Details: UCUM code[arb'U] = '[arb'U]')

> **component****code**:Measurement of Human immunodeficiency virus 1 protein 17 antibody (procedure)**value**: 3 [arb'U](Details: UCUM code[arb'U] = '[arb'U]')

> **component****code**:Measurement of Human immunodeficiency virus 2 glycoprotein 105 antibody (procedure)**value**: 0 [arb'U](Details: UCUM code[arb'U] = '[arb'U]')

> **component****code**:Measurement of Human immunodeficiency virus 2 glycoprotein 36 antibody (procedure)**value**: 4 [arb'U](Details: UCUM code[arb'U] = '[arb'U]')

-------

Entry 5 - fullUrl = http://test.fhir.ch/r4/Specimen/66Spec-HivRecency

Resource Specimen:

> **subject**:[null null Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-66Doc-HivRecency.md#Patient_66Pat)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2025-03-15 14:20:00+0200 |


-------

Entry 6 - fullUrl = http://test.fhir.ch/r4/ServiceRequest/66SR-HivRecency

Resource ServiceRequest:

> **identifier**: 36500923675**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: HIV 1 and 2 IgG Ab [Identifier] in Serum or Plasma by Immunoblot)**subject**:[null null Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567897)](Bundle-66Doc-HivRecency.md#Patient_66Pat)**requester**:[PractitionerRole](PractitionerRole-PR-PeterHauser.md)**specimen**:[Specimen](Bundle-66Doc-HivRecency.md#Specimen_66Spec-HivRecency)

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
  "id" : "66Doc-HivRecency",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:b9a8b9ee-9157-44af-b46e-8c683c69d6bd"
  },
  "type" : "document",
  "timestamp" : "2025-03-17T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "http://test.fhir.ch/r4/Composition/66Comp-HivRecency",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "66Comp-HivRecency",
        "language" : "de-CH",
        "identifier" : {
          "system" : "urn:ietf:rfc:3986",
          "value" : "urn:uuid:b9a8b9ee-9157-44af-b46e-8c683c69d6bd"
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
          "reference" : "Patient/66Pat"
        },
        "date" : "2025-03-17T12:00:00+02:00",
        "author" : [
          {
            "reference" : "Organization/1Org-Labor"
          }
        ],
        "title" : "Laborbericht vom 17.03.2025",
        "section" : [
          {
            "title" : "Analyseergebnisse der mikrobiologischen Untersuchung",
            "code" : {
              "coding" : [
                {
                  "system" : "http://loinc.org",
                  "code" : "18727-8",
                  "display" : "Serology studies (set)"
                }
              ]
            },
            "entry" : [
              {
                "reference" : "Observation/66Obs-HivRecency"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/DiagnosticReport/66DR-HivRecency",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "66DR-HivRecency",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "Composition/66Comp-HivRecency"
            }
          }
        ],
        "identifier" : [
          {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:b9a8b9ee-9157-44af-b46e-8c683c69d6bd"
          }
        ],
        "basedOn" : [
          {
            "reference" : "ServiceRequest/66SR-HivRecency"
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
          "reference" : "Patient/66Pat"
        },
        "performer" : [
          {
            "reference" : "Organization/1Org-Labor"
          }
        ],
        "specimen" : [
          {
            "reference" : "Specimen/66Spec-HivRecency"
          }
        ],
        "result" : [
          {
            "reference" : "Observation/66Obs-HivRecency"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Patient/66Pat",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "66Pat",
        "identifier" : [
          {
            "system" : "urn:oid:2.16.756.5.32",
            "value" : "7561234567897"
          }
        ],
        "name" : [
          {
            "extension" : [
              {
                "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-hiv-code",
                "valueString" : "H5"
              }
            ],
            "_family" : {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/StructureDefinition/data-absent-reason",
                  "valueCode" : "masked"
                }
              ]
            },
            "_given" : [
              {
                "extension" : [
                  {
                    "url" : "http://hl7.org/fhir/StructureDefinition/data-absent-reason",
                    "valueCode" : "masked"
                  }
                ]
              }
            ]
          }
        ],
        "gender" : "female",
        "birthDate" : "1981-02-07",
        "address" : [
          {
            "use" : "home",
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
      "fullUrl" : "http://test.fhir.ch/r4/Observation/66Obs-HivRecency",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "66Obs-HivRecency",
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
              "code" : "77685-6",
              "display" : "HIV 1 and 2 IgG Ab [Identifier] in Serum or Plasma by Immunoblot"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/66Pat"
        },
        "effectiveDateTime" : "2025-03-15T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "Organization/1Org-Labor"
          }
        ],
        "specimen" : {
          "reference" : "Specimen/66Spec-HivRecency"
        },
        "component" : [
          {
            "code" : {
              "coding" : [
                {
                  "system" : "http://snomed.info/sct",
                  "code" : "118040000",
                  "display" : "Measurement of Human immunodeficiency virus 1 glycoprotein 120 antibody (procedure)"
                }
              ]
            },
            "valueQuantity" : {
              "value" : 1,
              "unit" : "[arb'U]",
              "system" : "http://unitsofmeasure.org",
              "code" : "[arb'U]"
            }
          },
          {
            "code" : {
              "coding" : [
                {
                  "system" : "http://snomed.info/sct",
                  "code" : "118044009",
                  "display" : "Measurement of Human immunodeficiency virus 1 glycoprotein 41 antibody (procedure)"
                }
              ]
            },
            "valueQuantity" : {
              "value" : 0.5,
              "unit" : "[arb'U]",
              "system" : "http://unitsofmeasure.org",
              "code" : "[arb'U]"
            }
          },
          {
            "code" : {
              "coding" : [
                {
                  "system" : "http://snomed.info/sct",
                  "code" : "118052007",
                  "display" : "Measurement of Human immunodeficiency virus 1 protein 31 antibody (procedure)"
                }
              ]
            },
            "valueQuantity" : {
              "value" : 0,
              "unit" : "[arb'U]",
              "system" : "http://unitsofmeasure.org",
              "code" : "[arb'U]"
            }
          },
          {
            "code" : {
              "coding" : [
                {
                  "system" : "http://snomed.info/sct",
                  "code" : "117749009",
                  "display" : "Measurement of Human immunodeficiency virus 1 protein 24 antibody (procedure)"
                }
              ]
            },
            "valueQuantity" : {
              "value" : 2,
              "unit" : "[arb'U]",
              "system" : "http://unitsofmeasure.org",
              "code" : "[arb'U]"
            }
          },
          {
            "code" : {
              "coding" : [
                {
                  "system" : "http://snomed.info/sct",
                  "code" : "118047002",
                  "display" : "Measurement of Human immunodeficiency virus 1 protein 17 antibody (procedure)"
                }
              ]
            },
            "valueQuantity" : {
              "value" : 3,
              "unit" : "[arb'U]",
              "system" : "http://unitsofmeasure.org",
              "code" : "[arb'U]"
            }
          },
          {
            "code" : {
              "coding" : [
                {
                  "system" : "http://snomed.info/sct",
                  "code" : "118062000",
                  "display" : "Measurement of Human immunodeficiency virus 2 glycoprotein 105 antibody (procedure)"
                }
              ]
            },
            "valueQuantity" : {
              "value" : 0,
              "unit" : "[arb'U]",
              "system" : "http://unitsofmeasure.org",
              "code" : "[arb'U]"
            }
          },
          {
            "code" : {
              "coding" : [
                {
                  "system" : "http://snomed.info/sct",
                  "code" : "118067006",
                  "display" : "Measurement of Human immunodeficiency virus 2 glycoprotein 36 antibody (procedure)"
                }
              ]
            },
            "valueQuantity" : {
              "value" : 4,
              "unit" : "[arb'U]",
              "system" : "http://unitsofmeasure.org",
              "code" : "[arb'U]"
            }
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Specimen/66Spec-HivRecency",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "66Spec-HivRecency",
        "subject" : {
          "reference" : "Patient/66Pat"
        },
        "collection" : {
          "collectedDateTime" : "2025-03-15T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/ServiceRequest/66SR-HivRecency",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "66SR-HivRecency",
        "identifier" : [
          {
            "value" : "36500923675"
          }
        ],
        "status" : "completed",
        "intent" : "order",
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "77685-6",
              "display" : "HIV 1 and 2 IgG Ab [Identifier] in Serum or Plasma by Immunoblot"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/66Pat"
        },
        "requester" : {
          "reference" : "PractitionerRole/PR-PeterHauser"
        },
        "specimen" : [
          {
            "reference" : "Specimen/66Spec-HivRecency"
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
