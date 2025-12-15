# CH VACD Route of Administration for Immunization - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Route of Administration for Immunization**

## ValueSet: CH VACD Route of Administration for Immunization 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-route-of-administration-vs | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:RouteOfAdministrationImmunization |
| **Copyright/Legal**: CC0-1.0 | |

 
The route of immunization administration codes. This list is only a sublist of the List used for eMedication. 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/ch-vacd-route-of-administration-vs) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "ch-vacd-route-of-administration-vs",
  "url" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-route-of-administration-vs",
  "version" : "3.3.0",
  "name" : "RouteOfAdministrationImmunization",
  "title" : "CH VACD Route of Administration for Immunization",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-15T10:36:18+00:00",
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
  "description" : "The route of immunization administration codes. This list is only a sublist of the List used for eMedication.",
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
        "system" : "http://standardterms.edqm.eu",
        "concept" : [
          {
            "code" : "20030000",
            "display" : "Intradermal use",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "intradermale Anwendung"
              },
              {
                "language" : "fr-CH",
                "value" : "Voie intradermique"
              },
              {
                "language" : "it-CH",
                "value" : "Uso intradermico"
              },
              {
                "language" : "rm-CH",
                "value" : "applicaziun intradermala"
              },
              {
                "language" : "en-US",
                "value" : "Intradermal use"
              }
            ]
          },
          {
            "code" : "20035000",
            "display" : "Intramuscular use",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "intramuskuläre Anwendung"
              },
              {
                "language" : "fr-CH",
                "value" : "Voie intramusculaire"
              },
              {
                "language" : "it-CH",
                "value" : "Uso intramuscolare"
              },
              {
                "language" : "rm-CH",
                "value" : "applicaziun intramusculara"
              },
              {
                "language" : "en-US",
                "value" : "Intramuscular use"
              }
            ]
          },
          {
            "code" : "20049000",
            "display" : "Nasal use",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "nasale Anwendung"
              },
              {
                "language" : "fr-CH",
                "value" : "Voie nasale"
              },
              {
                "language" : "it-CH",
                "value" : "Uso nasale"
              },
              {
                "language" : "rm-CH",
                "value" : "applicaziun nasala"
              },
              {
                "language" : "en-US",
                "value" : "Nasal use"
              }
            ]
          },
          {
            "code" : "20053000",
            "display" : "Oral use",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "zum Einnehmen"
              },
              {
                "language" : "fr-CH",
                "value" : "Voie orale"
              },
              {
                "language" : "it-CH",
                "value" : "Uso orale"
              },
              {
                "language" : "rm-CH",
                "value" : "applicaziun orala"
              },
              {
                "language" : "en-US",
                "value" : "Oral use"
              }
            ]
          },
          {
            "code" : "20066000",
            "display" : "Subcutaneous use",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "subkutane Anwendung"
              },
              {
                "language" : "fr-CH",
                "value" : "Voie sous-cutanée"
              },
              {
                "language" : "it-CH",
                "value" : "Uso sottocutaneo"
              },
              {
                "language" : "rm-CH",
                "value" : "applicaziun subcutana"
              },
              {
                "language" : "en-US",
                "value" : "Subcutaneous use"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
