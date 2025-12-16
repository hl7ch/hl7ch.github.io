# CH EPREG Composition - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPREG Composition**

## Resource Profile: CH EPREG Composition 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-composition | *Version*:1.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChEpregComposition |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Composition resource to represent the first entry in the CH EPREG Document. 

**Usages:**

* Use this Profile: [CH EPREG Document](StructureDefinition-ch-epreg-document.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epreg|current/StructureDefinition/ch-epreg-composition)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-epreg-composition.csv), [Excel](StructureDefinition-ch-epreg-composition.xlsx), [Schematron](StructureDefinition-ch-epreg-composition.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-epreg-composition",
  "url" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-composition",
  "version" : "1.0.0",
  "name" : "ChEpregComposition",
  "title" : "CH EPREG Composition",
  "status" : "active",
  "date" : "2025-12-16T12:22:20+00:00",
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
  "description" : "This profile constrains the Composition resource to represent the first entry in the CH EPREG Document.",
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
      "identity" : "concept-pregnancy-passport",
      "uri" : "https://www.e-health-suisse.ch/upload/documents/eSchwangerschaftspass_Konzept_de.pdf",
      "name" : "Concept Pregnancy Passport",
      "comment" : "This mapping illustrates the relationship between the CH EPREG profile and the concept of the pregnancy passport."
    },
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
        "short" : "CH EPREG Composition"
      },
      {
        "id" : "Composition.type",
        "path" : "Composition.type",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://snomed.info/sct",
              "code" : "736377005"
            }
          ]
        }
      },
      {
        "id" : "Composition.subject",
        "path" : "Composition.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-patient-mother"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Schwangere Person | Personne enceinte"
          }
        ]
      },
      {
        "id" : "Composition.section:coreData",
        "path" : "Composition.section",
        "sliceName" : "coreData",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Composition.section:coreData.title",
        "path" : "Composition.section.title",
        "min" : 1
      },
      {
        "id" : "Composition.section:coreData.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "86638-4"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:coreData.text",
        "path" : "Composition.section.text",
        "max" : "0"
      },
      {
        "id" : "Composition.section:coreData.entry",
        "path" : "Composition.section.entry",
        "max" : "0"
      },
      {
        "id" : "Composition.section:coreData.section",
        "path" : "Composition.section.section",
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
        "id" : "Composition.section:coreData.section:insurance",
        "path" : "Composition.section.section",
        "sliceName" : "insurance",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "BackboneElement"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:coreData.section:insurance.title",
        "path" : "Composition.section.section.title",
        "min" : 1
      },
      {
        "id" : "Composition.section:coreData.section:insurance.code",
        "path" : "Composition.section.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "35525-5"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:coreData.section:insurance.text",
        "path" : "Composition.section.section.text",
        "short" : "Text summary of all the data of the section, for human interpretation",
        "min" : 1
      },
      {
        "id" : "Composition.section:coreData.section:insurance.entry",
        "path" : "Composition.section.section.entry",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-coverage"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:coreData.section:insurance.entry.reference",
        "path" : "Composition.section.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:coreData.section:insurance.section",
        "path" : "Composition.section.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:coreData.section:parent",
        "path" : "Composition.section.section",
        "sliceName" : "parent",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "BackboneElement"
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Elternteil | Parent"
          }
        ]
      },
      {
        "id" : "Composition.section:coreData.section:parent.title",
        "path" : "Composition.section.section.title",
        "min" : 1
      },
      {
        "id" : "Composition.section:coreData.section:parent.code",
        "path" : "Composition.section.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "54136-7"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:coreData.section:parent.text",
        "path" : "Composition.section.section.text",
        "short" : "Text summary of all the data of the section, for human interpretation",
        "min" : 1
      },
      {
        "id" : "Composition.section:coreData.section:parent.entry",
        "path" : "Composition.section.section.entry",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-relatedperson-parent"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:coreData.section:parent.entry.reference",
        "path" : "Composition.section.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:coreData.section:parent.section",
        "path" : "Composition.section.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:coreData.section:careTeam",
        "path" : "Composition.section.section",
        "sliceName" : "careTeam",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "BackboneElement"
          }
        ],
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Behandelnder Leistungserbringender | Fournisseur de prestations"
          }
        ]
      },
      {
        "id" : "Composition.section:coreData.section:careTeam.title",
        "path" : "Composition.section.section.title",
        "min" : 1
      },
      {
        "id" : "Composition.section:coreData.section:careTeam.code",
        "path" : "Composition.section.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "85847-2"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:coreData.section:careTeam.text",
        "path" : "Composition.section.section.text",
        "short" : "Text summary of all the data of the section, for human interpretation",
        "min" : 1,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Vorhanden | Disponible"
          }
        ]
      },
      {
        "id" : "Composition.section:coreData.section:careTeam.entry",
        "path" : "Composition.section.section.entry",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-practitionerrole-thcp"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:coreData.section:careTeam.entry.reference",
        "path" : "Composition.section.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:coreData.section:careTeam.section",
        "path" : "Composition.section.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:lab-subsections",
        "path" : "Composition.section",
        "sliceName" : "lab-subsections",
        "short" : "Based on the section of the exchange format for Swiss laboratory reports (https://fhir.ch/ig/ch-lab-report/StructureDefinition-ch-lab-report-composition.html)",
        "min" : 0,
        "max" : "1",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Untersuchungen und Tests | Analyses et tests"
          }
        ]
      },
      {
        "id" : "Composition.section:lab-subsections.title",
        "path" : "Composition.section.title",
        "min" : 1
      },
      {
        "id" : "Composition.section:lab-subsections.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "26436-6"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:lab-subsections.text",
        "path" : "Composition.section.text",
        "max" : "0"
      },
      {
        "id" : "Composition.section:lab-subsections.entry",
        "path" : "Composition.section.entry",
        "max" : "0"
      },
      {
        "id" : "Composition.section:lab-subsections.section",
        "path" : "Composition.section.section",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "code"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "type" : [
          {
            "code" : "BackboneElement"
          }
        ]
      },
      {
        "id" : "Composition.section:lab-subsections.section.code",
        "path" : "Composition.section.section.code",
        "min" : 1,
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://hl7.eu/fhir/laboratory/ValueSet/lab-studyType-eu-lab"
        }
      },
      {
        "id" : "Composition.section:lab-subsections.section:bloodBankStudies",
        "path" : "Composition.section.section",
        "sliceName" : "bloodBankStudies",
        "min" : 0,
        "max" : "1",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Laboruntersuchung | Analyse de laboratoire"
          }
        ]
      },
      {
        "id" : "Composition.section:lab-subsections.section:bloodBankStudies.title",
        "path" : "Composition.section.section.title",
        "min" : 1
      },
      {
        "id" : "Composition.section:lab-subsections.section:bloodBankStudies.code",
        "path" : "Composition.section.section.code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "18717-9"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:lab-subsections.section:bloodBankStudies.text",
        "path" : "Composition.section.section.text",
        "short" : "Text summary of all the data of the section, for human interpretation",
        "min" : 1
      },
      {
        "id" : "Composition.section:lab-subsections.section:bloodBankStudies.entry",
        "path" : "Composition.section.section.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resolve()"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-results-lab"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:lab-subsections.section:bloodBankStudies.entry:bloodGroup",
        "path" : "Composition.section.section.entry",
        "sliceName" : "bloodGroup",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-blood-group"
            ]
          }
        ],
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Blutgruppenzugehörigkeit | Détermination du groupe sanguin"
          }
        ]
      },
      {
        "id" : "Composition.section:lab-subsections.section:bloodBankStudies.entry:bloodGroup.reference",
        "path" : "Composition.section.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:lab-subsections.section:bloodBankStudies.entry:fetalRhD",
        "path" : "Composition.section.section.entry",
        "sliceName" : "fetalRhD",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-fetal-rhd"
            ]
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Composition.section:lab-subsections.section:bloodBankStudies.entry:fetalRhD.reference",
        "path" : "Composition.section.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:lab-subsections.section:bloodBankStudies.section",
        "path" : "Composition.section.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:lab-subsections.section:chemistryStudies",
        "path" : "Composition.section.section",
        "sliceName" : "chemistryStudies",
        "min" : 0,
        "max" : "1",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Laboruntersuchung | Analyse de laboratoire"
          }
        ]
      },
      {
        "id" : "Composition.section:lab-subsections.section:chemistryStudies.title",
        "path" : "Composition.section.section.title",
        "min" : 1
      },
      {
        "id" : "Composition.section:lab-subsections.section:chemistryStudies.code",
        "path" : "Composition.section.section.code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "18719-5"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:lab-subsections.section:chemistryStudies.text",
        "path" : "Composition.section.section.text",
        "short" : "Text summary of all the data of the section, for human interpretation",
        "min" : 1
      },
      {
        "id" : "Composition.section:lab-subsections.section:chemistryStudies.entry",
        "path" : "Composition.section.section.entry",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-results-lab"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:lab-subsections.section:chemistryStudies.entry.reference",
        "path" : "Composition.section.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:lab-subsections.section:chemistryStudies.section",
        "path" : "Composition.section.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:lab-subsections.section:hematologyStudies",
        "path" : "Composition.section.section",
        "sliceName" : "hematologyStudies",
        "min" : 0,
        "max" : "1",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Laboruntersuchung | Analyse de laboratoire"
          }
        ]
      },
      {
        "id" : "Composition.section:lab-subsections.section:hematologyStudies.title",
        "path" : "Composition.section.section.title",
        "min" : 1
      },
      {
        "id" : "Composition.section:lab-subsections.section:hematologyStudies.code",
        "path" : "Composition.section.section.code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "18723-7"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:lab-subsections.section:hematologyStudies.text",
        "path" : "Composition.section.section.text",
        "short" : "Text summary of all the data of the section, for human interpretation",
        "min" : 1
      },
      {
        "id" : "Composition.section:lab-subsections.section:hematologyStudies.entry",
        "path" : "Composition.section.section.entry",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-results-lab"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:lab-subsections.section:hematologyStudies.entry.reference",
        "path" : "Composition.section.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:lab-subsections.section:hematologyStudies.section",
        "path" : "Composition.section.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:lab-subsections.section:microbiologyStudies",
        "path" : "Composition.section.section",
        "sliceName" : "microbiologyStudies",
        "min" : 0,
        "max" : "1",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Laboruntersuchung | Analyse de laboratoire"
          }
        ]
      },
      {
        "id" : "Composition.section:lab-subsections.section:microbiologyStudies.title",
        "path" : "Composition.section.section.title",
        "min" : 1
      },
      {
        "id" : "Composition.section:lab-subsections.section:microbiologyStudies.code",
        "path" : "Composition.section.section.code",
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "18725-2"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:lab-subsections.section:microbiologyStudies.text",
        "path" : "Composition.section.section.text",
        "short" : "Text summary of all the data of the section, for human interpretation",
        "min" : 1
      },
      {
        "id" : "Composition.section:lab-subsections.section:microbiologyStudies.entry",
        "path" : "Composition.section.section.entry",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-results-lab"
            ]
          }
        ]
      },
      {
        "id" : "Composition.section:lab-subsections.section:microbiologyStudies.entry.reference",
        "path" : "Composition.section.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:lab-subsections.section:microbiologyStudies.section",
        "path" : "Composition.section.section.section",
        "max" : "0"
      },
      {
        "id" : "Composition.section:pregProgress",
        "path" : "Composition.section",
        "sliceName" : "pregProgress",
        "min" : 0,
        "max" : "1",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Schwangerschaftsverlauf | Évolution de la grossesse"
          }
        ]
      },
      {
        "id" : "Composition.section:pregProgress.title",
        "path" : "Composition.section.title",
        "min" : 1
      },
      {
        "id" : "Composition.section:pregProgress.code",
        "path" : "Composition.section.code",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://loinc.org",
              "code" : "57059-8"
            }
          ]
        }
      },
      {
        "id" : "Composition.section:pregProgress.text",
        "path" : "Composition.section.text",
        "short" : "Text summary of all the data of the section, for human interpretation",
        "min" : 1
      },
      {
        "id" : "Composition.section:pregProgress.entry",
        "path" : "Composition.section.entry",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "profile",
              "path" : "resolve()"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "short" : "Observations representing further examinations and questions can be added as additional entries. See also 'Mapping Laboratory Results'.",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-encounter-mother",
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-encounter-child",
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-appointment-next-examination",
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-preg-progress"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Weitere Untersuchungen und Fragen | Autres examens et questions"
          }
        ]
      },
      {
        "id" : "Composition.section:pregProgress.entry:pregExamination",
        "path" : "Composition.section.entry",
        "sliceName" : "pregExamination",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-encounter-mother",
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-encounter-child"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Untersuchung | Examen"
          }
        ]
      },
      {
        "id" : "Composition.section:pregProgress.entry:pregExamination.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:pregProgress.entry:gestationalAge",
        "path" : "Composition.section.entry",
        "sliceName" : "gestationalAge",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-gestational-age-in-days"
            ]
          }
        ],
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Schwangerschaftswochen | Semaines de grossesse"
          }
        ]
      },
      {
        "id" : "Composition.section:pregProgress.entry:gestationalAge.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:pregProgress.entry:bodyWeight",
        "path" : "Composition.section.entry",
        "sliceName" : "bodyWeight",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-body-weight"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Aktuelles Gewicht | Poids actuel"
          }
        ]
      },
      {
        "id" : "Composition.section:pregProgress.entry:bodyWeight.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:pregProgress.entry:weightGain",
        "path" : "Composition.section.entry",
        "sliceName" : "weightGain",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-weight-gain"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Gewichtszunahme\t| Prise de poids"
          }
        ]
      },
      {
        "id" : "Composition.section:pregProgress.entry:weightGain.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:pregProgress.entry:bloodPressure",
        "path" : "Composition.section.entry",
        "sliceName" : "bloodPressure",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-blood-pressure"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Blutdruck | Pression artérielle"
          }
        ]
      },
      {
        "id" : "Composition.section:pregProgress.entry:bloodPressure.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:pregProgress.entry:urineFinding",
        "path" : "Composition.section.entry",
        "sliceName" : "urineFinding",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-urine-finding"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Urin | Urine"
          }
        ]
      },
      {
        "id" : "Composition.section:pregProgress.entry:urineFinding.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:pregProgress.entry:abdominalCircumference",
        "path" : "Composition.section.entry",
        "sliceName" : "abdominalCircumference",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-abdominal-circumference"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "BU (Bauchumfang) | Circonférence abdominale"
          }
        ]
      },
      {
        "id" : "Composition.section:pregProgress.entry:abdominalCircumference.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:pregProgress.entry:fundusHeight",
        "path" : "Composition.section.entry",
        "sliceName" : "fundusHeight",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-fundus-height"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "SY-FU (Symphysen-Fundus-Abstand) | Hauteur utérine"
          }
        ]
      },
      {
        "id" : "Composition.section:pregProgress.entry:fundusHeight.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:pregProgress.entry:vaginaFeature",
        "path" : "Composition.section.entry",
        "sliceName" : "vaginaFeature",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-vagina-feature"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Vaginalbefund | Examen gynécologique"
          }
        ]
      },
      {
        "id" : "Composition.section:pregProgress.entry:vaginaFeature.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:pregProgress.entry:fetalMovement",
        "path" : "Composition.section.entry",
        "sliceName" : "fetalMovement",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-fetal-movement"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Kindsbewegungen | Mobilité fœtale"
          }
        ]
      },
      {
        "id" : "Composition.section:pregProgress.entry:fetalMovement.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:pregProgress.entry:fetalHeartFeature",
        "path" : "Composition.section.entry",
        "sliceName" : "fetalHeartFeature",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-fetal-heart-feature"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Herztöne | Bruits cardiaques fœtaux"
          }
        ]
      },
      {
        "id" : "Composition.section:pregProgress.entry:fetalHeartFeature.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:pregProgress.entry:fetalPosition",
        "path" : "Composition.section.entry",
        "sliceName" : "fetalPosition",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-fetal-position"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Kindslage | Position fœtale"
          }
        ]
      },
      {
        "id" : "Composition.section:pregProgress.entry:fetalPosition.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:pregProgress.entry:nextExamination",
        "path" : "Composition.section.entry",
        "sliceName" : "nextExamination",
        "short" : "Next examination, which was planned at the most recent pregnancy examination",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-appointment-next-examination"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Nächste Kontrolle | Prochain contrôle"
          }
        ]
      },
      {
        "id" : "Composition.section:pregProgress.entry:nextExamination.reference",
        "path" : "Composition.section.entry.reference",
        "min" : 1
      },
      {
        "id" : "Composition.section:pregProgress.section",
        "path" : "Composition.section.section",
        "max" : "0"
      }
    ]
  }
}

```
