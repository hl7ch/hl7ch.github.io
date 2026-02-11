# MedicationStatementCard: self-medication paracetamol treatment - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedicationStatementCard: self-medication paracetamol treatment**

## Example MedicationStatement: MedicationStatementCard: self-medication paracetamol treatment



## Resource Content

```json
{
  "resourceType" : "MedicationStatement",
  "id" : "MedicationStatementCardParacetamolSelfMedication",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-card"
    ]
  },
  "language" : "fr-CH",
  "contained" : [
    {
      "resourceType" : "Medication",
      "id" : "MedicationParacetamolDafalganEff",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medication"
        ]
      },
      "language" : "fr-CH",
      "code" : {
        "coding" : [
          {
            "system" : "urn:oid:2.51.1.1",
            "code" : "7680475030011",
            "display" : "DAFALGAN cpr eff 500mg"
          },
          {
            "system" : "http://www.whocc.no/atc",
            "code" : "N02BE01",
            "display" : "paracetamol"
          }
        ],
        "text" : "DAFALGAN cpr eff 500mg"
      },
      "form" : {
        "coding" : [
          {
            "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
            "code" : "10222000",
            "display" : "Comprimé effervescent"
          }
        ],
        "text" : "Comprimé effervescent"
      },
      "amount" : {
        "numerator" : {
          "value" : 40,
          "unit" : "comprimé",
          "system" : "http://snomed.info/sct",
          "code" : "732936001"
        },
        "denominator" : {
          "value" : 1,
          "unit" : "plaquette",
          "system" : "http://snomed.info/sct",
          "code" : "732984005"
        }
      },
      "ingredient" : [
        {
          "itemCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://snomed.info/sct",
                "code" : "387517004",
                "display" : "Paracetamol (substance)"
              }
            ],
            "text" : "Paracétamol"
          },
          "isActive" : true,
          "strength" : {
            "numerator" : {
              "value" : 500,
              "unit" : "mg",
              "system" : "http://unitsofmeasure.org",
              "code" : "mg"
            },
            "denominator" : {
              "value" : 1,
              "unit" : "comprimé",
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
            "value" : "urn:uuid:cb13d6de-051f-4a3e-ab85-c05650fa254e"
          }
        },
        {
          "url" : "externalDocumentId",
          "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:a6deb711-dc0e-4a87-9ca9-f72bb9ecc858"
          }
        }
      ],
      "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-treatmentplan"
    },
    {
      "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-last-considered-document",
      "valueIdentifier" : {
        "system" : "urn:ietf:rfc:3986",
        "value" : "urn:uuid:a6deb711-dc0e-4a87-9ca9-f72bb9ecc858"
      }
    }
  ],
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:0972e4a0-b4ce-4d1d-bffa-1172a58f499d"
    }
  ],
  "status" : "active",
  "medicationReference" : {
    "reference" : "#MedicationParacetamolDafalganEff"
  },
  "subject" : {
    "reference" : "urn:uuid:9b00e81e-1165-4039-9d60-698ef838ae1a"
  },
  "dateAsserted" : "2026-01-22T14:50:55.602+01:00",
  "informationSource" : {
    "reference" : "urn:uuid:9b00e81e-1165-4039-9d60-698ef838ae1a"
  },
  "reasonCode" : [
    {
      "text" : "J'ai souvent mal à la tête."
    }
  ],
  "dosage" : [
    {
      "text" : "1 comprimé en réserve, à avaler si besoin, à partir du 22 janvier 2026.",
      "timing" : {
        "repeat" : {
          "boundsPeriod" : {
            "start" : "2026-01-22"
          }
        }
      },
      "asNeededBoolean" : true,
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
          "doseQuantity" : {
            "value" : 1,
            "unit" : "comprimé",
            "system" : "http://snomed.info/sct",
            "code" : "732936001"
          }
        }
      ]
    }
  ]
}

```
