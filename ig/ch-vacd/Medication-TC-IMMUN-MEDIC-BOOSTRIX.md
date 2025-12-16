# TC Medication for Immunization (Boostrix) - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TC Medication for Immunization (Boostrix)**

## Example Medication: TC Medication for Immunization (Boostrix)

Profile: [CH VACD Medication For Immunization](StructureDefinition-ch-vacd-medication-for-immunization.md)

**identifier**: `urn:oid:2.999.1.2.3.4`/ead68e47-34a6-4534-a658-b718e565fb91

**code**: BOOSTRIX Inj Susp

**status**: Active

**manufacturer**: [Organization GlaxoSmithKline AG](Organization-TC-ORG-GSK.md)

**form**: Suspension for injection

**amount**: 0.5 milliliter(Details: UCUM codemL = 'mL')/1 Syringe (unit of presentation)(Details: SNOMED CT code733020007 = 'Syringe')

### Ingredients

| | |
| :--- | :--- |
| - | **Item[x]** |
| * | Immunologic substance (substance) |

### Batches

| | |
| :--- | :--- |
| - | **LotNumber** |
| * | AHAVB946A |



## Resource Content

```json
{
  "resourceType" : "Medication",
  "id" : "TC-IMMUN-MEDIC-BOOSTRIX",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medication-for-immunization"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "ead68e47-34a6-4534-a658-b718e565fb91"
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "urn:oid:2.51.1.1",
        "code" : "7680006370012",
        "display" : "BOOSTRIX Inj Susp"
      }
    ],
    "text" : "BOOSTRIX Inj Susp"
  },
  "status" : "active",
  "manufacturer" : {
    "reference" : "Organization/TC-ORG-GSK"
  },
  "form" : {
    "coding" : [
      {
        "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
        "code" : "11202000",
        "display" : "Suspension for injection"
      }
    ]
  },
  "amount" : {
    "numerator" : {
      "value" : 0.5,
      "unit" : "milliliter",
      "system" : "http://unitsofmeasure.org",
      "code" : "mL"
    },
    "denominator" : {
      "value" : 1,
      "unit" : "Syringe (unit of presentation)",
      "system" : "http://snomed.info/sct",
      "code" : "733020007"
    }
  },
  "ingredient" : [
    {
      "itemCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "106181007",
            "display" : "Immunologic substance (substance)"
          }
        ],
        "text" : "Immunologic substance (substance)"
      }
    }
  ],
  "batch" : {
    "lotNumber" : "AHAVB946A"
  }
}

```
