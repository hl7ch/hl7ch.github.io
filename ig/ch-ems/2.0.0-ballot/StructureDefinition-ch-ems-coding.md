# CH EMS Coding - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMS Coding**

## Data Type Profile: CH EMS Coding 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-coding | *Version*:2.0.0-ballot |
| Active as of 2026-06-15 | *Computable Name*:CHEmsCoding |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Coding data type. 

**Usages:**

* Use this DataType Profile: [CH EMS CodeableConcept](StructureDefinition-ch-ems-codeableconcept.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-ems|current/StructureDefinition/StructureDefinition-ch-ems-coding.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ems-coding.csv), [Excel](StructureDefinition-ch-ems-coding.xlsx), [Schematron](StructureDefinition-ch-ems-coding.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ems-coding",
  "url" : "http://fhir.ch/ig/ch-ems/StructureDefinition/ch-ems-coding",
  "version" : "2.0.0-ballot",
  "name" : "CHEmsCoding",
  "title" : "CH EMS Coding",
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
  "description" : "This profile constrains the Coding data type.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "orim",
    "uri" : "http://hl7.org/orim",
    "name" : "Ontological RIM Mapping"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "Coding",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Coding",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Coding",
      "path" : "Coding",
      "short" : "CH EMS Coding"
    },
    {
      "id" : "Coding.system",
      "path" : "Coding.system",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Coding.code",
      "path" : "Coding.code",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Coding.display",
      "path" : "Coding.display",
      "mustSupport" : true
    }]
  }
}

```
