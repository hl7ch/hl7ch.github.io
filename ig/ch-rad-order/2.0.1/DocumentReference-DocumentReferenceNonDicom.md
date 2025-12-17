# Befund_Rx_Thorax_S_Ufferer_20190401 - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Befund_Rx_Thorax_S_Ufferer_20190401**

## Example DocumentReference: Befund_Rx_Thorax_S_Ufferer_20190401

Profile: [CH ORF DocumentReference](http://fhir.ch/ig/ch-orf/3.0.2/StructureDefinition-ch-orf-documentreference.html)

**status**: Current

**description**: Befund Thorax-Rx vom 1.2.23; Eyample of Non-DICOM Attachment

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
  "id" : "DocumentReferenceNonDicom",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-documentreference"
    ]
  },
  "status" : "current",
  "description" : "Befund Thorax-Rx vom 1.2.23; Eyample of Non-DICOM Attachment",
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
