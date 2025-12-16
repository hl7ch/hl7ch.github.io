# CH LAB-Order Composition with ServiceRequest and Form - CH LAB-Order (R4) v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Order Composition with ServiceRequest and Form**

## Resource Profile: CH LAB-Order Composition with ServiceRequest and Form 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-composition-with-sr-and-form | *Version*:3.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabOrderCompositionWithSR_AndForm |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the Composition resource using ServiceRequest and Form. 

**Usages:**

* Use this Profile: [CH LAB-Order Document with ServiceRequest and Form](StructureDefinition-ch-lab-order-document-with-sr-and-form.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-lab-order|current/StructureDefinition/ch-lab-order-composition-with-sr-and-form)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-lab-order-composition-with-sr-and-form.csv), [Excel](StructureDefinition-ch-lab-order-composition-with-sr-and-form.xlsx), [Schematron](StructureDefinition-ch-lab-order-composition-with-sr-and-form.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-lab-order-composition-with-sr-and-form",
  "url" : "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-composition-with-sr-and-form",
  "version" : "3.0.0",
  "name" : "ChLabOrderCompositionWithSR_AndForm",
  "title" : "CH LAB-Order Composition with ServiceRequest and Form",
  "status" : "active",
  "date" : "2025-12-16T11:34:27+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    },
    {
      "name" : "Marcel Hanselmann",
      "telecom" : [
        {
          "system" : "email",
          "value" : "laborprojektgruppe@gmail.com",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Definition of the Composition resource using ServiceRequest and Form.",
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
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
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
      "identity" : "fhirdocumentreference",
      "uri" : "http://hl7.org/fhir/documentreference",
      "name" : "FHIR DocumentReference"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Composition",
  "baseDefinition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-composition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Composition",
        "path" : "Composition",
        "short" : "CH LAB-Order Composition with ServiceRequest and Form"
      },
      {
        "id" : "Composition.type",
        "path" : "Composition.type",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.typeCode"
        }
      },
      {
        "id" : "Composition.category",
        "path" : "Composition.category",
        "short" : "Order Document",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.classCode"
        }
      },
      {
        "id" : "Composition.section:orderReferral",
        "path" : "Composition.section",
        "sliceName" : "orderReferral"
      },
      {
        "id" : "Composition.section:orderReferral.entry",
        "path" : "Composition.section.entry",
        "min" : 3
      },
      {
        "id" : "Composition.section:orderReferral.entry:Questionnaire",
        "path" : "Composition.section.entry",
        "sliceName" : "Questionnaire",
        "min" : 1
      },
      {
        "id" : "Composition.section:orderReferral.entry:QuestionnaireResponse",
        "path" : "Composition.section.entry",
        "sliceName" : "QuestionnaireResponse",
        "min" : 1
      }
    ]
  }
}

```
