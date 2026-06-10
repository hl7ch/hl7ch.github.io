# CH VACD Swissmedic Authorized Vaccine Codes - CH Term (R4) v3.4.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Swissmedic Authorized Vaccine Codes**

## ValueSet: CH VACD Swissmedic Authorized Vaccine Codes 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-swissmedic-vaccines-vs | *Version*:3.4.0 |
| Active as of 2026-06-10 | *Computable Name*:SwissMedicVaccines |
| **Copyright/Legal**: CC0-1.0 | |

 
The list of vaccines available in Switzerland (Swissmedic authorized). 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/ch-vacd-swissmedic-vaccines-vs) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "ch-vacd-swissmedic-vaccines-vs",
  "url" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-swissmedic-vaccines-vs",
  "version" : "3.4.0",
  "name" : "SwissMedicVaccines",
  "title" : "CH VACD Swissmedic Authorized Vaccine Codes",
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
  "description" : "The list of vaccines available in Switzerland (Swissmedic authorized).",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [{
      "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-cs",
      "concept" : [{
        "code" : "683",
        "display" : "FSME-Immun 0.25 ml Junior"
      },
      {
        "code" : "450",
        "display" : "FSME-Immun CC"
      },
      {
        "code" : "656",
        "display" : "NeisVac-C"
      },
      {
        "code" : "627",
        "display" : "Encepur N"
      },
      {
        "code" : "628",
        "display" : "Encepur N Kinder / Enfants"
      },
      {
        "code" : "572",
        "display" : "Epaxal"
      },
      {
        "code" : "544",
        "display" : "Heprecomb"
      },
      {
        "code" : "642",
        "display" : "Heprecomb Kinder"
      },
      {
        "code" : "614",
        "display" : "Inflexal V"
      },
      {
        "code" : "657",
        "display" : "Menjugate"
      },
      {
        "code" : "533",
        "display" : "Moraten"
      },
      {
        "code" : "555",
        "display" : "Orochol"
      },
      {
        "code" : "685",
        "display" : "Rabipur"
      },
      {
        "code" : "702",
        "display" : "Td-pur"
      },
      {
        "code" : "686",
        "display" : "Td-Virelon"
      },
      {
        "code" : "467",
        "display" : "Vivotif"
      },
      {
        "code" : "637",
        "display" : "Boostrix"
      },
      {
        "code" : "681",
        "display" : "Boostrix Polio"
      },
      {
        "code" : "567",
        "display" : "Ditanrix"
      },
      {
        "code" : "551",
        "display" : "Engerix-B 10"
      },
      {
        "code" : "534",
        "display" : "Engerix-B 20"
      },
      {
        "code" : "583",
        "display" : "Fluarix"
      },
      {
        "code" : "558",
        "display" : "Havrix 1440"
      },
      {
        "code" : "599",
        "display" : "Havrix 720"
      },
      {
        "code" : "603",
        "display" : "Hiberix"
      },
      {
        "code" : "638",
        "display" : "Infanrix DTPa-IPV"
      },
      {
        "code" : "619",
        "display" : "Infanrix DTPa-IPV+Hib"
      },
      {
        "code" : "640",
        "display" : "Infanrix hexa"
      },
      {
        "code" : "652",
        "display" : "Mencevax ACWY"
      },
      {
        "code" : "669",
        "display" : "Poliorix"
      },
      {
        "code" : "615",
        "display" : "Priorix"
      },
      {
        "code" : "592",
        "display" : "Twinrix 720/20"
      },
      {
        "code" : "585",
        "display" : "Varilrix"
      },
      {
        "code" : "528",
        "display" : "Gen H-B-Vax 10"
      },
      {
        "code" : "545",
        "display" : "HBVAXPRO 40"
      },
      {
        "code" : "610",
        "display" : "Gen H-B-Vax 5"
      },
      {
        "code" : "663",
        "display" : "HBVAXPRO 10"
      },
      {
        "code" : "268",
        "display" : "MMR-II"
      },
      {
        "code" : "247",
        "display" : "Mumpsvax"
      },
      {
        "code" : "373",
        "display" : "Mutagrip"
      },
      {
        "code" : "613",
        "display" : "Pentavac"
      },
      {
        "code" : "509",
        "display" : "Pneumovax-23"
      },
      {
        "code" : "646",
        "display" : "Revaxis"
      },
      {
        "code" : "520",
        "display" : "Stamaril"
      },
      {
        "code" : "612",
        "display" : "Tetravac"
      },
      {
        "code" : "417",
        "display" : "Tollwut Impfstoff Mérieux"
      },
      {
        "code" : "688",
        "display" : "Varivax"
      },
      {
        "code" : "485",
        "display" : "Influvac"
      },
      {
        "code" : "660",
        "display" : "Influvac plus"
      },
      {
        "code" : "654",
        "display" : "Meningitec"
      },
      {
        "code" : "643",
        "display" : "Prevenar-7"
      },
      {
        "code" : "644",
        "display" : "Hexavac"
      },
      {
        "code" : "711",
        "display" : "DiTe pediatric adsorbed"
      },
      {
        "code" : "711-01",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren"
      },
      {
        "code" : "711-02",
        "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Erwachsene und Kinder ab 7 Jahren"
      },
      {
        "code" : "704",
        "display" : "Dukoral"
      },
      {
        "code" : "483",
        "display" : "Rimevax"
      },
      {
        "code" : "707",
        "display" : "Tetanol pur"
      },
      {
        "code" : "57735",
        "display" : "Gardasil"
      },
      {
        "code" : "709",
        "display" : "Zostavax"
      },
      {
        "code" : "58158",
        "display" : "Priorix-Tetra"
      },
      {
        "code" : "696",
        "display" : "BCG SSI"
      },
      {
        "code" : "58317",
        "display" : "Fluad"
      },
      {
        "code" : "60150",
        "display" : "Rotarix"
      },
      {
        "code" : "703",
        "display" : "MMRVaxPro"
      },
      {
        "code" : "58506",
        "display" : "Measles vaccine live"
      },
      {
        "code" : "59267",
        "display" : "Agrippal"
      },
      {
        "code" : "58271",
        "display" : "Optaflu"
      },
      {
        "code" : "57814",
        "display" : "Cervarix"
      },
      {
        "code" : "60129",
        "display" : "Prevenar 13"
      },
      {
        "code" : "59147",
        "display" : "Ixiaro"
      },
      {
        "code" : "62502",
        "display" : "Menveo"
      },
      {
        "code" : "600",
        "display" : "DiTe Anatoxal Erwachsene / Adultes"
      },
      {
        "code" : "690",
        "display" : "DiTe Anatoxal N Erwachsene / Adultes"
      },
      {
        "code" : "689",
        "display" : "Te Anatoxal N"
      },
      {
        "code" : "62961",
        "display" : "Fluarix Tetra"
      },
      {
        "code" : "66037",
        "display" : "Menjugate liquid"
      },
      {
        "code" : "699",
        "display" : "ProQuad"
      },
      {
        "code" : "65728",
        "display" : "Gardasil 9 (Durchstechflasche)"
      },
      {
        "code" : "65387",
        "display" : "Gardasil 9"
      },
      {
        "code" : "66940",
        "display" : "Vaxelis"
      },
      {
        "code" : "66427",
        "display" : "VaxigripTetra"
      },
      {
        "code" : "65730",
        "display" : "Bexsero"
      },
      {
        "code" : "68087",
        "display" : "Influvac Tetra"
      },
      {
        "code" : "68267",
        "display" : "Spikevax (COVID-19 Vaccine, Moderna)"
      },
      {
        "code" : "68225",
        "display" : "Comirnaty (COVID-19 Vaccine, Pfizer)"
      },
      {
        "code" : "68235",
        "display" : "COVID-19 Vaccine Janssen"
      },
      {
        "code" : "67987",
        "display" : "Shingrix"
      },
      {
        "code" : "67482",
        "display" : "Flucelvax Tetra"
      },
      {
        "code" : "67704",
        "display" : "Efluelda 0.7 ml"
      },
      {
        "code" : "68003",
        "display" : "Supemtek 0.5 ml"
      },
      {
        "code" : "66161",
        "display" : "Foclivia (Durchstechflasche)"
      },
      {
        "code" : "66156",
        "display" : "Foclivia (Fertigspritze)"
      },
      {
        "code" : "68473",
        "display" : "Nuvaxovid 0.5 ml"
      },
      {
        "code" : "68358",
        "display" : "Ervebo"
      },
      {
        "code" : "68710-01",
        "display" : "Comirnaty® 30 Mikrogramm/Dosis"
      },
      {
        "code" : "68710-02",
        "display" : "Comirnaty® 10 Mikrogramm/Dosis"
      },
      {
        "code" : "68710-03",
        "display" : "Comirnaty® 3 Mikrogramm/Dosis"
      },
      {
        "code" : "68462",
        "display" : "Fluenz Tetra"
      },
      {
        "code" : "69009",
        "display" : "Spikevax Bivalent Original / Omicron"
      },
      {
        "code" : "68110",
        "display" : "Adacel-Polio 0.5 ml"
      },
      {
        "code" : "68317",
        "display" : "Adacel 0.5 ml"
      },
      {
        "code" : "68221",
        "display" : "MenQuadfi"
      },
      {
        "code" : "69123",
        "display" : "Spikevax Bivalent Original / Omicron 10 mg/ml"
      },
      {
        "code" : "69010",
        "display" : "Spikevax"
      },
      {
        "code" : "69047",
        "display" : "Comirnaty® Original/Omicron BA.1 15/15 µg pro Dosis"
      },
      {
        "code" : "69127",
        "display" : "Comirnaty Original/Omicron BA. 4-5 0.225 mg"
      },
      {
        "code" : "69189",
        "display" : "Spikevax Bivalent Original / Omicron BA.4-5"
      },
      {
        "code" : "69211",
        "display" : "Spikevax Bivalent Original / Omicron BA.4-5"
      },
      {
        "code" : "68752",
        "display" : "Vaxneuvance"
      },
      {
        "code" : "69465",
        "display" : "Spikevax XBB.1.5 0.10 mg/ml"
      },
      {
        "code" : "69484",
        "display" : "Spikevax XBB.1.5 0.10 mg/ml"
      },
      {
        "code" : "69488",
        "display" : "Comirnaty Omicron XBB.1.5 (30 Mikrogramm)/dose"
      },
      {
        "code" : "69310",
        "display" : "AREXVY"
      },
      {
        "code" : "69173",
        "display" : "Jynneos"
      },
      {
        "code" : "69222",
        "display" : "Prevenar 20"
      },
      {
        "code" : "69815",
        "display" : "Comirnaty Omicron XBB.1.5, 0.042 mg"
      },
      {
        "code" : "69403",
        "display" : "Qdenga 0.5 ml"
      },
      {
        "code" : "69913",
        "display" : "Comirnaty JN.1 0.042 mg"
      },
      {
        "code" : "69912-01",
        "display" : "Comirnaty JN.1 30 µg"
      },
      {
        "code" : "69912-02",
        "display" : "Comirnaty JN.1 10 µg"
      },
      {
        "code" : "69691",
        "display" : "Abrysvo"
      },
      {
        "code" : "69788",
        "display" : "Spikevax JN.1 (mRNA-1273.167), 0.10mg/ml"
      },
      {
        "code" : "70205",
        "display" : "Spikevax LP.8.1"
      },
      {
        "code" : "70400",
        "display" : "Comirnaty LP.8.1 10 µg"
      },
      {
        "code" : "70403",
        "display" : "Comirnaty LP.8.1 30 µg"
      },
      {
        "code" : "69863-01",
        "display" : "Efluelda TIV 0.5 mL"
      },
      {
        "code" : "69995-01",
        "display" : "mResvia Respiratorisches-Synzytial-Virus (RSV) Vakzin 0.10 mg/ml"
      },
      {
        "code" : "69781",
        "display" : "Capvaxive"
      },
      {
        "code" : "70042",
        "display" : "Fluarix"
      },
      {
        "code" : "69992",
        "display" : "Influvac 0.5 ml"
      },
      {
        "code" : "70144",
        "display" : "Flucelvax"
      },
      {
        "code" : "70490",
        "display" : "Vimkunya"
      }]
    }]
  }
}

```
