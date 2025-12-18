# HpdAuditEventType - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HpdAuditEventType**

## ValueSet: HpdAuditEventType 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/ValueSet/HpdAuditEventType | *Version*:5.0.0 |
| Draft as of 2022-06-29 | *Computable Name*:HpdAuditEventType |
| **Copyright/Legal**: CC0-1.0 | |

 
Implementation Guide for CH ATC see Audit Trail Consumption 

 **References** 

* [HpdAuditEvent](StructureDefinition-HpdAuditEvent.md)

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
  "id" : "HpdAuditEventType",
  "meta" : {
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
  "url" : "http://fhir.ch/ig/ch-epr-fhir/ValueSet/HpdAuditEventType",
  "version" : "5.0.0",
  "name" : "HpdAuditEventType",
  "title" : "HpdAuditEventType",
  "status" : "draft",
  "experimental" : false,
  "date" : "2022-06-29",
  "publisher" : "eHealth Suisse",
  "contact" : [
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch"
        }
      ]
    },
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Implementation Guide for CH ATC see Audit Trail Consumption",
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
        "system" : "urn:oid:2.16.756.5.30.1.127.3.10.7",
        "concept" : [
          {
            "code" : "ATC_HPD_GROUP_ENTRY_NOTIFY"
          }
        ]
      }
    ]
  }
}

```
