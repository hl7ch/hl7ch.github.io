# Organization - CH EPL (R5) v1.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Organization**

## Resource Profile: Organization 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-organization | *Version*:1.0.1 |
| Active as of 2026-04-07 | *Computable Name*:CHIDMPOrganization |
| **Copyright/Legal**: CC0-1.0 | |

 
Defines basic constraints and extensions on the Organization resource for use with other CH EPL resources 

**Usages:**

* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epl|current/StructureDefinition/ch-idmp-organization)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-idmp-organization.csv), [Excel](StructureDefinition-ch-idmp-organization.xlsx), [Schematron](StructureDefinition-ch-idmp-organization.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-idmp-organization",
  "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-organization",
  "version" : "1.0.1",
  "name" : "CHIDMPOrganization",
  "title" : "Organization",
  "status" : "active",
  "date" : "2026-04-07T14:09:25+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [{
    "name" : "Federal Office of Public Health FOPH",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
    }]
  }],
  "description" : "Defines basic constraints and extensions on the Organization resource for use with other CH EPL resources",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "5.0.0",
  "mapping" : [{
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
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
    "identity" : "interface",
    "uri" : "http://hl7.org/fhir/interface",
    "name" : "Interface Pattern"
  },
  {
    "identity" : "servd",
    "uri" : "http://www.omg.org/spec/ServD/1.0/",
    "name" : "ServD"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Organization",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Organization",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Organization",
      "path" : "Organization",
      "short" : "Organization"
    },
    {
      "id" : "Organization.identifier",
      "path" : "Organization.identifier",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "system"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "Organization.identifier:SMCLocID",
      "path" : "Organization.identifier",
      "sliceName" : "SMCLocID",
      "short" : "SMCLocID  Swissmedic Location Identifier",
      "definition" : "See [SMCLocID] (https://www.swissmedic.ch/fhir/identifier/locations)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Identifier",
        "profile" : ["http://fhir.ch/ig/ch-epl/StructureDefinition/ch-smc-loc-identifier"]
      }],
      "patternIdentifier" : {
        "system" : "https://www.swissmedic.ch/fhir/identifier/locations"
      }
    },
    {
      "id" : "Organization.identifier:EMALocID",
      "path" : "Organization.identifier",
      "sliceName" : "EMALocID",
      "short" : "EMALocID (Organisation Management System)",
      "definition" : "See [EMALocID](https://spor.ema.europa.eu/rmswi/#/)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Identifier",
        "profile" : ["http://fhir.ch/ig/ch-epl/StructureDefinition/ch-ema-loc-identifier"]
      }],
      "patternIdentifier" : {
        "system" : "https://spor.ema.europa.eu/v1/locations"
      }
    },
    {
      "id" : "Organization.identifier:GLN",
      "path" : "Organization.identifier",
      "sliceName" : "GLN",
      "short" : "Global Location Number (GLN)",
      "definition" : "See [GLN](http://fhir.ch/ig/ch-core/NamingSystem/gln)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Identifier",
        "profile" : ["http://fhir.ch/ig/ch-epl/StructureDefinition/ch-core-gln-identifier"]
      }],
      "patternIdentifier" : {
        "system" : "urn:oid:2.51.1.3"
      }
    }]
  }
}

```
