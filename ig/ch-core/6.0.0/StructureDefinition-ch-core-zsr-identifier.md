# ZSR Identifier - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ZSR Identifier**

## Data Type Profile: ZSR Identifier 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-zsr-identifier | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ZSRIdentifier |
| **Copyright/Legal**: CC0-1.0 | |

 
Identifier holding a number for ZSR (Zahlstellenregister), RCC (Registre des codes-créanciers), RCC (Registro dei codici creditori) 

**Usages:**

* Use this DataType Profile: [CH Core Organization](StructureDefinition-ch-core-organization.md) and [CH Core Practitioner](StructureDefinition-ch-core-practitioner.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-zsr-identifier)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-zsr-identifier.csv), [Excel](StructureDefinition-ch-core-zsr-identifier.xlsx), [Schematron](StructureDefinition-ch-core-zsr-identifier.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-zsr-identifier",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-zsr-identifier",
  "version" : "6.0.0",
  "name" : "ZSRIdentifier",
  "title" : "ZSR Identifier",
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
  "description" : "Identifier holding a number for ZSR (Zahlstellenregister), RCC (Registre des codes-créanciers), RCC (Registro dei codici creditori)",
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
        "short" : "OID of the ZSR/RCC",
        "min" : 1,
        "fixedUri" : "urn:oid:2.16.756.5.30.1.123.100.2.1.1"
      },
      {
        "id" : "Identifier.value",
        "path" : "Identifier.value",
        "short" : "ZSR/RCC number",
        "min" : 1,
        "constraint" : [
          {
            "key" : "zsr-length",
            "severity" : "warning",
            "human" : "ZSR must be exactly one letter and 6 digits long",
            "expression" : "matches('^[A-Z][0-9]{6}$')",
            "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-zsr-identifier"
          },
          {
            "key" : "zsr-check-digit",
            "severity" : "warning",
            "human" : "ZSR must pass the modulus 26 check - https://confluence.sasis.ch/display/PublicZSR/ZSR+Webservice+FAQ",
            "expression" : "((substring(1,1).toInteger()*6)+(substring(2,1).toInteger()*5)+(substring(3,1).toInteger()*4)+(substring(4,1).toInteger()*3)+(substring(5,1).toInteger()*2)+(substring(6,1).toInteger()))mod(26)=iif(substring(0,1)='A',1,iif(substring(0,1)='B',2,iif(substring(0,1)='C',3,iif(substring(0,1)='D',4,iif(substring(0,1)='E',5,iif(substring(0,1)='F',6,iif(substring(0,1)='G',7,iif(substring(0,1)='H',8,iif(substring(0,1)='I',9,iif(substring(0,1)='J',10,iif(substring(0,1)='K',11,iif(substring(0,1)='L',12,iif(substring(0,1)='M',13,iif(substring(0,1)='N',14,iif(substring(0,1)='O',15,iif(substring(0,1)='P',16,iif(substring(0,1)='Q',17,iif(substring(0,1)='R',18,iif(substring(0,1)='S',19,iif(substring(0,1)='T',20,iif(substring(0,1)='U',21,iif(substring(0,1)='V',22,iif(substring(0,1)='W',23,iif(substring(0,1)='X',24,iif(substring(0,1)='Y',25,iif(substring(0,1)='Z',26,-1))))))))))))))))))))))))))",
            "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-zsr-identifier"
          }
        ]
      }
    ]
  }
}

```
