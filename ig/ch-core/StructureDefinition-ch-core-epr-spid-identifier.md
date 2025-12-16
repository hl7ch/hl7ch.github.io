# EPR-SPID Identifier - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EPR-SPID Identifier**

## Data Type Profile: EPR-SPID Identifier 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-epr-spid-identifier | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:EPRSPIDIdentifier |
| **Copyright/Legal**: CC0-1.0 | |

 
EPR-SPID Identifier (https://www.fedlex.admin.ch/eli/cc/2017/205/de) 

**Usages:**

* Use this DataType Profile: [CH Core Patient](StructureDefinition-ch-core-patient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-epr-spid-identifier)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-epr-spid-identifier.csv), [Excel](StructureDefinition-ch-core-epr-spid-identifier.xlsx), [Schematron](StructureDefinition-ch-core-epr-spid-identifier.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-epr-spid-identifier",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-epr-spid-identifier",
  "version" : "6.0.0",
  "name" : "EPRSPIDIdentifier",
  "title" : "EPR-SPID Identifier",
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
  "description" : "EPR-SPID Identifier (https://www.fedlex.admin.ch/eli/cc/2017/205/de)",
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
        "fixedUri" : "urn:oid:2.16.756.5.30.1.127.3.10.3"
      },
      {
        "id" : "Identifier.value",
        "path" : "Identifier.value",
        "min" : 1,
        "constraint" : [
          {
            "key" : "epr-spid-length",
            "severity" : "warning",
            "human" : "EPR-SPID must start with 76133761 followed by 10 digits",
            "expression" : "matches('^76133761[0-9]{10}$')",
            "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-epr-spid-identifier"
          },
          {
            "key" : "epr-spid-modulus-10",
            "severity" : "warning",
            "human" : "EPR-SPID must pass the modulus 10 check - https://www.gs1.org/services/how-calculate-check-digit-manually",
            "expression" : "(((10-((68+(substring(8,1).toInteger()*3)+(substring(9,1).toInteger()*1)+(substring(10,1).toInteger()*3)+(substring(11,1).toInteger()*1)+(substring(12,1).toInteger()*3)+(substring(13,1).toInteger()*1)+(substring(14,1).toInteger()*3)+(substring(15,1).toInteger()*1)+(substring(16,1).toInteger()*3))mod(10)))mod(10))=substring(17,1).toInteger())",
            "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-epr-spid-identifier"
          }
        ]
      }
    ]
  }
}

```
