# Substitution - CH Core (R4) v7.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Substitution**

## Extension: Substitution 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-substitution | *Version*:7.0.0-ballot |
| Active as of 2026-06-10 | *Computable Name*:CHEMEDExtSubstitution |
| **Copyright/Legal**: CC0-1.0 | |

This extension is used to indicate whether the medication can be substituted for this patient, i.e. whether it is allowed. (For a prescription, MedicationRequest.substitution is used to record whether a substitution is allowed or not. When dispensing, a performed substitution is recorded in MedicationDispense.substitution.)

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH Core MedicationStatement](StructureDefinition-ch-core-medicationstatement.md)
* Examples for this Extension: [MedicationStatement/MedicationStatementAbirateron](MedicationStatement-MedicationStatementAbirateron.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-core|current/StructureDefinition/StructureDefinition-ch-emed-ext-substitution.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-ext-substitution.csv), [Excel](StructureDefinition-ch-emed-ext-substitution.xlsx), [Schematron](StructureDefinition-ch-emed-ext-substitution.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-ext-substitution",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-substitution",
  "version" : "7.0.0-ballot",
  "name" : "CHEMEDExtSubstitution",
  "title" : "Substitution",
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
  "description" : "This extension is used to indicate whether the medication can be substituted for this patient, i.e. whether it is allowed. \n                        (For a prescription, MedicationRequest.substitution is used to record whether a substitution is allowed or not. \n                        When dispensing, a performed substitution is recorded in MedicationDispense.substitution.)",
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
    "expression" : "MedicationStatement"
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
      "fixedUri" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-substitution"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "short" : "Whether substitution is allowed or not",
      "min" : 1,
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "http://terminology.hl7.org/ValueSet/v3-ActSubstanceAdminSubstitutionCode"
      }
    }]
  }
}

```
