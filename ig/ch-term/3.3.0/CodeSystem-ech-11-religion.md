# eCH-011 Religion - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eCH-011 Religion**

## CodeSystem: eCH-011 Religion 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/CodeSystem/ech-11-religion | *Version*:3.3.0 |
| Active as of 2024-02-27 | *Computable Name*:ECH11Religion |
| **Copyright/Legal**: CC0-1.0 | |

 
eCH-011 defines different religionTypes. See https://ech.ch/de/ech/ech-0011/ (section 'religion – Konfessionszugehörigkeit') 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChCoreReligion](ValueSet-ch-core-religion.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ech-11-religion",
  "url" : "http://fhir.ch/ig/ch-core/CodeSystem/ech-11-religion",
  "version" : "3.3.0",
  "name" : "ECH11Religion",
  "title" : "eCH-011 Religion",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-02-27",
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
  "description" : "eCH-011 defines different religionTypes. See https://ech.ch/de/ech/ech-0011/ (section 'religion – Konfessionszugehörigkeit')",
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
  "versionNeeded" : true,
  "content" : "complete",
  "concept" : [
    {
      "code" : "111",
      "display" : "evangelisch-reformierte (protestantische) Kirche",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "evangelisch-reformierte (protestantische) Kirche"
        },
        {
          "language" : "fr-CH",
          "value" : "Eglise réformée évangélique/Eglise protestante"
        },
        {
          "language" : "it-CH",
          "value" : "Chiesa evangelico-riformata / Chiesa protestante"
        }
      ]
    },
    {
      "code" : "121",
      "display" : "römisch-katholische Kirche",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "römisch-katholische Kirche"
        },
        {
          "language" : "fr-CH",
          "value" : "Eglise catholique romaine"
        },
        {
          "language" : "it-CH",
          "value" : "Chiesa cattolica romana"
        }
      ]
    },
    {
      "code" : "122",
      "display" : "christkatholische / altkatholische Kirche",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "christkatholische / altkatholische Kirche"
        },
        {
          "language" : "fr-CH",
          "value" : "Eglise catholique-chrétienne/Eglise vieille-catholique"
        },
        {
          "language" : "it-CH",
          "value" : "Chiesa cattolico-cristiana / Chiesa vecchio-cattolica"
        }
      ]
    },
    {
      "code" : "211",
      "display" : "israelitische Gemeinschaft / jüdische Glaubensgemeinschaft",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "israelitische Gemeinschaft / jüdische Glaubensgemeinschaft"
        },
        {
          "language" : "fr-CH",
          "value" : "Communauté israélite/Communauté juive"
        },
        {
          "language" : "it-CH",
          "value" : "Comunità israelita / Comunità di confessione ebraica"
        }
      ]
    },
    {
      "code" : "211201",
      "display" : "Israelitische Cultusgemeinde",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Israelitische Cultusgemeinde"
        },
        {
          "language" : "fr-CH",
          "value" : "«Israelitische Cultusgemeinde»"
        },
        {
          "language" : "it-CH",
          "value" : "Comunità di culto israelita"
        }
      ]
    },
    {
      "code" : "211301",
      "display" : "Jüdisch Liberale Gemeinde",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Jüdisch Liberale Gemeinde"
        },
        {
          "language" : "fr-CH",
          "value" : "«Jüdische Liberale Gemeinde»"
        },
        {
          "language" : "it-CH",
          "value" : "Comunità giudaica liberale"
        }
      ]
    },
    {
      "code" : "000",
      "display" : "Unbekannt",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Unbekannt"
        },
        {
          "language" : "fr-CH",
          "value" : "Inconnue"
        },
        {
          "language" : "it-CH",
          "value" : "Sconosciuto"
        }
      ]
    }
  ]
}

```
