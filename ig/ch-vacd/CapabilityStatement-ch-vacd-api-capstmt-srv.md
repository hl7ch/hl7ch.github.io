# CH VACD FHIR API CapabilityStatement for server - Implementation Guide CH VACD v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD FHIR API CapabilityStatement for server**

## CapabilityStatement: CH VACD FHIR API CapabilityStatement for server 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/CapabilityStatement/ch-vacd-api-capstmt-srv | *Version*:7.0.0-ballot |
| Draft as of 2026-03-23 | *Computable Name*:CHVACDApiCapabilityStatementServer |
| **Copyright/Legal**: CC0-1.0 | |

 
CapabilityStatement for CH VACD API (server). 

This is a first version of a possible API description.

Feedback during the Ballot 7.0.0 is very appreciated!

 [Raw OpenAPI-Swagger Definition file](ch-vacd-api-capstmt-srv.openapi.json) | [Download](ch-vacd-api-capstmt-srv.openapi.json) 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "ch-vacd-api-capstmt-srv",
  "url" : "http://fhir.ch/ig/ch-vacd/CapabilityStatement/ch-vacd-api-capstmt-srv",
  "version" : "7.0.0-ballot",
  "name" : "CHVACDApiCapabilityStatementServer",
  "title" : "CH VACD FHIR API CapabilityStatement for server",
  "status" : "draft",
  "date" : "2026-03-23T09:43:45.742+01:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  }],
  "description" : "CapabilityStatement for CH VACD API (server).",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CHE"
    }]
  }],
  "copyright" : "CC0-1.0",
  "kind" : "requirements",
  "fhirVersion" : "4.0.1",
  "format" : ["application/fhir+xml", "application/fhir+json"],
  "rest" : [{
    "mode" : "server",
    "documentation" : "The server will handle all resources and also complete vaccination documents",
    "resource" : [{
      "type" : "AllergyIntolerance",
      "profile" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-allergyintolerances",
      "interaction" : [{
        "code" : "update"
      },
      {
        "code" : "search-type"
      },
      {
        "code" : "read"
      },
      {
        "code" : "create"
      }],
      "searchInclude" : ["*"],
      "searchParam" : [{
        "name" : "code",
        "type" : "token",
        "documentation" : "Code that identifies the allergy or intolerance"
      },
      {
        "name" : "patient",
        "type" : "reference",
        "documentation" : "Who the sensitivity is for"
      },
      {
        "name" : "identifier",
        "type" : "token",
        "documentation" : "Any identifier for the AllergyIntolerance."
      }]
    },
    {
      "type" : "Condition",
      "profile" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-condition",
      "supportedProfile" : ["http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-basic-immunization",
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems",
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses"],
      "interaction" : [{
        "code" : "update"
      },
      {
        "code" : "search-type"
      },
      {
        "code" : "read"
      },
      {
        "code" : "create"
      }],
      "searchInclude" : ["*"],
      "searchParam" : [{
        "name" : "code",
        "type" : "token",
        "documentation" : "Code for the condition"
      },
      {
        "name" : "patient",
        "type" : "reference",
        "documentation" : "Who has the condition?"
      },
      {
        "name" : "identifier",
        "type" : "token",
        "documentation" : "Any identifier for the Condition."
      }]
    },
    {
      "type" : "Immunization",
      "profile" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization",
      "interaction" : [{
        "code" : "update"
      },
      {
        "code" : "search-type"
      },
      {
        "code" : "read"
      },
      {
        "code" : "create"
      }],
      "searchInclude" : ["*"],
      "searchParam" : [{
        "name" : "patient",
        "type" : "reference",
        "documentation" : "The patient for the vaccination record"
      },
      {
        "name" : "vaccine-code",
        "type" : "token",
        "documentation" : "Vaccine Product Administered"
      },
      {
        "name" : "target-disease",
        "type" : "token",
        "documentation" : "The target disease the dose is being administered against"
      },
      {
        "name" : "date",
        "type" : "date",
        "documentation" : "Vaccination (non)-Administration Date"
      },
      {
        "name" : "identifier",
        "type" : "token",
        "documentation" : "Any identifier for the Immunization."
      }]
    },
    {
      "type" : "Observation",
      "profile" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-laboratory-serology",
      "interaction" : [{
        "code" : "update"
      },
      {
        "code" : "search-type"
      },
      {
        "code" : "read"
      },
      {
        "code" : "create"
      }],
      "searchInclude" : ["*"],
      "searchParam" : [{
        "name" : "code",
        "type" : "token",
        "documentation" : "The code of the observation type"
      },
      {
        "name" : "patient",
        "type" : "reference",
        "documentation" : "The subject that the observation is about (if patient)"
      },
      {
        "name" : "identifier",
        "type" : "token",
        "documentation" : "Any identifier for the Observation."
      }]
    },
    {
      "type" : "Medication",
      "profile" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medication-for-immunization",
      "interaction" : [{
        "code" : "update"
      },
      {
        "code" : "search-type"
      },
      {
        "code" : "read"
      },
      {
        "code" : "create"
      }],
      "searchInclude" : ["*"],
      "searchParam" : [{
        "name" : "code",
        "type" : "token",
        "documentation" : "Returns medications for a specific code"
      },
      {
        "name" : "identifier",
        "type" : "token",
        "documentation" : "Returns medications with this external identifier"
      }]
    },
    {
      "type" : "OperationDefinition",
      "profile" : "http://hl7.org/fhir/StructureDefinition/OperationDefinition",
      "interaction" : [{
        "code" : "read"
      }],
      "searchInclude" : ["*"]
    },
    {
      "type" : "Composition",
      "profile" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-composition-epr",
      "supportedProfile" : ["http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration",
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-vaccination-record"],
      "interaction" : [{
        "code" : "read"
      },
      {
        "code" : "search-type"
      }],
      "searchParam" : [{
        "name" : "patient",
        "type" : "reference",
        "documentation" : "Who and/or what the composition is about"
      },
      {
        "name" : "type",
        "type" : "token",
        "documentation" : "Kind of composition"
      }],
      "operation" : [{
        "name" : "document",
        "definition" : "http://hl7.org/fhir/OperationDefinition/Composition-document",
        "documentation" : "Generate export document according to the composition"
      }]
    },
    {
      "type" : "Bundle",
      "profile" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-document-epr",
      "supportedProfile" : ["http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-immunization-administration",
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-document-vaccination-record"],
      "interaction" : [{
        "code" : "search-type"
      },
      {
        "code" : "read"
      },
      {
        "code" : "create"
      }],
      "searchParam" : [{
        "name" : "composition",
        "type" : "reference",
        "documentation" : "The first resource in the bundle, if the bundle type is \"document\" - this is a composition, and this parameter provides access to search its contents"
      },
      {
        "name" : "type",
        "type" : "token",
        "documentation" : "document"
      }]
    },
    {
      "type" : "Organization",
      "profile" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization",
      "supportedProfile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization-epr"],
      "interaction" : [{
        "code" : "update"
      },
      {
        "code" : "search-type"
      },
      {
        "code" : "read"
      },
      {
        "code" : "create"
      }],
      "searchInclude" : ["*"],
      "searchParam" : [{
        "name" : "name",
        "type" : "string",
        "documentation" : "A portion of the organization's name or alias"
      },
      {
        "name" : "identifier",
        "type" : "token",
        "documentation" : "Any identifier for the Organization."
      }]
    },
    {
      "type" : "Patient",
      "profile" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
      "supportedProfile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-epr"],
      "interaction" : [{
        "code" : "update"
      },
      {
        "code" : "search-type"
      },
      {
        "code" : "read"
      },
      {
        "code" : "create"
      }],
      "searchInclude" : ["*"],
      "searchParam" : [{
        "name" : "name",
        "type" : "string",
        "documentation" : "A server defined search that may match any of the string fields in the HumanName, including family, give, prefix, suffix, suffix, and/or text"
      },
      {
        "name" : "family",
        "type" : "string",
        "documentation" : "A portion of the family name of the patient"
      },
      {
        "name" : "given",
        "type" : "string",
        "documentation" : "A portion of the given name of the patient"
      },
      {
        "name" : "birthdate",
        "type" : "date",
        "documentation" : "The patient's date of birth"
      },
      {
        "name" : "gender",
        "type" : "token",
        "documentation" : "Gender of the patient"
      },
      {
        "name" : "identifier",
        "type" : "token",
        "documentation" : "A patient identifier"
      },
      {
        "name" : "address",
        "type" : "string",
        "documentation" : "A server defined search that may match any of the string fields in the Address, including line, city, district, state, country, postalCode, and/or text"
      }],
      "operation" : [{
        "name" : "export-document",
        "definition" : "http://fhir.ch/ig/ch-vacd/OperationDefinition/ch-vacd-patient-export-operation",
        "documentation" : "Generate export document according to the selected export type"
      }]
    },
    {
      "type" : "Practitioner",
      "profile" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
      "supportedProfile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner-epr"],
      "interaction" : [{
        "code" : "update"
      },
      {
        "code" : "search-type"
      },
      {
        "code" : "read"
      },
      {
        "code" : "create"
      }],
      "searchInclude" : ["*"],
      "searchParam" : [{
        "name" : "name",
        "type" : "string",
        "documentation" : "A server defined search that may match any of the string fields in the HumanName, including family, give, prefix, suffix, suffix, and/or text"
      },
      {
        "name" : "family",
        "type" : "string",
        "documentation" : "A portion of the family name"
      },
      {
        "name" : "given",
        "type" : "string",
        "documentation" : "A portion of the given name of the patient"
      },
      {
        "name" : "identifier",
        "type" : "token",
        "documentation" : "A patient identifier"
      },
      {
        "name" : "address",
        "type" : "string",
        "documentation" : "A server defined search that may match any of the string fields in the Address, including line, city, district, state, country, postalCode, and/or text"
      }]
    },
    {
      "type" : "PractitionerRole",
      "profile" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
      "supportedProfile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole-epr"],
      "interaction" : [{
        "code" : "update"
      },
      {
        "code" : "search-type"
      },
      {
        "code" : "read"
      },
      {
        "code" : "create"
      }],
      "searchInclude" : ["*"],
      "searchParam" : [{
        "name" : "code",
        "type" : "string"
      }]
    },
    {
      "type" : "RelatedPerson",
      "profile" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson",
      "interaction" : [{
        "code" : "update"
      },
      {
        "code" : "search-type"
      },
      {
        "code" : "read"
      },
      {
        "code" : "create"
      }],
      "searchInclude" : ["*"],
      "searchParam" : [{
        "name" : "code",
        "type" : "string"
      },
      {
        "name" : "name",
        "type" : "string",
        "documentation" : "A server defined search that may match any of the string fields in the HumanName, including family, give, prefix, suffix, suffix, and/or text"
      },
      {
        "name" : "patient",
        "type" : "reference",
        "documentation" : "The patient this related person is related to"
      }]
    },
    {
      "type" : "Binary",
      "interaction" : [{
        "code" : "update"
      },
      {
        "code" : "search-type"
      },
      {
        "code" : "read"
      },
      {
        "code" : "create"
      }],
      "searchInclude" : ["*"],
      "searchParam" : [{
        "name" : "code",
        "type" : "string"
      }]
    },
    {
      "type" : "Device",
      "interaction" : [{
        "code" : "update"
      },
      {
        "code" : "search-type"
      },
      {
        "code" : "read"
      },
      {
        "code" : "create"
      }],
      "searchInclude" : ["*"],
      "searchParam" : [{
        "name" : "code",
        "type" : "string"
      }]
    }],
    "interaction" : [{
      "code" : "transaction",
      "documentation" : "Create/update resources as Batch or Transaction"
    }]
  }]
}

```
