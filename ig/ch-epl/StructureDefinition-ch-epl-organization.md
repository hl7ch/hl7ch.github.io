# CH EPL Organization - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPL Organization**

## Resource Profile: CH EPL Organization 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/StructureDefinition/ch-epl-organization | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:CHEPLOrganization |
| **Copyright/Legal**: CC0-1.0 | |

 
Defines basic constraints and extensions on the Organization resource for use with other CH EPL resources 

**Usages:**

* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epl|current/StructureDefinition/ch-epl-organization)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-epl-organization.csv), [Excel](StructureDefinition-ch-epl-organization.xlsx), [Schematron](StructureDefinition-ch-epl-organization.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-epl-organization",
  "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-epl-organization",
  "version" : "1.0.0",
  "name" : "CHEPLOrganization",
  "title" : "CH EPL Organization",
  "status" : "active",
  "date" : "2025-12-11T12:35:50+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "Defines basic constraints and extensions on the Organization resource for use with other CH EPL resources",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "5.0.0",
  "mapping" : [
    {
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
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Organization",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Organization",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Organization",
        "path" : "Organization",
        "short" : "CH EPL Organization"
      },
      {
        "id" : "Organization.identifier",
        "path" : "Organization.identifier",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Organization.identifier:LocID",
        "path" : "Organization.identifier",
        "sliceName" : "LocID",
        "short" : "LocID (Organisation Management System)",
        "definition" : "See [LocID](https://spor.ema.europa.eu/rmswi/#/)",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-smc-loc-identifier"
            ]
          }
        ],
        "patternIdentifier" : {
          "system" : "urn:oid:1.2.276.0.76"
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
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-core-gln-identifier"
            ]
          }
        ],
        "patternIdentifier" : {
          "system" : "urn:oid:2.51.1.3"
        }
      }
    ]
  }
}

```
