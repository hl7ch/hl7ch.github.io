# UIDB Identifier - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UIDB Identifier**

## Data Type Profile: UIDB Identifier 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-uidb-identifier | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:UIDBIdentifier |
| **Copyright/Legal**: CC0-1.0 | |

 
Identifier holding a number for UIDB (Unique Identification Business), UID (Verwendung der Unternehmens-Identifikationsnummer), IDE (Utilisation du numéro d'identification des entreprises), IDI (Utilizzo del numero d'identificazione delle imprese) 

**Usages:**

* Use this DataType Profile: [CH Core Organization](StructureDefinition-ch-core-organization.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-uidb-identifier)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-uidb-identifier.csv), [Excel](StructureDefinition-ch-core-uidb-identifier.xlsx), [Schematron](StructureDefinition-ch-core-uidb-identifier.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-uidb-identifier",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-uidb-identifier",
  "version" : "6.0.0",
  "name" : "UIDBIdentifier",
  "title" : "UIDB Identifier",
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
  "description" : "Identifier holding a number for UIDB (Unique Identification Business), UID (Verwendung der Unternehmens-Identifikationsnummer), IDE (Utilisation du numéro d'identification des entreprises), IDI (Utilizzo del numero d'identificazione delle imprese)",
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
        "short" : "OID of the UIDB/UID/IDE/IDI",
        "min" : 1,
        "fixedUri" : "urn:oid:2.16.756.5.35"
      },
      {
        "id" : "Identifier.value",
        "path" : "Identifier.value",
        "short" : "UIDB/UID/IDE/IDI number",
        "min" : 1,
        "constraint" : [
          {
            "key" : "uidb-length",
            "severity" : "warning",
            "human" : "UIDB must start with 'CHE' followed by a non-zero digit, then 8 more digits",
            "expression" : "matches('^CHE[1-9][0-9]{8}$')",
            "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-uidb-identifier"
          },
          {
            "key" : "uidb-modulus-11",
            "severity" : "warning",
            "human" : "UIDB must pass the modulus 11 check",
            "expression" : "11-((substring(3,1).toInteger()*5)+(substring(4,1).toInteger()*4)+(substring(5,1).toInteger()*3)+(substring(6,1).toInteger()*2)+(substring(7,1).toInteger()*7)+(substring(8,1).toInteger()*6)+(substring(9,1).toInteger()*5)+(substring(10,1).toInteger()*4))mod(11)=substring(11,1).toInteger()",
            "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-uidb-identifier"
          }
        ]
      }
    ]
  }
}

```
