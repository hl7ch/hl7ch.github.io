# CH EMED Organization - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED Organization**

## Resource Profile: CH EMED Organization 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-organization | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDOrganization |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the organization for the eMedication context 

**Usages:**

* Refer to this Profile: [CH EMED PractitionerRole](StructureDefinition-ch-emed-practitionerrole.md)
* Examples for this Profile: [Hausarzt](Organization-Hausarzt.md) and [Rettungsdienst](Organization-Rettungsdienst.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-organization)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-organization.csv), [Excel](StructureDefinition-ch-emed-organization.xlsx), [Schematron](StructureDefinition-ch-emed-organization.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-organization",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-organization",
  "version" : "6.0.0",
  "name" : "CHEMEDOrganization",
  "title" : "CH EMED Organization",
  "status" : "active",
  "date" : "2025-12-16T11:14:15+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Definition of the organization for the eMedication context",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization-epr",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Organization",
        "path" : "Organization",
        "short" : "CH EMED Organization"
      },
      {
        "id" : "Organization.address",
        "path" : "Organization.address",
        "min" : 1,
        "mustSupport" : true
      }
    ]
  }
}

```
