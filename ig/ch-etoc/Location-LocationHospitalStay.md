# Location Hospital Stay - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Location Hospital Stay**

## Example Location: Location Hospital Stay

Profile: [CH ORF Location](http://fhir.ch/ig/ch-orf/3.0.2/StructureDefinition-ch-orf-location.html)

**name**: Innere Medizin Happy Hospital

**telecom**: [+41 44 412 65 56](tel:+41444126556)

**address**: Kantonsstrasse 133 Zürich 8000 Schweiz 



## Resource Content

```json
{
  "resourceType" : "Location",
  "id" : "LocationHospitalStay",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-location"
    ]
  },
  "name" : "Innere Medizin Happy Hospital",
  "telecom" : [
    {
      "system" : "phone",
      "value" : "+41 44 412 65 56"
    }
  ],
  "address" : {
    "line" : ["Kantonsstrasse 133"],
    "city" : "Zürich",
    "postalCode" : "8000",
    "country" : "Schweiz"
  }
}

```
