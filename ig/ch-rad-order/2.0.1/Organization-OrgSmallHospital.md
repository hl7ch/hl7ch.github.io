# Spital Small Hospital - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Spital Small Hospital**

## Example Organization: Spital Small Hospital

Profile: [CH Core Organization](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-organization.html)

**name**: Spital Small Hospital

**address**: Hausmatten Kammersrohr 4535 Schweiz 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "OrgSmallHospital",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
    ]
  },
  "name" : "Spital Small Hospital",
  "address" : [
    {
      "line" : ["Hausmatten"],
      "city" : "Kammersrohr",
      "postalCode" : "4535",
      "country" : "Schweiz"
    }
  ]
}

```
