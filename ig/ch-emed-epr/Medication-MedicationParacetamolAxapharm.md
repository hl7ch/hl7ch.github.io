# MedicationParacetamolAxapharm - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedicationParacetamolAxapharm**

## Example Medication: MedicationParacetamolAxapharm

Language: fr-CH

Profile: [CH EMED EPR Medication](StructureDefinition-ch-emed-epr-medication.md)

**code**: PARACETAMOL Axapharm cpr pell 1g

**form**: Comprimé pelliculé

**amount**: 20 comprimé (Details: SNOMED CT code732936001 = 'Tablet (unit of presentation)')/1 plaquette (Details: SNOMED CT code732984005 = 'Blister (unit of presentation)')

### Ingredients

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Item[x]** | **IsActive** | **Strength** |
| * | Paracétamol | true | 1 g (Details: UCUM codeg = 'g')/1 comprimé (Details: SNOMED CT code732936001 = 'Tablet (unit of presentation)') |



## Resource Content

```json
{
  "resourceType" : "Medication",
  "id" : "MedicationParacetamolAxapharm",
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
        "code" : "7680669830045",
        "display" : "PARACETAMOL Axapharm cpr pell 1g blister 20pce"
      },
      {
        "system" : "http://www.whocc.no/atc",
        "code" : "N02BE01",
        "display" : "paracetamol"
      }
    ],
    "text" : "PARACETAMOL Axapharm cpr pell 1g"
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
            "code" : "387517004",
            "display" : "Paracetamol (substance)"
          }
        ],
        "text" : "Paracétamol"
      },
      "isActive" : true,
      "strength" : {
        "numerator" : {
          "value" : 1,
          "unit" : "g",
          "system" : "http://unitsofmeasure.org",
          "code" : "g"
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
