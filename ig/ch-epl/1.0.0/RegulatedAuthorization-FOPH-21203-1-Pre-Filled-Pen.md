# Reimbursement SL 21203 1 Pre-Filled Pen - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Reimbursement SL 21203 1 Pre-Filled Pen**

## Example RegulatedAuthorization: Reimbursement SL 21203 1 Pre-Filled Pen



## Resource Content

```json
{
  "resourceType" : "RegulatedAuthorization",
  "id" : "FOPH-21203-1-Pre-Filled-Pen",
  "contained" : [
    {
      "resourceType" : "Organization",
      "id" : "holder-Pfizer-AG",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-epl-organization"
        ]
      },
      "identifier" : [
        {
          "system" : "urn:oid:1.2.276.0.76",
          "value" : "100015286"
        },
        {
          "system" : "urn:oid:2.51.1.3",
          "value" : "7601001010604"
        }
      ],
      "name" : "Pfizer AG"
    }
  ],
  "extension" : [
    {
      "extension" : [
        {
          "url" : "FOPHDossierNumber",
          "valueIdentifier" : {
            "system" : "urn:oid:2.16.756.1",
            "value" : "21203"
          }
        },
        {
          "url" : "status",
          "valueCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-reimbursement-status",
                "code" : "756001021001",
                "display" : "Reimbursed"
              }
            ]
          }
        },
        {
          "url" : "statusDate",
          "valueDate" : "2021-06-01"
        },
        {
          "url" : "expiryDate",
          "valueDate" : "2100-12-31"
        },
        {
          "url" : "listingStatus",
          "valueCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-listing-status",
                "code" : "756001002001",
                "display" : "Listed"
              }
            ]
          }
        },
        {
          "url" : "listingPeriod",
          "valuePeriod" : {
            "start" : "2021-06-01",
            "end" : "2100-12-31"
          }
        },
        {
          "url" : "firstListingDate",
          "valueDate" : "2021-06-01"
        },
        {
          "url" : "costShare",
          "valueInteger" : 10
        },
        {
          "url" : "productType",
          "valueCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-product-type",
                "code" : "756001003002",
                "display" : "Originator product"
              }
            ]
          }
        },
        {
          "url" : "gamme",
          "valueCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-gamme",
                "code" : "756002004002",
                "display" : "Parenteral"
              }
            ]
          }
        }
      ],
      "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/reimbursementSL"
    },
    {
      "extension" : [
        {
          "url" : "value",
          "valueMoney" : {
            "value" : 371.1,
            "currency" : "CHF"
          }
        },
        {
          "url" : "type",
          "valueCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-price-type",
                "code" : "756002005002",
                "display" : "Ex-factory price"
              }
            ]
          }
        },
        {
          "url" : "changeType",
          "valueCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-type-of-price-change",
                "code" : "756002006006",
                "display" : "Normal price mutation"
              }
            ]
          }
        },
        {
          "url" : "changeDate",
          "valueDate" : "2023-12-01"
        }
      ],
      "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/productPrice"
    },
    {
      "extension" : [
        {
          "url" : "value",
          "valueMoney" : {
            "value" : 419.95,
            "currency" : "CHF"
          }
        },
        {
          "url" : "type",
          "valueCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-price-type",
                "code" : "756002005001",
                "display" : "Retail price"
              }
            ]
          }
        },
        {
          "url" : "changeType",
          "valueCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-type-of-price-change",
                "code" : "756002006005",
                "display" : "VAT-change"
              }
            ]
          }
        },
        {
          "url" : "changeDate",
          "valueDate" : "2023-12-01"
        }
      ],
      "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/productPrice"
    }
  ],
  "subject" : [
    {
      "reference" : "PackagedProductDefinition/PMP-Abrilada-40mg-0.8ml-1-Pre-Filled-Pen"
    }
  ],
  "type" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-authorisation-type",
        "code" : "756000002003",
        "display" : "Reimbursement SL"
      }
    ]
  },
  "indication" : [
    {
      "extension" : [
        {
          "extension" : [
            {
              "url" : "limitationIndication",
              "valueReference" : {
                "reference" : "ClinicalUseDefinition/LIM-69896004"
              }
            },
            {
              "url" : "status",
              "valueCodeableConcept" : {
                "coding" : [
                  {
                    "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-limitationstatus",
                    "code" : "756002071001",
                    "display" : "Limitation Reimbursed"
                  }
                ]
              }
            },
            {
              "url" : "statusDate",
              "valueDate" : "2024-05-01"
            },
            {
              "url" : "period",
              "valuePeriod" : {
                "start" : "2024-05-01",
                "end" : "2100-12-31"
              }
            },
            {
              "url" : "reimbursementEndDate",
              "valueDate" : "2100-12-31"
            },
            {
              "url" : "firstLimitationDate",
              "valueDate" : "2022-03-01"
            }
          ],
          "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/regulatedAuthorization-limitation"
        },
        {
          "extension" : [
            {
              "url" : "limitationIndication",
              "valueReference" : {
                "reference" : "ClinicalUseDefinition/LIM-156370009"
              }
            },
            {
              "url" : "status",
              "valueCodeableConcept" : {
                "coding" : [
                  {
                    "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-limitationstatus",
                    "code" : "756002071001",
                    "display" : "Limitation Reimbursed"
                  }
                ]
              }
            },
            {
              "url" : "statusDate",
              "valueDate" : "2024-05-01"
            },
            {
              "url" : "period",
              "valuePeriod" : {
                "start" : "2024-05-01",
                "end" : "2100-12-31"
              }
            },
            {
              "url" : "reimbursementEndDate",
              "valueDate" : "2100-12-31"
            },
            {
              "url" : "firstLimitationDate",
              "valueDate" : "2022-03-01"
            }
          ],
          "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/regulatedAuthorization-limitation"
        },
        {
          "extension" : [
            {
              "url" : "limitationIndication",
              "valueReference" : {
                "reference" : "ClinicalUseDefinition/LIM-9631008"
              }
            },
            {
              "url" : "status",
              "valueCodeableConcept" : {
                "coding" : [
                  {
                    "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-limitationstatus",
                    "code" : "756002071001",
                    "display" : "Limitation Reimbursed"
                  }
                ]
              }
            },
            {
              "url" : "statusDate",
              "valueDate" : "2024-05-01"
            },
            {
              "url" : "period",
              "valuePeriod" : {
                "start" : "2024-05-01",
                "end" : "2100-12-31"
              }
            },
            {
              "url" : "reimbursementEndDate",
              "valueDate" : "2100-12-31"
            },
            {
              "url" : "firstLimitationDate",
              "valueDate" : "2022-03-01"
            }
          ],
          "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/regulatedAuthorization-limitation"
        },
        {
          "extension" : [
            {
              "url" : "limitationIndication",
              "valueReference" : {
                "reference" : "ClinicalUseDefinition/LIM-34000006"
              }
            },
            {
              "url" : "status",
              "valueCodeableConcept" : {
                "coding" : [
                  {
                    "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-limitationstatus",
                    "code" : "756002071001",
                    "display" : "Limitation Reimbursed"
                  }
                ]
              }
            },
            {
              "url" : "statusDate",
              "valueDate" : "2024-05-01"
            },
            {
              "url" : "period",
              "valuePeriod" : {
                "start" : "2024-05-01",
                "end" : "2100-12-31"
              }
            },
            {
              "url" : "reimbursementEndDate",
              "valueDate" : "2100-12-31"
            },
            {
              "url" : "firstLimitationDate",
              "valueDate" : "2022-03-01"
            }
          ],
          "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/regulatedAuthorization-limitation"
        },
        {
          "extension" : [
            {
              "url" : "limitationIndication",
              "valueReference" : {
                "reference" : "ClinicalUseDefinition/LIM-64766004"
              }
            },
            {
              "url" : "status",
              "valueCodeableConcept" : {
                "coding" : [
                  {
                    "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-limitationstatus",
                    "code" : "756002071001",
                    "display" : "Limitation Reimbursed"
                  }
                ]
              }
            },
            {
              "url" : "statusDate",
              "valueDate" : "2024-05-01"
            },
            {
              "url" : "period",
              "valuePeriod" : {
                "start" : "2024-05-01",
                "end" : "2100-12-31"
              }
            },
            {
              "url" : "reimbursementEndDate",
              "valueDate" : "2100-12-31"
            },
            {
              "url" : "firstLimitationDate",
              "valueDate" : "2022-03-01"
            }
          ],
          "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/regulatedAuthorization-limitation"
        },
        {
          "extension" : [
            {
              "url" : "limitationIndication",
              "valueReference" : {
                "reference" : "ClinicalUseDefinition/LIM-9014002"
              }
            },
            {
              "url" : "status",
              "valueCodeableConcept" : {
                "coding" : [
                  {
                    "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-limitationstatus",
                    "code" : "756002071001",
                    "display" : "Limitation Reimbursed"
                  }
                ]
              }
            },
            {
              "url" : "statusDate",
              "valueDate" : "2024-05-01"
            },
            {
              "url" : "period",
              "valuePeriod" : {
                "start" : "2024-05-01",
                "end" : "2100-12-31"
              }
            },
            {
              "url" : "reimbursementEndDate",
              "valueDate" : "2100-12-31"
            },
            {
              "url" : "firstLimitationDate",
              "valueDate" : "2022-03-01"
            }
          ],
          "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/regulatedAuthorization-limitation"
        },
        {
          "extension" : [
            {
              "url" : "limitationIndication",
              "valueReference" : {
                "reference" : "ClinicalUseDefinition/LIM-59393003"
              }
            },
            {
              "url" : "status",
              "valueCodeableConcept" : {
                "coding" : [
                  {
                    "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-limitationstatus",
                    "code" : "756002071001",
                    "display" : "Limitation Reimbursed"
                  }
                ]
              }
            },
            {
              "url" : "statusDate",
              "valueDate" : "2024-05-01"
            },
            {
              "url" : "period",
              "valuePeriod" : {
                "start" : "2024-05-01",
                "end" : "2100-12-31"
              }
            },
            {
              "url" : "reimbursementEndDate",
              "valueDate" : "2100-12-31"
            },
            {
              "url" : "firstLimitationDate",
              "valueDate" : "2022-03-01"
            }
          ],
          "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/regulatedAuthorization-limitation"
        }
      ],
      "reference" : {
        "reference" : "ClinicalUseDefinition/IND-10020041"
      }
    }
  ],
  "holder" : {
    "reference" : "#holder-Pfizer-AG"
  }
}

```
