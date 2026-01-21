# CH ELM Observation Results: Ratio - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Observation Results: Ratio**

## Resource Profile: CH ELM Observation Results: Ratio 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-rto | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:ChElmObservationRto |
| **Copyright/Legal**: CC0-1.0 | |

 
Ratio as observation result, see also 'Guidance - Laboratory Result' 

**Usages:**

* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-observation-rto)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-observation-rto.csv), [Excel](StructureDefinition-ch-elm-observation-rto.xlsx), [Schematron](StructureDefinition-ch-elm-observation-rto.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-observation-rto",
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-rto",
  "version" : "1.13.1",
  "name" : "ChElmObservationRto",
  "title" : "CH ELM Observation Results: Ratio",
  "status" : "active",
  "date" : "2026-01-21T11:21:00+00:00",
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
  "description" : "Ratio as observation result, see also 'Guidance - Laboratory Result'",
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
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "sct-concept",
      "uri" : "http://snomed.info/conceptdomain",
      "name" : "SNOMED CT Concept Domain Binding"
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
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "sct-attr",
      "uri" : "http://snomed.org/attributebinding",
      "name" : "SNOMED CT Attribute Binding"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Observation",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Observation",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Observation",
        "path" : "Observation",
        "constraint" : [
          {
            "key" : "ch-elm-denominator-greater-zero",
            "severity" : "error",
            "human" : "denominator must be greater than zero in ratio",
            "expression" : "value.denominator.value > 0",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-rto"
          }
        ]
      },
      {
        "id" : "Observation.value[x]",
        "path" : "Observation.value[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Observation.value[x]:valueRatio",
        "path" : "Observation.value[x]",
        "sliceName" : "valueRatio",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Ratio"
          }
        ]
      },
      {
        "id" : "Observation.value[x]:valueRatio.numerator",
        "path" : "Observation.value[x].numerator",
        "min" : 1
      },
      {
        "id" : "Observation.value[x]:valueRatio.numerator.value",
        "path" : "Observation.value[x].numerator.value",
        "patternDecimal" : 1
      },
      {
        "id" : "Observation.value[x]:valueRatio.numerator.system",
        "path" : "Observation.value[x].numerator.system",
        "patternUri" : "http://unitsofmeasure.org"
      },
      {
        "id" : "Observation.value[x]:valueRatio.numerator.code",
        "path" : "Observation.value[x].numerator.code",
        "patternCode" : "1"
      },
      {
        "id" : "Observation.value[x]:valueRatio.denominator",
        "path" : "Observation.value[x].denominator",
        "min" : 1
      },
      {
        "id" : "Observation.value[x]:valueRatio.denominator.value",
        "path" : "Observation.value[x].denominator.value",
        "min" : 1
      },
      {
        "id" : "Observation.value[x]:valueRatio.denominator.code",
        "path" : "Observation.value[x].denominator.code",
        "min" : 1
      }
    ]
  }
}

```
