# CH AllergyIntolerance Category - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH AllergyIntolerance Category**

## CodeSystem: CH AllergyIntolerance Category 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-allergyintolerance/CodeSystem/allergyintolerance-category-supplement | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:AllergyIntoleranceCategory |
| **Copyright/Legal**: CC0-1.0 | |

 
Code supplement with translations of CHAllergyIntolerance category 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "allergyintolerance-category-supplement",
  "url" : "http://fhir.ch/ig/ch-allergyintolerance/CodeSystem/allergyintolerance-category-supplement",
  "version" : "3.3.0",
  "name" : "AllergyIntoleranceCategory",
  "title" : "CH AllergyIntolerance Category",
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
  "description" : "Code supplement with translations of CHAllergyIntolerance category",
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
  "content" : "supplement",
  "supplements" : "http://hl7.org/fhir/allergy-intolerance-category",
  "concept" : [
    {
      "code" : "food",
      "display" : "Food",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Lebensmittel"
        },
        {
          "language" : "fr-CH",
          "value" : "aliment"
        },
        {
          "language" : "it-CH",
          "value" : "alimento"
        }
      ]
    },
    {
      "code" : "medication",
      "display" : "Medication",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Arzneimittel"
        },
        {
          "language" : "fr-CH",
          "value" : "médicament"
        },
        {
          "language" : "it-CH",
          "value" : "medicamento"
        }
      ]
    },
    {
      "code" : "environment",
      "display" : "Environment",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Umweltstoffe"
        },
        {
          "language" : "fr-CH",
          "value" : "environnement"
        },
        {
          "language" : "it-CH",
          "value" : "ambiente"
        }
      ]
    },
    {
      "code" : "biologic",
      "display" : "Biologic",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Biologische Präparate"
        },
        {
          "language" : "fr-CH",
          "value" : "biologique"
        },
        {
          "language" : "it-CH",
          "value" : "biologico"
        }
      ]
    }
  ]
}

```
