# FOPH CapabilityStatement for receiving laboratory reports - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FOPH CapabilityStatement for receiving laboratory reports**

## CapabilityStatement: FOPH CapabilityStatement for receiving laboratory reports 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/CapabilityStatement/ch-elm-documentrecipient | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:CH_ELM_CapabilityStatement_DocumentRecipient |
| **Copyright/Legal**: CC0-1.0 | |

 
CapabilityStatement for receiving laboratory reports 

This is the **Requirements** CapabilityStatement for the Document Recipient.

 [Raw OpenAPI-Swagger Definition file](ch-elm-documentrecipient.openapi.json) | [Download](ch-elm-documentrecipient.openapi.json) 

## FOPH CapabilityStatement for receiving laboratory reports

* Implementation Guide Version: 1.13.0 
* FHIR Version: 4.0.1 
* Supported Formats: `application/fhir+xml`, `application/fhir+json`
* Published on: 2025-11-25 09:47:06+0000 
* Published by: Federal Office of Public Health FOPH 

> **Note to Implementers: FHIR Capabilities**Any FHIR capability may be 'allowed' by the system unless explicitly marked as 'SHALL NOT'. A few items are marked as MAY in the Implementation Guide to highlight their potential relevance to the use case.

## FHIR RESTful Capabilities

### Mode: server

**Security**

> 

TLS with client certificate required


### Capabilities by Resource/Profile

#### Summary

The summary table lists the resources that are part of this configuration, and for each resource it lists:

* The relevant profiles (if any)
* The interactions supported by each resource (**R**ead, **S**earch, **U**pdate, and **C**reate, are always shown, while **VR**ead, **P**atch, **D**elete, **H**istory on **I**nstance, or **H**istory on **T**ype are only present if at least one of the resources has support for them.
* The required, recommended, and some optional search parameters (if any).
* The linked resources enabled for `_include`
* The other resources enabled for `_revinclude`
* The operations on the resource (if any)

| | | | | | | | | | |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| [DocumentReference](#DocumentReference1-1) | [http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReference](StructureDefinition-PublishDocumentReference.md) | y | y |  | y | _id, _lastupdated, date, identifier, elm-status |  |  |  |

-------

#### Resource Conformance: supported DocumentReference

Base System Profile

[DocumentReference for sending the report](StructureDefinition-PublishDocumentReference.md)

Profile Conformance

**SHALL**

Reference Policy

Interaction summary

* Supports `create`, `read`, `search-type`.

Search Parameters


 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "ch-elm-documentrecipient",
  "url" : "http://fhir.ch/ig/ch-elm/CapabilityStatement/ch-elm-documentrecipient",
  "version" : "1.13.0",
  "name" : "CH_ELM_CapabilityStatement_DocumentRecipient",
  "title" : "FOPH CapabilityStatement for receiving laboratory reports",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-11-25T09:47:06+00:00",
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
