# CH ATC AuditEvent - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ATC AuditEvent**

## Resource Profile: CH ATC AuditEvent 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-atc-auditevent | *Version*:5.0.0 |
| Active as of 2018-05-28 | *Computable Name*:ChAtcAuditEvent |
| **Copyright/Legal**: CC0-1.0 | |

 
CH ATC profile on AuditEvent 

**Usages:**

* Derived from this Profile: [AccessAuditTrailEvent](StructureDefinition-AccessAuditTrailEvent.md), [DocumentAuditEvent](StructureDefinition-DocumentAuditEvent.md), [HpdAuditEvent](StructureDefinition-HpdAuditEvent.md) and [PolicyAuditEvent](StructureDefinition-PolicyAuditEvent.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/ch-atc-auditevent)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-atc-auditevent.csv), [Excel](StructureDefinition-ch-atc-auditevent.xlsx), [Schematron](StructureDefinition-ch-atc-auditevent.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-atc-auditevent",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-atc-auditevent",
  "version" : "5.0.0",
  "name" : "ChAtcAuditEvent",
  "title" : "CH ATC AuditEvent",
  "status" : "active",
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
  "description" : "CH ATC profile on AuditEvent",
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
        "short" : "Patient",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "AuditEvent.entity:Patient.what",
        "path" : "AuditEvent.entity.what",
        "min" : 1
      },
      {
        "id" : "AuditEvent.entity:Patient.what.identifier",
        "path" : "AuditEvent.entity.what.identifier",
        "short" : "Patient Id (EPR-SPID)",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:Patient.what.identifier.system",
        "path" : "AuditEvent.entity.what.identifier.system",
        "min" : 1,
        "fixedUri" : "urn:oid:2.16.756.5.30.1.127.3.10.3"
      },
      {
        "id" : "AuditEvent.entity:Patient.type",
        "path" : "AuditEvent.entity.type",
        "min" : 1
      },
      {
        "id" : "AuditEvent.entity:Patient.type.code",
        "path" : "AuditEvent.entity.type.code",
        "min" : 1,
        "fixedCode" : "1"
      },
      {
        "id" : "AuditEvent.entity:Patient.role",
        "path" : "AuditEvent.entity.role",
        "min" : 1
      },
      {
        "id" : "AuditEvent.entity:Patient.role.code",
        "path" : "AuditEvent.entity.role.code",
        "min" : 1,
        "fixedCode" : "1"
      },
      {
        "id" : "AuditEvent.entity:TraceContext",
        "path" : "AuditEvent.entity",
        "sliceName" : "TraceContext",
        "short" : "Trace Context",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "AuditEvent.entity:TraceContext.what",
        "path" : "AuditEvent.entity.what",
        "min" : 1
      },
      {
        "id" : "AuditEvent.entity:TraceContext.what.identifier",
        "path" : "AuditEvent.entity.what.identifier",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier"
          }
        ]
      },
      {
        "id" : "AuditEvent.entity:TraceContext.what.identifier.value",
        "path" : "AuditEvent.entity.what.identifier.value",
        "min" : 1
      },
      {
        "id" : "AuditEvent.entity:TraceContext.type",
        "path" : "AuditEvent.entity.type",
        "min" : 1
      },
      {
        "id" : "AuditEvent.entity:TraceContext.type.code",
        "path" : "AuditEvent.entity.type.code",
        "min" : 1,
        "fixedCode" : "4"
      },
      {
        "id" : "AuditEvent.entity:TraceContext.role",
        "path" : "AuditEvent.entity.role",
        "min" : 1
      },
      {
        "id" : "AuditEvent.entity:TraceContext.role.code",
        "path" : "AuditEvent.entity.role.code",
        "min" : 1,
        "fixedCode" : "26"
      }
    ]
  }
}

```
