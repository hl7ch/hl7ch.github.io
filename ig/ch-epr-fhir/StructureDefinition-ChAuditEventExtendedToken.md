# CH Audit Event with an Extended Auth Token - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Audit Event with an Extended Auth Token**

## Resource Profile: CH Audit Event with an Extended Auth Token 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventExtendedToken | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:ChAuditEventExtendedToken |
| **Copyright/Legal**: CC0-1.0 | |

 
This is the profile for Swiss Audit Events when a transaction is secured with an Extended Authorization Token. 

**Usages:**

* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/ChAuditEventExtendedToken)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ChAuditEventExtendedToken.csv), [Excel](StructureDefinition-ChAuditEventExtendedToken.xlsx), [Schematron](StructureDefinition-ChAuditEventExtendedToken.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ChAuditEventExtendedToken",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventExtendedToken",
  "version" : "5.0.0",
  "name" : "ChAuditEventExtendedToken",
  "title" : "CH Audit Event with an Extended Auth Token",
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
  "description" : "This is the profile for Swiss Audit Events when a transaction is secured with an Extended Authorization\nToken.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ChAuditEventBasicToken",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "AuditEvent",
        "path" : "AuditEvent"
      },
      {
        "id" : "AuditEvent.agent:mainUser",
        "path" : "AuditEvent.agent",
        "sliceName" : "mainUser",
        "min" : 1
      },
      {
        "id" : "AuditEvent.agent:mainUser.purposeOfUse",
        "path" : "AuditEvent.agent.purposeOfUse",
        "min" : 1
      },
      {
        "id" : "AuditEvent.entity",
        "path" : "AuditEvent.entity",
        "min" : 1
      },
      {
        "id" : "AuditEvent.entity:patient",
        "path" : "AuditEvent.entity",
        "sliceName" : "patient",
        "min" : 1,
        "max" : "1"
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
      }
    ]
  }
}

```
