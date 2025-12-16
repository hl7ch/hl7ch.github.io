# Module Questionnaire Practitioner Name Tel - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Module Questionnaire Practitioner Name Tel**

## Questionnaire: Module Questionnaire Practitioner Name Tel 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-practitioner-nametel | *Version*:3.0.2 |
| Active as of 2022-05-09 | *Computable Name*:ModuleQuestionnairePractitionerNameTel |
| **Copyright/Legal**: CC0-1.0 | |



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "ch-orf-module-practitioner-nametel",
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
  "url" : "http://fhir.ch/ig/ch-orf/Questionnaire/ch-orf-module-practitioner-nametel",
  "version" : "3.0.2",
  "name" : "ModuleQuestionnairePractitionerNameTel",
  "title" : "Module Questionnaire Practitioner with Name and Telecom",
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
      "linkId" : "title",
      "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.prefix",
      "text" : "Titel",
      "type" : "string"
    },
    {
      "linkId" : "familyName",
      "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.family",
      "text" : "Name",
      "type" : "string"
    },
    {
      "linkId" : "givenName",
      "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.name.given",
      "text" : "Vorname",
      "type" : "string"
    },
    {
      "linkId" : "phone",
      "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.telecom.value",
      "text" : "Telefon",
      "type" : "string"
    },
    {
      "linkId" : "email",
      "definition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner#Practitioner.telecom.value",
      "text" : "E-Mail",
      "type" : "string"
    }
  ]
}

```
