# Medication: Triatec - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medication: Triatec**

## Example Medication: Medication: Triatec

Profile: [CH EMED EPR Medication](StructureDefinition-ch-emed-epr-medication.md)

**code**: TRIATEC Tabl 2.5 mg

**form**: Tablet

**amount**: 20 Tablet (unit of presentation) (Details: SNOMED CT code732936001 = 'Tablet (unit of presentation)')/1 Package (Details: SNOMED CT code1681000175101 = 'Package - unit of product usage')

### Ingredients

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Item[x]** | **IsActive** | **Strength** |
| * | Ramipril | true | 2.5 milligram (Details: UCUM codemg = 'mg')/1 Tablet (Details: SNOMED CT code732936001 = 'Tablet (unit of presentation)') |



## Resource Content

```json
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

```
