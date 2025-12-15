# CH AllergyIntolerance Type - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH AllergyIntolerance Type**

## CodeSystem: CH AllergyIntolerance Type 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-allergyintolerance/CodeSystem/allergyintolerance-type-supplement | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:AllergyIntoleranceType |
| **Copyright/Legal**: CC0-1.0 | |

 
Code supplement with translations of CHAllergyIntolerance type 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "allergyintolerance-type-supplement",
  "url" : "http://fhir.ch/ig/ch-allergyintolerance/CodeSystem/allergyintolerance-type-supplement",
  "version" : "3.3.0",
  "name" : "AllergyIntoleranceType",
  "title" : "CH AllergyIntolerance Type",
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
  "description" : "Code supplement with translations of CHAllergyIntolerance type",
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
  "supplements" : "http://hl7.org/fhir/allergy-intolerance-type",
  "concept" : [
    {
      "code" : "allergy",
      "display" : "Allergy",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Allergie"
        },
        {
          "language" : "fr-CH",
          "value" : "Allergie"
        },
        {
          "language" : "it-CH",
          "value" : "Allergia"
        }
      ]
    },
    {
      "code" : "intolerance",
      "display" : "Intolerance",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Intoleranz"
        },
        {
          "language" : "fr-CH",
          "value" : "Intolérance"
        },
        {
          "language" : "it-CH",
          "value" : "Intolleranza"
        }
      ]
    }
  ]
}

```
