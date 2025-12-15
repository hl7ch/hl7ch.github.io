# CH VACD Swissmedic Authorized Immunsera Codes - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Swissmedic Authorized Immunsera Codes**

## ValueSet: CH VACD Swissmedic Authorized Immunsera Codes 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-swissmedic-immunesera-vs | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:SwissImmunsera |
| **Copyright/Legal**: CC0-1.0 | |

 
The list of ATC J06B – Immune sera codes Swissmedic has given an authorization number. 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/ch-vacd-swissmedic-immunesera-vs) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "ch-vacd-swissmedic-immunesera-vs",
  "url" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-swissmedic-immunesera-vs",
  "version" : "3.3.0",
  "name" : "SwissImmunsera",
  "title" : "CH VACD Swissmedic Authorized Immunsera Codes",
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
  "description" : "The list of ATC J06B – Immune sera codes Swissmedic has given an authorization number.",
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
        "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-immunesera-cs",
        "concept" : [
          {
            "code" : "65745-01",
            "display" : "Antivipmyn",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Antivipmyn"
              },
              {
                "language" : "fr-CH",
                "value" : "ativipmyn"
              },
              {
                "language" : "it-CH",
                "value" : "ativipmyn"
              },
              {
                "language" : "rm-CH",
                "value" : "aivipmyn"
              },
              {
                "language" : "en-US",
                "value" : "Antivipmyn"
              }
            ]
          },
          {
            "code" : "65746-01",
            "display" : "Antivipmyn TRI",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Antivipmyn TRI"
              },
              {
                "language" : "fr-CH",
                "value" : "ativipmyn TRI"
              },
              {
                "language" : "it-CH",
                "value" : "ativipmyn TRI"
              },
              {
                "language" : "rm-CH",
                "value" : "antivipmyn TRI"
              },
              {
                "language" : "en-US",
                "value" : "Antivipmyn TRI"
              }
            ]
          },
          {
            "code" : "65747-01",
            "display" : "Banded Krait Antivenin",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Antivenin gegen Gelbgebänderter Krait"
              },
              {
                "language" : "fr-CH",
                "value" : "antivenin contre Bongare rayé"
              },
              {
                "language" : "it-CH",
                "value" : "antidoto contro bungaro"
              },
              {
                "language" : "rm-CH",
                "value" : "antiva cunter crac da storta melna"
              },
              {
                "language" : "en-US",
                "value" : "Banded Krait Antivenin"
              }
            ]
          },
          {
            "code" : "65748-01",
            "display" : "Black Snake Antivenom",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Antivenin gegen Schwarzotter"
              },
              {
                "language" : "fr-CH",
                "value" : "antivenin contre serpent noir"
              },
              {
                "language" : "it-CH",
                "value" : "antidoto contro vipera nera"
              },
              {
                "language" : "rm-CH",
                "value" : "antiva cunter ludra naira"
              },
              {
                "language" : "en-US",
                "value" : "Black Snake Antivenom"
              }
            ]
          },
          {
            "code" : "65749-01",
            "display" : "Brown Snake Antivenom",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Antivenin gegen Braunschlangen"
              },
              {
                "language" : "fr-CH",
                "value" : "antivenin contre serpent brun"
              },
              {
                "language" : "it-CH",
                "value" : "antidoto contro serpente marrone"
              },
              {
                "language" : "rm-CH",
                "value" : "antiva cunter serps brins"
              },
              {
                "language" : "en-US",
                "value" : "Brown Snake Antivenom"
              }
            ]
          },
          {
            "code" : "65750-01",
            "display" : "Cobra Antivenin",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Antivenin gegen Kobra"
              },
              {
                "language" : "fr-CH",
                "value" : "antivenin contre cobra"
              },
              {
                "language" : "it-CH",
                "value" : "antidoto contro cobra"
              },
              {
                "language" : "rm-CH",
                "value" : "Cobra Antivenin"
              },
              {
                "language" : "en-US",
                "value" : "Cobra Antivenin"
              }
            ]
          },
          {
            "code" : "65751-01",
            "display" : "CroFab",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "CroFab"
              },
              {
                "language" : "fr-CH",
                "value" : "CroFab"
              },
              {
                "language" : "it-CH",
                "value" : "CroFab"
              },
              {
                "language" : "rm-CH",
                "value" : "CroFab"
              },
              {
                "language" : "en-US",
                "value" : "CroFab"
              }
            ]
          },
          {
            "code" : "65752-01",
            "display" : "Death Adder Antivenom",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Antivenin gegen Todesotter"
              },
              {
                "language" : "fr-CH",
                "value" : "antivenin contre vipère morte"
              },
              {
                "language" : "it-CH",
                "value" : "antidoto contro vipera della morte"
              },
              {
                "language" : "rm-CH",
                "value" : "antiva cunter mortalitad"
              },
              {
                "language" : "en-US",
                "value" : "Death Adder Antivenom"
              }
            ]
          },
          {
            "code" : "65753-01",
            "display" : "Green Pit Viper Antivenin",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Antivenin gegen Grüne Bambusotter"
              },
              {
                "language" : "fr-CH",
                "value" : "antivenin contre vipère verte"
              },
              {
                "language" : "it-CH",
                "value" : "antidoto contro vipera verde"
              },
              {
                "language" : "rm-CH",
                "value" : "antiva cunter lottaria verda"
              },
              {
                "language" : "en-US",
                "value" : "Green Pit Viper Antivenin"
              }
            ]
          },
          {
            "code" : "65754-01",
            "display" : "King Cobra Antivenin",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Antivenin gegen Königskobra\tKing Cobra"
              },
              {
                "language" : "fr-CH",
                "value" : "antivenin contre cobra royal"
              },
              {
                "language" : "it-CH",
                "value" : "antidoto contro cobra reale"
              },
              {
                "language" : "rm-CH",
                "value" : "antivin cunter cobra roiala"
              },
              {
                "language" : "en-US",
                "value" : "King Cobra Antivenin"
              }
            ]
          },
          {
            "code" : "65755-01",
            "display" : "Malayan Pit Viper Antivenin",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Antivenin gegen Malaiische Mokassinotter"
              },
              {
                "language" : "fr-CH",
                "value" : "antivenin contre vipère malaise"
              },
              {
                "language" : "it-CH",
                "value" : "antidoto contro vipera malese"
              },
              {
                "language" : "rm-CH",
                "value" : "antiva cunter mocca"
              },
              {
                "language" : "en-US",
                "value" : "Malayan Pit Viper Antivenin"
              }
            ]
          },
          {
            "code" : "65756-01",
            "display" : "Polyvalent Snake Antivenom",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Polyvalentes Antivenin gegen Schlangen"
              },
              {
                "language" : "fr-CH",
                "value" : "antivenin polyvalent contre les serpents"
              },
              {
                "language" : "it-CH",
                "value" : "antidoto polivalente contro serpenti"
              },
              {
                "language" : "rm-CH",
                "value" : "antiva polivalenta cunter serps"
              },
              {
                "language" : "en-US",
                "value" : "Polyvalent Snake Antivenom"
              }
            ]
          },
          {
            "code" : "65757-01",
            "display" : "Red Back Spider Antivenom",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Antivenin gegen Rotrückenspinne"
              },
              {
                "language" : "fr-CH",
                "value" : "antivenin contre araignée dos rouge"
              },
              {
                "language" : "it-CH",
                "value" : "antidoto contro ragno dal dorso rosso"
              },
              {
                "language" : "rm-CH",
                "value" : "antiva cunter filien dal dies"
              },
              {
                "language" : "en-US",
                "value" : "Red Back Spider Antivenom"
              }
            ]
          },
          {
            "code" : "65758-01",
            "display" : "Russell's Viper Antivenin",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Antivenin gegen Kettenviper"
              },
              {
                "language" : "fr-CH",
                "value" : "antivenin contre vipère de Russell"
              },
              {
                "language" : "it-CH",
                "value" : "antidoto contro vipera di Russell"
              },
              {
                "language" : "rm-CH",
                "value" : "antiva cunter la vipra da Russell"
              },
              {
                "language" : "en-US",
                "value" : "Russell's Viper Antivenin"
              }
            ]
          },
          {
            "code" : "65759-01",
            "display" : "SAIMR Boomslang Antivenom",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Antivenin gegen Boomslang SAIMR"
              },
              {
                "language" : "fr-CH",
                "value" : "antivenin contre boomslang SAIMR"
              },
              {
                "language" : "it-CH",
                "value" : "antidoto contro boomslang SAIMR"
              },
              {
                "language" : "rm-CH",
                "value" : "antiva cunter la lunghezza da SAIMR"
              },
              {
                "language" : "en-US",
                "value" : "SAIMR Boomslang Antivenom"
              }
            ]
          },
          {
            "code" : "65760-01",
            "display" : "SAIMR Echis Antivenom",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Antivenin gegen Echis SAIMR"
              },
              {
                "language" : "fr-CH",
                "value" : "antivenin contre échis SAIMR"
              },
              {
                "language" : "it-CH",
                "value" : "antidoto contro Echis SAIMR"
              },
              {
                "language" : "rm-CH",
                "value" : "antiva cunter ecologia da SAIMR"
              },
              {
                "language" : "en-US",
                "value" : "SAIMR Echis Antivenom"
              }
            ]
          },
          {
            "code" : "65761-01",
            "display" : "SAIMR Polyvalent Snake Antivenom",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Polyvalentes Snake Antivenom SAIMR"
              },
              {
                "language" : "fr-CH",
                "value" : "antivenin polyvalent SAIMR"
              },
              {
                "language" : "it-CH",
                "value" : "antidoto polivalente SAIMR"
              },
              {
                "language" : "rm-CH",
                "value" : "polivalent serpetta antivenom SAIMR"
              },
              {
                "language" : "en-US",
                "value" : "SAIMR Polyvalent Snake Antivenom"
              }
            ]
          },
          {
            "code" : "65763-01",
            "display" : "Snake Antivenin I.P.",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Indisches Polyvalentes Antivenin"
              },
              {
                "language" : "fr-CH",
                "value" : "antivenin polyvalent indien"
              },
              {
                "language" : "it-CH",
                "value" : "antidoto polivalente indiano"
              },
              {
                "language" : "rm-CH",
                "value" : "antiva polivalenta indica"
              },
              {
                "language" : "en-US",
                "value" : "Snake Antivenin I.P."
              }
            ]
          },
          {
            "code" : "65764-01",
            "display" : "Snake Venom Anti Serum polyvalent",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Polyvalentes Antivenin-Immunserum"
              },
              {
                "language" : "fr-CH",
                "value" : "polyvalent\tsérum anti-venin"
              },
              {
                "language" : "it-CH",
                "value" : "polyvalent\tsiero antivenin"
              },
              {
                "language" : "rm-CH",
                "value" : "polivalente immunser polivalent d'antivins"
              },
              {
                "language" : "en-US",
                "value" : "Snake Venom Anti Serum polyvalent"
              }
            ]
          },
          {
            "code" : "65766-01",
            "display" : "Taipan Antivenom",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Antivenin gegen Taipan"
              },
              {
                "language" : "fr-CH",
                "value" : "antivenin contre taipan"
              },
              {
                "language" : "it-CH",
                "value" : "antidoto contro taipan"
              },
              {
                "language" : "rm-CH",
                "value" : "antivina cunter Taipa"
              },
              {
                "language" : "en-US",
                "value" : "Taipan Antivenom"
              }
            ]
          },
          {
            "code" : "65767-01",
            "display" : "Tiger Snake, Antivenom",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Antivenin gegen Tigerotter"
              },
              {
                "language" : "fr-CH",
                "value" : "antivenin contre serpent tigre"
              },
              {
                "language" : "it-CH",
                "value" : "antidoto contro serpente tigre"
              },
              {
                "language" : "rm-CH",
                "value" : "antiva cunter la ludra tigra"
              },
              {
                "language" : "en-US",
                "value" : "Tiger Snake, Antivenom"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
