# Patient Information Xospata, Filmtabletten - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patient Information Xospata, Filmtabletten**

## Example DocumentReference: Patient Information Xospata, Filmtabletten

Profile: [DocumentReference](StructureDefinition-ch-idmp-documentreference.md)

**identifier**: [Application / Assessment Tracking Number](NamingSystem-AttNo.md)/123456989-initial submission-Example-abc-123

**status**: Current

**type**: Patient Information

**date**: 2021-11-09 00:00:00+0000

> **content**

### Attachments

| | | |
| :--- | :--- | :--- |
| - | **Language** | **Url** |
| * | German (Switzerland) | [https://Swissmedicinfo.ch/showText.aspx?textType=PI&lang=DE&authNr=67211&supportMultipleResults=1](https://Swissmedicinfo.ch/showText.aspx?textType=PI&lang=DE&authNr=67211&supportMultipleResults=1) |




## Resource Content

```json
{
  "resourceType" : "DocumentReference",
  "id" : "DocRef-PI-Xospata",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-documentreference"]
  },
  "identifier" : [{
    "system" : "http://fhir.ch/ig/ch-idmp/sid/attno",
    "value" : "123456989-initial submission-Example-abc-123"
  }],
  "status" : "current",
  "type" : {
    "coding" : [{
      "system" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-attached-document-type",
      "code" : "756005040000002",
      "display" : "Patient Information"
    }]
  },
  "date" : "2021-11-09T00:00:00Z",
  "content" : [{
    "attachment" : {
      "language" : "de-CH",
      "url" : "https://Swissmedicinfo.ch/showText.aspx?textType=PI&lang=DE&authNr=67211&supportMultipleResults=1"
    }
  }]
}

```
