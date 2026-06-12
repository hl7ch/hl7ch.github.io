# CH ALIS Data Type Boolean - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ALIS Data Type Boolean**

## Logical Model: CH ALIS Data Type Boolean 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Boolean | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAlisDataTypeBoolean |
| **Copyright/Legal**: CC0-1.0 | |

 
Data Type Boolean 

**Usages:**

* Use this Logical Model: [CH ALIS Leistungsschnittstelle - Diagnosis](StructureDefinition-Diagnosis.md) and [CH ALIS Leistungsschnittstelle - ServiceAssignment](StructureDefinition-ServiceAssignment.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-alis-connect|current/StructureDefinition/StructureDefinition-Boolean.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-Boolean.csv), [Excel](StructureDefinition-Boolean.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "Boolean",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-namespace",
    "valueUri" : "noNamespace"
  }],
  "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Boolean",
  "version" : "1.0.0-ballot",
  "name" : "ChAlisDataTypeBoolean",
  "title" : "CH ALIS Data Type Boolean",
  "status" : "active",
  "date" : "2026-06-12T18:35:48+00:00",
  "publisher" : "ALIS-Connect",
  "contact" : [{
    "name" : "ALIS-Connect",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.alis-connect.ch/"
    }]
  }],
  "description" : "Data Type Boolean",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "kind" : "logical",
  "abstract" : false,
  "type" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Boolean",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "Boolean",
      "path" : "Boolean",
      "short" : "CH ALIS Data Type Boolean",
      "definition" : "Boolean (xs:boolean lexical space: allowed values are true, false, 1, 0)"
    },
    {
      "id" : "Boolean.data",
      "path" : "Boolean.data",
      "representation" : ["xmlText"],
      "short" : "Boolean (allowed values: true, false, 1, 0)",
      "definition" : "Boolean (allowed values: true, false, 1, 0)",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    }]
  }
}

```
