# Xospata 40 mg, Filmtabletten - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Xospata 40 mg, Filmtabletten**

## Example MedicinalProductDefinition: Xospata 40 mg, Filmtabletten

Profile: [MedicinalProductDefinition](StructureDefinition-ch-idmp-medicinalproductdefinition.md)

**CH SMC - Authorized Dose Form**: Film-coated tablet

**identifier**: [Medical Product Identifier](NamingSystem-MPID.md)/CH-01100869-0672110010000

**indication**: 

Xospata wird angewendet für die Behandlung von erwachsenen Patienten, die an rezidivierter oder refraktärer akuter myeloider Leukämie (AML) mit FMS-ähnlichen Tyrosinkinase 3 (FLT3)-Mutationen leiden.

**legalStatusOfSupply**: A: Single dispensing requiring a medical or veterinary prescription

**additionalMonitoringIndicator**: No Warning

**pediatricUseIndicator**: Not authorised for the treatment in children

**classification**: gilteritinib, Synthetic

### MarketingStatuses

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Country** | **Status** | **DateRange** |
| * | Switzerland | No interruption of distribution reported | 2020-09-24 --> (ongoing) |

**attachedDocument**: 

* [DocumentReference: identifier = http://fhir.ch/ig/ch-idmp/sid/attno#Application / Assessment Tracking Number#123456989-initial submission-Example-xyz-123; status = current; type = Information for healthcare professionals; date = 2021-11-09 00:00:00+0000](DocumentReference-DocRef-FI-Xospata.md)
* [DocumentReference: identifier = http://fhir.ch/ig/ch-idmp/sid/attno#Application / Assessment Tracking Number#123456989-initial submission-Example-abc-123; status = current; type = Patient Information; date = 2021-11-09 00:00:00+0000](DocumentReference-DocRef-PI-Xospata.md)

> **name****productName**: Xospata 40 mg, Filmtabletten

### Usages

| | | |
| :--- | :--- | :--- |
| - | **Country** | **Language** |
| * | Switzerland | German (Switzerland) |




## Resource Content

```json
{
  "resourceType" : "MedicinalProductDefinition",
  "id" : "Xospata-Filmcoatedtablet",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-medicinalproductdefinition"]
  },
  "extension" : [{
    "url" : "http://fhir.ch/ig/ch-idmp/StructureDefinition/authorizedDoseForm",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://standardterms.edqm.eu",
        "code" : "10221000",
        "display" : "Film-coated tablet"
      }]
    }
  }],
  "identifier" : [{
    "system" : "http://fhir.ch/ig/ch-idmp/sid/mpid",
    "value" : "CH-01100869-0672110010000"
  }],
  "indication" : "Xospata wird angewendet für die Behandlung von erwachsenen Patienten, die an rezidivierter oder refraktärer akuter myeloider Leukämie (AML) mit FMS-ähnlichen Tyrosinkinase 3 (FLT3)-Mutationen leiden.",
  "legalStatusOfSupply" : {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-legal-status-of-supply",
      "code" : "756005034000001",
      "display" : "A: Single dispensing requiring a medical or veterinary prescription"
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
      "code" : "L01EX13"
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
      "start" : "2020-09-24"
    }
  }],
  "attachedDocument" : [{
    "reference" : "DocumentReference/DocRef-FI-Xospata"
  },
  {
    "reference" : "DocumentReference/DocRef-PI-Xospata"
  }],
  "name" : [{
    "productName" : "Xospata 40 mg, Filmtabletten",
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
