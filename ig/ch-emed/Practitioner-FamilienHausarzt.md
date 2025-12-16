# Familien Hausarzt - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Familien Hausarzt**

## Example Practitioner: Familien Hausarzt

Profile: [CH EMED Practitioner](StructureDefinition-ch-emed-practitioner.md)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601000234438

**name**: Familien Hausarzt 



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "FamilienHausarzt",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-practitioner"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601000234438"
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
