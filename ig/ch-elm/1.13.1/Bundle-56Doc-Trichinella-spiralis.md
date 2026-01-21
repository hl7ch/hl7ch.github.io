# 56Doc - Trichinella spiralis - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **56Doc - Trichinella spiralis**

## Example Bundle: 56Doc - Trichinella spiralis



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "56Doc-Trichinella-spiralis",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2024-10-20T12:00:00+02:00",
  "entry" : [
    {
      "fullUrl" : "urn:uuid:aacebdf8-9efc-4606-af98-ead9453a7a72",
      "resource" : {
        "resourceType" : "Composition",
        "id" : "aacebdf8-9efc-4606-af98-ead9453a7a72",
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
          "reference" : "urn:uuid:bfa34c55-530f-4283-902a-f159a05bffda"
        },
        "date" : "2024-10-20T12:00:00+02:00",
        "author" : [
          {
            "reference" : "urn:uuid:ef0a08b9-b705-479e-b058-835ee9764c21"
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
                "reference" : "urn:uuid:be91fab9-8969-43f7-bd7b-8ab4b0c04b80"
              }
            ]
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:bfa34c55-530f-4283-902a-f159a05bffda",
      "resource" : {
        "resourceType" : "Patient",
        "id" : "bfa34c55-530f-4283-902a-f159a05bffda",
        "identifier" : [
          {
            "system" : "urn:oid:2.16.756.5.32",
            "value" : "7561234567897"
          }
        ],
        "name" : [
          {
            "family" : "D",
            "given" : ["A"]
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
      "fullUrl" : "urn:uuid:ef0a08b9-b705-479e-b058-835ee9764c21",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "ef0a08b9-b705-479e-b058-835ee9764c21",
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
      "fullUrl" : "urn:uuid:be91fab9-8969-43f7-bd7b-8ab4b0c04b80",
      "resource" : {
        "resourceType" : "Observation",
        "id" : "be91fab9-8969-43f7-bd7b-8ab4b0c04b80",
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
              "code" : "23499-7"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:bfa34c55-530f-4283-902a-f159a05bffda"
        },
        "effectiveDateTime" : "2024-10-19T14:20:00+02:00",
        "performer" : [
          {
            "reference" : "urn:uuid:ef0a08b9-b705-479e-b058-835ee9764c21"
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
          "reference" : "urn:uuid:0e4052e5-00ec-46e8-a0cf-da5f0af54bcc"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:0ce29eb7-1b8b-40d2-b857-e70e58ac1f41",
      "resource" : {
        "resourceType" : "Practitioner",
        "id" : "0ce29eb7-1b8b-40d2-b857-e70e58ac1f41",
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
      "fullUrl" : "urn:uuid:8844749e-e2ca-4d05-a167-fb63c072d193",
      "resource" : {
        "resourceType" : "Organization",
        "id" : "8844749e-e2ca-4d05-a167-fb63c072d193",
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
      "fullUrl" : "urn:uuid:aedb99e1-442f-48d0-bcc9-450810deb857",
      "resource" : {
        "resourceType" : "PractitionerRole",
        "id" : "aedb99e1-442f-48d0-bcc9-450810deb857",
        "practitioner" : {
          "reference" : "urn:uuid:0ce29eb7-1b8b-40d2-b857-e70e58ac1f41"
        },
        "organization" : {
          "reference" : "urn:uuid:8844749e-e2ca-4d05-a167-fb63c072d193"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:0e4052e5-00ec-46e8-a0cf-da5f0af54bcc",
      "resource" : {
        "resourceType" : "Specimen",
        "id" : "0e4052e5-00ec-46e8-a0cf-da5f0af54bcc",
        "type" : {
          "text" : "Material declared by Observation.code or non-mandatory"
        },
        "subject" : {
          "reference" : "urn:uuid:bfa34c55-530f-4283-902a-f159a05bffda"
        },
        "collection" : {
          "collectedDateTime" : "2024-10-15T14:20:00+02:00"
        }
      }
    },
    {
      "fullUrl" : "urn:uuid:94910ba2-6893-4a0c-9fbb-90b343efe48a",
      "resource" : {
        "resourceType" : "ServiceRequest",
        "id" : "94910ba2-6893-4a0c-9fbb-90b343efe48a",
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
              "code" : "23499-7"
            }
          ]
        },
        "subject" : {
          "reference" : "urn:uuid:bfa34c55-530f-4283-902a-f159a05bffda"
        },
        "requester" : {
          "reference" : "urn:uuid:aedb99e1-442f-48d0-bcc9-450810deb857"
        },
        "specimen" : [
          {
            "reference" : "urn:uuid:0e4052e5-00ec-46e8-a0cf-da5f0af54bcc"
          }
        ]
      }
    },
    {
      "fullUrl" : "urn:uuid:52366089-5bd6-4071-bead-d77663e189ad",
      "resource" : {
        "resourceType" : "DiagnosticReport",
        "id" : "52366089-5bd6-4071-bead-d77663e189ad",
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
            "valueReference" : {
              "reference" : "urn:uuid:aacebdf8-9efc-4606-af98-ead9453a7a72"
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
            "reference" : "urn:uuid:94910ba2-6893-4a0c-9fbb-90b343efe48a"
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
          "reference" : "urn:uuid:bfa34c55-530f-4283-902a-f159a05bffda"
        },
        "performer" : [
          {
            "reference" : "urn:uuid:ef0a08b9-b705-479e-b058-835ee9764c21"
          }
        ],
        "specimen" : [
          {
            "reference" : "urn:uuid:0e4052e5-00ec-46e8-a0cf-da5f0af54bcc"
          }
        ],
        "result" : [
          {
            "reference" : "urn:uuid:be91fab9-8969-43f7-bd7b-8ab4b0c04b80"
          }
        ]
      }
    }
  ]
}

```
