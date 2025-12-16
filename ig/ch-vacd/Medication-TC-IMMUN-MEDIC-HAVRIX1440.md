# TC1 Medication for Immunization by patient - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TC1 Medication for Immunization by patient**

## Example Medication: TC1 Medication for Immunization by patient

Profile: [CH VACD Medication For Immunization](StructureDefinition-ch-vacd-medication-for-immunization.md)

**identifier**: `urn:oid:2.999.1.2.3.4`/359000dc-2cee-4a6e-ab05-577f558840e2

**code**: HAVRIX 1440 Inj Susp

**status**: Active

**manufacturer**: [Organization GlaxoSmithKline AG](Organization-TC-ORG-GSK.md)

**form**: Suspension for injection

**amount**: 1 milliliter(Details: UCUM codemL = 'mL')/1 Syringe (unit of presentation)(Details: SNOMED CT code733020007 = 'Syringe')

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
  "id" : "TC-IMMUN-MEDIC-HAVRIX1440",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medication-for-immunization"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "359000dc-2cee-4a6e-ab05-577f558840e2"
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "urn:oid:2.51.1.1",
        "code" : "7680005580054",
        "display" : "HAVRIX 1440 Inj Susp"
      }
    ],
    "text" : "HAVRIX 1440 Inj Susp"
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
      "value" : 1,
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
