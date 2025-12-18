# CH MHD SubmissionSet Comprehensive - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH MHD SubmissionSet Comprehensive**

## Resource Profile: CH MHD SubmissionSet Comprehensive 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-submissionset-comprehensive | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:CHMhdSubmissionSetComprehensive |
| **Copyright/Legal**: CC0-1.0 | |

 
CH MHD SubmissionSet Comprehensive 

**Usages:**

* Use this Profile: [CH MHD Provide Document Bundle Comprehensive](StructureDefinition-ch-mhd-providedocumentbundle-comprehensive.md)
* CapabilityStatements using this Profile: [MHD Document Consumer (client)](CapabilityStatement-CH.MHD.DocumentConsumer.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/ch-mhd-submissionset-comprehensive)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-mhd-submissionset-comprehensive.csv), [Excel](StructureDefinition-ch-mhd-submissionset-comprehensive.xlsx), [Schematron](StructureDefinition-ch-mhd-submissionset-comprehensive.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-mhd-submissionset-comprehensive",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-submissionset-comprehensive",
  "version" : "5.0.0",
  "name" : "CHMhdSubmissionSetComprehensive",
  "title" : "CH MHD SubmissionSet Comprehensive",
  "status" : "active",
  "date" : "2025-12-18T15:42:00+00:00",
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
  "description" : "CH MHD SubmissionSet Comprehensive",
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
      "identity" : "SubmissionSet-Mapping",
      "uri" : "urn:ihe:iti:xds:submissionset",
      "name" : "XDS and MHD Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "List",
  "baseDefinition" : "https://profiles.ihe.net/ITI/MHD/StructureDefinition/IHE.MHD.UnContained.Comprehensive.SubmissionSet",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "List.extension:designationType",
        "path" : "List.extension",
        "sliceName" : "designationType"
      },
      {
        "id" : "List.extension:designationType.value[x]",
        "path" : "List.extension.value[x]",
        "short" : "Fixed code 'Procedure' by the Swiss EPR",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/SubmissionSet.contentTypeCode"
        }
      },
      {
        "id" : "List.extension:sourceId",
        "path" : "List.extension",
        "sliceName" : "sourceId",
        "mustSupport" : true
      },
      {
        "id" : "List.extension:authorAuthorRole",
        "path" : "List.extension",
        "sliceName" : "authorAuthorRole",
        "short" : "The SubmissionSet.Author element MAY be used to track the user who made the latest changes to the document metadata.",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-ext-author-authorrole"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "List.identifier",
        "path" : "List.identifier",
        "short" : "identifier, for uniqueID set use to usual"
      },
      {
        "id" : "List.status",
        "path" : "List.status",
        "mustSupport" : true
      },
      {
        "id" : "List.mode",
        "path" : "List.mode",
        "mustSupport" : true
      },
      {
        "id" : "List.code",
        "path" : "List.code",
        "mustSupport" : true
      },
      {
        "id" : "List.subject",
        "path" : "List.subject",
        "comment" : "Not a contained resource. The identifier points to an existing patient in the XDS Affinity Domain."
      },
      {
        "id" : "List.subject.identifier",
        "path" : "List.subject.identifier",
        "min" : 1,
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-epr-spid-identifier"
            ]
          }
        ]
      },
      {
        "id" : "List.date",
        "path" : "List.date",
        "mustSupport" : true
      },
      {
        "id" : "List.entry",
        "path" : "List.entry",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "List.entry.item",
        "path" : "List.entry.item",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-documentreference-comprehensive"
            ],
            "aggregation" : ["referenced", "bundled"]
          }
        ],
        "mustSupport" : true
      }
    ]
  }
}

```
