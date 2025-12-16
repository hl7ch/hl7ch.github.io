# CH eTOC Document - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH eTOC Document**

## Resource Profile: CH eTOC Document 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-document | *Version*:3.0.1 |
| Active as of 2025-12-16 | *Computable Name*:ChEtocDocument |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition for the Bundle (document) resource in the context of electronic transition of care. 

**Usages:**

* Examples for this Profile: [Bundle/DocumentEtoc](Bundle-DocumentEtoc.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-etoc|current/StructureDefinition/ch-etoc-document)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-etoc-document.csv), [Excel](StructureDefinition-ch-etoc-document.xlsx), [Schematron](StructureDefinition-ch-etoc-document.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-etoc-document",
  "url" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-document",
  "version" : "3.0.1",
  "name" : "ChEtocDocument",
  "title" : "CH eTOC Document",
  "status" : "active",
  "date" : "2025-12-16T15:53:41+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "Juerg P. Bleuer",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    }
  ],
  "description" : "Definition for the Bundle (document) resource in the context of electronic transition of care.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-document",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Bundle",
        "path" : "Bundle",
        "short" : "CH eTOC Bundle (document)",
        "definition" : "This IG follows the IHE Scheduled Workflow (SWF) Profile: \nAn Order Filler accepts from an Order Placer a single Order that it equates to a Filler Order \n(which is concept commonly used in HL7) or imaging Service Request (Concept commonly used in DICOM). \nConsequently one CH eTOC Document contains one eTOC ServiceRequest which depicts one Placer Order \nequal one Filler Order equal one imaging Service Request."
      },
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
            "code" : "Resource",
            "profile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-composition"
            ]
          }
        ]
      }
    ]
  }
}

```
