# Service Request Categories for Questionnaires - CH LAB-Order (R4) v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Service Request Categories for Questionnaires**

## CodeSystem: Service Request Categories for Questionnaires (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-order/CodeSystem/ServiceRequest.categories | *Version*:3.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabOrderServiceRequestCategories |
| **Copyright/Legal**: CC0-1.0 | |

 
ch-lab-order defines 10 different Kinds of Service Request 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ServiceRequestCategories](ValueSet-ServiceRequest.categories.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ServiceRequest.categories",
  "url" : "http://fhir.ch/ig/ch-lab-order/CodeSystem/ServiceRequest.categories",
  "version" : "3.0.0",
  "name" : "ChLabOrderServiceRequestCategories",
  "title" : "Service Request Categories for Questionnaires",
  "status" : "active",
  "experimental" : true,
  "date" : "2025-12-16T11:34:27+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    },
    {
      "name" : "Marcel Hanselmann",
      "telecom" : [
        {
          "system" : "email",
          "value" : "laborprojektgruppe@gmail.com",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "ch-lab-order defines 10 different Kinds of Service Request",
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
      "code" : "RequestForLabExam",
      "display" : "Anforderung von Laboruntersuchungen",
      "definition" : "Electronic ordering of laboratory tests and/or panels"
    },
    {
      "code" : "RequestForAdditionalExam",
      "display" : "Nachverordnung von weiteren Laboruntersuchungen bei derselben Probe",
      "definition" : "Electronic ordering of additional laboratory tests for referenced specimen"
    },
    {
      "code" : "RequestForPrecedentReport",
      "display" : "Anforderung vorangehender Laborberichte",
      "definition" : "Electronic ordering of laboratory diagnositic reports"
    },
    {
      "code" : "RequestForPrecedentReportAndImages",
      "display" : "Anforderung vorangehender Bilddokumente",
      "definition" : "Electronic ordering of laboratory images"
    },
    {
      "code" : "RequestFor2ndOpinion",
      "display" : "Anforderung einer Zweitmeinung",
      "definition" : "Electronic ordering of 2nd opinion"
    },
    {
      "code" : "ProposalForAdditionalExam",
      "display" : "Vorschlag für weitere Untersuchungen",
      "definition" : "Electronic proposal for additional exam"
    },
    {
      "code" : "RequestForHistopathExam",
      "display" : "Anforderung von histopathologischen Untersuchungen",
      "definition" : "Electronic ordering of histopathologic tests and/or panels"
    }
  ]
}

```
