# Module Questionnaire Coverage - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Module Questionnaire Coverage**

## Questionnaire: Module Questionnaire Coverage 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-coverage | *Version*:3.0.2 |
| Active as of 2022-05-04 | *Computable Name*:ModuleQuestionnaireOrderCoverage |
| **Copyright/Legal**: CC0-1.0 | |



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "ch-orf-module-coverage",
  "language" : "de-CH",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assemble-expectation",
      "valueCode" : "assemble-child"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-coverage",
  "version" : "3.0.2",
  "name" : "ModuleQuestionnaireOrderCoverage",
  "title" : "Module Questionnaire Order Coverage",
  "status" : "active",
  "date" : "2022-05-04",
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
  "item" : [
    {
      "linkId" : "coverage.beneficiary",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.beneficiary",
      "text" : "Begünstigter (Patient)",
      "type" : "group",
      "item" : [
        {
          "linkId" : "coverage.beneficiary.ahvn13",
          "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient#Patient.identifier:AHVN13",
          "text" : "AHV-Nr. des Patienten (fr/it: AVS)",
          "type" : "string"
        }
      ]
    },
    {
      "linkId" : "coverage.kvg",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.type",
      "text" : "Krankenkasse nach KVG (fr/it: LAMal)",
      "type" : "group",
      "item" : [
        {
          "linkId" : "coverage.kvg.name",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.payor",
          "text" : "Name der Versicherung",
          "type" : "string"
        },
        {
          "linkId" : "coverage.kvg.insuranceCardNumber",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.identifier",
          "text" : "Kennnummer der Versichertenkarte",
          "type" : "string"
        }
      ]
    },
    {
      "linkId" : "coverage.uvg",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.type",
      "text" : "Unfallversicherung nach UVG (fr: LAA, it: LAINF)",
      "type" : "group",
      "item" : [
        {
          "linkId" : "coverage.uvg.name",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.payor",
          "text" : "Name der Versicherung",
          "type" : "string"
        },
        {
          "linkId" : "coverage.uvg.claimNumber",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.identifier",
          "text" : "Schadennummer",
          "type" : "string"
        }
      ]
    },
    {
      "linkId" : "coverage.vvg",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.type",
      "text" : "Zusatzversicherung nach VVG (fr/it: LCA)",
      "type" : "group",
      "item" : [
        {
          "linkId" : "coverage.vvg.name",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.payor",
          "text" : "Name der Versicherung",
          "type" : "string"
        },
        {
          "linkId" : "coverage.vvg.insuranceCardNumber",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.identifier",
          "text" : "Kennnummer der Versichertenkarte",
          "type" : "string"
        }
      ]
    },
    {
      "linkId" : "coverage.iv",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.type",
      "text" : "Invalidenversicherung IV (fr/it: AI)",
      "type" : "group",
      "item" : [
        {
          "linkId" : "coverage.iv.verfuegungsnummer",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.identifier",
          "text" : "IV-Verfügungsnummer",
          "type" : "string"
        }
      ]
    },
    {
      "linkId" : "coverage.mv",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.type",
      "text" : "Militärversicherung MV (fr/it: AM)",
      "type" : "group",
      "item" : [
        {
          "linkId" : "coverage.mv.versichertennummer",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.identifier",
          "text" : "MV-Versichertennummer",
          "type" : "string"
        }
      ]
    },
    {
      "linkId" : "coverage.self",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.type",
      "text" : "Selbstzahler",
      "type" : "group",
      "item" : [
        {
          "linkId" : "coverage.self.patient",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.payor",
          "text" : "Patient selbst",
          "type" : "boolean"
        },
        {
          "linkId" : "coverage.self.patientRelatedPerson",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.payor",
          "text" : "Andere Person",
          "type" : "boolean",
          "enableWhen" : [
            {
              "question" : "coverage.self.patient",
              "operator" : "=",
              "answerBoolean" : false
            }
          ]
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/variable",
              "valueExpression" : {
                "name" : "linkIdPrefix",
                "language" : "text/fhirpath",
                "expression" : "'coverage.self.relatedPerson.'"
              }
            }
          ],
          "linkId" : "coverage.self.relatedPerson",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.payor",
          "text" : "Andere Person",
          "type" : "group",
          "enableWhen" : [
            {
              "question" : "coverage.self.patientRelatedPerson",
              "operator" : "=",
              "answerBoolean" : true
            }
          ],
          "item" : [
            {
              "linkId" : "coverage.self.relatedPerson.familyName",
              "definition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson#RelatedPerson.name.family",
              "text" : "Name",
              "type" : "string"
            },
            {
              "linkId" : "coverage.self.relatedPerson.givenName",
              "definition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson#RelatedPerson.name.given",
              "text" : "Vorname",
              "type" : "string"
            },
            {
              "linkId" : "coverage.self.relatedPerson.phone",
              "definition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson#RelatedPerson.telecom.value",
              "text" : "Telefon",
              "type" : "string",
              "repeats" : true
            },
            {
              "linkId" : "coverage.self.relatedPerson.email",
              "definition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson#RelatedPerson.telecom.value",
              "text" : "E-Mail",
              "type" : "string"
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-subQuestionnaire",
                  "valueCanonical" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-address|3.0.1"
                }
              ],
              "linkId" : "coverage.self.relatedPerson.1",
              "text" : "Unable to resolve 'address' sub-questionnaire",
              "type" : "display"
            }
          ]
        }
      ]
    },
    {
      "linkId" : "coverage.other",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.type",
      "text" : "Anderer Kostenträger",
      "type" : "group",
      "item" : [
        {
          "linkId" : "coverage.other.name",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.payor",
          "text" : "Name des Kostenträgers",
          "type" : "string"
        },
        {
          "linkId" : "coverage.other.id",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.identifier",
          "text" : "Beliebige ID",
          "type" : "string"
        },
        {
          "linkId" : "coverage.other.id.note",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-coverage#Coverage.identifier.type.text",
          "text" : "Bemerkung zur ID",
          "type" : "string"
        }
      ]
    }
  ]
}

```
