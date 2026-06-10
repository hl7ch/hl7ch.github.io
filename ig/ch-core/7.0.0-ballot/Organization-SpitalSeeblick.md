# Spital Seeblick - CH Core (R4) v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Spital Seeblick**

## Example Organization: Spital Seeblick

Profiles: [CH Core Organization](StructureDefinition-ch-core-organization.md), [CH Core Organization EPR](StructureDefinition-ch-core-organization-epr.md)

**identifier**: [GLN](http://fhir.ch/ig/ch-term/3.4.0/NamingSystem-gln.html)/7601000618306

**type**: Hospital

**name**: Spital Seeblick

**telecom**: ph: 032 863 12 01

**address**: Ausblick 11 Zürich 8000 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "SpitalSeeblick",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization",
    "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization-epr"]
  },
  "identifier" : [{
    "system" : "urn:oid:2.51.1.3",
    "value" : "7601000618306"
  }],
  "type" : [{
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "22232009",
      "display" : "Hospital"
    }]
  }],
  "name" : "Spital Seeblick",
  "telecom" : [{
    "system" : "phone",
    "value" : "032 863 12 01"
  }],
  "address" : [{
    "line" : ["Ausblick 11"],
    "city" : "Zürich",
    "postalCode" : "8000"
  }]
}

```
