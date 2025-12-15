# ChCoreMaritalStatus - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ChCoreMaritalStatus**

## ValueSet: ChCoreMaritalStatus 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/ValueSet/ch-core-maritalstatus | *Version*:3.3.0 |
| Active as of 2018-11-26 | *Computable Name*:ChCoreMaritalStatus |
| **Copyright/Legal**: CC0-1.0 | |

 
MaritalStatus combined by fhir and eCH-11. See[maritalData - Zivilstandsangaben eCH-11](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html)and/or[BFS Amtlicher Katalog der Merkmale](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html). 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/ch-core-maritalstatus) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "ch-core-maritalstatus",
  "url" : "http://fhir.ch/ig/ch-core/ValueSet/ch-core-maritalstatus",
  "version" : "3.3.0",
  "name" : "ChCoreMaritalStatus",
  "title" : "ChCoreMaritalStatus",
  "status" : "active",
  "experimental" : false,
  "date" : "2018-11-26",
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
  "description" : "MaritalStatus combined by fhir and eCH-11. See [maritalData - Zivilstandsangaben eCH-11](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html) and/or [BFS Amtlicher Katalog der Merkmale](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.349276.html).",
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
        "valueSet" : ["http://hl7.org/fhir/ValueSet/marital-status"]
      },
      {
        "system" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-maritalstatus",
        "concept" : [
          {
            "code" : "1",
            "display" : "ledig",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "ledig"
              },
              {
                "language" : "fr-CH",
                "value" : "célibataire"
              },
              {
                "language" : "it-CH",
                "value" : "celibe/nubile"
              }
            ]
          },
          {
            "code" : "2",
            "display" : "verheiratet",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "verheiratet"
              },
              {
                "language" : "fr-CH",
                "value" : "marié-e"
              },
              {
                "language" : "it-CH",
                "value" : "coniugato/a"
              }
            ]
          },
          {
            "code" : "3",
            "display" : "verwitwet",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "verwitwet"
              },
              {
                "language" : "fr-CH",
                "value" : "veuf/veuve"
              },
              {
                "language" : "it-CH",
                "value" : "vedovo/vedova"
              }
            ]
          },
          {
            "code" : "4",
            "display" : "geschieden",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "geschieden"
              },
              {
                "language" : "fr-CH",
                "value" : "divorcé-e"
              },
              {
                "language" : "it-CH",
                "value" : "divorziato/a"
              }
            ]
          },
          {
            "code" : "5",
            "display" : "unverheiratet",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "unverheiratet"
              },
              {
                "language" : "fr-CH",
                "value" : "non marié-e"
              },
              {
                "language" : "it-CH",
                "value" : "non coniugato/a"
              }
            ]
          },
          {
            "code" : "6",
            "display" : "in eingetragener Partnerschaft",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "in eingetragener Partnerschaft"
              },
              {
                "language" : "fr-CH",
                "value" : "lié-e par un partenariat enregistré"
              },
              {
                "language" : "it-CH",
                "value" : "in unione domestica registrata"
              }
            ]
          },
          {
            "code" : "7",
            "display" : "aufgelöste Partnerschaft",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "aufgelöste Partnerschaft"
              },
              {
                "language" : "fr-CH",
                "value" : "partenariat dissous"
              },
              {
                "language" : "it-CH",
                "value" : "unione domestica sciolta"
              }
            ]
          },
          {
            "code" : "9",
            "display" : "unbekannt",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "unbekannt"
              },
              {
                "language" : "fr-CH",
                "value" : "inconnu"
              },
              {
                "language" : "it-CH",
                "value" : "sconosciuto"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
