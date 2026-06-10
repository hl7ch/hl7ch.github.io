# CH VACD Swissmedic Authorized Immunsera Codes - CH Term (R4) v3.4.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Swissmedic Authorized Immunsera Codes**

## ValueSet: CH VACD Swissmedic Authorized Immunsera Codes 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-swissmedic-immunesera-vs | *Version*:3.4.0 |
| Active as of 2026-06-10 | *Computable Name*:SwissImmunsera |
| **Copyright/Legal**: CC0-1.0 | |

 
The list of ATC J06B – Immune sera codes Swissmedic has given an authorization number. 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/ch-vacd-swissmedic-immunesera-vs) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "ch-vacd-swissmedic-immunesera-vs",
  "url" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-swissmedic-immunesera-vs",
  "version" : "3.4.0",
  "name" : "SwissImmunsera",
  "title" : "CH VACD Swissmedic Authorized Immunsera Codes",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-10T09:49:50+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  },
  {
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/",
      "use" : "work"
    }]
  }],
  "description" : "The list of ATC J06B – Immune sera codes Swissmedic has given an authorization number.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [{
      "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-immunesera-cs",
      "concept" : [{
        "code" : "65745-01",
        "display" : "Antivipmyn"
      },
      {
        "code" : "65746-01",
        "display" : "Antivipmyn TRI"
      },
      {
        "code" : "65747-01",
        "display" : "Banded Krait Antivenin"
      },
      {
        "code" : "65748-01",
        "display" : "Black Snake Antivenom"
      },
      {
        "code" : "65749-01",
        "display" : "Brown Snake Antivenom"
      },
      {
        "code" : "65750-01",
        "display" : "Cobra Antivenin"
      },
      {
        "code" : "65751-01",
        "display" : "CroFab"
      },
      {
        "code" : "65752-01",
        "display" : "Death Adder Antivenom"
      },
      {
        "code" : "65753-01",
        "display" : "Green Pit Viper Antivenin"
      },
      {
        "code" : "65754-01",
        "display" : "King Cobra Antivenin"
      },
      {
        "code" : "65755-01",
        "display" : "Malayan Pit Viper Antivenin"
      },
      {
        "code" : "65756-01",
        "display" : "Polyvalent Snake Antivenom"
      },
      {
        "code" : "65757-01",
        "display" : "Red Back Spider Antivenom"
      },
      {
        "code" : "65758-01",
        "display" : "Russell's Viper Antivenin"
      },
      {
        "code" : "65759-01",
        "display" : "SAIMR Boomslang Antivenom"
      },
      {
        "code" : "65760-01",
        "display" : "SAIMR Echis Antivenom"
      },
      {
        "code" : "65761-01",
        "display" : "SAIMR Polyvalent Snake Antivenom"
      },
      {
        "code" : "65763-01",
        "display" : "Snake Antivenin I.P."
      },
      {
        "code" : "65764-01",
        "display" : "Snake Venom Anti Serum polyvalent"
      },
      {
        "code" : "65766-01",
        "display" : "Taipan Antivenom"
      },
      {
        "code" : "65767-01",
        "display" : "Tiger Snake, Antivenom"
      }]
    }]
  }
}

```
