# Befund_Rx_Thorax_S_Ufferer_20190401 - CH eTOC (R4) v3.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Befund_Rx_Thorax_S_Ufferer_20190401**

## Example DocumentReference: Befund_Rx_Thorax_S_Ufferer_20190401

Profile: [CH ORF DocumentReference](http://fhir.ch/ig/ch-orf/3.0.2/StructureDefinition-ch-orf-documentreference.html)

**status**: Current

**description**: Befund Thorax-Rx vom 1.2.23; Example of Attachment Attachment

> **content**

### Attachments

| | | | |
| :--- | :--- | :--- | :--- |
| - | **ContentType** | **Data** | **Title** |
| * | application/pdf | `VGVzdCBCZWZ1bmQgTm9uIERpY29t` | Befund_Rx_Thorax_S_Ufferer_20190401.pdf |




## Resource Content

```json
{
  "resourceType" : "DocumentReference",
  "id" : "DocumentReferenceAttachment",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-documentreference"
    ]
  },
  "status" : "current",
  "description" : "Befund Thorax-Rx vom 1.2.23; Example of Attachment Attachment",
  "content" : [
    {
      "attachment" : {
        "contentType" : "application/pdf",
        "data" : "VGVzdCBCZWZ1bmQgTm9uIERpY29t",
        "title" : "Befund_Rx_Thorax_S_Ufferer_20190401.pdf"
      }
    }
  ]
}

```
