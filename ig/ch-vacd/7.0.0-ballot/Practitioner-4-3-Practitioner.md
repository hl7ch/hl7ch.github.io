# 4.3 Practitioner - Implementation Guide CH VACD v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **4.3 Practitioner**

## Practitioner: 4.3 Practitioner

Profile: [CH Core Practitioner](http://fhir.ch/ig/ch-core/7.0.0-ballot/StructureDefinition-ch-core-practitioner.html)

**identifier**: [GLN](http://fhir.ch/ig/ch-term/3.4.0/NamingSystem-gln.html)/7601000000316

**active**: true

**name**: Max Muster 

**address**: Mustergasse 99 Beispielen SG 9876 CH 



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "4-3-Practitioner",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"]
  },
  "identifier" : [{
    "system" : "urn:oid:2.51.1.3",
    "value" : "7601000000316"
  }],
  "active" : true,
  "name" : [{
    "family" : "Muster",
    "given" : ["Max"]
  }],
  "address" : [{
    "line" : ["Mustergasse 99"],
    "city" : "Beispielen",
    "state" : "SG",
    "postalCode" : "9876",
    "country" : "CH"
  }]
}

```
