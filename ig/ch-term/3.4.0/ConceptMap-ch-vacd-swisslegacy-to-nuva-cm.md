# ConceptMap for mapping Old Swiss vaccine codes to Nuva vaccine codes - CH Term (R4) v3.4.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ConceptMap for mapping Old Swiss vaccine codes to Nuva vaccine codes**

## ConceptMap: ConceptMap for mapping Old Swiss vaccine codes to Nuva vaccine codes 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-swisslegacy-to-nuva-cm | *Version*:3.4.0 |
| Active as of 2026-06-10 | *Computable Name*:SwisslegacyToNuvaConceptMap |
| **Copyright/Legal**: CC0-1.0 | |

 
This ConceptMap maps vaccine codes from the old swiss vaccines CodeSystem to the corresponding codes in the Nuva terminology. It is generated based on the provided CSV mapping file and the Swissmedic CodeSystem. 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "ch-vacd-swisslegacy-to-nuva-cm",
  "url" : "http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-swisslegacy-to-nuva-cm",
  "version" : "3.4.0",
  "name" : "SwisslegacyToNuvaConceptMap",
  "title" : "ConceptMap for mapping Old Swiss vaccine codes to Nuva vaccine codes",
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
  "description" : "This ConceptMap maps vaccine codes from the old swiss vaccines CodeSystem to the corresponding codes in the Nuva terminology. It is generated based on the provided CSV mapping file and the Swissmedic CodeSystem.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "sourceUri" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-oldswiss-vaccines-vs",
  "targetUri" : "http://smt.esante.gouv.fr/terminologie-nuva?vs",
  "group" : [{
    "source" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-myvaccines-cs",
    "target" : "http://smt.esante.gouv.fr/terminologie-nuva",
    "element" : [{
      "code" : "78",
      "display" : "Act-Hib",
      "target" : [{
        "code" : "VAC0001",
        "display" : "ACT-HIB",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "53",
      "display" : "HBVAXPRO 5",
      "target" : [{
        "code" : "VAC0011",
        "display" : "HBVAXPRO 5 µg",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "112",
      "display" : "Rudivax",
      "target" : [{
        "code" : "VAC0033",
        "display" : "RUDIVAX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "170",
      "display" : "Engerix-B 40",
      "target" : [{
        "code" : "VAC0046",
        "display" : "ENGERIX B 20 µg",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "165",
      "display" : "Havrix junior",
      "target" : [{
        "code" : "VAC0050",
        "display" : "HAVRIX 720 U/0,5 mL",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "35",
      "display" : "Infanrix DTPa",
      "target" : [{
        "code" : "VAC0051",
        "display" : "INFANRIXTETRA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "55",
      "display" : "Meningokokken-Impfstoff A+C Mérieux",
      "target" : [{
        "code" : "VAC0052",
        "display" : "VACCIN MENINGOCOCCIQUE A+C",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "95",
      "display" : "Vaccin méningococcique A+C Mérieux",
      "target" : [{
        "code" : "VAC0052",
        "display" : "VACCIN MENINGOCOCCIQUE A+C",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "74",
      "display" : "Twinrix 360/10",
      "target" : [{
        "code" : "VAC0058",
        "display" : "TWINRIX 10 µg",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "106",
      "display" : "Tetracoq",
      "target" : [{
        "code" : "VAC0063",
        "display" : "TETRACOQ",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "99",
      "display" : "Pentacoq",
      "target" : [{
        "code" : "VAC0064",
        "display" : "PENTACOQ",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "115",
      "display" : "Havrix 360",
      "target" : [{
        "code" : "VAC0067",
        "display" : "HAVRIX 360 U",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "87",
      "display" : "BCG Vaccin Mérieux",
      "target" : [{
        "code" : "VAC0080",
        "display" : "BCG PASTEUR",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "141",
      "display" : "Pandemrix",
      "target" : [{
        "code" : "VAC0108",
        "display" : "PANDEMRIX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "137",
      "display" : "Focetria",
      "target" : [{
        "code" : "VAC0109",
        "display" : "FOCETRIA (unidose)",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "118",
      "display" : "Hevac B",
      "target" : [{
        "code" : "VAC0126",
        "display" : "HEVAC B",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "162",
      "display" : "HBVAX DNA 5",
      "target" : [{
        "code" : "VAC0127",
        "display" : "HB VAX DNA 5 µg",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "163",
      "display" : "HBVAX DNA 10",
      "target" : [{
        "code" : "VAC0128",
        "display" : "HB VAX DNA 10 µg",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "164",
      "display" : "HBVAX DNA 40",
      "target" : [{
        "code" : "VAC0129",
        "display" : "HB VAX DNA 40 µg",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "144",
      "display" : "Variola",
      "target" : [{
        "code" : "VAC0133",
        "display" : "Smallpox vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "169",
      "display" : "Vaccin variole",
      "target" : [{
        "code" : "VAC0133",
        "display" : "Smallpox vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "48",
      "display" : "BCG",
      "target" : [{
        "code" : "VAC0134",
        "display" : "BCG vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "110",
      "display" : "Vaqta",
      "target" : [{
        "code" : "VAC0166",
        "display" : "VAQTA 50 U",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "76",
      "display" : "Acel Immune",
      "target" : [{
        "code" : "VAC0178",
        "display" : "ACEL-IMUNE",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "86",
      "display" : "Arilvax",
      "target" : [{
        "code" : "VAC0191",
        "display" : "ARILVAX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "47",
      "display" : "Attenuvax",
      "target" : [{
        "code" : "VAC0192",
        "display" : "ATTENUVAX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "88",
      "display" : "Biviraten",
      "target" : [{
        "code" : "VAC0201",
        "display" : "BIVIRATEN BERNA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "134",
      "display" : "Anatoxal DiTe Kinder",
      "target" : [{
        "code" : "VAC0216",
        "display" : "ANATOXAL DI TE",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "154",
      "display" : "DiTe Anatoxal Kinder / Enfants",
      "target" : [{
        "code" : "VAC0216",
        "display" : "ANATOXAL DI TE",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "91",
      "display" : "Ervevax",
      "target" : [{
        "code" : "VAC0228",
        "display" : "ERVEVAX RA 27/3",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "92",
      "display" : "HibTiter",
      "target" : [{
        "code" : "VAC0247",
        "display" : "HIBTITER",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "166",
      "display" : "Infanrix",
      "target" : [{
        "code" : "VAC0264",
        "display" : "INFANRIX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "56",
      "display" : "Meruvax",
      "target" : [{
        "code" : "VAC0298",
        "display" : "MERUVAX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "119",
      "display" : "MMR-I",
      "target" : [{
        "code" : "VAC0301",
        "display" : "MMR",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "97",
      "display" : "Mumaten",
      "target" : [{
        "code" : "VAC0311",
        "display" : "MUMATEN BERNA PRODUCTSNA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "100",
      "display" : "Pnu-Immune",
      "target" : [{
        "code" : "VAC0324",
        "display" : "Pneumococcal conjugate vaccine, 7 valent, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "98",
      "display" : "Pedvax",
      "target" : [{
        "code" : "VAC0326",
        "display" : "PEDVAXHIB",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "75",
      "display" : "Pluserix",
      "target" : [{
        "code" : "VAC0335",
        "display" : "PLUSERIX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "133",
      "display" : "ProHibit",
      "target" : [{
        "code" : "VAC0343",
        "display" : "ProHIBiT",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "142",
      "display" : "Prohibit DTP",
      "target" : [{
        "code" : "VAC0343",
        "display" : "ProHIBiT",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "121",
      "display" : "Rimparix",
      "target" : [{
        "code" : "VAC0360",
        "display" : "RIMPARIX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "111",
      "display" : "Rubeaten",
      "target" : [{
        "code" : "VAC0364",
        "display" : "RUBEATEN BERNA PRODUCTS",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "102",
      "display" : "Polio Sabin",
      "target" : [{
        "code" : "VAC0371",
        "display" : "POLIO SABIN GSK",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "101",
      "display" : "Polio Salk",
      "target" : [{
        "code" : "VAC0373",
        "display" : "SALK",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "83",
      "display" : "Anatoxal Te",
      "target" : [{
        "code" : "VAC0383",
        "display" : "ANATOXAL TE",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "107",
      "display" : "Tetramune",
      "target" : [{
        "code" : "VAC0391",
        "display" : "TETRAMUNE",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "23",
      "display" : "Triviraten",
      "target" : [{
        "code" : "VAC0416",
        "display" : "TRIVIRATEN",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "143",
      "display" : "TAB oral",
      "target" : [{
        "code" : "VAC0424",
        "display" : "Live attenuated oral typhoid vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "25",
      "display" : "Vivotif L",
      "target" : [{
        "code" : "VAC0451",
        "display" : "VIVOTIF",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "172",
      "display" : "Hepavax",
      "target" : [{
        "code" : "VAC0471",
        "display" : "HEPAVAX-GENE B 20 µg",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "123",
      "display" : "Trimovax",
      "target" : [{
        "code" : "VAC0489",
        "display" : "TRIMOVAX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "39",
      "display" : "Infanrix Penta",
      "target" : [{
        "code" : "VAC0525",
        "display" : "INFANRIX PENTA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "128",
      "display" : "FSME-Immun Injekt",
      "target" : [{
        "code" : "VAC0575",
        "display" : "FSME-IMMUN",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "73",
      "display" : "Infanrix DTPa+Hib",
      "target" : [{
        "code" : "VAC0578",
        "display" : "INFANRIX-HIB",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "127",
      "display" : "Eolarix",
      "target" : [{
        "code" : "VAC0622",
        "display" : "EOLARIX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "96",
      "display" : "MM Vax",
      "target" : [{
        "code" : "VAC0624",
        "display" : "M-M-Vax",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "14",
      "display" : "MoRu-Viraten",
      "target" : [{
        "code" : "VAC0626",
        "display" : "MoRu Viraten",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "120",
      "display" : "Moruman",
      "target" : [{
        "code" : "VAC0627",
        "display" : "MORUMAN",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "93",
      "display" : "Infanrix DTPa-HBV",
      "target" : [{
        "code" : "VAC0877",
        "display" : "INFANRIX HEPB",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "103",
      "display" : "Poloral",
      "target" : [{
        "code" : "VAC0887",
        "display" : "POLIORAL",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "84",
      "display" : "Anatoxal Te N",
      "target" : [{
        "code" : "VAC0961",
        "display" : "ANATOXAL TE N",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "80",
      "display" : "Anatoxal DiTe Erwachsene",
      "target" : [{
        "code" : "VAC0962",
        "display" : "ANATOXAL DI TE N ADULT",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "81",
      "display" : "Anatoxal DiTe N Erwachsene",
      "target" : [{
        "code" : "VAC0962",
        "display" : "ANATOXAL DI TE N ADULT",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "155",
      "display" : "DiTePer Anatoxal",
      "target" : [{
        "code" : "VAC0963",
        "display" : "ANATOXAL DI TE PER",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "79",
      "display" : "Anatoxal DiTePer",
      "target" : [{
        "code" : "VAC0963",
        "display" : "ANATOXAL DI TE PER",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "151",
      "display" : "Di Anatoxal",
      "target" : [{
        "code" : "VAC0964",
        "display" : "ANATOXAL DI",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "82",
      "display" : "Anatoxal Di",
      "target" : [{
        "code" : "VAC0964",
        "display" : "ANATOXAL DI",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "94",
      "display" : "Lyssavac Berna",
      "target" : [{
        "code" : "VAC0969",
        "display" : "LYSSAVAC N BERNA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "168",
      "display" : "Tanrix",
      "target" : [{
        "code" : "VAC0987",
        "display" : "TANRIX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "16",
      "display" : "Orochol E",
      "target" : [{
        "code" : "VAC1094",
        "display" : "OROCHOL",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "126",
      "display" : "Ditanrix pediatric",
      "target" : [{
        "code" : "VAC1449",
        "display" : "DITANRIX-PEDIATRIC",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "136",
      "display" : "Celtura",
      "target" : [{
        "code" : "VAC1489",
        "display" : "CELTURA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "117",
      "display" : "Almevax",
      "target" : [{
        "code" : "VAC1490",
        "display" : "ALMEVAX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "122",
      "display" : "Rubevac",
      "target" : [{
        "code" : "VAC1491",
        "display" : "RUBEVAC",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "17",
      "display" : "Poliomyelitis Impfstoff Berna",
      "target" : [{
        "code" : "VAC1492",
        "display" : "POLIOMYELITIS IMPFSTOFF BERNA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "77",
      "display" : "Acel P",
      "target" : [{
        "code" : "VAC1493",
        "display" : "ACEL P",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "138",
      "display" : "K1, K2, K3",
      "target" : [{
        "code" : "VAC1495",
        "display" : "POLIO KOPROWSKI K1-K2-K3",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "139",
      "display" : "Koprowski",
      "target" : [{
        "code" : "VAC1495",
        "display" : "POLIO KOPROWSKI K1-K2-K3",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "147",
      "display" : "Polio Koprowski (K1-K3)",
      "target" : [{
        "code" : "VAC1495",
        "display" : "POLIO KOPROWSKI K1-K2-K3",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "148",
      "display" : "Polio Lilly",
      "target" : [{
        "code" : "VAC1496",
        "display" : "POLIO LILLY",
        "equivalence" : "equal"
      }]
    }]
  }]
}

```
