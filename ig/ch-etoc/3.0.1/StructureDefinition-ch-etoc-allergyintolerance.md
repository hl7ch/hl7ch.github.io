# CH eTOC Allergy Intolerance - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH eTOC Allergy Intolerance**

## Resource Profile: CH eTOC Allergy Intolerance 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-allergyintolerance | *Version*:3.0.1 |
| Active as of 2025-12-16 | *Computable Name*:ChEtocAllergyIntolerance |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition for the Allergy Intolerance resource in the context of electronic transition of care. 

**Usages:**

* Refer to this Profile: [CH eTOC Composition](StructureDefinition-ch-etoc-composition.md) and [CH eTOC Service Request](StructureDefinition-ch-etoc-servicerequest.md)
* Examples for this Profile: [AllergyIntolerance/AllergyIntolerance](AllergyIntolerance-AllergyIntolerance.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-etoc|current/StructureDefinition/ch-etoc-allergyintolerance)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-etoc-allergyintolerance.csv), [Excel](StructureDefinition-ch-etoc-allergyintolerance.xlsx), [Schematron](StructureDefinition-ch-etoc-allergyintolerance.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-etoc-allergyintolerance",
  "url" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-allergyintolerance",
  "version" : "3.0.1",
  "name" : "ChEtocAllergyIntolerance",
  "title" : "CH eTOC Allergy Intolerance",
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
  "description" : "Definition for the Allergy Intolerance resource in the context of electronic transition of care.",
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
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "AllergyIntolerance",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-allergyintolerance",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "AllergyIntolerance",
        "path" : "AllergyIntolerance",
        "short" : "CH eTOC Allergy Intolerance"
      },
      {
        "id" : "AllergyIntolerance.code",
        "path" : "AllergyIntolerance.code",
        "mustSupport" : true
      },
      {
        "id" : "AllergyIntolerance.code.text",
        "path" : "AllergyIntolerance.code.text",
        "mustSupport" : true
      },
      {
        "id" : "AllergyIntolerance.reaction.substance",
        "path" : "AllergyIntolerance.reaction.substance",
        "mustSupport" : true
      },
      {
        "id" : "AllergyIntolerance.reaction.substance.text",
        "path" : "AllergyIntolerance.reaction.substance.text",
        "mustSupport" : true
      },
      {
        "id" : "AllergyIntolerance.reaction.manifestation",
        "path" : "AllergyIntolerance.reaction.manifestation",
        "mustSupport" : true
      },
      {
        "id" : "AllergyIntolerance.reaction.manifestation.text",
        "path" : "AllergyIntolerance.reaction.manifestation.text",
        "mustSupport" : true
      }
    ]
  }
}

```
