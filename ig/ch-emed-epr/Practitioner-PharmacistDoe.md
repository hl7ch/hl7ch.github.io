# Pharmacist: John Doe - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Pharmacist: John Doe**

## Example Practitioner: Pharmacist: John Doe

Profile: [CH EMED EPR Practitioner](StructureDefinition-ch-emed-epr-practitioner.md)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601234567890

**name**: John Doe 



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "PharmacistDoe",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-practitioner"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601234567890"
    }
  ],
  "name" : [
    {
      "family" : "Doe",
      "given" : ["John"]
    }
  ]
}

```
