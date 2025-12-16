# CH LAB-Report Observation Results: Mean Corpuscular Hemoglobin Concentration MCHC - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Report Observation Results: Mean Corpuscular Hemoglobin Concentration MCHC**

## Resource Profile: CH LAB-Report Observation Results: Mean Corpuscular Hemoglobin Concentration MCHC 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-mchc | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabMeanCorpuscularHemoglobinConcentration |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the ChLabObservationSingleTest profile for the purpose of laboratory MCHC in Switzerland. 

**Usages:**

* Refer to this Profile: [CH LAB-Report Observation Results CBC Panel - Blood by Automated count, Results in nested Profiles](StructureDefinition-ch-lab-observation-cbc-panel.md)
* Examples for this Profile: [Observation/ExampleObservationMCHC](Observation-ExampleObservationMCHC.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-lab-report|current/StructureDefinition/ch-lab-observation-results-mchc)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-lab-observation-results-mchc.csv), [Excel](StructureDefinition-ch-lab-observation-results-mchc.xlsx), [Schematron](StructureDefinition-ch-lab-observation-results-mchc.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-lab-observation-results-mchc",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Observation-resultslab-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-mchc",
  "version" : "2.0.0",
  "name" : "ChLabMeanCorpuscularHemoglobinConcentration",
  "title" : "CH LAB-Report Observation Results: Mean Corpuscular Hemoglobin Concentration MCHC",
  "status" : "active",
  "date" : "2025-12-16T10:27:41+00:00",
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
  "description" : "This profile constrains the ChLabObservationSingleTest profile for the purpose of laboratory MCHC in Switzerland.",
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
        "short" : "CH LAB Observation Results: Laboratory MCHC"
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
        "short" : "MCHC Auto (RBC) [Mass/Vol]",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "786-4"
            }
          ]
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
