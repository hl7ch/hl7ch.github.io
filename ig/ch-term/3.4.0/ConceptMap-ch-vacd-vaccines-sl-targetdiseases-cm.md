# Old Swiss vaccine codes To TargetDisease Mapping - CH Term (R4) v3.4.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Old Swiss vaccine codes To TargetDisease Mapping**

## ConceptMap: Old Swiss vaccine codes To TargetDisease Mapping 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-vaccines-sl-targetdiseases-cm | *Version*:3.4.0 |
| Active as of 2026-06-10 | *Computable Name*:SwisslegacyToTargetDiseaseMapping |
| **Copyright/Legal**: This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org. | |

 
ConceptMap for mapping Old Swiss vaccine codes to TargetDisease according to the correcsponding valuesets 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "ch-vacd-vaccines-sl-targetdiseases-cm",
  "url" : "http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-vaccines-sl-targetdiseases-cm",
  "version" : "3.4.0",
  "name" : "SwisslegacyToTargetDiseaseMapping",
  "title" : "Old Swiss vaccine codes To TargetDisease Mapping",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-06-10T09:49:50+00:00",
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
  "description" : "ConceptMap for mapping Old Swiss vaccine codes to TargetDisease according to the correcsponding valuesets",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org.",
  "sourceUri" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-oldswiss-vaccines-vs",
  "targetUri" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-targetdiseasesandillnessesundergoneforimmunization-vs",
  "group" : [{
    "id" : "OldVaccinesToTargetdisease",
    "source" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-myvaccines-cs",
    "target" : "http://snomed.info/sct",
    "element" : [{
      "code" : "14",
      "display" : "MoRu-Viraten",
      "target" : [{
        "code" : "36653000",
        "display" : "Rubella (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "14189004",
        "display" : "Measles (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "16",
      "display" : "Orochol E",
      "target" : [{
        "code" : "63650001",
        "display" : "Cholera (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "17",
      "display" : "Poliomyelitis Impfstoff Berna",
      "target" : [{
        "code" : "398102009",
        "display" : "Acute poliomyelitis (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "23",
      "display" : "Triviraten",
      "target" : [{
        "code" : "36653000",
        "display" : "Rubella (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "14189004",
        "display" : "Measles (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "25",
      "display" : "Vivotif L",
      "target" : [{
        "code" : "4834000",
        "display" : "Typhoid fever (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "35",
      "display" : "Infanrix DTPa",
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
      "code" : "39",
      "display" : "Infanrix Penta",
      "target" : [{
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
      "code" : "47",
      "display" : "Attenuvax",
      "target" : [{
        "code" : "14189004",
        "display" : "Measles (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "48",
      "display" : "BCG",
      "target" : [{
        "code" : "56717001",
        "display" : "Tuberculosis (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "53",
      "display" : "HBVAXPRO 5",
      "target" : [{
        "code" : "66071002",
        "display" : "Viral hepatitis type B (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "55",
      "display" : "Meningokokken-Impfstoff A+C Mérieux",
      "target" : [{
        "code" : "23511006",
        "display" : "Meningococcal infectious disease (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "56",
      "display" : "Meruvax",
      "target" : [{
        "code" : "36653000",
        "display" : "Rubella (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "73",
      "display" : "Infanrix DTPa+Hib",
      "target" : [{
        "code" : "709410003",
        "display" : "Haemophilus influenzae type b infection (disorder)",
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
      "code" : "74",
      "display" : "Twinrix 360/10",
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
      "code" : "75",
      "display" : "Pluserix",
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
      "code" : "76",
      "display" : "Acel Immune",
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
      "code" : "77",
      "display" : "Acel P",
      "target" : [{
        "code" : "27836007",
        "display" : "Pertussis (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "78",
      "display" : "Act-Hib",
      "target" : [{
        "code" : "709410003",
        "display" : "Haemophilus influenzae type b infection (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "79",
      "display" : "Anatoxal DiTePer",
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
      "code" : "80",
      "display" : "Anatoxal DiTe Erwachsene",
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
      "code" : "81",
      "display" : "Anatoxal DiTe N Erwachsene",
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
      "code" : "82",
      "display" : "Anatoxal Di",
      "target" : [{
        "code" : "397430003",
        "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "83",
      "display" : "Anatoxal Te",
      "target" : [{
        "code" : "76902006",
        "display" : "Tetanus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "84",
      "display" : "Anatoxal Te N",
      "target" : [{
        "code" : "76902006",
        "display" : "Tetanus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "86",
      "display" : "Arilvax",
      "target" : [{
        "code" : "16541001",
        "display" : "Yellow fever (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "87",
      "display" : "BCG Vaccin Mérieux",
      "target" : [{
        "code" : "56717001",
        "display" : "Tuberculosis (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "88",
      "display" : "Biviraten",
      "target" : [{
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
      "code" : "91",
      "display" : "Ervevax",
      "target" : [{
        "code" : "36653000",
        "display" : "Rubella (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "92",
      "display" : "HibTiter",
      "target" : [{
        "code" : "709410003",
        "display" : "Haemophilus influenzae type b infection (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "93",
      "display" : "Infanrix DTPa-HBV",
      "target" : [{
        "code" : "66071002",
        "display" : "Viral hepatitis type B (disorder)",
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
      "code" : "94",
      "display" : "Lyssavac Berna",
      "target" : [{
        "code" : "14168008",
        "display" : "Rabies (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "96",
      "display" : "MM Vax",
      "target" : [{
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
      "code" : "97",
      "display" : "Mumaten",
      "target" : [{
        "code" : "36989005",
        "display" : "Mumps (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "98",
      "display" : "Pedvax",
      "target" : [{
        "code" : "709410003",
        "display" : "Haemophilus influenzae type b infection (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "99",
      "display" : "Pentacoq",
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
      "code" : "100",
      "display" : "Pnu-Immune",
      "target" : [{
        "code" : "16814004",
        "display" : "Pneumococcal infectious disease (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "101",
      "display" : "Polio Salk",
      "target" : [{
        "code" : "398102009",
        "display" : "Acute poliomyelitis (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "102",
      "display" : "Polio Sabin",
      "target" : [{
        "code" : "398102009",
        "display" : "Acute poliomyelitis (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "103",
      "display" : "Poloral",
      "target" : [{
        "code" : "398102009",
        "display" : "Acute poliomyelitis (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "106",
      "display" : "Tetracoq",
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
      "code" : "107",
      "display" : "Tetramune",
      "target" : [{
        "code" : "709410003",
        "display" : "Haemophilus influenzae type b infection (disorder)",
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
      "code" : "110",
      "display" : "Vaqta",
      "target" : [{
        "code" : "40468003",
        "display" : "Viral hepatitis, type A (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "111",
      "display" : "Rubeaten",
      "target" : [{
        "code" : "36653000",
        "display" : "Rubella (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "112",
      "display" : "Rudivax",
      "target" : [{
        "code" : "36653000",
        "display" : "Rubella (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "115",
      "display" : "Havrix 360",
      "target" : [{
        "code" : "40468003",
        "display" : "Viral hepatitis, type A (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "117",
      "display" : "Almevax",
      "target" : [{
        "code" : "36653000",
        "display" : "Rubella (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "118",
      "display" : "Hevac B",
      "target" : [{
        "code" : "66071002",
        "display" : "Viral hepatitis type B (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "119",
      "display" : "MMR-I",
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
      "code" : "120",
      "display" : "Moruman",
      "target" : [{
        "code" : "14189004",
        "display" : "Measles (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "121",
      "display" : "Rimparix",
      "target" : [{
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
      "code" : "122",
      "display" : "Rubevac",
      "target" : [{
        "code" : "36653000",
        "display" : "Rubella (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "123",
      "display" : "Trimovax",
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
      "code" : "126",
      "display" : "Ditanrix pediatric",
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
      "code" : "127",
      "display" : "Eolarix",
      "target" : [{
        "code" : "36653000",
        "display" : "Rubella (disorder)",
        "equivalence" : "relatedto"
      },
      {
        "code" : "14189004",
        "display" : "Measles (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "128",
      "display" : "FSME-Immun Injekt",
      "target" : [{
        "code" : "712986001",
        "display" : "Central European encephalitis (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "133",
      "display" : "ProHibit",
      "target" : [{
        "code" : "709410003",
        "display" : "Haemophilus influenzae type b infection (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "134",
      "display" : "Anatoxal DiTe Kinder",
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
      "code" : "136",
      "display" : "Celtura",
      "target" : [{
        "code" : "719865001",
        "display" : "Influenza caused by pandemic influenza virus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "137",
      "display" : "Focetria",
      "target" : [{
        "code" : "719865001",
        "display" : "Influenza caused by pandemic influenza virus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "138",
      "display" : "K1, K2, K3",
      "target" : [{
        "code" : "398102009",
        "display" : "Acute poliomyelitis (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "139",
      "display" : "Koprowski",
      "target" : [{
        "code" : "398102009",
        "display" : "Acute poliomyelitis (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "141",
      "display" : "Pandemrix",
      "target" : [{
        "code" : "719865001",
        "display" : "Influenza caused by pandemic influenza virus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "142",
      "display" : "Prohibit DTP",
      "target" : [{
        "code" : "709410003",
        "display" : "Haemophilus influenzae type b infection (disorder)",
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
      "code" : "143",
      "display" : "TAB oral",
      "target" : [{
        "code" : "4834000",
        "display" : "Typhoid fever (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "144",
      "display" : "Variola",
      "target" : [{
        "code" : "67924001",
        "display" : "Smallpox (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "147",
      "display" : "Polio Koprowski (K1-K3)",
      "target" : [{
        "code" : "398102009",
        "display" : "Acute poliomyelitis (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "148",
      "display" : "Polio Lilly",
      "target" : [{
        "code" : "398102009",
        "display" : "Acute poliomyelitis (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "151",
      "display" : "Di Anatoxal",
      "target" : [{
        "code" : "397430003",
        "display" : "Diphtheria caused by Corynebacterium diphtheriae (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "154",
      "display" : "DiTe Anatoxal Kinder / Enfants",
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
      "code" : "155",
      "display" : "DiTePer Anatoxal",
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
      "code" : "162",
      "display" : "HBVAX DNA 5",
      "target" : [{
        "code" : "66071002",
        "display" : "Viral hepatitis type B (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "163",
      "display" : "HBVAX DNA 10",
      "target" : [{
        "code" : "66071002",
        "display" : "Viral hepatitis type B (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "164",
      "display" : "HBVAX DNA 40",
      "target" : [{
        "code" : "66071002",
        "display" : "Viral hepatitis type B (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "165",
      "display" : "Havrix junior",
      "target" : [{
        "code" : "40468003",
        "display" : "Viral hepatitis, type A (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "166",
      "display" : "Infanrix",
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
      "code" : "168",
      "display" : "Tanrix",
      "target" : [{
        "code" : "76902006",
        "display" : "Tetanus (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "169",
      "display" : "Vaccin variole",
      "target" : [{
        "code" : "67924001",
        "display" : "Smallpox (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "170",
      "display" : "Engerix-B 40",
      "target" : [{
        "code" : "66071002",
        "display" : "Viral hepatitis type B (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "172",
      "display" : "Hepavax",
      "target" : [{
        "code" : "66071002",
        "display" : "Viral hepatitis type B (disorder)",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "95",
      "display" : "Vaccin méningococcique A+C Mérieux",
      "target" : [{
        "code" : "23511006",
        "display" : "Meningococcal infectious disease (disorder)",
        "equivalence" : "relatedto"
      }]
    }]
  }]
}

```
