# CH LAB-Report Observation Results: Albumin/Creatinine Ratio in Urine - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Report Observation Results: Albumin/Creatinine Ratio in Urine**

## Resource Profile: CH LAB-Report Observation Results: Albumin/Creatinine Ratio in Urine 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-albumin-creatinine-urine-ratio | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabObservation_uACR |
| **Copyright/Legal**: Used by permission of HL7 Switzerland, all rights reserved Creative Commons License | |

 
This profile constrains the ChLabObservationSingleTest profile determine ratio of the concentration of albumin and creatinine in urine. 

 
This profile constrains the ChLabObservationSingleTest profile to represent single Tests in relation to renal insufficiency for the HL7 Swiss project. 

**Usages:**

* Refer to this Profile: [CH LAB-Report Observation Results: Renal Insufficiency Panel](StructureDefinition-ch-lab-observation-renal-insufficiency-panel.md)
* Examples for this Profile: [Observation/AlbuminCreatininRatioUrin](Observation-AlbuminCreatininRatioUrin.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-lab-report|current/StructureDefinition/ch-lab-observation-albumin-creatinine-urine-ratio)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-lab-observation-albumin-creatinine-urine-ratio.csv), [Excel](StructureDefinition-ch-lab-observation-albumin-creatinine-urine-ratio.xlsx), [Schematron](StructureDefinition-ch-lab-observation-albumin-creatinine-urine-ratio.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-lab-observation-albumin-creatinine-urine-ratio",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Observation-resultslab-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-albumin-creatinine-urine-ratio",
  "version" : "2.0.0",
  "name" : "ChLabObservation_uACR",
  "title" : "CH LAB-Report Observation Results: Albumin/Creatinine Ratio in Urine",
  "status" : "active",
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
  "description" : "This profile constrains the ChLabObservationSingleTest profile determine ratio of the concentration of albumin and creatinine in urine.",
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
  "purpose" : "This profile constrains the ChLabObservationSingleTest profile to represent single Tests in relation to renal insufficiency for the  HL7 Swiss project.",
  "copyright" : "Used by permission of HL7 Switzerland, all rights reserved Creative Commons License",
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
        "short" : "CH LAB Observation Results: uACR"
      },
      {
        "id" : "Observation.category:studyType",
        "path" : "Observation.category",
        "sliceName" : "studyType",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "18719-5",
              "display" : "Chemistry studies (set)"
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
              "code" : "394596001",
              "display" : "Chemical pathology (qualifier value)"
            }
          ]
        }
      },
      {
        "id" : "Observation.code",
        "path" : "Observation.code",
        "short" : "Albumin/Creatinine (U) [Ratio]",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "32294-1"
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
              "code" : "271075006"
            }
          ]
        }
      }
    ]
  }
}

```
