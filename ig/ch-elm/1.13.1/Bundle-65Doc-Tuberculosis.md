# 65Doc-Tuberculosis - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **65Doc-Tuberculosis**

## Example Bundle: 65Doc-Tuberculosis



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "65Doc-Tuberculosis",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:b9a8b9ee-9157-44af-b46e-8c683c69d6bd"
  },
  "type" : "document",
  "timestamp" : "2025-03-17T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:44459135-c3ce-4447-9f69-50b6457f8f4f",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "44459135-c3ce-4447-9f69-50b6457f8f4f",
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
          "reference" : "urn:uuid:89810214-e9af-4211-9ba7-57a9e77e509e"
        },
        "date" : "2025-03-17T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:e0a5785d-b4e1-4600-8bbe-ae599013a5a7"
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
                  "code" : "18725-2",
                  "display" : "Microbiology studies (set)"
                }
              ]
            },
            "entry" : [
              {
                "reference" : "urn:uuid:b7298a56-3057-4b91-ab90-2994bb6857dc"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:89810214-e9af-4211-9ba7-57a9e77e509e",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "89810214-e9af-4211-9ba7-57a9e77e509e",
        "identifier" : [
          {
            "system" : "urn:oid:2.16.756.5.32",
            "value" : "7561234567897"
          }
        ],
        "name" : [
          {
            "family" : "Tanner",
            "given" : ["Ernst Karl"]
          }
        ],
        "gender" : "male",
        "birthDate" : "1966-08-22",
        "address" : [
          {
            "use" : "home",
            "line" : ["Tannenstrasse 10a"],
            "_line" : [
              {
                "extension" : [
                  {
                    "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-streetName",
                    "valueString" : "Tannenstrasse"
                  },
                  {
                    "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-houseNumber",
                    "valueString" : "10a"
                  }
                ]
              }
            ],
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
      "fullUrl" : "urn:uuid:e0a5785d-b4e1-4600-8bbe-ae599013a5a7",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "e0a5785d-b4e1-4600-8bbe-ae599013a5a7",
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
      "fullUrl" : "urn:uuid:b7298a56-3057-4b91-ab90-2994bb6857dc",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "b7298a56-3057-4b91-ab90-2994bb6857dc",
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
              "code" : "9823-6"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:89810214-e9af-4211-9ba7-57a9e77e509e"
        },
        "effectiveDateTime" : "2025-01-19T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:e0a5785d-b4e1-4600-8bbe-ae599013a5a7"
          }
        ],
        "valueCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "51320008"
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
          "reference" : "urn:uuid:16c44816-dfc2-43c2-a745-e4e2831bf260"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:4d56d4a5-03db-476e-8c1b-ec0a258e75ed",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "4d56d4a5-03db-476e-8c1b-ec0a258e75ed",
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
      "fullUrl" : "urn:uuid:608d8b75-f359-4a7f-9f83-16dd19cb18fc",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "608d8b75-f359-4a7f-9f83-16dd19cb18fc",
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
      "fullUrl" : "urn:uuid:b6f8bf39-a345-4cf3-9c80-83f5a48bfa0f",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "b6f8bf39-a345-4cf3-9c80-83f5a48bfa0f",
        "practitioner" : {
          "reference" : "urn:uuid:4d56d4a5-03db-476e-8c1b-ec0a258e75ed"
        },
        "organization" : {
          "reference" : "urn:uuid:608d8b75-f359-4a7f-9f83-16dd19cb18fc"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:16c44816-dfc2-43c2-a745-e4e2831bf260",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "16c44816-dfc2-43c2-a745-e4e2831bf260",
        "subject" : {
          "reference" : "urn:uuid:89810214-e9af-4211-9ba7-57a9e77e509e"
        },
        "collection" : {
          "collectedDateTime" : "2025-03-15T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:3cbae724-89a1-4599-a77c-67a0e6a469be",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "3cbae724-89a1-4599-a77c-67a0e6a469be",
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
              "code" : "9823-6"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:89810214-e9af-4211-9ba7-57a9e77e509e"
        },
        "requester" : {
          "reference" : "urn:uuid:b6f8bf39-a345-4cf3-9c80-83f5a48bfa0f"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:16c44816-dfc2-43c2-a745-e4e2831bf260"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:ef9dcad2-5a10-4530-98d6-a9efb5635a76",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "ef9dcad2-5a10-4530-98d6-a9efb5635a76",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:44459135-c3ce-4447-9f69-50b6457f8f4f"
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
            "reference" : "urn:uuid:3cbae724-89a1-4599-a77c-67a0e6a469be"
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
          "reference" : "urn:uuid:89810214-e9af-4211-9ba7-57a9e77e509e"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:e0a5785d-b4e1-4600-8bbe-ae599013a5a7"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:16c44816-dfc2-43c2-a745-e4e2831bf260"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:b7298a56-3057-4b91-ab90-2994bb6857dc"
          }
        ]
      }
    }
  ]
}

```
