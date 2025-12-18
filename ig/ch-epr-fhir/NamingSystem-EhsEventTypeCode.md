# EhsEventTypeCode - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EhsEventTypeCode**

## NamingSystem: EhsEventTypeCode 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/NamingSystem/EhsEventTypeCode | *Version*:5.0.0 |
| Active as of 2025-05-13 | *Computable Name*:EhsEventTypeCode |
| **Copyright/Legal**: CC0-1.0 | |

 
NamingSystem for event type code system from eHealth Suisse. 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "EhsEventTypeCode",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
      "valueUri" : "http://fhir.ch/ig/ch-epr-fhir/NamingSystem/EhsEventTypeCode"
    },
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
      "valueString" : "5.0.0"
    }
  ],
  "name" : "EhsEventTypeCode",
  "status" : "active",
  "kind" : "codesystem",
  "date" : "2025-05-13",
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
  "responsible" : "eHealth Suisse",
  "description" : "NamingSystem for event type code system from eHealth Suisse.",
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
  "uniqueId" : [
    {
      "type" : "uri",
      "value" : "urn:e-health-suisse:event-type-code",
      "preferred" : true
    }
  ]
}

```
