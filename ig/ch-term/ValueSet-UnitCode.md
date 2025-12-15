# UnitCode - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UnitCode**

## ValueSet: UnitCode 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/ValueSet/UnitCode | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:UnitCode |
| *Other Identifiers:*OID:2.16.756.5.30.1.1.11.83 (use: official, ) | |
| **Copyright/Legal**: This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org. | |

 
UnitCode 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/UnitCode) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "UnitCode",
  "meta" : {
    "lastUpdated" : "2024-03-26T16:03:57Z",
    "source" : "https://art-decor.org/fhir/4.0/ch-pharm-",
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
      "valuePeriod" : {
        "start" : "2024-03-26T15:58:51+01:00"
      }
    }
  ],
  "url" : "http://fhir.ch/ig/ch-term/ValueSet/UnitCode",
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.756.5.30.1.1.11.83"
    }
  ],
  "version" : "3.3.0",
  "name" : "UnitCode",
  "title" : "UnitCode",
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
  "description" : "UnitCode",
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
  "immutable" : false,
  "copyright" : "This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org.",
  "compose" : {
    "include" : [
      {
        "system" : "http://unitsofmeasure.org",
        "concept" : [
          {
            "code" : "%",
            "display" : "percent",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "%"
              },
              {
                "language" : "fr-CH",
                "value" : "%"
              },
              {
                "language" : "it-CH",
                "value" : "%"
              },
              {
                "language" : "rm-CH",
                "value" : "%"
              },
              {
                "language" : "en-US",
                "value" : "%"
              }
            ]
          },
          {
            "code" : "Bq",
            "display" : "Becquerel",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Bq"
              },
              {
                "language" : "fr-CH",
                "value" : "Bq"
              },
              {
                "language" : "it-CH",
                "value" : "Bq"
              },
              {
                "language" : "rm-CH",
                "value" : "Bq"
              },
              {
                "language" : "en-US",
                "value" : "Bq"
              }
            ]
          },
          {
            "code" : "kBq",
            "display" : "kiloBecquerel",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "kBq"
              },
              {
                "language" : "fr-CH",
                "value" : "kBq"
              },
              {
                "language" : "it-CH",
                "value" : "kBq"
              },
              {
                "language" : "rm-CH",
                "value" : "kBq"
              },
              {
                "language" : "en-US",
                "value" : "kBq"
              }
            ]
          },
          {
            "code" : "MBq",
            "display" : "megaBecquerel",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "MBq"
              },
              {
                "language" : "fr-CH",
                "value" : "MBq"
              },
              {
                "language" : "it-CH",
                "value" : "MBq"
              },
              {
                "language" : "rm-CH",
                "value" : "MBq"
              },
              {
                "language" : "en-US",
                "value" : "MBq"
              }
            ]
          },
          {
            "code" : "GBq",
            "display" : "gigaBecquerel",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "GBq"
              },
              {
                "language" : "fr-CH",
                "value" : "GBq"
              },
              {
                "language" : "it-CH",
                "value" : "GBq"
              },
              {
                "language" : "rm-CH",
                "value" : "GBq"
              },
              {
                "language" : "en-US",
                "value" : "GBq"
              }
            ]
          },
          {
            "code" : "ng",
            "display" : "nanogram",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "ng"
              },
              {
                "language" : "fr-CH",
                "value" : "ng"
              },
              {
                "language" : "it-CH",
                "value" : "ng"
              },
              {
                "language" : "rm-CH",
                "value" : "ng"
              },
              {
                "language" : "en-US",
                "value" : "ng"
              }
            ]
          },
          {
            "code" : "ug",
            "display" : "microgram",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "µg"
              },
              {
                "language" : "fr-CH",
                "value" : "µg"
              },
              {
                "language" : "it-CH",
                "value" : "µg"
              },
              {
                "language" : "rm-CH",
                "value" : "µg"
              },
              {
                "language" : "en-US",
                "value" : "µg"
              }
            ]
          },
          {
            "code" : "mg",
            "display" : "milligram",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "mg"
              },
              {
                "language" : "fr-CH",
                "value" : "mg"
              },
              {
                "language" : "it-CH",
                "value" : "mg"
              },
              {
                "language" : "rm-CH",
                "value" : "mg"
              },
              {
                "language" : "en-US",
                "value" : "mg"
              }
            ]
          },
          {
            "code" : "g",
            "display" : "gram",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "g"
              },
              {
                "language" : "fr-CH",
                "value" : "g"
              },
              {
                "language" : "it-CH",
                "value" : "g"
              },
              {
                "language" : "rm-CH",
                "value" : "g"
              },
              {
                "language" : "en-US",
                "value" : "g"
              }
            ]
          },
          {
            "code" : "kg",
            "display" : "kilogram",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "kg"
              },
              {
                "language" : "fr-CH",
                "value" : "kg"
              },
              {
                "language" : "it-CH",
                "value" : "kg"
              },
              {
                "language" : "rm-CH",
                "value" : "kg"
              },
              {
                "language" : "en-US",
                "value" : "kg"
              }
            ]
          },
          {
            "code" : "kcal",
            "display" : "kilocalorie",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "kcal"
              },
              {
                "language" : "fr-CH",
                "value" : "kcal"
              },
              {
                "language" : "it-CH",
                "value" : "kcal"
              },
              {
                "language" : "rm-CH",
                "value" : "kcal"
              },
              {
                "language" : "en-US",
                "value" : "kcal"
              }
            ]
          },
          {
            "code" : "kJ",
            "display" : "kilojoule",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "kJ"
              },
              {
                "language" : "fr-CH",
                "value" : "kJ"
              },
              {
                "language" : "it-CH",
                "value" : "kJ"
              },
              {
                "language" : "rm-CH",
                "value" : "kJ"
              },
              {
                "language" : "en-US",
                "value" : "kJ"
              }
            ]
          },
          {
            "code" : "meq",
            "display" : "milliequivalent",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "meq"
              },
              {
                "language" : "fr-CH",
                "value" : "mEq"
              },
              {
                "language" : "it-CH",
                "value" : "mEq"
              },
              {
                "language" : "rm-CH",
                "value" : "meq"
              },
              {
                "language" : "en-US",
                "value" : "meq"
              }
            ]
          },
          {
            "code" : "umol",
            "display" : "micromole",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "µmol"
              },
              {
                "language" : "fr-CH",
                "value" : "µmol"
              },
              {
                "language" : "it-CH",
                "value" : "µmol"
              },
              {
                "language" : "rm-CH",
                "value" : "µmol"
              },
              {
                "language" : "en-US",
                "value" : "µmol"
              }
            ]
          },
          {
            "code" : "mmol",
            "display" : "millimole",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "mmol"
              },
              {
                "language" : "fr-CH",
                "value" : "mmol"
              },
              {
                "language" : "it-CH",
                "value" : "mmol"
              },
              {
                "language" : "rm-CH",
                "value" : "mmol"
              },
              {
                "language" : "en-US",
                "value" : "mmol"
              }
            ]
          },
          {
            "code" : "nmol",
            "display" : "nanomole",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "nmol"
              },
              {
                "language" : "fr-CH",
                "value" : "nmol"
              },
              {
                "language" : "it-CH",
                "value" : "nmol"
              },
              {
                "language" : "rm-CH",
                "value" : "nmol"
              },
              {
                "language" : "en-US",
                "value" : "nmol"
              }
            ]
          },
          {
            "code" : "mol",
            "display" : "mole",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "mol"
              },
              {
                "language" : "fr-CH",
                "value" : "mol"
              },
              {
                "language" : "it-CH",
                "value" : "mol"
              },
              {
                "language" : "rm-CH",
                "value" : "mol"
              },
              {
                "language" : "en-US",
                "value" : "mol"
              }
            ]
          },
          {
            "code" : "nL",
            "display" : "nanoliter",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "nl"
              },
              {
                "language" : "fr-CH",
                "value" : "nl"
              },
              {
                "language" : "it-CH",
                "value" : "nl"
              },
              {
                "language" : "rm-CH",
                "value" : "nl"
              },
              {
                "language" : "en-US",
                "value" : "nl"
              }
            ]
          },
          {
            "code" : "uL",
            "display" : "microliter",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "µl"
              },
              {
                "language" : "fr-CH",
                "value" : "µl"
              },
              {
                "language" : "it-CH",
                "value" : "µl"
              },
              {
                "language" : "rm-CH",
                "value" : "µl"
              },
              {
                "language" : "en-US",
                "value" : "µl"
              }
            ]
          },
          {
            "code" : "mL",
            "display" : "milliliter",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "ml"
              },
              {
                "language" : "fr-CH",
                "value" : "ml"
              },
              {
                "language" : "it-CH",
                "value" : "ml"
              },
              {
                "language" : "rm-CH",
                "value" : "ml"
              },
              {
                "language" : "en-US",
                "value" : "ml"
              }
            ]
          },
          {
            "code" : "L",
            "display" : "liter",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "lt"
              },
              {
                "language" : "fr-CH",
                "value" : "lt"
              },
              {
                "language" : "it-CH",
                "value" : "l"
              },
              {
                "language" : "rm-CH",
                "value" : "lt"
              },
              {
                "language" : "en-US",
                "value" : "lt"
              }
            ]
          },
          {
            "code" : "mm2",
            "display" : "square millimeter",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "mm2"
              },
              {
                "language" : "fr-CH",
                "value" : "mm2"
              },
              {
                "language" : "it-CH",
                "value" : "mm2"
              },
              {
                "language" : "rm-CH",
                "value" : "mm2"
              },
              {
                "language" : "en-US",
                "value" : "mm2"
              }
            ]
          },
          {
            "code" : "cm",
            "display" : "centimeter",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "cm"
              },
              {
                "language" : "fr-CH",
                "value" : "cm"
              },
              {
                "language" : "it-CH",
                "value" : "cm"
              },
              {
                "language" : "rm-CH",
                "value" : "cm"
              },
              {
                "language" : "en-US",
                "value" : "cm"
              }
            ]
          },
          {
            "code" : "cm2",
            "display" : "square centimeter",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "cm2"
              },
              {
                "language" : "fr-CH",
                "value" : "cm2"
              },
              {
                "language" : "it-CH",
                "value" : "cm2"
              },
              {
                "language" : "rm-CH",
                "value" : "cm2"
              },
              {
                "language" : "en-US",
                "value" : "cm2"
              }
            ]
          },
          {
            "code" : "cm3",
            "display" : "cubic centimeter",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "cm3"
              },
              {
                "language" : "fr-CH",
                "value" : "cm3"
              },
              {
                "language" : "it-CH",
                "value" : "cm3"
              },
              {
                "language" : "rm-CH",
                "value" : "cm3"
              },
              {
                "language" : "en-US",
                "value" : "cm3"
              }
            ]
          },
          {
            "code" : "s",
            "display" : "Second",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "sec"
              },
              {
                "language" : "fr-CH",
                "value" : "sec"
              },
              {
                "language" : "it-CH",
                "value" : "sec"
              },
              {
                "language" : "rm-CH",
                "value" : "sec"
              },
              {
                "language" : "en-US",
                "value" : "sec"
              }
            ]
          },
          {
            "code" : "min",
            "display" : "Minute",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "min"
              },
              {
                "language" : "fr-CH",
                "value" : "min"
              },
              {
                "language" : "it-CH",
                "value" : "min"
              },
              {
                "language" : "rm-CH",
                "value" : "min"
              },
              {
                "language" : "en-US",
                "value" : "min"
              }
            ]
          },
          {
            "code" : "h",
            "display" : "Hour",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "h"
              },
              {
                "language" : "fr-CH",
                "value" : "h"
              },
              {
                "language" : "it-CH",
                "value" : "h"
              },
              {
                "language" : "rm-CH",
                "value" : "h"
              },
              {
                "language" : "en-US",
                "value" : "h"
              }
            ]
          },
          {
            "code" : "d",
            "display" : "Day",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "d"
              },
              {
                "language" : "fr-CH",
                "value" : "d"
              },
              {
                "language" : "it-CH",
                "value" : "d"
              },
              {
                "language" : "rm-CH",
                "value" : "d"
              },
              {
                "language" : "en-US",
                "value" : "d"
              }
            ]
          },
          {
            "code" : "a",
            "display" : "Year",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "a"
              },
              {
                "language" : "fr-CH",
                "value" : "a"
              },
              {
                "language" : "it-CH",
                "value" : "a"
              },
              {
                "language" : "rm-CH",
                "value" : "a"
              },
              {
                "language" : "en-US",
                "value" : "a"
              }
            ]
          },
          {
            "code" : "mo",
            "display" : "Month",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "mo"
              },
              {
                "language" : "fr-CH",
                "value" : "mo"
              },
              {
                "language" : "it-CH",
                "value" : "mo"
              },
              {
                "language" : "rm-CH",
                "value" : "mo"
              },
              {
                "language" : "en-US",
                "value" : "mo"
              }
            ]
          },
          {
            "code" : "[tbs_m]",
            "display" : "tablespoon - metric",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Esslöffel"
              },
              {
                "language" : "fr-CH",
                "value" : "c. à soupe"
              },
              {
                "language" : "it-CH",
                "value" : "cucchiaio da minestra"
              },
              {
                "language" : "rm-CH",
                "value" : "Esslöffel"
              },
              {
                "language" : "en-US",
                "value" : "tablespoon - metric"
              }
            ]
          },
          {
            "code" : "10*6.[iU]",
            "display" : "MillionInternationalUnit",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "MioUI"
              },
              {
                "language" : "fr-CH",
                "value" : "MioUI"
              },
              {
                "language" : "it-CH",
                "value" : "MioUI"
              },
              {
                "language" : "rm-CH",
                "value" : "MioUI"
              },
              {
                "language" : "en-US",
                "value" : "MillionInternationalUnit"
              }
            ]
          },
          {
            "code" : "[ppm]",
            "display" : "Parts Per Million",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "ppm"
              },
              {
                "language" : "fr-CH",
                "value" : "ppm"
              },
              {
                "language" : "it-CH",
                "value" : "ppm"
              },
              {
                "language" : "rm-CH",
                "value" : "ppm"
              },
              {
                "language" : "en-US",
                "value" : "ppm"
              }
            ]
          },
          {
            "code" : "[tsp_m]",
            "display" : "teaspoon - metric",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Teelöffel"
              },
              {
                "language" : "fr-CH",
                "value" : "c. à café"
              },
              {
                "language" : "it-CH",
                "value" : "cucchiaino da caffè"
              },
              {
                "language" : "rm-CH",
                "value" : "Teelöffel"
              },
              {
                "language" : "en-US",
                "value" : "teaspoon - metric"
              }
            ]
          },
          {
            "code" : "[iU]",
            "display" : "international unit",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Internationale Einheit"
              },
              {
                "language" : "fr-CH",
                "value" : "unité(s) internationale(s)"
              },
              {
                "language" : "it-CH",
                "value" : "unità internazionale(i)"
              },
              {
                "language" : "rm-CH",
                "value" : "Internationale Einheit"
              },
              {
                "language" : "en-US",
                "value" : "international unit"
              }
            ]
          },
          {
            "code" : "[CFU]",
            "display" : "Colony Forming Units",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "CFU"
              },
              {
                "language" : "fr-CH",
                "value" : "CFU"
              },
              {
                "language" : "it-CH",
                "value" : "CFU"
              },
              {
                "language" : "rm-CH",
                "value" : "CFU"
              },
              {
                "language" : "en-US",
                "value" : "CFU"
              }
            ]
          }
        ]
      },
      {
        "system" : "http://snomed.info/sct",
        "concept" : [
          {
            "code" : "732981002",
            "display" : "Actuation (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Sprühstoss"
              },
              {
                "language" : "de-CH",
                "value" : "Hub"
              },
              {
                "language" : "fr-CH",
                "value" : "bouffée"
              },
              {
                "language" : "it-CH",
                "value" : "erogazione"
              },
              {
                "language" : "rm-CH",
                "value" : "Betätigung (Sprühstoss)"
              },
              {
                "language" : "en-US",
                "value" : "Actuation"
              }
            ]
          },
          {
            "code" : "732978007",
            "display" : "Ampule (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ampulle"
              },
              {
                "language" : "fr-CH",
                "value" : "ampoule"
              },
              {
                "language" : "it-CH",
                "value" : "fiala"
              },
              {
                "language" : "rm-CH",
                "value" : "Ampulle"
              },
              {
                "language" : "en-US",
                "value" : "Ampule"
              }
            ]
          },
          {
            "code" : "413568008",
            "display" : "Application - unit of product usage (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Application - unit of product usage (qualifier value)"
              },
              {
                "language" : "fr-CH",
                "value" : "Application - unit of product usage (qualifier value)"
              },
              {
                "language" : "it-CH",
                "value" : "Application - unit of product usage (qualifier value)"
              },
              {
                "language" : "rm-CH",
                "value" : "Application - unit of product usage (qualifier value)"
              },
              {
                "language" : "en-US",
                "value" : "Application - unit of product usage (qualifier value)"
              }
            ]
          },
          {
            "code" : "732980001",
            "display" : "Applicator (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Applikator"
              },
              {
                "language" : "fr-CH",
                "value" : "applicateur"
              },
              {
                "language" : "it-CH",
                "value" : "applicatore"
              },
              {
                "language" : "rm-CH",
                "value" : "Applikator"
              },
              {
                "language" : "en-US",
                "value" : "Applicator"
              }
            ]
          },
          {
            "code" : "732982009",
            "display" : "Bag (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tasche"
              },
              {
                "language" : "fr-CH",
                "value" : "sac"
              },
              {
                "language" : "it-CH",
                "value" : "sacca"
              },
              {
                "language" : "rm-CH",
                "value" : "Tasche"
              },
              {
                "language" : "en-US",
                "value" : "Bag"
              }
            ]
          },
          {
            "code" : "732983004",
            "display" : "Barrel (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kanister"
              },
              {
                "language" : "fr-CH",
                "value" : "fût"
              },
              {
                "language" : "it-CH",
                "value" : "fusto"
              },
              {
                "language" : "rm-CH",
                "value" : "Kanister"
              },
              {
                "language" : "en-US",
                "value" : "Barrel"
              }
            ]
          },
          {
            "code" : "732984005",
            "display" : "Blister (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Blisterpackung"
              },
              {
                "language" : "fr-CH",
                "value" : "plaquette"
              },
              {
                "language" : "it-CH",
                "value" : "blister"
              },
              {
                "language" : "rm-CH",
                "value" : "Blisterpackung"
              },
              {
                "language" : "en-US",
                "value" : "Blister"
              }
            ]
          },
          {
            "code" : "732985006",
            "display" : "Block (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Block"
              },
              {
                "language" : "fr-CH",
                "value" : "bloc"
              },
              {
                "language" : "it-CH",
                "value" : "blocco"
              },
              {
                "language" : "rm-CH",
                "value" : "Block"
              },
              {
                "language" : "en-US",
                "value" : "Block"
              }
            ]
          },
          {
            "code" : "732986007",
            "display" : "Bottle (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Flasche"
              },
              {
                "language" : "fr-CH",
                "value" : "flacon"
              },
              {
                "language" : "it-CH",
                "value" : "flacone"
              },
              {
                "language" : "rm-CH",
                "value" : "Flasche"
              },
              {
                "language" : "en-US",
                "value" : "Bottle"
              }
            ]
          },
          {
            "code" : "732987003",
            "display" : "Cachet (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Oblatenkapsel"
              },
              {
                "language" : "fr-CH",
                "value" : "cachet"
              },
              {
                "language" : "it-CH",
                "value" : "cachet"
              },
              {
                "language" : "rm-CH",
                "value" : "Oblatenkapsel"
              },
              {
                "language" : "en-US",
                "value" : "Cachet"
              }
            ]
          },
          {
            "code" : "732937005",
            "display" : "Capsule (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kapsel"
              },
              {
                "language" : "fr-CH",
                "value" : "capsule"
              },
              {
                "language" : "it-CH",
                "value" : "capsula"
              },
              {
                "language" : "rm-CH",
                "value" : "Kapsel"
              },
              {
                "language" : "en-US",
                "value" : "Capsule"
              }
            ]
          },
          {
            "code" : "732988008",
            "display" : "Cartridge (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Patrone"
              },
              {
                "language" : "fr-CH",
                "value" : "cartouche"
              },
              {
                "language" : "it-CH",
                "value" : "cartuccia"
              },
              {
                "language" : "rm-CH",
                "value" : "Patrone"
              },
              {
                "language" : "en-US",
                "value" : "Cartridge"
              }
            ]
          },
          {
            "code" : "732989000",
            "display" : "Chewing gum (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Kaugummi"
              },
              {
                "language" : "fr-CH",
                "value" : "gomme à mâcher"
              },
              {
                "language" : "it-CH",
                "value" : "gomma da masticare"
              },
              {
                "language" : "rm-CH",
                "value" : "Kaugummi"
              },
              {
                "language" : "en-US",
                "value" : "Chewing gum"
              }
            ]
          },
          {
            "code" : "732990009",
            "display" : "Container (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Behältnis"
              },
              {
                "language" : "fr-CH",
                "value" : "récipient"
              },
              {
                "language" : "it-CH",
                "value" : "contenitore"
              },
              {
                "language" : "rm-CH",
                "value" : "Behältnis"
              },
              {
                "language" : "en-US",
                "value" : "Container"
              }
            ]
          },
          {
            "code" : "732991008",
            "display" : "Cup (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Messbecher"
              },
              {
                "language" : "fr-CH",
                "value" : "godet"
              },
              {
                "language" : "it-CH",
                "value" : "bicchiere dosatore"
              },
              {
                "language" : "rm-CH",
                "value" : "Messbecher"
              },
              {
                "language" : "en-US",
                "value" : "Cup"
              }
            ]
          },
          {
            "code" : "732992001",
            "display" : "Cylinder (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Zylinder"
              },
              {
                "language" : "fr-CH",
                "value" : "cylindre"
              },
              {
                "language" : "it-CH",
                "value" : "cilindro"
              },
              {
                "language" : "rm-CH",
                "value" : "Zylinder"
              },
              {
                "language" : "en-US",
                "value" : "Cylinder"
              }
            ]
          },
          {
            "code" : "732993006",
            "display" : "Dressing (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Verband"
              },
              {
                "language" : "fr-CH",
                "value" : "compresse"
              },
              {
                "language" : "it-CH",
                "value" : "garza"
              },
              {
                "language" : "rm-CH",
                "value" : "Verband"
              },
              {
                "language" : "en-US",
                "value" : "Dressing"
              }
            ]
          },
          {
            "code" : "732994000",
            "display" : "Drop (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tropfen"
              },
              {
                "language" : "fr-CH",
                "value" : "goutte"
              },
              {
                "language" : "it-CH",
                "value" : "goccia"
              },
              {
                "language" : "rm-CH",
                "value" : "Tropfen"
              },
              {
                "language" : "en-US",
                "value" : "Drop"
              }
            ]
          },
          {
            "code" : "732995004",
            "display" : "Film (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Film"
              },
              {
                "language" : "fr-CH",
                "value" : "film"
              },
              {
                "language" : "it-CH",
                "value" : "film"
              },
              {
                "language" : "rm-CH",
                "value" : "Film"
              },
              {
                "language" : "en-US",
                "value" : "Film"
              }
            ]
          },
          {
            "code" : "732996003",
            "display" : "Implant (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Implantat"
              },
              {
                "language" : "fr-CH",
                "value" : "implant"
              },
              {
                "language" : "it-CH",
                "value" : "impianto"
              },
              {
                "language" : "rm-CH",
                "value" : "Implantat"
              },
              {
                "language" : "en-US",
                "value" : "Implant"
              }
            ]
          },
          {
            "code" : "732997007",
            "display" : "Inhaler (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Inhalator"
              },
              {
                "language" : "fr-CH",
                "value" : "inhalateur"
              },
              {
                "language" : "it-CH",
                "value" : "inalatore"
              },
              {
                "language" : "rm-CH",
                "value" : "Inhalator"
              },
              {
                "language" : "en-US",
                "value" : "Inhaler"
              }
            ]
          },
          {
            "code" : "732998002",
            "display" : "Insert (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Insert"
              },
              {
                "language" : "fr-CH",
                "value" : "insert"
              },
              {
                "language" : "it-CH",
                "value" : "inserto"
              },
              {
                "language" : "rm-CH",
                "value" : "Insert"
              },
              {
                "language" : "en-US",
                "value" : "Insert"
              }
            ]
          },
          {
            "code" : "732999005",
            "display" : "Jar (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Weithalsgefäss"
              },
              {
                "language" : "fr-CH",
                "value" : "pot"
              },
              {
                "language" : "it-CH",
                "value" : "vasetto"
              },
              {
                "language" : "rm-CH",
                "value" : "Weithalsgefäss"
              },
              {
                "language" : "en-US",
                "value" : "Jar"
              }
            ]
          },
          {
            "code" : "733001005",
            "display" : "Lyophilisate (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Lyophilisat"
              },
              {
                "language" : "fr-CH",
                "value" : "lyophilisat"
              },
              {
                "language" : "it-CH",
                "value" : "liofilizzato"
              },
              {
                "language" : "rm-CH",
                "value" : "Lyophilisat"
              },
              {
                "language" : "en-US",
                "value" : "Lyophilisate"
              }
            ]
          },
          {
            "code" : "733002003",
            "display" : "Matrix (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Matrix"
              },
              {
                "language" : "fr-CH",
                "value" : "matrice"
              },
              {
                "language" : "it-CH",
                "value" : "matrice"
              },
              {
                "language" : "rm-CH",
                "value" : "Matrix"
              },
              {
                "language" : "en-US",
                "value" : "Matrix"
              }
            ]
          },
          {
            "code" : "733003008",
            "display" : "Pad (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pad"
              },
              {
                "language" : "fr-CH",
                "value" : "tampon applicateur"
              },
              {
                "language" : "it-CH",
                "value" : "tampone"
              },
              {
                "language" : "rm-CH",
                "value" : "Pad"
              },
              {
                "language" : "en-US",
                "value" : "Pad"
              }
            ]
          },
          {
            "code" : "733004002",
            "display" : "Pastille (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pastille"
              },
              {
                "language" : "fr-CH",
                "value" : "pastille molle"
              },
              {
                "language" : "it-CH",
                "value" : "pastiglia molle"
              },
              {
                "language" : "rm-CH",
                "value" : "Pastille"
              },
              {
                "language" : "en-US",
                "value" : "Pastille"
              }
            ]
          },
          {
            "code" : "733005001",
            "display" : "Patch (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Patch"
              },
              {
                "language" : "fr-CH",
                "value" : "patch"
              },
              {
                "language" : "it-CH",
                "value" : "cerotto"
              },
              {
                "language" : "rm-CH",
                "value" : "Patch"
              },
              {
                "language" : "en-US",
                "value" : "Patch"
              }
            ]
          },
          {
            "code" : "733006000",
            "display" : "Pen (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pen"
              },
              {
                "language" : "fr-CH",
                "value" : "stylo"
              },
              {
                "language" : "it-CH",
                "value" : "penna"
              },
              {
                "language" : "rm-CH",
                "value" : "Pen"
              },
              {
                "language" : "en-US",
                "value" : "Pen"
              }
            ]
          },
          {
            "code" : "733007009",
            "display" : "Pessary (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pessar"
              },
              {
                "language" : "fr-CH",
                "value" : "ovule"
              },
              {
                "language" : "it-CH",
                "value" : "ovulo"
              },
              {
                "language" : "rm-CH",
                "value" : "Pessar"
              },
              {
                "language" : "en-US",
                "value" : "Pessary"
              }
            ]
          },
          {
            "code" : "733008004",
            "display" : "Pillule (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Streukügelchen"
              },
              {
                "language" : "fr-CH",
                "value" : "granule"
              },
              {
                "language" : "it-CH",
                "value" : "granuli"
              },
              {
                "language" : "rm-CH",
                "value" : "Streukügelchen"
              },
              {
                "language" : "en-US",
                "value" : "Pillule"
              }
            ]
          },
          {
            "code" : "733009007",
            "display" : "Pipette (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pipette"
              },
              {
                "language" : "fr-CH",
                "value" : "pipette"
              },
              {
                "language" : "it-CH",
                "value" : "pipetta"
              },
              {
                "language" : "rm-CH",
                "value" : "Pipette"
              },
              {
                "language" : "en-US",
                "value" : "Pipette"
              }
            ]
          },
          {
            "code" : "733010002",
            "display" : "Plaster (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pflaster"
              },
              {
                "language" : "fr-CH",
                "value" : "emplâtre"
              },
              {
                "language" : "it-CH",
                "value" : "cerotto"
              },
              {
                "language" : "rm-CH",
                "value" : "Pflaster"
              },
              {
                "language" : "en-US",
                "value" : "Plaster"
              }
            ]
          },
          {
            "code" : "733011003",
            "display" : "Plug (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Einsatz"
              },
              {
                "language" : "fr-CH",
                "value" : "support poreux"
              },
              {
                "language" : "it-CH",
                "value" : "supporto"
              },
              {
                "language" : "rm-CH",
                "value" : "Einsatz"
              },
              {
                "language" : "en-US",
                "value" : "Plug"
              }
            ]
          },
          {
            "code" : "733012005",
            "display" : "Pouch (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Beutelchen"
              },
              {
                "language" : "fr-CH",
                "value" : "pochette"
              },
              {
                "language" : "it-CH",
                "value" : "sachetta"
              },
              {
                "language" : "rm-CH",
                "value" : "Beutelchen"
              },
              {
                "language" : "en-US",
                "value" : "Pouch"
              }
            ]
          },
          {
            "code" : "733013000",
            "display" : "Sachet (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Beutel"
              },
              {
                "language" : "fr-CH",
                "value" : "sachet"
              },
              {
                "language" : "it-CH",
                "value" : "bustina"
              },
              {
                "language" : "rm-CH",
                "value" : "Beutel"
              },
              {
                "language" : "en-US",
                "value" : "Sachet"
              }
            ]
          },
          {
            "code" : "733014006",
            "display" : "Sponge (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Schwämmchen"
              },
              {
                "language" : "fr-CH",
                "value" : "eponge"
              },
              {
                "language" : "it-CH",
                "value" : "spugna"
              },
              {
                "language" : "rm-CH",
                "value" : "Schwämmchen"
              },
              {
                "language" : "en-US",
                "value" : "Sponge"
              }
            ]
          },
          {
            "code" : "733015007",
            "display" : "Spoonful (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "ein Löffel voll"
              },
              {
                "language" : "fr-CH",
                "value" : "cuillerée"
              },
              {
                "language" : "it-CH",
                "value" : "cucciaio"
              },
              {
                "language" : "rm-CH",
                "value" : "ein Löffel voll"
              },
              {
                "language" : "en-US",
                "value" : "Spoonful"
              }
            ]
          },
          {
            "code" : "733016008",
            "display" : "Stick (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Stäbchen"
              },
              {
                "language" : "fr-CH",
                "value" : "bâton"
              },
              {
                "language" : "it-CH",
                "value" : "stick"
              },
              {
                "language" : "rm-CH",
                "value" : "Stäbchen"
              },
              {
                "language" : "en-US",
                "value" : "Stick"
              }
            ]
          },
          {
            "code" : "733017004",
            "display" : "Straw (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Trinkhalm"
              },
              {
                "language" : "fr-CH",
                "value" : "paille"
              },
              {
                "language" : "it-CH",
                "value" : "cannuccia"
              },
              {
                "language" : "rm-CH",
                "value" : "Trinkhalm"
              },
              {
                "language" : "en-US",
                "value" : "Straw"
              }
            ]
          },
          {
            "code" : "733018009",
            "display" : "Strip (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Streifen"
              },
              {
                "language" : "fr-CH",
                "value" : "bandelette"
              },
              {
                "language" : "it-CH",
                "value" : "strip"
              },
              {
                "language" : "rm-CH",
                "value" : "Streifen"
              },
              {
                "language" : "en-US",
                "value" : "Strip"
              }
            ]
          },
          {
            "code" : "733019001",
            "display" : "Suppository (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Zäpfchen"
              },
              {
                "language" : "fr-CH",
                "value" : "suppositoire"
              },
              {
                "language" : "it-CH",
                "value" : "supposta"
              },
              {
                "language" : "rm-CH",
                "value" : "Zäpfchen"
              },
              {
                "language" : "en-US",
                "value" : "Suppository"
              }
            ]
          },
          {
            "code" : "733020007",
            "display" : "Syringe (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Spritze"
              },
              {
                "language" : "fr-CH",
                "value" : "seringue"
              },
              {
                "language" : "it-CH",
                "value" : "siringa"
              },
              {
                "language" : "rm-CH",
                "value" : "Spritze"
              },
              {
                "language" : "en-US",
                "value" : "Syringe"
              }
            ]
          },
          {
            "code" : "733021006",
            "display" : "System (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "System"
              },
              {
                "language" : "fr-CH",
                "value" : "système"
              },
              {
                "language" : "it-CH",
                "value" : "sistema"
              },
              {
                "language" : "rm-CH",
                "value" : "System"
              },
              {
                "language" : "en-US",
                "value" : "System"
              }
            ]
          },
          {
            "code" : "732936001",
            "display" : "Tablet (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tablette"
              },
              {
                "language" : "fr-CH",
                "value" : "comprimé"
              },
              {
                "language" : "it-CH",
                "value" : "compressa"
              },
              {
                "language" : "rm-CH",
                "value" : "Tablette"
              },
              {
                "language" : "en-US",
                "value" : "Tablet"
              }
            ]
          },
          {
            "code" : "733022004",
            "display" : "Tampon (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tampon"
              },
              {
                "language" : "fr-CH",
                "value" : "tampon diffuseur"
              },
              {
                "language" : "it-CH",
                "value" : "tampone"
              },
              {
                "language" : "rm-CH",
                "value" : "Tampon"
              },
              {
                "language" : "en-US",
                "value" : "Tampon"
              }
            ]
          },
          {
            "code" : "733023009",
            "display" : "Thread (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Faden"
              },
              {
                "language" : "fr-CH",
                "value" : "fil"
              },
              {
                "language" : "it-CH",
                "value" : "filo"
              },
              {
                "language" : "rm-CH",
                "value" : "Faden"
              },
              {
                "language" : "en-US",
                "value" : "Thread"
              }
            ]
          },
          {
            "code" : "733024003",
            "display" : "Tube (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tube"
              },
              {
                "language" : "fr-CH",
                "value" : "tube"
              },
              {
                "language" : "it-CH",
                "value" : "tubo"
              },
              {
                "language" : "rm-CH",
                "value" : "Tube"
              },
              {
                "language" : "en-US",
                "value" : "Tube"
              }
            ]
          },
          {
            "code" : "733025002",
            "display" : "Vessel (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gefäss"
              },
              {
                "language" : "fr-CH",
                "value" : "récipient étanche"
              },
              {
                "language" : "it-CH",
                "value" : "recipiente a tenuta"
              },
              {
                "language" : "rm-CH",
                "value" : "Gefäss"
              },
              {
                "language" : "en-US",
                "value" : "Vessel"
              }
            ]
          },
          {
            "code" : "733026001",
            "display" : "Vial (unit of presentation)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Durchstechflasche"
              },
              {
                "language" : "fr-CH",
                "value" : "petit flacon"
              },
              {
                "language" : "it-CH",
                "value" : "flaconcino"
              },
              {
                "language" : "rm-CH",
                "value" : "Durchstechflasche"
              },
              {
                "language" : "en-US",
                "value" : "Vial"
              }
            ]
          },
          {
            "code" : "408102007",
            "display" : "Dose",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Dos"
              },
              {
                "language" : "fr-CH",
                "value" : "dose"
              },
              {
                "language" : "it-CH",
                "value" : "dose"
              },
              {
                "language" : "rm-CH",
                "value" : "Dos"
              },
              {
                "language" : "en-US",
                "value" : "Dose"
              }
            ]
          },
          {
            "code" : "396186001",
            "display" : "(the number ten for arbitrary powers ^ 6) * Unit",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "MioU"
              },
              {
                "language" : "fr-CH",
                "value" : "MioU"
              },
              {
                "language" : "it-CH",
                "value" : "MioU"
              },
              {
                "language" : "rm-CH",
                "value" : "MioU"
              },
              {
                "language" : "en-US",
                "value" : "MioU"
              }
            ]
          },
          {
            "code" : "1681000175101",
            "display" : "Package",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Packung"
              },
              {
                "language" : "fr-CH",
                "value" : "emballage"
              },
              {
                "language" : "it-CH",
                "value" : "confezione"
              },
              {
                "language" : "rm-CH",
                "value" : "Packung"
              },
              {
                "language" : "en-US",
                "value" : "Package"
              }
            ]
          },
          {
            "code" : "246205007",
            "display" : "Quantity (attribute)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Stk"
              },
              {
                "language" : "fr-CH",
                "value" : "pce"
              },
              {
                "language" : "it-CH",
                "value" : "pz"
              },
              {
                "language" : "rm-CH",
                "value" : "Stk"
              },
              {
                "language" : "en-US",
                "value" : "Piece(s)"
              }
            ]
          },
          {
            "code" : "2011000175108",
            "display" : "Thousand Per * Unit",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Tausend Einheiten"
              },
              {
                "language" : "fr-CH",
                "value" : "millier d'unités"
              },
              {
                "language" : "it-CH",
                "value" : "mille per unità *"
              },
              {
                "language" : "rm-CH",
                "value" : "Tausend Einheiten"
              },
              {
                "language" : "en-US",
                "value" : "Thousand Per * Unit"
              }
            ]
          },
          {
            "code" : "767525000",
            "display" : "Unit",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Einheit"
              },
              {
                "language" : "fr-CH",
                "value" : "unité(s)"
              },
              {
                "language" : "it-CH",
                "value" : "unità"
              },
              {
                "language" : "rm-CH",
                "value" : "Einheit"
              },
              {
                "language" : "en-US",
                "value" : "unit"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
