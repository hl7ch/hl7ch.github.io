# CH EMED Medication Dispense Composition - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED Medication Dispense Composition**

## Resource Profile: CH EMED Medication Dispense Composition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationdispense | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDCompositionMedicationDispense |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the composition for the medication dispense document 

**Usages:**

* Use this Profile: [CH EMED Medication Dispense Document](StructureDefinition-ch-emed-document-medicationdispense.md)
* Examples for this Profile: [Composition/1-2-Composition](Composition-1-2-Composition.md), [Composition/2-4-Composition](Composition-2-4-Composition.md), [Composition/3-1-Composition](Composition-3-1-Composition.md) and [Composition/3-2-Composition](Composition-3-2-Composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-composition-medicationdispense)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-composition-medicationdispense.csv), [Excel](StructureDefinition-ch-emed-composition-medicationdispense.xlsx), [Schematron](StructureDefinition-ch-emed-composition-medicationdispense.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-composition-medicationdispense",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationdispense",
  "version" : "6.0.0",
  "name" : "CHEMEDCompositionMedicationDispense",
  "title" : "CH EMED Medication Dispense Composition",
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
  "description" : "Definition of the composition for the medication dispense document",
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
        "short" : "CH EMED Medication Dispense Composition"
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
        "short" : "Medication dispense document (record artifact)",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "version" : "http://snomed.info/sct/2011000195101",
              "code" : "82291000195104"
            }
          ]
        },
        "constraint" : [
          {
            "key" : "ch-emed-comp-dis",
            "severity" : "error",
            "human" : "If a LOINC code is additionally provided, '60593-1' SHALL be used for this document type.",
            "expression" : "coding.exists(system = 'http://loinc.org') and (coding.exists(system = 'http://loinc.org' and code = '60593-1'))",
            "source" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationdispense"
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
        "short" : "'Abgabe' in german or 'Remise' in french or 'Dispensazione' in italian or 'Dispense' in english\r\n                        or titles in other languages are also allowed"
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
        "id" : "Composition.section:dispense",
        "path" : "Composition.section",
        "sliceName" : "dispense",
        "short" : "Medication dispense",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Composition.section:dispense.title",
        "path" : "Composition.section.title",
        "short" : "'Abgabe eines Medikaments' in german or 'Dispensation d'un médicament' in french or 'Dispensazione di un medicamento' in italian or 'Medication dispensed' in english\r\n                        or titles in other languages are also allowed",
        "min" : 1
      },
      {
        "id" : "Composition.section:dispense.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "60590-7"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:dispense.text",
        "path" : "Composition.section.text",
        "short" : "Human readable text of this section",
        "min" : 1
      },
      {
        "id" : "Composition.section:dispense.entry",
        "path" : "Composition.section.entry",
        "short" : "Medication dispense or administration",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationdispense",
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationadministration"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:dispense.entry.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:dispense.section",
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
