# Rettungsdienst - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Rettungsdienst**

## Example Organization: Rettungsdienst

Profile: [CH EMED Organization](StructureDefinition-ch-emed-organization.md)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601000000514

**name**: Rettungsdienst

**address**: Rettungsgasse 2 Bern 3006 CH 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "Rettungsdienst",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-organization"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601000000514"
    }
  ],
  "name" : "Rettungsdienst",
  "address" : [
    {
      "line" : ["Rettungsgasse 2"],
      "city" : "Bern",
      "postalCode" : "3006",
      "country" : "CH"
    }
  ]
}

```
