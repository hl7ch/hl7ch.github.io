# Reimbursement SL 17973 - CH EPL (R5) v1.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Reimbursement SL 17973**

## Example RegulatedAuthorization: Reimbursement SL 17973



## Resource Content

```json
{
  "resourceType" : "RegulatedAuthorization",
  "id" : "FOPH-17973",
  "contained" : [{
    "resourceType" : "Organization",
    "id" : "holder-Tillotts-Pharma-AG",
    "meta" : {
      "profile" : ["http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-organization"]
    },
    "identifier" : [{
      "system" : "https://www.swissmedic.ch/fhir/identifier/locations",
      "value" : "01002393"
    },
    {
      "system" : "https://spor.ema.europa.eu/v1/locations",
      "value" : "100005174"
    },
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601001346451"
    }],
    "name" : "Tillotts Pharma AG"
  }],
  "extension" : [{
    "extension" : [{
      "url" : "FOPHDossierNumber",
      "valueIdentifier" : {
        "system" : "urn:oid:2.16.756.1",
        "value" : "17973"
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
      "valueDate" : "2004-02-01"
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
        "start" : "2004-02-01"
      }
    },
    {
      "url" : "firstListingDate",
      "valueDate" : "2004-02-01"
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
          "code" : "756002004013",
          "display" : "Rectal Vaginal"
        }]
      }
    },
    {
      "extension" : [{
        "url" : "value",
        "valueMoney" : {
          "value" : 40.89,
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
            "code" : "756002006010",
            "display" : "Price mutation after triennal review of pharmaceuticals"
          }]
        }
      },
      {
        "url" : "changeDate",
        "valueDate" : "2023-12-01"
      }],
      "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/productPrice"
    },
    {
      "extension" : [{
        "url" : "value",
        "valueMoney" : {
          "value" : 63.4,
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
    "reference" : "PackagedProductDefinition/PMP-Entocort-Solvent-and-Tablet"
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
        "valueDate" : "2007-01-01"
      },
      {
        "url" : "period",
        "valuePeriod" : {
          "start" : "2007-01-01"
        }
      },
      {
        "url" : "firstLimitationDate",
        "valueDate" : "2007-01-01"
      },
      {
        "url" : "limitationIndication",
        "valueReference" : {
          "reference" : "ClinicalUseDefinition/LIM-64766004-ENTOCORT"
        }
      },
      {
        "extension" : [{
          "url" : "value",
          "valueMoney" : {
            "value" : 40.89,
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
              "code" : "756002006010",
              "display" : "Price mutation after triennal review of pharmaceuticals"
            }]
          }
        },
        {
          "url" : "changeDate",
          "valueDate" : "2023-12-01"
        }],
        "url" : "http://fhir.ch/ig/ch-epl/StructureDefinition/productPrice"
      },
      {
        "extension" : [{
          "url" : "value",
          "valueMoney" : {
            "value" : 63.4,
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
    }],
    "reference" : {
      "reference" : "ClinicalUseDefinition/IND-10009900"
    }
  }],
  "holder" : {
    "reference" : "#holder-Tillotts-Pharma-AG"
  }
}

```
