# Main Guarantor - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Main Guarantor**

## ValueSet: Main Guarantor 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/ValueSet/mainguarantor | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:MainGuarantor |
| **Copyright/Legal**: CC0-1.0 | |

 
Codes for the different types of a main guarantor. 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/mainguarantor) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "mainguarantor",
  "url" : "http://fhir.ch/ig/ch-term/ValueSet/mainguarantor",
  "version" : "3.3.0",
  "name" : "MainGuarantor",
  "title" : "Main Guarantor",
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
  "description" : "Codes for the different types of a main guarantor.",
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
        "system" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-25-mainguarantor",
        "concept" : [
          {
            "code" : "1",
            "display" : "Krankenversicherung (obligat.)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Krankenversicherung (obligat.)"
              },
              {
                "language" : "fr-CH",
                "value" : "Assurance-maladie (obligatoire)"
              },
              {
                "language" : "it-CH",
                "value" : "assicurazione malattie (obbligatoria)"
              }
            ]
          },
          {
            "code" : "2",
            "display" : "Invalidenversicherung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Invalidenversicherung"
              },
              {
                "language" : "fr-CH",
                "value" : "Assurance-invalidité"
              },
              {
                "language" : "it-CH",
                "value" : "assicurazione invalidità"
              }
            ]
          },
          {
            "code" : "3",
            "display" : "Militärversicherung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Militärversicherung"
              },
              {
                "language" : "fr-CH",
                "value" : "Assurance-militaire"
              },
              {
                "language" : "it-CH",
                "value" : "assicurazione militare"
              }
            ]
          },
          {
            "code" : "4",
            "display" : "Unfallversicherung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Unfallversicherung"
              },
              {
                "language" : "fr-CH",
                "value" : "Assurance-accident"
              },
              {
                "language" : "it-CH",
                "value" : "assicurazione infortuni"
              }
            ]
          },
          {
            "code" : "5",
            "display" : "Selbstzahler (z.B. Ausländer ohne Grundversicherung)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Selbstzahler (z.B. Ausländer ohne Grundversicherung)"
              },
              {
                "language" : "fr-CH",
                "value" : "Autopayeur (par ex. étrangers sans assurance)"
              },
              {
                "language" : "it-CH",
                "value" : "paziente stesso (p.es. straniero senza assicurazione di base)"
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
                "value" : "Inconnue"
              },
              {
                "language" : "it-CH",
                "value" : "sconosciuto"
              }
            ]
          }
        ]
      },
      {
        "system" : "http://fhir.ch/ig/ch-core/CodeSystem/mainguarantor",
        "concept" : [
          {
            "code" : "ZV",
            "display" : "Zusatzversicherung",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Zusatzversicherung"
              },
              {
                "language" : "fr-CH",
                "value" : "Assurance complémentaire"
              },
              {
                "language" : "it-CH",
                "value" : "Assicurazione integrativa"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
