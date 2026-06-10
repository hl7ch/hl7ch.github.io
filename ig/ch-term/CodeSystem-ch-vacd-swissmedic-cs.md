# CH VACD Swissmedic Authorized Vaccines - CH Term (R4) v3.4.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Swissmedic Authorized Vaccines**

## CodeSystem: CH VACD Swissmedic Authorized Vaccines 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-cs | *Version*:3.4.0 |
| Active as of 2026-06-10 | *Computable Name*:SwissMedicAuthorizedVaccinesCodesystem |
| **Copyright/Legal**: CC0-1.0 | |

 
The vaccines Swissmedic has given an autorization number. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [SwissMedicVaccines](ValueSet-ch-vacd-swissmedic-vaccines-vs.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-vacd-swissmedic-cs",
  "url" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-cs",
  "version" : "3.4.0",
  "name" : "SwissMedicAuthorizedVaccinesCodesystem",
  "title" : "CH VACD Swissmedic Authorized Vaccines",
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
  "description" : "The vaccines Swissmedic has given an autorization number.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 133,
  "concept" : [{
    "code" : "683",
    "display" : "FSME-Immun 0.25 ml Junior",
    "definition" : "FSME-Immun 0.25 ml Junior, Suspension zur intramuskulären Injektion, Pfizer AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "FSME-Immun 0.25 ml Junior"
    },
    {
      "language" : "fr-CH",
      "value" : "FSME-Immun 0.25 ml Junior"
    },
    {
      "language" : "it-CH",
      "value" : "FSME-Immun 0.25 ml Junior"
    },
    {
      "language" : "rm-CH",
      "value" : "FSME-Immun 0.25 ml Junior"
    },
    {
      "language" : "en",
      "value" : "FSME-Immun 0.25 ml Junior"
    }]
  },
  {
    "code" : "450",
    "display" : "FSME-Immun CC",
    "definition" : "FSME-Immun CC, Suspension zur intramuskulären Injektion, Pfizer AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "FSME-Immun CC"
    },
    {
      "language" : "fr-CH",
      "value" : "FSME-Immun CC"
    },
    {
      "language" : "it-CH",
      "value" : "FSME-Immun CC"
    },
    {
      "language" : "rm-CH",
      "value" : "FSME-Immun CC"
    },
    {
      "language" : "en",
      "value" : "FSME-Immun CC"
    }]
  },
  {
    "code" : "656",
    "display" : "NeisVac-C",
    "definition" : "NeisVac-C, Injektionssuspension, Pfizer AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "NeisVac-C"
    },
    {
      "language" : "fr-CH",
      "value" : "NeisVac-C"
    },
    {
      "language" : "it-CH",
      "value" : "NeisVac-C"
    },
    {
      "language" : "rm-CH",
      "value" : "NeisVac-C"
    },
    {
      "language" : "en",
      "value" : "NeisVac-C"
    }]
  },
  {
    "code" : "627",
    "display" : "Encepur N",
    "definition" : "Encepur N, Injektionssuspension, Bavarian Nordic Switzerland AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Encepur N"
    },
    {
      "language" : "fr-CH",
      "value" : "Encepur N"
    },
    {
      "language" : "it-CH",
      "value" : "Encepur N"
    },
    {
      "language" : "rm-CH",
      "value" : "Encepur N"
    },
    {
      "language" : "en",
      "value" : "Encepur N"
    }]
  },
  {
    "code" : "628",
    "display" : "Encepur N Kinder / Enfants",
    "definition" : "Encepur N Kinder, Injektionssuspension, Bavarian Nordic Switzerland AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Encepur N Kinder"
    },
    {
      "language" : "fr-CH",
      "value" : "Encepur N enfants"
    },
    {
      "language" : "it-CH",
      "value" : "Encepur N bambini"
    },
    {
      "language" : "rm-CH",
      "value" : "Encepur N uffants"
    },
    {
      "language" : "en",
      "value" : "Encepur N childrean"
    }]
  },
  {
    "code" : "572",
    "display" : "Epaxal",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Epaxal"
    },
    {
      "language" : "fr-CH",
      "value" : "Epaxal"
    },
    {
      "language" : "it-CH",
      "value" : "Epaxal"
    },
    {
      "language" : "rm-CH",
      "value" : "Epaxal"
    },
    {
      "language" : "en",
      "value" : "Epaxal"
    }]
  },
  {
    "code" : "544",
    "display" : "Heprecomb",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Heprecomb"
    },
    {
      "language" : "fr-CH",
      "value" : "Heprecomb"
    },
    {
      "language" : "it-CH",
      "value" : "Heprecomb"
    },
    {
      "language" : "rm-CH",
      "value" : "Heprecomb"
    },
    {
      "language" : "en",
      "value" : "Heprecomb"
    }]
  },
  {
    "code" : "642",
    "display" : "Heprecomb Kinder",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Heprecomb Kinder"
    },
    {
      "language" : "fr-CH",
      "value" : "Heprecomb enfants"
    },
    {
      "language" : "it-CH",
      "value" : "Heprecomb bambini"
    },
    {
      "language" : "rm-CH",
      "value" : "Heprecomb uffants"
    },
    {
      "language" : "en",
      "value" : "Heprecomb childrean"
    }]
  },
  {
    "code" : "614",
    "display" : "Inflexal V",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Inflexal V"
    },
    {
      "language" : "fr-CH",
      "value" : "Inflexal V"
    },
    {
      "language" : "it-CH",
      "value" : "Inflexal V"
    },
    {
      "language" : "rm-CH",
      "value" : "Inflexal V"
    },
    {
      "language" : "en",
      "value" : "Inflexal V"
    }]
  },
  {
    "code" : "657",
    "display" : "Menjugate",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Menjugate"
    },
    {
      "language" : "fr-CH",
      "value" : "Menjugate"
    },
    {
      "language" : "it-CH",
      "value" : "Menjugate"
    },
    {
      "language" : "rm-CH",
      "value" : "Menjugate"
    },
    {
      "language" : "en",
      "value" : "Menjugate"
    }]
  },
  {
    "code" : "533",
    "display" : "Moraten",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Moraten"
    },
    {
      "language" : "fr-CH",
      "value" : "Moraten"
    },
    {
      "language" : "it-CH",
      "value" : "Moraten"
    },
    {
      "language" : "rm-CH",
      "value" : "Moraten"
    },
    {
      "language" : "en",
      "value" : "Moraten"
    }]
  },
  {
    "code" : "555",
    "display" : "Orochol",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Orochol"
    },
    {
      "language" : "fr-CH",
      "value" : "Orochol"
    },
    {
      "language" : "it-CH",
      "value" : "Orochol"
    },
    {
      "language" : "rm-CH",
      "value" : "Orochol"
    },
    {
      "language" : "en",
      "value" : "Orochol"
    }]
  },
  {
    "code" : "685",
    "display" : "Rabipur",
    "definition" : "Rabipur, Pulver und Lösungsmittel zur Herstellung einer Injektionslösung in einer Fertigspritze, Bavarian Nordic Berna GmbH",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Rabipur"
    },
    {
      "language" : "fr-CH",
      "value" : "Rabipur"
    },
    {
      "language" : "it-CH",
      "value" : "Rabipur"
    },
    {
      "language" : "rm-CH",
      "value" : "Rabipur"
    },
    {
      "language" : "en",
      "value" : "Rabipur"
    }]
  },
  {
    "code" : "702",
    "display" : "Td-pur",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Td-pur"
    },
    {
      "language" : "fr-CH",
      "value" : "Td-pur"
    },
    {
      "language" : "it-CH",
      "value" : "Td-pur"
    },
    {
      "language" : "rm-CH",
      "value" : "Td-pur"
    },
    {
      "language" : "en",
      "value" : "Td-pur"
    }]
  },
  {
    "code" : "686",
    "display" : "Td-Virelon",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Td-Virelon"
    },
    {
      "language" : "fr-CH",
      "value" : "Td-Virelon"
    },
    {
      "language" : "it-CH",
      "value" : "Td-Virelon"
    },
    {
      "language" : "rm-CH",
      "value" : "Td-Virelon"
    },
    {
      "language" : "en",
      "value" : "Td-Virelon"
    }]
  },
  {
    "code" : "467",
    "display" : "Vivotif",
    "definition" : "Vivotif, Kapseln, Bavarian Nordic Berna GmbH",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Vivotif"
    },
    {
      "language" : "fr-CH",
      "value" : "Vivotif"
    },
    {
      "language" : "it-CH",
      "value" : "Vivotif"
    },
    {
      "language" : "rm-CH",
      "value" : "Vivotif"
    },
    {
      "language" : "en",
      "value" : "Vivotif"
    }]
  },
  {
    "code" : "637",
    "display" : "Boostrix",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Boostrix"
    },
    {
      "language" : "fr-CH",
      "value" : "Boostrix"
    },
    {
      "language" : "it-CH",
      "value" : "Boostrix"
    },
    {
      "language" : "rm-CH",
      "value" : "Boostrix"
    },
    {
      "language" : "en",
      "value" : "Boostrix"
    }]
  },
  {
    "code" : "681",
    "display" : "Boostrix Polio",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Boostrix Polio"
    },
    {
      "language" : "fr-CH",
      "value" : "Boostrix Polio"
    },
    {
      "language" : "it-CH",
      "value" : "Boostrix Polio"
    },
    {
      "language" : "rm-CH",
      "value" : "Boostrix Polio"
    },
    {
      "language" : "en",
      "value" : "Boostrix Polio"
    }]
  },
  {
    "code" : "567",
    "display" : "Ditanrix",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Ditanrix"
    },
    {
      "language" : "fr-CH",
      "value" : "Ditanrix"
    },
    {
      "language" : "it-CH",
      "value" : "Ditanrix"
    },
    {
      "language" : "rm-CH",
      "value" : "Ditanrix"
    },
    {
      "language" : "en",
      "value" : "Ditanrix"
    }]
  },
  {
    "code" : "551",
    "display" : "Engerix-B 10",
    "definition" : "Engerix-B 10, Injektionssuspension, GlaxoSmithKline AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Engerix-B 10"
    },
    {
      "language" : "fr-CH",
      "value" : "Engerix-B 10"
    },
    {
      "language" : "it-CH",
      "value" : "Engerix-B 10"
    },
    {
      "language" : "rm-CH",
      "value" : "Engerix-B 10"
    },
    {
      "language" : "en",
      "value" : "Engerix-B 10"
    }]
  },
  {
    "code" : "534",
    "display" : "Engerix-B 20",
    "definition" : "Engerix-B 20, Injektionssuspension, GlaxoSmithKline AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Engerix-B 20"
    },
    {
      "language" : "fr-CH",
      "value" : "Engerix-B 20"
    },
    {
      "language" : "it-CH",
      "value" : "Engerix-B 20"
    },
    {
      "language" : "rm-CH",
      "value" : "Engerix-B 20"
    },
    {
      "language" : "en",
      "value" : "Engerix-B 20"
    }]
  },
  {
    "code" : "583",
    "display" : "Fluarix",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Fluarix"
    },
    {
      "language" : "fr-CH",
      "value" : "Fluarix"
    },
    {
      "language" : "it-CH",
      "value" : "Fluarix"
    },
    {
      "language" : "rm-CH",
      "value" : "Fluarix"
    },
    {
      "language" : "en",
      "value" : "Fluarix"
    }]
  },
  {
    "code" : "558",
    "display" : "Havrix 1440",
    "definition" : "Havrix 1440, Injektionssuspension, GlaxoSmithKline AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Havrix 1440"
    },
    {
      "language" : "fr-CH",
      "value" : "Havrix 1440"
    },
    {
      "language" : "it-CH",
      "value" : "Havrix 1440"
    },
    {
      "language" : "rm-CH",
      "value" : "Havrix 1440"
    },
    {
      "language" : "en",
      "value" : "Havrix 1440"
    }]
  },
  {
    "code" : "599",
    "display" : "Havrix 720",
    "definition" : "Havrix 720, Injektionssuspension, GlaxoSmithKline AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Havrix 720"
    },
    {
      "language" : "fr-CH",
      "value" : "Havrix 720"
    },
    {
      "language" : "it-CH",
      "value" : "Havrix 720"
    },
    {
      "language" : "rm-CH",
      "value" : "Havrix 720"
    },
    {
      "language" : "en",
      "value" : "Havrix 720"
    }]
  },
  {
    "code" : "603",
    "display" : "Hiberix",
    "definition" : "Hiberix, Pulver und Lösungsmittel zur Herstellung einer Injektionslösung, GlaxoSmithKline AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Hiberix"
    },
    {
      "language" : "fr-CH",
      "value" : "Hiberix"
    },
    {
      "language" : "it-CH",
      "value" : "Hiberix"
    },
    {
      "language" : "rm-CH",
      "value" : "Hiberix"
    },
    {
      "language" : "en",
      "value" : "Hiberix"
    }]
  },
  {
    "code" : "638",
    "display" : "Infanrix DTPa-IPV",
    "definition" : "Infanrix DTPa-IPV, Injektionssuspension, GlaxoSmithKline AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Infanrix DTPa-IPV"
    },
    {
      "language" : "fr-CH",
      "value" : "Infanrix DTPa-IPV"
    },
    {
      "language" : "it-CH",
      "value" : "Infanrix DTPa-IPV"
    },
    {
      "language" : "rm-CH",
      "value" : "Infanrix DTPa-IPV"
    },
    {
      "language" : "en",
      "value" : "Infanrix DTPa-IPV"
    }]
  },
  {
    "code" : "619",
    "display" : "Infanrix DTPa-IPV+Hib",
    "definition" : "Infanrix DTPa-IPV+Hib, Pulver und Suspension zur Herstellung einer Injektionssuspension, GlaxoSmithKline AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Infanrix DTPa-IPV+Hib"
    },
    {
      "language" : "fr-CH",
      "value" : "Infanrix DTPa-IPV+Hib"
    },
    {
      "language" : "it-CH",
      "value" : "Infanrix DTPa-IPV+Hib"
    },
    {
      "language" : "rm-CH",
      "value" : "Infanrix DTPa-IPV+Hib"
    },
    {
      "language" : "en",
      "value" : "Infanrix DTPa-IPV+Hib"
    }]
  },
  {
    "code" : "640",
    "display" : "Infanrix hexa",
    "definition" : "Infanrix hexa, Pulver und Suspension zur Herstellung einer Injektionssuspension, GlaxoSmithKline AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Infanrix hexa"
    },
    {
      "language" : "fr-CH",
      "value" : "Infanrix hexa"
    },
    {
      "language" : "it-CH",
      "value" : "Infanrix hexa"
    },
    {
      "language" : "rm-CH",
      "value" : "Infanrix hexa"
    },
    {
      "language" : "en",
      "value" : "Infanrix hexa"
    }]
  },
  {
    "code" : "652",
    "display" : "Mencevax ACWY",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Mencevax ACWY"
    },
    {
      "language" : "fr-CH",
      "value" : "Mencevax ACWY"
    },
    {
      "language" : "it-CH",
      "value" : "Mencevax ACWY"
    },
    {
      "language" : "rm-CH",
      "value" : "Mencevax ACWY"
    },
    {
      "language" : "en",
      "value" : "Mencevax ACWY"
    }]
  },
  {
    "code" : "669",
    "display" : "Poliorix",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Poliorix"
    },
    {
      "language" : "fr-CH",
      "value" : "Poliorix"
    },
    {
      "language" : "it-CH",
      "value" : "Poliorix"
    },
    {
      "language" : "rm-CH",
      "value" : "Poliorix"
    },
    {
      "language" : "en",
      "value" : "Poliorix"
    }]
  },
  {
    "code" : "615",
    "display" : "Priorix",
    "definition" : "Priorix, Pulver und Lösungsmittel zur Herstellung einer Injektionslösung, GlaxoSmithKline AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Priorix"
    },
    {
      "language" : "fr-CH",
      "value" : "Priorix"
    },
    {
      "language" : "it-CH",
      "value" : "Priorix"
    },
    {
      "language" : "rm-CH",
      "value" : "Priorix"
    },
    {
      "language" : "en",
      "value" : "Priorix"
    }]
  },
  {
    "code" : "592",
    "display" : "Twinrix 720/20",
    "definition" : "Twinrix 720/20, Injektionssuspension, GlaxoSmithKline AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Twinrix 720/20"
    },
    {
      "language" : "fr-CH",
      "value" : "Twinrix 720/20"
    },
    {
      "language" : "it-CH",
      "value" : "Twinrix 720/20"
    },
    {
      "language" : "rm-CH",
      "value" : "Twinrix 720/20"
    },
    {
      "language" : "en",
      "value" : "Twinrix 720/20"
    }]
  },
  {
    "code" : "585",
    "display" : "Varilrix",
    "definition" : "Varilrix, Pulver und Lösungsmittel zur Herstellung einer Injektionslösung, GlaxoSmithKline AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Varilrix"
    },
    {
      "language" : "fr-CH",
      "value" : "Varilrix"
    },
    {
      "language" : "it-CH",
      "value" : "Varilrix"
    },
    {
      "language" : "rm-CH",
      "value" : "Varilrix"
    },
    {
      "language" : "en",
      "value" : "Varilrix"
    }]
  },
  {
    "code" : "528",
    "display" : "Gen H-B-Vax 10",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Gen H-B-Vax 10"
    },
    {
      "language" : "fr-CH",
      "value" : "Gen H-B-Vax 10"
    },
    {
      "language" : "it-CH",
      "value" : "Gen H-B-Vax 10"
    },
    {
      "language" : "rm-CH",
      "value" : "Gen H-B-Vax 10"
    },
    {
      "language" : "en",
      "value" : "Gen H-B-Vax 10"
    }]
  },
  {
    "code" : "545",
    "display" : "HBVAXPRO 40",
    "definition" : "HBVAXPRO 40, Injektionssuspension, MSD Merck Sharp & Dohme AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "HBVAXPRO 40"
    },
    {
      "language" : "fr-CH",
      "value" : "HBVAXPRO 40"
    },
    {
      "language" : "it-CH",
      "value" : "HBVAXPRO 40"
    },
    {
      "language" : "rm-CH",
      "value" : "HBVAXPRO 40"
    },
    {
      "language" : "en",
      "value" : "HBVAXPRO 40"
    }]
  },
  {
    "code" : "610",
    "display" : "Gen H-B-Vax 5",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Gen H-B-Vax 5"
    },
    {
      "language" : "fr-CH",
      "value" : "Gen H-B-Vax 5"
    },
    {
      "language" : "it-CH",
      "value" : "Gen H-B-Vax 5"
    },
    {
      "language" : "rm-CH",
      "value" : "Gen H-B-Vax 5"
    },
    {
      "language" : "en",
      "value" : "Gen H-B-Vax 5"
    }]
  },
  {
    "code" : "663",
    "display" : "HBVAXPRO 10",
    "definition" : "HBVAXPRO 10, Injektionssuspension, MSD Merck Sharp & Dohme AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "HBVAXPRO 10"
    },
    {
      "language" : "fr-CH",
      "value" : "HBVAXPRO 10"
    },
    {
      "language" : "it-CH",
      "value" : "HBVAXPRO 10"
    },
    {
      "language" : "rm-CH",
      "value" : "HBVAXPRO 10"
    },
    {
      "language" : "en",
      "value" : "HBVAXPRO 10"
    }]
  },
  {
    "code" : "268",
    "display" : "MMR-II",
    "designation" : [{
      "language" : "de-CH",
      "value" : "MMR-II"
    },
    {
      "language" : "fr-CH",
      "value" : "MMR-II"
    },
    {
      "language" : "it-CH",
      "value" : "MMR-II"
    },
    {
      "language" : "rm-CH",
      "value" : "MMR-II"
    },
    {
      "language" : "en",
      "value" : "MMR-II"
    }]
  },
  {
    "code" : "247",
    "display" : "Mumpsvax",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Mumpsvax"
    },
    {
      "language" : "fr-CH",
      "value" : "Mumpsvax"
    },
    {
      "language" : "it-CH",
      "value" : "Mumpsvax"
    },
    {
      "language" : "rm-CH",
      "value" : "Mumpsvax"
    },
    {
      "language" : "en",
      "value" : "Mumpsvax"
    }]
  },
  {
    "code" : "373",
    "display" : "Mutagrip",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Mutagrip"
    },
    {
      "language" : "fr-CH",
      "value" : "Mutagrip"
    },
    {
      "language" : "it-CH",
      "value" : "Mutagrip"
    },
    {
      "language" : "rm-CH",
      "value" : "Mutagrip"
    },
    {
      "language" : "en",
      "value" : "Mutagrip"
    }]
  },
  {
    "code" : "613",
    "display" : "Pentavac",
    "definition" : "Pentavac, Poudre et suspension pour suspension injectable, Sanofi-Aventis (Suisse) SA",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Pentavac"
    },
    {
      "language" : "fr-CH",
      "value" : "Pentavac"
    },
    {
      "language" : "it-CH",
      "value" : "Pentavac"
    },
    {
      "language" : "rm-CH",
      "value" : "Pentavac"
    },
    {
      "language" : "en",
      "value" : "Pentavac"
    }]
  },
  {
    "code" : "509",
    "display" : "Pneumovax-23",
    "definition" : "Pneumovax-23, Injektionslösung in einer Fertigspritze, MSD Merck Sharp & Dohme AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Pneumovax-23"
    },
    {
      "language" : "fr-CH",
      "value" : "Pneumovax-23"
    },
    {
      "language" : "it-CH",
      "value" : "Pneumovax-23"
    },
    {
      "language" : "rm-CH",
      "value" : "Pneumovax-23"
    },
    {
      "language" : "en",
      "value" : "Pneumovax-23"
    }]
  },
  {
    "code" : "646",
    "display" : "Revaxis",
    "definition" : "Revaxis, suspension injectable, Sanofi-Aventis (Suisse) SA",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Revaxis"
    },
    {
      "language" : "fr-CH",
      "value" : "Revaxis"
    },
    {
      "language" : "it-CH",
      "value" : "Revaxis"
    },
    {
      "language" : "rm-CH",
      "value" : "Revaxis"
    },
    {
      "language" : "en",
      "value" : "Revaxis"
    }]
  },
  {
    "code" : "520",
    "display" : "Stamaril",
    "definition" : "Stamaril, poudre et solvant pour suspension injectable, Sanofi-Aventis (Suisse) SA",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Stamaril"
    },
    {
      "language" : "fr-CH",
      "value" : "Stamaril"
    },
    {
      "language" : "it-CH",
      "value" : "Stamaril"
    },
    {
      "language" : "rm-CH",
      "value" : "Stamaril"
    },
    {
      "language" : "en",
      "value" : "Stamaril"
    }]
  },
  {
    "code" : "612",
    "display" : "Tetravac",
    "definition" : "Tetravac, suspension injectable, Sanofi-Aventis (Suisse) SA",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Tetravac"
    },
    {
      "language" : "fr-CH",
      "value" : "Tetravac"
    },
    {
      "language" : "it-CH",
      "value" : "Tetravac"
    },
    {
      "language" : "rm-CH",
      "value" : "Tetravac"
    },
    {
      "language" : "en",
      "value" : "Tetravac"
    }]
  },
  {
    "code" : "417",
    "display" : "Tollwut Impfstoff Mérieux",
    "definition" : "Tollwut Impfstoff Mérieux, Poudre et solvant pour suspension injectable, Sanofi-Aventis (Suisse) SA",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Tollwut Impfstoff Mérieux"
    },
    {
      "language" : "fr-CH",
      "value" : "Rage vaccin Mérieux"
    },
    {
      "language" : "it-CH",
      "value" : "Rabbia vaccino Mérieux"
    },
    {
      "language" : "rm-CH",
      "value" : "Frenesia vaccin Mérieux"
    },
    {
      "language" : "en",
      "value" : "Rage vaccine Mérieux"
    }]
  },
  {
    "code" : "688",
    "display" : "Varivax",
    "definition" : "Varivax, Pulver und Lösungsmittel zur Herstellung einer Injektionssuspension, MSD Merck Sharp & Dohme AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Varivax"
    },
    {
      "language" : "fr-CH",
      "value" : "Varivax"
    },
    {
      "language" : "it-CH",
      "value" : "Varivax"
    },
    {
      "language" : "rm-CH",
      "value" : "Varivax"
    },
    {
      "language" : "en",
      "value" : "Varivax"
    }]
  },
  {
    "code" : "485",
    "display" : "Influvac",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Influvac"
    },
    {
      "language" : "fr-CH",
      "value" : "Influvac"
    },
    {
      "language" : "it-CH",
      "value" : "Influvac"
    },
    {
      "language" : "rm-CH",
      "value" : "Influvac"
    },
    {
      "language" : "en",
      "value" : "Influvac"
    }]
  },
  {
    "code" : "660",
    "display" : "Influvac plus",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Influvac plus"
    },
    {
      "language" : "fr-CH",
      "value" : "Influvac plus"
    },
    {
      "language" : "it-CH",
      "value" : "Influvac plus"
    },
    {
      "language" : "rm-CH",
      "value" : "Influvac plus"
    },
    {
      "language" : "en",
      "value" : "Influvac plus"
    }]
  },
  {
    "code" : "654",
    "display" : "Meningitec",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Meningitec"
    },
    {
      "language" : "fr-CH",
      "value" : "Meningitec"
    },
    {
      "language" : "it-CH",
      "value" : "Meningitec"
    },
    {
      "language" : "rm-CH",
      "value" : "Meningitec"
    },
    {
      "language" : "en",
      "value" : "Meningitec"
    }]
  },
  {
    "code" : "643",
    "display" : "Prevenar-7",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Prevenar-7"
    },
    {
      "language" : "fr-CH",
      "value" : "Prevenar-7"
    },
    {
      "language" : "it-CH",
      "value" : "Prevenar-7"
    },
    {
      "language" : "rm-CH",
      "value" : "Prevenar-7"
    },
    {
      "language" : "en",
      "value" : "Prevenar-7"
    }]
  },
  {
    "code" : "644",
    "display" : "Hexavac",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Hexavac"
    },
    {
      "language" : "fr-CH",
      "value" : "Hexavac"
    },
    {
      "language" : "it-CH",
      "value" : "Hexavac"
    },
    {
      "language" : "rm-CH",
      "value" : "Hexavac"
    },
    {
      "language" : "en",
      "value" : "Hexavac"
    }]
  },
  {
    "code" : "711",
    "display" : "DiTe pediatric adsorbed",
    "designation" : [{
      "language" : "de-CH",
      "value" : "DiTe pediatric adsorbed"
    },
    {
      "language" : "fr-CH",
      "value" : "DiTe pediatric adsorbed"
    },
    {
      "language" : "it-CH",
      "value" : "DiTe pediatric adsorbed"
    },
    {
      "language" : "rm-CH",
      "value" : "DiTe pediatric adsorbed"
    },
    {
      "language" : "en",
      "value" : "DiTe pediatric adsorbed"
    }]
  },
  {
    "code" : "711-01",
    "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren",
    "definition" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren, Injektionssuspension, Emergent BioSolutions Berna GmbH",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Kinder unter 8 Jahren"
    },
    {
      "language" : "fr-CH",
      "value" : "Diphtérie- et tétanos-vaccin adsorbant pour les enfants de moins de 8 ans"
    },
    {
      "language" : "it-CH",
      "value" : "Difterite e tetano vaccino adsorbito per bambini di età inferiore agli 8 anni"
    },
    {
      "language" : "rm-CH",
      "value" : "Difteria e tetanus vaccin d’asorbat per uffants sut 8 onns"
    },
    {
      "language" : "en",
      "value" : "Diphtheria and tetanus adsorbate vaccine for children under 8 years of age"
    }]
  },
  {
    "code" : "711-02",
    "display" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Erwachsene und Kinder ab 7 Jahren",
    "definition" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Erwachsene und Kinder ab 7 Jahren, Injektionssuspension, Emergent BioSolutions Berna GmbH",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Diphtherie- und Tetanus-Adsorbatimpfstoff für Erwachsene und Kinder ab 7 Jahren"
    },
    {
      "language" : "fr-CH",
      "value" : "Diphtérie- et tétanos-vaccin adsorbant pour pour les adultes et les enfants à partir de 7 ans"
    },
    {
      "language" : "it-CH",
      "value" : "Difterite e tetano vaccino adsorbito per adulti e bambini dai 7 anni in su"
    },
    {
      "language" : "rm-CH",
      "value" : "Difteria e tetanus vaccin d’asorbat per persunas creschidas e per uffants a partir da 7 onns"
    },
    {
      "language" : "en",
      "value" : "Diphtheria and tetanus adsorbate vaccine for adults and children over 7 years old"
    }]
  },
  {
    "code" : "704",
    "display" : "Dukoral",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Dukoral"
    },
    {
      "language" : "fr-CH",
      "value" : "Dukoral"
    },
    {
      "language" : "it-CH",
      "value" : "Dukoral"
    },
    {
      "language" : "rm-CH",
      "value" : "Dukoral"
    },
    {
      "language" : "en",
      "value" : "Dukoral"
    }]
  },
  {
    "code" : "483",
    "display" : "Rimevax",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Rimevax"
    },
    {
      "language" : "fr-CH",
      "value" : "Rimevax"
    },
    {
      "language" : "it-CH",
      "value" : "Rimevax"
    },
    {
      "language" : "rm-CH",
      "value" : "Rimevax"
    },
    {
      "language" : "en",
      "value" : "Rimevax"
    }]
  },
  {
    "code" : "707",
    "display" : "Tetanol pur",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Tetanol pur"
    },
    {
      "language" : "fr-CH",
      "value" : "Tetanol pur"
    },
    {
      "language" : "it-CH",
      "value" : "Tetanol pur"
    },
    {
      "language" : "rm-CH",
      "value" : "Tetanol pur"
    },
    {
      "language" : "en",
      "value" : "Tetanol pur"
    }]
  },
  {
    "code" : "57735",
    "display" : "Gardasil",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Gardasil"
    },
    {
      "language" : "fr-CH",
      "value" : "Gardasil"
    },
    {
      "language" : "it-CH",
      "value" : "Gardasil"
    },
    {
      "language" : "rm-CH",
      "value" : "Gardasil"
    },
    {
      "language" : "en",
      "value" : "Gardasil"
    }]
  },
  {
    "code" : "709",
    "display" : "Zostavax",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Zostavax"
    },
    {
      "language" : "fr-CH",
      "value" : "Zostavax"
    },
    {
      "language" : "it-CH",
      "value" : "Zostavax"
    },
    {
      "language" : "rm-CH",
      "value" : "Zostavax"
    },
    {
      "language" : "en",
      "value" : "Zostavax"
    }]
  },
  {
    "code" : "58158",
    "display" : "Priorix-Tetra",
    "definition" : "Priorix, Pulver und Lösungsmittel zur Herstellung einer Injektionslösung, GlaxoSmithKline AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Priorix-Tetra"
    },
    {
      "language" : "fr-CH",
      "value" : "Priorix-Tetra"
    },
    {
      "language" : "it-CH",
      "value" : "Priorix-Tetra"
    },
    {
      "language" : "rm-CH",
      "value" : "Priorix-Tetra"
    },
    {
      "language" : "en",
      "value" : "Priorix-Tetra"
    }]
  },
  {
    "code" : "696",
    "display" : "BCG SSI",
    "designation" : [{
      "language" : "de-CH",
      "value" : "BCG SSI"
    },
    {
      "language" : "fr-CH",
      "value" : "BCG SSI"
    },
    {
      "language" : "it-CH",
      "value" : "BCG SSI"
    },
    {
      "language" : "rm-CH",
      "value" : "BCG SSI"
    },
    {
      "language" : "en",
      "value" : "BCG SSI"
    }]
  },
  {
    "code" : "58317",
    "display" : "Fluad",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Fluad"
    },
    {
      "language" : "fr-CH",
      "value" : "Fluad"
    },
    {
      "language" : "it-CH",
      "value" : "Fluad"
    },
    {
      "language" : "rm-CH",
      "value" : "Fluad"
    },
    {
      "language" : "en",
      "value" : "Fluad"
    }]
  },
  {
    "code" : "60150",
    "display" : "Rotarix",
    "definition" : "Rotarix liquid, orale Suspension, GlaxoSmithKline AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Rotarix"
    },
    {
      "language" : "fr-CH",
      "value" : "Rotarix"
    },
    {
      "language" : "it-CH",
      "value" : "Rotarix"
    },
    {
      "language" : "rm-CH",
      "value" : "Rotarix"
    },
    {
      "language" : "en",
      "value" : "Rotarix"
    }]
  },
  {
    "code" : "703",
    "display" : "M-M-RVAXPRO",
    "definition" : "M-M-RVAXPRO, Pulver und Lösungsmittel zur Herstellung einer Injektionssuspension, MSD Merck Sharp & Dohme AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "MMRVaxPro"
    },
    {
      "language" : "fr-CH",
      "value" : "MMRVaxPro"
    },
    {
      "language" : "it-CH",
      "value" : "MMRVaxPro"
    },
    {
      "language" : "rm-CH",
      "value" : "MMRVaxPro"
    },
    {
      "language" : "en",
      "value" : "MMRVaxPro"
    }]
  },
  {
    "code" : "58506",
    "display" : "Measles vaccine live",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Measles vaccine live"
    },
    {
      "language" : "fr-CH",
      "value" : "Measles vaccine live"
    },
    {
      "language" : "it-CH",
      "value" : "Measles vaccine live"
    },
    {
      "language" : "rm-CH",
      "value" : "Measles vaccine live"
    },
    {
      "language" : "en",
      "value" : "Measles vaccine live"
    }]
  },
  {
    "code" : "59267",
    "display" : "Agrippal",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Agrippal"
    },
    {
      "language" : "fr-CH",
      "value" : "Agrippal"
    },
    {
      "language" : "it-CH",
      "value" : "Agrippal"
    },
    {
      "language" : "rm-CH",
      "value" : "Agrippal"
    },
    {
      "language" : "en",
      "value" : "Agrippal"
    }]
  },
  {
    "code" : "58271",
    "display" : "Optaflu",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Optaflu"
    },
    {
      "language" : "fr-CH",
      "value" : "Optaflu"
    },
    {
      "language" : "it-CH",
      "value" : "Optaflu"
    },
    {
      "language" : "rm-CH",
      "value" : "Optaflu"
    },
    {
      "language" : "en",
      "value" : "Optaflu"
    }]
  },
  {
    "code" : "57814",
    "display" : "Cervarix",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Cervarix"
    },
    {
      "language" : "fr-CH",
      "value" : "Cervarix"
    },
    {
      "language" : "it-CH",
      "value" : "Cervarix"
    },
    {
      "language" : "rm-CH",
      "value" : "Cervarix"
    },
    {
      "language" : "en",
      "value" : "Cervarix"
    }]
  },
  {
    "code" : "60129",
    "display" : "Prevenar 13",
    "definition" : "Prevenar 13, Injektionssuspension in einer Fertigspritze, Pfizer AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Prevenar 13"
    },
    {
      "language" : "fr-CH",
      "value" : "Prevenar 13"
    },
    {
      "language" : "it-CH",
      "value" : "Prevenar 13"
    },
    {
      "language" : "rm-CH",
      "value" : "Prevenar 13"
    },
    {
      "language" : "en",
      "value" : "Prevenar 13"
    }]
  },
  {
    "code" : "59147",
    "display" : "Ixiaro",
    "definition" : "IXIARO, Injektionssuspension, Future Health Pharma GmbH",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Ixiaro"
    },
    {
      "language" : "fr-CH",
      "value" : "Ixiaro"
    },
    {
      "language" : "it-CH",
      "value" : "Ixiaro"
    },
    {
      "language" : "rm-CH",
      "value" : "Ixiaro"
    },
    {
      "language" : "en",
      "value" : "Ixiaro"
    }]
  },
  {
    "code" : "62502",
    "display" : "Menveo",
    "definition" : "Menveo, Pulver und Lösung (Durchstechflaschen), GlaxoSmithKline AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Menveo"
    },
    {
      "language" : "fr-CH",
      "value" : "Menveo"
    },
    {
      "language" : "it-CH",
      "value" : "Menveo"
    },
    {
      "language" : "rm-CH",
      "value" : "Menveo"
    },
    {
      "language" : "en",
      "value" : "Menveo"
    }]
  },
  {
    "code" : "600",
    "display" : "DiTe Anatoxal Erwachsene / Adultes",
    "designation" : [{
      "language" : "de-CH",
      "value" : "DiTe Anatoxal Erwachsene"
    },
    {
      "language" : "fr-CH",
      "value" : "DiTe Anatoxal adultes"
    },
    {
      "language" : "it-CH",
      "value" : "DiTe Anatoxal adulti"
    },
    {
      "language" : "rm-CH",
      "value" : "DiTe Anatoxal persunas creschidas"
    },
    {
      "language" : "en",
      "value" : "DiTe Anatoxal adults"
    }]
  },
  {
    "code" : "690",
    "display" : "DiTe Anatoxal N Erwachsene / Adultes",
    "designation" : [{
      "language" : "de-CH",
      "value" : "DiTe Anatoxal N Erwachsene"
    },
    {
      "language" : "fr-CH",
      "value" : "DiTe Anatoxal N adultes"
    },
    {
      "language" : "it-CH",
      "value" : "DiTe Anatoxal N adulti"
    },
    {
      "language" : "rm-CH",
      "value" : "DiTe Anatoxal N persunas creshidas"
    },
    {
      "language" : "en",
      "value" : "DiTe Anatoxal N adults"
    }]
  },
  {
    "code" : "689",
    "display" : "Te Anatoxal N",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Te Anatoxal N"
    },
    {
      "language" : "fr-CH",
      "value" : "Te Anatoxal N"
    },
    {
      "language" : "it-CH",
      "value" : "Te Anatoxal N"
    },
    {
      "language" : "rm-CH",
      "value" : "Te Anatoxal N"
    },
    {
      "language" : "en",
      "value" : "Te Anatoxal N"
    }]
  },
  {
    "code" : "62961",
    "display" : "Fluarix Tetra",
    "definition" : "Fluarix Tetra 15 µg / 0.5 ml, Injektionssuspension, GlaxoSmithKline AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Fluarix Tetra"
    },
    {
      "language" : "fr-CH",
      "value" : "Fluarix Tetra"
    },
    {
      "language" : "it-CH",
      "value" : "Fluarix Tetra"
    },
    {
      "language" : "rm-CH",
      "value" : "Fluarix Tetra"
    },
    {
      "language" : "en",
      "value" : "Fluarix Tetra"
    }]
  },
  {
    "code" : "66037",
    "display" : "Menjugate liquid",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Menjugate liquid"
    },
    {
      "language" : "fr-CH",
      "value" : "Menjugate liquid"
    },
    {
      "language" : "it-CH",
      "value" : "Menjugate liquid"
    },
    {
      "language" : "rm-CH",
      "value" : "Menjugate liquid"
    },
    {
      "language" : "en",
      "value" : "Menjugate liquid"
    }]
  },
  {
    "code" : "699",
    "display" : "ProQuad",
    "definition" : "ProQuad, Pulver und Lösungsmittel zur Herstellung einer Injektionssuspension, MSD Merck Sharp & Dohme AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "ProQuad"
    },
    {
      "language" : "fr-CH",
      "value" : "ProQuad"
    },
    {
      "language" : "it-CH",
      "value" : "ProQuad"
    },
    {
      "language" : "rm-CH",
      "value" : "ProQuad"
    },
    {
      "language" : "en",
      "value" : "ProQuad"
    }]
  },
  {
    "code" : "65728",
    "display" : "Gardasil 9 (Durchstechflasche)",
    "definition" : "Gardasil 9, Injektionssuspension in Durchstechflasche, MSD Merck Sharp & Dohme AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Gardasil 9"
    },
    {
      "language" : "fr-CH",
      "value" : "Gardasil 9"
    },
    {
      "language" : "it-CH",
      "value" : "Gardasil 9"
    },
    {
      "language" : "rm-CH",
      "value" : "Gardasil 9"
    },
    {
      "language" : "en",
      "value" : "Gardasil 9"
    }]
  },
  {
    "code" : "65387",
    "display" : "Gardasil 9 (Fertigspritze)",
    "definition" : "Gardasil 9, Injektionssuspension in Fertigspritze,\tMSD Merck Sharp & Dohme AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Gardasil 9"
    },
    {
      "language" : "fr-CH",
      "value" : "Gardasil 9"
    },
    {
      "language" : "it-CH",
      "value" : "Gardasil 9"
    },
    {
      "language" : "rm-CH",
      "value" : "Gardasil 9"
    },
    {
      "language" : "en",
      "value" : "Gardasil 9"
    }]
  },
  {
    "code" : "66940",
    "display" : "Vaxelis",
    "definition" : "Vaxelis 0.5 ml, Injektionssuspension, Future Health Pharma GmbH",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Vaxelis"
    },
    {
      "language" : "fr-CH",
      "value" : "Vaxelis"
    },
    {
      "language" : "it-CH",
      "value" : "Vaxelis"
    },
    {
      "language" : "rm-CH",
      "value" : "Vaxelis"
    },
    {
      "language" : "en",
      "value" : "Vaxelis"
    }]
  },
  {
    "code" : "65730",
    "display" : "Bexsero",
    "definition" : "Bexsero, Injektionssuspension, GlaxoSmithKline AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Bexsero"
    },
    {
      "language" : "fr-CH",
      "value" : "Bexsero"
    },
    {
      "language" : "it-CH",
      "value" : "Bexsero"
    },
    {
      "language" : "rm-CH",
      "value" : "Bexsero"
    },
    {
      "language" : "en",
      "value" : "Bexsero"
    }]
  },
  {
    "code" : "68087",
    "display" : "Influvac Tetra 0.5 ml",
    "definition" : "Influvac Tetra 0.5 ml, Injektionssuspension, Mylan Pharma GmbH",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Influvac Tetra"
    },
    {
      "language" : "fr-CH",
      "value" : "Influvac Tetra"
    },
    {
      "language" : "it-CH",
      "value" : "Influvac Tetra"
    },
    {
      "language" : "rm-CH",
      "value" : "Influvac Tetra"
    },
    {
      "language" : "en",
      "value" : "Influvac Tetra"
    }]
  },
  {
    "code" : "66427",
    "display" : "VaxigripTetra",
    "definition" : "VaxigripTetra, Suspension pour injection dans une seringue pré-remplie, Sanofi-Aventis (Suisse) SA",
    "designation" : [{
      "language" : "de-CH",
      "value" : "VaxigripTetra"
    },
    {
      "language" : "fr-CH",
      "value" : "VaxigripTetra"
    },
    {
      "language" : "it-CH",
      "value" : "VaxigripTetra"
    },
    {
      "language" : "rm-CH",
      "value" : "VaxigripTetra"
    },
    {
      "language" : "en",
      "value" : "VaxigripTetra"
    }]
  },
  {
    "code" : "68267",
    "display" : "Spikevax (COVID-19 Vaccine, Moderna)",
    "definition" : "Spikevax, Injektionsdispersion, Moderna Switzerland GmbH",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Spikevax (COVID-19 Vaccine, Moderna)"
    },
    {
      "language" : "fr-CH",
      "value" : "Spikevax (COVID-19 Vaccine, Moderna)"
    },
    {
      "language" : "it-CH",
      "value" : "Spikevax (COVID-19 Vaccine, Moderna)"
    },
    {
      "language" : "rm-CH",
      "value" : "Spikevax (COVID-19 Vaccine, Moderna)"
    },
    {
      "language" : "en",
      "value" : "Spikevax (COVID-19 Vaccine, Moderna)"
    }]
  },
  {
    "code" : "68225",
    "display" : "Comirnaty (COVID-19 Vaccine, Pfizer)",
    "definition" : "Comirnaty, Konzentrat zur Herstellung einer Injektionsdispersion, Pfizer AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Comirnaty (COVID-19 Vaccine, Pfizer)"
    },
    {
      "language" : "fr-CH",
      "value" : "Comirnaty (COVID-19 Vaccine, Pfizer)"
    },
    {
      "language" : "it-CH",
      "value" : "Comirnaty (COVID-19 Vaccine, Pfizer)"
    },
    {
      "language" : "rm-CH",
      "value" : "Comirnaty (COVID-19 Vaccine, Pfizer)"
    },
    {
      "language" : "en",
      "value" : "Comirnaty (COVID-19 Vaccine, Pfizer)"
    }]
  },
  {
    "code" : "68235",
    "display" : "COVID-19 Vaccine Janssen",
    "definition" : "COVID-19 Vaccine Janssen, Injektionssuspension, Janssen-Cilag AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "COVID-19 Vaccine Janssen"
    },
    {
      "language" : "fr-CH",
      "value" : "COVID-19 Vaccine Janssen"
    },
    {
      "language" : "it-CH",
      "value" : "COVID-19 Vaccine Janssen"
    },
    {
      "language" : "rm-CH",
      "value" : "COVID-19 Vaccine Janssen"
    },
    {
      "language" : "en",
      "value" : "COVID-19 Vaccine Janssen"
    }]
  },
  {
    "code" : "67482",
    "display" : "Flucelvax Tetra",
    "definition" : "Flucelvax Tetra, Injektionssuspension, Medius AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Flucelvax Tetra"
    },
    {
      "language" : "fr-CH",
      "value" : "Flucelvax Tetra"
    },
    {
      "language" : "it-CH",
      "value" : "Flucelvax Tetra"
    },
    {
      "language" : "rm-CH",
      "value" : "Flucelvax Tetra"
    },
    {
      "language" : "en",
      "value" : "Flucelvax Tetra"
    }]
  },
  {
    "code" : "67704",
    "display" : "Efluelda 0.7 ml",
    "definition" : "Efluelda 0.7 ml, suspension injectable en seringue préremplie, Sanofi-Aventis (Suisse) SA",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Efluelda 0.7 ml"
    },
    {
      "language" : "fr-CH",
      "value" : "Efluelda 0.7 ml"
    },
    {
      "language" : "it-CH",
      "value" : "Efluelda 0.7 ml"
    },
    {
      "language" : "rm-CH",
      "value" : "Efluelda 0.7 ml"
    },
    {
      "language" : "en",
      "value" : "Efluelda 0.7 ml"
    }]
  },
  {
    "code" : "67987",
    "display" : "Shingrix",
    "definition" : "Shingrix, Pulver und Suspension zur Herstellung einer Injektionssuspension, GlaxoSmithKline AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Shingrix"
    },
    {
      "language" : "fr-CH",
      "value" : "Shingrix"
    },
    {
      "language" : "it-CH",
      "value" : "Shingrix"
    },
    {
      "language" : "rm-CH",
      "value" : "Shingrix"
    },
    {
      "language" : "en",
      "value" : "Shingrix"
    }]
  },
  {
    "code" : "68003",
    "display" : "Supemtek 0.5 ml",
    "definition" : "Supemtek 0.5 ml, solution injectable dans une seringue pré-remplie, Sanofi-Aventis (Suisse) SA",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Supemtek 0.5 ml"
    },
    {
      "language" : "fr-CH",
      "value" : "Supemtek 0.5 ml"
    },
    {
      "language" : "it-CH",
      "value" : "Supemtek 0.5 ml"
    },
    {
      "language" : "rm-CH",
      "value" : "Supemtek 0.5 ml"
    },
    {
      "language" : "en",
      "value" : "Supemtek 0.5 ml"
    }]
  },
  {
    "code" : "66161",
    "display" : "Foclivia (Durchstechflasche)",
    "definition" : "Foclivia, Injektionssuspension in einer Durchstechflasche, Emergent BioSolutions Berna GmbH",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Foclivia (Durchstechflasche)"
    },
    {
      "language" : "fr-CH",
      "value" : "Foclivia (flacon multidoses)"
    },
    {
      "language" : "it-CH",
      "value" : "Foclivia (flacone multidose)"
    },
    {
      "language" : "rm-CH",
      "value" : "Foclivia (flacona multidosa)"
    },
    {
      "language" : "en",
      "value" : "Foclivia (penetration bottle)"
    }]
  },
  {
    "code" : "66156",
    "display" : "Foclivia (Fertigspritze)",
    "definition" : "Foclivia, Injektionssuspension in einer Fertigspritze, Emergent BioSolutions Berna GmbH",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Foclivia (Fertigspritze)"
    },
    {
      "language" : "fr-CH",
      "value" : "Foclivia (seringue préremplie)"
    },
    {
      "language" : "it-CH",
      "value" : "Foclivia (siringa preriempita)"
    },
    {
      "language" : "rm-CH",
      "value" : "Foclivia (siringa prominenta)"
    },
    {
      "language" : "en",
      "value" : "Foclivia (pre-filled syringe)"
    }]
  },
  {
    "code" : "68473",
    "display" : "Nuvaxovid 0.5 ml",
    "definition" : "Nuvaxovid 0.5 ml, Injektionsdispersion, Future Health Pharma GmbH",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Nuvaxovid 0.5 ml"
    },
    {
      "language" : "fr-CH",
      "value" : "Nuvaxovid 0.5 ml"
    },
    {
      "language" : "it-CH",
      "value" : "Nuvaxovid 0.5 ml"
    },
    {
      "language" : "rm-CH",
      "value" : "Nuvaxovid 0.5 ml"
    },
    {
      "language" : "en",
      "value" : "Nuvaxovid 0.5 ml"
    }]
  },
  {
    "code" : "68358",
    "display" : "Ervebo",
    "definition" : "Ervebo, Injektionslösung, MSD Merck Sharp & Dohme AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Ervebo"
    },
    {
      "language" : "fr-CH",
      "value" : "Ervebo"
    },
    {
      "language" : "it-CH",
      "value" : "Ervebo"
    },
    {
      "language" : "rm-CH",
      "value" : "Ervebo"
    },
    {
      "language" : "en",
      "value" : "Ervebo"
    }]
  },
  {
    "code" : "68710-01",
    "display" : "Comirnaty® 30 Mikrogramm/Dosis",
    "definition" : "Comirnaty® 30 Mikrogramm/Dosis, gebrauchsfertige Injektionsdispersion für Personen ab 12 Jahren, Pfizer AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Comirnaty® 30 Mikrogramm/Dosis, für Personen ab 12 Jahren"
    },
    {
      "language" : "fr-CH",
      "value" : "Comirnaty® 30 microgrammes/dose, pour les personnes de plus de 12 ans"
    },
    {
      "language" : "it-CH",
      "value" : "Comirnaty® 30 microgrammi/dose, per persone di età superiore ai 12 anni"
    },
    {
      "language" : "rm-CH",
      "value" : "Comirnaty® 30 microgram/dosa, per persunas sur 12 onns"
    },
    {
      "language" : "en",
      "value" : "Comirnaty® 30 microgram/dose, for people over 12 years"
    }]
  },
  {
    "code" : "68710-02",
    "display" : "Comirnaty® 10 Mikrogramm/Dosis",
    "definition" : "Comirnaty® 10 Mikrogramm/Dosis, Konzentrat zur Herstellung einer Injektionsdispersion, Pfizer AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Comirnaty® 10 Mikrogramm/Dosis"
    },
    {
      "language" : "fr-CH",
      "value" : "Comirnaty® 10 microgrammes/dose"
    },
    {
      "language" : "it-CH",
      "value" : "Comirnaty® 10 microgrammi/dose"
    },
    {
      "language" : "rm-CH",
      "value" : "Comirnaty® 10 Mikrogramm/dosa"
    },
    {
      "language" : "en",
      "value" : "Comirnaty® 10 microgram/dose"
    }]
  },
  {
    "code" : "68710-03",
    "display" : "Comirnaty® 3 Mikrogramm/Dosis",
    "definition" : "Comirnaty® 3 Mikrogramm/Dosis, Konzentrat zur Herstellung einer Injektionsdispersion, Pfizer AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Comirnaty® 3 Mikrogramm/Dosis"
    },
    {
      "language" : "fr-CH",
      "value" : "Comirnaty® 3 microgrammes/dose"
    },
    {
      "language" : "it-CH",
      "value" : "Comirnaty® 3 microgrammi/dose"
    },
    {
      "language" : "rm-CH",
      "value" : "Comirnaty® 3 Mikrogramm/dosa"
    },
    {
      "language" : "en",
      "value" : "Comirnaty® 3 microgram/dose"
    }]
  },
  {
    "code" : "68462",
    "display" : "Fluenz Tetra",
    "definition" : "Fluenz Tetra, Nasenspray, Suspension, AstraZeneca AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Fluenz Tetra"
    },
    {
      "language" : "fr-CH",
      "value" : "Fluenz Tetra"
    },
    {
      "language" : "it-CH",
      "value" : "Fluenz Tetra"
    },
    {
      "language" : "rm-CH",
      "value" : "Fluenz Tetra"
    },
    {
      "language" : "en",
      "value" : "Fluenz Tetra"
    }]
  },
  {
    "code" : "69009",
    "display" : "Spikevax Bivalent Original / Omicron",
    "definition" : "Spikevax Bivalent Original / Omicron, Moderna Switzerland GmbH",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Spikevax Bivalent Original / Omicron"
    },
    {
      "language" : "fr-CH",
      "value" : "Spikevax Bivalent Original / Omicron"
    },
    {
      "language" : "it-CH",
      "value" : "Spikevax Bivalent Original / Omicron"
    },
    {
      "language" : "rm-CH",
      "value" : "Spikevax Bivalent Original / Omicron"
    },
    {
      "language" : "en",
      "value" : "Spikevax Bivalent Original / Omicron"
    }]
  },
  {
    "code" : "68110",
    "display" : "Adacel-Polio 0.5 ml",
    "definition" : "Adacel-Polio 0.5 ml, suspension injectable en seringue préremplie, Sanofi-Aventis (Suisse) SA",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Adacel-Polio 0.5 ml"
    },
    {
      "language" : "fr-CH",
      "value" : "Adacel-Polio 0.5 ml"
    },
    {
      "language" : "it-CH",
      "value" : "Adacel-Polio 0.5 ml"
    },
    {
      "language" : "rm-CH",
      "value" : "Adacel-Polio 0.5 ml"
    },
    {
      "language" : "en",
      "value" : "Adacel-Polio 0.5 ml"
    }]
  },
  {
    "code" : "68317",
    "display" : "Adacel 0.5 ml",
    "definition" : "Adacel 0.5 ml, suspension injectable en seringue préremplie, Sanofi-Aventis (Suisse) SA",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Adacel 0.5 ml"
    },
    {
      "language" : "fr-CH",
      "value" : "Adacel 0.5 ml"
    },
    {
      "language" : "it-CH",
      "value" : "Adacel 0.5 ml"
    },
    {
      "language" : "rm-CH",
      "value" : "Adacel 0.5 ml"
    },
    {
      "language" : "en",
      "value" : "Adacel 0.5 ml"
    }]
  },
  {
    "code" : "68221",
    "display" : "MenQuadfi",
    "definition" : "MenQuadfi, solution injectable, Sanofi-Aventis (Suisse) SA",
    "designation" : [{
      "language" : "de-CH",
      "value" : "MenQuadfi"
    },
    {
      "language" : "fr-CH",
      "value" : "MenQuadfi"
    },
    {
      "language" : "it-CH",
      "value" : "MenQuadfi"
    },
    {
      "language" : "rm-CH",
      "value" : "MenQuadfi"
    },
    {
      "language" : "en",
      "value" : "MenQuadfi"
    }]
  },
  {
    "code" : "69123",
    "display" : "Spikevax Bivalent Original / Omicron 10 mg/ml",
    "definition" : "Spikevax Bivalent Original / Omicron 10 mg/ml, Fertigspritze, Moderna Switzerland GmbH",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Spikevax Bivalent Original / Omicron 10 mg/ml, Fertigspritze"
    },
    {
      "language" : "fr-CH",
      "value" : "Spikevax Bivalent Original / Omicron 10 mg/ml, seringue préremplie"
    },
    {
      "language" : "it-CH",
      "value" : "Spikevax Bivalent Original / Omicron 10 mg/ml, siringa preriempita"
    },
    {
      "language" : "rm-CH",
      "value" : "Spikevax Bivalent Original / Omicron 10 mg/ml, squitta finida"
    },
    {
      "language" : "en",
      "value" : "Spikevax Bivalent Original / Omicron 10 mg/ml, pre-filled syringe"
    }]
  },
  {
    "code" : "69010",
    "display" : "Spikevax",
    "definition" : "Spikevax, Fertigspritze,\tModerna Switzerland GmbH",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Spikevax, Fertigspritze"
    },
    {
      "language" : "fr-CH",
      "value" : "Spikevax, seringue préremplie"
    },
    {
      "language" : "it-CH",
      "value" : "Spikevax, siringa preriempita"
    },
    {
      "language" : "rm-CH",
      "value" : "Spikevax, squitta finida"
    },
    {
      "language" : "en",
      "value" : "Spikevax, pre-filled syringe"
    }]
  },
  {
    "code" : "69047",
    "display" : "Comirnaty® Original/Omicron BA.1 15/15 µg pro Dosis",
    "definition" : "Comirnaty® Original/Omicron BA.1 15/15 µg pro Dosis, gebrauchsfertige Injektionsdispersion für Personen ab 18 Jahren, Pfizer AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Comirnaty® Original/Omicron BA.1 15/15 µg pro Dosis"
    },
    {
      "language" : "fr-CH",
      "value" : "Comirnaty® Original/Omicron BA.1 15/15 µg par dose"
    },
    {
      "language" : "it-CH",
      "value" : "Comirnaty® Original/Omicron BA.1 15/15 µg per dose"
    },
    {
      "language" : "rm-CH",
      "value" : "Comirnaty® Original/Omicron BA.1 15/15 µg pro dosa"
    },
    {
      "language" : "en",
      "value" : "Comirnaty® Original/Omicron BA.1 15/15 µg per dose"
    }]
  },
  {
    "code" : "69127",
    "display" : "Comirnaty Original/Omicron BA. 4-5 0.225 mg",
    "definition" : "Comirnaty Original/Omicron BA. 4-5 0.225 mg, Injektionsdispersion,\tPfizer AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Comirnaty Original/Omicron BA. 4-5 0.225 mg"
    },
    {
      "language" : "fr-CH",
      "value" : "Comirnaty Original/Omicron BA. 4-5 0.225 mg"
    },
    {
      "language" : "it-CH",
      "value" : "Comirnaty Original/Omicron BA. 4-5 0.225 mg"
    },
    {
      "language" : "rm-CH",
      "value" : "Comirnaty Original/Omicron BA. 4-5 0.225 mg"
    },
    {
      "language" : "en",
      "value" : "Comirnaty Original/Omicron BA. 4-5 0.225 mg"
    }]
  },
  {
    "code" : "69189",
    "display" : "Spikevax Bivalent Original / Omicron BA.4-5",
    "definition" : "Spikevax Bivalent Original / Omicron BA.4-5, dispersion for injection,\tModerna Switzerland GmbH",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Spikevax Bivalent Original / Omicron BA.4-5"
    },
    {
      "language" : "fr-CH",
      "value" : "Spikevax Bivalent Original / Omicron BA.4-5"
    },
    {
      "language" : "it-CH",
      "value" : "Spikevax Bivalent Original / Omicron BA.4-5"
    },
    {
      "language" : "rm-CH",
      "value" : "Spikevax Bivalent Original / Omicron BA.4-5"
    },
    {
      "language" : "en",
      "value" : "Spikevax Bivalent Original / Omicron BA.4-5"
    }]
  },
  {
    "code" : "69211",
    "display" : "Spikevax Bivalent Original / Omicron BA.4-5",
    "definition" : "Spikevax Bivalent Original / Omicron BA.4-5, Fertigspritze,\tModerna Switzerland GmbH",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Spikevax Bivalent Original / Omicron BA.4-5, Fertigspritze"
    },
    {
      "language" : "fr-CH",
      "value" : "Spikevax Bivalent Original / Omicron BA.4-5, Fertigspritze"
    },
    {
      "language" : "it-CH",
      "value" : "Spikevax Bivalent Original / Omicron BA.4-5, Fertigspritze"
    },
    {
      "language" : "rm-CH",
      "value" : "Spikevax Bivalent Original / Omicron BA.4-5, Fertigspritze"
    },
    {
      "language" : "en",
      "value" : "Spikevax Bivalent Original / Omicron BA.4-5, Fertigspritze"
    }]
  },
  {
    "code" : "68752",
    "display" : "Vaxneuvance",
    "definition" : "Vaxneuvance, Injektionssuspension,\tMSD Merck Sharp & Dohme AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Vaxneuvance"
    },
    {
      "language" : "fr-CH",
      "value" : "Vaxneuvance"
    },
    {
      "language" : "it-CH",
      "value" : "Vaxneuvance"
    },
    {
      "language" : "rm-CH",
      "value" : "Vaxneuvance"
    },
    {
      "language" : "en",
      "value" : "Vaxneuvance"
    }]
  },
  {
    "code" : "69465",
    "display" : "Spikevax XBB.1.5 0.10 mg/ml",
    "definition" : "Spikevax XBB.1.5 0.10 mg/ml, Dispersion zur Injektion\tModerna Switzerland GmbH",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Spikevax XBB.1.5 0.10 mg/ml"
    },
    {
      "language" : "fr-CH",
      "value" : "Spikevax XBB.1.5 0.10 mg/ml"
    },
    {
      "language" : "it-CH",
      "value" : "Spikevax XBB.1.5 0.10 mg/ml"
    },
    {
      "language" : "rm-CH",
      "value" : "Spikevax XBB.1.5 0.10 mg/ml"
    },
    {
      "language" : "en",
      "value" : "Spikevax XBB.1.5 0.10 mg/ml"
    }]
  },
  {
    "code" : "69484",
    "display" : "Spikevax XBB.1.5 0.10 mg/ml",
    "definition" : "Spikevax XBB.1.5 0.10 mg/ml, Dispersion zur Injektion\tModerna Switzerland GmbH",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Spikevax XBB.1.5 0.10 mg/ml"
    },
    {
      "language" : "fr-CH",
      "value" : "Spikevax XBB.1.5 0.10 mg/ml"
    },
    {
      "language" : "it-CH",
      "value" : "Spikevax XBB.1.5 0.10 mg/ml"
    },
    {
      "language" : "rm-CH",
      "value" : "Spikevax XBB.1.5 0.10 mg/ml"
    },
    {
      "language" : "en",
      "value" : "Spikevax XBB.1.5 0.10 mg/ml"
    }]
  },
  {
    "code" : "69488",
    "display" : "Comirnaty Omicron XBB.1.5 (30 Mikrogramm)/Dosis",
    "definition" : "Comirnaty Omicron XBB.1.5 (30 Mikrogramm)/Dosis, Injektionsdispersion\tPfizer AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Comirnaty Omicron XBB.1.5 (30 Mikrogramm)/Dosis"
    },
    {
      "language" : "fr-CH",
      "value" : "Comirnaty Omicron XBB.1.5 (30 Mikrogramm)/dose"
    },
    {
      "language" : "it-CH",
      "value" : "Comirnaty Omicron XBB.1.5 (30 Mikrogramm)/dose"
    },
    {
      "language" : "rm-CH",
      "value" : "Comirnaty Omicron XBB.1.5 (30 Mikrogramm)/dosa"
    },
    {
      "language" : "en",
      "value" : "Comirnaty Omicron XBB.1.5 (30 Mikrogramm)/dose"
    }]
  },
  {
    "code" : "69310",
    "display" : "AREXVY",
    "definition" : "AREXVY, Pulver und Suspension zur Herstellung einer Injektionssuspension, GlaxoSmithKline AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "AREXVY"
    },
    {
      "language" : "fr-CH",
      "value" : "AREXVY"
    },
    {
      "language" : "it-CH",
      "value" : "AREXVY"
    },
    {
      "language" : "rm-CH",
      "value" : "AREXVY"
    },
    {
      "language" : "en",
      "value" : "AREXVY"
    }]
  },
  {
    "code" : "69173",
    "display" : "Jynneos",
    "definition" : "Jynneos",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Jynneos"
    },
    {
      "language" : "fr-CH",
      "value" : "Jynneos"
    },
    {
      "language" : "it-CH",
      "value" : "Jynneos"
    },
    {
      "language" : "rm-CH",
      "value" : "Jynneos"
    },
    {
      "language" : "en",
      "value" : "Jynneos"
    }]
  },
  {
    "code" : "69222",
    "display" : "Prevenar 20",
    "definition" : "Prevenar 20, Injektionssuspension in einer Fertigspritze, Pfizer AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Prevenar 20"
    },
    {
      "language" : "fr-CH",
      "value" : "Prevenar 20"
    },
    {
      "language" : "it-CH",
      "value" : "Prevenar 20"
    },
    {
      "language" : "rm-CH",
      "value" : "Prevenar 20"
    },
    {
      "language" : "en",
      "value" : "Prevenar 20"
    }]
  },
  {
    "code" : "69815",
    "display" : "Comirnaty Omicron XBB.1.5, 0.042 mg",
    "definition" : "Comirnaty Omicron XBB.1.5, 0.042 mg",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Comirnaty Omicron XBB.1.5, 0.042 mg"
    },
    {
      "language" : "fr-CH",
      "value" : "Comirnaty Omicron XBB.1.5, 0.042 mg"
    },
    {
      "language" : "it-CH",
      "value" : "Comirnaty Omicron XBB.1.5, 0.042 mg"
    },
    {
      "language" : "rm-CH",
      "value" : "Comirnaty Omicron XBB.1.5, 0.042 mg"
    },
    {
      "language" : "en",
      "value" : "Comirnaty Omicron XBB.1.5, 0.042 mg"
    }]
  },
  {
    "code" : "69403",
    "display" : "Qdenga 0.5 ml",
    "definition" : "Qdenga 0.5 ml, Pulver und Lösungsmittel für eine Injektionslösung, Takeda Pharma AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Qdenga 0.5 ml"
    },
    {
      "language" : "fr-CH",
      "value" : "Qdenga 0.5 ml"
    },
    {
      "language" : "it-CH",
      "value" : "Qdenga 0.5 ml"
    },
    {
      "language" : "rm-CH",
      "value" : "Qdenga 0.5 ml"
    },
    {
      "language" : "en",
      "value" : "Qdenga 0.5 ml"
    }]
  },
  {
    "code" : "69913",
    "display" : "Comirnaty JN.1 0.042 mg",
    "definition" : "Comirnaty JN.1 0.042 mg, Injektionsdispersion in einer Fertigspritze, Pfizer AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Comirnaty JN.1 0.042 mg"
    },
    {
      "language" : "fr-CH",
      "value" : "Comirnaty JN.1 0.042 mg"
    },
    {
      "language" : "it-CH",
      "value" : "Comirnaty JN.1 0.042 mg"
    },
    {
      "language" : "rm-CH",
      "value" : "Comirnaty JN.1 0.042 mg"
    },
    {
      "language" : "en",
      "value" : "Comirnaty JN.1 0.042 mg"
    }]
  },
  {
    "code" : "69912-01",
    "display" : "Comirnaty JN.1 30 µg",
    "definition" : "Comirnaty JN.1 30 µg, Injektionsdispersion, Pfizer AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Comirnaty JN.1 30 µg"
    },
    {
      "language" : "fr-CH",
      "value" : "Comirnaty JN.1 30 µg"
    },
    {
      "language" : "it-CH",
      "value" : "Comirnaty JN.1 30 µg"
    },
    {
      "language" : "rm-CH",
      "value" : "Comirnaty JN.1 30 µg"
    },
    {
      "language" : "en",
      "value" : "Comirnaty JN.1 30 µg"
    }]
  },
  {
    "code" : "69912-02",
    "display" : "Comirnaty JN.1 10 µg",
    "definition" : "Comirnaty JN.1 10 µg, Injektionsdispersion, Pfizer AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Comirnaty JN.1 10 µg"
    },
    {
      "language" : "fr-CH",
      "value" : "Comirnaty JN.1 10 µg"
    },
    {
      "language" : "it-CH",
      "value" : "Comirnaty JN.1 10 µg"
    },
    {
      "language" : "rm-CH",
      "value" : "Comirnaty JN.1 10 µg"
    },
    {
      "language" : "en",
      "value" : "Comirnaty JN.1 10 µg"
    }]
  },
  {
    "code" : "69691",
    "display" : "Abrysvo",
    "definition" : "Abrysvo",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Abrysvo"
    },
    {
      "language" : "fr-CH",
      "value" : "Abrysvo"
    },
    {
      "language" : "it-CH",
      "value" : "Abrysvo"
    },
    {
      "language" : "rm-CH",
      "value" : "Abrysvo"
    },
    {
      "language" : "en",
      "value" : "Abrysvo"
    }]
  },
  {
    "code" : "69788",
    "display" : "Spikevax JN.1 (mRNA-1273.167), 0.10mg/ml",
    "definition" : "Spikevax JN.1 (mRNA-1273.167), 0.10mg/ml, Dispersion zur Injektion, Moderna Switzerland GmbH",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Spikevax JN.1 (mRNA-1273.167), 0.10mg/ml"
    },
    {
      "language" : "fr-CH",
      "value" : "Spikevax JN.1 (mRNA-1273.167), 0.10mg/ml"
    },
    {
      "language" : "it-CH",
      "value" : "Spikevax JN.1 (mRNA-1273.167), 0.10mg/ml"
    },
    {
      "language" : "rm-CH",
      "value" : "Spikevax JN.1 (mRNA-1273.167), 0.10mg/ml"
    },
    {
      "language" : "en",
      "value" : "Spikevax JN.1 (mRNA-1273.167), 0.10mg/ml"
    }]
  },
  {
    "code" : "69863-01",
    "display" : "Efluelda TIV 0.5 mL",
    "definition" : "Efluelda TIV 0.5 mL, suspension injectable en seringue pré-remplie, Sanofi-Aventis (Suisse) SA",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Efluelda TIV 0.5 mL"
    },
    {
      "language" : "fr-CH",
      "value" : "Efluelda TIV 0.5 mL"
    },
    {
      "language" : "it-CH",
      "value" : "Efluelda TIV 0.5 mL"
    },
    {
      "language" : "rm-CH",
      "value" : "Efluelda TIV 0.5 mL"
    },
    {
      "language" : "en",
      "value" : "Efluelda TIV 0.5 mL"
    }]
  },
  {
    "code" : "69995-01",
    "display" : "mResvia Respiratorisches-Synzytial-Virus (RSV) Vakzin 0.10 mg/ml",
    "definition" : "mResvia Respiratorisches-Synzytial-Virus (RSV) Vakzin 0.10 mg/ml, Injektionsdispersion, Moderna Switzerland GmbH",
    "designation" : [{
      "language" : "de-CH",
      "value" : "mResvia Respiratorisches-Synzytial-Virus (RSV) Vakzin 0.10 mg/ml"
    },
    {
      "language" : "fr-CH",
      "value" : "mResvia Respiratorisches-Synzytial-Virus (RSV) Vakzin 0.10 mg/ml"
    },
    {
      "language" : "it-CH",
      "value" : "mResvia Respiratorisches-Synzytial-Virus (RSV) Vakzin 0.10 mg/ml"
    },
    {
      "language" : "rm-CH",
      "value" : "mResvia Respiratorisches-Synzytial-Virus (RSV) Vakzin 0.10 mg/ml"
    },
    {
      "language" : "en",
      "value" : "mResvia Respiratorisches-Synzytial-Virus (RSV) Vakzin 0.10 mg/ml"
    }]
  },
  {
    "code" : "70205",
    "display" : "Spikevax LP.8.1",
    "definition" : "Spikevax LP.8.1, Moderna Switzerland GmbH",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Spikevax LP.8.1"
    },
    {
      "language" : "fr-CH",
      "value" : "Spikevax LP.8.1"
    },
    {
      "language" : "it-CH",
      "value" : "Spikevax LP.8.1"
    },
    {
      "language" : "rm-CH",
      "value" : "Spikevax LP.8.1"
    },
    {
      "language" : "en",
      "value" : "Spikevax LP.8.1"
    }]
  },
  {
    "code" : "70400",
    "display" : "Comirnaty LP.8.1 10 μg",
    "definition" : "Comirnaty LP.8.1 10 μg, Injektionsdispersion, Pfizer AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Comirnaty LP.8.1 10 µg"
    },
    {
      "language" : "fr-CH",
      "value" : "Comirnaty LP.8.1 10 µg"
    },
    {
      "language" : "it-CH",
      "value" : "Comirnaty LP.8.1 10 µg"
    },
    {
      "language" : "rm-CH",
      "value" : "Comirnaty LP.8.1 10 µg"
    },
    {
      "language" : "en",
      "value" : "Comirnaty LP.8.1 10 µg"
    }]
  },
  {
    "code" : "70403",
    "display" : "Comirnaty LP.8.1 30 Mikrogramm",
    "definition" : "Comirnaty LP.8.1 30 Mikrogramm, Injektionsdispersion in einer Fertigspritze, Pfizer AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Comirnaty LP.8.1 30 µg"
    },
    {
      "language" : "fr-CH",
      "value" : "Comirnaty LP.8.1 30 µg"
    },
    {
      "language" : "it-CH",
      "value" : "Comirnaty LP.8.1 30 µg"
    },
    {
      "language" : "rm-CH",
      "value" : "Comirnaty LP.8.1 30 µg"
    },
    {
      "language" : "en",
      "value" : "Comirnaty LP.8.1 30 µg"
    }]
  },
  {
    "code" : "69781",
    "display" : "Capvaxive",
    "definition" : "Capvaxive, Injektionslösung in Fertigspritze, MSD Merck Sharp & Dohme AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Capvaxive"
    },
    {
      "language" : "fr-CH",
      "value" : "Capvaxive"
    },
    {
      "language" : "it-CH",
      "value" : "Capvaxive"
    },
    {
      "language" : "rm-CH",
      "value" : "Capvaxive"
    },
    {
      "language" : "en",
      "value" : "Capvaxive"
    }]
  },
  {
    "code" : "70042",
    "display" : "Fluarix",
    "definition" : "Fluarix, Injektionssuspension, GlaxoSmithKline AG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Fluarix"
    },
    {
      "language" : "fr-CH",
      "value" : "Fluarix"
    },
    {
      "language" : "it-CH",
      "value" : "Fluarix"
    },
    {
      "language" : "rm-CH",
      "value" : "Fluarix"
    },
    {
      "language" : "en",
      "value" : "Fluarix"
    }]
  },
  {
    "code" : "69992",
    "display" : "Influvac 0.5 ml",
    "definition" : "Influvac 0.5 ml, Injektionssuspension in einer Fertigspritze, Viatris Pharma GmbH",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Influvac 0.5 ml"
    },
    {
      "language" : "fr-CH",
      "value" : "Influvac 0.5 ml"
    },
    {
      "language" : "it-CH",
      "value" : "Influvac 0.5 ml"
    },
    {
      "language" : "rm-CH",
      "value" : "Influvac 0.5 ml"
    },
    {
      "language" : "en",
      "value" : "Influvac 0.5 ml"
    }]
  },
  {
    "code" : "70144",
    "display" : "Flucelvax",
    "definition" : "Flucelvax, Injektionssuspension in einer Fertigspritze, Vifor (International) Inc.",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Flucelvax"
    },
    {
      "language" : "fr-CH",
      "value" : "Flucelvax"
    },
    {
      "language" : "it-CH",
      "value" : "Flucelvax"
    },
    {
      "language" : "rm-CH",
      "value" : "Flucelvax"
    },
    {
      "language" : "en",
      "value" : "Flucelvax"
    }]
  },
  {
    "code" : "70490",
    "display" : "Vimkunya",
    "definition" : "Vimkunya, Injektionssuspension in einer Fertigspritze, Bavarian Nordic Berna GmbH",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Vimkunya"
    },
    {
      "language" : "fr-CH",
      "value" : "Vimkunya"
    },
    {
      "language" : "it-CH",
      "value" : "Vimkunya"
    },
    {
      "language" : "rm-CH",
      "value" : "Vimkunya"
    },
    {
      "language" : "en",
      "value" : "Vimkunya"
    }]
  }]
}

```
