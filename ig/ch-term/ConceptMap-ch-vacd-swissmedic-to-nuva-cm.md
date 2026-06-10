# ConceptMap for mapping Swissmedic vaccine codes to Nuva codes - CH Term (R4) v3.4.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ConceptMap for mapping Swissmedic vaccine codes to Nuva codes**

## ConceptMap: ConceptMap for mapping Swissmedic vaccine codes to Nuva codes 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-swissmedic-to-nuva-cm | *Version*:3.4.0 |
| Active as of 2026-06-10 | *Computable Name*:SwissmedicToNuvaConceptMap |
| **Copyright/Legal**: CC0-1.0 | |

 
This ConceptMap maps vaccine codes from the Swissmedic CodeSystem to the corresponding codes in the Nuva terminology. It is generated based on the provided CSV mapping file and the Swissmedic CodeSystem. 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "ch-vacd-swissmedic-to-nuva-cm",
  "url" : "http://fhir.ch/ig/ch-vacd/ConceptMap/ch-vacd-swissmedic-to-nuva-cm",
  "version" : "3.4.0",
  "name" : "SwissmedicToNuvaConceptMap",
  "title" : "ConceptMap for mapping Swissmedic vaccine codes to Nuva codes",
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
  "description" : "This ConceptMap maps vaccine codes from the Swissmedic CodeSystem to the corresponding codes in the Nuva terminology. It is generated based on the provided CSV mapping file and the Swissmedic CodeSystem.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "sourceUri" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-swissmedic-vaccines-vs",
  "targetUri" : "http://smt.esante.gouv.fr/terminologie-nuva?vs",
  "group" : [{
    "source" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-cs",
    "target" : "http://smt.esante.gouv.fr/terminologie-nuva",
    "element" : [{
      "code" : "59267",
      "display" : "Agrippal",
      "target" : [{
        "code" : "VAC0002",
        "display" : "AGRIPPAL",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "704",
      "display" : "Dukoral",
      "target" : [{
        "code" : "VAC0005",
        "display" : "DUKORAL",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "57735",
      "display" : "Gardasil",
      "target" : [{
        "code" : "VAC0007",
        "display" : "GARDASIL",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "663",
      "display" : "HBVAXPRO 10",
      "target" : [{
        "code" : "VAC0009",
        "display" : "HBVAXPRO 10 µg",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "545",
      "display" : "HBVAXPRO 40",
      "target" : [{
        "code" : "VAC0010",
        "display" : "HBVAXPRO 40 µg",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "640",
      "display" : "Infanrix hexa",
      "target" : [{
        "code" : "VAC0014",
        "display" : "INFANRIX HEXA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "485",
      "display" : "Influvac",
      "target" : [{
        "code" : "VAC0016",
        "display" : "INFLUVAC",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "660",
      "display" : "Influvac plus",
      "target" : [{
        "code" : "VAC0016",
        "display" : "INFLUVAC",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "703",
      "display" : "M-M-RVAXPRO",
      "target" : [{
        "code" : "VAC0017",
        "display" : "M-M-RVAXPRO",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "652",
      "display" : "Mencevax ACWY",
      "target" : [{
        "code" : "VAC0018",
        "display" : "MENCEVAX ACWY",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "654",
      "display" : "Meningitec",
      "target" : [{
        "code" : "VAC0019",
        "display" : "MENINGITEC",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "373",
      "display" : "Mutagrip",
      "target" : [{
        "code" : "VAC0021",
        "display" : "MUTAGRIP",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "613",
      "display" : "Pentavac",
      "target" : [{
        "code" : "VAC0023",
        "display" : "PENTAVAC",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "685",
      "display" : "Rabipur",
      "target" : [{
        "code" : "VAC0028",
        "display" : "RABIPUR",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "646",
      "display" : "Revaxis",
      "target" : [{
        "code" : "VAC0030",
        "display" : "REVAXIS",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "520",
      "display" : "Stamaril",
      "target" : [{
        "code" : "VAC0035",
        "display" : "STAMARIL",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "612",
      "display" : "Tetravac",
      "target" : [{
        "code" : "VAC0037",
        "display" : "TETRAVAC-ACELLULAIRE",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "696",
      "display" : "BCG SSI",
      "target" : [{
        "code" : "VAC0042",
        "display" : "VACCIN BCG SSI",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "57814",
      "display" : "Cervarix",
      "target" : [{
        "code" : "VAC0044",
        "display" : "CERVARIX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "534",
      "display" : "Engerix-B 20",
      "target" : [{
        "code" : "VAC0046",
        "display" : "ENGERIX B 20 µg",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "583",
      "display" : "Fluarix",
      "target" : [{
        "code" : "VAC0047",
        "display" : "FLUARIX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "70042",
      "display" : "Fluarix",
      "target" : [{
        "code" : "VAC0047",
        "display" : "FLUARIX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "558",
      "display" : "Havrix 1440",
      "target" : [{
        "code" : "VAC0049",
        "display" : "HAVRIX 1440 U/1mL",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "599",
      "display" : "Havrix 720",
      "target" : [{
        "code" : "VAC0050",
        "display" : "HAVRIX 720 U/0,5 mL",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "615",
      "display" : "Priorix",
      "target" : [{
        "code" : "VAC0053",
        "display" : "PRIORIX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "592",
      "display" : "Twinrix 720/20",
      "target" : [{
        "code" : "VAC0057",
        "display" : "TWINRIX 20 µg",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "585",
      "display" : "Varilrix",
      "target" : [{
        "code" : "VAC0060",
        "display" : "VARILRIX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "688",
      "display" : "Varivax",
      "target" : [{
        "code" : "VAC0061",
        "display" : "VARIVAX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "59147",
      "display" : "Ixiaro",
      "target" : [{
        "code" : "VAC0073",
        "display" : "IXIARO",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "644",
      "display" : "Hexavac",
      "target" : [{
        "code" : "VAC0098",
        "display" : "HEXAVAC",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "58506",
      "display" : "Measles vaccine live",
      "target" : [{
        "code" : "VAC0114",
        "display" : "Live attenuated measles vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "58158",
      "display" : "Priorix-Tetra",
      "target" : [{
        "code" : "VAC0121",
        "display" : "PRIORIX-TETRA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "60129",
      "display" : "Prevenar 13",
      "target" : [{
        "code" : "VAC0123",
        "display" : "PREVENAR 13",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "711-01",
      "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
      "target" : [{
        "code" : "VAC0137",
        "display" : "DT vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "62502",
      "display" : "Menveo",
      "target" : [{
        "code" : "VAC0141",
        "display" : "MENVEO",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "709",
      "display" : "Zostavax",
      "target" : [{
        "code" : "VAC0161",
        "display" : "ZOSTAVAX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "58271",
      "display" : "Optaflu",
      "target" : [{
        "code" : "VAC0169",
        "display" : "OPTAFLU",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "699",
      "display" : "ProQuad",
      "target" : [{
        "code" : "VAC0174",
        "display" : "PROQUAD",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "68317",
      "display" : "Adacel 0.5 ml",
      "target" : [{
        "code" : "VAC0182",
        "display" : "ADACEL",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "600",
      "display" : "DiTe Anatoxal Erwachsene / Adultes",
      "target" : [{
        "code" : "VAC0216",
        "display" : "ANATOXAL DI TE",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "572",
      "display" : "Epaxal",
      "target" : [{
        "code" : "VAC0227",
        "display" : "EPAXAL",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "58317",
      "display" : "Fluad",
      "target" : [{
        "code" : "VAC0230",
        "display" : "FLUAD",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "544",
      "display" : "Heprecomb",
      "target" : [{
        "code" : "VAC0244",
        "display" : "HEPRECOMB",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "268",
      "display" : "MMR-II",
      "target" : [{
        "code" : "VAC0286",
        "display" : "M-M-R II",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "247",
      "display" : "Mumpsvax",
      "target" : [{
        "code" : "VAC0315",
        "display" : "MUMPSVAX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "509",
      "display" : "Pneumovax-23",
      "target" : [{
        "code" : "VAC0336",
        "display" : "PNEUMOVAX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "483",
      "display" : "Rimevax",
      "target" : [{
        "code" : "VAC0359",
        "display" : "RIMEVAX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "467",
      "display" : "Vivotif",
      "target" : [{
        "code" : "VAC0451",
        "display" : "VIVOTIF",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "66156",
      "display" : "Foclivia (Fertigspritze)",
      "target" : [{
        "code" : "VAC0475",
        "display" : "FOCLIVIA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "66161",
      "display" : "Foclivia (Durchstechflasche)",
      "target" : [{
        "code" : "VAC0475",
        "display" : "FOCLIVIA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "65730",
      "display" : "Bexsero",
      "target" : [{
        "code" : "VAC0495",
        "display" : "BEXSERO",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "60150",
      "display" : "Rotarix",
      "target" : [{
        "code" : "VAC0514",
        "display" : "ROTARIX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "62961",
      "display" : "Fluarix Tetra",
      "target" : [{
        "code" : "VAC0517",
        "display" : "FLUARIXTETRA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "68462",
      "display" : "Fluenz Tetra",
      "target" : [{
        "code" : "VAC0521",
        "display" : "FLUENZ TETRA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "65387",
      "display" : "Gardasil 9",
      "target" : [{
        "code" : "VAC0523",
        "display" : "GARDASIL 9",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "707",
      "display" : "Tetanol pur",
      "target" : [{
        "code" : "VAC0530",
        "display" : "TETANOL PUR",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "657",
      "display" : "Menjugate",
      "target" : [{
        "code" : "VAC0534",
        "display" : "MENJUGATE 10 µg",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "66037",
      "display" : "Menjugate liquid",
      "target" : [{
        "code" : "VAC0534",
        "display" : "MENJUGATE 10 µg",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "66940",
      "display" : "Vaxelis",
      "target" : [{
        "code" : "VAC0535",
        "display" : "VAXELIS",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "637",
      "display" : "Boostrix",
      "target" : [{
        "code" : "VAC0541",
        "display" : "BOOSTRIX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "66427",
      "display" : "VaxigripTetra",
      "target" : [{
        "code" : "VAC0560",
        "display" : "VAXIGRIPTETRA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "68087",
      "display" : "Influvac Tetra",
      "target" : [{
        "code" : "VAC0562",
        "display" : "INFLUVAC TETRA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "67987",
      "display" : "Shingrix",
      "target" : [{
        "code" : "VAC0567",
        "display" : "SHINGRIX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "681",
      "display" : "Boostrix Polio",
      "target" : [{
        "code" : "VAC0568",
        "display" : "BOOSTRIX-POLIO",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "638",
      "display" : "Infanrix DTPa-IPV",
      "target" : [{
        "code" : "VAC0569",
        "display" : "INFANRIX-IPV",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "603",
      "display" : "Hiberix",
      "target" : [{
        "code" : "VAC0570",
        "display" : "HIBERIX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "450",
      "display" : "FSME-Immun CC",
      "target" : [{
        "code" : "VAC0575",
        "display" : "FSME-IMMUN",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "68358",
      "display" : "Ervebo",
      "target" : [{
        "code" : "VAC0586",
        "display" : "ERVEBO",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "68221",
      "display" : "MenQuadfi",
      "target" : [{
        "code" : "VAC0594",
        "display" : "MENQUADFI",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "67482",
      "display" : "Flucelvax Tetra",
      "target" : [{
        "code" : "VAC0595",
        "display" : "FLUCELVAX TETRA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "533",
      "display" : "Moraten",
      "target" : [{
        "code" : "VAC0625",
        "display" : "MORATEN",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "68110",
      "display" : "Adacel-Polio 0.5 ml",
      "target" : [{
        "code" : "VAC0639",
        "display" : "ADACEL POLIO",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "69403",
      "display" : "Qdenga 0.5 ml",
      "target" : [{
        "code" : "VAC0644",
        "display" : "QDENGA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "67704",
      "display" : "Efluelda 0.7 ml",
      "target" : [{
        "code" : "VAC0649",
        "display" : "EFLUELDA TETRA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "68225",
      "display" : "Comirnaty (COVID-19 Vaccine, Pfizer)",
      "target" : [{
        "code" : "VAC0658",
        "display" : "COMIRNATY 30 µg BIONTECH-PFIZER",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "68710-01",
      "display" : "Comirnaty® 30 Mikrogramm/Dosis",
      "target" : [{
        "code" : "VAC0658",
        "display" : "COMIRNATY 30 µg BIONTECH-PFIZER",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "68235",
      "display" : "COVID-19 Vaccine Janssen",
      "target" : [{
        "code" : "VAC0666",
        "display" : "JCOVDEN (ancien nom : JANSSEN COVID-19 VACCINE)",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "68473",
      "display" : "Nuvaxovid 0.5 ml",
      "target" : [{
        "code" : "VAC0667",
        "display" : "NUVAXOVID",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "567",
      "display" : "Ditanrix",
      "target" : [{
        "code" : "VAC0731",
        "display" : "DITANRIX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "683",
      "display" : "FSME-Immun 0.25 ml Junior",
      "target" : [{
        "code" : "VAC0774",
        "display" : "FSME-IMMUN 0,25 mL",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "68752",
      "display" : "Vaxneuvance",
      "target" : [{
        "code" : "VAC0780",
        "display" : "VAXNEUVANCE",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "68710-02",
      "display" : "Comirnaty® 10 Mikrogramm/Dosis",
      "target" : [{
        "code" : "VAC0833",
        "display" : "COMIRNATY 10 µg BIONTECH-PFIZER",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "656",
      "display" : "NeisVac-C",
      "target" : [{
        "code" : "VAC0850",
        "display" : "NEISVAC-C",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "68003",
      "display" : "Supemtek 0.5 ml",
      "target" : [{
        "code" : "VAC0871",
        "display" : "SUPEMTEK TETRA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "69222",
      "display" : "Prevenar 20",
      "target" : [{
        "code" : "VAC0900",
        "display" : "PREVENAR 20",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "711-02",
      "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Erwachsene und Kinder ab 7 Jahren",
      "target" : [{
        "code" : "VAC0920",
        "display" : "Diphtheria-tetanus Td vaccine, unspecified",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "417",
      "display" : "Tollwut Impfstoff Mérieux",
      "target" : [{
        "code" : "VAC0935",
        "display" : "VACCIN RABIQUE INACTIVE MERIEUX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "689",
      "display" : "Te Anatoxal N",
      "target" : [{
        "code" : "VAC0961",
        "display" : "ANATOXAL TE N",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "690",
      "display" : "DiTe Anatoxal N Erwachsene / Adultes",
      "target" : [{
        "code" : "VAC0962",
        "display" : "ANATOXAL DI TE N ADULT",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "711",
      "display" : "DiTe pediatric adsorbed",
      "target" : [{
        "code" : "VAC0963",
        "display" : "ANATOXAL DI TE PER",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "69173",
      "display" : "Jynneos",
      "target" : [{
        "code" : "VAC0966",
        "display" : "JYNNEOS",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "614",
      "display" : "Inflexal V",
      "target" : [{
        "code" : "VAC0968",
        "display" : "INFLEXAL V",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "702",
      "display" : "Td-pur",
      "target" : [{
        "code" : "VAC0993",
        "display" : "TD ADSORBED",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "69009",
      "display" : "Spikevax Bivalent Original / Omicron",
      "target" : [{
        "code" : "VAC1017",
        "display" : "SPIKEVAX BIVALENT ORIGINAL/OMICRON BA.1 (50 µg/50 µg)/mL MULTIDOSE MODERNA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "68267",
      "display" : "Spikevax (COVID-19 Vaccine, Moderna)",
      "target" : [{
        "code" : "VAC1019",
        "display" : "SPIKEVAX 0,1 mg/mL MODERNA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "69047",
      "display" : "Comirnaty® Original/Omicron BA.1 15/15 µg pro Dosis",
      "target" : [{
        "code" : "VAC1021",
        "display" : "COMIRNATY ORIGINAL/OMICRON BA.1 (15/15 µg) BIONTECH-PFIZER",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "68710-03",
      "display" : "Comirnaty® 3 Mikrogramm/Dosis",
      "target" : [{
        "code" : "VAC1022",
        "display" : "COMIRNATY 3 µg 6 MOIS-4 ANS BIONTECH-PFIZER",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "69127",
      "display" : "Comirnaty Original/Omicron BA. 4-5 0.225 mg",
      "target" : [{
        "code" : "VAC1023",
        "display" : "COMIRNATY ORIGINAL/OMICRON BA.4-5 (15/15 µg) BIONTECH-PFIZER",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "69010",
      "display" : "Spikevax, Fertigspritze",
      "target" : [{
        "code" : "VAC1031",
        "display" : "SPIKEVAX 50 µg MONODOSE MODERNA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "69123",
      "display" : "Spikevax Bivalent Original / Omicron 10 mg/ml, Fertigspritze",
      "target" : [{
        "code" : "VAC1032",
        "display" : "SPIKEVAX BIVALENT ORIGINAL/OMICRON BA.1 (25 µg/25 µg) MODERNA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "69189",
      "display" : "Spikevax Bivalent Original / Omicron BA.4-5",
      "target" : [{
        "code" : "VAC1036",
        "display" : "SPIKEVAX BIVALENT ORIGINAL/OMICRON BA.4-5 25 µg/25 µg MODERNA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "69211",
      "display" : "Spikevax Bivalent Original / Omicron BA.4-5, Fertigspritze",
      "target" : [{
        "code" : "VAC1036",
        "display" : "SPIKEVAX BIVALENT ORIGINAL/OMICRON BA.4-5 25 µg/25 µg MODERNA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "69310",
      "display" : "AREXVY",
      "target" : [{
        "code" : "VAC1040",
        "display" : "AREXVY",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "619",
      "display" : "Infanrix DTPa-IPV+Hib",
      "target" : [{
        "code" : "VAC1045",
        "display" : "INFANRIX-IPV/HIB",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "69691",
      "display" : "Abrysvo",
      "target" : [{
        "code" : "VAC1047",
        "display" : "ABRYSVO",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "69488",
      "display" : "Comirnaty Omicron XBB.1.5 (30 Mikrogramm)/Dosis",
      "target" : [{
        "code" : "VAC1051",
        "display" : "PFIZER COMIRNATY-30 XBB.1.5",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "69815",
      "display" : "Comirnaty Omicron XBB.1.5, 0.042 mg",
      "target" : [{
        "code" : "VAC1053",
        "display" : "PFIZER COMIRNATY-3 XBB.1.5",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "551",
      "display" : "Engerix-B 10",
      "target" : [{
        "code" : "VAC1057",
        "display" : "ENGERIX B JUNIOR",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "69465",
      "display" : "Spikevax XBB.1.5 0.10 mg/ml",
      "target" : [{
        "code" : "VAC1058",
        "display" : "SPIKEVAX XBB.1.5 0,1 mg/mL dose 50 µg MODERNA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "69484",
      "display" : "Spikevax XBB.1.5 0.10 mg/ml",
      "target" : [{
        "code" : "VAC1058",
        "display" : "SPIKEVAX XBB.1.5 0,1 mg/mL dose 50 µg MODERNA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "555",
      "display" : "Orochol",
      "target" : [{
        "code" : "VAC1094",
        "display" : "OROCHOL",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "69781",
      "display" : "Capvaxive",
      "target" : [{
        "code" : "VAC1254",
        "display" : "CAPVAXIVE",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "69912-01",
      "display" : "Comirnaty JN.1 30 μg",
      "target" : [{
        "code" : "VAC1258",
        "display" : "COMIRNATY JN.1 30 µg",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "69912-02",
      "display" : "Comirnaty JN.1 10 μg",
      "target" : [{
        "code" : "VAC1259",
        "display" : "COMIRNATY JN.1 10 µg",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "69913",
      "display" : "Comirnaty JN.1 0.042 mg",
      "target" : [{
        "code" : "VAC1260",
        "display" : "COMIRNATY JN.1 3 µg",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "69995-01",
      "display" : "mResvia Respiratorisches-Synzytial-Virus (RSV) Vakzin 0.10 mg/ml",
      "target" : [{
        "code" : "VAC1262",
        "display" : "MRESVIA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "69788",
      "display" : "Spikevax JN.1 (mRNA-1273.167), 0.10mg/ml",
      "target" : [{
        "code" : "VAC1270",
        "display" : "SPIKEVAX JN.1 0,1 mg/mL dose 50 µg",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "69863-01",
      "display" : "Efluelda TIV 0.5 mL",
      "target" : [{
        "code" : "VAC1347",
        "display" : "EFLUELDA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "70403",
      "display" : "Comirnaty LP.8.1 30 Mikrogramm",
      "target" : [{
        "code" : "VAC1466",
        "display" : "COMIRNATY LP.8.1 30 µg",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "70400",
      "display" : "Comirnaty LP.8.1 10 μg",
      "target" : [{
        "code" : "VAC1468",
        "display" : "COMIRNATY LP.8.1 10 µg 5-11 ans",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "628",
      "display" : "Encepur N Kinder / Enfants",
      "target" : [{
        "code" : "VAC1477",
        "display" : "ENCEPUR N ENFANT",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "627",
      "display" : "Encepur N",
      "target" : [{
        "code" : "VAC1483",
        "display" : "ENCEPUR N",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "642",
      "display" : "Heprecomb Kinder",
      "target" : [{
        "code" : "VAC1484",
        "display" : "HEPRECOMB ENFANT",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "610",
      "display" : "Gen H-B-Vax 5",
      "target" : [{
        "code" : "VAC1485",
        "display" : "GEN H-B-VAX 5",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "528",
      "display" : "Gen H-B-Vax 10",
      "target" : [{
        "code" : "VAC1486",
        "display" : "GEN H-B-VAX 10",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "643",
      "display" : "Prevenar-7",
      "target" : [{
        "code" : "VAC1487",
        "display" : "PREVENAR-7",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "669",
      "display" : "Poliorix",
      "target" : [{
        "code" : "VAC1488",
        "display" : "POLIORIX",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "686",
      "display" : "Td-Virelon",
      "target" : [{
        "code" : "VAC1497",
        "display" : "TD-VIRELON",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "70205",
      "display" : "Spikevax LP.8.1",
      "target" : [{
        "code" : "VAC1500",
        "display" : "SPIKEVAX LP.8.1 50 µg",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "70490",
      "display" : "Vimkunya",
      "target" : [{
        "code" : "VAC1267",
        "display" : "VIMKUNYA",
        "equivalence" : "equal"
      }]
    },
    {
      "code" : "70144",
      "display" : "Flucelvax",
      "target" : [{
        "code" : "VAC0926",
        "display" : "FLUCELVAX",
        "equivalence" : "equal"
      }]
    }]
  }]
}

```
