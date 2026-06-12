# CH ALIS Extension DiagnosisConfidential - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ALIS Extension DiagnosisConfidential**

## Extension: CH ALIS Extension DiagnosisConfidential 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-diagnosisconfidential | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAlisExtensionDiagnosisConfidential |
| **Copyright/Legal**: CC0-1.0 | |

This extension describes the DiagnosisConfidential.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH ALIS Condition Profile](StructureDefinition-ch-alis-connect-condition.md)
* Examples for this Extension: [ChargeItem/ChargeItemPauschaleKomplett](ChargeItem-ChargeItemPauschaleKomplett.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-alis-connect|current/StructureDefinition/StructureDefinition-ch-alis-connect-ext-diagnosisconfidential.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-alis-connect-ext-diagnosisconfidential.csv), [Excel](StructureDefinition-ch-alis-connect-ext-diagnosisconfidential.xlsx), [Schematron](StructureDefinition-ch-alis-connect-ext-diagnosisconfidential.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-alis-connect-ext-diagnosisconfidential",
  "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-diagnosisconfidential",
  "version" : "1.0.0-ballot",
  "name" : "ChAlisExtensionDiagnosisConfidential",
  "title" : "CH ALIS Extension DiagnosisConfidential",
  "status" : "active",
  "date" : "2026-06-12T18:37:15+00:00",
  "publisher" : "ALIS-Connect",
  "contact" : [{
    "name" : "ALIS-Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.alis-connect.ch/"
    }]
  }],
  "description" : "This extension describes the DiagnosisConfidential.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "alis",
    "uri" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Diagnosis",
    "name" : "ALIS Mapping",
    "comment" : "ALIS Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [{
    "type" : "element",
    "expression" : "Condition"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "CH ALIS Extension DiagnosisConfidential",
      "definition" : "This extension describes the DiagnosisConfidential."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-diagnosisconfidential"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      },
      "min" : 1
    },
    {
      "id" : "Extension.value[x]:valueBoolean",
      "path" : "Extension.value[x]",
      "sliceName" : "valueBoolean",
      "short" : "DiagnosisConfidential",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "boolean"
      }],
      "mapping" : [{
        "identity" : "alis",
        "map" : "DiagnosisConfidential"
      }]
    }]
  }
}

```
