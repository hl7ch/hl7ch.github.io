# Insurance Card Number (Identifier) - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Insurance Card Number (Identifier)**

## Data Type Profile: Insurance Card Number (Identifier) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-veka-identifier | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:VEKAIdentifier |
| **Copyright/Legal**: CC0-1.0 | |

 
Identifier in 20-digit format. The number shall have exactly 20 digits and start with 807560. 

**Usages:**

* Use this DataType Profile: [CH Core Coverage](StructureDefinition-ch-core-coverage.md) and [CH Core Patient](StructureDefinition-ch-core-patient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-veka-identifier)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-veka-identifier.csv), [Excel](StructureDefinition-ch-core-veka-identifier.xlsx), [Schematron](StructureDefinition-ch-core-veka-identifier.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-veka-identifier",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-veka-identifier",
  "version" : "6.0.0",
  "name" : "VEKAIdentifier",
  "title" : "Insurance Card Number (Identifier)",
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
  "description" : "Identifier in 20-digit format. The number shall have exactly 20 digits and start with 807560.",
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
    },
    {
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "Identifier",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Identifier",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Identifier.system",
        "path" : "Identifier.system",
        "min" : 1,
        "fixedUri" : "urn:oid:2.16.756.5.30.1.123.100.1.1.1"
      },
      {
        "id" : "Identifier.value",
        "path" : "Identifier.value",
        "min" : 1,
        "constraint" : [
          {
            "key" : "veka-length",
            "severity" : "warning",
            "human" : "Insurance card number must start with 807560 followed by 14 digits",
            "expression" : "matches('^807560[0-9]{14}$')",
            "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-veka-identifier"
          }
        ]
      },
      {
        "id" : "Identifier.period.end",
        "path" : "Identifier.period.end",
        "short" : "Expiration date of the insurance card"
      }
    ]
  }
}

```
