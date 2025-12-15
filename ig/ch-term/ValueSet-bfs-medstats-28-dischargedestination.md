# BFS Medizinische Statistik - 28 1.5.V03 - Aufenthalt nach Austritt / Séjour après la sortie / Destinazione dopo l’uscita - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **BFS Medizinische Statistik - 28 1.5.V03 - Aufenthalt nach Austritt / Séjour après la sortie / Destinazione dopo l’uscita**

## ValueSet: BFS Medizinische Statistik - 28 1.5.V03 - Aufenthalt nach Austritt / Séjour après la sortie / Destinazione dopo l’uscita 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-28-dischargedestination | *Version*:3.3.0 |
| Active as of 2019-01-01 | *Computable Name*:BfsMedstats28Dischargedestination |
| **Copyright/Legal**: CC0-1.0 | |

 
BFS defines variables for medical statistic (german, french, italian) see[BFS](https://www.bfs.admin.ch/bfs/de/home/statistiken/kataloge-datenbanken/publikationen.assetdetail.7066232.html). Wohin wurde der Patient entlassen? 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/bfs-medstats-28-dischargedestination) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "bfs-medstats-28-dischargedestination",
  "url" : "http://fhir.ch/ig/ch-core/ValueSet/bfs-medstats-28-dischargedestination",
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
  "compose" : {
    "include" : [
      {
        "system" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-28-dischargedestination",
        "concept" : [
          {
            "code" : "1",
            "display" : "Zuhause",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Zuhause"
              },
              {
                "language" : "fr-CH",
                "value" : "Domicile"
              },
              {
                "language" : "it-CH",
                "value" : "domicilio"
              }
            ]
          },
          {
            "code" : "2",
            "display" : "Krankenheim, Pflegeheim",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Krankenheim, Pflegeheim"
              },
              {
                "language" : "fr-CH",
                "value" : "établ. de santé non hospit. médicalisé"
              },
              {
                "language" : "it-CH",
                "value" : "casa di cura"
              }
            ]
          },
          {
            "code" : "3",
            "display" : "Altersheim, andere sozialmed. Institution",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Altersheim, andere sozialmed. Institution"
              },
              {
                "language" : "fr-CH",
                "value" : "id. non médicalisé"
              },
              {
                "language" : "it-CH",
                "value" : "casa per anziani, altro stabilimento sanitario non ospedaliero"
              }
            ]
          },
          {
            "code" : "4",
            "display" : "Psychiatrische Klinik, anderer Betrieb",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Psychiatrische Klinik, anderer Betrieb"
              },
              {
                "language" : "fr-CH",
                "value" : "institution psychiatrique, autre établissement"
              },
              {
                "language" : "it-CH",
                "value" : "clinica psichiatrica, altro istituto"
              }
            ]
          },
          {
            "code" : "44",
            "display" : "Psychiatrische Abteilung/Klinik, gleicher Betrieb",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Psychiatrische Abteilung/Klinik, gleicher Betrieb"
              },
              {
                "language" : "fr-CH",
                "value" : "division/clinique psychiatrique, même établissement"
              },
              {
                "language" : "it-CH",
                "value" : "reparto psichiatrico / clinica psichiatrica, stesso istituto"
              }
            ]
          },
          {
            "code" : "5",
            "display" : "Rehabilitationsklinik, anderer Betrieb",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rehabilitationsklinik, anderer Betrieb"
              },
              {
                "language" : "fr-CH",
                "value" : "institution de réadaptation, autre établissement"
              },
              {
                "language" : "it-CH",
                "value" : "clinica di riabilitazione, altro istituto"
              }
            ]
          },
          {
            "code" : "55",
            "display" : "Rehabilitations- abteilung/-klinik, gleicher Betrieb",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rehabilitations- abteilung/-klinik, gleicher Betrieb"
              },
              {
                "language" : "fr-CH",
                "value" : "Division/clinique de réadaptation, même établissement"
              },
              {
                "language" : "it-CH",
                "value" : "reparto di riabilitazione / clinica di riabilitazione, stesso istituto"
              }
            ]
          },
          {
            "code" : "6",
            "display" : "anderes Krankenhaus (Akutspital) oder Geburtshaus",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "anderes Krankenhaus (Akutspital) oder Geburtshaus"
              },
              {
                "language" : "fr-CH",
                "value" : "Autre hôpital (soins aigus) ou maison de naissance"
              },
              {
                "language" : "it-CH",
                "value" : "altro stabilimento ospedaliero (ospedale acuto) o casa per partorienti"
              }
            ]
          },
          {
            "code" : "66",
            "display" : "Akutabteilung/-klinik, gleicher Betrieb",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Akutabteilung/-klinik, gleicher Betrieb"
              },
              {
                "language" : "fr-CH",
                "value" : "division/clinique de soins aigus, même établissement"
              },
              {
                "language" : "it-CH",
                "value" : "reparto acuto / ospedale acuto, stesso istituto"
              }
            ]
          },
          {
            "code" : "7",
            "display" : "Strafvollzugsanstalt",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Strafvollzugsanstalt"
              },
              {
                "language" : "fr-CH",
                "value" : "institution d’exécution des peines"
              },
              {
                "language" : "it-CH",
                "value" : "penitenziario"
              }
            ]
          },
          {
            "code" : "8",
            "display" : "andere",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "andere"
              },
              {
                "language" : "fr-CH",
                "value" : "Autre"
              },
              {
                "language" : "it-CH",
                "value" : "altro"
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
          },
          {
            "code" : "0",
            "display" : "Todesfall",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Todesfall"
              },
              {
                "language" : "fr-CH",
                "value" : "décédé"
              },
              {
                "language" : "it-CH",
                "value" : "decesso"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
