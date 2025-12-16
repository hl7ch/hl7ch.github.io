# TC Medication for Immunization (Priorix) against MMR - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TC Medication for Immunization (Priorix) against MMR**

## Example Medication: TC Medication for Immunization (Priorix) against MMR

Profile: [CH VACD Medication For Immunization](StructureDefinition-ch-vacd-medication-for-immunization.md)

**identifier**: `urn:oid:2.999.1.2.3.4`/47fd8496-cadb-4546-9533-5fad5127a1d5

**code**: PRIORIX Trockensub c Solv

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
| * | A69FE297A |



## Resource Content

```json
{
  "resourceType" : "Medication",
  "id" : "TC-IMMUN-MEDIC-PRIORIX",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medication-for-immunization"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "47fd8496-cadb-4546-9533-5fad5127a1d5"
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "urn:oid:2.51.1.1",
        "code" : "7680006150010",
        "display" : "PRIORIX Trockensub c Solv"
      }
    ],
    "text" : "PRIORIX Trockensub c Solv"
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
    "lotNumber" : "A69FE297A"
  }
}

```
