# 7Doc - SARS-CoV-2 - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **7Doc - SARS-CoV-2**

## Example Bundle: 7Doc - SARS-CoV-2

**Document Details**

**Document Subject**

Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567866)

-------

-------

**Document Content**

## Résultats de l'analyse microbiologique

-------

## Additional Resources Included in Document

-------

Entry 2 - fullUrl = http://test.fhir.ch/r4/DiagnosticReport/7DR-SARSCoV2

Resource DiagnosticReport:

> 

## Laboratory report 

| | |
| :--- | :--- |
| Subject | Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567866) |
| Performer | [Organization SanLab](Organization-1Org-Labor.md) |
| Identifier | [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.5.0/NamingSystem-uri.html)/urn:uuid:1901332d-6012-443f-9690-9291adb2aa34 |

**Report Details**

* **Code**: [SARS-CoV-2 (COVID-19) RNA [Presence] in Respiratory system specimen by NAA with probe detection](Bundle-7Doc-SARSCoV2.md#Observation_7Obs-SARSCoV2)
  * **Value**: Positive
  * **Flags**: Final,Positive
  * **When For**: 2023-09-12 07:40:00+0200


-------

Entry 3 - fullUrl = http://test.fhir.ch/r4/Patient/Pat-003

Resource Patient:

> Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567866)
-------

-------

Entry 4 - fullUrl = http://test.fhir.ch/r4/Observation/7Obs-SARSCoV2

Resource Observation:

> **status**: Final**category**:Laboratory**code**:SARS-CoV-2 (COVID-19) RNA [Presence] in Respiratory system specimen by NAA with probe detection**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567866)](Patient-Pat-003.md)**effective**: 2023-09-12 07:40:00+0200**performer**:[Organization SanLab](Organization-1Org-Labor.md)**value**:Positive**interpretation**:Positive**specimen**:[Specimen](Bundle-7Doc-SARSCoV2.md#Specimen_7Spec-Specimen)

-------

Entry 5 - fullUrl = http://test.fhir.ch/r4/Specimen/7Spec-Specimen

Resource Specimen:

> **subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567866)](Patient-Pat-003.md)

### Collections

| | |
| :--- | :--- |
| - | **Collected[x]** |
| * | 2023-09-11 |


-------

Entry 6 - fullUrl = http://test.fhir.ch/r4/ServiceRequest/7SR-Order

Resource ServiceRequest:

