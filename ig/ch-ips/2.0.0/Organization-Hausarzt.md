# UC 1.1: Hausarzt - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1.1: Hausarzt**

## Example Organization: UC 1.1: Hausarzt

Profile: [CH IPS Organization](StructureDefinition-ch-ips-organization.md)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601000121219

**name**: Hausarzt

**address**: Krankenstrasse 2 Zürich 8005 CH 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "Hausarzt",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-organization"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601000121219"
    }
  ],
  "name" : "Hausarzt",
  "address" : [
    {
      "line" : ["Krankenstrasse 2"],
      "city" : "Zürich",
      "postalCode" : "8005",
      "country" : "CH"
    }
  ]
}

```
