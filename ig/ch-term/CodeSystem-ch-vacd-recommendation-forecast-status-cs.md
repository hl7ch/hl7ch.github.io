# CH VACD Swiss Recommendation Forecast Status - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Swiss Recommendation Forecast Status**

## CodeSystem: CH VACD Swiss Recommendation Forecast Status 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-recommendation-forecast-status-cs | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:SwissRecommendationForecastStatusCodesystem |
| **Copyright/Legal**: CC0-1.0 | |

 
Immunization recommendation forecast status values. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [SwissRecommendationForecastStatus](ValueSet-ch-vacd-recommendation-forecast-status-vs.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-vacd-recommendation-forecast-status-cs",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
      "valuePeriod" : {
        "start" : "2022-04-28T00:00:00+01:00"
      }
    }
  ],
  "url" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-recommendation-forecast-status-cs",
  "version" : "3.3.0",
  "name" : "SwissRecommendationForecastStatusCodesystem",
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
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 8,
  "concept" : [
    {
      "code" : "due",
      "display" : "Due",
      "definition" : "The patient is due for their next vaccination.",
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
      "definition" : "The patient is considered overdue for their next vaccination.",
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
      "definition" : "The patient is immune to the TargetDisease and further immunization against the disease is not likely to provide benefit.",
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
      "definition" : "The patient may be contraindicated but get health care advice.",
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
      "definition" : "The patient is indicated for further doses.",
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
      "definition" : "The patient is contraindicated for further doses.",
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
      "definition" : "The patient is fully protected and no further doses are recommended.",
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
      "definition" : "There is no relevance for this patient.",
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

```
