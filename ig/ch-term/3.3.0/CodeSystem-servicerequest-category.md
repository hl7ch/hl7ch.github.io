# ServiceRequest Category - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ServiceRequest Category**

## CodeSystem: ServiceRequest Category 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/CodeSystem/servicerequest-category | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:CSServiceRequestCategory |
| **Copyright/Legal**: CC0-1.0 | |

 
Codes for the category of service request used to define the requested service. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [VSServiceRequestCategory](ValueSet-servicerequest-category.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "servicerequest-category",
  "url" : "http://fhir.ch/ig/ch-term/CodeSystem/servicerequest-category",
  "version" : "3.3.0",
  "name" : "CSServiceRequestCategory",
  "title" : "ServiceRequest Category",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-15T10:36:18+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Codes for the category of service request used to define the requested service.",
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
  "count" : 14,
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
    },
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
