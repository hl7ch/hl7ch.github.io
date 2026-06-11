# 5.5 Organization (Recommendation Request/Response) - Implementation Guide CH VACD v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **5.5 Organization (Recommendation Request/Response)**

## Example Organization: 5.5 Organization (Recommendation Request/Response)

Profile: [CH Core Organization](http://fhir.ch/ig/ch-core/7.0.0-ballot/StructureDefinition-ch-core-organization.html)

**identifier**: [GLN](http://fhir.ch/ig/ch-term/3.4.0/NamingSystem-gln.html)/7601000000415

**name**: Praxis Demo

**address**: 3456 CH 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "5-5-Organization",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"]
  },
  "identifier" : [{
    "system" : "urn:oid:2.51.1.3",
    "value" : "7601000000415"
  }],
  "name" : "Praxis Demo",
  "address" : [{
    "id" : "12-3-Address",
    "postalCode" : "3456",
    "country" : "CH"
  }]
}

```
