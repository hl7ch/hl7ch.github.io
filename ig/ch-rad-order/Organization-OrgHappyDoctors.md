# Gemeinschaftspraxis Happy Doctors - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Gemeinschaftspraxis Happy Doctors**

## Example Organization: Gemeinschaftspraxis Happy Doctors

Profile: [CH Core Organization](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-organization.html)

**name**: Praxis Happy Doctors

**address**: Happystrasse 14 Zürich 8000 Schweiz 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "OrgHappyDoctors",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
    ]
  },
  "name" : "Praxis Happy Doctors",
  "address" : [
    {
      "line" : ["Happystrasse 14"],
      "city" : "Zürich",
      "postalCode" : "8000",
      "country" : "Schweiz"
    }
  ]
}

```
