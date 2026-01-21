# 28Doc - Listeria monocytogenes - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **28Doc - Listeria monocytogenes**

## Example Bundle: 28Doc - Listeria monocytogenes



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "28Doc-Listeria-monocytogenes",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:3401332d-6012-443f-9690-9331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-09-05T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:3eab28ef-8d12-4ec4-80e9-c9cc2d72d1f1",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "3eab28ef-8d12-4ec4-80e9-c9cc2d72d1f1",
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
          "reference" : "urn:uuid:57218ff9-f741-403c-9e34-c77ffed4b308"
        },
        "date" : "2024-09-05T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:cc3df2ff-b188-47f4-af0f-ef1ad742df44"
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
                "reference" : "urn:uuid:0ec7bd5b-889e-4742-8a78-babd58331d6b"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:57218ff9-f741-403c-9e34-c77ffed4b308",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "57218ff9-f741-403c-9e34-c77ffed4b308",
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
      "fullUrl" : "urn:uuid:cc3df2ff-b188-47f4-af0f-ef1ad742df44",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "cc3df2ff-b188-47f4-af0f-ef1ad742df44",
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
      "fullUrl" : "urn:uuid:0ec7bd5b-889e-4742-8a78-babd58331d6b",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "0ec7bd5b-889e-4742-8a78-babd58331d6b",
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
              "code" : "82184-3"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:57218ff9-f741-403c-9e34-c77ffed4b308"
        },
        "effectiveDateTime" : "2024-07-25T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:cc3df2ff-b188-47f4-af0f-ef1ad742df44"
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
          "reference" : "urn:uuid:df7cc77b-1456-4ab9-ab55-c515ba93facb"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:aadea2fc-4215-4dd4-93fd-213b71dcb681",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "aadea2fc-4215-4dd4-93fd-213b71dcb681",
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
      "fullUrl" : "urn:uuid:f3393d1d-d66b-45f7-807c-811dd778cdbc",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "f3393d1d-d66b-45f7-807c-811dd778cdbc",
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
      "fullUrl" : "urn:uuid:b6a54021-767c-4b5d-a072-4f245ea5b98c",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "b6a54021-767c-4b5d-a072-4f245ea5b98c",
        "practitioner" : {
          "reference" : "urn:uuid:aadea2fc-4215-4dd4-93fd-213b71dcb681"
        },
        "organization" : {
          "reference" : "urn:uuid:f3393d1d-d66b-45f7-807c-811dd778cdbc"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:df7cc77b-1456-4ab9-ab55-c515ba93facb",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "df7cc77b-1456-4ab9-ab55-c515ba93facb",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:57218ff9-f741-403c-9e34-c77ffed4b308"
        },
        "collection" : {
          "collectedDateTime" : "2024-08-22T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:14dc2c6d-1697-46de-90a2-5f8327739503",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "14dc2c6d-1697-46de-90a2-5f8327739503",
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
              "code" : "82184-3"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:57218ff9-f741-403c-9e34-c77ffed4b308"
        },
        "requester" : {
          "reference" : "urn:uuid:b6a54021-767c-4b5d-a072-4f245ea5b98c"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:df7cc77b-1456-4ab9-ab55-c515ba93facb"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:66c62457-104a-4a81-8fad-d76e6bbbf50d",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "66c62457-104a-4a81-8fad-d76e6bbbf50d",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:3eab28ef-8d12-4ec4-80e9-c9cc2d72d1f1"
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
            "reference" : "urn:uuid:14dc2c6d-1697-46de-90a2-5f8327739503"
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
          "reference" : "urn:uuid:57218ff9-f741-403c-9e34-c77ffed4b308"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:cc3df2ff-b188-47f4-af0f-ef1ad742df44"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:df7cc77b-1456-4ab9-ab55-c515ba93facb"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:0ec7bd5b-889e-4742-8a78-babd58331d6b"
          }
        ]
      }
    }
  ]
}

```
