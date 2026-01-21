# FOPH CapabilityStatement for receiving laboratory reports - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FOPH CapabilityStatement for receiving laboratory reports**

## CapabilityStatement: FOPH CapabilityStatement for receiving laboratory reports 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/CapabilityStatement/ch-elm-documentrecipient | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:CH_ELM_CapabilityStatement_DocumentRecipient |
| **Copyright/Legal**: CC0-1.0 | |

 
CapabilityStatement for receiving laboratory reports 

This is the **Requirements** CapabilityStatement for the Document Recipient.

 [Raw OpenAPI-Swagger Definition file](ch-elm-documentrecipient.openapi.json) | [Download](ch-elm-documentrecipient.openapi.json) 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "ch-elm-documentrecipient",
  "url" : "http://fhir.ch/ig/ch-elm/CapabilityStatement/ch-elm-documentrecipient",
  "version" : "1.13.1",
  "name" : "CH_ELM_CapabilityStatement_DocumentRecipient",
  "title" : "FOPH CapabilityStatement for receiving laboratory reports",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-01-21T11:05:32+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "CapabilityStatement for receiving laboratory reports",
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
      "mode" : "server",
      "security" : {
        "description" : "TLS with client certificate required"
      },
      "resource" : [
        {
          "type" : "DocumentReference",
          "profile" : "http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReference",
          "interaction" : [
            {
              "code" : "create"
            },
            {
              "code" : "read"
            },
            {
              "code" : "search-type"
            }
          ],
          "searchParam" : [
            {
              "name" : "_id",
              "definition" : "http://hl7.org/fhir/SearchParameter/Resource-id",
              "type" : "token",
              "documentation" : "Logical id of this artifact"
            },
            {
              "name" : "_lastupdated",
              "definition" : "http://hl7.org/fhir/SearchParameter/Resource-lastUpdated",
              "type" : "date",
              "documentation" : "When the resource version last changed"
            },
            {
              "name" : "date",
              "definition" : "http://hl7.org/fhir/SearchParameter/DocumentReference-date",
              "type" : "date",
              "documentation" : "When this document reference was created"
            },
            {
              "name" : "identifier",
              "definition" : "http://hl7.org/fhir/SearchParameter/clinical-identifier",
              "type" : "token",
              "documentation" : "The identifier for this DocumentReference"
            },
            {
              "name" : "elm-status",
              "definition" : "http://fhir.ch/ig/ch-elm/SearchParameter/DocumentReference-ch-elm-status",
              "type" : "token",
              "documentation" : "in-progress | failed | completed"
            }
          ]
        }
      ]
    }
  ]
}

```
