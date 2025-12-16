# Blood Group Panel with Component ABO and Component Rh - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Blood Group Panel with Component ABO and Component Rh**

## Example Observation: Blood Group Panel with Component ABO and Component Rh

Profile: [CH LAB-Report Observation Results: Blood Group](StructureDefinition-ch-lab-observation-blood-group.md)

**identifier**: `http://example.org/Labor-Pipette/labvalues`/1304-03760-blood-group-component

**status**: Final

**category**: Laboratory, Blood banking and transfusion medicine (specialty) (qualifier value), Blood bank studies (set)

**code**: ABO and Rh group panel (Bld)

**subject**: [Hans Guggindieluft](Bundle-LabResultReport-1-tvt.md#urn-uuid-6b8a0365-5022-403b-a5a5-8d8680d701ef)

**effective**: 2024-04-23 11:24:26+0100

**issued**: 2024-04-24 11:24:26+0100

**performer**: [Eva Erlenmeyer](Bundle-LabResultReport-1-tvt.md#urn-uuid-12328339-f7d6-4bb6-80e4-89fd03ce5052)

**method**: Serotyping (qualifier value)

> **component****code**:ABO group [Type] in Blood**value**:Blood group AB

> **component****code**:Rh [Type] in Blood**value**:RhD positive (finding)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "BloodGroupCompAB0CompRhD",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-blood-group"
    ]
  },
  "identifier" : [
    {
      "system" : "http://example.org/Labor-Pipette/labvalues",
      "value" : "1304-03760-blood-group-component"
    }
  ],
  "status" : "final",
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "laboratory"
        }
      ]
    },
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "code" : "421661004",
          "display" : "Blood banking and transfusion medicine (specialty) (qualifier value)"
        }
      ]
    },
    {
      "coding" : [
        {
          "system" : "http://loinc.org",
          "code" : "18717-9",
          "display" : "Blood bank studies (set)"
        }
      ]
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "882-1",
        "display" : "ABO and Rh group [Type] in Blood"
      }
    ],
    "text" : "ABO and Rh group panel (Bld)"
  },
  "subject" : {
    "reference" : "urn:uuid:6b8a0365-5022-403b-a5a5-8d8680d701ef",
    "display" : "Hans Guggindieluft"
  },
  "effectiveDateTime" : "2024-04-23T11:24:26+01:00",
  "issued" : "2024-04-24T11:24:26+01:00",
  "performer" : [
    {
      "reference" : "urn:uuid:12328339-f7d6-4bb6-80e4-89fd03ce5052",
      "display" : "Eva Erlenmeyer"
    }
  ],
  "method" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "258075003",
        "display" : "Serotyping (qualifier value)"
      }
    ]
  },
  "component" : [
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "883-9",
            "display" : "ABO group [Type] in Blood"
          }
        ]
      },
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "165743006",
            "display" : "Blood group AB"
          }
        ]
      }
    },
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "10331-7",
            "display" : "Rh [Type] in Blood"
          }
        ]
      },
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "165747007",
            "display" : "RhD positive (finding)"
          }
        ]
      }
    }
  ]
}

```
