# 4.2 Practitioner - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **4.2 Practitioner**

## Practitioner: 4.2 Practitioner

Profile: [CH Core Practitioner](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitioner.html)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000309

**active**: true

**name**: Detlef Demo 

**address**: Hilfgasse 7 Hilferswil BE 3456 CH 



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "4-2-Practitioner",
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
      "id" : "12-6-Address",
      "line" : ["Hilfgasse 7"],
      "city" : "Hilferswil",
      "state" : "BE",
      "postalCode" : "3456",
      "country" : "CH"
    }
  ]
}

```
