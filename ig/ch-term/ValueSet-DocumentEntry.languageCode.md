# DocumentEntry.languageCode - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DocumentEntry.languageCode**

## ValueSet: DocumentEntry.languageCode 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.languageCode | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:DocumentEntryLanguageCode |
| *Other Identifiers:*OID:2.16.756.5.30.1.127.3.10.1.13 (use: official, ) | |
| **Copyright/Legal**: CC0-1.0 | |

 
Document language as per Annex 3 EPRO-FDHA. Defines the language in which the document was written. 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/DocumentEntry.languageCode) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "DocumentEntry.languageCode",
  "meta" : {
    "source" : "https://art-decor.org/fhir/ValueSet/2.16.756.5.30.1.127.3.10.1.13--20230522173732",
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
      "valuePeriod" : {
        "start" : "2023-05-22T17:37:32+02:00"
      }
    }
  ],
  "url" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.languageCode",
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.756.5.30.1.127.3.10.1.13"
    }
  ],
  "version" : "3.3.0",
  "name" : "DocumentEntryLanguageCode",
  "title" : "DocumentEntry.languageCode",
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
  "description" : "Document language as per Annex 3 EPRO-FDHA. Defines the language in which the document was written.",
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
  "immutable" : false,
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [
      {
        "system" : "urn:oid:2.16.756.5.30.1.127.3.10.12",
        "concept" : [
          {
            "code" : "OTHER",
            "display" : "Other language",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Andere Sprache"
              },
              {
                "language" : "fr-CH",
                "value" : "Autre langue"
              },
              {
                "language" : "it-CH",
                "value" : "Altra lingua"
              },
              {
                "language" : "en-US",
                "value" : "Other language"
              },
              {
                "language" : "rm-CH",
                "value" : "Autras linguas"
              }
            ]
          }
        ]
      },
      {
        "system" : "urn:ietf:bcp:47",
        "concept" : [
          {
            "code" : "ar",
            "display" : "Arabic",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Arabisch"
              },
              {
                "language" : "fr-CH",
                "value" : "Arabe"
              },
              {
                "language" : "it-CH",
                "value" : "Arabo"
              },
              {
                "language" : "en-US",
                "value" : "Arabic"
              },
              {
                "language" : "rm-CH",
                "value" : "Arab"
              }
            ]
          },
          {
            "code" : "bn",
            "display" : "Bengali",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Bengalisch"
              },
              {
                "language" : "fr-CH",
                "value" : "Bengali"
              },
              {
                "language" : "it-CH",
                "value" : "Bengalese"
              },
              {
                "language" : "en-US",
                "value" : "Bengali"
              },
              {
                "language" : "rm-CH",
                "value" : "Bengal"
              }
            ]
          },
          {
            "code" : "cs",
            "display" : "Czech",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tschechisch"
              },
              {
                "language" : "fr-CH",
                "value" : "Tchèque"
              },
              {
                "language" : "it-CH",
                "value" : "Ceco"
              },
              {
                "language" : "en-US",
                "value" : "Czech"
              },
              {
                "language" : "rm-CH",
                "value" : "Tschec"
              }
            ]
          },
          {
            "code" : "da",
            "display" : "Danish",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dänisch"
              },
              {
                "language" : "fr-CH",
                "value" : "Danois"
              },
              {
                "language" : "it-CH",
                "value" : "Danese"
              },
              {
                "language" : "en-US",
                "value" : "Danish"
              },
              {
                "language" : "rm-CH",
                "value" : "Danais"
              }
            ]
          },
          {
            "code" : "de",
            "display" : "German",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Deutsch"
              },
              {
                "language" : "fr-CH",
                "value" : "Allemand"
              },
              {
                "language" : "it-CH",
                "value" : "Tedesco"
              },
              {
                "language" : "en-US",
                "value" : "German"
              },
              {
                "language" : "rm-CH",
                "value" : "Tudestg"
              }
            ]
          },
          {
            "code" : "de-AT",
            "display" : "German (Austria)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Deutsch (Österreich)"
              },
              {
                "language" : "fr-CH",
                "value" : "Allemand (Autriche)"
              },
              {
                "language" : "it-CH",
                "value" : "Tedesco (Austria)"
              },
              {
                "language" : "en-US",
                "value" : "German (Austria)"
              },
              {
                "language" : "rm-CH",
                "value" : "Tudestg (Austria)"
              }
            ]
          },
          {
            "code" : "de-CH",
            "display" : "German (Switzerland)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Deutsch (Schweiz)"
              },
              {
                "language" : "fr-CH",
                "value" : "Allemand (Suisse)"
              },
              {
                "language" : "it-CH",
                "value" : "Tedesco (Svizzera)"
              },
              {
                "language" : "en-US",
                "value" : "German (Switzerland)"
              },
              {
                "language" : "rm-CH",
                "value" : "Tudestg (Svizra)"
              }
            ]
          },
          {
            "code" : "de-DE",
            "display" : "German (Germany)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Deutsch (Deutschland)"
              },
              {
                "language" : "fr-CH",
                "value" : "Allemand (Allemagne)"
              },
              {
                "language" : "it-CH",
                "value" : "Tedesco (Germania)"
              },
              {
                "language" : "en-US",
                "value" : "German (Germany)"
              },
              {
                "language" : "rm-CH",
                "value" : "Tudestg (Germania)"
              }
            ]
          },
          {
            "code" : "el",
            "display" : "Greek",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Griechisch"
              },
              {
                "language" : "fr-CH",
                "value" : "Grec"
              },
              {
                "language" : "it-CH",
                "value" : "Greco"
              },
              {
                "language" : "en-US",
                "value" : "Greek"
              },
              {
                "language" : "rm-CH",
                "value" : "Grec"
              }
            ]
          },
          {
            "code" : "en",
            "display" : "English",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Englisch"
              },
              {
                "language" : "fr-CH",
                "value" : "Anglais"
              },
              {
                "language" : "it-CH",
                "value" : "Inglese"
              },
              {
                "language" : "en-US",
                "value" : "English"
              },
              {
                "language" : "rm-CH",
                "value" : "Englais"
              }
            ]
          },
          {
            "code" : "en-AU",
            "display" : "English (Australia)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Englisch (Australien)"
              },
              {
                "language" : "fr-CH",
                "value" : "Anglais (Australie)"
              },
              {
                "language" : "it-CH",
                "value" : "Inglese (Australia)"
              },
              {
                "language" : "en-US",
                "value" : "English (Australia)"
              },
              {
                "language" : "rm-CH",
                "value" : "Englais (Australia)"
              }
            ]
          },
          {
            "code" : "en-CA",
            "display" : "English (Canada)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Englisch (Kanada)"
              },
              {
                "language" : "fr-CH",
                "value" : "Anglais (Canada)"
              },
              {
                "language" : "it-CH",
                "value" : "Inglese (Canada)"
              },
              {
                "language" : "en-US",
                "value" : "English (Canada)"
              },
              {
                "language" : "rm-CH",
                "value" : "Englais (Canada)"
              }
            ]
          },
          {
            "code" : "en-GB",
            "display" : "English (Great Britain)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Englisch (Grossbritannien)"
              },
              {
                "language" : "fr-CH",
                "value" : "Anglais (Grande Bretagne)"
              },
              {
                "language" : "it-CH",
                "value" : "Inglese (Gran Bretagna)"
              },
              {
                "language" : "en-US",
                "value" : "English (Great Britain)"
              },
              {
                "language" : "rm-CH",
                "value" : "Englais (Gronda Britannia)"
              }
            ]
          },
          {
            "code" : "en-IN",
            "display" : "English (India)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Englisch (Indien)"
              },
              {
                "language" : "fr-CH",
                "value" : "Anglais (Inde)"
              },
              {
                "language" : "it-CH",
                "value" : "Inglese (India)"
              },
              {
                "language" : "en-US",
                "value" : "English (India)"
              },
              {
                "language" : "rm-CH",
                "value" : "Englais (India)"
              }
            ]
          },
          {
            "code" : "en-NZ",
            "display" : "English (New Zealand)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Englisch (Neuseeland)"
              },
              {
                "language" : "fr-CH",
                "value" : "Anglais (Nouvelle Zélande)"
              },
              {
                "language" : "it-CH",
                "value" : "Inglese (Nuova Zelanda)"
              },
              {
                "language" : "en-US",
                "value" : "English (New Zealand)"
              },
              {
                "language" : "rm-CH",
                "value" : "Englais (Nova Zelanda)"
              }
            ]
          },
          {
            "code" : "en-SG",
            "display" : "English (Singapore)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Englisch (Singapur)"
              },
              {
                "language" : "fr-CH",
                "value" : "Anglais (Singapour)"
              },
              {
                "language" : "it-CH",
                "value" : "Inglese (Singapore)"
              },
              {
                "language" : "en-US",
                "value" : "English (Singapore)"
              },
              {
                "language" : "rm-CH",
                "value" : "Englais (Singapur)"
              }
            ]
          },
          {
            "code" : "en-US",
            "display" : "English (United States)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Englisch (USA)"
              },
              {
                "language" : "fr-CH",
                "value" : "Anglais (États Unis)"
              },
              {
                "language" : "it-CH",
                "value" : "Inglese (Stati Uniti)"
              },
              {
                "language" : "en-US",
                "value" : "English (United States)"
              },
              {
                "language" : "rm-CH",
                "value" : "Englais (USA)"
              }
            ]
          },
          {
            "code" : "es",
            "display" : "Spanish",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Spanisch"
              },
              {
                "language" : "fr-CH",
                "value" : "Espagnol"
              },
              {
                "language" : "it-CH",
                "value" : "Spagnolo"
              },
              {
                "language" : "en-US",
                "value" : "Spanish"
              },
              {
                "language" : "rm-CH",
                "value" : "Spagnol"
              }
            ]
          },
          {
            "code" : "es-AR",
            "display" : "Spanish (Argentina)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Spanisch (Argentinien)"
              },
              {
                "language" : "fr-CH",
                "value" : "Espagnol (Argentine)"
              },
              {
                "language" : "it-CH",
                "value" : "Spagnolo (Argentina)"
              },
              {
                "language" : "en-US",
                "value" : "Spanish (Argentina)"
              },
              {
                "language" : "rm-CH",
                "value" : "Spagnol (Argentina)"
              }
            ]
          },
          {
            "code" : "es-ES",
            "display" : "Spanish (Spain)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Spanisch (Spanien)"
              },
              {
                "language" : "fr-CH",
                "value" : "Espagnol (Espagne)"
              },
              {
                "language" : "it-CH",
                "value" : "Spagnolo (Spagna)"
              },
              {
                "language" : "en-US",
                "value" : "Spanish (Spain)"
              },
              {
                "language" : "rm-CH",
                "value" : "Spagnol (Spagna)"
              }
            ]
          },
          {
            "code" : "es-UY",
            "display" : "Spanish (Uruguay)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Spanisch (Uruguay)"
              },
              {
                "language" : "fr-CH",
                "value" : "Espagnol (Uruguay)"
              },
              {
                "language" : "it-CH",
                "value" : "Spagnolo (Uruguay)"
              },
              {
                "language" : "en-US",
                "value" : "Spanish (Uruguay)"
              },
              {
                "language" : "rm-CH",
                "value" : "Spagnol (Uruguai)"
              }
            ]
          },
          {
            "code" : "fi",
            "display" : "Finnish",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Finnisch"
              },
              {
                "language" : "fr-CH",
                "value" : "Finnois"
              },
              {
                "language" : "it-CH",
                "value" : "Finlandese"
              },
              {
                "language" : "en-US",
                "value" : "Finnish"
              },
              {
                "language" : "rm-CH",
                "value" : "Finlandais"
              }
            ]
          },
          {
            "code" : "fr",
            "display" : "French",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Französisch"
              },
              {
                "language" : "fr-CH",
                "value" : "Français"
              },
              {
                "language" : "it-CH",
                "value" : "Francese"
              },
              {
                "language" : "en-US",
                "value" : "French"
              },
              {
                "language" : "rm-CH",
                "value" : "Franzos"
              }
            ]
          },
          {
            "code" : "fr-BE",
            "display" : "French (Belgium)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Französisch (Belgien)"
              },
              {
                "language" : "fr-CH",
                "value" : "Français (Belgique)"
              },
              {
                "language" : "it-CH",
                "value" : "Francese (Belgio)"
              },
              {
                "language" : "en-US",
                "value" : "French (Belgium)"
              },
              {
                "language" : "rm-CH",
                "value" : "Franzos (Belgia)"
              }
            ]
          },
          {
            "code" : "fr-CH",
            "display" : "French (Switzerland)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Französisch (Schweiz)"
              },
              {
                "language" : "fr-CH",
                "value" : "Français (Suisse)"
              },
              {
                "language" : "it-CH",
                "value" : "Francese (Svizzera)"
              },
              {
                "language" : "en-US",
                "value" : "French (Switzerland)"
              },
              {
                "language" : "rm-CH",
                "value" : "Franzos (Svizra)"
              }
            ]
          },
          {
            "code" : "fr-FR",
            "display" : "French (France)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Französisch (Frankreich)"
              },
              {
                "language" : "fr-CH",
                "value" : "Français (France)"
              },
              {
                "language" : "it-CH",
                "value" : "Francese (Francia)"
              },
              {
                "language" : "en-US",
                "value" : "French (France)"
              },
              {
                "language" : "rm-CH",
                "value" : "Franzos (Frantscha)"
              }
            ]
          },
          {
            "code" : "fy",
            "display" : "Frysian",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Friesisch"
              },
              {
                "language" : "fr-CH",
                "value" : "Frison"
              },
              {
                "language" : "it-CH",
                "value" : "Frisone"
              },
              {
                "language" : "en-US",
                "value" : "Frysian"
              },
              {
                "language" : "rm-CH",
                "value" : "Fris"
              }
            ]
          },
          {
            "code" : "fy-NL",
            "display" : "Frysian (Netherlands)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Friesisch (Niederlande)"
              },
              {
                "language" : "fr-CH",
                "value" : "Frison (Pays-Bas)"
              },
              {
                "language" : "it-CH",
                "value" : "Frisone (Paesi Bassi)"
              },
              {
                "language" : "en-US",
                "value" : "Frysian (Netherlands)"
              },
              {
                "language" : "rm-CH",
                "value" : "Fris (Pajais Bass)"
              }
            ]
          },
          {
            "code" : "hi",
            "display" : "Hindi",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hindi"
              },
              {
                "language" : "fr-CH",
                "value" : "Hindi"
              },
              {
                "language" : "it-CH",
                "value" : "Hindi"
              },
              {
                "language" : "en-US",
                "value" : "Hindi"
              },
              {
                "language" : "rm-CH",
                "value" : "Hindi"
              }
            ]
          },
          {
            "code" : "hr",
            "display" : "Croatian",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kroatisch"
              },
              {
                "language" : "fr-CH",
                "value" : "Croate"
              },
              {
                "language" : "it-CH",
                "value" : "Croato"
              },
              {
                "language" : "en-US",
                "value" : "Croatian"
              },
              {
                "language" : "rm-CH",
                "value" : "Croat"
              }
            ]
          },
          {
            "code" : "it",
            "display" : "Italian",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Italienisch"
              },
              {
                "language" : "fr-CH",
                "value" : "Italien"
              },
              {
                "language" : "it-CH",
                "value" : "Italiano"
              },
              {
                "language" : "en-US",
                "value" : "Italian"
              },
              {
                "language" : "rm-CH",
                "value" : "Talian"
              }
            ]
          },
          {
            "code" : "it-CH",
            "display" : "Italian (Switzerland)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Italienisch (Schweiz)"
              },
              {
                "language" : "fr-CH",
                "value" : "Italien (Suisse)"
              },
              {
                "language" : "it-CH",
                "value" : "Italiano (Svizzera)"
              },
              {
                "language" : "en-US",
                "value" : "Italian (Switzerland)"
              },
              {
                "language" : "rm-CH",
                "value" : "Talian (Svizra)"
              }
            ]
          },
          {
            "code" : "it-IT",
            "display" : "Italian (Italy)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Italienisch (Italien)"
              },
              {
                "language" : "fr-CH",
                "value" : "Italien (Italie)"
              },
              {
                "language" : "it-CH",
                "value" : "Italiano (Italia)"
              },
              {
                "language" : "en-US",
                "value" : "Italian (Italy)"
              },
              {
                "language" : "rm-CH",
                "value" : "Talian (Italia)"
              }
            ]
          },
          {
            "code" : "ja",
            "display" : "Japanese",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Japanisch"
              },
              {
                "language" : "fr-CH",
                "value" : "Japonais"
              },
              {
                "language" : "it-CH",
                "value" : "Giapponese"
              },
              {
                "language" : "en-US",
                "value" : "Japanese"
              },
              {
                "language" : "rm-CH",
                "value" : "Giapunais"
              }
            ]
          },
          {
            "code" : "ko",
            "display" : "Korean",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Koreanisch"
              },
              {
                "language" : "fr-CH",
                "value" : "Coréen"
              },
              {
                "language" : "it-CH",
                "value" : "Coreano"
              },
              {
                "language" : "en-US",
                "value" : "Korean"
              },
              {
                "language" : "rm-CH",
                "value" : "Corean"
              }
            ]
          },
          {
            "code" : "nl",
            "display" : "Dutch",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Niederländisch"
              },
              {
                "language" : "fr-CH",
                "value" : "Néerlandais"
              },
              {
                "language" : "it-CH",
                "value" : "Olandese"
              },
              {
                "language" : "en-US",
                "value" : "Dutch"
              },
              {
                "language" : "rm-CH",
                "value" : "Ollandais"
              }
            ]
          },
          {
            "code" : "nl-BE",
            "display" : "Dutch (Belgium)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Niederländisch (Belgien)"
              },
              {
                "language" : "fr-CH",
                "value" : "Néerlandais (Belgique)"
              },
              {
                "language" : "it-CH",
                "value" : "Olandese (Belgio)"
              },
              {
                "language" : "en-US",
                "value" : "Dutch (Belgium)"
              },
              {
                "language" : "rm-CH",
                "value" : "Ollandais (Belgia)"
              }
            ]
          },
          {
            "code" : "nl-NL",
            "display" : "Dutch (Netherlands)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Niederländisch (Niederlande)"
              },
              {
                "language" : "fr-CH",
                "value" : "Néerlandais (Pays-Bas)"
              },
              {
                "language" : "it-CH",
                "value" : "Olandese (Paesi Bassi)"
              },
              {
                "language" : "en-US",
                "value" : "Dutch (Netherlands)"
              },
              {
                "language" : "rm-CH",
                "value" : "Ollandais (Pajais Bass)"
              }
            ]
          },
          {
            "code" : "no",
            "display" : "Norwegian",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Norwegisch"
              },
              {
                "language" : "fr-CH",
                "value" : "Norvégien"
              },
              {
                "language" : "it-CH",
                "value" : "Norvegese"
              },
              {
                "language" : "en-US",
                "value" : "Norwegian"
              },
              {
                "language" : "rm-CH",
                "value" : "Norvegiais"
              }
            ]
          },
          {
            "code" : "no-NO",
            "display" : "Norwegian (Norway)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Norwegisch (Norwegen)"
              },
              {
                "language" : "fr-CH",
                "value" : "Norvégien (Norvège)"
              },
              {
                "language" : "it-CH",
                "value" : "Norvegese (Norvegia)"
              },
              {
                "language" : "en-US",
                "value" : "Norwegian (Norway)"
              },
              {
                "language" : "rm-CH",
                "value" : "Norvegiais (Norvegia)"
              }
            ]
          },
          {
            "code" : "pa",
            "display" : "Punjabi",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Panjabi"
              },
              {
                "language" : "fr-CH",
                "value" : "Panjabi"
              },
              {
                "language" : "it-CH",
                "value" : "Panjabi"
              },
              {
                "language" : "en-US",
                "value" : "Punjabi"
              },
              {
                "language" : "rm-CH",
                "value" : "Punjabi"
              }
            ]
          },
          {
            "code" : "pl",
            "display" : "Polish",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Polnisch"
              },
              {
                "language" : "fr-CH",
                "value" : "Polonais"
              },
              {
                "language" : "it-CH",
                "value" : "Polacco"
              },
              {
                "language" : "en-US",
                "value" : "Polish"
              },
              {
                "language" : "rm-CH",
                "value" : "Polac"
              }
            ]
          },
          {
            "code" : "pt",
            "display" : "Portuguese",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Portugiesisch"
              },
              {
                "language" : "fr-CH",
                "value" : "Portugais"
              },
              {
                "language" : "it-CH",
                "value" : "Portoghese"
              },
              {
                "language" : "en-US",
                "value" : "Portuguese"
              },
              {
                "language" : "rm-CH",
                "value" : "Portugais"
              }
            ]
          },
          {
            "code" : "pt-BR",
            "display" : "Portuguese (Brazil)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Portugiesisch (Brasilien)"
              },
              {
                "language" : "fr-CH",
                "value" : "Portugais (Brésil)"
              },
              {
                "language" : "it-CH",
                "value" : "Portoghese (Brasile)"
              },
              {
                "language" : "en-US",
                "value" : "Portuguese (Brazil)"
              },
              {
                "language" : "rm-CH",
                "value" : "Portugais (Brasilia)"
              }
            ]
          },
          {
            "code" : "rm",
            "display" : "Romansh",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rätoromanisch"
              },
              {
                "language" : "fr-CH",
                "value" : "Rhéto-roman"
              },
              {
                "language" : "it-CH",
                "value" : "Romancio"
              },
              {
                "language" : "en-US",
                "value" : "Romansh"
              },
              {
                "language" : "rm-CH",
                "value" : "Rumantsch"
              }
            ]
          },
          {
            "code" : "ru",
            "display" : "Russian",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Russisch"
              },
              {
                "language" : "fr-CH",
                "value" : "Russe"
              },
              {
                "language" : "it-CH",
                "value" : "Russo"
              },
              {
                "language" : "en-US",
                "value" : "Russian"
              },
              {
                "language" : "rm-CH",
                "value" : "Russ"
              }
            ]
          },
          {
            "code" : "ru-RU",
            "display" : "Russian (Russia)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Russisch (Russland)"
              },
              {
                "language" : "fr-CH",
                "value" : "Russe (Russie)"
              },
              {
                "language" : "it-CH",
                "value" : "Russo (Russia)"
              },
              {
                "language" : "en-US",
                "value" : "Russian (Russia)"
              },
              {
                "language" : "rm-CH",
                "value" : "Russ (Russia)"
              }
            ]
          },
          {
            "code" : "sr",
            "display" : "Serbian",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Serbisch"
              },
              {
                "language" : "fr-CH",
                "value" : "Serbe"
              },
              {
                "language" : "it-CH",
                "value" : "Serbo"
              },
              {
                "language" : "en-US",
                "value" : "Serbian"
              },
              {
                "language" : "rm-CH",
                "value" : "Serb"
              }
            ]
          },
          {
            "code" : "sr-RS",
            "display" : "Serbian (Serbia)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Serbisch (Serbien)"
              },
              {
                "language" : "fr-CH",
                "value" : "Serbe (Serbie)"
              },
              {
                "language" : "it-CH",
                "value" : "Serbo (Serbia)"
              },
              {
                "language" : "en-US",
                "value" : "Serbian (Serbia)"
              },
              {
                "language" : "rm-CH",
                "value" : "Serb (Serbia)"
              }
            ]
          },
          {
            "code" : "sv",
            "display" : "Swedish",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Schwedisch"
              },
              {
                "language" : "fr-CH",
                "value" : "Suédois"
              },
              {
                "language" : "it-CH",
                "value" : "Svedese"
              },
              {
                "language" : "en-US",
                "value" : "Swedish"
              },
              {
                "language" : "rm-CH",
                "value" : "Svedais"
              }
            ]
          },
          {
            "code" : "sv-SE",
            "display" : "Swedish (Sweden)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Schwedisch (Schweden)"
              },
              {
                "language" : "fr-CH",
                "value" : "Suédois (Suède)"
              },
              {
                "language" : "it-CH",
                "value" : "Svedese (Svezia)"
              },
              {
                "language" : "en-US",
                "value" : "Swedish (Sweden)"
              },
              {
                "language" : "rm-CH",
                "value" : "Svedais (Svezia)"
              }
            ]
          },
          {
            "code" : "te",
            "display" : "Telegu",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Telugu"
              },
              {
                "language" : "fr-CH",
                "value" : "Telugu"
              },
              {
                "language" : "it-CH",
                "value" : "Telugu"
              },
              {
                "language" : "en-US",
                "value" : "Telegu"
              },
              {
                "language" : "rm-CH",
                "value" : "Telugu"
              }
            ]
          },
          {
            "code" : "zh",
            "display" : "Chinese",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Chinesisch"
              },
              {
                "language" : "fr-CH",
                "value" : "Chinois"
              },
              {
                "language" : "it-CH",
                "value" : "Cinese"
              },
              {
                "language" : "en-US",
                "value" : "Chinese"
              },
              {
                "language" : "rm-CH",
                "value" : "Chinais"
              }
            ]
          },
          {
            "code" : "zh-CN",
            "display" : "Chinese (China)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Chinesisch (China)"
              },
              {
                "language" : "fr-CH",
                "value" : "Chinois (Chine)"
              },
              {
                "language" : "it-CH",
                "value" : "Cinese (Cina)"
              },
              {
                "language" : "en-US",
                "value" : "Chinese (China)"
              },
              {
                "language" : "rm-CH",
                "value" : "Chinais (China)"
              }
            ]
          },
          {
            "code" : "zh-HK",
            "display" : "Chinese (Hong Kong)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Chinesisch (Hong Kong)"
              },
              {
                "language" : "fr-CH",
                "value" : "Chinois (Hong Kong)"
              },
              {
                "language" : "it-CH",
                "value" : "Cinese (Hong Kong)"
              },
              {
                "language" : "en-US",
                "value" : "Chinese (Hong Kong)"
              },
              {
                "language" : "rm-CH",
                "value" : "Chinais (HongKong)"
              }
            ]
          },
          {
            "code" : "zh-SG",
            "display" : "Chinese (Singapore)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Chinesisch (Singapur)"
              },
              {
                "language" : "fr-CH",
                "value" : "Chinois (Singapour)"
              },
              {
                "language" : "it-CH",
                "value" : "Cinese (Singapore)"
              },
              {
                "language" : "en-US",
                "value" : "Chinese (Singapore)"
              },
              {
                "language" : "rm-CH",
                "value" : "Chinais (Singapur)"
              }
            ]
          },
          {
            "code" : "zh-TW",
            "display" : "Chinese (Taiwan)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Chinesisch (Taiwan)"
              },
              {
                "language" : "fr-CH",
                "value" : "Chinois (Taïwan)"
              },
              {
                "language" : "it-CH",
                "value" : "Cinese (Taiwan)"
              },
              {
                "language" : "en-US",
                "value" : "Chinese (Taiwan)"
              },
              {
                "language" : "rm-CH",
                "value" : "Chinais (Taiwan)"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
