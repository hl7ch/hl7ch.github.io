# BFS Medizinische Statistik - 18 1.2.V03 - Eintrittsart / Mode d’admission / Genere di ricovero - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **BFS Medizinische Statistik - 18 1.2.V03 - Eintrittsart / Mode d’admission / Genere di ricovero**

## CodeSystem: BFS Medizinische Statistik - 18 1.2.V03 - Eintrittsart / Mode d’admission / Genere di ricovero 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-18-admittype | *Version*:3.3.0 |
| Active as of 2019-01-01 | *Computable Name*:BfsMedstats17Admittype |
| **Copyright/Legal**: CC0-1.0 | |

 
BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Beschreibung der Umstände des Eintritts. Wie wurde der Patient / die Patientin aufgenommen? 

 This Code system is referenced in the content logical definition of the following value sets: 

* [BfsMedstats18Admittype](ValueSet-bfs-medstats-18-admittype.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "bfs-medstats-18-admittype",
  "url" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-18-admittype",
  "version" : "3.3.0",
  "name" : "BfsMedstats17Admittype",
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
  "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Beschreibung der Umstände des Eintritts. Wie wurde der Patient / die Patientin aufgenommen?",
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
      "display" : "Notfall (Behandlung innerhalb von 12 Std. unabdingbar)"
    },
    {
      "code" : "2",
      "display" : "angemeldet, geplant"
    },
    {
      "code" : "3",
      "display" : "Geburt (Kind in dieser Klinik geboren)"
    },
    {
      "code" : "4",
      "display" : "interner Übertritt"
    },
    {
      "code" : "5",
      "display" : "Verlegung innerhalb 24 Std"
    },
    {
      "code" : "8",
      "display" : "andere"
    },
    {
      "code" : "9",
      "display" : "unbekannt"
    }
  ]
}

```
