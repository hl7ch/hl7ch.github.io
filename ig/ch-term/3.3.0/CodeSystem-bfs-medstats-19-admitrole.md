# BFS Medizinische Statistik - 19 1.2.V04 - Einweisende Instanz / Décision d’envoi / Istanza ricoverante - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **BFS Medizinische Statistik - 19 1.2.V04 - Einweisende Instanz / Décision d’envoi / Istanza ricoverante**

## CodeSystem: BFS Medizinische Statistik - 19 1.2.V04 - Einweisende Instanz / Décision d’envoi / Istanza ricoverante 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-19-admitrole | *Version*:3.3.0 |
| Active as of 2019-01-01 | *Computable Name*:BfsMedstats19Admitrole |
| **Copyright/Legal**: CC0-1.0 | |

 
BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Wer hat die Initiative für die Klinikeinweisung ergriffen? 

 This Code system is referenced in the content logical definition of the following value sets: 

* [BfsMedstats19Admitrole](ValueSet-bfs-medstats-19-admitrole.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "bfs-medstats-19-admitrole",
  "url" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-19-admitrole",
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
  "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Wer hat die Initiative für die Klinikeinweisung ergriffen?",
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
      "display" : "selbst, Angehörige"
    },
    {
      "code" : "2",
      "display" : "Rettungsdienst (Ambulanz, Polizei)"
    },
    {
      "code" : "3",
      "display" : "Arzt"
    },
    {
      "code" : "4",
      "display" : "nichtmedizinischer Therapeut"
    },
    {
      "code" : "5",
      "display" : "sozialmedizinischer Dienst"
    },
    {
      "code" : "6",
      "display" : "Justizbehörden"
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
