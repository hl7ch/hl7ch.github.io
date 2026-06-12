# CH ALIS Data Type Date - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ALIS Data Type Date**

## Logical Model: CH ALIS Data Type Date 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Date | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAlisDataTypeDate |
| **Copyright/Legal**: CC0-1.0 | |

 
Data Type Date 

**Usages:**

* Use this Logical Model: [CH ALIS Leistungsschnittstelle - Visit](StructureDefinition-Visit.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-alis-connect|current/StructureDefinition/StructureDefinition-Date.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-Date.csv), [Excel](StructureDefinition-Date.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "Date",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-namespace",
    "valueUri" : "noNamespace"
  }],
  "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Date",
  "version" : "1.0.0-ballot",
  "name" : "ChAlisDataTypeDate",
  "title" : "CH ALIS Data Type Date",
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
  "description" : "Data Type Date",
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
  "type" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/Date",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "Date",
      "path" : "Date",
      "short" : "CH ALIS Data Type Date",
      "definition" : "Date"
    },
    {
      "id" : "Date.data",
      "path" : "Date.data",
      "representation" : ["xmlText"],
      "short" : "Date",
      "definition" : "Date",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "date"
      }]
    }]
  }
}

```
