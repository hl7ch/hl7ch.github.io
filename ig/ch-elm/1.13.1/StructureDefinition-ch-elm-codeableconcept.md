# CH ELM CodeableConcept - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM CodeableConcept**

## Data Type Profile: CH ELM CodeableConcept 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-codeableconcept | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:ChElmCodeableConcept |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile represents the constraint applied to the CodeableConcept data type by this IG to use the 'CH ELM CodeableConcept' data type profile. 

**Usages:**

* Use this DataType Profile: [CH ELM Observation Results: Laboratory](StructureDefinition-ch-elm-observation-results-laboratory.md) and [CH ELM ServiceRequest: Laboratory Order](StructureDefinition-ch-elm-servicerequest-laboratory-order.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-codeableconcept)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-codeableconcept.csv), [Excel](StructureDefinition-ch-elm-codeableconcept.xlsx), [Schematron](StructureDefinition-ch-elm-codeableconcept.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-codeableconcept",
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-codeableconcept",
  "version" : "1.13.1",
  "name" : "ChElmCodeableConcept",
  "title" : "CH ELM CodeableConcept",
  "status" : "active",
  "date" : "2026-01-21T11:05:32+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "This profile represents the constraint applied to the CodeableConcept data type by this IG to use the 'CH ELM CodeableConcept' data type profile.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [
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
      "identity" : "orim",
      "uri" : "http://hl7.org/orim",
      "name" : "Ontological RIM Mapping"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "CodeableConcept",
  "baseDefinition" : "http://hl7.org/fhir/uv/ips/StructureDefinition/CodeableConcept-uv-ips",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "CodeableConcept.coding",
        "path" : "CodeableConcept.coding",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Coding",
            "profile" : ["http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-coding"]
          }
        ]
      }
    ]
  }
}

```
