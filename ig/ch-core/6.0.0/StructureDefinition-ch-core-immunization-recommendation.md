# CH Core Immunization Recommendation - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core Immunization Recommendation**

## Resource Profile: CH Core Immunization Recommendation 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-immunization-recommendation | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreImmunizationRecommendation |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition of the ImmunizationRecommendation resource for use in Swiss specific use cases. 

**Usages:**

* Examples for this Profile: [ImmunizationRecommendation/CHCoreImmunizationRecommendationExample](ImmunizationRecommendation-CHCoreImmunizationRecommendationExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-immunization-recommendation)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-immunization-recommendation.csv), [Excel](StructureDefinition-ch-core-immunization-recommendation.xlsx), [Schematron](StructureDefinition-ch-core-immunization-recommendation.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-immunization-recommendation",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-immunization-recommendation",
  "version" : "6.0.0",
  "name" : "CHCoreImmunizationRecommendation",
  "title" : "CH Core Immunization Recommendation",
  "status" : "active",
  "date" : "2025-12-16T07:58:48+00:00",
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
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Base definition of the ImmunizationRecommendation resource for use in Swiss specific use cases.",
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
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "ImmunizationRecommendation",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/ImmunizationRecommendation",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "ImmunizationRecommendation",
        "path" : "ImmunizationRecommendation",
        "short" : "CH Core Immunization Recommendation"
      },
      {
        "id" : "ImmunizationRecommendation.patient",
        "path" : "ImmunizationRecommendation.patient",
        "short" : "Patient",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
            ]
          }
        ]
      },
      {
        "id" : "ImmunizationRecommendation.authority",
        "path" : "ImmunizationRecommendation.authority",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ]
          }
        ]
      },
      {
        "id" : "ImmunizationRecommendation.recommendation.vaccineCode",
        "path" : "ImmunizationRecommendation.recommendation.vaccineCode",
        "short" : "Immunization Recommendation Vaccine Code",
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "VaccineCode"
            },
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-isCommonBinding",
              "valueBoolean" : true
            }
          ],
          "strength" : "preferred",
          "description" : "The code for vaccine product administered.",
          "valueSet" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-ch-vaccination-plan-immunizations-vs"
        }
      },
      {
        "id" : "ImmunizationRecommendation.recommendation.targetDisease",
        "path" : "ImmunizationRecommendation.recommendation.targetDisease",
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "Disease"
            },
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-isCommonBinding",
              "valueBoolean" : true
            }
          ],
          "strength" : "preferred",
          "description" : "The code for disease.",
          "valueSet" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-targetdiseasesandillnessesundergoneforimmunization-vs"
        }
      },
      {
        "id" : "ImmunizationRecommendation.recommendation.forecastStatus",
        "path" : "ImmunizationRecommendation.recommendation.forecastStatus",
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "Disease"
            },
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-isCommonBinding",
              "valueBoolean" : true
            }
          ],
          "strength" : "preferred",
          "description" : "The reason the forecast is done.",
          "valueSet" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-recommendation-forecast-status-vs"
        }
      },
      {
        "id" : "ImmunizationRecommendation.recommendation.forecastReason",
        "path" : "ImmunizationRecommendation.recommendation.forecastReason",
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "Disease"
            },
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-isCommonBinding",
              "valueBoolean" : true
            }
          ],
          "strength" : "preferred",
          "description" : "The reason the forecast is done.",
          "valueSet" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-recommendation-categories-vs"
        }
      },
      {
        "id" : "ImmunizationRecommendation.recommendation.supportingImmunization",
        "path" : "ImmunizationRecommendation.recommendation.supportingImmunization",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-immunization",
              "http://hl7.org/fhir/StructureDefinition/ImmunizationEvaluation"
            ]
          }
        ]
      }
    ]
  }
}

```
