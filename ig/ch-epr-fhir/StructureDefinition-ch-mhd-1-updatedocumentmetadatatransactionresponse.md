# CH MHD-1 Update Document Metadata Transaction Response - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH MHD-1 Update Document Metadata Transaction Response**

## Resource Profile: CH MHD-1 Update Document Metadata Transaction Response 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-1-updatedocumentmetadatatransactionresponse | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:CHMhd1UpdateDocumentMetadataTransactionResponse |
| **Copyright/Legal**: CC0-1.0 | |

 
A profile for Update Document Metadata (CH:MHD-1) transaction response 

**Usages:**

* Examples for this Profile: [Bundle/CHMhd1UpdateDocumentMetadataTransactionResponseExample](Bundle-CHMhd1UpdateDocumentMetadataTransactionResponseExample.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/ch-mhd-1-updatedocumentmetadatatransactionresponse)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-mhd-1-updatedocumentmetadatatransactionresponse.csv), [Excel](StructureDefinition-ch-mhd-1-updatedocumentmetadatatransactionresponse.xlsx), [Schematron](StructureDefinition-ch-mhd-1-updatedocumentmetadatatransactionresponse.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-mhd-1-updatedocumentmetadatatransactionresponse",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-1-updatedocumentmetadatatransactionresponse",
  "version" : "5.0.0",
  "name" : "CHMhd1UpdateDocumentMetadataTransactionResponse",
  "title" : "CH MHD-1 Update Document Metadata Transaction Response",
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
  "description" : "A profile for Update Document Metadata (CH:MHD-1) transaction response",
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
        "patternCode" : "transaction-response"
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
          "rules" : "open"
        }
      },
      {
        "id" : "Bundle.entry.resource",
        "path" : "Bundle.entry.resource",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry.response",
        "path" : "Bundle.entry.response",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:DocumentReference",
        "path" : "Bundle.entry",
        "sliceName" : "DocumentReference",
        "short" : "DocumentReference",
        "min" : 0,
        "max" : "*",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry:DocumentReference.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "DocumentReference",
            "profile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-documentreference-comprehensive"
            ]
          }
        ]
      },
      {
        "id" : "Bundle.entry:OperationOutcome",
        "path" : "Bundle.entry",
        "sliceName" : "OperationOutcome",
        "short" : "OperationOutcome",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Bundle.entry:OperationOutcome.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "type" : [
          {
            "code" : "OperationOutcome",
            "profile" : ["http://hl7.org/fhir/StructureDefinition/OperationOutcome"]
          }
        ]
      }
    ]
  }
}

```
