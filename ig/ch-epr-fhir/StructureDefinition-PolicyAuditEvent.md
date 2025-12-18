# Profile on PolicyAuditEvent for CH ATC - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Profile on PolicyAuditEvent for CH ATC**

## Resource Profile: Profile on PolicyAuditEvent for CH ATC 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PolicyAuditEvent | *Version*:5.0.0 |
| Active as of 2018-05-28 | *Computable Name*:PolicyAuditEvent |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile defines the content of the policy audit events which a community has to provide for a patients audit trail. 

**Usages:**

* Use this Profile: [ChAtcIti81Response](StructureDefinition-CH-ATC.ITI-81.Response.md)
* Examples for this Profile: [AuditEvent/atc-pol-create-acc-right](AuditEvent-atc-pol-create-acc-right.md) and [AuditEvent/atc-pol-create-rep](AuditEvent-atc-pol-create-rep.md)
* CapabilityStatements using this Profile: [CapabilityStatement for the Patient Audit Record Repository](CapabilityStatement-PatientAuditRecordRepositoryCapabilityStatement.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/PolicyAuditEvent)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-PolicyAuditEvent.csv), [Excel](StructureDefinition-PolicyAuditEvent.xlsx), [Schematron](StructureDefinition-PolicyAuditEvent.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "PolicyAuditEvent",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PolicyAuditEvent",
  "version" : "5.0.0",
  "name" : "PolicyAuditEvent",
  "title" : "PolicyAuditEvent",
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
  "description" : "This profile defines the content of the policy audit events which a community has to provide for a patients audit trail.",
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
        "short" : "Policy Audit Trail Content Profile",
        "constraint" : [
          {
            "key" : "ch-atc-pae-2",
            "severity" : "error",
            "human" : "subtype needs to be fixed to ValueSet PolicyAuditEventType",
            "expression" : "subtype.exists() and subtype.count()=1 and subtype[0].code.startsWith('ATC_POL')"
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
        "id" : "AuditEvent.subtype:PolicyAuditEventType",
        "path" : "AuditEvent.subtype",
        "sliceName" : "PolicyAuditEventType",
        "short" : "PolicyAuditEventType",
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
          "description" : "Policy Audit Event Type",
          "valueSet" : "http://fhir.ch/ig/ch-epr-fhir/ValueSet/PolicyAuditEventType"
        },
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "Event Type"
          }
        ]
      },
      {
        "id" : "AuditEvent.subtype:PolicyAuditEventType.system",
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
            "map" : "role (PAT, HCP, ASS, REP, GRP, PADM)"
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
        "id" : "AuditEvent.entity:Resource",
        "path" : "AuditEvent.entity",
        "sliceName" : "Resource",
        "short" : "Resource (HCP, Group, Representative of Patient)",
        "min" : 0,
        "max" : "1",
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "Resource"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Resource.what.identifier",
        "path" : "AuditEvent.entity.what.identifier",
        "short" : "Identifier: HCP (GLN), Group (OID)",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier"
          }
        ],
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "Identifier: GLN for HCP, OID for Group"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Resource.type",
        "path" : "AuditEvent.entity.type",
        "min" : 1
      },
      {
        "id" : "AuditEvent.entity:Resource.type.code",
        "path" : "AuditEvent.entity.type.code",
        "min" : 1,
        "fixedCode" : "2"
      },
      {
        "id" : "AuditEvent.entity:Resource.role",
        "path" : "AuditEvent.entity.role",
        "min" : 1,
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
            "map" : "role (HCP, REP, GRP)"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Resource.name",
        "path" : "AuditEvent.entity.name",
        "min" : 1,
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "Name of HCP, Group or Representative of Patient"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Resource.detail",
        "path" : "AuditEvent.entity.detail",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "type"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "AuditEvent.entity:Resource.detail:AccessLevel",
        "path" : "AuditEvent.entity.detail",
        "sliceName" : "AccessLevel",
        "short" : "AccessLevel if subtype is Create or Update",
        "definition" : "The type of extra detail provided in the value.",
        "max" : "1",
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "AccessLevel"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Resource.detail:AccessLevel.type",
        "path" : "AuditEvent.entity.detail.type",
        "short" : "The type of extra detail provided in the value",
        "fixedString" : "AccessLevel"
      },
      {
        "id" : "AuditEvent.entity:Resource.detail:AccessLevel.value",
        "path" : "AuditEvent.entity.detail.value",
        "short" : "one of urn:e-health-suisse:2015:policies:access-level: normal, restricted, delegation-and-restricted, delegation-and-normal or full",
        "definition" : "The details, base64 encoded. Used to carry bulk information.",
        "comment" : "The value is base64 encoded to enable various encodings or binary content.",
        "type" : [
          {
            "code" : "base64Binary"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Resource.detail:AccessLimitedToDate",
        "path" : "AuditEvent.entity.detail",
        "sliceName" : "AccessLimitedToDate",
        "short" : "AccessLimitedToDate if subtype is Create or Update",
        "max" : "1",
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "AccessLimitedToDate"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Resource.detail:AccessLimitedToDate.type",
        "path" : "AuditEvent.entity.detail.type",
        "fixedString" : "AccessLimitedToDate"
      },
      {
        "id" : "AuditEvent.entity:Resource.detail:AccessLimitedToDate.value",
        "path" : "AuditEvent.entity.detail.value",
        "short" : "Date in property value",
        "definition" : "The details, base64 encoded. Used to carry bulk information.",
        "comment" : "The value is base64 encoded to enable various encodings or binary content.",
        "type" : [
          {
            "code" : "base64Binary"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Resource.detail:ProvideLevel",
        "path" : "AuditEvent.entity.detail",
        "sliceName" : "ProvideLevel",
        "short" : "ProvideLevel if subtype is ATC_POL_DEF_CONFLEVEL",
        "max" : "1",
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "ProvideLevel"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Resource.detail:ProvideLevel.type",
        "path" : "AuditEvent.entity.detail.type",
        "fixedString" : "ProvideLevel"
      },
      {
        "id" : "AuditEvent.entity:Resource.detail:ProvideLevel.value",
        "path" : "AuditEvent.entity.detail.value",
        "short" : "one of urn:e-health-suisse:2015:policies:provide-level: normal, restricted or secret",
        "definition" : "The details, base64 encoded. Used to carry bulk information.",
        "comment" : "The value is base64 encoded to enable various encodings or binary content.",
        "type" : [
          {
            "code" : "base64Binary"
          }
        ]
      }
    ]
  }
}

```
