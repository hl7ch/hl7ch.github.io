# CH VACD Travel Location - Implementation Guide CH VACD v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Travel Location**

## Resource Profile: CH VACD Travel Location 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-travel-location | *Version*:7.0.0-ballot |
| Active as of 2026-06-11 | *Computable Name*:CHVACDTravelLocation |
| **Copyright/Legal**: CC0-1.0 | |

 
Travel Location for ImmunizationRecommendation for travel vaccinations. 

**Usages:**

* Refer to this Profile: [CH VACD Travel Information](StructureDefinition-ch-vacd-travel-information.md)
* Examples for this Profile: [Mein Traumziel](Location-8-10-Condition-Travel-Location.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-vacd|current/StructureDefinition/StructureDefinition-ch-vacd-travel-location.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-vacd-travel-location.csv), [Excel](StructureDefinition-ch-vacd-travel-location.xlsx), [Schematron](StructureDefinition-ch-vacd-travel-location.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-vacd-travel-location",
  "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-travel-location",
  "version" : "7.0.0-ballot",
  "name" : "CHVACDTravelLocation",
  "title" : "CH VACD Travel Location",
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
  "description" : "Travel Location for ImmunizationRecommendation for travel vaccinations.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CHE"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Location",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Location",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Location",
      "path" : "Location"
    },
    {
      "id" : "Location.status",
      "path" : "Location.status",
      "min" : 1,
      "patternCode" : "active"
    },
    {
      "id" : "Location.mode",
      "path" : "Location.mode",
      "patternCode" : "instance"
    },
    {
      "id" : "Location.type",
      "path" : "Location.type",
      "max" : "0"
    },
    {
      "id" : "Location.telecom",
      "path" : "Location.telecom",
      "max" : "0"
    },
    {
      "id" : "Location.address",
      "path" : "Location.address",
      "min" : 1,
      "type" : [{
        "code" : "Address",
        "profile" : ["http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-travel-location-address"]
      }]
    },
    {
      "id" : "Location.physicalType",
      "path" : "Location.physicalType",
      "max" : "0"
    },
    {
      "id" : "Location.managingOrganization",
      "path" : "Location.managingOrganization",
      "max" : "0"
    },
    {
      "id" : "Location.partOf",
      "path" : "Location.partOf",
      "max" : "0"
    },
    {
      "id" : "Location.hoursOfOperation",
      "path" : "Location.hoursOfOperation",
      "max" : "0"
    },
    {
      "id" : "Location.availabilityExceptions",
      "path" : "Location.availabilityExceptions",
      "max" : "0"
    },
    {
      "id" : "Location.endpoint",
      "path" : "Location.endpoint",
      "max" : "0"
    }]
  }
}

```
