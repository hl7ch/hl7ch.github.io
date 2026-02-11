# CdTyp9 -> CHEMEDEPRAmountQuantityUnitCode - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CdTyp9 -> CHEMEDEPRAmountQuantityUnitCode**

## ConceptMap: CdTyp9 -> CHEMEDEPRAmountQuantityUnitCode (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed-epr/ConceptMap/CdTyp9ToCHEMEDEPRAmountQuantityUnitCode | *Version*:3.0.0 |
| Draft as of 2026-02-11 | *Computable Name*:CdTyp9ToCHEMEDEPRAmountQuantityUnitCode |
| **Copyright/Legal**: CC0-1.0 | |

 
Mapping from HCI CdTyp9 unit codes to CHEMEDEPRAmountQuantityUnitCode codes. 

 
This concept map provides guidance for implementers that use HCI Index product(s) internally to translate unit codes for quantity amounts (both presentation and administration) to the eMedication service value set CHEMEDEPRAmountQuantityUnitCode. 
This concept map does not - and could not possibly - provide a one to one match for every source code. Whenever possible, comments in this concept map provide further guidance on how to approach the translation of problematic items. 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "CdTyp9ToCHEMEDEPRAmountQuantityUnitCode",
  "url" : "http://fhir.ch/ig/ch-emed-epr/ConceptMap/CdTyp9ToCHEMEDEPRAmountQuantityUnitCode",
  "version" : "3.0.0",
  "name" : "CdTyp9ToCHEMEDEPRAmountQuantityUnitCode",
  "title" : "CdTyp9 -> CHEMEDEPRAmountQuantityUnitCode",
  "status" : "draft",
  "experimental" : true,
  "date" : "2026-02-11T07:01:54+00:00",
  "publisher" : "CARA",
  "contact" : [
    {
      "name" : "CARA",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.cara.ch"
        }
      ]
    }
  ],
  "description" : "Mapping from HCI CdTyp9 unit codes to CHEMEDEPRAmountQuantityUnitCode codes.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH",
          "display" : "Switzerland"
        }
      ]
    }
  ],
  "purpose" : "This concept map provides guidance for implementers that use HCI Index product(s) internally to translate unit codes for quantity amounts (both presentation and administration) to the eMedication service value set CHEMEDEPRAmountQuantityUnitCode.\n\nThis concept map does not - and could not possibly - provide a one to one match for every source code. Whenever possible, comments in this concept map provide further guidance on how to approach the translation of problematic items.            ",
  "copyright" : "CC0-1.0",
  "sourceUri" : "https://index.hcisolutions.ch/index/current/get.aspx?schema=CODE&keytype=CDTYP&key=9",
  "targetCanonical" : "http://fhir.ch/ig/ch-emed-epr/ValueSet/ch-emed-epr-amount-quantity-unit-code",
  "group" : [
    {
      "source" : "https://index.hcisolutions.ch/index/current/get.aspx?schema=CODE&keytype=CDTYP&key=9",
      "target" : "http://snomed.info/sct",
      "element" : [
        {
          "code" : "Appl",
          "target" : [
            {
              "code" : "413568008",
              "display" : "Application - unit of product usage (qualifier value)",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "Blist",
          "target" : [
            {
              "code" : "732984005",
              "display" : "Blister (unit of presentation)",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "Btl",
          "target" : [
            {
              "code" : "732982009",
              "display" : "Bag (unit of presentation)",
              "equivalence" : "inexact",
              "comment" : "The CdTyp9 Btl concept is described as Beutel (German) and sachet (French), sachet being a more specialized kind of bag, as in English. Hence it is not possible to accurately describe this mapping."
            },
            {
              "code" : "733012005",
              "display" : "Pouch (unit of presentation)",
              "equivalence" : "inexact",
              "comment" : "The CdTyp9 Btl concept is described as Beutel (German) and sachet (French), sachet being a more specialized kind of bag, as in English. Hence it is not possible to accurately describe this mapping."
            },
            {
              "code" : "733013000",
              "display" : "Sachet (unit of presentation)",
              "equivalence" : "inexact",
              "comment" : "The CdTyp9 Btl concept is described as Beutel (German) and sachet (French), sachet being a more specialized kind of bag, as in English. Hence it is not possible to accurately describe this mapping."
            }
          ]
        },
        {
          "code" : "Dos",
          "target" : [
            {
              "code" : "408102007",
              "display" : "Dose",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "Dosierpip",
          "target" : [
            {
              "code" : "733009007",
              "display" : "Pipette (unit of presentation)",
              "equivalence" : "subsumes",
              "comment" : "A Dosierpipette (German) is more specifically a dosing pipette designed to measure and deliver precise amounts of medication."
            }
          ]
        },
        {
          "code" : "Dosierspr",
          "target" : [
            {
              "code" : "733020007",
              "display" : "Syringe (unit of presentation)",
              "equivalence" : "subsumes",
              "comment" : "The source code is more specifically a measuring or dosing syringe (Dosierspritze)."
            }
          ]
        },
        {
          "code" : "E",
          "target" : [
            {
              "code" : "767525000",
              "display" : "Unit",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "Fl",
          "target" : [
            {
              "code" : "732986007",
              "display" : "Bottle (unit of presentation)",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "gtt",
          "target" : [
            {
              "code" : "732994000",
              "display" : "Drop (unit of presentation)",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "Hub",
          "target" : [
            {
              "code" : "732981002",
              "display" : "Actuation (unit of presentation)",
              "equivalence" : "equivalent",
              "comment" : "In the context of drug administration, \"Hub\" in German often refers to the actuation or dose delivered by a medical device, such as a pump or a spray. In the case of an inhaler or nasal spray, a Hub refers to the quantity of medication released in one spray or actuation. For an insulin pump or other infusion devices, Hub can denote a specific unit of the medication delivered per pump cycle or actuation."
            }
          ]
        },
        {
          "code" : "MB",
          "target" : [
            {
              "code" : "732991008",
              "display" : "Cup (unit of presentation)",
              "equivalence" : "subsumes",
              "comment" : "Messbecher is more specifically a measuring cup."
            }
          ]
        },
        {
          "code" : "Mio U",
          "target" : [
            {
              "code" : "396186001",
              "display" : "(the number ten for arbitrary powers ^ 6) * Unit",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "MU",
          "target" : [
            {
              "code" : "396186001",
              "display" : "(the number ten for arbitrary powers ^ 6) * Unit",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "nML",
          "target" : [
            {
              "code" : "733015007",
              "display" : "Spoonful (unit of presentation)",
              "equivalence" : "subsumes",
              "comment" : "The source code is more specifically a measuring spoon (Messlöffel)."
            }
          ]
        },
        {
          "code" : "Patr",
          "target" : [
            {
              "code" : "732988008",
              "display" : "Cartridge (unit of presentation)",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "Pck",
          "target" : [
            {
              "code" : "1681000175101",
              "display" : "Package",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "Pfl",
          "target" : [
            {
              "code" : "733010002",
              "display" : "Plaster (unit of presentation)",
              "equivalence" : "equivalent",
              "comment" : "Even though the code and the German description of the CdTyp9 code (Pflaster) is the direct translation of a plaster, the French description is a patch, which is a specialized kind of plaster."
            }
          ]
        },
        {
          "code" : "Stk",
          "target" : [
            {
              "code" : "246205007",
              "display" : "Quantity",
              "equivalence" : "inexact",
              "comment" : "Stk stands for Stück which could be translated as piece. CH EMED 5.0.0 removed the unit piece and replaced it with the SNOMED code for quantity. See https://github.com/hl7ch/ch-emed/issues/252 for reasoning."
            }
          ]
        },
        {
          "code" : "tablet",
          "target" : [
            {
              "code" : "732936001",
              "display" : "Tablet (unit of presentation)",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "Tb",
          "target" : [
            {
              "code" : "733024003",
              "display" : "Tube (unit of presentation)",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "Teilpck",
          "target" : [
            {
              "code" : "1681000175101",
              "display" : "Package",
              "equivalence" : "inexact",
              "comment" : "A Teilpackung is a partial package or subdivided portion of a package."
            }
          ]
        },
        {
          "code" : "TU",
          "target" : [
            {
              "code" : "2011000175108",
              "display" : "Thousand per * Unit",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "U",
          "target" : [
            {
              "code" : "767525000",
              "display" : "Unit",
              "equivalence" : "equal"
            }
          ]
        }
      ]
    },
    {
      "source" : "https://index.hcisolutions.ch/index/current/get.aspx?schema=CODE&keytype=CDTYP&key=9",
      "target" : "http://unitsofmeasure.org",
      "element" : [
        {
          "code" : "%",
          "target" : [
            {
              "code" : "%",
              "display" : "percent",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "Bq",
          "target" : [
            {
              "code" : "Bq",
              "display" : "Becquerel",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "EL",
          "target" : [
            {
              "code" : "[tbs_m]",
              "display" : "tablespoon - metric",
              "equivalence" : "equal",
              "comment" : "Esslöffel (EL) is the German translation of the metric tablespoon."
            }
          ]
        },
        {
          "code" : "g",
          "target" : [
            {
              "code" : "g",
              "display" : "gram",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "GBq",
          "target" : [
            {
              "code" : "GBq",
              "display" : "gigaBecquerel",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "kBq",
          "target" : [
            {
              "code" : "kBq",
              "display" : "kiloBecquerel",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "kcal",
          "target" : [
            {
              "code" : "kcal",
              "display" : "kilocalorie",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "kg",
          "target" : [
            {
              "code" : "kg",
              "display" : "kilogram",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "kJ",
          "target" : [
            {
              "code" : "kJ",
              "display" : "kilojoule",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "L",
          "target" : [
            {
              "code" : "L",
              "display" : "liter",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "MBq",
          "target" : [
            {
              "code" : "MBq",
              "display" : "megaBecquerel",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "mcg",
          "target" : [
            {
              "code" : "ug",
              "display" : "microgram",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "mcl",
          "target" : [
            {
              "code" : "uL",
              "display" : "microliter",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "mcm",
          "target" : [
            {
              "code" : "umol",
              "display" : "micromole",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "mg",
          "target" : [
            {
              "code" : "mg",
              "display" : "milligram",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "Mio UI",
          "target" : [
            {
              "code" : "10*6.[iU]",
              "display" : "MillionInternationalUnit",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "ml",
          "target" : [
            {
              "code" : "mL",
              "display" : "milliliter",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "mmol",
          "target" : [
            {
              "code" : "mmol",
              "display" : "millimole",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "mol",
          "target" : [
            {
              "code" : "mol",
              "display" : "mole",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "ng",
          "target" : [
            {
              "code" : "ng",
              "display" : "nanogram",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "nmol",
          "target" : [
            {
              "code" : "nmol",
              "display" : "nanomole",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "TL",
          "target" : [
            {
              "code" : "[tsp_m]",
              "display" : "teaspoon - metric",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "UI",
          "target" : [
            {
              "code" : "[iU]",
              "display" : "international unit",
              "equivalence" : "equal"
            }
          ]
        }
      ]
    },
    {
      "source" : "https://index.hcisolutions.ch/index/current/get.aspx?schema=CODE&keytype=CDTYP&key=9",
      "element" : [
        {
          "code" : "h",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "Jahr",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "Monat",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "N/A",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "Tag",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        }
      ]
    }
  ]
}

```
