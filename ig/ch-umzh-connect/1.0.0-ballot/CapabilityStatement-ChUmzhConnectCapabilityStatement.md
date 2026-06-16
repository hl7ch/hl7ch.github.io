# ChUmzhConnectCapabilityStatement - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ChUmzhConnectCapabilityStatement**

## CapabilityStatement: ChUmzhConnectCapabilityStatement 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-umzh-connect/CapabilityStatement/ChUmzhConnectCapabilityStatement | *Version*:1.0.0-ballot |
| Active as of 2026-01-27 | *Computable Name*:UMZHconnectRestServer |
| **Copyright/Legal**: CC0-1.0 | |

 
UMZH Connect API requirements. This CapabilityStatement applies to both the [Placer](ActorDefinition-ch-umzh-connect-placer.md) and [Fulfiller](ActorDefinition-ch-umzh-connect-fulfiller.md) server roles. The required interactions overlap significantly; the applicable subset depends on the actor role: 
* **Placer server** — hosts the ServiceRequest and all referenced clinical resources. 
 The Fulfiller queries these via `read` and `search`.
* **Fulfiller server** — hosts the Coordination Task and related output resources. 
 The Placer creates it via `create`, applies selective updates via `patch`, and queries via `read` and `search`.
 

 [Raw OpenAPI-Swagger Definition file](ChUmzhConnectCapabilityStatement.openapi.json) | [Download](ChUmzhConnectCapabilityStatement.openapi.json) 



## Resource Content

