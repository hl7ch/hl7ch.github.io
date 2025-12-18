# PPQm Policy Source and Consumer (client) - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PPQm Policy Source and Consumer (client)**

## CapabilityStatement: PPQm Policy Source and Consumer (client) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.PPQm.PolicySourceConsumer | *Version*:5.0.0 |
| Active as of 2024-03-19 | *Computable Name*:CH_PPQm_Policy_Source_Consumer |
| **Copyright/Legal**: CC0-1.0 | |

 
CapabilityStatement for the Policy Source and Policy Consumer actors in the CH:PPQm profile (client). 

 [Raw OpenAPI-Swagger Definition file](CH.PPQm.PolicySourceConsumer.openapi.json) | [Download](CH.PPQm.PolicySourceConsumer.openapi.json) 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "CH.PPQm.PolicySourceConsumer",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.PPQm.PolicySourceConsumer",
  "version" : "5.0.0",
  "name" : "CH_PPQm_Policy_Source_Consumer",
  "title" : "PPQm Policy Source and Consumer (client)",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-03-19",
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
  "description" : "CapabilityStatement for the Policy Source and Policy Consumer actors in the CH:PPQm profile (client).",
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
  "kind" : "requirements",
  "fhirVersion" : "4.0.1",
  "format" : ["application/fhir+xml", "application/fhir+json"],
  "rest" : [
    {
      "mode" : "client",
      "documentation" : "CH:PPQm endpoints",
      "resource" : [
        {
          "type" : "Consent",
          "supportedProfile" : [
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmConsent"
          ],
          "interaction" : [
            {
              "code" : "create",
              "documentation" : "PPQ-3 POST — Add Policy Set"
            },
            {
              "code" : "search-type",
              "documentation" : "PPQ-5 — Retrieve Policy Set"
            }
          ],
          "versioning" : "no-version",
          "conditionalUpdate" : true,
          "conditionalDelete" : "single",
          "searchParam" : [
            {
              "name" : "patient:identifier",
              "type" : "token",
              "documentation" : "PPQ-5 — Query by Patient ID"
            },
            {
              "name" : "identifier",
              "type" : "token",
              "documentation" : "PPQ-5 — Query by Policy Set ID"
            }
          ]
        },
        {
          "type" : "Bundle",
          "supportedProfile" : [
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmFeedRequestBundle",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PpqmRetrieveResponseBundle"
          ]
        }
      ],
      "interaction" : [
        {
          "code" : "transaction",
          "documentation" : "Only the PPQ-4 transaction is supported."
        }
      ]
    }
  ]
}

```
