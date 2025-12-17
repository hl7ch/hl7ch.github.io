# Contains Code for UNKNOWN in dicom context - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Contains Code for UNKNOWN in dicom context**

## CodeSystem: Contains Code for UNKNOWN in dicom context (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-rad-order/CodeSystem/ch-rad-order-dicom-unknown | *Version*:2.0.1 |
| Active as of 2025-12-17 | *Computable Name*:ChRadOrderDicomUnknown |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition for UNKNOWN in the context CH RAD-Order in order to handle non conformant Dicom metadata. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ChRadOrderAcquisitionModality](ValueSet-ch-rad-order-acquisition-modality.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ch-rad-order-dicom-unknown",
  "url" : "http://fhir.ch/ig/ch-rad-order/CodeSystem/ch-rad-order-dicom-unknown",
  "version" : "2.0.1",
  "name" : "ChRadOrderDicomUnknown",
  "title" : "Contains Code for UNKNOWN in dicom context",
  "status" : "active",
  "experimental" : true,
  "date" : "2025-12-17T07:17:47+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "Juerg P. Bleuer",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    }
  ],
  "description" : "Definition for UNKNOWN in the context CH RAD-Order in order to handle non conformant Dicom metadata.",
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
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 1,
  "concept" : [
    {
      "code" : "UNKNOWN"
    }
  ]
}

```
