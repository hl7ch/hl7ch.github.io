# CHEMEDEPRAmountQuantityUnitCode -> CdTyp9 - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CHEMEDEPRAmountQuantityUnitCode -> CdTyp9**

## ConceptMap: CHEMEDEPRAmountQuantityUnitCode -> CdTyp9 (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed-epr/ConceptMap/CHEMEDEPRAmountQuantityUnitCodeToCdTyp9 | *Version*:3.0.0 |
| Draft as of 2026-02-11 | *Computable Name*:CHEMEDEPRAmountQuantityUnitCodeToCdTyp9 |
| **Copyright/Legal**: CC0-1.0 | |

 
Mapping from CHEMEDEPRAmountQuantityUnitCode codes to HCI CdTyp9 unit codes. 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "CHEMEDEPRAmountQuantityUnitCodeToCdTyp9",
  "url" : "http://fhir.ch/ig/ch-emed-epr/ConceptMap/CHEMEDEPRAmountQuantityUnitCodeToCdTyp9",
  "version" : "3.0.0",
  "name" : "CHEMEDEPRAmountQuantityUnitCodeToCdTyp9",
  "title" : "CHEMEDEPRAmountQuantityUnitCode -> CdTyp9",
  "status" : "draft",
  "experimental" : true,
  "date" : "2026-02-11T07:11:04+00:00",
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
  "description" : "Mapping from CHEMEDEPRAmountQuantityUnitCode codes to HCI CdTyp9 unit codes.",
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
  "copyright" : "CC0-1.0",
  "sourceCanonical" : "http://fhir.ch/ig/ch-emed-epr/ValueSet/ch-emed-epr-amount-quantity-unit-code",
  "targetUri" : "https://index.hcisolutions.ch/index/current/get.aspx?schema=CODE&keytype=CDTYP&key=9",
  "group" : [
    {
      "source" : "http://snomed.info/sct",
      "target" : "https://index.hcisolutions.ch/index/current/get.aspx?schema=CODE&keytype=CDTYP&key=9",
      "element" : [
        {
          "code" : "732981002",
          "display" : "Actuation (unit of presentation)",
          "target" : [
            {
              "code" : "Hub",
              "equivalence" : "equivalent",
              "comment" : "In the context of drug administration, \"Hub\" in German often refers to the actuation or dose delivered by a medical device, such as a pump or a spray. In the case of an inhaler or nasal spray, a Hub refers to the quantity of medication released in one spray or actuation. For an insulin pump or other infusion devices, Hub can denote a specific unit of the medication delivered per pump cycle or actuation."
            }
          ]
        },
        {
          "code" : "732978007",
          "display" : "Ampule (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "413568008",
          "display" : "Application - unit of product usage (qualifier value)",
          "target" : [
            {
              "code" : "Appl",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "732980001",
          "display" : "Applicator (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "732982009",
          "display" : "Bag (unit of presentation)",
          "target" : [
            {
              "code" : "Btl",
              "equivalence" : "inexact",
              "comment" : "In HCI's code system, there is no equivalent for a bag (or French poche), e.g. an infusion bag. The broader German term Beutel is instead used for single dose sachets."
            }
          ]
        },
        {
          "code" : "732983004",
          "display" : "Barrel (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "732984005",
          "display" : "Blister (unit of presentation)",
          "target" : [
            {
              "code" : "Blist",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "732985006",
          "display" : "Block (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "732986007",
          "display" : "Bottle (unit of presentation)",
          "target" : [
            {
              "code" : "Fl",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "732987003",
          "display" : "Cachet (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "732937005",
          "display" : "Capsule (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "732988008",
          "display" : "Cartridge (unit of presentation)",
          "target" : [
            {
              "code" : "Patr",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "732989000",
          "display" : "Chewing gum (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "732990009",
          "display" : "Container (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "732991008",
          "display" : "Cup (unit of presentation)",
          "target" : [
            {
              "code" : "MB",
              "equivalence" : "specializes",
              "comment" : "Messbecher is more specifically a measuring cup."
            }
          ]
        },
        {
          "code" : "732992001",
          "display" : "Cylinder (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "732993006",
          "display" : "Dressing (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "732994000",
          "display" : "Drop (unit of presentation)",
          "target" : [
            {
              "code" : "gtt",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "732995004",
          "display" : "Film (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "732996003",
          "display" : "Implant (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "732997007",
          "display" : "Inhaler (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "732998002",
          "display" : "Insert (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "732999005",
          "display" : "Jar (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "733001005",
          "display" : "Lyophilisate (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "733002003",
          "display" : "Matrix (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "733003008",
          "display" : "Pad (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "733004002",
          "display" : "Pastille (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "733005001",
          "display" : "Patch (unit of presentation)",
          "target" : [
            {
              "code" : "Pfl",
              "equivalence" : "subsumes",
              "comment" : "HCI's CDTyp9 contains only a general code for Plaster (translated within the code system as the more specialized patch in French, oddly enough)."
            }
          ]
        },
        {
          "code" : "733006000",
          "display" : "Pen (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "733007009",
          "display" : "Pessary (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "733008004",
          "display" : "Pillule (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "733009007",
          "display" : "Pipette (unit of presentation)",
          "target" : [
            {
              "code" : "Dosierpip",
              "equivalence" : "specializes",
              "comment" : "A Dosierpipette (German) is more specifically a dosing pipette designed to measure and deliver precise amounts of medication."
            }
          ]
        },
        {
          "code" : "733010002",
          "display" : "Plaster (unit of presentation)",
          "target" : [
            {
              "code" : "Pfl",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "733011003",
          "display" : "Plug (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "733012005",
          "display" : "Pouch (unit of presentation)",
          "target" : [
            {
              "code" : "Btl",
              "equivalence" : "inexact",
              "comment" : "In HCI's code system, there is no equivalent for a pouch. The broader German term Beutel is instead used for single dose sachets."
            }
          ]
        },
        {
          "code" : "733013000",
          "display" : "Sachet (unit of presentation)",
          "target" : [
            {
              "code" : "Btl",
              "equivalence" : "inexact",
              "comment" : "In HCI's code system, The broader German term Beutel is instead used for single dose sachets and translated as such on its French display translation."
            }
          ]
        },
        {
          "code" : "733014006",
          "display" : "Sponge (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "733015007",
          "display" : "Spoonful (unit of presentation)",
          "target" : [
            {
              "code" : "nML",
              "equivalence" : "equivalent",
              "comment" : "The target code is more specifically a measuring spoon (Messlöffel)."
            }
          ]
        },
        {
          "code" : "733016008",
          "display" : "Stick (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "733017004",
          "display" : "Straw (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "733018009",
          "display" : "Strip (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "733019001",
          "display" : "Suppository (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "733020007",
          "display" : "Syringe (unit of presentation)",
          "target" : [
            {
              "code" : "Dosierspr",
              "equivalence" : "equivalent",
              "comment" : "The target code is more specifically a measuring or dosing syringe (Dosierspritze)."
            }
          ]
        },
        {
          "code" : "733021006",
          "display" : "System (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "732936001",
          "display" : "Tablet (unit of presentation)",
          "target" : [
            {
              "code" : "tablet",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "733022004",
          "display" : "Tampon (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "733023009",
          "display" : "Thread (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "733024003",
          "display" : "Tube (unit of presentation)",
          "target" : [
            {
              "code" : "Tb",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "733025002",
          "display" : "Vessel (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "733026001",
          "display" : "Vial (unit of presentation)",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "408102007",
          "display" : "Dose",
          "target" : [
            {
              "code" : "Dos",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "396186001",
          "display" : "(the number ten for arbitrary powers ^ 6) * Unit",
          "target" : [
            {
              "code" : "Mio U",
              "equivalence" : "equal",
              "comment" : "CdTyp9 has two codes for a million units: \"Mio U\" and \"MU\" (labeled as Millionen Einheiten).\nSince MU could bring some confusion, as it is also stands for Measurement Unit in English, with a different meaning, CdTyp9's \"Mio U\" is preferred by this concept map."
            },
            {
              "code" : "MU",
              "equivalence" : "equal",
              "comment" : "CdTyp9 has two codes for a million units: \"Mio U\" and \"MU\" (labeled as Millionen Einheiten).\nSince MU could bring some confusion, as it is also stands for Measurement Unit in English, with a different meaning, CdTyp9's \"Mio U\" is preferred by this concept map."
            }
          ]
        },
        {
          "code" : "1681000175101",
          "display" : "Package",
          "target" : [
            {
              "code" : "Pck",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "2011000175108",
          "display" : "Thousand Per * Unit",
          "target" : [
            {
              "code" : "TU",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "767525000",
          "display" : "Unit",
          "target" : [
            {
              "code" : "U",
              "equivalence" : "equal",
              "comment" : "CdTyp9 has two codes for unit, E for German Einheit and U for French unité (or English unit). This concept map suggests using U for coherence also with English."
            },
            {
              "code" : "E",
              "equivalence" : "equal",
              "comment" : "CdTyp9 has two codes for unit, E for German Einheit and U for French unité (or English unit). This concept map suggests using U for coherence also with English."
            }
          ]
        },
        {
          "code" : "246205007",
          "display" : "Quantity",
          "target" : [
            {
              "code" : "Stk",
              "equivalence" : "inexact",
              "comment" : "Stk stands for Stück which could be translated as piece. CH EMED 5.0.0 removed the unit piece and replaced it with the SNOMED code for quantity. See https://github.com/hl7ch/ch-emed/issues/252 for reasoning."
            }
          ]
        }
      ]
    },
    {
      "source" : "http://unitsofmeasure.org",
      "target" : "https://index.hcisolutions.ch/index/current/get.aspx?schema=CODE&keytype=CDTYP&key=9",
      "element" : [
        {
          "code" : "Bq",
          "display" : "Becquerel",
          "target" : [
            {
              "code" : "Bq",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "kBq",
          "display" : "kiloBecquerel",
          "target" : [
            {
              "code" : "kBq",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "MBq",
          "display" : "megaBecquerel",
          "target" : [
            {
              "code" : "MBq",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "GBq",
          "display" : "gigaBecquerel",
          "target" : [
            {
              "code" : "GBq",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "%",
          "display" : "percent",
          "target" : [
            {
              "code" : "%",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "ng",
          "display" : "nanogram",
          "target" : [
            {
              "code" : "ng",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "ug",
          "display" : "microgram",
          "target" : [
            {
              "code" : "mcg",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "mg",
          "display" : "milligram",
          "target" : [
            {
              "code" : "mg",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "g",
          "display" : "gram",
          "target" : [
            {
              "code" : "g",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "kg",
          "display" : "kilogram",
          "target" : [
            {
              "code" : "kg",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "kcal",
          "display" : "kilocalorie",
          "target" : [
            {
              "code" : "kcal",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "kJ",
          "display" : "kilojoule",
          "target" : [
            {
              "code" : "kJ",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "meq",
          "display" : "milliequivalent",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "nmol",
          "display" : "nanomole",
          "target" : [
            {
              "code" : "nmol",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "umol",
          "display" : "micromole",
          "target" : [
            {
              "code" : "mcmol",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "mmol",
          "display" : "millimole",
          "target" : [
            {
              "code" : "mmol",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "mol",
          "display" : "mole",
          "target" : [
            {
              "code" : "mol",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "nL",
          "display" : "nanoliter",
          "target" : [
            {
              "equivalence" : "unmatched",
              "comment" : "Although CdTyp9 has no code for nanoliter, other units of volume, e.g. liter, are present and can be used by applying a transformation to the value."
            }
          ]
        },
        {
          "code" : "uL",
          "display" : "microliter",
          "target" : [
            {
              "code" : "mcl",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "mL",
          "display" : "milliliter",
          "target" : [
            {
              "code" : "ml",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "L",
          "display" : "liter",
          "target" : [
            {
              "code" : "L",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "mm2",
          "display" : "square millimeter",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "cm",
          "display" : "centimeter",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "cm2",
          "display" : "square centimeter",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "cm3",
          "display" : "cubic centimeter",
          "target" : [
            {
              "code" : "ml",
              "equivalence" : "equivalent",
              "comment" : "Although CdTyp9 has no code for cubic centimeter, 1 cubic centimeter is equivalent to 1 milliliter, which is present."
            }
          ]
        },
        {
          "code" : "[tbs_m]",
          "display" : "tablespoon - metric",
          "target" : [
            {
              "code" : "EL",
              "equivalence" : "equal",
              "comment" : "Esslöffel (EL) is the German translation of the metric tablespoon."
            }
          ]
        },
        {
          "code" : "10*6.[iU]",
          "display" : "MillionInternationalUnit",
          "target" : [
            {
              "code" : "Mio UI",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "[ppm]",
          "display" : "Parts Per Million",
          "target" : [
            {
              "equivalence" : "unmatched"
            }
          ]
        },
        {
          "code" : "[tsp_m]",
          "display" : "teaspoon - metric",
          "target" : [
            {
              "code" : "TL",
              "equivalence" : "equal",
              "comment" : "Teelöffel (TL) is the German translation of the metric teaspoon."
            }
          ]
        },
        {
          "code" : "[iU]",
          "display" : "international unit",
          "target" : [
            {
              "code" : "UI",
              "equivalence" : "equal"
            }
          ]
        },
        {
          "code" : "[CFU]",
          "display" : "Colony Forming Units",
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
