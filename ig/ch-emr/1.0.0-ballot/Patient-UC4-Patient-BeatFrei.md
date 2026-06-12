# UC4-Patient-BeatFrei - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC4-Patient-BeatFrei**

## Example Patient: UC4-Patient-BeatFrei

Profile: [CH IPS Patient](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-patient.html)

Beat Frei (official) Male, DoB: 1968-07-22 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756014444444444444)

-------

| | |
| :--- | :--- |
| Contact Detail | Hauptstrasse 12 Basel 4051 CH |
| Language: | German(preferred) |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "UC4-Patient-BeatFrei",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:2.16.756.5.30.1.123.100.1.1.1",
    "value" : "80756014444444444444"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Frei",
    "given" : ["Beat"]
  }],
  "gender" : "male",
  "birthDate" : "1968-07-22",
  "address" : [{
    "line" : ["Hauptstrasse 12"],
    "city" : "Basel",
    "postalCode" : "4051",
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
