# Swissmedic Location Identifier - CH EPL (R5) v1.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Swissmedic Location Identifier**

## NamingSystem: Swissmedic Location Identifier 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/NamingSystem/SwissmedicLocationsIdentifier | *Version*:1.0.1 |
| Draft as of 2026-03-06 | *Computable Name*:SwissmedicLocationsIdentifier |
| **Copyright/Legal**: CC0-1.0 | |

 
Temporary Namingsystem in this implementation guide until officially released by Swissmedic 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "SwissmedicLocationsIdentifier",
  "url" : "http://fhir.ch/ig/ch-epl/NamingSystem/SwissmedicLocationsIdentifier",
  "version" : "1.0.1",
  "name" : "SwissmedicLocationsIdentifier",
  "title" : "Swissmedic Location Identifier",
  "status" : "draft",
  "kind" : "identifier",
  "date" : "2026-03-06",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [{
    "name" : "Federal Office of Public Health FOPH",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
    }]
  }],
  "description" : "Temporary Namingsystem in this implementation guide until officially released by Swissmedic",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "uniqueId" : [{
    "type" : "uri",
    "value" : "https://www.swissmedic.ch/fhir/identifier/locations",
    "preferred" : true
  }]
}

```
