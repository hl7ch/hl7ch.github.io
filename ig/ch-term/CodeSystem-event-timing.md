# EventTiming - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EventTiming**

## CodeSystem: EventTiming 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/CodeSystem/event-timing | *Version*:3.3.0 |
| Active as of 2024-02-08 | *Computable Name*:EventTiming |
| **Copyright/Legal**: CC0-1.0 | |

 
Translations of concepts for event-timing 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "event-timing",
  "meta" : {
    "source" : "https://art-decor.org/fhir/ValueSet/2.16.756.5.30.1.127.77.4.11.2--20200710002808"
  },
  "url" : "http://fhir.ch/ig/ch-term/CodeSystem/event-timing",
  "version" : "3.3.0",
  "name" : "EventTiming",
  "title" : "EventTiming",
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
  "description" : "Translations of concepts for event-timing",
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
  "supplements" : "http://hl7.org/fhir/event-timing",
  "concept" : [
    {
      "code" : "PHS",
      "display" : "After Sleep",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Nach dem Einschlafen"
        },
        {
          "language" : "fr-CH",
          "value" : "Après le coucher"
        },
        {
          "language" : "it-CH",
          "value" : "Dopo il sonno"
        },
        {
          "language" : "rm-CH",
          "value" : "Nach dem Einschlafen"
        },
        {
          "language" : "en-US",
          "value" : "After Sleep"
        }
      ]
    },
    {
      "code" : "NIGHT",
      "display" : "Night",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Nacht"
        },
        {
          "language" : "fr-CH",
          "value" : "Nuit"
        },
        {
          "language" : "it-CH",
          "value" : "Notte"
        },
        {
          "language" : "rm-CH",
          "value" : "Nacht"
        },
        {
          "language" : "en-US",
          "value" : "Night"
        }
      ]
    },
    {
      "code" : "EVE.late",
      "display" : "Late Evening",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Später Abend"
        },
        {
          "language" : "fr-CH",
          "value" : "Fin de soirée"
        },
        {
          "language" : "it-CH",
          "value" : "Tarda serata"
        },
        {
          "language" : "rm-CH",
          "value" : "Später Abend"
        },
        {
          "language" : "en-US",
          "value" : "Late Evening"
        }
      ]
    },
    {
      "code" : "EVE.early",
      "display" : "Early Evening",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Früher Abend"
        },
        {
          "language" : "fr-CH",
          "value" : "Début de soirée"
        },
        {
          "language" : "it-CH",
          "value" : "Prima serata"
        },
        {
          "language" : "rm-CH",
          "value" : "Früher Abend"
        },
        {
          "language" : "en-US",
          "value" : "Early Evening"
        }
      ]
    },
    {
      "code" : "EVE",
      "display" : "Evening",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Abend"
        },
        {
          "language" : "fr-CH",
          "value" : "Soirée"
        },
        {
          "language" : "it-CH",
          "value" : "Sera"
        },
        {
          "language" : "rm-CH",
          "value" : "Abend"
        },
        {
          "language" : "en-US",
          "value" : "Evening"
        }
      ]
    },
    {
      "code" : "AFT.late",
      "display" : "Late Afternoon",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Später Nachmittag"
        },
        {
          "language" : "fr-CH",
          "value" : "Fin d’après-midi"
        },
        {
          "language" : "it-CH",
          "value" : "Tardo pomeriggio"
        },
        {
          "language" : "rm-CH",
          "value" : "Später Nachmittag"
        },
        {
          "language" : "en-US",
          "value" : "Late Afternoon"
        }
      ]
    },
    {
      "code" : "AFT.early",
      "display" : "Early Afternoon",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Früher Nachmittag"
        },
        {
          "language" : "fr-CH",
          "value" : "Début d’après-midi"
        },
        {
          "language" : "it-CH",
          "value" : "Primo pomeriggio"
        },
        {
          "language" : "rm-CH",
          "value" : "Früher Nachmittag"
        },
        {
          "language" : "en-US",
          "value" : "Early Afternoon"
        }
      ]
    },
    {
      "code" : "AFT",
      "display" : "Afternoon",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Nachmittag"
        },
        {
          "language" : "fr-CH",
          "value" : "Après-midi"
        },
        {
          "language" : "it-CH",
          "value" : "Pomeriggio"
        },
        {
          "language" : "rm-CH",
          "value" : "Nachmittag"
        },
        {
          "language" : "en-US",
          "value" : "Afternoon"
        }
      ]
    },
    {
      "code" : "NOON",
      "display" : "Noon",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Mittag"
        },
        {
          "language" : "fr-CH",
          "value" : "Midi"
        },
        {
          "language" : "it-CH",
          "value" : "Mezzogiorno"
        },
        {
          "language" : "rm-CH",
          "value" : "Mittag"
        },
        {
          "language" : "en-US",
          "value" : "Noon"
        }
      ]
    },
    {
      "code" : "MORN.late",
      "display" : "Late Morning",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Später Morgen"
        },
        {
          "language" : "fr-CH",
          "value" : "Fin de matinée"
        },
        {
          "language" : "it-CH",
          "value" : "Tarda mattinata"
        },
        {
          "language" : "rm-CH",
          "value" : "Später Morgen"
        },
        {
          "language" : "en-US",
          "value" : "Late Morning"
        }
      ]
    },
    {
      "code" : "MORN.early",
      "display" : "Early Morning",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Früher Morgen"
        },
        {
          "language" : "fr-CH",
          "value" : "Début de matinée"
        },
        {
          "language" : "it-CH",
          "value" : "Prima mattina"
        },
        {
          "language" : "rm-CH",
          "value" : "Früher Morgen"
        },
        {
          "language" : "en-US",
          "value" : "Early Morning"
        }
      ]
    },
    {
      "code" : "MORN",
      "display" : "Morning",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Morgen"
        },
        {
          "language" : "fr-CH",
          "value" : "Matinée"
        },
        {
          "language" : "it-CH",
          "value" : "Mattina"
        },
        {
          "language" : "rm-CH",
          "value" : "Morgen"
        },
        {
          "language" : "en-US",
          "value" : "Morning"
        }
      ]
    }
  ]
}

```
