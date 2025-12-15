# BFS Medizinische Statistik - 27 1.5.V02 - Entscheid für Austritt / Décision de sortie / Décisione dell’uscita - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **BFS Medizinische Statistik - 27 1.5.V02 - Entscheid für Austritt / Décision de sortie / Décisione dell’uscita**

## CodeSystem: BFS Medizinische Statistik - 27 1.5.V02 - Entscheid für Austritt / Décision de sortie / Décisione dell’uscita 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-27-dischargedecision | *Version*:3.3.0 |
| Active as of 2019-01-01 | *Computable Name*:BfsMedstats27Dischargedecision |
| **Copyright/Legal**: CC0-1.0 | |

 
BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Wer hat den Klinikaustritt veranlasst? 

 This Code system is referenced in the content logical definition of the following value sets: 

* [BfsMedstats27Dischargedecision](ValueSet-bfs-medstats-27-dischargedecision.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "bfs-medstats-27-dischargedecision",
  "url" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-27-dischargedecision",
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
  "caseSensitive" : true,
  "compositional" : false,
  "content" : "complete",
  "concept" : [
    {
      "code" : "1",
      "display" : "auf Initiative des Behandelnden"
    },
    {
      "code" : "2",
      "display" : "auf Initiative des Patienten (gegen Ansicht des Behandelnden)"
    },
    {
      "code" : "3",
      "display" : "auf Initiative einer Drittperson"
    },
    {
      "code" : "4",
      "display" : "interner Übertritt"
    },
    {
      "code" : "5",
      "display" : "gestorben"
    },
    {
      "code" : "8",
      "display" : "anderes"
    },
    {
      "code" : "9",
      "display" : "unbekannt"
    }
  ]
}

```
