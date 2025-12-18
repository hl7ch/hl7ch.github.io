# CH MHD Provide Document Bundle Comprehensive - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH MHD Provide Document Bundle Comprehensive**

## Resource Profile: CH MHD Provide Document Bundle Comprehensive 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-providedocumentbundle-comprehensive | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:CHMhdProvideDocumentBundleComprehensive |
| **Copyright/Legal**: CC0-1.0 | |

 
IHE MHD profile on Provide Document Bundle (ITI-65) transaction with Comprehensive Metadata for the Swiss EPR. 

**Usages:**

* Examples for this Profile: [Bundle/BundleProvideDocument](Bundle-BundleProvideDocument.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/ch-mhd-providedocumentbundle-comprehensive)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-mhd-providedocumentbundle-comprehensive.csv), [Excel](StructureDefinition-ch-mhd-providedocumentbundle-comprehensive.xlsx), [Schematron](StructureDefinition-ch-mhd-providedocumentbundle-comprehensive.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-mhd-providedocumentbundle-comprehensive",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-providedocumentbundle-comprehensive",
  "version" : "5.0.0",
  "name" : "CHMhdProvideDocumentBundleComprehensive",
  "title" : "CH MHD Provide Document Bundle Comprehensive",
  "status" : "active",
  "date" : "2025-12-18T15:54:33+00:00",
  "publisher" : "eHealth Suisse",
  "contact" : [
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch"
        }
      ]
    },
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "IHE MHD profile on Provide Document Bundle (ITI-65) transaction with Comprehensive Metadata for the Swiss EPR.",
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
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Bundle",
  "baseDefinition" : "https://profiles.ihe.net/ITI/MHD/StructureDefinition/IHE.MHD.Comprehensive.ProvideBundle",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Bundle",
        "path" : "Bundle"
      },
      {
        "id" : "Bundle.meta",
        "path" : "Bundle.meta",
        "min" : 1
      },
      {
        "id" : "Bundle.meta.profile",
        "path" : "Bundle.meta.profile",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "$this"
            }
          ],
          "rules" : "open"
        },
        "mustSupport" : true
      },
      {
        "id" : "Bundle.meta.profile:comprehensiveMetadata",
        "path" : "Bundle.meta.profile",
        "sliceName" : "comprehensiveMetadata",
        "min" : 1,
        "max" : "1",
        "patternCanonical" : "https://profiles.ihe.net/ITI/MHD/StructureDefinition/IHE.MHD.Comprehensive.ProvideBundle",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry",
        "path" : "Bundle.entry",
        "min" : 3
      },
      {
        "id" : "Bundle.entry:SubmissionSet",
        "path" : "Bundle.entry",
        "sliceName" : "SubmissionSet",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:SubmissionSet.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "List",
            "profile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-submissionset-comprehensive"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:SubmissionSet.request",
        "path" : "Bundle.entry.request",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:SubmissionSet.request.method",
        "path" : "Bundle.entry.request.method",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:DocumentRefs",
        "path" : "Bundle.entry",
        "sliceName" : "DocumentRefs",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:DocumentRefs.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "DocumentReference",
            "profile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-documentreference-comprehensive"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:DocumentRefs.request",
        "path" : "Bundle.entry.request",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:DocumentRefs.request.method",
        "path" : "Bundle.entry.request.method",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:Documents",
        "path" : "Bundle.entry",
        "sliceName" : "Documents",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:Documents.resource",
        "path" : "Bundle.entry.resource",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:Documents.request",
        "path" : "Bundle.entry.request",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:Documents.request.method",
        "path" : "Bundle.entry.request.method",
        "patternCode" : "POST",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:Folders",
        "path" : "Bundle.entry",
        "sliceName" : "Folders",
        "max" : "0"
      },
      {
        "id" : "Bundle.entry:Patient",
        "path" : "Bundle.entry",
        "sliceName" : "Patient",
        "max" : "0"
      }
    ]
  }
}

```
