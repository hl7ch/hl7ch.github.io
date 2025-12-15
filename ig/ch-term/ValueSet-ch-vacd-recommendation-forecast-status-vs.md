# CH VACD Swiss Recommendation Forecast Status - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Swiss Recommendation Forecast Status**

## ValueSet: CH VACD Swiss Recommendation Forecast Status 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-recommendation-forecast-status-vs | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:SwissRecommendationForecastStatus |
| **Copyright/Legal**: CC0-1.0 | |

 
Immunization recommendation forecast status values. 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/ch-vacd-recommendation-forecast-status-vs) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "ch-vacd-recommendation-forecast-status-vs",
  "url" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-recommendation-forecast-status-vs",
  "version" : "3.3.0",
  "name" : "SwissRecommendationForecastStatus",
  "title" : "CH VACD Swiss Recommendation Forecast Status",
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
  "description" : "Immunization recommendation forecast status values.",
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
        "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-recommendation-forecast-status-cs",
        "concept" : [
          {
            "code" : "due",
            "display" : "Due",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Die nächste Impfung des Patienten/der Patientin ist fällig."
              },
              {
                "language" : "fr-CH",
                "value" : "Le patient doit recevoir son prochain vaccin."
              },
              {
                "language" : "it-CH",
                "value" : "Il paziente deve effettuare la prossima vaccinazione."
              },
              {
                "language" : "rm-CH",
                "value" : "La pazienta sto survegnir la proxima vaccinaziun."
              },
              {
                "language" : "en-US",
                "value" : "The patient is due for their next vaccination."
              }
            ]
          },
          {
            "code" : "overdue",
            "display" : "Overdue",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Die nächste Impfung des Patienten/der Patientin ist überfällig."
              },
              {
                "language" : "fr-CH",
                "value" : "Le patient est en retard pour son prochain vaccin."
              },
              {
                "language" : "it-CH",
                "value" : "Il paziente è in ritardo per la prossima vaccinazione."
              },
              {
                "language" : "rm-CH",
                "value" : "La pazienta vegn considerada sco danvanz per sia proxima vaccinaziun."
              },
              {
                "language" : "en-US",
                "value" : "The patient is considered overdue for their next vaccination."
              }
            ]
          },
          {
            "code" : "immune",
            "display" : "Immune",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Der Patient/die Patientin ist gegen die Zielkrankheit immun, und eine weitere Impfung dagegen würde wahrscheinlich keinen Nutzen bringen."
              },
              {
                "language" : "fr-CH",
                "value" : "Le patient est immunisé contre la maladie cible, et une immunisation supplémentaire n’est pas susceptible d’apporter de bénéfice."
              },
              {
                "language" : "it-CH",
                "value" : "Il paziente è immune alla malattia target ed è improbabile che un'ulteriore immunizzazione apporti benefici."
              },
              {
                "language" : "rm-CH",
                "value" : "Il pazient è immun cunter la malsogna da mira, ed in'ulteriura immunisaziun cunter la malsogna na po betg chaschunar avantatgs."
              },
              {
                "language" : "en-US",
                "value" : "The patient is immune to the TargetDisease and further immunization against the disease is not likely to provide benefit."
              }
            ]
          },
          {
            "code" : "consultadvise",
            "display" : "Consult Advice",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Der Patient/die Patientin kann eine Kontraindikation aufweisen, erhält aber eine Gesundheitsberatung."
              },
              {
                "language" : "fr-CH",
                "value" : "Le patient pourrait présenter une contre-indication. Demandez conseil à un spécialiste."
              },
              {
                "language" : "it-CH",
                "value" : "Il paziente potrebbe avere una controindicazione, ma riceve una consulenza sanitaria."
              },
              {
                "language" : "rm-CH",
                "value" : "Il pazient po s'annunziar, ma po sa laschar cussegliar en il sectur da sanadad."
              },
              {
                "language" : "en-US",
                "value" : "The patient may be contraindicated but get health care advice."
              }
            ]
          },
          {
            "code" : "indicated",
            "display" : "Indicated",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Für den Patienten/die Patientin sind weitere Dosen indiziert."
              },
              {
                "language" : "fr-CH",
                "value" : "Des doses supplémentaires sont indiquées pour le patient."
              },
              {
                "language" : "it-CH",
                "value" : "Il paziente può ricevere ulteriori dosi."
              },
              {
                "language" : "rm-CH",
                "value" : "Il pazient è inditgà per ulteriuras dosas."
              },
              {
                "language" : "en-US",
                "value" : "The patient is indicated for further doses."
              }
            ]
          },
          {
            "code" : "contraindicated",
            "display" : "Contraindicated",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Für den Patienten/die Patientin sind weitere Dosen kontraindiziert."
              },
              {
                "language" : "fr-CH",
                "value" : "Des doses supplémentaires sont contre-indiquées pour le patient."
              },
              {
                "language" : "it-CH",
                "value" : "Per il paziente è controdindicato  ricevere ulteriori dosi."
              },
              {
                "language" : "rm-CH",
                "value" : "Tar ulteriuras dosas vegn la pazienta u il pazient annunzià fauss."
              },
              {
                "language" : "en-US",
                "value" : "The patient is contraindicated for further doses."
              }
            ]
          },
          {
            "code" : "complete",
            "display" : "Complete",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Der Patient/die Patientin ist vollständig geschützt, und es werden keine weiteren Dosen empfohlen."
              },
              {
                "language" : "fr-CH",
                "value" : "Le patient bénéficie d’une protection complète, et aucune autre dose n’est recommandée."
              },
              {
                "language" : "it-CH",
                "value" : "Il paziente dispone di una protezione completa e non sono raccomandate ulteriori dosi."
              },
              {
                "language" : "rm-CH",
                "value" : "Il pazient è protegì cumplainamain ed i na vegnan recumandadas naginas ulteriuras dosas."
              },
              {
                "language" : "en-US",
                "value" : "The patient is fully protected and no further doses are recommended."
              }
            ]
          },
          {
            "code" : "notrelevant",
            "display" : "NotRelevant",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Die Impfung ist für den Patienten/die Patientin nicht relevant."
              },
              {
                "language" : "fr-CH",
                "value" : "Cette vaccination n’est pas pertinente pour ce patient."
              },
              {
                "language" : "it-CH",
                "value" : "Non rilevante per questo paziente."
              },
              {
                "language" : "rm-CH",
                "value" : "Per quest pazient n'è nagina relevanza."
              },
              {
                "language" : "en-US",
                "value" : "There is no relevance for this patient."
              }
            ]
          }
        ]
      }
    ]
  }
}

```
