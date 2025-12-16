# Example of Observation Result Panel - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example of Observation Result Panel**

## Example Observation: Example of Observation Result Panel

Profile: [CH LAB-Report Observation Results: Panel](StructureDefinition-ChLab-observation-panel.md)

**status**: Final

**category**: Laboratory

**code**: Hemoglobin and Hematocrit panel (Bld)

**subject**: [Hans Guggindieluft](Bundle-LabResultReport-1-tvt.md#urn-uuid-6b8a0365-5022-403b-a5a5-8d8680d701ef)

**effective**: 2024-04-23 11:24:26+0100

**issued**: 2024-04-24 11:24:26+0100

**performer**: [Eva Erlenmeyer](Bundle-LabResultReport-1-tvt.md#urn-uuid-12328339-f7d6-4bb6-80e4-89fd03ce5052)

**hasMember**: 

* [Observation Hemoglobin [Mass/volume] in Blood](Observation-Hemoglobin.md)
* [Observation Hematocrit [Volume Fraction] of Blood by calculation](Observation-Hematocrit.md)



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "ObservationPanel",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ChLab-observation-panel"
    ]
  },
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
        "code" : "24360-0"
      }
    ],
    "text" : "Hemoglobin and Hematocrit panel (Bld)"
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
      "reference" : "Observation/Hemoglobin"
    },
    {
      "reference" : "Observation/Hematocrit"
    }
  ]
}

```
