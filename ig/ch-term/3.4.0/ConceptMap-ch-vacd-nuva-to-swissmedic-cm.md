# ConceptMap for mapping Nuva vaccine codes to Swissmedic codes - CH Term (R4) v3.4.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ConceptMap for mapping Nuva vaccine codes to Swissmedic codes**

## ConceptMap: ConceptMap for mapping Nuva vaccine codes to Swissmedic codes 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-nuva-to-swissmedic-cm | *Version*:3.4.0 |
| Active as of 2026-06-10 | *Computable Name*:NuvaToSwissmedicConceptMap |
| **Copyright/Legal**: CC0-1.0 | |

 
This ConceptMap maps vaccine codes from the Nuva terminology to the corresponding codes in the Swissmedic CodeSystem. It is generated based on the provided CSV mapping file and the Swissmedic CodeSystem. 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "ch-vacd-nuva-to-swissmedic-cm",
  "url" : "http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-nuva-to-swissmedic-cm",
  "version" : "3.4.0",
  "name" : "NuvaToSwissmedicConceptMap",
  "title" : "ConceptMap for mapping Nuva vaccine codes to Swissmedic codes",
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
  "description" : "This ConceptMap maps vaccine codes from the Nuva terminology to the corresponding codes in the Swissmedic CodeSystem. It is generated based on the provided CSV mapping file and the Swissmedic CodeSystem.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "sourceUri" : "http://smt.esante.gouv.fr/terminologie-nuva?vs",
  "targetUri" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-swissmedic-vaccines-vs",
  "group" : [{
    "source" : "http://smt.esante.gouv.fr/terminologie-nuva",
    "target" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-cs",
    "element" : [{
      "code" : "VAC0002",
      "display" : "AGRIPPAL",
      "target" : [{
        "code" : "59267",
        "display" : "Agrippal",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0005",
      "display" : "DUKORAL",
      "target" : [{
        "code" : "704",
        "display" : "Dukoral",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0007",
      "display" : "GARDASIL",
      "target" : [{
        "code" : "57735",
        "display" : "Gardasil",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0009",
      "display" : "HBVAXPRO 10 µg",
      "target" : [{
        "code" : "663",
        "display" : "HBVAXPRO 10",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0010",
      "display" : "HBVAXPRO 40 µg",
      "target" : [{
        "code" : "545",
        "display" : "HBVAXPRO 40",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0014",
      "display" : "INFANRIX HEXA",
      "target" : [{
        "code" : "640",
        "display" : "Infanrix hexa",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0016",
      "display" : "INFLUVAC",
      "target" : [{
        "code" : "485",
        "display" : "Influvac",
        "equivalence" : "equal"
      },
      {
        "code" : "660",
        "display" : "Influvac plus",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0017",
      "display" : "M-M-RVAXPRO",
      "target" : [{
        "code" : "703",
        "display" : "M-M-RVAXPRO",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0018",
      "display" : "MENCEVAX ACWY",
      "target" : [{
        "code" : "652",
        "display" : "Mencevax ACWY",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0019",
      "display" : "MENINGITEC",
      "target" : [{
        "code" : "654",
        "display" : "Meningitec",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0021",
      "display" : "MUTAGRIP",
      "target" : [{
        "code" : "373",
        "display" : "Mutagrip",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0023",
      "display" : "PENTAVAC",
      "target" : [{
        "code" : "613",
        "display" : "Pentavac",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0028",
      "display" : "RABIPUR",
      "target" : [{
        "code" : "685",
        "display" : "Rabipur",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0030",
      "display" : "REVAXIS",
      "target" : [{
        "code" : "646",
        "display" : "Revaxis",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0032",
      "display" : "ROUVAX",
      "target" : [{
        "code" : "58506",
        "display" : "Measles vaccine live",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0035",
      "display" : "STAMARIL",
      "target" : [{
        "code" : "520",
        "display" : "Stamaril",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0037",
      "display" : "TETRAVAC-ACELLULAIRE",
      "target" : [{
        "code" : "612",
        "display" : "Tetravac",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0042",
      "display" : "VACCIN BCG SSI",
      "target" : [{
        "code" : "696",
        "display" : "BCG SSI",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0044",
      "display" : "CERVARIX",
      "target" : [{
        "code" : "57814",
        "display" : "Cervarix",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0046",
      "display" : "ENGERIX B 20 µg",
      "target" : [{
        "code" : "534",
        "display" : "Engerix-B 20",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0047",
      "display" : "FLUARIX",
      "target" : [{
        "code" : "583",
        "display" : "Fluarix",
        "equivalence" : "equal"
      },
      {
        "code" : "70042",
        "display" : "Fluarix",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0049",
      "display" : "HAVRIX 1440 U/1mL",
      "target" : [{
        "code" : "558",
        "display" : "Havrix 1440",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0050",
      "display" : "HAVRIX 720 U/0,5 mL",
      "target" : [{
        "code" : "599",
        "display" : "Havrix 720",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0053",
      "display" : "PRIORIX",
      "target" : [{
        "code" : "615",
        "display" : "Priorix",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0057",
      "display" : "TWINRIX 20 µg",
      "target" : [{
        "code" : "592",
        "display" : "Twinrix 720/20",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0060",
      "display" : "VARILRIX",
      "target" : [{
        "code" : "585",
        "display" : "Varilrix",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0061",
      "display" : "VARIVAX",
      "target" : [{
        "code" : "688",
        "display" : "Varivax",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0070",
      "display" : "DT BIS",
      "target" : [{
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0073",
      "display" : "IXIARO",
      "target" : [{
        "code" : "59147",
        "display" : "Ixiaro",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0076",
      "display" : "DTVax",
      "target" : [{
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0098",
      "display" : "HEXAVAC",
      "target" : [{
        "code" : "644",
        "display" : "Hexavac",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0121",
      "display" : "PRIORIX-TETRA",
      "target" : [{
        "code" : "58158",
        "display" : "Priorix-Tetra",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0123",
      "display" : "PREVENAR 13",
      "target" : [{
        "code" : "60129",
        "display" : "Prevenar 13",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0141",
      "display" : "MENVEO",
      "target" : [{
        "code" : "62502",
        "display" : "Menveo",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0161",
      "display" : "ZOSTAVAX",
      "target" : [{
        "code" : "709",
        "display" : "Zostavax",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0169",
      "display" : "OPTAFLU",
      "target" : [{
        "code" : "58271",
        "display" : "Optaflu",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0172",
      "display" : "DIFTAVAX",
      "target" : [{
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0174",
      "display" : "PROQUAD",
      "target" : [{
        "code" : "699",
        "display" : "ProQuad",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0175",
      "display" : "A.D.T. BOOSTER",
      "target" : [{
        "code" : "711-02",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Erwachsene und Kinder ab 7 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0182",
      "display" : "ADACEL",
      "target" : [{
        "code" : "68317",
        "display" : "Adacel 0.5 ml",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0185",
      "display" : "ALDITEANA",
      "target" : [{
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0192",
      "display" : "ATTENUVAX",
      "target" : [{
        "code" : "58506",
        "display" : "Measles vaccine live",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0203",
      "display" : "C.D.T.",
      "target" : [{
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0204",
      "display" : "CAM-KOVAX",
      "target" : [{
        "code" : "58506",
        "display" : "Measles vaccine live",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0214",
      "display" : "DIF-TET-ALL",
      "target" : [{
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0216",
      "display" : "ANATOXAL DI TE",
      "target" : [{
        "code" : "600",
        "display" : "DiTe Anatoxal Erwachsene / Adultes",
        "equivalence" : "equal"
      },
      {
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0217",
      "display" : "DITOXIM",
      "target" : [{
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0218",
      "display" : "DOUBLE ANIGEN B.",
      "target" : [{
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0220",
      "display" : "DT MERIEUX",
      "target" : [{
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0223",
      "display" : "DUAL ANTIGEN SII",
      "target" : [{
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0227",
      "display" : "EPAXAL",
      "target" : [{
        "code" : "572",
        "display" : "Epaxal",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0230",
      "display" : "FLUAD",
      "target" : [{
        "code" : "58317",
        "display" : "Fluad",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0244",
      "display" : "HEPRECOMB",
      "target" : [{
        "code" : "544",
        "display" : "Heprecomb",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0254",
      "display" : "IMOVAX D.T.",
      "target" : [{
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0263",
      "display" : "IMOVAX SARAMPION",
      "target" : [{
        "code" : "58506",
        "display" : "Measles vaccine live",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0272",
      "display" : "KAKSOISROKOTE DUBBELVACCIN",
      "target" : [{
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0278",
      "display" : "LIRUGEN",
      "target" : [{
        "code" : "58506",
        "display" : "Measles vaccine live",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0284",
      "display" : "LYOVAC ATTENUVAX",
      "target" : [{
        "code" : "58506",
        "display" : "Measles vaccine live",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0286",
      "display" : "M-M-R II",
      "target" : [{
        "code" : "268",
        "display" : "MMR-II",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0289",
      "display" : "M-VAX PFIZER",
      "target" : [{
        "code" : "58506",
        "display" : "Measles vaccine live",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0290",
      "display" : "MASERN-IMPFSTOFF SSW",
      "target" : [{
        "code" : "58506",
        "display" : "Measles vaccine live",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0291",
      "display" : "MEASLES VACCINE AIK-C STRAIN POLYVAC",
      "target" : [{
        "code" : "58506",
        "display" : "Measles vaccine live",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0292",
      "display" : "MEASLES VACCINE DK3",
      "target" : [{
        "code" : "58506",
        "display" : "Measles vaccine live",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0300",
      "display" : "MEVILIN-L",
      "target" : [{
        "code" : "58506",
        "display" : "Measles vaccine live",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0306",
      "display" : "MORBILVAX",
      "target" : [{
        "code" : "58506",
        "display" : "Measles vaccine live",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0310",
      "display" : "MOVIVAC",
      "target" : [{
        "code" : "58506",
        "display" : "Measles vaccine live",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0315",
      "display" : "MUMPSVAX",
      "target" : [{
        "code" : "247",
        "display" : "Mumpsvax",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0323",
      "display" : "PAVIVAC-SEVAC",
      "target" : [{
        "code" : "58506",
        "display" : "Measles vaccine live",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0334",
      "display" : "PFIZER VAX-MEASLES L",
      "target" : [{
        "code" : "58506",
        "display" : "Measles vaccine live",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0336",
      "display" : "PNEUMOVAX",
      "target" : [{
        "code" : "509",
        "display" : "Pneumovax-23",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0359",
      "display" : "RIMEVAX",
      "target" : [{
        "code" : "483",
        "display" : "Rimevax",
        "equivalence" : "equal"
      },
      {
        "code" : "58506",
        "display" : "Measles vaccine live",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0369",
      "display" : "RUBEOVAX",
      "target" : [{
        "code" : "58506",
        "display" : "Measles vaccine live",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0429",
      "display" : "VACCIN COMBINAT DIFTERO-TETANIC",
      "target" : [{
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0431",
      "display" : "VACCINUM MORBILLORUM VIVUM",
      "target" : [{
        "code" : "58506",
        "display" : "Measles vaccine live",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0432",
      "display" : "VACINA DUPLA",
      "target" : [{
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0436",
      "display" : "VAKSIN CAMPAK KERING",
      "target" : [{
        "code" : "58506",
        "display" : "Measles vaccine live",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0446",
      "display" : "VCDT",
      "target" : [{
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0451",
      "display" : "VIVOTIF",
      "target" : [{
        "code" : "467",
        "display" : "Vivotif",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0454",
      "display" : "VVR CANTACUZINO",
      "target" : [{
        "code" : "58506",
        "display" : "Measles vaccine live",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0460",
      "display" : "ZADITEADVAX",
      "target" : [{
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0461",
      "display" : "ZADITEVAX",
      "target" : [{
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0463",
      "display" : "ZAMOVAX",
      "target" : [{
        "code" : "58506",
        "display" : "Measles vaccine live",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0475",
      "display" : "FOCLIVIA",
      "target" : [{
        "code" : "66156",
        "display" : "Foclivia (Fertigspritze)",
        "equivalence" : "equal"
      },
      {
        "code" : "66161",
        "display" : "Foclivia (Durchstechflasche)",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0491",
      "display" : "TENIVAC",
      "target" : [{
        "code" : "711-02",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Erwachsene und Kinder ab 7 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0495",
      "display" : "BEXSERO",
      "target" : [{
        "code" : "65730",
        "display" : "Bexsero",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0514",
      "display" : "ROTARIX",
      "target" : [{
        "code" : "60150",
        "display" : "Rotarix",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0517",
      "display" : "FLUARIXTETRA",
      "target" : [{
        "code" : "62961",
        "display" : "Fluarix Tetra",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0521",
      "display" : "FLUENZ TETRA",
      "target" : [{
        "code" : "68462",
        "display" : "Fluenz Tetra",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0523",
      "display" : "GARDASIL 9",
      "target" : [{
        "code" : "65387",
        "display" : "Gardasil 9",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0527",
      "display" : "VACCIN DIPHTERIQUE ET TETANIQUE ADSORBE",
      "target" : [{
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0530",
      "display" : "TETANOL PUR",
      "target" : [{
        "code" : "707",
        "display" : "Tetanol pur",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0534",
      "display" : "MENJUGATE 10 µg",
      "target" : [{
        "code" : "657",
        "display" : "Menjugate",
        "equivalence" : "equal"
      },
      {
        "code" : "66037",
        "display" : "Menjugate liquid",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0535",
      "display" : "VAXELIS",
      "target" : [{
        "code" : "66940",
        "display" : "Vaxelis",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0541",
      "display" : "BOOSTRIX",
      "target" : [{
        "code" : "637",
        "display" : "Boostrix",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0560",
      "display" : "VAXIGRIPTETRA",
      "target" : [{
        "code" : "66427",
        "display" : "VaxigripTetra",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0562",
      "display" : "INFLUVAC TETRA",
      "target" : [{
        "code" : "68087",
        "display" : "Influvac Tetra",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0567",
      "display" : "SHINGRIX",
      "target" : [{
        "code" : "67987",
        "display" : "Shingrix",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0568",
      "display" : "BOOSTRIX-POLIO",
      "target" : [{
        "code" : "681",
        "display" : "Boostrix Polio",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0569",
      "display" : "INFANRIX-IPV",
      "target" : [{
        "code" : "638",
        "display" : "Infanrix DTPa-IPV",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0570",
      "display" : "HIBERIX",
      "target" : [{
        "code" : "603",
        "display" : "Hiberix",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0575",
      "display" : "FSME-IMMUN",
      "target" : [{
        "code" : "450",
        "display" : "FSME-Immun CC",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0586",
      "display" : "ERVEBO",
      "target" : [{
        "code" : "68358",
        "display" : "Ervebo",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0594",
      "display" : "MENQUADFI",
      "target" : [{
        "code" : "68221",
        "display" : "MenQuadfi",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0595",
      "display" : "FLUCELVAX TETRA",
      "target" : [{
        "code" : "67482",
        "display" : "Flucelvax Tetra",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0625",
      "display" : "MORATEN",
      "target" : [{
        "code" : "533",
        "display" : "Moraten",
        "equivalence" : "equal"
      },
      {
        "code" : "58506",
        "display" : "Measles vaccine live",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0627",
      "display" : "MORUMAN",
      "target" : [{
        "code" : "58506",
        "display" : "Measles vaccine live",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0637",
      "display" : "IPAD DT",
      "target" : [{
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0639",
      "display" : "ADACEL POLIO",
      "target" : [{
        "code" : "68110",
        "display" : "Adacel-Polio 0.5 ml",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0644",
      "display" : "QDENGA",
      "target" : [{
        "code" : "69403",
        "display" : "Qdenga 0.5 ml",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0649",
      "display" : "EFLUELDA TETRA",
      "target" : [{
        "code" : "67704",
        "display" : "Efluelda 0.7 ml",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0658",
      "display" : "COMIRNATY 30 µg BIONTECH-PFIZER",
      "target" : [{
        "code" : "68225",
        "display" : "Comirnaty (COVID-19 Vaccine, Pfizer)",
        "equivalence" : "equal"
      },
      {
        "code" : "68710-01",
        "display" : "Comirnaty® 30 Mikrogramm/Dosis",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0666",
      "display" : "JCOVDEN (ancien nom : JANSSEN COVID-19 VACCINE)",
      "target" : [{
        "code" : "68235",
        "display" : "COVID-19 Vaccine Janssen",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0667",
      "display" : "NUVAXOVID",
      "target" : [{
        "code" : "68473",
        "display" : "Nuvaxovid 0.5 ml",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0731",
      "display" : "DITANRIX",
      "target" : [{
        "code" : "567",
        "display" : "Ditanrix",
        "equivalence" : "equal"
      },
      {
        "code" : "711-02",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Erwachsene und Kinder ab 7 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0774",
      "display" : "FSME-IMMUN 0,25 mL",
      "target" : [{
        "code" : "683",
        "display" : "FSME-Immun 0.25 ml Junior",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0780",
      "display" : "VAXNEUVANCE",
      "target" : [{
        "code" : "68752",
        "display" : "Vaxneuvance",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0793",
      "display" : "TETADIF",
      "target" : [{
        "code" : "711-02",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Erwachsene und Kinder ab 7 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0833",
      "display" : "COMIRNATY 10 µg BIONTECH-PFIZER",
      "target" : [{
        "code" : "68710-02",
        "display" : "Comirnaty® 10 Mikrogramm/Dosis",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0850",
      "display" : "NEISVAC-C",
      "target" : [{
        "code" : "656",
        "display" : "NeisVac-C",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0871",
      "display" : "SUPEMTEK TETRA",
      "target" : [{
        "code" : "68003",
        "display" : "Supemtek 0.5 ml",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0900",
      "display" : "PREVENAR 20",
      "target" : [{
        "code" : "69222",
        "display" : "Prevenar 20",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0935",
      "display" : "VACCIN RABIQUE INACTIVE MERIEUX",
      "target" : [{
        "code" : "417",
        "display" : "Tollwut Impfstoff Mérieux",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0961",
      "display" : "ANATOXAL TE N",
      "target" : [{
        "code" : "689",
        "display" : "Te Anatoxal N",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0962",
      "display" : "ANATOXAL DI TE N ADULT",
      "target" : [{
        "code" : "690",
        "display" : "DiTe Anatoxal N Erwachsene / Adultes",
        "equivalence" : "equal"
      },
      {
        "code" : "711-02",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Erwachsene und Kinder ab 7 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0963",
      "display" : "ANATOXAL DI TE PER",
      "target" : [{
        "code" : "711",
        "display" : "DiTe pediatric adsorbed",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0966",
      "display" : "JYNNEOS",
      "target" : [{
        "code" : "69173",
        "display" : "Jynneos",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0968",
      "display" : "INFLEXAL V",
      "target" : [{
        "code" : "614",
        "display" : "Inflexal V",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0993",
      "display" : "TD ADSORBED",
      "target" : [{
        "code" : "702",
        "display" : "Td-pur",
        "equivalence" : "equal"
      },
      {
        "code" : "711-02",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Erwachsene und Kinder ab 7 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1003",
      "display" : "TEDIVAX PRO ADULTO",
      "target" : [{
        "code" : "711-02",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Erwachsene und Kinder ab 7 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1004",
      "display" : "TEDIVAX",
      "target" : [{
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1008",
      "display" : "DITEMER",
      "target" : [{
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1017",
      "display" : "SPIKEVAX BIVALENT ORIGINAL/OMICRON BA.1 (50 µg/50 µg)/mL MULTIDOSE MODERNA",
      "target" : [{
        "code" : "69009",
        "display" : "Spikevax Bivalent Original / Omicron",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1019",
      "display" : "SPIKEVAX 0,1 mg/mL MODERNA",
      "target" : [{
        "code" : "68267",
        "display" : "Spikevax (COVID-19 Vaccine, Moderna)",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1021",
      "display" : "COMIRNATY ORIGINAL/OMICRON BA.1 (15/15 µg) BIONTECH-PFIZER",
      "target" : [{
        "code" : "69047",
        "display" : "Comirnaty® Original/Omicron BA.1 15/15 µg pro Dosis",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1022",
      "display" : "COMIRNATY 3 µg 6 MOIS-4 ANS BIONTECH-PFIZER",
      "target" : [{
        "code" : "68710-03",
        "display" : "Comirnaty® 3 Mikrogramm/Dosis",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1023",
      "display" : "COMIRNATY ORIGINAL/OMICRON BA.4-5 (15/15 µg) BIONTECH-PFIZER",
      "target" : [{
        "code" : "69127",
        "display" : "Comirnaty Original/Omicron BA. 4-5 0.225 mg",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1031",
      "display" : "SPIKEVAX 50 µg MONODOSE MODERNA",
      "target" : [{
        "code" : "69010",
        "display" : "Spikevax, Fertigspritze",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1032",
      "display" : "SPIKEVAX BIVALENT ORIGINAL/OMICRON BA.1 (25 µg/25 µg) MODERNA",
      "target" : [{
        "code" : "69123",
        "display" : "Spikevax Bivalent Original / Omicron 10 mg/ml, Fertigspritze",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1036",
      "display" : "SPIKEVAX BIVALENT ORIGINAL/OMICRON BA.4-5 25 µg/25 µg MODERNA",
      "target" : [{
        "code" : "69189",
        "display" : "Spikevax Bivalent Original / Omicron BA.4-5",
        "equivalence" : "equal"
      },
      {
        "code" : "69211",
        "display" : "Spikevax Bivalent Original / Omicron BA.4-5, Fertigspritze",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1040",
      "display" : "AREXVY",
      "target" : [{
        "code" : "69310",
        "display" : "AREXVY",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1045",
      "display" : "INFANRIX-IPV/HIB",
      "target" : [{
        "code" : "619",
        "display" : "Infanrix DTPa-IPV+Hib",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1047",
      "display" : "ABRYSVO",
      "target" : [{
        "code" : "69691",
        "display" : "Abrysvo",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1048",
      "display" : "DECAVAC",
      "target" : [{
        "code" : "711-02",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Erwachsene und Kinder ab 7 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1049",
      "display" : "TDVAX",
      "target" : [{
        "code" : "711-02",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Erwachsene und Kinder ab 7 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1051",
      "display" : "PFIZER COMIRNATY-30 XBB.1.5",
      "target" : [{
        "code" : "69488",
        "display" : "Comirnaty Omicron XBB.1.5 (30 Mikrogramm)/Dosis",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1053",
      "display" : "PFIZER COMIRNATY-3 XBB.1.5",
      "target" : [{
        "code" : "69815",
        "display" : "Comirnaty Omicron XBB.1.5, 0.042 mg",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1057",
      "display" : "ENGERIX B JUNIOR",
      "target" : [{
        "code" : "551",
        "display" : "Engerix-B 10",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1058",
      "display" : "SPIKEVAX XBB.1.5 0,1 mg/mL dose 50 µg MODERNA",
      "target" : [{
        "code" : "69465",
        "display" : "Spikevax XBB.1.5 0.10 mg/ml",
        "equivalence" : "equal"
      },
      {
        "code" : "69484",
        "display" : "Spikevax XBB.1.5 0.10 mg/ml",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1094",
      "display" : "OROCHOL",
      "target" : [{
        "code" : "555",
        "display" : "Orochol",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1254",
      "display" : "CAPVAXIVE",
      "target" : [{
        "code" : "69781",
        "display" : "Capvaxive",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1258",
      "display" : "COMIRNATY JN.1 30 µg",
      "target" : [{
        "code" : "69912-01",
        "display" : "Comirnaty JN.1 30 μg",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1259",
      "display" : "COMIRNATY JN.1 10 µg",
      "target" : [{
        "code" : "69912-02",
        "display" : "Comirnaty JN.1 10 μg",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1260",
      "display" : "COMIRNATY JN.1 3 µg",
      "target" : [{
        "code" : "69913",
        "display" : "Comirnaty JN.1 0.042 mg",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1262",
      "display" : "MRESVIA",
      "target" : [{
        "code" : "69995-01",
        "display" : "mResvia Respiratorisches-Synzytial-Virus (RSV) Vakzin 0.10 mg/ml",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1265",
      "display" : "CLODIVAC",
      "target" : [{
        "code" : "711-02",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Erwachsene und Kinder ab 7 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1270",
      "display" : "SPIKEVAX JN.1 0,1 mg/mL dose 50 µg",
      "target" : [{
        "code" : "69788",
        "display" : "Spikevax JN.1 (mRNA-1273.167), 0.10mg/ml",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1273",
      "display" : "DT BIOMED",
      "target" : [{
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1294",
      "display" : "BIO-TD",
      "target" : [{
        "code" : "711-02",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Erwachsene und Kinder ab 7 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1295",
      "display" : "DT BIO FARMA",
      "target" : [{
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1301",
      "display" : "BE Td",
      "target" : [{
        "code" : "711-02",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Erwachsene und Kinder ab 7 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1308",
      "display" : "DT BIOLOGICAL E LTD",
      "target" : [{
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1310",
      "display" : "SII TD-VAC",
      "target" : [{
        "code" : "711-02",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Erwachsene und Kinder ab 7 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1314",
      "display" : "MEASLES SII",
      "target" : [{
        "code" : "58506",
        "display" : "Measles vaccine live",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1347",
      "display" : "EFLUELDA",
      "target" : [{
        "code" : "69863-01",
        "display" : "Efluelda TIV 0.5 mL",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1362",
      "display" : "SK TD",
      "target" : [{
        "code" : "711-02",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Erwachsene und Kinder ab 7 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1449",
      "display" : "DITANRIX-PEDIATRIC",
      "target" : [{
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1461",
      "display" : "DIFTET",
      "target" : [{
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1466",
      "display" : "COMIRNATY LP.8.1 30 µg",
      "target" : [{
        "code" : "70403",
        "display" : "Comirnaty LP.8.1 30 Mikrogramm",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1468",
      "display" : "COMIRNATY LP.8.1 10 µg 5-11 ans",
      "target" : [{
        "code" : "70400",
        "display" : "Comirnaty LP.8.1 10 μg",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1477",
      "display" : "ENCEPUR N ENFANT",
      "target" : [{
        "code" : "628",
        "display" : "Encepur N Kinder / Enfants",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1483",
      "display" : "ENCEPUR N",
      "target" : [{
        "code" : "627",
        "display" : "Encepur N",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1484",
      "display" : "HEPRECOMB ENFANT",
      "target" : [{
        "code" : "642",
        "display" : "Heprecomb Kinder",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1485",
      "display" : "GEN H-B-VAX 5",
      "target" : [{
        "code" : "610",
        "display" : "Gen H-B-Vax 5",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1486",
      "display" : "GEN H-B-VAX 10",
      "target" : [{
        "code" : "528",
        "display" : "Gen H-B-Vax 10",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1487",
      "display" : "PREVENAR-7",
      "target" : [{
        "code" : "643",
        "display" : "Prevenar-7",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1488",
      "display" : "POLIORIX",
      "target" : [{
        "code" : "669",
        "display" : "Poliorix",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1494",
      "display" : "DITEBOOSTER",
      "target" : [{
        "code" : "711-02",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Erwachsene und Kinder ab 7 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1497",
      "display" : "TD-VIRELON",
      "target" : [{
        "code" : "686",
        "display" : "Td-Virelon",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1500",
      "display" : "SPIKEVAX LP.8.1 50 µg",
      "target" : [{
        "code" : "70205",
        "display" : "Spikevax LP.8.1",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1504",
      "display" : "TD-PUR",
      "target" : [{
        "code" : "711-02",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Erwachsene und Kinder ab 7 Jahren",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC1267",
      "display" : "VIMKUNYA",
      "target" : [{
        "code" : "70490",
        "display" : "Vimkunya",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "VAC0926",
      "display" : "FLUCELVAX",
      "target" : [{
        "code" : "70144",
        "display" : "Flucelvax",
        "equivalence" : "equal"
      }]
    }]
  }]
}

```
