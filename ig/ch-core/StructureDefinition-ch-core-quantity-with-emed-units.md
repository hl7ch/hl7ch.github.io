# CH Core Quantity with EMED Units - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core Quantity with EMED Units**

## Data Type Profile: CH Core Quantity with EMED Units 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-quantity-with-emed-units | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreQuantityWithEmedUnits |
| **Copyright/Legal**: CC0-1.0 | |

 
A quantity with defined units 

**Usages:**

* Use this DataType Profile: [CH Core Dosage](StructureDefinition-ch-core-dosage.md), [CH Core MedicationAdministration](StructureDefinition-ch-core-medicationadministration.md), [CH Core Range with EMED Units](StructureDefinition-ch-core-range-with-emed-units.md) and [CH EMED Ratio with EMED Units](StructureDefinition-ch-emed-ratio-with-emed-units.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-quantity-with-emed-units)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-quantity-with-emed-units.csv), [Excel](StructureDefinition-ch-core-quantity-with-emed-units.xlsx), [Schematron](StructureDefinition-ch-core-quantity-with-emed-units.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-quantity-with-emed-units",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-quantity-with-emed-units",
  "version" : "6.0.0",
  "name" : "CHCoreQuantityWithEmedUnits",
  "title" : "CH Core Quantity with EMED Units",
  "status" : "active",
  "date" : "2025-12-16T08:02:49+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "A quantity with defined units",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "Quantity",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/SimpleQuantity",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Quantity.value",
        "path" : "Quantity.value",
        "min" : 1
      },
      {
        "id" : "Quantity.unit",
        "path" : "Quantity.unit",
        "min" : 1
      },
      {
        "id" : "Quantity.system",
        "path" : "Quantity.system",
        "min" : 1
      },
      {
        "id" : "Quantity.code",
        "path" : "Quantity.code",
        "min" : 1,
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/UnitCode"
        }
      }
    ]
  }
}

```
