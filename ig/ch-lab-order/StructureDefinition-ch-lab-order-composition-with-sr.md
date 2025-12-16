# CH LAB-Order Composition with ServiceRequest - CH LAB-Order (R4) v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH LAB-Order Composition with ServiceRequest**

## Resource Profile: CH LAB-Order Composition with ServiceRequest 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-composition-with-sr | *Version*:3.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabOrderCompositionWithSR |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the Composition resource using ServiceRequest. 

**Usages:**

* Use this Profile: [CH LAB-Order Document with ServiceRequest](StructureDefinition-ch-lab-order-document-with-sr.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-lab-order|current/StructureDefinition/ch-lab-order-composition-with-sr)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-lab-order-composition-with-sr.csv), [Excel](StructureDefinition-ch-lab-order-composition-with-sr.xlsx), [Schematron](StructureDefinition-ch-lab-order-composition-with-sr.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-lab-order-composition-with-sr",
  "url" : "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-composition-with-sr",
  "version" : "3.0.0",
  "name" : "ChLabOrderCompositionWithSR",
  "title" : "CH LAB-Order Composition with ServiceRequest",
  "status" : "active",
  "date" : "2025-12-16T11:38:24+00:00",
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
  "description" : "Definition of the Composition resource using ServiceRequest.",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-composition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Composition",
        "path" : "Composition",
        "short" : "CH LAB-Order Composition with ServiceRequest"
      },
      {
        "id" : "Composition.type",
        "path" : "Composition.type",
        "short" : "Precise type of clinical document",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.typeCode"
        }
      },
      {
        "id" : "Composition.category",
        "path" : "Composition.category",
        "short" : "Order Document",
        "min" : 1,
        "max" : "1",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.classCode"
        }
      },
      {
        "id" : "Composition.subject",
        "path" : "Composition.subject",
        "short" : "Patient as the principle target of service request",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.author",
        "path" : "Composition.author",
        "short" : "The person/organization responsible for the form content",
        "max" : "1",
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
        "id" : "Composition.title",
        "path" : "Composition.title",
        "short" : "Meaningful title",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section",
        "path" : "Composition.section",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "code"
            }
          ],
          "rules" : "open"
        },
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:orderReferral",
        "path" : "Composition.section",
        "sliceName" : "orderReferral",
        "short" : "Contains the data that supports the order by ServiceRequest.",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:orderReferral.title",
        "path" : "Composition.section.title",
        "short" : "Laboratory Order by Service Request",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:orderReferral.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "721963009",
              "display" : "Order (record artifact)"
            }
          ]
        },
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:orderReferral.text",
        "path" : "Composition.section.text",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:orderReferral.entry",
        "path" : "Composition.section.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resolve()"
            }
          ],
          "rules" : "open"
        },
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:orderReferral.entry:ServiceRequest",
        "path" : "Composition.section.entry",
        "sliceName" : "ServiceRequest",
        "short" : "ServiceRequest",
        "min" : 1,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-SR"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:orderReferral.entry:ServiceRequest.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:orderReferral.entry:DocumentReference",
        "path" : "Composition.section.entry",
        "sliceName" : "DocumentReference",
        "short" : "DocumentReference",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-lab-order/StructureDefinition/ch-lab-order-document-reference"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:orderReferral.entry:DocumentReference.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:orderReferral.section",
        "path" : "Composition.section.section",
        "max" : "0"
      }
    ]
  }
}

```
