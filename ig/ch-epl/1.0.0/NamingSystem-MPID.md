# Medical Product Identifier - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Medical Product Identifier**

## NamingSystem: Medical Product Identifier 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/NamingSystem/MPID | *Version*:1.0.0 |
| Draft as of 2025-10-28 | *Computable Name*:MPID |
| **Copyright/Legal**: CC0-1.0 | |

 
Temporary Identifier in this implementation guide until officially released by Swissmedic 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "MPID",
  "url" : "http://fhir.ch/ig/ch-epl/NamingSystem/MPID",
  "version" : "1.0.0",
  "name" : "MPID",
  "title" : "Medical Product Identifier",
  "status" : "draft",
  "kind" : "identifier",
  "date" : "2025-10-28",
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
  "description" : "Temporary Identifier in this implementation guide until officially released by Swissmedic",
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
  "usage" : "Used to identify medicinal products per ISO 11615 (MPID).",
  "uniqueId" : [
    {
      "type" : "uri",
      "value" : "http://fhir.ch/ig/ch-epl/sid/mpid",
      "preferred" : true
    }
  ]
}

```
