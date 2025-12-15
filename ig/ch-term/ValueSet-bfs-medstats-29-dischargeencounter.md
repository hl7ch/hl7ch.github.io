# BFS Medizinische Statistik - 29 1.5.V04 - Behandlung nach Austritt / Prise en charge après la sortie / Trattamento dopo l’uscita - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **BFS Medizinische Statistik - 29 1.5.V04 - Behandlung nach Austritt / Prise en charge après la sortie / Trattamento dopo l’uscita**

## ValueSet: BFS Medizinische Statistik - 29 1.5.V04 - Behandlung nach Austritt / Prise en charge après la sortie / Trattamento dopo l’uscita 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-29-dischargeencounter | *Version*:3.3.0 |
| Active as of 2019-01-01 | *Computable Name*:BfsMedstats29Dischargeencounter |
| **Copyright/Legal**: CC0-1.0 | |

 
BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Behandlung, Pflege, Rehabilitation nach dem Spitalaufenthalt. Es geht darum, den Behandlungserfolg resp. den Abhängigkeitsgrad bei Austritt anzugeben. Nur die am besten zutreffende Kategorie auswählen. 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/bfs-medstats-29-dischargeencounter) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "bfs-medstats-29-dischargeencounter",
  "url" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-29-dischargeencounter",
  "version" : "3.3.0",
  "name" : "BfsMedstats29Dischargeencounter",
  "title" : "BFS Medizinische Statistik - 29 1.5.V04 - Behandlung nach Austritt / Prise en charge après la sortie / Trattamento dopo l’uscita",
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
  "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Behandlung, Pflege, Rehabilitation nach dem Spitalaufenthalt. Es geht darum, den Behandlungserfolg resp. den Abhängigkeitsgrad bei Austritt anzugeben. Nur die am besten zutreffende Kategorie auswählen.",
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
        "system" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-29-dischargeencounter",
        "concept" : [
          {
            "code" : "1",
            "display" : "geheilt/kein Behandlungsbedarf",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "geheilt/kein Behandlungsbedarf"
              },
              {
                "language" : "fr-CH",
                "value" : "Guéri, aucun besoin de suivi"
              },
              {
                "language" : "it-CH",
                "value" : "guarito/nessun bisogno di trattamento"
              }
            ]
          },
          {
            "code" : "2",
            "display" : "ambulante Behandlung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "ambulante Behandlung"
              },
              {
                "language" : "fr-CH",
                "value" : "Soins ou traitement ambulatoires (cabinet médical ou en établissement)"
              },
              {
                "language" : "it-CH",
                "value" : "trattamento ambulatoriale"
              }
            ]
          },
          {
            "code" : "3",
            "display" : "ambulante Pflege (z.B. SPITEX)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "ambulante Pflege (z.B. SPITEX)"
              },
              {
                "language" : "fr-CH",
                "value" : "Soins à domicile"
              },
              {
                "language" : "it-CH",
                "value" : "cure ambulatoriali (p.es. SPITEX)"
              }
            ]
          },
          {
            "code" : "4",
            "display" : "stationäre Behandlung oder Pflege",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "stationäre Behandlung oder Pflege"
              },
              {
                "language" : "fr-CH",
                "value" : "Soins ou traitement stationnaires"
              },
              {
                "language" : "it-CH",
                "value" : "trattamento o cure stazionari"
              }
            ]
          },
          {
            "code" : "5",
            "display" : "Rehabilitation (amb. oder stat.)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rehabilitation (amb. oder stat.)"
              },
              {
                "language" : "fr-CH",
                "value" : "Réadaptation ambulatoire ou stationnaire"
              },
              {
                "language" : "it-CH",
                "value" : "riabilitazione (ambulatoriale o stazionaria)"
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
          },
          {
            "code" : "0",
            "display" : "Todesfall",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Todesfall"
              },
              {
                "language" : "fr-CH",
                "value" : "décédé"
              },
              {
                "language" : "it-CH",
                "value" : "decesso"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
