# ALIS 5.1 FHIR ChargeItemLabServiceAssignment - CH ALIS Connect (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ALIS 5.1 FHIR ChargeItemLabServiceAssignment**

## Example ChargeItem: ALIS 5.1 FHIR ChargeItemLabServiceAssignment



## Resource Content

```json
{
  "resourceType" : "ChargeItem",
  "id" : "ChargeItemLabServiceAssignment",
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
    "valueString" : "46784"
  },
  {
    "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-sessionid",
    "valueString" : "1"
  },
  {
    "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-orderid",
    "valueString" : "2025403-2"
  },
  {
    "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-sectioncode",
    "valueCoding" : {
      "system" : "http://fhir.ch/ig/ch-alis-connect/CodeSystem/swiss-medical-specialties",
      "code" : "M990.06"
    }
  },
  {
    "url" : "http://fhir.ch/ig/ch-alis-connect/StructureDefinition/ch-alis-connect-ext-serviceassignment",
    "extension" : [{
      "url" : "OrderingProviderID",
      "valueString" : "7653253258966"
    },
    {
      "url" : "OrderSectionCode",
      "valueCoding" : {
        "system" : "http://fhir.ch/ig/ch-alis-connect/CodeSystem/swiss-medical-specialties",
        "code" : "M400.04"
      }
    },
    {
      "url" : "OrderDate",
      "valueDateTime" : "2025-03-03T10:05:36Z"
    },
    {
      "url" : "FollowUpOrder",
      "valueBoolean" : false
    }]
  }],
  "status" : "billable",
  "code" : {
    "coding" : [{
      "system" : "http://forum-datenaustausch.ch/tariff/317",
      "code" : "1368.00"
    }]
  },
  "subject" : {
    "reference" : "#pat"
  },
  "context" : {
    "reference" : "#enc"
  },
  "occurrenceDateTime" : "2025-03-04T09:00:00Z",
  "performingOrganization" : {
    "display" : "2700"
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
