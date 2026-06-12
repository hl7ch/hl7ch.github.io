# CH EMR Body Structure Reference - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMR Body Structure Reference**

## Extension: CH EMR Body Structure Reference 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-body-structure-reference | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChEmrBodyStructureReference |
| **Copyright/Legal**: CC0-1.0 | |

Links a CodeableConcept body site to a BodyStructure resource carrying structured anatomy and laterality. Used where the FHIR UV bodySite extension is not allowed by its context list.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH Emergency Record Device Use Statement](StructureDefinition-ch-emr-deviceusestatement.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-emr|current/StructureDefinition/StructureDefinition-ch-emr-body-structure-reference.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emr-body-structure-reference.csv), [Excel](StructureDefinition-ch-emr-body-structure-reference.xlsx), [Schematron](StructureDefinition-ch-emr-body-structure-reference.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emr-body-structure-reference",
  "url" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-body-structure-reference",
  "version" : "1.0.0-ballot",
  "name" : "ChEmrBodyStructureReference",
  "title" : "CH EMR Body Structure Reference",
  "status" : "active",
  "date" : "2026-06-12T17:22:41+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  }],
  "description" : "Links a CodeableConcept body site to a BodyStructure resource carrying structured anatomy and laterality. Used where the FHIR UV bodySite extension is not allowed by its context list.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CHE"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [{
    "type" : "element",
    "expression" : "CodeableConcept"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension"
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-body-structure-reference"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/BodyStructure"]
      }]
    }]
  }
}

```
