# EMA LOC Identifier - CH EPL (R5) v1.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EMA LOC Identifier**

## Data Type Profile: EMA LOC Identifier 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/StructureDefinition/ch-ema-loc-identifier | *Version*:1.0.1 |
| Active as of 2026-04-07 | *Computable Name*:EMALOCIdentifier |
| **Copyright/Legal**: CC0-1.0 | |

 
Identifier holding a number for LocID (Location Identifier of the European Medicines Agency - Organisation Management System OMS) 

**Usages:**

* Use this DataType Profile: [Organization](StructureDefinition-ch-idmp-organization.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epl|current/StructureDefinition/ch-ema-loc-identifier)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ema-loc-identifier.csv), [Excel](StructureDefinition-ch-ema-loc-identifier.xlsx), [Schematron](StructureDefinition-ch-ema-loc-identifier.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ema-loc-identifier",
  "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-ema-loc-identifier",
  "version" : "1.0.1",
  "name" : "EMALOCIdentifier",
  "title" : "EMA LOC Identifier",
  "status" : "active",
  "date" : "2026-04-07T14:04:04+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [{
    "name" : "Federal Office of Public Health FOPH",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
    }]
  }],
  "description" : "Identifier holding a number for LocID (Location Identifier of the European Medicines Agency - Organisation Management System OMS)",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "5.0.0",
  "mapping" : [{
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 V2 Mapping"
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
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "Identifier",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Identifier",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Identifier",
      "path" : "Identifier"
    },
    {
      "id" : "Identifier.system",
      "path" : "Identifier.system",
      "short" : "EMALocID",
      "min" : 1,
      "fixedUri" : "https://spor.ema.europa.eu/v1/locations"
    },
    {
      "id" : "Identifier.value",
      "path" : "Identifier.value",
      "short" : "EMALocID",
      "min" : 1
    }]
  }
}

```
