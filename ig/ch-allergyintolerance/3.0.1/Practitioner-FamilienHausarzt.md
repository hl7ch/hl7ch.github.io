# Familien Hausarzt - CH AllergyIntolerance (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Familien Hausarzt**

## Example Practitioner: Familien Hausarzt

Profile: [CH Core Practitioner EPR](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitioner-epr.html)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601000121219

**name**: Familien Hausarzt 



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "FamilienHausarzt",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner-epr"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601000121219"
    }
  ],
  "name" : [
    {
      "family" : "Hausarzt",
      "given" : ["Familien"]
    }
  ]
}

```