```json
{
  "resourceType" : "CapabilityStatement",
  "id" : "ChUmzhConnectCapabilityStatement",
  "url" : "http://fhir.ch/ig/ch-umzh-connect/CapabilityStatement/ChUmzhConnectCapabilityStatement",
  "version" : "1.0.0-ballot",
  "name" : "UMZHconnectRestServer",
  "status" : "active",
  "date" : "2026-01-27T16:12:05.435+01:00",
  "publisher" : "UMZH Connect Team",
  "contact" : [{
    "name" : "UMZH Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://umzhconnect.ch/"
    }]
  }],
  "description" : "UMZH Connect API requirements. This CapabilityStatement applies to both the [Placer](ActorDefinition-ch-umzh-connect-placer.html) and [Fulfiller](ActorDefinition-ch-umzh-connect-fulfiller.html) server roles. The required interactions overlap significantly; the applicable subset depends on the actor role:\n- **Placer server** — hosts the ServiceRequest and all referenced clinical resources. \\\nThe Fulfiller queries these via `read` and `search`.\n- **Fulfiller server** — hosts the Coordination Task and related output resources. \\\nThe Placer creates it via `create`, applies selective updates via `patch`, and queries via `read` and `search`.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CHE"
    }]
  }],
  "copyright" : "CC0-1.0",
  "kind" : "requirements",
  "fhirVersion" : "4.0.1",
  "format" : ["application/fhir+json"],
  "patchFormat" : ["application/json-patch+json"],
  "rest" : [{
    "mode" : "server",
    "resource" : [{
      "type" : "AllergyIntolerance",
      "interaction" : [{
        "code" : "read",
        "documentation" : "Returns the AllergyIntolerance resource by logical id. The resource is returned only if it is reachable from the workflow root named in the token's `fhirContext` claim. Requests for resources outside the context graph are rejected with `403 Forbidden`."
      }],
      "versioning" : "versioned-update",
      "conditionalCreate" : false,
      "conditionalUpdate" : false,
      "searchParam" : [{
        "name" : "_id",
        "definition" : "http://hl7.org/fhir/SearchParameter/Resource-id",
        "type" : "token",
        "documentation" : "Logical id of this artifact. **Mandatory** — searches without `_id` are not supported on this resource."
      }]
    },
    {
      "type" : "Appointment",
      "interaction" : [{
        "code" : "read",
        "documentation" : "Returns the Appointment resource by logical id. The resource is returned only if it is reachable from the workflow root named in the token's `fhirContext` claim. Requests for resources outside the context graph are rejected with `403 Forbidden`."
      }],
      "versioning" : "versioned-update",
      "conditionalCreate" : false,
      "conditionalUpdate" : false,
      "searchParam" : [{
        "name" : "_id",
        "definition" : "http://hl7.org/fhir/SearchParameter/Resource-id",
        "type" : "token",
        "documentation" : "Logical id of this artifact. **Mandatory** — searches without `_id` are not supported on this resource."
      }]
    },
    {
      "type" : "Condition",
      "interaction" : [{
        "code" : "read",
        "documentation" : "Returns the Condition resource by logical id. The resource is returned only if it is reachable from the workflow root named in the token's `fhirContext` claim. Requests for resources outside the context graph are rejected with `403 Forbidden`."
      }],
      "versioning" : "versioned-update",
      "conditionalCreate" : false,
      "conditionalUpdate" : false,
      "searchParam" : [{
        "name" : "_id",
        "definition" : "http://hl7.org/fhir/SearchParameter/Resource-id",
        "type" : "token",
        "documentation" : "Logical id of this artifact. **Mandatory** — searches without `_id` are not supported on this resource."
      }]
    },
    {
      "type" : "Coverage",
      "interaction" : [{
        "code" : "read",
        "documentation" : "Returns the Coverage resource by logical id. The resource is returned only if it is reachable from the workflow root named in the token's `fhirContext` claim. Requests for resources outside the context graph are rejected with `403 Forbidden`."
      }],
      "versioning" : "versioned-update",
      "conditionalCreate" : false,
      "conditionalUpdate" : false,
      "searchParam" : [{
        "name" : "_id",
        "definition" : "http://hl7.org/fhir/SearchParameter/Resource-id",
        "type" : "token",
        "documentation" : "Logical id of this artifact. **Mandatory** — searches without `_id` are not supported on this resource."
      }]
    },
    {
      "type" : "DiagnosticReport",
      "interaction" : [{
        "code" : "read",
        "documentation" : "Returns the DiagnosticReport resource by logical id. The resource is returned only if it is reachable from the workflow root named in the token's `fhirContext` claim. Requests for resources outside the context graph are rejected with `403 Forbidden`."
      }],
      "versioning" : "versioned-update",
      "conditionalCreate" : false,
      "conditionalUpdate" : false,
      "searchParam" : [{
        "name" : "_id",
        "definition" : "http://hl7.org/fhir/SearchParameter/Resource-id",
        "type" : "token",
        "documentation" : "Logical id of this artifact. **Mandatory** — searches without `_id` are not supported on this resource."
      }]
    },
    {
      "type" : "DocumentReference",
      "interaction" : [{
        "code" : "read",
        "documentation" : "Returns the DocumentReference resource by logical id. The resource is returned only if it is reachable from the workflow root named in the token's `fhirContext` claim. Requests for resources outside the context graph are rejected with `403 Forbidden`."
      }],
      "versioning" : "versioned-update",
      "conditionalCreate" : false,
      "conditionalUpdate" : false,
      "searchParam" : [{
        "name" : "_id",
        "definition" : "http://hl7.org/fhir/SearchParameter/Resource-id",
        "type" : "token",
        "documentation" : "Logical id of this artifact. **Mandatory** — searches without `_id` are not supported on this resource."
      }]
    },
    {
      "type" : "ImagingStudy",
      "interaction" : [{
        "code" : "read",
        "documentation" : "Returns the ImagingStudy resource by logical id. The resource is returned only if it is reachable from the workflow root named in the token's `fhirContext` claim. Requests for resources outside the context graph are rejected with `403 Forbidden`."
      }],
      "versioning" : "versioned-update",
      "conditionalCreate" : false,
      "conditionalUpdate" : false,
      "searchParam" : [{
        "name" : "_id",
        "definition" : "http://hl7.org/fhir/SearchParameter/Resource-id",
        "type" : "token",
        "documentation" : "Logical id of this artifact. **Mandatory** — searches without `_id` are not supported on this resource."
      }]
    },
    {
      "type" : "Immunization",
      "interaction" : [{
        "code" : "read",
        "documentation" : "Returns the Immunization resource by logical id. The resource is returned only if it is reachable from the workflow root named in the token's `fhirContext` claim. Requests for resources outside the context graph are rejected with `403 Forbidden`."
      }],
      "versioning" : "versioned-update",
      "conditionalCreate" : false,
      "conditionalUpdate" : false,
      "searchParam" : [{
        "name" : "_id",
        "definition" : "http://hl7.org/fhir/SearchParameter/Resource-id",
        "type" : "token",
        "documentation" : "Logical id of this artifact. **Mandatory** — searches without `_id` are not supported on this resource."
      }]
    },
    {
      "type" : "Medication",
      "interaction" : [{
        "code" : "read",
        "documentation" : "Returns the Medication resource by logical id. The resource is returned only if it is reachable from the workflow root named in the token's `fhirContext` claim. Requests for resources outside the context graph are rejected with `403 Forbidden`."
      }],
      "versioning" : "versioned-update",
      "conditionalCreate" : false,
      "conditionalUpdate" : false,
      "searchParam" : [{
        "name" : "_id",
        "definition" : "http://hl7.org/fhir/SearchParameter/Resource-id",
        "type" : "token",
        "documentation" : "Logical id of this artifact. **Mandatory** — searches without `_id` are not supported on this resource."
      }]
    },
    {
      "type" : "MedicationStatement",
      "interaction" : [{
        "code" : "read",
        "documentation" : "Returns the MedicationStatement resource by logical id. The resource is returned only if it is reachable from the workflow root named in the token's `fhirContext` claim. Requests for resources outside the context graph are rejected with `403 Forbidden`."
      }],
      "versioning" : "versioned-update",
      "conditionalCreate" : false,
      "conditionalUpdate" : false,
      "searchParam" : [{
        "name" : "_id",
        "definition" : "http://hl7.org/fhir/SearchParameter/Resource-id",
        "type" : "token",
        "documentation" : "Logical id of this artifact. **Mandatory** — searches without `_id` are not supported on this resource."
      }]
    },
    {
      "type" : "Observation",
      "interaction" : [{
        "code" : "read",
        "documentation" : "Returns the Observation resource by logical id. The resource is returned only if it is reachable from the workflow root named in the token's `fhirContext` claim. Requests for resources outside the context graph are rejected with `403 Forbidden`."
      }],
      "versioning" : "versioned-update",
      "conditionalCreate" : false,
      "conditionalUpdate" : false,
      "searchParam" : [{
        "name" : "_id",
        "definition" : "http://hl7.org/fhir/SearchParameter/Resource-id",
        "type" : "token",
        "documentation" : "Logical id of this artifact. **Mandatory** — searches without `_id` are not supported on this resource."
      }]
    },
    {
      "type" : "Organization",
      "interaction" : [{
        "code" : "read",
        "documentation" : "Returns the Organization resource by logical id. The resource is returned only if it is reachable from the workflow root named in the token's `fhirContext` claim. Requests for resources outside the context graph are rejected with `403 Forbidden`."
      }],
      "versioning" : "versioned-update",
      "conditionalCreate" : false,
      "conditionalUpdate" : false,
      "searchParam" : [{
        "name" : "_id",
        "definition" : "http://hl7.org/fhir/SearchParameter/Resource-id",
        "type" : "token",
        "documentation" : "Logical id of this artifact. **Mandatory** — searches without `_id` are not supported on this resource."
      }]
    },
    {
      "type" : "Patient",
      "interaction" : [{
        "code" : "read",
        "documentation" : "Returns the Patient resource by logical id. The resource is returned only if it is reachable from the workflow root named in the token's `fhirContext` claim. Requests for resources outside the context graph are rejected with `403 Forbidden`."
      }],
      "versioning" : "versioned-update",
      "conditionalCreate" : false,
      "conditionalUpdate" : false,
      "searchParam" : [{
        "name" : "_id",
        "definition" : "http://hl7.org/fhir/SearchParameter/Resource-id",
        "type" : "token",
        "documentation" : "Logical id of this artifact. **Mandatory** — searches without `_id` are not supported on this resource."
      }]
    },
    {
      "type" : "Practitioner",
      "interaction" : [{
        "code" : "read",
        "documentation" : "Returns the Practitioner resource by logical id. The resource is returned only if it is reachable from the workflow root named in the token's `fhirContext` claim. Requests for resources outside the context graph are rejected with `403 Forbidden`."
      }],
      "versioning" : "versioned-update",
      "conditionalCreate" : false,
      "conditionalUpdate" : false,
      "searchParam" : [{
        "name" : "_id",
        "definition" : "http://hl7.org/fhir/SearchParameter/Resource-id",
        "type" : "token",
        "documentation" : "Logical id of this artifact. **Mandatory** — searches without `_id` are not supported on this resource."
      }]
    },
    {
      "type" : "PractitionerRole",
      "interaction" : [{
        "code" : "read",
        "documentation" : "Returns the PractitionerRole resource by logical id. The resource is returned only if it is reachable from the workflow root named in the token's `fhirContext` claim. Requests for resources outside the context graph are rejected with `403 Forbidden`."
      }],
      "versioning" : "versioned-update",
      "conditionalCreate" : false,
      "conditionalUpdate" : false,
      "searchParam" : [{
        "name" : "_id",
        "definition" : "http://hl7.org/fhir/SearchParameter/Resource-id",
        "type" : "token",
        "documentation" : "Logical id of this artifact. **Mandatory** — searches without `_id` are not supported on this resource."
      }]
    },
    {
      "type" : "Procedure",
      "interaction" : [{
        "code" : "read",
        "documentation" : "Returns the Procedure resource by logical id. The resource is returned only if it is reachable from the workflow root named in the token's `fhirContext` claim. Requests for resources outside the context graph are rejected with `403 Forbidden`."
      }],
      "versioning" : "versioned-update",
      "conditionalCreate" : false,
      "conditionalUpdate" : false,
      "searchParam" : [{
        "name" : "_id",
        "definition" : "http://hl7.org/fhir/SearchParameter/Resource-id",
        "type" : "token",
        "documentation" : "Logical id of this artifact. **Mandatory** — searches without `_id` are not supported on this resource."
      }]
    },
    {
      "type" : "Questionnaire",
      "interaction" : [{
        "code" : "search-type",
        "documentation" : "Search for Questionnaire definitions. Questionnaire is a definitional artefact shared across workflows; it carries no patient data and is **not** `fhirContext`-gated."
      },
      {
        "code" : "read",
        "documentation" : "Read a Questionnaire by logical id or by canonical URL (url). Definitional content — **not** `fhirContext`-gated."
      }],
      "versioning" : "versioned-update",
      "conditionalCreate" : false,
      "conditionalUpdate" : false,
      "searchParam" : [{
        "name" : "_id",
        "definition" : "http://hl7.org/fhir/SearchParameter/Resource-id",
        "type" : "token",
        "documentation" : "Logical id of this artifact"
      },
      {
        "name" : "url",
        "definition" : "http://hl7.org/fhir/SearchParameter/Questionnaire-url",
        "type" : "uri",
        "documentation" : "Canonical URL of the Questionnaire. Used to resolve a Questionnaire referenced by canonical."
      }]
    },
    {
      "type" : "QuestionnaireResponse",
      "interaction" : [{
        "code" : "search-type",
        "documentation" : "Search for QuestionnaireResponses. Implicitly scoped to QuestionnaireResponses accessible to the calling identity."
      },
      {
        "code" : "read",
        "documentation" : "Read a QuestionnaireResponse by logical id. Allowed if the linked parent ServiceRequest is accessible to the calling identity."
      },
      {
        "code" : "create",
        "documentation" : "Create a QuestionnaireResponse. The created resource SHALL reference an accessible ServiceRequest via `basedOn`."
      }],
      "versioning" : "versioned-update",
      "conditionalCreate" : false,
      "conditionalUpdate" : false
    },
    {
      "type" : "ServiceRequest",
      "interaction" : [{
        "code" : "search-type",
        "documentation" : "Search for ServiceRequests. Returns only ServiceRequests reachable from the token's `fhirContext` claim — in practice, the single ServiceRequest named by the token. `_id` is mandatory; `_include` is supported to materialise the workflow graph in one round-trip, and each included resource is itself subject to the `fhirContext` graph check."
      },
      {
        "code" : "read",
        "documentation" : "Read a ServiceRequest by logical id. Returns the resource only if `{id}` matches the token's `fhirContext` claim."
      }],
      "versioning" : "versioned-update",
      "conditionalCreate" : false,
      "conditionalUpdate" : false,
      "searchInclude" : ["ServiceRequest:patient",
      "ServiceRequest:subject",
      "ServiceRequest:ch-umzhconnectig-servicerequest-reasonreference",
      "ServiceRequest:ch-umzhconnectig-servicerequest-supportinginfo",
      "ServiceRequest:ch-umzhconnectig-servicerequest-insurance"],
      "searchParam" : [{
        "name" : "_id",
        "definition" : "http://hl7.org/fhir/SearchParameter/Resource-id",
        "type" : "token",
        "documentation" : "Logical id of this artifact. **Mandatory** — searches without `_id` are not supported on this resource."
      }]
    },
    {
      "type" : "Task",
      "interaction" : [{
        "code" : "search-type",
        "documentation" : "Search for Tasks. Implicitly scoped to Tasks where the calling identity is `Task.owner` or `Task.requester` — the server SHALL enforce this filter regardless of the parameters supplied by the client. A client cannot widen the result set by omitting `owner`/`requester` parameters. Task is **not** `fhirContext`-gated; it is the entry-point resource on the Fulfiller."
      },
      {
        "code" : "patch",
        "documentation" : "JSON Patch (`application/json-patch+json`) update of a Task. Only `Task.input`, `Task.owner`, `Task.focus`, and `Task.businessStatus` may be patched — other paths SHALL be rejected."
      },
      {
        "code" : "read",
        "documentation" : "Read a Task by logical id. Allowed if the calling identity is `Task.owner` or `Task.requester`."
      },
      {
        "code" : "create",
        "documentation" : "Create a Task. Used by the Placer to raise a coordination Task on the Fulfiller."
      }],
      "versioning" : "versioned-update",
      "conditionalCreate" : false,
      "conditionalUpdate" : false,
      "searchInclude" : ["Task:ch-umzhconnectig-task-inputreference",
      "Task:ch-umzhconnectig-task-outputreference",
      "Task:ch-umzhconnectig-task-outputcanonical"],
      "searchParam" : [{
        "name" : "owner",
        "definition" : "http://hl7.org/fhir/SearchParameter/Task-owner",
        "type" : "reference",
        "documentation" : "Search by task owner"
      },
      {
        "name" : "requester",
        "definition" : "http://hl7.org/fhir/SearchParameter/Task-requester",
        "type" : "reference",
        "documentation" : "Search by task requester"
      },
      {
        "name" : "status",
        "definition" : "http://hl7.org/fhir/SearchParameter/Task-status",
        "type" : "token",
        "documentation" : "Search by task status"
      },
      {
        "name" : "_id",
        "definition" : "http://hl7.org/fhir/SearchParameter/Resource-id",
        "type" : "token",
        "documentation" : "Logical id of this artifact"
      }]
    }]
  }]
}

```
