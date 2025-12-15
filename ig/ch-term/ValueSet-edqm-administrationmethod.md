# EDQM - Administration Method - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EDQM - Administration Method**

## ValueSet: EDQM - Administration Method 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/ValueSet/edqm-administrationmethod | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:AdministrationMethodEDQM |
| **Copyright/Legal**: CC0-1.0 | |

 
ValueSet Administration method from EDQM, AME, see https://standardterms.edqm.eu/# 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/edqm-administrationmethod) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "edqm-administrationmethod",
  "url" : "http://fhir.ch/ig/ch-term/ValueSet/edqm-administrationmethod",
  "version" : "3.3.0",
  "name" : "AdministrationMethodEDQM",
  "title" : "EDQM - Administration Method",
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
  "description" : "ValueSet Administration method from EDQM, AME, see https://standardterms.edqm.eu/#",
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
        "system" : "urn:oid:0.4.0.127.0.16.1.1.2.1",
        "concept" : [
          {
            "code" : "0004",
            "display" : "Administration",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Administration"
              },
              {
                "language" : "fr-CH",
                "value" : "Administration"
              },
              {
                "language" : "it-CH",
                "value" : "Somministrazione"
              },
              {
                "language" : "rm-CH",
                "value" : "Administraziun"
              }
            ]
          },
          {
            "code" : "0005",
            "display" : "Application",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Applikation"
              },
              {
                "language" : "fr-CH",
                "value" : "Application"
              },
              {
                "language" : "it-CH",
                "value" : "Applicazione"
              },
              {
                "language" : "rm-CH",
                "value" : "Applicaziun"
              }
            ]
          },
          {
            "code" : "0006",
            "display" : "Bathing",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Baden"
              },
              {
                "language" : "fr-CH",
                "value" : "Baigner"
              },
              {
                "language" : "it-CH",
                "value" : "Bagnare"
              },
              {
                "language" : "rm-CH",
                "value" : "Bogn"
              }
            ]
          },
          {
            "code" : "0007",
            "display" : "Chewing",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kauen"
              },
              {
                "language" : "fr-CH",
                "value" : "Mâcher"
              },
              {
                "language" : "it-CH",
                "value" : "Masticare"
              },
              {
                "language" : "rm-CH",
                "value" : "Tschavera"
              }
            ]
          },
          {
            "code" : "0008",
            "display" : "Gargling",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gurgeln"
              },
              {
                "language" : "fr-CH",
                "value" : "Se gargariser"
              },
              {
                "language" : "it-CH",
                "value" : "Gargarizzare"
              },
              {
                "language" : "rm-CH",
                "value" : "Sgarguglias"
              }
            ]
          },
          {
            "code" : "0009",
            "display" : "Infusion",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Infusion"
              },
              {
                "language" : "fr-CH",
                "value" : "Perfusion"
              },
              {
                "language" : "it-CH",
                "value" : "Infusione"
              },
              {
                "language" : "rm-CH",
                "value" : "Infusiun"
              }
            ]
          },
          {
            "code" : "0010",
            "display" : "Inhalation",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Inhalation"
              },
              {
                "language" : "fr-CH",
                "value" : "Inhalation"
              },
              {
                "language" : "it-CH",
                "value" : "Inalazione"
              },
              {
                "language" : "rm-CH",
                "value" : "Inhalaziun"
              }
            ]
          },
          {
            "code" : "0011",
            "display" : "Injection",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Injektion"
              },
              {
                "language" : "fr-CH",
                "value" : "Injection"
              },
              {
                "language" : "it-CH",
                "value" : "Iniezione"
              },
              {
                "language" : "rm-CH",
                "value" : "Injecziun"
              }
            ]
          },
          {
            "code" : "0012",
            "display" : "Insertion",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Insertion"
              },
              {
                "language" : "fr-CH",
                "value" : "Insertion"
              },
              {
                "language" : "it-CH",
                "value" : "Inserzione"
              },
              {
                "language" : "rm-CH",
                "value" : "Inserziun"
              }
            ]
          },
          {
            "code" : "0013",
            "display" : "Instillation",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Instillation"
              },
              {
                "language" : "fr-CH",
                "value" : "Instillation"
              },
              {
                "language" : "it-CH",
                "value" : "Instillazione"
              },
              {
                "language" : "rm-CH",
                "value" : "Installaziun"
              }
            ]
          },
          {
            "code" : "0014",
            "display" : "Orodispersion",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Orodispersion"
              },
              {
                "language" : "fr-CH",
                "value" : "Orodispersion"
              },
              {
                "language" : "it-CH",
                "value" : "Orodispersione"
              },
              {
                "language" : "rm-CH",
                "value" : "Dispersiun d'odi"
              }
            ]
          },
          {
            "code" : "0015",
            "display" : "Rinsing/washing",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Spülen/Waschen"
              },
              {
                "language" : "fr-CH",
                "value" : "Rincer/Laver"
              },
              {
                "language" : "it-CH",
                "value" : "Sciacquare/Lavare"
              },
              {
                "language" : "rm-CH",
                "value" : "Derschentar/Lavar"
              }
            ]
          },
          {
            "code" : "0017",
            "display" : "Spraying",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sprühen"
              },
              {
                "language" : "fr-CH",
                "value" : "Pulvériser"
              },
              {
                "language" : "it-CH",
                "value" : "Spray"
              },
              {
                "language" : "rm-CH",
                "value" : "Squitta"
              }
            ]
          },
          {
            "code" : "0018",
            "display" : "Sucking",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lutschen"
              },
              {
                "language" : "fr-CH",
                "value" : "Sucer"
              },
              {
                "language" : "it-CH",
                "value" : "Succhiare"
              },
              {
                "language" : "rm-CH",
                "value" : "Luschezza"
              }
            ]
          },
          {
            "code" : "0019",
            "display" : "Swallowing",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Schlucken"
              },
              {
                "language" : "fr-CH",
                "value" : "Avaler"
              },
              {
                "language" : "it-CH",
                "value" : "Per deglutizione"
              },
              {
                "language" : "rm-CH",
                "value" : "Tragutter"
              }
            ]
          },
          {
            "code" : "0020",
            "display" : "Not specified",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Keine Angaben"
              },
              {
                "language" : "fr-CH",
                "value" : "Non spécifié"
              },
              {
                "language" : "it-CH",
                "value" : "Non specificato"
              },
              {
                "language" : "rm-CH",
                "value" : "Naginas indicaziuns"
              }
            ]
          },
          {
            "code" : "0111",
            "display" : "Burning",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Brennen"
              },
              {
                "language" : "fr-CH",
                "value" : "Brûler"
              },
              {
                "language" : "it-CH",
                "value" : "Bruciare"
              },
              {
                "language" : "rm-CH",
                "value" : "Arder"
              }
            ]
          },
          {
            "code" : "0112",
            "display" : "Dialysis",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dialyse"
              },
              {
                "language" : "fr-CH",
                "value" : "Dialyse"
              },
              {
                "language" : "it-CH",
                "value" : "Dialisi"
              },
              {
                "language" : "rm-CH",
                "value" : "Dialisa"
              }
            ]
          },
          {
            "code" : "0113",
            "display" : "Implantation",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Implantation"
              },
              {
                "language" : "fr-CH",
                "value" : "Implantation"
              },
              {
                "language" : "it-CH",
                "value" : "Impianto"
              },
              {
                "language" : "rm-CH",
                "value" : "Implantaziun"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
