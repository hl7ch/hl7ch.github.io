# ch-umzhconnectig-servicerequest-supportinginfo - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ch-umzhconnectig-servicerequest-supportinginfo**

## SearchParameter: ch-umzhconnectig-servicerequest-supportinginfo 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-umzh-connect/SearchParameter/ch-umzhconnectig-servicerequest-supportinginfo | *Version*:1.0.0-ballot |
| Active as of 2026-06-16 | *Computable Name*:ch-umzhconnectig-servicerequest-supportinginfo |
| **Copyright/Legal**: CC0-1.0 | |

 
Custom search parameter for ServiceRequest.supportingInfo 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ch-umzhconnectig-servicerequest-supportinginfo",
  "url" : "http://fhir.ch/ig/ch-umzh-connect/SearchParameter/ch-umzhconnectig-servicerequest-supportinginfo",
  "version" : "1.0.0-ballot",
  "name" : "ch-umzhconnectig-servicerequest-supportinginfo",
  "status" : "active",
  "date" : "2026-06-16T06:40:38+00:00",
  "publisher" : "UMZH Connect Team",
  "contact" : [{
    "name" : "UMZH Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://umzhconnect.ch/"
    }]
  }],
  "description" : "Custom search parameter for ServiceRequest.supportingInfo",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CHE"
    }]
  }],
  "code" : "ch-umzhconnectig-servicerequest-supportinginfo",
  "base" : ["ServiceRequest"],
  "type" : "reference",
  "expression" : "ServiceRequest.supportingInfo",
  "xpathUsage" : "normal",
  "multipleAnd" : true
}

```
