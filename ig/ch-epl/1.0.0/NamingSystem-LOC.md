# LOC Identifier - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **LOC Identifier**

## NamingSystem: LOC Identifier 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/NamingSystem/LOC | *Version*:1.0.0 |
| Active as of 2025-04-25 | *Computable Name*:LocID |
| **Copyright/Legal**: CC0-1.0 | |

 
Identifier holding a number for LocID (Location Identifier of the European Medicines Agency - Organisation Management System OMS) 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "LOC",
  "url" : "http://fhir.ch/ig/ch-epl/NamingSystem/LOC",
  "version" : "1.0.0",
  "name" : "LocID",
  "title" : "LOC Identifier",
  "status" : "active",
  "kind" : "identifier",
  "date" : "2025-04-25",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "Identifier holding a number for LocID (Location Identifier of the European Medicines Agency - Organisation Management System OMS)",
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
  "uniqueId" : [
    {
      "type" : "oid",
      "value" : "1.2.276.0.76",
      "preferred" : true
    },
    {
      "type" : "uri",
      "value" : "urn:oid:1.2.276.0.76",
      "preferred" : false
    }
  ]
}

```
