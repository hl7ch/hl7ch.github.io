# CH VACD Swiss Immunization Recommendation Categories - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Swiss Immunization Recommendation Categories**

## CodeSystem: CH VACD Swiss Immunization Recommendation Categories 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-recommendation-categories-cs | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:SwissImmunizationRecommendationCategoriesCodesystem |
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
  "version" : "3.3.0",
  "name" : "SwissImmunizationRecommendationCategoriesCodesystem",
  "title" : "CH VACD Swiss Immunization Recommendation Categories",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-15T10:47:47+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Immunization recommendation categories available in Switzerland.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "41501",
      "display" : "Empfohlene Basisimpfungen",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Empfohlene Basisimpfungen"
        },
        {
          "language" : "fr-CH",
          "value" : "Empfohlene Basisimpfungen"
        },
        {
          "language" : "it-CH",
          "value" : "Empfohlene Basisimpfungen"
        },
        {
          "language" : "en-US",
          "value" : "Empfohlene Basisimpfungen"
        }
      ]
    },
    {
      "code" : "41502",
      "display" : "Empfohlene ergänzende Impfungen",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Empfohlene ergänzende Impfungen"
        },
        {
          "language" : "fr-CH",
          "value" : "Empfohlene ergänzende Impfungen"
        },
        {
          "language" : "it-CH",
          "value" : "Empfohlene ergänzende Impfungen"
        },
        {
          "language" : "en-US",
          "value" : "Empfohlene ergänzende Impfungen"
        }
      ]
    },
    {
      "code" : "41503",
      "display" : "Empfohlene Impfungen für Risikogruppen",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Empfohlene Impfungen für Risikogruppen"
        },
        {
          "language" : "fr-CH",
          "value" : "Empfohlene Impfungen für Risikogruppen"
        },
        {
          "language" : "it-CH",
          "value" : "Empfohlene Impfungen für Risikogruppen"
        },
        {
          "language" : "en-US",
          "value" : "Empfohlene Impfungen für Risikogruppen"
        }
      ]
    },
    {
      "code" : "41504",
      "display" : "Impfungen ohne Empfehlungen",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Impfungen ohne Empfehlungen"
        },
        {
          "language" : "fr-CH",
          "value" : "Impfungen ohne Empfehlungen"
        },
        {
          "language" : "it-CH",
          "value" : "Impfungen ohne Empfehlungen"
        },
        {
          "language" : "en-US",
          "value" : "Impfungen ohne Empfehlungen"
        }
      ]
    }
  ]
}

```
