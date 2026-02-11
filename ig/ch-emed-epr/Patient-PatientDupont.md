# Patient: Dupont - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patient: Dupont**

## Example Patient: Patient: Dupont

Profile: [CH EMED EPR Patient](StructureDefinition-ch-emed-epr-patient.md)

Jeanne Dupont Female, DoB: 1972-08-07 ( Medical record number)

-------

| | |
| :--- | :--- |
| Contact Detail | Wiesenstr. 12 Zürich 8003 CH |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "PatientDupont",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-patient"
    ]
  },
  "identifier" : [
    {
      "type" : {
        "coding" : [
          {
            "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
            "code" : "MR"
          }
        ]
      },
      "system" : "urn:oid:2.999.1",
      "value" : "11111111"
    }
  ],
  "name" : [
    {
      "family" : "Dupont",
      "given" : ["Jeanne"]
    }
  ],
  "gender" : "female",
  "birthDate" : "1972-08-07",
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