> **identifier**: 28541215633**status**: Completed**intent**: Order**code**: No display for ServiceRequest.code (concept: SARS-CoV-2 (COVID-19) RNA [Presence] in Respiratory specimen by NAA with probe detection)**subject**:[Antoine Dupont Female, DoB: 1981-02-07 ( urn:oid:2.16.756.5.32#7561234567866)](Patient-Pat-003.md)**requester**:[PractitionerRole](PractitionerRole-PR-JeanneMoreau.md)**specimen**:[Specimen](Bundle-7Doc-SARSCoV2.md#Specimen_7Spec-Specimen)

-------

Entry 7 - fullUrl = http://test.fhir.ch/r4/Organization/1Org-Labor

Resource Organization:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601002331470**name**: SanLab

-------

Entry 8 - fullUrl = http://test.fhir.ch/r4/PractitionerRole/PR-JeanneMoreau

Resource PractitionerRole:

> **practitioner**:[Practitioner Jeanne Moreau](Practitioner-Pract-JeanneMoreau.md)**organization**:[Organization Hôpital régional soleil](Organization-Org-JeanneMoreau.md)

-------

Entry 9 - fullUrl = http://test.fhir.ch/r4/Practitioner/Pract-JeanneMoreau

Resource Practitioner:

> **identifier**:[GLN](https://www.gs1.org/standards/id-keys/gln)/7601000121219**name**: Jeanne Moreau**telecom**:[jm@hr-soleil.ch](mailto:jm@hr-soleil.ch),[+41 79 111 88 99](tel:+41791118899)

-------

Entry 10 - fullUrl = http://test.fhir.ch/r4/Organization/Org-JeanneMoreau

Resource Organization:

> **CH ELM Extension: Department**: Médecine interne**identifier**:`urn:oid:2.16.756.5.45`/A99086638**name**: Hôpital régional soleil

### Contacts

| | |
| :--- | :--- |
| - | **Address** |
| * | Rue des alpes 35 Genève 1202 |




## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "7Doc-SARSCoV2",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:1901332d-6012-443f-9690-9291adb2aa34"
  },
  "type" : "document",
  "timestamp" : "2023-09-12T08:30:00+02:00",
  "entry" : [
    {
      "fullUrl" : "http://test.fhir.ch/r4/Composition/7Comp-SARSCoV2",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "7Comp-SARSCoV2",
        "language" : "fr-CH",
        "identifier" : {
          "system" : "urn:ietf:rfc:3986",
          "value" : "urn:uuid:1901332d-6012-443f-9690-9291adb2aa34"
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
        "date" : "2023-09-12T08:30:00+02:00",
        "author" : [
          {
            "reference" : "Organization/1Org-Labor"
          }
        ],
        "title" : "Rapport de laboratoire du 12.09.2023",
        "section" : [
          {
            "title" : "Résultats de l'analyse microbiologique",
            "code" : {
              "coding" : [
                {
                  "system" : "http://loinc.org",
                  "code" : "18725-2"
                }
              ]
            },
            "entry" : [
              {
                "reference" : "Observation/7Obs-SARSCoV2"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/DiagnosticReport/7DR-SARSCoV2",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "7DR-SARSCoV2",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "Composition/7Comp-SARSCoV2"
            }
          }
        ],
        "identifier" : [
          {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:1901332d-6012-443f-9690-9291adb2aa34"
          }
        ],
        "basedOn" : [
          {
            "reference" : "ServiceRequest/7SR-Order"
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
            "reference" : "Specimen/7Spec-Specimen"
          }
        ],
        "result" : [
          {
            "reference" : "Observation/7Obs-SARSCoV2"
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
      "fullUrl" : "http://test.fhir.ch/r4/Observation/7Obs-SARSCoV2",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "7Obs-SARSCoV2",
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
              "code" : "94500-6",
              "display" : "SARS-CoV-2 (COVID-19) RNA [Presence] in Respiratory system specimen by NAA with probe detection"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/Pat-003"
        },
        "effectiveDateTime" : "2023-09-12T07:40:00+02:00",
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
          "reference" : "Specimen/7Spec-Specimen"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Specimen/7Spec-Specimen",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "7Spec-Specimen",
        "subject" : {
          "reference" : "Patient/Pat-003"
        },
        "collection" : {
          "collectedDateTime" : "2023-09-11"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/ServiceRequest/7SR-Order",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "7SR-Order",
        "identifier" : [
          {
            "value" : "28541215633"
          }
        ],
        "status" : "completed",
        "intent" : "order",
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "94500-6",
              "display" : "SARS-CoV-2 (COVID-19) RNA [Presence] in Respiratory specimen by NAA with probe detection"
            }
          ]
        },
        "subject" : {
          "reference" : "Patient/Pat-003"
        },
        "requester" : {
          "reference" : "PractitionerRole/PR-JeanneMoreau"
        },
        "specimen" : [
          {
            "reference" : "Specimen/7Spec-Specimen"
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
      "fullUrl" : "http://test.fhir.ch/r4/PractitionerRole/PR-JeanneMoreau",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "PR-JeanneMoreau",
        "practitioner" : {
          "reference" : "Practitioner/Pract-JeanneMoreau"
        },
        "organization" : {
          "reference" : "Organization/Org-JeanneMoreau"
        }
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Practitioner/Pract-JeanneMoreau",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "Pract-JeanneMoreau",
        "identifier" : [
          {
            "system" : "urn:oid:2.51.1.3",
            "value" : "7601000121219"
          }
        ],
        "name" : [
          {
            "family" : "Moreau",
            "given" : ["Jeanne"]
          }
        ],
        "telecom" : [
          {
            "system" : "email",
            "value" : "jm@hr-soleil.ch"
          },
          {
            "system" : "phone",
            "value" : "+41 79 111 88 99"
          }
        ]
      }
    },
    {
      "fullUrl" : "http://test.fhir.ch/r4/Organization/Org-JeanneMoreau",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "Org-JeanneMoreau",
        "extension" : [
          {
            "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-ext-department",
            "valueString" : "Médecine interne"
          }
        ],
        "identifier" : [
          {
            "system" : "urn:oid:2.16.756.5.45",
            "value" : "A99086638"
          }
        ],
        "name" : "Hôpital régional soleil",
        "address" : [
          {
            "line" : ["Rue des alpes 35"],
            "_line" : [
              {
                "extension" : [
                  {
                    "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-streetName",
                    "valueString" : "Rue des alpes"
                  },
                  {
                    "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-houseNumber",
                    "valueString" : "35"
                  }
                ]
              }
            ],
            "city" : "Genève",
            "postalCode" : "1202"
          }
        ]
      }
    }
  ]
}

```
