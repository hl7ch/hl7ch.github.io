# CH Audit Event for [CH:MHD-1] Document Responder - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Audit Event for [CH:MHD-1] Document Responder**

## Resource Profile: CH Audit Event for [CH:MHD-1] Document Responder 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-updatedocumentmetadata-audit-responder | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:ChAuditEventChMhd1Responder |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile is used to define the CH Audit Event for the [CH:MHD-1] transaction and the actor 'Document Responder'. 

**Usages:**

* Examples for this Profile: [AuditEvent/ChAuditEventChMhd1ResponderExample](AuditEvent-ChAuditEventChMhd1ResponderExample.md)
* CapabilityStatements using this Profile: [ATNA Audit Creator (client)](CapabilityStatement-CH.ATNA.AuditCreator.md) and [ATNA Audit Record Repository (server)](CapabilityStatement-CH.ATNA.AuditRecordRepository.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/ch-mhd-updatedocumentmetadata-audit-responder)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-mhd-updatedocumentmetadata-audit-responder.csv), [Excel](StructureDefinition-ch-mhd-updatedocumentmetadata-audit-responder.xlsx), [Schematron](StructureDefinition-ch-mhd-updatedocumentmetadata-audit-responder.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-mhd-updatedocumentmetadata-audit-responder",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-updatedocumentmetadata-audit-responder",
  "version" : "5.0.0",
  "name" : "ChAuditEventChMhd1Responder",
  "title" : "CH Audit Event for [CH:MHD-1] Document Responder",
  "status" : "active",
  "date" : "2025-12-18T15:54:33+00:00",
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
  "description" : "This profile is used to define the CH Audit Event for the [CH:MHD-1] transaction and the actor 'Document\nResponder'.",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/AuditEvent",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "AuditEvent",
        "path" : "AuditEvent"
      },
      {
        "id" : "AuditEvent.modifierExtension",
        "path" : "AuditEvent.modifierExtension",
        "max" : "0"
      },
      {
        "id" : "AuditEvent.type",
        "path" : "AuditEvent.type",
        "patternCoding" : {
          "system" : "http://dicom.nema.org/resources/ontology/DCM",
          "code" : "110107",
          "display" : "Import"
        }
      },
      {
        "id" : "AuditEvent.subtype",
        "path" : "AuditEvent.subtype",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "$this"
            }
          ],
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "AuditEvent.subtype:chmhd1",
        "path" : "AuditEvent.subtype",
        "sliceName" : "chmhd1",
        "min" : 1,
        "max" : "1",
        "patternCoding" : {
          "system" : "urn:e-health-suisse:event-type-code",
          "code" : "CH-MHD-1",
          "display" : "Update Document Metadata"
        }
      },
      {
        "id" : "AuditEvent.action",
        "path" : "AuditEvent.action",
        "patternCode" : "U"
      },
      {
        "id" : "AuditEvent.outcome",
        "path" : "AuditEvent.outcome",
        "min" : 1
      },
      {
        "id" : "AuditEvent.outcomeDesc",
        "path" : "AuditEvent.outcomeDesc",
        "mustSupport" : true
      },
      {
        "id" : "AuditEvent.agent",
        "path" : "AuditEvent.agent",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "type"
            }
          ],
          "description" : "source, responder, and possibly the user who participated",
          "rules" : "open"
        },
        "min" : 3
      },
      {
        "id" : "AuditEvent.agent:documentSource",
        "path" : "AuditEvent.agent",
        "sliceName" : "documentSource",
        "short" : "The 'Document Source' actor (EPR application)",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "AuditEvent.agent:documentSource.type",
        "path" : "AuditEvent.agent.type",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://dicom.nema.org/resources/ontology/DCM",
              "code" : "110153",
              "display" : "Source Role ID"
            }
          ]
        }
      },
      {
        "id" : "AuditEvent.agent:documentSource.who",
        "path" : "AuditEvent.agent.who",
        "min" : 1
      },
      {
        "id" : "AuditEvent.agent:documentSource.network",
        "path" : "AuditEvent.agent.network",
        "min" : 1
      },
      {
        "id" : "AuditEvent.agent:documentResponder",
        "path" : "AuditEvent.agent",
        "sliceName" : "documentResponder",
        "short" : "The 'Document Responder' actor (EPR API)",
        "min" : 1,
        "max" : "1",
        "constraint" : [
          {
            "key" : "val-audit-source",
            "severity" : "error",
            "human" : "The Audit Source is this agent too.",
            "expression" : "$this.who = %resource.source.observer",
            "source" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-updatedocumentmetadata-audit-responder"
          }
        ]
      },
      {
        "id" : "AuditEvent.agent:documentResponder.type",
        "path" : "AuditEvent.agent.type",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://dicom.nema.org/resources/ontology/DCM",
              "code" : "110152",
              "display" : "Destination Role ID"
            }
          ]
        }
      },
      {
        "id" : "AuditEvent.agent:documentResponder.who",
        "path" : "AuditEvent.agent.who",
        "min" : 1
      },
      {
        "id" : "AuditEvent.agent:documentResponder.network",
        "path" : "AuditEvent.agent.network",
        "min" : 1
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
        "id" : "AuditEvent.entity",
        "path" : "AuditEvent.entity",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "type"
            }
          ],
          "description" : "patient and submission set involved",
          "rules" : "closed"
        },
        "min" : 2
      },
      {
        "id" : "AuditEvent.entity:patient",
        "path" : "AuditEvent.entity",
        "sliceName" : "patient",
        "short" : "Patient",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "AuditEvent.entity:patient.what",
        "path" : "AuditEvent.entity.what",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Patient"]
          }
        ]
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
        "id" : "AuditEvent.entity:patient.type",
        "path" : "AuditEvent.entity.type",
        "min" : 1,
        "patternCoding" : {
          "system" : "http://terminology.hl7.org/CodeSystem/audit-entity-type",
          "code" : "1",
          "display" : "Person"
        }
      },
      {
        "id" : "AuditEvent.entity:patient.role",
        "path" : "AuditEvent.entity.role",
        "patternCoding" : {
          "system" : "http://terminology.hl7.org/CodeSystem/object-role",
          "code" : "1",
          "display" : "Patient"
        }
      },
      {
        "id" : "AuditEvent.entity:documentReference",
        "path" : "AuditEvent.entity",
        "sliceName" : "documentReference",
        "short" : "DocumentReference",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "AuditEvent.entity:documentReference.what",
        "path" : "AuditEvent.entity.what",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/DocumentReference"]
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:documentReference.what.reference",
        "path" : "AuditEvent.entity.what.reference",
        "min" : 1
      },
      {
        "id" : "AuditEvent.entity:documentReference.type",
        "path" : "AuditEvent.entity.type",
        "min" : 1,
        "patternCoding" : {
          "system" : "http://terminology.hl7.org/CodeSystem/audit-entity-type",
          "code" : "2",
          "display" : "System Object"
        }
      },
      {
        "id" : "AuditEvent.entity:documentReference.role",
        "path" : "AuditEvent.entity.role",
        "patternCoding" : {
          "system" : "http://terminology.hl7.org/CodeSystem/object-role",
          "code" : "20",
          "display" : "Job"
        }
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
