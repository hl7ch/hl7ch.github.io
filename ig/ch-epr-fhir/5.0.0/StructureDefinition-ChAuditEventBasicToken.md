# CH Audit Event with a Basic Auth Token - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Audit Event with a Basic Auth Token**

## Resource Profile: CH Audit Event with a Basic Auth Token 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventBasicToken | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:ChAuditEventBasicToken |
| **Copyright/Legal**: CC0-1.0 | |

 
This is the profile for Swiss Audit Events when a transaction is secured with a Basic Authorization Token. 

**Usages:**

* Derived from this Profile: [CH Audit Event with an Extended Auth Token](StructureDefinition-ChAuditEventExtendedToken.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/ChAuditEventBasicToken)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ChAuditEventBasicToken.csv), [Excel](StructureDefinition-ChAuditEventBasicToken.xlsx), [Schematron](StructureDefinition-ChAuditEventBasicToken.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ChAuditEventBasicToken",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventBasicToken",
  "version" : "5.0.0",
  "name" : "ChAuditEventBasicToken",
  "title" : "CH Audit Event with a Basic Auth Token",
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
  "description" : "This is the profile for Swiss Audit Events when a transaction is secured with a Basic Authorization Token.",
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
      "identity" : "ChXuaToAuditEventMapping",
      "uri" : "https://www.bag.admin.ch/epra",
      "name" : "CH XUA Assertion"
    },
    {
      "identity" : "ChJwtToAuditEventMapping",
      "uri" : "https://www.bag.admin.ch/epra",
      "name" : "CH JWT Basic/Extended Token"
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/AuditEvent",
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
        "max" : "1",
        "mapping" : [
          {
            "identity" : "ChXuaToAuditEventMapping",
            "map" : "AttributeStatement/Attribute[@Name=\"urn:oasis:names:tc:xacml:2.0:subject:role\"]/AttributeValue/Role"
          },
          {
            "identity" : "ChJwtToAuditEventMapping",
            "map" : "extensions.ihe_iua.subject_role"
          }
        ]
      },
      {
        "id" : "AuditEvent.agent:mainUser.altId",
        "path" : "AuditEvent.agent.altId",
        "min" : 1,
        "mapping" : [
          {
            "identity" : "ChXuaToAuditEventMapping",
            "map" : "Subject/NameID"
          },
          {
            "identity" : "ChJwtToAuditEventMapping",
            "map" : "extensions.ch_epr.user_id"
          }
        ]
      },
      {
        "id" : "AuditEvent.agent:mainUser.name",
        "path" : "AuditEvent.agent.name",
        "min" : 1,
        "mapping" : [
          {
            "identity" : "ChXuaToAuditEventMapping",
            "map" : "AttributeStatement/Attribute[@Name=\"urn:oasis:names:tc:xspa:1.0:subject:subject-id\"]/AttributeValue"
          },
          {
            "identity" : "ChJwtToAuditEventMapping",
            "map" : "extensions.ihe_iua.subject_name"
          }
        ]
      },
      {
        "id" : "AuditEvent.agent:mainUser.purposeOfUse",
        "path" : "AuditEvent.agent.purposeOfUse",
        "max" : "1",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/EprPurposeOfUse"
        },
        "mapping" : [
          {
            "identity" : "ChXuaToAuditEventMapping",
            "map" : "AttributeStatement/Attribute[@Name=\"urn:oasis:names:tc:xspa:1.0:subject:purposeofuse\"]/AttributeValue/PurposeOfUse"
          },
          {
            "identity" : "ChJwtToAuditEventMapping",
            "map" : "extensions.ihe_iua.purpose_of_use"
          }
        ]
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
        "min" : 1,
        "mapping" : [
          {
            "identity" : "ChXuaToAuditEventMapping",
            "map" : "Subject/SubjectConfirmation/NameID"
          },
          {
            "identity" : "ChJwtToAuditEventMapping",
            "map" : "extensions.ch_delegation.principal_id"
          }
        ]
      },
      {
        "id" : "AuditEvent.agent:delegatedUser.name",
        "path" : "AuditEvent.agent.name",
        "min" : 1,
        "mapping" : [
          {
            "identity" : "ChXuaToAuditEventMapping",
            "map" : "Subject/SubjectConfirmation/SubjectConfirmationData/AttributeStatement/Attribute[@Name=\"urn:oasis:names:tc:xspa:1.0:subject:subject-id\"]/AttributeValue"
          },
          {
            "identity" : "ChJwtToAuditEventMapping",
            "map" : "extensions.ch_delegation.principal"
          }
        ]
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
          "rules" : "open"
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
