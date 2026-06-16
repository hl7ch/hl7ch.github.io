# Placer - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Placer**

## Example Organization: Placer

Profile: [CH Core Organization](http://fhir.ch/ig/ch-core/7.0.0-ballot/StructureDefinition-ch-core-organization.html)

**identifier**: [GLN](http://fhir.ch/ig/ch-term/3.4.0/NamingSystem-gln.html)/7601000201041

**name**: Placer

**alias**: Placer

**address**: Zürich 8091 CH 

**endpoint**: [http://registry.example.org/fhir/Endpoint/EndpointPlacer](http://registry.example.org/fhir/Endpoint/EndpointPlacer)



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "Placer",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"]
  },
  "identifier" : [{
    "system" : "urn:oid:2.51.1.3",
    "value" : "7601000201041"
  }],
  "name" : "Placer",
  "alias" : ["Placer"],
  "address" : [{
    "city" : "Zürich",
    "postalCode" : "8091",
    "country" : "CH"
  }],
  "endpoint" : [{
    "reference" : "http://registry.example.org/fhir/Endpoint/EndpointPlacer"
  }]
}

```
