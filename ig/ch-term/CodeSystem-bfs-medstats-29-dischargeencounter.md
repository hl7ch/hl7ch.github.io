# BFS Medizinische Statistik - 29 1.5.V04 - Behandlung nach Austritt / Prise en charge après la sortie / Trattamento dopo l’uscita - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **BFS Medizinische Statistik - 29 1.5.V04 - Behandlung nach Austritt / Prise en charge après la sortie / Trattamento dopo l’uscita**

## CodeSystem: BFS Medizinische Statistik - 29 1.5.V04 - Behandlung nach Austritt / Prise en charge après la sortie / Trattamento dopo l’uscita 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-29-dischargeencounter | *Version*:3.3.0 |
| Active as of 2019-01-01 | *Computable Name*:BfsMedstats29Dischargeencounter |
| **Copyright/Legal**: CC0-1.0 | |

 
BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Behandlung, Pflege, Rehabilitation nach dem Spitalaufenthalt. Es geht darum, den Behandlungserfolg resp. den Abhängigkeitsgrad bei Austritt anzugeben. Nur die am besten zutreffende Kategorie auswählen. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [BfsMedstats29Dischargeencounter](ValueSet-bfs-medstats-29-dischargeencounter.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "bfs-medstats-29-dischargeencounter",
  "url" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-29-dischargeencounter",
  "version" : "3.3.0",
  "name" : "BfsMedstats29Dischargeencounter",
  "title" : "BFS Medizinische Statistik - 29 1.5.V04 - Behandlung nach Austritt / Prise en charge après la sortie / Trattamento dopo l’uscita",
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
  "description" : "BFS defines variables for medical statistic (german, french, italian) see [BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Behandlung, Pflege, Rehabilitation nach dem Spitalaufenthalt. Es geht darum, den Behandlungserfolg resp. den Abhängigkeitsgrad bei Austritt anzugeben. Nur die am besten zutreffende Kategorie auswählen.",
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
      "display" : "geheilt/kein Behandlungsbedarf"
    },
    {
      "code" : "2",
      "display" : "ambulante Behandlung"
    },
    {
      "code" : "3",
      "display" : "ambulante Pflege (z.B. SPITEX)"
    },
    {
      "code" : "4",
      "display" : "stationäre Behandlung oder Pflege"
    },
    {
      "code" : "5",
      "display" : "Rehabilitation (amb. oder stat.)"
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
