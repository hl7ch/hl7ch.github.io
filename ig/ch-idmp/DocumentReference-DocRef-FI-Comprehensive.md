# Professional Information Comprehensive-Sample-Combipack - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Professional Information Comprehensive-Sample-Combipack**

## Example DocumentReference: Professional Information Comprehensive-Sample-Combipack

Profile: [DocumentReference](StructureDefinition-ch-idmp-documentreference.md)

**identifier**: [Application / Assessment Tracking Number](NamingSystem-AttNo.md)/999999999-FI-123

**status**: Current

**type**: Information for healthcare professionals

**date**: 2023-07-01 00:00:00+0000

> **content**

### Attachments

| | | |
| :--- | :--- | :--- |
| - | **Language** | **Url** |
| * | German (Switzerland) | [https://swissmedicinfo-pro.ch/showText.aspx?textType=FI&lang=DE&authNr=69093&supportMultipleResults=1](https://swissmedicinfo-pro.ch/showText.aspx?textType=FI&lang=DE&authNr=69093&supportMultipleResults=1) |




## Resource Content

```json
{
  "resourceType" : "DocumentReference",
  "id" : "DocRef-FI-Comprehensive",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-documentreference"]
  },
  "identifier" : [{
    "system" : "http://fhir.ch/ig/ch-idmp/sid/attno",
    "value" : "999999999-FI-123"
  }],
  "status" : "current",
  "type" : {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-attached-document-type",
      "code" : "756005040000001",
      "display" : "Information for healthcare professionals"
    }]
  },
  "date" : "2023-07-01T00:00:00Z",
  "content" : [{
    "attachment" : {
      "language" : "de-CH",
      "url" : "https://swissmedicinfo-pro.ch/showText.aspx?textType=FI&lang=DE&authNr=69093&supportMultipleResults=1"
    }
  }]
}

```
