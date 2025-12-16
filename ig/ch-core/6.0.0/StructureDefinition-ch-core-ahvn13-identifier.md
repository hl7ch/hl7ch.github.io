# AHVN13 / NAVS13 Identifier - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **AHVN13 / NAVS13 Identifier**

## Data Type Profile: AHVN13 / NAVS13 Identifier 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-ahvn13-identifier | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:AHVN13Identifier |
| **Copyright/Legal**: CC0-1.0 | |

 
Identifier holding a 13 digit social security number. The number shall have exactly 13 digits and shall not contain point characters for separation. 

**Usages:**

* Use this DataType Profile: [CH Core Patient](StructureDefinition-ch-core-patient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-ahvn13-identifier)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-ahvn13-identifier.csv), [Excel](StructureDefinition-ch-core-ahvn13-identifier.xlsx), [Schematron](StructureDefinition-ch-core-ahvn13-identifier.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-ahvn13-identifier",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-ahvn13-identifier",
  "version" : "6.0.0",
  "name" : "AHVN13Identifier",
  "title" : "AHVN13 / NAVS13 Identifier",
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
  "description" : "Identifier holding a 13 digit social security number. The number shall have exactly 13 digits and shall not contain point characters for separation.",
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
        "id" : "Identifier",
        "path" : "Identifier"
      },
      {
        "id" : "Identifier.system",
        "path" : "Identifier.system",
        "min" : 1,
        "fixedUri" : "urn:oid:2.16.756.5.32"
      },
      {
        "id" : "Identifier.value",
        "path" : "Identifier.value",
        "min" : 1,
        "constraint" : [
          {
            "key" : "ahvn13-length",
            "severity" : "warning",
            "human" : "AHVN13 / NAVS13 must start with 756 followed by 10 digits",
            "expression" : "matches('^756[0-9]{10}$')",
            "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-ahvn13-identifier"
          },
          {
            "key" : "ahvn13-digit-check",
            "severity" : "warning",
            "human" : "AHVN13 / NAVS13 must pass digit check - https://www.gs1.org/services/how-calculate-check-digit-manually",
            "expression" : "(((10-(28+(substring(3,1).toInteger()*3)+(substring(4,1).toInteger()*1)+(substring(5,1).toInteger()*3)+(substring(6,1).toInteger()*1)+(substring(7,1).toInteger()*3)+(substring(8,1).toInteger()*1)+(substring(9,1).toInteger()*3)+(substring(10,1).toInteger()*1)+(substring(11,1).toInteger()*3))mod(10))mod(10))=substring(12,1).toInteger())",
            "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-ahvn13-identifier"
          }
        ]
      }
    ]
  }
}

```
