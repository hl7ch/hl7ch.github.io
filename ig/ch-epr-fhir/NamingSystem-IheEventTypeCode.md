# IheEventTypeCode - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IheEventTypeCode**

## NamingSystem: IheEventTypeCode 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/NamingSystem/IheEventTypeCode | *Version*:5.0.0 |
| Active as of 2025-05-13 | *Computable Name*:IheEventTypeCode |
| **Copyright/Legal**: CC0-1.0 | |

 
NamingSystem for event type code from IHE. 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "IheEventTypeCode",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
      "valueUri" : "http://fhir.ch/ig/ch-epr-fhir/NamingSystem/IheEventTypeCode"
    },
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
      "valueString" : "5.0.0"
    }
  ],
  "name" : "IheEventTypeCode",
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
  "responsible" : "IHE International",
  "description" : "NamingSystem for event type code from IHE.",
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
      "value" : "urn:ihe:event-type-code",
      "preferred" : true
    }
  ]
}

```
