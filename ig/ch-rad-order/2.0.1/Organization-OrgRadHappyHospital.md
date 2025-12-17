# Radiologie Klinik Happy Hospital - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Radiologie Klinik Happy Hospital**

## Example Organization: Radiologie Klinik Happy Hospital

Profile: [CH Core Organization](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-organization.html)

**name**: Radiologie Klinik Happy Hospital

**address**: Kantonsstrasse 133 Haus C Zürich 8000 Schweiz 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "OrgRadHappyHospital",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
    ]
  },
  "name" : "Radiologie Klinik Happy Hospital",
  "address" : [
    {
      "line" : ["Kantonsstrasse 133", "Haus C"],
      "city" : "Zürich",
      "postalCode" : "8000",
      "country" : "Schweiz"
    }
  ]
}

```
