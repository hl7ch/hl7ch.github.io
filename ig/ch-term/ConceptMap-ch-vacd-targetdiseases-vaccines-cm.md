# TargetDisease To VaccineCode Mapping - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TargetDisease To VaccineCode Mapping**

## ConceptMap: TargetDisease To VaccineCode Mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-targetdiseases-vaccines-cm | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:TargetDiseaseToVaccineCodeMapping |
| **Copyright/Legal**: This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org. | |

 
Mappings from TargetDisease to VaccineCode according to the correcsponding valuesets 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "ch-vacd-targetdiseases-vaccines-cm",
  "url" : "http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-targetdiseases-vaccines-cm",
  "version" : "3.3.0",
  "name" : "TargetDiseaseToVaccineCodeMapping",
  "title" : "TargetDisease To VaccineCode Mapping",
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
  "description" : "Mappings from TargetDisease to VaccineCode according to the correcsponding valuesets",
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
  "copyright" : "This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org.",
  "sourceUri" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-targetdiseasesandillnessesundergoneforimmunization-vs",
  "targetUri" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-vaccines-vs",
  "group" : [
    {
      "id" : "group1",
      "source" : "http://snomed.info/sct",
      "target" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-cs",
      "element" : [
        {
          "code" : "397430003",
          "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
          "target" : [
            {
              "code" : "619",
              "display" : "Infanrix DTPa-IPV+Hib",
              "equivalence" : "relatedto"
            },
            {
              "code" : "638",
              "display" : "Infanrix DTPa-IPV",
              "equivalence" : "relatedto"
            },
            {
              "code" : "612",
              "display" : "Tetravac",
              "equivalence" : "relatedto"
            },
            {
              "code" : "600",
              "display" : "DiTe Anatoxal Erwachsene / Adultes",
              "equivalence" : "relatedto"
            },
            {
              "code" : "613",
              "display" : "Pentavac",
              "equivalence" : "relatedto"
            },
            {
              "code" : "690",
              "display" : "DiTe Anatoxal N Erwachsene / Adultes",
              "equivalence" : "relatedto"
            },
            {
              "code" : "567",
              "display" : "Ditanrix",
              "equivalence" : "relatedto"
            },
            {
              "code" : "702",
              "display" : "Td-pur",
              "equivalence" : "relatedto"
            },
            {
              "code" : "644",
              "display" : "Hexavac",
              "equivalence" : "relatedto"
            },
            {
              "code" : "640",
              "display" : "Infanrix hexa",
              "equivalence" : "relatedto"
            },
            {
              "code" : "646",
              "display" : "Revaxis",
              "equivalence" : "relatedto"
            },
            {
              "code" : "637",
              "display" : "Boostrix",
              "equivalence" : "relatedto"
            },
            {
              "code" : "686",
              "display" : "Td-Virelon",
              "equivalence" : "relatedto"
            },
            {
              "code" : "681",
              "display" : "Boostrix Polio",
              "equivalence" : "relatedto"
            },
            {
              "code" : "711",
              "display" : "DiTe pediatric adsorbed",
              "equivalence" : "relatedto"
            },
            {
              "code" : "711-01",
              "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
              "equivalence" : "relatedto"
            },
            {
              "code" : "711-02",
              "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Erwachsene und Kinder ab 7 Jahren",
              "equivalence" : "relatedto"
            },
            {
              "code" : "66940",
              "display" : "Vaxelis",
              "equivalence" : "relatedto"
            },
            {
              "code" : "68317",
              "display" : "Adacel 0.5 ml",
              "equivalence" : "relatedto"
            },
            {
              "code" : "68110",
              "display" : "Adacel-Polio 0.5 ml",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "76902006",
          "display" : "Tetanus (disorder)",
          "target" : [
            {
              "code" : "619",
              "display" : "Infanrix DTPa-IPV+Hib",
              "equivalence" : "relatedto"
            },
            {
              "code" : "638",
              "display" : "Infanrix DTPa-IPV",
              "equivalence" : "relatedto"
            },
            {
              "code" : "612",
              "display" : "Tetravac",
              "equivalence" : "relatedto"
            },
            {
              "code" : "600",
              "display" : "DiTe Anatoxal Erwachsene / Adultes",
              "equivalence" : "relatedto"
            },
            {
              "code" : "613",
              "display" : "Pentavac",
              "equivalence" : "relatedto"
            },
            {
              "code" : "690",
              "display" : "DiTe Anatoxal N Erwachsene / Adultes",
              "equivalence" : "relatedto"
            },
            {
              "code" : "567",
              "display" : "Ditanrix",
              "equivalence" : "relatedto"
            },
            {
              "code" : "702",
              "display" : "Td-pur",
              "equivalence" : "relatedto"
            },
            {
              "code" : "644",
              "display" : "Hexavac",
              "equivalence" : "relatedto"
            },
            {
              "code" : "640",
              "display" : "Infanrix hexa",
              "equivalence" : "relatedto"
            },
            {
              "code" : "707",
              "display" : "Tetanol pur",
              "equivalence" : "relatedto"
            },
            {
              "code" : "646",
              "display" : "Revaxis",
              "equivalence" : "relatedto"
            },
            {
              "code" : "637",
              "display" : "Boostrix",
              "equivalence" : "relatedto"
            },
            {
              "code" : "686",
              "display" : "Td-Virelon",
              "equivalence" : "relatedto"
            },
            {
              "code" : "689",
              "display" : "Te Anatoxal N",
              "equivalence" : "relatedto"
            },
            {
              "code" : "681",
              "display" : "Boostrix Polio",
              "equivalence" : "relatedto"
            },
            {
              "code" : "711",
              "display" : "DiTe pediatric adsorbed",
              "equivalence" : "relatedto"
            },
            {
              "code" : "711-01",
              "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
              "equivalence" : "relatedto"
            },
            {
              "code" : "711-02",
              "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Erwachsene und Kinder ab 7 Jahren",
              "equivalence" : "relatedto"
            },
            {
              "code" : "68317",
              "display" : "Adacel 0.5 ml",
              "equivalence" : "relatedto"
            },
            {
              "code" : "68110",
              "display" : "Adacel-Polio 0.5 ml",
              "equivalence" : "relatedto"
            },
            {
              "code" : "66940",
              "display" : "Vaxelis",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "27836007",
          "display" : "Pertussis (disorder)",
          "target" : [
            {
              "code" : "619",
              "display" : "Infanrix DTPa-IPV+Hib",
              "equivalence" : "relatedto"
            },
            {
              "code" : "640",
              "display" : "Infanrix hexa",
              "equivalence" : "relatedto"
            },
            {
              "code" : "638",
              "display" : "Infanrix DTPa-IPV",
              "equivalence" : "relatedto"
            },
            {
              "code" : "612",
              "display" : "Tetravac",
              "equivalence" : "relatedto"
            },
            {
              "code" : "637",
              "display" : "Boostrix",
              "equivalence" : "relatedto"
            },
            {
              "code" : "613",
              "display" : "Pentavac",
              "equivalence" : "relatedto"
            },
            {
              "code" : "681",
              "display" : "Boostrix Polio",
              "equivalence" : "relatedto"
            },
            {
              "code" : "644",
              "display" : "Hexavac",
              "equivalence" : "relatedto"
            },
            {
              "code" : "68317",
              "display" : "Adacel 0.5 ml",
              "equivalence" : "relatedto"
            },
            {
              "code" : "68110",
              "display" : "Adacel-Polio 0.5 ml",
              "equivalence" : "relatedto"
            },
            {
              "code" : "66940",
              "display" : "Vaxelis",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "398102009",
          "display" : "Acute poliomyelitis (disorder)",
          "target" : [
            {
              "code" : "619",
              "display" : "Infanrix DTPa-IPV+Hib",
              "equivalence" : "relatedto"
            },
            {
              "code" : "640",
              "display" : "Infanrix hexa",
              "equivalence" : "relatedto"
            },
            {
              "code" : "638",
              "display" : "Infanrix DTPa-IPV",
              "equivalence" : "relatedto"
            },
            {
              "code" : "669",
              "display" : "Poliorix",
              "equivalence" : "relatedto"
            },
            {
              "code" : "612",
              "display" : "Tetravac",
              "equivalence" : "relatedto"
            },
            {
              "code" : "646",
              "display" : "Revaxis",
              "equivalence" : "relatedto"
            },
            {
              "code" : "613",
              "display" : "Pentavac",
              "equivalence" : "relatedto"
            },
            {
              "code" : "686",
              "display" : "Td-Virelon",
              "equivalence" : "relatedto"
            },
            {
              "code" : "681",
              "display" : "Boostrix Polio",
              "equivalence" : "relatedto"
            },
            {
              "code" : "644",
              "display" : "Hexavac",
              "equivalence" : "relatedto"
            },
            {
              "code" : "68110",
              "display" : "Adacel-Polio 0.5 ml",
              "equivalence" : "relatedto"
            },
            {
              "code" : "66940",
              "display" : "Vaxelis",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "709410003",
          "display" : "Haemophilus influenzae type b infection (disorder)",
          "target" : [
            {
              "code" : "619",
              "display" : "Infanrix DTPa-IPV+Hib",
              "equivalence" : "relatedto"
            },
            {
              "code" : "640",
              "display" : "Infanrix hexa",
              "equivalence" : "relatedto"
            },
            {
              "code" : "603",
              "display" : "Hiberix",
              "equivalence" : "relatedto"
            },
            {
              "code" : "613",
              "display" : "Pentavac",
              "equivalence" : "relatedto"
            },
            {
              "code" : "644",
              "display" : "Hexavac",
              "equivalence" : "relatedto"
            },
            {
              "code" : "66940",
              "display" : "Vaxelis",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "40468003",
          "display" : "Viral hepatitis, type A (disorder)",
          "target" : [
            {
              "code" : "558",
              "display" : "Havrix 1440",
              "equivalence" : "relatedto"
            },
            {
              "code" : "599",
              "display" : "Havrix 720",
              "equivalence" : "relatedto"
            },
            {
              "code" : "592",
              "display" : "Twinrix 720/20",
              "equivalence" : "relatedto"
            },
            {
              "code" : "572",
              "display" : "Epaxal",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "66071002",
          "display" : "Viral hepatitis type B (disorder)",
          "target" : [
            {
              "code" : "640",
              "display" : "Infanrix hexa",
              "equivalence" : "relatedto"
            },
            {
              "code" : "528",
              "display" : "Gen H-B-Vax 10",
              "equivalence" : "relatedto"
            },
            {
              "code" : "544",
              "display" : "Heprecomb",
              "equivalence" : "relatedto"
            },
            {
              "code" : "551",
              "display" : "Engerix-B 10",
              "equivalence" : "relatedto"
            },
            {
              "code" : "610",
              "display" : "Gen H-B-Vax 5",
              "equivalence" : "relatedto"
            },
            {
              "code" : "663",
              "display" : "HBVAXPRO 10",
              "equivalence" : "relatedto"
            },
            {
              "code" : "545",
              "display" : "HBVAXPRO 40",
              "equivalence" : "relatedto"
            },
            {
              "code" : "534",
              "display" : "Engerix-B 20",
              "equivalence" : "relatedto"
            },
            {
              "code" : "592",
              "display" : "Twinrix 720/20",
              "equivalence" : "relatedto"
            },
            {
              "code" : "642",
              "display" : "Heprecomb Kinder",
              "equivalence" : "relatedto"
            },
            {
              "code" : "644",
              "display" : "Hexavac",
              "equivalence" : "relatedto"
            },
            {
              "code" : "66940",
              "display" : "Vaxelis",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "14189004",
          "display" : "Measles (disorder)",
          "target" : [
            {
              "code" : "268",
              "display" : "MMR-II",
              "equivalence" : "relatedto"
            },
            {
              "code" : "483",
              "display" : "Rimevax",
              "equivalence" : "relatedto"
            },
            {
              "code" : "703",
              "display" : "MMRVaxPro",
              "equivalence" : "relatedto"
            },
            {
              "code" : "58506",
              "display" : "Measles vaccine live",
              "equivalence" : "relatedto"
            },
            {
              "code" : "533",
              "display" : "Moraten",
              "equivalence" : "relatedto"
            },
            {
              "code" : "615",
              "display" : "Priorix",
              "equivalence" : "relatedto"
            },
            {
              "code" : "58158",
              "display" : "Priorix-Tetra",
              "equivalence" : "relatedto"
            },
            {
              "code" : "699",
              "display" : "ProQuad",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "36989005",
          "display" : "Mumps (disorder)",
          "target" : [
            {
              "code" : "268",
              "display" : "MMR-II",
              "equivalence" : "relatedto"
            },
            {
              "code" : "247",
              "display" : "Mumpsvax",
              "equivalence" : "relatedto"
            },
            {
              "code" : "703",
              "display" : "MMRVaxPro",
              "equivalence" : "relatedto"
            },
            {
              "code" : "615",
              "display" : "Priorix",
              "equivalence" : "relatedto"
            },
            {
              "code" : "58158",
              "display" : "Priorix-Tetra",
              "equivalence" : "relatedto"
            },
            {
              "code" : "699",
              "display" : "ProQuad",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "36653000",
          "display" : "Rubella (disorder)",
          "target" : [
            {
              "code" : "268",
              "display" : "MMR-II",
              "equivalence" : "relatedto"
            },
            {
              "code" : "703",
              "display" : "MMRVaxPro",
              "equivalence" : "relatedto"
            },
            {
              "code" : "615",
              "display" : "Priorix",
              "equivalence" : "relatedto"
            },
            {
              "code" : "58158",
              "display" : "Priorix-Tetra",
              "equivalence" : "relatedto"
            },
            {
              "code" : "699",
              "display" : "ProQuad",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "712986001",
          "display" : "Central European encephalitis (disorder)",
          "target" : [
            {
              "code" : "628",
              "display" : "Encepur N Kinder / Enfants",
              "equivalence" : "relatedto"
            },
            {
              "code" : "627",
              "display" : "Encepur N",
              "equivalence" : "relatedto"
            },
            {
              "code" : "683",
              "display" : "FSME-Immun 0.25 ml Junior",
              "equivalence" : "relatedto"
            },
            {
              "code" : "450",
              "display" : "FSME-Immun CC",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "23511006",
          "display" : "Meningococcal infectious disease (disorder)",
          "target" : [
            {
              "code" : "654",
              "display" : "Meningitec",
              "equivalence" : "relatedto"
            },
            {
              "code" : "62502",
              "display" : "Menveo",
              "equivalence" : "relatedto"
            },
            {
              "code" : "656",
              "display" : "NeisVac-C",
              "equivalence" : "relatedto"
            },
            {
              "code" : "652",
              "display" : "Mencevax ACWY",
              "equivalence" : "relatedto"
            },
            {
              "code" : "657",
              "display" : "Menjugate",
              "equivalence" : "relatedto"
            },
            {
              "code" : "65730",
              "display" : "Bexsero",
              "equivalence" : "relatedto"
            },
            {
              "code" : "68221",
              "display" : "MenQuadfi",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "719590007",
          "display" : "Influenza caused by seasonal influenza virus (disorder)",
          "target" : [
            {
              "code" : "583",
              "display" : "Fluarix",
              "equivalence" : "relatedto"
            },
            {
              "code" : "614",
              "display" : "Inflexal V",
              "equivalence" : "relatedto"
            },
            {
              "code" : "58271",
              "display" : "Optaflu",
              "equivalence" : "relatedto"
            },
            {
              "code" : "660",
              "display" : "Influvac plus",
              "equivalence" : "relatedto"
            },
            {
              "code" : "373",
              "display" : "Mutagrip",
              "equivalence" : "relatedto"
            },
            {
              "code" : "62961",
              "display" : "Fluarix Tetra",
              "equivalence" : "relatedto"
            },
            {
              "code" : "58317",
              "display" : "Fluad",
              "equivalence" : "relatedto"
            },
            {
              "code" : "59267",
              "display" : "Agrippal",
              "equivalence" : "relatedto"
            },
            {
              "code" : "485",
              "display" : "Influvac",
              "equivalence" : "relatedto"
            },
            {
              "code" : "66427",
              "display" : "VaxigripTetra",
              "equivalence" : "relatedto"
            },
            {
              "code" : "68087",
              "display" : "Influvac Tetra",
              "equivalence" : "relatedto"
            },
            {
              "code" : "67482",
              "display" : "Flucelvax Tetra",
              "equivalence" : "relatedto"
            },
            {
              "code" : "67704",
              "display" : "Efluelda 0.7 ml",
              "equivalence" : "relatedto"
            },
            {
              "code" : "68003",
              "display" : "Supemtek 0.5 ml",
              "equivalence" : "relatedto"
            },
            {
              "code" : "68462",
              "display" : "Fluenz Tetra",
              "equivalence" : "relatedto"
            },
            {
              "code" : "70042",
              "display" : "Influenza caused by seasonal influenza virus (disorder)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "69992",
              "display" : "Influenza caused by seasonal influenza virus (disorder)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "63650001",
          "display" : "Cholera (disorder)",
          "target" : [
            {
              "code" : "704",
              "display" : "Dukoral",
              "equivalence" : "relatedto"
            },
            {
              "code" : "555",
              "display" : "Orochol",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "14168008",
          "display" : "Rabies (disorder)",
          "target" : [
            {
              "code" : "685",
              "display" : "Rabipur",
              "equivalence" : "relatedto"
            },
            {
              "code" : "417",
              "display" : "Tollwut Impfstoff Mérieux",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "4834000",
          "display" : "Typhoid fever (disorder)",
          "target" : [
            {
              "code" : "467",
              "display" : "Vivotif",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "38907003",
          "display" : "Varicella (disorder)",
          "target" : [
            {
              "code" : "688",
              "display" : "Varivax",
              "equivalence" : "relatedto"
            },
            {
              "code" : "585",
              "display" : "Varilrix",
              "equivalence" : "relatedto"
            },
            {
              "code" : "58158",
              "display" : "Priorix-Tetra",
              "equivalence" : "relatedto"
            },
            {
              "code" : "699",
              "display" : "ProQuad",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "56717001",
          "display" : "Tuberculosis (disorder)",
          "target" : [
            {
              "code" : "696",
              "display" : "BCG SSI",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "16541001",
          "display" : "Yellow fever (disorder)",
          "target" : [
            {
              "code" : "520",
              "display" : "Stamaril",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "16814004",
          "display" : "Pneumococcal infectious disease (disorder)",
          "target" : [
            {
              "code" : "60129",
              "display" : "Prevenar 13",
              "equivalence" : "relatedto"
            },
            {
              "code" : "643",
              "display" : "Prevenar-7",
              "equivalence" : "relatedto"
            },
            {
              "code" : "509",
              "display" : "Pneumovax-23",
              "equivalence" : "relatedto"
            },
            {
              "code" : "68752",
              "display" : "Vaxneuvance",
              "equivalence" : "relatedto"
            },
            {
              "code" : "69222",
              "display" : "Prevenar 20",
              "equivalence" : "relatedto"
            },
            {
              "code" : "69781",
              "display" : "Capvaxive, Injektionslösung in Fertigspritze MSD Merck Sharp & Dohme AG",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "240532009",
          "display" : "Human papillomavirus infection (disorder)",
          "target" : [
            {
              "code" : "57735",
              "display" : "Gardasil",
              "equivalence" : "relatedto"
            },
            {
              "code" : "65387",
              "display" : "Gardasil 9",
              "equivalence" : "relatedto"
            },
            {
              "code" : "57814",
              "display" : "Cervarix",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "4740000",
          "display" : "Herpes zoster (disorder)",
          "target" : [
            {
              "code" : "67987",
              "display" : "Shingrix",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "18624000",
          "display" : "Disease caused by Rotavirus (disorder)",
          "target" : [
            {
              "code" : "60150",
              "display" : "Rotarix",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "52947006",
          "display" : "Japanese encephalitis virus disease (disorder)",
          "target" : [
            {
              "code" : "59147",
              "display" : "Ixiaro",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "840539006",
          "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
          "target" : [
            {
              "code" : "68225",
              "display" : "Comirnaty (COVID-19 Vaccine, Pfizer)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "68267",
              "display" : "Spikevax (COVID-19 Vaccine, Moderna)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "68235",
              "display" : "COVID-19 Vaccine Janssen",
              "equivalence" : "relatedto"
            },
            {
              "code" : "68473",
              "display" : "Nuvaxovid 0.5 ml",
              "equivalence" : "relatedto"
            },
            {
              "code" : "68710-01",
              "display" : "Comirnaty® 30 Mikrogramm/Dosis",
              "equivalence" : "relatedto"
            },
            {
              "code" : "68710-02",
              "display" : "Comirnaty® 10 Mikrogramm/Dosis",
              "equivalence" : "relatedto"
            },
            {
              "code" : "68710-03",
              "display" : "Comirnaty® 3 Mikrogramm/Dosis",
              "equivalence" : "relatedto"
            },
            {
              "code" : "69009",
              "display" : "Spikevax Bivalent Original / Omicron",
              "equivalence" : "relatedto"
            },
            {
              "code" : "69123",
              "display" : "Spikevax Bivalent Original / Omicron 10 mg/ml, Fertigspritze",
              "equivalence" : "relatedto"
            },
            {
              "code" : "69010",
              "display" : "Spikevax, Fertigspritze",
              "equivalence" : "relatedto"
            },
            {
              "code" : "69047",
              "display" : "Comirnaty® Original/Omicron BA.1 15/15 µg pro Dosis",
              "equivalence" : "relatedto"
            },
            {
              "code" : "69127",
              "display" : "Comirnaty Original/Omicron BA. 4-5 0.225 mg",
              "equivalence" : "relatedto"
            },
            {
              "code" : "69189",
              "display" : "Spikevax Bivalent Original / Omicron BA.4-5",
              "equivalence" : "relatedto"
            },
            {
              "code" : "69211",
              "display" : "Spikevax Bivalent Original / Omicron BA.4-5, Fertigspritze",
              "equivalence" : "relatedto"
            },
            {
              "code" : "69465",
              "display" : "Spikevax XBB.1.5 0.10 mg/ml",
              "equivalence" : "relatedto"
            },
            {
              "code" : "69484",
              "display" : "Spikevax XBB.1.5 0.10 mg/ml",
              "equivalence" : "relatedto"
            },
            {
              "code" : "69488",
              "display" : "Comirnaty Omicron XBB.1.5 (30 Mikrogramm)/Dosis",
              "equivalence" : "relatedto"
            },
            {
              "code" : "69815",
              "display" : "Comirnaty Omicron XBB.1.5, 0.042 mg",
              "equivalence" : "relatedto"
            },
            {
              "code" : "69913",
              "display" : "Comirnaty JN.1 0.042 mg, Injektionsdispersion in einer Fertigspritze, Pfizer AG",
              "equivalence" : "relatedto"
            },
            {
              "code" : "69912-01",
              "display" : "Comirnaty JN.1 30 μg, Injektionsdispersion, Pfizer AG",
              "equivalence" : "relatedto"
            },
            {
              "code" : "69912-02",
              "display" : "Comirnaty JN.1 10 μg, Injektionsdispersion, Pfizer AG",
              "equivalence" : "relatedto"
            },
            {
              "code" : "69788",
              "display" : "Spikevax JN.1 (mRNA-1273.167), 0.10mg/ml, Dispersion zur Injektion, Moderna Switzerland GmbH",
              "equivalence" : "relatedto"
            },
            {
              "code" : "70205",
              "display" : "Spikevax LP.8.1 Moderna Switzerland GmbH",
              "equivalence" : "relatedto"
            },
            {
              "code" : "70400",
              "display" : "Comirnaty LP.8.1 10 μg, Injektionsdispersion Pfizer AG",
              "equivalence" : "relatedto"
            },
            {
              "code" : "70403",
              "display" : "Comirnaty LP.8.1 30 Mikrogramm, Injektionsdispersion in einer Fertigspritze Pfizer AG'",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "719865001",
          "display" : "Influenza caused by pandemic influenza virus (disorder)",
          "target" : [
            {
              "code" : "66161",
              "display" : "Foclivia (Durchstechflasche)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "66156",
              "display" : "Foclivia (Fertigspritze)",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "37109004",
          "display" : "Ebola virus disease (disorder)",
          "target" : [
            {
              "code" : "68358",
              "display" : "Ervebo, Injektionslösung",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "860805006",
          "display" : "Encephalomyelitis caused by Neisseria meningitidis (disorder)",
          "target" : [
            {
              "code" : "66037",
              "display" : "Menjugate liquid",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "359814004",
          "display" : "Monkeypox (disorder)",
          "target" : [
            {
              "code" : "69173",
              "display" : "Jynneos",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "67924001",
          "display" : "Smallpox (disorder)",
          "target" : [
            {
              "code" : "69173",
              "display" : "Jynneos",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "55735004",
          "display" : "Respiratory syncytial virus infection (disorder)",
          "target" : [
            {
              "code" : "69310",
              "display" : "AREXVY",
              "equivalence" : "relatedto"
            },
            {
              "code" : "69691",
              "display" : "Abrysvo",
              "equivalence" : "relatedto"
            },
            {
              "code" : "69995-01",
              "display" : "mResvia Respiratorisches-Synzytial-Virus (RSV) Vakzin 0.10 mg/ml, Injektionsdispersion\tModerna Switzerland GmbH",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "38362002",
          "display" : "Dengue (disorder)",
          "target" : [
            {
              "code" : "69403",
              "display" : "Qdenga 0.5 ml",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "442438000",
          "display" : "Influenza caused by Influenza A virus (disorder)",
          "target" : [
            {
              "code" : "69863-01",
              "display" : "Efluelda TIV 0.5 mL, suspension injectable en seringue pré-remplie\tSanofi-Aventis (Suisse) SA",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "442696006",
          "display" : "Influenza caused by Influenza A virus subtype H1N1 (disorder)",
          "target" : [
            {
              "code" : "69863-01",
              "display" : "Efluelda TIV 0.5 mL, suspension injectable en seringue pré-remplie\tSanofi-Aventis (Suisse) SA",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "772810003",
          "display" : "Influenza caused by Influenza A virus subtype H3N2 (disorder)",
          "target" : [
            {
              "code" : "69863-01",
              "display" : "Efluelda TIV 0.5 mL, suspension injectable en seringue pré-remplie\tSanofi-Aventis (Suisse) SA",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "24662006",
          "display" : "Influenza caused by Influenza B virus (disorder)",
          "target" : [
            {
              "code" : "69863-01",
              "display" : "Efluelda TIV 0.5 mL, suspension injectable en seringue pré-remplie\tSanofi-Aventis (Suisse) SA",
              "equivalence" : "relatedto"
            }
          ]
        }
      ]
    },
    {
      "id" : "group2",
      "source" : "http://snomed.info/sct",
      "target" : "http://snomed.info/sct",
      "element" : [
        {
          "code" : "111852003",
          "display" : "Vaccinia (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "34014006",
          "display" : "Viral disease (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "87628006",
          "display" : "Bacterial infectious disease (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "422400008",
          "display" : "Vomiting (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "6142004",
          "display" : "Influenza (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "85904008",
          "display" : "Paratyphoid fever (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "409498004",
          "display" : "Anthrax (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "721758001",
          "display" : "Infection caused by Coxiella (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "25225006",
          "display" : "Disease caused by Adenovirus (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "721734000",
          "display" : "Infection caused by Francisella (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "77377001",
          "display" : "Leptospirosis (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "715507005",
          "display" : "Infection of central nervous system caused by Borrelia burgdorferi (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "721778009",
          "display" : "Infection caused by Junin virus (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "19265001",
          "display" : "Tularemia (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "58750007",
          "display" : "Plague (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "772828001",
          "display" : "Influenza caused by Influenza A virus subtype H5N1 (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "7180009",
          "display" : "Meningitis (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "186772009",
          "display" : "Rocky Mountain spotted fever (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "37246009",
          "display" : "Disease caused by rickettsiae (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "56038003",
          "display" : "Staphylococcal infectious disease (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "373437006",
          "display" : "Infection caused by Mycobacterium bovis (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "53648006",
          "display" : "Disease caused by Enterovirus (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "62676009",
          "display" : "Falciparum malaria (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "713456006",
          "display" : "Infection caused by Human enterovirus 71 (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "95896000",
          "display" : "Protozoan infection (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "56688005",
          "display" : "Clostridial infection (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        },
        {
          "code" : "83436008",
          "display" : "Yersiniosis (disorder)",
          "target" : [
            {
              "code" : "787859002",
              "display" : "Vaccine product (medicinal product)",
              "equivalence" : "relatedto",
              "comment" : "TODO: mapping needed"
            }
          ]
        }
      ]
    },
    {
      "id" : "group3",
      "source" : "http://snomed.info/sct",
      "target" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-myvaccines-cs",
      "element" : [
        {
          "code" : "397430003",
          "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
          "target" : [
            {
              "code" : "93",
              "display" : "Infanrix DTPa-HBV",
              "equivalence" : "relatedto"
            },
            {
              "code" : "99",
              "display" : "Pentacoq",
              "equivalence" : "relatedto"
            },
            {
              "code" : "73",
              "display" : "Infanrix DTPa+Hib",
              "equivalence" : "relatedto"
            },
            {
              "code" : "80",
              "display" : "Anatoxal DiTe Erwachsene",
              "equivalence" : "relatedto"
            },
            {
              "code" : "126",
              "display" : "Ditanrix pediatric",
              "equivalence" : "relatedto"
            },
            {
              "code" : "81",
              "display" : "Anatoxal DiTe N Erwachsene",
              "equivalence" : "relatedto"
            },
            {
              "code" : "154",
              "display" : "DiTe Anatoxal Kinder / Enfants",
              "equivalence" : "relatedto"
            },
            {
              "code" : "107",
              "display" : "Tetramune",
              "equivalence" : "relatedto"
            },
            {
              "code" : "82",
              "display" : "Anatoxal Di",
              "equivalence" : "relatedto"
            },
            {
              "code" : "35",
              "display" : "Infanrix DTPa",
              "equivalence" : "relatedto"
            },
            {
              "code" : "142",
              "display" : "Prohibit DTP",
              "equivalence" : "relatedto"
            },
            {
              "code" : "39",
              "display" : "Infanrix Penta",
              "equivalence" : "relatedto"
            },
            {
              "code" : "106",
              "display" : "Tetracoq",
              "equivalence" : "relatedto"
            },
            {
              "code" : "166",
              "display" : "Infanrix",
              "equivalence" : "relatedto"
            },
            {
              "code" : "134",
              "display" : "Anatoxal DiTe Kinder",
              "equivalence" : "relatedto"
            },
            {
              "code" : "79",
              "display" : "Anatoxal DiTePer",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76",
              "display" : "Acel Immune",
              "equivalence" : "relatedto"
            },
            {
              "code" : "155",
              "display" : "DiTePer Anatoxal",
              "equivalence" : "relatedto"
            },
            {
              "code" : "151",
              "display" : "Di Anatoxal",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "76902006",
          "display" : "Tetanus (disorder)",
          "target" : [
            {
              "code" : "93",
              "display" : "Infanrix DTPa-HBV",
              "equivalence" : "relatedto"
            },
            {
              "code" : "99",
              "display" : "Pentacoq",
              "equivalence" : "relatedto"
            },
            {
              "code" : "73",
              "display" : "Infanrix DTPa+Hib",
              "equivalence" : "relatedto"
            },
            {
              "code" : "80",
              "display" : "Anatoxal DiTe Erwachsene",
              "equivalence" : "relatedto"
            },
            {
              "code" : "84",
              "display" : "Anatoxal Te N",
              "equivalence" : "relatedto"
            },
            {
              "code" : "126",
              "display" : "Ditanrix pediatric",
              "equivalence" : "relatedto"
            },
            {
              "code" : "81",
              "display" : "Anatoxal DiTe N Erwachsene",
              "equivalence" : "relatedto"
            },
            {
              "code" : "154",
              "display" : "DiTe Anatoxal Kinder / Enfants",
              "equivalence" : "relatedto"
            },
            {
              "code" : "83",
              "display" : "Anatoxal Te",
              "equivalence" : "relatedto"
            },
            {
              "code" : "107",
              "display" : "Tetramune",
              "equivalence" : "relatedto"
            },
            {
              "code" : "168",
              "display" : "Tanrix",
              "equivalence" : "relatedto"
            },
            {
              "code" : "35",
              "display" : "Infanrix DTPa",
              "equivalence" : "relatedto"
            },
            {
              "code" : "142",
              "display" : "Prohibit DTP",
              "equivalence" : "relatedto"
            },
            {
              "code" : "39",
              "display" : "Infanrix Penta",
              "equivalence" : "relatedto"
            },
            {
              "code" : "106",
              "display" : "Tetracoq",
              "equivalence" : "relatedto"
            },
            {
              "code" : "166",
              "display" : "Infanrix",
              "equivalence" : "relatedto"
            },
            {
              "code" : "134",
              "display" : "Anatoxal DiTe Kinder",
              "equivalence" : "relatedto"
            },
            {
              "code" : "79",
              "display" : "Anatoxal DiTePer",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76",
              "display" : "Acel Immune",
              "equivalence" : "relatedto"
            },
            {
              "code" : "155",
              "display" : "DiTePer Anatoxal",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "27836007",
          "display" : "Pertussis (disorder)",
          "target" : [
            {
              "code" : "39",
              "display" : "Infanrix Penta",
              "equivalence" : "relatedto"
            },
            {
              "code" : "106",
              "display" : "Tetracoq",
              "equivalence" : "relatedto"
            },
            {
              "code" : "166",
              "display" : "Infanrix",
              "equivalence" : "relatedto"
            },
            {
              "code" : "93",
              "display" : "Infanrix DTPa-HBV",
              "equivalence" : "relatedto"
            },
            {
              "code" : "99",
              "display" : "Pentacoq",
              "equivalence" : "relatedto"
            },
            {
              "code" : "73",
              "display" : "Infanrix DTPa+Hib",
              "equivalence" : "relatedto"
            },
            {
              "code" : "79",
              "display" : "Anatoxal DiTePer",
              "equivalence" : "relatedto"
            },
            {
              "code" : "76",
              "display" : "Acel Immune",
              "equivalence" : "relatedto"
            },
            {
              "code" : "107",
              "display" : "Tetramune",
              "equivalence" : "relatedto"
            },
            {
              "code" : "155",
              "display" : "DiTePer Anatoxal",
              "equivalence" : "relatedto"
            },
            {
              "code" : "35",
              "display" : "Infanrix DTPa",
              "equivalence" : "relatedto"
            },
            {
              "code" : "142",
              "display" : "Prohibit DTP",
              "equivalence" : "relatedto"
            },
            {
              "code" : "77",
              "display" : "Acel P",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "398102009",
          "display" : "Acute poliomyelitis (disorder)",
          "target" : [
            {
              "code" : "39",
              "display" : "Infanrix Penta",
              "equivalence" : "relatedto"
            },
            {
              "code" : "102",
              "display" : "Polio Sabin",
              "equivalence" : "relatedto"
            },
            {
              "code" : "106",
              "display" : "Tetracoq",
              "equivalence" : "relatedto"
            },
            {
              "code" : "139",
              "display" : "Koprowski",
              "equivalence" : "relatedto"
            },
            {
              "code" : "148",
              "display" : "Polio Lilly",
              "equivalence" : "relatedto"
            },
            {
              "code" : "99",
              "display" : "Pentacoq",
              "equivalence" : "relatedto"
            },
            {
              "code" : "147",
              "display" : "Polio Koprowski (K1-K3)",
              "equivalence" : "relatedto"
            },
            {
              "code" : "138",
              "display" : "K1, K2, K3",
              "equivalence" : "relatedto"
            },
            {
              "code" : "101",
              "display" : "Polio Salk",
              "equivalence" : "relatedto"
            },
            {
              "code" : "17",
              "display" : "Poliomyelitis Impfstoff Berna",
              "equivalence" : "relatedto"
            },
            {
              "code" : "103",
              "display" : "Poloral",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "709410003",
          "display" : "Haemophilus influenzae type b infection (disorder)",
          "target" : [
            {
              "code" : "92",
              "display" : "HibTiter",
              "equivalence" : "relatedto"
            },
            {
              "code" : "78",
              "display" : "Act-Hib",
              "equivalence" : "relatedto"
            },
            {
              "code" : "99",
              "display" : "Pentacoq",
              "equivalence" : "relatedto"
            },
            {
              "code" : "73",
              "display" : "Infanrix DTPa+Hib",
              "equivalence" : "relatedto"
            },
            {
              "code" : "133",
              "display" : "ProHibit",
              "equivalence" : "relatedto"
            },
            {
              "code" : "107",
              "display" : "Tetramune",
              "equivalence" : "relatedto"
            },
            {
              "code" : "98",
              "display" : "Pedvax",
              "equivalence" : "relatedto"
            },
            {
              "code" : "142",
              "display" : "Prohibit DTP",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "40468003",
          "display" : "Viral hepatitis, type A (disorder)",
          "target" : [
            {
              "code" : "165",
              "display" : "Havrix junior",
              "equivalence" : "relatedto"
            },
            {
              "code" : "74",
              "display" : "Twinrix 360/10",
              "equivalence" : "relatedto"
            },
            {
              "code" : "115",
              "display" : "Havrix 360",
              "equivalence" : "relatedto"
            },
            {
              "code" : "110",
              "display" : "Vaqta",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "66071002",
          "display" : "Viral hepatitis type B (disorder)",
          "target" : [
            {
              "code" : "39",
              "display" : "Infanrix Penta",
              "equivalence" : "relatedto"
            },
            {
              "code" : "172",
              "display" : "Hepavax",
              "equivalence" : "relatedto"
            },
            {
              "code" : "118",
              "display" : "Hevac B",
              "equivalence" : "relatedto"
            },
            {
              "code" : "93",
              "display" : "Infanrix DTPa-HBV",
              "equivalence" : "relatedto"
            },
            {
              "code" : "164",
              "display" : "HBVAX DNA 40",
              "equivalence" : "relatedto"
            },
            {
              "code" : "53",
              "display" : "HBVAXPRO 5",
              "equivalence" : "relatedto"
            },
            {
              "code" : "170",
              "display" : "Engerix-B 40",
              "equivalence" : "relatedto"
            },
            {
              "code" : "74",
              "display" : "Twinrix 360/10",
              "equivalence" : "relatedto"
            },
            {
              "code" : "163",
              "display" : "HBVAX DNA 10",
              "equivalence" : "relatedto"
            },
            {
              "code" : "162",
              "display" : "HBVAX DNA 5",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "14189004",
          "display" : "Measles (disorder)",
          "target" : [
            {
              "code" : "14",
              "display" : "MoRu-Viraten",
              "equivalence" : "relatedto"
            },
            {
              "code" : "23",
              "display" : "Triviraten",
              "equivalence" : "relatedto"
            },
            {
              "code" : "47",
              "display" : "Attenuvax",
              "equivalence" : "relatedto"
            },
            {
              "code" : "119",
              "display" : "MMR-I",
              "equivalence" : "relatedto"
            },
            {
              "code" : "88",
              "display" : "Biviraten",
              "equivalence" : "relatedto"
            },
            {
              "code" : "75",
              "display" : "Pluserix",
              "equivalence" : "relatedto"
            },
            {
              "code" : "121",
              "display" : "Rimparix",
              "equivalence" : "relatedto"
            },
            {
              "code" : "120",
              "display" : "Moruman",
              "equivalence" : "relatedto"
            },
            {
              "code" : "127",
              "display" : "Eolarix",
              "equivalence" : "relatedto"
            },
            {
              "code" : "96",
              "display" : "MM Vax",
              "equivalence" : "relatedto"
            },
            {
              "code" : "123",
              "display" : "Trimovax",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "36989005",
          "display" : "Mumps (disorder)",
          "target" : [
            {
              "code" : "75",
              "display" : "Pluserix",
              "equivalence" : "relatedto"
            },
            {
              "code" : "97",
              "display" : "Mumaten",
              "equivalence" : "relatedto"
            },
            {
              "code" : "121",
              "display" : "Rimparix",
              "equivalence" : "relatedto"
            },
            {
              "code" : "96",
              "display" : "MM Vax",
              "equivalence" : "relatedto"
            },
            {
              "code" : "119",
              "display" : "MMR-I",
              "equivalence" : "relatedto"
            },
            {
              "code" : "123",
              "display" : "Trimovax",
              "equivalence" : "relatedto"
            },
            {
              "code" : "88",
              "display" : "Biviraten",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "36653000",
          "display" : "Rubella (disorder)",
          "target" : [
            {
              "code" : "117",
              "display" : "Almevax",
              "equivalence" : "relatedto"
            },
            {
              "code" : "14",
              "display" : "MoRu-Viraten",
              "equivalence" : "relatedto"
            },
            {
              "code" : "23",
              "display" : "Triviraten",
              "equivalence" : "relatedto"
            },
            {
              "code" : "91",
              "display" : "Ervevax",
              "equivalence" : "relatedto"
            },
            {
              "code" : "119",
              "display" : "MMR-I",
              "equivalence" : "relatedto"
            },
            {
              "code" : "75",
              "display" : "Pluserix",
              "equivalence" : "relatedto"
            },
            {
              "code" : "56",
              "display" : "Meruvax",
              "equivalence" : "relatedto"
            },
            {
              "code" : "127",
              "display" : "Eolarix",
              "equivalence" : "relatedto"
            },
            {
              "code" : "122",
              "display" : "Rubevac",
              "equivalence" : "relatedto"
            },
            {
              "code" : "123",
              "display" : "Trimovax",
              "equivalence" : "relatedto"
            },
            {
              "code" : "111",
              "display" : "Rubeaten",
              "equivalence" : "relatedto"
            },
            {
              "code" : "112",
              "display" : "Rudivax",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "712986001",
          "display" : "Central European encephalitis (disorder)",
          "target" : [
            {
              "code" : "128",
              "display" : "FSME-Immun Injekt",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "63650001",
          "display" : "Cholera (disorder)",
          "target" : [
            {
              "code" : "16",
              "display" : "Orochol E",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "14168008",
          "display" : "Rabies (disorder)",
          "target" : [
            {
              "code" : "94",
              "display" : "Lyssavac Berna",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "4834000",
          "display" : "Typhoid fever (disorder)",
          "target" : [
            {
              "code" : "25",
              "display" : "Vivotif L",
              "equivalence" : "relatedto"
            },
            {
              "code" : "143",
              "display" : "TAB oral",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "56717001",
          "display" : "Tuberculosis (disorder)",
          "target" : [
            {
              "code" : "87",
              "display" : "BCG Vaccin Mérieux",
              "equivalence" : "relatedto"
            },
            {
              "code" : "48",
              "display" : "BCG",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "16541001",
          "display" : "Yellow fever (disorder)",
          "target" : [
            {
              "code" : "86",
              "display" : "Arilvax",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "16814004",
          "display" : "Pneumococcal infectious disease (disorder)",
          "target" : [
            {
              "code" : "100",
              "display" : "Pnu-Immune",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "23511006",
          "display" : "Meningococcal infectious disease (disorder)",
          "target" : [
            {
              "code" : "55",
              "display" : "Meningokokken-Impfstoff A+C Mérieux",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "719865001",
          "display" : "Influenza caused by pandemic influenza virus (disorder)",
          "target" : [
            {
              "code" : "136",
              "display" : "Celtura",
              "equivalence" : "relatedto"
            },
            {
              "code" : "137",
              "display" : "Focetria",
              "equivalence" : "relatedto"
            },
            {
              "code" : "141",
              "display" : "Pandemrix",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "67924001",
          "display" : "Smallpox (disorder)",
          "target" : [
            {
              "code" : "169",
              "display" : "Vaccin variole",
              "equivalence" : "relatedto"
            },
            {
              "code" : "144",
              "display" : "Variola",
              "equivalence" : "relatedto"
            }
          ]
        }
      ]
    }
  ]
}

```
