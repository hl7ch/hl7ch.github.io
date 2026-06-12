# CH ALIS Data Type Text - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ALIS Data Type Text**

## Logical Model: CH ALIS Data Type Text 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAlisDataTypeText |
| **Copyright/Legal**: CC0-1.0 | |

 
Data Type Text 

**Usages:**

* Use this Logical Model: [CH ALIS Leistungsschnittstelle - Diagnosis](StructureDefinition-Diagnosis.md), [CH ALIS Leistungsschnittstelle - ParameterV40](StructureDefinition-ParameterV40.md), [CH ALIS Leistungsschnittstelle - PersonV40](StructureDefinition-PersonV40.md), [CH ALIS Leistungsschnittstelle - Service](StructureDefinition-Service.md)... Show 3 more, [CH ALIS Leistungsschnittstelle - ServiceAssignment](StructureDefinition-ServiceAssignment.md), [CH ALIS Leistungsschnittstelle - SessionSectionB](StructureDefinition-SessionSectionB.md) and [CH ALIS Leistungsschnittstelle - Visit](StructureDefinition-Visit.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-alis-connect|current/StructureDefinition/StructureDefinition-Text.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-Text.csv), [Excel](StructureDefinition-Text.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "Text",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-namespace",
    "valueUri" : "noNamespace"
  }],
  "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text",
  "version" : "1.0.0-ballot",
  "name" : "ChAlisDataTypeText",
  "title" : "CH ALIS Data Type Text",
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
  "description" : "Data Type Text",
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
  "type" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Text",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "Text",
      "path" : "Text",
      "short" : "CH ALIS Data Type Text",
      "definition" : "Text"
    },
    {
      "id" : "Text.data",
      "path" : "Text.data",
      "representation" : ["xmlText"],
      "short" : "Text",
      "definition" : "Text",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "string"
      }]
    }]
  }
}

```
