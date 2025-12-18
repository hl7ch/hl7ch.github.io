# CH PPQm Consent Identifier Type - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH PPQm Consent Identifier Type**

## CodeSystem: CH PPQm Consent Identifier Type 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/CodeSystem/PpqmConsentIdentifierType | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:PpqmConsentIdentifierType |
| **Copyright/Legal**: CC0-1.0 | |

 
Code system for CH:PPQm Consent Identifier Types 

 This Code system is referenced in the content logical definition of the following value sets: 

* [PpqmConsentIdentifierType](ValueSet-PpqmConsentIdentifierType.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "PpqmConsentIdentifierType",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/CodeSystem/PpqmConsentIdentifierType",
  "version" : "5.0.0",
  "name" : "PpqmConsentIdentifierType",
  "title" : "CH PPQm Consent Identifier Type",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-18T15:54:33+00:00",
  "publisher" : "eHealth Suisse",
  "contact" : [
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch"
        }
      ]
    },
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Code system for CH:PPQm Consent Identifier Types",
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
  "count" : 2,
  "concept" : [
    {
      "code" : "policySetId",
      "display" : "Policy Set UUID",
      "definition" : "Policy Set UUID"
    },
    {
      "code" : "templateId",
      "display" : "Policy Set Template ID",
      "definition" : "Policy Set Template ID"
    }
  ]
}

```
