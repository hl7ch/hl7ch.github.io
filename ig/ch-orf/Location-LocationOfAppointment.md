# Location of Appointment - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Location of Appointment**

## Example Location: Location of Appointment

Profile: [CH ORF Location](StructureDefinition-ch-orf-location.md)

**name**: Appointment-Location

**telecom**: [+41 44 412 65 56](tel:+41444126556)

**address**: Seestrasse 133 Zürich 8000 Schweiz 



## Resource Content

```json
{
  "resourceType" : "Location",
  "id" : "LocationOfAppointment",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-location"
    ]
  },
  "name" : "Appointment-Location",
  "telecom" : [
    {
      "system" : "phone",
      "value" : "+41 44 412 65 56"
    }
  ],
  "address" : {
    "line" : ["Seestrasse 133"],
    "city" : "Zürich",
    "postalCode" : "8000",
    "country" : "Schweiz"
  }
}

```
