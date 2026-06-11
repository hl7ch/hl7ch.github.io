# 5.2 Organization - Implementation Guide CH VACD v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **5.2 Organization**

## Organization: 5.2 Organization

Profile: [CH Core Organization](http://fhir.ch/ig/ch-core/7.0.0-ballot/StructureDefinition-ch-core-organization.html)

**identifier**: [GLN](http://fhir.ch/ig/ch-term/3.4.0/NamingSystem-gln.html)/7601000007292

**name**: Praxis Demo

**address**: Hilfgasse 7 Hilferswil BE 3456 CH 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "5-2-Organization",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"]
  },
  "identifier" : [{
    "system" : "urn:oid:2.51.1.3",
    "value" : "7601000007292"
  }],
  "name" : "Praxis Demo",
  "address" : [{
    "id" : "12-6-Address",
    "line" : ["Hilfgasse 7"],
    "city" : "Hilferswil",
    "state" : "BE",
    "postalCode" : "3456",
    "country" : "CH"
  }]
}

```
