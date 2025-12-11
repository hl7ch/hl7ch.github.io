# Reimbursement SL 17418 - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Reimbursement SL 17418**

## Example RegulatedAuthorization: Reimbursement SL 17418



## Resource Content

```json
{
  "resourceType" : "RegulatedAuthorization",
  "id" : "FOPH-17418",
  "contained" : [
    {
      "resourceType" : "Organization",
      "id" : "holder-Sandoz-Pharmaceuticals-AG",
      "meta" : {
        "profile" : [
          "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-epl-organization"
        ]
      },
      "identifier" : [
        {
          "system" : "urn:oid:1.2.276.0.76",
          "value" : "100054743"
        },
        {
          "system" : "urn:oid:2.51.1.3",
          "value" : "7601001029439"
        }
      ],
      "name" : "Sandoz Pharmaceuticals AG"
    }
  ],
  "extension" : [
    {
      "extension" : [
        {
          "url" : "FOPHDossierNumber",
          "valueIdentifier" : {
            "system" : "urn:oid:2.16.756.1",
            "value" : "17418"
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
          "valueDate" : "2000-04-15"
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
            "start" : "2000-04-15"
          }
        },
        {
          "url" : "firstListingDate",
          "valueDate" : "2000-04-15"
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
                "code" : "756002004011",
                "display" : "Transdermal"
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
            "value" : 32.44,
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
          "valueDate" : "2014-11-01"
        }
      ],
      "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/productPrice"
    },
    {
      "extension" : [
        {
          "url" : "value",
          "valueMoney" : {
            "value" : 53.65,
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
      "reference" : "PackagedProductDefinition/PMP-Estalis-Transdermalpatch"
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
              "valueDate" : "2000-04-15"
            },
            {
              "url" : "period",
              "valuePeriod" : {
                "start" : "2000-04-15"
              }
            },
            {
              "url" : "firstLimitationDate",
              "valueDate" : "2000-04-15"
            },
            {
              "extension" : [
                {
                  "url" : "value",
                  "valueMoney" : {
                    "value" : 32.44,
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
                  "valueDate" : "2014-11-01"
                }
              ],
              "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/productPrice"
            },
            {
              "extension" : [
                {
                  "url" : "value",
                  "valueMoney" : {
                    "value" : 53.65,
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
        "reference" : "ClinicalUseDefinition/IND-10031285"
      }
    }
  ],
  "holder" : {
    "reference" : "#holder-Sandoz-Pharmaceuticals-AG"
  }
}

```
