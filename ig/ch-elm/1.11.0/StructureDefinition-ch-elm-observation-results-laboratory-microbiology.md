# CH ELM Observation Results for Microbiology studies (set) - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Observation Results for Microbiology studies (set)**

## Resource Profile: CH ELM Observation Results for Microbiology studies (set) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory-microbiology | *Version*:1.12.0 |
| Active as of 2025-10-21 | *Computable Name*:ChElmObservationResultsLaboratoryMicrobiology |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM profile constrains the Observation resource for the purpose of laboratory test reports. 

**Usages:**

* Derived from this Profile: [CH ELM Observation Results for Microbiology studies (set) strict](StructureDefinition-ch-elm-observation-results-laboratory-microbiolgy-strict.md)
* Refer to this Profile: [CH ELM Composition: Laboratory Report](StructureDefinition-ch-elm-composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-observation-results-laboratory-microbiology)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-observation-results-laboratory-microbiology.csv), [Excel](StructureDefinition-ch-elm-observation-results-laboratory-microbiology.xlsx), [Schematron](StructureDefinition-ch-elm-observation-results-laboratory-microbiology.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-observation-results-laboratory-microbiology",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Observation-resultslab-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory-microbiology",
  "version" : "1.12.0",
  "name" : "ChElmObservationResultsLaboratoryMicrobiology",
  "title" : "CH ELM Observation Results for Microbiology studies (set)",
  "status" : "active",
  "date" : "2025-10-21T11:37:53+00:00",
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
  "description" : "This CH ELM profile constrains the Observation resource for the purpose of laboratory test reports.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Observation",
        "path" : "Observation",
        "constraint" : [
          {
            "key" : "ch-elm-interpretation-code-loinc",
            "severity" : "error",
            "human" : "If Observation.code is mapped in http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-interpretation-code', then the interpretation code must be a member of the mapped ValueSet for Microbiology studies",
            "expression" : "'http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-interpretation-code'.resolve().group.where(source='http://loinc.org').element.where(code=%context.code.coding.where(system='http://loinc.org').first().code).exists() implies interpretation.memberOf('http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-interpretation-code'.resolve().group.where(source='http://loinc.org').element.where(code=%context.code.coding.where(system='http://loinc.org').first().code).target.first().code)",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory-microbiology"
          },
          {
            "key" : "ch-elm-interpretation-code-snomedct",
            "severity" : "error",
            "human" : "If Observation.code is mapped in http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-interpretation-code', then the interpretation code must be a member of the mapped ValueSet for Microbiology studies",
            "expression" : "'http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-interpretation-code'.resolve().group.where(source='http://snomed.info/sct').element.where(code=%context.code.coding.where(system='http://snomed.info/sct').first().code).exists() implies interpretation.memberOf('http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-interpretation-code'.resolve().group.where(source='http://snomed.info/sct').element.where(code=%context.code.coding.where(system='http://snomed.info/sct').first().code).target.first().code)",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory-microbiology"
          },
          {
            "key" : "ch-elm-observation-profile-loinc",
            "severity" : "error",
            "human" : "If Observation.code is mapped in http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-observation-profile', then the observation must be conform to the mapped profile for Microbiology studies",
            "expression" : "'http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-observation-profile'.resolve().group.where(source='http://loinc.org').element.where(code=%context.code.coding.where(system='http://loinc.org').first().code).exists() implies conformsTo('http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-observation-profile'.resolve().group.where(source='http://loinc.org').element.where(code=%context.code.coding.where(system='http://loinc.org').first().code).target.first().code)",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory-microbiology"
          },
          {
            "key" : "ch-elm-observation-profile-snomedct",
            "severity" : "error",
            "human" : "If Observation.code is mapped in http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-observation-profile', then the observation must be conform to the mapped profile for Microbiology studies",
            "expression" : "'http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-observation-profile'.resolve().group.where(source='http://snomed.info/sct').element.where(code=%context.code.coding.where(system='http://snomed.info/sct').first().code).exists() implies conformsTo('http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-observation-profile'.resolve().group.where(source='http://snomed.info/sct').element.where(code=%context.code.coding.where(system='http://snomed.info/sct').first().code).target.first().code)",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory-microbiology"
          },
          {
            "key" : "ch-elm-expecting-organism-specification",
            "severity" : "error",
            "human" : "If Observation.code is a member of http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-expecting-organism-specification, then Observation.valueCodeableConcept must be a member of the mapped ValueSet in http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-expecting-organism-specification-to-results-completion-vs for Microbiology studies",
            "expression" : "code.memberOf('http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-expecting-organism-specification') implies (value.exists() and (value as CodeableConcept).exists() and (value as CodeableConcept).memberOf('http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-expecting-organism-specification-to-results-completion-vs'.resolve().group.where(source='http://loinc.org').element.where(code=%context.code.coding.where(system='http://loinc.org').first().code).target.first().code))",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory-microbiology"
          }
        ]
      },
      {
        "id" : "Observation.code",
        "path" : "Observation.code",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-laboratory-observation"
        }
      },
      {
        "id" : "Observation.interpretation",
        "path" : "Observation.interpretation",
        "min" : 1
      }
    ]
  }
}

```
