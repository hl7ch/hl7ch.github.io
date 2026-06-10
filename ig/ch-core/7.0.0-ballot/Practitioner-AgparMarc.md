# Agpar Marc - CH Core (R4) v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Agpar Marc**

## Example Practitioner: Agpar Marc

Profile: [CH Core Practitioner](StructureDefinition-ch-core-practitioner.md)

**identifier**: [GLN](http://fhir.ch/ig/ch-term/3.4.0/NamingSystem-gln.html)/7610000050719

**name**: Marc Agpar 



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "AgparMarc",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"]
  },
  "identifier" : [{
    "system" : "urn:oid:2.51.1.3",
    "value" : "7610000050719"
  }],
  "name" : [{
    "family" : "Agpar",
    "given" : ["Marc"]
  }]
}

```
