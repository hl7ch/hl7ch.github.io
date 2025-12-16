# CH LAB-Report Observation Results: Erythrocyte distribution width by Automated count - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Report Observation Results: Erythrocyte distribution width by Automated count**

## Resource Profile: CH LAB-Report Observation Results: Erythrocyte distribution width by Automated count 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-ery-distribution-width | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabErythrocyteDistributionWidth |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the ChLabObservationSingleTest profile for the purpose of laboratory Erythrocyte Distribuition Width in Switzerland. 

**Usages:**

* Refer to this Profile: [CH LAB-Report Observation Results CBC Panel - Blood by Automated count, Results in nested Profiles](StructureDefinition-ch-lab-observation-cbc-panel.md)
* Examples for this Profile: [Observation/ExampleObservationRDW-CV](Observation-ExampleObservationRDW-CV.md) and [Observation/ExampleObservationRDW-SD](Observation-ExampleObservationRDW-SD.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-lab-report|current/StructureDefinition/ch-lab-observation-results-ery-distribution-width)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-lab-observation-results-ery-distribution-width.csv), [Excel](StructureDefinition-ch-lab-observation-results-ery-distribution-width.xlsx), [Schematron](StructureDefinition-ch-lab-observation-results-ery-distribution-width.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-lab-observation-results-ery-distribution-width",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Observation-resultslab-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-ery-distribution-width",
  "version" : "2.0.0",
  "name" : "ChLabErythrocyteDistributionWidth",
  "title" : "CH LAB-Report Observation Results: Erythrocyte distribution width by Automated count",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-16T10:40:10+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    },
    {
      "name" : "Marcel Hanselmann",
      "telecom" : [
        {
          "system" : "email",
          "value" : "laborprojektgruppe@gmail.com",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "This profile constrains the ChLabObservationSingleTest profile for the purpose of laboratory Erythrocyte Distribuition Width in Switzerland.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ChLab-observation-single-test",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Observation",
        "path" : "Observation",
        "short" : "CH LAB Observation Results: Laboratory Erythrocyte Distribution Width"
      },
      {
        "id" : "Observation.category:studyType",
        "path" : "Observation.category",
        "sliceName" : "studyType",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "18723-7"
            }
          ]
        }
      },
      {
        "id" : "Observation.category:specialty",
        "path" : "Observation.category",
        "sliceName" : "specialty",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "394916005"
            }
          ]
        }
      },
      {
        "id" : "Observation.code",
        "path" : "Observation.code",
        "short" : "ValueSet for the allowed LOINC codes aiming at Entitic volume and Ratio",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-lab-report/ValueSet/observation-code-entsvol-ratio"
        }
      },
      {
        "id" : "Observation.method",
        "path" : "Observation.method",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "702659008"
            }
          ]
        }
      },
      {
        "id" : "Observation.specimen",
        "path" : "Observation.specimen",
        "patternReference" : {
          "reference" : "Specimen/BloodCBC"
        }
      }
    ]
  }
}

```
