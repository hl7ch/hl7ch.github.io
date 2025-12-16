# CH Core Range with EMED Units - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core Range with EMED Units**

## Data Type Profile: CH Core Range with EMED Units 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-range-with-emed-units | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreRangeWithEmedUnits |
| **Copyright/Legal**: CC0-1.0 | |

 
A range with defined quantity/units 

**Usages:**

* Use this DataType Profile: [CH Core Dosage](StructureDefinition-ch-core-dosage.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-range-with-emed-units)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-range-with-emed-units.csv), [Excel](StructureDefinition-ch-core-range-with-emed-units.xlsx), [Schematron](StructureDefinition-ch-core-range-with-emed-units.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-range-with-emed-units",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-range-with-emed-units",
  "version" : "6.0.0",
  "name" : "CHCoreRangeWithEmedUnits",
  "title" : "CH Core Range with EMED Units",
  "status" : "active",
  "date" : "2025-12-16T07:58:48+00:00",
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
  "description" : "A range with defined quantity/units",
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
  "type" : "Range",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Range",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Range.low",
        "path" : "Range.low",
        "type" : [
          {
            "code" : "Quantity",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-quantity-with-emed-units"
            ]
          }
        ]
      },
      {
        "id" : "Range.high",
        "path" : "Range.high",
        "type" : [
          {
            "code" : "Quantity",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-quantity-with-emed-units"
            ]
          }
        ]
      }
    ]
  }
}

```
