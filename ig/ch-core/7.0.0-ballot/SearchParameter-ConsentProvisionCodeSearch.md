# ConsentProvisionCodeSearch - CH Core (R4) v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ConsentProvisionCodeSearch**

## SearchParameter: ConsentProvisionCodeSearch 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/SearchParameter/ConsentProvisionCodeSearch | *Version*:7.0.0-ballot |
| Active as of 2025-05-14 | *Computable Name*:ConsentProvisionCodeSearch |
| **Copyright/Legal**: CC0-1.0 | |

 
Enables the search for Consent.provision.code.coding 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ConsentProvisionCodeSearch",
  "url" : "http://fhir.ch/ig/ch-core/SearchParameter/ConsentProvisionCodeSearch",
  "version" : "7.0.0-ballot",
  "name" : "ConsentProvisionCodeSearch",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-05-14",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  },
  {
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/",
      "use" : "work"
    }]
  }],
  "description" : "Enables the search for Consent.provision.code.coding",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "code" : "provision-code",
  "base" : ["Consent"],
  "type" : "token",
  "expression" : "Consent.provision.code",
  "target" : ["Consent"]
}

```
