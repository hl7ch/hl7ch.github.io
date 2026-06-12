# UC2-Patient-WalterSchmid - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC2-Patient-WalterSchmid**

## Example Patient: UC2-Patient-WalterSchmid

Profile: [CH IPS Patient](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-patient.html)

Walter Schmid (official) Male, DoB: 1947-04-12 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756012222222222222)

-------

| | |
| :--- | :--- |
| Contact Detail | Seestrasse 22 Luzern 6003 CH |
| Language: | German(preferred) |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "UC2-Patient-WalterSchmid",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:2.16.756.5.30.1.123.100.1.1.1",
    "value" : "80756012222222222222"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Schmid",
    "given" : ["Walter"]
  }],
  "gender" : "male",
  "birthDate" : "1947-04-12",
  "address" : [{
    "line" : ["Seestrasse 22"],
    "city" : "Luzern",
    "postalCode" : "6003",
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
