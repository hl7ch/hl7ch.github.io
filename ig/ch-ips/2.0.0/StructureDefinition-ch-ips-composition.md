# CH IPS Composition - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH IPS Composition**

## Resource Profile: CH IPS Composition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-composition | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChIpsComposition |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH IPS profile for the resource Composition is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension. 

**Usages:**

* Use this Profile: [CH IPS Document](StructureDefinition-ch-ips-document.md)
* Refer to this Profile: [CH IPS Composition](StructureDefinition-ch-ips-composition.md)
* Examples for this Profile: [Composition/UC1-Composition1](Composition-UC1-Composition1.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-ips|current/StructureDefinition/ch-ips-composition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ips-composition.csv), [Excel](StructureDefinition-ch-ips-composition.xlsx), [Schematron](StructureDefinition-ch-ips-composition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ips-composition",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.org/fhir/uv/ips/StructureDefinition/Composition-uv-ips"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-composition",
  "version" : "2.0.0",
  "name" : "ChIpsComposition",
  "title" : "CH IPS Composition",
  "status" : "active",
  "date" : "2025-12-16T11:58:36+00:00",
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
  "description" : "This CH IPS profile for the resource Composition is derived from the corresponding CH Core profile and also ensures IPS conformity via the IPS profile referenced by the so-called imposeProfile extension.",
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
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "fhirdocumentreference",
      "uri" : "http://hl7.org/fhir/documentreference",
      "name" : "FHIR DocumentReference"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Composition",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-composition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Composition",
        "path" : "Composition",
        "short" : "CH IPS Composition"
      },
      {
        "id" : "Composition.subject",
        "path" : "Composition.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-patient"
            ]
          }
        ]
      },
      {
        "id" : "Composition.relatesTo.target[x]",
        "path" : "Composition.relatesTo.target[x]",
        "type" : [
          {
            "code" : "Identifier"
          },
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-composition"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section",
        "path" : "Composition.section",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "code"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 3
      },
      {
        "id" : "Composition.section:sectionMedications",
        "path" : "Composition.section",
        "sliceName" : "sectionMedications",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Composition.section:sectionMedications.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "10160-0"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:sectionMedications.entry",
        "path" : "Composition.section.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resolve()"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Composition.section:sectionMedications.entry:medicationStatementOrRequest",
        "path" : "Composition.section.entry",
        "sliceName" : "medicationStatementOrRequest",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medicationstatement",
              "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-medicationrequest"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:sectionAllergies",
        "path" : "Composition.section",
        "sliceName" : "sectionAllergies",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Composition.section:sectionAllergies.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "48765-2"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:sectionAllergies.entry",
        "path" : "Composition.section.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resolve()"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Composition.section:sectionAllergies.entry:allergyOrIntolerance",
        "path" : "Composition.section.entry",
        "sliceName" : "allergyOrIntolerance",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-allergyintolerance"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:sectionProblems",
        "path" : "Composition.section",
        "sliceName" : "sectionProblems",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Composition.section:sectionProblems.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "11450-4"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:sectionProblems.entry",
        "path" : "Composition.section.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resolve()"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Composition.section:sectionProblems.entry:problem",
        "path" : "Composition.section.entry",
        "sliceName" : "problem",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-condition"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:sectionProceduresHx",
        "path" : "Composition.section",
        "sliceName" : "sectionProceduresHx",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Composition.section:sectionProceduresHx.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "47519-4"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:sectionProceduresHx.entry",
        "path" : "Composition.section.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resolve()"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Composition.section:sectionProceduresHx.entry:procedure",
        "path" : "Composition.section.entry",
        "sliceName" : "procedure",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/Procedure-uv-ips"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:sectionImmunizations",
        "path" : "Composition.section",
        "sliceName" : "sectionImmunizations",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Composition.section:sectionImmunizations.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "11369-6"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:sectionImmunizations.entry",
        "path" : "Composition.section.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resolve()"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Composition.section:sectionImmunizations.entry:immunization",
        "path" : "Composition.section.entry",
        "sliceName" : "immunization",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-immunization"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:sectionMedicalDevices",
        "path" : "Composition.section",
        "sliceName" : "sectionMedicalDevices",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Composition.section:sectionMedicalDevices.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "46264-8"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:sectionMedicalDevices.entry",
        "path" : "Composition.section.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resolve()"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Composition.section:sectionMedicalDevices.entry:deviceStatement",
        "path" : "Composition.section.entry",
        "sliceName" : "deviceStatement",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/DeviceUseStatement-uv-ips"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:sectionResults",
        "path" : "Composition.section",
        "sliceName" : "sectionResults",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Composition.section:sectionResults.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "30954-2"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:sectionResults.entry",
        "path" : "Composition.section.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "resolve()"
            },
            {
              "type" : "profile",
              "path" : "resolve()"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Composition.section:sectionResults.entry:results-observation-laboratory-pathology",
        "path" : "Composition.section.entry",
        "sliceName" : "results-observation-laboratory-pathology",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/Observation-results-laboratory-pathology-uv-ips"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:sectionResults.entry:results-observation-radiology",
        "path" : "Composition.section.entry",
        "sliceName" : "results-observation-radiology",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/Observation-results-radiology-uv-ips"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:sectionResults.entry:results-diagnosticReport",
        "path" : "Composition.section.entry",
        "sliceName" : "results-diagnosticReport",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/DiagnosticReport-uv-ips"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:sectionVitalSigns",
        "path" : "Composition.section",
        "sliceName" : "sectionVitalSigns",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Composition.section:sectionVitalSigns.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "8716-3"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:sectionVitalSigns.entry",
        "path" : "Composition.section.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resolve()"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Composition.section:sectionVitalSigns.entry:vitalSign",
        "path" : "Composition.section.entry",
        "sliceName" : "vitalSign",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/vitalsigns"]
          }
        ]
      },
      {
        "id" : "Composition.section:sectionPastProblems",
        "path" : "Composition.section",
        "sliceName" : "sectionPastProblems",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Composition.section:sectionPastProblems.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "11348-0"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:sectionPastProblems.entry",
        "path" : "Composition.section.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resolve()"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Composition.section:sectionPastProblems.entry:pastProblem",
        "path" : "Composition.section.entry",
        "sliceName" : "pastProblem",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-condition"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:sectionFunctionalStatus",
        "path" : "Composition.section",
        "sliceName" : "sectionFunctionalStatus",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Composition.section:sectionFunctionalStatus.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "47420-5"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:sectionFunctionalStatus.entry",
        "path" : "Composition.section.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resolve()"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Composition.section:sectionFunctionalStatus.entry:disability",
        "path" : "Composition.section.entry",
        "sliceName" : "disability",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-ips/StructureDefinition/ch-ips-condition"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:sectionFunctionalStatus.entry:functionalAssessment",
        "path" : "Composition.section.entry",
        "sliceName" : "functionalAssessment",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/ClinicalImpression"]
          }
        ]
      },
      {
        "id" : "Composition.section:sectionPlanOfCare",
        "path" : "Composition.section",
        "sliceName" : "sectionPlanOfCare",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Composition.section:sectionPlanOfCare.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "18776-5"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:sectionPlanOfCare.entry",
        "path" : "Composition.section.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resolve()"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Composition.section:sectionPlanOfCare.entry:carePlan",
        "path" : "Composition.section.entry",
        "sliceName" : "carePlan",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/CarePlan"]
          }
        ]
      },
      {
        "id" : "Composition.section:sectionPlanOfCare.entry:immunizationRecommendation",
        "path" : "Composition.section.entry",
        "sliceName" : "immunizationRecommendation",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-immunization-recommendation"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:sectionSocialHistory",
        "path" : "Composition.section",
        "sliceName" : "sectionSocialHistory",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Composition.section:sectionSocialHistory.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "29762-2"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:sectionSocialHistory.entry",
        "path" : "Composition.section.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resolve()"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Composition.section:sectionSocialHistory.entry:smokingTobaccoUse",
        "path" : "Composition.section.entry",
        "sliceName" : "smokingTobaccoUse",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/Observation-tobaccouse-uv-ips"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:sectionSocialHistory.entry:alcoholUse",
        "path" : "Composition.section.entry",
        "sliceName" : "alcoholUse",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/Observation-alcoholuse-uv-ips"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:sectionPregnancyHx",
        "path" : "Composition.section",
        "sliceName" : "sectionPregnancyHx",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Composition.section:sectionPregnancyHx.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "10162-6"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:sectionPregnancyHx.entry",
        "path" : "Composition.section.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resolve()"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Composition.section:sectionPregnancyHx.entry:pregnancyStatus",
        "path" : "Composition.section.entry",
        "sliceName" : "pregnancyStatus",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/Observation-pregnancy-status-uv-ips"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:sectionPregnancyHx.entry:pregnancyOutcome",
        "path" : "Composition.section.entry",
        "sliceName" : "pregnancyOutcome",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/Observation-pregnancy-outcome-uv-ips"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:sectionAdvanceDirectives",
        "path" : "Composition.section",
        "sliceName" : "sectionAdvanceDirectives",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Composition.section:sectionAdvanceDirectives.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "42348-3"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:sectionAdvanceDirectives.entry",
        "path" : "Composition.section.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resolve()"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Composition.section:sectionAdvanceDirectives.entry:advanceDirectivesConsent",
        "path" : "Composition.section.entry",
        "sliceName" : "advanceDirectivesConsent",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Consent"]
          }
        ]
      },
      {
        "id" : "Composition.section:sectionAlerts",
        "path" : "Composition.section",
        "sliceName" : "sectionAlerts",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Composition.section:sectionAlerts.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "104605-1"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:sectionAlerts.entry",
        "path" : "Composition.section.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resolve()"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Composition.section:sectionAlerts.entry:alertsFlag",
        "path" : "Composition.section.entry",
        "sliceName" : "alertsFlag",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://hl7.org/fhir/uv/ips/StructureDefinition/Flag-alert-uv-ips"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:sectionPatientStory",
        "path" : "Composition.section",
        "sliceName" : "sectionPatientStory",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Composition.section:sectionPatientStory.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "81338-6"
            }
          ]
        }
      }
    ]
  }
}

```
