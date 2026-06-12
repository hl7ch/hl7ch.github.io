# SMC Identifier - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SMC Identifier**

## Data Type Profile: SMC Identifier 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-smc-loc-identifier | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:SMCLOCIdentifier |
| **Copyright/Legal**: CC0-1.0 | |

 
Identifier holding a number for Organisations registered at Swissmedic 

**Usages:**

* Use this DataType Profile: [Organization](StructureDefinition-ch-idmp-organization.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-idmp|current/StructureDefinition/StructureDefinition-ch-smc-loc-identifier.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-smc-loc-identifier.csv), [Excel](StructureDefinition-ch-smc-loc-identifier.xlsx), [Schematron](StructureDefinition-ch-smc-loc-identifier.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-smc-loc-identifier",
  "url" : "http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-smc-loc-identifier",
  "version" : "1.0.0-ballot",
  "name" : "SMCLOCIdentifier",
  "title" : "SMC Identifier",
  "status" : "active",
  "date" : "2026-06-12T16:17:59+00:00",
  "publisher" : "Refdata Foundation",
  "contact" : [{
    "name" : "Refdata Foundation",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.refdata.ch/de/"
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
