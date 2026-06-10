# CH EMED Ratio with EMED Units - CH Core (R4) v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED Ratio with EMED Units**

## Data Type Profile: CH EMED Ratio with EMED Units 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-emed-ratio-with-emed-units | *Version*:7.0.0-ballot |
| Active as of 2026-06-10 | *Computable Name*:CHCoreRatioWithEmedUnits |
| **Copyright/Legal**: CC0-1.0 | |

 
A ratio with defined units 

**Usages:**

* Use this DataType Profile: [CH Core Medication](StructureDefinition-ch-core-medication.md) and [CH Core MedicationAdministration](StructureDefinition-ch-core-medicationadministration.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-core|current/StructureDefinition/StructureDefinition-ch-emed-ratio-with-emed-units.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-ratio-with-emed-units.csv), [Excel](StructureDefinition-ch-emed-ratio-with-emed-units.xlsx), [Schematron](StructureDefinition-ch-emed-ratio-with-emed-units.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-ratio-with-emed-units",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-emed-ratio-with-emed-units",
  "version" : "7.0.0-ballot",
  "name" : "CHCoreRatioWithEmedUnits",
  "title" : "CH EMED Ratio with EMED Units",
  "status" : "active",
  "date" : "2026-06-10T14:59:48+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  },
  {
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/",
      "use" : "work"
    }]
  }],
  "description" : "A ratio with defined units",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "Ratio",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Ratio",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Ratio.numerator",
      "path" : "Ratio.numerator",
      "min" : 1,
      "type" : [{
        "code" : "Quantity",
        "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-quantity-with-emed-units"]
      }]
    },
    {
      "id" : "Ratio.denominator",
      "path" : "Ratio.denominator",
      "min" : 1,
      "type" : [{
        "code" : "Quantity",
        "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-quantity-with-emed-units"]
      }]
    }]
  }
}

```
