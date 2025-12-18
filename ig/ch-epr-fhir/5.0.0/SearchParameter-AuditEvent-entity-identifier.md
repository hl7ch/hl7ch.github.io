# Search Parameter AuditEvent entity.identifier - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Search Parameter AuditEvent entity.identifier**

## SearchParameter: Search Parameter AuditEvent entity.identifier 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/SearchParameter/AuditEvent-entity-identifier | *Version*:5.0.0 |
| *Standards status:*[Trial-use](http://hl7.org/fhir/R4/versions.html#std-process) | *Computable Name*:SPEntityIdentifier |
| **Copyright/Legal**: CC0-1.0 | |

 
This parameter specifies unique identifier for the object. The parameter value should be identified in accordance to the entity type. 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "AuditEvent-entity-identifier",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
      "valueCode" : "trial-use"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-epr-fhir/SearchParameter/AuditEvent-entity-identifier",
  "version" : "5.0.0",
  "name" : "SPEntityIdentifier",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-08-15",
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
  "description" : "This parameter specifies unique identifier for the object. The parameter value should be identified in accordance to the entity type.",
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
  "code" : "entity-identifier",
  "base" : ["AuditEvent"],
  "type" : "token",
  "expression" : "AuditEvent.entity.what.identifier",
  "xpathUsage" : "normal",
  "multipleAnd" : true
}

```
