# MedicationParacetamolDafalganEff - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedicationParacetamolDafalganEff**

## Example Medication: MedicationParacetamolDafalganEff

Language: fr-CH

Profile: [CH EMED EPR Medication](StructureDefinition-ch-emed-epr-medication.md)

**code**: DAFALGAN cpr eff 500mg

**form**: Comprimé effervescent

**amount**: 40 comprimé (Details: SNOMED CT code732936001 = 'Tablet (unit of presentation)')/1 plaquette (Details: SNOMED CT code732984005 = 'Blister (unit of presentation)')

### Ingredients

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Item[x]** | **IsActive** | **Strength** |
| * | Paracétamol | true | 500 mg (Details: UCUM codemg = 'mg')/1 comprimé (Details: SNOMED CT code732936001 = 'Tablet (unit of presentation)') |



## Resource Content

```json
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

```
