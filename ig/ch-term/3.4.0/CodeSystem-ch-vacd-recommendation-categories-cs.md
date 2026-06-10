# CH VACD Swiss Immunization Recommendation Categories - CH Term (R4) v3.4.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Swiss Immunization Recommendation Categories**

## CodeSystem: CH VACD Swiss Immunization Recommendation Categories 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-recommendation-categories-cs | *Version*:3.4.0 |
| Active as of 2026-06-10 | *Computable Name*:SwissImmunizationRecommendationCategoriesCodesystem |
| **Copyright/Legal**: CC0-1.0 | |

 
Immunization recommendation categories available in Switzerland. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [SwissImmunizationRecommendationCategories](ValueSet-ch-vacd-recommendation-categories-vs.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-vacd-recommendation-categories-cs",
  "url" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-recommendation-categories-cs",
  "version" : "3.4.0",
  "name" : "SwissImmunizationRecommendationCategoriesCodesystem",
  "title" : "CH VACD Swiss Immunization Recommendation Categories",
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
  "description" : "Immunization recommendation categories available in Switzerland.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 4,
  "concept" : [{
    "code" : "41501",
    "display" : "Empfohlene Basisimpfungen",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Empfohlene Basisimpfungen"
    },
    {
      "language" : "fr-CH",
      "value" : "Vaccinations recommandées de base"
    },
    {
      "language" : "it-CH",
      "value" : "Vaccinazioni raccomandate di base"
    },
    {
      "language" : "rm-CH",
      "value" : "vaccinaziuns da basa recumandadas"
    },
    {
      "language" : "en",
      "value" : "Recommended primary vaccinations"
    }]
  },
  {
    "code" : "41502",
    "display" : "Empfohlene ergänzende Impfungen",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Empfohlene ergänzende Impfungen"
    },
    {
      "language" : "fr-CH",
      "value" : "Vaccinations recommandées complémentaires"
    },
    {
      "language" : "it-CH",
      "value" : "Vaccinazioni raccomandate complementari"
    },
    {
      "language" : "rm-CH",
      "value" : "vaccinaziuns cumplementaras recumandadas"
    },
    {
      "language" : "en",
      "value" : "Recommended booster vaccinations"
    }]
  },
  {
    "code" : "41503",
    "display" : "Empfohlene Impfungen für Risikogruppen",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Empfohlene Impfungen für Risikogruppen"
    },
    {
      "language" : "fr-CH",
      "value" : "Vaccinations recommandées à des groupes à risque"
    },
    {
      "language" : "it-CH",
      "value" : "Vaccinazioni raccomandate a gruppi a rischio"
    },
    {
      "language" : "rm-CH",
      "value" : "vaccinaziuns recumandadas per gruppas da ristga"
    },
    {
      "language" : "en",
      "value" : "Recommended vaccinations for risk groups"
    }]
  },
  {
    "code" : "41504",
    "display" : "Impfungen ohne Empfehlungen",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Impfungen ohne Empfehlungen"
    },
    {
      "language" : "fr-CH",
      "value" : "Vaccinations sans recommandation d’utilisatio"
    },
    {
      "language" : "it-CH",
      "value" : "Vaccinazioni senza raccomandazione d’utilizzo"
    },
    {
      "language" : "rm-CH",
      "value" : "vaccinaziuns senza recumandaziuns"
    },
    {
      "language" : "en",
      "value" : "Vaccinations without recommendations"
    }]
  }]
}

```
