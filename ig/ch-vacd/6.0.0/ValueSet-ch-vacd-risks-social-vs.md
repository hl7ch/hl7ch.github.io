# Swiss Social Risks For Immunizations - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Swiss Social Risks For Immunizations**

## ValueSet: Swiss Social Risks For Immunizations 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-risks-social-vs | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:SwissSocialRisksForImmunizations |
| **Copyright/Legal**: CC0-1.0 | |

 
The social exposition risks used in Switzerland. 

 **References** 

* Included into [SwissRisksForImmunizations](ValueSet-ch-vacd-risks-vs.md)

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
  "id" : "ch-vacd-risks-social-vs",
  "url" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-risks-social-vs",
  "version" : "6.0.0",
  "name" : "SwissSocialRisksForImmunizations",
  "title" : "Swiss Social Risks For Immunizations",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-16T09:56:56+00:00",
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
    }
  ],
  "description" : "The social exposition risks used in Switzerland.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CHE"
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
            "code" : "373068000",
            "display" : "Undetermined (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nicht bekannt"
              },
              {
                "language" : "fr-CH",
                "value" : "Indéterminé"
              },
              {
                "language" : "it-CH",
                "value" : "Indeterminato"
              },
              {
                "language" : "rm-CH",
                "value" : "Nunenconuschent"
              },
              {
                "language" : "en-US",
                "value" : "Undetermined"
              }
            ]
          },
          {
            "code" : "105568001",
            "display" : "In prison (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Im Gefängnis"
              },
              {
                "language" : "fr-CH",
                "value" : "en prison"
              },
              {
                "language" : "it-CH",
                "value" : "in prigione"
              },
              {
                "language" : "rm-CH",
                "value" : "en praschun"
              },
              {
                "language" : "en-US",
                "value" : "In prison"
              }
            ]
          },
          {
            "code" : "169449001",
            "display" : "Trying to conceive (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Versuch, schwanger zu werden"
              },
              {
                "language" : "fr-CH",
                "value" : "tentative de tomber enceinte"
              },
              {
                "language" : "it-CH",
                "value" : "tentativo di gravidanza"
              },
              {
                "language" : "rm-CH",
                "value" : "emprova da vegnir en speranza"
              },
              {
                "language" : "en-US",
                "value" : "Trying to conceive"
              }
            ]
          },
          {
            "code" : "224224003",
            "display" : "Lives in staffed home (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Bewohner / Bewohnerinn von Gemeinschaftseinrichtungen"
              },
              {
                "language" : "fr-CH",
                "value" : "pensionnaire d'une institution communautaire"
              },
              {
                "language" : "it-CH",
                "value" : "persona residente in una struttura collettiva"
              },
              {
                "language" : "rm-CH",
                "value" : "abitanta u abitant d'instituziuns communablas"
              },
              {
                "language" : "en-US",
                "value" : "Lives in staffed home"
              }
            ]
          },
          {
            "code" : "1237572006",
            "display" : "Lives in home for intellectually disabled people (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lebt in Heim für geistig behinderte Menschen"
              },
              {
                "language" : "fr-CH",
                "value" : "vit dans un foyer pour personnes vivant avec un handicap mental"
              },
              {
                "language" : "it-CH",
                "value" : "vive in una struttura per disabili mentali"
              },
              {
                "language" : "rm-CH",
                "value" : "viva en ina chasa per persunas cun impediments spiertals"
              },
              {
                "language" : "en-US",
                "value" : "Lives in home for intellectually disabled people"
              }
            ]
          },
          {
            "code" : "1255626009",
            "display" : "Has contact with injecting drug user (situation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kontakt zu Drogenkonsumenten"
              },
              {
                "language" : "fr-CH",
                "value" : "contact avec des consommateurs de drogue"
              },
              {
                "language" : "it-CH",
                "value" : "contatto con consumatori di stupefacenti"
              },
              {
                "language" : "rm-CH",
                "value" : "contact cun consuments da drogas"
              },
              {
                "language" : "en-US",
                "value" : "Has contact with injecting drug user"
              }
            ]
          }
        ]
      },
      {
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/2011000195101",
        "concept" : [
          {
            "code" : "1342377006",
            "display" : "Has contact with wild bird (situation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kontakt zu Wildvögeln"
              },
              {
                "language" : "fr-CH",
                "value" : "contact avec des oiseaux sauvages"
              },
              {
                "language" : "it-CH",
                "value" : "contatto con uccelli selvatici"
              },
              {
                "language" : "rm-CH",
                "value" : "contact cun utschels selvadis"
              },
              {
                "language" : "en-US",
                "value" : "Has contact with wild bird"
              }
            ]
          },
          {
            "code" : "1342378001",
            "display" : "Has contact with poultry bird (situation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kontakt zu Geflügelvögeln"
              },
              {
                "language" : "fr-CH",
                "value" : "contact avec les oiseaux de volaille"
              },
              {
                "language" : "it-CH",
                "value" : "contatto con uccelli da cortile"
              },
              {
                "language" : "rm-CH",
                "value" : "contact cun utschels da giaglinom"
              },
              {
                "language" : "en-US",
                "value" : "Has contact with poultry bird"
              }
            ]
          },
          {
            "code" : "72281000195108",
            "display" : "Contact with human alphaherpesvirus 3 risk patient (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kontakt zu Varizella-Zoster-Risikopatienten"
              },
              {
                "language" : "fr-CH",
                "value" : "contact avec des patients à risque de varicelle-zona"
              },
              {
                "language" : "it-CH",
                "value" : "contatto con un paziente a rischio di varicella-zoster"
              },
              {
                "language" : "rm-CH",
                "value" : "contact cun pazients periclitads da la virola selvadia"
              },
              {
                "language" : "en-US",
                "value" : "Contact with human alphaherpesvirus 3 risk patient"
              }
            ]
          },
          {
            "extension" : [
              {
                "url" : "http://hl7.org/fhir/StructureDefinition/valueset-deprecated",
                "valueBoolean" : true
              }
            ],
            "code" : "72291000195105",
            "display" : "Residence or stay in Switzerland except Geneva and Ticino (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Wohnort oder Aufenthalt in Schweiz ausser Genf und Tessin"
              },
              {
                "language" : "fr-CH",
                "value" : "domicile ou séjour en Suisse hors Genève et Tessin"
              },
              {
                "language" : "it-CH",
                "value" : "domicilio o soggiorno in Svizzera, esclusi Ginevra e Ticino"
              },
              {
                "language" : "rm-CH",
                "value" : "lieu da domicil u da dimora en Svizra senza Genevra e Tessin"
              },
              {
                "language" : "en-US",
                "value" : "Residence or stay in Switzerland except Geneva and Ticino"
              }
            ]
          },
          {
            "code" : "102311000195108",
            "display" : "Residence or stay in Switzerland except Ticino (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Wohnort oder Aufenthalt in Schweiz ausser Tessin"
              },
              {
                "language" : "fr-CH",
                "value" : "domicile ou séjour en Suisse sauf Tessin"
              },
              {
                "language" : "it-CH",
                "value" : "residenza o soggiorno in Svizzera eccezione di Ticino"
              },
              {
                "language" : "rm-CH",
                "value" : "lieu da domicil u da dimora en Svizra senza Tessin"
              },
              {
                "language" : "en-US",
                "value" : "Residence or stay in Switzerland except Ticino"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
