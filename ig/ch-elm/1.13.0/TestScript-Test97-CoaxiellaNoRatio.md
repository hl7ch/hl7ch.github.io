# Test97-CoaxiellaNoRatio - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Test97-CoaxiellaNoRatio**

## TestScript: Test97-CoaxiellaNoRatio 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/TestScript/Test97-CoaxiellaNoRatio | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:Test97CoaxiellaNoRatio |
| **Copyright/Legal**: CC0-1.0 | |

**url**: [TestScript Test97CoaxiellaNoRatio](TestScript-Test97-CoaxiellaNoRatio.md)

**version**: 1.13.0

**name**: Test97CoaxiellaNoRatio

**status**: Active

**date**: 2025-11-25 09:47:06+0000

**publisher**: Federal Office of Public Health FOPH

**contact**: Federal Office of Public Health FOPH: [https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html](https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html)

**jurisdiction**: Switzerland

**copyright**: 

CC0-1.0

> **fixture**
> **id**inputdata
**autocreate**: false**autodelete**: false**resource**:[Binary: application/fhir+xml (13560 bytes base64)](Binary-Test97-Bundle-CoaxiellaNoRatio.md)

> **test****name**: Test97**description**: Test97: Verify that error for missing ratio is raised
> **action**

### Operations

| | | | | | | |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| - | **Type** | **Description** | **ContentType** | **EncodeRequestUrl** | **Params** | **SourceId** |
| * | [Test script operation code: validate](http://terminology.hl7.org/6.5.0/CodeSystem-testscript-operation-codes.html#testscript-operation-codes-validate)($validate) | validate | application/fhir+json | true | profile=http://fhir.ch/ig/ch-elm/StructureDefinition/ch-elm-document-strict | inputdata |


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
| * | Confirm that we have errors. | issue.where(severity='error' or severity='fatal').count()>0 | true | false |


> **action**

### Asserts

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| - | **Description** | **Expression** | **Value** | **WarningOnly** |
| * | Check Constraint failed: ch-elm-observation-profile-loinc | issue.where(diagnostics.matches('Constraint failed: ch-elm-observation-profile-loinc')).count() > 0 | true | false |





## Resource Content

```json
{
  "resourceType" : "TestScript",
  "id" : "Test97-CoaxiellaNoRatio",
  "url" : "http://fhir.ch/ig/ch-elm/TestScript/Test97-CoaxiellaNoRatio",
  "version" : "1.13.0",
  "name" : "Test97CoaxiellaNoRatio",
  "status" : "active",
  "date" : "2025-11-25T09:47:06+00:00",
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
        "reference" : "Binary/Test97-Bundle-CoaxiellaNoRatio"
      }
    }
  ],
  "test" : [
    {
      "name" : "Test97",
      "description" : "Test97: Verify that error for missing ratio is raised",
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
            "description" : "Confirm that we have errors.",
            "expression" : "issue.where(severity='error' or severity='fatal').count()>0",
            "value" : "true",
            "warningOnly" : false
          }
        },
        {
          "assert" : {
            "description" : "Check Constraint failed: ch-elm-observation-profile-loinc",
            "expression" : "issue.where(diagnostics.matches('Constraint failed: ch-elm-observation-profile-loinc')).count() > 0",
            "value" : "true",
            "warningOnly" : false
          }
        }
      ]
    }
  ]
}

```
