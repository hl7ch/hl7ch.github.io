# Ldap - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ldap**

## NamingSystem: Ldap 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/NamingSystem/Ldap | *Version*:5.0.0 |
| Active as of 2025-05-13 | *Computable Name*:LDAP |
| **Copyright/Legal**: CC0-1.0 | |

 
NamingSystem for Lightweight Directory Access Protocol (LDAP);[https://www.ietf.org/rfc/rfc4514.html](https://www.ietf.org/rfc/rfc4514.html). 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "Ldap",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
      "valueUri" : "http://fhir.ch/ig/ch-epr-fhir/NamingSystem/Ldap"
    },
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.version",
      "valueString" : "5.0.0"
    }
  ],
  "name" : "LDAP",
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
  "responsible" : "IETF",
  "description" : "NamingSystem for Lightweight Directory Access Protocol (LDAP); [https://www.ietf.org/rfc/rfc4514.html](https://www.ietf.org/rfc/rfc4514.html).",
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
      "value" : "urn:ietf:rfc:4514",
      "preferred" : true
    }
  ]
}

```
