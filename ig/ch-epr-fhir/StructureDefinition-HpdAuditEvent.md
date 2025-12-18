# Profile on HpdAuditEvent for CH ATC - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Profile on HpdAuditEvent for CH ATC**

## Resource Profile: Profile on HpdAuditEvent for CH ATC 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/HpdAuditEvent | *Version*:5.0.0 |
| Active as of 2018-05-28 | *Computable Name*:HpdAuditEvent |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile defines the content of the HPD audit events which a community has to provide for a patients audit trail. 

**Usages:**

* Use this Profile: [ChAtcIti81Response](StructureDefinition-CH-ATC.ITI-81.Response.md)
* Examples for this Profile: [AuditEvent/atc-hpd-group-entry-notify](AuditEvent-atc-hpd-group-entry-notify.md)
* CapabilityStatements using this Profile: [CapabilityStatement for the Patient Audit Record Repository](CapabilityStatement-PatientAuditRecordRepositoryCapabilityStatement.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/HpdAuditEvent)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-HpdAuditEvent.csv), [Excel](StructureDefinition-HpdAuditEvent.xlsx), [Schematron](StructureDefinition-HpdAuditEvent.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "HpdAuditEvent",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/HpdAuditEvent",
  "version" : "5.0.0",
  "name" : "HpdAuditEvent",
  "title" : "HpdAuditEvent",
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
  "description" : "This profile defines the content of the HPD audit events which a community has to provide for a patients audit trail.",
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
        "short" : "HPD Audit Trail Content Profile",
        "constraint" : [
          {
            "key" : "ch-atc-pae-1",
            "severity" : "error",
            "human" : "subtype needs to be fixed to ValueSet HpdAuditEventType",
            "expression" : "subtype.exists() and subtype.count()=1 and subtype[0].code.startsWith('ATC_HPD')"
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
        "id" : "AuditEvent.subtype:HpdAuditEventType",
        "path" : "AuditEvent.subtype",
        "sliceName" : "HpdAuditEventType",
        "short" : "HPD Audit Event Type",
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
          "description" : "HPD Audit Event Type",
          "valueSet" : "http://fhir.ch/ig/ch-epr-fhir/ValueSet/HpdAuditEventType"
        },
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "Event Type"
          }
        ]
      },
      {
        "id" : "AuditEvent.subtype:HpdAuditEventType.system",
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
        "short" : "Notification service",
        "max" : "1",
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "Notification service"
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
        "short" : "Name of notification service",
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
            "map" : "if notification service is Initiator"
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
        "id" : "AuditEvent.entity:HealthcareProfessional",
        "path" : "AuditEvent.entity",
        "sliceName" : "HealthcareProfessional",
        "short" : "Healthcare professional (HCP)",
        "min" : 1,
        "max" : "*",
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "Healthcare professional"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:HealthcareProfessional.what.identifier",
        "path" : "AuditEvent.entity.what.identifier",
        "short" : "Identifier: HCP (GLN)",
        "min" : 1,
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "Identifier for HCP (GLN)"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:HealthcareProfessional.what.identifier.system",
        "path" : "AuditEvent.entity.what.identifier.system",
        "min" : 1,
        "fixedUri" : "urn:oid:2.51.1.3"
      },
      {
        "id" : "AuditEvent.entity:HealthcareProfessional.type",
        "path" : "AuditEvent.entity.type",
        "min" : 1
      },
      {
        "id" : "AuditEvent.entity:HealthcareProfessional.type.code",
        "path" : "AuditEvent.entity.type.code",
        "min" : 1,
        "fixedCode" : "1"
      },
      {
        "id" : "AuditEvent.entity:HealthcareProfessional.role",
        "path" : "AuditEvent.entity.role",
        "min" : 1
      },
      {
        "id" : "AuditEvent.entity:HealthcareProfessional.role.system",
        "path" : "AuditEvent.entity.role.system",
        "min" : 1,
        "fixedUri" : "urn:oid:2.16.756.5.30.1.127.3.10.6"
      },
      {
        "id" : "AuditEvent.entity:HealthcareProfessional.role.code",
        "path" : "AuditEvent.entity.role.code",
        "min" : 1,
        "fixedCode" : "HCP"
      },
      {
        "id" : "AuditEvent.entity:HealthcareProfessional.name",
        "path" : "AuditEvent.entity.name",
        "short" : "Healthcare professional name",
        "min" : 1,
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "Name of HCP"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Group",
        "path" : "AuditEvent.entity",
        "sliceName" : "Group",
        "short" : "Group",
        "min" : 1,
        "max" : "1",
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "Group"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Group.what.identifier",
        "path" : "AuditEvent.entity.what.identifier",
        "short" : "Identifier for Group (OID)",
        "definition" : "Identifier for Group (OID)",
        "min" : 1,
        "max" : "1",
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "Group OID"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Group.type",
        "path" : "AuditEvent.entity.type",
        "min" : 1
      },
      {
        "id" : "AuditEvent.entity:Group.type.code",
        "path" : "AuditEvent.entity.type.code",
        "min" : 1,
        "fixedCode" : "3"
      },
      {
        "id" : "AuditEvent.entity:Group.role",
        "path" : "AuditEvent.entity.role",
        "min" : 1
      },
      {
        "id" : "AuditEvent.entity:Group.role.system",
        "path" : "AuditEvent.entity.role.system",
        "min" : 1,
        "fixedUri" : "urn:oid:2.16.756.5.30.1.127.3.10.14"
      },
      {
        "id" : "AuditEvent.entity:Group.role.code",
        "path" : "AuditEvent.entity.role.code",
        "min" : 1,
        "fixedCode" : "GRP"
      },
      {
        "id" : "AuditEvent.entity:Group.name",
        "path" : "AuditEvent.entity.name",
        "short" : "Group name",
        "min" : 1,
        "mapping" : [
          {
            "identity" : "ch-atc",
            "map" : "Name of Group"
          }
        ]
      }
    ]
  }
}

```
