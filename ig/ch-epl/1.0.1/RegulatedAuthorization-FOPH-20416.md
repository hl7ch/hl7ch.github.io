# Reimbursement SL 20416 - CH EPL (R5) v1.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Reimbursement SL 20416**

## Example RegulatedAuthorization: Reimbursement SL 20416



## Resource Content

```json
{
  "resourceType" : "RegulatedAuthorization",
  "id" : "FOPH-20416",
  "contained" : [{
    "resourceType" : "Organization",
    "id" : "holder-MSD-Merck-Sharp-Dohme-AG",
    "meta" : {
      "profile" : ["http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-organization"]
    },
    "identifier" : [{
      "system" : "https://www.swissmedic.ch/fhir/identifier/locations",
      "value" : "01003060"
    },
    {
      "system" : "https://spor.ema.europa.eu/v1/locations",
      "value" : "100080484"
    },
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601001001138"
    }],
    "name" : "MSD Merck Sharp & Dohme AG"
  }],
  "extension" : [{
    "extension" : [{
      "url" : "FOPHDossierNumber",
      "valueIdentifier" : {
        "system" : "urn:oid:2.16.756.1",
        "value" : "20416"
      }
    },
    {
      "url" : "status",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-reimbursement-status",
          "code" : "756001021001",
          "display" : "Reimbursed"
        }]
      }
    },
    {
      "url" : "statusDate",
      "valueDate" : "2023-01-01"
    },
    {
      "url" : "expiryDate",
      "valueDate" : "2025-03-31"
    },
    {
      "url" : "listingStatus",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-listing-status",
          "code" : "756001002001",
          "display" : "Listed"
        }]
      }
    },
    {
      "url" : "listingPeriod",
      "valuePeriod" : {
        "start" : "2023-01-01",
        "end" : "2024-12-31"
      }
    },
    {
      "url" : "firstListingDate",
      "valueDate" : "2017-09-01"
    },
    {
      "url" : "costShare",
      "valueInteger" : 10
    },
    {
      "url" : "gamme",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-gamme",
          "code" : "756002004005",
          "display" : "Parenteral Depot"
        }]
      }
    },
    {
      "url" : "priceModel",
      "valueBoolean" : true
    },
    {
      "extension" : [{
        "url" : "value",
        "valueMoney" : {
          "value" : 4407.68,
          "currency" : "CHF"
        }
      },
      {
        "url" : "type",
        "valueCodeableConcept" : {
          "coding" : [{
            "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-price-type",
            "code" : "756002005002",
            "display" : "Ex-factory price"
          }]
        }
      },
      {
        "url" : "changeType",
        "valueCodeableConcept" : {
          "coding" : [{
            "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-type-of-price-change",
            "code" : "756002006009",
            "display" : "Normal price mutation"
          }]
        }
      },
      {
        "url" : "changeDate",
        "valueDate" : "2023-01-01"
      }],
      "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/productPrice"
    },
    {
      "extension" : [{
        "url" : "value",
        "valueMoney" : {
          "value" : 4768.5,
          "currency" : "CHF"
        }
      },
      {
        "url" : "type",
        "valueCodeableConcept" : {
          "coding" : [{
            "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-price-type",
            "code" : "756002005001",
            "display" : "Retail price"
          }]
        }
      },
      {
        "url" : "changeType",
        "valueCodeableConcept" : {
          "coding" : [{
            "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-type-of-price-change",
            "code" : "756002006008",
            "display" : "VAT-change"
          }]
        }
      },
      {
        "url" : "changeDate",
        "valueDate" : "2024-01-01"
      }],
      "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/productPrice"
    }],
    "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/reimbursementSL"
  }],
  "subject" : [{
    "reference" : "PackagedProductDefinition/PMP-Keytruda-100mg-4ml-Solution-for-Infusion"
  }],
  "type" : {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-authorisation-type",
      "code" : "756000002003",
      "display" : "Reimbursement SL"
    }]
  },
  "indication" : [{
    "extension" : [{
      "extension" : [{
        "url" : "status",
        "valueCodeableConcept" : {
          "coding" : [{
            "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-limitationstatus",
            "code" : "756002071001",
            "display" : "Limitation Reimbursed"
          }]
        }
      },
      {
        "url" : "statusDate",
        "valueDate" : "2025-11-01"
      },
      {
        "url" : "period",
        "valuePeriod" : {
          "start" : "2025-11-01"
        }
      },
      {
        "url" : "firstLimitationDate",
        "valueDate" : "2023-01-01"
      },
      {
        "url" : "indicationCode",
        "valueString" : "20416.17"
      },
      {
        "url" : "limitationIndication",
        "valueReference" : {
          "reference" : "ClinicalUseDefinition/LIM-254837009"
        }
      }],
      "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/regulatedAuthorization-limitation"
    }],
    "reference" : {
      "reference" : "ClinicalUseDefinition/IND-10075566"
    }
  },
  {
    "extension" : [{
      "extension" : [{
        "url" : "status",
        "valueCodeableConcept" : {
          "coding" : [{
            "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-limitationstatus",
            "code" : "756002071001",
            "display" : "Limitation Reimbursed"
          }]
        }
      },
      {
        "url" : "statusDate",
        "valueDate" : "2023-01-01"
      },
      {
        "url" : "period",
        "valuePeriod" : {
          "start" : "2023-01-01",
          "end" : "2024-12-31"
        }
      },
      {
        "url" : "reimbursementEndDate",
        "valueDate" : "2025-03-31"
      },
      {
        "url" : "firstLimitationDate",
        "valueDate" : "2023-01-01"
      },
      {
        "url" : "indicationCode",
        "valueString" : "20416.XX"
      },
      {
        "url" : "limitationIndication",
        "valueReference" : {
          "reference" : "ClinicalUseDefinition/LIM-20416.XX"
        }
      },
      {
        "extension" : [{
          "url" : "value",
          "valueMoney" : {
            "value" : 4407.68,
            "currency" : "CHF"
          }
        },
        {
          "url" : "type",
          "valueCodeableConcept" : {
            "coding" : [{
              "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-price-type",
              "code" : "756002005002",
              "display" : "Ex-factory price"
            }]
          }
        },
        {
          "url" : "changeType",
          "valueCodeableConcept" : {
            "coding" : [{
              "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-type-of-price-change",
              "code" : "756002006009",
              "display" : "Normal price mutation"
            }]
          }
        },
        {
          "url" : "changeDate",
          "valueDate" : "2023-01-01"
        }],
        "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/productPrice"
      },
      {
        "extension" : [{
          "url" : "value",
          "valueMoney" : {
            "value" : 4768.5,
            "currency" : "CHF"
          }
        },
        {
          "url" : "type",
          "valueCodeableConcept" : {
            "coding" : [{
              "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-price-type",
              "code" : "756002005001",
              "display" : "Retail price"
            }]
          }
        },
        {
          "url" : "changeType",
          "valueCodeableConcept" : {
            "coding" : [{
              "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-type-of-price-change",
              "code" : "756002006008",
              "display" : "VAT-change"
            }]
          }
        },
        {
          "url" : "changeDate",
          "valueDate" : "2024-01-01"
        }],
        "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/productPrice"
      }],
      "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/regulatedAuthorization-limitation"
    }]
  }],
  "holder" : {
    "reference" : "#holder-MSD-Merck-Sharp-Dohme-AG"
  }
}

```
