# eCH-011 FirstNameDataTypes - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eCH-011 FirstNameDataTypes**

## ValueSet: eCH-011 FirstNameDataTypes 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/ValueSet/ech-11-firstnamedatatype | *Version*:3.3.0 |
| Active as of 2018-11-12 | *Computable Name*:ECH11FirstNameDataTypes |
| **Copyright/Legal**: CC0-1.0 | |

 
eCH-011 defines different nameData Types, this ValueSet is the subset for the firstnames 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/ech-11-firstnamedatatype) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "ech-11-firstnamedatatype",
  "url" : "http://fhir.ch/ig/ch-core/ValueSet/ech-11-firstnamedatatype",
  "version" : "3.3.0",
  "name" : "ECH11FirstNameDataTypes",
  "title" : "eCH-011 FirstNameDataTypes",
  "status" : "active",
  "experimental" : false,
  "date" : "2018-11-12",
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
  "description" : "eCH-011 defines different nameData Types, this ValueSet is the subset for the firstnames",
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
  "compose" : {
    "include" : [
      {
        "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11",
        "concept" : [
          {
            "code" : "officialFirstName",
            "display" : "Amtliche Vornamen (zwingend), BFS-221",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Amtliche Vornamen"
              },
              {
                "language" : "fr-CH",
                "value" : "Prénoms officiels"
              },
              {
                "language" : "it-CH",
                "value" : "Nomi ufficiali"
              }
            ]
          },
          {
            "code" : "callName",
            "display" : "Rufname, BFS-222",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rufname"
              },
              {
                "language" : "fr-CH",
                "value" : "Prénom usuel"
              },
              {
                "language" : "it-CH",
                "value" : "Nome abituale"
              }
            ]
          },
          {
            "code" : "firstNameOnForeignPassport",
            "display" : "Vornamen im ausländischen Pass, BFS-223",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Vornamen im ausländischen Pass"
              },
              {
                "language" : "fr-CH",
                "value" : "Prénoms selon passeport étranger"
              },
              {
                "language" : "it-CH",
                "value" : "Nomi riportati sul passaporto straniero"
              }
            ]
          },
          {
            "code" : "declaredForeignFirstName",
            "display" : "Vorname(n) gemäss Deklaration, BFS-224",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Vorname(n) gemäss Deklaration"
              },
              {
                "language" : "fr-CH",
                "value" : "Prénoms selon déclaration"
              },
              {
                "language" : "it-CH",
                "value" : "Nomi dichiarati"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
