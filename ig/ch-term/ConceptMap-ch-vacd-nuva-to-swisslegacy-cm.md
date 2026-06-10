# ConceptMap for mapping Nuva vaccine codes to Old Swiss vaccine codes - CH Term (R4) v3.4.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ConceptMap for mapping Nuva vaccine codes to Old Swiss vaccine codes**

## ConceptMap: ConceptMap for mapping Nuva vaccine codes to Old Swiss vaccine codes 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-nuva-to-swisslegacy-cm | *Version*:3.4.0 |
| Active as of 2026-06-10 | *Computable Name*:NuvaToSwisslegacyConceptMap |
| **Copyright/Legal**: CC0-1.0 | |

 
This ConceptMap maps vaccine codes from the Nuva terminology to the corresponding codes in the old swiss vaccines CodeSystem. It is generated based on the provided CSV mapping file and the Swissmedic CodeSystem. 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "ch-vacd-nuva-to-swisslegacy-cm",
  "url" : "http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-nuva-to-swisslegacy-cm",
  "version" : "3.4.0",
  "name" : "NuvaToSwisslegacyConceptMap",
  "title" : "ConceptMap for mapping Nuva vaccine codes to Old Swiss vaccine codes",
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
  "description" : "This ConceptMap maps vaccine codes from the Nuva terminology to the corresponding codes in the old swiss vaccines CodeSystem. It is generated based on the provided CSV mapping file and the Swissmedic CodeSystem.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "sourceUri" : "http://smt.esante.gouv.fr/terminologie-nuva?vs",
  "targetUri" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-oldswiss-vaccines-vs",
  "group" : [{
    "source" : "http://smt.esante.gouv.fr/terminologie-nuva",
    "target" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-myvaccines-cs",
    "element" : [{
      "code" : "VAC0001",
      "display" : "ACT-HIB",
      "target" : [{
        "code" : "78",
        "display" : "Act-Hib",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0011",
      "display" : "HBVAXPRO 5 µg",
      "target" : [{
        "code" : "53",
        "display" : "HBVAXPRO 5",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0025",
      "display" : "PREVENAR",
      "target" : [{
        "code" : "100",
        "display" : "Pnu-Immune",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0033",
      "display" : "RUDIVAX",
      "target" : [{
        "code" : "112",
        "display" : "Rudivax",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0042",
      "display" : "VACCIN BCG SSI",
      "target" : [{
        "code" : "48",
        "display" : "BCG",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0046",
      "display" : "ENGERIX B 20 µg",
      "target" : [{
        "code" : "170",
        "display" : "Engerix-B 40",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0050",
      "display" : "HAVRIX 720 U/0,5 mL",
      "target" : [{
        "code" : "165",
        "display" : "Havrix junior",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0051",
      "display" : "INFANRIXTETRA",
      "target" : [{
        "code" : "35",
        "display" : "Infanrix DTPa",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0052",
      "display" : "VACCIN MENINGOCOCCIQUE A+C",
      "target" : [{
        "code" : "55",
        "display" : "Meningokokken-Impfstoff A+C Mérieux",
        "equivalence" : "equal"
      },
      {
        "code" : "95",
        "display" : "Vaccin méningococcique A+C Mérieux",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0058",
      "display" : "TWINRIX 10 µg",
      "target" : [{
        "code" : "74",
        "display" : "Twinrix 360/10",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0063",
      "display" : "TETRACOQ",
      "target" : [{
        "code" : "106",
        "display" : "Tetracoq",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0064",
      "display" : "PENTACOQ",
      "target" : [{
        "code" : "99",
        "display" : "Pentacoq",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0067",
      "display" : "HAVRIX 360 U",
      "target" : [{
        "code" : "115",
        "display" : "Havrix 360",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0068",
      "display" : "MONOVAX",
      "target" : [{
        "code" : "48",
        "display" : "BCG",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0080",
      "display" : "BCG PASTEUR",
      "target" : [{
        "code" : "87",
        "display" : "BCG Vaccin Mérieux",
        "equivalence" : "equal"
      },
      {
        "code" : "48",
        "display" : "BCG",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0108",
      "display" : "PANDEMRIX",
      "target" : [{
        "code" : "141",
        "display" : "Pandemrix",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0109",
      "display" : "FOCETRIA (unidose)",
      "target" : [{
        "code" : "137",
        "display" : "Focetria",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0126",
      "display" : "HEVAC B",
      "target" : [{
        "code" : "118",
        "display" : "Hevac B",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0127",
      "display" : "HB VAX DNA 5 µg",
      "target" : [{
        "code" : "162",
        "display" : "HBVAX DNA 5",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0128",
      "display" : "HB VAX DNA 10 µg",
      "target" : [{
        "code" : "163",
        "display" : "HBVAX DNA 10",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0129",
      "display" : "HB VAX DNA 40 µg",
      "target" : [{
        "code" : "164",
        "display" : "HBVAX DNA 40",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0166",
      "display" : "VAQTA 50 U",
      "target" : [{
        "code" : "110",
        "display" : "Vaqta",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0178",
      "display" : "ACEL-IMUNE",
      "target" : [{
        "code" : "76",
        "display" : "Acel Immune",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0191",
      "display" : "ARILVAX",
      "target" : [{
        "code" : "86",
        "display" : "Arilvax",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0192",
      "display" : "ATTENUVAX",
      "target" : [{
        "code" : "47",
        "display" : "Attenuvax",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0201",
      "display" : "BIVIRATEN BERNA",
      "target" : [{
        "code" : "88",
        "display" : "Biviraten",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0216",
      "display" : "ANATOXAL DI TE",
      "target" : [{
        "code" : "134",
        "display" : "Anatoxal DiTe Kinder",
        "equivalence" : "equal"
      },
      {
        "code" : "154",
        "display" : "DiTe Anatoxal Kinder / Enfants",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0219",
      "display" : "DRYVAX",
      "target" : [{
        "code" : "144",
        "display" : "Variola",
        "equivalence" : "equal"
      },
      {
        "code" : "169",
        "display" : "Vaccin variole",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0228",
      "display" : "ERVEVAX RA 27/3",
      "target" : [{
        "code" : "91",
        "display" : "Ervevax",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0247",
      "display" : "HIBTITER",
      "target" : [{
        "code" : "92",
        "display" : "HibTiter",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0264",
      "display" : "INFANRIX",
      "target" : [{
        "code" : "166",
        "display" : "Infanrix",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0274",
      "display" : "LANCY VAXINA",
      "target" : [{
        "code" : "144",
        "display" : "Variola",
        "equivalence" : "equal"
      },
      {
        "code" : "169",
        "display" : "Vaccin variole",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0276",
      "display" : "LIOVAX",
      "target" : [{
        "code" : "144",
        "display" : "Variola",
        "equivalence" : "equal"
      },
      {
        "code" : "169",
        "display" : "Vaccin variole",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0298",
      "display" : "MERUVAX",
      "target" : [{
        "code" : "56",
        "display" : "Meruvax",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0301",
      "display" : "MMR",
      "target" : [{
        "code" : "119",
        "display" : "MMR-I",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0311",
      "display" : "MUMATEN BERNA PRODUCTSNA",
      "target" : [{
        "code" : "97",
        "display" : "Mumaten",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0326",
      "display" : "PEDVAXHIB",
      "target" : [{
        "code" : "98",
        "display" : "Pedvax",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0335",
      "display" : "PLUSERIX",
      "target" : [{
        "code" : "75",
        "display" : "Pluserix",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0341",
      "display" : "PREVNAR",
      "target" : [{
        "code" : "100",
        "display" : "Pnu-Immune",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0343",
      "display" : "ProHIBiT",
      "target" : [{
        "code" : "133",
        "display" : "ProHibit",
        "equivalence" : "equal"
      },
      {
        "code" : "142",
        "display" : "Prohibit DTP",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0360",
      "display" : "RIMPARIX",
      "target" : [{
        "code" : "121",
        "display" : "Rimparix",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0364",
      "display" : "RUBEATEN BERNA PRODUCTS",
      "target" : [{
        "code" : "111",
        "display" : "Rubeaten",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0371",
      "display" : "POLIO SABIN GSK",
      "target" : [{
        "code" : "102",
        "display" : "Polio Sabin",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0373",
      "display" : "SALK",
      "target" : [{
        "code" : "101",
        "display" : "Polio Salk",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0383",
      "display" : "ANATOXAL TE",
      "target" : [{
        "code" : "83",
        "display" : "Anatoxal Te",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0391",
      "display" : "TETRAMUNE",
      "target" : [{
        "code" : "107",
        "display" : "Tetramune",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0393",
      "display" : "TICE BCG",
      "target" : [{
        "code" : "48",
        "display" : "BCG",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0416",
      "display" : "TRIVIRATEN",
      "target" : [{
        "code" : "23",
        "display" : "Triviraten",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0425",
      "display" : "TYNE",
      "target" : [{
        "code" : "48",
        "display" : "BCG",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0435",
      "display" : "VAKSIN CACAR",
      "target" : [{
        "code" : "144",
        "display" : "Variola",
        "equivalence" : "equal"
      },
      {
        "code" : "169",
        "display" : "Vaccin variole",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0443",
      "display" : "SEVAC VARIE",
      "target" : [{
        "code" : "144",
        "display" : "Variola",
        "equivalence" : "equal"
      },
      {
        "code" : "169",
        "display" : "Vaccin variole",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0451",
      "display" : "VIVOTIF",
      "target" : [{
        "code" : "25",
        "display" : "Vivotif L",
        "equivalence" : "equal"
      },
      {
        "code" : "143",
        "display" : "TAB oral",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0471",
      "display" : "HEPAVAX-GENE B 20 µg",
      "target" : [{
        "code" : "172",
        "display" : "Hepavax",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0489",
      "display" : "TRIMOVAX",
      "target" : [{
        "code" : "123",
        "display" : "Trimovax",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0520",
      "display" : "IMVANEX",
      "target" : [{
        "code" : "144",
        "display" : "Variola",
        "equivalence" : "equal"
      },
      {
        "code" : "169",
        "display" : "Vaccin variole",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0525",
      "display" : "INFANRIX PENTA",
      "target" : [{
        "code" : "39",
        "display" : "Infanrix Penta",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0538",
      "display" : "VACCIN BCG BIOMED-LUBLIN",
      "target" : [{
        "code" : "48",
        "display" : "BCG",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0575",
      "display" : "FSME-IMMUN",
      "target" : [{
        "code" : "128",
        "display" : "FSME-Immun Injekt",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0578",
      "display" : "INFANRIX-HIB",
      "target" : [{
        "code" : "73",
        "display" : "Infanrix DTPa+Hib",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0590",
      "display" : "VACCIN BCG AJVACCINES",
      "target" : [{
        "code" : "48",
        "display" : "BCG",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0622",
      "display" : "EOLARIX",
      "target" : [{
        "code" : "127",
        "display" : "Eolarix",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0624",
      "display" : "M-M-Vax",
      "target" : [{
        "code" : "96",
        "display" : "MM Vax",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0626",
      "display" : "MoRu Viraten",
      "target" : [{
        "code" : "14",
        "display" : "MoRu-Viraten",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0627",
      "display" : "MORUMAN",
      "target" : [{
        "code" : "120",
        "display" : "Moruman",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0848",
      "display" : "VACCIN BCG INSTITUT MERIEUX",
      "target" : [{
        "code" : "48",
        "display" : "BCG",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0877",
      "display" : "INFANRIX HEPB",
      "target" : [{
        "code" : "93",
        "display" : "Infanrix DTPa-HBV",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0887",
      "display" : "POLIORAL",
      "target" : [{
        "code" : "103",
        "display" : "Poloral",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0890",
      "display" : "NEOTYF",
      "target" : [{
        "code" : "143",
        "display" : "TAB oral",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0949",
      "display" : "IMOVAX BCG",
      "target" : [{
        "code" : "48",
        "display" : "BCG",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0957",
      "display" : "VACCINO BCG BERNA",
      "target" : [{
        "code" : "48",
        "display" : "BCG",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0961",
      "display" : "ANATOXAL TE N",
      "target" : [{
        "code" : "84",
        "display" : "Anatoxal Te N",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0962",
      "display" : "ANATOXAL DI TE N ADULT",
      "target" : [{
        "code" : "80",
        "display" : "Anatoxal DiTe Erwachsene",
        "equivalence" : "equal"
      },
      {
        "code" : "81",
        "display" : "Anatoxal DiTe N Erwachsene",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0963",
      "display" : "ANATOXAL DI TE PER",
      "target" : [{
        "code" : "155",
        "display" : "DiTePer Anatoxal",
        "equivalence" : "equal"
      },
      {
        "code" : "79",
        "display" : "Anatoxal DiTePer",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0964",
      "display" : "ANATOXAL DI",
      "target" : [{
        "code" : "151",
        "display" : "Di Anatoxal",
        "equivalence" : "equal"
      },
      {
        "code" : "82",
        "display" : "Anatoxal Di",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0966",
      "display" : "JYNNEOS",
      "target" : [{
        "code" : "144",
        "display" : "Variola",
        "equivalence" : "equal"
      },
      {
        "code" : "169",
        "display" : "Vaccin variole",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0969",
      "display" : "LYSSAVAC N BERNA",
      "target" : [{
        "code" : "94",
        "display" : "Lyssavac Berna",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0971",
      "display" : "VACCINO ANTIVAIOLOSO LANCY",
      "target" : [{
        "code" : "144",
        "display" : "Variola",
        "equivalence" : "equal"
      },
      {
        "code" : "169",
        "display" : "Vaccin variole",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0984",
      "display" : "VACCINO ANTIVAIOLOSO ISI",
      "target" : [{
        "code" : "144",
        "display" : "Variola",
        "equivalence" : "equal"
      },
      {
        "code" : "169",
        "display" : "Vaccin variole",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0987",
      "display" : "TANRIX",
      "target" : [{
        "code" : "168",
        "display" : "Tanrix",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0995",
      "display" : "IMVAMUNE",
      "target" : [{
        "code" : "144",
        "display" : "Variola",
        "equivalence" : "equal"
      },
      {
        "code" : "169",
        "display" : "Vaccin variole",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0996",
      "display" : "ACAM2000",
      "target" : [{
        "code" : "144",
        "display" : "Variola",
        "equivalence" : "equal"
      },
      {
        "code" : "169",
        "display" : "Vaccin variole",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0998",
      "display" : "LC16",
      "target" : [{
        "code" : "144",
        "display" : "Variola",
        "equivalence" : "equal"
      },
      {
        "code" : "169",
        "display" : "Vaccin variole",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0999",
      "display" : "WETVAX APSV",
      "target" : [{
        "code" : "144",
        "display" : "Variola",
        "equivalence" : "equal"
      },
      {
        "code" : "169",
        "display" : "Vaccin variole",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1000",
      "display" : "VACV VACCINIA VIRUS LISTER ELSTREE",
      "target" : [{
        "code" : "144",
        "display" : "Variola",
        "equivalence" : "equal"
      },
      {
        "code" : "169",
        "display" : "Vaccin variole",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1085",
      "display" : "MYCOBAX",
      "target" : [{
        "code" : "48",
        "display" : "BCG",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1094",
      "display" : "OROCHOL",
      "target" : [{
        "code" : "16",
        "display" : "Orochol E",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1095",
      "display" : "MVA85A",
      "target" : [{
        "code" : "48",
        "display" : "BCG",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1293",
      "display" : "VAKSIN BCG KERING",
      "target" : [{
        "code" : "48",
        "display" : "BCG",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1313",
      "display" : "BCG SII",
      "target" : [{
        "code" : "48",
        "display" : "BCG",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1328",
      "display" : "TUBERVAC",
      "target" : [{
        "code" : "48",
        "display" : "BCG",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1447",
      "display" : "VACCIN BCG SYNTHAVERSE",
      "target" : [{
        "code" : "48",
        "display" : "BCG",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1448",
      "display" : "BCG VACCINE MERCK",
      "target" : [{
        "code" : "48",
        "display" : "BCG",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1449",
      "display" : "DITANRIX-PEDIATRIC",
      "target" : [{
        "code" : "126",
        "display" : "Ditanrix pediatric",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1463",
      "display" : "FREEZE-DRIED BCG VACCINE JAPAN",
      "target" : [{
        "code" : "48",
        "display" : "BCG",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1487",
      "display" : "PREVENAR-7",
      "target" : [{
        "code" : "100",
        "display" : "Pnu-Immune",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1489",
      "display" : "CELTURA",
      "target" : [{
        "code" : "136",
        "display" : "Celtura",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1490",
      "display" : "ALMEVAX",
      "target" : [{
        "code" : "117",
        "display" : "Almevax",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1491",
      "display" : "RUBEVAC",
      "target" : [{
        "code" : "122",
        "display" : "Rubevac",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1492",
      "display" : "POLIOMYELITIS IMPFSTOFF BERNA",
      "target" : [{
        "code" : "17",
        "display" : "Poliomyelitis Impfstoff Berna",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1493",
      "display" : "ACEL P",
      "target" : [{
        "code" : "77",
        "display" : "Acel P",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1495",
      "display" : "POLIO KOPROWSKI K1-K2-K3",
      "target" : [{
        "code" : "138",
        "display" : "K1, K2, K3",
        "equivalence" : "equal"
      },
      {
        "code" : "139",
        "display" : "Koprowski",
        "equivalence" : "equal"
      },
      {
        "code" : "147",
        "display" : "Polio Koprowski (K1-K3)",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1496",
      "display" : "POLIO LILLY",
      "target" : [{
        "code" : "148",
        "display" : "Polio Lilly",
        "equivalence" : "equal"
      }]
    }]
  }]
}

```
