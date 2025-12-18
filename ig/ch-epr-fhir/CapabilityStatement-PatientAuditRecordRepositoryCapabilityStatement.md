# CapabilityStatement for the Patient Audit Record Repository - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CapabilityStatement for the Patient Audit Record Repository**

## CapabilityStatement: CapabilityStatement for the Patient Audit Record Repository 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/PatientAuditRecordRepositoryCapabilityStatement | *Version*:5.0.0 |
| Draft as of 2024-11-19 | *Computable Name*: |
| **Copyright/Legal**: CC0-1.0 | |

 
Defines the CapabilityStatement for the Patient Audit Record Repository actor of ITI-81. 

 [Raw OpenAPI-Swagger Definition file](PatientAuditRecordRepositoryCapabilityStatement.openapi.json) | [Download](PatientAuditRecordRepositoryCapabilityStatement.openapi.json) 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "PatientAuditRecordRepositoryCapabilityStatement",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/CapabilityStatement/PatientAuditRecordRepositoryCapabilityStatement",
  "version" : "5.0.0",
  "title" : "CapabilityStatement for the Patient Audit Record Repository",
  "status" : "draft",
  "date" : "2024-11-19",
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
  "description" : "Defines the CapabilityStatement for the Patient Audit Record Repository actor of ITI-81.",
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
      "resource" : [
        {
          "type" : "AuditEvent",
          "supportedProfile" : [
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/AccessAuditTrailEvent",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/DocumentAuditEvent",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/HpdAuditEvent",
            "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PolicyAuditEvent"
          ],
          "interaction" : [
            {
              "code" : "search-type",
              "documentation" : "ITI-81"
            }
          ],
          "searchParam" : [
            {
              "name" : "date",
              "type" : "date"
            },
            {
              "name" : "agent.identifier",
              "type" : "token"
            },
            {
              "name" : "entity.identifier",
              "type" : "token"
            },
            {
              "name" : "entity-type",
              "type" : "token"
            },
            {
              "name" : "entity-role",
              "type" : "token"
            },
            {
              "name" : "subtype",
              "type" : "token"
            }
          ]
        }
      ]
    }
  ]
}

```
