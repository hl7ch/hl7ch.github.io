# Professional Information Xospata, Filmtabletten - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Professional Information Xospata, Filmtabletten**

## Example DocumentReference: Professional Information Xospata, Filmtabletten

Profile: [DocumentReference](StructureDefinition-ch-idmp-documentreference.md)

**identifier**: [Application / Assessment Tracking Number](NamingSystem-AttNo.md)/123456989-initial submission-Example-xyz-123

**status**: Current

**type**: Information for healthcare professionals

**date**: 2021-11-09 00:00:00+0000

> **content**

### Attachments

| | |
| :--- | :--- |
| - | **Url** |
| * | [https://Swissmedicinfo.ch/showText.aspx?textType=FI&lang=DE&authNr=67211&supportMultipleResults=1](https://Swissmedicinfo.ch/showText.aspx?textType=FI&lang=DE&authNr=67211&supportMultipleResults=1) |




## Resource Content

```json
{
  "resourceType" : "DocumentReference",
  "id" : "DocRef-FI-Xospata",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-documentreference"]
  },
  "identifier" : [{
    "system" : "http://fhir.ch/ig/ch-idmp/sid/attno",
    "value" : "123456989-initial submission-Example-xyz-123"
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
      "url" : "https://Swissmedicinfo.ch/showText.aspx?textType=FI&lang=DE&authNr=67211&supportMultipleResults=1"
    }
  }]
}

```
