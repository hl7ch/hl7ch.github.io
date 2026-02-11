# Organization: HUG - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Organization: HUG**

## Example Organization: Organization: HUG

Profile: [CH EMED EPR Organization](StructureDefinition-ch-emed-epr-organization.md)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601000234438

**name**: Hôpitaux universitaires de Genève

**address**: Rue Gabrielle-Perret-Gentil 4 Genève 1205 CH 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "OrganizationHug",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-organization"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601000234438"
    }
  ],
  "name" : "Hôpitaux universitaires de Genève",
  "address" : [
    {
      "line" : ["Rue Gabrielle-Perret-Gentil 4"],
      "city" : "Genève",
      "postalCode" : "1205",
      "country" : "CH"
    }
  ]
}

```
