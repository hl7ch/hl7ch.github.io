# BFS Medizinische Statistik - 19 1.2.V04 - Einweisende Instanz / Décision d’envoi / Istanza ricoverante - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **BFS Medizinische Statistik - 19 1.2.V04 - Einweisende Instanz / Décision d’envoi / Istanza ricoverante**

## ValueSet: BFS Medizinische Statistik - 19 1.2.V04 - Einweisende Instanz / Décision d’envoi / Istanza ricoverante 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-19-admitrole | *Version*:3.3.0 |
| Active as of 2019-01-01 | *Computable Name*:BfsMedstats19Admitrole |
| **Copyright/Legal**: CC0-1.0 | |

 
BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Unmittelbarer Aufenthaltsort vor dem Eintritt. Wo befand sich BFS der Patient / die Patientin? 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/bfs-medstats-19-admitrole) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "bfs-medstats-19-admitrole",
  "url" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-19-admitrole",
  "version" : "3.3.0",
  "name" : "BfsMedstats19Admitrole",
  "title" : "BFS Medizinische Statistik - 19 1.2.V04 - Einweisende Instanz / Décision d’envoi / Istanza ricoverante",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-01-01",
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
  "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Unmittelbarer Aufenthaltsort vor dem Eintritt. Wo befand sich BFS der Patient / die Patientin?",
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
        "system" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-19-admitrole",
        "concept" : [
          {
            "code" : "1",
            "display" : "selbst, Angehörige",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "selbst, Angehörige"
              },
              {
                "language" : "fr-CH",
                "value" : "Initiative propre, proches"
              },
              {
                "language" : "it-CH",
                "value" : "paziente stesso, familiare"
              }
            ]
          },
          {
            "code" : "2",
            "display" : "Rettungsdienst (Ambulanz, Polizei)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rettungsdienst (Ambulanz, Polizei)"
              },
              {
                "language" : "fr-CH",
                "value" : "Service de sauvetage (ambulance, police)"
              },
              {
                "language" : "it-CH",
                "value" : "servizio di soccorso (ambulanza, polizia)"
              }
            ]
          },
          {
            "code" : "3",
            "display" : "Arzt",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Arzt"
              },
              {
                "language" : "fr-CH",
                "value" : "Médecin"
              },
              {
                "language" : "it-CH",
                "value" : "medico"
              }
            ]
          },
          {
            "code" : "4",
            "display" : "nichtmedizinischer Therapeut",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "nichtmedizinischer Therapeut"
              },
              {
                "language" : "fr-CH",
                "value" : "Thérapeute non médecin"
              },
              {
                "language" : "it-CH",
                "value" : "terapista non medico"
              }
            ]
          },
          {
            "code" : "5",
            "display" : "sozialmedizinischer Dienst",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "sozialmedizinischer Dienst"
              },
              {
                "language" : "fr-CH",
                "value" : "Services sociaux"
              },
              {
                "language" : "it-CH",
                "value" : "servizio sociosanitario"
              }
            ]
          },
          {
            "code" : "6",
            "display" : "Justizbehörden",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Justizbehörden"
              },
              {
                "language" : "fr-CH",
                "value" : "Autorités judiciaires"
              },
              {
                "language" : "it-CH",
                "value" : "autorità giudiziarie"
              }
            ]
          },
          {
            "code" : "8",
            "display" : "andere",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "andere"
              },
              {
                "language" : "fr-CH",
                "value" : "Autre"
              },
              {
                "language" : "it-CH",
                "value" : "altro"
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
                "value" : "Inconnu"
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
