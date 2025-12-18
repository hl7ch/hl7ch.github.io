# EPR API (server) - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EPR API (server)**

## CapabilityStatement: EPR API (server) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.EPR.API | *Version*:5.0.0 |
| Active as of 2020-07-08 | *Computable Name*:CH_EPR_API |
| **Copyright/Legal**: CC0-1.0 | |

 
CapabilityStatement for EPR API (server). 

 [Raw OpenAPI-Swagger Definition file](CH.EPR.API.openapi.json) | [Download](CH.EPR.API.openapi.json) 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "CH.EPR.API",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.EPR.API",
  "version" : "5.0.0",
  "name" : "CH_EPR_API",
  "title" : "EPR API (server)",
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
  "description" : "CapabilityStatement for EPR API (server).",
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
  "imports" : [
    "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.PIXm.Manager",
    "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.PDQm.Supplier",
    "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.MHD.DocumentRecipient",
    "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.MHD.DocumentResponder",
    "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.mCSD.Directory",
    "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.PPQm.PolicyRepository",
    "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.ATNA.AuditRecordRepository"
  ],
  "fhirVersion" : "4.0.1",
  "format" : ["application/fhir+xml", "application/fhir+json"],
  "rest" : [
    {
      "mode" : "server"
    }
  ]
}

```
