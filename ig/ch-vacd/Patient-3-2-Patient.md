# 3.2 Patient - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **3.2 Patient**

## Example Patient: 3.2 Patient

Profile: [CH Core Patient EPR](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-patient-epr.html)

Monika Wegmueller Female, DoB: 1967-03-10 ( Medical record number)

-------

| | |
| :--- | :--- |
| Contact Detail | 9876 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "3-2-Patient",
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
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "12345678"
    }
  ],
  "name" : [
    {
      "family" : "Wegmueller",
      "given" : ["Monika"]
    }
  ],
  "gender" : "female",
  "birthDate" : "1967-03-10",
  "address" : [
    {
      "postalCode" : "9876"
    }
  ]
}

```
