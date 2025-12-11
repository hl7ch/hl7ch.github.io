# ESTALIS Matrixpfl 50/250 24 Stk Patienteninformation - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ESTALIS Matrixpfl 50/250 24 Stk Patienteninformation**

## Example DocumentReference: ESTALIS Matrixpfl 50/250 24 Stk Patienteninformation

Language: de-CH

Profile: [CH IDMP DocumentReference](StructureDefinition-ch-idmp-documentreference.md)

**identifier**: [Application / Assessment Tracking Number](NamingSystem-AttNo.md)/123456789-initial submission-Example-hij-321

**status**: Current

**type**: Patienteninformation

**date**: 2021-10-01 00:00:00+0000

> **content**

### Attachments

| | |
| :--- | :--- |
| - | **Url** |
| * | [https://swissmedicinfo.ch/showTextAccepted.aspx?textType=PI&lang=DE&authNr=54704&supportMultipleResults=1](https://swissmedicinfo.ch/showTextAccepted.aspx?textType=PI&lang=DE&authNr=54704&supportMultipleResults=1) |




## Resource Content

```json
{
  "resourceType" : "DocumentReference",
  "id" : "DocRef-PI-Estalis",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-documentreference"
    ]
  },
  "language" : "de-CH",
  "identifier" : [
    {
      "system" : "http://fhir.ch/ig/ch-epl/sid/attno",
      "value" : "123456789-initial submission-Example-hij-321"
    }
  ],
  "status" : "current",
  "type" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-attached-document-type",
        "code" : "756005007002",
        "display" : "Patienteninformation"
      }
    ]
  },
  "date" : "2021-10-01T00:00:00Z",
  "content" : [
    {
      "attachment" : {
        "url" : "https://swissmedicinfo.ch/showTextAccepted.aspx?textType=PI&lang=DE&authNr=54704&supportMultipleResults=1"
      }
    }
  ]
}

```
