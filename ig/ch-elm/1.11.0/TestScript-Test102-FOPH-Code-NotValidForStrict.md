# Test102-FOPH-Code-NotValidForStrict - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Test102-FOPH-Code-NotValidForStrict**

## TestScript: Test102-FOPH-Code-NotValidForStrict 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/TestScript/Test102-FOPH-Code-NotValidForStrict | *Version*:1.12.0 |
| Active as of 2025-10-21 | *Computable Name*:Test102FOPHCodeNotValidForStrict |
| **Copyright/Legal**: CC0-1.0 | |

**url**: [TestScript Test102FOPHCodeNotValidForStrict](TestScript-Test102-FOPH-Code-NotValidForStrict.md)

**version**: 1.12.0

**name**: Test102FOPHCodeNotValidForStrict

**status**: Active

**date**: 2025-10-21 11:37:53+0000

**publisher**: Federal Office of Public Health FOPH

**contact**: Federal Office of Public Health FOPH: [https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html](https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html)

**jurisdiction**: Switzerland

**copyright**: 

CC0-1.0

> **fixture**
> **id**inputdata
**autocreate**: false**autodelete**: false**resource**:[DocumentReference: identifier = UUID:1901332d-6012-443f-9690-9291adb2e1ff; status = current](DocumentReference-example-foph-code.md)

> **test****name**: Test102FOPHCodeNotValidForStrict**description**: Test102: Verify that FOPH code is not valid for strict profile
> **action**

### Operations

| | | | | | | |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| - | **Type** | **Description** | **ContentType** | **EncodeRequestUrl** | **Params** | **SourceId** |
| * | [Test script operation code validate](http://terminology.hl7.org/6.3.0/CodeSystem-testscript-operation-codes.html#testscript-operation-codes-validate): $validate | validate | application/fhir+json | true | profile=http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReferenceStrict | inputdata |


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
| * | Confirm that we have at least one error. | issue.where(severity='error' or severity='fatal').count()>0 | true | false |





## Resource Content

```json
{
  "resourceType" : "TestScript",
  "id" : "Test102-FOPH-Code-NotValidForStrict",
  "url" : "http://fhir.ch/ig/ch-elm/TestScript/Test102-FOPH-Code-NotValidForStrict",
  "version" : "1.12.0",
  "name" : "Test102FOPHCodeNotValidForStrict",
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
        "reference" : "DocumentReference/example-foph-code"
      }
    }
  ],
  "test" : [
    {
      "name" : "Test102FOPHCodeNotValidForStrict",
      "description" : "Test102: Verify that FOPH code is not valid for strict profile",
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
            "params" : "profile=http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReferenceStrict",
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
            "description" : "Confirm that we have at least one error.",
            "expression" : "issue.where(severity='error' or severity='fatal').count()>0",
            "value" : "true",
            "warningOnly" : false
          }
        }
      ]
    }
  ]
}

```
