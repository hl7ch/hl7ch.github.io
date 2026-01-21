# 26Doc - Hepatite A - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **26Doc - Hepatite A**

## Example Bundle: 26Doc - Hepatite A



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "26Doc-HepatiteA",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:3401332d-6012-443f-9690-9331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-09-05T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:9cbf31c0-eea5-4093-be88-edfd79b0f358",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "9cbf31c0-eea5-4093-be88-edfd79b0f358",
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
          "reference" : "urn:uuid:830650ed-67d5-43f4-937d-a81d6a9664dc"
        },
        "date" : "2024-09-05T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:9ee58e32-3ed0-49ab-9ba5-7a4aa8882a79"
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
                "reference" : "urn:uuid:88168d6a-6ea9-4683-96af-288279811539"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:830650ed-67d5-43f4-937d-a81d6a9664dc",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "830650ed-67d5-43f4-937d-a81d6a9664dc",
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
      "fullUrl" : "urn:uuid:9ee58e32-3ed0-49ab-9ba5-7a4aa8882a79",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "9ee58e32-3ed0-49ab-9ba5-7a4aa8882a79",
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
      "fullUrl" : "urn:uuid:88168d6a-6ea9-4683-96af-288279811539",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "88168d6a-6ea9-4683-96af-288279811539",
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
              "code" : "22314-9"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:830650ed-67d5-43f4-937d-a81d6a9664dc"
        },
        "effectiveDateTime" : "2024-07-25T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:9ee58e32-3ed0-49ab-9ba5-7a4aa8882a79"
          }
        ],
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
        ],
        "specimen" : {
          "reference" : "urn:uuid:19383192-29f5-4a23-95a5-149f78d4efed"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:e2bc9e91-dfbe-4255-8c3b-c7ba0557a17b",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "e2bc9e91-dfbe-4255-8c3b-c7ba0557a17b",
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
      "fullUrl" : "urn:uuid:4dcfb2fd-9fe4-48b2-a719-59525186a64f",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "4dcfb2fd-9fe4-48b2-a719-59525186a64f",
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
      "fullUrl" : "urn:uuid:050ef776-0e95-4070-9989-f40e712d9cb1",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "050ef776-0e95-4070-9989-f40e712d9cb1",
        "practitioner" : {
          "reference" : "urn:uuid:e2bc9e91-dfbe-4255-8c3b-c7ba0557a17b"
        },
        "organization" : {
          "reference" : "urn:uuid:4dcfb2fd-9fe4-48b2-a719-59525186a64f"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:19383192-29f5-4a23-95a5-149f78d4efed",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "19383192-29f5-4a23-95a5-149f78d4efed",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:830650ed-67d5-43f4-937d-a81d6a9664dc"
        },
        "collection" : {
          "collectedDateTime" : "2024-08-22T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:c2b11250-ca1b-4a52-84f5-1d7e4620686d",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "c2b11250-ca1b-4a52-84f5-1d7e4620686d",
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
              "code" : "22314-9"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:830650ed-67d5-43f4-937d-a81d6a9664dc"
        },
        "requester" : {
          "reference" : "urn:uuid:050ef776-0e95-4070-9989-f40e712d9cb1"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:19383192-29f5-4a23-95a5-149f78d4efed"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:5a34f3ae-3f19-4dfe-9344-444e183a9299",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "5a34f3ae-3f19-4dfe-9344-444e183a9299",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:9cbf31c0-eea5-4093-be88-edfd79b0f358"
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
            "reference" : "urn:uuid:c2b11250-ca1b-4a52-84f5-1d7e4620686d"
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
          "reference" : "urn:uuid:830650ed-67d5-43f4-937d-a81d6a9664dc"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:9ee58e32-3ed0-49ab-9ba5-7a4aa8882a79"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:19383192-29f5-4a23-95a5-149f78d4efed"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:88168d6a-6ea9-4683-96af-288279811539"
          }
        ]
      }
    }
  ]
}

```
