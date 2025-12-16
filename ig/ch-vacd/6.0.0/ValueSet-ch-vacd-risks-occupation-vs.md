# Swiss Occupation Risks For Immunizations - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Swiss Occupation Risks For Immunizations**

## ValueSet: Swiss Occupation Risks For Immunizations 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-risks-occupation-vs | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:SwissOccupationRisksForImmunizations |
| **Copyright/Legal**: CC0-1.0 | |

 
The occupation exposition risks used in Switzerland. 

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
  "id" : "ch-vacd-risks-occupation-vs",
  "url" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-risks-occupation-vs",
  "version" : "6.0.0",
  "name" : "SwissOccupationRisksForImmunizations",
  "title" : "Swiss Occupation Risks For Immunizations",
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
  "description" : "The occupation exposition risks used in Switzerland.",
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
            "code" : "61246008",
            "display" : "Laboratory medicine specialist (occupation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Spezialist / Spezialistin für Labormedizin"
              },
              {
                "language" : "fr-CH",
                "value" : "spécialiste en médecine de laboratoire"
              },
              {
                "language" : "it-CH",
                "value" : "specialista in medicina di laboratorio"
              },
              {
                "language" : "rm-CH",
                "value" : "spezialista u spezialist per medischina da labor"
              },
              {
                "language" : "en-US",
                "value" : "Laboratory medicine specialist"
              }
            ]
          },
          {
            "code" : "159653008",
            "display" : "Trainee - armed forces (occupation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rekrut / Rekrutin"
              },
              {
                "language" : "fr-CH",
                "value" : "recrue"
              },
              {
                "language" : "it-CH",
                "value" : "recluta"
              },
              {
                "language" : "rm-CH",
                "value" : "recruta u recrut"
              },
              {
                "language" : "en-US",
                "value" : "Trainee - armed forces"
              }
            ]
          },
          {
            "code" : "160157004",
            "display" : "Sewerman (occupation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kanalisationsarbeiter / Kanalisationsarbeiterin"
              },
              {
                "language" : "fr-CH",
                "value" : "agent d'entretien des canalisations"
              },
              {
                "language" : "it-CH",
                "value" : "persona addetta alla manutenzione delle fognature"
              },
              {
                "language" : "rm-CH",
                "value" : "lavuranta u lavurant da chanalisaziun"
              },
              {
                "language" : "en-US",
                "value" : "Sewerman"
              }
            ]
          },
          {
            "code" : "265940000",
            "display" : "Animal health occupation (occupation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Beschäftigt im Veterinärwesen"
              },
              {
                "language" : "fr-CH",
                "value" : "profession en santé animale"
              },
              {
                "language" : "it-CH",
                "value" : "professione in ambito veterinario"
              },
              {
                "language" : "rm-CH",
                "value" : "occupada u occupà en ils fatgs veterinars"
              },
              {
                "language" : "en-US",
                "value" : "Animal health occupation"
              }
            ]
          },
          {
            "code" : "1186914001",
            "display" : "Intellectual disability nurse (occupation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Betreuungsperson von geistig Behinderten"
              },
              {
                "language" : "fr-CH",
                "value" : "auxiliaire de vie de personnes vivant avec un handicap mental"
              },
              {
                "language" : "it-CH",
                "value" : "persona che assiste disabili mentali"
              },
              {
                "language" : "rm-CH",
                "value" : "persuna che assitsa persunas cun impediments spiertals"
              },
              {
                "language" : "en-US",
                "value" : "Intellectual disability nurse"
              }
            ]
          },
          {
            "code" : "223366009",
            "display" : "Healthcare professional (occupation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gesundheitsfachperson"
              },
              {
                "language" : "fr-CH",
                "value" : "professionnel de la santé"
              },
              {
                "language" : "it-CH",
                "value" : "professionista della salute"
              },
              {
                "language" : "rm-CH",
                "value" : "persuna spezialisada dal sectur da sanadad"
              },
              {
                "language" : "en-US",
                "value" : "Healthcare professional"
              }
            ]
          }
        ]
      },
      {
        "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-exposure-risks-cs",
        "concept" : [
          {
            "code" : "100002",
            "display" : "Social workers, prison staff, police with frequent contact with drug users",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sozialarbeiter, Gefängnispersonal, Polizei mit häufigem Kontakt zu Drogenkonsumenten"
              },
              {
                "language" : "fr-CH",
                "value" : "Travailleurs sociaux, personnel des prisons et de la police en contact fréquent avec des consommateurs de drogues"
              },
              {
                "language" : "it-CH",
                "value" : "Social workers, prison staff, police with frequent contact with drug users"
              },
              {
                "language" : "rm-CH",
                "value" : "Social workers, prison staff, police with frequent contact with drug users"
              },
              {
                "language" : "en-US",
                "value" : "Social workers, prison staff, police with frequent contact with drug users"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
