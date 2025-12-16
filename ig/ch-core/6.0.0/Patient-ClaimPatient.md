# Peter Muster - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Peter Muster**

## Example Patient: Peter Muster

Profile: [CH Core Patient](StructureDefinition-ch-core-patient.md)

Peter Muster Male, DoB: 1964-05-14 ( urn:oid:2.16.756.5.32#7562295883070)

-------

| | |
| :--- | :--- |
| Other Id: | `urn:oid:2.16.756.5.30.1.123.100.1.1.1`/80756078901234567890 (, period: (?) --> 2018-03-03) |
| Contact Detail | Musterstrasse 5 Maienfeld 7304 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "ClaimPatient",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.16.756.5.32",
      "value" : "7562295883070"
    },
    {
      "system" : "urn:oid:2.16.756.5.30.1.123.100.1.1.1",
      "value" : "80756078901234567890",
      "period" : {
        "end" : "2018-03-03"
      }
    }
  ],
  "name" : [
    {
      "family" : "Muster",
      "given" : ["Peter"],
      "prefix" : ["Herr"]
    }
  ],
  "gender" : "male",
  "birthDate" : "1964-05-14",
  "address" : [
    {
      "line" : ["Musterstrasse 5"],
      "city" : "Maienfeld",
      "postalCode" : "7304"
    }
  ]
}

```
