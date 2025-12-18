# MHD Document Consumer (client) - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MHD Document Consumer (client)**

## CapabilityStatement: MHD Document Consumer (client) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.MHD.DocumentConsumer | *Version*:5.0.0 |
| Active as of 2020-07-08 | *Computable Name*:CH_MHD_DocumentConsumer |
| **Copyright/Legal**: CC0-1.0 | |

 
CapabilityStatement for Actor MHD Document Consumer (client). 

 [Raw OpenAPI-Swagger Definition file](CH.MHD.DocumentConsumer.openapi.json) | [Download](CH.MHD.DocumentConsumer.openapi.json) 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "CH.MHD.DocumentConsumer",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.MHD.DocumentConsumer",
  "version" : "5.0.0",
  "name" : "CH_MHD_DocumentConsumer",
  "title" : "MHD Document Consumer (client)",
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
  "description" : "CapabilityStatement for Actor MHD Document Consumer (client).",
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
      "documentation" : "MHD client requests a list of DocumentReference Resources, matching the supplied set of criteria, from the Document Responder [ITI-67]. MHD client requests a document from the Document Responder [ITI-68].",
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
              "name" : "date",
              "definition" : "http://hl7.org/fhir/SearchParameter/DocumentReference-date",
              "type" : "date",
              "documentation" : "When this document reference was created"
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
          "type" : "List",
          "profile" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-submissionset-comprehensive",
          "interaction" : [
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
              "name" : "code",
              "definition" : "http://hl7.org/fhir/SearchParameter/clinical-code",
              "type" : "token",
              "documentation" : "This parameter, of type token, specifies the code.coding value supplied in the List Resource. The value of the code element indicates the List of type SubmissionSet or Folder as indicated."
            },
            {
              "name" : "creation",
              "definition" : "https://profiles.ihe.net/ITI/MHD/SearchParameter/DocumentReference-Creation",
              "type" : "date",
              "documentation" : "When this document was created"
            },
            {
              "name" : "date",
              "definition" : "http://hl7.org/fhir/SearchParameter/clinical-date",
              "type" : "date",
              "documentation" : "This parameter, of type date, specifies the time when the List was created."
            },
            {
              "name" : "identifier",
              "definition" : "http://hl7.org/fhir/SearchParameter/clinical-identifier",
              "type" : "token",
              "documentation" : "This parameter, of type token, specifies an identifier for this List. The search results represent the results of a search on List.masterIdentifier and List.identifier. See ITI TF-2: Appendix Z.2 for additional constraints on the use of the token search parameter type."
            },
            {
              "name" : "subject",
              "definition" : "http://hl7.org/fhir/SearchParameter/clinical-patient",
              "type" : "reference",
              "documentation" : "This parameter is of type Reference(Patient). The Document Consumer may get this reference through the use of the PDQm or PIXm Profiles, or by some other method. When the patient parameter is used, the Patient reference would need to be accessible to both the Document Consumer and the Document Responder."
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
