# MedicationNorvasc - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedicationNorvasc**

## Example Medication: MedicationNorvasc

Profile: [CH EMED EPR Medication](StructureDefinition-ch-emed-epr-medication.md)

**code**: NORVASC Tabl 10 mg

**form**: Tablet

**amount**: 30 Tablet (unit of presentation) (Details: SNOMED CT code732936001 = 'Tablet (unit of presentation)')/1 Package (Details: SNOMED CT code1681000175101 = 'Package - unit of product usage')

### Ingredients

| | | |
| :--- | :--- | :--- |
| - | **Item[x]** | **Strength** |
| * | Amlodipine | 10 milligram (Details: UCUM codemg = 'mg')/1 Tablet (unit of presentation) (Details: SNOMED CT code732936001 = 'Tablet (unit of presentation)') |



## Resource Content

```json
{
  "resourceType" : "Medication",
  "id" : "MedicationNorvasc",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medication"
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
    "text" : "Tablet"
  },
  "amount" : {
    "numerator" : {
      "value" : 30,
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

```
