# Requested Service - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Requested Service**

## CodeSystem: Requested Service (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-rad-order/CodeSystem/ch-rad-order-requested-service | *Version*:2.0.1 |
| Active as of 2025-12-17 | *Computable Name*:ChRadOrderRequestedService |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition for Requested Service Code System in the context of CH RAD-Order. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChRadOrderRequestedService](ValueSet-ch-rad-order-requested-service.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-rad-order-requested-service",
  "url" : "http://fhir.ch/ig/ch-rad-order/CodeSystem/ch-rad-order-requested-service",
  "version" : "2.0.1",
  "name" : "ChRadOrderRequestedService",
  "title" : "Requested Service",
  "status" : "active",
  "experimental" : true,
  "date" : "2025-12-17T07:22:04+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "Juerg P. Bleuer",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    }
  ],
  "description" : "Definition for Requested Service Code System in the context of CH RAD-Order.",
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
  "count" : 7,
  "concept" : [
    {
      "code" : "RequestForPreviousReport",
      "display" : "Befundbericht früherer Untersuchung(en)"
    },
    {
      "code" : "RequestForPreviousReportAndImages",
      "display" : "Bilder und Befundberichte früherer Untersuchung(en)"
    },
    {
      "code" : "ImagingRequest",
      "display" : "Bildgebende Diagnostik"
    },
    {
      "code" : "RadIntervention",
      "display" : "Interventionelle Radiologie"
    },
    {
      "code" : "SecondOpinion",
      "display" : "Zweitmeinung"
    },
    {
      "code" : "ImagingRequestWithIntervention",
      "display" : "Bildgebende Diagnostik und Intervention"
    },
    {
      "code" : "RemoteReporting",
      "display" : "Fernbefundung"
    }
  ]
}

```
