# Test96-Ignore-Slice-Patient-Eu-Lab-Information - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Test96-Ignore-Slice-Patient-Eu-Lab-Information**

## TestScript: Test96-Ignore-Slice-Patient-Eu-Lab-Information 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/TestScript/Test96-Ignore-Slice-Patient-Eu-Lab-Information | *Version*:1.13.0 |
| Active as of 2025-11-25 | *Computable Name*:Test96IgnoreObservationInterpretationCodesInformation |
| **Copyright/Legal**: CC0-1.0 | |

**url**: [TestScript Test96IgnoreObservationInterpretationCodesInformation](TestScript-Test96-Ignore-Slice-Patient-Eu-Lab-Information.md)

**version**: 1.13.0

**name**: Test96IgnoreObservationInterpretationCodesInformation

**status**: Active

**date**: 2025-11-25 09:58:53+0000

**publisher**: Federal Office of Public Health FOPH

**contact**: Federal Office of Public Health FOPH: [https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html](https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html)

**jurisdiction**: Switzerland

**copyright**: 

CC0-1.0

> **fixture**
> **id**inputdata
**autocreate**: false**autodelete**: false**resource**:[DocumentReference: identifier = UUID:1cf9f2c3-7d6f-4b82-86ea-77b048bb4fdc; status = current](DocumentReference-Publish-2Doc-ChlamydiaTrachomatis-Vct.md)

> **test****name**: Test96**description**: Test script to verify that Information This element does not match any known slice defined in the profile http://hl7.eu/fhir/laboratory/StructureDefinition/Patient-eu-lab is ignored
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
| * | Confirm that we have no errors. | issue.where(severity='error' or severity='fatal').count()=0 | true | false |


> **action**

### Asserts

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| - | **Description** | **Expression** | **Value** | **WarningOnly** |
| * | Check information ignored | issue.where(severity='information' and diagnostics.matches('This element does not match any known slice defined in the profile http://hl7.eu/fhir/laboratory/StructureDefinition/Patient-eu-lab(.+)')).count() = 0 | true | false |





## Resource Content

```json
{
  "resourceType" : "TestScript",
  "id" : "Test96-Ignore-Slice-Patient-Eu-Lab-Information",
  "url" : "http://fhir.ch/ig/ch-elm/TestScript/Test96-Ignore-Slice-Patient-Eu-Lab-Information",
  "version" : "1.13.0",
  "name" : "Test96IgnoreObservationInterpretationCodesInformation",
  "status" : "active",
  "date" : "2025-11-25T09:58:53+00:00",
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
        "reference" : "DocumentReference/Publish-2Doc-ChlamydiaTrachomatis-Vct"
      }
    }
  ],
  "test" : [
    {
      "name" : "Test96",
      "description" : "Test script to verify that Information This element does not match any known slice defined in the profile http://hl7.eu/fhir/laboratory/StructureDefinition/Patient-eu-lab is ignored",
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
            "description" : "Check information ignored",
            "expression" : "issue.where(severity='information' and diagnostics.matches('This element does not match any known slice defined in the profile http://hl7.eu/fhir/laboratory/StructureDefinition/Patient-eu-lab(.+)')).count() = 0",
            "value" : "true",
            "warningOnly" : false
          }
        }
      ]
    }
  ]
}

```
