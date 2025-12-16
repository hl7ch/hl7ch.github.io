# Laboratory Serology for Immunization - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Laboratory Serology for Immunization**

## ValueSet: Laboratory Serology for Immunization 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-laboratory-serology-vs | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:LaboratorySerologyImmunization |
| **Copyright/Legal**: CC0-1.0 | |

 
Laboratory Serology for immunization 

 **References** 

* [CH VACD Laboratory And Serology](StructureDefinition-ch-vacd-laboratory-serology.md)

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
  "id" : "ch-vacd-laboratory-serology-vs",
  "url" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-laboratory-serology-vs",
  "version" : "6.0.0",
  "name" : "LaboratorySerologyImmunization",
  "title" : "Laboratory Serology for Immunization",
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
  "description" : "Laboratory Serology for immunization",
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
        "system" : "http://loinc.org",
        "concept" : [
          {
            "code" : "22602-7",
            "display" : "Varicella zoster virus IgG Ab [Titer] in Serum",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Varizellen-Zoster-Virus IgG Ab [Titer] in Serum"
              },
              {
                "language" : "fr-CH",
                "value" : "Anticorps IgG du virus varicelle-zona [titre] dans le sérum"
              },
              {
                "language" : "it-CH",
                "value" : "virus varicella-zoster Ab IgG [titolo] in siero"
              },
              {
                "language" : "rm-CH",
                "value" : "virus da la virola selvadia IgG Ab [titer] en il serum"
              },
              {
                "language" : "en-US",
                "value" : "Varicella zoster virus IgG Ab [Titer] in Serum"
              }
            ]
          },
          {
            "code" : "22502-9",
            "display" : "Measles virus IgG Ab [Titer] in Serum",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Masern-Virus IgG Ab [Titer] in Serum"
              },
              {
                "language" : "fr-CH",
                "value" : "Anticorps IgG du virus de la rougeole [titre] dans le sérum"
              },
              {
                "language" : "it-CH",
                "value" : "virus del morbillo Ab IgG [titolo] in siero"
              },
              {
                "language" : "rm-CH",
                "value" : "virus dal virustgel IgG Ab [titer] en il serum"
              },
              {
                "language" : "en-US",
                "value" : "Measles virus IgG Ab [Titer] in Serum"
              }
            ]
          },
          {
            "code" : "41763-4",
            "display" : "Rubella virus IgG Ab [Titer] in Serum",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Röteln-Virus IgG Ab [Titer] in Serum"
              },
              {
                "language" : "fr-CH",
                "value" : "Anticorps IgG du virus de la rubéole [titre] dans le sérum"
              },
              {
                "language" : "it-CH",
                "value" : "virus della rosolia Ab IgG [titolo] in siero"
              },
              {
                "language" : "rm-CH",
                "value" : "virus da la rubella IgG Ab [titer] en il serum"
              },
              {
                "language" : "en-US",
                "value" : "Rubella virus IgG Ab [Titer] in Serum"
              }
            ]
          },
          {
            "code" : "22313-1",
            "display" : "Hepatitis A virus IgG Ab [Units/volume] in Serum",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hepatitis-A-Virus IgG Ab [Einheiten/Volumen] in SerumAktiv"
              },
              {
                "language" : "fr-CH",
                "value" : "Anticorps IgG du virus de l'hépatite A [unités/volume] dans le sérum"
              },
              {
                "language" : "it-CH",
                "value" : "virus dell'epatite A Ab IgG [unità/volume] in siero attivo"
              },
              {
                "language" : "rm-CH",
                "value" : "virus da hepatitis A IgG Ab [unitads/volumen] en il serum activ"
              },
              {
                "language" : "en-US",
                "value" : "Hepatitis A virus IgG Ab [Units/volume] in SerumActive"
              }
            ]
          },
          {
            "code" : "16935-9",
            "display" : "Hepatitis B virus surface Ab [Units/volume] in Serum",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Hepatitis-B-Virus-Oberfläche Ab [Einheiten/Volumen] in Serum"
              },
              {
                "language" : "fr-CH",
                "value" : "Anticorps surface du virus de l'hépatite B [unités/volume] dans le sérum"
              },
              {
                "language" : "it-CH",
                "value" : "virus dell'epatite B Ab di superficie [unità/volume] in siero"
              },
              {
                "language" : "rm-CH",
                "value" : "virus da hepatitis B da surfatscha Ab [unitads/volumen] en il serum"
              },
              {
                "language" : "en-US",
                "value" : "Hepatitis B virus surface Ab [Units/volume] in Serum"
              }
            ]
          },
          {
            "code" : "26061-2",
            "display" : "European tick borne encephalitis virus Ab [Titer] in Serum",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Europäischer Zeckenenzephalitis-Virus Ab [Titer] in Serum"
              },
              {
                "language" : "fr-CH",
                "value" : "Anticorps du virus de l'encéphalite à tiques [titre] dans le serum"
              },
              {
                "language" : "it-CH",
                "value" : "virus della meningoencefalite da zecche europea Ab [titolo] in siero"
              },
              {
                "language" : "rm-CH",
                "value" : "virus da l'encefalitis da zeccas europeic Ab [titer] en il serum"
              },
              {
                "language" : "en-US",
                "value" : "European tick borne encephalitis virus Ab [Titer] in Serum"
              }
            ]
          },
          {
            "code" : "6589-6",
            "display" : "Yellow fever virus Ab [Titer] in Serum by Immunofluorescence",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gelbfieber-Virus Ab [Titer] in Serum durch Immunfluoreszenz"
              },
              {
                "language" : "fr-CH",
                "value" : "Anticorps du virus de la fièvre jaune [titre] dans le sérum par immunofluorescence"
              },
              {
                "language" : "it-CH",
                "value" : "virus della febbre gialla Ab [titolo] in siero mediante immunofluorescenza"
              },
              {
                "language" : "rm-CH",
                "value" : "virus da la fevrra melna Ab [titer] en il serum tras immunofluorescenza"
              },
              {
                "language" : "en-US",
                "value" : "Yellow fever virus Ab [Titer] in Serum by Immunofluorescence"
              }
            ]
          },
          {
            "code" : "58770-9",
            "display" : "Clostridium tetani toxoid IgG Ab [Units/volume] in Serum by Immunofluorescence",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Clostridium tetani Toxoid IgG Ab [Einheiten/Volumen] in Serum durch Immunfluoreszenz"
              },
              {
                "language" : "fr-CH",
                "value" : "Anticorps IgG de la toxine du Clostridium tetani [unités/volume] dans le sérum par immunofluorescence"
              },
              {
                "language" : "it-CH",
                "value" : "tossoide di Clostridium tetani Ab IgG [unità/volume] in siero mediante immunofluorescenza"
              },
              {
                "language" : "rm-CH",
                "value" : "toxoid dal clostridium tetani IgG Ab [unitads/volumen] en il serum tras immunofluorescenza"
              },
              {
                "language" : "en-US",
                "value" : "Clostridium tetani toxoid IgG Ab [Units/volume] in Serum by Immunofluorescence"
              }
            ]
          },
          {
            "code" : "94505-5",
            "display" : "SARS-CoV-2 (COVID-19) IgG Ab [Units/volume] in Serum or Plasma by Immunoassay",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "SARS-CoV-2 (COVID-19) IgG Ab [Einheiten/Volumen] in Serum oder Plasma durch Immunoassay"
              },
              {
                "language" : "fr-CH",
                "value" : "Anticorps IgG du SARS-CoV-2 (COVID-19) [unités/volume] dans le sérum ou le plasma par immunoanalyse"
              },
              {
                "language" : "it-CH",
                "value" : "SARS-CoV-2 (COVID-19) Ab IgG [unità/volume] in siero o plasma mediante immunodosaggio"
              },
              {
                "language" : "rm-CH",
                "value" : "SARS-CoV-2 (COVID-19) IgG Ab [unitads/volumen] en il serum u en il plasma tras immunoassay"
              },
              {
                "language" : "en-US",
                "value" : "SARS-CoV-2 (COVID-19) IgG Ab [Units/volume] in Serum or Plasma by Immunoassay"
              }
            ]
          },
          {
            "code" : "14128-3",
            "display" : "Rabies virus Ab [Titer] in Serum",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tollwut-Virus Ab [Titer] im Serum"
              },
              {
                "language" : "fr-CH",
                "value" : "Anticorps du virus de la rage [titre] dans le sérum"
              },
              {
                "language" : "it-CH",
                "value" : "virus della rabbia Ab [titolo] in siero"
              },
              {
                "language" : "rm-CH",
                "value" : "virus da la frenesia Ab [titer] en il serum"
              },
              {
                "language" : "en-US",
                "value" : "Rabies virus Ab [Titer] in Serum"
              }
            ]
          },
          {
            "code" : "22755-3",
            "display" : "Haemophilus influenzae B Ab [Mass/volume] in Serum",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Haemophilus influenzae B Ak [Masse/Volumen] im Serum"
              },
              {
                "language" : "fr-CH",
                "value" : "Haemophilus influenzae B Ac [masse/volume] dans le sérum"
              },
              {
                "language" : "it-CH",
                "value" : "Haemophilus influenzae B Ab [masse/volume] in siero"
              },
              {
                "language" : "rm-CH",
                "value" : "hemofilus influenza B Ak [massa/volumen] en il serum"
              },
              {
                "language" : "en-US",
                "value" : "Haemophilus influenzae B Ab [mass/volume] in Serum"
              }
            ]
          },
          {
            "code" : "25531-5",
            "display" : "Streptococcus pneumoniae Ab [Mass/volume] in Serum",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Streptococcus pneumoniae Ak [Masse/Volumen] im Serum"
              },
              {
                "language" : "fr-CH",
                "value" : "Streptococcus pneumoniae Ac [masse/volume] dans le sérum"
              },
              {
                "language" : "it-CH",
                "value" : "Streptococcus pneumoniae Ab [masse/volume] in siero"
              },
              {
                "language" : "rm-CH",
                "value" : "streptococcus pneumoniae Ak [massa/volumen] en il serum"
              },
              {
                "language" : "en-US",
                "value" : "Streptococcus pneumoniae Ab [mass/volume] in Serum"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
