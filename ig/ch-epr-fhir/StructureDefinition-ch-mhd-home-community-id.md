# CH MHD Extension to provide the homeCommunityId - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH MHD Extension to provide the homeCommunityId**

## Extension: CH MHD Extension to provide the homeCommunityId 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-home-community-id | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:ChMhdHomeCommunityId |
| **Copyright/Legal**: CC0-1.0 | |

This CH MHD extension enables to provide homeCommunityId in an OperationOutcome

**Context of Use**

**Usage info**

**Usages:**

* Examples for this Extension: [Bundle/ch-atc-iti-81-response-sample](Bundle-ch-atc-iti-81-response-sample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/ch-mhd-home-community-id)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-mhd-home-community-id.csv), [Excel](StructureDefinition-ch-mhd-home-community-id.xlsx), [Schematron](StructureDefinition-ch-mhd-home-community-id.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-mhd-home-community-id",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-home-community-id",
  "version" : "5.0.0",
  "name" : "ChMhdHomeCommunityId",
  "title" : "CH MHD Extension to provide the homeCommunityId",
  "status" : "active",
  "date" : "2025-12-18T15:54:33+00:00",
  "publisher" : "eHealth Suisse",
  "contact" : [
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch"
        }
      ]
    },
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "This CH MHD extension enables to provide homeCommunityId in an OperationOutcome",
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
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [
    {
      "type" : "element",
      "expression" : "OperationOutcome.issue.details"
    }
  ],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension",
        "path" : "Extension",
        "short" : "CH MHD Extension: homeCommunityId"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-home-community-id"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "short" : "Value of the homeCommunityId",
        "min" : 1,
        "type" : [
          {
            "code" : "Identifier"
          }
        ]
      }
    ]
  }
}

```
