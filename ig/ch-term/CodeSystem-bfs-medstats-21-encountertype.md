# BFS Medizinische Statistik - 21 1.3.V02 - Klasse / Classe / Classe - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **BFS Medizinische Statistik - 21 1.3.V02 - Klasse / Classe / Classe**

## CodeSystem: BFS Medizinische Statistik - 21 1.3.V02 - Klasse / Classe / Classe 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-21-encountertype | *Version*:3.3.0 |
| Active as of 2019-01-01 | *Computable Name*:BfsMedstats17Admitsource |
| **Copyright/Legal**: CC0-1.0 | |

 
BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Im Rahmen des Spitalaufenthaltes belegte Liegeklasse, nicht die Versicherungskategorie. Bei Wechsel der Klasse ist die im Wesentlichen beanspruchte Klasse anzugeben. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [BfsMedstats21Encountertype](ValueSet-bfs-medstats-21-encountertype.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "bfs-medstats-21-encountertype",
  "url" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-21-encountertype",
  "version" : "3.3.0",
  "name" : "BfsMedstats17Admitsource",
  "title" : "BFS Medizinische Statistik - 21 1.3.V02 - Klasse / Classe / Classe",
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
  "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Im Rahmen des Spitalaufenthaltes belegte Liegeklasse, nicht die Versicherungskategorie. Bei Wechsel der Klasse ist die im Wesentlichen beanspruchte Klasse anzugeben.",
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
      "display" : "allgemein"
    },
    {
      "code" : "2",
      "display" : "halbprivat"
    },
    {
      "code" : "3",
      "display" : "privat"
    },
    {
      "code" : "9",
      "display" : "unbekannt"
    }
  ]
}

```
