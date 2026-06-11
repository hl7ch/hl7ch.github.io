# 5.3 Organization - Implementation Guide CH VACD v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **5.3 Organization**

## Organization: 5.3 Organization

Profile: [CH Core Organization](http://fhir.ch/ig/ch-core/7.0.0-ballot/StructureDefinition-ch-core-organization.html)

**identifier**: [GLN](http://fhir.ch/ig/ch-term/3.4.0/NamingSystem-gln.html)/7601000000514

**name**: Praxis Muster

**address**: Mustergasse 99 Beispielen SG 9876 CH 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "5-3-Organization",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"]
  },
  "identifier" : [{
    "system" : "urn:oid:2.51.1.3",
    "value" : "7601000000514"
  }],
  "name" : "Praxis Muster",
  "address" : [{
    "line" : ["Mustergasse 99"],
    "city" : "Beispielen",
    "state" : "SG",
    "postalCode" : "9876",
    "country" : "CH"
  }]
}

```
