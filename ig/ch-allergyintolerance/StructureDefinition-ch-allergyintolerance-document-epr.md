# CH AllergyIntolerance Document - CH AllergyIntolerance (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH AllergyIntolerance Document**

## Resource Profile: CH AllergyIntolerance Document 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-allergyintolerance/StructureDefinition/ch-allergyintolerance-document-epr | *Version*:3.0.1 |
| Active as of 2025-12-16 | *Computable Name*:CHAllergyIntoleranceDocumentEPR |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the bundle for the allergy intolerance document 

**Usages:**

* Examples for this Profile: [Bundle/ch-allergyintolerance-document-example](Bundle-ch-allergyintolerance-document-example.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-allergyintolerance|current/StructureDefinition/ch-allergyintolerance-document-epr)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-allergyintolerance-document-epr.csv), [Excel](StructureDefinition-ch-allergyintolerance-document-epr.xlsx), [Schematron](StructureDefinition-ch-allergyintolerance-document-epr.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-allergyintolerance-document-epr",
  "url" : "http://fhir.ch/ig/ch-allergyintolerance/StructureDefinition/ch-allergyintolerance-document-epr",
  "version" : "3.0.1",
  "name" : "CHAllergyIntoleranceDocumentEPR",
  "title" : "CH AllergyIntolerance Document",
  "status" : "active",
  "date" : "2025-12-16T16:31:02+00:00",
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
  "description" : "Definition of the bundle for the allergy intolerance document",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-document-epr",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Bundle",
        "path" : "Bundle",
        "short" : "CH AllergyIntolerance Document"
      },
      {
        "id" : "Bundle.identifier",
        "path" : "Bundle.identifier",
        "short" : "Identification number of the document"
      },
      {
        "id" : "Bundle.timestamp",
        "path" : "Bundle.timestamp",
        "short" : "The document's creation date and time"
      },
      {
        "id" : "Bundle.entry:Composition",
        "path" : "Bundle.entry",
        "sliceName" : "Composition",
        "short" : "Allergy Intolerance composition"
      },
      {
        "id" : "Bundle.entry:Composition.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "Composition",
            "profile" : [
              "http://fhir.ch/ig/ch-allergyintolerance/StructureDefinition/ch-allergyintolerance-composition-epr"
            ]
          }
        ]
      }
    ]
  }
}

```
