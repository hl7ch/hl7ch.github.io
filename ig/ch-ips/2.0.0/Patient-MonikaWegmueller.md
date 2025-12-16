# UC 1.1: Monika Wegmüller - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1.1: Monika Wegmüller**

## Example Patient: UC 1.1: Monika Wegmüller

Profile: [CH IPS Patient](StructureDefinition-ch-ips-patient.md)

Monika Wegmüller Female, DoB: 1943-05-15

-------

| | |
| :--- | :--- |
| Contact Detail | Wiesenstr. 12 Zürich 8003 CH |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "MonikaWegmueller",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-patient"
    ]
  },
  "name" : [
    {
      "family" : "Wegmüller",
      "given" : ["Monika"]
    }
  ],
  "gender" : "female",
  "birthDate" : "1943-05-15",
  "address" : [
    {
      "line" : ["Wiesenstr. 12"],
      "city" : "Zürich",
      "postalCode" : "8003",
      "country" : "CH"
    }
  ]
}

```
