# 2-6 Medication Request with Medication Norvasc - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **2-6 Medication Request with Medication Norvasc**

## Example MedicationRequest: 2-6 Medication Request with Medication Norvasc



## Resource Content

```json
{
  "resourceType" : "MedicationRequest",
  "id" : "2-6-MedReqNorvasc",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationrequest"
    ]
  },
  "contained" : [
    {
      "resourceType" : "Medication",
      "id" : "Norvasc",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medication"
        ]
      },
      "code" : {
        "coding" : [
          {
            "system" : "urn:oid:2.51.1.1",
            "code" : "7680500440334",
            "display" : "NORVASC Tabl 10 mg"
          }
        ],
        "text" : "NORVASC Tabl 10 mg"
      },
      "form" : {
        "coding" : [
          {
            "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
            "code" : "10219000",
            "display" : "Tablet"
          }
        ],
        "text" : "Tablette"
      },
      "amount" : {
        "numerator" : {
          "value" : 20,
          "unit" : "Tablet (unit of presentation)",
          "system" : "http://snomed.info/sct",
          "code" : "732936001"
        },
        "denominator" : {
          "value" : 1,
          "unit" : "Package - unit of product usage (qualifier value)",
          "system" : "http://snomed.info/sct",
          "code" : "1681000175101"
        }
      },
      "ingredient" : [
        {
          "itemCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://snomed.info/sct",
                "code" : "386864001",
                "display" : "Amlodipine (substance)"
              }
            ],
            "text" : "Amlodipine"
          },
          "strength" : {
            "numerator" : {
              "value" : 10,
              "unit" : "milligram",
              "system" : "http://unitsofmeasure.org",
              "code" : "mg"
            },
            "denominator" : {
              "value" : 1,
              "unit" : "Tablet (unit of presentation)",
              "system" : "http://snomed.info/sct",
              "code" : "732936001"
            }
          }
        }
      ]
    }
  ],
  "extension" : [
    {
      "extension" : [
        {
          "url" : "id",
          "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:0e9a0b8a-8306-4e35-bb92-0ba424696349"
          }
        },
        {
          "url" : "externalDocumentId",
          "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:0e9a0b8a-8306-4e35-bb92-0ba424696349"
          }
        }
      ],
      "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-treatmentplan"
    }
  ],
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:1c5b5e9b-24f7-45ed-ae9c-6e2ec53e7b05"
    }
  ],
  "status" : "active",
  "intent" : "order",
  "medicationReference" : {
    "reference" : "#Norvasc"
  },
  "subject" : {
    "reference" : "Patient/MonikaWegmueller"
  },
  "authoredOn" : "2012-02-04T14:00:00+01:00",
  "requester" : {
    "reference" : "PractitionerRole/FamilienHausarztAtHausarzt"
  },
  "reasonCode" : [
    {
      "text" : "-"
    }
  ],
  "dosageInstruction" : [
    {
      "patientInstruction" : "-",
      "timing" : {
        "repeat" : {
          "boundsPeriod" : {
            "start" : "2012-02-04"
          },
          "when" : ["MORN", "EVE"]
        }
      },
      "route" : {
        "coding" : [
          {
            "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
            "code" : "20053000",
            "display" : "Oral use"
          }
        ],
        "text" : "zum Einnehmen"
      },
      "doseAndRate" : [
        {
          "doseQuantity" : {
            "value" : 1,
            "unit" : "Tablet (unit of presentation)",
            "system" : "http://snomed.info/sct",
            "code" : "732936001"
          }
        }
      ]
    }
  ],
  "dispenseRequest" : {
    "validityPeriod" : {
      "start" : "2012-02-04",
      "end" : "2012-05-03"
    }
  },
  "substitution" : {
    "allowedCodeableConcept" : {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/v3-substanceAdminSubstitution",
          "code" : "E",
          "display" : "equivalent"
        }
      ]
    }
  }
}

```
