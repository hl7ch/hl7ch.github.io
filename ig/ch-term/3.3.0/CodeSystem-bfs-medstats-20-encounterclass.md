# BFS Medizinische Statistik - 20 1.3.V01 - Behandlungsart / Type de prise en charge / Genere di trattamento - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **BFS Medizinische Statistik - 20 1.3.V01 - Behandlungsart / Type de prise en charge / Genere di trattamento**

## CodeSystem: BFS Medizinische Statistik - 20 1.3.V01 - Behandlungsart / Type de prise en charge / Genere di trattamento 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-20-encounterclass | *Version*:3.3.0 |
| Active as of 2019-01-01 | *Computable Name*:BfsMedstats20Encounterclass |
| **Copyright/Legal**: CC0-1.0 | |

 
BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Angabe der Behandlungsart 

 This Code system is referenced in the content logical definition of the following value sets: 

* [BfsMedstats20Encounterclass](ValueSet-bfs-medstats-20-encounterclass.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "bfs-medstats-20-encounterclass",
  "url" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-20-encounterclass",
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
  "caseSensitive" : true,
  "compositional" : false,
  "content" : "complete",
  "concept" : [
    {
      "code" : "1",
      "display" : "ambulant"
    },
    {
      "code" : "3",
      "display" : "stationär"
    },
    {
      "code" : "9",
      "display" : "unbekannt"
    }
  ]
}

```
