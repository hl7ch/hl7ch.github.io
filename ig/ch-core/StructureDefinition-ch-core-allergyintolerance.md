# CH Core AllergyIntolerance - CH Core (R4) v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core AllergyIntolerance**

## Resource Profile: CH Core AllergyIntolerance 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-allergyintolerance | *Version*:7.0.0-ballot |
| Active as of 2026-06-10 | *Computable Name*:CHCoreAllergyIntolerance |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition of the AllergyIntolerance resource for use in Swiss specific use cases. 

**Usages:**

* Examples for this Profile: [AllergyIntolerance/AllergyToCatDander](AllergyIntolerance-AllergyToCatDander.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-core|current/StructureDefinition/StructureDefinition-ch-core-allergyintolerance.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-allergyintolerance.csv), [Excel](StructureDefinition-ch-core-allergyintolerance.xlsx), [Schematron](StructureDefinition-ch-core-allergyintolerance.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-allergyintolerance",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-allergyintolerance",
  "version" : "7.0.0-ballot",
  "name" : "CHCoreAllergyIntolerance",
  "title" : "CH Core AllergyIntolerance",
  "status" : "active",
  "date" : "2026-06-10T15:05:01+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  },
  {
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/",
      "use" : "work"
    }]
  }],
  "description" : "Base definition of the AllergyIntolerance resource for use in Swiss specific use cases.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
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
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "AllergyIntolerance",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/AllergyIntolerance",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "AllergyIntolerance",
      "path" : "AllergyIntolerance"
    },
    {
      "id" : "AllergyIntolerance.code",
      "path" : "AllergyIntolerance.code",
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "http://fhir.ch/ig/ch-allergyintolerance/ValueSet/CHAllergyIntoleranceValueSet"
      }
    },
    {
      "id" : "AllergyIntolerance.patient",
      "path" : "AllergyIntolerance.patient",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"]
      }]
    },
    {
      "id" : "AllergyIntolerance.recorder",
      "path" : "AllergyIntolerance.recorder",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
        "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
        "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
        "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson"]
      }]
    },
    {
      "id" : "AllergyIntolerance.asserter",
      "path" : "AllergyIntolerance.asserter",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
        "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
        "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
        "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson"]
      }]
    },
    {
      "id" : "AllergyIntolerance.reaction.extension",
      "path" : "AllergyIntolerance.reaction.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "AllergyIntolerance.reaction.extension:certainty",
      "path" : "AllergyIntolerance.reaction.extension",
      "sliceName" : "certainty",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/allergyintolerance-certainty|5.3.0"]
      }]
    },
    {
      "id" : "AllergyIntolerance.reaction.extension:duration",
      "path" : "AllergyIntolerance.reaction.extension",
      "sliceName" : "duration",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/allergyintolerance-duration|5.3.0"]
      }]
    },
    {
      "id" : "AllergyIntolerance.reaction.extension:location",
      "path" : "AllergyIntolerance.reaction.extension",
      "sliceName" : "location",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/openEHR-location|5.3.0"]
      }]
    },
    {
      "id" : "AllergyIntolerance.reaction.extension:exposureDate",
      "path" : "AllergyIntolerance.reaction.extension",
      "sliceName" : "exposureDate",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/openEHR-exposureDate|5.3.0"]
      }]
    },
    {
      "id" : "AllergyIntolerance.reaction.extension:exposureDuration",
      "path" : "AllergyIntolerance.reaction.extension",
      "sliceName" : "exposureDuration",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/openEHR-exposureDuration|5.3.0"]
      }]
    },
    {
      "id" : "AllergyIntolerance.reaction.extension:exposureDescription",
      "path" : "AllergyIntolerance.reaction.extension",
      "sliceName" : "exposureDescription",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/openEHR-exposureDescription|5.3.0"]
      }]
    },
    {
      "id" : "AllergyIntolerance.reaction.extension:management",
      "path" : "AllergyIntolerance.reaction.extension",
      "sliceName" : "management",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/openEHR-management|5.3.0"]
      }]
    },
    {
      "id" : "AllergyIntolerance.reaction.substance",
      "path" : "AllergyIntolerance.reaction.substance",
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "http://fhir.ch/ig/ch-allergyintolerance/ValueSet/CHAllergyIntoleranceReactionSubstanceValueSet"
      }
    },
    {
      "id" : "AllergyIntolerance.reaction.manifestation",
      "path" : "AllergyIntolerance.reaction.manifestation",
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "http://fhir.ch/ig/ch-allergyintolerance/ValueSet/CHAllergyIntoleranceReactionManifestationValueSet"
      }
    }]
  }
}

```
