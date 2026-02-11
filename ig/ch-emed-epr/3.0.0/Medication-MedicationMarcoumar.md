# MedicationMarcoumar - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedicationMarcoumar**

## Example Medication: MedicationMarcoumar

Language: fr-CH

Profile: [CH EMED EPR Medication](StructureDefinition-ch-emed-epr-medication.md)

**code**: Marcoumar cpr 3mg

**form**: Comprimé

> **ingredient****item**: Phenprocoumon**isActive**: true**strength**: 3 mg (Details: UCUM codemg = 'mg')/1 comprimé (Details: SNOMED CT code732936001 = 'Tablet (unit of presentation)')

> **ingredient****item**: Lactosum**isActive**: false**strength**: 80 mg (Details: UCUM codemg = 'mg')/1 comprimé (Details: SNOMED CT code732936001 = 'Tablet (unit of presentation)')

> **ingredient****item**: Maydis amylum**isActive**: false

> **ingredient****item**: Talcum**isActive**: false

> **ingredient****item**: Magnesii stearas**isActive**: false



## Resource Content

```json
{
  "resourceType" : "Medication",
  "id" : "MedicationMarcoumar",
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
        "code" : "B01AA04",
        "display" : "Phenprocoumon"
      }
    ],
    "text" : "Marcoumar cpr 3mg"
  },
  "form" : {
    "coding" : [
      {
        "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
        "code" : "10219000",
        "display" : "Comprimé"
      }
    ],
    "text" : "Comprimé"
  },
  "ingredient" : [
    {
      "itemCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "59488002",
            "display" : "Phenprocoumon (substance)"
          }
        ],
        "text" : "Phenprocoumon"
      },
      "isActive" : true,
      "strength" : {
        "numerator" : {
          "value" : 3,
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
        "text" : "Lactosum"
      },
      "isActive" : false,
      "strength" : {
        "numerator" : {
          "value" : 80,
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
        "text" : "Maydis amylum"
      },
      "isActive" : false
    },
    {
      "itemCodeableConcept" : {
        "text" : "Talcum"
      },
      "isActive" : false
    },
    {
      "itemCodeableConcept" : {
        "text" : "Magnesii stearas"
      },
      "isActive" : false
    }
  ]
}

```
