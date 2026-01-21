# 57Doc - West Nile - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **57Doc - West Nile**

## Example Bundle: 57Doc - West Nile



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "57Doc-West-Nile",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:6401332d-6012-443f-9690-9331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-09-05T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:71483cc8-3f36-4f11-9e41-5347bc125188",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "71483cc8-3f36-4f11-9e41-5347bc125188",
        "language" : "de-CH",
        "identifier" : {
          "system" : "urn:ietf:rfc:3986",
          "value" : "urn:uuid:6401332d-6012-443f-9690-9331adb23aab"
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
          "reference" : "urn:uuid:cd46692b-979e-490b-9209-b12ee80d3343"
        },
        "date" : "2024-09-05T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:3eb8dba9-dbbf-4692-8445-1e7f6269198e"
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
                "reference" : "urn:uuid:ae07aeeb-6e01-426c-84c3-1e5a5f98288f"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:cd46692b-979e-490b-9209-b12ee80d3343",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "cd46692b-979e-490b-9209-b12ee80d3343",
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
      "fullUrl" : "urn:uuid:3eb8dba9-dbbf-4692-8445-1e7f6269198e",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "3eb8dba9-dbbf-4692-8445-1e7f6269198e",
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
      "fullUrl" : "urn:uuid:ae07aeeb-6e01-426c-84c3-1e5a5f98288f",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "ae07aeeb-6e01-426c-84c3-1e5a5f98288f",
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
              "code" : "6584-7"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:cd46692b-979e-490b-9209-b12ee80d3343"
        },
        "effectiveDateTime" : "2024-08-28T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:3eb8dba9-dbbf-4692-8445-1e7f6269198e"
          }
        ],
        "valueCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "57311007"
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
          "reference" : "urn:uuid:1703a3dc-84e6-4f7d-a4c8-4062a8bc3558"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:a14fd062-4d82-4857-ad6a-a5d4568a8388",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "a14fd062-4d82-4857-ad6a-a5d4568a8388",
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
      "fullUrl" : "urn:uuid:3a1c3e77-2d3c-49d0-a098-339eca8bc2b5",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "3a1c3e77-2d3c-49d0-a098-339eca8bc2b5",
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
      "fullUrl" : "urn:uuid:5997abdc-b1d2-445c-a708-de89331cb8d3",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "5997abdc-b1d2-445c-a708-de89331cb8d3",
        "practitioner" : {
          "reference" : "urn:uuid:a14fd062-4d82-4857-ad6a-a5d4568a8388"
        },
        "organization" : {
          "reference" : "urn:uuid:3a1c3e77-2d3c-49d0-a098-339eca8bc2b5"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:1703a3dc-84e6-4f7d-a4c8-4062a8bc3558",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "1703a3dc-84e6-4f7d-a4c8-4062a8bc3558",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:cd46692b-979e-490b-9209-b12ee80d3343"
        },
        "collection" : {
          "collectedDateTime" : "2024-08-26T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:2b1bd88a-5b86-4178-aa22-39d19bf2c6b9",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "2b1bd88a-5b86-4178-aa22-39d19bf2c6b9",
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
              "code" : "6584-7"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:cd46692b-979e-490b-9209-b12ee80d3343"
        },
        "requester" : {
          "reference" : "urn:uuid:5997abdc-b1d2-445c-a708-de89331cb8d3"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:1703a3dc-84e6-4f7d-a4c8-4062a8bc3558"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:7a47a32a-e5c0-4e90-a242-69e734979179",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "7a47a32a-e5c0-4e90-a242-69e734979179",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:71483cc8-3f36-4f11-9e41-5347bc125188"
            }
          }
        ],
        "identifier" : [
          {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:6401332d-6012-443f-9690-9331adb23aab"
          }
        ],
        "basedOn" : [
          {
            "reference" : "urn:uuid:2b1bd88a-5b86-4178-aa22-39d19bf2c6b9"
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
          "reference" : "urn:uuid:cd46692b-979e-490b-9209-b12ee80d3343"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:3eb8dba9-dbbf-4692-8445-1e7f6269198e"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:1703a3dc-84e6-4f7d-a4c8-4062a8bc3558"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:ae07aeeb-6e01-426c-84c3-1e5a5f98288f"
          }
        ]
      }
    }
  ]
}

```
