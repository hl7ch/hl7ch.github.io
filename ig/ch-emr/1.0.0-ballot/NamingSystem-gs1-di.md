# GS1 Device Identifiers - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **GS1 Device Identifiers**

## NamingSystem: GS1 Device Identifiers 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emr/NamingSystem/gs1-di | *Version*:1.0.0-ballot |
| Active as of 2026-05-31 | *Computable Name*:GS1DeviceIdentifier |
| **Copyright/Legal**: CC0-1.0 | |

 
GS1 device identifier namespace recognised as a UDI issuer (republished from the FHIR Device documentation). 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "gs1-di",
  "extension" : [{
    "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
    "valueUri" : "http://fhir.ch/ig/ch-emr/NamingSystem/gs1-di"
  },
  {
    "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
    "valueString" : "1.0.0-ballot"
  }],
  "name" : "GS1DeviceIdentifier",
  "status" : "active",
  "kind" : "identifier",
  "date" : "2026-05-31",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  }],
  "description" : "GS1 device identifier namespace recognised as a UDI issuer (republished from the FHIR Device documentation).",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CHE"
    }]
  }],
  "uniqueId" : [{
    "type" : "uri",
    "value" : "http://hl7.org/fhir/NamingSystem/gs1-di",
    "preferred" : true
  }]
}

```
