# CH VACD Past Illness - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Past Illness**

## Resource Profile: CH VACD Past Illness 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses | *Version*:6.0.0 |
| Draft as of 2025-12-16 | *Computable Name*:CHVACDPastIllness |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the past illness part for all documents. 

### Validation and VerificationStatus

An **Pastillness** entry can be recorded by an Practitioner or a Patient ([Extension: Author of the content](http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-author)).

a) In the case a practitioner is recorder, the entry is directly validated defining the verificationStatus to [Confirmed](https://hl7.org/fhir/R4/codesystem-condition-ver-status.html#condition-ver-status-confirmed)

b) In the case a patient is recording an entry the verificationStatus has to be [Unconfirmed](https://hl7.org/fhir/R4/codesystem-condition-ver-status.html#condition-ver-status-unconfirmed), a practitioner has to validate the entry.

c) In the event that an entry has been validated by a healthcare professional and a patient only adds a comment, the status remains confirmed, as all information is available in the note section.

see more about the [Validation and VerificationStatus](verification-status.md)

### Duplicate Conflict

By aggregation of different [Immunization Administration](immunization-administration-document.md) documents, dupplicates could be detected. If so, the entries in the [Vaccination Record](vaccination-record-document.md) document (as result of the aggregation) should be completed with the extension [CH VACD Extension Merging Conflict Entry Reference](StructureDefinition-ch-vacd-ext-merging-conflict-entry-reference.md). The criterias of duplicate detection can be found [here](StructureDefinition-ch-vacd-ext-merging-conflict-entry-reference.md#pastillness-medicalproblems-basicimmunization-condition).

**Usages:**

* Use this Profile: [CH VACD Immunization Administration Document](StructureDefinition-ch-vacd-document-immunization-administration.md), [CH VACD Vaccination Record Document](StructureDefinition-ch-vacd-document-vaccination-record.md) and [CH VACD Message Immunization Recommendation Request](StructureDefinition-ch-vacd-recommendation-request-message.md)
* Refer to this Profile: [CH VACD Immunization Administration Composition](StructureDefinition-ch-vacd-composition-immunization-administration.md), [CH VACD VaccinationRecord Composition](StructureDefinition-ch-vacd-composition-vaccination-record.md) and [CH VACD Immunization Recommendation Request MessageHeader](StructureDefinition-ch-vacd-recommendation-request-messageheader.md)
* Examples for this Profile: [Condition/8-4-Condition](Condition-8-4-Condition.md), [Condition/8-8-Condition](Condition-8-8-Condition.md), [Condition/8-9-Condition](Condition-8-9-Condition.md), [Condition/TCB02-UNDILL1-2](Condition-TCB02-UNDILL1-2.md)...Show 10 more,[Condition/TCB02-UNDILL1](Condition-TCB02-UNDILL1.md),[Condition/TCC05-UNDILL1](Condition-TCC05-UNDILL1.md),[Condition/TCC05-UNDILL2](Condition-TCC05-UNDILL2.md),[Condition/TCC05-UNDILL3](Condition-TCC05-UNDILL3.md),[Condition/TCD02-UNDILL1-2](Condition-TCD02-UNDILL1-2.md),[Condition/TCD02-UNDILL1](Condition-TCD02-UNDILL1.md),[Condition/TCE01-UNDILL1-de](Condition-TCE01-UNDILL1-de.md),[Condition/TCF03-UNDILL1](Condition-TCF03-UNDILL1.md),[Condition/TCF03-UNDILL2](Condition-TCF03-UNDILL2.md)and[Condition/TCF03-UNDILL3](Condition-TCF03-UNDILL3.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-vacd|current/StructureDefinition/ch-vacd-pastillnesses)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-vacd-pastillnesses.csv), [Excel](StructureDefinition-ch-vacd-pastillnesses.xlsx), [Schematron](StructureDefinition-ch-vacd-pastillnesses.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-vacd-pastillnesses",
  "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses",
  "version" : "6.0.0",
  "name" : "CHVACDPastIllness",
  "title" : "CH VACD Past Illness",
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
  "description" : "Definition of the past illness part for all documents.",
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
      "identity" : "sct-concept",
      "uri" : "http://snomed.info/conceptdomain",
      "name" : "SNOMED CT Concept Domain Binding"
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
      "identity" : "sct-attr",
      "uri" : "http://snomed.org/attributebinding",
      "name" : "SNOMED CT Attribute Binding"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Condition",
  "baseDefinition" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-condition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Condition",
        "path" : "Condition",
        "short" : "CH VACD Past Illness Conditions",
        "constraint" : [
          {
            "key" : "ch-vacd-pastillnesses-1",
            "severity" : "error",
            "human" : "If Condition.clinicalStatus is present the code SHALL be set to resolved",
            "expression" : "(clinicalStatus.exists() and clinicalStatus.coding.where(system='http://terminology.hl7.org/CodeSystem/condition-clinical' and code = 'resolved').exists()) or verificationStatus.coding.where(system='http://terminology.hl7.org/CodeSystem/condition-ver-status'and code = 'entered-in-error').exists()",
            "source" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses"
          }
        ]
      },
      {
        "id" : "Condition.verificationStatus",
        "path" : "Condition.verificationStatus",
        "mustSupport" : true
      },
      {
        "id" : "Condition.category",
        "path" : "Condition.category",
        "max" : "0"
      },
      {
        "id" : "Condition.severity",
        "path" : "Condition.severity",
        "mustSupport" : true
      },
      {
        "id" : "Condition.code",
        "path" : "Condition.code",
        "short" : "Past illness code",
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "PastIllnessesCode"
            },
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-isCommonBinding",
              "valueBoolean" : true
            }
          ],
          "strength" : "extensible",
          "description" : "The code for past illnesses for immunization.",
          "valueSet" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-targetdiseasesandillnessesundergoneforimmunization-vs"
        }
      },
      {
        "id" : "Condition.onset[x]",
        "path" : "Condition.onset[x]",
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
        "id" : "Condition.onset[x]:onsetDateTime",
        "path" : "Condition.onset[x]",
        "sliceName" : "onsetDateTime",
        "short" : "Condition onset DateTime to declare the disorder/illness hat taken place.",
        "comment" : "The date the declared disorder had taken place and an immunization will be evolved.",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "dateTime"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Condition.abatement[x]",
        "path" : "Condition.abatement[x]",
        "mustSupport" : true
      },
      {
        "id" : "Condition.evidence.code",
        "path" : "Condition.evidence.code",
        "mustSupport" : true
      },
      {
        "id" : "Condition.note",
        "path" : "Condition.note",
        "mustSupport" : true
      },
      {
        "id" : "Condition.note.author[x]",
        "path" : "Condition.note.author[x]",
        "mustSupport" : true
      }
    ]
  }
}

```
