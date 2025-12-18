# MHD Document Source (client) - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MHD Document Source (client)**

## CapabilityStatement: MHD Document Source (client) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.MHD.DocumentSource | *Version*:5.0.0 |
| Active as of 2020-07-07 | *Computable Name*:CH_MHD_DocumentSource |
| **Copyright/Legal**: CC0-1.0 | |

 
CapabilityStatement for Actor MHD Document Source (client). 

 [Raw OpenAPI-Swagger Definition file](CH.MHD.DocumentSource.openapi.json) | [Download](CH.MHD.DocumentSource.openapi.json) 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "CH.MHD.DocumentSource",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.MHD.DocumentSource",
  "version" : "5.0.0",
  "name" : "CH_MHD_DocumentSource",
  "title" : "MHD Document Source (client)",
  "status" : "active",
  "date" : "2020-07-07",
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
  "description" : "CapabilityStatement for Actor MHD Document Source (client).",
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
      "documentation" : "MHD client sends documents and metadata to the Document Recipient [ITI-65].",
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
