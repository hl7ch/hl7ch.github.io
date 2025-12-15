# BFS Medizinische Statistik - 27 1.5.V02 - Entscheid für Austritt / Décision de sortie / Décisione dell’uscita - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **BFS Medizinische Statistik - 27 1.5.V02 - Entscheid für Austritt / Décision de sortie / Décisione dell’uscita**

## ValueSet: BFS Medizinische Statistik - 27 1.5.V02 - Entscheid für Austritt / Décision de sortie / Décisione dell’uscita 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-27-dischargedecision | *Version*:3.3.0 |
| Active as of 2019-01-01 | *Computable Name*:BfsMedstats27Dischargedecision |
| **Copyright/Legal**: CC0-1.0 | |

 
BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Wer hat den Klinikaustritt veranlasst? 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/bfs-medstats-27-dischargedecision) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "bfs-medstats-27-dischargedecision",
  "url" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-27-dischargedecision",
  "version" : "3.3.0",
  "name" : "BfsMedstats27Dischargedecision",
  "title" : "BFS Medizinische Statistik - 27 1.5.V02 - Entscheid für Austritt / Décision de sortie / Décisione dell’uscita",
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
  "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Wer hat den Klinikaustritt veranlasst?",
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
        "system" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-27-dischargedecision",
        "concept" : [
          {
            "code" : "1",
            "display" : "auf Initiative des Behandelnden",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "auf Initiative des Behandelnden"
              },
              {
                "language" : "fr-CH",
                "value" : "Sur l’initiative du traitant"
              },
              {
                "language" : "it-CH",
                "value" : "su iniziativa del curante"
              }
            ]
          },
          {
            "code" : "2",
            "display" : "auf Initiative des Patienten (gegen Ansicht des Behandelnden)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "auf Initiative des Patienten (gegen Ansicht des Behandelnden)"
              },
              {
                "language" : "fr-CH",
                "value" : "Sur l’initiative du patient (contre l’avis traitant)"
              },
              {
                "language" : "it-CH",
                "value" : "su iniziativa del paziente (contro il parere del curante)"
              }
            ]
          },
          {
            "code" : "3",
            "display" : "auf Initiative einer Drittperson",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "auf Initiative einer Drittperson"
              },
              {
                "language" : "fr-CH",
                "value" : "Sur l’initiative d’une tierce personne"
              },
              {
                "language" : "it-CH",
                "value" : "su iniziativa di terzi"
              }
            ]
          },
          {
            "code" : "4",
            "display" : "interner Übertritt",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "interner Übertritt"
              },
              {
                "language" : "fr-CH",
                "value" : "Transfert interne"
              },
              {
                "language" : "it-CH",
                "value" : "trasferimento interno"
              }
            ]
          },
          {
            "code" : "5",
            "display" : "gestorben",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "gestorben"
              },
              {
                "language" : "fr-CH",
                "value" : "Décédé"
              },
              {
                "language" : "it-CH",
                "value" : "decesso"
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
