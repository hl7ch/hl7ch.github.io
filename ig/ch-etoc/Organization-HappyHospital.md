# Innere Medizin Klinik Happy Hospital - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Innere Medizin Klinik Happy Hospital**

## Example Organization: Innere Medizin Klinik Happy Hospital

Profile: [CH Core Organization](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-organization.html)

**name**: Innere Medizin Klinik Happy Hospital

**address**: Kantonsstrasse 133 Haus C Zürich 8000 Schweiz 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "HappyHospital",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
    ]
  },
  "name" : "Innere Medizin Klinik Happy Hospital",
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
