# ATNA Audit Record Repository (server) - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ATNA Audit Record Repository (server)**

## CapabilityStatement: ATNA Audit Record Repository (server) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.ATNA.AuditRecordRepository | *Version*:5.0.0 |
| Active as of 2024-01-08 | *Computable Name*:CH_ATNA_Audit_Record_Repository |
| **Copyright/Legal**: CC0-1.0 | |

 
CapabilityStatement for Server Actor in the IHE IT Infrastructure Technical Framework Supplement Add RESTful ATNA. 

 [Raw OpenAPI-Swagger Definition file](CH.ATNA.AuditRecordRepository.openapi.json) | [Download](CH.ATNA.AuditRecordRepository.openapi.json) 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "CH.ATNA.AuditRecordRepository",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/CH.ATNA.AuditRecordRepository",
  "version" : "5.0.0",
  "name" : "CH_ATNA_Audit_Record_Repository",
  "title" : "ATNA Audit Record Repository (server)",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-01-08",
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
  "description" : "CapabilityStatement for Server Actor in the IHE IT Infrastructure Technical Framework Supplement Add RESTful ATNA.",
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
      "documentation" : "IHE ITI ATNA ITI-20 endpoint",
      "resource" : [
        {
          "type" : "AuditEvent",
          "supportedProfile" : [
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventIti65Recipient",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventIti65Source",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventIti67Consumer",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventIti67Responder",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventIti68Consumer",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventIti68Responder",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-updatedocumentmetadata-audit-responder",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-updatedocumentmetadata-audit-source",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventIti83Consumer",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventIti83Manager",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventIti104Source",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventIti104ManagerCreate",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventIti104ManagerUpdate",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventIti119Consumer",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventIti119Supplier",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventIti90Read",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventIti90Query",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventIti130Create",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventIti130Update",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventIti130Delete",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventPpq3Create",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventPpq3Update",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventPpq3Delete",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventPpq5Consumer",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventPpq5Repository"
          ],
          "interaction" : [
            {
              "code" : "create"
            }
          ],
          "versioning" : "no-version"
        }
      ],
      "interaction" : [
        {
          "code" : "batch",
          "documentation" : "ITI-20 Send Audit Bundle Request Message - FHIR Feed Interaction"
        }
      ]
    }
  ]
}

```
