# CH MHD-1 Update Document Metadata Transaction Request - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH MHD-1 Update Document Metadata Transaction Request**

## Resource Profile: CH MHD-1 Update Document Metadata Transaction Request 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-1-updatedocumentmetadatatransactionrequest | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:CHMhd1UpdateDocumentMetadataTransactionRequest |
| **Copyright/Legal**: CC0-1.0 | |

 
A profile for Update Document Metadata (CH:MHD-1) transaction request 

**Usages:**

* Examples for this Profile: [Bundle/CHMhd1UpdateDocumentMetadataTransactionRequestExample](Bundle-CHMhd1UpdateDocumentMetadataTransactionRequestExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/ch-mhd-1-updatedocumentmetadatatransactionrequest)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-mhd-1-updatedocumentmetadatatransactionrequest.csv), [Excel](StructureDefinition-ch-mhd-1-updatedocumentmetadatatransactionrequest.xlsx), [Schematron](StructureDefinition-ch-mhd-1-updatedocumentmetadatatransactionrequest.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-mhd-1-updatedocumentmetadatatransactionrequest",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-1-updatedocumentmetadatatransactionrequest",
  "version" : "5.0.0",
  "name" : "CHMhd1UpdateDocumentMetadataTransactionRequest",
  "title" : "CH MHD-1 Update Document Metadata Transaction Request",
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
  "description" : "A profile for Update Document Metadata (CH:MHD-1) transaction request",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Bundle",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Bundle",
        "path" : "Bundle"
      },
      {
        "id" : "Bundle.type",
        "path" : "Bundle.type",
        "patternCode" : "transaction"
      },
      {
        "id" : "Bundle.entry",
        "path" : "Bundle.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resource"
            }
          ],
          "description" : "Slicing based on the profile conformance of the entry",
          "rules" : "closed"
        },
        "min" : 1
      },
      {
        "id" : "Bundle.entry.resource",
        "path" : "Bundle.entry.resource",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry.request",
        "path" : "Bundle.entry.request",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry.request.method",
        "path" : "Bundle.entry.request.method",
        "patternCode" : "PUT"
      },
      {
        "id" : "Bundle.entry:DocumentReference",
        "path" : "Bundle.entry",
        "sliceName" : "DocumentReference",
        "short" : "DocumentReference",
        "min" : 1,
        "max" : "*",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:DocumentReference.resource",
        "path" : "Bundle.entry.resource",
        "type" : [
          {
            "code" : "DocumentReference",
            "profile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-documentreference-comprehensive"
            ]
          }
        ]
      }
    ]
  }
}

```
