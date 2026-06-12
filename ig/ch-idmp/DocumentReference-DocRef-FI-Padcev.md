# Padcev 20 mg, Pulver Information for healthcare professionals - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Padcev 20 mg, Pulver Information for healthcare professionals**

## Example DocumentReference: Padcev 20 mg, Pulver Information for healthcare professionals

Profile: [DocumentReference](StructureDefinition-ch-idmp-documentreference.md)

**identifier**: [Application / Assessment Tracking Number](NamingSystem-AttNo.md)/123456989-initial submission-Example-xyz-321

**status**: Current

**type**: Information for healthcare professionals

**date**: 2021-11-09 00:00:00+0000

> **content**

### Attachments

| | | |
| :--- | :--- | :--- |
| - | **Language** | **Url** |
| * | German (Switzerland) | [https://Swissmedicinfo.ch/showText.aspx?textType=FI&lang=DE&authNr=68291&supportMultipleResults=1](https://Swissmedicinfo.ch/showText.aspx?textType=FI&lang=DE&authNr=68291&supportMultipleResults=1) |




## Resource Content

```json
{
  "resourceType" : "DocumentReference",
  "id" : "DocRef-FI-Padcev",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-documentreference"]
  },
  "identifier" : [{
    "system" : "http://fhir.ch/ig/ch-idmp/sid/attno",
    "value" : "123456989-initial submission-Example-xyz-321"
  }],
  "status" : "current",
  "type" : {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-attached-document-type",
      "code" : "756005040000001",
      "display" : "Information for healthcare professionals"
    }]
  },
  "date" : "2021-11-09T00:00:00Z",
  "content" : [{
    "attachment" : {
      "language" : "de-CH",
      "url" : "https://Swissmedicinfo.ch/showText.aspx?textType=FI&lang=DE&authNr=68291&supportMultipleResults=1"
    }
  }]
}

```
