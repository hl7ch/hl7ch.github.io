# UC 1.2: Spital - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1.2: Spital**

## Example Organization: UC 1.2: Spital

Profile: [CH IPS Organization](StructureDefinition-ch-ips-organization.md)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601000234438

**name**: Spital

**address**: Spitalstrasse 2 Zürich 8005 CH 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "a27376ce-fa12-458d-a2dc-f90e63de126b",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-organization"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601000234438"
    }
  ],
  "name" : "Spital",
  "address" : [
    {
      "line" : ["Spitalstrasse 2"],
      "city" : "Zürich",
      "postalCode" : "8005",
      "country" : "CH"
    }
  ]
}

```
