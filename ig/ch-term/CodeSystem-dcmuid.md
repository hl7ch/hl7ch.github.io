# DICOM Unique Identifiers (UIDs) - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DICOM Unique Identifiers (UIDs)**

## CodeSystem: DICOM Unique Identifiers (UIDs) 

| | |
| :--- | :--- |
| *Official URL*:urn:oid:1.2.840.10008.2.6.1 | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:DCMUID |
| **Copyright/Legal**: CC0-1.0 | |

 
A code system representing DICOM Unique Identifiers (UIDs), as per https://dicom.nema.org/medical/dicom/current/output/chtml/part06/chapter_A.html 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DocumentEntryFormatCode](ValueSet-DocumentEntry.formatCode.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "dcmuid",
  "url" : "urn:oid:1.2.840.10008.2.6.1",
  "version" : "3.3.0",
  "name" : "DCMUID",
  "title" : "DICOM Unique Identifiers (UIDs)",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-15T10:47:47+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "A code system representing DICOM Unique Identifiers (UIDs), as per https://dicom.nema.org/medical/dicom/current/output/chtml/part06/chapter_A.html",
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
  "content" : "fragment",
  "concept" : [
    {
      "code" : "1.2.840.10008.5.1.4.1.1.88.59",
      "display" : "DICOM Manifest (DICOM KOS SOP Class UID)",
      "definition" : "DICOM Manifest (DICOM KOS SOP Class UID)",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "KOS Dokument"
        },
        {
          "language" : "fr-CH",
          "value" : "Document KOS"
        },
        {
          "language" : "it-CH",
          "value" : "Documento KOS"
        },
        {
          "language" : "rm-CH",
          "value" : "Document KOS"
        },
        {
          "language" : "en-US",
          "value" : "IHE KOS document"
        }
      ]
    }
  ]
}

```
