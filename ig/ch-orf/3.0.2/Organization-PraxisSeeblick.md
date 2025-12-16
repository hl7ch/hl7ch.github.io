# Praxis Seeblick - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Praxis Seeblick**

## Example Organization: Praxis Seeblick

Profile: [CH Core Organization](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-organization.html)

**name**: Praxis Seeblick

**address**: Seestrasse 133 Haus C Zürich 8000 Schweiz 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "PraxisSeeblick",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
    ]
  },
  "name" : "Praxis Seeblick",
  "address" : [
    {
      "line" : ["Seestrasse 133", "Haus C"],
      "city" : "Zürich",
      "postalCode" : "8000",
      "country" : "Schweiz"
    }
  ]
}

```
