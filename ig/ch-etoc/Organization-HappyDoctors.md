# Praxis Happy Doctors - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Praxis Happy Doctors**

## Example Organization: Praxis Happy Doctors

Profile: [CH Core Organization](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-organization.html)

**name**: Praxis Happy Docotors

**address**: Happystrasse 14 Postfach 14 Zürich 8000 Schweiz 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "HappyDoctors",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
    ]
  },
  "name" : "Praxis Happy Docotors",
  "address" : [
    {
      "line" : ["Happystrasse 14", "Postfach 14"],
      "city" : "Zürich",
      "postalCode" : "8000",
      "country" : "Schweiz"
    }
  ]
}

```
