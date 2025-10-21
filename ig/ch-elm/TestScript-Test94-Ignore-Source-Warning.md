# Test94 - If warning is ignored for Binding for path (.+) has no source - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Test94 - If warning is ignored for Binding for path (.+) has no source**

## TestScript: Test94 - If warning is ignored for Binding for path (.+) has no source 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/TestScript/Test94-Ignore-Source-Warning | *Version*:1.12.0 |
| Active as of 2025-10-21 | *Computable Name*:Test94IgnoreSourceWarning |
| **Copyright/Legal**: CC0-1.0 | |

**url**: [TestScript Test94IgnoreSourceWarning](TestScript-Test94-Ignore-Source-Warning.md)

**version**: 1.12.0

**name**: Test94IgnoreSourceWarning

**status**: Active

**date**: 2025-10-21 11:52:21+0000

**publisher**: Federal Office of Public Health FOPH

**contact**: Federal Office of Public Health FOPH: [https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html](https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html)

**jurisdiction**: Switzerland

**copyright**: 

CC0-1.0

> **fixture**
> **id**inputdata
**autocreate**: false**autodelete**: false**resource**:[DocumentReference: identifier = UUID:1901332d-6012-443f-9690-9291adb2e19d; status = current](DocumentReference-Publish-1Doc-NeisseriaGonorrhoeae.md)

> **test****name**: Test94**description**: Test script to verify that warning Binding for path (.+) has no source, so can't be checked
> **action**

### Operations

| | | | | | | |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| - | **Type** | **Description** | **ContentType** | **EncodeRequestUrl** | **Params** | **SourceId** |
| * | [Test script operation code validate](http://terminology.hl7.org/6.3.0/CodeSystem-testscript-operation-codes.html#testscript-operation-codes-validate): $validate | validate | application/fhir+json | true | profile=http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReference | inputdata |


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
| * | Check slicing fails | issue.where(severity='information' and diagnostics.matches('Binding for path (.+) has no source, so can\'t be checked')).count() = 0 | true | false |





## Resource Content

```json
{
  "resourceType" : "TestScript",
  "id" : "Test94-Ignore-Source-Warning",
  "url" : "http://fhir.ch/ig/ch-elm/TestScript/Test94-Ignore-Source-Warning",
  "version" : "1.12.0",
  "name" : "Test94IgnoreSourceWarning",
  "status" : "active",
  "date" : "2025-10-21T11:52:21+00:00",
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
        "reference" : "DocumentReference/Publish-1Doc-NeisseriaGonorrhoeae"
      }
    }
  ],
  "test" : [
    {
      "name" : "Test94",
      "description" : "Test script to verify that warning Binding for path (.+) has no source, so can't be checked",
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
            "params" : "profile=http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReference",
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
            "description" : "Check slicing fails",
            "expression" : "issue.where(severity='information' and diagnostics.matches('Binding for path (.+) has no source, so can\\'t be checked')).count() = 0",
            "value" : "true",
            "warningOnly" : false
          }
        }
      ]
    }
  ]
}

```
