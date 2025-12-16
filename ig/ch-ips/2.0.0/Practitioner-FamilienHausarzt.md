# UC 1.1.: Familien Hausarzt - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1.1.: Familien Hausarzt**

## Example Practitioner: UC 1.1.: Familien Hausarzt

Profile: [CH IPS Practitioner](StructureDefinition-ch-ips-practitioner.md)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601000121219

**name**: Familien Hausarzt 



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "FamilienHausarzt",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-practitioner"
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
