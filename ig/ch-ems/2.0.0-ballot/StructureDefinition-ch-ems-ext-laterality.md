# CH EMS Extension: Laterality - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS Extension: Laterality**

## Extension: CH EMS Extension: Laterality 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-ext-laterality | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsExtLaterality |
| **Copyright/Legal**: CC0-1.0 | |

Extension to define the side of the affected body region.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH EMS Observation: Stroke/FAST](StructureDefinition-ch-ems-observation-stroke-fast.md)
* Examples for this Extension: [Observation/StrokeBefund](Observation-StrokeBefund.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-ext-laterality.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-ext-laterality.csv), [Excel](StructureDefinition-ch-ems-ext-laterality.xlsx), [Schematron](StructureDefinition-ch-ems-ext-laterality.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-ext-laterality",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-ext-laterality",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsExtLaterality",
  "title" : "CH EMS Extension: Laterality",
  "status" : "active",
  "date" : "2026-06-15T08:00:21+00:00",
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
  "description" : "Extension to define the side of the affected body region.",
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
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [{
    "type" : "element",
    "expression" : "Observation.component"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "CH EMS Extension: Laterality",
      "definition" : "Extension to define the side of the affected body region."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-ext-laterality"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "CodeableConcept",
        "profile" : ["http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-codeableconcept"]
      }],
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-laterality"
      }
    }]
  }
}

```
