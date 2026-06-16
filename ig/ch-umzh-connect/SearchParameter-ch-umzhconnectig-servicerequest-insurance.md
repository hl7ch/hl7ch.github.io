# ch-umzhconnectig-servicerequest-insurance - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ch-umzhconnectig-servicerequest-insurance**

## SearchParameter: ch-umzhconnectig-servicerequest-insurance 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-umzh-connect/SearchParameter/ch-umzhconnectig-servicerequest-insurance | *Version*:1.0.0-ballot |
| Active as of 2026-06-16 | *Computable Name*:ch-umzhconnectig-servicerequest-insurance |
| **Copyright/Legal**: CC0-1.0 | |

 
Custom search parameter for ServiceRequest.insurance 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "ch-umzhconnectig-servicerequest-insurance",
  "url" : "http://fhir.ch/ig/ch-umzh-connect/SearchParameter/ch-umzhconnectig-servicerequest-insurance",
  "version" : "1.0.0-ballot",
  "name" : "ch-umzhconnectig-servicerequest-insurance",
  "status" : "active",
  "date" : "2026-06-16T06:42:23+00:00",
  "publisher" : "UMZH Connect Team",
  "contact" : [{
    "name" : "UMZH Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://umzhconnect.ch/"
    }]
  }],
  "description" : "Custom search parameter for ServiceRequest.insurance",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CHE"
    }]
  }],
  "code" : "ch-umzhconnectig-servicerequest-insurance",
  "base" : ["ServiceRequest"],
  "type" : "reference",
  "expression" : "ServiceRequest.insurance",
  "xpathUsage" : "normal",
  "multipleAnd" : true
}

```
