# Swiss Preillness Risks For Immunizations - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Swiss Preillness Risks For Immunizations**

## ValueSet: Swiss Preillness Risks For Immunizations 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-risks-preillness-vs | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:SwissPreillnessRisksForImmunizations |
| **Copyright/Legal**: CC0-1.0 | |

 
The preillness risks used in Switzerland. 

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
  "id" : "ch-vacd-risks-preillness-vs",
  "url" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-risks-preillness-vs",
  "version" : "6.0.0",
  "name" : "SwissPreillnessRisksForImmunizations",
  "title" : "Swiss Preillness Risks For Immunizations",
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
  "description" : "The preillness risks used in Switzerland.",
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
            "code" : "24063002",
            "display" : "Fracture of base of skull (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Schädelbasisfraktur"
              },
              {
                "language" : "fr-CH",
                "value" : "fracture de la base du crâne"
              },
              {
                "language" : "it-CH",
                "value" : "frattura della base del cranio"
              },
              {
                "language" : "rm-CH",
                "value" : "fractura da la basa da la chavazza"
              },
              {
                "language" : "en-US",
                "value" : "Fracture of base of skull"
              }
            ]
          },
          {
            "code" : "51244008",
            "display" : "Disorder of spleen (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Milzerkrankung"
              },
              {
                "language" : "fr-CH",
                "value" : "affection de la rate"
              },
              {
                "language" : "it-CH",
                "value" : "malattia della milza"
              },
              {
                "language" : "rm-CH",
                "value" : "malsogna da la spletga"
              },
              {
                "language" : "en-US",
                "value" : "Disorder of spleen"
              }
            ]
          },
          {
            "code" : "51655004",
            "display" : "Congenital anomaly of skull (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kongenitale Schädelmissbildung"
              },
              {
                "language" : "fr-CH",
                "value" : "anomalie congénitale du crâne"
              },
              {
                "language" : "it-CH",
                "value" : "malformazione congenita del cranio"
              },
              {
                "language" : "rm-CH",
                "value" : "defurmaziun congenitala dal la chavazza"
              },
              {
                "language" : "en-US",
                "value" : "Congenital anomaly of skull"
              }
            ]
          },
          {
            "code" : "56265001",
            "display" : "Heart disease (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Herzerkrankung"
              },
              {
                "language" : "fr-CH",
                "value" : "maladie cardiaque"
              },
              {
                "language" : "it-CH",
                "value" : "malattia cardiaca"
              },
              {
                "language" : "rm-CH",
                "value" : "malsogna dal cor"
              },
              {
                "language" : "en-US",
                "value" : "Heart disease"
              }
            ]
          },
          {
            "code" : "75934005",
            "display" : "Metabolic disease (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Stoffwechselerkrankung"
              },
              {
                "language" : "fr-CH",
                "value" : "maladie métabolique"
              },
              {
                "language" : "it-CH",
                "value" : "malattia metabolica"
              },
              {
                "language" : "rm-CH",
                "value" : "malsogna dal metabolissem"
              },
              {
                "language" : "en-US",
                "value" : "Metabolic disease"
              }
            ]
          },
          {
            "code" : "90708001",
            "display" : "Kidney disease (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Nierenerkrankung"
              },
              {
                "language" : "fr-CH",
                "value" : "maladie rénale"
              },
              {
                "language" : "it-CH",
                "value" : "malattia renale"
              },
              {
                "language" : "rm-CH",
                "value" : "malsogna dals gnirunchels"
              },
              {
                "language" : "en-US",
                "value" : "Kidney disease"
              }
            ]
          },
          {
            "code" : "230744007",
            "display" : "Cerebrospinal fluid leak (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Zerebrospinale Liquorfistel"
              },
              {
                "language" : "fr-CH",
                "value" : "fistule de liquide céphalorachidien"
              },
              {
                "language" : "it-CH",
                "value" : "fistola di liquido cerebrospinale"
              },
              {
                "language" : "rm-CH",
                "value" : "fistla da liquor cerebrospinal"
              },
              {
                "language" : "en-US",
                "value" : "Cerebrospinal fluid leak"
              }
            ]
          },
          {
            "code" : "235856003",
            "display" : "Disorder of liver (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lebererkrankung"
              },
              {
                "language" : "fr-CH",
                "value" : "affection du foie"
              },
              {
                "language" : "it-CH",
                "value" : "malattia epatica"
              },
              {
                "language" : "rm-CH",
                "value" : "malsogna dal gnirom"
              },
              {
                "language" : "en-US",
                "value" : "Disorder of liver"
              }
            ]
          },
          {
            "code" : "363346000",
            "display" : "Malignant neoplastic disease (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Krebs"
              },
              {
                "language" : "fr-CH",
                "value" : "cancer"
              },
              {
                "language" : "it-CH",
                "value" : "cancro"
              },
              {
                "language" : "rm-CH",
                "value" : "giomber"
              },
              {
                "language" : "en-US",
                "value" : "Malignant neoplastic disease"
              }
            ]
          },
          {
            "code" : "402196005",
            "display" : "Childhood atopic dermatitis (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Atopische Dermatitis im Kindesalter"
              },
              {
                "language" : "fr-CH",
                "value" : "dermatite atopique de l'enfance"
              },
              {
                "language" : "it-CH",
                "value" : "dermatite atopica nell'infanzia"
              },
              {
                "language" : "rm-CH",
                "value" : "dermatitis atopica durant l'uffanza"
              },
              {
                "language" : "en-US",
                "value" : "Childhood atopic dermatitis"
              }
            ]
          },
          {
            "code" : "414029004",
            "display" : "Disorder of immune function (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Störung der Immunfunktion"
              },
              {
                "language" : "fr-CH",
                "value" : "perturbation de la fonction immunitaire"
              },
              {
                "language" : "it-CH",
                "value" : "disturbo della funzione immunitaria"
              },
              {
                "language" : "rm-CH",
                "value" : "disturbi da la funcziun d'immunitad"
              },
              {
                "language" : "en-US",
                "value" : "Disorder of immune function"
              }
            ]
          },
          {
            "code" : "449840001",
            "display" : "Cochlear prosthesis in situ (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cochleaimplantat in situ"
              },
              {
                "language" : "fr-CH",
                "value" : "implant cochléaire in situ"
              },
              {
                "language" : "it-CH",
                "value" : "impianto cocleare in situ"
              },
              {
                "language" : "rm-CH",
                "value" : "implantat d'udida in situ"
              },
              {
                "language" : "en-US",
                "value" : "Cochlear prosthesis in situ"
              }
            ]
          },
          {
            "code" : "737294004",
            "display" : "Transplant present (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Transplantation vorhanden"
              },
              {
                "language" : "fr-CH",
                "value" : "présence d'une transplantation"
              },
              {
                "language" : "it-CH",
                "value" : "presenza di un trapianto"
              },
              {
                "language" : "rm-CH",
                "value" : "transplantaziun avant maun"
              },
              {
                "language" : "en-US",
                "value" : "Transplant present"
              }
            ]
          },
          {
            "code" : "19829001",
            "display" : "Disorder of lung (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lungenerkrankung"
              },
              {
                "language" : "fr-CH",
                "value" : "maladie du poumon"
              },
              {
                "language" : "it-CH",
                "value" : "malattia polmonare"
              },
              {
                "language" : "rm-CH",
                "value" : "malsogna dal pulmun"
              },
              {
                "language" : "en-US",
                "value" : "Disorder of lung"
              }
            ]
          },
          {
            "code" : "414027002",
            "display" : "Disorder of hematopoietic structure (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Erkrankung des blutbildenden Systems"
              },
              {
                "language" : "fr-CH",
                "value" : "affection du système hématopoïétique"
              },
              {
                "language" : "it-CH",
                "value" : "disturbo del sistema ematopoietico"
              },
              {
                "language" : "rm-CH",
                "value" : "malsogna dal sistem che producescha sang"
              },
              {
                "language" : "en-US",
                "value" : "Disorder of hematopoietic structure"
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
            "code" : "42251000195104",
            "display" : "Disorder of nervous system with systemic manifestations (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Erkrankung des Nervensystems mit systemischen Manifestationen"
              },
              {
                "language" : "fr-CH",
                "value" : "affection du système nerveux avec manifestations systémiques"
              },
              {
                "language" : "it-CH",
                "value" : "malattia del sistema nervoso con manifestazioni sistemiche"
              },
              {
                "language" : "rm-CH",
                "value" : "malsogna dal sistem da la gnerva cun manifestaziuns sistemicas"
              },
              {
                "language" : "en-US",
                "value" : "Disorder of nervous system with systemic manifestations"
              }
            ]
          },
          {
            "code" : "42261000195101",
            "display" : "Disorder of musculoskeletal system with systemic manifestations (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Erkrankung des Muskel-Skelett-Systems mit systemischen Manifestationen"
              },
              {
                "language" : "fr-CH",
                "value" : "affection du système musculo-squelettique avec manifestations systémiques"
              },
              {
                "language" : "it-CH",
                "value" : "malattia dell'apparato muscoloscheletrico con manifestazioni sistemiche"
              },
              {
                "language" : "rm-CH",
                "value" : "malsogna dal sistem dals musculs e dal skelet cun manifestaziuns sistemicas"
              },
              {
                "language" : "en-US",
                "value" : "Disorder of musculoskeletal system with systemic manifestations"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
