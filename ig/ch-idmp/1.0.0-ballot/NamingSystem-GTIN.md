# Global Trade Item Number - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Global Trade Item Number**

## NamingSystem: Global Trade Item Number 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/NamingSystem/GTIN | *Version*:1.0.0-ballot |
| Active as of 2025-04-25 | *Computable Name*:GTIN |
| **Copyright/Legal**: CC0-1.0 | |

 
GS1 defines trade items as products or services that are priced, ordered or invoiced at any point in the supply chain. 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "GTIN",
  "url" : "http://fhir.ch/ig/ch-idmp/NamingSystem/GTIN",
  "version" : "1.0.0-ballot",
  "name" : "GTIN",
  "title" : "Global Trade Item Number",
  "status" : "active",
  "kind" : "identifier",
  "date" : "2025-04-25",
  "publisher" : "Refdata Foundation",
  "contact" : [{
    "name" : "Refdata Foundation",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.refdata.ch/de/"
    }]
  }],
  "description" : "GS1 defines trade items as products or services that are priced, ordered or invoiced at any point in the supply chain.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "uniqueId" : [{
    "type" : "oid",
    "value" : "2.51.1.1",
    "preferred" : true
  },
  {
    "type" : "uri",
    "value" : "urn:oid:2.51.1.1",
    "preferred" : false
  }]
}

```
