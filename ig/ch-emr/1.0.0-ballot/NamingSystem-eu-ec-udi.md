# European Commission UDI Jurisdiction - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **European Commission UDI Jurisdiction**

## NamingSystem: European Commission UDI Jurisdiction 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emr/NamingSystem/eu-ec-udi | *Version*:1.0.0-ballot |
| Active as of 2026-05-31 | *Computable Name*:EuropeanCommissionUDI |
| **Copyright/Legal**: CC0-1.0 | |

 
UDI jurisdiction for the European Commission (republished from the FHIR Device documentation). 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "eu-ec-udi",
  "extension" : [{
    "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
    "valueUri" : "http://fhir.ch/ig/ch-emr/NamingSystem/eu-ec-udi"
  },
  {
    "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
    "valueString" : "1.0.0-ballot"
  }],
  "name" : "EuropeanCommissionUDI",
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
  "description" : "UDI jurisdiction for the European Commission (republished from the FHIR Device documentation).",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CHE"
    }]
  }],
  "uniqueId" : [{
    "type" : "uri",
    "value" : "http://hl7.org/fhir/NamingSystem/eu-ec-udi",
    "preferred" : true
  }]
}

```
