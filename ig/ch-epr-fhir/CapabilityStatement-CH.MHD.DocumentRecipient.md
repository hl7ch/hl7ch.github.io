# MHD Document Recipient (server) - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MHD Document Recipient (server)**

## CapabilityStatement: MHD Document Recipient (server) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.MHD.DocumentRecipient | *Version*:5.0.0 |
| Active as of 2020-07-08 | *Computable Name*:CH_MHD_DocumentRecipient |
| **Copyright/Legal**: CC0-1.0 | |

 
CapabilityStatement for Actor MHD Document Recipient (server). 

 [Raw OpenAPI-Swagger Definition file](CH.MHD.DocumentRecipient.openapi.json) | [Download](CH.MHD.DocumentRecipient.openapi.json) 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "CH.MHD.DocumentRecipient",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.MHD.DocumentRecipient",
  "version" : "5.0.0",
  "name" : "CH_MHD_DocumentRecipient",
  "title" : "MHD Document Recipient (server)",
  "status" : "active",
  "date" : "2020-07-08",
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
  "description" : "CapabilityStatement for Actor MHD Document Recipient (server).",
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
      "documentation" : "MHD server accepts the document and metadata sent from the Document Source [ITI-65].",
      "security" : {
        "cors" : false,
        "description" : "TLS SHALL be used together with IUA extended access token"
      },
      "interaction" : [
        {
          "code" : "transaction",
          "documentation" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-providedocumentbundle-comprehensive"
        }
      ]
    }
  ]
}

```
