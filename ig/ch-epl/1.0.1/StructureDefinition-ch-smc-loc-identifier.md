# SMC Identifier - CH EPL (R5) v1.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SMC Identifier**

## Data Type Profile: SMC Identifier 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/StructureDefinition/ch-smc-loc-identifier | *Version*:1.0.1 |
| Active as of 2026-04-07 | *Computable Name*:SMCLOCIdentifier |
| **Copyright/Legal**: CC0-1.0 | |

 
Identifier holding a number for Organisations registered at Swissmedic 

**Usages:**

* Use this DataType Profile: [Organization](StructureDefinition-ch-idmp-organization.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epl|current/StructureDefinition/ch-smc-loc-identifier)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-smc-loc-identifier.csv), [Excel](StructureDefinition-ch-smc-loc-identifier.xlsx), [Schematron](StructureDefinition-ch-smc-loc-identifier.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-smc-loc-identifier",
  "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-smc-loc-identifier",
  "version" : "1.0.1",
  "name" : "SMCLOCIdentifier",
  "title" : "SMC Identifier",
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
  "description" : "Identifier holding a number for Organisations registered at Swissmedic",
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
      "id" : "Identifier.system",
      "path" : "Identifier.system",
      "short" : "SMCLocID",
      "min" : 1,
      "fixedUri" : "https://www.swissmedic.ch/fhir/identifier/locations"
    },
    {
      "id" : "Identifier.value",
      "path" : "Identifier.value",
      "short" : "SMCLocID",
      "min" : 1
    }]
  }
}

```
