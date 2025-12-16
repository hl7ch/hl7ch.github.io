# CH eTOC Composition - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH eTOC Composition**

## Resource Profile: CH eTOC Composition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-composition | *Version*:3.0.1 |
| Active as of 2025-12-16 | *Computable Name*:ChEtocComposition |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition for the Composition resource in the context of electronic transition of care. 

**Usages:**

* Use this Profile: [CH eTOC Document](StructureDefinition-ch-etoc-document.md)
* Examples for this Profile: [Composition/CompositionEtoc](Composition-CompositionEtoc.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-etoc|current/StructureDefinition/ch-etoc-composition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-etoc-composition.csv), [Excel](StructureDefinition-ch-etoc-composition.xlsx), [Schematron](StructureDefinition-ch-etoc-composition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-etoc-composition",
  "url" : "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-composition",
  "version" : "3.0.1",
  "name" : "ChEtocComposition",
  "title" : "CH eTOC Composition",
  "status" : "active",
  "date" : "2025-12-16T15:53:41+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "Juerg P. Bleuer",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    }
  ],
  "description" : "Definition for the Composition resource in the context of electronic transition of care.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Composition",
        "path" : "Composition",
        "short" : "CH eTOC Composition"
      },
      {
        "id" : "Composition.type",
        "path" : "Composition.type",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "371535009"
            }
          ]
        }
      },
      {
        "id" : "Composition.category",
        "path" : "Composition.category",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "721927009"
            }
          ]
        }
      },
      {
        "id" : "Composition.title",
        "path" : "Composition.title",
        "patternString" : "Zuweisungsschreiben"
      },
      {
        "id" : "Composition.section:orderReferral",
        "path" : "Composition.section",
        "sliceName" : "orderReferral"
      },
      {
        "id" : "Composition.section:orderReferral.entry",
        "path" : "Composition.section.entry",
        "min" : 3
      },
      {
        "id" : "Composition.section:orderReferral.entry:Questionnaire",
        "path" : "Composition.section.entry",
        "sliceName" : "Questionnaire",
        "min" : 1
      },
      {
        "id" : "Composition.section:orderReferral.entry:QuestionnaireResponse",
        "path" : "Composition.section.entry",
        "sliceName" : "QuestionnaireResponse",
        "min" : 1
      },
      {
        "id" : "Composition.section:orderReferral.entry:ServiceRequest",
        "path" : "Composition.section.entry",
        "sliceName" : "ServiceRequest",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-servicerequest"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:sectionPurpose",
        "path" : "Composition.section",
        "sliceName" : "sectionPurpose",
        "short" : "Contains information about the purpose/reason",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionPurpose.title",
        "path" : "Composition.section.title",
        "short" : "Purpose",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionPurpose.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "42349-1",
              "display" : "Reason for referral (narrative)"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionPurpose.text",
        "path" : "Composition.section.text",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionPurpose.entry",
        "path" : "Composition.section.entry",
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-servicerequest"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionPurpose.section",
        "path" : "Composition.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:sectionProblems",
        "path" : "Composition.section",
        "sliceName" : "sectionProblems",
        "short" : "Contains the problem list",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionProblems.title",
        "path" : "Composition.section.title",
        "short" : "Problems",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionProblems.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "57852-6",
              "display" : "Problem list Narrative - Reported"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionProblems.text",
        "path" : "Composition.section.text",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionProblems.entry",
        "path" : "Composition.section.entry",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-primary-diagnosis",
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-secondary-diagnosis"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionMedications",
        "path" : "Composition.section",
        "sliceName" : "sectionMedications",
        "short" : "Contains information about the medication",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionMedications.title",
        "path" : "Composition.section.title",
        "short" : "Medication",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionMedications.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "42346-7",
              "display" : "Medications on admission (narrative)"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionMedications.text",
        "path" : "Composition.section.text",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionMedications.entry",
        "path" : "Composition.section.entry",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-medicationstatement"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionMedications.section",
        "path" : "Composition.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:sectionImmunizations",
        "path" : "Composition.section",
        "sliceName" : "sectionImmunizations",
        "short" : "Contains information about immunizations",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionImmunizations.title",
        "path" : "Composition.section.title",
        "short" : "Immunizations",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionImmunizations.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "11369-6",
              "display" : "History of Immunization Narrative"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionImmunizations.text",
        "path" : "Composition.section.text",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionImmunizations.entry",
        "path" : "Composition.section.entry",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-immunization"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionImmunizations.section",
        "path" : "Composition.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:sectionAllergies",
        "path" : "Composition.section",
        "sliceName" : "sectionAllergies",
        "short" : "Contains information about allergies and intolerances",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionAllergies.title",
        "path" : "Composition.section.title",
        "short" : "Allergies and intolerances",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionAllergies.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "48765-2",
              "display" : "Allergies and adverse reactions Document"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionAllergies.text",
        "path" : "Composition.section.text",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionAllergies.entry",
        "path" : "Composition.section.entry",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-allergyintolerance"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionPastIllnessHx",
        "path" : "Composition.section",
        "sliceName" : "sectionPastIllnessHx",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionPastIllnessHx.title",
        "path" : "Composition.section.title",
        "short" : "History of past illness",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionPastIllnessHx.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "11348-0",
              "display" : "History of past illness Narrative"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionPastIllnessHx.text",
        "path" : "Composition.section.text",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionPastIllnessHx.entry",
        "path" : "Composition.section.entry",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-illness"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionPastIllnessHx.section",
        "path" : "Composition.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:sectionFunctionalStatus",
        "path" : "Composition.section",
        "sliceName" : "sectionFunctionalStatus",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionFunctionalStatus.title",
        "path" : "Composition.section.title",
        "short" : "Functional Status",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionFunctionalStatus.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "47420-5",
              "display" : "Functional status assessment note"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionFunctionalStatus.text",
        "path" : "Composition.section.text",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionFunctionalStatus.entry",
        "path" : "Composition.section.entry",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-functionalstatus"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionFunctionalStatus.section",
        "path" : "Composition.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:sectionProceduresHx",
        "path" : "Composition.section",
        "sliceName" : "sectionProceduresHx",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionProceduresHx.title",
        "path" : "Composition.section.title",
        "short" : "History of Procedures",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionProceduresHx.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "47519-4",
              "display" : "History of Procedures Document"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionProceduresHx.text",
        "path" : "Composition.section.text",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionProceduresHx.entry",
        "path" : "Composition.section.entry",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-procedure"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionProceduresHx.section",
        "path" : "Composition.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:sectionSocialHistory",
        "path" : "Composition.section",
        "sliceName" : "sectionSocialHistory",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionSocialHistory.title",
        "path" : "Composition.section.title",
        "short" : "Social history",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionSocialHistory.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "29762-2",
              "display" : "Social history Narrative"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionSocialHistory.text",
        "path" : "Composition.section.text",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionSocialHistory.entry",
        "path" : "Composition.section.entry",
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-socialhistory"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionSocialHistory.section",
        "path" : "Composition.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:sectionMedicalDevices",
        "path" : "Composition.section",
        "sliceName" : "sectionMedicalDevices",
        "short" : "Contains information about medical devices",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionMedicalDevices.title",
        "path" : "Composition.section.title",
        "short" : "Medical devices",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionMedicalDevices.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "46264-8",
              "display" : "History of medical device use"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionMedicalDevices.text",
        "path" : "Composition.section.text",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionMedicalDevices.entry",
        "path" : "Composition.section.entry",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-device"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionResults",
        "path" : "Composition.section",
        "sliceName" : "sectionResults",
        "short" : "Contains informaion about diagnostic results",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionResults.title",
        "path" : "Composition.section.title",
        "short" : "Diagnostic results",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionResults.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "30954-2",
              "display" : "Relevant diagnostic tests/laboratory data Narrative"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionResults.text",
        "path" : "Composition.section.text",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionResults.entry",
        "path" : "Composition.section.entry",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-lab-observation",
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-pathology-observation",
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-radiology-observation",
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-cardiology-observation",
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-bodyweight-observation",
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-bodyheight-observation"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionResults.section",
        "path" : "Composition.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:sectionPregnancyHx",
        "path" : "Composition.section",
        "sliceName" : "sectionPregnancyHx",
        "short" : "Contains informaion about pregnancy",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionPregnancyHx.title",
        "path" : "Composition.section.title",
        "short" : "Pregnancy",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionPregnancyHx.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "10162-6",
              "display" : "History of pregnancies Narrative"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionPregnancyHx.text",
        "path" : "Composition.section.text",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionPregnancyHx.entry",
        "path" : "Composition.section.entry",
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-pregnancystatus",
              "http://fhir.ch/ig/ch-etoc/StructureDefinition/ch-etoc-expecteddeliverydate"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionPregnancyHx.section",
        "path" : "Composition.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:sectionAttachment",
        "path" : "Composition.section",
        "sliceName" : "sectionAttachment",
        "short" : "Contains attachment (whatever is considered as important)",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionAttachment.title",
        "path" : "Composition.section.title",
        "short" : "Attachments",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionAttachment.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "55107-7",
              "display" : "Addendum Document"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionAttachment.text",
        "path" : "Composition.section.text",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionAttachment.entry",
        "path" : "Composition.section.entry",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-documentreference"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:sectionAttachment.section",
        "path" : "Composition.section.section",
        "max" : "0"
      }
    ]
  }
}

```
