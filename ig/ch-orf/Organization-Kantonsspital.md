# Kantonsspital - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Kantonsspital**

## Example Organization: Kantonsspital

Profile: [CH Core Organization](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-organization.html)

**name**: Kantonsspital

**address**: Kantonsstrasse 14 Postfach 14 Zürich 8000 Schweiz 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "Kantonsspital",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
    ]
  },
  "name" : "Kantonsspital",
  "address" : [
    {
      "line" : ["Kantonsstrasse 14", "Postfach 14"],
      "city" : "Zürich",
      "postalCode" : "8000",
      "country" : "Schweiz"
    }
  ]
}

```
