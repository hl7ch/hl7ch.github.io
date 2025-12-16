# 4.5 Practitioner (Recommendation Request/Response) - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **4.5 Practitioner (Recommendation Request/Response)**

## Example Practitioner: 4.5 Practitioner (Recommendation Request/Response)

Profile: [CH Core Practitioner](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitioner.html)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000309

**active**: true

**name**: Detlef Demo 

**address**: 3456 CH 



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "4-5-Practitioner",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601000000309"
    }
  ],
  "active" : true,
  "name" : [
    {
      "family" : "Demo",
      "given" : ["Detlef"]
    }
  ],
  "address" : [
    {
      "id" : "12-3-Address",
      "postalCode" : "3456",
      "country" : "CH"
    }
  ]
}

```
