# CH IG Practitioner - CH IG (R4) v1.2.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH IG Practitioner**

## Resource Profile: CH IG Practitioner 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ig/StructureDefinition/ch-ig-practitioner | *Version*:1.2.3 |
| Draft as of 2025-12-11 | *Computable Name*:ChIgPractitioner |
| **Copyright/Legal**: CC0-1.0 | |

 
Example profile defining a Practitioner resource. 

**Usages:**

* Examples for this Profile: [Practitioner/HansMuster](Practitioner-HansMuster.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-ig|current/StructureDefinition/ch-ig-practitioner)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ig-practitioner.csv), [Excel](StructureDefinition-ch-ig-practitioner.xlsx), [Schematron](StructureDefinition-ch-ig-practitioner.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ig-practitioner",
  "url" : "http://fhir.ch/ig/ch-ig/StructureDefinition/ch-ig-practitioner",
  "version" : "1.2.3",
  "name" : "ChIgPractitioner",
  "title" : "CH IG Practitioner",
  "status" : "draft",
  "date" : "2025-12-11T10:31:14+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    }
  ],
  "description" : "Example profile defining a Practitioner resource.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CHE"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "eCH",
      "uri" : "http://www.ech.ch/",
      "name" : "eCH-Standards"
    },
    {
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
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Practitioner",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Practitioner",
        "path" : "Practitioner",
        "short" : "CH IG Practitioner"
      }
    ]
  }
}

```
