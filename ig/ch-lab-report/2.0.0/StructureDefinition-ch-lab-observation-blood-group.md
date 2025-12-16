# CH LAB-Report Observation Results: Blood Group - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Report Observation Results: Blood Group**

## Resource Profile: CH LAB-Report Observation Results: Blood Group 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-blood-group | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabObservationBloodGroup |
| **Copyright/Legal**: CC0-1.0 | |

 
Profile to report Blood Group and RhD data. In addition to the code element valuesets delivered from EU Laboratory we have added 3 supplement value sets: CH LAB-Report BloodGroup Antibody Screen Test Result, CH LAB-Report BloodGroup Antibody Result, CH LAB-Report BloodGroup Immunohematology Tests. These value sets have a candidate binding, i.e. they are candidates to substitute general value sets in some defined situations. 

**Usages:**

* Examples for this Profile: [Observation/BloodGroup-codedResult-1](Observation-BloodGroup-codedResult-1.md), [Observation/BloodGroup-codedResult-2](Observation-BloodGroup-codedResult-2.md), [Observation/BloodGroup-codedResult-3](Observation-BloodGroup-codedResult-3.md), [Observation/BloodGroup-freeTextResult-1](Observation-BloodGroup-freeTextResult-1.md)...Show 5 more,[Observation/BloodGroup-freeTextResult-2](Observation-BloodGroup-freeTextResult-2.md),[Observation/BloodGroup-freeTextResult-3](Observation-BloodGroup-freeTextResult-3.md),[Observation/BloodGroupAB0RhD](Observation-BloodGroupAB0RhD.md),[Observation/BloodGroupCompAB0CompRhD](Observation-BloodGroupCompAB0CompRhD.md)and[Observation/BloodGroupCompAB0CompRhDWeakD](Observation-BloodGroupCompAB0CompRhDWeakD.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-lab-report|current/StructureDefinition/ch-lab-observation-blood-group)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-lab-observation-blood-group.csv), [Excel](StructureDefinition-ch-lab-observation-blood-group.xlsx), [Schematron](StructureDefinition-ch-lab-observation-blood-group.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-lab-observation-blood-group",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-imposeProfile",
      "valueCanonical" : "http://hl7.eu/fhir/laboratory/StructureDefinition/Observation-resultslab-eu-lab"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-blood-group",
  "version" : "2.0.0",
  "name" : "ChLabObservationBloodGroup",
  "title" : "CH LAB-Report Observation Results: Blood Group",
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
  "description" : "Profile to report Blood Group and RhD data. In addition to the code element valuesets delivered from EU Laboratory we have added\n3 supplement value sets: CH LAB-Report BloodGroup Antibody Screen Test Result, CH LAB-Report BloodGroup Antibody Result, CH LAB-Report BloodGroup Immunohematology\nTests. These value sets have a candidate binding, i.e. they are candidates to substitute general value sets in some\ndefined situations.",
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
        "path" : "Observation"
      },
      {
        "id" : "Observation.category:studyType",
        "path" : "Observation.category",
        "sliceName" : "studyType",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "18717-9"
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
              "code" : "421661004"
            }
          ]
        }
      }
    ]
  }
}

```
