# Swissmedic vaccine codes To TargetDisease Mapping - CH Term (R4) v3.4.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Swissmedic vaccine codes To TargetDisease Mapping**

## ConceptMap: Swissmedic vaccine codes To TargetDisease Mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-vaccines-sm-targetdiseases-cm | *Version*:3.4.0 |
| Active as of 2026-06-10 | *Computable Name*:SwissmedicToTargetDiseaseMapping |
| **Copyright/Legal**: This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org. | |

 
ConceptMap for mapping Swissmedic vaccine codes to TargetDisease according to the correcsponding valuesets 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "ch-vacd-vaccines-sm-targetdiseases-cm",
  "url" : "http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-vaccines-sm-targetdiseases-cm",
  "version" : "3.4.0",
  "name" : "SwissmedicToTargetDiseaseMapping",
  "title" : "Swissmedic vaccine codes To TargetDisease Mapping",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-10T10:00:23+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  },
  {
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/",
      "use" : "work"
    }]
  }],
  "description" : "ConceptMap for mapping Swissmedic vaccine codes to TargetDisease according to the correcsponding valuesets",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org.",
  "sourceUri" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-swissmedic-vaccines-vs",
  "targetUri" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-targetdiseasesandillnessesundergoneforimmunization-vs",
  "group" : [{
    "id" : "SwissmedicToTargetdisease",
    "source" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-cs",
    "target" : "http://snomed.info/sct",
    "element" : [{
      "code" : "683",
      "display" : "FSME-Immun 0.25 ml Junior",
      "target" : [{
        "code" : "712986001",
        "display" : "Central European encephalitis (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "450",
      "display" : "FSME-Immun CC",
      "target" : [{
        "code" : "712986001",
        "display" : "Central European encephalitis (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "656",
      "display" : "NeisVac-C",
      "target" : [{
        "code" : "23511006",
        "display" : "Meningococcal infectious disease (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "627",
      "display" : "Encepur N",
      "target" : [{
        "code" : "712986001",
        "display" : "Central European encephalitis (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "628",
      "display" : "Encepur N Kinder / Enfants",
      "target" : [{
        "code" : "712986001",
        "display" : "Central European encephalitis (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "572",
      "display" : "Epaxal",
      "target" : [{
        "code" : "40468003",
        "display" : "Viral hepatitis, type A (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "544",
      "display" : "Heprecomb",
      "target" : [{
        "code" : "66071002",
        "display" : "Viral hepatitis type B (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "642",
      "display" : "Heprecomb Kinder",
      "target" : [{
        "code" : "66071002",
        "display" : "Viral hepatitis type B (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "614",
      "display" : "Inflexal V",
      "target" : [{
        "code" : "719590007",
        "display" : "Influenza caused by seasonal influenza virus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "657",
      "display" : "Menjugate",
      "target" : [{
        "code" : "23511006",
        "display" : "Meningococcal infectious disease (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "533",
      "display" : "Moraten",
      "target" : [{
        "code" : "14189004",
        "display" : "Measles (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "555",
      "display" : "Orochol",
      "target" : [{
        "code" : "63650001",
        "display" : "Cholera (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "685",
      "display" : "Rabipur",
      "target" : [{
        "code" : "14168008",
        "display" : "Rabies (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "702",
      "display" : "Td-pur",
      "target" : [{
        "code" : "76902006",
        "display" : "Tetanus (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "397430003",
        "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "686",
      "display" : "Td-Virelon",
      "target" : [{
        "code" : "398102009",
        "display" : "Acute poliomyelitis (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "76902006",
        "display" : "Tetanus (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "397430003",
        "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "467",
      "display" : "Vivotif",
      "target" : [{
        "code" : "4834000",
        "display" : "Typhoid fever (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "637",
      "display" : "Boostrix",
      "target" : [{
        "code" : "76902006",
        "display" : "Tetanus (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "27836007",
        "display" : "Pertussis (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "397430003",
        "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "681",
      "display" : "Boostrix Polio",
      "target" : [{
        "code" : "398102009",
        "display" : "Acute poliomyelitis (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "76902006",
        "display" : "Tetanus (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "27836007",
        "display" : "Pertussis (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "397430003",
        "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "567",
      "display" : "Ditanrix",
      "target" : [{
        "code" : "76902006",
        "display" : "Tetanus (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "397430003",
        "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "551",
      "display" : "Engerix-B 10",
      "target" : [{
        "code" : "66071002",
        "display" : "Viral hepatitis type B (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "534",
      "display" : "Engerix-B 20",
      "target" : [{
        "code" : "66071002",
        "display" : "Viral hepatitis type B (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "583",
      "display" : "Fluarix",
      "target" : [{
        "code" : "719590007",
        "display" : "Influenza caused by seasonal influenza virus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "558",
      "display" : "Havrix 1440",
      "target" : [{
        "code" : "40468003",
        "display" : "Viral hepatitis, type A (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "599",
      "display" : "Havrix 720",
      "target" : [{
        "code" : "40468003",
        "display" : "Viral hepatitis, type A (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "603",
      "display" : "Hiberix",
      "target" : [{
        "code" : "709410003",
        "display" : "Haemophilus influenzae type b infection (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "638",
      "display" : "Infanrix DTPa-IPV",
      "target" : [{
        "code" : "398102009",
        "display" : "Acute poliomyelitis (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "76902006",
        "display" : "Tetanus (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "27836007",
        "display" : "Pertussis (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "397430003",
        "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "619",
      "display" : "Infanrix DTPa-IPV+Hib",
      "target" : [{
        "code" : "709410003",
        "display" : "Haemophilus influenzae type b infection (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "398102009",
        "display" : "Acute poliomyelitis (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "76902006",
        "display" : "Tetanus (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "27836007",
        "display" : "Pertussis (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "397430003",
        "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "640",
      "display" : "Infanrix hexa",
      "target" : [{
        "code" : "709410003",
        "display" : "Haemophilus influenzae type b infection (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "66071002",
        "display" : "Viral hepatitis type B (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "398102009",
        "display" : "Acute poliomyelitis (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "76902006",
        "display" : "Tetanus (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "27836007",
        "display" : "Pertussis (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "397430003",
        "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "652",
      "display" : "Mencevax ACWY",
      "target" : [{
        "code" : "23511006",
        "display" : "Meningococcal infectious disease (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "860805006",
        "display" : "Encephalomyelitis caused by Neisseria meningitidis (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "669",
      "display" : "Poliorix",
      "target" : [{
        "code" : "398102009",
        "display" : "Acute poliomyelitis (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "615",
      "display" : "Priorix",
      "target" : [{
        "code" : "36653000",
        "display" : "Rubella (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "14189004",
        "display" : "Measles (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "36989005",
        "display" : "Mumps (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "592",
      "display" : "Twinrix 720/20",
      "target" : [{
        "code" : "66071002",
        "display" : "Viral hepatitis type B (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "40468003",
        "display" : "Viral hepatitis, type A (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "585",
      "display" : "Varilrix",
      "target" : [{
        "code" : "38907003",
        "display" : "Varicella (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "528",
      "display" : "Gen H-B-Vax 10",
      "target" : [{
        "code" : "66071002",
        "display" : "Viral hepatitis type B (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "545",
      "display" : "HBVAXPRO 40",
      "target" : [{
        "code" : "66071002",
        "display" : "Viral hepatitis type B (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "610",
      "display" : "Gen H-B-Vax 5",
      "target" : [{
        "code" : "66071002",
        "display" : "Viral hepatitis type B (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "663",
      "display" : "HBVAXPRO 10",
      "target" : [{
        "code" : "66071002",
        "display" : "Viral hepatitis type B (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "268",
      "display" : "MMR-II",
      "target" : [{
        "code" : "36653000",
        "display" : "Rubella (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "14189004",
        "display" : "Measles (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "36989005",
        "display" : "Mumps (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "247",
      "display" : "Mumpsvax",
      "target" : [{
        "code" : "36989005",
        "display" : "Mumps (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "373",
      "display" : "Mutagrip",
      "target" : [{
        "code" : "719590007",
        "display" : "Influenza caused by seasonal influenza virus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "613",
      "display" : "Pentavac",
      "target" : [{
        "code" : "709410003",
        "display" : "Haemophilus influenzae type b infection (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "398102009",
        "display" : "Acute poliomyelitis (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "76902006",
        "display" : "Tetanus (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "27836007",
        "display" : "Pertussis (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "397430003",
        "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "509",
      "display" : "Pneumovax-23",
      "target" : [{
        "code" : "16814004",
        "display" : "Pneumococcal infectious disease (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "646",
      "display" : "Revaxis",
      "target" : [{
        "code" : "398102009",
        "display" : "Acute poliomyelitis (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "76902006",
        "display" : "Tetanus (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "397430003",
        "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "520",
      "display" : "Stamaril",
      "target" : [{
        "code" : "16541001",
        "display" : "Yellow fever (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "612",
      "display" : "Tetravac",
      "target" : [{
        "code" : "398102009",
        "display" : "Acute poliomyelitis (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "76902006",
        "display" : "Tetanus (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "27836007",
        "display" : "Pertussis (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "397430003",
        "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "417",
      "display" : "Tollwut Impfstoff Mérieux",
      "target" : [{
        "code" : "14168008",
        "display" : "Rabies (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "688",
      "display" : "Varivax",
      "target" : [{
        "code" : "38907003",
        "display" : "Varicella (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "485",
      "display" : "Influvac",
      "target" : [{
        "code" : "719590007",
        "display" : "Influenza caused by seasonal influenza virus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "660",
      "display" : "Influvac plus",
      "target" : [{
        "code" : "719590007",
        "display" : "Influenza caused by seasonal influenza virus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "654",
      "display" : "Meningitec",
      "target" : [{
        "code" : "23511006",
        "display" : "Meningococcal infectious disease (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "643",
      "display" : "Prevenar-7",
      "target" : [{
        "code" : "16814004",
        "display" : "Pneumococcal infectious disease (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "644",
      "display" : "Hexavac",
      "target" : [{
        "code" : "709410003",
        "display" : "Haemophilus influenzae type b infection (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "66071002",
        "display" : "Viral hepatitis type B (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "398102009",
        "display" : "Acute poliomyelitis (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "76902006",
        "display" : "Tetanus (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "27836007",
        "display" : "Pertussis (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "397430003",
        "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "711",
      "display" : "DiTe pediatric adsorbed",
      "target" : [{
        "code" : "76902006",
        "display" : "Tetanus (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "397430003",
        "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "711-01",
      "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
      "target" : [{
        "code" : "76902006",
        "display" : "Tetanus (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "397430003",
        "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "711-02",
      "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Erwachsene und Kinder ab 7 Jahren",
      "target" : [{
        "code" : "76902006",
        "display" : "Tetanus (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "397430003",
        "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "704",
      "display" : "Dukoral",
      "target" : [{
        "code" : "63650001",
        "display" : "Cholera (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "483",
      "display" : "Rimevax",
      "target" : [{
        "code" : "14189004",
        "display" : "Measles (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "707",
      "display" : "Tetanol pur",
      "target" : [{
        "code" : "76902006",
        "display" : "Tetanus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "57735",
      "display" : "Gardasil",
      "target" : [{
        "code" : "240532009",
        "display" : "Human papillomavirus infection (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "709",
      "display" : "Zostavax",
      "target" : [{
        "code" : "4740000",
        "display" : "Herpes zoster (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "58158",
      "display" : "Priorix-Tetra",
      "target" : [{
        "code" : "38907003",
        "display" : "Varicella (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "36653000",
        "display" : "Rubella (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "14189004",
        "display" : "Measles (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "36989005",
        "display" : "Mumps (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "696",
      "display" : "BCG SSI",
      "target" : [{
        "code" : "56717001",
        "display" : "Tuberculosis (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "58317",
      "display" : "Fluad",
      "target" : [{
        "code" : "719590007",
        "display" : "Influenza caused by seasonal influenza virus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "60150",
      "display" : "Rotarix",
      "target" : [{
        "code" : "18624000",
        "display" : "Disease caused by Rotavirus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "703",
      "display" : "MMRVaxPro",
      "target" : [{
        "code" : "36653000",
        "display" : "Rubella (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "14189004",
        "display" : "Measles (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "36989005",
        "display" : "Mumps (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "58506",
      "display" : "Measles vaccine live",
      "target" : [{
        "code" : "14189004",
        "display" : "Measles (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "59267",
      "display" : "Agrippal",
      "target" : [{
        "code" : "719590007",
        "display" : "Influenza caused by seasonal influenza virus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "58271",
      "display" : "Optaflu",
      "target" : [{
        "code" : "719590007",
        "display" : "Influenza caused by seasonal influenza virus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "57814",
      "display" : "Cervarix",
      "target" : [{
        "code" : "240532009",
        "display" : "Human papillomavirus infection (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "60129",
      "display" : "Prevenar 13",
      "target" : [{
        "code" : "16814004",
        "display" : "Pneumococcal infectious disease (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "59147",
      "display" : "Ixiaro",
      "target" : [{
        "code" : "52947006",
        "display" : "Japanese encephalitis virus disease (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "62502",
      "display" : "Menveo",
      "target" : [{
        "code" : "23511006",
        "display" : "Meningococcal infectious disease (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "600",
      "display" : "DiTe Anatoxal Erwachsene / Adultes",
      "target" : [{
        "code" : "76902006",
        "display" : "Tetanus (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "397430003",
        "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "690",
      "display" : "DiTe Anatoxal N Erwachsene / Adultes",
      "target" : [{
        "code" : "76902006",
        "display" : "Tetanus (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "397430003",
        "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "689",
      "display" : "Te Anatoxal N",
      "target" : [{
        "code" : "76902006",
        "display" : "Tetanus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "62961",
      "display" : "Fluarix Tetra",
      "target" : [{
        "code" : "719590007",
        "display" : "Influenza caused by seasonal influenza virus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "68267",
      "display" : "Spikevax (COVID-19 Vaccine, Moderna)",
      "target" : [{
        "code" : "840539006",
        "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "68225",
      "display" : "Comirnaty (COVID-19 Vaccine, Pfizer)",
      "target" : [{
        "code" : "840539006",
        "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "68235",
      "display" : "COVID-19 Vaccine Janssen",
      "target" : [{
        "code" : "840539006",
        "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "67987",
      "display" : "Shingrix",
      "target" : [{
        "code" : "4740000",
        "display" : "Herpes zoster (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "67482",
      "display" : "Flucelvax Tetra",
      "target" : [{
        "code" : "719590007",
        "display" : "Influenza caused by seasonal influenza virus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "67704",
      "display" : "Efluelda 0.7 ml",
      "target" : [{
        "code" : "719590007",
        "display" : "Influenza caused by seasonal influenza virus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "68003",
      "display" : "Supemtek 0.5 ml",
      "target" : [{
        "code" : "719590007",
        "display" : "Influenza caused by seasonal influenza virus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "66161",
      "display" : "Foclivia (Durchstechflasche)",
      "target" : [{
        "code" : "719865001",
        "display" : "Influenza caused by pandemic influenza virus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "66156",
      "display" : "Foclivia (Fertigspritze)",
      "target" : [{
        "code" : "719865001",
        "display" : "Influenza caused by pandemic influenza virus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "68473",
      "display" : "Nuvaxovid 0.5 ml",
      "target" : [{
        "code" : "840539006",
        "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "68358",
      "display" : "Ervebo",
      "target" : [{
        "code" : "37109004",
        "display" : "Ebola virus disease (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "68710-01",
      "display" : "Comirnaty® 30 Mikrogramm/Dosis",
      "target" : [{
        "code" : "840539006",
        "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "68710-02",
      "display" : "Comirnaty® 10 Mikrogramm/Dosis",
      "target" : [{
        "code" : "840539006",
        "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "68710-03",
      "display" : "Comirnaty® 3 Mikrogramm/Dosis",
      "target" : [{
        "code" : "840539006",
        "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "68462",
      "display" : "Fluenz Tetra",
      "target" : [{
        "code" : "719590007",
        "display" : "Influenza caused by seasonal influenza virus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "69009",
      "display" : "Spikevax Bivalent Original / Omicron",
      "target" : [{
        "code" : "840539006",
        "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "68110",
      "display" : "Adacel-Polio 0.5 ml",
      "target" : [{
        "code" : "398102009",
        "display" : "Acute poliomyelitis (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "76902006",
        "display" : "Tetanus (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "27836007",
        "display" : "Pertussis (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "397430003",
        "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "68317",
      "display" : "Adacel 0.5 ml",
      "target" : [{
        "code" : "76902006",
        "display" : "Tetanus (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "27836007",
        "display" : "Pertussis (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "397430003",
        "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "68221",
      "display" : "MenQuadfi",
      "target" : [{
        "code" : "23511006",
        "display" : "Meningococcal infectious disease (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "860805006",
        "display" : "Encephalomyelitis caused by Neisseria meningitidis (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "66427",
      "display" : "VaxigripTetra",
      "target" : [{
        "code" : "719590007",
        "display" : "Influenza caused by seasonal influenza virus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "65387",
      "display" : "Gardasil 9 (Fertigspritze)",
      "target" : [{
        "code" : "240532009",
        "display" : "Human papillomavirus infection (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "65728",
      "display" : "Gardasil 9 (Durchstechflasche)",
      "target" : [{
        "code" : "240532009",
        "display" : "Human papillomavirus infection (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "66940",
      "display" : "Vaxelis",
      "target" : [{
        "code" : "76902006",
        "display" : "Tetanus (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "27836007",
        "display" : "Pertussis (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "398102009",
        "display" : "Acute poliomyelitis (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "397430003",
        "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "66071002",
        "display" : "Viral hepatitis type B (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "709410003",
        "display" : "Haemophilus influenzae type b infection (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "65730",
      "display" : "Bexsero",
      "target" : [{
        "code" : "23511006",
        "display" : "Meningococcal infectious disease (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "68087",
      "display" : "Influvac Tetra",
      "target" : [{
        "code" : "719590007",
        "display" : "Influenza caused by seasonal influenza virus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "66037",
      "display" : "Menjugate liquid",
      "target" : [{
        "code" : "860805006",
        "display" : "Encephalomyelitis caused by Neisseria meningitidis (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "699",
      "display" : "ProQuad",
      "target" : [{
        "code" : "36653000",
        "display" : "Rubella (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "14189004",
        "display" : "Measles (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "36989005",
        "display" : "Mumps (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "38907003",
        "display" : "Varicella (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "69123",
      "display" : "Spikevax Bivalent Original / Omicron 10 mg/ml, Fertigspritze",
      "target" : [{
        "code" : "840539006",
        "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "69010",
      "display" : "Spikevax, Fertigspritze",
      "target" : [{
        "code" : "840539006",
        "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "69047",
      "display" : "Comirnaty® Original/Omicron BA.1 15/15 µg pro Dosis",
      "target" : [{
        "code" : "840539006",
        "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "69127",
      "display" : "Comirnaty Original/Omicron BA. 4-5 0.225 mg",
      "target" : [{
        "code" : "840539006",
        "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "69189",
      "display" : "Spikevax Bivalent Original / Omicron BA.4-5",
      "target" : [{
        "code" : "840539006",
        "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "69211",
      "display" : "Spikevax Bivalent Original / Omicron BA.4-5, Fertigspritze",
      "target" : [{
        "code" : "840539006",
        "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "68752",
      "display" : "Vaxneuvance",
      "target" : [{
        "code" : "16814004",
        "display" : "Pneumococcal infectious disease (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "69465",
      "display" : "Spikevax XBB.1.5 0.10 mg/ml",
      "target" : [{
        "code" : "840539006",
        "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "69484",
      "display" : "Spikevax XBB.1.5 0.10 mg/ml",
      "target" : [{
        "code" : "840539006",
        "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "69488",
      "display" : "Comirnaty Omicron XBB.1.5 (30 Mikrogramm)/Dosis",
      "target" : [{
        "code" : "840539006",
        "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "69310",
      "display" : "AREXVY",
      "target" : [{
        "code" : "55735004",
        "display" : "Respiratory syncytial virus infection (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "69173",
      "display" : "Jynneos",
      "target" : [{
        "code" : "359814004",
        "display" : "Monkeypox (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "67924001",
        "display" : "Smallpox (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "69222",
      "display" : "Prevenar 20",
      "target" : [{
        "code" : "16814004",
        "display" : "Pneumococcal infectious disease (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "69815",
      "display" : "Comirnaty Omicron XBB.1.5, 0.042 mg",
      "target" : [{
        "code" : "840539006",
        "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "69403",
      "display" : "Qdenga 0.5 ml",
      "target" : [{
        "code" : "38362002",
        "display" : "Dengue (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "69913",
      "display" : "Comirnaty JN.1 0.042 mg",
      "target" : [{
        "code" : "840539006",
        "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "69912-01",
      "display" : "Comirnaty JN.1 30 µg",
      "target" : [{
        "code" : "840539006",
        "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "69912-02",
      "display" : "Comirnaty JN.1 10 µg",
      "target" : [{
        "code" : "840539006",
        "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "69691",
      "display" : "Abrysvo",
      "target" : [{
        "code" : "55735004",
        "display" : "Respiratory syncytial virus infection (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "69788",
      "display" : "Spikevax JN.1 (mRNA-1273.167), 0.10mg/ml",
      "target" : [{
        "code" : "840539006",
        "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "70205",
      "display" : "Spikevax LP.8.1",
      "target" : [{
        "code" : "840539006",
        "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "70400",
      "display" : "Comirnaty LP.8.1 10 µg",
      "target" : [{
        "code" : "840539006",
        "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "70403",
      "display" : "Comirnaty LP.8.1 30 Mikrogramm",
      "target" : [{
        "code" : "840539006",
        "display" : "Disease caused by Severe acute respiratory syndrome coronavirus 2 (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "69863-01",
      "display" : "Efluelda TIV 0.5 mL",
      "target" : [{
        "code" : "442438000",
        "display" : "Influenza caused by Influenza A virus (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "24662006",
        "display" : "Influenza caused by Influenza B virus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "69995-01",
      "display" : "mResvia Respiratorisches-Synzytial-Virus (RSV) Vakzin 0.10 mg/ml",
      "target" : [{
        "code" : "55735004",
        "display" : "Respiratory syncytial virus infection (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "69781",
      "display" : "Capvaxive",
      "target" : [{
        "code" : "16814004",
        "display" : "Pneumococcal infectious disease (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "70042",
      "display" : "Fluarix",
      "target" : [{
        "code" : "719590007",
        "display" : "Influenza caused by seasonal influenza virus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "69992",
      "display" : "Influvac 0.5 ml",
      "target" : [{
        "code" : "719590007",
        "display" : "Influenza caused by seasonal influenza virus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "70144",
      "display" : "Flucelvax",
      "target" : [{
        "code" : "719590007",
        "display" : "Influenza caused by seasonal influenza virus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "70490",
      "display" : "Vimkunya",
      "target" : [{
        "code" : "111864006",
        "display" : "Chikungunya fever (disorder)",
        "equivalence" : "relatedto"
      }]
    }]
  }]
}

```
