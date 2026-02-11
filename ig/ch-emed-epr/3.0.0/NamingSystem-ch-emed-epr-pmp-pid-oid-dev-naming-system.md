# CH EMED EPR - PMP-PID Assigning Authority OID dev - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED EPR - PMP-PID Assigning Authority OID dev**

## NamingSystem: CH EMED EPR - PMP-PID Assigning Authority OID dev 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed-epr/NamingSystem/ch-emed-epr-pmp-pid-oid-dev-naming-system | *Version*:3.0.0 |
| Draft as of 2026-01-22 | *Computable Name*:CHEMEDEPRPMPPIDOIDDevNamingSystem |
| **Copyright/Legal**: CC0-1.0 | |

 
Naming System of the PMP-PID's Assigning Authority OID on development environment. 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "ch-emed-epr-pmp-pid-oid-dev-naming-system",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
      "valueUri" : "http://fhir.ch/ig/ch-emed-epr/NamingSystem/ch-emed-epr-pmp-pid-oid-dev-naming-system"
    },
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
      "valueString" : "3.0.0"
    }
  ],
  "name" : "CHEMEDEPRPMPPIDOIDDevNamingSystem",
  "status" : "draft",
  "kind" : "identifier",
  "date" : "2026-01-22",
  "publisher" : "CARA",
  "contact" : [
    {
      "name" : "CARA",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.cara.ch"
        }
      ]
    }
  ],
  "description" : "Naming System of the PMP-PID's Assigning Authority OID on development environment.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH",
          "display" : "Switzerland"
        }
      ]
    }
  ],
  "uniqueId" : [
    {
      "type" : "oid",
      "value" : "2.16.756.5.30.1.1625.3.1.3.1"
    }
  ]
}

```
