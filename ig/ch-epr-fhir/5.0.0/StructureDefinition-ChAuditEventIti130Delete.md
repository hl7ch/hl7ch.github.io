# CH Audit Event for [ITI-130] Data Source & Directory / Delete - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Audit Event for [ITI-130] Data Source & Directory / Delete**

## Resource Profile: CH Audit Event for [ITI-130] Data Source & Directory / Delete /h2> Official URL: http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventIti130Delete Version: 5.0.0 Active as of 2025-12-18 Computable Name: ChAuditEventIti130Delete Copyright/Legal: CC0-1.0 This profile is used to define the CH Audit Event for the [ITI-130] transaction and the actors 'Data Source' & Directory, when deleting care service resources. Usages: * Examples for this Profile: AuditEvent/ChAuditEventIti130DeleteExample * CapabilityStatements using this Profile: ATNA Audit Creator (client) and ATNA Audit Record Repository (server) You can also check for usages in the FHIR IG Statistics Formal Views of Profile Content Description of Profiles, Differentials, Snapshots and how the different presentations work.   Other representations of profile: CSV, Excel, Schematron IG © 2020+ eHealth Suisse. Package ch.fhir.ig.ch-epr-fhir#5.0.0 based on FHIR 4.0.1. Generated 2025-12-18 Links: Table of Contents | QA Report | Propose a change 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ChAuditEventIti130Delete",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventIti130Delete",
  "version" : "5.0.0",
  "name" : "ChAuditEventIti130Delete",
  "title" : "CH Audit Event for [ITI-130] Data Source & Directory / Delete",
  "status" : "active",
  "date" : "2025-12-18T15:42:00+00:00",
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
  "description" : "This profile is used to define the CH Audit Event for the [ITI-130] transaction and the actors 'Data\nSource' & Directory, when deleting care service resources.",
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
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "dicom",
      "uri" : "http://nema.org/dicom",
      "name" : "DICOM Tag Mapping"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "w3c.prov",
      "uri" : "http://www.w3.org/ns/prov",
      "name" : "W3C PROV"
    },
    {
      "identity" : "fhirprovenance",
      "uri" : "http://hl7.org/fhir/provenance",
      "name" : "FHIR Provenance Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "AuditEvent",
  "baseDefinition" : "https://profiles.ihe.net/ITI/mCSD/StructureDefinition/IHE.mCSD.Audit.CareServices.Delete",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "AuditEvent",
        "path" : "AuditEvent"
      },
      {
        "id" : "AuditEvent.agent:client",
        "path" : "AuditEvent.agent",
        "sliceName" : "client",
        "short" : "The 'Data Source' actor (EPR application)"
      },
      {
        "id" : "AuditEvent.agent:server",
        "path" : "AuditEvent.agent",
        "sliceName" : "server",
        "short" : "The 'Directory' actor (EPR API)"
      },
      {
        "id" : "AuditEvent.agent:mainUser",
        "path" : "AuditEvent.agent",
        "sliceName" : "mainUser",
        "short" : "The main user (patient, representative, healthcare professional, or administrator)",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "AuditEvent.agent:mainUser.type",
        "path" : "AuditEvent.agent.type",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/v3-ParticipationType",
              "code" : "RESP",
              "display" : "responsible party"
            }
          ]
        }
      },
      {
        "id" : "AuditEvent.agent:mainUser.role",
        "path" : "AuditEvent.agent.role",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "AuditEvent.agent:mainUser.altId",
        "path" : "AuditEvent.agent.altId",
        "min" : 1
      },
      {
        "id" : "AuditEvent.agent:mainUser.name",
        "path" : "AuditEvent.agent.name",
        "min" : 1
      },
      {
        "id" : "AuditEvent.agent:mainUser.purposeOfUse",
        "path" : "AuditEvent.agent.purposeOfUse",
        "max" : "1",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/EprPurposeOfUse"
        }
      },
      {
        "id" : "AuditEvent.agent:delegatedUser",
        "path" : "AuditEvent.agent",
        "sliceName" : "delegatedUser",
        "short" : "The person who acted on behalf of the main user (an assistant or technical user)",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "AuditEvent.agent:delegatedUser.type",
        "path" : "AuditEvent.agent.type",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/v3-ParticipationType",
              "code" : "PPRF",
              "display" : "primary performer"
            }
          ]
        }
      },
      {
        "id" : "AuditEvent.agent:delegatedUser.role",
        "path" : "AuditEvent.agent.role",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "AuditEvent.agent:delegatedUser.altId",
        "path" : "AuditEvent.agent.altId",
        "min" : 1
      },
      {
        "id" : "AuditEvent.agent:delegatedUser.name",
        "path" : "AuditEvent.agent.name",
        "min" : 1
      },
      {
        "id" : "AuditEvent.source.site",
        "path" : "AuditEvent.source.site",
        "short" : "The OID of the audit source",
        "min" : 1
      },
      {
        "id" : "AuditEvent.entity:data",
        "path" : "AuditEvent.entity",
        "sliceName" : "data"
      },
      {
        "id" : "AuditEvent.entity:data.what",
        "path" : "AuditEvent.entity.what",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "https://profiles.ihe.net/ITI/mCSD/StructureDefinition/IHE.mCSD.Practitioner",
              "https://profiles.ihe.net/ITI/mCSD/StructureDefinition/IHE.mCSD.PractitionerRole",
              "https://profiles.ihe.net/ITI/mCSD/StructureDefinition/IHE.mCSD.Organization"
            ]
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:traceparent",
        "path" : "AuditEvent.entity",
        "sliceName" : "traceparent",
        "short" : "The 'traceparent' header value of the transaction",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "AuditEvent.entity:traceparent.what",
        "path" : "AuditEvent.entity.what",
        "min" : 1
      },
      {
        "id" : "AuditEvent.entity:traceparent.what.identifier",
        "path" : "AuditEvent.entity.what.identifier",
        "min" : 1
      },
      {
        "id" : "AuditEvent.entity:traceparent.what.identifier.value",
        "path" : "AuditEvent.entity.what.identifier.value",
        "short" : "The 'traceparent' header value",
        "min" : 1
      },
      {
        "id" : "AuditEvent.entity:traceparent.type",
        "path" : "AuditEvent.entity.type",
        "min" : 1,
        "patternCoding" : {
          "system" : "http://terminology.hl7.org/CodeSystem/audit-entity-type",
          "code" : "4",
          "display" : "Other"
        }
      },
      {
        "id" : "AuditEvent.entity:traceparent.role",
        "path" : "AuditEvent.entity.role",
        "patternCoding" : {
          "system" : "http://terminology.hl7.org/CodeSystem/object-role",
          "code" : "26",
          "display" : "Processing Element"
        }
      }
    ]
  }
}

```
