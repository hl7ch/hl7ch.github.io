# AgparMarc - CH AllergyIntolerance (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **AgparMarc**

## Example Practitioner: AgparMarc

Profile: [CH Core Practitioner](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitioner.html)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601000050717

**name**: Marc Agpar 



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "AgparMarc",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601000050717"
    }
  ],
  "name" : [
    {
      "family" : "Agpar",
      "given" : ["Marc"]
    }
  ]
}

```
