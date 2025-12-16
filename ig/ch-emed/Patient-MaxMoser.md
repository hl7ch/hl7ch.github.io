# Max Moser - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Max Moser**

## Example Patient: Max Moser

Profile: [CH Core Patient EPR](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-patient-epr.html)

Max Moser Male, DoB: 1988-11-27 ( Medical record number)

-------

| | |
| :--- | :--- |
| Contact Detail | Schneefeld 5a Bern 3006 CH |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "MaxMoser",
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
      "value" : "123456"
    }
  ],
  "name" : [
    {
      "family" : "Moser",
      "given" : ["Max"]
    }
  ],
  "gender" : "male",
  "birthDate" : "1988-11-27",
  "address" : [
    {
      "line" : ["Schneefeld 5a"],
      "city" : "Bern",
      "postalCode" : "3006",
      "country" : "CH"
    }
  ]
}

```
