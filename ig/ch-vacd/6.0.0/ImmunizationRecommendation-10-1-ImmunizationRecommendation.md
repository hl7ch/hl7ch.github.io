# 10.1 ImmunizationRecommendation - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **10.1 ImmunizationRecommendation**

## Example ImmunizationRecommendation: 10.1 ImmunizationRecommendation

Profile: [CH VACD Immunization Recommendations](StructureDefinition-ch-vacd-immunization-recommendation.md)

**identifier**: `urn:oid:2.999.1.2.3.4`/2

**patient**: [Monika Wegmueller Female, DoB: 1967-02-10 ( Medical record number)](Patient-3-1-Patient.md)

**date**: 2021-06-01 00:00:00+0200

> **recommendation****vaccineCode**:Influenza vaccination**targetDisease**:Cholera (disorder)**forecastStatus**:Due**forecastReason**:Empfohlene Impfungen für Risikogruppen

### DateCriterions

| | | |
| :--- | :--- | :--- |
| - | **Code** | **Value** |
| * | Date vaccine due | 2021-06-01 00:00:00+0200 |




## Resource Content

```json
{
  "resourceType" : "ImmunizationRecommendation",
  "id" : "10-1-ImmunizationRecommendation",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization-recommendation"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "2"
    }
  ],
  "patient" : {
    "reference" : "Patient/3-1-Patient"
  },
  "date" : "2021-06-01T00:00:00+02:00",
  "recommendation" : [
    {
      "vaccineCode" : [
        {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "86198006",
              "display" : "Influenza vaccination"
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
            "system" : "http://fhir.ch/ig/ch-vacd/CodeSystem/ch-vacd-recommendation-forecast-status-cs",
            "code" : "due",
            "display" : "Due"
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
