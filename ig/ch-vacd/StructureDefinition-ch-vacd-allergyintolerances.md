# CH VACD AllergyIntolerance - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD AllergyIntolerance**

## Resource Profile: CH VACD AllergyIntolerance 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-allergyintolerances | *Version*:6.0.0 |
| Draft as of 2025-12-16 | *Computable Name*:CHVACDAllergyIntolerance |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the AllergyIntolerance part for vaccination record documents. 

### Validation and VerificationStatus

An **Allergy Intolerance** entry can be recorded by an Practitioner or a Patient ([Extension: Author of the content](http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-author)).

a) In the case a practitioner is recorder, the entry is directly validated defining the verificationStatus to [Confirmed](https://hl7.org/fhir/R4/codesystem-allergyintolerance-verification.html#allergyintolerance-verification-confirmed)

b) In the case a patient is recording an entry the verificationStatus has to be [Unconfirmed](https://hl7.org/fhir/R4/codesystem-allergyintolerance-verification.html#allergyintolerance-verification-unconfirmed), a practitioner has to validate the entry.

c) In the event that an entry has been validated by a healthcare professional and a patient only adds a comment, the status remains confirmed, as all information is available in the note section.

see more about the [Validation and VerificationStatus](verification-status.md)

### Duplicate Conflict

By aggregation of different [Immunization Administration](immunization-administration-document.md) documents, dupplicates could be detected. If so, the entries in the [Vaccination Record](vaccination-record-document.md) document (as result of the aggregation) should be completed with the extension [CH VACD Extension Merging Conflict Entry Reference](StructureDefinition-ch-vacd-ext-merging-conflict-entry-reference.md). The criterias of duplicate detection can be found [here](StructureDefinition-ch-vacd-ext-merging-conflict-entry-reference.md#allergyintolerance).

**Usages:**

* Use this Profile: [CH VACD Immunization Administration Document](StructureDefinition-ch-vacd-document-immunization-administration.md), [CH VACD Vaccination Record Document](StructureDefinition-ch-vacd-document-vaccination-record.md) and [CH VACD Message Immunization Recommendation Request](StructureDefinition-ch-vacd-recommendation-request-message.md)
* Refer to this Profile: [CH VACD Immunization Administration Composition](StructureDefinition-ch-vacd-composition-immunization-administration.md), [CH VACD VaccinationRecord Composition](StructureDefinition-ch-vacd-composition-vaccination-record.md), [CH VACD Extension Merging Conflict Entry Reference](StructureDefinition-ch-vacd-ext-merging-conflict-entry-reference.md) and [CH VACD Immunization Recommendation Request MessageHeader](StructureDefinition-ch-vacd-recommendation-request-messageheader.md)
* Examples for this Profile: [AllergyIntolerance/11-1-AllergyIntolerance](AllergyIntolerance-11-1-AllergyIntolerance.md), [AllergyIntolerance/11-2-AllergyIntolerance](AllergyIntolerance-11-2-AllergyIntolerance.md), [AllergyIntolerance/11-3-AllergyIntolerance](AllergyIntolerance-11-3-AllergyIntolerance.md), [AllergyIntolerance/11-4-AllergyIntolerance](AllergyIntolerance-11-4-AllergyIntolerance.md)...Show 4 more,[AllergyIntolerance/TCB01-ALLINTO1](AllergyIntolerance-TCB01-ALLINTO1.md),[AllergyIntolerance/TCF02-ALLINTO1](AllergyIntolerance-TCF02-ALLINTO1.md),[AllergyIntolerance/TCF02-ALLINTO2](AllergyIntolerance-TCF02-ALLINTO2.md)and[AllergyIntolerance/TCF02-ALLINTO3](AllergyIntolerance-TCF02-ALLINTO3.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-vacd|current/StructureDefinition/ch-vacd-allergyintolerances)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-vacd-allergyintolerances.csv), [Excel](StructureDefinition-ch-vacd-allergyintolerances.xlsx), [Schematron](StructureDefinition-ch-vacd-allergyintolerances.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-vacd-allergyintolerances",
  "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-allergyintolerances",
  "version" : "6.0.0",
  "name" : "CHVACDAllergyIntolerance",
  "title" : "CH VACD AllergyIntolerance",
  "status" : "draft",
  "experimental" : false,
  "date" : "2025-12-16T10:03:10+00:00",
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
  "description" : "Definition of the AllergyIntolerance part for vaccination record documents.",
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
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "AllergyIntolerance",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-allergyintolerance",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "AllergyIntolerance",
        "path" : "AllergyIntolerance",
        "short" : "CH VACD Recommendation Allergy Intolerance"
      },
      {
        "id" : "AllergyIntolerance.extension",
        "path" : "AllergyIntolerance.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "AllergyIntolerance.extension:relatesTo",
        "path" : "AllergyIntolerance.extension",
        "sliceName" : "relatesTo",
        "definition" : "The definition of a relation of this immunization entry in this document to an immunization entry in an other document.",
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
        "id" : "AllergyIntolerance.extension:conflict",
        "path" : "AllergyIntolerance.extension",
        "sliceName" : "conflict",
        "definition" : "The definition of a conflict on merging different documents.",
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
        "id" : "AllergyIntolerance.identifier",
        "path" : "AllergyIntolerance.identifier",
        "short" : "AllergyIntolerance item ID",
        "min" : 1
      },
      {
        "id" : "AllergyIntolerance.verificationStatus",
        "path" : "AllergyIntolerance.verificationStatus",
        "definition" : "Status of verification.\nWith the verificationStatus, practitioners can express that they verified the data added by a patient or related person.",
        "min" : 1
      },
      {
        "id" : "AllergyIntolerance.code",
        "path" : "AllergyIntolerance.code",
        "short" : "Allergy Intolerance code",
        "mustSupport" : true,
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "AllergyCode"
            },
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-isCommonBinding",
              "valueBoolean" : true
            }
          ],
          "strength" : "extensible",
          "description" : "The code for allergy.",
          "valueSet" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-immunization-allergyintolerances-vs"
        }
      },
      {
        "id" : "AllergyIntolerance.patient",
        "path" : "AllergyIntolerance.patient",
        "mustSupport" : true
      },
      {
        "id" : "AllergyIntolerance.recorder",
        "path" : "AllergyIntolerance.recorder",
        "mustSupport" : true
      },
      {
        "id" : "AllergyIntolerance.note.author[x]",
        "path" : "AllergyIntolerance.note.author[x]",
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
      }
    ]
  }
}

```
