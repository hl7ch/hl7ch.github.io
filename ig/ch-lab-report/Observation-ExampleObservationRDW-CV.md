# Erythrocyte Distribution Width Ratio - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Erythrocyte Distribution Width Ratio**

## Example Observation: Erythrocyte Distribution Width Ratio

Profile: [CH LAB-Report Observation Results: Erythrocyte distribution width by Automated count](StructureDefinition-ch-lab-observation-results-ery-distribution-width.md)

**status**: Final

**category**: Laboratory

**code**: Erythrocyte [DistWidth] in Blood by Automated count

**subject**: [Hans Guggindieluft](Bundle-LabResultReport-1-tvt.md#urn-uuid-6b8a0365-5022-403b-a5a5-8d8680d701ef)

**effective**: 2024-04-23 11:24:26+0100

**issued**: 2024-04-24 11:24:26+0100

**performer**: [Eva Erlenmeyer](Bundle-LabResultReport-1-tvt.md#urn-uuid-12328339-f7d6-4bb6-80e4-89fd03ce5052)

**value**: 15.2 %(Details: UCUM code% = '%')



## Resource Content

```json
{
  "resourceType" : "Observation",
  "id" : "ExampleObservationRDW-CV",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-ery-distribution-width"
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
        "code" : "788-0",
        "display" : "Erythrocyte [DistWidth] in Blood by Automated count"
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
  "valueQuantity" : {
    "value" : 15.2,
    "unit" : "%",
    "system" : "http://unitsofmeasure.org",
    "code" : "%"
  }
}

```
