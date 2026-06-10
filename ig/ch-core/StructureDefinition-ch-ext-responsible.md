# Responsible - CH Core (R4) v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Responsible**

## Extension: Responsible 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-responsible | *Version*:7.0.0-ballot |
| Active as of 2026-06-10 | *Computable Name*:Responsible |
| **Copyright/Legal**: CC0-1.0 | |

Extension to reference the responsible for a professional service or product provided.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH Core Claim](StructureDefinition-ch-core-claim.md)
* Examples for this Extension: [Claim/ClaimInpatientTreatmentPsychiatry](Claim-ClaimInpatientTreatmentPsychiatry.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-core|current/StructureDefinition/StructureDefinition-ch-ext-responsible.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ext-responsible.csv), [Excel](StructureDefinition-ch-ext-responsible.xlsx), [Schematron](StructureDefinition-ch-ext-responsible.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ext-responsible",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-responsible",
  "version" : "7.0.0-ballot",
  "name" : "Responsible",
  "title" : "Responsible",
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
  "description" : "Extension to reference the responsible for a professional service or product provided.",
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
    "expression" : "Claim.item"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-responsible"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
        "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
        "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"]
      }]
    }]
  }
}

```
