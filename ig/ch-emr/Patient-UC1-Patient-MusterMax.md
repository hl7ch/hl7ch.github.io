# UC1-Patient-MusterMax - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC1-Patient-MusterMax**

## Example Patient: UC1-Patient-MusterMax

Profile: [CH IPS Patient](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-patient.html)

Max Muster (official) Male, DoB: 1964-01-01 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756011234567890123)

-------

| | |
| :--- | :--- |
| Contact Detail | Bahnhofstrasse 1 Zürich 8001 CH |
| Language: | German(preferred) |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "UC1-Patient-MusterMax",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:2.16.756.5.30.1.123.100.1.1.1",
    "value" : "80756011234567890123"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Muster",
    "given" : ["Max"]
  }],
  "gender" : "male",
  "birthDate" : "1964-01-01",
  "address" : [{
    "line" : ["Bahnhofstrasse 1"],
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
