# UC1-Organization-Hausarztpraxis - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC1-Organization-Hausarztpraxis**

## Example Organization: UC1-Organization-Hausarztpraxis

Profile: [CH IPS Organization](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-organization.html)

**identifier**: [GLN](http://fhir.ch/ig/ch-term/3.4.0/NamingSystem-gln.html)/7601000000026

**active**: true

**type**: Allgemeine Innere Medizin

**name**: Hausarztpraxis UC1



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "UC1-Organization-Hausarztpraxis",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-organization"]
  },
  "identifier" : [{
    "system" : "urn:oid:2.51.1.3",
    "value" : "7601000000026"
  }],
  "active" : true,
  "type" : [{
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "394802001"
    }],
    "text" : "Allgemeine Innere Medizin"
  }],
  "name" : "Hausarztpraxis UC1"
}

```
