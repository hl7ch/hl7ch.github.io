# IheItiXds2013UniqueId - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IheItiXds2013UniqueId**

## NamingSystem: IheItiXds2013UniqueId 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/NamingSystem/IheItiXds2013UniqueId | *Version*:5.0.0 |
| Active as of 2025-05-13 | *Computable Name*:IheItiXds2013UniqueId |
| **Copyright/Legal**: CC0-1.0 | |

 
NamingSystem for uniqueId from IHE. 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "IheItiXds2013UniqueId",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
      "valueUri" : "http://fhir.ch/ig/ch-epr-fhir/NamingSystem/IheItiXds2013UniqueId"
    },
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
      "valueString" : "5.0.0"
    }
  ],
  "name" : "IheItiXds2013UniqueId",
  "status" : "active",
  "kind" : "identifier",
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
  "description" : "NamingSystem for uniqueId from IHE.",
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
      "value" : "urn:ihe:iti:xds:2013:uniqueId",
      "preferred" : true
    }
  ]
}

```
