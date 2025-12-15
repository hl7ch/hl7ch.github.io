# CH AllergyIntolerance Verification Status - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH AllergyIntolerance Verification Status**

## CodeSystem: CH AllergyIntolerance Verification Status 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-allergyintolerance/CodeSystem/allergyintolerance-verification-supplement | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:AllergyIntoleranceVerificationStatus |
| **Copyright/Legal**: CC0-1.0 | |

 
Code supplement with translations of CHAllergyIntolerance verification status 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "allergyintolerance-verification-supplement",
  "url" : "http://fhir.ch/ig/ch-allergyintolerance/CodeSystem/allergyintolerance-verification-supplement",
  "version" : "3.3.0",
  "name" : "AllergyIntoleranceVerificationStatus",
  "title" : "CH AllergyIntolerance Verification Status",
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
  "description" : "Code supplement with translations of CHAllergyIntolerance verification status",
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
  "supplements" : "http://terminology.hl7.org/CodeSystem/allergyintolerance-verification",
  "concept" : [
    {
      "code" : "unconfirmed",
      "display" : "Unconfirmed",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Unbestätigt"
        },
        {
          "language" : "fr-CH",
          "value" : "Pas confirmé"
        },
        {
          "language" : "it-CH",
          "value" : "Non confermata"
        }
      ]
    },
    {
      "code" : "confirmed",
      "display" : "Confirmed",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Bestätigt"
        },
        {
          "language" : "fr-CH",
          "value" : "Confirmé"
        },
        {
          "language" : "it-CH",
          "value" : "Confermata"
        }
      ]
    },
    {
      "code" : "refuted",
      "display" : "Refuted",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Widerlegt"
        },
        {
          "language" : "fr-CH",
          "value" : "Réfuté"
        },
        {
          "language" : "it-CH",
          "value" : "Contestata"
        }
      ]
    },
    {
      "code" : "entered-in-error",
      "display" : "Entered in Error",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Irrtümlich eingegeben"
        },
        {
          "language" : "fr-CH",
          "value" : "Saisie erronée"
        },
        {
          "language" : "it-CH",
          "value" : "Immessa per errore"
        }
      ]
    }
  ]
}

```
