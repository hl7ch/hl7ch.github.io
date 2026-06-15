# CH EMS Quantity - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS Quantity**

## Data Type Profile: CH EMS Quantity 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-quantity | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsQuantity |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Quantity data type. 

**Usages:**

* Use this DataType Profile: [CH EMS Observation: GCS](StructureDefinition-ch-ems-observation-gcs.md) and [CH EMS Observation: Heart Rate](StructureDefinition-ch-ems-observation-heartrate.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-quantity.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-quantity.csv), [Excel](StructureDefinition-ch-ems-quantity.xlsx), [Schematron](StructureDefinition-ch-ems-quantity.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-quantity",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-quantity",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsQuantity",
  "title" : "CH EMS Quantity",
  "status" : "active",
  "date" : "2026-06-15T08:07:03+00:00",
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
  "description" : "This profile constrains the Quantity data type.",
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
  "type" : "Quantity",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Quantity",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Quantity",
      "path" : "Quantity",
      "short" : "CH EMS Quantity"
    },
    {
      "id" : "Quantity.value",
      "path" : "Quantity.value",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Quantity.unit",
      "path" : "Quantity.unit",
      "mustSupport" : true
    },
    {
      "id" : "Quantity.system",
      "path" : "Quantity.system",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Quantity.code",
      "path" : "Quantity.code",
      "min" : 1,
      "mustSupport" : true
    }]
  }
}

```
