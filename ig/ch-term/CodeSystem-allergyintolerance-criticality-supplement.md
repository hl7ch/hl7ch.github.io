# CH AllergyIntolerance Criticality Status - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH AllergyIntolerance Criticality Status**

## CodeSystem: CH AllergyIntolerance Criticality Status 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-allergyintolerance/CodeSystem/allergyintolerance-criticality-supplement | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:AllergyIntoleranceCriticalityStatus |
| **Copyright/Legal**: CC0-1.0 | |

 
Code supplement with translations of CHAllergyIntolerance criticality status 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "allergyintolerance-criticality-supplement",
  "url" : "http://fhir.ch/ig/ch-allergyintolerance/CodeSystem/allergyintolerance-criticality-supplement",
  "version" : "3.3.0",
  "name" : "AllergyIntoleranceCriticalityStatus",
  "title" : "CH AllergyIntolerance Criticality Status",
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
  "description" : "Code supplement with translations of CHAllergyIntolerance criticality status",
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
  "supplements" : "http://hl7.org/fhir/allergy-intolerance-criticality",
  "concept" : [
    {
      "code" : "low",
      "display" : "Low Risk",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Geringes Risiko"
        },
        {
          "language" : "fr-CH",
          "value" : "Risque faible"
        },
        {
          "language" : "it-CH",
          "value" : "Basso rischio"
        }
      ]
    },
    {
      "code" : "high",
      "display" : "High Risk",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Hohes Risiko"
        },
        {
          "language" : "fr-CH",
          "value" : "Risque élevé"
        },
        {
          "language" : "it-CH",
          "value" : "Alto rischio"
        }
      ]
    },
    {
      "code" : "unable-to-assess",
      "display" : "Unable to Assess Risk",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Risikobewertung nicht möglich"
        },
        {
          "language" : "fr-CH",
          "value" : "Impossible d’évaluer le risque"
        },
        {
          "language" : "it-CH",
          "value" : "Rischio non valutabile"
        }
      ]
    }
  ]
}

```
