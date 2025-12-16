# TC patient 1 - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **TC patient 1**

## Patient: TC patient 1

Profile: [CH Core Patient EPR](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-patient-epr.html)

Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)

-------

| | |
| :--- | :--- |
| Contact Detail | * ph: tel:+41.32.685.12.34(Home)
* Leidensweg 10 Specimendorf 9876 CH 
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "TC-patient",
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
  "telecom" : [
    {
      "system" : "phone",
      "value" : "tel:+41.32.685.12.34",
      "use" : "home"
    }
  ],
  "gender" : "female",
  "birthDate" : "1967-02-10",
  "address" : [
    {
      "type" : "both",
      "line" : ["Leidensweg 10"],
      "city" : "Specimendorf",
      "postalCode" : "9876",
      "country" : "CH"
    }
  ]
}

```
