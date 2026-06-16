# Fulfiller - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Fulfiller**

## Example Organization: Fulfiller

Profile: [CH Core Organization](http://fhir.ch/ig/ch-core/7.0.0-ballot/StructureDefinition-ch-core-organization.html)

**identifier**: [GLN](http://fhir.ch/ig/ch-term/3.4.0/NamingSystem-gln.html)/7601000618306

**name**: Fulfiller

**alias**: Fulfiller

**address**: Zurich 8008 CH 

**endpoint**: [http://registry.example.org/fhir/Endpoint/EndpointFulfiller](http://registry.example.org/fhir/Endpoint/EndpointFulfiller)



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "Fulfiller",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"]
  },
  "identifier" : [{
    "system" : "urn:oid:2.51.1.3",
    "value" : "7601000618306"
  }],
  "name" : "Fulfiller",
  "alias" : ["Fulfiller"],
  "address" : [{
    "city" : "Zurich",
    "postalCode" : "8008",
    "country" : "CH"
  }],
  "endpoint" : [{
    "reference" : "http://registry.example.org/fhir/Endpoint/EndpointFulfiller"
  }]
}

```
