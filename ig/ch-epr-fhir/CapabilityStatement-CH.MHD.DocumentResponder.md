# MHD Document Responder (server) - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MHD Document Responder (server)**

## CapabilityStatement: MHD Document Responder (server) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.MHD.DocumentResponder | *Version*:5.0.0 |
| Active as of 2020-07-08 | *Computable Name*:CH_MHD_DocumentResponder |
| **Copyright/Legal**: CC0-1.0 | |

 
CapabilityStatement for Actor MHD Document Responder (server). 

 [Raw OpenAPI-Swagger Definition file](CH.MHD.DocumentResponder.openapi.json) | [Download](CH.MHD.DocumentResponder.openapi.json) 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "CH.MHD.DocumentResponder",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.MHD.DocumentResponder",
  "version" : "5.0.0",
  "name" : "CH_MHD_DocumentResponder",
  "title" : "MHD Document Responder (server)",
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
  "description" : "CapabilityStatement for Actor MHD Document Responder (server).",
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
      "documentation" : "MHD server returns DocumentReference Resources that match the search criteria provided by the Document Consumer [ITI-67]. MHD supports update of DocumentReference Resources by the Document Source [CH:MHD-1]. MHD server serves the document to the Document Consumer [ITI-68].",
      "security" : {
        "cors" : false,
        "description" : "TLS SHALL be used together with IUA extended access token"
      },
      "resource" : [
        {
          "type" : "DocumentReference",
          "profile" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-documentreference-comprehensive",
          "interaction" : [
            {
              "code" : "read"
            },
            {
              "code" : "search-type"
            },
            {
              "code" : "update"
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
              "name" : "_lastUpdated",
              "definition" : "http://hl7.org/fhir/SearchParameter/Resource-lastUpdated",
              "type" : "date",
              "documentation" : "When the resource version last changed"
            },
            {
              "name" : "author",
              "definition" : "http://hl7.org/fhir/SearchParameter/DocumentReference-author",
              "type" : "reference",
              "documentation" : "Who and/or what authored the document"
            },
            {
              "name" : "category",
              "definition" : "http://hl7.org/fhir/SearchParameter/DocumentReference-category",
              "type" : "token",
              "documentation" : "Categorization of document"
            },
            {
              "name" : "event",
              "definition" : "http://hl7.org/fhir/SearchParameter/DocumentReference-event",
              "type" : "token",
              "documentation" : "Main clinical acts documented"
            },
            {
              "name" : "facility",
              "definition" : "http://hl7.org/fhir/SearchParameter/DocumentReference-facility",
              "type" : "token",
              "documentation" : "Kind of facility where patient was seen"
            },
            {
              "name" : "format",
              "definition" : "http://hl7.org/fhir/SearchParameter/DocumentReference-format",
              "type" : "token",
              "documentation" : "Format/content rules for the document"
            },
            {
              "name" : "creation",
              "definition" : "https://profiles.ihe.net/ITI/MHD/SearchParameter/DocumentReference-Creation",
              "type" : "date",
              "documentation" : "When this document was created"
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
              "name" : "patient",
              "definition" : "http://hl7.org/fhir/SearchParameter/clinical-patient",
              "type" : "reference",
              "documentation" : "Who/what is the subject of the document"
            },
            {
              "name" : "period",
              "definition" : "http://hl7.org/fhir/SearchParameter/DocumentReference-period",
              "type" : "date",
              "documentation" : "Time of service that is being documented"
            },
            {
              "name" : "related",
              "definition" : "http://hl7.org/fhir/SearchParameter/DocumentReference-related",
              "type" : "reference",
              "documentation" : "Related Resource"
            },
            {
              "name" : "security-label",
              "definition" : "http://hl7.org/fhir/SearchParameter/DocumentReference-security-label",
              "type" : "token",
              "documentation" : "Document security-tags"
            },
            {
              "name" : "setting",
              "definition" : "http://hl7.org/fhir/SearchParameter/DocumentReference-setting",
              "type" : "token",
              "documentation" : "Additional details about where the content was created (e.g. clinical specialty)"
            },
            {
              "name" : "status",
              "definition" : "http://hl7.org/fhir/SearchParameter/DocumentReference-status",
              "type" : "token",
              "documentation" : "current | superseded | entered-in-error"
            },
            {
              "name" : "type",
              "definition" : "http://hl7.org/fhir/SearchParameter/clinical-type",
              "type" : "token",
              "documentation" : "Kind of document (LOINC if possible)"
            }
          ]
        },
        {
          "type" : "Binary",
          "interaction" : [
            {
              "code" : "read"
            }
          ]
        }
      ],
      "interaction" : [
        {
          "code" : "search-system"
        }
      ]
    }
  ]
}

```
