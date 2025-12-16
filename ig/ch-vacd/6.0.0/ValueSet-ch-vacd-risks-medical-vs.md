# Swiss Medical Risks For Immunizations - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Swiss Medical Risks For Immunizations**

## ValueSet: Swiss Medical Risks For Immunizations 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-risks-medical-vs | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:SwissMedicalRisksForImmunizations |
| **Copyright/Legal**: CC0-1.0 | |

 
The medical risks used in Switzerland. 

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
  "id" : "ch-vacd-risks-medical-vs",
  "url" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-risks-medical-vs",
  "version" : "6.0.0",
  "name" : "SwissMedicalRisksForImmunizations",
  "title" : "Swiss Medical Risks For Immunizations",
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
  "description" : "The medical risks used in Switzerland.",
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
            "code" : "77386006",
            "display" : "Pregnancy (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Schwangerschaft"
              },
              {
                "language" : "fr-CH",
                "value" : "grossesse"
              },
              {
                "language" : "it-CH",
                "value" : "gravidanza"
              },
              {
                "language" : "rm-CH",
                "value" : "gravidanza"
              },
              {
                "language" : "en-US",
                "value" : "Pregnancy"
              }
            ]
          },
          {
            "code" : "102947004",
            "display" : "High risk sexual behavior (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Risikoreiches Sexualverhalten"
              },
              {
                "language" : "fr-CH",
                "value" : "comportement sexuel à risque élevé"
              },
              {
                "language" : "it-CH",
                "value" : "comportamento sessuale ad alto rischio"
              },
              {
                "language" : "rm-CH",
                "value" : "cumportament sexual privlus"
              },
              {
                "language" : "en-US",
                "value" : "High risk sexual behavior"
              }
            ]
          },
          {
            "code" : "226034001",
            "display" : "Injecting drug user (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Konsument / Konsumentin von injizierbaren Drogen"
              },
              {
                "language" : "fr-CH",
                "value" : "consommateurs de drogue par injection"
              },
              {
                "language" : "it-CH",
                "value" : "consumatore di stupefacenti iniettabili"
              },
              {
                "language" : "rm-CH",
                "value" : "consumenta u consument da drogas injectablas"
              },
              {
                "language" : "en-US",
                "value" : "Injecting drug user"
              }
            ]
          },
          {
            "code" : "1237016007",
            "display" : "At increased risk of exposure to Measles virus (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Erhöhtes Expositionsrisiko für Masern"
              },
              {
                "language" : "fr-CH",
                "value" : "risque accru d'exposition à la rougeole"
              },
              {
                "language" : "it-CH",
                "value" : "maggiore rischio d'esposizione al morbillo"
              },
              {
                "language" : "rm-CH",
                "value" : "pli gronda ristga d'esser expost al virustgel"
              },
              {
                "language" : "en-US",
                "value" : "At increased risk of exposure to Measles virus"
              }
            ]
          },
          {
            "code" : "1237017003",
            "display" : "At increased risk of exposure to Mumps virus (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Erhöhtes Expositionsrisiko für Mumps"
              },
              {
                "language" : "fr-CH",
                "value" : "risque accru d'exposition aux oreillons"
              },
              {
                "language" : "it-CH",
                "value" : "maggiore rischio d'esposizione agli orecchioni"
              },
              {
                "language" : "rm-CH",
                "value" : "pli gronda ristga d'esser expost al glandun"
              },
              {
                "language" : "en-US",
                "value" : "At increased risk of exposure to Mumps virus"
              }
            ]
          },
          {
            "code" : "1237018008",
            "display" : "At increased risk of exposure to Rubella virus (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Erhöhtes Expositionsrisiko für Röteln"
              },
              {
                "language" : "fr-CH",
                "value" : "risque accru d'exposition à la rubéole"
              },
              {
                "language" : "it-CH",
                "value" : "maggiore rischio d'esposizione alla rosolia"
              },
              {
                "language" : "rm-CH",
                "value" : "pli gronda ristga d'esser expost la rubella"
              },
              {
                "language" : "en-US",
                "value" : "At increased risk of exposure to Rubella virus"
              }
            ]
          },
          {
            "code" : "1237019000",
            "display" : "At increased risk of exposure to Haemophilus influenzae type b (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Erhöhtes Expositionsrisiko für Haemophilus influenzae Typ b"
              },
              {
                "language" : "fr-CH",
                "value" : "risque accru d'exposition à l'Haemophilus influenzae de type b"
              },
              {
                "language" : "it-CH",
                "value" : "maggiore rischio d'esposizione a Haemophilus influenzae di tipo B"
              },
              {
                "language" : "rm-CH",
                "value" : "pli gronda ristga d'esser expost a la hemofilus influenza tip B"
              },
              {
                "language" : "en-US",
                "value" : "At increased risk of exposure to Haemophilus influenzae type b"
              }
            ]
          },
          {
            "code" : "1237020006",
            "display" : "At increased risk of exposure to hepatitis B virus (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Erhöhtes Expositionsrisiko für Hepatitis B"
              },
              {
                "language" : "fr-CH",
                "value" : "risque accru d'exposition à l'hépatite B"
              },
              {
                "language" : "it-CH",
                "value" : "maggiore rischio d'esposizione all'epatite B"
              },
              {
                "language" : "rm-CH",
                "value" : "pli gronda ristga d'esser expost a hepatitis B"
              },
              {
                "language" : "en-US",
                "value" : "At increased risk of exposure to hepatitis B virus"
              }
            ]
          },
          {
            "code" : "1237021005",
            "display" : "At increased risk of exposure to European tick-borne encephalitis virus (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Erhöhtes Expositionsrisiko für FSME"
              },
              {
                "language" : "fr-CH",
                "value" : "risque accru d'exposition à la MEVE"
              },
              {
                "language" : "it-CH",
                "value" : "maggiore rischio d'esposizione all'encefalite da zecche (FSME)"
              },
              {
                "language" : "rm-CH",
                "value" : "pli gronda ristga d'esser expost a la meningoencefalitis da zeccas"
              },
              {
                "language" : "en-US",
                "value" : "At increased risk of exposure to European tick-borne encephalitis virus"
              }
            ]
          },
          {
            "code" : "1237022003",
            "display" : "At increased risk of exposure to human poliovirus (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Erhöhtes Expositionsrisiko für Poliomyelitis"
              },
              {
                "language" : "fr-CH",
                "value" : "risque accru d'exposition à la poliomyélite"
              },
              {
                "language" : "it-CH",
                "value" : "maggiore rischio d'esposizione alla poliomielite"
              },
              {
                "language" : "rm-CH",
                "value" : "pli gronda ristga d'esser expost a la poliomielitis"
              },
              {
                "language" : "en-US",
                "value" : "At increased risk of exposure to human poliovirus"
              }
            ]
          },
          {
            "code" : "1237023008",
            "display" : "At increased risk of exposure to Neisseria meningitidis (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Erhöhtes Expositionsrisiko für Meningokokken"
              },
              {
                "language" : "fr-CH",
                "value" : "risque accru d'exposition aux méningocoques"
              },
              {
                "language" : "it-CH",
                "value" : "maggiore rischio d'esposizione ai meningococchi"
              },
              {
                "language" : "rm-CH",
                "value" : "pli gronda ristga d'esser expost a meningococcus"
              },
              {
                "language" : "en-US",
                "value" : "At increased risk of exposure to Neisseria meningitidis"
              }
            ]
          },
          {
            "code" : "1237024002",
            "display" : "At increased risk of exposure to Rabies virus",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Erhöhtes Expositionsrisiko für Tollwut"
              },
              {
                "language" : "fr-CH",
                "value" : "risque accru d'exposition à la rage"
              },
              {
                "language" : "it-CH",
                "value" : "maggiore rischio d'esposizione alla rabbia"
              },
              {
                "language" : "rm-CH",
                "value" : "pli gronda ristga d'esser expost a la frenesia"
              },
              {
                "language" : "en-US",
                "value" : "At increased risk of exposure to rabies virus"
              }
            ]
          },
          {
            "code" : "1237025001",
            "display" : "At increased risk of exposure to Mycobacterium tuberculosis complex (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Erhöhtes Expositionsrisiko für Tuberkulose"
              },
              {
                "language" : "fr-CH",
                "value" : "risque accru d'exposition à la tuberculose"
              },
              {
                "language" : "it-CH",
                "value" : "maggiore rischio d'esposizione alla tubercolosi"
              },
              {
                "language" : "rm-CH",
                "value" : "pli gronda ristga d'esser expost a tuberculosa"
              },
              {
                "language" : "en-US",
                "value" : "At increased risk of exposure to Mycobacterium tuberculosis complex"
              }
            ]
          },
          {
            "code" : "1237026000",
            "display" : "At increased risk of exposure to hepatitis A virus (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Erhöhtes Expositionsrisiko für Hepatitis A"
              },
              {
                "language" : "fr-CH",
                "value" : "risque accru d'exposition à l'hépatite A"
              },
              {
                "language" : "it-CH",
                "value" : "maggiore rischio d'esposizione all'epatite A"
              },
              {
                "language" : "rm-CH",
                "value" : "pli gronda ristga d'esser expost a hepatitis A"
              },
              {
                "language" : "en-US",
                "value" : "At increased risk of exposure to hepatitis A virus"
              }
            ]
          },
          {
            "code" : "1237027009",
            "display" : "At increased risk of exposure to Human alphaherpesvirus 3 (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Erhöhtes Expositionsrisiko für Varizellen"
              },
              {
                "language" : "fr-CH",
                "value" : "risque accru d'exposition à la varicelle"
              },
              {
                "language" : "it-CH",
                "value" : "maggiore rischio d'esposizione alla varicella"
              },
              {
                "language" : "rm-CH",
                "value" : "pli gronda ristga d'esser expost a la virola selvadia"
              },
              {
                "language" : "en-US",
                "value" : "At increased risk of exposure to Human alphaherpesvirus 3"
              }
            ]
          },
          {
            "code" : "1237028004",
            "display" : "At increased risk of exposure to Influenza virus (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Erhöhtes Expositionsrisiko für Influenza"
              },
              {
                "language" : "fr-CH",
                "value" : "risque accru d'exposition à l'influenza"
              },
              {
                "language" : "it-CH",
                "value" : "maggiore rischio d'esposizione all'influenza"
              },
              {
                "language" : "rm-CH",
                "value" : "pli gronda ristga d'esser expost a l'influenza"
              },
              {
                "language" : "en-US",
                "value" : "At increased risk of exposure to Influenza virus"
              }
            ]
          },
          {
            "code" : "1237029007",
            "display" : "At increased risk of exposure to Streptococcus pneumoniae (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Erhöhtes Expositionsrisiko für Pneumokokken"
              },
              {
                "language" : "fr-CH",
                "value" : "risque accru d'exposition aux pneumocoques"
              },
              {
                "language" : "it-CH",
                "value" : "maggiore rischio d'esposizione agli pneumococchi"
              },
              {
                "language" : "rm-CH",
                "value" : "pli gronda ristga d'esser expost a pneumococcus"
              },
              {
                "language" : "en-US",
                "value" : "At increased risk of exposure to Streptococcus pneumoniae"
              }
            ]
          },
          {
            "code" : "1237030002",
            "display" : "At increased risk of exposure to Bordetella pertussis (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Erhöhtes Expositionsrisiko für Pertussis"
              },
              {
                "language" : "fr-CH",
                "value" : "risque accru d'exposition à la coqueluche"
              },
              {
                "language" : "it-CH",
                "value" : "maggiore rischio d'esposizione alla pertosse"
              },
              {
                "language" : "rm-CH",
                "value" : "pli gronda ristga d'esser expost a la tuss chanina"
              },
              {
                "language" : "en-US",
                "value" : "At increased risk of exposure to Bordetella pertussis"
              }
            ]
          },
          {
            "code" : "1237443008",
            "display" : "Birth weight 1.5 kilogram or less (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Geburtsgewicht 1,5 Kilogramm oder weniger"
              },
              {
                "language" : "fr-CH",
                "value" : "Poids à la naissance 1,5 kilogramme ou moins"
              },
              {
                "language" : "it-CH",
                "value" : "peso alla nascita 1,5 kg o meno"
              },
              {
                "language" : "rm-CH",
                "value" : "pais da naschientscha 1,5 kilograms u damain"
              },
              {
                "language" : "en-US",
                "value" : "Birth weight 1.5 kilogram or less"
              }
            ]
          },
          {
            "code" : "1237570003",
            "display" : "Maternal history of viral hepatitis B (situation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Mütterliche Anamnese einer Virushepatitis B"
              },
              {
                "language" : "fr-CH",
                "value" : "antécédents maternels d'hépatite B"
              },
              {
                "language" : "it-CH",
                "value" : "anamnesi materna di epatite virale B"
              },
              {
                "language" : "rm-CH",
                "value" : "anamnesa materna d'ina hepatitis virala B"
              },
              {
                "language" : "en-US",
                "value" : "Maternal history of viral hepatitis B"
              }
            ]
          },
          {
            "code" : "1237576009",
            "display" : "Baby premature at delivery less than 32 weeks (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Frühgeburt bei einer Geburt von weniger als 32 Wochen"
              },
              {
                "language" : "fr-CH",
                "value" : "naissance prématurée à moins de 32 semaines"
              },
              {
                "language" : "it-CH",
                "value" : "prematurità: parto prima della 32a settimana"
              },
              {
                "language" : "rm-CH",
                "value" : "naschientscha prematura en cas d'ina gravidanza da main che 32 emnas"
              },
              {
                "language" : "en-US",
                "value" : "Baby premature at delivery less than 32 weeks"
              }
            ]
          },
          {
            "code" : "1251534000",
            "display" : "Exposure to invasive meningococcal disease (event)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Exposition gegenüber invasiver Meningokokkeninfektion"
              },
              {
                "language" : "fr-CH",
                "value" : "exposition à une infection invasive à méningocoque"
              },
              {
                "language" : "it-CH",
                "value" : "esposizione a infezione invasiva da meningococchi"
              },
              {
                "language" : "rm-CH",
                "value" : "expost ad ina infecziun invasiva cun meningococcus"
              },
              {
                "language" : "en-US",
                "value" : "Exposure to invasive meningococcal disease"
              }
            ]
          },
          {
            "code" : "1254737008",
            "display" : "Has contact with infant (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kontakt zu Säuglingen"
              },
              {
                "language" : "fr-CH",
                "value" : "contact avec un nourrisson"
              },
              {
                "language" : "it-CH",
                "value" : "contatto con un lattante"
              },
              {
                "language" : "rm-CH",
                "value" : "contact cun in poppin"
              },
              {
                "language" : "en-US",
                "value" : "Has contact with infant"
              }
            ]
          },
          {
            "code" : "1254738003",
            "display" : "Has contact with infant younger than 6 months",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kontakt zu Säugling jünger als 6 Monate"
              },
              {
                "language" : "fr-CH",
                "value" : "contact avec un nourrisson de moins de 6 mois"
              },
              {
                "language" : "it-CH",
                "value" : "contatto con un lattante di meno di 6 mesi"
              },
              {
                "language" : "rm-CH",
                "value" : "contact cun in poppin da main che 6 mais"
              },
              {
                "language" : "en-US",
                "value" : "In contact with infant younger than 6 months"
              }
            ]
          },
          {
            "code" : "1254739006",
            "display" : "Has contact with premature infant (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kontakt zu Frühgeborenen"
              },
              {
                "language" : "fr-CH",
                "value" : "contact avec des prématurés"
              },
              {
                "language" : "it-CH",
                "value" : "contatto con un prematuro"
              },
              {
                "language" : "rm-CH",
                "value" : "contact cun in uffant naschì permaturamain"
              },
              {
                "language" : "en-US",
                "value" : "Has contact with premature infant"
              }
            ]
          },
          {
            "code" : "1255625008",
            "display" : "Childbirth within last 4 weeks (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Entbindung in letzten 4 Wochen"
              },
              {
                "language" : "fr-CH",
                "value" : "accouchement au cours des 4 dernières semaines"
              },
              {
                "language" : "it-CH",
                "value" : "parto nelle ultime 4 settimane"
              },
              {
                "language" : "rm-CH",
                "value" : "pagliola entaifer las ultimas 4 emnas"
              },
              {
                "language" : "en-US",
                "value" : "Childbirth within last 4 weeks"
              }
            ]
          },
          {
            "code" : "870577009",
            "display" : "At increased risk of exposure to severe acute respiratory syndrome coronavirus 2 (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Erhöhtes Expositionsrisiko für das schwere akute respiratorische Syndrom Coronavirus 2"
              },
              {
                "language" : "fr-CH",
                "value" : "risque accru d'exposition aux syndromes respiratoires aigus sévères coronavirus 2"
              },
              {
                "language" : "it-CH",
                "value" : "maggiore rischio d'esposizione a sindrome respiratoria acuta grave coronavirus 2"
              },
              {
                "language" : "rm-CH",
                "value" : "pli gronda ristga d'esser expost a la situaziun dal grev sindrom respiratoric acut coronavirus 2"
              },
              {
                "language" : "en-US",
                "value" : "At increased risk of exposure to severe acute respiratory syndrome coronavirus 2"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
