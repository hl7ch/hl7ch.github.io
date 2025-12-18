# CH Extension Author AuthorRole - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Extension Author AuthorRole**

## Extension: CH Extension Author AuthorRole 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-ext-author-authorrole | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:ChExtAuthorAuthorRole |
| **Copyright/Legal**: CC0-1.0 | |

Extension Author AuthorRole for SubmissionSet and DocumentEntry

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [CH MHD DocumentReference Comprehensive](StructureDefinition-ch-mhd-documentreference-comprehensive.md) and [CH MHD SubmissionSet Comprehensive](StructureDefinition-ch-mhd-submissionset-comprehensive.md)
* Examples for this Extension: [Bundle/Bundle-FindDocumentReferences](Bundle-Bundle-FindDocumentReferences.md), [Bundle/BundleProvideDocument](Bundle-BundleProvideDocument.md), [Bundle/CHMhd1UpdateDocumentMetadataTransactionRequestExample](Bundle-CHMhd1UpdateDocumentMetadataTransactionRequestExample.md) and [DocumentReference/DocRefPdf](DocumentReference-DocRefPdf.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/ch-ext-author-authorrole)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-ext-author-authorrole.csv), [Excel](StructureDefinition-ch-ext-author-authorrole.xlsx), [Schematron](StructureDefinition-ch-ext-author-authorrole.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-ext-author-authorrole",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-ext-author-authorrole",
  "version" : "5.0.0",
  "name" : "ChExtAuthorAuthorRole",
  "title" : "CH Extension Author AuthorRole",
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
  "description" : "Extension Author AuthorRole for SubmissionSet and DocumentEntry",
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
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [
    {
      "type" : "element",
      "expression" : "List"
    },
    {
      "type" : "element",
      "expression" : "DocumentReference"
    }
  ],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension",
        "path" : "Extension"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-ext-author-authorrole",
        "mustSupport" : true
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Extension.value[x]:valueCoding",
        "path" : "Extension.value[x]",
        "sliceName" : "valueCoding",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Coding"
          }
        ],
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.originalProviderRole"
        }
      }
    ]
  }
}

```
