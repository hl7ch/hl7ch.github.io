# ALIS 5.1 FHIR ChargeItemPauschaleKomplett - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ALIS 5.1 FHIR ChargeItemPauschaleKomplett**

## Example ChargeItem: ALIS 5.1 FHIR ChargeItemPauschaleKomplett



## Resource Content

```json
{
  "resourceType" : "ChargeItem",
  "id" : "ChargeItemPauschaleKomplett",
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
    },
    "diagnosis" : [{
      "condition" : {
        "reference" : "#8b1c583c-cfc9-407b-8b14-1004a38fbf91"
      }
    }]
  },
  {
    "resourceType" : "Condition",
    "id" : "8b1c583c-cfc9-407b-8b14-1004a38fbf91",
    "extension" : [{
      "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-diagnosisconfidential",
      "valueBoolean" : false
    }],
    "code" : {
      "coding" : [{
        "system" : "http://fhir.de/CodeSystem/bfarm/icd-10-gm",
        "version" : "ICD-10-GM 2024",
        "code" : "B01.2"
      }]
    },
    "bodySite" : [{
      "coding" : [{
        "system" : "http://snomed.info/sct",
        "code" : "7771000"
      }]
    }],
    "subject" : {
      "reference" : "#pat"
    },
    "onsetDateTime" : "2025-03-04T09:00:00Z"
  }],
  "extension" : [{
    "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-itemnumber",
    "valueString" : "45678"
  },
  {
    "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-sessionid",
    "valueString" : "1"
  },
  {
    "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-orderid",
    "valueString" : "2025403-1"
  },
  {
    "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-sectioncode",
    "valueCoding" : {
      "system" : "http://fhir.ch/ig/ch-alis-connect/CodeSystem/swiss-medical-specialties",
      "code" : "M600.01"
    }
  },
  {
    "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-tpvalue",
    "valueDecimal" : 0.85
  }],
  "status" : "billable",
  "code" : {
    "coding" : [{
      "system" : "http://forum-datenaustausch.ch/tariff/TMA",
      "code" : "C02.CP.0010"
    }]
  },
  "subject" : {
    "reference" : "#pat"
  },
  "context" : {
    "reference" : "#enc"
  },
  "occurrenceDateTime" : "2025-03-04T09:00:00Z",
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
  "enteredDate" : "2025-05-05T10:05:36Z"
}

```
