# CH EMED Extension Last Considered Document - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED Extension Last Considered Document**

## Extension: CH EMED Extension Last Considered Document 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-last-considered-document | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDExtLastConsideredDocument |
| **Copyright/Legal**: CC0-1.0 | |

Extension including the identifier of the last considered document for consolidating this MedicationStatement.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH EMED MedicationStatement (CARD)](StructureDefinition-ch-emed-medicationstatement-card.md)
* Examples for this Extension: [MedicationStatement/NotRecommendedTimingCodes](MedicationStatement-NotRecommendedTimingCodes.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-ext-last-considered-document)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-ext-last-considered-document.csv), [Excel](StructureDefinition-ch-emed-ext-last-considered-document.xlsx), [Schematron](StructureDefinition-ch-emed-ext-last-considered-document.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-ext-last-considered-document",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-last-considered-document",
  "version" : "6.0.0",
  "name" : "CHEMEDExtLastConsideredDocument",
  "title" : "CH EMED Extension Last Considered Document",
  "status" : "active",
  "date" : "2025-12-16T11:07:13+00:00",
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
  "description" : "Extension including the identifier of the last considered document for consolidating this MedicationStatement.",
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
      "expression" : "MedicationStatement"
    }
  ],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-last-considered-document"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "short" : "Identifier of the last considered document",
        "min" : 1,
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-uuid-identifier"
            ]
          }
        ]
      }
    ]
  }
}

```
