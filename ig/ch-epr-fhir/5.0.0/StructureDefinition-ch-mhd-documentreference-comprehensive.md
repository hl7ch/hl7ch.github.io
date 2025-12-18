# CH MHD DocumentReference Comprehensive - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH MHD DocumentReference Comprehensive**

## Resource Profile: CH MHD DocumentReference Comprehensive 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-documentreference-comprehensive | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:CHMhdDocumentReferenceComprehensive |
| **Copyright/Legal**: CC0-1.0 | |

 
CH MHD Profile on CH Core DocumentReference 

**Usages:**

* Use this Profile: [CH MHD-1 Update Document Metadata Transaction Request](StructureDefinition-ch-mhd-1-updatedocumentmetadatatransactionrequest.md), [CH MHD-1 Update Document Metadata Transaction Response](StructureDefinition-ch-mhd-1-updatedocumentmetadatatransactionresponse.md), [CH MHD Find Document References Comprehensive Response message](StructureDefinition-ch-mhd-documentreference-comprehensive-bundle.md) and [CH MHD Provide Document Bundle Comprehensive](StructureDefinition-ch-mhd-providedocumentbundle-comprehensive.md)
* Refer to this Profile: [CH MHD SubmissionSet Comprehensive](StructureDefinition-ch-mhd-submissionset-comprehensive.md)
* Examples for this Profile: [DocumentReference/DocRefPdf](DocumentReference-DocRefPdf.md)
* CapabilityStatements using this Profile: [MHD Document Consumer (client)](CapabilityStatement-CH.MHD.DocumentConsumer.md) and [MHD Document Responder (server)](CapabilityStatement-CH.MHD.DocumentResponder.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/ch-mhd-documentreference-comprehensive)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-mhd-documentreference-comprehensive.csv), [Excel](StructureDefinition-ch-mhd-documentreference-comprehensive.xlsx), [Schematron](StructureDefinition-ch-mhd-documentreference-comprehensive.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-mhd-documentreference-comprehensive",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-documentreference-comprehensive",
  "version" : "5.0.0",
  "name" : "CHMhdDocumentReferenceComprehensive",
  "title" : "CH MHD DocumentReference Comprehensive",
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
  "description" : "CH MHD Profile on CH Core DocumentReference",
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
      "identity" : "EPR-XDS",
      "uri" : "https://profiles.ihe.net/ITI/MHD/index.html",
      "name" : "XDS metadata"
    },
    {
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "fhircomposition",
      "uri" : "http://hl7.org/fhir/composition",
      "name" : "FHIR Composition"
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
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "xds",
      "uri" : "http://ihe.net/xds",
      "name" : "XDS metadata equivalent"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "DocumentReference",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-documentreference",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "DocumentReference",
        "path" : "DocumentReference",
        "constraint" : [
          {
            "key" : "ch-mhd",
            "severity" : "error",
            "human" : "The DocumentReference needs to conform to IHE.MHD.Comprehensive.DocumentReference",
            "expression" : "conformsTo('https://profiles.ihe.net/ITI/MHD/StructureDefinition/IHE.MHD.Comprehensive.DocumentReference')",
            "source" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-documentreference-comprehensive"
          }
        ]
      },
      {
        "id" : "DocumentReference.extension",
        "path" : "DocumentReference.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "DocumentReference.extension:deletionStatus",
        "path" : "DocumentReference.extension",
        "sliceName" : "deletionStatus",
        "short" : "Deletion status of the document",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-ext-deletionstatus"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.extension:originalProviderRole",
        "path" : "DocumentReference.extension",
        "sliceName" : "originalProviderRole",
        "short" : "Original ProviderRole: This extra metadata attribute SHALL be set by the Document Source actor to the role value of the current user and SHALL NOT be updated by Update Initiator or Document Administrator actors.",
        "min" : 1,
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
        "id" : "DocumentReference.masterIdentifier",
        "path" : "DocumentReference.masterIdentifier",
        "min" : 1,
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "https://profiles.ihe.net/ITI/MHD/StructureDefinition/IHE.MHD.UniqueIdIdentifier"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.identifier",
        "path" : "DocumentReference.identifier",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.status",
        "path" : "DocumentReference.status",
        "short" : "current | superseded",
        "comment" : "approved -> status=current, deprecated -> status=superseded",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.docStatus",
        "path" : "DocumentReference.docStatus",
        "comment" : "These HL7 FHIR elements are not used in XDS, therefore would not be present. Document Consumers should be robust to these elements holding values.",
        "max" : "0"
      },
      {
        "id" : "DocumentReference.type",
        "path" : "DocumentReference.type",
        "min" : 1,
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.typeCode"
        }
      },
      {
        "id" : "DocumentReference.category",
        "path" : "DocumentReference.category",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.classCode"
        }
      },
      {
        "id" : "DocumentReference.subject",
        "path" : "DocumentReference.subject",
        "comment" : "Not a contained resource. The identifier points to an existing patient in the XDS Affinity Domain.",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.subject.identifier",
        "path" : "DocumentReference.subject.identifier",
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
        "id" : "DocumentReference.author",
        "path" : "DocumentReference.author",
        "comment" : "Contained resource.",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization",
              "http://hl7.org/fhir/StructureDefinition/Device",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson"
            ],
            "aggregation" : ["contained"]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.authenticator",
        "path" : "DocumentReference.authenticator",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ],
            "aggregation" : ["contained"]
          }
        ]
      },
      {
        "id" : "DocumentReference.custodian",
        "path" : "DocumentReference.custodian",
        "max" : "0"
      },
      {
        "id" : "DocumentReference.relatesTo",
        "path" : "DocumentReference.relatesTo",
        "comment" : "See ITI TF-2c: 3.65.4.1.2.3",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.description",
        "path" : "DocumentReference.description",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.securityLabel",
        "path" : "DocumentReference.securityLabel",
        "comment" : "Note: This is NOT the DocumentReference.meta, as that holds the meta tags for the DocumentReference itself.",
        "min" : 1,
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.confidentialityCode"
        }
      },
      {
        "id" : "DocumentReference.content",
        "path" : "DocumentReference.content",
        "max" : "1"
      },
      {
        "id" : "DocumentReference.content.attachment",
        "path" : "DocumentReference.content.attachment",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.content.attachment.contentType",
        "path" : "DocumentReference.content.attachment.contentType",
        "min" : 1,
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.mimeType"
        }
      },
      {
        "id" : "DocumentReference.content.attachment.language",
        "path" : "DocumentReference.content.attachment.language",
        "min" : 1,
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.languageCode"
        }
      },
      {
        "id" : "DocumentReference.content.attachment.data",
        "path" : "DocumentReference.content.attachment.data",
        "comment" : "These HL7 FHIR elements are not used in XDS, therefore would not be present. Document Consumers should be robust to these elements holding values.",
        "max" : "0"
      },
      {
        "id" : "DocumentReference.content.attachment.url",
        "path" : "DocumentReference.content.attachment.url",
        "short" : "The ITI-68 endpoint to use, or a reference to the Binary resource in the Bundle.",
        "comment" : "When providing the document, this URL SHALL point to the Binary resource wrapping\nthe document content (which SHALL be included in the Bundle). When retrieving the DocumentReference, this URL SHALL\nbe the the one to use in ITI-68 transactions to retrieve the document content.",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.content.attachment.size",
        "path" : "DocumentReference.content.attachment.size",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.content.attachment.hash",
        "path" : "DocumentReference.content.attachment.hash",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.content.attachment.title",
        "path" : "DocumentReference.content.attachment.title",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.content.attachment.creation",
        "path" : "DocumentReference.content.attachment.creation",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.content.format",
        "path" : "DocumentReference.content.format",
        "min" : 1,
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "description" : "Document Format Codes.",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.formatCode"
        }
      },
      {
        "id" : "DocumentReference.context",
        "path" : "DocumentReference.context",
        "min" : 1
      },
      {
        "id" : "DocumentReference.context.event",
        "path" : "DocumentReference.context.event",
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.eventCodeList"
        }
      },
      {
        "id" : "DocumentReference.context.period",
        "path" : "DocumentReference.context.period",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.facilityType",
        "path" : "DocumentReference.context.facilityType",
        "min" : 1,
        "mustSupport" : true,
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "DocumentC80FacilityType"
            }
          ],
          "strength" : "required",
          "description" : "XDS Facility Type.",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.healthcareFacilityTypeCode"
        }
      },
      {
        "id" : "DocumentReference.context.practiceSetting",
        "path" : "DocumentReference.context.practiceSetting",
        "min" : 1,
        "mustSupport" : true,
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "DocumentC80PracticeSetting"
            }
          ],
          "strength" : "required",
          "description" : "Additional details about where the content was created (e.g. clinical specialty).",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.practiceSettingCode"
        }
      },
      {
        "id" : "DocumentReference.context.sourcePatientInfo",
        "path" : "DocumentReference.context.sourcePatientInfo",
        "comment" : "Contained Patient resource with Patient.identifier.use element set to ‘usual’.\r\n\r\nIndicates that the data within the XDS document entry be represented as a contained resource. See Section 4.5.4.4.7",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
            ],
            "aggregation" : ["contained"]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.related",
        "path" : "DocumentReference.context.related",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "identifier"
            }
          ],
          "rules" : "open"
        },
        "comment" : "May be filled with URL pointers to Resources or Identifiers found in referenceIdList"
      },
      {
        "id" : "DocumentReference.context.related:StudyInstanceUID",
        "path" : "DocumentReference.context.related",
        "sliceName" : "StudyInstanceUID",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "DocumentReference.context.related:StudyInstanceUID.identifier",
        "path" : "DocumentReference.context.related.identifier",
        "short" : "Requirements on XDS-I.b (Swiss context): When a Imaging Document Source provides a document to the Document Repository, it must provide the StudyInstanceUID, found in the to be registered KOS object, in the referenceIdList (urn:ihe:iti:xds:2013:referenceIdList) attribute of the documentEntry metadata.",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/DicomStudyInstanceUidIdentifier"
            ]
          }
        ],
        "mustSupport" : true
      }
    ]
  }
}

```
