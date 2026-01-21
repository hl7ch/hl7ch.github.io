# Test100-Kosovo - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Test100-Kosovo**

## TestScript: Test100-Kosovo 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/TestScript/Test100-Kosovo | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:Test100Kosovo |
| **Copyright/Legal**: CC0-1.0 | |

**url**: [TestScript Test100Kosovo](TestScript-Test100-Kosovo.md)

**version**: 1.13.1

**name**: Test100Kosovo

**status**: Active

**date**: 2026-01-21 11:21:00+0000

**publisher**: Federal Office of Public Health FOPH

**contact**: Federal Office of Public Health FOPH: [https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html](https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html)

**jurisdiction**: Switzerland

**copyright**: 

CC0-1.0

> **fixture**
> **id**inputdata
**autocreate**: false**autodelete**: false**resource**: [Binary: application/fhir+json (12184 bytes base64)](Binary-Test100-Bundle-Kosovo.md)

> **test****name**: Test100Kosovo**description**: Test100: Verify that XK iso country code is allowed for Kosovo
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
| * | Confirm that we have errors. | issue.where(severity='error' or severity='fatal').count()=0 | true | false |





## Resource Content

```json
{
  "resourceType" : "TestScript",
  "id" : "Test100-Kosovo",
  "url" : "http://fhir.ch/ig/ch-elm/TestScript/Test100-Kosovo",
  "version" : "1.13.1",
  "name" : "Test100Kosovo",
  "status" : "active",
  "date" : "2026-01-21T11:21:00+00:00",
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
        "reference" : "Binary/Test100-Bundle-Kosovo"
      }
    }
  ],
  "test" : [
    {
      "name" : "Test100Kosovo",
      "description" : "Test100: Verify that XK iso country code is allowed for Kosovo",
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
            "expression" : "issue.where(severity='error' or severity='fatal').count()=0",
            "value" : "true",
            "warningOnly" : false
          }
        }
      ]
    }
  ]
}

```
