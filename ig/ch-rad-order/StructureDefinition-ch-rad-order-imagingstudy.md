# CH RAD-Order ImagingStudy - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH RAD-Order ImagingStudy**

## Resource Profile: CH RAD-Order ImagingStudy 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-imagingstudy | *Version*:2.0.1 |
| Active as of 2025-12-17 | *Computable Name*:ChRadOrderImagingStudy |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition for the ImagingStudy resource in the context of CH RAD-Order. 

**Usages:**

* Refer to this Profile: [CH RAD-Order ServiceRequest](StructureDefinition-ch-rad-order-servicerequest.md)
* Examples for this Profile: [ImagingStudy/DicomSopInstanceConformant](ImagingStudy-DicomSopInstanceConformant.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-rad-order|current/StructureDefinition/ch-rad-order-imagingstudy)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-rad-order-imagingstudy.csv), [Excel](StructureDefinition-ch-rad-order-imagingstudy.xlsx), [Schematron](StructureDefinition-ch-rad-order-imagingstudy.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-rad-order-imagingstudy",
  "url" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-imagingstudy",
  "version" : "2.0.1",
  "name" : "ChRadOrderImagingStudy",
  "title" : "CH RAD-Order ImagingStudy",
  "status" : "active",
  "date" : "2025-12-17T07:22:04+00:00",
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
  "description" : "Definition for the ImagingStudy resource in the context of CH RAD-Order.",
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
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "dicom",
      "uri" : "http://nema.org/dicom",
      "name" : "DICOM Tag Mapping"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "ImagingStudy",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/ImagingStudy",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "ImagingStudy",
        "path" : "ImagingStudy",
        "short" : "CH RAD-Order ImagingStudy"
      },
      {
        "id" : "ImagingStudy.identifier",
        "path" : "ImagingStudy.identifier",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "$this"
            }
          ],
          "rules" : "open"
        },
        "min" : 2,
        "mustSupport" : true
      },
      {
        "id" : "ImagingStudy.identifier:studyInstanceUid",
        "path" : "ImagingStudy.identifier",
        "sliceName" : "studyInstanceUid",
        "short" : "Study Instanve UID",
        "min" : 1,
        "max" : "1",
        "patternIdentifier" : {
          "type" : {
            "coding" : [
              {
                "system" : "urn:dicom:uid",
                "code" : "PLAC"
              }
            ]
          }
        },
        "mustSupport" : true
      },
      {
        "id" : "ImagingStudy.identifier:studyInstanceUid.system",
        "path" : "ImagingStudy.identifier.system",
        "mustSupport" : true
      },
      {
        "id" : "ImagingStudy.identifier:studyInstanceUid.value",
        "path" : "ImagingStudy.identifier.value",
        "mustSupport" : true
      },
      {
        "id" : "ImagingStudy.identifier:acsn",
        "path" : "ImagingStudy.identifier",
        "sliceName" : "acsn",
        "short" : "Accession Number",
        "min" : 1,
        "max" : "1",
        "patternIdentifier" : {
          "type" : {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
                "code" : "ACSN"
              }
            ]
          }
        },
        "mustSupport" : true
      },
      {
        "id" : "ImagingStudy.identifier:acsn.system",
        "path" : "ImagingStudy.identifier.system",
        "mustSupport" : true
      },
      {
        "id" : "ImagingStudy.identifier:acsn.value",
        "path" : "ImagingStudy.identifier.value",
        "mustSupport" : true
      },
      {
        "id" : "ImagingStudy.status",
        "path" : "ImagingStudy.status",
        "mustSupport" : true
      },
      {
        "id" : "ImagingStudy.subject",
        "path" : "ImagingStudy.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://hl7.org/fhir/StructureDefinition/Device",
              "http://hl7.org/fhir/StructureDefinition/Group"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ImagingStudy.series",
        "path" : "ImagingStudy.series",
        "mustSupport" : true
      },
      {
        "id" : "ImagingStudy.series.uid",
        "path" : "ImagingStudy.series.uid",
        "mustSupport" : true
      },
      {
        "id" : "ImagingStudy.series.modality",
        "path" : "ImagingStudy.series.modality",
        "mustSupport" : true
      },
      {
        "id" : "ImagingStudy.series.performer",
        "path" : "ImagingStudy.series.performer",
        "mustSupport" : true
      },
      {
        "id" : "ImagingStudy.series.performer.actor",
        "path" : "ImagingStudy.series.performer.actor",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization",
              "http://hl7.org/fhir/StructureDefinition/CareTeam",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://hl7.org/fhir/StructureDefinition/Device",
              "http://hl7.org/fhir/StructureDefinition/RelatedPerson"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "ImagingStudy.series.instance",
        "path" : "ImagingStudy.series.instance",
        "mustSupport" : true
      },
      {
        "id" : "ImagingStudy.series.instance.uid",
        "path" : "ImagingStudy.series.instance.uid",
        "mustSupport" : true
      },
      {
        "id" : "ImagingStudy.series.instance.sopClass",
        "path" : "ImagingStudy.series.instance.sopClass",
        "mustSupport" : true
      }
    ]
  }
}

```
