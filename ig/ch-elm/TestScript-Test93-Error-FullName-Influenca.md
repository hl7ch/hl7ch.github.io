# Test93 Error if full name is provided by Influenca (should be initials) - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Test93 Error if full name is provided by Influenca (should be initials)**

## TestScript: Test93 Error if full name is provided by Influenca (should be initials) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/TestScript/Test93-Error-FullName-Influenca | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:Test93ErrorFullNameInfluenca |
| **Copyright/Legal**: CC0-1.0 | |

**url**: [TestScript Test93ErrorFullNameInfluenca](TestScript-Test93-Error-FullName-Influenca.md)

**version**: 1.13.1

**name**: Test93ErrorFullNameInfluenca

**status**: Active

**date**: 2026-01-21 11:21:00+0000

**publisher**: Federal Office of Public Health FOPH

**contact**: Federal Office of Public Health FOPH: [https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html](https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html)

**jurisdiction**: Switzerland

**copyright**: 

CC0-1.0

> **fixture**
> **id**inputdata
**autocreate**: false**autodelete**: false**resource**: [Binary: application/fhir+xml (19116 bytes base64)](Binary-Test93-DocumentReference-Error-FullName-Influenca.md)

> **test****name**: Test93**description**: Test script to verify error if full name is provided by Influenca (must be initials)
> **action**

### Operations

| | | | | | | |
| :--- | :--- | :--- | :--- | :--- | :--- | :--- |
| - | **Type** | **Description** | **ContentType** | **EncodeRequestUrl** | **Params** | **SourceId** |
| * | [Test script operation code: validate](http://terminology.hl7.org/6.5.0/CodeSystem-testscript-operation-codes.html#testscript-operation-codes-validate)($validate) | validate | application/fhir+json | true | profile=http://fhir.ch/ig/ch-elm/StructureDefinition/PublishDocumentReference | inputdata |


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
| * | Confirm that we have at least one error | issue.where(severity='error' or severity='fatal').count()>0 | true | false |


> **action**

### Asserts

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| - | **Description** | **Expression** | **Value** | **WarningOnly** |
| * | Check slicing fails | issue.where(severity='error' and diagnostics.startsWith('Slice \'DocumentReference.contained:document\': a matching slice is required, but not found')).count() > 0 | true | false |





## Resource Content

```json
{
  "resourceType" : "TestScript",
  "id" : "Test93-Error-FullName-Influenca",
  "url" : "http://fhir.ch/ig/ch-elm/TestScript/Test93-Error-FullName-Influenca",
  "version" : "1.13.1",
  "name" : "Test93ErrorFullNameInfluenca",
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
        "reference" : "Binary/Test93-DocumentReference-Error-FullName-Influenca"
      }
    }
  ],
  "test" : [
    {
      "name" : "Test93",
      "description" : "Test script to verify error if full name is provided by Influenca (must be initials)",
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
            "description" : "Confirm that we have at least one error",
            "expression" : "issue.where(severity='error' or severity='fatal').count()>0",
            "value" : "true",
            "warningOnly" : false
          }
        },
        {
          "assert" : {
            "description" : "Check slicing fails",
            "expression" : "issue.where(severity='error' and diagnostics.startsWith('Slice \\'DocumentReference.contained:document\\': a matching slice is required, but not found')).count() > 0",
            "value" : "true",
            "warningOnly" : false
          }
        }
      ]
    }
  ]
}

```
