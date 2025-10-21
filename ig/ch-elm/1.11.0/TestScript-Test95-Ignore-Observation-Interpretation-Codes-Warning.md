# Test95-Ignore-Observation-Interpretation-Codes-Warning - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Test95-Ignore-Observation-Interpretation-Codes-Warning**

## TestScript: Test95-Ignore-Observation-Interpretation-Codes-Warning 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/TestScript/Test95-Ignore-Observation-Interpretation-Codes-Warning | *Version*:1.12.0 |
| Active as of 2025-10-21 | *Computable Name*:Test95IgnoreObservationInterpretationCodesWarning |
| **Copyright/Legal**: CC0-1.0 | |

**url**: [TestScript Test95IgnoreObservationInterpretationCodesWarning](TestScript-Test95-Ignore-Observation-Interpretation-Codes-Warning.md)

**version**: 1.12.0

**name**: Test95IgnoreObservationInterpretationCodesWarning

**status**: Active

**date**: 2025-10-21 11:37:53+0000

**publisher**: Federal Office of Public Health FOPH

**contact**: Federal Office of Public Health FOPH: [https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html](https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html)

**jurisdiction**: Switzerland

**copyright**: 

CC0-1.0

> **fixture**
> **id**inputdata
**autocreate**: false**autodelete**: false**resource**:[Bundle: identifier = UUID:3401332d-6012-443f-9690-9291adb23aa3; type = document; timestamp = 2024-08-05 12:00:00+0200](Bundle-15Doc-Measles-Seroconversion.md)

> **test****name**: Test95**description**: Test script to verify that warning None of the codings provided are in the value set 'Observation Interpretation Codes' is ignored
> **action**

### Operations

| | | | | | | |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| - | **Type** | **Description** | **ContentType** | **EncodeRequestUrl** | **Params** | **SourceId** |
| * | [Test script operation code validate](http://terminology.hl7.org/6.3.0/CodeSystem-testscript-operation-codes.html#testscript-operation-codes-validate): $validate | validate | application/fhir+json | true | profile=http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict | inputdata |


> **action**

### Asserts

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| - | **Description** | **Direction** | **ResponseCode** | **WarningOnly** |
| * | Confirm that the returned HTTP status is 200(OK). | response | 200 | false |


> **action**

### Asserts

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| - | **Description** | **Expression** | **Value** | **WarningOnly** |
| * | Confirm that the returned resource is an OperationOutcome. | is(FHIR.OperationOutcome) | true | false |


> **action**

### Asserts

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| - | **Description** | **Expression** | **Value** | **WarningOnly** |
| * | Confirm that we have no errors. | issue.where(severity='error' or severity='fatal').count()=0 | true | false |


> **action**

### Asserts

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| - | **Description** | **Expression** | **Value** | **WarningOnly** |
| * | Check warning ignored | issue.where(severity='warning' and diagnostics.matches('None of the codings provided are in the value set \'Observation Interpretation Codes\'(.+)')).count() = 0 | true | false |





## Resource Content

```json
{
  "resourceType" : "TestScript",
  "id" : "Test95-Ignore-Observation-Interpretation-Codes-Warning",
  "url" : "http://fhir.ch/ig/ch-elm/TestScript/Test95-Ignore-Observation-Interpretation-Codes-Warning",
  "version" : "1.12.0",
  "name" : "Test95IgnoreObservationInterpretationCodesWarning",
  "status" : "active",
  "date" : "2025-10-21T11:37:53+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "fixture" : [
    {
      "id" : "inputdata",
      "autocreate" : false,
      "autodelete" : false,
      "resource" : {
        "reference" : "Bundle/15Doc-Measles-Seroconversion"
      }
    }
  ],
  "test" : [
    {
      "name" : "Test95",
      "description" : "Test script to verify that warning None of the codings provided are in the value set 'Observation Interpretation Codes' is ignored",
      "action" : [
        {
          "operation" : {
            "type" : {
              "system" : "http://terminology.hl7.org/CodeSystem/testscript-operation-codes",
              "code" : "validate"
            },
            "description" : "validate",
            "contentType" : "application/fhir+json",
            "encodeRequestUrl" : true,
            "params" : "profile=http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict",
            "sourceId" : "inputdata"
          }
        },
        {
          "assert" : {
            "description" : "Confirm that the returned HTTP status is 200(OK).",
            "direction" : "response",
            "responseCode" : "200",
            "warningOnly" : false
          }
        },
        {
          "assert" : {
            "description" : "Confirm that the returned resource is an OperationOutcome.",
            "expression" : "is(FHIR.OperationOutcome)",
            "value" : "true",
            "warningOnly" : false
          }
        },
        {
          "assert" : {
            "description" : "Confirm that we have no errors.",
            "expression" : "issue.where(severity='error' or severity='fatal').count()=0",
            "value" : "true",
            "warningOnly" : false
          }
        },
        {
          "assert" : {
            "description" : "Check warning ignored",
            "expression" : "issue.where(severity='warning' and diagnostics.matches('None of the codings provided are in the value set \\'Observation Interpretation Codes\\'(.+)')).count() = 0",
            "value" : "true",
            "warningOnly" : false
          }
        }
      ]
    }
  ]
}

```
