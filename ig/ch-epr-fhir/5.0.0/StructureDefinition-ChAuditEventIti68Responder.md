# CH Audit Event for [ITI-68] Document Responder - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Audit Event for [ITI-68] Document Responder**

## Resource Profile: CH Audit Event for [ITI-68] Document Responder 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventIti68Responder | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:ChAuditEventIti68Responder |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile is used to define the CH Audit Event for the [ITI-68] transaction and the actor 'Document Responder'. 

**Usages:**

* Examples for this Profile: [AuditEvent/ChAuditEventIti68ResponderExample](AuditEvent-ChAuditEventIti68ResponderExample.md)
* CapabilityStatements using this Profile: [ATNA Audit Creator (client)](CapabilityStatement-CH.ATNA.AuditCreator.md) and [ATNA Audit Record Repository (server)](CapabilityStatement-CH.ATNA.AuditRecordRepository.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/ChAuditEventIti68Responder)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ChAuditEventIti68Responder.csv), [Excel](StructureDefinition-ChAuditEventIti68Responder.xlsx), [Schematron](StructureDefinition-ChAuditEventIti68Responder.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ChAuditEventIti68Responder",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventIti68Responder",
  "version" : "5.0.0",
  "name" : "ChAuditEventIti68Responder",
  "title" : "CH Audit Event for [ITI-68] Document Responder",
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
  "description" : "This profile is used to define the CH Audit Event for the [ITI-68] transaction and the actor 'Document\nResponder'.",
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
  "baseDefinition" : "https://profiles.ihe.net/ITI/MHD/StructureDefinition/IHE.MHD.RetrieveDocument.Audit.Responder",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "AuditEvent",
        "path" : "AuditEvent"
      },
      {
        "id" : "AuditEvent.agent",
        "path" : "AuditEvent.agent",
        "min" : 3
      },
      {
        "id" : "AuditEvent.agent:client",
        "path" : "AuditEvent.agent",
        "sliceName" : "client",
        "short" : "The 'Document Consumer' actor (EPR application)"
      },
      {
        "id" : "AuditEvent.agent:server",
        "path" : "AuditEvent.agent",
        "sliceName" : "server",
        "short" : "The 'Document Responder' actor (EPR API)"
      },
      {
        "id" : "AuditEvent.agent:mainUser",
        "path" : "AuditEvent.agent",
        "sliceName" : "mainUser",
        "short" : "The main user (patient, representative, healthcare professional, or administrator)",
        "min" : 1,
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
        "min" : 1,
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
        "sliceName" : "data",
        "short" : "The document that was accessed"
      },
      {
        "id" : "AuditEvent.entity:data.what.reference",
        "path" : "AuditEvent.entity.what.reference",
        "short" : "The URL accessed by the Document Consumer",
        "min" : 1
      },
      {
        "id" : "AuditEvent.entity:data.securityLabel",
        "path" : "AuditEvent.entity.securityLabel",
        "short" : "The confidentiality code of the document, if known",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.confidentialityCode"
        }
      },
      {
        "id" : "AuditEvent.entity:patient",
        "path" : "AuditEvent.entity",
        "sliceName" : "patient"
      },
      {
        "id" : "AuditEvent.entity:patient.what.identifier",
        "path" : "AuditEvent.entity.what.identifier",
        "min" : 1
      },
      {
        "id" : "AuditEvent.entity:patient.what.identifier.system",
        "path" : "AuditEvent.entity.what.identifier.system",
        "min" : 1
      },
      {
        "id" : "AuditEvent.entity:patient.what.identifier.value",
        "path" : "AuditEvent.entity.what.identifier.value",
        "min" : 1
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
