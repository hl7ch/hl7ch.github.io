# CH VACD Old Swiss Vaccine Codes - CH Term (R4) v3.4.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Old Swiss Vaccine Codes**

## ValueSet: CH VACD Old Swiss Vaccine Codes 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-oldswiss-vaccines-vs | *Version*:3.4.0 |
| Active as of 2026-06-10 | *Computable Name*:OldSwissVaccines |
| **Copyright/Legal**: CC0-1.0 | |

 
Old vaccines codes earlier available in Switzerland. 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/ch-vacd-oldswiss-vaccines-vs) via the XIG (Cross-IG) index for FHIR specifications. 

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
  "id" : "ch-vacd-oldswiss-vaccines-vs",
  "url" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-oldswiss-vaccines-vs",
  "version" : "3.4.0",
  "name" : "OldSwissVaccines",
  "title" : "CH VACD Old Swiss Vaccine Codes",
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
  "description" : "Old vaccines codes earlier available in Switzerland.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [{
      "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-myvaccines-cs",
      "concept" : [{
        "code" : "14",
        "display" : "MoRu-Viraten"
      },
      {
        "code" : "17",
        "display" : "Poliomyelitis Impfstoff Berna"
      },
      {
        "code" : "23",
        "display" : "Triviraten"
      },
      {
        "code" : "25",
        "display" : "Vivotif L"
      },
      {
        "code" : "35",
        "display" : "Infanrix DTPa"
      },
      {
        "code" : "39",
        "display" : "Infanrix Penta"
      },
      {
        "code" : "47",
        "display" : "Attenuvax"
      },
      {
        "code" : "48",
        "display" : "BCG"
      },
      {
        "code" : "53",
        "display" : "HBVAXPRO 5"
      },
      {
        "code" : "55",
        "display" : "Meningokokken-Impfstoff A+C Mérieux"
      },
      {
        "code" : "56",
        "display" : "Meruvax"
      },
      {
        "code" : "73",
        "display" : "Infanrix DTPa+Hib"
      },
      {
        "code" : "74",
        "display" : "Twinrix 360/10"
      },
      {
        "code" : "75",
        "display" : "Pluserix"
      },
      {
        "code" : "76",
        "display" : "Acel Immune"
      },
      {
        "code" : "77",
        "display" : "Acel P"
      },
      {
        "code" : "78",
        "display" : "Act-Hib"
      },
      {
        "code" : "79",
        "display" : "Anatoxal DiTePer"
      },
      {
        "code" : "80",
        "display" : "Anatoxal DiTe Erwachsene"
      },
      {
        "code" : "81",
        "display" : "Anatoxal DiTe N Erwachsene"
      },
      {
        "code" : "82",
        "display" : "Anatoxal Di"
      },
      {
        "code" : "83",
        "display" : "Anatoxal Te"
      },
      {
        "code" : "84",
        "display" : "Anatoxal Te N"
      },
      {
        "code" : "86",
        "display" : "Arilvax"
      },
      {
        "code" : "87",
        "display" : "BCG Vaccin Mérieux"
      },
      {
        "code" : "88",
        "display" : "Biviraten"
      },
      {
        "code" : "91",
        "display" : "Ervevax"
      },
      {
        "code" : "92",
        "display" : "HibTiter"
      },
      {
        "code" : "93",
        "display" : "Infanrix DTPa-HBV"
      },
      {
        "code" : "94",
        "display" : "Lyssavac Berna"
      },
      {
        "code" : "95",
        "display" : "Vaccin méningococcique A+C Mérieux"
      },
      {
        "code" : "96",
        "display" : "MM Vax"
      },
      {
        "code" : "97",
        "display" : "Mumaten"
      },
      {
        "code" : "98",
        "display" : "Pedvax"
      },
      {
        "code" : "99",
        "display" : "Pentacoq"
      },
      {
        "code" : "100",
        "display" : "Pnu-Immune"
      },
      {
        "code" : "101",
        "display" : "Polio Salk"
      },
      {
        "code" : "102",
        "display" : "Polio Sabin"
      },
      {
        "code" : "103",
        "display" : "Poloral"
      },
      {
        "code" : "106",
        "display" : "Tetracoq"
      },
      {
        "code" : "107",
        "display" : "Tetramune"
      },
      {
        "code" : "110",
        "display" : "Vaqta"
      },
      {
        "code" : "111",
        "display" : "Rubeaten"
      },
      {
        "code" : "112",
        "display" : "Rudivax"
      },
      {
        "code" : "115",
        "display" : "Havrix 360"
      },
      {
        "code" : "117",
        "display" : "Almevax"
      },
      {
        "code" : "118",
        "display" : "Hevac B"
      },
      {
        "code" : "119",
        "display" : "MMR-I"
      },
      {
        "code" : "120",
        "display" : "Moruman"
      },
      {
        "code" : "121",
        "display" : "Rimparix"
      },
      {
        "code" : "122",
        "display" : "Rubevac"
      },
      {
        "code" : "123",
        "display" : "Trimovax"
      },
      {
        "code" : "126",
        "display" : "Ditanrix pediatric"
      },
      {
        "code" : "127",
        "display" : "Eolarix"
      },
      {
        "code" : "128",
        "display" : "FSME-Immun Injekt"
      },
      {
        "code" : "133",
        "display" : "ProHibit"
      },
      {
        "code" : "134",
        "display" : "Anatoxal DiTe Kinder"
      },
      {
        "code" : "136",
        "display" : "Celtura"
      },
      {
        "code" : "137",
        "display" : "Focetria"
      },
      {
        "code" : "138",
        "display" : "K1, K2, K3"
      },
      {
        "code" : "139",
        "display" : "Koprowski"
      },
      {
        "code" : "141",
        "display" : "Pandemrix"
      },
      {
        "code" : "142",
        "display" : "Prohibit DTP"
      },
      {
        "code" : "143",
        "display" : "TAB oral"
      },
      {
        "code" : "144",
        "display" : "Variola"
      },
      {
        "code" : "147",
        "display" : "Polio Koprowski (K1-K3)"
      },
      {
        "code" : "148",
        "display" : "Polio Lilly"
      },
      {
        "code" : "151",
        "display" : "Di Anatoxal"
      },
      {
        "code" : "154",
        "display" : "DiTe Anatoxal Kinder / Enfants"
      },
      {
        "code" : "155",
        "display" : "DiTePer Anatoxal"
      },
      {
        "code" : "162",
        "display" : "HBVAX DNA 5"
      },
      {
        "code" : "163",
        "display" : "HBVAX DNA 10"
      },
      {
        "code" : "164",
        "display" : "HBVAX DNA 40"
      },
      {
        "code" : "165",
        "display" : "Havrix junior"
      },
      {
        "code" : "166",
        "display" : "Infanrix"
      },
      {
        "code" : "168",
        "display" : "Tanrix"
      },
      {
        "code" : "169",
        "display" : "Vaccin variole"
      },
      {
        "code" : "170",
        "display" : "Engerix-B 40"
      },
      {
        "code" : "172",
        "display" : "Hepavax"
      },
      {
        "code" : "16",
        "display" : "Orochol E"
      }]
    }]
  }
}

```
