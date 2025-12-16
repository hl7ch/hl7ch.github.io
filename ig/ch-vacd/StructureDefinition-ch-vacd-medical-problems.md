# CH VACD Medical Problems - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Medical Problems**

## Resource Profile: CH VACD Medical Problems 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems | *Version*:6.0.0 |
| Draft as of 2025-12-16 | *Computable Name*:CHVACDMedicalProblems |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the medical problems part for all documents. 

### Validation and VerificationStatus

An **Medical Problems** can be recorded by an Practitioner or a Patient ([Extension: Author of the content](http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-author)).

a) In the case a practitioner is recorder, the entry is directly validated defining the verificationStatus to [Confirmed](https://hl7.org/fhir/R4/codesystem-condition-ver-status.html#condition-ver-status-confirmed)

b) In the case a patient is recording an entry the verificationStatus has to be [Unconfirmed](https://hl7.org/fhir/R4/codesystem-condition-ver-status.html#condition-ver-status-unconfirmed), a practitioner has to validate the entry.

c) In the event that an entry has been validated by a healthcare professional and a patient only adds a comment, the status remains confirmed, as all information is available in the note section.

see more about the [Validation and VerificationStatus](verification-status.md)

### Duplicate Conflict

By aggregation of different [Immunization Administration](immunization-administration-document.md) documents, dupplicates could be detected. If so, the entries in the [Vaccination Record](vaccination-record-document.md) document (as result of the aggregation) should be completed with the extension [CH VACD Extension Merging Conflict Entry Reference](StructureDefinition-ch-vacd-ext-merging-conflict-entry-reference.md). The criterias of duplicate detection can be found [here](StructureDefinition-ch-vacd-ext-merging-conflict-entry-reference.md#pastillness-medicalproblems-basicimmunization-condition).

**Usages:**

* Use this Profile: [CH VACD Immunization Administration Document](StructureDefinition-ch-vacd-document-immunization-administration.md), [CH VACD Vaccination Record Document](StructureDefinition-ch-vacd-document-vaccination-record.md) and [CH VACD Message Immunization Recommendation Request](StructureDefinition-ch-vacd-recommendation-request-message.md)
* Refer to this Profile: [CH VACD Immunization Administration Composition](StructureDefinition-ch-vacd-composition-immunization-administration.md), [CH VACD VaccinationRecord Composition](StructureDefinition-ch-vacd-composition-vaccination-record.md) and [CH VACD Immunization Recommendation Request MessageHeader](StructureDefinition-ch-vacd-recommendation-request-messageheader.md)
* Examples for this Profile: [Condition/8-2-Condition](Condition-8-2-Condition.md), [Condition/8-3-Condition](Condition-8-3-Condition.md), [Condition/8-6-Condition](Condition-8-6-Condition.md), [Condition/8-7-Condition](Condition-8-7-Condition.md)...Show 15 more,[Condition/TCB03-EXPRISK1-2](Condition-TCB03-EXPRISK1-2.md),[Condition/TCB03-EXPRISK1](Condition-TCB03-EXPRISK1.md),[Condition/TCB05-EXPRISK2](Condition-TCB05-EXPRISK2.md),[Condition/TCC03-EXPRISK1](Condition-TCC03-EXPRISK1.md),[Condition/TCC04-EXPRISK1](Condition-TCC04-EXPRISK1.md),[Condition/TCC04-EXPRISK2](Condition-TCC04-EXPRISK2.md),[Condition/TCC04-EXPRISK3](Condition-TCC04-EXPRISK3.md),[Condition/TCD02-EXPRISK1-2](Condition-TCD02-EXPRISK1-2.md),[Condition/TCD02-EXPRISK1](Condition-TCD02-EXPRISK1.md),[Condition/TCD03-EXPRISK1-2](Condition-TCD03-EXPRISK1-2.md),[Condition/TCD03-EXPRISK1](Condition-TCD03-EXPRISK1.md),[Condition/TCD03-EXPRISK2-2](Condition-TCD03-EXPRISK2-2.md),[Condition/TCD03-EXPRISK2](Condition-TCD03-EXPRISK2.md),[Condition/TCD03-EXPRISK3-2](Condition-TCD03-EXPRISK3-2.md)and[Condition/TCD03-EXPRISK3](Condition-TCD03-EXPRISK3.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-vacd|current/StructureDefinition/ch-vacd-medical-problems)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-vacd-medical-problems.csv), [Excel](StructureDefinition-ch-vacd-medical-problems.xlsx), [Schematron](StructureDefinition-ch-vacd-medical-problems.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-vacd-medical-problems",
  "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems",
  "version" : "6.0.0",
  "name" : "CHVACDMedicalProblems",
  "title" : "CH VACD Medical Problems",
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
  "description" : "Definition of the medical problems part for all documents.",
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
        "short" : "CH VACD Medical Problems Conditions"
      },
      {
        "id" : "Condition.clinicalStatus",
        "path" : "Condition.clinicalStatus",
        "mustSupport" : true
      },
      {
        "id" : "Condition.verificationStatus",
        "path" : "Condition.verificationStatus",
        "mustSupport" : true
      },
      {
        "id" : "Condition.category",
        "path" : "Condition.category",
        "short" : "Problem List Item",
        "min" : 1,
        "max" : "1",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/condition-category",
              "code" : "problem-list-item"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Condition.severity",
        "path" : "Condition.severity",
        "mustSupport" : true
      },
      {
        "id" : "Condition.code",
        "path" : "Condition.code",
        "short" : "Medical problem code",
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "MedicalProblemCode"
            },
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-isCommonBinding",
              "valueBoolean" : true
            }
          ],
          "strength" : "extensible",
          "description" : "The code for medical problems (exposition and medical risks) for immunization.",
          "valueSet" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-risks-vs"
        }
      },
      {
        "id" : "Condition.bodySite",
        "path" : "Condition.bodySite",
        "mustSupport" : true
      },
      {
        "id" : "Condition.onset[x]",
        "path" : "Condition.onset[x]",
        "mustSupport" : true
      },
      {
        "id" : "Condition.abatement[x]",
        "path" : "Condition.abatement[x]",
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
