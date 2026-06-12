# UC4-Practitioner-Hausarzt - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC4-Practitioner-Hausarzt**

## Example Practitioner: UC4-Practitioner-Hausarzt

Language: de-CH

Profile: [CH IPS Practitioner](http://fhir.ch/ig/ch-ips/2.0.0/StructureDefinition-ch-ips-practitioner.html)

**identifier**: [GLN](http://fhir.ch/ig/ch-term/3.3.0/NamingSystem-gln.html)/7601000000071

**name**: UC4 Hausarzt (Official)

### Qualifications

| | |
| :--- | :--- |
| - | **Code** |
| * | Arzt |



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "UC4-Practitioner-Hausarzt",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-practitioner"]
  },
  "language" : "de-CH",
  "identifier" : [{
    "system" : "urn:oid:2.51.1.3",
    "value" : "7601000000071"
  }],
  "name" : [{
    "use" : "official",
    "family" : "Hausarzt",
    "given" : ["UC4"],
    "prefix" : ["Dr. med."]
  }],
  "qualification" : [{
    "code" : {
      "coding" : [{
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/2011000195101",
        "code" : "309343006"
      }],
      "text" : "Arzt"
    }
  }]
}

```
