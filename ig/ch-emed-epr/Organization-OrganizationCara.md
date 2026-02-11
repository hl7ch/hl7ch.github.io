# Organization: CARA - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Organization: CARA**

## Example Organization: Organization: CARA

Profile: [CH EMED EPR Organization](StructureDefinition-ch-emed-epr-organization.md)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601001407428

**name**: Association CARA

**address**: Route de la Corniche 3a Épalinges Vaud 1066 CH 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "OrganizationCara",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-organization"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601001407428"
    }
  ],
  "name" : "Association CARA",
  "address" : [
    {
      "line" : ["Route de la Corniche 3a"],
      "city" : "Épalinges",
      "state" : "Vaud",
      "postalCode" : "1066",
      "country" : "CH"
    }
  ]
}

```
