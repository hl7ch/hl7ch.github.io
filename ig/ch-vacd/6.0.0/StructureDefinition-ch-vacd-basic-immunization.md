# CH VACD Basic Immunization - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Basic Immunization**

## Resource Profile: CH VACD Basic Immunization 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-basic-immunization | *Version*:6.0.0 |
| Draft as of 2025-12-16 | *Computable Name*:CHVACDBasicImmunization |
| **Copyright/Legal**: CC0-1.0 | |

 
Condition to declare Basic Immunization done by one single condition for the declared vaccinations according to the ValueSet[Basic Immunization Codes](ValueSet-ch-vacd-basic-immunization-vs.md).
This is for cases the patient does not have a vaccination certificate to declare, but knows that it is done. 

### Boundaries and Restrictions

There are cases where it is not possible to enter all given vaccinations because of lack of documentation (i.e. loss of vaccination card) but it's known, that the person is vaccinatied in childhood according to the common immunization program to reach basic immunization.

With this profile, this information can be documented in the electronic records. Clinical decision systems can based on this information make correct recommendations.

The corresponding value set with the possible codes can be found [here](ValueSet-ch-vacd-basic-immunization-vs.md)

### Validation and VerificationStatus

An **Basic Immunization** entry can be recorded by an Practitioner or a Patient ([Extension: Author of the content](http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-author)).

a) In the case a practitioner is recorder, the entry is directly validated defining the verificationStatus to [Confirmed](https://hl7.org/fhir/R4/codesystem-condition-ver-status.html#condition-ver-status-confirmed)

b) In the case a patient is recording an entry the verificationStatus has to be [Unconfirmed](https://hl7.org/fhir/R4/codesystem-condition-ver-status.html#condition-ver-status-unconfirmed), a practitioner has to validate the entry.

c) In the event that an entry has been validated by a healthcare professional and a patient only adds a comment, the status remains confirmed, as all information is available in the note section.

see more about the [Validation and VerificationStatus](verification-status.md)

### Duplicate Conflict

By aggregation of different [Immunization Administration](immunization-administration-document.md) documents, dupplicates could be detected. If so, the entries in the [Vaccination Record](vaccination-record-document.md) document (as result of the aggregation) should be completed with the extension [CH VACD Extension Merging Conflict Entry Reference](StructureDefinition-ch-vacd-ext-merging-conflict-entry-reference.md). The criterias of duplicate detection can be found [here](StructureDefinition-ch-vacd-ext-merging-conflict-entry-reference.md#pastillness-medicalproblems-basicimmunization-condition).

**Usages:**

* Use this Profile: [CH VACD Immunization Administration Document](StructureDefinition-ch-vacd-document-immunization-administration.md), [CH VACD Vaccination Record Document](StructureDefinition-ch-vacd-document-vaccination-record.md) and [CH VACD Message Immunization Recommendation Request](StructureDefinition-ch-vacd-recommendation-request-message.md)
* Refer to this Profile: [CH VACD Immunization Administration Composition](StructureDefinition-ch-vacd-composition-immunization-administration.md), [CH VACD VaccinationRecord Composition](StructureDefinition-ch-vacd-composition-vaccination-record.md) and [CH VACD Immunization Recommendation Request MessageHeader](StructureDefinition-ch-vacd-recommendation-request-messageheader.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-vacd|current/StructureDefinition/ch-vacd-basic-immunization)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-vacd-basic-immunization.csv), [Excel](StructureDefinition-ch-vacd-basic-immunization.xlsx), [Schematron](StructureDefinition-ch-vacd-basic-immunization.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-vacd-basic-immunization",
  "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-basic-immunization",
  "version" : "6.0.0",
  "name" : "CHVACDBasicImmunization",
  "title" : "CH VACD Basic Immunization",
  "status" : "draft",
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
  "description" : "Condition to declare Basic Immunization done by one single condition for the declared vaccinations according to the ValueSet [Basic Immunization Codes](ValueSet-ch-vacd-basic-immunization-vs.html).  \nThis is for cases the patient does not have a vaccination certificate to declare, but knows that it is done.",
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
        "short" : "CH VACD Basic Immunization Conditions"
      },
      {
        "id" : "Condition.category",
        "path" : "Condition.category",
        "short" : "Encounter Diagnosis",
        "min" : 1,
        "max" : "1",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/condition-category",
              "code" : "encounter-diagnosis"
            }
          ]
        }
      },
      {
        "id" : "Condition.code",
        "path" : "Condition.code",
        "short" : "Basic immunization code",
        "binding" : {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-bindingName",
              "valueString" : "BasicImmunizationCode"
            },
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-isCommonBinding",
              "valueBoolean" : true
            }
          ],
          "strength" : "extensible",
          "description" : "The code declaring the status of basic immunization for DTPa and/or Polio.",
          "valueSet" : "http://fhir.ch/ig/ch-vacd/ValueSet/ch-vacd-basic-immunization-vs"
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
        "short" : "Condition onset DateTime to declare the date where the basic immunization is declared as done.",
        "comment" : "Condition onset DateTime to declare the date where the basic immunization is declared as done.",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "dateTime"
          }
        ]
      }
    ]
  }
}

```
