# Reimbursement SL 21529 - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Reimbursement SL 21529**

## Example RegulatedAuthorization: Reimbursement SL 21529



## Resource Content

```json
{
  "resourceType" : "RegulatedAuthorization",
  "id" : "FOPH-21529",
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
            "value" : "21529"
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
          "valueDate" : "2023-12-01"
        },
        {
          "url" : "expiryDate",
          "valueDate" : "2026-03-31"
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
            "start" : "2023-12-01",
            "end" : "2025-12-31"
          }
        },
        {
          "url" : "firstListingDate",
          "valueDate" : "2023-12-01"
        },
        {
          "url" : "costShare",
          "valueInteger" : 10
        },
        {
          "url" : "gamme",
          "valueCodeableConcept" : {
            "coding" : [
              {
                "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-gamme",
                "code" : "756002004001",
                "display" : "Oral"
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
            "value" : 958.62,
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
                "code" : "756002006007",
                "display" : "Price mutation after triennal review of pharmaceuticals"
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
            "value" : 1113.95,
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
          "valueDate" : "2024-01-01"
        }
      ],
      "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/productPrice"
    }
  ],
  "subject" : [
    {
      "reference" : "PackagedProductDefinition/PMP-Paxlovid-Filmcoatedtablet"
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
              "valueDate" : "2023-12-01"
            },
            {
              "url" : "period",
              "valuePeriod" : {
                "start" : "2023-12-01",
                "end" : "2025-12-31"
              }
            },
            {
              "url" : "reimbursementEndDate",
              "valueDate" : "2026-03-31"
            },
            {
              "url" : "firstLimitationDate",
              "valueDate" : "2023-12-01"
            },
            {
              "url" : "limitationIndication",
              "valueReference" : {
                "reference" : "ClinicalUseDefinition/LIM-840539006"
              }
            },
            {
              "extension" : [
                {
                  "url" : "value",
                  "valueMoney" : {
                    "value" : 958.62,
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
                        "code" : "756002006007",
                        "display" : "Price mutation after triennal review of pharmaceuticals"
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
                    "value" : 1113.95,
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
                  "valueDate" : "2024-01-01"
                }
              ],
              "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/productPrice"
            }
          ],
          "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/regulatedAuthorization-limitation"
        }
      ],
      "reference" : {
        "reference" : "ClinicalUseDefinition/IND-10084529"
      }
    }
  ],
  "holder" : {
    "reference" : "#holder-Pfizer-AG"
  }
}

```
