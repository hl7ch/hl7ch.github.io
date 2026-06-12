# UC5-Patient-AnnaMeier - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC5-Patient-AnnaMeier**

## Example Patient: UC5-Patient-AnnaMeier

Profile: [CH IPS Patient](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-patient.html)

Anna Meier (official) Female, DoB: 1972-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015555555555555)

-------

| | |
| :--- | :--- |
| Contact Detail | Lindenstrasse 5 Winterthur 8400 CH |
| Language: | German(preferred) |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "UC5-Patient-AnnaMeier",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-patient"]
  },
  "identifier" : [{
    "system" : "urn:oid:2.16.756.5.30.1.123.100.1.1.1",
    "value" : "80756015555555555555"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Meier",
    "given" : ["Anna"]
  }],
  "gender" : "female",
  "birthDate" : "1972-03-15",
  "address" : [{
    "line" : ["Lindenstrasse 5"],
    "city" : "Winterthur",
    "postalCode" : "8400",
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
