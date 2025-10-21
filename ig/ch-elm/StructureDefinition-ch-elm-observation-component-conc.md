# CH ELM Observation Component Results: Concentration - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Observation Component Results: Concentration**

## Resource Profile: CH ELM Observation Component Results: Concentration 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-component-conc | *Version*:1.12.0 |
| Active as of 2025-10-21 | *Computable Name*:ChElmObservationComponentConcentration |
| **Copyright/Legal**: CC0-1.0 | |

 
Concentration as Quantity in observation.component result, see also 'Guidance - Laboratory Result' 

**Usages:**

* This Profile is not used by any profiles in this Implementation Guide

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-observation-component-conc)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-observation-component-conc.csv), [Excel](StructureDefinition-ch-elm-observation-component-conc.xlsx), [Schematron](StructureDefinition-ch-elm-observation-component-conc.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-observation-component-conc",
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-component-conc",
  "version" : "1.12.0",
  "name" : "ChElmObservationComponentConcentration",
  "title" : "CH ELM Observation Component Results: Concentration",
  "status" : "active",
  "date" : "2025-10-21T11:52:21+00:00",
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
  "description" : "Concentration as Quantity in observation.component result, see also 'Guidance - Laboratory Result'",
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
        "path" : "Observation"
      },
      {
        "id" : "Observation.component.value[x]",
        "path" : "Observation.component.value[x]",
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
        "id" : "Observation.component.value[x]:valueQuantity",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valueQuantity",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Quantity"
          }
        ]
      },
      {
        "id" : "Observation.component.value[x]:valueQuantity.value",
        "path" : "Observation.component.value[x].value",
        "min" : 1
      },
      {
        "id" : "Observation.component.value[x]:valueQuantity.unit",
        "path" : "Observation.component.value[x].unit",
        "patternString" : "mg/L"
      },
      {
        "id" : "Observation.component.value[x]:valueQuantity.system",
        "path" : "Observation.component.value[x].system",
        "patternUri" : "http://unitsofmeasure.org"
      },
      {
        "id" : "Observation.component.value[x]:valueQuantity.code",
        "path" : "Observation.component.value[x].code",
        "patternCode" : "mg/L"
      }
    ]
  }
}

```
