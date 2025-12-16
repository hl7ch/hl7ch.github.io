# TC patient 2 - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TC patient 2**

## Patient: TC patient 2

Profile: [CH Core Patient EPR](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-patient-epr.html)

Lea Knecht Female, DoB: 1992-05-14 ( Medical record number)

-------

| | |
| :--- | :--- |
| Contact Detail | * ph: tel:+41.32.685.45.67(Home)
* Mustergasse 99 Specimendorf 9876 CH 
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "TC-patient2",
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
      "value" : "987654"
    }
  ],
  "name" : [
    {
      "family" : "Knecht",
      "given" : ["Lea"]
    }
  ],
  "telecom" : [
    {
      "system" : "phone",
      "value" : "tel:+41.32.685.45.67",
      "use" : "home"
    }
  ],
  "gender" : "female",
  "birthDate" : "1992-05-14",
  "address" : [
    {
      "type" : "both",
      "line" : ["Mustergasse 99"],
      "city" : "Specimendorf",
      "postalCode" : "9876",
      "country" : "CH"
    }
  ]
}

```
