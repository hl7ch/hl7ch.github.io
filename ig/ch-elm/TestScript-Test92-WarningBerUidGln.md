# Test92 - Warning for Ber Uid and Gln - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Test92 - Warning for Ber Uid and Gln**

## TestScript: Test92 - Warning for Ber Uid and Gln 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/TestScript/Test92-WarningBerUidGln | *Version*:1.12.0 |
| Active as of 2025-10-21 | *Computable Name*:Test92WarningBerUidGln |
| **Copyright/Legal**: CC0-1.0 | |

**url**: [TestScript Test92WarningBerUidGln](TestScript-Test92-WarningBerUidGln.md)

**version**: 1.12.0

**name**: Test92WarningBerUidGln

**status**: Active

**date**: 2025-10-21 11:52:21+0000

**publisher**: Federal Office of Public Health FOPH

**contact**: Federal Office of Public Health FOPH: [https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html](https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html)

**jurisdiction**: Switzerland

**copyright**: 

CC0-1.0

> **fixture**
> **id**inputdata
**autocreate**: false**autodelete**: false**resource**:[Binary: application/fhir+json (12212 bytes base64)](Binary-Test92-Bundle-WarningBerUidGln.md)

> **test****name**: Test92**description**: Test92: Verify that warnings for incorrect BER, UID and GLN are raised
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
| * | Check Constraint failed: gln-modulus-10 | issue.where(severity='warning' and diagnostics.startsWith('Constraint failed: gln-modulus-10:')).count() = 1 | true | false |


> **action**

### Asserts

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| - | **Description** | **Expression** | **Value** | **WarningOnly** |
| * | Check Constraint failed: gln-startswith76 | issue.where(severity='warning' and diagnostics.startsWith('Constraint failed: gln-startswith76:')).count() = 1 | true | false |


> **action**

### Asserts

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| - | **Description** | **Expression** | **Value** | **WarningOnly** |
| * | Check Constraint failed: ber-length | issue.where(severity='warning' and diagnostics.startsWith('Constraint failed: ber-length')).count() = 1 | true | false |


> **action**

### Asserts

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| - | **Description** | **Expression** | **Value** | **WarningOnly** |
| * | Check Constraint failed: ber-modulus-11 | issue.where(severity='warning' and diagnostics.startsWith('Constraint failed: ber-modulus-11')).count() = 1 | true | false |


> **action**

### Asserts

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| - | **Description** | **Expression** | **Value** | **WarningOnly** |
| * | Check Constraint failed: uidb-length | issue.where(severity='warning' and diagnostics.startsWith('Constraint failed: uidb-length')).count() = 1 | true | false |


> **action**

### Asserts

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| - | **Description** | **Expression** | **Value** | **WarningOnly** |
| * | Check Constraint failed: uidb-modulus-11 | issue.where(severity='warning' and diagnostics.startsWith('Constraint failed: uidb-modulus-11')).count() = 1 | true | false |





## Resource Content

```json
{
  "resourceType" : "TestScript",
  "id" : "Test92-WarningBerUidGln",
  "url" : "http://fhir.ch/ig/ch-elm/TestScript/Test92-WarningBerUidGln",
  "version" : "1.12.0",
  "name" : "Test92WarningBerUidGln",
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
        "reference" : "Binary/Test92-Bundle-WarningBerUidGln"
      }
    }
  ],
  "test" : [
    {
      "name" : "Test92",
      "description" : "Test92: Verify that warnings for incorrect BER, UID and GLN are raised",
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
            "description" : "Check Constraint failed: gln-modulus-10",
            "expression" : "issue.where(severity='warning' and diagnostics.startsWith('Constraint failed: gln-modulus-10:')).count() = 1",
            "value" : "true",
            "warningOnly" : false
          }
        },
        {
          "assert" : {
            "description" : "Check Constraint failed: gln-startswith76",
            "expression" : "issue.where(severity='warning' and diagnostics.startsWith('Constraint failed: gln-startswith76:')).count() = 1",
            "value" : "true",
            "warningOnly" : false
          }
        },
        {
          "assert" : {
            "description" : "Check Constraint failed: ber-length",
            "expression" : "issue.where(severity='warning' and diagnostics.startsWith('Constraint failed: ber-length')).count() = 1",
            "value" : "true",
            "warningOnly" : false
          }
        },
        {
          "assert" : {
            "description" : "Check Constraint failed: ber-modulus-11",
            "expression" : "issue.where(severity='warning' and diagnostics.startsWith('Constraint failed: ber-modulus-11')).count() = 1",
            "value" : "true",
            "warningOnly" : false
          }
        },
        {
          "assert" : {
            "description" : "Check Constraint failed: uidb-length",
            "expression" : "issue.where(severity='warning' and diagnostics.startsWith('Constraint failed: uidb-length')).count() = 1",
            "value" : "true",
            "warningOnly" : false
          }
        },
        {
          "assert" : {
            "description" : "Check Constraint failed: uidb-modulus-11",
            "expression" : "issue.where(severity='warning' and diagnostics.startsWith('Constraint failed: uidb-modulus-11')).count() = 1",
            "value" : "true",
            "warningOnly" : false
          }
        }
      ]
    }
  ]
}

```
