# CH Core ImmunizationRecommendation Example - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core ImmunizationRecommendation Example**

## Example ImmunizationRecommendation: CH Core ImmunizationRecommendation Example

Profile: [CH Core Immunization Recommendation](StructureDefinition-ch-core-immunization-recommendation.md)

**patient**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-ImmunizationPatientExample.md)

**date**: 2021-06-01 00:00:00+0200

**authority**: [Organization Gruppenpraxis CH](Organization-ImmunizationOrganizationExample.md)

> **recommendation****vaccineCode**:Fluad**targetDisease**:Cholera (disorder)**forecastStatus**:Due**forecastReason**:Empfohlene Impfungen für Risikogruppen

### DateCriterions

| | | |
| :--- | :--- | :--- |
| - | **Code** | **Value** |
| * | Date vaccine due | 2021-06-01 00:00:00+0200 |




## Resource Content

```json
{
  "resourceType" : "ImmunizationRecommendation",
  "id" : "CHCoreImmunizationRecommendationExample",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-immunization-recommendation"
    ]
  },
  "patient" : {
    "reference" : "Patient/ImmunizationPatientExample"
  },
  "date" : "2021-06-01T00:00:00+02:00",
  "authority" : {
    "reference" : "Organization/ImmunizationOrganizationExample"
  },
  "recommendation" : [
    {
      "vaccineCode" : [
        {
          "coding" : [
            {
              "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-swissmedic-cs",
              "code" : "58317",
              "display" : "Fluad"
            }
          ]
        }
      ],
      "targetDisease" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "63650001",
            "display" : "Cholera (disorder)"
          }
        ]
      },
      "forecastStatus" : {
        "coding" : [
          {
            "system" : "http://terminology.hl7.org/CodeSystem/immunization-recommendation-status",
            "code" : "due"
          }
        ]
      },
      "forecastReason" : [
        {
          "coding" : [
            {
              "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-recommendation-categories-cs",
              "code" : "41503",
              "display" : "Empfohlene Impfungen für Risikogruppen"
            }
          ]
        }
      ],
      "dateCriterion" : [
        {
          "code" : {
            "coding" : [
              {
                "system" : "http://loinc.org",
                "code" : "30980-7",
                "display" : "Date vaccine due"
              }
            ]
          },
          "value" : "2021-06-01T00:00:00+02:00"
        }
      ]
    }
  ]
}

```
