# CH AllergyIntolerance Clinical Status - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH AllergyIntolerance Clinical Status**

## CodeSystem: CH AllergyIntolerance Clinical Status 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-allergyintolerance/CodeSystem/allergyintolerance-clinical-supplement | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:AllergyIntoleranceClinicalStatus |
| **Copyright/Legal**: CC0-1.0 | |

 
Code supplement with translations of CHAllergyIntolerance clinical status 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "allergyintolerance-clinical-supplement",
  "url" : "http://fhir.ch/ig/ch-allergyintolerance/CodeSystem/allergyintolerance-clinical-supplement",
  "version" : "3.3.0",
  "name" : "AllergyIntoleranceClinicalStatus",
  "title" : "CH AllergyIntolerance Clinical Status",
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
  "description" : "Code supplement with translations of CHAllergyIntolerance clinical status",
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
  "supplements" : "http://terminology.hl7.org/CodeSystem/allergyintolerance-clinical",
  "concept" : [
    {
      "code" : "active",
      "display" : "Active",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Aktiv"
        },
        {
          "language" : "fr-CH",
          "value" : "Actif"
        },
        {
          "language" : "it-CH",
          "value" : "Attiva"
        }
      ]
    },
    {
      "code" : "inactive",
      "display" : "Inactive",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Inaktiv"
        },
        {
          "language" : "fr-CH",
          "value" : "Inactif"
        },
        {
          "language" : "it-CH",
          "value" : "Inattiva"
        }
      ]
    },
    {
      "code" : "resolved",
      "display" : "Resolved",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Behoben"
        },
        {
          "language" : "fr-CH",
          "value" : "Résolu"
        },
        {
          "language" : "it-CH",
          "value" : "Risolta"
        }
      ]
    }
  ]
}

```
