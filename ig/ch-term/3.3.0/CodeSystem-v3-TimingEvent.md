# TimingEvent - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TimingEvent**

## CodeSystem: TimingEvent 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/CodeSystem/v3-TimingEvent | *Version*:3.3.0 |
| Active as of 2024-02-08 | *Computable Name*:TimingEvent |
| **Copyright/Legal**: CC0-1.0 | |

 
Translations of concepts for v3-TimingEvent 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "v3-TimingEvent",
  "meta" : {
    "source" : "https://art-decor.org/fhir/ValueSet/2.16.756.5.30.1.127.77.4.11.2--20200710002808"
  },
  "url" : "http://fhir.ch/ig/ch-term/CodeSystem/v3-TimingEvent",
  "version" : "3.3.0",
  "name" : "TimingEvent",
  "title" : "TimingEvent",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-02-08",
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
  "description" : "Translations of concepts for v3-TimingEvent",
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
  "content" : "supplement",
  "supplements" : "http://terminology.hl7.org/CodeSystem/v3-TimingEvent",
  "concept" : [
    {
      "code" : "AC",
      "display" : "Before the meal",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Vor der Mahlzeit"
        },
        {
          "language" : "fr-CH",
          "value" : "Avant le repas"
        },
        {
          "language" : "it-CH",
          "value" : "Prima del pasto"
        },
        {
          "language" : "rm-CH",
          "value" : "Avant il past"
        },
        {
          "language" : "en-US",
          "value" : "Before the meal"
        }
      ]
    },
    {
      "code" : "HS",
      "display" : "Before sleep",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Vor dem Schlafengehen"
        },
        {
          "language" : "fr-CH",
          "value" : "Avant le coucher"
        },
        {
          "language" : "it-CH",
          "value" : "Prima di andare a dormire"
        },
        {
          "language" : "rm-CH",
          "value" : "Avant che ir a durmir"
        },
        {
          "language" : "en-US",
          "value" : "Before sleep"
        }
      ]
    },
    {
      "code" : "ACD",
      "display" : "Before lunch",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Vor dem Mittagessen"
        },
        {
          "language" : "fr-CH",
          "value" : "Avant le repas de midi"
        },
        {
          "language" : "it-CH",
          "value" : "Prima di pranzo"
        },
        {
          "language" : "rm-CH",
          "value" : "Avant gentar"
        },
        {
          "language" : "en-US",
          "value" : "Before lunch"
        }
      ]
    },
    {
      "code" : "ACM",
      "display" : "Before breakfast",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Vor dem Frühstück"
        },
        {
          "language" : "fr-CH",
          "value" : "Avant le petit-déjeuner"
        },
        {
          "language" : "it-CH",
          "value" : "Prima di colazione"
        },
        {
          "language" : "rm-CH",
          "value" : "Avant ensolver"
        },
        {
          "language" : "en-US",
          "value" : "Before breakfast"
        }
      ]
    },
    {
      "code" : "ACV",
      "display" : "Before dinner",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Vor dem Abendessen"
        },
        {
          "language" : "fr-CH",
          "value" : "Avant le repas du soir"
        },
        {
          "language" : "it-CH",
          "value" : "Prima di cena"
        },
        {
          "language" : "rm-CH",
          "value" : "Avant tschaina"
        },
        {
          "language" : "en-US",
          "value" : "Before dinner"
        }
      ]
    },
    {
      "code" : "C",
      "display" : "During meals",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Während der Mahlzeit"
        },
        {
          "language" : "fr-CH",
          "value" : "Pendant le repas"
        },
        {
          "language" : "it-CH",
          "value" : "Durante il pasto"
        },
        {
          "language" : "rm-CH",
          "value" : "Durant il past"
        },
        {
          "language" : "en-US",
          "value" : "During meals"
        }
      ]
    },
    {
      "code" : "CD",
      "display" : "During lunch",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Während des Mittagessens"
        },
        {
          "language" : "fr-CH",
          "value" : "Pendant le repas de midi"
        },
        {
          "language" : "it-CH",
          "value" : "Durante il pranzo"
        },
        {
          "language" : "rm-CH",
          "value" : "Durant gentar"
        },
        {
          "language" : "en-US",
          "value" : "During lunch"
        }
      ]
    },
    {
      "code" : "CM",
      "display" : "During breakfast",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Während des Frühstücks"
        },
        {
          "language" : "fr-CH",
          "value" : "Pendant le petit-déjeuner"
        },
        {
          "language" : "it-CH",
          "value" : "Durante la prima colazione"
        },
        {
          "language" : "rm-CH",
          "value" : "Durant ensolver"
        },
        {
          "language" : "en-US",
          "value" : "During breakfast"
        }
      ]
    },
    {
      "code" : "CV",
      "display" : "During dinner",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Während des Abendessens"
        },
        {
          "language" : "fr-CH",
          "value" : "Pendant le repas du soir"
        },
        {
          "language" : "it-CH",
          "value" : "Durante la cena"
        },
        {
          "language" : "rm-CH",
          "value" : "Durant tschaina"
        },
        {
          "language" : "en-US",
          "value" : "During dinner"
        }
      ]
    },
    {
      "code" : "PC",
      "display" : "After the meal",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Nach dem Essen"
        },
        {
          "language" : "fr-CH",
          "value" : "Après le repas"
        },
        {
          "language" : "it-CH",
          "value" : "Dopo il pasto"
        },
        {
          "language" : "rm-CH",
          "value" : "Suenter il past"
        },
        {
          "language" : "en-US",
          "value" : "After the meal"
        }
      ]
    },
    {
      "code" : "PCD",
      "display" : "After lunch",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Nach dem Mittagessen"
        },
        {
          "language" : "fr-CH",
          "value" : "Après le repas de midi"
        },
        {
          "language" : "it-CH",
          "value" : "Dopo pranzo"
        },
        {
          "language" : "rm-CH",
          "value" : "Suenter gentar"
        },
        {
          "language" : "en-US",
          "value" : "After lunch"
        }
      ]
    },
    {
      "code" : "PCM",
      "display" : "After breakfast",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Nach dem Frühstück"
        },
        {
          "language" : "fr-CH",
          "value" : "Après le petit-déjeuner"
        },
        {
          "language" : "it-CH",
          "value" : "Dopo la prima colazione"
        },
        {
          "language" : "rm-CH",
          "value" : "Suenter ensolver"
        },
        {
          "language" : "en-US",
          "value" : "After breakfast"
        }
      ]
    },
    {
      "code" : "PCV",
      "display" : "After dinner",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Nach dem Abendessen"
        },
        {
          "language" : "fr-CH",
          "value" : "Après le repas du soir"
        },
        {
          "language" : "it-CH",
          "value" : "Dopo cena"
        },
        {
          "language" : "rm-CH",
          "value" : "Suenter tschaina"
        },
        {
          "language" : "en-US",
          "value" : "After dinner"
        }
      ]
    },
    {
      "code" : "WAKE",
      "display" : "Upon waking up",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Beim Aufwachen"
        },
        {
          "language" : "fr-CH",
          "value" : "Au réveil"
        },
        {
          "language" : "it-CH",
          "value" : "Al risveglio"
        },
        {
          "language" : "rm-CH",
          "value" : "Cun sa dasdar"
        },
        {
          "language" : "en-US",
          "value" : "Upon waking up"
        }
      ]
    }
  ]
}

```
