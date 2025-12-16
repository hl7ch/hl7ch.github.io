# Hausarzt - CH AllergyIntolerance (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hausarzt**

## Organization: Hausarzt

Profile: [CH Core Organization EPR](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-organization-epr.html)

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
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization-epr"
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
