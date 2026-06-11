# 4.5 Practitioner (Recommendation Request/Response) - Implementation Guide CH VACD v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **4.5 Practitioner (Recommendation Request/Response)**

## Example Practitioner: 4.5 Practitioner (Recommendation Request/Response)

Profile: [CH Core Practitioner](http://fhir.ch/ig/ch-core/7.0.0-ballot/StructureDefinition-ch-core-practitioner.html)

**identifier**: [GLN](http://fhir.ch/ig/ch-term/3.4.0/NamingSystem-gln.html)/7601000000309

**active**: true

**name**: Detlef Demo 

**address**: 3456 CH 



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "4-5-Practitioner",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"]
  },
  "identifier" : [{
    "system" : "urn:oid:2.51.1.3",
    "value" : "7601000000309"
  }],
  "active" : true,
  "name" : [{
    "family" : "Demo",
    "given" : ["Detlef"]
  }],
  "address" : [{
    "id" : "12-3-Address",
    "postalCode" : "3456",
    "country" : "CH"
  }]
}

```
