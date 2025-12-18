# Profile on DocumentAuditEvent for CH ATC - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Profile on DocumentAuditEvent for CH ATC**

## Resource Profile: Profile on DocumentAuditEvent for CH ATC 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/DocumentAuditEvent | *Version*:5.0.0 |
| Active as of 2018-05-28 | *Computable Name*:DocumentAuditEvent |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile defines the content of the document audit events which a community has to provide for a patients audit trail. 

**Usages:**

* Use this Profile: [ChAtcIti81Response](StructureDefinition-CH-ATC.ITI-81.Response.md)
* Examples for this Profile: [AuditEvent/atc-doc-create-rep-pat](AuditEvent-atc-doc-create-rep-pat.md), [AuditEvent/atc-doc-read-ass-hpc](AuditEvent-atc-doc-read-ass-hpc.md) and [AuditEvent/atc-doc-search](AuditEvent-atc-doc-search.md)
* CapabilityStatements using this Profile: [CapabilityStatement for the Patient Audit Record Repository](CapabilityStatement-PatientAuditRecordRepositoryCapabilityStatement.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/DocumentAuditEvent)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-DocumentAuditEvent.csv), [Excel](StructureDefinition-DocumentAuditEvent.xlsx), [Schematron](StructureDefinition-DocumentAuditEvent.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "DocumentAuditEvent",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/DocumentAuditEvent",
  "version" : "5.0.0",
  "name" : "DocumentAuditEvent",
  "title" : "DocumentAuditEvent",
  "status" : "active",
  "experimental" : false,
  "date" : "2018-05-28",
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
  "description" : "This profile defines the content of the document audit events which a community has to provide for a patients audit trail.",
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
      "identity" : "ch-atc",
      "uri" : "https://www.bag.admin.ch/bag/en/home.html",
      "name" : "CH ATC"
    },
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
  "baseDefinition" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-atc-auditevent",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "AuditEvent",
        "path" : "AuditEvent",
        "short" : "Document Audit Trail Content Profile",
        "constraint" : [
          {
            "key" : "ch-atc-dae-1",
            "severity" : "error",
            "human" : "subtype needs to be fixed to ValueSet DocumentAuditEventType",
            "expression" : "subtype.exists() and subtype.count()=1 and subtype[0].code.startsWith('ATC_DOC')"
          }
        ]
      },
      {
        "id" : "AuditEvent.type",
        "path" : "AuditEvent.type",
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "AuditEventType"
            }
          ],
          "strength" : "extensible",
          "description" : "Type of event.",
          "valueSet" : "http://hl7.org/fhir/ValueSet/audit-event-type"
        }
      },
      {
        "id" : "AuditEvent.subtype",
        "path" : "AuditEvent.subtype",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "AuditEvent.subtype:DocumentAuditEventType",
        "path" : "AuditEvent.subtype",
        "sliceName" : "DocumentAuditEventType",
        "short" : "DocumentAuditEventType",
        "min" : 1,
        "max" : "1",
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "ConditionKind"
            }
          ],
          "strength" : "required",
          "description" : "Document Audit Event Type",
          "valueSet" : "http://fhir.ch/ig/ch-epr-fhir/ValueSet/DocumentAuditEventType"
        },
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "Event Type"
          }
        ]
      },
      {
        "id" : "AuditEvent.subtype:DocumentAuditEventType.system",
        "path" : "AuditEvent.subtype.system",
        "min" : 1,
        "fixedUri" : "urn:oid:2.16.756.5.30.1.127.3.10.7"
      },
      {
        "id" : "AuditEvent.recorded",
        "path" : "AuditEvent.recorded",
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "Event Date and Time"
          }
        ]
      },
      {
        "id" : "AuditEvent.purposeOfEvent",
        "path" : "AuditEvent.purposeOfEvent",
        "min" : 1,
        "max" : "1",
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "ConditionKind"
            }
          ],
          "strength" : "required",
          "description" : "EPR Purpose of Use",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/EprPurposeOfUse"
        },
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "PurposeOfUse"
          }
        ]
      },
      {
        "id" : "AuditEvent.agent",
        "path" : "AuditEvent.agent",
        "short" : "Participants",
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "Participants"
          }
        ]
      },
      {
        "id" : "AuditEvent.agent.role",
        "path" : "AuditEvent.agent.role",
        "min" : 1,
        "max" : "1",
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "ConditionKind"
            }
          ],
          "strength" : "required",
          "description" : "EPR Participant",
          "valueSet" : "http://fhir.ch/ig/ch-epr-fhir/ValueSet/EprParticipant"
        },
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "role (PAT, HCP, ASS, REP, TCU, DADM, GRP)"
          }
        ]
      },
      {
        "id" : "AuditEvent.agent.who",
        "path" : "AuditEvent.agent.who",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "AuditEvent.agent.who.identifier",
        "path" : "AuditEvent.agent.who.identifier",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier"
          }
        ],
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "Identifier if applicable"
          }
        ]
      },
      {
        "id" : "AuditEvent.agent.name",
        "path" : "AuditEvent.agent.name",
        "definition" : "AttributeStatement/Attribute[@Name='urn:oasis:names:tc:xspa:1.0:subject:subject- id']/AttributeValue",
        "min" : 1,
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "Name"
          }
        ]
      },
      {
        "id" : "AuditEvent.agent.requestor",
        "path" : "AuditEvent.agent.requestor",
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "if participant is Initiator"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity",
        "path" : "AuditEvent.entity",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "type.code"
            },
            {
              "type" : "value",
              "path" : "role.code"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "AuditEvent.entity:Patient",
        "path" : "AuditEvent.entity",
        "sliceName" : "Patient",
        "min" : 1,
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "Patient"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Patient.what.identifier",
        "path" : "AuditEvent.entity.what.identifier",
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "EPR-SPID"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Document",
        "path" : "AuditEvent.entity",
        "sliceName" : "Document",
        "short" : "Document",
        "min" : 0,
        "max" : "1",
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "Document"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Document.what.identifier",
        "path" : "AuditEvent.entity.what.identifier",
        "short" : "XDSDocumentEntry.uniqueId",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-atc-uniqueid-identifier"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "XDSDocumentEntry.uniqueId"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Document.type",
        "path" : "AuditEvent.entity.type",
        "min" : 1
      },
      {
        "id" : "AuditEvent.entity:Document.type.code",
        "path" : "AuditEvent.entity.type.code",
        "min" : 1,
        "fixedCode" : "2"
      },
      {
        "id" : "AuditEvent.entity:Document.role",
        "path" : "AuditEvent.entity.role",
        "min" : 1
      },
      {
        "id" : "AuditEvent.entity:Document.role.code",
        "path" : "AuditEvent.entity.role.code",
        "min" : 1,
        "fixedCode" : "3"
      },
      {
        "id" : "AuditEvent.entity:Document.detail",
        "path" : "AuditEvent.entity.detail",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "type"
            }
          ],
          "rules" : "open"
        },
        "min" : 4
      },
      {
        "id" : "AuditEvent.entity:Document.detail:repositoryUniqueId",
        "path" : "AuditEvent.entity.detail",
        "sliceName" : "repositoryUniqueId",
        "short" : "repositoryUniqueId",
        "min" : 1,
        "max" : "1",
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "repositoryUniqueId"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Document.detail:repositoryUniqueId.type",
        "path" : "AuditEvent.entity.detail.type",
        "fixedString" : "Repository Unique Id"
      },
      {
        "id" : "AuditEvent.entity:Document.detail:repositoryUniqueId.value",
        "path" : "AuditEvent.entity.detail.value",
        "definition" : "The details, base64 encoded. Used to carry bulk information.",
        "comment" : "The value is base64 encoded to enable various encodings or binary content.",
        "type" : [
          {
            "code" : "base64Binary"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Document.detail:homeCommunityID",
        "path" : "AuditEvent.entity.detail",
        "sliceName" : "homeCommunityID",
        "short" : "homeCommunityID",
        "min" : 1,
        "max" : "1",
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "homeCommunityID"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Document.detail:homeCommunityID.type",
        "path" : "AuditEvent.entity.detail.type",
        "fixedString" : "homeCommunityID"
      },
      {
        "id" : "AuditEvent.entity:Document.detail:homeCommunityID.value",
        "path" : "AuditEvent.entity.detail.value",
        "definition" : "The details, base64 encoded. Used to carry bulk information.",
        "comment" : "The value is base64 encoded to enable various encodings or binary content.",
        "type" : [
          {
            "code" : "base64Binary"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Document.detail:EprDocumentTypeCode",
        "path" : "AuditEvent.entity.detail",
        "sliceName" : "EprDocumentTypeCode",
        "short" : "EprDocumentTypeCode",
        "min" : 1,
        "max" : "1",
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "typeCode"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Document.detail:EprDocumentTypeCode.type",
        "path" : "AuditEvent.entity.detail.type",
        "fixedString" : "EprDocumentTypeCode"
      },
      {
        "id" : "AuditEvent.entity:Document.detail:EprDocumentTypeCode.value",
        "path" : "AuditEvent.entity.detail.value",
        "definition" : "The details, base64 encoded. Used to carry bulk information.",
        "comment" : "The value is base64 encoded to enable various encodings or binary content.",
        "type" : [
          {
            "code" : "base64Binary"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Document.detail:title",
        "path" : "AuditEvent.entity.detail",
        "sliceName" : "title",
        "short" : "title",
        "min" : 1,
        "max" : "1",
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "title"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Document.detail:title.type",
        "path" : "AuditEvent.entity.detail.type",
        "fixedString" : "title"
      },
      {
        "id" : "AuditEvent.entity:Document.detail:title.value",
        "path" : "AuditEvent.entity.detail.value",
        "definition" : "The details, base64 encoded. Used to carry bulk information.",
        "comment" : "The value is base64 encoded to enable various encodings or binary content.",
        "type" : [
          {
            "code" : "base64Binary"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Query",
        "path" : "AuditEvent.entity",
        "sliceName" : "Query",
        "short" : "Query",
        "min" : 0,
        "max" : "1",
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "Query"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Query.what.identifier",
        "path" : "AuditEvent.entity.what.identifier",
        "short" : "Query ID (UUID)",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier"
          }
        ],
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "Stored Query ID (UUID)"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Query.type",
        "path" : "AuditEvent.entity.type",
        "min" : 1
      },
      {
        "id" : "AuditEvent.entity:Query.type.code",
        "path" : "AuditEvent.entity.type.code",
        "min" : 1,
        "fixedCode" : "2"
      },
      {
        "id" : "AuditEvent.entity:Query.role",
        "path" : "AuditEvent.entity.role",
        "min" : 1
      },
      {
        "id" : "AuditEvent.entity:Query.role.code",
        "path" : "AuditEvent.entity.role.code",
        "min" : 1,
        "fixedCode" : "24"
      }
    ]
  }
}

```
