# BFS Medizinische Statistik - 25 1.4.V02 - Hauptkostenträger für Grundversicherungsleistungen / Prise en charge des soins de base / Unità d’imputazione principale per le prestazioni dell’assicurazione di base - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **BFS Medizinische Statistik - 25 1.4.V02 - Hauptkostenträger für Grundversicherungsleistungen / Prise en charge des soins de base / Unità d’imputazione principale per le prestazioni dell’assicurazione di base**

## CodeSystem: BFS Medizinische Statistik - 25 1.4.V02 - Hauptkostenträger für Grundversicherungsleistungen / Prise en charge des soins de base / Unità d’imputazione principale per le prestazioni dell’assicurazione di base 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-25-mainguarantor | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:BfsMedstats25Mainguarantor |
| **Copyright/Legal**: CC0-1.0 | |

 
BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Angabe des Hauptgaranten, der für die Kosten der Grundversicherungsleistungen des Spitalaufenthalts im Wesentlichen aufkommt. Keine Mehrfachnennungen möglich. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MainGuarantor](ValueSet-mainguarantor.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "bfs-medstats-25-mainguarantor",
  "url" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-25-mainguarantor",
  "version" : "3.3.0",
  "name" : "BfsMedstats25Mainguarantor",
  "title" : "BFS Medizinische Statistik - 25 1.4.V02 - Hauptkostenträger für Grundversicherungsleistungen / Prise en charge des soins de base / Unità d’imputazione principale per le prestazioni dell’assicurazione di base",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-15T10:47:47+00:00",
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
  "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Angabe des Hauptgaranten, der für die Kosten der Grundversicherungsleistungen des Spitalaufenthalts im Wesentlichen aufkommt. Keine Mehrfachnennungen möglich.",
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
  "count" : 7,
  "concept" : [
    {
      "code" : "1",
      "display" : "Krankenversicherung (obligat.)"
    },
    {
      "code" : "2",
      "display" : "Invalidenversicherung"
    },
    {
      "code" : "3",
      "display" : "Militärversicherung"
    },
    {
      "code" : "4",
      "display" : "Unfallversicherung"
    },
    {
      "code" : "5",
      "display" : "Selbstzahler (z.B. Ausländer ohne Grundversicherung)"
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
