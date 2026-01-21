# 29Doc - Rubella - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **29Doc - Rubella**

## Example Bundle: 29Doc - Rubella



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "29Doc-Rubella",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:3401332d-6012-443f-9690-9331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-09-05T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:55bafd86-696b-44cc-853c-621e85e34a47",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "55bafd86-696b-44cc-853c-621e85e34a47",
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
          "reference" : "urn:uuid:66d17c6d-5b10-40c9-a2ef-c6aa78577aba"
        },
        "date" : "2024-09-05T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:a95ea4e2-a7ce-48ef-bd5f-5a90e1c8e285"
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
                "reference" : "urn:uuid:f57d97fa-c151-47ca-a82f-3c8423b3ca28"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:66d17c6d-5b10-40c9-a2ef-c6aa78577aba",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "66d17c6d-5b10-40c9-a2ef-c6aa78577aba",
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
      "fullUrl" : "urn:uuid:a95ea4e2-a7ce-48ef-bd5f-5a90e1c8e285",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "a95ea4e2-a7ce-48ef-bd5f-5a90e1c8e285",
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
      "fullUrl" : "urn:uuid:f57d97fa-c151-47ca-a82f-3c8423b3ca28",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "f57d97fa-c151-47ca-a82f-3c8423b3ca28",
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
              "code" : "20458-6"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:66d17c6d-5b10-40c9-a2ef-c6aa78577aba"
        },
        "effectiveDateTime" : "2024-07-25T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:a95ea4e2-a7ce-48ef-bd5f-5a90e1c8e285"
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
                "system" : "http://snomed.info/sct",
                "code" : "1290194006"
              }
            ]
          }
        ],
        "specimen" : {
          "reference" : "urn:uuid:f00577b7-1e74-43cf-9830-ca72bdb2e619"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:84417eb5-1ba3-4406-9504-12d83d7e719c",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "84417eb5-1ba3-4406-9504-12d83d7e719c",
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
      "fullUrl" : "urn:uuid:67319183-8fcc-40db-b88c-e7defd45c20d",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "67319183-8fcc-40db-b88c-e7defd45c20d",
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
      "fullUrl" : "urn:uuid:433afbf5-bf19-4993-8809-24adaab4193b",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "433afbf5-bf19-4993-8809-24adaab4193b",
        "practitioner" : {
          "reference" : "urn:uuid:84417eb5-1ba3-4406-9504-12d83d7e719c"
        },
        "organization" : {
          "reference" : "urn:uuid:67319183-8fcc-40db-b88c-e7defd45c20d"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:f00577b7-1e74-43cf-9830-ca72bdb2e619",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "f00577b7-1e74-43cf-9830-ca72bdb2e619",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:66d17c6d-5b10-40c9-a2ef-c6aa78577aba"
        },
        "collection" : {
          "collectedDateTime" : "2024-08-22T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:1736e921-e851-49e9-ac2e-d66ecf8a2485",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "1736e921-e851-49e9-ac2e-d66ecf8a2485",
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
              "code" : "20458-6"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:66d17c6d-5b10-40c9-a2ef-c6aa78577aba"
        },
        "requester" : {
          "reference" : "urn:uuid:433afbf5-bf19-4993-8809-24adaab4193b"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:f00577b7-1e74-43cf-9830-ca72bdb2e619"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:b0ee488e-8fc6-43d3-96ed-3d7edcdcee54",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "b0ee488e-8fc6-43d3-96ed-3d7edcdcee54",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:55bafd86-696b-44cc-853c-621e85e34a47"
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
            "reference" : "urn:uuid:1736e921-e851-49e9-ac2e-d66ecf8a2485"
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
          "reference" : "urn:uuid:66d17c6d-5b10-40c9-a2ef-c6aa78577aba"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:a95ea4e2-a7ce-48ef-bd5f-5a90e1c8e285"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:f00577b7-1e74-43cf-9830-ca72bdb2e619"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:f57d97fa-c151-47ca-a82f-3c8423b3ca28"
          }
        ]
      }
    }
  ]
}

```
