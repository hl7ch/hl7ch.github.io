# 10.3 ImmunizationRecommendation (Recommendation Request/Response) - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **10.3 ImmunizationRecommendation (Recommendation Request/Response)**

## Example ImmunizationRecommendation: 10.3 ImmunizationRecommendation (Recommendation Request/Response)

Profile: [CH VACD Immunization Recommendations](StructureDefinition-ch-vacd-immunization-recommendation.md)

**identifier**: `urn:oid:2.999.1.2.3.4`/2

**patient**: [Monika Wegmueller Female, DoB: 1967-03-10 ( Medical record number)](Patient-3-2-Patient.md)

**date**: 2021-06-01 00:00:00+0200

> **recommendation****vaccineCode**:Vaccine product containing only Influenza virus antigen (medicinal product)**targetDisease**:Influenza caused by seasonal influenza virus (disorder)**forecastStatus**:Due**forecastReason**:Empfohlene Impfungen für Risikogruppen

### DateCriterions

| | | |
| :--- | :--- | :--- |
| - | **Code** | **Value** |
| * | Date vaccine due | 2021-06-01 00:00:00+0200 |




## Resource Content

```json
{
  "resourceType" : "ImmunizationRecommendation",
  "id" : "10-3-ImmunizationRecommendation",
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
    "reference" : "Patient/3-2-Patient"
  },
  "date" : "2021-06-01T00:00:00+02:00",
  "recommendation" : [
    {
      "vaccineCode" : [
        {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "1181000221105",
              "display" : "Vaccine product containing only Influenza virus antigen (medicinal product)"
            }
          ]
        }
      ],
      "targetDisease" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "719590007",
            "display" : "Influenza caused by seasonal influenza virus (disorder)"
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
