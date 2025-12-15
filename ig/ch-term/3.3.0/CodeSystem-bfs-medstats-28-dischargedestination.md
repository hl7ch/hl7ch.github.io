# BFS Medizinische Statistik - 28 1.5.V03 - Aufenthalt nach Austritt / Séjour après la sortie / Destinazione dopo l’uscita - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **BFS Medizinische Statistik - 28 1.5.V03 - Aufenthalt nach Austritt / Séjour après la sortie / Destinazione dopo l’uscita**

## CodeSystem: BFS Medizinische Statistik - 28 1.5.V03 - Aufenthalt nach Austritt / Séjour après la sortie / Destinazione dopo l’uscita 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-28-dischargedestination | *Version*:3.3.0 |
| Active as of 2019-01-01 | *Computable Name*:BfsMedstats28Dischargedestination |
| **Copyright/Legal**: CC0-1.0 | |

 
BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Wohin wurde der Patient entlassen? 

 This Code system is referenced in the content logical definition of the following value sets: 

* [BfsMedstats28Dischargedestination](ValueSet-bfs-medstats-28-dischargedestination.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "bfs-medstats-28-dischargedestination",
  "url" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-28-dischargedestination",
  "version" : "3.3.0",
  "name" : "BfsMedstats28Dischargedestination",
  "title" : "BFS Medizinische Statistik - 28 1.5.V03 - Aufenthalt nach Austritt / Séjour après la sortie / Destinazione dopo l’uscita",
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
  "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Wohin wurde der Patient entlassen?",
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
      "display" : "Zuhause"
    },
    {
      "code" : "2",
      "display" : "Krankenheim, Pflegeheim"
    },
    {
      "code" : "3",
      "display" : "Altersheim, andere sozialmed. Institution"
    },
    {
      "code" : "4",
      "display" : "Psychiatrische Klinik, anderer Betrieb"
    },
    {
      "code" : "44",
      "display" : "Psychiatrische Abteilung/Klinik, gleicher Betrieb"
    },
    {
      "code" : "5",
      "display" : "Rehabilitationsklinik, anderer Betrieb"
    },
    {
      "code" : "55",
      "display" : "Rehabilitations- abteilung/-klinik, gleicher Betrieb"
    },
    {
      "code" : "6",
      "display" : "anderes Krankenhaus (Akutspital) oder Geburtshaus"
    },
    {
      "code" : "66",
      "display" : "Akutabteilung/-klinik, gleicher Betrieb"
    },
    {
      "code" : "7",
      "display" : "Strafvollzugsanstalt"
    },
    {
      "code" : "8",
      "display" : "anderes"
    },
    {
      "code" : "9",
      "display" : "unbekannt"
    },
    {
      "code" : "0",
      "display" : "Todesfall"
    }
  ]
}

```
