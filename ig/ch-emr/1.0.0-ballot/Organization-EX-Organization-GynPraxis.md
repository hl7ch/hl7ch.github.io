# EX-Organization-GynPraxis - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EX-Organization-GynPraxis**

## Example Organization: EX-Organization-GynPraxis

Profile: [CH IPS Organization](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-organization.html)

**identifier**: [GLN](http://fhir.ch/ig/ch-term/3.3.0/NamingSystem-gln.html)/7601009110849

**type**: Gynäkologische Praxis

**name**: Gynäkologie Praxis Basel

**telecom**: [+41 61 265 25 25](tel:+41612652525), [info@gynpraxis-basel.ch](mailto:info@gynpraxis-basel.ch), [https://www.gynpraxis-basel.ch](https://www.gynpraxis-basel.ch)

**address**: Gynäkologie Praxis Basel Petersgraben 4 Basel 4051 CH 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "EX-Organization-GynPraxis",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-organization"]
  },
  "identifier" : [{
    "system" : "urn:oid:2.51.1.3",
    "value" : "7601009110849"
  }],
  "type" : [{
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "394579002"
    }],
    "text" : "Gynäkologische Praxis"
  }],
  "name" : "Gynäkologie Praxis Basel",
  "telecom" : [{
    "system" : "phone",
    "value" : "+41 61 265 25 25",
    "use" : "work"
  },
  {
    "system" : "email",
    "value" : "info@gynpraxis-basel.ch",
    "use" : "work"
  },
  {
    "system" : "url",
    "value" : "https://www.gynpraxis-basel.ch",
    "use" : "work"
  }],
  "address" : [{
    "line" : ["Gynäkologie Praxis Basel", "Petersgraben 4"],
    "city" : "Basel",
    "postalCode" : "4051",
    "country" : "CH"
  }]
}

```
