# MedicationRamipril - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedicationRamipril**

## Example Medication: MedicationRamipril

Language: fr-CH

Profile: [CH EMED EPR Medication](StructureDefinition-ch-emed-epr-medication.md)

**code**: RAMIPRIL Mepha cpr 2.5 mg

**form**: Comprimé pelliculé

**amount**: 20 comprimé (Details: SNOMED CT code732936001 = 'Tablet (unit of presentation)')/1 plaquette (Details: SNOMED CT code732984005 = 'Blister (unit of presentation)')

> **ingredient****item**: Ramipril**isActive**: true**strength**: 2.5 mg (Details: UCUM codemg = 'mg')/1 comprimé (Details: SNOMED CT code732936001 = 'Tablet (unit of presentation)')

> **ingredient****item**: Lactose monohydraté**isActive**: false**strength**: 158.8 mg (Details: UCUM codemg = 'mg')/1 comprimé (Details: SNOMED CT code732936001 = 'Tablet (unit of presentation)')

> **ingredient****item**: Amidon prégélatinisé**isActive**: false

> **ingredient****item**: Oxyde de fer jaune (E 172)**isActive**: false

> **ingredient****item**: Croscarmellose sodique**isActive**: false

> **ingredient****item**: Bicarbonate de sodium**isActive**: false**strength**: 1.16 mg (Details: UCUM codemg = 'mg')/1 comprimé (Details: SNOMED CT code732936001 = 'Tablet (unit of presentation)')

> **ingredient****item**: Fumarate de stéaryle sodique**isActive**: false



## Resource Content

```json
{
  "resourceType" : "Medication",
  "id" : "MedicationRamipril",
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
        "code" : "7680658950037",
        "display" : "RAMIPRIL Mepha cpr 2.5 mg"
      },
      {
        "system" : "http://www.whocc.no/atc",
        "code" : "C09AA05",
        "display" : "Ramipril"
      }
    ],
    "text" : "RAMIPRIL Mepha cpr 2.5 mg"
  },
  "form" : {
    "coding" : [
      {
        "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
        "code" : "10221000",
        "display" : "Comprimé pelliculé"
      }
    ],
    "text" : "Comprimé pelliculé"
  },
  "amount" : {
    "numerator" : {
      "value" : 20,
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
    },
    {
      "itemCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "47703008",
            "display" : "Lactose (substance)"
          }
        ],
        "text" : "Lactose monohydraté"
      },
      "isActive" : false,
      "strength" : {
        "numerator" : {
          "value" : 158.8,
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
    },
    {
      "itemCodeableConcept" : {
        "text" : "Amidon prégélatinisé"
      },
      "isActive" : false
    },
    {
      "itemCodeableConcept" : {
        "text" : "Oxyde de fer jaune (E 172)"
      },
      "isActive" : false
    },
    {
      "itemCodeableConcept" : {
        "text" : "Croscarmellose sodique"
      },
      "isActive" : false
    },
    {
      "itemCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "387319002",
            "display" : "Sodium bicarbonate (substance)"
          }
        ],
        "text" : "Bicarbonate de sodium"
      },
      "isActive" : false,
      "strength" : {
        "numerator" : {
          "value" : 1.16,
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
    },
    {
      "itemCodeableConcept" : {
        "text" : "Fumarate de stéaryle sodique"
      },
      "isActive" : false
    }
  ]
}

```
