# EX-Patient - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EX-Patient**

## Example Patient: EX-Patient

Profile: [CH IPS Patient](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-patient.html)

Anna Schmidt Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)

-------

| | |
| :--- | :--- |
| Contact Detail | * [+41 32 123 45 67](tel:+41321234567)
* [+41 79 585 65 43](tel:+41795856543)
* [anna.schmidt@example.ch](mailto:anna.schmidt@example.ch)
* Musterstrasse 123 Zürich 8001 CH 
 |
| Language: | German(preferred) |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "EX-Patient",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:2.16.756.5.30.1.123.100.1.1.1",
    "value" : "80756015090002647590"
  }],
  "name" : [{
    "family" : "Schmidt",
    "given" : ["Anna"]
  }],
  "telecom" : [{
    "system" : "phone",
    "value" : "+41 32 123 45 67",
    "use" : "home"
  },
  {
    "system" : "phone",
    "value" : "+41 79 585 65 43",
    "use" : "mobile"
  },
  {
    "system" : "email",
    "value" : "anna.schmidt@example.ch"
  }],
  "gender" : "female",
  "birthDate" : "1992-03-15",
  "address" : [{
    "line" : ["Musterstrasse 123"],
    "city" : "Zürich",
    "postalCode" : "8001",
    "country" : "CH"
  }],
  "communication" : [{
    "language" : {
      "coding" : [{
        "system" : "urn:ietf:bcp:47",
        "code" : "de"
      }]
    },
    "preferred" : true
  }]
}

```
