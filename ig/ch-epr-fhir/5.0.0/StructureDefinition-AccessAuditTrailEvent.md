# Profile on AccessAuditTrailEvent for CH ATC - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Profile on AccessAuditTrailEvent for CH ATC**

## Resource Profile: Profile on AccessAuditTrailEvent for CH ATC 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/AccessAuditTrailEvent | *Version*:5.0.0 |
| Active as of 2018-05-28 | *Computable Name*:AccessAuditTrailEvent |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile defines the content of the access audit trail event which a community has to provide for a patients audit trail. 

**Usages:**

* Use this Profile: [ChAtcIti81Response](StructureDefinition-CH-ATC.ITI-81.Response.md)
* Examples for this Profile: [AuditEvent/atc-log-read](AuditEvent-atc-log-read.md)
* CapabilityStatements using this Profile: [CapabilityStatement for the Patient Audit Record Repository](CapabilityStatement-PatientAuditRecordRepositoryCapabilityStatement.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/AccessAuditTrailEvent)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-AccessAuditTrailEvent.csv), [Excel](StructureDefinition-AccessAuditTrailEvent.xlsx), [Schematron](StructureDefinition-AccessAuditTrailEvent.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "AccessAuditTrailEvent",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/AccessAuditTrailEvent",
  "version" : "5.0.0",
  "name" : "AccessAuditTrailEvent",
  "title" : "AccessAuditTrailEvent",
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
  "description" : "This profile defines the content of the access audit trail event which a community has to provide for a patients audit trail.",
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
        "short" : "Access Audit Trail Event Content Profile",
        "constraint" : [
          {
            "key" : "ch-atc-aae-1",
            "severity" : "error",
            "human" : "subtype needs to be fixed to ATC_LOG_READ",
            "expression" : "subtype.exists() and subtype.count()=1 and subtype.first().code='ATC_LOG_READ'"
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
          "description" : "Audit Trail Event Type",
          "valueSet" : "http://fhir.ch/ig/ch-epr-fhir/ValueSet/AccessAuditTrailEventType"
        },
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "Event Type"
          }
        ]
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
        "short" : "Patient, repeated if representative",
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
            "map" : "role (PAT, REP)"
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
      }
    ]
  }
}

```
