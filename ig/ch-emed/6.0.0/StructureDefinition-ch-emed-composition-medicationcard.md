# CH EMED Medication Card Composition - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED Medication Card Composition**

## Resource Profile: CH EMED Medication Card Composition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationcard | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDCompositionMedicationCard |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the composition for the medication card document 

**Usages:**

* Use this Profile: [CH EMED Medication Card Document](StructureDefinition-ch-emed-document-medicationcard.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-composition-medicationcard)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-composition-medicationcard.csv), [Excel](StructureDefinition-ch-emed-composition-medicationcard.xlsx), [Schematron](StructureDefinition-ch-emed-composition-medicationcard.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-composition-medicationcard",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationcard",
  "version" : "6.0.0",
  "name" : "CHEMEDCompositionMedicationCard",
  "title" : "CH EMED Medication Card Composition",
  "status" : "active",
  "date" : "2025-12-16T11:07:13+00:00",
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
  "description" : "Definition of the composition for the medication card document",
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
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-composition-epr",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Composition",
        "path" : "Composition",
        "short" : "CH EMED Medication Card Composition"
      },
      {
        "id" : "Composition.language",
        "path" : "Composition.language",
        "short" : "Language of the document"
      },
      {
        "id" : "Composition.identifier",
        "path" : "Composition.identifier",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-uuid-identifier"
            ]
          }
        ]
      },
      {
        "id" : "Composition.status",
        "path" : "Composition.status",
        "fixedCode" : "final"
      },
      {
        "id" : "Composition.type",
        "path" : "Composition.type",
        "short" : "Medication management plan (record artifact)",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "736378000"
            }
          ]
        },
        "constraint" : [
          {
            "key" : "ch-emed-comp-card",
            "severity" : "error",
            "human" : "If a LOINC code is additionally provided, '56445-0' SHALL be used for this document type.",
            "expression" : "coding.exists(system = 'http://loinc.org') implies (coding.exists(system = 'http://loinc.org' and code = '56445-0'))",
            "source" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationcard"
          }
        ]
      },
      {
        "id" : "Composition.subject",
        "path" : "Composition.subject",
        "short" : "A patient for whom this document instance was created",
        "mustSupport" : true
      },
      {
        "id" : "Composition.date",
        "path" : "Composition.date",
        "short" : "The document's creation date and time",
        "mustSupport" : true
      },
      {
        "id" : "Composition.author",
        "path" : "Composition.author",
        "short" : "The author of the document (person or device)",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-practitionerrole",
              "http://hl7.org/fhir/StructureDefinition/Device",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-epr",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.title",
        "path" : "Composition.title",
        "short" : "'Medikationsplan' in german or 'Plan de médication' in french or 'Piano farmacologico' in italian or 'Medication Card' in english\r\n                        or titles in other languages are also allowed"
      },
      {
        "id" : "Composition.confidentiality.extension:confidentialityCode",
        "path" : "Composition.confidentiality.extension",
        "sliceName" : "confidentialityCode",
        "short" : "Swiss realm of confidentiality code according to the Swiss EPR regulation"
      },
      {
        "id" : "Composition.section",
        "path" : "Composition.section",
        "min" : 2
      },
      {
        "id" : "Composition.section:originalRepresentation",
        "path" : "Composition.section",
        "sliceName" : "originalRepresentation",
        "short" : "Original representation",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:originalRepresentation.title",
        "path" : "Composition.section.title",
        "short" : "'Original Darstellung' in german or 'Représentation originale' in french or 'Rappresentazione originale' in italian or 'Original representation' in english\r\n                        or titles in other languages are also allowed"
      },
      {
        "id" : "Composition.section:originalRepresentation.entry",
        "path" : "Composition.section.entry",
        "short" : "PDF",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:card",
        "path" : "Composition.section",
        "sliceName" : "card",
        "short" : "Medication card",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:card.title",
        "path" : "Composition.section.title",
        "short" : "'Medikamentenliste' in german or 'Liste de médicaments' in french or 'Lista farmaci' in italian or 'Medication List' in english\r\n                        or titles in other languages are also allowed",
        "min" : 1
      },
      {
        "id" : "Composition.section:card.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "10160-0"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:card.text",
        "path" : "Composition.section.text",
        "short" : "Human readable text of this section"
      },
      {
        "id" : "Composition.section:card.entry",
        "path" : "Composition.section.entry",
        "short" : "Medication statement",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement-card"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:card.entry.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:card.section",
        "path" : "Composition.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:annotation",
        "path" : "Composition.section",
        "sliceName" : "annotation",
        "short" : "Annotation",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:annotation.title",
        "path" : "Composition.section.title",
        "short" : "'Kommentar' in german or 'Commentaire' in french or 'Osservazione' in italian or 'Comment' in english\r\n                        or titles in other languages are also allowed",
        "min" : 1
      },
      {
        "id" : "Composition.section:annotation.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "48767-8"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:annotation.text",
        "path" : "Composition.section.text",
        "short" : "Human readable text of this section",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:annotation.section",
        "path" : "Composition.section.section",
        "max" : "0"
      }
    ]
  }
}

```
