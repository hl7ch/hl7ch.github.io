# DocumentEntry.mimeType - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DocumentEntry.mimeType**

## ValueSet: DocumentEntry.mimeType 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.mimeType | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:DocumentEntryMimeType |
| *Other Identifiers:*OID:2.16.756.5.30.1.127.3.10.1.16 (use: official, ) | |
| **Copyright/Legal**: CC0-1.0 | |

 
MIME type of the document as per Annex; EPRO-FDHA. 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/DocumentEntry.mimeType) via the XIG (Cross-IG) index for FHIR specifications. 

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "DocumentEntry.mimeType",
  "meta" : {
    "source" : "https://art-decor.org/fhir/ValueSet/2.16.756.5.30.1.127.3.10.1.16--20230522175111",
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
      "valuePeriod" : {
        "start" : "2023-05-22T17:51:11+02:00"
      }
    }
  ],
  "url" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.mimeType",
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.756.5.30.1.127.3.10.1.16"
    }
  ],
  "version" : "3.3.0",
  "name" : "DocumentEntryMimeType",
  "title" : "DocumentEntry.mimeType",
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
  "description" : "MIME type of the document as per Annex; EPRO-FDHA.",
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
  "immutable" : false,
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [
      {
        "system" : "urn:ietf:bcp:13",
        "concept" : [
          {
            "code" : "application/dicom",
            "display" : "DICOM",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "DICOM"
              },
              {
                "language" : "fr-CH",
                "value" : "DICOM"
              },
              {
                "language" : "it-CH",
                "value" : "DICOM"
              },
              {
                "language" : "rm-CH",
                "value" : "DICOM"
              },
              {
                "language" : "en-US",
                "value" : "DICOM"
              }
            ]
          },
          {
            "code" : "application/fhir+json",
            "display" : "FHIR (JSON)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "FHIR (JSON)"
              },
              {
                "language" : "fr-CH",
                "value" : "FHIR (JSON)"
              },
              {
                "language" : "it-CH",
                "value" : "FHIR (JSON)"
              },
              {
                "language" : "rm-CH",
                "value" : "FHIR (JSON)"
              },
              {
                "language" : "en-US",
                "value" : "FHIR (JSON)"
              }
            ]
          },
          {
            "code" : "application/fhir+xml",
            "display" : "FHIR (XML)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "FHIR (XML)"
              },
              {
                "language" : "fr-CH",
                "value" : "FHIR (XML)"
              },
              {
                "language" : "it-CH",
                "value" : "FHIR (XML)"
              },
              {
                "language" : "rm-CH",
                "value" : "FHIR (XML)"
              },
              {
                "language" : "en-US",
                "value" : "FHIR (XML)"
              }
            ]
          },
          {
            "code" : "application/pdf",
            "display" : "PDF",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "PDF"
              },
              {
                "language" : "fr-CH",
                "value" : "PDF"
              },
              {
                "language" : "it-CH",
                "value" : "PDF"
              },
              {
                "language" : "rm-CH",
                "value" : "PDF"
              },
              {
                "language" : "en-US",
                "value" : "PDF"
              }
            ]
          },
          {
            "code" : "audio/mp4",
            "display" : "MP4 Audio",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "MP4 Audio"
              },
              {
                "language" : "fr-CH",
                "value" : "MP4 Audio"
              },
              {
                "language" : "it-CH",
                "value" : "MP4 Audio"
              },
              {
                "language" : "rm-CH",
                "value" : "MP4 Audio"
              },
              {
                "language" : "en-US",
                "value" : "MP4 Audio"
              }
            ]
          },
          {
            "code" : "audio/mpeg",
            "display" : "MPEG audio layer 3",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "MPEG audio layer 3"
              },
              {
                "language" : "fr-CH",
                "value" : "MPEG audio layer 3"
              },
              {
                "language" : "it-CH",
                "value" : "MPEG audio layer 3"
              },
              {
                "language" : "rm-CH",
                "value" : "MPEG audio layer 3"
              },
              {
                "language" : "en-US",
                "value" : "MPEG audio layer 3"
              }
            ]
          },
          {
            "code" : "image/gif",
            "display" : "GIF Graphics Interchange Format",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "GIF Graphics Interchange Format"
              },
              {
                "language" : "fr-CH",
                "value" : "GIF Graphics Interchange Format"
              },
              {
                "language" : "it-CH",
                "value" : "GIF Graphics Interchange Format"
              },
              {
                "language" : "rm-CH",
                "value" : "GIF Graphics Interchange Format"
              },
              {
                "language" : "en-US",
                "value" : "GIF Graphics Interchange Format"
              }
            ]
          },
          {
            "code" : "image/jp2",
            "display" : "JPEG 2000 Core Image File",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "JPEG 2000 Core Image File"
              },
              {
                "language" : "fr-CH",
                "value" : "JPEG 2000 Core Image File"
              },
              {
                "language" : "it-CH",
                "value" : "JPEG 2000 Core Image File"
              },
              {
                "language" : "rm-CH",
                "value" : "JPEG 2000 Core Image File"
              },
              {
                "language" : "en-US",
                "value" : "JPEG 2000 Core Image File"
              }
            ]
          },
          {
            "code" : "image/jpeg",
            "display" : "JPEG Image",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "JPEG Image"
              },
              {
                "language" : "fr-CH",
                "value" : "JPEG Image"
              },
              {
                "language" : "it-CH",
                "value" : "JPEG Image"
              },
              {
                "language" : "rm-CH",
                "value" : "JPEG Image"
              },
              {
                "language" : "en-US",
                "value" : "JPEG Image"
              }
            ]
          },
          {
            "code" : "image/jpm",
            "display" : "JPEG 2000 Compound Image File",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "JPEG 2000 Compound Image File"
              },
              {
                "language" : "fr-CH",
                "value" : "JPEG 2000 Compound Image File"
              },
              {
                "language" : "it-CH",
                "value" : "JPEG 2000 Compound Image File"
              },
              {
                "language" : "rm-CH",
                "value" : "JPEG 2000 Compound Image File"
              },
              {
                "language" : "en-US",
                "value" : "JPEG 2000 Compound Image File"
              }
            ]
          },
          {
            "code" : "image/jpx",
            "display" : "JPEG 2000 Image File",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "JPEG 2000 Image File"
              },
              {
                "language" : "fr-CH",
                "value" : "JPEG 2000 Image File"
              },
              {
                "language" : "it-CH",
                "value" : "JPEG 2000 Image File"
              },
              {
                "language" : "rm-CH",
                "value" : "JPEG 2000 Image File"
              },
              {
                "language" : "en-US",
                "value" : "JPEG 2000 Image File"
              }
            ]
          },
          {
            "code" : "image/png",
            "display" : "PNG Portable Network Graphics",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "PNG Portable Network Graphics"
              },
              {
                "language" : "fr-CH",
                "value" : "PNG Portable Network Graphics"
              },
              {
                "language" : "it-CH",
                "value" : "PNG Portable Network Graphics"
              },
              {
                "language" : "rm-CH",
                "value" : "PNG Portable Network Graphics"
              },
              {
                "language" : "en-US",
                "value" : "PNG Portable Network Graphics"
              }
            ]
          },
          {
            "code" : "image/tiff",
            "display" : "TIFF Image",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "TIFF Image"
              },
              {
                "language" : "fr-CH",
                "value" : "TIFF Image"
              },
              {
                "language" : "it-CH",
                "value" : "TIFF Image"
              },
              {
                "language" : "rm-CH",
                "value" : "TIFF Image"
              },
              {
                "language" : "en-US",
                "value" : "TIFF Image"
              }
            ]
          },
          {
            "code" : "model/vrml",
            "display" : "Virtual Reality Modeling Language",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Virtual Reality Modeling Language"
              },
              {
                "language" : "fr-CH",
                "value" : "Virtual Reality Modeling Language"
              },
              {
                "language" : "it-CH",
                "value" : "Virtual Reality Modeling Language"
              },
              {
                "language" : "rm-CH",
                "value" : "Virtual Reality Modeling Language"
              },
              {
                "language" : "en-US",
                "value" : "Virtual Reality Modeling Language"
              }
            ]
          },
          {
            "code" : "model/x3d+xml",
            "display" : "Extensible 3D Graphics (XML)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Extensible 3D Graphics (XML)"
              },
              {
                "language" : "fr-CH",
                "value" : "Extensible 3D Graphics (XML)"
              },
              {
                "language" : "it-CH",
                "value" : "Extensible 3D Graphics (XML)"
              },
              {
                "language" : "rm-CH",
                "value" : "Extensible 3D Graphics (XML)"
              },
              {
                "language" : "en-US",
                "value" : "Extensible 3D Graphics (XML)"
              }
            ]
          },
          {
            "code" : "model/x3d-vrml",
            "display" : "Extensible 3D Graphics (VRML)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Extensible 3D Graphics (VRML)"
              },
              {
                "language" : "fr-CH",
                "value" : "Extensible 3D Graphics (VRML)"
              },
              {
                "language" : "it-CH",
                "value" : "Extensible 3D Graphics (VRML)"
              },
              {
                "language" : "rm-CH",
                "value" : "Extensible 3D Graphics (VRML)"
              },
              {
                "language" : "en-US",
                "value" : "Extensible 3D Graphics (VRML)"
              }
            ]
          },
          {
            "code" : "multipart/multilingual",
            "display" : "Multilingual Multipart",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Multilingual Multipart"
              },
              {
                "language" : "fr-CH",
                "value" : "Multilingual Multipart"
              },
              {
                "language" : "it-CH",
                "value" : "Multilingual Multipart"
              },
              {
                "language" : "rm-CH",
                "value" : "Multilingual Multipart"
              },
              {
                "language" : "en-US",
                "value" : "Multilingual Multipart"
              }
            ]
          },
          {
            "code" : "multipart/signed",
            "display" : "Signed Multipart",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Signed Multipart"
              },
              {
                "language" : "fr-CH",
                "value" : "Signed Multipart"
              },
              {
                "language" : "it-CH",
                "value" : "Signed Multipart"
              },
              {
                "language" : "rm-CH",
                "value" : "Signed Multipart"
              },
              {
                "language" : "en-US",
                "value" : "Signed Multipart"
              }
            ]
          },
          {
            "code" : "multipart/x-hl7-cda-level1",
            "display" : "CDA Level 1 Multipart",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "CDA Level 1 Multipart"
              },
              {
                "language" : "fr-CH",
                "value" : "CDA Level 1 Multipart"
              },
              {
                "language" : "it-CH",
                "value" : "CDA Level 1 Multipart"
              },
              {
                "language" : "rm-CH",
                "value" : "CDA Level 1 Multipart"
              },
              {
                "language" : "en-US",
                "value" : "CDA Level 1 Multipart"
              }
            ]
          },
          {
            "code" : "text/csv",
            "display" : "CSV Comma-separated Values",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "CSV Comma-separated Values"
              },
              {
                "language" : "fr-CH",
                "value" : "CSV Comma-separated Values"
              },
              {
                "language" : "it-CH",
                "value" : "CSV Comma-separated Values"
              },
              {
                "language" : "rm-CH",
                "value" : "CSV Comma-separated Values"
              },
              {
                "language" : "en-US",
                "value" : "CSV Comma-separated Values"
              }
            ]
          },
          {
            "code" : "text/plain",
            "display" : "Plain Text",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Plain Text"
              },
              {
                "language" : "fr-CH",
                "value" : "Plain Text"
              },
              {
                "language" : "it-CH",
                "value" : "Plain Text"
              },
              {
                "language" : "rm-CH",
                "value" : "Plain Text"
              },
              {
                "language" : "en-US",
                "value" : "Plain Text"
              }
            ]
          },
          {
            "code" : "text/xml",
            "display" : "XML-Text",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "XML-Text"
              },
              {
                "language" : "fr-CH",
                "value" : "XML-Text"
              },
              {
                "language" : "it-CH",
                "value" : "XML-Text"
              },
              {
                "language" : "rm-CH",
                "value" : "XML-Text"
              },
              {
                "language" : "en-US",
                "value" : "XML-Text"
              }
            ]
          },
          {
            "code" : "video/mj2",
            "display" : "Motion JPEG 2000",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Motion JPEG 2000"
              },
              {
                "language" : "fr-CH",
                "value" : "Motion JPEG 2000"
              },
              {
                "language" : "it-CH",
                "value" : "Motion JPEG 2000"
              },
              {
                "language" : "rm-CH",
                "value" : "Motion JPEG 2000"
              },
              {
                "language" : "en-US",
                "value" : "Motion JPEG 2000"
              }
            ]
          },
          {
            "code" : "video/mp4",
            "display" : "MPEG-4 Part 14",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "MPEG-4 Part 14"
              },
              {
                "language" : "fr-CH",
                "value" : "MPEG-4 Part 14"
              },
              {
                "language" : "it-CH",
                "value" : "MPEG-4 Part 14"
              },
              {
                "language" : "rm-CH",
                "value" : "MPEG-4 Part 14"
              },
              {
                "language" : "en-US",
                "value" : "MPEG-4 Part 14"
              }
            ]
          },
          {
            "code" : "video/mpeg",
            "display" : "MPEG Video",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "MPEG Video"
              },
              {
                "language" : "fr-CH",
                "value" : "MPEG Video"
              },
              {
                "language" : "it-CH",
                "value" : "MPEG Video"
              },
              {
                "language" : "rm-CH",
                "value" : "MPEG Video"
              },
              {
                "language" : "en-US",
                "value" : "MPEG Video"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
