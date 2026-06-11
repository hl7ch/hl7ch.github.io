# CH VACD Travel Location Address - Implementation Guide CH VACD v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Travel Location Address**

## Data Type Profile: CH VACD Travel Location Address 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-travel-location-address | *Version*:7.0.0-ballot |
| Active as of 2026-06-11 | *Computable Name*:CHVACDTravelLocationAddress |
| **Copyright/Legal**: CC0-1.0 | |

 
Datatype for travel location address 

**Usages:**

* Use this DataType Profile: [CH VACD Travel Location](StructureDefinition-ch-vacd-travel-location.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-vacd|current/StructureDefinition/StructureDefinition-ch-vacd-travel-location-address.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-vacd-travel-location-address.csv), [Excel](StructureDefinition-ch-vacd-travel-location-address.xlsx), [Schematron](StructureDefinition-ch-vacd-travel-location-address.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-vacd-travel-location-address",
  "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-travel-location-address",
  "version" : "7.0.0-ballot",
  "name" : "CHVACDTravelLocationAddress",
  "title" : "CH VACD Travel Location Address",
  "status" : "active",
  "date" : "2026-06-11T13:35:24+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  }],
  "description" : "Datatype for travel location address",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CHE"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "eCH-0011",
    "uri" : "http://www.ech.ch/standards/39485",
    "name" : "eCH-0011 Datenstandard Personendaten"
  },
  {
    "identity" : "eCH",
    "uri" : "https://www.ech.ch/",
    "name" : "eCH Standards"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "servd",
    "uri" : "http://www.omg.org/spec/ServD/1.0/",
    "name" : "ServD"
  },
  {
    "identity" : "vcard",
    "uri" : "http://w3.org/vcard",
    "name" : "vCard Mapping"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "Address",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-address",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Address",
      "path" : "Address"
    },
    {
      "id" : "Address.use",
      "path" : "Address.use",
      "patternCode" : "temp"
    },
    {
      "id" : "Address.type",
      "path" : "Address.type",
      "patternCode" : "physical"
    },
    {
      "id" : "Address.country",
      "path" : "Address.country",
      "min" : 1
    },
    {
      "id" : "Address.period",
      "path" : "Address.period",
      "max" : "0"
    }]
  }
}

```
