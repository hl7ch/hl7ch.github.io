# ALIS 5.1 FHIR ChargeItemLKAATIcdSessionB-45679 - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ALIS 5.1 FHIR ChargeItemLKAATIcdSessionB-45679**

## Example ChargeItem: ALIS 5.1 FHIR ChargeItemLKAATIcdSessionB-45679



## Resource Content

```json
{
  "resourceType" : "ChargeItem",
  "id" : "ChargeItemLKAATIcdSessionB-45679",
  "contained" : [{
    "resourceType" : "Patient",
    "id" : "pat",
    "identifier" : [{
      "type" : {
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
          "code" : "MR"
        }]
      },
      "system" : "http://www.example.ch/patienteniddomain",
      "value" : "102"
    }],
    "name" : [{
      "family" : "Tester",
      "given" : ["Paul"]
    }],
    "gender" : "male",
    "birthDate" : "1982-03-22"
  },
  {
    "resourceType" : "Encounter",
    "id" : "enc",
    "identifier" : [{
      "type" : {
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
          "code" : "VN"
        }]
      },
      "system" : "http://www.example.ch/fallnummerdomain",
      "value" : "987654"
    }],
    "status" : "finished",
    "class" : {
      "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
      "code" : "IMP",
      "display" : "inpatient encounter"
    },
    "subject" : {
      "reference" : "#pat"
    }
  }],
  "extension" : [{
    "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-itemnumber",
    "valueString" : "45679"
  },
  {
    "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-orderid",
    "valueString" : "20250305-1"
  },
  {
    "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-sessionannexb",
    "extension" : [{
      "url" : "SessionIDSectionB",
      "valueUuid" : "urn:uuid:28d92aa9-452a-459a-9baf-7c58910f2ab8"
    }]
  }],
  "status" : "billable",
  "code" : {
    "coding" : [{
      "system" : "http://forum-datenaustausch.ch/tariff/TMA",
      "code" : "GM.05.0010"
    }]
  },
  "subject" : {
    "reference" : "#pat"
  },
  "context" : {
    "reference" : "#enc"
  },
  "occurrenceDateTime" : "2024-04-05T09:00:00Z",
  "performer" : [{
    "function" : {
      "coding" : [{
        "system" : "http://fhir.ch/ig/ch-alis-connect/CodeSystem/ch-alis-connect-persontyp",
        "code" : "ResponsiblePhysician"
      }]
    },
    "actor" : {
      "display" : "7653253256988"
    }
  },
  {
    "function" : {
      "coding" : [{
        "system" : "http://fhir.ch/ig/ch-alis-connect/CodeSystem/ch-alis-connect-persontyp",
        "code" : "ProvidingPhysician"
      }]
    },
    "actor" : {
      "display" : "7653253256988"
    }
  }],
  "performingOrganization" : {
    "display" : "2400"
  },
  "costCenter" : {
    "display" : "007"
  },
  "quantity" : {
    "value" : 1
  },
  "enterer" : {
    "display" : "7653253256988"
  },
  "enteredDate" : "2025-03-05T10:05:36Z"
}

```
