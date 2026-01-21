# CH ELM Observation Results: Laboratory - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Observation Results: Laboratory**

## Resource Profile: CH ELM Observation Results: Laboratory 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:ChElmObservationResultsLaboratory |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM base profile constrains the Observation resource for the purpose of laboratory test reports. 

**Usages:**

* Derived from this Profile: [CH ELM Observation Results for HIV Recency Testing (strict)](StructureDefinition-ch-elm-observation-results-hiv-recency-strict.md), [CH ELM Observation Results for Genotyping](StructureDefinition-ch-elm-observation-results-laboratory-genotyping.md), [CH ELM Observation Results for Microbiology studies (set)](StructureDefinition-ch-elm-observation-results-laboratory-microbiology.md) and [CH ELM Observation Results for Microbial susceptibility tests](StructureDefinition-ch-elm-observation-results-laboratory-susceptibility.md)
* Use this Profile: [CH ELM Document: Laboratory Report](StructureDefinition-ch-elm-document.md)
* Refer to this Profile: [CH ELM DiagnosticReport: Laboratory Report](StructureDefinition-ch-elm-diagnosticreport.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-elm|current/StructureDefinition/ch-elm-observation-results-laboratory)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-elm-observation-results-laboratory.csv), [Excel](StructureDefinition-ch-elm-observation-results-laboratory.xlsx), [Schematron](StructureDefinition-ch-elm-observation-results-laboratory.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-elm-observation-results-laboratory",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Observation-resultslab-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory",
  "version" : "1.13.1",
  "name" : "ChElmObservationResultsLaboratory",
  "title" : "CH ELM Observation Results: Laboratory",
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
  "description" : "This CH ELM base profile constrains the Observation resource for the purpose of laboratory test reports.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-laboratory",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Observation",
        "path" : "Observation",
        "short" : "CH ELM Observation Results: Laboratory",
        "constraint" : [
          {
            "key" : "ch-elm-expecting-specimen-specification",
            "severity" : "error",
            "human" : "If Observation.code is a member of http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-expecting-specimen-specification, then Specimen.type must be a member of the mapped ValueSet in http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-expecting-specimen-specification-to-results-completion-vs",
            "expression" : "code.memberOf('http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-expecting-specimen-specification') implies (specimen.resolve().exists() and specimen.resolve().type.exists() and specimen.resolve().type.memberOf('http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-expecting-specimen-specification-to-results-completion-vs'.resolve().group.where(source='http://loinc.org').element.where(code=%context.code.coding.where(system='http://loinc.org').first().code).target.first().code))",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory"
          },
          {
            "key" : "ch-elm-patient-name-representation-initial-loinc",
            "severity" : "error",
            "human" : "If Observation.code is mapped to initials in http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-foph-patient-name-representation then patient.name.first and given must have one character and the following elements must not be provided: patient.telecom, patient.address.line",
            "expression" : "'http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-foph-patient-name-representation'.resolve().group.where(source='http://loinc.org').element.where(code=%context.code.coding.where(system='http://loinc.org').first().code).empty() or ('http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-foph-patient-name-representation'.resolve().group.where(source='http://loinc.org').element.where(code=%context.code.coding.where(system='http://loinc.org').first().code).target.first().code = 'initials' implies (subject.resolve().conformsTo('http://fhir.ch/ig/ch-elm/StructureDefinition/ChElmPatientInitials')))",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory"
          },
          {
            "key" : "ch-elm-patient-name-representation-initial-snomedct",
            "severity" : "error",
            "human" : "If Observation.code is mapped to initials in http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-foph-patient-name-representation then patient.name.first and given must have one character and the following elements must not be provided: patient.telecom, patient.address.line",
            "expression" : "'http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-foph-patient-name-representation'.resolve().group.where(source='http://snomed.info/sct').element.where(code=%context.code.coding.where(system='http://snomed.info/sct').first().code).empty() or ('http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-foph-patient-name-representation'.resolve().group.where(source='http://snomed.info/sct').element.where(code=%context.code.coding.where(system='http://snomed.info/sct').first().code).target.first().code = 'initials' implies (subject.resolve().conformsTo('http://fhir.ch/ig/ch-elm/StructureDefinition/ChElmPatientInitials')))",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory"
          },
          {
            "key" : "ch-elm-patient-name-representation-initial-or-vctcode-loinc",
            "severity" : "error",
            "human" : "If Observation.code is mapped to initials or vctcode in http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-foph-patient-name-representation then patient.name family and given must have one character or - in case of a VCT patient - must be masked and the following elements must not be provided: patient.telecom, patient.address.line.",
            "expression" : "'http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-foph-patient-name-representation'.resolve().group.where(source='http://loinc.org').element.where(code=%context.code.coding.where(system='http://loinc.org').first().code).empty() or ('http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-foph-patient-name-representation'.resolve().group.where(source='http://loinc.org').element.where(code=%context.code.coding.where(system='http://loinc.org').first().code).target.first().code = 'initials-or-vctcode' implies (subject.resolve().conformsTo('http://fhir.ch/ig/ch-elm/StructureDefinition/ChElmPatientInitials') or subject.resolve().conformsTo('http://fhir.ch/ig/ch-elm/StructureDefinition/ChElmPatientVCT')))",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory"
          },
          {
            "key" : "ch-elm-patient-name-representation-initial-or-vctcode-snomedct",
            "severity" : "error",
            "human" : "If Observation.code is mapped to initials or vctcode in http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-foph-patient-name-representation then patient.name family and given must have one character or - in case of a VCT patient - must be masked and the following elements must not be provided: patient.telecom, patient.address.line.",
            "expression" : "'http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-foph-patient-name-representation'.resolve().group.where(source='http://snomed.info/sct').element.where(code=%context.code.coding.where(system='http://snomed.info/sct').first().code).empty() or ('http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-foph-patient-name-representation'.resolve().group.where(source='http://snomed.info/sct').element.where(code=%context.code.coding.where(system='http://snomed.info/sct').first().code).target.first().code = 'initials-or-vctcode' implies (subject.resolve().conformsTo('http://fhir.ch/ig/ch-elm/StructureDefinition/ChElmPatientInitials') or subject.resolve().conformsTo('http://fhir.ch/ig/ch-elm/StructureDefinition/ChElmPatientVCT')))",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory"
          },
          {
            "key" : "ch-elm-patient-name-representation-hiv-code-loinc",
            "severity" : "error",
            "human" : "If Observation.code is mapped to hiv-code in http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-foph-patient-name-representation then patient representation must follow profile resource profile: CH ELM Patient HIV",
            "expression" : "'http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-foph-patient-name-representation'.resolve().group.where(source='http://loinc.org').element.where(code=%context.code.coding.where(system='http://loinc.org').first().code).empty() or ('http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-foph-patient-name-representation'.resolve().group.where(source='http://loinc.org').element.where(code=%context.code.coding.where(system='http://loinc.org').first().code).target.first().code = 'hiv-code' implies (subject.resolve().conformsTo('http://fhir.ch/ig/ch-elm/StructureDefinition/ChElmPatientHIV')))",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory"
          },
          {
            "key" : "ch-elm-patient-name-representation-hiv-code-snomedct",
            "severity" : "error",
            "human" : "If Observation.code is mapped to hiv-code in http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-foph-patient-name-representation then patient representation must follow profile resource profile: CH ELM Patient HIV",
            "expression" : "'http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-foph-patient-name-representation'.resolve().group.where(source='http://snomed.info/sct').element.where(code=%context.code.coding.where(system='http://snomed.info/sct').first().code).empty() or ('http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-foph-patient-name-representation'.resolve().group.where(source='http://snomed.info/sct').element.where(code=%context.code.coding.where(system='http://snomed.info/sct').first().code).target.first().code = 'hiv-code' implies (subject.resolve().conformsTo('http://fhir.ch/ig/ch-elm/StructureDefinition/ChElmPatientHIV')))",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory"
          }
        ]
      },
      {
        "id" : "Observation.status",
        "path" : "Observation.status",
        "patternCode" : "final"
      },
      {
        "id" : "Observation.code",
        "path" : "Observation.code",
        "type" : [
          {
            "code" : "CodeableConcept",
            "profile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-codeableconcept"
            ]
          }
        ],
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-laboratory-observation-complete"
        }
      },
      {
        "id" : "Observation.subject",
        "path" : "Observation.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-patient"
            ]
          }
        ]
      },
      {
        "id" : "Observation.effective[x]",
        "path" : "Observation.effective[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Observation.effective[x]:effectiveDateTime",
        "path" : "Observation.effective[x]",
        "sliceName" : "effectiveDateTime",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "dateTime"
          }
        ],
        "constraint" : [
          {
            "key" : "ch-elm-dateTime",
            "severity" : "error",
            "human" : "At least the format YYYY-MM-DD is required.",
            "expression" : "$this.toString().length() >= 10",
            "source" : "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-observation-results-laboratory"
          }
        ]
      },
      {
        "id" : "Observation.performer",
        "path" : "Observation.performer",
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-organization-lab"
            ]
          }
        ]
      },
      {
        "id" : "Observation.value[x]:valueString",
        "path" : "Observation.value[x]",
        "sliceName" : "valueString",
        "short" : "String if required by leading code, see also 'Guidance - Laboratory Result'",
        "type" : [
          {
            "code" : "string"
          }
        ]
      },
      {
        "id" : "Observation.value[x]:valueRatio",
        "path" : "Observation.value[x]",
        "sliceName" : "valueRatio",
        "short" : "Ratio if required by leading code, see also 'Guidance - Laboratory Result'",
        "type" : [
          {
            "code" : "Ratio",
            "profile" : [
              "http://hl7.eu/fhir/laboratory/StructureDefinition/Ratio-eu-lab"
            ]
          }
        ]
      },
      {
        "id" : "Observation.value[x]:valueQuantity",
        "path" : "Observation.value[x]",
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
        "id" : "Observation.value[x]:valueCodeableConcept",
        "path" : "Observation.value[x]",
        "sliceName" : "valueCodeableConcept",
        "short" : "Positive/Negative or code for an additional organism specification, see also 'Guidance - Laboratory Result'",
        "type" : [
          {
            "code" : "CodeableConcept",
            "profile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-codeableconcept"
            ]
          }
        ],
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-coded-values-laboratory"
        }
      },
      {
        "id" : "Observation.dataAbsentReason",
        "path" : "Observation.dataAbsentReason",
        "short" : "see also 'Guidance - Laboratory Result'"
      },
      {
        "id" : "Observation.interpretation",
        "path" : "Observation.interpretation",
        "short" : "see also 'Guidance - Laboratory Result'",
        "max" : "1",
        "type" : [
          {
            "code" : "CodeableConcept",
            "profile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-codeableconcept"
            ]
          }
        ]
      },
      {
        "id" : "Observation.specimen",
        "path" : "Observation.specimen",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-specimen"
            ]
          }
        ]
      }
    ]
  }
}

```
