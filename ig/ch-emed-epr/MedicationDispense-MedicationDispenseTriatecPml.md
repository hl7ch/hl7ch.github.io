# MedicationDispense: Triatec (PML) - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedicationDispense: Triatec (PML)**

## Example MedicationDispense: MedicationDispense: Triatec (PML)



## Resource Content

```json
{
  "resourceType" : "MedicationDispense",
  "id" : "MedicationDispenseTriatecPml",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationdispense-list"
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
  "extension" : [
    {
      "extension" : [
        {
          "url" : "id",
          "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:41b97645-e263-47c2-8d96-79da451a33f2"
          }
        },
        {
          "url" : "externalDocumentId",
          "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:24c84eef-f9db-4710-8f6c-2d342ad3ac2d"
          }
        }
      ],
      "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-treatmentplan"
    },
    {
      "extension" : [
        {
          "url" : "id",
          "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:73bc6454-5514-4a6d-a24c-7d9546f873a9"
          }
        },
        {
          "url" : "externalDocumentId",
          "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:49ed45e9-f7b6-4854-a234-56bf744e9026"
          }
        }
      ],
      "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-dispense"
    }
  ],
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:29b59609-a622-42eb-ac6c-dc2ddb3805a6"
    }
  ],
  "status" : "completed",
  "medicationReference" : {
    "reference" : "#MedicationTriatec"
  },
  "performer" : [
    {
      "actor" : {
        "reference" : "urn:uuid:213d609a-1164-459a-bb10-727516ae3d0c"
      }
    }
  ],
  "quantity" : {
    "value" : 1,
    "unit" : "Package",
    "system" : "http://snomed.info/sct",
    "code" : "1681000175101"
  },
  "whenHandedOver" : "2023-04-15",
  "dosageInstruction" : [
    {
      "text" : "Un demi comprimé ou un comprimé entier à avaler et prendre avec de l'eau tous les midis dès le 2023-04-11.",
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
