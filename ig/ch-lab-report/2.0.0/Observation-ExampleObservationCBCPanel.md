# Observation CBC panel using 'hasMember' - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Observation CBC panel using 'hasMember'**

## Example Observation: Observation CBC panel using 'hasMember'

Profile: [CH LAB-Report Observation Results CBC Panel - Blood by Automated count, Results in nested Profiles](StructureDefinition-ch-lab-observation-cbc-panel.md)

**identifier**: `http://example.org/Labor-Pipette/labvalues`/1304-03780-cbc-panel

**status**: Final

**category**: Laboratory

**code**: CBC panel - Blood by Automated count

**subject**: [Hans Guggindieluft](Bundle-LabResultReport-1-tvt.md#urn-uuid-6b8a0365-5022-403b-a5a5-8d8680d701ef)

**effective**: 2024-04-23 11:24:26+0100

**issued**: 2024-04-24 11:24:26+0100

**performer**: [Eva Erlenmeyer](Bundle-LabResultReport-1-tvt.md#urn-uuid-12328339-f7d6-4bb6-80e4-89fd03ce5052)

**hasMember**: 

* [Observation Leukocytes [#/volume] in Blood by Automated count](Observation-ExampleObservationWBC.md)
* [Observation Erythrocytes [#/volume] in Blood by Automated count](Observation-ExampleObservationRBC.md)
* [Observation Hemoglobin [Mass/volume] in Blood](Observation-ExampleObservationHb.md)
* [Observation Hematocrit [Volume Fraction] of Blood by Automated count](Observation-ExampleObservationHt.md)
* [Observation MCV [Entitic mean volume] in Red Blood Cells by Automated count](Observation-ExampleObservationMCV.md)
* [Observation MCH [Entitic mass] by Automated count](Observation-ExampleObservationMCH.md)
* [Observation MCHC [Entitic Mass/volume] in Red Blood Cells by Automated count](Observation-ExampleObservationMCHC.md)
* [Observation Platelets [#/volume] in Blood by Automated count](Observation-ExampleObservationPlateletCount.md)
* [Observation Erythrocyte [DistWidth] in Blood by Automated count](Observation-ExampleObservationRDW-CV.md)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "ExampleObservationCBCPanel",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-cbc-panel"
    ]
  },
  "identifier" : [
    {
      "system" : "http://example.org/Labor-Pipette/labvalues",
      "value" : "1304-03780-cbc-panel"
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
    }
  ],
  "code" : {
    "coding" : [
      {
        "system" : "http://loinc.org",
        "code" : "58410-2"
      }
    ]
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
  "hasMember" : [
    {
      "reference" : "Observation/ExampleObservationWBC"
    },
    {
      "reference" : "Observation/ExampleObservationRBC"
    },
    {
      "reference" : "Observation/ExampleObservationHb"
    },
    {
      "reference" : "Observation/ExampleObservationHt"
    },
    {
      "reference" : "Observation/ExampleObservationMCV"
    },
    {
      "reference" : "Observation/ExampleObservationMCH"
    },
    {
      "reference" : "Observation/ExampleObservationMCHC"
    },
    {
      "reference" : "Observation/ExampleObservationPlateletCount"
    },
    {
      "reference" : "Observation/ExampleObservationRDW-CV"
    }
  ]
}

```
