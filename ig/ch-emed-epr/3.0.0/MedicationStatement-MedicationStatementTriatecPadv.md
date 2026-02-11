# Changed Medication Statement: Triatec (PADV) - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Changed Medication Statement: Triatec (PADV)**

## Example MedicationStatement: Changed Medication Statement: Triatec (PADV)



## Resource Content

```json
{
  "resourceType" : "MedicationStatement",
  "id" : "MedicationStatementTriatecPadv",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-changed"
    ]
  },
  "contained" : [
    {
      "resourceType" : "Medication",
      "id" : "MedicationTriatec",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medication"
        ]
      },
      "code" : {
        "coding" : [
          {
            "system" : "urn:oid:2.51.1.1",
            "code" : "7680538751228",
            "display" : "TRIATEC Tabl 2.5 mg 20 Stk"
          }
        ],
        "text" : "TRIATEC Tabl 2.5 mg"
      },
      "form" : {
        "coding" : [
          {
            "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
            "code" : "10219000",
            "display" : "Tablet"
          }
        ],
        "text" : "Tablet"
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
          "unit" : "Package",
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
                "code" : "386872004",
                "display" : "Ramipril (substance)"
              }
            ],
            "text" : "Ramipril"
          },
          "isActive" : true,
          "strength" : {
            "numerator" : {
              "value" : 2.5,
              "unit" : "milligram",
              "system" : "http://unitsofmeasure.org",
              "code" : "mg"
            },
            "denominator" : {
              "value" : 1,
              "unit" : "Tablet",
              "system" : "http://snomed.info/sct",
              "code" : "732936001"
            }
          }
        }
      ]
    }
  ],
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:41b97645-e263-47c2-8d96-79da451a33f2"
    }
  ],
  "partOf" : [
    {
      "reference" : "urn:uuid:3dcadc51-9509-48f0-b8c2-4ebf7e03f330"
    }
  ],
  "status" : "active",
  "medicationReference" : {
    "reference" : "#MedicationTriatec"
  },
  "subject" : {
    "reference" : "urn:uuid:2dbfe659-07d0-45c7-b8df-4a48372049a3"
  },
  "dateAsserted" : "2023-04-11",
  "informationSource" : {
    "reference" : "urn:uuid:213d609a-1164-459a-bb10-727516ae3d0c"
  },
  "dosage" : [
    {
      "text" : "Un demi comprimé ou un comprimé entier à avaler avec de l'eau le soir dès le 2023-04-11.",
      "patientInstruction" : "À prendre avec de l'eau",
      "timing" : {
        "repeat" : {
          "boundsPeriod" : {
            "start" : "2023-04-11"
          },
          "when" : ["NOON"]
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
        "text" : "À avaler"
      },
      "doseAndRate" : [
        {
          "doseRange" : {
            "low" : {
              "value" : 0.5,
              "unit" : "Tablet (unit of presentation)",
              "system" : "http://snomed.info/sct",
              "code" : "732936001"
            },
            "high" : {
              "value" : 1,
              "unit" : "Tablet (unit of presentation)",
              "system" : "http://snomed.info/sct",
              "code" : "732936001"
            }
          }
        }
      ]
    }
  ]
}

```
