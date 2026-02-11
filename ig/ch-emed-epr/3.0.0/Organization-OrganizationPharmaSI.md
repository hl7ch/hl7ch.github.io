# Organization: Pharma SI - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Organization: Pharma SI**

## Example Organization: Organization: Pharma SI

Profile: [CH EMED EPR Organization](StructureDefinition-ch-emed-epr-organization.md)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601234567890

**name**: Pharma SI

**address**: Rue de la Vie s/n Ville la Ville CH 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "OrganizationPharmaSI",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-organization"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601234567890"
    }
  ],
  "name" : "Pharma SI",
  "address" : [
    {
      "line" : ["Rue de la Vie s/n"],
      "city" : "Ville la Ville",
      "country" : "CH"
    }
  ]
}

```
