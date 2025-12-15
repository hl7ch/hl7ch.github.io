# BFS Medizinische Statistik - 17 1.2.V02 - Aufenthaltsort vor dem Eintritt / Séjour avant l’admission / Luogo di soggiorno prima dell’ammissione - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **BFS Medizinische Statistik - 17 1.2.V02 - Aufenthaltsort vor dem Eintritt / Séjour avant l’admission / Luogo di soggiorno prima dell’ammissione**

## CodeSystem: BFS Medizinische Statistik - 17 1.2.V02 - Aufenthaltsort vor dem Eintritt / Séjour avant l’admission / Luogo di soggiorno prima dell’ammissione 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-17-admitsource | *Version*:3.3.0 |
| Active as of 2019-01-01 | *Computable Name*:BfsMedstats17Admitsource |
| **Copyright/Legal**: CC0-1.0 | |

 
BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Unmittelbarer Aufenthaltsort vor dem Eintritt. Wo befand sich der Patient / die Patientin? 

 This Code system is referenced in the content logical definition of the following value sets: 

* [BfsMedstats17Admitsource](ValueSet-bfs-medstats-17-admitsource.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "bfs-medstats-17-admitsource",
  "url" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-17-admitsource",
  "version" : "3.3.0",
  "name" : "BfsMedstats17Admitsource",
  "title" : "BFS Medizinische Statistik - 17 1.2.V02 - Aufenthaltsort vor dem Eintritt / Séjour avant l’admission / Luogo di soggiorno prima dell’ammissione",
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
  "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Unmittelbarer Aufenthaltsort vor dem Eintritt. Wo befand sich der Patient / die Patientin?",
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
      "display" : "Zuhause mit SPITEX Versorgung"
    },
    {
      "code" : "3",
      "display" : "Krankenheim, Pflegeheim"
    },
    {
      "code" : "4",
      "display" : "Altersheim, andere sozialmed. Institutionen"
    },
    {
      "code" : "5",
      "display" : "Psychiatrische Klinik, anderer Betrieb"
    },
    {
      "code" : "55",
      "display" : "Psychiatrische Abteilung/Klinik, gleicher Betrieb"
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
      "display" : "andere"
    },
    {
      "code" : "83",
      "display" : "Rehabilitationsklinik, anderer Betrieb"
    },
    {
      "code" : "84",
      "display" : "Rehabilitations- abteilung/-klinik, gleicher Betrieb"
    },
    {
      "code" : "9",
      "display" : "unbekannt"
    }
  ]
}

```
