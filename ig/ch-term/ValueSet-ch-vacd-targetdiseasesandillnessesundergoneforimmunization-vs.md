# CH VACD Target disease and illnesses undergone for immunization - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Target disease and illnesses undergone for immunization**

## ValueSet: CH VACD Target disease and illnesses undergone for immunization 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-targetdiseasesandillnessesundergoneforimmunization-vs | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:ChVacdTargetDiseasesAndIllnessesUndergoneForImmunization |
| **Copyright/Legal**: CC0-1.0 | |

 
This valueset contains all entries defining target deseases or illnesses undergone for immunization reasons. 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/ch-vacd-targetdiseasesandillnessesundergoneforimmunization-vs) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "ch-vacd-targetdiseasesandillnessesundergoneforimmunization-vs",
  "url" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-targetdiseasesandillnessesundergoneforimmunization-vs",
  "version" : "3.3.0",
  "name" : "ChVacdTargetDiseasesAndIllnessesUndergoneForImmunization",
  "title" : "CH VACD Target disease and illnesses undergone for immunization",
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
  "description" : "This valueset contains all entries defining target deseases or illnesses undergone for immunization reasons.",
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
            "code" : "34014006",
            "display" : "Viral disease (disorder)",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Viral disease"
              },
              {
                "language" : "fr-CH",
                "value" : "Maladie virale"
              },
              {
                "language" : "it-CH",
                "value" : "Malattie virali"
              },
              {
                "language" : "rm-CH",
                "value" : "malsogna dal virus"
              }
            ]
          },
          {
            "code" : "87628006",
            "display" : "Bacterial infectious disease (disorder)",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Bacterial infectious disease"
              },
              {
                "language" : "de-CH",
                "value" : "Bakterielle Infektionskrankheit"
              },
              {
                "language" : "fr-CH",
                "value" : "Maladie infectieuse bactérienne"
              },
              {
                "language" : "it-CH",
                "value" : "Malattie infettive batteriche"
              },
              {
                "language" : "rm-CH",
                "value" : "malsogna infectusa cun bacterias"
              }
            ]
          },
          {
            "code" : "422400008",
            "display" : "Vomiting (disorder)",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Vomiting"
              },
              {
                "language" : "de-CH",
                "value" : "Erbrechen"
              },
              {
                "language" : "fr-CH",
                "value" : "vomissement"
              },
              {
                "language" : "it-CH",
                "value" : "vomito"
              },
              {
                "language" : "rm-CH",
                "value" : "vomitar"
              }
            ]
          },
          {
            "code" : "38907003",
            "display" : "Varicella (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Windpocken"
              },
              {
                "language" : "fr-CH",
                "value" : "varicelle"
              },
              {
                "language" : "it-CH",
                "value" : "varicella"
              },
              {
                "language" : "rm-CH",
                "value" : "virola slevadia"
              },
              {
                "language" : "en-US",
                "value" : "Varicella"
              }
            ]
          },
          {
            "code" : "14189004",
            "display" : "Measles (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Masern"
              },
              {
                "language" : "fr-CH",
                "value" : "rougeole"
              },
              {
                "language" : "it-CH",
                "value" : "morbillo"
              },
              {
                "language" : "rm-CH",
                "value" : "virustgel"
              },
              {
                "language" : "en-US",
                "value" : "Measles"
              }
            ]
          },
          {
            "code" : "36989005",
            "display" : "Mumps (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Mumps"
              },
              {
                "language" : "fr-CH",
                "value" : "oreillons"
              },
              {
                "language" : "it-CH",
                "value" : "parotite"
              },
              {
                "language" : "rm-CH",
                "value" : "glandun"
              },
              {
                "language" : "en-US",
                "value" : "Mumps"
              }
            ]
          },
          {
            "code" : "36653000",
            "display" : "Rubella (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Röteln"
              },
              {
                "language" : "fr-CH",
                "value" : "rubéole"
              },
              {
                "language" : "it-CH",
                "value" : "rosolia"
              },
              {
                "language" : "rm-CH",
                "value" : "rubella"
              },
              {
                "language" : "en-US",
                "value" : "Rubella"
              }
            ]
          },
          {
            "code" : "40468003",
            "display" : "Viral hepatitis, type A (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Virale Hepatitis, Typ A"
              },
              {
                "language" : "fr-CH",
                "value" : "hépatite virale de type A"
              },
              {
                "language" : "it-CH",
                "value" : "epatite virale tipo A"
              },
              {
                "language" : "rm-CH",
                "value" : "hepatitis virala tip A"
              },
              {
                "language" : "en-US",
                "value" : "Viral hepatitis, type A"
              }
            ]
          },
          {
            "code" : "66071002",
            "display" : "Viral hepatitis type B (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Virale Hepatitis, Typ B"
              },
              {
                "language" : "fr-CH",
                "value" : "hépatite virale de type B"
              },
              {
                "language" : "it-CH",
                "value" : "epatite virale tipo B"
              },
              {
                "language" : "rm-CH",
                "value" : "hepatitis virala tip B"
              },
              {
                "language" : "en-US",
                "value" : "Viral hepatitis type B"
              }
            ]
          },
          {
            "code" : "712986001",
            "display" : "Encephalitis caused by tick-borne encephalitis virus (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Frühsommer-Meningoenzephalitis"
              },
              {
                "language" : "fr-CH",
                "value" : "encéphalite à tiques"
              },
              {
                "language" : "it-CH",
                "value" : "meningoencefalite verno-estiva"
              },
              {
                "language" : "rm-CH",
                "value" : "meningoencefalitis da zeccas (FSME)"
              },
              {
                "language" : "en-US",
                "value" : "Tickborne encephalitis"
              }
            ]
          },
          {
            "code" : "16541001",
            "display" : "Yellow fever (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gelbfieber"
              },
              {
                "language" : "fr-CH",
                "value" : "fièvre jaune"
              },
              {
                "language" : "it-CH",
                "value" : "febbre gialla"
              },
              {
                "language" : "rm-CH",
                "value" : "fevra melna"
              },
              {
                "language" : "en-US",
                "value" : "Yellow fever"
              }
            ]
          },
          {
            "code" : "76902006",
            "display" : "Tetanus (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Starrkrampf"
              },
              {
                "language" : "fr-CH",
                "value" : "tétanos"
              },
              {
                "language" : "it-CH",
                "value" : "tetano"
              },
              {
                "language" : "rm-CH",
                "value" : "tetanus"
              },
              {
                "language" : "en-US",
                "value" : "Tetanus"
              }
            ]
          },
          {
            "code" : "63650001",
            "display" : "Cholera (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Cholera"
              },
              {
                "language" : "fr-CH",
                "value" : "choléra"
              },
              {
                "language" : "it-CH",
                "value" : "colera"
              },
              {
                "language" : "rm-CH",
                "value" : "colera"
              },
              {
                "language" : "en-US",
                "value" : "Cholera"
              }
            ]
          },
          {
            "code" : "27836007",
            "display" : "Pertussis (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Keuchhusten"
              },
              {
                "language" : "fr-CH",
                "value" : "coqueluche"
              },
              {
                "language" : "it-CH",
                "value" : "pertosse"
              },
              {
                "language" : "rm-CH",
                "value" : "tuss chanina"
              },
              {
                "language" : "en-US",
                "value" : "Pertussis"
              }
            ]
          },
          {
            "code" : "398102009",
            "display" : "Acute poliomyelitis (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Akute Poliomyelitis"
              },
              {
                "language" : "fr-CH",
                "value" : "poliomyélite aiguë"
              },
              {
                "language" : "it-CH",
                "value" : "poliomielite acuta"
              },
              {
                "language" : "rm-CH",
                "value" : "poliomielitis acuta"
              },
              {
                "language" : "en-US",
                "value" : "Acute poliomyelitis"
              }
            ]
          },
          {
            "code" : "18624000",
            "display" : "Disease caused by Rotavirus (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rotaviren-Erkrankung"
              },
              {
                "language" : "fr-CH",
                "value" : "infection à rotavirus"
              },
              {
                "language" : "it-CH",
                "value" : "malattia da rotavirus"
              },
              {
                "language" : "rm-CH",
                "value" : "malsogna da rotavirus"
              },
              {
                "language" : "en-US",
                "value" : "Rotavirus disease"
              }
            ]
          },
          {
            "code" : "14168008",
            "display" : "Rabies (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tollwut"
              },
              {
                "language" : "fr-CH",
                "value" : "rage"
              },
              {
                "language" : "it-CH",
                "value" : "rabbia"
              },
              {
                "language" : "rm-CH",
                "value" : "frenesia"
              },
              {
                "language" : "en-US",
                "value" : "Rabies"
              }
            ]
          },
          {
            "code" : "56717001",
            "display" : "Tuberculosis (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tuberkulose"
              },
              {
                "language" : "fr-CH",
                "value" : "tuberculose"
              },
              {
                "language" : "it-CH",
                "value" : "tubercolosi"
              },
              {
                "language" : "rm-CH",
                "value" : "tuberculosa"
              },
              {
                "language" : "en-US",
                "value" : "Tuberculosis"
              }
            ]
          },
          {
            "code" : "4834000",
            "display" : "Typhoid fever (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Typhus"
              },
              {
                "language" : "fr-CH",
                "value" : "fièvre typhoïde"
              },
              {
                "language" : "it-CH",
                "value" : "febbre tifoidea"
              },
              {
                "language" : "rm-CH",
                "value" : "tifus"
              },
              {
                "language" : "en-US",
                "value" : "Typhoid fever"
              }
            ]
          },
          {
            "code" : "709410003",
            "display" : "Haemophilus influenzae type b infection (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Infektion mit Haemophilus influenzae Typ B"
              },
              {
                "language" : "fr-CH",
                "value" : "infection à Haemophilus influenzae de type b"
              },
              {
                "language" : "it-CH",
                "value" : "infezione da Haemophilus influenzae di tipo b"
              },
              {
                "language" : "rm-CH",
                "value" : "infecziun cun hemofilus influenza tip B"
              },
              {
                "language" : "en-US",
                "value" : "Haemophilus influenzae type b infection"
              }
            ]
          },
          {
            "code" : "397430003",
            "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Diphtherie"
              },
              {
                "language" : "fr-CH",
                "value" : "diphtérie"
              },
              {
                "language" : "it-CH",
                "value" : "difterite"
              },
              {
                "language" : "rm-CH",
                "value" : "difteria"
              },
              {
                "language" : "en-US",
                "value" : "Diphtheria"
              }
            ]
          },
          {
            "code" : "840539006",
            "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "COVID-19"
              },
              {
                "language" : "fr-CH",
                "value" : "COVID-19"
              },
              {
                "language" : "it-CH",
                "value" : "COVID-19"
              },
              {
                "language" : "rm-CH",
                "value" : "COVID-19"
              },
              {
                "language" : "en-US",
                "value" : "COVID-19"
              }
            ]
          },
          {
            "code" : "52947006",
            "display" : "Japanese encephalitis virus disease (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Japanische Enzephalitis"
              },
              {
                "language" : "fr-CH",
                "value" : "encéphalite japonaise"
              },
              {
                "language" : "it-CH",
                "value" : "encefalite giapponese"
              },
              {
                "language" : "rm-CH",
                "value" : "encefalitis giapunaisa"
              },
              {
                "language" : "en-US",
                "value" : "Japanese encephalitis"
              }
            ]
          },
          {
            "code" : "6142004",
            "display" : "Influenza (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Influenza"
              },
              {
                "language" : "fr-CH",
                "value" : "grippe"
              },
              {
                "language" : "it-CH",
                "value" : "influenza"
              },
              {
                "language" : "rm-CH",
                "value" : "grippa"
              },
              {
                "language" : "en-US",
                "value" : "Influenza"
              }
            ]
          },
          {
            "code" : "719865001",
            "display" : "Influenza caused by pandemic influenza virus (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pandemische Influenza"
              },
              {
                "language" : "fr-CH",
                "value" : "grippe pandémique"
              },
              {
                "language" : "it-CH",
                "value" : "influenza pandemica"
              },
              {
                "language" : "rm-CH",
                "value" : "grippa pandemica"
              },
              {
                "language" : "en-US",
                "value" : "Influenza caused by pandemic influenza virus"
              }
            ]
          },
          {
            "code" : "719590007",
            "display" : "Influenza caused by seasonal influenza virus (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Saisonale Influenza"
              },
              {
                "language" : "fr-CH",
                "value" : "grippe saisonnière"
              },
              {
                "language" : "it-CH",
                "value" : "influenza stagionale"
              },
              {
                "language" : "rm-CH",
                "value" : "grippa stagiunala"
              },
              {
                "language" : "en-US",
                "value" : "Influenza caused by seasonal influenza virus"
              }
            ]
          },
          {
            "code" : "67924001",
            "display" : "Smallpox (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pocken"
              },
              {
                "language" : "fr-CH",
                "value" : "variole"
              },
              {
                "language" : "it-CH",
                "value" : "vaiolo"
              },
              {
                "language" : "rm-CH",
                "value" : "virola"
              },
              {
                "language" : "en-US",
                "value" : "Smallpox"
              }
            ]
          },
          {
            "code" : "359814004",
            "display" : "Monkeypox (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Mpox"
              },
              {
                "language" : "fr-CH",
                "value" : "variole du singe"
              },
              {
                "language" : "it-CH",
                "value" : "vaiolo delle scimmie"
              },
              {
                "language" : "rm-CH",
                "value" : "virola da schimgias"
              },
              {
                "language" : "en-US",
                "value" : "Monkeypox"
              }
            ]
          },
          {
            "code" : "240532009",
            "display" : "Human papillomavirus infection (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "HPV-Erkrankung (Humanes Papillomavirus)"
              },
              {
                "language" : "fr-CH",
                "value" : "infection par les HPV (papillomavirus humains)"
              },
              {
                "language" : "it-CH",
                "value" : "patologia causata da HPV (virus del papilloma umano)"
              },
              {
                "language" : "rm-CH",
                "value" : "malsogna da HPV (papillomavirus uman)"
              },
              {
                "language" : "en-US",
                "value" : "HPV (Human papillomavirus) disease"
              }
            ]
          },
          {
            "code" : "4740000",
            "display" : "Herpes zoster (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Herpes zoster"
              },
              {
                "language" : "fr-CH",
                "value" : "zona"
              },
              {
                "language" : "it-CH",
                "value" : "herpes zoster"
              },
              {
                "language" : "rm-CH",
                "value" : "herpes zoster"
              },
              {
                "language" : "en-US",
                "value" : "Herpes zoster"
              }
            ]
          },
          {
            "code" : "23511006",
            "display" : "Meningococcal infectious disease (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Meningokokken-Erkrankung"
              },
              {
                "language" : "fr-CH",
                "value" : "infection à méningocoques"
              },
              {
                "language" : "it-CH",
                "value" : "malattia da meningococchi"
              },
              {
                "language" : "rm-CH",
                "value" : "malsogna da meningococcus"
              },
              {
                "language" : "en-US",
                "value" : "Meningococcal disease"
              }
            ]
          },
          {
            "code" : "16814004",
            "display" : "Pneumococcal infectious disease (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pneumokokken-Erkrankung"
              },
              {
                "language" : "fr-CH",
                "value" : "infection à pneumocoques"
              },
              {
                "language" : "it-CH",
                "value" : "malattia da pneumococchi"
              },
              {
                "language" : "rm-CH",
                "value" : "malsogna da pneumococcus"
              },
              {
                "language" : "en-US",
                "value" : "Pneumococcal disease"
              }
            ]
          },
          {
            "code" : "37109004",
            "display" : "Ebola virus disease (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ebola-Viruskrankheit"
              },
              {
                "language" : "fr-CH",
                "value" : "fièvre Ébola"
              },
              {
                "language" : "it-CH",
                "value" : "malattia da ebola virus"
              },
              {
                "language" : "rm-CH",
                "value" : "malsogna dal virus d'Ebola"
              },
              {
                "language" : "en-US",
                "value" : "Ebola virus disease"
              }
            ]
          },
          {
            "code" : "860805006",
            "display" : "Encephalomyelitis caused by Neisseria meningitidis (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Neisseria-meningitidis-Enzephalomyelitis"
              },
              {
                "language" : "fr-CH",
                "value" : "encéphalomyélite à Neisseria meningitidis"
              },
              {
                "language" : "it-CH",
                "value" : "encefalomielite causata da Neisseria meningitidis"
              },
              {
                "language" : "rm-CH",
                "value" : "encefalomielitis da la Neisseria"
              },
              {
                "language" : "en-US",
                "value" : "Encephalomyelitis caused by Neisseria meningitidis"
              }
            ]
          },
          {
            "code" : "55735004",
            "display" : "Respiratory syncytial virus infection (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Infektion durch Respiratorischen Synzytialvirus"
              },
              {
                "language" : "fr-CH",
                "value" : "infection à virus respiratoire syncytial"
              },
              {
                "language" : "it-CH",
                "value" : "infezione da virus respiratorio sinciziale"
              },
              {
                "language" : "rm-CH",
                "value" : "infecziun tras virus sinzial respiratoric"
              },
              {
                "language" : "en-US",
                "value" : "Synzytialvirus\tRespiratory syncytial virus infection"
              }
            ]
          },
          {
            "code" : "38362002",
            "display" : "Dengue (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dengue-Fieber"
              },
              {
                "language" : "fr-CH",
                "value" : "dengue"
              },
              {
                "language" : "it-CH",
                "value" : "dengue"
              },
              {
                "language" : "rm-CH",
                "value" : "dengue"
              },
              {
                "language" : "en-US",
                "value" : "Dengue"
              }
            ]
          },
          {
            "code" : "111852003",
            "display" : "Vaccinia (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Vaccinia"
              },
              {
                "language" : "fr-CH",
                "value" : "infection cutanée par le virus de la vaccine"
              },
              {
                "language" : "it-CH",
                "value" : "vaccinia"
              },
              {
                "language" : "rm-CH",
                "value" : "vaccinia"
              },
              {
                "language" : "en-US",
                "value" : "Vaccinia"
              }
            ]
          },
          {
            "code" : "85904008",
            "display" : "Paratyphoid fever (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Paratyphus"
              },
              {
                "language" : "fr-CH",
                "value" : "fièvre paratyphoïde"
              },
              {
                "language" : "it-CH",
                "value" : "febbre paratifoidea"
              },
              {
                "language" : "rm-CH",
                "value" : "paratifus"
              },
              {
                "language" : "en-US",
                "value" : "Paratyphoid fever"
              }
            ]
          },
          {
            "code" : "409498004",
            "display" : "Anthrax (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Anthrax"
              },
              {
                "language" : "fr-CH",
                "value" : "maladie du charbon"
              },
              {
                "language" : "it-CH",
                "value" : "antrace"
              },
              {
                "language" : "rm-CH",
                "value" : "antrax"
              },
              {
                "language" : "en-US",
                "value" : "Anthrax"
              }
            ]
          },
          {
            "code" : "721758001",
            "display" : "Infection caused by Coxiella (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Infektion durch Coxiella"
              },
              {
                "language" : "fr-CH",
                "value" : "infection à Coxiella"
              },
              {
                "language" : "it-CH",
                "value" : "nfezione causata da Coxiella"
              },
              {
                "language" : "rm-CH",
                "value" : "infecziun tras Coxiella"
              },
              {
                "language" : "en-US",
                "value" : "Infection caused by Coxiella"
              }
            ]
          },
          {
            "code" : "25225006",
            "display" : "Disease caused by Adenovirus (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Krankheit durch Adenovirus"
              },
              {
                "language" : "fr-CH",
                "value" : "maladie due à un adénovirus"
              },
              {
                "language" : "it-CH",
                "value" : "malattia causata da adenovirus"
              },
              {
                "language" : "rm-CH",
                "value" : "malsogna tras virus d'adenov"
              },
              {
                "language" : "en-US",
                "value" : "Disease caused by Adenovirus"
              }
            ]
          },
          {
            "code" : "721734000",
            "display" : "Infection caused by Francisella (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Infektion durch Francisella"
              },
              {
                "language" : "fr-CH",
                "value" : "infection à Francisella"
              },
              {
                "language" : "it-CH",
                "value" : "infezione causata da Francisella"
              },
              {
                "language" : "rm-CH",
                "value" : "infecziun da Francisella"
              },
              {
                "language" : "en-US",
                "value" : "Infection caused by Francisella"
              }
            ]
          },
          {
            "code" : "77377001",
            "display" : "Leptospirosis (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Leptospirose"
              },
              {
                "language" : "fr-CH",
                "value" : "leptospirose"
              },
              {
                "language" : "it-CH",
                "value" : "leptospirosi"
              },
              {
                "language" : "rm-CH",
                "value" : "leptospirosa"
              },
              {
                "language" : "en-US",
                "value" : "Leptospirosis"
              }
            ]
          },
          {
            "code" : "715507005",
            "display" : "Infection of central nervous system caused by Borrelia burgdorferi (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Borrelia-burgdorferi-Infektion des zentralen Nervensystems"
              },
              {
                "language" : "fr-CH",
                "value" : "neuroborréliose de Lyme"
              },
              {
                "language" : "it-CH",
                "value" : "infezione del sistema nervoso centrale causata da Borrelia burgdorferi"
              },
              {
                "language" : "rm-CH",
                "value" : "infecziun da Borrelia-burgdorferica dal sistem central da la gnerva"
              },
              {
                "language" : "en-US",
                "value" : "Infection of central nervous system caused by Borrelia burgdorferi"
              }
            ]
          },
          {
            "code" : "721778009",
            "display" : "Infection caused by Junin virus (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Infektion durch Junin-Virus"
              },
              {
                "language" : "fr-CH",
                "value" : "infection par le virus Junin"
              },
              {
                "language" : "it-CH",
                "value" : "infezione causata dal virus Junin"
              },
              {
                "language" : "rm-CH",
                "value" : "infecziun chaschunada dal virus da Junin"
              },
              {
                "language" : "en-US",
                "value" : "Infection caused by Junin virus"
              }
            ]
          },
          {
            "code" : "19265001",
            "display" : "Tularemia (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tularämie"
              },
              {
                "language" : "fr-CH",
                "value" : "tularémie"
              },
              {
                "language" : "it-CH",
                "value" : "tularemia"
              },
              {
                "language" : "rm-CH",
                "value" : "tularemia"
              },
              {
                "language" : "en-US",
                "value" : "Tularemia"
              }
            ]
          },
          {
            "code" : "58750007",
            "display" : "Plague (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pest"
              },
              {
                "language" : "fr-CH",
                "value" : "peste"
              },
              {
                "language" : "it-CH",
                "value" : "peste"
              },
              {
                "language" : "rm-CH",
                "value" : "pesta"
              },
              {
                "language" : "en-US",
                "value" : "Plague"
              }
            ]
          },
          {
            "code" : "442438000",
            "display" : "Influenza caused by Influenza A virus (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Influenza durch Influenza-A Virus"
              },
              {
                "language" : "fr-CH",
                "value" : "grippe A"
              },
              {
                "language" : "it-CH",
                "value" : "influenza da virus dell’influenza A"
              },
              {
                "language" : "rm-CH",
                "value" : "influenza tras virus Influenza A"
              },
              {
                "language" : "en-US",
                "value" : "Influenza caused by Influenza A virus"
              }
            ]
          },
          {
            "code" : "442696006",
            "display" : "Influenza caused by Influenza A virus subtype H1N1 (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Influenza caused by Influenza A virus subtype H1N1"
              },
              {
                "language" : "fr-CH",
                "value" : "grippe causée par le sous-type H1N1 du virus Influenza A"
              },
              {
                "language" : "it-CH",
                "value" : "influenza da virus dell’influenza A sottotipo H1N1"
              },
              {
                "language" : "rm-CH",
                "value" : "influenza dal virus d'influenza A Untertipo H1N1"
              },
              {
                "language" : "en-US",
                "value" : "Influenza durch Influenza-A Virus, Subtyp H3N2"
              }
            ]
          },
          {
            "code" : "772810003",
            "display" : "Influenza caused by Influenza A virus subtype H3N2 (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Influenza caused by Influenza A virus subtype H3N2"
              },
              {
                "language" : "fr-CH",
                "value" : "grippe causée par le sous-type H3N2 du virus Influenza A"
              },
              {
                "language" : "it-CH",
                "value" : "influenza da virus dell’influenza A sottotipo H3N2"
              },
              {
                "language" : "rm-CH",
                "value" : "influenza dal virus d'influenza A Untertipo H3N2"
              },
              {
                "language" : "en-US",
                "value" : "Influenza durch Influenza-A Virus, Subtyp H3N2"
              }
            ]
          },
          {
            "code" : "772828001",
            "display" : "Influenza caused by Influenza A virus subtype H5N1 (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Vogelgrippe"
              },
              {
                "language" : "fr-CH",
                "value" : "grippe causée par le sous-type H5N1 du virus Influenza A"
              },
              {
                "language" : "it-CH",
                "value" : "influenza da virus dell’influenza A sottotipo H5N1"
              },
              {
                "language" : "rm-CH",
                "value" : "influenza dal virus d'influenza A Untertipo H5N1"
              },
              {
                "language" : "en-US",
                "value" : "Influenza caused by Influenza A virus subtype H5N1"
              }
            ]
          },
          {
            "code" : "24662006",
            "display" : "Influenza caused by Influenza B virus (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Influenza durch Influenza-B Virus"
              },
              {
                "language" : "fr-CH",
                "value" : "influenza causée par le virus influenza de type B"
              },
              {
                "language" : "it-CH",
                "value" : "influenza da virus dell’influenza B"
              },
              {
                "language" : "rm-CH",
                "value" : "influenza dal virus d'influenza B"
              },
              {
                "language" : "en-US",
                "value" : "Influenza caused by Influenza B virus"
              }
            ]
          },
          {
            "code" : "7180009",
            "display" : "Meningitis (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Meningitis"
              },
              {
                "language" : "fr-CH",
                "value" : "méningite"
              },
              {
                "language" : "it-CH",
                "value" : "meningite"
              },
              {
                "language" : "rm-CH",
                "value" : "Meningitis"
              },
              {
                "language" : "en-US",
                "value" : "Meningitis"
              }
            ]
          },
          {
            "code" : "186772009",
            "display" : "Rocky Mountain spotted fever (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Rocky-Mountain-Fleckfieber"
              },
              {
                "language" : "fr-CH",
                "value" : "fièvre pourprée des montagnes Rocheuses"
              },
              {
                "language" : "it-CH",
                "value" : "febbre maculosa delle Montagne Rocciose"
              },
              {
                "language" : "rm-CH",
                "value" : "Rocky Mountain spotted fever"
              },
              {
                "language" : "en-US",
                "value" : "Rocky Mountain spotted fever"
              }
            ]
          },
          {
            "code" : "37246009",
            "display" : "Disease caused by rickettsiae (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Krankheit durch Rickettsiacea"
              },
              {
                "language" : "fr-CH",
                "value" : "rickettsiose"
              },
              {
                "language" : "it-CH",
                "value" : "malattia causata da rickettsie"
              },
              {
                "language" : "rm-CH",
                "value" : "Rickettsial disease"
              },
              {
                "language" : "en-US",
                "value" : "Rickettsial disease"
              }
            ]
          },
          {
            "code" : "56038003",
            "display" : "Staphylococcal infectious disease (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Staphylokokkeninfektion"
              },
              {
                "language" : "fr-CH",
                "value" : "maladie infectieuse staphylococcique"
              },
              {
                "language" : "it-CH",
                "value" : "malattia infettiva stafilococcica"
              },
              {
                "language" : "rm-CH",
                "value" : "Staphylococcal infectious disease"
              },
              {
                "language" : "en-US",
                "value" : "Staphylococcal infectious disease"
              }
            ]
          },
          {
            "code" : "373437006",
            "display" : "Infection caused by Mycobacterium bovis (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Infektion durch Mycobacterium bovis"
              },
              {
                "language" : "fr-CH",
                "value" : "infection causée par Mycobacterium bovis"
              },
              {
                "language" : "it-CH",
                "value" : "infezione causata da Mycobacterium bovis"
              },
              {
                "language" : "rm-CH",
                "value" : "Infection caused by Mycobacterium bovis"
              },
              {
                "language" : "en-US",
                "value" : "Infection caused by Mycobacterium bovis"
              }
            ]
          },
          {
            "code" : "53648006",
            "display" : "Disease caused by Enterovirus (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Erkrankung durch Enterovirus"
              },
              {
                "language" : "fr-CH",
                "value" : "maladie à entérovirus"
              },
              {
                "language" : "it-CH",
                "value" : "malattia causata da enterovirus"
              },
              {
                "language" : "rm-CH",
                "value" : "Disease caused by Enterovirus"
              },
              {
                "language" : "en-US",
                "value" : "Disease caused by Enterovirus"
              }
            ]
          },
          {
            "code" : "62676009",
            "display" : "Falciparum malaria (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Malaria"
              },
              {
                "language" : "fr-CH",
                "value" : "paludisme à Plasmodium falciparum"
              },
              {
                "language" : "it-CH",
                "value" : "malaria falciparum"
              },
              {
                "language" : "rm-CH",
                "value" : "Falciparum malaria"
              },
              {
                "language" : "en-US",
                "value" : "Falciparum malaria"
              }
            ]
          },
          {
            "code" : "713456006",
            "display" : "Infection caused by Human enterovirus 71 (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Infektion durch Humanes Enterovirus 71"
              },
              {
                "language" : "fr-CH",
                "value" : "infection par l'entérovirus A71"
              },
              {
                "language" : "it-CH",
                "value" : "infezione causata da enterovirus umano 71"
              },
              {
                "language" : "rm-CH",
                "value" : "Enterovirus A71 infection"
              },
              {
                "language" : "en-US",
                "value" : "Enterovirus A71 infection"
              }
            ]
          },
          {
            "code" : "95896000",
            "display" : "Protozoan infection (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Protozoeninfektion"
              },
              {
                "language" : "fr-CH",
                "value" : "infection aux Protozoaires"
              },
              {
                "language" : "it-CH",
                "value" : "infezione da protozoi"
              },
              {
                "language" : "rm-CH",
                "value" : "Protozoan infection"
              },
              {
                "language" : "en-US",
                "value" : "Protozoan infection"
              }
            ]
          },
          {
            "code" : "56688005",
            "display" : "Clostridial infection (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Clostridien-Infektion"
              },
              {
                "language" : "fr-CH",
                "value" : "infection à Clostridium"
              },
              {
                "language" : "it-CH",
                "value" : "infezione da clostridi"
              },
              {
                "language" : "rm-CH",
                "value" : "Clostridial infection"
              },
              {
                "language" : "en-US",
                "value" : "Clostridial infection"
              }
            ]
          },
          {
            "code" : "83436008",
            "display" : "Yersiniosis (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Yersiniose"
              },
              {
                "language" : "fr-CH",
                "value" : "yersiniose"
              },
              {
                "language" : "it-CH",
                "value" : "yersiniosi"
              },
              {
                "language" : "rm-CH",
                "value" : "Yersiniosis"
              },
              {
                "language" : "en-US",
                "value" : "Yersiniosis"
              }
            ]
          },
          {
            "code" : "58606001",
            "display" : "Primary immune deficiency disorder (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Primäre Immundefekt-Erkrankung"
              },
              {
                "language" : "fr-CH",
                "value" : "déficit immunitaire primaire"
              },
              {
                "language" : "it-CH",
                "value" : "malattia da immunodeficienza primaria"
              },
              {
                "language" : "rm-CH",
                "value" : "primaria\tmalsogna da defect immunitari primar"
              },
              {
                "language" : "en-US",
                "value" : "Primary immune deficiency disorder"
              }
            ]
          },
          {
            "code" : "33286000",
            "display" : "Secondary immune deficiency disorder (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sekundäre Immundefekt-Erkrankung"
              },
              {
                "language" : "fr-CH",
                "value" : "déficit immunitaire secondaire"
              },
              {
                "language" : "it-CH",
                "value" : "malattia da immunodeficienza secondaria"
              },
              {
                "language" : "rm-CH",
                "value" : "malsogna da defect immunitari secundar"
              },
              {
                "language" : "en-US",
                "value" : "Secondary immune deficiency disorder"
              }
            ]
          },
          {
            "code" : "28944009",
            "display" : "Infection caused by Cytomegalovirus (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Zytomegalievirus-Infektion"
              },
              {
                "language" : "fr-CH",
                "value" : "infection à cytomégalovirus"
              },
              {
                "language" : "it-CH",
                "value" : "infezione da citomegalovirus"
              },
              {
                "language" : "rm-CH",
                "value" : "Infection caused by Cytomegalovirus"
              },
              {
                "language" : "en-US",
                "value" : "Infection caused by Cytomegalovirus"
              }
            ]
          },
          {
            "code" : "16318001000119107",
            "display" : "Hypogammaglobulinemia due to multiple myeloma (disorder)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hypogammaglobulinemia due to multiple myeloma"
              },
              {
                "language" : "fr-CH",
                "value" : "Hypogammaglobulinemia due to multiple myeloma"
              },
              {
                "language" : "it-CH",
                "value" : "Hypogammaglobulinemia due to multiple myeloma"
              },
              {
                "language" : "rm-CH",
                "value" : "Hypogammaglobulinemia due to multiple myeloma"
              },
              {
                "language" : "en-US",
                "value" : "Hypogammaglobulinemia due to multiple myeloma"
              }
            ]
          },
          {
            "code" : "165746003",
            "display" : "RhD negative (finding)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "RhD negative"
              },
              {
                "language" : "fr-CH",
                "value" : "RhD negative"
              },
              {
                "language" : "it-CH",
                "value" : "RhD negative"
              },
              {
                "language" : "rm-CH",
                "value" : "RhD negative"
              },
              {
                "language" : "en-US",
                "value" : "RhD negative"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
