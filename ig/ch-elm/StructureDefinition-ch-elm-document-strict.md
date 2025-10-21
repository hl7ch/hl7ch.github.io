# CH ELM Document: Laboratory Report (strict) - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Document: Laboratory Report (strict)**

## Resource Profile: CH ELM Document: Laboratory Report (strict) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict | *Version*:1.12.0 |
| Active as of 2025-10-21 | *Computable Name*:ChElmDocumentStrict |
| **Copyright/Legal**: CC0-1.0 | |

 
CH ELM profile for the Bundle resource with a stricter validation mechanism than the base profile via binding strength reinforcement for the leading code element and checking patient name requirements if possible. 

**Usages:**

* Use this Profile: [DocumentReference for sending the report with strict validation](StructureDefinition-PublishDocumentReferenceStrict.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-document-strict)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-document-strict.csv), [Excel](StructureDefinition-ch-elm-document-strict.xlsx), [Schematron](StructureDefinition-ch-elm-document-strict.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-document-strict",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Bundle-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict",
  "version" : "1.12.0",
  "name" : "ChElmDocumentStrict",
  "title" : "CH ELM Document: Laboratory Report (strict)",
  "status" : "active",
  "date" : "2025-10-21T11:52:21+00:00",
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
  "description" : "CH ELM profile for the Bundle resource with a stricter validation mechanism than the base profile via binding strength reinforcement for the leading code element and checking patient name requirements if possible.",
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
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Bundle",
  "baseDefinition" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Bundle.entry:Composition",
        "path" : "Bundle.entry",
        "sliceName" : "Composition"
      },
      {
        "id" : "Bundle.entry:Composition.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Composition",
            "profile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-composition-strict"
            ]
          }
        ]
      }
    ]
  }
}

```
