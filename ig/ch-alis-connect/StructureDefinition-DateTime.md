# CH ALIS Data Type DateTime - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ALIS Data Type DateTime**

## Logical Model: CH ALIS Data Type DateTime 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/StructureDefinition/DateTime | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAlisDataTypeDateTime |
| **Copyright/Legal**: CC0-1.0 | |

 
Data Type DateTime 

**Usages:**

* Use this Logical Model: [CH ALIS Leistungsschnittstelle - Diagnosis](StructureDefinition-Diagnosis.md), [CH ALIS Leistungsschnittstelle - Service](StructureDefinition-Service.md) and [CH ALIS Leistungsschnittstelle - ServiceAssignment](StructureDefinition-ServiceAssignment.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-alis-connect|current/StructureDefinition/StructureDefinition-DateTime.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-DateTime.csv), [Excel](StructureDefinition-DateTime.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "DateTime",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-namespace",
    "valueUri" : "noNamespace"
  }],
  "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/DateTime",
  "version" : "1.0.0-ballot",
  "name" : "ChAlisDataTypeDateTime",
  "title" : "CH ALIS Data Type DateTime",
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
  "description" : "Data Type DateTime",
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
  "type" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/DateTime",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "DateTime",
      "path" : "DateTime",
      "short" : "CH ALIS Data Type DateTime",
      "definition" : "DateTime"
    },
    {
      "id" : "DateTime.data",
      "path" : "DateTime.data",
      "representation" : ["xmlText"],
      "short" : "DateTime",
      "definition" : "DateTime",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    }]
  }
}

```
