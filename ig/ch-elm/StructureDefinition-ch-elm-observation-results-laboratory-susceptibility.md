# CH ELM Observation Results for Microbial susceptibility tests - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Observation Results for Microbial susceptibility tests**

## Resource Profile: CH ELM Observation Results for Microbial susceptibility tests 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory-susceptibility | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:ChElmObservationResultsLaboratorySusceptibility |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM profile constrains the Observation resource for the purpose of laboratory test reports. 

**Usages:**

* Derived from this Profile: [CH ELM Observation Results for Microbial susceptibility tests (strict)](StructureDefinition-ch-elm-observation-results-laboratory-susceptibility-strict.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-observation-results-laboratory-susceptibility)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-observation-results-laboratory-susceptibility.csv), [Excel](StructureDefinition-ch-elm-observation-results-laboratory-susceptibility.xlsx), [Schematron](StructureDefinition-ch-elm-observation-results-laboratory-susceptibility.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-observation-results-laboratory-susceptibility",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Observation-resultslab-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory-susceptibility",
  "version" : "1.13.0",
  "name" : "ChElmObservationResultsLaboratorySusceptibility",
  "title" : "CH ELM Observation Results for Microbial susceptibility tests",
  "status" : "active",
  "date" : "2025-11-25T09:58:53+00:00",
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
            "key" : "ch-elm-component-code-susc-loinc",
            "severity" : "error",
            "human" : "If Observation.code is mapped in http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-susc-to-component-code, then the component.code code must be a member of the mapped ValueSet for Susceptibility testing",
            "expression" : "'http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-susc-to-component-code'.resolve().group.where(source='http://loinc.org').element.where(code=%context.code.coding.where(system='http://loinc.org').first().code).exists() implies component.code.all(memberOf('http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-susc-to-component-code'.resolve().group.where(source='http://loinc.org').element.where(code=%context.code.coding.where(system='http://loinc.org').first().code).target.first().code))",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory-susceptibility"
          },
          {
            "key" : "ch-elm-component-code-susc-snomedct",
            "severity" : "error",
            "human" : "If Observation.code is mapped in http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-susc-to-component-code, then the component.code code must be a member of the mapped ValueSet for Susceptibility testing",
            "expression" : "'http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-susc-to-component-code'.resolve().group.where(source='http://snomed.info/sct').element.where(code=%context.code.coding.where(system='http://snomed.info/sct').first().code).exists() implies component.code.all(memberOf('http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-susc-to-component-code'.resolve().group.where(source='http://snomed.info/sct').element.where(code=%context.code.coding.where(system='http://snomed.info/sct').first().code).target.first().code))",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory-susceptibility"
          },
          {
            "key" : "ch-elm-component-interpretation-code-susc-loinc",
            "severity" : "error",
            "human" : "If Observation.code is mapped in http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-susc-to-component-interpretation-code, then the component.code code must be a member of the mapped ValueSet for Susceptibility testing",
            "expression" : "'http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-susc-to-component-interpretation-code'.resolve().group.where(source='http://loinc.org').element.where(code=%context.code.coding.where(system='http://loinc.org').first().code).exists() implies component.interpretation.all(memberOf('http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-susc-to-component-interpretation-code'.resolve().group.where(source='http://loinc.org').element.where(code=%context.code.coding.where(system='http://loinc.org').first().code).target.first().code))",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory-susceptibility"
          },
          {
            "key" : "ch-elm-component-interpretation-code-susc-snomedct",
            "severity" : "error",
            "human" : "If Observation.code is mapped in http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-susc-to-component-interpretation-code, then the component.code code must be a member of the mapped ValueSet for Susceptibility testing",
            "expression" : "'http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-susc-to-component-interpretation-code'.resolve().group.where(source='http://snomed.info/sct').element.where(code=%context.code.coding.where(system='http://snomed.info/sct').first().code).exists() implies component.interpretation.all(memberOf('http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-susc-to-component-interpretation-code'.resolve().group.where(source='http://snomed.info/sct').element.where(code=%context.code.coding.where(system='http://snomed.info/sct').first().code).target.first().code))",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory-susceptibility"
          },
          {
            "key" : "ch-elm-component-observation-profile-susc-loinc",
            "severity" : "error",
            "human" : "If Observation.code is mapped in http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-susc-to-component-observation-profile, then the observation must be conform to the mapped profile for Susceptibility testing",
            "expression" : "'http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-susc-to-component-observation-profile'.resolve().group.where(source='http://loinc.org').element.where(code=%context.code.coding.where(system='http://loinc.org').first().code).exists() implies conformsTo('http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-susc-to-component-observation-profile'.resolve().group.where(source='http://loinc.org').element.where(code=%context.code.coding.where(system='http://loinc.org').first().code).target.first().code)",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory-susceptibility"
          },
          {
            "key" : "ch-elm-component-observation-profile-susc-snomedct",
            "severity" : "error",
            "human" : "If Observation.code is mapped in http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-susc-to-component-observation-profile, then the component.code code must be a member of the mapped ValueSet for Susceptibility testing",
            "expression" : "'http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-susc-to-component-observation-profile'.resolve().group.where(source='http://snomed.info/sct').element.where(code=%context.code.coding.where(system='http://snomed.info/sct').first().code).exists() implies conformsTo('http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-susc-to-component-observation-profile'.resolve().group.where(source='http://snomed.info/sct').element.where(code=%context.code.coding.where(system='http://snomed.info/sct').first().code).target.first().code)",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory-susceptibility"
          }
        ]
      },
      {
        "id" : "Observation.code",
        "path" : "Observation.code",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-laboratory-observation-susc"
        }
      },
      {
        "id" : "Observation.component",
        "path" : "Observation.component",
        "min" : 1
      },
      {
        "id" : "Observation.component.code",
        "path" : "Observation.component.code",
        "short" : "see also 'Guidance - Laboratory Result'"
      },
      {
        "id" : "Observation.component.value[x]:valueQuantity",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valueQuantity",
        "short" : "Quantity if required by leading code, see also 'Guidance - Laboratory Result'",
        "type" : [
          {
            "code" : "Quantity",
            "profile" : [
              "http://hl7.eu/fhir/laboratory/StructureDefinition/Quantity-eu-lab"
            ]
          }
        ]
      },
      {
        "id" : "Observation.component.interpretation",
        "path" : "Observation.component.interpretation",
        "min" : 1,
        "max" : "1"
      }
    ]
  }
}

```
