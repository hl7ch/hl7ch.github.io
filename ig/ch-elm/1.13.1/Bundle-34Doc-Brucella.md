# 34Doc - Brucella - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **34Doc - Brucella**

## Example Bundle: 34Doc - Brucella



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "34Doc-Brucella",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:ac01252d-6012-443f-9690-9291adb23433"
  },
  "type" : "document",
  "timestamp" : "2024-10-14T11:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:9e7009a4-a28c-423a-98a1-98d70ab0901c",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "9e7009a4-a28c-423a-98a1-98d70ab0901c",
        "language" : "de-CH",
        "identifier" : {
          "system" : "urn:ietf:rfc:3986",
          "value" : "urn:uuid:ac01252d-6012-443f-9690-9291adb23433"
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
          "reference" : "urn:uuid:05d4086f-5dcc-44de-8fa8-253ff1550c60"
        },
        "date" : "2024-10-14T11:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:41196c21-2d76-4a97-84fb-43d986b41aee"
          }
        ],
        "title" : "Laborbericht vom 14.10.92024",
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
                "reference" : "urn:uuid:0290618b-29e2-40fa-a422-d35595f06112"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:05d4086f-5dcc-44de-8fa8-253ff1550c60",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "05d4086f-5dcc-44de-8fa8-253ff1550c60",
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
      "fullUrl" : "urn:uuid:41196c21-2d76-4a97-84fb-43d986b41aee",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "41196c21-2d76-4a97-84fb-43d986b41aee",
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
      "fullUrl" : "urn:uuid:0290618b-29e2-40fa-a422-d35595f06112",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "0290618b-29e2-40fa-a422-d35595f06112",
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
              "code" : "101802-7"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:05d4086f-5dcc-44de-8fa8-253ff1550c60"
        },
        "effectiveDateTime" : "2024-10-12T09:15:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:41196c21-2d76-4a97-84fb-43d986b41aee"
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
          "reference" : "urn:uuid:37c8bc0f-3d85-44a5-a4a3-498fafd2abf7"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:039c5a56-4aa4-4ea0-8b1c-a7b2872df0c1",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "039c5a56-4aa4-4ea0-8b1c-a7b2872df0c1",
        "identifier" : [
          {
            "system" : "urn:oid:2.51.1.3",
            "value" : "7601000234438"
          }
        ],
        "name" : [
          {
            "family" : "Giacometti",
            "given" : ["Monika"]
          }
        ],
        "telecom" : [
          {
            "system" : "phone",
            "value" : "+41 79 111 44 55"
          },
          {
            "system" : "email",
            "value" : "m.giacometti@ks-abc.ch"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:5fe5b34e-f702-40d8-a05e-f6b7cfd46423",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "5fe5b34e-f702-40d8-a05e-f6b7cfd46423",
        "identifier" : [
          {
            "system" : "urn:oid:2.16.756.5.45",
            "value" : "A99684215"
          }
        ],
        "name" : "Kantonsspital ABC",
        "address" : [
          {
            "line" : ["Aortastrasse 22"],
            "_line" : [
              {
                "extension" : [
                  {
                    "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-streetName",
                    "valueString" : "Aortastrasse"
                  },
                  {
                    "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-houseNumber",
                    "valueString" : "22"
                  },
                  {
                    "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-postBox",
                    "valueString" : "Postfach 18"
                  }
                ]
              }
            ],
            "city" : "Bern",
            "postalCode" : "3000"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:90595985-fa89-4eb9-9c40-14e1b11741e0",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "90595985-fa89-4eb9-9c40-14e1b11741e0",
        "practitioner" : {
          "reference" : "urn:uuid:039c5a56-4aa4-4ea0-8b1c-a7b2872df0c1"
        },
        "organization" : {
          "reference" : "urn:uuid:5fe5b34e-f702-40d8-a05e-f6b7cfd46423"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:37c8bc0f-3d85-44a5-a4a3-498fafd2abf7",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "37c8bc0f-3d85-44a5-a4a3-498fafd2abf7",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:05d4086f-5dcc-44de-8fa8-253ff1550c60"
        },
        "collection" : {
          "collectedDateTime" : "2024-10-10T09:15:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:483a79d7-cc90-40a2-aad9-a418b2ffde16",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "483a79d7-cc90-40a2-aad9-a418b2ffde16",
        "identifier" : [
          {
            "value" : "50002755"
          }
        ],
        "status" : "completed",
        "intent" : "order",
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "101802-7"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:05d4086f-5dcc-44de-8fa8-253ff1550c60"
        },
        "requester" : {
          "reference" : "urn:uuid:90595985-fa89-4eb9-9c40-14e1b11741e0"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:37c8bc0f-3d85-44a5-a4a3-498fafd2abf7"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:3dc4969f-9932-4b81-bd8a-cc928ced8054",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "3dc4969f-9932-4b81-bd8a-cc928ced8054",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:9e7009a4-a28c-423a-98a1-98d70ab0901c"
            }
          }
        ],
        "identifier" : [
          {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:ac01252d-6012-443f-9690-9291adb23433"
          }
        ],
        "basedOn" : [
          {
            "reference" : "urn:uuid:483a79d7-cc90-40a2-aad9-a418b2ffde16"
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
          "reference" : "urn:uuid:05d4086f-5dcc-44de-8fa8-253ff1550c60"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:41196c21-2d76-4a97-84fb-43d986b41aee"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:37c8bc0f-3d85-44a5-a4a3-498fafd2abf7"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:0290618b-29e2-40fa-a422-d35595f06112"
          }
        ]
      }
    }
  ]
}

```
