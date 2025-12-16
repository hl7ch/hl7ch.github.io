# CH VACD Extension Merging Conflict Entry Reference - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Extension Merging Conflict Entry Reference**

## Extension: CH VACD Extension Merging Conflict Entry Reference 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-ext-merging-conflict-entry-reference | *Version*:6.0.0 |
| Draft as of 2021-12-08 | *Computable Name*:CHVACDExtensionMergingConflictEntryReference |
| **Copyright/Legal**: CC0-1.0 | |

Extension to make a reference to an entry conflicting with other entries.

**Context of Use**

### Scope and Usage

This extension should be used in the context of a [vaccination record document](StructureDefinition-ch-vacd-document-vaccination-record.md) to declare duplicated entry conflicts occurring on [aggregation](aggregator.md) of multiple [immunization administration documents](StructureDefinition-ch-vacd-document-immunization-administration.md).

The [Test Cases D Conflicts on merging Documents](TestCases.md#d-conflicts-on-merging-documents) are describing the process and defines some examples of the usage.

### Resolution of conflicts

The resolution of the conflicts has to be done by a healthcare professional. In this process the healthcare professional detects out of the conflicting entries the correct one and creates a [Immunization Administration]() document with the entries to be declared by status as “entered-in-error” and by using the [Extension: Entry Resource Cross References]() to reference the source entries and their documents.

From document with conflicts to document fixing the conflicts (setting status entered-in-error)

After conflict resolution and saving the corrective document in the next aggregation cycle, the conflicts should not be shown anymore.

### Criteria of duplication

The criteria to detect duplicates will be defined according to the different resource types and profiles.

#### Immunization

Two or more [Immunization](StructureDefinition-ch-vacd-immunization.md) resources can be declared as duplicate if following criteria is fulfilled.

* [vaccineCode](StructureDefinition-ch-vacd-immunization-definitions.md#Immunization.vaccineCode)
* [occurrenceDateTime](StructureDefinition-ch-vacd-immunization-definitions.md#Immunization.occurrence[x]:occurrenceDateTime)
* [targetDisease](StructureDefinition-ch-vacd-immunization-definitions.md#Immunization.protocolApplied.targetDisease)
* [identifier](StructureDefinition-ch-vacd-immunization-definitions.md#Immunization.identifier) (can be different, but if same system should be same value)
* [lotNumber](StructureDefinition-ch-vacd-immunization-definitions.md#Immunization.lotNumber) (if available)

#### AllergyIntolerance

Two or more [AllergyIntolerance](StructureDefinition-ch-vacd-allergyintolerances.md)resources can be declared as duplicate if following criteria is fulfilled:

* [code](StructureDefinition-ch-vacd-allergyintolerances-definitions.md#AllergyIntolerance.code)
* [onset[x]](StructureDefinition-ch-vacd-allergyintolerances-definitions.md#AllergyIntolerance.onset[x])
* [identifier](StructureDefinition-ch-vacd-allergyintolerances-definitions.md#AllergyIntolerance.identifier) (can be different, but if same system should be same value)

#### Laboratory And Serology

Two or more [Observation](StructureDefinition-ch-vacd-laboratory-serology.md)resources can be declared as duplicate if following criteria is fulfilled:

* [code](StructureDefinition-ch-vacd-laboratory-serology-definitions.md#diff_Observation.code)
* [effective[x]](StructureDefinition-ch-vacd-laboratory-serology-definitions.md#Observation.effective[x])
* [value[x]](StructureDefinition-ch-vacd-laboratory-serology-definitions.md#diff_Observation.value[x])
* [identifier](StructureDefinition-ch-vacd-laboratory-serology-definitions.md#diff_Observation.identifier) (can be different, but if same system should be same value)

#### PastIllness, MedicalProblems, BasicImmunization (Condition)

Two or more [CH VACD Condition Profile (Abstract)](StructureDefinition-ch-vacd-condition.md) (and the derivations [CH VACD Past Illness](StructureDefinition-ch-vacd-pastillnesses.md), [CH VACD Medical Problems](StructureDefinition-ch-vacd-medical-problems.md) and [CH VACD Basic Immunization](StructureDefinition-ch-vacd-basic-immunization.md)) resources can be declared as duplicate if following criteria is fulfilled:

* [code](StructureDefinition-ch-vacd-condition-definitions.md#Condition.code)
* [onset[x]](StructureDefinition-ch-vacd-condition-definitions.md#Condition.onset[x])
* [identifier](StructureDefinition-ch-vacd-condition-definitions.md#Condition.identifier) (can be different, but if same system should be same value)

**Usage info**

**Usages:**

* Use this Extension: [CH VACD AllergyIntolerance](StructureDefinition-ch-vacd-allergyintolerances.md), [CH VACD Condition Profile (Abstract)](StructureDefinition-ch-vacd-condition.md), [CH VACD Immunization](StructureDefinition-ch-vacd-immunization.md) and [CH VACD Laboratory And Serology](StructureDefinition-ch-vacd-laboratory-serology.md)
* Examples for this Extension: [Bundle/RDD01](Bundle-RDD01.md), [Bundle/RDD01b](Bundle-RDD01b.md), [Bundle/RDD02](Bundle-RDD02.md), [Bundle/RDD02b](Bundle-RDD02b.md)...Show 11 more,[Bundle/RDD03](Bundle-RDD03.md),[Bundle/RDD03b](Bundle-RDD03b.md),[Condition/TCB02-UNDILL1-2](Condition-TCB02-UNDILL1-2.md),[Condition/TCB03-EXPRISK1-2](Condition-TCB03-EXPRISK1-2.md),[Condition/TCD02-EXPRISK1-2](Condition-TCD02-EXPRISK1-2.md),[Condition/TCD02-UNDILL1-2](Condition-TCD02-UNDILL1-2.md),[Condition/TCD03-EXPRISK1-2](Condition-TCD03-EXPRISK1-2.md),[Condition/TCD03-EXPRISK2-2](Condition-TCD03-EXPRISK2-2.md),[Condition/TCD03-EXPRISK3-2](Condition-TCD03-EXPRISK3-2.md),[Immunization/TCD01-IMMUN2-2](Immunization-TCD01-IMMUN2-2.md)and[Immunization/TCD01-IMMUN3-2](Immunization-TCD01-IMMUN3-2.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-vacd|current/StructureDefinition/ch-vacd-ext-merging-conflict-entry-reference)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-vacd-ext-merging-conflict-entry-reference.csv), [Excel](StructureDefinition-ch-vacd-ext-merging-conflict-entry-reference.xlsx), [Schematron](StructureDefinition-ch-vacd-ext-merging-conflict-entry-reference.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-vacd-ext-merging-conflict-entry-reference",
  "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-ext-merging-conflict-entry-reference",
  "version" : "6.0.0",
  "name" : "CHVACDExtensionMergingConflictEntryReference",
  "title" : "CH VACD Extension Merging Conflict Entry Reference",
  "status" : "draft",
  "date" : "2021-12-08T00:00:00+00:00",
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
  "description" : "Extension to make a reference to an entry conflicting with other entries.",
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
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [
    {
      "type" : "element",
      "expression" : "Immunization"
    },
    {
      "type" : "element",
      "expression" : "Condition"
    },
    {
      "type" : "element",
      "expression" : "Observation"
    },
    {
      "type" : "element",
      "expression" : "AllergyIntolerance"
    }
  ],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension",
        "path" : "Extension",
        "short" : "Reference to related resource",
        "definition" : "Extension to make a reference to an entry conflicting with other entries.",
        "mustSupport" : true
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 2
      },
      {
        "id" : "Extension.extension:entry",
        "path" : "Extension.extension",
        "sliceName" : "entry",
        "short" : "Reference to the conflicting entry.",
        "definition" : "Reference to the conflicting entry.",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:entry.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:entry.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "entry"
      },
      {
        "id" : "Extension.extension:entry.value[x]",
        "path" : "Extension.extension.value[x]",
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
        "id" : "Extension.extension:entry.value[x]:valueReference",
        "path" : "Extension.extension.value[x]",
        "sliceName" : "valueReference",
        "short" : "The Reference to the conflicting entry.",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization",
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-allergyintolerances",
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-laboratory-serology",
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-condition"
            ]
          }
        ]
      },
      {
        "id" : "Extension.extension:conflict",
        "path" : "Extension.extension",
        "sliceName" : "conflict",
        "short" : "Reference to the related document",
        "definition" : "Reference to the related document",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:conflict.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:conflict.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "conflict"
      },
      {
        "id" : "Extension.extension:conflict.value[x]",
        "path" : "Extension.extension.value[x]",
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
        "id" : "Extension.extension:conflict.value[x]:valueCode",
        "path" : "Extension.extension.value[x]",
        "sliceName" : "valueCode",
        "short" : "The type of conflict between entries.",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "code"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-entry-conflict-vs"
        }
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-ext-merging-conflict-entry-reference"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "max" : "0"
      }
    ]
  }
}

```
