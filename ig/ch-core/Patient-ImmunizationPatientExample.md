# Patient example for immunization - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patient example for immunization**

## Example Patient: Patient example for immunization

Profile: [CH Core Patient](StructureDefinition-ch-core-patient.md)

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
  "id" : "ImmunizationPatientExample",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
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
