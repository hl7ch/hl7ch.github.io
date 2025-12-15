# CH VACD Recommendation Categories for Immunizations - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Recommendation Categories for Immunizations**

## ValueSet: CH VACD Recommendation Categories for Immunizations 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-recommendation-categories-vs | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:SwissImmunizationRecommendationCategories |
| **Copyright/Legal**: CC0-1.0 | |

 
Immunization recommendation categories. 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/ch-vacd-recommendation-categories-vs) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "ch-vacd-recommendation-categories-vs",
  "url" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-recommendation-categories-vs",
  "version" : "3.3.0",
  "name" : "SwissImmunizationRecommendationCategories",
  "title" : "CH VACD Recommendation Categories for Immunizations",
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
  "description" : "Immunization recommendation categories.",
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
        "system" : "http://snomed.info/sct",
        "concept" : [
          {
            "code" : "42284007",
            "display" : "Administration of vaccine product containing only live attenuated Mycobacterium bovis antigen (procedure)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "BCG-Impfung"
              }
            ]
          }
        ]
      },
      {
        "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-recommendation-categories-cs",
        "concept" : [
          {
            "code" : "41501",
            "display" : "Empfohlene Basisimpfungen",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Empfohlene Basisimpfungen"
              },
              {
                "language" : "fr-CH",
                "value" : "Vaccinations recommandées de base"
              },
              {
                "language" : "it-CH",
                "value" : "Vaccinazioni raccomandate di base"
              },
              {
                "language" : "rm-CH",
                "value" : "vaccinaziuns da basa recumandadas"
              },
              {
                "language" : "en-US",
                "value" : "Recommended primary vaccinations"
              }
            ]
          },
          {
            "code" : "41502",
            "display" : "Empfohlene ergänzende Impfungen",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Empfohlene ergänzende Impfungen"
              },
              {
                "language" : "fr-CH",
                "value" : "Vaccinations recommandées complémentaires"
              },
              {
                "language" : "it-CH",
                "value" : "Vaccinazioni raccomandate complementari"
              },
              {
                "language" : "rm-CH",
                "value" : "vaccinaziuns cumplementaras recumandadas"
              },
              {
                "language" : "en-US",
                "value" : "Recommended booster vaccinations"
              }
            ]
          },
          {
            "code" : "41503",
            "display" : "Empfohlene Impfungen für Risikogruppen",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Empfohlene Impfungen für Risikogruppen"
              },
              {
                "language" : "fr-CH",
                "value" : "Vaccinations recommandées à des groupes à risque"
              },
              {
                "language" : "it-CH",
                "value" : "Vaccinazioni raccomandate a gruppi a rischio"
              },
              {
                "language" : "rm-CH",
                "value" : "vaccinaziuns recumandadas per gruppas da ristga"
              },
              {
                "language" : "en-US",
                "value" : "Recommended vaccinations for risk groups"
              }
            ]
          },
          {
            "code" : "41504",
            "display" : "Impfungen ohne Empfehlungen",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Impfungen ohne Empfehlungen"
              },
              {
                "language" : "fr-CH",
                "value" : "Vaccinations sans recommandation d’utilisatio"
              },
              {
                "language" : "it-CH",
                "value" : "Vaccinazioni senza raccomandazione d’utilizzo"
              },
              {
                "language" : "rm-CH",
                "value" : "vaccinaziuns senza recumandaziuns"
              },
              {
                "language" : "en-US",
                "value" : "Vaccinations without recommendations"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
