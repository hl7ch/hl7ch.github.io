# Basic Immunization Codes - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Basic Immunization Codes**

## ValueSet: Basic Immunization Codes 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-basic-immunization-vs | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:BasicImmunizationCode |
| **Copyright/Legal**: CC0-1.0 | |

 
The codes for declaring basic immunization. 

 **References** 

* [CH VACD Basic Immunization](StructureDefinition-ch-vacd-basic-immunization.md)

### Boundaries and Restrictions

There are cases where it is not possible to enter all given vaccinations because of lack of documentation (i.e. loss of vaccination card) but it's known, that the person is vaccinatied in childhood according to the common immunization program to reach basic immunization.

This valueset represents the list of possible entries (is extensible) for the profile [CH VACD Basic Immunization](StructureDefinition-ch-vacd-basic-immunization.md)

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
  "id" : "ch-vacd-basic-immunization-vs",
  "url" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-basic-immunization-vs",
  "version" : "6.0.0",
  "name" : "BasicImmunizationCode",
  "title" : "Basic Immunization Codes",
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
  "description" : "The codes for declaring basic immunization.",
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
        "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-basic-immunization-cs",
        "concept" : [
          {
            "code" : "bi-dtpa",
            "display" : "Received basic immunization against DTPa in childhood.",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Grundimmunisierung gegen DTPa in der Kindheit erhalten."
              },
              {
                "language" : "fr-CH",
                "value" : "Vaccination de base contre le DTPa effectuée durant l’enfance."
              },
              {
                "language" : "it-CH",
                "value" : "Completamento dell’immunizzazione di base contro DTPa durante l’infanzia."
              },
              {
                "language" : "rm-CH",
                "value" : "Ha obtegnì tut las vaccinaziuns cunter la DTPa durant l'uffanza."
              },
              {
                "language" : "en-US",
                "value" : "Received basic immunization against DTPa in childhood."
              }
            ]
          },
          {
            "code" : "bi-polio",
            "display" : "Received basic immunization against poliomyelitis in childhood.",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Grundimmunisierung gegen Poliomyelitis in der Kindheit erhalten."
              },
              {
                "language" : "fr-CH",
                "value" : "Vaccination de base contre la poliomyélite effectuée durant l’enfance."
              },
              {
                "language" : "it-CH",
                "value" : "Completamento dell’immunizzazione di base contro la poliomielite durante l’infanzia."
              },
              {
                "language" : "rm-CH",
                "value" : "Ha obtegnì tut las vaccinaziuns cunter la poliomielitis durant l'uffanza."
              },
              {
                "language" : "en-US",
                "value" : "Received basic immunization against poliomyelitis in childhood."
              }
            ]
          },
          {
            "code" : "bi-fsme",
            "display" : "Received basic immunization against tick-borne encephalitis.",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Grundimmunisierung gegen die Frühsommer-Meningoenzephalitis erhalten."
              },
              {
                "language" : "fr-CH",
                "value" : "Vaccination de base contre la méningo-encéphalite verno-estivale effectuée."
              },
              {
                "language" : "it-CH",
                "value" : "Completamento dell’immunizzazione di base contro la meningoencefalite verno-estiva."
              },
              {
                "language" : "rm-CH",
                "value" : "Grundimmunisierung gegen die Frühsommer-Meningoenzephalitis erhalten."
              },
              {
                "language" : "en-US",
                "value" : "Received basic immunization against tick-borne encephalitis."
              }
            ]
          },
          {
            "code" : "bi-hib",
            "display" : "Received basic immunization against Haemophilus influenzae type b.",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Grundimmunisierung gegen Hämophilus influenzae Typ b erhalten."
              },
              {
                "language" : "fr-CH",
                "value" : "Vaccination de base contre l’Haemophilus influenzae de type b effectuée."
              },
              {
                "language" : "it-CH",
                "value" : "Completamento dell’immunizzazione di base contro l’Haemophilus influenzae di tipo b."
              },
              {
                "language" : "rm-CH",
                "value" : "Grundimmunisierung gegen Hämophilus influenzae Typ b erhalten."
              },
              {
                "language" : "en-US",
                "value" : "Received basic immunization against Haemophilus influenzae type b."
              }
            ]
          },
          {
            "code" : "bi-hpv",
            "display" : "Received basic immunization against Human papillomavirus.",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Grundimmunisierung gegen Humanes Papillomavirus erhalten."
              },
              {
                "language" : "fr-CH",
                "value" : "Vaccination de base contre le papillomavirus humain effectuée."
              },
              {
                "language" : "it-CH",
                "value" : "Completamento dell’immunizzazione di base contro i papillomavirus umani."
              },
              {
                "language" : "rm-CH",
                "value" : "Grundimmunisierung gegen Humanes Papillomavirus erhalten."
              },
              {
                "language" : "en-US",
                "value" : "Received basic immunization against Human papillomavirus."
              }
            ]
          },
          {
            "code" : "bi-variz",
            "display" : "Received basic immunization against varicella.",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Grundimmunisierung gegen Windpocken erhalten."
              },
              {
                "language" : "fr-CH",
                "value" : "Vaccination de base contre la varicelle effectuée."
              },
              {
                "language" : "it-CH",
                "value" : "Completamento dell’immunizzazione di base contro la varicella."
              },
              {
                "language" : "rm-CH",
                "value" : "Grundimmunisierung gegen Windpocken erhalten."
              },
              {
                "language" : "en-US",
                "value" : "Received basic immunization against varicella."
              }
            ]
          },
          {
            "code" : "bi-mmr",
            "display" : "Received basic immunization against Measles, Mumps, Rubella.",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Grundimmunisierung gegen Masern, Mumps, Röteln erhalten."
              },
              {
                "language" : "fr-CH",
                "value" : "Vaccination de base contre la rougeole, les oreillons et la rubéole effectuée."
              },
              {
                "language" : "it-CH",
                "value" : "Completamento dell’immunizzazione di base contro morbillo, orecchioni e rosolia."
              },
              {
                "language" : "rm-CH",
                "value" : "Grundimmunisierung gegen Masern, Mumps, Röteln erhalten."
              },
              {
                "language" : "en-US",
                "value" : "Received basic immunization against ."
              }
            ]
          },
          {
            "code" : "bi-pneumo",
            "display" : "Received basic immunization against Pneumococcal infectious disease.",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Grundimmunisierung gegen Pneumokokken-Erkrankung erhalten."
              },
              {
                "language" : "fr-CH",
                "value" : "Vaccination de base contre la maladie à pneumocoques effectuée."
              },
              {
                "language" : "it-CH",
                "value" : "Completamento dell’immunizzazione di base contro la malattia invasiva da pneumococchi."
              },
              {
                "language" : "rm-CH",
                "value" : "Grundimmunisierung gegen Pneumokokken-Erkrankung erhalten."
              },
              {
                "language" : "en-US",
                "value" : "Received basic immunization against Pneumococcal infectious disease."
              }
            ]
          },
          {
            "code" : "bi-hepb",
            "display" : "Received basic immunization against viral hepatitis type B",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Grundimmunisierung gegen virale Hepatitis Typ B erhalten."
              },
              {
                "language" : "fr-CH",
                "value" : "Vaccination de base contre l’hépatite virale de type B."
              },
              {
                "language" : "it-CH",
                "value" : "Completamento dell’immunizzazione di base contro l’epatite virale B."
              },
              {
                "language" : "rm-CH",
                "value" : "Grundimmunisierung gegen virale Hepatitis Typ B erhalten."
              },
              {
                "language" : "en-US",
                "value" : "Received basic immunization against viral hepatitis type B."
              }
            ]
          },
          {
            "code" : "bi-hepa",
            "display" : "Received basic immunization against viral hepatitis type A",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Grundimmunisierung gegen virale Hepatitis Typ A erhalten."
              },
              {
                "language" : "fr-CH",
                "value" : "Vaccination de base contre l’hépatite virale de type A effectuée."
              },
              {
                "language" : "it-CH",
                "value" : "Completamento dell’immunizzazione di base contro l’epatite virale A."
              },
              {
                "language" : "rm-CH",
                "value" : "Grundimmunisierung gegen virale Hepatitis Typ A erhalten."
              },
              {
                "language" : "en-US",
                "value" : "Received basic immunization against viral hepatitis type A."
              }
            ]
          },
          {
            "code" : "bi-herpzos",
            "display" : "Received basic immunization against herpes zoster",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Grundimmunisierung gegen Herpes zoster erhalten."
              },
              {
                "language" : "fr-CH",
                "value" : "Vaccination de base contre l’herpès zoster effectuée."
              },
              {
                "language" : "it-CH",
                "value" : "Completamento dell’immunizzazione di base contro l’herpes zoster."
              },
              {
                "language" : "rm-CH",
                "value" : "Grundimmunisierung gegen Herpes zoster erhalten."
              },
              {
                "language" : "en-US",
                "value" : "Received basic immunization against herpes zoster."
              }
            ]
          },
          {
            "code" : "bi-mening",
            "display" : "Received basic immunization against meningococcal infectious disease.",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Grundimmunisierung gegen Meningokokken-Erkrankung erhalten."
              },
              {
                "language" : "fr-CH",
                "value" : "Vaccination de base contre la maladie à méningocoque effectuée."
              },
              {
                "language" : "it-CH",
                "value" : "Completamento dell’immunizzazione di base contro la malattia invasiva da meningococchi."
              },
              {
                "language" : "rm-CH",
                "value" : "Grundimmunisierung gegen Meningokokken-Erkrankung erhalten."
              },
              {
                "language" : "en-US",
                "value" : "Received basic immunization against meningococcal infectious disease."
              }
            ]
          },
          {
            "code" : "bi-rabi",
            "display" : "Received basic immunization against rabies",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Grundimmunisierung gegen Tollwut erhalten."
              },
              {
                "language" : "fr-CH",
                "value" : "Vaccination de base contre la rage effectuée."
              },
              {
                "language" : "it-CH",
                "value" : "Completamento dell’immunizzazione di base contro la rabbia."
              },
              {
                "language" : "rm-CH",
                "value" : "Grundimmunisierung gegen Tollwut erhalten."
              },
              {
                "language" : "en-US",
                "value" : "Received basic immunization against rabies."
              }
            ]
          }
        ]
      }
    ]
  }
}

```
