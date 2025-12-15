# EprAgentRole - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EprAgentRole**

## ValueSet: EprAgentRole 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/ValueSet/EprAgentRole | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:EprAgentRole |
| *Other Identifiers:*OID:2.16.756.5.30.1.127.3.10.13.1 (use: official, ) | |
| **Copyright/Legal**: CC0-1.0 | |

 
Role codes as per Annex 5 EPRO-FDHA, CH:ATC, version July 2019 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/EprAgentRole) via the XIG (Cross-IG) index for FHIR specifications. 

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "EprAgentRole",
  "meta" : {
    "source" : "https://art-decor.org/fhir/ValueSet/2.16.756.5.30.1.127.3.10.13.1--20191103143439",
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
      "valuePeriod" : {
        "start" : "2019-11-03T14:34:39+02:00"
      }
    }
  ],
  "url" : "http://fhir.ch/ig/ch-term/ValueSet/EprAgentRole",
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.756.5.30.1.127.3.10.13.1"
    }
  ],
  "version" : "3.3.0",
  "name" : "EprAgentRole",
  "title" : "EprAgentRole",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-15T10:36:18+00:00",
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
  "description" : "Role codes as per Annex 5 EPRO-FDHA, CH:ATC, version July 2019",
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
  "immutable" : false,
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [
      {
        "system" : "urn:oid:2.16.756.5.30.1.127.3.10.14",
        "concept" : [
          {
            "code" : "GRP",
            "display" : "Group"
          }
        ]
      }
    ]
  }
}

```
