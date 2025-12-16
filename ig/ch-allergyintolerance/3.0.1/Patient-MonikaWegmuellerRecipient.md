# Monika Wegmueller as Information Recipient - CH AllergyIntolerance (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Monika Wegmueller as Information Recipient**

## Patient: Monika Wegmueller as Information Recipient

Profile: [CH Core Patient](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-patient.html)

Monika Wegmüller (no stated gender), DoB Unknown

-------

| | |
| :--- | :--- |
| Contact Detail | Wiesenstr. 12 Zürich 8003 CH |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "MonikaWegmuellerRecipient",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
    ]
  },
  "name" : [
    {
      "family" : "Wegmüller",
      "given" : ["Monika"]
    }
  ],
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
