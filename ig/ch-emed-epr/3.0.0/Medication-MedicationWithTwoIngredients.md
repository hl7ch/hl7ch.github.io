# MedicationWithTwoIngredients - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedicationWithTwoIngredients**

## Example Medication: MedicationWithTwoIngredients

Profile: [CH EMED EPR Medication](StructureDefinition-ch-emed-epr-medication.md)

**code**: Exforge 10/160mg

**form**: Tablet

**amount**: 28 Quantity (Details: SNOMED CT code246205007 = 'Quantity')/1 Package (Details: SNOMED CT code1681000175101 = 'Package - unit of product usage')

> **ingredient****item**: Amlodipine (substance)**strength**: 10 milligram (Details: UCUM codemg = 'mg')/1 Tablet (unit of presentation) (Details: SNOMED CT code732936001 = 'Tablet (unit of presentation)')

> **ingredient****item**: Valsartan (substance)**strength**: 160 milligram (Details: UCUM codemg = 'mg')/1 Tablet (unit of presentation) (Details: SNOMED CT code732936001 = 'Tablet (unit of presentation)')



## Resource Content

```json
{
  "resourceType" : "Medication",
  "id" : "MedicationWithTwoIngredients",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medication"
    ]
  },
  "code" : {
    "coding" : [
      {
        "system" : "urn:oid:2.51.1.1",
        "code" : "7680577710149",
        "display" : "Exforge 10/160mg"
      }
    ],
    "text" : "Exforge 10/160mg"
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
      "value" : 28,
      "unit" : "Quantity",
      "system" : "http://snomed.info/sct",
      "code" : "246205007"
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
            "code" : "386864001",
            "display" : "Amlodipine (substance)"
          }
        ],
        "text" : "Amlodipine (substance)"
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
    },
    {
      "itemCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "386876001",
            "display" : "Valsartan (substance)"
          }
        ],
        "text" : "Valsartan (substance)"
      },
      "strength" : {
        "numerator" : {
          "value" : 160,
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

```
