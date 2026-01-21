# CH ELM Organization: Lab - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Organization: Lab**

## Resource Profile: CH ELM Organization: Lab 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-organization-lab | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:ChElmOrganizationLab |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM base profile constrains the Organization resource for the reporting laboratory. 

**Usages:**

* Refer to this Profile: [CH ELM DiagnosticReport: Laboratory Report](StructureDefinition-ch-elm-diagnosticreport.md) and [CH ELM Observation Results: Laboratory](StructureDefinition-ch-elm-observation-results-laboratory.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-organization-lab)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-organization-lab.csv), [Excel](StructureDefinition-ch-elm-organization-lab.xlsx), [Schematron](StructureDefinition-ch-elm-organization-lab.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-organization-lab",
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-organization-lab",
  "version" : "1.13.1",
  "name" : "ChElmOrganizationLab",
  "title" : "CH ELM Organization: Lab",
  "status" : "active",
  "date" : "2026-01-21T11:21:00+00:00",
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
  "description" : "This CH ELM base profile constrains the Organization resource for the reporting laboratory.",
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
  "fhirVersion" : "4.0.1",
  "mapping" : [
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
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Organization",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Organization",
        "path" : "Organization",
        "short" : "CH ELM Organization: Lab"
      },
      {
        "id" : "Organization.identifier",
        "path" : "Organization.identifier",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Organization.identifier:BER",
        "path" : "Organization.identifier",
        "sliceName" : "BER",
        "max" : "0"
      },
      {
        "id" : "Organization.identifier:UIDB",
        "path" : "Organization.identifier",
        "sliceName" : "UIDB",
        "max" : "0"
      },
      {
        "id" : "Organization.identifier:ZSR",
        "path" : "Organization.identifier",
        "sliceName" : "ZSR",
        "max" : "0"
      },
      {
        "id" : "Organization.identifier:GLN",
        "path" : "Organization.identifier",
        "sliceName" : "GLN",
        "min" : 1
      },
      {
        "id" : "Organization.name",
        "path" : "Organization.name",
        "min" : 1,
        "maxLength" : 100
      }
    ]
  }
}

```
