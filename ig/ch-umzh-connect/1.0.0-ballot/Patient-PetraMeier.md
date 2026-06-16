# Petra Meier - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Petra Meier**

## Example Patient: Petra Meier

Profile: [CH Core Patient](http://fhir.ch/ig/ch-core/7.0.0-ballot/StructureDefinition-ch-core-patient.html)

Petra Meier Female, DoB: 1992-03-26 ( Medical record number)

-------

| | |
| :--- | :--- |
| Other Id: | [AHVN13](http://fhir.ch/ig/ch-term/3.3.0/NamingSystem-ahvn13.html)/7562295883070 |
| Contact Detail | * [+41 33 333 33 33](tel:+41333333333)
* Musterstrasse 1 Zürich 8000 Schweiz 
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "PetraMeier",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"]
  },
  "identifier" : [{
    "type" : {
      "coding" : [{
        "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
        "code" : "MR"
      }]
    },
    "system" : "urn:oid:2.999.1.2.3.4",
    "value" : "P06543"
  },
  {
    "system" : "urn:oid:2.16.756.5.32",
    "value" : "7562295883070"
  }],
  "name" : [{
    "family" : "Meier",
    "given" : ["Petra"]
  }],
  "telecom" : [{
    "system" : "phone",
    "value" : "+41 33 333 33 33",
    "use" : "home"
  }],
  "gender" : "female",
  "birthDate" : "1992-03-26",
  "address" : [{
    "line" : ["Musterstrasse 1"],
    "city" : "Zürich",
    "postalCode" : "8000",
    "country" : "Schweiz"
  }]
}

```
