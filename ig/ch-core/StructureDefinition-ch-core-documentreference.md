# CH Core DocumentReference - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core DocumentReference**

## Resource Profile: CH Core DocumentReference 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-documentreference | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreDocumentReference |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition of the DocumentReference resource for use in Swiss specific use cases. 

**Usages:**

* Refer to this Profile: [CH Core DocumentReference](StructureDefinition-ch-core-documentreference.md) and [CH Core ServiceRequest](StructureDefinition-ch-core-servicerequest.md)
* Examples for this Profile: [DocumentReference/Docu](DocumentReference-Docu.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-documentreference)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-documentreference.csv), [Excel](StructureDefinition-ch-core-documentreference.xlsx), [Schematron](StructureDefinition-ch-core-documentreference.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-documentreference",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-documentreference",
  "version" : "6.0.0",
  "name" : "CHCoreDocumentReference",
  "title" : "CH Core DocumentReference",
  "status" : "active",
  "date" : "2025-12-16T08:02:49+00:00",
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
  "description" : "Base definition of the DocumentReference resource for use in Swiss specific use cases.",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/DocumentReference",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "DocumentReference",
        "path" : "DocumentReference",
        "short" : "CH Core DocumentReference"
      },
      {
        "id" : "DocumentReference.status",
        "path" : "DocumentReference.status",
        "mapping" : [
          {
            "identity" : "EPR-XDS",
            "map" : "approved -> status=current, deprecated -> status=superseded. Other status values are allowed but are not defined in this mapping to XDS, see https://profiles.ihe.net/ITI/MHD/ConceptMap-FhirStatusVsStatusCode.html"
          }
        ]
      },
      {
        "id" : "DocumentReference.type",
        "path" : "DocumentReference.type",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.typeCode"
        }
      },
      {
        "id" : "DocumentReference.category",
        "path" : "DocumentReference.category",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.classCode"
        }
      },
      {
        "id" : "DocumentReference.subject",
        "path" : "DocumentReference.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
              "http://hl7.org/fhir/StructureDefinition/Group",
              "http://hl7.org/fhir/StructureDefinition/Device"
            ]
          }
        ]
      },
      {
        "id" : "DocumentReference.author",
        "path" : "DocumentReference.author",
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
            ]
          }
        ]
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
            ]
          }
        ]
      },
      {
        "id" : "DocumentReference.custodian",
        "path" : "DocumentReference.custodian",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ]
          }
        ]
      },
      {
        "id" : "DocumentReference.relatesTo.target",
        "path" : "DocumentReference.relatesTo.target",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-documentreference"
            ]
          }
        ]
      },
      {
        "id" : "DocumentReference.securityLabel",
        "path" : "DocumentReference.securityLabel",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.confidentialityCode"
        }
      },
      {
        "id" : "DocumentReference.content.attachment.contentType",
        "path" : "DocumentReference.content.attachment.contentType",
        "constraint" : [
          {
            "key" : "ch-docref-1",
            "severity" : "warning",
            "human" : "The codes from the following ValueSet are 'preferred': http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.mimeType",
            "expression" : "memberOf('http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.mimeType')",
            "source" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-documentreference"
          }
        ]
      },
      {
        "id" : "DocumentReference.content.attachment.language",
        "path" : "DocumentReference.content.attachment.language",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.languageCode"
        }
      },
      {
        "id" : "DocumentReference.content.format",
        "path" : "DocumentReference.content.format",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.formatCode"
        }
      },
      {
        "id" : "DocumentReference.context.encounter",
        "path" : "DocumentReference.context.encounter",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-encounter",
              "http://hl7.org/fhir/StructureDefinition/EpisodeOfCare"
            ]
          }
        ]
      },
      {
        "id" : "DocumentReference.context.facilityType",
        "path" : "DocumentReference.context.facilityType",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.healthcareFacilityTypeCode"
        }
      },
      {
        "id" : "DocumentReference.context.practiceSetting",
        "path" : "DocumentReference.context.practiceSetting",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.practiceSettingCode"
        }
      },
      {
        "id" : "DocumentReference.context.sourcePatientInfo",
        "path" : "DocumentReference.context.sourcePatientInfo",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
            ]
          }
        ]
      }
    ]
  }
}

```
