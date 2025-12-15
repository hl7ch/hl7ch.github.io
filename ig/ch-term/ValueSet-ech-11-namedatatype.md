# eCH-011 NameDataTypes - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eCH-011 NameDataTypes**

## ValueSet: eCH-011 NameDataTypes 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/ValueSet/ech-11-namedatatype | *Version*:3.3.0 |
| Active as of 2018-11-12 | *Computable Name*:ECH11NameDataTypes |
| **Copyright/Legal**: CC0-1.0 | |

 
eCH-011 defines different nameData Types, this ValueSet is the subset for the family name 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/ech-11-namedatatype) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "ech-11-namedatatype",
  "url" : "http://fhir.ch/ig/ch-core/ValueSet/ech-11-namedatatype",
  "version" : "3.3.0",
  "name" : "ECH11NameDataTypes",
  "title" : "eCH-011 NameDataTypes",
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
  "description" : "eCH-011 defines different nameData Types, this ValueSet is the subset for the family name",
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
            "code" : "officialName",
            "display" : "Amtlicher Name (zwingend), BFS-211",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Amtlicher Name"
              },
              {
                "language" : "fr-CH",
                "value" : "Nom officiel"
              },
              {
                "language" : "it-CH",
                "value" : "Cognome ufficiale"
              }
            ]
          },
          {
            "code" : "originalName",
            "display" : "Ledigname, BFS-212",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ledigname"
              },
              {
                "language" : "fr-CH",
                "value" : "Nom de célibataire"
              },
              {
                "language" : "it-CH",
                "value" : "Cognome da celibe/nubile"
              }
            ]
          },
          {
            "code" : "allianceName",
            "display" : "Allianzname, BFS-213",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Allianzname"
              },
              {
                "language" : "fr-CH",
                "value" : "Nom d’alliance"
              },
              {
                "language" : "it-CH",
                "value" : "Cognome d’affinità"
              }
            ]
          },
          {
            "code" : "nameOnForeignPassport",
            "display" : "Name im ausländischen Pass, BFS-214",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Name im ausländischen Pass"
              },
              {
                "language" : "fr-CH",
                "value" : "Nom selon le passeport étranger"
              },
              {
                "language" : "it-CH",
                "value" : "Cognome sul passaporto straniero"
              }
            ]
          },
          {
            "code" : "aliasName",
            "display" : "Aliasname, BFS-215",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Aliasname"
              },
              {
                "language" : "fr-CH",
                "value" : "Nom alias"
              },
              {
                "language" : "it-CH",
                "value" : "Pseudonimo"
              }
            ]
          },
          {
            "code" : "otherName",
            "display" : "Andere amtliche Name, BFS-216",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Andere amtliche Name"
              },
              {
                "language" : "fr-CH",
                "value" : "Autres noms"
              },
              {
                "language" : "it-CH",
                "value" : "Altri cognomi ufficiali"
              }
            ]
          },
          {
            "code" : "declaredForeignName",
            "display" : "Name gemäss Deklaration, BFS-217",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Name gemäss Deklaration"
              },
              {
                "language" : "fr-CH",
                "value" : "Nom selon déclaration"
              },
              {
                "language" : "it-CH",
                "value" : "Cognome dichiarato"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
