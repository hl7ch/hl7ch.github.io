# BFS Medizinische Statistik - 18 1.2.V03 - Eintrittsart / Mode d’admission / Genere di ricovero - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **BFS Medizinische Statistik - 18 1.2.V03 - Eintrittsart / Mode d’admission / Genere di ricovero**

## ValueSet: BFS Medizinische Statistik - 18 1.2.V03 - Eintrittsart / Mode d’admission / Genere di ricovero 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-18-admittype | *Version*:3.3.0 |
| Active as of 2019-01-01 | *Computable Name*:BfsMedstats18Admittype |
| **Copyright/Legal**: CC0-1.0 | |

 
BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Beschreibung der Umstände des Eintritts. Wie wurde der BFS Patient / die Patientin aufgenommen? 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/bfs-medstats-18-admittype) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "bfs-medstats-18-admittype",
  "url" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-18-admittype",
  "version" : "3.3.0",
  "name" : "BfsMedstats18Admittype",
  "title" : "BFS Medizinische Statistik - 18 1.2.V03 - Eintrittsart / Mode d’admission / Genere di ricovero",
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
  "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Beschreibung der Umstände des Eintritts. Wie wurde der BFS Patient / die Patientin aufgenommen?",
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
        "system" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-18-admittype",
        "concept" : [
          {
            "code" : "1",
            "display" : "Notfall (Behandlung innerhalb von 12 Std. unabdingbar)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Notfall (Behandlung innerhalb von 12 Std. unabdingbar)"
              },
              {
                "language" : "fr-CH",
                "value" : "Urgence (nécessité d’un traitement dans les 12 heures)"
              },
              {
                "language" : "it-CH",
                "value" : "urgenza (necessità di trattamento entro 12 ore)"
              }
            ]
          },
          {
            "code" : "2",
            "display" : "angemeldet, geplant",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "angemeldet, geplant"
              },
              {
                "language" : "fr-CH",
                "value" : "Annoncé, planifié"
              },
              {
                "language" : "it-CH",
                "value" : "annunciato, pianificato"
              }
            ]
          },
          {
            "code" : "3",
            "display" : "Geburt (Kind in dieser Klinik geboren)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Geburt (Kind in dieser Klinik geboren)"
              },
              {
                "language" : "fr-CH",
                "value" : "Naissance (enfant né intra-muros)"
              },
              {
                "language" : "it-CH",
                "value" : "parto (bambino nato nello stabilimento)"
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
            "display" : "Verlegung innerhalb 24 Std",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Verlegung innerhalb 24 Std"
              },
              {
                "language" : "fr-CH",
                "value" : "Transfert dans les 24 heures"
              },
              {
                "language" : "it-CH",
                "value" : "trasferimento entro 24 ore"
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
