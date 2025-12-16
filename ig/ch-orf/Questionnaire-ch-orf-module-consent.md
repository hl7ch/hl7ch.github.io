# Module Questionnaire Consent - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Module Questionnaire Consent**

## Questionnaire: Module Questionnaire Consent 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-consent | *Version*:3.0.2 |
| Active as of 2022-05-09 | *Computable Name*:ModuleQuestionnaireConsent |
| **Copyright/Legal**: CC0-1.0 | |



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "ch-orf-module-consent",
  "language" : "de-CH",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assemble-expectation",
      "valueCode" : "assemble-child"
    },
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assembleContext",
      "valueString" : "linkIdPrefix"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-consent",
  "version" : "3.0.2",
  "name" : "ModuleQuestionnaireConsent",
  "title" : "Module Questionnaire Patient Consent",
  "status" : "active",
  "date" : "2022-05-09",
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
      "linkId" : "consent.statement",
      "text" : "Ist der Patient über die Anmeldung informiert und explizit einverstanden?",
      "type" : "choice",
      "answerOption" : [
        {
          "valueCoding" : {
            "system" : "http://fhir.ch/ig/ch-orf/CodeSystem/ch-orf-cs-consentstatus",
            "code" : "ExplicitAgreement",
            "display" : "Patient is informed and has explicitly agreed"
          }
        },
        {
          "valueCoding" : {
            "system" : "http://fhir.ch/ig/ch-orf/CodeSystem/ch-orf-cs-consentstatus",
            "code" : "Other",
            "display" : "Other situation such as 'implicit agreement', 'agreed by legal guardian' etc."
          }
        }
      ],
      "item" : [
        {
          "linkId" : "consent.statement.note",
          "text" : "Anmerkung",
          "type" : "string"
        }
      ]
    }
  ]
}

```
