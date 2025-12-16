# Module Questionnaire Address - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Module Questionnaire Address**

## Questionnaire: Module Questionnaire Address 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-address | *Version*:3.0.2 |
| Active as of 2022-05-09 | *Computable Name*:ModuleQuestionnaireAddress |
| **Copyright/Legal**: CC0-1.0 | |



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "ch-orf-module-address",
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
  "url" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-address",
  "version" : "3.0.2",
  "name" : "ModuleQuestionnaireAddress",
  "title" : "Module Questionnaire Address",
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
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
          "valueExpression" : {
            "language" : "text/fhirpath",
            "expression" : "%address.line"
          }
        }
      ],
      "linkId" : "streetAddressLine",
      "text" : "Strasse, Hausnummer, Postfach etc.",
      "type" : "string",
      "repeats" : true
    },
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
          "valueExpression" : {
            "language" : "text/fhirpath",
            "expression" : "%address.postalCode"
          }
        }
      ],
      "linkId" : "postalCode",
      "text" : "PLZ",
      "type" : "string"
    },
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
          "valueExpression" : {
            "language" : "text/fhirpath",
            "expression" : "%address.city"
          }
        }
      ],
      "linkId" : "city",
      "text" : "Ort",
      "type" : "string"
    },
    {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-initialExpression",
          "valueExpression" : {
            "language" : "text/fhirpath",
            "expression" : "%address.country"
          }
        }
      ],
      "linkId" : "country",
      "text" : "Land",
      "type" : "string"
    }
  ]
}

```
