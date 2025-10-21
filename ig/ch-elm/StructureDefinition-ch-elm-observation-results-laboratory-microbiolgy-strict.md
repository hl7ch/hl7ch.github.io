# CH ELM Observation Results for Microbiology studies (set) strict - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Observation Results for Microbiology studies (set) strict**

## Resource Profile: CH ELM Observation Results for Microbiology studies (set) strict 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory-microbiolgy-strict | *Version*:1.12.0 |
| Active as of 2025-10-21 | *Computable Name*:ChElmObservationResultsLaboratoryMicrobiologyStrict |
| **Copyright/Legal**: CC0-1.0 | |

 
CH ELM profile for the Observation resource with a stricter validation mechanism than the base profile via binding strength reinforcement for the leading code element. 

**Usages:**

* Refer to this Profile: [CH ELM Composition: Laboratory Report Strict](StructureDefinition-ch-elm-composition-strict.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-observation-results-laboratory-microbiolgy-strict)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-observation-results-laboratory-microbiolgy-strict.csv), [Excel](StructureDefinition-ch-elm-observation-results-laboratory-microbiolgy-strict.xlsx), [Schematron](StructureDefinition-ch-elm-observation-results-laboratory-microbiolgy-strict.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-observation-results-laboratory-microbiolgy-strict",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Observation-resultslab-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory-microbiolgy-strict",
  "version" : "1.12.0",
  "name" : "ChElmObservationResultsLaboratoryMicrobiologyStrict",
  "title" : "CH ELM Observation Results for Microbiology studies (set) strict",
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
  "description" : "CH ELM profile for the Observation resource with a stricter validation mechanism than the base profile via binding strength reinforcement for the leading code element.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory-microbiology",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Observation",
        "path" : "Observation"
      },
      {
        "id" : "Observation.code",
        "path" : "Observation.code",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-laboratory-observation"
        }
      }
    ]
  }
}

```
