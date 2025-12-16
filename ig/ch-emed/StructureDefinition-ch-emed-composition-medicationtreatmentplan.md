# CH EMED Medication Treatment Plan Composition - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED Medication Treatment Plan Composition**

## Resource Profile: CH EMED Medication Treatment Plan Composition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationtreatmentplan | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDCompositionMedicationTreatmentPlan |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the composition for the medication treatment plan document 

**Usages:**

* Use this Profile: [CH EMED Medication Treatment Plan Document](StructureDefinition-ch-emed-document-medicationtreatmentplan.md)
* Examples for this Profile: [Composition/1-1-Composition](Composition-1-1-Composition.md), [Composition/2-3-Composition](Composition-2-3-Composition.md) and [Composition/2-5-Composition](Composition-2-5-Composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-composition-medicationtreatmentplan)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-composition-medicationtreatmentplan.csv), [Excel](StructureDefinition-ch-emed-composition-medicationtreatmentplan.xlsx), [Schematron](StructureDefinition-ch-emed-composition-medicationtreatmentplan.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-composition-medicationtreatmentplan",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationtreatmentplan",
  "version" : "6.0.0",
  "name" : "CHEMEDCompositionMedicationTreatmentPlan",
  "title" : "CH EMED Medication Treatment Plan Composition",
  "status" : "active",
  "date" : "2025-12-16T11:14:15+00:00",
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
  "description" : "Definition of the composition for the medication treatment plan document",
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
        "short" : "CH EMED Medication Treatment Plan Composition"
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
        "short" : "Medication treatment plan report (record artifact)",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "761931002"
            }
          ]
        },
        "constraint" : [
          {
            "key" : "ch-emed-comp-mtp",
            "severity" : "error",
            "human" : "If a LOINC code is additionally provided, '77603-9' SHALL be used for this document type.",
            "expression" : "coding.exists(system = 'http://loinc.org') and (coding.exists(system = 'http://loinc.org' and code = '77603-9'))",
            "source" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationtreatmentplan"
          }
        ]
      },
      {
        "id" : "Composition.subject",
        "path" : "Composition.subject",
        "short" : "A patient for whom this document instance was created"
      },
      {
        "id" : "Composition.date",
        "path" : "Composition.date",
        "short" : "The document's creation date and time"
      },
      {
        "id" : "Composition.author",
        "path" : "Composition.author",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resolve()"
            }
          ],
          "rules" : "closed"
        }
      },
      {
        "id" : "Composition.author:person",
        "path" : "Composition.author",
        "sliceName" : "person",
        "short" : "The author of the document (person)",
        "min" : 1,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-practitionerrole",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-epr",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson"
            ]
          }
        ]
      },
      {
        "id" : "Composition.author:device",
        "path" : "Composition.author",
        "sliceName" : "device",
        "short" : "The device that created the document",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Device"]
          }
        ]
      },
      {
        "id" : "Composition.title",
        "path" : "Composition.title",
        "short" : "'Therapieentscheid Medikation' in german or 'Décision thérapeutique relative à la médication' in french or 'Decisione terapeutica di trattamento farmacologico' in italian or 'Medication Treatment Plan' in english\r\n                        or titles in other languages are also allowed"
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
        "min" : 1
      },
      {
        "id" : "Composition.section:treatmentPlan",
        "path" : "Composition.section",
        "sliceName" : "treatmentPlan",
        "short" : "Medication treatment plan",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Composition.section:treatmentPlan.title",
        "path" : "Composition.section.title",
        "short" : "'Medikamentöser Behandlungsplan' in german or 'Plan de traitement médicamenteux' in french or 'Piano terapeutico farmacologico' in italian or 'Medication Treatment Plan' in english\r\n                        or titles in other languages are also allowed",
        "min" : 1
      },
      {
        "id" : "Composition.section:treatmentPlan.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "77604-7"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:treatmentPlan.text",
        "path" : "Composition.section.text",
        "short" : "Human readable text of this section",
        "min" : 1
      },
      {
        "id" : "Composition.section:treatmentPlan.entry",
        "path" : "Composition.section.entry",
        "short" : "Medication statement",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:treatmentPlan.entry.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:treatmentPlan.section",
        "path" : "Composition.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:annotation",
        "path" : "Composition.section",
        "sliceName" : "annotation",
        "short" : "Annotation",
        "min" : 0,
        "max" : "1"
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
        "min" : 1
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
