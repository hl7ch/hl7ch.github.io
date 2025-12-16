# CH LAB-Report Observation Results: Single Test - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Report Observation Results: Single Test**

## Resource Profile: CH LAB-Report Observation Results: Single Test 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-report/StructureDefinition/ChLab-observation-single-test | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabObservationSingleTest |
| **Copyright/Legal**: Used by permission of HL7 Switzerland, all rights reserved Creative Commons License | |

 
This profile constrains the ChLabObservationResultsLaboratory profile to represent single test results for the HL7 Swiss project. The profile enables only value[x] and component elements, hasMember elemens are not allowed 

 
This profile constrains the ChLabObservationResultsLaboratory profile to represent a single Test result or a component for the HL7 Swiss project. 

**Usages:**

* Derived from this Profile: [CH LAB-Report Observation Results: Albumin/Creatinine Ratio in Urine](StructureDefinition-ch-lab-observation-albumin-creatinine-urine-ratio.md), [CH LAB-Report Observation Results: Blood Group](StructureDefinition-ch-lab-observation-blood-group.md), [CH LAB-Report Observation Results CBC Panel - Blood by Automated count, Results in sliced component](StructureDefinition-ch-lab-observation-cbc.md), [CH LAB Observation Results: eGFR](StructureDefinition-ch-lab-observation-egfr.md)...Show 11 more,[CH LAB-Report Observation Results: Erythrocyte distribution width by Automated count](StructureDefinition-ch-lab-observation-results-ery-distribution-width.md),[CH LAB-Report Observation Results: Hemoglobin](StructureDefinition-ch-lab-observation-results-hb.md),[CH LAB-Report Observation Results: Hemotocrit](StructureDefinition-ch-lab-observation-results-ht.md),[CH LAB-Report Observation Results: Mean Corpuscular Hemoglobin MCH](StructureDefinition-ch-lab-observation-results-mch.md),[CH LAB-Report Observation Results: Mean Corpuscular Hemoglobin Concentration MCHC](StructureDefinition-ch-lab-observation-results-mchc.md),[CH LAB-Report Observation Results: MeanCorpuscularVolume MCV](StructureDefinition-ch-lab-observation-results-mcv.md),[CH LAB-Report Observation Results: Platelet Distribution Width](StructureDefinition-ch-lab-observation-results-platelets-distribution-width.md),[CH LAB-Report Observation Results: Platelet Mean Volume](StructureDefinition-ch-lab-observation-results-platelets-mean-volume.md),[CH LAB-Report Observation Results: Platelet Count](StructureDefinition-ch-lab-observation-results-platelets.md),[CH LAB-Report Observation Results: ErythrocyteCount](StructureDefinition-ch-lab-observation-results-rbc.md)and[CH LAB-Report Observation Results: LeucocyteCount](StructureDefinition-ch-lab-observation-results-wbc.md)
* Refer to this Profile: [CH LAB-Report Observation Results: Panel](StructureDefinition-ChLab-observation-panel.md)
* Examples for this Profile: [Observation/BloodGroupMemberABO](Observation-BloodGroupMemberABO.md), [Observation/BloodGroupMemberRh](Observation-BloodGroupMemberRh.md), [Observation/Hematocrit](Observation-Hematocrit.md) and [Observation/Hemoglobin](Observation-Hemoglobin.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-lab-report|current/StructureDefinition/ChLab-observation-single-test)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ChLab-observation-single-test.csv), [Excel](StructureDefinition-ChLab-observation-single-test.xlsx), [Schematron](StructureDefinition-ChLab-observation-single-test.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ChLab-observation-single-test",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Observation-resultslab-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ChLab-observation-single-test",
  "version" : "2.0.0",
  "name" : "ChLabObservationSingleTest",
  "title" : "CH LAB-Report Observation Results: Single Test",
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
  "description" : "This profile constrains the ChLabObservationResultsLaboratory profile to represent single test results for the  HL7 Swiss project. The profile enables only value[x] and component elements, hasMember elemens are not allowed",
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
  "purpose" : "This profile constrains the ChLabObservationResultsLaboratory profile to represent a single Test result or a component for the  HL7 Swiss project.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-laboratory",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Observation",
        "path" : "Observation"
      },
      {
        "id" : "Observation.hasMember",
        "path" : "Observation.hasMember",
        "max" : "0"
      }
    ]
  }
}

```
