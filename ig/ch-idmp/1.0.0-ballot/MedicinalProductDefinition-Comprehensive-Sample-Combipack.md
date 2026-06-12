# Comprehensive Sample Combipack 20 mg Vaginal Salbe und 100 mg Vaginaltabletten - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Comprehensive Sample Combipack 20 mg Vaginal Salbe und 100 mg Vaginaltabletten**

## Example MedicinalProductDefinition: Comprehensive Sample Combipack 20 mg Vaginal Salbe und 100 mg Vaginaltabletten

Profile: [MedicinalProductDefinition](StructureDefinition-ch-idmp-medicinalproductdefinition.md)

**CH SMC - Authorized Dose Form**: Cream + Pessary

**identifier**: [Medical Product Identifier](NamingSystem-MPID.md)/CH-11111111-1234560010000

**combinedPharmaceuticalDoseForm**: Cream + Pessary

**indication**: 

Comprehensive Sample Combipack wird angewendet zur Behandlung der bakteriellen Vaginose (früher bezeichnet als Haemophilus-Vaginitis, Gardnerella-Vaginitis, unspezifische Vaginitis, Corynebacterium-Vaginitis oder anaerobe Vaginose)

**legalStatusOfSupply**: D: Dispensed following expert advice

**additionalMonitoringIndicator**: No Warning

**pediatricUseIndicator**: Not authorised for the treatment in children

**classification**: nystatin, NA NAS, Synthetic

### MarketingStatuses

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Country** | **Status** | **DateRange** |
| * | Switzerland | No interruption of distribution reported | 2020-09-24 --> 2026-12-31 |

**attachedDocument**: 

* [DocumentReference: identifier = http://fhir.ch/ig/ch-idmp/sid/attno#Application / Assessment Tracking Number#999999999-FI-123; status = current; type = Information for healthcare professionals; date = 2023-07-01 00:00:00+0000](DocumentReference-DocRef-FI-Comprehensive.md)
* [DocumentReference: identifier = http://fhir.ch/ig/ch-idmp/sid/attno#Application / Assessment Tracking Number#999999999-PI-123; status = current; type = Patient Information; date = 2023-07-01 00:00:00+0000](DocumentReference-DocRef-PI-Comprehensive.md)

> **name****productName**: Comprehensive Sample Combipack 20 mg Vaginal Salbe und 100 mg Vaginaltabletten**type**: Authorised Medicinal Product Name

### Usages

| | | |
| :--- | :--- | :--- |
| - | **Country** | **Language** |
| * | Switzerland | German (Switzerland) |




## Resource Content

```json
{
  "resourceType" : "MedicinalProductDefinition",
  "id" : "Comprehensive-Sample-Combipack",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-medicinalproductdefinition"]
  },
  "extension" : [{
    "url" : "http://fhir.ch/ig/ch-idmp/StructureDefinition/authorizedDoseForm",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://standardterms.edqm.eu",
        "code" : "14001000",
        "display" : "Cream + Pessary"
      }]
    }
  }],
  "identifier" : [{
    "system" : "http://fhir.ch/ig/ch-idmp/sid/mpid",
    "value" : "CH-11111111-1234560010000"
  }],
  "combinedPharmaceuticalDoseForm" : {
    "coding" : [{
      "system" : "http://standardterms.edqm.eu",
      "code" : "14001000",
      "display" : "Cream + Pessary"
    }]
  },
  "indication" : "Comprehensive Sample Combipack wird angewendet zur Behandlung der bakteriellen Vaginose (früher bezeichnet als Haemophilus-Vaginitis, Gardnerella-Vaginitis, unspezifische Vaginitis, Corynebacterium-Vaginitis oder anaerobe Vaginose)",
  "legalStatusOfSupply" : {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-legal-status-of-supply",
      "code" : "756005034000005",
      "display" : "D: Dispensed following expert advice"
    }]
  },
  "additionalMonitoringIndicator" : {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-additional-monitoring-indicator",
      "code" : "756005001003",
      "display" : "No Warning"
    }]
  },
  "pediatricUseIndicator" : {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-pediatric-use-indicator",
      "code" : "756005003002",
      "display" : "Not authorised for the treatment in children"
    }]
  },
  "classification" : [{
    "coding" : [{
      "system" : "http://www.whocc.no/atc",
      "code" : "G01AA01"
    }]
  },
  {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-authorisation-category",
      "code" : "756005011000015",
      "display" : "NA NAS"
    }]
  },
  {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-MedicinalProductCategory",
      "code" : "756005039000001",
      "display" : "Synthetic"
    }]
  }],
  "marketingStatus" : [{
    "country" : {
      "coding" : [{
        "system" : "urn:iso:std:iso:3166",
        "code" : "CH",
        "display" : "Switzerland"
      }]
    },
    "status" : {
      "coding" : [{
        "system" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-marketing-status",
        "code" : "7560050074000003",
        "display" : "No interruption of distribution reported"
      }]
    },
    "dateRange" : {
      "start" : "2020-09-24",
      "end" : "2026-12-31"
    }
  }],
  "attachedDocument" : [{
    "reference" : "DocumentReference/DocRef-FI-Comprehensive"
  },
  {
    "reference" : "DocumentReference/DocRef-PI-Comprehensive"
  }],
  "name" : [{
    "productName" : "Comprehensive Sample Combipack 20 mg Vaginal  Salbe und 100 mg Vaginaltabletten",
    "type" : {
      "coding" : [{
        "system" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-medicinal-product-name-type",
        "code" : "SMC",
        "display" : "Authorised Medicinal Product Name"
      }]
    },
    "usage" : [{
      "country" : {
        "coding" : [{
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH",
          "display" : "Switzerland"
        }]
      },
      "language" : {
        "coding" : [{
          "system" : "urn:ietf:bcp:47",
          "code" : "de-CH"
        }]
      }
    }]
  }]
}

```
