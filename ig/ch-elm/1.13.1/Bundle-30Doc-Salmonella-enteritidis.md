# 30Doc - Salmonella enteritidis - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **30Doc - Salmonella enteritidis**

## Example Bundle: 30Doc - Salmonella enteritidis



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "30Doc-Salmonella-enteritidis",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:3401332d-6012-443f-9690-9331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-09-05T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:4362a322-4009-4914-90d1-65e0c0677237",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "4362a322-4009-4914-90d1-65e0c0677237",
        "language" : "de-CH",
        "identifier" : {
          "system" : "urn:ietf:rfc:3986",
          "value" : "urn:uuid:3401332d-6012-443f-9690-9331adb23aab"
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
          "reference" : "urn:uuid:01b39aeb-0390-45c0-a7a6-dfe019987140"
        },
        "date" : "2024-09-05T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:16809d1e-e56c-49de-9db3-380a73ca0f3c"
          }
        ],
        "title" : "Laborbericht vom 2.9.2024",
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
                "reference" : "urn:uuid:c27cefca-2583-4042-998c-585ba35b0d86"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:01b39aeb-0390-45c0-a7a6-dfe019987140",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "01b39aeb-0390-45c0-a7a6-dfe019987140",
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
      "fullUrl" : "urn:uuid:16809d1e-e56c-49de-9db3-380a73ca0f3c",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "16809d1e-e56c-49de-9db3-380a73ca0f3c",
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
      "fullUrl" : "urn:uuid:c27cefca-2583-4042-998c-585ba35b0d86",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "c27cefca-2583-4042-998c-585ba35b0d86",
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
              "code" : "49612-5"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:01b39aeb-0390-45c0-a7a6-dfe019987140"
        },
        "effectiveDateTime" : "2024-07-25T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:16809d1e-e56c-49de-9db3-380a73ca0f3c"
          }
        ],
        "valueCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "73525009"
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
          "reference" : "urn:uuid:dafc4820-449d-4858-af2b-60de006ca786"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:d5f2be8d-1764-42c7-bebb-db88f9fe5653",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "d5f2be8d-1764-42c7-bebb-db88f9fe5653",
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
      "fullUrl" : "urn:uuid:5f099bbb-b2d0-48af-be9e-95eafa922b04",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "5f099bbb-b2d0-48af-be9e-95eafa922b04",
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
      "fullUrl" : "urn:uuid:24466e89-7c4d-4ba3-a08d-8f8d5716e15d",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "24466e89-7c4d-4ba3-a08d-8f8d5716e15d",
        "practitioner" : {
          "reference" : "urn:uuid:d5f2be8d-1764-42c7-bebb-db88f9fe5653"
        },
        "organization" : {
          "reference" : "urn:uuid:5f099bbb-b2d0-48af-be9e-95eafa922b04"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:dafc4820-449d-4858-af2b-60de006ca786",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "dafc4820-449d-4858-af2b-60de006ca786",
        "subject" : {
          "reference" : "urn:uuid:01b39aeb-0390-45c0-a7a6-dfe019987140"
        },
        "collection" : {
          "collectedDateTime" : "2024-08-22T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:cb61c412-20d7-4ede-a433-92da0b295821",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "cb61c412-20d7-4ede-a433-92da0b295821",
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
              "code" : "49612-5"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:01b39aeb-0390-45c0-a7a6-dfe019987140"
        },
        "requester" : {
          "reference" : "urn:uuid:24466e89-7c4d-4ba3-a08d-8f8d5716e15d"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:dafc4820-449d-4858-af2b-60de006ca786"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:a584090c-66c8-43e4-9dc7-37f497089a02",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "a584090c-66c8-43e4-9dc7-37f497089a02",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:4362a322-4009-4914-90d1-65e0c0677237"
            }
          }
        ],
        "identifier" : [
          {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:3401332d-6012-443f-9690-9331adb23aab"
          }
        ],
        "basedOn" : [
          {
            "reference" : "urn:uuid:cb61c412-20d7-4ede-a433-92da0b295821"
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
          "reference" : "urn:uuid:01b39aeb-0390-45c0-a7a6-dfe019987140"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:16809d1e-e56c-49de-9db3-380a73ca0f3c"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:dafc4820-449d-4858-af2b-60de006ca786"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:c27cefca-2583-4042-998c-585ba35b0d86"
          }
        ]
      }
    }
  ]
}

```
