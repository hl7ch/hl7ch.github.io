# CH Core Composition EPR - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH Core Composition EPR**

## Resource Profile: CH Core Composition EPR 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-composition-epr | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHCoreCompositionEPR |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the Composition resource for use in the context of the electronic patient record (EPR). 

**Usages:**

* Use this Profile: [CH Core Document EPR](StructureDefinition-ch-core-document-epr.md)
* Refer to this Profile: [CH Core Composition EPR](StructureDefinition-ch-core-composition-epr.md)
* Examples for this Profile: [Composition/ZuweisungZurRadiologischenDiagnostik](Composition-ZuweisungZurRadiologischenDiagnostik.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-core|current/StructureDefinition/ch-core-composition-epr)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-core-composition-epr.csv), [Excel](StructureDefinition-ch-core-composition-epr.xlsx), [Schematron](StructureDefinition-ch-core-composition-epr.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-core-composition-epr",
  "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-composition-epr",
  "version" : "6.0.0",
  "name" : "CHCoreCompositionEPR",
  "title" : "CH Core Composition EPR",
  "status" : "active",
  "date" : "2025-12-16T07:58:48+00:00",
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
  "description" : "Definition of the Composition resource for use in the context of the electronic patient record (EPR).",
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
        "short" : "CH Core Composition EPR"
      },
      {
        "id" : "Composition.language",
        "path" : "Composition.language",
        "min" : 1
      },
      {
        "id" : "Composition.extension",
        "path" : "Composition.extension",
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
        "id" : "Composition.extension:dataEnterer",
        "path" : "Composition.extension",
        "sliceName" : "dataEnterer",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-dataenterer"
            ]
          }
        ]
      },
      {
        "id" : "Composition.identifier",
        "path" : "Composition.identifier",
        "min" : 1
      },
      {
        "id" : "Composition.identifier.system",
        "path" : "Composition.identifier.system",
        "min" : 1,
        "fixedUri" : "urn:ietf:rfc:3986"
      },
      {
        "id" : "Composition.identifier.value",
        "path" : "Composition.identifier.value",
        "min" : 1
      },
      {
        "id" : "Composition.type",
        "path" : "Composition.type",
        "short" : "Kind of composition",
        "binding" : {
          "strength" : "extensible",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.typeCode"
        }
      },
      {
        "id" : "Composition.subject",
        "path" : "Composition.subject",
        "min" : 1,
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-epr"
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
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner-epr",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole-epr",
              "http://hl7.org/fhir/StructureDefinition/Device",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-epr",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization-epr"
            ]
          }
        ]
      },
      {
        "id" : "Composition.author.extension:time",
        "path" : "Composition.author.extension",
        "sliceName" : "time",
        "short" : "Timestamp of the authorship/data input",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-time"
            ]
          }
        ]
      },
      {
        "id" : "Composition.confidentiality",
        "path" : "Composition.confidentiality",
        "min" : 1
      },
      {
        "id" : "Composition.confidentiality.extension",
        "path" : "Composition.confidentiality.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Composition.confidentiality.extension:confidentialityCode",
        "path" : "Composition.confidentiality.extension",
        "sliceName" : "confidentialityCode",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-confidentialitycode"
            ]
          }
        ]
      },
      {
        "id" : "Composition.attester.party",
        "path" : "Composition.attester.party",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-epr",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner-epr",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole-epr",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization-epr"
            ]
          }
        ]
      },
      {
        "id" : "Composition.custodian",
        "path" : "Composition.custodian",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization-epr"
            ]
          }
        ]
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
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-composition-epr"
            ]
          }
        ]
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
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Composition.section.author",
        "path" : "Composition.section.author",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner-epr",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole-epr",
              "http://hl7.org/fhir/StructureDefinition/Device",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-epr",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization-epr"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:originalRepresentation",
        "path" : "Composition.section",
        "sliceName" : "originalRepresentation",
        "short" : "Contains the original representation as a PDF of the current document.",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Composition.section:originalRepresentation.title",
        "path" : "Composition.section.title",
        "short" : "Original representation",
        "min" : 1
      },
      {
        "id" : "Composition.section:originalRepresentation.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "55108-5"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:originalRepresentation.text",
        "path" : "Composition.section.text",
        "short" : "Representation of the original view",
        "min" : 1
      },
      {
        "id" : "Composition.section:originalRepresentation.entry",
        "path" : "Composition.section.entry",
        "short" : "According to the EPR ordonnance the PDF has to be in PDF/A-1 or PDF/A-2 format.",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Binary"]
          }
        ]
      },
      {
        "id" : "Composition.section:originalRepresentation.section",
        "path" : "Composition.section.section",
        "max" : "0"
      }
    ]
  }
}

```
