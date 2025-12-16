# CH VACD Immunization - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Immunization**

## Resource Profile: CH VACD Immunization 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHVACDImmunization |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the immunization part for all documents. 

### Validation and VerificationStatus

An **Immunization** entry can be recorded by an Practitioner or a Patient ([Extension: Author of the content](http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-author)).

a) In the case a practitioner is recorder, the entry is directly validated defining the verificationStatus ([extension](StructureDefinition-ch-vacd-ext-verification-status.md)) to [Confirmed](http://snomed.info/id/59156000)

b) In the case a patient is recording an entry the verificationStatus ([extension](StructureDefinition-ch-vacd-ext-verification-status.md)) has to be [Not confirmed](http://snomed.info/id/76104008), a practitioner has to validate the entry.

c) In the event that an entry has been validated by a healthcare professional and a patient only adds a comment, the status remains confirmed, as all information is available in the note section.

see more about the [Validation and VerificationStatus](verification-status.md)

### Duplicate Conflict

By aggregation of different [Immunization Administration](immunization-administration-document.md) documents, duplicates could be detected. If so, the entries in the [Vaccination Record](vaccination-record-document.md) document (as result of the aggregation) should be completed with the extension [CH VACD Extension Merging Conflict Entry Reference](StructureDefinition-ch-vacd-ext-merging-conflict-entry-reference.md). The criterias of duplicate detection can be found [here](StructureDefinition-ch-vacd-ext-merging-conflict-entry-reference.md#immunization).

**Usages:**

* Use this Profile: [CH VACD Immunization Administration Document](StructureDefinition-ch-vacd-document-immunization-administration.md), [CH VACD Vaccination Record Document](StructureDefinition-ch-vacd-document-vaccination-record.md) and [CH VACD Message Immunization Recommendation Request](StructureDefinition-ch-vacd-recommendation-request-message.md)
* Refer to this Profile: [CH VACD Immunization Administration Composition](StructureDefinition-ch-vacd-composition-immunization-administration.md), [CH VACD VaccinationRecord Composition](StructureDefinition-ch-vacd-composition-vaccination-record.md), [CH VACD Extension Merging Conflict Entry Reference](StructureDefinition-ch-vacd-ext-merging-conflict-entry-reference.md) and [CH VACD Immunization Recommendation Request MessageHeader](StructureDefinition-ch-vacd-recommendation-request-messageheader.md)
* Examples for this Profile: [Immunization/7-1-Immunization](Immunization-7-1-Immunization.md), [Immunization/7-1-Immunization2](Immunization-7-1-Immunization2.md), [Immunization/7-10-Immunization](Immunization-7-10-Immunization.md), [Immunization/7-11-Immunization](Immunization-7-11-Immunization.md)...Show 37 more,[Immunization/7-12-Immunization](Immunization-7-12-Immunization.md),[Immunization/7-2-Immunization](Immunization-7-2-Immunization.md),[Immunization/7-3-Immunization](Immunization-7-3-Immunization.md),[Immunization/7-4-Immunization](Immunization-7-4-Immunization.md),[Immunization/7-5-Immunization](Immunization-7-5-Immunization.md),[Immunization/7-6-Immunization](Immunization-7-6-Immunization.md),[Immunization/7-7-Immunization](Immunization-7-7-Immunization.md),[Immunization/7-8-Immunization](Immunization-7-8-Immunization.md),[Immunization/7-9-Immunization](Immunization-7-9-Immunization.md),[Immunization/TCA01-IMMUN1-patient](Immunization-TCA01-IMMUN1-patient.md),[Immunization/TCA01-IMMUN2-HCP1-ORG1-ROLE](Immunization-TCA01-IMMUN2-HCP1-ORG1-ROLE.md),[Immunization/TCA01-IMMUN3-HCP2-ORG2-ROLE](Immunization-TCA01-IMMUN3-HCP2-ORG2-ROLE.md),[Immunization/TCA02-IMMUN4-HCP2-ORG2-ROLE](Immunization-TCA02-IMMUN4-HCP2-ORG2-ROLE.md),[Immunization/TCA03-IMMUN5-patient](Immunization-TCA03-IMMUN5-patient.md),[Immunization/TCA04-IMMUN5-patient-val-gfp](Immunization-TCA04-IMMUN5-patient-val-gfp.md),[Immunization/TCB01-IMMUN1](Immunization-TCB01-IMMUN1.md),[Immunization/TCB01-IMMUN2](Immunization-TCB01-IMMUN2.md),[Immunization/TCB05-IMMUN1](Immunization-TCB05-IMMUN1.md),[Immunization/TCB05-IMMUN2](Immunization-TCB05-IMMUN2.md),[Immunization/TCC01-IMMUN1-patient](Immunization-TCC01-IMMUN1-patient.md),[Immunization/TCC01-IMMUN2-patient](Immunization-TCC01-IMMUN2-patient.md),[Immunization/TCC02-IMMUN3-HCP1-ORG1-ROLE](Immunization-TCC02-IMMUN3-HCP1-ORG1-ROLE.md),[Immunization/TCC02-IMMUN4-HCP1-ORG1-ROLE](Immunization-TCC02-IMMUN4-HCP1-ORG1-ROLE.md),[Immunization/TCD01-IMMUN1](Immunization-TCD01-IMMUN1.md),[Immunization/TCD01-IMMUN2-2](Immunization-TCD01-IMMUN2-2.md),[Immunization/TCD01-IMMUN2](Immunization-TCD01-IMMUN2.md),[Immunization/TCD01-IMMUN3-2](Immunization-TCD01-IMMUN3-2.md),[Immunization/TCD01-IMMUN3](Immunization-TCD01-IMMUN3.md),[Immunization/TCD01-IMMUN4](Immunization-TCD01-IMMUN4.md),[Immunization/TCD01-IMMUN5](Immunization-TCD01-IMMUN5.md),[Immunization/TCE01-IMMUN1-de](Immunization-TCE01-IMMUN1-de.md),[Immunization/TCE01-IMMUN1-fr](Immunization-TCE01-IMMUN1-fr.md),[Immunization/TCE01-IMMUN2-de](Immunization-TCE01-IMMUN2-de.md),[Immunization/TCE01-IMMUN2-fr](Immunization-TCE01-IMMUN2-fr.md),[Immunization/TCF01-IMMUN1](Immunization-TCF01-IMMUN1.md),[Immunization/TCF01-IMMUN2](Immunization-TCF01-IMMUN2.md)and[Immunization/TCF01-IMMUN3](Immunization-TCF01-IMMUN3.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-vacd|current/StructureDefinition/ch-vacd-immunization)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-vacd-immunization.csv), [Excel](StructureDefinition-ch-vacd-immunization.xlsx), [Schematron](StructureDefinition-ch-vacd-immunization.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-vacd-immunization",
  "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization",
  "version" : "6.0.0",
  "name" : "CHVACDImmunization",
  "title" : "CH VACD Immunization",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-16T09:56:56+00:00",
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
    }
  ],
  "description" : "Definition of the immunization part for all documents.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CHE"
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
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Immunization",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-immunization",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Immunization",
        "path" : "Immunization",
        "short" : "CH VACD Immunization",
        "constraint" : [
          {
            "key" : "ch-vacd-occurrence-1",
            "severity" : "warning",
            "human" : "Use this field as less as possible and only in cases you may really not declare structured information within the field occurrenceDateTime.  \nUsing occurrenceString without occurrenceDateTime breaks automated structured processing. This means i.e. decision support systems (CDS) may not make real evaluations for immunization recommendations.  \nFor some vaccinations where basic immunization templates exists, the declaration of fully vaccination according to the basic immunization plans can be done using the profile.",
            "expression" : "occurrence.exists() and (occurrence is string).not()",
            "source" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization"
          }
        ]
      },
      {
        "id" : "Immunization.contained",
        "path" : "Immunization.contained",
        "short" : "Immunization inline resource",
        "max" : "1"
      },
      {
        "id" : "Immunization.extension",
        "path" : "Immunization.extension",
        "min" : 1
      },
      {
        "id" : "Immunization.extension:recorder",
        "path" : "Immunization.extension",
        "sliceName" : "recorder",
        "mustSupport" : true
      },
      {
        "id" : "Immunization.extension:relatesTo",
        "path" : "Immunization.extension",
        "sliceName" : "relatesTo",
        "definition" : "The relatesTo extension is used to identify the replaced/corrected entry in an other document. The extension references the identifier and resource type of the entry and the identifier and resource type of the container i.e. Composition.",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-ext-entry-resource-cross-references"
            ]
          }
        ]
      },
      {
        "id" : "Immunization.extension:medication",
        "path" : "Immunization.extension",
        "sliceName" : "medication",
        "definition" : "The Reference to the Medication resource defining the vaccination material.",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-ext-immunization-medication-reference"
            ]
          }
        ]
      },
      {
        "id" : "Immunization.extension:conflict",
        "path" : "Immunization.extension",
        "sliceName" : "conflict",
        "definition" : "Indicator for merging conflicts.",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-ext-merging-conflict-entry-reference"
            ]
          }
        ]
      },
      {
        "id" : "Immunization.extension:verificationStatus",
        "path" : "Immunization.extension",
        "sliceName" : "verificationStatus",
        "definition" : "Status of verification by a practitioner",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-ext-verification-status"
            ]
          }
        ]
      },
      {
        "id" : "Immunization.status",
        "path" : "Immunization.status",
        "mustSupport" : true
      },
      {
        "id" : "Immunization.vaccineCode",
        "path" : "Immunization.vaccineCode",
        "mustSupport" : true
      },
      {
        "id" : "Immunization.occurrence[x]",
        "path" : "Immunization.occurrence[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Immunization.occurrence[x]:occurrenceDateTime",
        "path" : "Immunization.occurrence[x]",
        "sliceName" : "occurrenceDateTime",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "dateTime"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Immunization.occurrence[x]:occurrenceDateTime.extension",
        "path" : "Immunization.occurrence[x].extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Immunization.occurrence[x]:occurrenceDateTime.extension:data-absent-reason",
        "path" : "Immunization.occurrence[x].extension",
        "sliceName" : "data-absent-reason",
        "short" : "occurrence[x] absence reason",
        "definition" : "Provides a reason why the occurrence is missing.",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/data-absent-reason|4.0.1"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Immunization.occurrence[x]:occurrenceString",
        "path" : "Immunization.occurrence[x]",
        "sliceName" : "occurrenceString",
        "short" : "Possibility to declare textual description - not structured",
        "definition" : "Use this field as less as possible and only in cases you may really not declare structured information within the field occurrenceDateTime.  \nUsing occurrenceString without occurrenceDateTime breaks automated structured processing. This means i.e. decision support systems (CDS) may not make real evaluations for immunization recommendations.  \nFor some vaccinations where basic immunization templates exists, the declaration of fully vaccination according to the basic immunization plans can be done using the profile [CH VACD Basic Immunization](StructureDefinition-ch-vacd-basic-immunization.html).",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ]
      },
      {
        "id" : "Immunization.lotNumber",
        "path" : "Immunization.lotNumber",
        "mustSupport" : true
      },
      {
        "id" : "Immunization.site",
        "path" : "Immunization.site",
        "mustSupport" : true
      },
      {
        "id" : "Immunization.route",
        "path" : "Immunization.route",
        "mustSupport" : true
      },
      {
        "id" : "Immunization.performer.actor",
        "path" : "Immunization.performer.actor",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Immunization.note.author[x]",
        "path" : "Immunization.note.author[x]",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ]
          }
        ]
      },
      {
        "id" : "Immunization.reasonCode",
        "path" : "Immunization.reasonCode",
        "mustSupport" : true
      },
      {
        "id" : "Immunization.protocolApplied.doseNumber[x]",
        "path" : "Immunization.protocolApplied.doseNumber[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Immunization.protocolApplied.doseNumber[x]:doseNumberPositiveInt",
        "path" : "Immunization.protocolApplied.doseNumber[x]",
        "sliceName" : "doseNumberPositiveInt",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "positiveInt"
          }
        ],
        "mustSupport" : true
      }
    ]
  }
}

```
