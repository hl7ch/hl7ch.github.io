# CH ALIS Data Type UnsignedInt - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ALIS Data Type UnsignedInt**

## Logical Model: CH ALIS Data Type UnsignedInt 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-alis-connect/StructureDefinition/UnsignedInt | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:ChAlisDataTypeUnsignedInt |
| **Copyright/Legal**: CC0-1.0 | |

 
Data Type UnsignedInt 

**Usages:**

* This Logical Model is not used by any profiles in this Specification

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-alis-connect|current/StructureDefinition/StructureDefinition-UnsignedInt.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-UnsignedInt.csv), [Excel](StructureDefinition-UnsignedInt.xlsx) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "UnsignedInt",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-namespace",
    "valueUri" : "noNamespace"
  }],
  "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/UnsignedInt",
  "version" : "1.0.0-ballot",
  "name" : "ChAlisDataTypeUnsignedInt",
  "title" : "CH ALIS Data Type UnsignedInt",
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
  "description" : "Data Type UnsignedInt",
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
  "type" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/UnsignedInt",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Base",
  "derivation" : "specialization",
  "differential" : {
    "element" : [{
      "id" : "UnsignedInt",
      "path" : "UnsignedInt",
      "short" : "CH ALIS Data Type UnsignedInt",
      "definition" : "UnsignedInt"
    },
    {
      "id" : "UnsignedInt.data",
      "path" : "UnsignedInt.data",
      "representation" : ["xmlText"],
      "short" : "UnsignedInt",
      "definition" : "UnsignedInt",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "unsignedInt"
      }]
    }]
  }
}

```
