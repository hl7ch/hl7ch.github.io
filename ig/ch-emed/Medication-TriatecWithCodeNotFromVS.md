# Triatec with code not from VS - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Triatec with code not from VS**

## Example Medication: Triatec with code not from VS

Profile: [CH EMED Medication](StructureDefinition-ch-emed-medication.md)

**code**: TRIATEC Tabl 2.5 mg

**form**: Tablette

**amount**: 20 Tablet (unit of presentation)(Details: SNOMED CT code732936001 = 'Tablet (unit of presentation)')/1 Package - unit of product usage (qualifier value)(Details: SNOMED CT code1681000175101 = 'Package - unit of product usage')

### Ingredients

| | | |
| :--- | :--- | :--- |
| - | **Item[x]** | **Strength** |
| * | Ramipril | 2.5 milligram(Details: UCUM codemg = 'mg')/1 Tablet (unit of presentation)(Details: SNOMED CT code732936001 = 'Tablet (unit of presentation)') |



## Resource Content

```json
{
  "resourceType" : "Medication",
  "id" : "TriatecWithCodeNotFromVS",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medication"
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
    "text" : "Tablette"
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
      "unit" : "Package - unit of product usage (qualifier value)",
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
            "code" : "408050008",
            "display" : "Ramipril 2.5 mg oral tablet"
          }
        ],
        "text" : "Ramipril"
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
