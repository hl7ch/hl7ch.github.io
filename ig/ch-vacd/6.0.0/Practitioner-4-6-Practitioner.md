# 4.6 Practitioner (Recommendation Request/Response) - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **4.6 Practitioner (Recommendation Request/Response)**

## Example Practitioner: 4.6 Practitioner (Recommendation Request/Response)

Profile: [CH Core Practitioner](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitioner.html)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514

**active**: true

**name**: Max Muster 

**address**: 9876 CH 



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "4-6-Practitioner",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601000000514"
    }
  ],
  "active" : true,
  "name" : [
    {
      "family" : "Muster",
      "given" : ["Max"]
    }
  ],
  "address" : [
    {
      "postalCode" : "9876",
      "country" : "CH"
    }
  ]
}

```
