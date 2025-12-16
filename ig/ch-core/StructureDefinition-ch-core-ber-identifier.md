# BER Identifier - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **BER Identifier**

## Data Type Profile: BER Identifier 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-ber-identifier | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:BERIdentifier |
| **Copyright/Legal**: CC0-1.0 | |

 
Identifier holding a number for BER (Business and Enterprise Register), BUR (Betriebs- und Unternehmensregister), REE (Registre des entreprises et des établissements), RIS (Registro delle imprese e degli stabilimenti) 

**Usages:**

* Use this DataType Profile: [CH Core Organization](StructureDefinition-ch-core-organization.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-ber-identifier)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-ber-identifier.csv), [Excel](StructureDefinition-ch-core-ber-identifier.xlsx), [Schematron](StructureDefinition-ch-core-ber-identifier.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-ber-identifier",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-ber-identifier",
  "version" : "6.0.0",
  "name" : "BERIdentifier",
  "title" : "BER Identifier",
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
  "description" : "Identifier holding a number for BER (Business and Enterprise Register), BUR (Betriebs- und Unternehmensregister), REE (Registre des entreprises et des établissements), RIS (Registro delle imprese e degli stabilimenti)",
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
        "short" : "OID of the BER/BUR/REE/RIS",
        "min" : 1,
        "fixedUri" : "urn:oid:2.16.756.5.45"
      },
      {
        "id" : "Identifier.value",
        "path" : "Identifier.value",
        "short" : "BER/BUR/REE/RIS number",
        "min" : 1,
        "constraint" : [
          {
            "key" : "ber-length",
            "severity" : "warning",
            "human" : "BER must start with A or B, followed by a non-zero digit, then 7 more digits",
            "expression" : "matches('^[A-B][1-9][0-9]{7}$')",
            "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-ber-identifier"
          },
          {
            "key" : "ber-modulus-11",
            "severity" : "warning",
            "human" : "BER must pass the modulus 11 check",
            "expression" : "11-((substring(1,1).toInteger()*5)+(substring(2,1).toInteger()*4)+(substring(3,1).toInteger()*3)+(substring(4,1).toInteger()*2)+(substring(5,1).toInteger()*7)+(substring(6,1).toInteger()*6)+(substring(7,1).toInteger()*5))mod(11)=substring(8,1).toInteger()",
            "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-ber-identifier"
          }
        ]
      }
    ]
  }
}

```
