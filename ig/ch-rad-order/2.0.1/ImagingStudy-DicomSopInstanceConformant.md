# DICOM conformant SOP Instance - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DICOM conformant SOP Instance**

## Example ImagingStudy: DICOM conformant SOP Instance

Profile: [CH RAD-Order ImagingStudy](StructureDefinition-ch-rad-order-imagingstudy.md)

**identifier**: PLAC/2.16.124.113543.1154777499.30246.19789.3503430045, Accession ID/2819497684894126

**status**: Available

**subject**: [Susanna Ufferer (official) Female, DoB: 1945-03-14](Patient-PatSUfferer.md)

> **series****uid**: 2.16.124.113543.1154777499.30246.19789.3503430045.1**modality**: [not stated]: DX (DX)

### Instances

| | | |
| :--- | :--- | :--- |
| - | **Uid** | **SopClass** |
| * | 2.16.124.113543.1154777499.30246.19789.3503430045.1.1 | [not stated]: 1.2.840.10008.5.1.4.1.1.1 (1.2.840.10008.5.1.4.1.1.1) |




## Resource Content

```json
{
  "resourceType" : "ImagingStudy",
  "id" : "DicomSopInstanceConformant",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-imagingstudy"
    ]
  },
  "identifier" : [
    {
      "type" : {
        "coding" : [
          {
            "system" : "urn:dicom:uid",
            "code" : "PLAC"
          }
        ]
      },
      "value" : "2.16.124.113543.1154777499.30246.19789.3503430045"
    },
    {
      "type" : {
        "coding" : [
          {
            "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
            "code" : "ACSN"
          }
        ]
      },
      "value" : "2819497684894126"
    }
  ],
  "status" : "available",
  "subject" : {
    "reference" : "Patient/PatSUfferer"
  },
  "series" : [
    {
      "uid" : "2.16.124.113543.1154777499.30246.19789.3503430045.1",
      "modality" : {
        "code" : "DX"
      },
      "instance" : [
        {
          "uid" : "2.16.124.113543.1154777499.30246.19789.3503430045.1.1",
          "sopClass" : {
            "code" : "1.2.840.10008.5.1.4.1.1.1"
          }
        }
      ]
    }
  ]
}

```
