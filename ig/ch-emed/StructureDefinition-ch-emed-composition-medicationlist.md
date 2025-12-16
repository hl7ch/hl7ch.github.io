# CH EMED Medication List Composition - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EMED Medication List Composition**

## Resource Profile: CH EMED Medication List Composition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationlist | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHEMEDCompositionMedicationList |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the composition for the medication list document 

**Usages:**

* Use this Profile: [CH EMED Medication List Document](StructureDefinition-ch-emed-document-medicationlist.md)
* Examples for this Profile: [Composition/2-1-Composition](Composition-2-1-Composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-emed|current/StructureDefinition/ch-emed-composition-medicationlist)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-emed-composition-medicationlist.csv), [Excel](StructureDefinition-ch-emed-composition-medicationlist.xlsx), [Schematron](StructureDefinition-ch-emed-composition-medicationlist.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-emed-composition-medicationlist",
  "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationlist",
  "version" : "6.0.0",
  "name" : "CHEMEDCompositionMedicationList",
  "title" : "CH EMED Medication List Composition",
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
  "description" : "Definition of the composition for the medication list document",
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
        "short" : "CH EMED Medication List Composition"
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
        "short" : "Medication summary document (record artifact)",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "721912009"
            }
          ]
        },
        "constraint" : [
          {
            "key" : "ch-emed-comp-list",
            "severity" : "error",
            "human" : "If a LOINC code is additionally provided, '56445-0' SHALL be used for this document type.",
            "expression" : "coding.exists(system = 'http://loinc.org') implies (coding.exists(system = 'http://loinc.org' and code = '56445-0'))",
            "source" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-composition-medicationlist"
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
        "short" : "The author of the document (device, which dynamically generates the document)",
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
        "short" : "'Medikationsliste' in german or 'Liste de médication' in french or 'Elenco delle terapie farmacologiche' in italian or Medication List' in english\r\n                        or titles in other languages are also allowed"
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
        "short" : "Medication list",
        "min" : 1
      },
      {
        "id" : "Composition.section:list",
        "path" : "Composition.section",
        "sliceName" : "list",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Composition.section:list.title",
        "path" : "Composition.section.title",
        "short" : "'Medikamentenliste' in german or 'Liste de médicaments' in french or 'Lista farmaci' in italian or 'Medication List' in english\r\n                        or titles in other languages are also allowed",
        "min" : 1
      },
      {
        "id" : "Composition.section:list.code",
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
        "id" : "Composition.section:list.text",
        "path" : "Composition.section.text",
        "short" : "Human readable text of this section",
        "min" : 1
      },
      {
        "id" : "Composition.section:list.entry",
        "path" : "Composition.section.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "$this.resolve()"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Composition.section:list.entry:medicationStatement",
        "path" : "Composition.section.entry",
        "sliceName" : "medicationStatement",
        "short" : "MedicationStatement (from MTP or PADV)",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement-list",
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationstatement-changed-list"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:list.entry:medicationStatement.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:list.entry:medicationRequest",
        "path" : "Composition.section.entry",
        "sliceName" : "medicationRequest",
        "short" : "MedicationRequest (from PRE or PADV)",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationrequest-list",
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationrequest-changed-list"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:list.entry:medicationRequest.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:list.entry:medicationDispense",
        "path" : "Composition.section.entry",
        "sliceName" : "medicationDispense",
        "short" : "MedicationDispense or MedicationAdministration (from DIS)",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationdispense-list",
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-medicationadministration-list"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:list.entry:medicationDispense.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:list.entry:observation",
        "path" : "Composition.section.entry",
        "sliceName" : "observation",
        "short" : "Observation (from PADV)",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-observation-list"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:list.entry:observation.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:list.section",
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
