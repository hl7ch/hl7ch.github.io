# Location Radiography - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Location Radiography**

## Example Location: Location Radiography

Profile: [CH ORF Location](http://fhir.ch/ig/ch-orf/3.0.2/StructureDefinition-ch-orf-location.html)

**name**: Radiologie Klinik Happy Hospital

**telecom**: [+41 44 412 65 56](tel:+41444126556)

**address**: Kantonsstrasse 133 Haus C Zürich 8000 Schweiz 



## Resource Content

```json
{
  "resourceType" : "Location",
  "id" : "LocationRadiography",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-location"
    ]
  },
  "name" : "Radiologie Klinik Happy Hospital",
  "telecom" : [
    {
      "system" : "phone",
      "value" : "+41 44 412 65 56"
    }
  ],
  "address" : {
    "line" : ["Kantonsstrasse 133", "Haus C"],
    "city" : "Zürich",
    "postalCode" : "8000",
    "country" : "Schweiz"
  }
}

```
