# Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung**

## Example MedicinalProductDefinition: Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung

Profile: [MedicinalProductDefinition](StructureDefinition-ch-idmp-medicinalproductdefinition.md)

**CH SMC - Authorized Dose Form**: Lyophilisate for solution for infusion

**identifier**: [Medical Product Identifier](NamingSystem-MPID.md)/CH-01100869-0682910030000

**indication**: 

Padcev ist indiziert zur Behandlung von Erwachsenen mit lokal fortgeschrittenem oder metastasiertem Urothelkarzinom (mUC), die eine platinhaltige Chemotherapie im neoadjuvanten/adjuvanten, lokal fortgeschrittenen oder metastasierten Setting erhalten haben und die während oder nach der Behandlung mit einem Inhibitor des programmierten Zelltodrezeptors-1 (PD-1) oder des programmierten Zelltod-Liganden 1 (PD-L1) einen Progress oder einen Rückfall der Erkrankung erlitten haben.

**legalStatusOfSupply**: A: Single dispensing requiring a medical or veterinary prescription

**additionalMonitoringIndicator**: No Warning

**pediatricUseIndicator**: Not authorised for the treatment in children

**classification**: gilteritinib, NA KAS art. 12 para. 5 TPLO, Biologics

### MarketingStatuses

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Country** | **Status** | **DateRange** |
| * | Switzerland | No interruption of distribution reported | 2011-09-11 --> (ongoing) |

**attachedDocument**: [DocumentReference: identifier = http://fhir.ch/ig/ch-idmp/sid/attno#Application / Assessment Tracking Number#123456989-initial submission-Example-xyz-321; status = current; type = Information for healthcare professionals; date = 2021-11-09 00:00:00+0000](DocumentReference-DocRef-FI-Padcev.md)

> **name****productName**: Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung

### Usages

| | | |
| :--- | :--- | :--- |
| - | **Country** | **Language** |
| * | Switzerland | German (Switzerland) |




## Resource Content

```json
{
  "resourceType" : "MedicinalProductDefinition",
  "id" : "Padcev-20mg-Powder",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-medicinalproductdefinition"]
  },
  "extension" : [{
    "url" : "http://fhir.ch/ig/ch-idmp/StructureDefinition/authorizedDoseForm",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://standardterms.edqm.eu",
        "code" : "11215000",
        "display" : "Lyophilisate for solution for infusion"
      }]
    }
  }],
  "identifier" : [{
    "system" : "http://fhir.ch/ig/ch-idmp/sid/mpid",
    "value" : "CH-01100869-0682910030000"
  }],
  "indication" : "Padcev ist indiziert zur Behandlung von Erwachsenen mit lokal fortgeschrittenem oder metastasiertem Urothelkarzinom (mUC), die eine platinhaltige Chemotherapie im neoadjuvanten/adjuvanten, lokal fortgeschrittenen oder metastasierten Setting erhalten haben und die während oder nach der Behandlung mit einem Inhibitor des programmierten Zelltodrezeptors-1 (PD-1) oder des programmierten Zelltod-Liganden 1 (PD-L1) einen Progress oder einen Rückfall der Erkrankung erlitten haben.",
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
      "system" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-authorisation-category",
      "code" : "756005011000005",
      "display" : "NA KAS art. 12 para. 5 TPLO"
    }]
  },
  {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-MedicinalProductCategory",
      "code" : "756005039000003",
      "display" : "Biologics"
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
      "start" : "2011-09-11"
    }
  }],
  "attachedDocument" : [{
    "reference" : "DocumentReference/DocRef-FI-Padcev"
  }],
  "name" : [{
    "productName" : "Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung",
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
