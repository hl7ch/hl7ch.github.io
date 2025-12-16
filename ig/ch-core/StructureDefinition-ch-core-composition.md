# CH Core Composition - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core Composition**

## Resource Profile: CH Core Composition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-composition | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreComposition |
| **Copyright/Legal**: CC0-1.0 | |

 
Base definition of the Composition resource for use in Swiss specific use cases. 

**Usages:**

* Derived from this Profile: [CH Core Composition EPR](StructureDefinition-ch-core-composition-epr.md)
* Use this Profile: [CH Core Document](StructureDefinition-ch-core-document.md)
* Refer to this Profile: [CH Core Composition](StructureDefinition-ch-core-composition.md)
* Examples for this Profile: [Composition/ZuweisungZurRadiologischenDiagnostik](Composition-ZuweisungZurRadiologischenDiagnostik.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-composition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-composition.csv), [Excel](StructureDefinition-ch-core-composition.xlsx), [Schematron](StructureDefinition-ch-core-composition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-composition",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-composition",
  "version" : "6.0.0",
  "name" : "CHCoreComposition",
  "title" : "CH Core Composition",
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
  "description" : "Base definition of the Composition resource for use in Swiss specific use cases.",
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
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Composition",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Composition",
        "path" : "Composition",
        "short" : "CH Core Composition"
      },
      {
        "id" : "Composition.subject",
        "path" : "Composition.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
            ]
          }
        ]
      },
      {
        "id" : "Composition.subject.reference",
        "path" : "Composition.subject.reference",
        "min" : 1
      },
      {
        "id" : "Composition.encounter",
        "path" : "Composition.encounter",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-encounter"
            ]
          }
        ]
      },
      {
        "id" : "Composition.author",
        "path" : "Composition.author",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
              "http://hl7.org/fhir/StructureDefinition/Device",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ]
          }
        ]
      },
      {
        "id" : "Composition.author.reference",
        "path" : "Composition.author.reference",
        "min" : 1
      },
      {
        "id" : "Composition.attester.party",
        "path" : "Composition.attester.party",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
            ]
          }
        ]
      },
      {
        "id" : "Composition.attester.party.reference",
        "path" : "Composition.attester.party.reference",
        "min" : 1
      },
      {
        "id" : "Composition.custodian",
        "path" : "Composition.custodian",
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
        "id" : "Composition.custodian.reference",
        "path" : "Composition.custodian.reference",
        "min" : 1
      },
      {
        "id" : "Composition.relatesTo.target[x]",
        "path" : "Composition.relatesTo.target[x]",
        "type" : [
          {
            "code" : "Identifier"
          },
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-composition"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section.author",
        "path" : "Composition.section.author",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole",
              "http://hl7.org/fhir/StructureDefinition/Device",
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
