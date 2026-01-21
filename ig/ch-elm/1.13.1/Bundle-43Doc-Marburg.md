# 43Doc - Marburg - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **43Doc - Marburg**

## Example Bundle: 43Doc - Marburg



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "43Doc-Marburg",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-10-20T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:325f5cf8-4172-4e86-ab52-4e4ed42e97ea",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "325f5cf8-4172-4e86-ab52-4e4ed42e97ea",
        "language" : "de-CH",
        "identifier" : {
          "system" : "urn:ietf:rfc:3986",
          "value" : "urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab"
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
          "reference" : "urn:uuid:815a98f6-5ec6-476e-a03a-feafc542c15e"
        },
        "date" : "2024-10-20T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:46170a0b-deda-471b-bd8b-0927dba26fb9"
          }
        ],
        "title" : "Laborbericht vom 20.10.2024",
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
                "reference" : "urn:uuid:49be91f4-ad81-412d-843c-7121d7092813"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:815a98f6-5ec6-476e-a03a-feafc542c15e",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "815a98f6-5ec6-476e-a03a-feafc542c15e",
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
      "fullUrl" : "urn:uuid:46170a0b-deda-471b-bd8b-0927dba26fb9",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "46170a0b-deda-471b-bd8b-0927dba26fb9",
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
      "fullUrl" : "urn:uuid:49be91f4-ad81-412d-843c-7121d7092813",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "49be91f4-ad81-412d-843c-7121d7092813",
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
              "code" : "86574-1"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:815a98f6-5ec6-476e-a03a-feafc542c15e"
        },
        "effectiveDateTime" : "2024-10-19T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:46170a0b-deda-471b-bd8b-0927dba26fb9"
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
          "reference" : "urn:uuid:7be05f5a-1b4a-432d-b713-6ea47a6d9e27"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:d5a5fb08-2db1-440d-bfdc-f0a3de456f5f",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "d5a5fb08-2db1-440d-bfdc-f0a3de456f5f",
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
      "fullUrl" : "urn:uuid:9b8b85fa-f492-4b57-88a7-ade636786475",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "9b8b85fa-f492-4b57-88a7-ade636786475",
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
      "fullUrl" : "urn:uuid:fe8083d1-183a-4dfa-8239-604aed857998",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "fe8083d1-183a-4dfa-8239-604aed857998",
        "practitioner" : {
          "reference" : "urn:uuid:d5a5fb08-2db1-440d-bfdc-f0a3de456f5f"
        },
        "organization" : {
          "reference" : "urn:uuid:9b8b85fa-f492-4b57-88a7-ade636786475"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:7be05f5a-1b4a-432d-b713-6ea47a6d9e27",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "7be05f5a-1b4a-432d-b713-6ea47a6d9e27",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:815a98f6-5ec6-476e-a03a-feafc542c15e"
        },
        "collection" : {
          "collectedDateTime" : "2024-10-15T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:d6a7cead-f25c-4039-b7ea-3cb0d0569c19",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "d6a7cead-f25c-4039-b7ea-3cb0d0569c19",
        "identifier" : [
          {
            "value" : "26500923675"
          }
        ],
        "status" : "completed",
        "intent" : "order",
        "code" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "86574-1"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:815a98f6-5ec6-476e-a03a-feafc542c15e"
        },
        "requester" : {
          "reference" : "urn:uuid:fe8083d1-183a-4dfa-8239-604aed857998"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:7be05f5a-1b4a-432d-b713-6ea47a6d9e27"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:6ecd61e7-ee25-4c36-bbc0-3d226dd94156",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "6ecd61e7-ee25-4c36-bbc0-3d226dd94156",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:325f5cf8-4172-4e86-ab52-4e4ed42e97ea"
            }
          }
        ],
        "identifier" : [
          {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab"
          }
        ],
        "basedOn" : [
          {
            "reference" : "urn:uuid:d6a7cead-f25c-4039-b7ea-3cb0d0569c19"
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
          "reference" : "urn:uuid:815a98f6-5ec6-476e-a03a-feafc542c15e"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:46170a0b-deda-471b-bd8b-0927dba26fb9"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:7be05f5a-1b4a-432d-b713-6ea47a6d9e27"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:49be91f4-ad81-412d-843c-7121d7092813"
          }
        ]
      }
    }
  ]
}

```
