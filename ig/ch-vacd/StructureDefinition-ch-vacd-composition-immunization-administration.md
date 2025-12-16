# CH VACD Immunization Administration Composition - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH VACD Immunization Administration Composition**

## Resource Profile: CH VACD Immunization Administration Composition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration | *Version*:6.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CHVACDCompositionImmunizationAdministration |
| **Copyright/Legal**: CC0-1.0 | |

 
Definition of the composition for the immunization administration document. 

### Scope and Usage

This composition is defined to use in an immunization administration context. This means to document and/or exchange one or more vaccination given/applied to a referenced patient.

This profile is inherited from the ch-core profile [CH Core Composition EPR](https://build.fhir.org/ig/hl7ch/ch-core/StructureDefinition-ch-core-composition-epr.html). This restriction is done to have the required restrictions to use a corresponding document in the Swiss EPR within its restrictions. The same document can always be used in an other context than the Swiss EPR.

**Usages:**

* Use this Profile: [CH VACD Immunization Administration Document](StructureDefinition-ch-vacd-document-immunization-administration.md)
* Examples for this Profile: [Composition/2-1-ImmunizationAdministrationComposition](Composition-2-1-ImmunizationAdministrationComposition.md), [Composition/A-D1-P-C1-Composition](Composition-A-D1-P-C1-Composition.md), [Composition/A-D2-HCP1-C1-Composition](Composition-A-D2-HCP1-C1-Composition.md), [Composition/A-D3-HCP2-C2-Composition](Composition-A-D3-HCP2-C2-Composition.md)...Show 31 more,[Composition/A-D4-HCP2-C2-Composition](Composition-A-D4-HCP2-C2-Composition.md),[Composition/A-D5-P-C1-Composition](Composition-A-D5-P-C1-Composition.md),[Composition/A-D6-HCP1-C1-Composition](Composition-A-D6-HCP1-C1-Composition.md),[Composition/B-D1-HCP1-C1-Composition](Composition-B-D1-HCP1-C1-Composition.md),[Composition/B-D2-HCP1-C1-Composition](Composition-B-D2-HCP1-C1-Composition.md),[Composition/B-D3-HCP1-C1-Composition](Composition-B-D3-HCP1-C1-Composition.md),[Composition/B-D4-HCP1-C1-Composition](Composition-B-D4-HCP1-C1-Composition.md),[Composition/B-D5-HCP1-C1-Composition](Composition-B-D5-HCP1-C1-Composition.md),[Composition/B-D6-HCP1-C1-Composition](Composition-B-D6-HCP1-C1-Composition.md),[Composition/C-D1-P-C1-Composition](Composition-C-D1-P-C1-Composition.md),[Composition/C-D2-HCP1-C1-Composition](Composition-C-D2-HCP1-C1-Composition.md),[Composition/C-D3-HCP1-C1-Composition](Composition-C-D3-HCP1-C1-Composition.md),[Composition/C-D4-HCP2-C2-Composition](Composition-C-D4-HCP2-C2-Composition.md),[Composition/C-D5-HCP1-C1-Composition](Composition-C-D5-HCP1-C1-Composition.md),[Composition/C-D6-P-C1-Composition](Composition-C-D6-P-C1-Composition.md),[Composition/C-D7-HCP1-C1-Composition](Composition-C-D7-HCP1-C1-Composition.md),[Composition/D-D1-HCP1-C1-Composition](Composition-D-D1-HCP1-C1-Composition.md),[Composition/D-D2-HCP2-C2-Composition](Composition-D-D2-HCP2-C2-Composition.md),[Composition/D-D3-HCP1-C1-Composition](Composition-D-D3-HCP1-C1-Composition.md),[Composition/D-D4-HCP2-C2-Composition](Composition-D-D4-HCP2-C2-Composition.md),[Composition/D-D5-HCP1-C1-Composition](Composition-D-D5-HCP1-C1-Composition.md),[Composition/D-D6-HCP2-C2-Composition](Composition-D-D6-HCP2-C2-Composition.md),[Composition/D-D7-HCP3-C1-Composition](Composition-D-D7-HCP3-C1-Composition.md),[Composition/E-D1-HCP1-C1-Composition](Composition-E-D1-HCP1-C1-Composition.md),[Composition/E-D2-HCP1-C1-Composition](Composition-E-D2-HCP1-C1-Composition.md),[Composition/F-D1-HCP1-C1-Composition](Composition-F-D1-HCP1-C1-Composition.md),[Composition/F-D2-HCP1-C1-Composition](Composition-F-D2-HCP1-C1-Composition.md),[Composition/F-D3-HCP1-C1-Composition](Composition-F-D3-HCP1-C1-Composition.md),[Composition/F-D4-HCP1-C1-Composition](Composition-F-D4-HCP1-C1-Composition.md),[Composition/F-D5-HCP1-C1-Composition](Composition-F-D5-HCP1-C1-Composition.md)and[Composition/F-D6-HCP1-C1-Composition](Composition-F-D6-HCP1-C1-Composition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-vacd|current/StructureDefinition/ch-vacd-composition-immunization-administration)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-vacd-composition-immunization-administration.csv), [Excel](StructureDefinition-ch-vacd-composition-immunization-administration.xlsx), [Schematron](StructureDefinition-ch-vacd-composition-immunization-administration.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-vacd-composition-immunization-administration",
  "url" : "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-composition-immunization-administration",
  "version" : "6.0.0",
  "name" : "CHVACDCompositionImmunizationAdministration",
  "title" : "CH VACD Immunization Administration Composition",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-16T10:03:10+00:00",
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
  "description" : "Definition of the composition for the  immunization administration document.",
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
        "short" : "CH VACD Immunization Administration Composition"
      },
      {
        "id" : "Composition.language",
        "path" : "Composition.language",
        "short" : "Language of the document"
      },
      {
        "id" : "Composition.extension:dataEnterer",
        "path" : "Composition.extension",
        "sliceName" : "dataEnterer",
        "short" : "Person who entered information into this document if it is a person other than the author"
      },
      {
        "id" : "Composition.identifier",
        "path" : "Composition.identifier",
        "short" : "Unique identification number",
        "example" : [
          {
            "label" : "CH VACD",
            "valueString" : "urn:uuid:0c918c47-561e-4689-bc1b-ba2775d6f04c"
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
        "short" : "Document type Immunization record",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "41000179103"
            }
          ]
        }
      },
      {
        "id" : "Composition.category",
        "path" : "Composition.category",
        "short" : "Category or format Immunization Administration",
        "min" : 1,
        "max" : "1",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "urn:oid:2.16.756.5.30.1.127.3.10.10",
              "code" : "urn:che:epr:ch-vacd:immunization-administration:2022"
            }
          ]
        },
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.formatCode"
        }
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
        "short" : "The author of the document (person or device)"
      },
      {
        "id" : "Composition.title",
        "path" : "Composition.title",
        "short" : "'Verabreichte Impfung' in german or 'Vaccin administré' in french or 'Vaccinazione somministrata' in italian or 'Immunization Administration' in english\n                        or titles in other languages are also allowed"
      },
      {
        "id" : "Composition.confidentiality.extension:confidentialityCode",
        "path" : "Composition.confidentiality.extension",
        "sliceName" : "confidentialityCode",
        "short" : "Swiss realm of confidentiality code according to the Swiss EPR regulation"
      },
      {
        "id" : "Composition.custodian",
        "path" : "Composition.custodian",
        "short" : "The organization in whose name the document has been created"
      },
      {
        "id" : "Composition.relatesTo",
        "path" : "Composition.relatesTo",
        "short" : "Relationships to other compositions in order to replace other documents or fix/correct elements of an other document.",
        "definition" : "Relationships to other compositions in order to replace other documents or fix/correct elements of an other document.",
        "comment" : "See also the [extension Entry Cross Reference](http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-ext-entry-resource-cross-references) for more details."
      },
      {
        "id" : "Composition.section",
        "path" : "Composition.section",
        "min" : 1
      },
      {
        "id" : "Composition.section:administration",
        "path" : "Composition.section",
        "sliceName" : "administration",
        "short" : "Immunization Administration",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:administration.extension",
        "path" : "Composition.section.extension",
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
        "id" : "Composition.section:administration.title",
        "path" : "Composition.section.title",
        "short" : "'Liste der verabreichten Impfungen' in german or 'Liste Vaccin administré' in french or 'Lista Vaccinazione somministrata' in italian or 'List Immunization Administration' in english\n                        or titles in other languages are also allowed",
        "min" : 1
      },
      {
        "id" : "Composition.section:administration.code",
        "path" : "Composition.section.code",
        "short" : "Hx of Immunization",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "11369-6"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:administration.author",
        "path" : "Composition.section.author",
        "short" : "The author of the section (person or device) if different from the author/timestamp of the document",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole-epr",
              "http://hl7.org/fhir/StructureDefinition/Device",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-epr",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:administration.author.extension",
        "path" : "Composition.section.author.extension",
        "short" : "Timestamp of the authorship/data input",
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
        "id" : "Composition.section:administration.author.reference",
        "path" : "Composition.section.author.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:administration.text",
        "path" : "Composition.section.text",
        "short" : "Human readable text of this section"
      },
      {
        "id" : "Composition.section:administration.entry",
        "path" : "Composition.section.entry",
        "short" : "Immunization",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-immunization",
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-basic-immunization"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:administration.entry.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:administration.section",
        "path" : "Composition.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:medicalproblems",
        "path" : "Composition.section",
        "sliceName" : "medicalproblems",
        "short" : "Medical Problems",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:medicalproblems.extension",
        "path" : "Composition.section.extension",
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
        "id" : "Composition.section:medicalproblems.title",
        "path" : "Composition.section.title",
        "short" : "'Liste der Medizinischen Probleme' in german or 'Liste Vaccin administré' in french or 'Lista Vaccinazione somministrata' in italian or 'List Immunization Administration' in english\n                        or titles in other languages are also allowed",
        "min" : 1
      },
      {
        "id" : "Composition.section:medicalproblems.code",
        "path" : "Composition.section.code",
        "short" : "Problem list Reported",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "11450-4"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:medicalproblems.author",
        "path" : "Composition.section.author",
        "short" : "The author of the section (person or device) if different from the author/timestamp of the document",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole-epr",
              "http://hl7.org/fhir/StructureDefinition/Device",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-epr",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:medicalproblems.author.extension",
        "path" : "Composition.section.author.extension",
        "short" : "Timestamp of the authorship/data input",
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
        "id" : "Composition.section:medicalproblems.author.reference",
        "path" : "Composition.section.author.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:medicalproblems.text",
        "path" : "Composition.section.text",
        "short" : "Human readable text of this section"
      },
      {
        "id" : "Composition.section:medicalproblems.entry",
        "path" : "Composition.section.entry",
        "short" : "MedicalProblems",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-medical-problems"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:medicalproblems.entry.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:medicalproblems.section",
        "path" : "Composition.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:pastillnesses",
        "path" : "Composition.section",
        "sliceName" : "pastillnesses",
        "short" : "Past Illnesses",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:pastillnesses.extension",
        "path" : "Composition.section.extension",
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
        "id" : "Composition.section:pastillnesses.title",
        "path" : "Composition.section.title",
        "short" : "'Bisherige Krankheiten' in german or 'Maladies antérieures' in french or 'Malattie precedenti' in italian or 'Previous illnesses' in english\n                        or titles in other languages are also allowed",
        "min" : 1
      },
      {
        "id" : "Composition.section:pastillnesses.code",
        "path" : "Composition.section.code",
        "short" : "Hx of Past illness",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "11348-0"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:pastillnesses.author",
        "path" : "Composition.section.author",
        "short" : "The author of the section (person or device) if different from the author/timestamp of the document",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole-epr",
              "http://hl7.org/fhir/StructureDefinition/Device",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-epr",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:pastillnesses.author.extension",
        "path" : "Composition.section.author.extension",
        "short" : "Timestamp of the authorship/data input",
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
        "id" : "Composition.section:pastillnesses.author.reference",
        "path" : "Composition.section.author.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:pastillnesses.text",
        "path" : "Composition.section.text",
        "short" : "Human readable text of this section"
      },
      {
        "id" : "Composition.section:pastillnesses.entry",
        "path" : "Composition.section.entry",
        "short" : "PastIllnesses",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-pastillnesses"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:pastillnesses.entry.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:pastillnesses.section",
        "path" : "Composition.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:allergyintolerances",
        "path" : "Composition.section",
        "sliceName" : "allergyintolerances",
        "short" : "Allergies and Intolerances",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:allergyintolerances.extension",
        "path" : "Composition.section.extension",
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
        "id" : "Composition.section:allergyintolerances.title",
        "path" : "Composition.section.title",
        "short" : "'Allergien' in german or 'Les allergies' in french or 'Allergie' in italian or 'Allergies' in english\n                        or titles in other languages are also allowed",
        "min" : 1
      },
      {
        "id" : "Composition.section:allergyintolerances.code",
        "path" : "Composition.section.code",
        "short" : "Allergies and adverse reactions Document",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "48765-2"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:allergyintolerances.author",
        "path" : "Composition.section.author",
        "short" : "The author of the section (person or device) if different from the author/timestamp of the document",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole-epr",
              "http://hl7.org/fhir/StructureDefinition/Device",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-epr",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:allergyintolerances.author.extension",
        "path" : "Composition.section.author.extension",
        "short" : "Timestamp of the authorship/data input",
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
        "id" : "Composition.section:allergyintolerances.author.reference",
        "path" : "Composition.section.author.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:allergyintolerances.text",
        "path" : "Composition.section.text",
        "short" : "Human readable text of this section"
      },
      {
        "id" : "Composition.section:allergyintolerances.entry",
        "path" : "Composition.section.entry",
        "short" : "Allergies",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-allergyintolerances"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:allergyintolerances.entry.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:allergyintolerances.section",
        "path" : "Composition.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:laboratory-serology",
        "path" : "Composition.section",
        "sliceName" : "laboratory-serology",
        "short" : "Laboratory-Serology",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:laboratory-serology.title",
        "path" : "Composition.section.title",
        "short" : "'Laborbefund - Serologie' in german or 'Résultats de laboratoire - Sérologie' in french or 'Risultati di laboratorio - Sierologia' in italian or 'Laboratory findings - Serology' in english\n                        or titles in other languages are also allowed",
        "min" : 1
      },
      {
        "id" : "Composition.section:laboratory-serology.code",
        "path" : "Composition.section.code",
        "short" : "Serology studies (set)",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "18727-8"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:laboratory-serology.author",
        "path" : "Composition.section.author",
        "short" : "The author of the section (person or device) if different from the author/timestamp of the document",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole-epr",
              "http://hl7.org/fhir/StructureDefinition/Device",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-epr",
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-relatedperson"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:laboratory-serology.author.extension",
        "path" : "Composition.section.author.extension",
        "short" : "Timestamp of the authorship/data input",
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
        "id" : "Composition.section:laboratory-serology.author.reference",
        "path" : "Composition.section.author.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:laboratory-serology.text",
        "path" : "Composition.section.text",
        "short" : "Human readable text of this section"
      },
      {
        "id" : "Composition.section:laboratory-serology.entry",
        "path" : "Composition.section.entry",
        "short" : "LaboratorySerology",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-vacd/StructureDefinition/ch-vacd-laboratory-serology"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:laboratory-serology.entry.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:laboratory-serology.section",
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
        "short" : "'Kommentar' in german or 'Commentaire' in french or 'Osservazione' in italian or 'Comment' in english\n                        or titles in other languages are also allowed",
        "min" : 1
      },
      {
        "id" : "Composition.section:annotation.code",
        "path" : "Composition.section.code",
        "short" : "Annotation comment Imp",
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
        "id" : "Composition.section:annotation.entry",
        "path" : "Composition.section.entry",
        "max" : "0"
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
