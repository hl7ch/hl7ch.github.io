# Monika Wegmueller - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Monika Wegmueller**

## Example Patient: Monika Wegmueller

Profile: [CH Core Patient EPR](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-patient-epr.html)

Monika Wegmüller Female, DoB: 1943-05-15 ( Medical record number)

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
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-epr"
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
