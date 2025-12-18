# EPR App (client) - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EPR App (client)**

## CapabilityStatement: EPR App (client) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.EPR.App | *Version*:5.0.0 |
| Active as of 2020-07-08 | *Computable Name*:CH_EPR_App |
| **Copyright/Legal**: CC0-1.0 | |

 
CapabilityStatement for EPR App (client). 

 [Raw OpenAPI-Swagger Definition file](CH.EPR.App.openapi.json) | [Download](CH.EPR.App.openapi.json) 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "CH.EPR.App",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.EPR.App",
  "version" : "5.0.0",
  "name" : "CH_EPR_App",
  "title" : "EPR App (client)",
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
  "description" : "CapabilityStatement for EPR App (client).",
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
    "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.PDQm.Consumer",
    "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.PIXm.Consumer",
    "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.PIXm.Source",
    "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.MHD.DocumentSource",
    "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.MHD.DocumentConsumer",
    "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.mCSD.QueryClient",
    "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.mCSD.DataSource",
    "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.PPQm.PolicySourceConsumer",
    "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.ATNA.AuditCreator"
  ],
  "fhirVersion" : "4.0.1",
  "format" : ["application/fhir+xml", "application/fhir+json"],
  "rest" : [
    {
      "mode" : "client"
    }
  ]
}

```
