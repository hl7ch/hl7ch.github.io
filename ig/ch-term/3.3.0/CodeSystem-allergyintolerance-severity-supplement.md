# CH AllergyIntolerance Severity Status - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH AllergyIntolerance Severity Status**

## CodeSystem: CH AllergyIntolerance Severity Status 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-allergyintolerance/CodeSystem/allergyintolerance-severity-supplement | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:AllergyIntoleranceSeverityStatus |
| **Copyright/Legal**: CC0-1.0 | |

 
Code supplement with translations of CHAllergyIntolerance severity status 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "allergyintolerance-severity-supplement",
  "url" : "http://fhir.ch/ig/ch-allergyintolerance/CodeSystem/allergyintolerance-severity-supplement",
  "version" : "3.3.0",
  "name" : "AllergyIntoleranceSeverityStatus",
  "title" : "CH AllergyIntolerance Severity Status",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-15T10:36:18+00:00",
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
  "description" : "Code supplement with translations of CHAllergyIntolerance severity status",
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
  "supplements" : "http://hl7.org/fhir/reaction-event-severity",
  "concept" : [
    {
      "code" : "mild",
      "display" : "Mild",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Mild"
        },
        {
          "language" : "fr-CH",
          "value" : "Faible"
        },
        {
          "language" : "it-CH",
          "value" : "Lieve"
        }
      ]
    },
    {
      "code" : "moderate",
      "display" : "Moderate",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Moderat"
        },
        {
          "language" : "fr-CH",
          "value" : "Moyen"
        },
        {
          "language" : "it-CH",
          "value" : "Moderata"
        }
      ]
    },
    {
      "code" : "severe",
      "display" : "Severe",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Schwer"
        },
        {
          "language" : "fr-CH",
          "value" : "Grave"
        },
        {
          "language" : "it-CH",
          "value" : "Grave"
        }
      ]
    }
  ]
}

```
