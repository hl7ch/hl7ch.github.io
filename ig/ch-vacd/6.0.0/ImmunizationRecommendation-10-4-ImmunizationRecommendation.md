# 10.4 ImmunizationRecommendation (Recommendation Request/Response) - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **10.4 ImmunizationRecommendation (Recommendation Request/Response)**

## Example ImmunizationRecommendation: 10.4 ImmunizationRecommendation (Recommendation Request/Response)

Profile: [CH VACD Immunization Recommendations](StructureDefinition-ch-vacd-immunization-recommendation.md)

**identifier**: `urn:oid:2.999.1.2.3.4`/1

**patient**: [Monika Wegmueller Female, DoB: 1967-03-10 ( Medical record number)](Patient-3-2-Patient.md)

**date**: 2021-06-01 00:00:00+0200

> **recommendation****vaccineCode**:Poliomyelitis vaccination**targetDisease**:Acute poliomyelitis (disorder)**forecastStatus**:Due**forecastReason**:Empfohlene Basisimpfungen

### DateCriterions

| | | |
| :--- | :--- | :--- |
| - | **Code** | **Value** |
| * | Date vaccine due | 2021-06-01 00:00:00+0200 |




## Resource Content

```json
{
  "resourceType" : "ImmunizationRecommendation",
  "id" : "10-4-ImmunizationRecommendation",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization-recommendation"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.999.1.2.3.4",
      "value" : "1"
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
              "code" : "72093006",
              "display" : "Poliomyelitis vaccination"
            }
          ]
        }
      ],
      "targetDisease" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "398102009",
            "display" : "Acute poliomyelitis (disorder)"
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
              "code" : "41501",
              "display" : "Empfohlene Basisimpfungen"
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
