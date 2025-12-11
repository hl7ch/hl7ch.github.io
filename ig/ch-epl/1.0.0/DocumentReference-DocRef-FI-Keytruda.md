# Keytruda, Konzentrat zur Herstellung einer Infusionslösung Fachinformation - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Keytruda, Konzentrat zur Herstellung einer Infusionslösung Fachinformation**

## Example DocumentReference: Keytruda, Konzentrat zur Herstellung einer Infusionslösung Fachinformation

Language: de-CH

Profile: [CH IDMP DocumentReference](StructureDefinition-ch-idmp-documentreference.md)

**identifier**: [Application / Assessment Tracking Number](NamingSystem-AttNo.md)/123456789-initial submission-Example-klm-123

**status**: Current

**type**: Fachinformation

**date**: 2024-09-01 00:00:00+0000

> **content**

### Attachments

| | |
| :--- | :--- |
| - | **Url** |
| * | [https://swissmedicinfo.ch/showTextAccepted.aspx?textType=FI&lang=DE&authNr=66231&supportMultipleResults=1](https://swissmedicinfo.ch/showTextAccepted.aspx?textType=FI&lang=DE&authNr=66231&supportMultipleResults=1) |




## Resource Content

```json
{
  "resourceType" : "DocumentReference",
  "id" : "DocRef-FI-Keytruda",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-documentreference"
    ]
  },
  "language" : "de-CH",
  "identifier" : [
    {
      "system" : "http://fhir.ch/ig/ch-epl/sid/attno",
      "value" : "123456789-initial submission-Example-klm-123"
    }
  ],
  "status" : "current",
  "type" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-attached-document-type",
        "code" : "756005007001",
        "display" : "Fachinformation"
      }
    ]
  },
  "date" : "2024-09-01T00:00:00Z",
  "content" : [
    {
      "attachment" : {
        "url" : "https://swissmedicinfo.ch/showTextAccepted.aspx?textType=FI&lang=DE&authNr=66231&supportMultipleResults=1"
      }
    }
  ]
}

```
