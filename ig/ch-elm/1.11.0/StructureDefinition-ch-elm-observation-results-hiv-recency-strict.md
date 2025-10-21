# CH ELM Observation Results for HIV Recency Testing (strict) - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Observation Results for HIV Recency Testing (strict)**

## Resource Profile: CH ELM Observation Results for HIV Recency Testing (strict) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-hiv-recency-strict | *Version*:1.12.0 |
| Active as of 2025-10-21 | *Computable Name*:ChElmObservationResultsLaboratoryHivRecencyStrict |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM profile constrains the Observation resource for the purpose of laboratory test reports for hiv recency. 

**Usages:**

* Refer to this Profile: [CH ELM Composition: Laboratory Report](StructureDefinition-ch-elm-composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-observation-results-hiv-recency-strict)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-observation-results-hiv-recency-strict.csv), [Excel](StructureDefinition-ch-elm-observation-results-hiv-recency-strict.xlsx), [Schematron](StructureDefinition-ch-elm-observation-results-hiv-recency-strict.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-observation-results-hiv-recency-strict",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Observation-resultslab-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-hiv-recency-strict",
  "version" : "1.12.0",
  "name" : "ChElmObservationResultsLaboratoryHivRecencyStrict",
  "title" : "CH ELM Observation Results for HIV Recency Testing (strict)",
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
  "description" : "This CH ELM profile constrains the Observation resource for the purpose of laboratory test reports for hiv recency.",
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
        "path" : "Observation"
      },
      {
        "id" : "Observation.code",
        "path" : "Observation.code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "77685-6",
              "display" : "HIV 1 and 2 IgG Ab [Identifier] in Serum or Plasma by Immunoblot"
            }
          ]
        }
      },
      {
        "id" : "Observation.subject",
        "path" : "Observation.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ChElmPatientHIV"
            ]
          }
        ]
      },
      {
        "id" : "Observation.component",
        "path" : "Observation.component",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "code"
            }
          ],
          "rules" : "closed"
        },
        "min" : 7,
        "max" : "7"
      },
      {
        "id" : "Observation.component.code",
        "path" : "Observation.component.code",
        "short" : "see also 'Guidance - Laboratory Result'",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-component-hiv-recency"
        }
      },
      {
        "id" : "Observation.component.value[x]",
        "path" : "Observation.component.value[x]",
        "min" : 1
      },
      {
        "id" : "Observation.component.value[x]:valueQuantity",
        "path" : "Observation.component.value[x]",
        "sliceName" : "valueQuantity",
        "short" : "contains the band intensity value",
        "min" : 1,
        "type" : [
          {
            "code" : "Quantity",
            "profile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-quantity-arbu"
            ]
          }
        ]
      },
      {
        "id" : "Observation.component:gp120",
        "path" : "Observation.component",
        "sliceName" : "gp120",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Observation.component:gp120.extension:value-r5",
        "path" : "Observation.component.extension",
        "sliceName" : "value-r5"
      },
      {
        "id" : "Observation.component:gp120.code",
        "path" : "Observation.component.code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "118040000",
              "display" : "Measurement of Human immunodeficiency virus 1 glycoprotein 120 antibody (procedure)"
            }
          ]
        }
      },
      {
        "id" : "Observation.component:gp41",
        "path" : "Observation.component",
        "sliceName" : "gp41",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Observation.component:gp41.extension:value-r5",
        "path" : "Observation.component.extension",
        "sliceName" : "value-r5"
      },
      {
        "id" : "Observation.component:gp41.code",
        "path" : "Observation.component.code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "118044009",
              "display" : "Measurement of Human immunodeficiency virus 1 glycoprotein 41 antibody (procedure)"
            }
          ]
        }
      },
      {
        "id" : "Observation.component:p31",
        "path" : "Observation.component",
        "sliceName" : "p31",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Observation.component:p31.extension:value-r5",
        "path" : "Observation.component.extension",
        "sliceName" : "value-r5"
      },
      {
        "id" : "Observation.component:p31.code",
        "path" : "Observation.component.code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "118052007",
              "display" : "Measurement of Human immunodeficiency virus 1 protein 31 antibody (procedure)"
            }
          ]
        }
      },
      {
        "id" : "Observation.component:p24",
        "path" : "Observation.component",
        "sliceName" : "p24",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Observation.component:p24.extension:value-r5",
        "path" : "Observation.component.extension",
        "sliceName" : "value-r5"
      },
      {
        "id" : "Observation.component:p24.code",
        "path" : "Observation.component.code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "117749009",
              "display" : "Measurement of Human immunodeficiency virus 1 protein 24 antibody (procedure)"
            }
          ]
        }
      },
      {
        "id" : "Observation.component:p17",
        "path" : "Observation.component",
        "sliceName" : "p17",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Observation.component:p17.extension:value-r5",
        "path" : "Observation.component.extension",
        "sliceName" : "value-r5"
      },
      {
        "id" : "Observation.component:p17.code",
        "path" : "Observation.component.code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "118047002",
              "display" : "Measurement of Human immunodeficiency virus 1 protein 17 antibody (procedure)"
            }
          ]
        }
      },
      {
        "id" : "Observation.component:gp105",
        "path" : "Observation.component",
        "sliceName" : "gp105",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Observation.component:gp105.extension:value-r5",
        "path" : "Observation.component.extension",
        "sliceName" : "value-r5"
      },
      {
        "id" : "Observation.component:gp105.code",
        "path" : "Observation.component.code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "118062000",
              "display" : "Measurement of Human immunodeficiency virus 2 glycoprotein 105 antibody (procedure)"
            }
          ]
        }
      },
      {
        "id" : "Observation.component:gp36",
        "path" : "Observation.component",
        "sliceName" : "gp36",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Observation.component:gp36.extension:value-r5",
        "path" : "Observation.component.extension",
        "sliceName" : "value-r5"
      },
      {
        "id" : "Observation.component:gp36.code",
        "path" : "Observation.component.code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "118067006",
              "display" : "Measurement of Human immunodeficiency virus 2 glycoprotein 36 antibody (procedure)"
            }
          ]
        }
      }
    ]
  }
}

```
