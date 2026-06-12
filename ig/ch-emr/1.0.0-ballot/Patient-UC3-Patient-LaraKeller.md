# UC3-Patient-LaraKeller - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC3-Patient-LaraKeller**

## Example Patient: UC3-Patient-LaraKeller

Profile: [CH IPS Patient](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-patient.html)

Lara Keller (official) Female, DoB: 1992-09-30 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756013333333333333)

-------

| | |
| :--- | :--- |
| Contact Detail | Sonnenrain 7 Bern 3011 CH |
| Language: | German(preferred) |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "UC3-Patient-LaraKeller",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:2.16.756.5.30.1.123.100.1.1.1",
    "value" : "80756013333333333333"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Keller",
    "given" : ["Lara"]
  }],
  "gender" : "female",
  "birthDate" : "1992-09-30",
  "address" : [{
    "line" : ["Sonnenrain 7"],
    "city" : "Bern",
    "postalCode" : "3011",
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
