# Retrieve CH ATC ATNA Audit Event [ITI-81] Response - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Retrieve CH ATC ATNA Audit Event [ITI-81] Response**

## Resource Profile: Retrieve CH ATC ATNA Audit Event [ITI-81] Response 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH-ATC.ITI-81.Response | *Version*:5.0.0 |
| Active as of 2018-05-14 | *Computable Name*:ChAtcIti81Response |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile defines the response to the [ITI-81] query. The response is a search set including all audit events which a community has to provide for a patients audit trail. 

**Usages:**

* Examples for this Profile: [Bundle/ch-atc-iti-81-response-sample](Bundle-ch-atc-iti-81-response-sample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/CH-ATC.ITI-81.Response)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-CH-ATC.ITI-81.Response.csv), [Excel](StructureDefinition-CH-ATC.ITI-81.Response.xlsx), [Schematron](StructureDefinition-CH-ATC.ITI-81.Response.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "CH-ATC.ITI-81.Response",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/CH-ATC.ITI-81.Response",
  "version" : "5.0.0",
  "name" : "ChAtcIti81Response",
  "title" : "ChAtcIti81Response",
  "status" : "active",
  "experimental" : false,
  "date" : "2018-05-14",
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
  "description" : "This profile defines the response to the [ITI-81] query. The response is a search set including all audit events which a community has to provide for a patients audit trail.",
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
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Bundle",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Bundle",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Bundle",
        "path" : "Bundle",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.type",
        "path" : "Bundle.type",
        "short" : "searchset",
        "fixedCode" : "searchset"
      },
      {
        "id" : "Bundle.entry",
        "path" : "Bundle.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resource"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Bundle.entry:DocumentAuditEvent",
        "path" : "Bundle.entry",
        "sliceName" : "DocumentAuditEvent",
        "short" : "AuditEvent",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:DocumentAuditEvent.fullUrl",
        "path" : "Bundle.entry.fullUrl",
        "min" : 0
      },
      {
        "id" : "Bundle.entry:DocumentAuditEvent.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "AuditEvent",
            "profile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/DocumentAuditEvent"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:PolicyAuditEvent",
        "path" : "Bundle.entry",
        "sliceName" : "PolicyAuditEvent",
        "short" : "AuditEvent",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:PolicyAuditEvent.fullUrl",
        "path" : "Bundle.entry.fullUrl",
        "min" : 0
      },
      {
        "id" : "Bundle.entry:PolicyAuditEvent.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "AuditEvent",
            "profile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/PolicyAuditEvent"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:AccessAuditTrailEvent",
        "path" : "Bundle.entry",
        "sliceName" : "AccessAuditTrailEvent",
        "short" : "AuditEvent",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:AccessAuditTrailEvent.fullUrl",
        "path" : "Bundle.entry.fullUrl",
        "min" : 0
      },
      {
        "id" : "Bundle.entry:AccessAuditTrailEvent.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "AuditEvent",
            "profile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/AccessAuditTrailEvent"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:HpdAuditEvent",
        "path" : "Bundle.entry",
        "sliceName" : "HpdAuditEvent",
        "short" : "AuditEvent",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:HpdAuditEvent.fullUrl",
        "path" : "Bundle.entry.fullUrl",
        "min" : 0
      },
      {
        "id" : "Bundle.entry:HpdAuditEvent.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "AuditEvent",
            "profile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/HpdAuditEvent"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:OperationOutcome",
        "path" : "Bundle.entry",
        "sliceName" : "OperationOutcome",
        "short" : "OperationOutcome",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Bundle.entry:OperationOutcome.fullUrl",
        "path" : "Bundle.entry.fullUrl",
        "min" : 1
      },
      {
        "id" : "Bundle.entry:OperationOutcome.resource",
        "path" : "Bundle.entry.resource",
        "short" : "OperationOutcome can indicate a warning like a partial result",
        "min" : 0,
        "type" : [
          {
            "code" : "OperationOutcome",
            "profile" : ["http://hl7.org/fhir/StructureDefinition/OperationOutcome"]
          }
        ],
        "mustSupport" : true
      }
    ]
  }
}

```
