# BFS Medizinische Statistik - 20 1.3.V01 - Behandlungsart / Type de prise en charge / Genere di trattamento - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **BFS Medizinische Statistik - 20 1.3.V01 - Behandlungsart / Type de prise en charge / Genere di trattamento**

## ValueSet: BFS Medizinische Statistik - 20 1.3.V01 - Behandlungsart / Type de prise en charge / Genere di trattamento 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-20-encounterclass | *Version*:3.3.0 |
| Active as of 2019-01-01 | *Computable Name*:BfsMedstats20Encounterclass |
| **Copyright/Legal**: CC0-1.0 | |

 
BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Angabe der Behandlungsart 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/bfs-medstats-20-encounterclass) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "bfs-medstats-20-encounterclass",
  "url" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-20-encounterclass",
  "version" : "3.3.0",
  "name" : "BfsMedstats20Encounterclass",
  "title" : "BFS Medizinische Statistik - 20 1.3.V01 - Behandlungsart / Type de prise en charge / Genere di trattamento",
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
  "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Angabe der Behandlungsart",
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
        "system" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-20-encounterclass",
        "concept" : [
          {
            "code" : "1",
            "display" : "ambulant",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "ambulant"
              },
              {
                "language" : "fr-CH",
                "value" : "Ambulatoire"
              },
              {
                "language" : "it-CH",
                "value" : "ambulatoriale"
              }
            ]
          },
          {
            "code" : "3",
            "display" : "stationär",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "stationär"
              },
              {
                "language" : "fr-CH",
                "value" : "Hospitalisation"
              },
              {
                "language" : "it-CH",
                "value" : "stazionario"
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
