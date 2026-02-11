# MedicationWithATC - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedicationWithATC**

## Example Medication: MedicationWithATC

Profiles: [CH EMED EPR Medication](StructureDefinition-ch-emed-epr-medication.md), [CH EMED Medication](http://fhir.ch/ig/ch-emed/6.0.0/StructureDefinition-ch-emed-medication.html)

**code**: NaraDex 2,5 mg Filmtabletten

**form**: Film-coated tablet

**amount**: 2 Tablet (unit of presentation) (Details: SNOMED CT code732936001 = 'Tablet (unit of presentation)')/1 Package (Details: SNOMED CT code1681000175101 = 'Package - unit of product usage')

### Ingredients

| | | |
| :--- | :--- | :--- |
| - | **Item[x]** | **Strength** |
| * | Naratriptan | 2.5 milligram (Details: UCUM codemg = 'mg')/1 Tablet (unit of presentation) (Details: SNOMED CT code732936001 = 'Tablet (unit of presentation)') |



## Resource Content

```json
{
  "resourceType" : "Medication",
  "id" : "MedicationWithATC",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medication",
      "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medication"
    ]
  },
  "code" : {
    "coding" : [
      {
        "system" : "http://www.whocc.no/atc",
        "code" : "N02CC02",
        "display" : "naratriptan"
      }
    ],
    "text" : "NaraDex 2,5 mg Filmtabletten"
  },
  "form" : {
    "coding" : [
      {
        "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
        "code" : "10221000",
        "display" : "Film-coated tablet"
      }
    ],
    "text" : "Film-coated tablet"
  },
  "amount" : {
    "numerator" : {
      "value" : 2,
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
            "code" : "363571003",
            "display" : "Naratriptan"
          }
        ],
        "text" : "Naratriptan"
      },
      "strength" : {
        "numerator" : {
          "value" : 2.5,
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
