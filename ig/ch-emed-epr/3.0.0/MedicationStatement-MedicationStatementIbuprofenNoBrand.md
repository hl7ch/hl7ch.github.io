# MedicationStatement: ibuprofen, no brand - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedicationStatement: ibuprofen, no brand**

## Example MedicationStatement: MedicationStatement: ibuprofen, no brand



## Resource Content

```json
{
  "resourceType" : "MedicationStatement",
  "id" : "MedicationStatementIbuprofenNoBrand",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-treatmentplan"
    ]
  },
  "language" : "fr-CH",
  "contained" : [
    {
      "resourceType" : "Medication",
      "id" : "MedicationIbuprofen",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medication"
        ]
      },
      "language" : "fr-CH",
      "code" : {
        "coding" : [
          {
            "system" : "http://www.whocc.no/atc",
            "code" : "M01AE01",
            "display" : "Ibuprofen"
          }
        ],
        "text" : "Ibuprofen"
      },
      "ingredient" : [
        {
          "itemCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://snomed.info/sct",
                "code" : "387207008",
                "display" : "Ibuprofen (substance)"
              }
            ],
            "text" : "Ibuprofen"
          },
          "isActive" : true
        }
      ]
    }
  ],
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:f9b3a1ae-d5ac-40b9-990a-6e4e0f16a5dc"
    }
  ],
  "status" : "active",
  "medicationReference" : {
    "reference" : "#MedicationIbuprofen"
  },
  "subject" : {
    "reference" : "urn:uuid:9b00e81e-1165-4039-9d60-698ef838ae1a"
  },
  "dateAsserted" : "2026-02-12T14:55:55.602+01:00",
  "informationSource" : {
    "reference" : "urn:uuid:213d609a-1164-459a-bb10-727516ae3d0c"
  },
  "reasonCode" : [
    {
      "text" : "Le patient a souvent mal à la tête."
    }
  ],
  "dosage" : [
    {
      "text" : "1 comprimé en réserve, à avaler si besoin en cas de mal à la tête, max. Max. 400mg chaque 6 heures, à partir du 12 fevrier 2026.",
      "patientInstruction" : "1 comprimé en cas de mal à la tête.",
      "timing" : {
        "repeat" : {
          "boundsPeriod" : {
            "start" : "2026-02-12"
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
      "maxDosePerPeriod" : {
        "numerator" : {
          "value" : 400,
          "unit" : "Gramme",
          "system" : "http://unitsofmeasure.org",
          "code" : "mg"
        },
        "denominator" : {
          "value" : 6,
          "unit" : "Heure",
          "system" : "http://unitsofmeasure.org",
          "code" : "h"
        }
      }
    }
  ]
}

```
